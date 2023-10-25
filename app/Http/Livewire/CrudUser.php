<?php

namespace App\Http\Livewire;

use App\Models\stand;
use App\Models\User;
use Livewire\Component;

class Cruduser extends Component
{
    public $user,$search;
    public $isOpen=false;
    protected $listeners=['render','delete'=>'delete'];

    protected $rules=[
        'user.name'=>'required',
        'user.email'=>'required',


    ];

    public function render(){
        //$partners=partner::orderBy('id','desc')->paginate();
        $users=User::where('name','like','%'.$this->search.'%')
                    ->orderBy('id','desc')->paginate(10);
        return view('livewire.crud-user',compact('users'));
    }

    public function create(){
        $this->isOpen=true;
        $this->reset(['user']);
    }
    public function store(){
        $this->validate();
        if(!isset($this->stand->id)){
            User::create($this->stand);
        }else{
            $this->stand->save();
        }
        $this->reset(['isOpen','stand']);
        $this->emitTo('CrudUser','render');
        $this->emit('alert','Registro creado satisfactoriamente');
    }

    public function edit(User $user){
        $this->user=$user;
        $this->isOpen=true;
    }
    public function delete(User $user){
        $user->delete();
    }

}
