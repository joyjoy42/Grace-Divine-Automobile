@extends('layouts.app')

@section('title', 'Nos Formations - Grâce Divine Automobile')

@section('content')

{{-- ===== NAVBAR ===== --}}
<nav class="navbar scrolled" id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-lg bg-white overflow-hidden flex items-center justify-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Grace Divine Automobile Logo" class="w-full h-full object-contain">
                </div>
                <div>
                    <span class="text-white font-bold text-lg leading-tight block" style="font-family: var(--font-display);">Grâce Divine</span>
                    <span class="text-gold-400 text-xs font-medium tracking-widest uppercase">Automobile</span>
                </div>
            </a>

            {{-- Desktop Nav --}}
            <div class="hidden md:flex items-center gap-8">
                <a href="{{ route('home') }}" class="text-gray-300 hover:text-gold-400 transition-colors text-sm font-medium">Accueil</a>
                <a href="{{ route('home') }}#services" class="text-gray-300 hover:text-gold-400 transition-colors text-sm font-medium">Services</a>
                <a href="{{ route('formations.index') }}" class="text-gold-400 text-sm font-bold border-b-2 border-gold-400 pb-1">Formations</a>
                <a href="{{ route('home') }}#about" class="text-gray-300 hover:text-gold-400 transition-colors text-sm font-medium">À Propos</a>
                <a href="{{ route('home') }}#contact" class="text-gray-300 hover:text-gold-400 transition-colors text-sm font-medium">Contact</a>
                <a href="{{ route('home') }}#booking" class="btn-primary text-sm !py-2.5 !px-5">Prendre RDV</a>
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
                <a href="{{ route('home') }}" class="block text-gray-300 hover:text-gold-400 transition-colors text-sm font-medium py-2">Accueil</a>
                <a href="{{ route('home') }}#services" class="block text-gray-300 hover:text-gold-400 transition-colors text-sm font-medium py-2">Services</a>
                <a href="{{ route('formations.index') }}" class="block text-gold-400 font-bold text-sm py-2">Formations</a>
                <a href="{{ route('home') }}#about" class="block text-gray-300 hover:text-gold-400 transition-colors text-sm font-medium py-2">À Propos</a>
                <a href="{{ route('home') }}#contact" class="block text-gray-300 hover:text-gold-400 transition-colors text-sm font-medium py-2">Contact</a>
                <a href="{{ route('home') }}#booking" class="btn-primary text-sm !py-2.5 w-full text-center mt-2">Prendre RDV</a>
            </div>
        </div>
    </div>
</nav>

<section class="pt-32 pb-20 bg-surface-light min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="inline-block text-gold-500 font-semibold text-sm tracking-widest uppercase mb-3">Nos Formations</span>
            <h1 class="section-title text-navy-900">Formez-vous aux Métiers de l'Automobile</h1>
            <p class="section-subtitle">Découvrez nos programmes de formation professionnelle et montez en compétences avec nos experts.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            @forelse($formations as $formation)
            <div class="service-card group !p-0 overflow-hidden flex flex-col">
                <div class="h-48 bg-navy-800 relative overflow-hidden">
                    {{-- Placeholder for image --}}
                    <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-navy-700 to-navy-900">
                         <svg class="w-16 h-16 text-gold-400/20" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"/></svg>
                    </div>
                    <div class="absolute top-4 right-4 bg-gold-400 text-navy-900 text-xs font-bold px-3 py-1.5 rounded-full shadow-lg">
                        {{ $formation->duration }}
                    </div>
                </div>
                <div class="p-6 flex-grow flex flex-col">
                    <h3 class="text-xl font-bold text-navy-900 mb-3">{{ $formation->title }}</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6 flex-grow">{{ $formation->description }}</p>
                    <div class="flex items-center justify-between mt-auto pt-6 border-t border-gray-100">
                        <span class="text-xl font-bold text-navy-900">{{ number_format($formation->price, 0, ',', ' ') }} FCFA</span>
                        <a href="{{ route('home') }}#booking" class="text-gold-500 font-bold text-sm flex items-center gap-2 group-hover:gap-3 transition-all">
                            S'inscrire
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-20">
                <p class="text-gray-500">Aucune formation disponible pour le moment.</p>
            </div>
            @endforelse
        </div>

        {{-- Pagination --}}
        <div class="mt-12 flex justify-center">
            {{ $formations->links('pagination::tailwind') }}
        </div>
    </div>
</section>

{{-- Footer integration --}}
<footer class="bg-navy-900 text-white pt-20 pb-8">
     <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 border-t border-white/10 pt-8">
            <p class="text-gray-500 text-sm">&copy; {{ date('Y') }} Grâce Divine Automobile. Tous droits réservés.</p>
            <a href="{{ route('home') }}" class="text-gold-400 hover:text-white transition-colors text-sm font-medium flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                Retour à l'accueil
            </a>
        </div>
    </div>
</footer>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('navbar');
    // Force scrolled class on this page as it doesn't have a hero with transparency
    navbar.classList.add('scrolled');

    // Mobile menu toggle
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
    }
});
</script>
@endpush
