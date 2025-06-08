<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

final class AddUser extends Component
{
    #[Validate('required|max:255')]
    public string $name = '';

    #[Validate('required|unique:users|email|max:255')]
    public string $email = '';

    #[Validate('required|min:8|max:255|confirmed')]
    public string $password = '';

    #[Validate('required|min:8|max:255')]
    public string $password_confirmation = '';

    public function addUser(): void
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        $this->reset(['name', 'email', 'password', 'password_confirmation']);

        $this->dispatch('user-added');
    }

    public function resetForm(): void
    {
        $this->reset(['name', 'email', 'password', 'password_confirmation']);
    }

    public function render()
    {
        return view('livewire.add-user');
    }
}
