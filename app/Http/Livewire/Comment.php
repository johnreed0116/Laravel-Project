<?php

namespace App\Http\Livewire;

use App\Models\Content;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Comment extends Component
{
    public $record, $comment, $content_id, $IP;

    public function mount($id){
        $this->record = Content::findOrFail($id);
        $this->content_id = $this->record->id;
    }

    public function render()
    {
        return view('livewire.comment');
    }

    private function resetInput(){
        $this->comment = null;
        $this->content_id = null;
        $this->IP = null;
    }

    public function store(){

        if($this->content_id != null) {

            $userRoles = Auth::user()->roles->pluck('name');

            if($userRoles->contains('admin')){
                \App\Models\Comment::create([
                    'content_id' => $this->content_id,
                    'user_id' => Auth::id(),
                    'IP' => $_SERVER["REMOTE_ADDR"] ?? '127.0.0.1',
                    'comment' => $this->comment,
                    'status' => 'True'
                ]);
            } else {
                \App\Models\Comment::create([
                    'content_id' => $this->content_id,
                    'user_id' => Auth::id(),
                    'IP' => $_SERVER["REMOTE_ADDR"] ?? '127.0.0.1',
                    'comment' => $this->comment,
                    'status' => 'False'
                ]);
            }

            session()->flash('success', 'Comment send successfully.');

            $this->resetInput();

        } else {
            session()->flash('fail','The comment didn\'t send. Please refresh the page and try again.');
        }


    }
}
