<div class="min-h-screen flex flex-row justify-center sm:justify-around items-center pt-6 sm:pt-0 bg-blue-400">
    {{-- <div>
        {{ $logo }}
    </div> --}}
    <div class="sm:block hidden">
        <img src="{{ asset('gambar-login.png') }}" alt="Logo Maserba" height="400" width="400">
    </div>
    
    <div class="w-10/12 sm:max-w-md mt-6 px-6 py-4 bg-gray-300 shadow-lg overflow-hidden sm:rounded-lg">
        
        {{ $slot }}
    </div>
    
</div>
