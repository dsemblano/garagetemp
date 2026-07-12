@extends('layouts.app')
@section('content')
    {{-- @include('partials.page-header') --}}

    <section id="hero" class="section-home bg-stone-50 overflow-hidden">
        <!-- Alterado para min-h-dvh para dar flexibilidade no mobile e desktop -->
        <div class="container min-h-dvh grid grid-cols-1 lg:grid-cols-2 gap-12 py-6">

            <!-- Removido o h-dvh e md:w-dvh daqui. O Grid cuida da largura automaticamente -->
            <div
                class="prose lg:prose-lg prose-p:my-0 prose-a:no-underline prose-h2:mt-0 prose-h2:text-xl text-left flex flex-col w-full prose-h1:font-normal">
                <h1 class="text-primary text-4xl md:text-6xl lg:text-7xl !font-sans mb-4 opacity-0 motion-safe:animate-fade-in-up">
                    Tudo para o seu jardim na <span
                        class="font-heading font-bold inline-block mt-6 uppercase">
                        <span class="text-secondary-dark">Garagem das</span>
                       <span class="text-primary">Plantas</span>
                        </span>
                </h1>
                <p class="text-2xl mt-0">
                    Plantas ornamentais, insumos de qualidade e projetos paisagísticos. A sua solução completa para cultivar
                    beleza e bem-estar.
                </p>

                <div class="mt-10 flex flex-col sm:flex-row gap-4 sm:items-center">
                    <!-- CTA Principal (Foco no E-commerce) - Ajustado com o hover do Tailwind v4 para manter o texto branco -->
                    <a href="/loja"
                        class="inline-flex items-center justify-center px-6 py-3.5 border border-transparent text-base font-medium rounded-xl text-accent hover:text-white bg-primary hover:bg-secondary/90 transition-colors duration-300 shadow-sm shadow-primary-900/20 text-center">
                        Explorar Catálogo
                    </a>

                    <!-- CTA Secundário (Foco no Serviço/WhatsApp) -->
                    <a href="#contato"
                        class="inline-flex items-center justify-center px-6 py-3.5 border border-primary text-base font-medium rounded-xl text-primary bg-transparent hover:text-secondary hover:border-secondary transition-all text-center">
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

    <!-- sections/quem-somos.blade.php -->
    <section id="quem-somos" class="bg-stone-100 py-16 md:py-24 overflow-hidden reveal-on-scroll delay-300">
        <div class="container grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

            <!-- Coluna da Imagem (Esquerda no Desktop para inverter o ritmo da página) -->
            <div
                class="relative w-full aspect-square sm:aspect-[4/3] lg:aspect-square max-w-2xl mx-auto lg:max-w-none order-2 lg:order-1">
                <!-- Moldura decorativa usando a cor secundária (Olive-Sage) -->
                <div class="absolute inset-0 bg-secondary-dark/10 rounded-3xl transform -rotate-2 hidden sm:block"
                    aria-hidden="true"></div>

                <div class="relative w-full h-full overflow-hidden rounded-3xl shadow-lg">
                    <img src="{{ Vite::asset('resources/images/quem-somos.webp') }}"
                        alt="Nossa equipe cuidando de plantas ornamentais na Garagem das Plantas"
                        class="w-full h-full object-cover object-center transform hover:scale-105 transition-transform duration-700"
                        loading="lazy" />
                </div>
            </div>

            <!-- Coluna do Texto (Direita no Desktop) -->
            <div
                class="prose lg:prose-lg prose-a:no-underline text-left flex flex-col justify-center w-full order-1 lg:order-2">
                <span class="text-sm font-semibold tracking-wider text-secondary-dark uppercase mb-3 block">
                    Nossa História
                </span>

                <h2 class="text-primary text-3xl md:text-5xl font-serif font-bold leading-tight my-0">
                    Da nossa paixão pela terra para o coração do seu lar
                </h2>

                <div class="mt-6 text-zinc-600 space-y-4 leading-relaxed">
                    <p>
                        A <b>Garagem das Plantas</b> nasceu de um propósito simples, mas profundo: ser o ponto de encontro
                        entre o
                        concreto da cidade e a energia vital da natureza. O que começou como um espaço despretensioso de
                        cultivo transformou-se em uma curadoria completa para quem deseja transformar ambientes através do
                        verde.
                    </p>
                    <p>
                        Muito mais do que vender mudas, nós entendemos que cada ecossistema urbano é único. Por isso,
                        selecionamos a dedo desde <b>plantas ornamentais exuberantes</b> até <b>insumos, adubos e vasos
                            profissionais</b>, garantindo que você tenha em mãos a base certa para ver o seu jardim
                        prosperar com
                        saúde e beleza.
                    </p>
                    <p>
                        Seja para escolher o vaso perfeito para a sua sala, renovar a nutrição das suas plantas ou dar vida
                        a um <b>projeto paisagístico exclusivo</b>, nossa equipe está pronta para orientar cada etapa do seu
                        cultivo. Entra, a casa — e a garagem — é sua.
                    </p>
                </div>

                <!-- Pequeno Bloco de Diferenciais com Ícones/Badges -->
                <div class="mt-8 grid grid-cols-2 gap-4 pt-6 border-t border-stone-200">
                    <div>
                        <h4 class="text-zinc-900 font-bold text-base mb-1 font-serif">Curadoria Botânica</h4>
                        <p class="text-sm text-zinc-500 m-0 leading-snug">Plantas aclimatadas e selecionadas
                            individualmente.</p>
                    </div>
                    <div>
                        <h4 class="text-zinc-900 font-bold text-base mb-1 font-serif">Suporte Técnico</h4>
                        <p class="text-sm text-zinc-500 m-0 leading-snug">Os melhores insumos e orientações para o seu
                            cultivo.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
