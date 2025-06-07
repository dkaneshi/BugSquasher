<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

final class ListUsers extends Component
{
    use WithPagination;

    #[Computed]
    public function users(): LengthAwarePaginator
    {
        return User::query()->orderBy('name')->paginate(10);
    }

    public function render()
    {
        return view('livewire.list-users');
    }
}
