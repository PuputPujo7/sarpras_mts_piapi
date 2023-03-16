@if (filled($brand = config('filament.brand')))
    <div @class([
        'filament-brand text-xl font-bold tracking-tight',
        'dark:text-white' => config('filament.dark_mode'),
    ])>
        {{-- {{ $brand }} --}}
        <div class="" style="">
            <div><img src="{{ asset('sisarpras-logo.png') }}" alt="Logo" class="h-15"></div>
        </div>
    </div>
@endif
