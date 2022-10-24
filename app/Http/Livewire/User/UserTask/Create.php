<?php

namespace App\Http\Livewire\User\UserTask;

use App\Models\UserTask;
use App\Services\UserTaskService;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Create extends Component
{
    public UserTask $userTask;
    public string $title = '';
    public string $details = '';
    public string $deadline = '';

    protected $listeners = [
        'save-create-confirm' => 'confirm',
        'save-create' => 'save',
    ];

    public function rules()
    {
        return [
            'title' => ['required'],
            'details' => ['required'],
            // 'deadline' => ['nullable'],
        ];
    }

    public function mount() 
    {

    }
    public function confirm()
    {
        $this->dispatchBrowserEvent('save-create-confirm');
    }

    public function save(UserTaskService $userTaskService)
    {
        // try {
        //     dd($this->validate());
        // } catch (\Illuminate\Validation\ValidationException $e) {
        //     $this->dispatchBrowserEvent('validation-error', $e->errors());
        //     $this->validate();
        // }

        // $attributes = [
        //     'title' => $this->title,
        //     'details' => $this->details,
        //     'deadline' => $this->deadline,
        // ];

        // $userTaskService->create(Auth::id(), $attributes);
        $this->dispatchBrowserEvent('save-create-successful');
    }

    public function cancelEdit()
    {

    }

    public function render()
    {
        return view('livewire.user.user-task.create');
    }
}
