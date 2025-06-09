<?php

declare(strict_types=1);

use App\Livewire\Users;
use App\Models\User;
use Livewire\Livewire;

test('guests are redirected to the login page', function () {
    $response = $this->get('/users');

    $response->assertRedirect('/login');
});

it('authenticated users can visit the users page', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->get('/users');

    $response->assertStatus(200);
});

it('renders the add user form', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    Livewire::test(Users::class)
        ->assertSuccessful()
        ->assertSee('Add User')
        ->assertSee('Name')
        ->assertSee('Email')
        ->assertSee('Password')
        ->assertSee('Password Confirmation');
});

it('renders the users table', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    Livewire::test(Users::class)
        ->assertSuccessful()
        ->assertSee($user->name)
        ->assertSee($user->email);
});

