<header x-data="{ open: false, service: false }" class="fixed top-6 left-0 right-0 z-50">
    <div class="flex justify-center px-4">

        <nav
            class="w-full max-w-6xl flex items-center justify-between px-6 py-3 rounded-full bg-white/70 backdrop-blur-xl shadow-lg">

            {{-- LOGO --}}
            <a href="/" class="flex items-center">
                <img src="/img/logo.webp" class="max-w-[90px]" alt="logo">
            </a>

            {{-- MENU DESKTOP --}}
            <ul class="hidden md:flex items-center gap-6">

                <li>
                    <a href="/"
                        class="px-3 py-1 text-sm rounded-full transition 
                    {{ request()->is('/') ? 'text-purple-600 bg-purple-100' : 'text-gray-600 hover:text-purple-600' }}">
                        Beranda
                    </a>
                </li>

                {{-- DROPDOWN --}}
                <li class="relative group">

                    <button class="px-3 py-1 text-sm text-gray-600 hover:text-purple-600 flex items-center gap-1">
                        Layanan
                    </button>

                    <div
                        class="absolute left-0 top-full mt-3 w-56 rounded-xl bg-white shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all">

                        <ul class="py-2">

                            <li>
                                <a href="/jasa-pembuatan-website"
                                    class="block px-4 py-2 text-sm text-gray-600 hover:bg-purple-50 hover:text-purple-600">
                                    Pos Kasir Digital
                                </a>
                            </li>
                            <li>
                                <a href="/jasa-pembuatan-website"
                                    class="block px-4 py-2 text-sm text-gray-600 hover:bg-purple-50 hover:text-purple-600">
                                    QR Code Ordering
                                </a>
                            </li>
                            <li>
                                <a href="/jasa-pembuatan-website"
                                    class="block px-4 py-2 text-sm text-gray-600 hover:bg-purple-50 hover:text-purple-600">
                                    Manajemen Menu
                                </a>
                            </li>
                            <li>
                                <a href="/jasa-pembuatan-website"
                                    class="block px-4 py-2 text-sm text-gray-600 hover:bg-purple-50 hover:text-purple-600">
                                    Pembayaran Cashless
                                </a>
                            </li>



                        </ul>

                    </div>

                </li>

                <li>
                    <a href="/tentang-kami" class="px-3 py-1 text-sm text-gray-600 hover:text-purple-600">
                        Tentang Kami
                    </a>
                </li>

                <li>
                    <a href="/blog" class="px-3 py-1 text-sm text-gray-600 hover:text-purple-600">
                        Blog
                    </a>
                </li>

                <li>
                    <a href="/kontak" class="px-3 py-1 text-sm text-gray-600 hover:text-purple-600">
                        Kontak
                    </a>
                </li>

            </ul>

            {{-- BUTTON --}}
            <div class="hidden md:flex gap-3">
                <a href="/kontak"
                    class="px-5 py-2 rounded-full bg-purple-600 text-white text-sm hover:bg-purple-700 transition">
                    Konsultasi
                </a>
            </div>

            {{-- MOBILE BUTTON --}}
            <button @click="open=!open" class="flex md:hidden text-xl">
                ☰
            </button>

        </nav>

    </div>


    {{-- MOBILE MENU --}}
    <div x-show="open" x-transition class="md:hidden mt-4 mx-4 rounded-3xl bg-white/80 backdrop-blur-xl shadow-xl p-6">

        <ul class="flex flex-col gap-4">

            <li>
                <a href="/" class="text-gray-700">Beranda</a>
            </li>

            {{-- DROPDOWN MOBILE --}}
            <li>

                <button @click="service=!service" class="w-full flex justify-between items-center text-gray-700">
                    Layanan
                    <span x-text="service ? '-' : '+'"></span>
                </button>

                <ul x-show="service" x-transition class="ml-4 mt-2 flex flex-col gap-2 text-sm">

                    <li>
                        <a href="" class="text-gray-600">
                            Pos Kasir Digital
                        </a>
                    </li>

                    <li>
                        <a href="" class="text-gray-600">
                            QR Code Ordering
                        </a>
                    </li>
                    <li>
                        <a href="" class="text-gray-600">
                            Manajemen Menu
                        </a>
                    </li>
                    <li>
                        <a href="" class="text-gray-600">
                            Pembayaran Cashless
                        </a>
                    </li>

                </ul>

            </li>

            <li>
                <a href="/tentang-kami" class="text-gray-700">Tentang Kami</a>
            </li>

            <li>
                <a href="/blog" class="text-gray-700">Blog</a>
            </li>

            <li>
                <a href="/kontak" class="text-gray-700">Kontak</a>
            </li>

        </ul>

        <div class="mt-6 flex justify-center">
            <a href="/kontak" class="px-6 py-2 rounded-full bg-purple-600 text-white">
                Konsultasi
            </a>
        </div>

    </div>

</header>
