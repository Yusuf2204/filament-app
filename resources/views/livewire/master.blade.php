<div class="container mx-auto mt-4">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        {{-- Table --}}
        <div class="col-span-1 md:col-span-2">
            <x-filament::card>
                <table class="w-full text-sm border border-gray-200 mt-4">
                    <thead class="bg-gray-100 dark:bg-gray-800 dark:text-gray-100">
                        <tr>
                            @foreach ($grid as $g )
                                <th class="p-2 text-left">{{ $g['label'] }}</th>
                            @endforeach
                            <th class="p-2 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($data->isNotEmpty())
                            @foreach ($data as $d)
                            <tr class="border-t">
                                @foreach ( $grid as $dataGrid )
                                    @php
                                        $field = $dataGrid['field'];
                                        $value = $d->$field;
                                    @endphp
                                    @if ( $dataGrid['type'] == 'text')
                                        <td class="p-2">{{ $value }}</td>
                                    @endif
                                @endforeach
                                <td class="p-2 text-right">
                                    <button wire:click="edit({{ $d->$pK }})" class="text-blue-600 hover:text-blue-800">
                                        <x-heroicon-o-pencil class="w-5 h-5" />
                                    </button>
                                    <button wire:click="delete({{ $d->$pK }})"
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

                {{ $data->links() }} {{-- Pagination links --}}
            </x-filament::card>
        </div>

        {{-- Form Input --}}
        <div class="col-span-1 md:col-span-1">
            <x-filament::card>
                <form wire:submit.prevent="save" class="mt-4">
                    <div class="mb-4">
                        @foreach ($form as $f)
                            @if ($f['type'] == 'textarea')
                                <label for="name" class="block text-sm font-medium">{{ $f['label'] }}</label>
                                <input type="textarea" id="name" wire:model="{{ $f['field'] }}" class="w-full p-2 border rounded" />
                            @endif
                        @endforeach
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
