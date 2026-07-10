@extends('layouts.app')

@section('content')
    {{-- @include('partials.page-header') --}}

    <section id="hero" class="section-home bg-stone-50 overflow-hidden">
        <!-- Alterado para min-h-dvh para dar flexibilidade no mobile e desktop -->
        <div class="container min-h-dvh grid grid-cols-1 lg:grid-cols-2 gap-12 py-12">
            
            <!-- Removido o h-dvh e md:w-dvh daqui. O Grid cuida da largura automaticamente -->
            <div class="prose lg:prose-lg prose-a:no-underline prose-h2:mt-0 prose-h2:text-xl text-left leading-loose flex flex-col w-full">
                <h1 class="text-secondary text-4xl md:text-6xl lg:text-7xl">
                    Tudo para o seu jardim na Garagem das Plantas
                </h1>
                <h2 class="text-primary-dark">
                    Plantas ornamentais, insumos de qualidade e projetos paisagísticos. A sua solução completa para cultivar beleza e bem-estar.
                </h2>
                
                <div class="mt-10 flex flex-col sm:flex-row gap-4 sm:items-center">
                    <!-- CTA Principal (Foco no E-commerce) - Ajustado com o hover do Tailwind v4 para manter o texto branco -->
                    <a href="/catalogo"
                        class="inline-flex items-center justify-center px-6 py-3.5 border border-transparent text-base font-medium rounded-xl text-white hover:text-white bg-primary hover:bg-primary-dark/80 transition-colors duration-300 shadow-sm shadow-primary-900/20 text-center">
                        Explorar Catálogo
                    </a>

                    <!-- CTA Secundário (Foco no Serviço/WhatsApp) -->
                    <a href="#contato"
                        class="inline-flex items-center justify-center px-6 py-3.5 border border-zinc-300 text-base font-medium rounded-xl text-zinc-700 bg-white hover:bg-zinc-50 hover:text-zinc-950 transition-all text-center">
                        Solicitar Projeto
                    </a>
                </div>
            </div>

            <!-- Coluna da Imagem -->
            <div class="relative w-full aspect-square sm:aspect-[4/3] lg:aspect-square max-w-2xl mx-auto lg:max-w-none">
                <!-- Moldura orgânica moderna para combinar com o tema botânico -->
                <div class="absolute inset-0 bg-emerald-800/10 rounded-3xl transform rotate-2 hidden sm:block"
                    aria-hidden="true"></div>

                <div class="relative w-full h-full overflow-hidden rounded-3xl shadow-xl">
                    <img src="{{ Vite::asset('resources/images/hero-image-right.webp') }}"
                        alt="Ambiente com plantas ornamentais e vasos decorativos"
                        class="w-full h-full object-cover object-center transform hover:scale-105 transition-transform duration-700"
                        loading="eager" fetchpriority="high" />
                </div>
            </div>

        </div>
    </section>

    @includeFirst(['partials.content-page', 'partials.content'])
@endsection