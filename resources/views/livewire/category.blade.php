<div>
    <div class="bg-white p-3 rounded-xl shadow">
        <div class="pb-3">
            <x-button x-on:click="$openModal('addModal')" primary label="Tambah" icon="plus" class="!bg-primary-500"/>
        </div>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Katagori
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $category->name }}
                            </td>
                            <td class="px-6 py-4">
                                <x-mini-button wire:click="edit({{ $category->id }})" rounded icon="pencil" />
                                <x-mini-button wire:click="delete({{ $category->id }})" negative rounded icon="trash" />
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center p-4">Tidak ada data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <x-modal-card title="Tambah Kategori" wire:model="addModal">
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <div class="col-span-1 sm:col-span-2">
                <x-input wire:model="categoryName" label="Nama Kategori" placeholder="Novel" />
            </div>
        </div>
     
        <x-slot name="footer" class="flex justify-between gap-x-4">
            <x-button flat negative label="Delete" x-on:click="close" />
     
            <div class="flex gap-x-4">
                <x-button flat label="Cancel" x-on:click="close" />
     
                <x-button primary label="Save" wire:click="{{ $method }}" />
            </div>
        </x-slot>
    </x-modal-card>
</div>
