<div>
    <div>
        <flux:heading size="xl">Users</flux:heading>
    </div>
    <div>
        <flux:table :paginate="$this->users">
            <flux:table.columns>
                <flux:table.column>Name</flux:table.column>
                <flux:table.column>Email</flux:table.column>
            </flux:table.columns>

            <flux:table.rows>
                @foreach ($this->users as $user)
                    <flux:table.row :key="$user->id">
                        <flux:table.cell>{{ $user->name }}</flux:table-cell>
                        <flux:table.cell>{{ $user->email }}</flux:table.cell>
                    </flux:table.row>
                @endforeach
            </flux:table.rows>
        </flux:table>
    </div>
</div>
