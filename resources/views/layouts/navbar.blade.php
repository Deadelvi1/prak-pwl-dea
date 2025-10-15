<nav class="bg-gradient-to-r from-pink-500 via-purple-500 to-indigo-500 shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
          
            <div class="flex items-center">
                <a href="/" class="flex items-center space-x-2 text-white font-bold text-xl hover:text-pink-200 transition duration-300">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                    <span>PWL App</span>
                </a>
            </div>

            <div class="hidden md:flex items-center space-x-4">
                <a href="{{ route('user.index') }}" 
                   class="text-white hover:text-pink-200 px-3 py-2 rounded-md text-sm font-medium transition duration-300 flex items-center gap-2">
                    <i class="fas fa-users"></i>
                    <span>Daftar User</span>
                </a>
                <a href="{{ route('user.create') }}" 
                   class="text-white hover:text-pink-200 px-3 py-2 rounded-md text-sm font-medium transition duration-300 flex items-center gap-2">
                    <i class="fas fa-user-plus"></i>
                    <span>Tambah User</span>
                </a>
                <a href="{{ route('matakuliah.index') }}" 
                   class="text-white hover:text-pink-200 px-3 py-2 rounded-md text-sm font-medium transition duration-300 flex items-center gap-2">
                    <i class="fas fa-book"></i>
                    <span>Mata Kuliah</span>
                </a>
                <a href="{{ route('matakuliah.create') }}" 
                   class="text-white hover:text-pink-200 px-3 py-2 rounded-md text-sm font-medium transition duration-300 flex items-center gap-2">
                    <i class="fas fa-plus-circle"></i>
                    <span>Tambah MK</span>
                </a>
            </div>

            <div class="flex items-center space-x-4">
                <div class="flex items-center space-x-2 text-white">
                    <img src="{{asset('img/dea.png')}}" alt="Profile Photo" class="h-8 w-8 rounded-full border-2 border-white">
                    <span class="text-sm font-medium">Dea Delvinata</span>
                </div>
                
                <button class="md:hidden text-white hover:text-pink-200 focus:outline-none focus:text-pink-200">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white/10 backdrop-blur-sm rounded-lg mt-2">
                <a href="{{ route('user.index') }}" 
                   class="text-white hover:text-pink-200 block px-3 py-2 rounded-md text-base font-medium transition duration-300 flex items-center gap-2">
                    <i class="fas fa-users"></i>
                    <span>Daftar User</span>
                </a>
                <a href="{{ route('user.create') }}" 
                   class="text-white hover:text-pink-200 block px-3 py-2 rounded-md text-base font-medium transition duration-300 flex items-center gap-2">
                    <i class="fas fa-user-plus"></i>
                    <span>Tambah User</span>
                </a>
                <a href="{{ route('matakuliah.index') }}" 
                   class="text-white hover:text-pink-200 block px-3 py-2 rounded-md text-base font-medium transition duration-300 flex items-center gap-2">
                    <i class="fas fa-book"></i>
                    <span>Mata Kuliah</span>
                </a>
                <a href="{{ route('matakuliah.create') }}" 
                   class="text-white hover:text-pink-200 block px-3 py-2 rounded-md text-base font-medium transition duration-300 flex items-center gap-2">
                    <i class="fas fa-plus-circle"></i>
                    <span>Tambah MK</span>
                </a>
            </div>
        </div>
    </div>
</nav>