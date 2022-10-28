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

    protected $listeners = [
        'save-edit-confirm' => 'confirm',
        'cancel-edit' => 'cancelEdit',
    ];

    public function rules()
    {
        return [
          'title' => 'required|string',
          'details' => 'required|string',
          'remarks' => 'required|string',
          'deadline' => 'required|string',
        ];
    }

    public function mount(UserTaskService $userTaskService)
    {
      $this->attributes = $userTaskService->getUserTasks(Auth::id());
    }

    public function confirm()
    {
      $this->validate();
      // $this->save();
    }
  
    public function save(UserTaskService $userTaskService)
    {
        // try {
        //     $this->validate();
        // } catch (\Illuminate\Validation\ValidationException $e) {
        //     $this->dispatchBrowserEvent('validation-error', $e->errors());
        //     $this->validate();
        // }
        $attributes = [
            'user_id' => Auth::id(),
            'title' => $this->title,
            'details' => $this->details,
            'deadline' => $this->deadline,
        ];

        $userTaskService->update($attributes);
        $this->dispatchBrowserEvent('save-edit-confirm');
    }

    public function cancelEdit()
    {

    }

    public function render()
    {
        return view('livewire.user.user-task.show');
    }
}
