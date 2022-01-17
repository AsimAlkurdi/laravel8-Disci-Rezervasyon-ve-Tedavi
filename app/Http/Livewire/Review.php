<?php

namespace App\Http\Livewire;

use App\Models\Treatment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Review extends Component
{
    public $treatmentid,$record,$comment,$subject;

    public function mount($id)
    {
        $this->record = Treatment::findOrFail($id);
        $this->treatmentid =$this->record->id;
    }

    public function render()
    {
        return view('livewire.review');
    }

    public function resetInput()
    {
        $this->subject = null;
        $this->comment = null;
        $this->treatmentid = null;
        $this->ip = null;

    }
    public function store()
    {
        $this->validate([
            'subject' => 'required|min:5',
       'comment'  => 'required|min:5',

        ]);
        \App\Models\Review::create([
            'subject' => $this->subject ,
            'comment'  => $this->comment,
            'treatmentid'  => $this->treatmentid,
            'usersid'  => Auth::user()->id,
            'ip' =>$_SERVER['REMOTE_ADDR']

        ]);

        $this->resetInput();
    }
}
