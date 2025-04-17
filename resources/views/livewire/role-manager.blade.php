<div class="container mx-auto mt-4">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        {{-- Table --}}
        <div class="col-span-1 md:col-span-2">
            <x-filament::card>
                <table class="w-full text-sm border border-gray-200 mt-4">
                    <thead class="bg-gray-100 dark:bg-gray-800 dark:text-gray-100">
                        <tr>
                            <th class="p-2 text-left">Name</th>
                            <th class="p-2 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($roles->isNotEmpty())
                            @foreach ($roles as $role)
                            <tr class="border-t">
                                <td class="p-2">{{ $role->name }}</td>
                                <td class="p-2 text-right">
                                        <button wire:click="edit({{ $role->id }})" class="text-blue-600 hover:text-blue-800">
                                            <x-heroicon-o-pencil class="w-5 h-5" />
                                        </button>
                                        <button wire:click="delete({{ $role->id }})"
                                            onclick="return confirm('Are you sure you want to delete this?')"
                                            class="text-red-600 hover:text-red-800">
                                        <x-heroicon-o-trash class="w-5 h-5" />
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="2" class="text-center p-2">No data available</td>
                            </tr>
                        @endif
                    </tbody>
                </table>

                {{ $roles->links() }} {{-- Pagination links --}}
            </x-filament::card>
        </div>

        {{-- Form Input --}}
        <div class="col-span-1 md:col-span-1">
            <x-filament::card>
                <form wire:submit.prevent="save" class="mt-4">
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium">Name</label>
                        <input type="text" id="name" wire:model="name" class="w-full p-2 border rounded" />
                        @error('name') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <x-filament::button type="submit" class="w-full color-primary">
                        Save
                    </x-filament::button>
                </form>
            </x-filament::card>
        </div>
    </div>
</div>
