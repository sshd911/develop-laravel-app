<?php

namespace App\Http\Livewire;

use App\Models\UserTask;
use Livewire\Component;

class UserTasks extends Component
{
    public UserTask $userTask;
    public string $title;
    public string $detail;
    public string $deadline;

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

    public function render()
    {
        return view('livewire.user-tasks');
    }
}