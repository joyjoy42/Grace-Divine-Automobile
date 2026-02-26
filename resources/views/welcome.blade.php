@extends('layouts.app')

@section('title', 'Grâce Divine Automobile - Garage Professionnel au Bénin')

@section('content')

{{-- ===== NAVBAR ===== --}}
<nav class="navbar" id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">
            <a href="#" class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-gold-400 to-gold-600 flex items-center justify-center">
                    <svg class="w-6 h-6 text-navy-900" fill="currentColor" viewBox="0 0 24 24"><path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/></svg>
                </div>
                <div>
                    <span class="text-white font-bold text-lg leading-tight block" style="font-family: var(--font-display);">Grâce Divine</span>
                    <span class="text-gold-400 text-xs font-medium tracking-widest uppercase">Automobile</span>
                </div>
            </a>

            {{-- Desktop Nav --}}
            <div class="hidden md:flex items-center gap-8">
                <a href="#services" class="text-gray-300 hover:text-gold-400 transition-colors text-sm font-medium">Services</a>
                <a href="#about" class="text-gray-300 hover:text-gold-400 transition-colors text-sm font-medium">À Propos</a>
                <a href="#testimonials" class="text-gray-300 hover:text-gold-400 transition-colors text-sm font-medium">Témoignages</a>
                <a href="#contact" class="text-gray-300 hover:text-gold-400 transition-colors text-sm font-medium">Contact</a>
                <a href="#booking" class="btn-primary text-sm !py-2.5 !px-5">Prendre RDV</a>
            </div>

            {{-- Hamburger --}}
            <button class="md:hidden text-white p-2" id="menu-toggle" aria-label="Menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path id="menu-icon-open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path id="menu-icon-close" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        {{-- Mobile Menu --}}
        <div class="mobile-menu md:hidden" id="mobile-menu">
            <div class="pt-4 pb-3 space-y-3">
                <a href="#services" class="block text-gray-300 hover:text-gold-400 transition-colors text-sm font-medium py-2">Services</a>
                <a href="#about" class="block text-gray-300 hover:text-gold-400 transition-colors text-sm font-medium py-2">À Propos</a>
                <a href="#testimonials" class="block text-gray-300 hover:text-gold-400 transition-colors text-sm font-medium py-2">Témoignages</a>
                <a href="#contact" class="block text-gray-300 hover:text-gold-400 transition-colors text-sm font-medium py-2">Contact</a>
                <a href="#booking" class="btn-primary text-sm !py-2.5 w-full text-center mt-2">Prendre RDV</a>
            </div>
        </div>
    </div>
</nav>

{{-- ===== 1. HERO SECTION ===== --}}
<section class="hero-gradient min-h-screen flex items-center pt-20 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="animate-fade-in-up">
                <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                    <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
                    <span class="text-gray-300 text-sm">Ouvert du Lundi au Samedi</span>
                </div>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl text-white leading-tight mb-6" style="font-family: var(--font-display);">
                    Votre Véhicule Mérite
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-gold-400 to-gold-600"> l'Excellence</span>
                </h1>
                <p class="text-gray-300 text-lg mb-8 max-w-lg leading-relaxed">
                    Entretien, réparation et diagnostic automobile par des experts certifiés. Plus de <strong class="text-white">10 ans d'expérience</strong> au service de votre confiance.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#booking" class="btn-primary text-base">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        Prendre Rendez-vous
                    </a>
                    <a href="tel:+22960000000" class="btn-outline">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        Appelez-nous
                    </a>
                </div>
            </div>
            <div class="hidden lg:block animate-slide-right">
                <div class="relative">
                    <div class="w-full h-96 rounded-2xl bg-gradient-to-br from-navy-600/50 to-navy-800/50 backdrop-blur-sm border border-white/10 flex items-center justify-center overflow-hidden">
                        <svg class="w-48 h-48 text-gold-400/20" fill="currentColor" viewBox="0 0 24 24"><path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/></svg>
                    </div>
                    {{-- Floating stats card --}}
                    <div class="absolute -bottom-6 -left-6 glass-card p-4 flex items-center gap-3">
                        <div class="w-12 h-12 rounded-full bg-green-500/20 flex items-center justify-center">
                            <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-navy-900">+2 500 véhicules</p>
                            <p class="text-xs text-gray-500">réparés avec succès</p>
                        </div>
                    </div>
                    {{-- Floating rating card --}}
                    <div class="absolute -top-4 -right-4 glass-card p-4 flex items-center gap-2">
                        <div class="flex text-yellow-400">
                            @for($i = 0; $i < 5; $i++)
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            @endfor
                        </div>
                        <span class="text-sm font-bold text-navy-900">4.9/5</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Wave divider --}}
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
            <path d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="#F8F9FA"/>
        </svg>
    </div>
</section>

{{-- ===== 2. WHY CHOOSE US (Trust Building) ===== --}}
<section class="py-20 bg-surface-light" id="why-us">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block text-gold-500 font-semibold text-sm tracking-widest uppercase mb-3">Pourquoi Nous Choisir</span>
            <h2 class="section-title text-navy-900">La Confiance, Notre Moteur</h2>
            <p class="section-subtitle">Des années d'expertise et un engagement sans faille pour la satisfaction de nos clients.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            {{-- Trust Badge 1 --}}
            <div class="glass-card p-6 text-center">
                <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-br from-blue-500/10 to-blue-600/10 flex items-center justify-center">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="font-bold text-navy-900 mb-2">Garantie Qualité</h3>
                <p class="text-sm text-gray-500">Pièces d'origine et travail garanti sur chaque intervention.</p>
            </div>
            {{-- Trust Badge 2 --}}
            <div class="glass-card p-6 text-center">
                <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-br from-green-500/10 to-green-600/10 flex items-center justify-center">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-navy-900 mb-2">Rapidité</h3>
                <p class="text-sm text-gray-500">Diagnostic rapide et réparation efficace pour minimiser votre attente.</p>
            </div>
            {{-- Trust Badge 3 --}}
            <div class="glass-card p-6 text-center">
                <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-br from-purple-500/10 to-purple-600/10 flex items-center justify-center">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                </div>
                <h3 class="font-bold text-navy-900 mb-2">Experts Certifiés</h3>
                <p class="text-sm text-gray-500">Une équipe de mécaniciens diplômés et expérimentés.</p>
            </div>
            {{-- Trust Badge 4 --}}
            <div class="glass-card p-6 text-center">
                <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-gradient-to-br from-amber-500/10 to-amber-600/10 flex items-center justify-center">
                    <svg class="w-8 h-8 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-bold text-navy-900 mb-2">Prix Transparents</h3>
                <p class="text-sm text-gray-500">Devis gratuit et détaillé avant toute intervention.</p>
            </div>
        </div>
    </div>
</section>

{{-- ===== 3. SERVICES SECTION ===== --}}
<section class="py-20 bg-white" id="services">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block text-gold-500 font-semibold text-sm tracking-widest uppercase mb-3">Nos Services</span>
            <h2 class="section-title text-navy-900">Des Solutions Complètes</h2>
            <p class="section-subtitle">De l'entretien courant aux réparations complexes, nous prenons soin de votre véhicule.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
            $services = [
                ['icon' => 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z M15 12a3 3 0 11-6 0 3 3 0 016 0z', 'title' => 'Mécanique Générale', 'desc' => 'Entretien périodique, vidange, freins, embrayage, distribution et toutes réparations mécaniques.', 'color' => 'blue'],
                ['icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'title' => 'Diagnostic Électronique', 'desc' => 'Lecture de codes défaut, diagnostic complet et résolution des pannes électroniques.', 'color' => 'green'],
                ['icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z', 'title' => 'Carrosserie & Peinture', 'desc' => 'Réparation de carrosserie, débosselage, peinture et finitions haut de gamme.', 'color' => 'red'],
                ['icon' => 'M13 10V3L4 14h7v7l9-11h-7z', 'title' => 'Électricité Auto', 'desc' => 'Installation, réparation des systèmes électriques, batteries et alternateurs.', 'color' => 'yellow'],
                ['icon' => 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15', 'title' => 'Climatisation', 'desc' => 'Recharge, entretien et réparation du système de climatisation de votre véhicule.', 'color' => 'cyan'],
                ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'title' => 'Contrôle Technique', 'desc' => 'Pré-contrôle technique complet pour assurer la conformité de votre véhicule.', 'color' => 'indigo'],
            ];
            @endphp

            @foreach($services as $service)
            <div class="service-card group">
                <div class="w-14 h-14 rounded-xl bg-{{ $service['color'] }}-100 flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
                    <svg class="w-7 h-7 text-{{ $service['color'] }}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $service['icon'] }}"/></svg>
                </div>
                <h3 class="text-xl font-bold text-navy-900 mb-3">{{ $service['title'] }}</h3>
                <p class="text-gray-500 text-sm leading-relaxed">{{ $service['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== Stats Bar ===== --}}
<section class="bg-gradient-to-r from-navy-900 via-navy-800 to-navy-900 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="stat-item">
                <div class="stat-number" data-target="10">10+</div>
                <div class="stat-label">Années d'Expérience</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-target="2500">2 500+</div>
                <div class="stat-label">Véhicules Réparés</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-target="98">98%</div>
                <div class="stat-label">Clients Satisfaits</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-target="15">15+</div>
                <div class="stat-label">Experts Mécaniciens</div>
            </div>
        </div>
    </div>
</section>

{{-- ===== 4. TESTIMONIALS SECTION ===== --}}
<section class="py-20 bg-surface-light" id="testimonials">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block text-gold-500 font-semibold text-sm tracking-widest uppercase mb-3">Témoignages</span>
            <h2 class="section-title text-navy-900">Ce que Disent nos Clients</h2>
            <p class="section-subtitle">La satisfaction de nos clients est notre plus belle récompense.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
            $testimonials = [
                ['name' => 'Koffi Adéchina', 'role' => 'Propriétaire Toyota Corolla', 'text' => 'Service exceptionnel ! Mon véhicule a été réparé en un temps record et le travail est impeccable. Je recommande vivement Grâce Divine Automobile.', 'rating' => 5],
                ['name' => 'Aïcha Moussa', 'role' => 'Propriétaire Hyundai Tucson', 'text' => 'Équipe très professionnelle et à l\'écoute. Les prix sont transparents et raisonnables. C\'est mon garage de confiance depuis 3 ans maintenant.', 'rating' => 5],
                ['name' => 'Pierre Dossou', 'role' => 'Propriétaire Mercedes Classe C', 'text' => 'Excellent diagnostic électronique. Ils ont résolu un problème que d\'autres garages n\'arrivaient pas à identifier. Bravo à toute l\'équipe !', 'rating' => 5],
            ];
            @endphp

            @foreach($testimonials as $testimonial)
            <div class="testimonial-card">
                <div class="flex items-center gap-1 mb-4">
                    @for($i = 0; $i < $testimonial['rating']; $i++)
                    <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    @endfor
                </div>
                <p class="text-gray-600 mb-6 leading-relaxed text-sm italic">"{{ $testimonial['text'] }}"</p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-navy-700 to-navy-900 flex items-center justify-center text-white font-bold text-sm">
                        {{ strtoupper(substr($testimonial['name'], 0, 1)) }}
                    </div>
                    <div>
                        <p class="font-semibold text-navy-900 text-sm">{{ $testimonial['name'] }}</p>
                        <p class="text-xs text-gray-500">{{ $testimonial['role'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== 5. ABOUT SECTION ===== --}}
<section class="py-20 bg-white" id="about">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <span class="inline-block text-gold-500 font-semibold text-sm tracking-widest uppercase mb-3">À Propos</span>
                <h2 class="section-title text-navy-900 text-left">L'Excellence Automobile depuis Plus de 10 Ans</h2>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    <strong class="text-navy-900">Grâce Divine Automobile</strong> est un garage professionnel basé au Bénin, spécialisé dans l'entretien et la réparation de tous types de véhicules. Notre engagement : offrir un service de qualité supérieure avec transparence et professionnalisme.
                </p>
                <p class="text-gray-600 mb-8 leading-relaxed">
                    Notre équipe de mécaniciens certifiés utilise des équipements de diagnostic modernes et des pièces de qualité pour garantir la longévité et la performance de votre véhicule.
                </p>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span class="text-sm font-medium text-navy-900">Pièces d'Origine</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span class="text-sm font-medium text-navy-900">Devis Gratuit</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span class="text-sm font-medium text-navy-900">Équipe Certifiée</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span class="text-sm font-medium text-navy-900">Suivi Client</span>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="w-full h-96 rounded-2xl bg-gradient-to-br from-navy-800 to-navy-900 flex items-center justify-center overflow-hidden">
                    <div class="text-center p-8">
                        <svg class="w-24 h-24 text-gold-400/30 mx-auto mb-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
                        <p class="text-gold-400 font-display text-2xl font-bold">Grâce Divine</p>
                        <p class="text-gray-400 text-sm mt-2">L'excellence au service de votre véhicule</p>
                    </div>
                </div>
                <div class="absolute -bottom-4 -right-4 bg-gold-400 rounded-xl p-6 shadow-lg">
                    <p class="text-navy-900 font-bold text-3xl" style="font-family: var(--font-display);">10+</p>
                    <p class="text-navy-900/70 text-sm font-medium">Ans d'expertise</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== 6. BOOKING FORM SECTION ===== --}}
<section class="py-20 bg-gradient-to-b from-surface-light to-white" id="booking">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block text-gold-500 font-semibold text-sm tracking-widest uppercase mb-3">Rendez-vous</span>
            <h2 class="section-title text-navy-900">Prenez Rendez-vous en Ligne</h2>
            <p class="section-subtitle">Remplissez le formulaire ci-dessous et nous vous contacterons dans les plus brefs délais.</p>
        </div>

        <div class="max-w-2xl mx-auto">
            {{-- Success Message --}}
            @if(session('success'))
            <div class="toast" id="success-toast">
                <div class="flex items-center gap-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    {{ session('success') }}
                </div>
            </div>
            @endif

            <div class="bg-white rounded-2xl shadow-xl p-8 sm:p-10 border border-gray-100">
                <form action="{{ route('bookings.store') }}" method="POST" id="booking-form">
                    @csrf

                    <div class="grid sm:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="name" class="form-label">Nom Complet *</label>
                            <input type="text" id="name" name="name" class="form-input" placeholder="Ex: Jean Dupont" value="{{ old('name') }}" required>
                            @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label for="email" class="form-label">Email *</label>
                            <input type="email" id="email" name="email" class="form-input" placeholder="Ex: jean@email.com" value="{{ old('email') }}" required>
                            @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div class="grid sm:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="phone" class="form-label">Téléphone *</label>
                            <input type="tel" id="phone" name="phone" class="form-input" placeholder="Ex: +229 60 00 00 00" value="{{ old('phone') }}" required>
                            @error('phone') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label for="service_type" class="form-label">Type de Service *</label>
                            <select id="service_type" name="service_type" class="form-input" required>
                                <option value="">Sélectionnez un service</option>
                                <option value="Mécanique Générale" {{ old('service_type') == 'Mécanique Générale' ? 'selected' : '' }}>Mécanique Générale</option>
                                <option value="Diagnostic Électronique" {{ old('service_type') == 'Diagnostic Électronique' ? 'selected' : '' }}>Diagnostic Électronique</option>
                                <option value="Carrosserie & Peinture" {{ old('service_type') == 'Carrosserie & Peinture' ? 'selected' : '' }}>Carrosserie & Peinture</option>
                                <option value="Électricité Auto" {{ old('service_type') == 'Électricité Auto' ? 'selected' : '' }}>Électricité Auto</option>
                                <option value="Climatisation" {{ old('service_type') == 'Climatisation' ? 'selected' : '' }}>Climatisation</option>
                                <option value="Contrôle Technique" {{ old('service_type') == 'Contrôle Technique' ? 'selected' : '' }}>Contrôle Technique</option>
                                <option value="Autre" {{ old('service_type') == 'Autre' ? 'selected' : '' }}>Autre</option>
                            </select>
                            @error('service_type') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div class="mb-8">
                        <label for="description" class="form-label">Description du Problème</label>
                        <textarea id="description" name="description" rows="4" class="form-input" placeholder="Décrivez brièvement le problème ou le service souhaité...">{{ old('description') }}</textarea>
                        @error('description') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <button type="submit" class="btn-primary w-full text-lg">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        Envoyer ma Demande
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

{{-- ===== 7. FOOTER / CONTACT SECTION ===== --}}
<footer class="bg-navy-900 text-white pt-20 pb-8" id="contact">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
            {{-- Brand --}}
            <div class="lg:col-span-1">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-gold-400 to-gold-600 flex items-center justify-center">
                        <svg class="w-6 h-6 text-navy-900" fill="currentColor" viewBox="0 0 24 24"><path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/></svg>
                    </div>
                    <div>
                        <span class="font-bold text-lg block" style="font-family: var(--font-display);">Grâce Divine</span>
                        <span class="text-gold-400 text-xs font-medium tracking-widest uppercase">Automobile</span>
                    </div>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Votre garage de confiance au Bénin. Expertise, qualité et transparence pour l'entretien de votre véhicule.
                </p>
            </div>

            {{-- Services --}}
            <div>
                <h4 class="font-bold text-lg mb-4" style="font-family: var(--font-display);">Services</h4>
                <ul class="space-y-3">
                    <li><a href="#services" class="text-gray-400 hover:text-gold-400 transition-colors text-sm">Mécanique Générale</a></li>
                    <li><a href="#services" class="text-gray-400 hover:text-gold-400 transition-colors text-sm">Diagnostic Électronique</a></li>
                    <li><a href="#services" class="text-gray-400 hover:text-gold-400 transition-colors text-sm">Carrosserie & Peinture</a></li>
                    <li><a href="#services" class="text-gray-400 hover:text-gold-400 transition-colors text-sm">Électricité Auto</a></li>
                    <li><a href="#services" class="text-gray-400 hover:text-gold-400 transition-colors text-sm">Climatisation</a></li>
                </ul>
            </div>

            {{-- Horaires --}}
            <div>
                <h4 class="font-bold text-lg mb-4" style="font-family: var(--font-display);">Horaires</h4>
                <ul class="space-y-3 text-sm">
                    <li class="flex justify-between text-gray-400">
                        <span>Lundi - Vendredi</span>
                        <span class="text-white font-medium">08h - 18h</span>
                    </li>
                    <li class="flex justify-between text-gray-400">
                        <span>Samedi</span>
                        <span class="text-white font-medium">08h - 14h</span>
                    </li>
                    <li class="flex justify-between text-gray-400">
                        <span>Dimanche</span>
                        <span class="text-accent-red-light font-medium">Fermé</span>
                    </li>
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h4 class="font-bold text-lg mb-4" style="font-family: var(--font-display);">Contact</h4>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-gold-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span class="text-gray-400 text-sm">Cotonou, Bénin</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-gold-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        <a href="tel:+22960000000" class="text-gray-400 hover:text-gold-400 transition-colors text-sm">+229 60 00 00 00</a>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-gold-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <a href="mailto:contact@gracedivine-auto.bj" class="text-gray-400 hover:text-gold-400 transition-colors text-sm">contact@gracedivine-auto.bj</a>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Bottom bar --}}
        <div class="border-t border-white/10 pt-8">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                <p class="text-gray-500 text-sm">&copy; {{ date('Y') }} Grâce Divine Automobile. Tous droits réservés.</p>
                <div class="flex items-center gap-4">
                    <a href="#" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center hover:bg-gold-400 hover:text-navy-900 transition-all text-gray-400">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center hover:bg-gold-400 hover:text-navy-900 transition-all text-gray-400">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // === Navbar scroll effect ===
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        navbar.classList.toggle('scrolled', window.scrollY > 50);
    });

    // === Mobile menu toggle ===
    const toggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const iconOpen = document.getElementById('menu-icon-open');
    const iconClose = document.getElementById('menu-icon-close');
    if (toggle) {
        toggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('open');
            iconOpen.classList.toggle('hidden');
            iconClose.classList.toggle('hidden');
        });
        // Close menu when clicking a link
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('open');
                iconOpen.classList.remove('hidden');
                iconClose.classList.add('hidden');
            });
        });
    }

    // === Smooth scroll for anchor links ===
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    // === Intersection Observer for animations ===
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in-up');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.service-card, .testimonial-card, .glass-card, .stat-item').forEach(el => {
        el.style.opacity = '0';
        observer.observe(el);
    });

    // === Auto-dismiss success toast ===
    const toast = document.getElementById('success-toast');
    if (toast) {
        setTimeout(() => toast.remove(), 5000);
    }
});
</script>
@endpush
