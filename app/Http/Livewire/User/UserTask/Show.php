<?php

namespace App\Http\Livewire\User\UserTask;

use App\Models\UserTask;
use App\Services\UserTaskService;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Show extends Component
{
    public UserTask $userTask;
    public UserTaskService $userTaskService;
    public $attributes;
    public bool $showModal = false;

    protected $listeners = [

    ];

    public function rules()
    {
        return [];
    }

    public function mount(UserTaskService $userTaskService)
    {
      $this->attributes = $userTaskService->getUserTasks(Auth::id());
    }

    public function save()
    {
      // dd('a');
    }

    public function cancelEdit()
    {

    }

    public function render()
    {
        return view('livewire.user.user-task.show');
    }
}
