@extends('layouts.resort')

@section('title', 'Grand Bogor Resort & Botanical Sanctuary | Harmoni Alam & Kemewahan Tradisi di Ketinggian Puncak')

@section('content')

    <!-- HERO SECTION (Page 1 in PDF) -->
    <section class="relative min-h-[90vh] flex items-center justify-center bg-pine-950 overflow-hidden">
        <!-- Background Image with Luxury Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/resort/p1_11_87.jpg') }}" alt="Grand Bogor Resort Panorama" class="w-full h-full object-cover object-center scale-105 transform motion-safe:animate-pulse opacity-40 mix-blend-luminosity">
            <div class="absolute inset-0 bg-gradient-to-t from-pine-950 via-pine-900/80 to-pine-950/90"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center text-white">
            <!-- Top Tagline -->
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-emerald-900/60 border border-gold-500/40 text-gold-300 text-xs tracking-[0.2em] uppercase font-semibold mb-6 shadow-md backdrop-blur-xs">
                <span class="w-2 h-2 rounded-full bg-gold-400"></span>
                SANCTUARY TERSEMBUNYI DI CISARUA, PUNCAK
            </div>

            <!-- Main Headline -->
            <h1 class="font-serif text-3xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-white max-w-4xl mx-auto leading-tight sm:leading-tight lg:leading-tight mb-6">
                Harmoni Alam & Kemewahan Tradisi di Ketinggian Puncak Bogor
            </h1>

            <!-- Subheading -->
            <p class="text-stone-300 text-sm sm:text-base lg:text-lg max-w-3xl mx-auto leading-relaxed font-light mb-10">
                Sanctuary peristirahatan eksklusif di lereng Gunung Salak dengan panorama lembah pinus berkabut, kebun botani 12 hektar, dan kehangatan keramahan Pasundan autentik berpadu kemewahan modern.
            </p>

            <!-- Key Metric Chips -->
            <div class="flex flex-wrap justify-center items-center gap-4 sm:gap-8 mb-12 text-xs uppercase tracking-wider">
                <div class="bg-black/30 backdrop-blur-md px-5 py-2.5 rounded-xl border border-white/10 flex flex-col items-center">
                    <span class="text-stone-400 text-[10px]">KETINGGIAN</span>
                    <span class="text-gold-400 font-bold text-sm">1.150 mdpl</span>
                </div>
                <div class="bg-black/30 backdrop-blur-md px-5 py-2.5 rounded-xl border border-white/10 flex flex-col items-center">
                    <span class="text-stone-400 text-[10px]">SUHU SEJUK ALAMI</span>
                    <span class="text-gold-400 font-bold text-sm">18°C – 22°C</span>
                </div>
                <div class="bg-black/30 backdrop-blur-md px-5 py-2.5 rounded-xl border border-white/10 flex flex-col items-center">
                    <span class="text-stone-400 text-[10px]">PELAYANAN</span>
                    <span class="text-gold-400 font-bold text-sm">24/7 Private Butler</span>
                </div>
            </div>

            <!-- Quick Booking Search Widget (Authentic from Page 1 PDF) -->
            <div class="bg-white/95 backdrop-blur-md p-4 sm:p-6 rounded-2xl shadow-2xl border border-stone-200 text-stone-800 max-w-5xl mx-auto text-left">
                <form action="{{ url('/kontak') }}" method="GET" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 items-end">
                    <div>
                        <label class="block text-[11px] font-bold text-stone-500 uppercase tracking-wider mb-1.5">
                            Tanggal Check-in
                        </label>
                        <input type="date" name="check_in" value="{{ date('Y-m-d', strtotime('+1 day')) }}" class="w-full px-3 py-2.5 rounded-lg border border-stone-300 text-xs font-semibold focus:ring-2 focus:ring-pine-900 focus:outline-hidden">
                    </div>
                    <div>
                        <label class="block text-[11px] font-bold text-stone-500 uppercase tracking-wider mb-1.5">
                            Tanggal Check-out
                        </label>
                        <input type="date" name="check_out" value="{{ date('Y-m-d', strtotime('+3 days')) }}" class="w-full px-3 py-2.5 rounded-lg border border-stone-300 text-xs font-semibold focus:ring-2 focus:ring-pine-900 focus:outline-hidden">
                    </div>
                    <div>
                        <label class="block text-[11px] font-bold text-stone-500 uppercase tracking-wider mb-1.5">
                            Jumlah Tamu
                        </label>
                        <select name="guests" class="w-full px-3 py-2.5 rounded-lg border border-stone-300 text-xs font-semibold focus:ring-2 focus:ring-pine-900 focus:outline-hidden">
                            <option value="2 Dewasa">2 Dewasa, 0 Anak</option>
                            <option value="2 Dewasa 1 Anak">2 Dewasa, 1 Anak</option>
                            <option value="4 Dewasa">4 Dewasa (Family)</option>
                            <option value="6 Dewasa">6 Dewasa (Villa)</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-[11px] font-bold text-stone-500 uppercase tracking-wider mb-1.5">
                            Kategori Kamar
                        </label>
                        <select name="category" class="w-full px-3 py-2.5 rounded-lg border border-stone-300 text-xs font-semibold focus:ring-2 focus:ring-pine-900 focus:outline-hidden">
                            <option value="">Semua Kategori</option>
                            @foreach($categories as $cat)
                                <option value="{{ $cat->slug }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <button type="submit" class="w-full py-3 px-4 rounded-lg bg-pine-900 hover:bg-pine-850 text-gold-300 hover:text-white font-bold text-xs uppercase tracking-wider transition-all duration-200 shadow-md hover:shadow-lg flex items-center justify-center gap-2">
                            <svg class="w-4 h-4 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                            <span>Cek Ketersediaan</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- FILOSOFI PERISTIRAHATAN (Page 1 in PDF) -->
    <section class="py-24 bg-white border-b border-stone-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-xs uppercase tracking-[0.25em] font-bold text-gold-600 block mb-2">
                    FILOSOFI PERISTIRAHATAN
                </span>
                <h2 class="font-serif text-3xl sm:text-4xl font-bold text-pine-900 mb-4">
                    Kenyamanan Hakiki Bernuansa Alami
                </h2>
                <p class="text-stone-600 text-sm sm:text-base leading-relaxed font-light">
                    Setiap jengkal kawasan dirancang untuk menyelaraskan ketenangan jiwa Anda dengan lanskap hutan pinus tropis dan udara pegunungan yang murni.
                </p>
            </div>

            <!-- 3 Pillars Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1: Kebun Botani 12 Hektar -->
                <div class="group bg-stone-50 rounded-2xl overflow-hidden border border-stone-200/80 hover:border-gold-500/50 shadow-xs hover:shadow-xl transition-all duration-300">
                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ asset('images/resort/p1_33_336.jpg') }}" alt="Kebun Botani Pribadi 12 Hektar" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute top-4 left-4 bg-pine-900/90 backdrop-blur-xs text-gold-300 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider border border-gold-500/30">
                            12 Hektar Area Terbuka
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-serif text-xl font-bold text-pine-900 mb-2.5">
                            Kebun Botani Pribadi 12 Hektar
                        </h3>
                        <p class="text-stone-600 text-xs leading-relaxed mb-5">
                            Koleksi kurasi lebih dari 340 spesies flora tropis langka, lintasan jalan santai beraroma pinus segar, serta gazebo meditasi di tepi aliran sungai alami lereng Salak.
                        </p>
                        <a href="{{ url('/tentang-kami') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-pine-900 group-hover:text-gold-600 transition">
                            <span>Jelajahi Jalur Botani</span>
                            <svg class="w-3.5 h-3.5 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Card 2: Infinity Pool Air Hangat -->
                <div class="group bg-stone-50 rounded-2xl overflow-hidden border border-stone-200/80 hover:border-gold-500/50 shadow-xs hover:shadow-xl transition-all duration-300">
                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ asset('images/resort/p1_34_336.jpg') }}" alt="Infinity Pool Air Hangat Pegunungan" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute top-4 left-4 bg-pine-900/90 backdrop-blur-xs text-gold-300 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider border border-gold-500/30">
                            Air Hangat 34°C
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-serif text-xl font-bold text-pine-900 mb-2.5">
                            Infinity Pool Air Hangat Pegunungan
                        </h3>
                        <p class="text-stone-600 text-xs leading-relaxed mb-5">
                            Berenang dengan kenyamanan air termal hangat terkontrol 34°C seraya menyaksikan matahari terbenam spektakuler di balik siluet kemegahan Gunung Salak.
                        </p>
                        <a href="{{ url('/galeri') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-pine-900 group-hover:text-gold-600 transition">
                            <span>Lihat Fasilitas Akuatik</span>
                            <svg class="w-3.5 h-3.5 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Card 3: Gastronomi Pasundan & Fine Dining -->
                <div class="group bg-stone-50 rounded-2xl overflow-hidden border border-stone-200/80 hover:border-gold-500/50 shadow-xs hover:shadow-xl transition-all duration-300">
                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ asset('images/resort/p1_35_354.jpg') }}" alt="Gastronomi Pasundan & Fine Dining" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute top-4 left-4 bg-pine-900/90 backdrop-blur-xs text-gold-300 text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider border border-gold-500/30">
                            Farm-to-Table Dining
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-serif text-xl font-bold text-pine-900 mb-2.5">
                            Gastronomi Pasundan & Fine Dining
                        </h3>
                        <p class="text-stone-600 text-xs leading-relaxed mb-5">
                            Cita rasa warisan priangan dan internasional diolah oleh master chef menggunakan bahan-bahan organik yang dipetik setiap fajar dari kebun hidroponik resor.
                        </p>
                        <a href="{{ url('/kontak') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-pine-900 group-hover:text-gold-600 transition">
                            <span>Daftar Menu & Reservasi Restoran</span>
                            <svg class="w-3.5 h-3.5 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- KOLEKSI HUNIAN EKSKLUSIF (3 Showcase Rooms from Page 1 PDF) -->
    <section class="py-24 bg-stone-100/70 border-b border-stone-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12 gap-4">
                <div>
                    <span class="text-xs uppercase tracking-[0.25em] font-bold text-gold-600 block mb-2">
                        KOLEKSI HUNIAN EKSKLUSIF
                    </span>
                    <h2 class="font-serif text-3xl sm:text-4xl font-bold text-pine-900">
                        Kamar, Suite, & Private Villa
                    </h2>
                </div>
                <div>
                    <a href="{{ url('/kontak') }}" class="text-xs font-bold text-pine-900 hover:text-gold-600 flex items-center gap-1 border-b border-pine-900 pb-1">
                        <span>Lihat Semua 48 Unit Kamar</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            <!-- 3 Authentic Showcase Rooms Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                
                <!-- Room 1: Deluxe Forest View (DF-102) -->
                <div class="bg-white rounded-2xl overflow-hidden border border-stone-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col">
                    <div class="relative h-72 overflow-hidden">
                        <img src="{{ asset('images/resort/p1_1_161.jpg') }}" alt="Deluxe Forest View" class="w-full h-full object-cover">
                        <div class="absolute top-4 left-4 bg-black/60 backdrop-blur-xs text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                            2 Tamu Dewasa
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-baseline mb-2">
                                <h3 class="font-serif text-2xl font-bold text-pine-900">Deluxe Forest View</h3>
                                <span class="text-xs font-bold text-gold-600 bg-amber-50 px-2 py-0.5 rounded border border-amber-200">48 m²</span>
                            </div>
                            <p class="text-stone-600 text-xs leading-relaxed mb-4">
                                Balkon privat langsung menghadap keteduhan hutan pinus dengan kasur King Koil Signature, shower marmer pegunungan, dan pencahayaan hangat.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-6">
                                <span class="px-2.5 py-1 rounded-md bg-stone-100 text-[11px] font-medium text-stone-600">Balkon Privat</span>
                                <span class="px-2.5 py-1 rounded-md bg-stone-100 text-[11px] font-medium text-stone-600">Wi-Fi 6</span>
                                <span class="px-2.5 py-1 rounded-md bg-stone-100 text-[11px] font-medium text-stone-600">Nespresso</span>
                            </div>
                        </div>
                        <div class="pt-4 border-t border-stone-100 flex items-center justify-between">
                            <div>
                                <span class="text-[10px] uppercase tracking-wider text-stone-600 block">TARIF PER MALAM</span>
                                <span class="font-serif text-xl font-bold text-pine-900">Rp 1.850.000</span>
                            </div>
                            <a href="{{ url('/kontak?room=DF-102#reservasi') }}" class="px-5 py-2.5 rounded-lg bg-pine-900 hover:bg-pine-850 text-gold-300 hover:text-white text-xs font-bold uppercase tracking-wider transition">
                                Pesan
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Room 2: Grand Executive Suite (ES-304) -->
                <div class="bg-white rounded-2xl overflow-hidden border-2 border-gold-500/70 shadow-lg hover:shadow-2xl transition-all duration-300 flex flex-col relative">
                    <div class="absolute -top-3 right-6 bg-gold-500 text-pine-950 text-[10px] font-extrabold px-3 py-0.5 rounded-full uppercase tracking-wider shadow-sm z-20">
                        PALING DIMINATI
                    </div>
                    <div class="relative h-72 overflow-hidden">
                        <img src="{{ asset('images/resort/p1_2_202.jpg') }}" alt="Grand Executive Suite" class="w-full h-full object-cover">
                        <div class="absolute top-4 left-4 bg-black/60 backdrop-blur-xs text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                            Hingga 3 Tamu
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-baseline mb-2">
                                <h3 class="font-serif text-2xl font-bold text-pine-900">Grand Executive Suite</h3>
                                <span class="text-xs font-bold text-gold-600 bg-amber-50 px-2 py-0.5 rounded border border-amber-200">86 m²</span>
                            </div>
                            <p class="text-stone-600 text-xs leading-relaxed mb-4">
                                Ruang tamu terpisah, bathtub marmer freestanding dengan panorama gunung, serta akses istimewa ke exclusive evening cocktail lounge.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-6">
                                <span class="px-2.5 py-1 rounded-md bg-stone-100 text-[11px] font-medium text-stone-600">Bathtub Marmer</span>
                                <span class="px-2.5 py-1 rounded-md bg-stone-100 text-[11px] font-medium text-stone-600">Ruang Duduk</span>
                                <span class="px-2.5 py-1 rounded-md bg-stone-100 text-[11px] font-medium text-stone-600">Akses Lounge</span>
                            </div>
                        </div>
                        <div class="pt-4 border-t border-stone-100 flex items-center justify-between">
                            <div>
                                <span class="text-[10px] uppercase tracking-wider text-stone-600 block">TARIF PER MALAM</span>
                                <span class="font-serif text-xl font-bold text-pine-900">Rp 3.400.000</span>
                            </div>
                            <a href="{{ url('/kontak?room=ES-304#reservasi') }}" class="px-5 py-2.5 rounded-lg bg-pine-900 hover:bg-pine-850 text-gold-300 hover:text-white text-xs font-bold uppercase tracking-wider transition">
                                Pesan
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Room 3: Presidential Pine Villa (PV-001) -->
                <div class="bg-white rounded-2xl overflow-hidden border border-stone-200 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col">
                    <div class="relative h-72 overflow-hidden">
                        <img src="{{ asset('images/resort/p1_3_230.jpg') }}" alt="Presidential Pine Villa" class="w-full h-full object-cover">
                        <div class="absolute top-4 left-4 bg-black/60 backdrop-blur-xs text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                            Kapasitas 6 Tamu
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-baseline mb-2">
                                <h3 class="font-serif text-2xl font-bold text-pine-900">Presidential Pine Villa</h3>
                                <span class="text-xs font-bold text-gold-600 bg-amber-50 px-2 py-0.5 rounded border border-amber-200">210 m²</span>
                            </div>
                            <p class="text-stone-600 text-xs leading-relaxed mb-4">
                                Kenyamanan tanpa kompromi: 3 kamar tidur, kolam renang hangat pribadi, gazebo BBQ, dapur koki, dan layanan dedicated private butler 24 jam.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-6">
                                <span class="px-2.5 py-1 rounded-md bg-stone-100 text-[11px] font-medium text-stone-600">Private Pool</span>
                                <span class="px-2.5 py-1 rounded-md bg-stone-100 text-[11px] font-medium text-stone-600">Gazebo BBQ</span>
                                <span class="px-2.5 py-1 rounded-md bg-stone-100 text-[11px] font-medium text-stone-600">24h Butler</span>
                            </div>
                        </div>
                        <div class="pt-4 border-t border-stone-100 flex items-center justify-between">
                            <div>
                                <span class="text-[10px] uppercase tracking-wider text-stone-600 block">TARIF PER MALAM</span>
                                <span class="font-serif text-xl font-bold text-pine-900">Rp 7.800.000</span>
                            </div>
                            <a href="{{ url('/kontak?room=PV-001#reservasi') }}" class="px-5 py-2.5 rounded-lg bg-pine-900 hover:bg-pine-850 text-gold-300 hover:text-white text-xs font-bold uppercase tracking-wider transition">
                                Pesan
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- DESTINASI TERPADU: FASILITAS REKREASI & RELAKSASI (Page 1 in PDF) -->
    <section id="fasilitas" class="py-24 bg-pine-900 text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-xs uppercase tracking-[0.25em] font-bold text-gold-400 block mb-2">
                    DESTINASI TERPADU
                </span>
                <h2 class="font-serif text-3xl sm:text-4xl font-bold text-white mb-4">
                    Fasilitas Rekreasi & Relaksasi Bintang Lima
                </h2>
                <p class="text-stone-300 text-sm sm:text-base leading-relaxed font-light">
                    Dari peremajaan raga di spa berbasis rempah tradisional hingga penyelenggaraan konvensi megah bertaraf internasional.
                </p>
            </div>

            <!-- Lotus Spa Banner Highlight (Authentic from Page 1 PDF) -->
            <div class="bg-pine-950/80 rounded-3xl overflow-hidden border border-emerald-800/60 shadow-2xl mb-12 grid grid-cols-1 lg:grid-cols-12 items-center">
                <div class="lg:col-span-7 h-80 lg:h-96 relative overflow-hidden">
                    <img src="{{ asset('images/resort/p1_4_362.jpg') }}" alt="Lotus Spa & Wellness Ritual" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-transparent to-pine-950/80 hidden lg:block"></div>
                </div>
                <div class="lg:col-span-5 p-8 sm:p-12 space-y-4">
                    <span class="text-gold-400 text-xs font-bold uppercase tracking-[0.2em] block">
                        HOLISTIC SANCTUARY
                    </span>
                    <h3 class="font-serif text-2xl sm:text-3xl font-bold text-white">
                        Lotus Spa & Wellness Ritual
                    </h3>
                    <p class="text-stone-300 text-xs sm:text-sm leading-relaxed font-light">
                        Terapi pijat relaksasi warisan Sunda Kuno memadukan minyak asiri cengkih, serai wangi, dan lulur beras merah organik untuk memulihkan vitalitas tubuh seutuhnya.
                    </p>
                    <div class="pt-2">
                        <a href="{{ url('/kontak') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg bg-gold-500 hover:bg-gold-400 text-pine-950 font-bold text-xs uppercase tracking-wider transition shadow-md">
                            <span>Buku Janji Temu Perawatan</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 3 Secondary Facility Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-pine-850 p-6 rounded-2xl border border-emerald-800/40">
                    <h4 class="font-serif text-lg font-bold text-gold-300 mb-2">Salak Heated Pool</h4>
                    <p class="text-xs text-stone-300 leading-relaxed">Kolam berpemanas panorama 180° menghadap punggung Gunung Salak.</p>
                </div>
                <div class="bg-pine-850 p-6 rounded-2xl border border-emerald-800/40">
                    <h4 class="font-serif text-lg font-bold text-gold-300 mb-2">Sky Cigar & Lounge</h4>
                    <p class="text-xs text-stone-300 leading-relaxed">Koleksi sommelier anggur berkelas dan cerutu premium nusantara.</p>
                </div>
                <div class="bg-pine-850 p-6 rounded-2xl border border-emerald-800/40">
                    <h4 class="font-serif text-lg font-bold text-gold-300 mb-2">Grand Ballroom MICE</h4>
                    <p class="text-xs text-stone-300 leading-relaxed">Kapasitas hingga 1.000 pax tanpa pilar dengan tata suara akustik kelas dunia.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- KEPERCAYAAN & KEPUASAN TAMU (Guest Reviews from Page 1 PDF) -->
    <section class="py-24 bg-white border-b border-stone-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-xs uppercase tracking-[0.25em] font-bold text-gold-600 block mb-2">
                    KEPERCAYAAN & KEPUASAN TAMU
                </span>
                <h2 class="font-serif text-3xl sm:text-4xl font-bold text-pine-900 mb-4">
                    Kesan Tak Terlupakan di Setiap Sudut Sanctuary
                </h2>
                <p class="text-stone-600 text-sm sm:text-base leading-relaxed font-light mb-8">
                    Kisah nyata dari para tamu istimewa kami yang menemukan ketenangan sejati di tengah sejuknya kebun botani Grand Bogor Resort.
                </p>

                <!-- Rating Stats Highlight Box -->
                <div class="inline-flex flex-wrap justify-center items-center gap-6 px-6 py-3 rounded-2xl bg-stone-50 border border-stone-200 text-stone-800 text-xs">
                    <div class="flex items-center gap-2">
                        <span class="font-serif text-2xl font-bold text-pine-900">4.9</span>
                        <div class="flex text-amber-400 text-sm">★★★★★</div>
                    </div>
                    <span class="text-stone-400">|</span>
                    <span class="font-medium text-stone-600">Dari <strong>1.480+</strong> ulasan terverifikasi</span>
                    <span class="text-stone-400">|</span>
                    <span class="text-emerald-700 font-semibold">100% Tamu Resmi</span>
                    <span class="text-stone-400">|</span>
                    <span class="text-gold-600 font-semibold">Top 3 Luxury Bogor Excellence Award 2024</span>
                </div>
            </div>

            <!-- 3 Guest Review Cards (Authentic from Page 1 PDF) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Review 1 -->
                <div class="bg-stone-50 p-8 rounded-2xl border border-stone-200/80 flex flex-col justify-between">
                    <p class="text-stone-700 text-xs sm:text-sm leading-relaxed italic mb-6">
                        “Suasana hening yang sangat langka ditemukan di kawasan Puncak saat ini. Menikmati teh herbal di beranda Presidential Villa dengan latar pinus berselimut kabut pagi adalah definisi liburan impian keluarga kami.”
                    </p>
                    <div class="pt-4 border-t border-stone-200/60 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-pine-900 text-gold-300 font-bold flex items-center justify-center text-xs">
                            DR
                        </div>
                        <div>
                            <h4 class="text-xs font-bold text-pine-900">Dr. Raden H. Sasongko</h4>
                            <span class="text-[11px] text-stone-500 block">Menginap di Presidential Pine Villa</span>
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="bg-stone-50 p-8 rounded-2xl border border-stone-200/80 flex flex-col justify-between">
                    <p class="text-stone-700 text-xs sm:text-sm leading-relaxed italic mb-6">
                        “Layanan private butlernya luar biasa responsif dan sopan. Lotus Spa memberikan pengalaman terapi paling menenangkan yang pernah saya rasakan di Indonesia. Suhu kolam air hangatnya sangat pas di cuaca malam 19°C.”
                    </p>
                    <div class="pt-4 border-t border-stone-200/60 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-pine-900 text-gold-300 font-bold flex items-center justify-center text-xs">
                            AL
                        </div>
                        <div>
                            <h4 class="text-xs font-bold text-pine-900">Amelia Laksmono, B.Arch</h4>
                            <span class="text-[11px] text-stone-500 block">Menginap di Grand Executive Suite</span>
                        </div>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="bg-stone-50 p-8 rounded-2xl border border-stone-200/80 flex flex-col justify-between">
                    <p class="text-stone-700 text-xs sm:text-sm leading-relaxed italic mb-6">
                        “Penyelenggaraan annual leadership retreat korporasi kami di Grand Ballroom berjalan tanpa cela. Koneksi internet kencang, hidangan prasmanan lezat dengan cita rasa Sunda autentik, dan atmosfer sejuk membuat seluruh delegasi segar.”
                    </p>
                    <div class="pt-4 border-t border-stone-200/60 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-pine-900 text-gold-300 font-bold flex items-center justify-center text-xs">
                            BW
                        </div>
                        <div>
                            <h4 class="text-xs font-bold text-pine-900">Bambang Wicaksono</h4>
                            <span class="text-[11px] text-stone-500 block">Managing Director, Jakarta Tech Venture</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DIRECT PRIVILEGE (Keuntungan Reservasi Langsung from Page 1 PDF) -->
    <section class="py-20 bg-gradient-to-br from-pine-950 via-pine-900 to-pine-950 text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="bg-pine-850/90 rounded-3xl p-8 sm:p-14 border border-gold-500/40 shadow-2xl text-center max-w-4xl mx-auto">
                <span class="text-gold-400 text-xs font-bold uppercase tracking-[0.25em] block mb-3">
                    KEUNTUNGAN RESERVASI LANGSUNG (DIRECT PRIVILEGE)
                </span>
                <h2 class="font-serif text-2xl sm:text-4xl font-bold text-white mb-6">
                    Dapatkan Complimentary Botanical High-Tea & Layanan Jemputan Eksklusif
                </h2>
                <p class="text-stone-300 text-xs sm:text-sm leading-relaxed font-light max-w-2xl mx-auto mb-8">
                    Pesan langsung melalui portal resmi kami untuk menikmati jaminan harga terbaik, gratis sajian High-Tea sore untuk 2 orang, diskon perawatan Lotus Spa 20%, serta layanan penjemputan gratis dari stasiun Bogor atau Bandara Soekarno-Hatta (khusus pemesanan tipe Villa).
                </p>

                <!-- Privilege Badges -->
                <div class="flex flex-wrap justify-center items-center gap-4 text-xs font-semibold text-emerald-200 mb-8">
                    <span class="px-3.5 py-1.5 rounded-full bg-emerald-950 border border-emerald-700/60">✓ Best Rate Guarantee</span>
                    <span class="px-3.5 py-1.5 rounded-full bg-emerald-950 border border-emerald-700/60">✓ Bebas Pembatalan hingga H-3</span>
                    <span class="px-3.5 py-1.5 rounded-full bg-emerald-950 border border-emerald-700/60">✓ Early Check-in Sesuai Ketersediaan</span>
                </div>

                <div>
                    <a href="{{ url('/kontak#reservasi') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-gold-500 hover:bg-gold-400 text-pine-950 font-bold text-xs sm:text-sm uppercase tracking-wider transition-all duration-300 shadow-xl hover:-translate-y-0.5">
                        <span>Klaim Penawaran Eksklusif</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
                <p class="text-[11px] text-stone-400 mt-4">* Berlaku untuk periode menginap sepanjang tahun 2025</p>
            </div>
        </div>
    </section>

@endsection
