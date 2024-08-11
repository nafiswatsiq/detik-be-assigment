<div>
    <div>
        <div class="pb-3 flex justify-between">
            <div>
                <x-button x-on:click="$openModal('openModal')" primary label="Tambah" icon="plus" class="!bg-primary-500"/>
                <x-button wire:click="export" positive label="Export" icon="arrow-up-tray" class="!bg-green-500"/>
            </div>
            
            <div class="w-60">
                <x-select label="" 
                    wire:model.live="filterCategory"
                    placeholder="Pilih Kategori"
                    :options="$categories" 
                    option-label="name" 
                    option-value="id"
                />
            </div>
        </div>
        <div class="mt-4">
            <div class="grid grid-cols-4 gap-4">
                @forelse ($books as $book)
                <x-card class="bg-white rounded-xl shadow">
                    <div class="relative w-full pb-[100%] overflow-hidden rounded-lg z-0">
                        <img class="absolute inset-0 w-full h-full object-cover object-center z-0" src="{{ asset('storage/'.$book->cover) }}" alt="">
                    </div>
                    <div class="mt-3">
                        <p class="font-semibold">{{ $book->title }}</p>
                        <p class="text-sm">Katrgori: {{ $book->category->name }}</p>
                        <p class="text-sm">Jumlah: {{ $book->quantity }}</p>
                        <p class="text-base">{{ $book->description }}</p>
                    </div>
                    <div class="mt-3">
                        <x-button wire:click="edit({{ $book->id }})" icon="pencil" primary label="Edit" class="!bg-primary-500"/>
                        <x-button wire:click="delete({{ $book->id }})" icon="trash" negative label="Hapus" class="!bg-red-500"/>
                    </div>
                </x-card>
                @empty
                <div class="col-span-4">
                    <p class="text-center">Tidak ada data</p>
                </div>
                @endforelse
            </div>
        </div>
    </div>

    <x-modal-card title="Tambah Buku" wire:model="openModal">
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <x-input wire:model.live="title" label="Judul" placeholder="" />

            <x-select label="Kategori" 
                wire:model="category"
                placeholder="Pilih Kategori"
                :options="$categories" 
                option-label="name" 
                option-value="id"
            />

            <x-input wire:model.live="quantity" type="number" label="Jumlah" placeholder="" />
            
            <div class="col-span-1 sm:col-span-2">
                <x-textarea wire:model="description" label="Deskripsi" placeholder="write your notes" />

                <x-input type="file" wire:model="cover" class="mt-3" label="Cover" placeholder=""/>
                @if ($cover) 
                    <img src="{{ $cover->temporaryUrl() }}">
                @endif
                <x-input type="file" wire:model="file" class="mt-3" label="File Buku" placeholder=""/>
            
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
