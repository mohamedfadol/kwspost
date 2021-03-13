<?php

namespace App\Http\Livewire\Department;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class DepartmentComponent extends Component
{
    use WithFileUploads;

    public $ids;
    public $title;
    public $description;
    public $active  = 0;
    public $file;
    public $files = [];

    public function resetFormInputs()
    {
        $this->ids = '';
        $this->title = '';
        $this->description = '';
        $this->active = 0;
        $this->file = '';
        $this->files = [];
    }

    public function store()
    {
        $validationData = $this->validate([
            'title' => 'required' ,
            'description' => 'nullable' ,
            'active' => 'nullable' ,
            'file' => 'nullable' ,
            'files' => 'nullable'
        ]);

        if(!$validationData);
        {
            $category = new Category();
            $category->title = $this->title;
            $category->description = $this->description;
            $category->active = $this->active;
            $fileName = Carbon::now()->timestamp. '.' . $this->file->extension();
            $this->file->storeAs('images',$fileName);
            $category->file = $fileName;
            foreach ($this->files as $file) {
                $file->store('files');
            }
            //$category->files = $this->files;
            $category->save();
            session()->flash('message','Category Add Done');
            $this->resetFormInputs();
            $this->emit('category-added');
        }
    }

    public function edit($id)
    {
        $category = Category::where('id',$id)->first();
        $this->ids = $category->id;
        $this->title = $category->title;
        $this->description = $designation->description;
        $this->active = $designation->active;
        $this->file = $designation->file;
        $this->files = $designation->files;

    }

    public function update()
    {
        $this->validate([
            'title' => 'required' ,
            'description' => 'nullable' ,
            'active' => 'nullable' ,
            'file' => 'nullable|image|max:1024' ,
            'files' => 'nullable|image|max:1024'
            ]);
        if($this->ids)
        {
            $category = Category::find($this->ids);
            $category->update([
                'title' => $this->title ,
                'description' => $this->description ,
                'active' => $this->active ,
                'file' => $this->file ,
                'files' => $this->files
                ]);
            session()->flash('message','Category Updated Done');
            $this->resetFormInputs();
            $this->emit('category-update');
        }
    }

    public function destroy($id)
    {
        if($id){
            Category::where('id',$id)->delete();
            session()->flash('message','Category Deleted Done');
        }


    }
    public function render()
    {
        return view('livewire.department.department-component',
            ['categories' => Category::paginate(10)])
            ->layout('layouts.base');
    }
}
