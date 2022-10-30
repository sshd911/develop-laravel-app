<?php

namespace App\Http\Livewire\User\Dashboard;

use Livewire\Component;
use App\Models\UserTask;

class Show extends Component
{
    public $limitPerPage = 10;

    protected $listeners = [
        'load-more' => 'loadMore'
    ];

    public function loadMore()
    {
        $this->limitPerPage = $this->limitPerPage + 10;
    }

    public function getUsertask()
    {
        if (auth()->id()) {
            $attributes = UserTask::where('user_id', '!=', auth()->id());
        } else {
            $attributes = UserTask::whereNotNull('created_at'); // {{ -- TODO -- }}
        }
        return $attributes;
    }

    public function render()
    {
        $attributes = $this->getUsertask()->latest()->paginate($this->limitPerPage);
        $this->emit('userStore');
        return view('livewire.user.dashboard.show', ['attributes' => $attributes]);
    }
}
