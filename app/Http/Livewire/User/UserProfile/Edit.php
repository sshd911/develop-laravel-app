<?php

namespace App\Http\Livewire\User\UserProfile;

use App\Services\UserProfileService;
use App\Services\UserService;
use DateTime;
use Livewire\Component;

class Edit extends Component
{
    public $attributes;
    public ?string $name;
    public ?string $email;
    public ?String $birthday;

    protected $listeners = [
        'save-edit-confirm' => 'confirm',
        'save-edit' => 'save',
    ];

    public function rules()
    {
        return [
            'name' => 'required|string|max:10',
            'email' => 'required|string',
            'birthday' => 'required|string',
        ];
    }

    public function mount($attributes)
    {
        $this->attributes = $attributes;
        foreach ($attributes as $attribute) {
            $this->email = $attribute->email;
            $this->name = $attribute->name;
            $this->birthday = $attribute->birthday;
        }
    }

    public function confirm()
    {
        $this->dispatchBrowserEvent('save-edit-confirm');
    }

    public function save(UserService $userService, UserProfileService $userProfileService)
    {
        $this->validate();
        $userProfileattributes = [
            'birthday' => $this->birthday,
        ];

        $userAttributes = [
            'email' => $this->email,
            'name' => $this->name,
        ];
        $userService->update(auth()->id(), $userAttributes);
        $userProfileService->update(auth()->id(), $userProfileattributes);
        $this->dispatchBrowserEvent('save-edit-successful');
    }

    public function cancelEdit()
    {
        foreach ($this->attributes as $attribute) {
            $this->email = $attribute->email;
            $this->name = $attribute->name;
            $this->birthday = (new DateTime($attribute->birthday))->format('Y年m月d日');
        }
    }

    public function render()
    {
        return view('livewire.user.user-profile.edit');
    }
}
