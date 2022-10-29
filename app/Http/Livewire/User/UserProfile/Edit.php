<?php

namespace App\Http\Livewire\User\UserProfile;

use DateTime;
use Livewire\Component;

class Edit extends Component
{
    public ?string $name;
    public ?string $email;
    public ?String $birthday;

    protected $listeners = [
        'save-create-confirm' => 'confirm',
        'save-create' => 'save',
    ];

    public function rules()
    {
        return [

        ];
    }

    public function mount($attributes)
    {
        foreach ($attributes as $attribute) {
            $this->email = $attribute->email;
            $this->name = $attribute->name;
            $this->birthday = (new DateTime($attribute->birthday))->format('Y年m月d日');
        }
    }

    public function confirm()
    {
        $this->dispatchBrowserEvent('save-create-confirm');
    }

    public function save()
    {

    }

    public function cancelEdit()
    {

    }

    public function render()
    {
        return view('livewire.user.user-profile.edit');
    }
}
