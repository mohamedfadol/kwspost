<?php

namespace App\Http\Livewire;

use App\Models\Designation;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class DesignationComponent extends Component
{
    public $ids;
    public $name;
    public $Details;


    public function resetFormInputs()
    {
        $this->ids = '';
        $this->name = '';
        $this->Details = '';
    }

    public function store()
    {
        $validationData = $this->validate([
            'name' => 'required' ,
            'Details' => 'nullable'
        ]);

        if(!$validationData);
        {
            $designation = new Designation();
            $designation->name = $this->name;
            $designation->Details = $this->Details;
            $designation->save();
            session()->flash('message','designation Add Done');
            $this->resetFormInputs();
            $this->emit('designation-added');
        }
    }

    public function edit($id)
    {
        $designation = Designation::where('id',$id)->first();
        $this->ids = $designation->id;
        $this->name = $designation->name;
        $this->Details = $designation->Details;
    }

    public function update()
    {
        $this->validate(['name' => 'required']);
        if($this->ids)
        {
            $designation = Designation::find($this->ids);
            $designation->update(['name' => $this->name , 'Details' => $this->Details ]);
            session()->flash('message','designation Udated Done');
            $this->resetFormInputs();
            $this->emit('designation-update');
        }
    }

    public function destroy($id)
    {
        if($id){
            Designation::where('id',$id)->delete();
            session()->flash('message','designation Deleted Done');
        }


    }
    public function render()
    {
        return view('livewire.designation-component',
            ['designationes' => Designation::paginate(10)])
        ->layout('layouts.base');
    }
}
