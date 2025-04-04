<x-filament-panels::page>
    <div class="max-w-md mx-auto mt-8 overflow-hidden shadow-lg rounded-lg bg-white dark:bg-gray-800">
        <div class="px-6 py-4">
            <div class="text-xl font-bold text-center">
                Change Password
            </div>

            <form wire:submit.prevent="updatePassword" class="space-y-6 mt-4">
                {{ $this->form }}

                <x-filament::button type="submit" class="w-full">
                    Save
                </x-filament::button>
            </form>
        </div>
    </div>
</x-filament-panels::page>
