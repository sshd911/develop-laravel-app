<?php

namespace App\Http\Livewire\User\UserTask;

use App\Models\UserTask;
use Livewire\Component;

class Create extends Component
{
    public UserTask $userTask;
    public string $title;
    public string $detail;
    public string $deadline;

    protected $listeners = [

    ];

    public function rules()
    {
        return [
            'title' => 'required',
            'details' => 'required',
            'deadline' => 'required',
        ];
    }

    public function mount()
    {

    }

    public function save()
    {

    }

    public function cancelEdit()
    {

    }

    public function render()
    {
        return view('livewire.user.user-task.create');
    }
}
