<?php

namespace App\Http\Livewire\User\UserProfile;

use Livewire\Component;

class Edit extends Component
{
    public $attributes;

    public ?string $name;
    public ?string $email;
    public ?string $birthday;

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
        $this->attributes = $attributes;
        // foreach ($attributes as $attribute) {
        //     $this->name = $attribute->name;
        //     $this->email = $attribute->email;
        //     $this->postcode = $attribute->postcode;
        //     $this->telephone = $attribute->telephone;
        //     $this->birthday = $attribute->birthday;
        //     $this->gender = $attribute->gender;
        // }
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
