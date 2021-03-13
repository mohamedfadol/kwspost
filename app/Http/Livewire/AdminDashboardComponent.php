<?php

namespace App\Http\Livewire;
use Rats\Zkteco\Lib\ZKTeco;
use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public $zk;
    public function render()
    {
        $zk = new ZKTeco('Hr.Aurages.net');
        $zk->connect();
        return $zk;
        return view('livewire.admin-dashboard-component',['zk' => $zk])->layout('layouts.base');
    }
}
