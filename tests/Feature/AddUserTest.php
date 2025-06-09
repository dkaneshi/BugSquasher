<?php

declare(strict_types=1);

use App\Livewire\AddUser;
use App\Models\User;

it('adds a new user', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    Livewire::test(AddUser::class)
        ->set('name', 'Test User')
        ->set('email', 'user@test.com')
        ->set('password', 'password')
        ->set('password_confirmation', 'password')
        ->call('addUser');

    $this->assertDatabaseHas('users', data: [
        'name' => 'Test User',
        'email' => 'user@test.com',
    ]);
});
