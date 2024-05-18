<x-layouts.app>
    <x-layout._hero />
    <livewire:search />


    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        {{-- <livewire:listing-card />
    <livewire:listing-card /> --}}

        @foreach ($listings as $item)
            @livewire('listing-card', ['item' => $item])

            {{-- <livewire:listing-card /> --}}
        @endforeach
    </div>


</x-layouts.app>
