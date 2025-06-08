<div>
    <flux:card class="spacy-y-4">
        <div class="mb-4">
            <flux:heading size="lg">Add User</flux:heading>
        </div>
        <div>
            <form wire:submit="addUser" class="space-y-4">
                <div class="mb-4">
                    <flux:field>
                        <flux:label>Name</flux:label>
                        <flux:input wire:model="name"/>
                        <flux:error name="name"/>
                    </flux:field>
                </div>

                <div class="mb-4">
                    <flux:field>
                        <flux:label>Email</flux:label>
                        <flux:input wire:model="email" type="email"/>
                        <flux:error name="email"/>
                    </flux:field>
                </div>

                <div class="mb-4">
                    <flux:field>
                        <flux:label>Password</flux:label>
                        <flux:input wire:model="password" type="password"/>
                        <flux:error name="password"/>
                    </flux:field>
                </div>

                <div class="mb-4">
                    <flux:field>
                        <flux:label>Password Confirmation</flux:label>
                        <flux:input wire:model="password_confirmation" type="password"/>
                        <flux:error name="password_confirmation"/>
                    </flux:field>
                </div>

                <div class="mb-4">
                    <flux:button type="submit" :loading="true">Add User</flux:button>
                    <flux:button type="button" wire:click="resetForm">Reset</flux:button>
                </div>
            </form>
        </div>
    </flux:card>
</div>
