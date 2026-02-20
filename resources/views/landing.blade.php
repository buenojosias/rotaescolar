<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rota Escolar - Transporte Escolar em Curitiba</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body {
            min-height: 100dvh;
        }
        .hero-pattern {
            background-image: radial-gradient(#eec800 0.5px, transparent 0.5px);
            background-size: 24px 24px;
        }
    </style>
</head>
<body x-data="{ 
    showScrollTop: false,
    scrollTo(id) {
        const target = id === 'top' ? document.documentElement : document.getElementById(id);
        if (!target) return;
        
        const targetPosition = id === 'top' ? 0 : target.getBoundingClientRect().top + window.pageYOffset;
        const startPosition = window.pageYOffset;
        const distance = targetPosition - startPosition;
        const duration = 1000;
        let start = null;

        const step = (timestamp) => {
            if (!start) start = timestamp;
            const progress = timestamp - start;
            const t = Math.min(progress / duration, 1);
            
            // Ease In Cubic: t * t * t (starts slow, accelerates)
            const easeInCubic = t * t * t;
            
            window.scrollTo(0, startPosition + distance * easeInCubic);
            
            if (progress < duration) {
                window.requestAnimationFrame(step);
            }
        };

        window.requestAnimationFrame(step);
    }
}" 
@scroll.window="showScrollTop = (window.pageYOffset > 400)"
class="bg-off-white dark:bg-bg-section-1 text-gray-900 dark:text-off-white font-lexend transition-colors duration-300">
    <header class="bg-brand-yellow hero-pattern dark:bg-bg-deep dark:bg-none px-6 lg:px-12 py-12 rounded-b-[3rem] relative overflow-hidden border-b border-gray-100 dark:border-white/5 min-h-screen flex flex-col">
        <!-- Navigation -->
        <nav class="w-full max-w-7xl mx-auto flex items-center justify-between z-20 mb-12">
            <div class="flex items-center gap-3">
                <div class="bg-slate-900 dark:bg-brand-yellow p-2.5 rounded-xl shadow-md">
                    <span class="material-symbols-outlined text-brand-yellow dark:text-bg-deep text-2xl">airport_shuttle</span>
                </div>
                <span class="font-black text-2xl tracking-tight text-slate-900 dark:text-off-white">Rota Escolar</span>
            </div>
            
            <!-- Desktop Nav -->
            <div class="hidden lg:flex items-center gap-8 font-semibold text-slate-800 dark:text-light-grey">
                <a class="hover:text-slate-900 dark:hover:text-off-white transition-colors" href="#como-funciona">Como funciona</a>
                <a class="hover:text-slate-900 dark:hover:text-off-white transition-colors" href="#para-escolas">Para Escolas</a>
                <a class="bg-slate-900 dark:bg-brand-yellow text-white dark:text-bg-deep px-6 py-2.5 rounded-full hover:brightness-110 transition-all shadow-lg" href="#">Acessar Painel</a>
            </div>

            <!-- Mobile Menu Button -->
            <button class="lg:hidden text-slate-900 dark:text-off-white p-2">
                <span class="material-symbols-outlined">menu</span>
            </button>
        </nav>

        <!-- Hero Content -->
        <div class="w-full max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center flex-grow relative z-10">
            <div class="space-y-8 text-center lg:text-left">
                <h1 class="text-4xl lg:text-6xl font-black leading-[1.1] text-slate-900 dark:text-brand-yellow">
                    Encontre transporte escolar que realmente atende sua escola e sua região.
                </h1>
                <p class="text-xl text-slate-800 dark:text-light-grey max-w-xl mx-auto lg:mx-0 font-medium leading-relaxed">
                    Conectamos responsáveis e transportadores escolares em Curitiba e Região Metropolitana de forma rápida, segura e direta.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <a class="bg-primary hover:bg-primary/90 text-white text-lg font-bold py-5 px-10 rounded-2xl flex items-center justify-center gap-3 shadow-xl transition-all hover:-translate-y-1 dark:bg-brand-yellow dark:text-bg-deep dark:hover:brightness-110" 
                       href="#responsaveis"
                       x-on:click.prevent="scrollTo('responsaveis')">
                        <span class="material-symbols-outlined">person</span>
                        Sou responsável
                    </a>
                    <a class="bg-brand-green hover:bg-brand-green/90 text-white text-lg font-bold py-5 px-10 rounded-2xl flex items-center justify-center gap-3 shadow-xl transition-all hover:-translate-y-1 dark:bg-transparent dark:border-2 dark:border-brand-green dark:text-brand-green" 
                       href="#transportadores"
                       x-on:click.prevent="scrollTo('transportadores')">
                        <span class="material-symbols-outlined">airport_shuttle</span>
                        Sou transportador
                    </a>
                </div>
            </div>

            <!-- Visual Elements (Desktop only for map) -->
            <div class="relative hidden lg:block">
                <div class="bg-white/30 dark:bg-white/5 backdrop-blur-sm rounded-[3rem] p-4 border-4 border-white/50 dark:border-white/10 overflow-hidden shadow-2xl">
                    <img alt="Mapa de Curitiba" class="w-full h-[450px] object-cover rounded-[2.5rem] grayscale invert dark:invert-0 brightness-95 contrast-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCfv0r8wZCq_pZGDwotxYwoQAYsjLzbHb9MS4N0mtmtPmzl3Tfq47EChkW3vCDXFbt3BDG4C21h4jYLFyUZt3HBu3uRSyTd2jA50RiKfBQPowLL8ckAmNrYuA3Bqz96GebeXb2Ke87gkne20ibBwUpk9TpkY0iBXHQOtyoPp0gsSJG7Lkn35bwsySKYYmV61jPAn1-1GOvC1oN7J7h21G_E-uKtM3od3361v_KsVsA7WAV_3NPw1LnxiWXGUwiiPmLElERWyfMArMro"/>
                </div>
                
                <!-- Badge -->
                <div class="absolute -bottom-6 -left-6 bg-white dark:bg-bg-section-1 p-6 rounded-2xl shadow-xl flex items-center gap-4 border border-gray-100 dark:border-white/5">
                    <div class="bg-brand-yellow p-3 rounded-full">
                        <span class="material-symbols-outlined text-slate-900">verified</span>
                    </div>
                    <div>
                        <p class="font-bold text-slate-900 dark:text-off-white">100% Curitiba</p>
                        <p class="text-sm text-slate-500 dark:text-light-grey">Foco regional total</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="px-6 py-16 bg-off-white dark:bg-bg-section-1 min-h-screen flex items-center" id="responsaveis">
        <div class="max-w-md mx-auto w-full">
            <div class="mb-10">
                <h2 class="text-2xl font-extrabold mb-6 flex items-center gap-2 text-gray-900 dark:text-off-white">
                    <span class="material-symbols-outlined text-brand-yellow">search</span>
                    Procurando transporte escolar?
                </h2>
                <ul class="space-y-4 mb-10">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-brand-yellow bg-brand-yellow/10 p-1 rounded-full text-sm">check</span>
                        <span class="text-gray-600 dark:text-light-grey font-medium">Veja apenas transportadores compatíveis</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-brand-yellow bg-brand-yellow/10 p-1 rounded-full text-sm">check</span>
                        <span class="text-gray-600 dark:text-light-grey font-medium">Filtro por idade</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-brand-yellow bg-brand-yellow/10 p-1 rounded-full text-sm">check</span>
                        <span class="text-gray-600 dark:text-light-grey font-medium">Busca por proximidade</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-brand-yellow bg-brand-yellow/10 p-1 rounded-full text-sm">check</span>
                        <span class="text-gray-600 dark:text-light-grey font-medium">Contato via WhatsApp</span>
                    </li>
                </ul>
                <div class="bg-white dark:bg-bg-deep p-6 rounded-2xl border border-gray-200 dark:border-white/10 shadow-sm">
                    <h3 class="text-lg font-bold mb-4 text-gray-900 dark:text-off-white">Interessado? Deixe seu contato</h3>
                    <form class="space-y-4">
                        <div>
                            <label class="block text-sm font-semibold mb-1 text-gray-600 dark:text-light-grey">Nome</label>
                            <input class="w-full p-3 rounded-lg border-gray-200 dark:border-white/20 bg-slate-50 dark:bg-bg-section-1 text-gray-900 dark:text-off-white focus:ring-brand-yellow focus:border-brand-yellow placeholder-gray-400 dark:placeholder-white/20" placeholder="Seu nome" type="text">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold mb-1 text-gray-600 dark:text-light-grey">WhatsApp</label>
                            <input class="w-full p-3 rounded-lg border-gray-200 dark:border-white/20 bg-slate-50 dark:bg-bg-section-1 text-gray-900 dark:text-off-white focus:ring-brand-yellow focus:border-brand-yellow placeholder-gray-400 dark:placeholder-white/20" placeholder="(41) 99999-9999" type="tel">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold mb-1 text-gray-600 dark:text-light-grey">Escola</label>
                            <input class="w-full p-3 rounded-lg border-gray-200 dark:border-white/20 bg-slate-50 dark:bg-bg-section-1 text-gray-900 dark:text-off-white focus:ring-brand-yellow focus:border-brand-yellow placeholder-gray-400 dark:placeholder-white/20" placeholder="Nome da escola" type="text">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold mb-1 text-gray-600 dark:text-light-grey">Bairro</label>
                            <input class="w-full p-3 rounded-lg border-gray-200 dark:border-white/20 bg-slate-50 dark:bg-bg-section-1 text-gray-900 dark:text-off-white focus:ring-brand-yellow focus:border-brand-yellow placeholder-gray-400 dark:placeholder-white/20" placeholder="Seu bairro" type="text">
                        </div>
                        <button class="w-full bg-brand-yellow text-bg-deep font-extrabold py-4 rounded-xl shadow-md hover:brightness-110 transition-all" type="submit">
                            Quero participar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="px-6 py-16 bg-white dark:bg-bg-section-2 min-h-screen flex items-center" id="transportadores">
        <div class="max-w-md mx-auto w-full">
            <h2 class="text-2xl font-extrabold mb-6 leading-tight text-gray-900 dark:text-off-white">
                Receba contatos apenas dentro da sua cobertura.
            </h2>
            <div class="grid grid-cols-2 gap-4 mb-10">
                <div class="bg-off-white dark:bg-bg-section-1 p-4 rounded-xl shadow-sm border border-gray-100 dark:border-white/5">
                    <span class="material-symbols-outlined text-brand-yellow mb-2">payments</span>
                    <p class="font-bold text-sm text-gray-900 dark:text-off-white">Cadastro gratuito</p>
                </div>
                <div class="bg-off-white dark:bg-bg-section-1 p-4 rounded-xl shadow-sm border border-gray-100 dark:border-white/5">
                    <span class="material-symbols-outlined text-brand-yellow mb-2">map</span>
                    <p class="font-bold text-sm text-gray-900 dark:text-off-white">Controle de área</p>
                </div>
                <div class="bg-off-white dark:bg-bg-section-1 p-4 rounded-xl shadow-sm border border-gray-100 dark:border-white/5">
                    <span class="material-symbols-outlined text-brand-yellow mb-2">chat</span>
                    <p class="font-bold text-sm text-gray-900 dark:text-off-white">Contato direto</p>
                </div>
                <div class="bg-off-white dark:bg-bg-section-1 p-4 rounded-xl shadow-sm border border-gray-100 dark:border-white/5">
                    <span class="material-symbols-outlined text-brand-yellow mb-2">handshake</span>
                    <p class="font-bold text-sm text-gray-900 dark:text-off-white">Sem intermediação</p>
                </div>
            </div>
            <div class="bg-white dark:bg-bg-deep p-6 rounded-2xl shadow-sm border border-gray-200 dark:border-white/10">
                <h3 class="text-lg font-bold mb-4 text-gray-900 dark:text-off-white">Cadastro de Transportador</h3>
                <form class="space-y-4">
                    <div>
                        <label class="block text-sm font-semibold mb-1 text-gray-600 dark:text-light-grey">Nome</label>
                        <input class="w-full p-3 rounded-lg border-gray-200 dark:border-white/20 bg-slate-50 dark:bg-bg-section-1 text-gray-900 dark:text-off-white focus:ring-brand-yellow focus:border-brand-yellow" type="text" placeholder="Seu nome">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1 text-gray-600 dark:text-light-grey">Telefone</label>
                        <input class="w-full p-3 rounded-lg border-gray-200 dark:border-white/20 bg-slate-50 dark:bg-bg-section-1 text-gray-900 dark:text-off-white focus:ring-brand-yellow focus:border-brand-yellow" type="tel" placeholder="(41) 99999-9999">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1 text-gray-600 dark:text-light-grey">Cidade</label>
                        <input class="w-full p-3 rounded-lg border-gray-200 dark:border-white/20 bg-slate-50 dark:bg-bg-section-1 text-gray-900 dark:text-off-white focus:ring-brand-yellow focus:border-brand-yellow" placeholder="Curitiba ou região" type="text">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1 text-gray-600 dark:text-light-grey">Nº Veículos</label>
                        <input class="w-full p-3 rounded-lg border-gray-200 dark:border-white/20 bg-slate-50 dark:bg-bg-section-1 text-gray-900 dark:text-off-white focus:ring-brand-yellow focus:border-brand-yellow" type="number" placeholder="1">
                    </div>
                    <button class="w-full bg-brand-yellow text-bg-deep font-extrabold py-4 rounded-xl hover:brightness-110 transition-all" type="submit">
                        Quero cadastrar
                    </button>
                </form>
            </div>
        </div>
    </section>

    <footer class="px-6 py-12 bg-slate-900 dark:bg-bg-deep border-t border-slate-800 dark:border-white/10">
        <div class="max-w-md mx-auto text-center">
            <div class="grid grid-cols-3 gap-4 mb-12">
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 bg-brand-yellow/10 rounded-full flex items-center justify-center mb-2">
                        <span class="material-symbols-outlined text-brand-yellow">location_on</span>
                    </div>
                    <span class="text-[10px] font-bold uppercase tracking-wider text-brand-yellow dark:text-light-grey">Foco em Curitiba</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 bg-brand-yellow/10 rounded-full flex items-center justify-center mb-2">
                        <span class="material-symbols-outlined text-brand-yellow">verified_user</span>
                    </div>
                    <span class="text-[10px] font-bold uppercase tracking-wider text-brand-yellow dark:text-light-grey">Plataforma Independente</span>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 bg-brand-yellow/10 rounded-full flex items-center justify-center mb-2">
                        <span class="material-symbols-outlined text-brand-yellow">forward_to_inbox</span>
                    </div>
                    <span class="text-[10px] font-bold uppercase tracking-wider text-brand-yellow dark:text-light-grey">Contato Direto</span>
                </div>
            </div>
            <div class="mb-8">
                <div class="flex items-center justify-center gap-2 mb-4 opacity-80">
                    <div class="bg-brand-yellow p-1 rounded-sm">
                        <span class="material-symbols-outlined text-bg-deep text-lg">airport_shuttle</span>
                    </div>
                    <span class="font-black text-lg text-brand-yellow dark:text-off-white">Rota Escolar</span>
                </div>
                <p class="text-sm text-brand-yellow/60 dark:text-light-grey mb-2">© 2024 Rota Escolar. Todos os direitos reservados.</p>
                <p class="text-xs font-semibold text-brand-yellow/80 uppercase tracking-widest">Projeto em fase de lançamento</p>
            </div>
            <div class="h-32 w-full rounded-xl bg-slate-800 dark:bg-bg-section-1 overflow-hidden relative border border-slate-700 dark:border-white/10">
                <img alt="Mapa de Curitiba e região metropolitana" class="w-full h-full object-cover opacity-20 grayscale invert dark:invert-0" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCfv0r8wZCq_pZGDwotxYwoQAYsjLzbHb9MS4N0mtmtPmzl3Tfq47EChkW3vCDXFbt3BDG4C21h4jYLFyUZt3HBu3uRSyTd2jA50RiKfBQPowLL8ckAmNrYuA3Bqz96GebeXb2Ke87gkne20ibBwUpk9TpkY0iBXHQOtyoPp0gsSJG7Lkn35bwsySKYYmV61jPAn1-1GOvC1oN7J7h21G_E-uKtM3od3361v_KsVsA7WAV_3NPw1LnxiWXGUwiiPmLElERWyfMArMro">
                <div class="absolute inset-0 flex items-center justify-center">
                    <span class="bg-slate-900/80 dark:bg-bg-deep/80 text-brand-yellow px-3 py-1 rounded-full text-xs font-bold border border-slate-700 dark:border-white/10">Curitiba & Região</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating Back to Top Button -->
    <button 
        x-show="showScrollTop"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-10 scale-90"
        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 translate-y-0 scale-100"
        x-transition:leave-end="opacity-0 translate-y-10 scale-90"
        x-on:click="scrollTo('top')"
        class="fixed bottom-8 right-8 z-50 bg-brand-yellow text-bg-deep p-4 rounded-2xl shadow-2xl hover:scale-110 active:scale-95 transition-all flex items-center justify-center border-2 border-slate-900/10 dark:border-white/10 group"
        aria-label="Voltar para o topo"
    >
        <span class="material-symbols-outlined font-bold group-hover:-translate-y-1 transition-transform">arrow_upward</span>
    </button>
</body>
</html>
