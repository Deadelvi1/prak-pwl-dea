<footer class="bg-gradient-to-r from-gray-800 via-gray-900 to-black text-white py-8 mt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
       
            <div class="text-center md:text-left">
                <div class="flex items-center justify-center md:justify-start space-x-2 mb-4">
                    <svg class="w-8 h-8 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                    <h3 class="text-xl font-bold text-pink-400">PWL App</h3>
                </div>
                <p class="text-gray-300 text-sm">
                    Aplikasi manajemen data mahasiswa dan mata kuliah yang modern dan efisien.
                </p>
            </div>

            <div class="text-center md:text-left">
                <h4 class="text-lg font-semibold mb-4 text-pink-400">Quick Links</h4>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('user.index') }}" class="text-gray-300 hover:text-pink-400 transition duration-300 flex items-center justify-center md:justify-start gap-2">
                            <i class="fas fa-users text-sm"></i>
                            <span>Daftar User</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user.create') }}" class="text-gray-300 hover:text-pink-400 transition duration-300 flex items-center justify-center md:justify-start gap-2">
                            <i class="fas fa-user-plus text-sm"></i>
                            <span>Tambah User</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('matakuliah.index') }}" class="text-gray-300 hover:text-pink-400 transition duration-300 flex items-center justify-center md:justify-start gap-2">
                            <i class="fas fa-book text-sm"></i>
                            <span>Mata Kuliah</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="text-center md:text-left">
                <h4 class="text-lg font-semibold mb-4 text-pink-400">Developer Info</h4>
                <div class="space-y-2">
                    <div class="flex items-center justify-center md:justify-start gap-2 text-gray-300">
                        <i class="fas fa-user text-sm"></i>
                        <span>Dea Delvinata Riyan</span>
                    </div>
                    <div class="flex items-center justify-center md:justify-start gap-2 text-gray-300">
                        <i class="fas fa-id-card text-sm"></i>
                        <span>2317051027</span>
                    </div>
                    <div class="flex items-center justify-center md:justify-start gap-2 text-gray-300">
                        <i class="fas fa-graduation-cap text-sm"></i>
                        <span>Pemrograman Web Lanjut</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-700 mt-8 pt-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm text-center md:text-left">
                    © 2024 PWL App. Dibuat dengan ❤️ 
                </p>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-pink-400 transition duration-300">
                        <i class="fab fa-github text-lg"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-pink-400 transition duration-300">
                        <i class="fab fa-linkedin text-lg"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-pink-400 transition duration-300">
                        <i class="fab fa-twitter text-lg"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>