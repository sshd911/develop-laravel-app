<?php

namespace App\Http\Livewire\User\UserTask;

use App\Models\UserProfile;
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
            'title' => 'required|string|min:5',
            'details' => 'required|string|min:10',
            'deadline' => 'nullable',
        ];
    }

    public function mount() 
    {

    }

    public function confirm()
    {
        // dd('d');
        // try {
        //     $this->validate();
        // } catch (\Illuminate\Validation\ValidationException $e) {
        //     $this->dispatchBrowserEvent('validation-error', $e->errors());
        //     $this->validate();
        // }
        // dd('d2');
        $this->dispatchBrowserEvent('save-create-confirm');
    }

    public function save(UserTaskService $userTaskService)
    {
        $attributes = [
            'user_id' => UserProfile::where('user_id', '=', Auth::id())->pluck('user_id')[0],
            'title' => $this->title,
            'details' => $this->details,
            'deadline' => $this->deadline,
        ];
        $this->title = '';
        $this->details = '';
        $this->deadline = '';
        $userTaskService->create($attributes);
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
