@php
    use App\Models\Hello;
@endphp

<div class="flex flex-col h-screen w-64">
    <div class="p-4 border">
        <h1 class="text-lg font-bold text-center">
            {{ Hello::inRandomOrder()->first()->text }}, Joenathan 👋
        </h1>
    </div>

    <div class="flex-1 overflow-y-auto border">

        {{-- category --}}
        <div x-data="{ isCategoryVisible: true, isInputVisible: false }" class="border-y">
            <div @click="isCategoryVisible = !isCategoryVisible" class="category select-none hover:bg-gray-100 border-b-white hover:cursor-pointer p-2 flex justify-between items-center">
                <span>Kalkulus 1</span>
                <div class="flex items-center space-x-1">
                    <button class="px-2 cursor-crosshair border" x-text="isCategoryVisible ? 'v' : 'ʌ'"></button>
                    <button @click.stop="isInputVisible = !isInputVisible" class="px-2 cursor-crosshair border">+</button>
                </div>
            </div>

            {{-- new note input --}}
            <div x-show="isInputVisible" class="border-y justify-between items-center">
                <form>
                    <input type="text" placeholder="Judul catatan" class="w-full py-1 px-2" x-ref="titleInput" x-init="$watch('isInputVisible', value => { if (value) $refs.titleInput.focus() })">
                </form>
            </div>

            {{-- list note --}}
            <div x-show="isCategoryVisible" class="notes border-y">

                <div class="px-2 flex justify-between items-center hover:cursor-pointer hover:bg-gray-100">
                    <h1>Pertemuan 1</h1>
                    <h1>19/10/2024</h1>
                </div>

            </div>
        </div>

        {{-- category --}}
        <div x-data="{ isCategoryVisible: true, isInputVisible: false }" class="border-y">
            <div @click="isCategoryVisible = !isCategoryVisible" class="category select-none hover:bg-gray-100 border-b-white hover:cursor-pointer p-2 flex justify-between items-center">
                <span>Aljabar Linear</span>
                <div class="flex items-center space-x-1">
                    <button class="px-2 cursor-crosshair border" x-text="isCategoryVisible ? 'v' : 'ʌ'"></button>
                    <button @click.stop="isInputVisible = !isInputVisible" class="px-2 cursor-crosshair border">+</button>
                </div>
            </div>

            {{-- new note input --}}
            <div x-show="isInputVisible" class="border-y justify-between items-center">
                <form>
                    <input type="text" placeholder="Judul catatan" class="w-full py-1 px-2" x-ref="titleInput" x-init="$watch('isInputVisible', value => { if (value) $refs.titleInput.focus() })">
                </form>
            </div>

            {{-- list note --}}
            <div x-show="isCategoryVisible" class="notes border-y">

                <div class="px-2 flex justify-between items-center hover:cursor-pointer hover:bg-gray-100">
                    <h1>Matriks</h1>
                    <h1>23/10/2024</h1>
                </div>

            </div>
        </div>

    </div>

    <div class="cursor-crosshair hover:bg-gray-100 p-4 sticky bottom-0 border text-center">
        <span class="py-1 px-2">Tambah</span>
    </div>
</div>
