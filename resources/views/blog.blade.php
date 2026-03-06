<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog | Aivra — Inteligência e Performance em Pauta</title>
  <meta name="description" content="Insights do Método A.A.Q.I., IA, SaaS e performance operacional.">
  <meta property="og:title" content="Blog | Aivra">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url('/blog') }}">
  <meta property="og:description" content="Insights do Método A.A.Q.I., IA, SaaS e performance operacional.">

  <!-- Styles / Scripts -->
  @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @endif

  <style>
  @keyframes float-blob-a {
    0%   { transform: translate(0, 0) scale(1); }
    50%  { transform: translate(-40px, 30px) scale(1.08); }
    100% { transform: translate(20px, -25px) scale(0.94); }
  }
  @keyframes float-blob-b {
    0%   { transform: translate(0, 0) scale(1); }
    50%  { transform: translate(35px, -40px) scale(1.1); }
    100% { transform: translate(-20px, 20px) scale(0.92); }
  }
  .animate-float-blob-a { animation: float-blob-a 12s ease-in-out infinite alternate; }
  .animate-float-blob-b { animation: float-blob-b 9s ease-in-out infinite alternate; }
  </style>

  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="bg-white text-slate-900 antialiased overflow-x-hidden">

  @include('partials.header', ['activeNav' => 'blog'])

  <main>

    <!-- ===== SEÇÃO 1: HERO ===== -->
    <section class="relative overflow-hidden bg-[#F8FAFC] pt-36 lg:pt-44 pb-20">
      <!-- Decoração de fundo -->
      <div class="absolute inset-0 bg-[linear-gradient(to_right,#e2e8f0_1px,transparent_1px),linear-gradient(to_bottom,#e2e8f0_1px,transparent_1px)] bg-[size:3rem_3rem] [mask-image:radial-gradient(ellipse_80%_60%_at_50%_40%,#000_60%,transparent_100%)] opacity-40"></div>
      <div class="absolute inset-0 bg-[radial-gradient(ellipse_70%_50%_at_50%_0%,rgba(219,234,254,0.7)_0%,transparent_70%)]"></div>
      <div class="absolute -top-10 -right-10 w-[28rem] h-[28rem] rounded-full bg-blue-200/60 blur-3xl pointer-events-none animate-float-blob-a"></div>
      <div class="absolute -bottom-5 -left-5 w-80 h-80 rounded-full bg-indigo-200/50 blur-3xl pointer-events-none animate-float-blob-b"></div>

      <div class="relative z-10 max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8 text-center">
        <!-- Badge -->
        <div class="inline-flex items-center gap-2 text-blue-600 bg-blue-50 border border-blue-100 rounded-full px-4 py-1.5 text-sm font-semibold mb-6">
          <i data-lucide="rss" class="w-4 h-4"></i>
          Blog Aivra
        </div>

        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 tracking-tight leading-[1.1] mb-5">
          Inteligência e Performance<br class="hidden md:block"> em Pauta
        </h1>
        <p class="text-lg md:text-xl text-slate-500 max-w-2xl mx-auto mb-10 leading-relaxed">
          Insights práticos do Método A.A.Q.I., tendências em IA, SaaS e como transformar operações em resultados concretos.
        </p>

        <!-- Busca -->
        <div class="max-w-lg mx-auto mb-8">
          <div class="relative flex items-center">
            <i data-lucide="search" class="absolute left-5 w-5 h-5 text-slate-400 pointer-events-none"></i>
            <input
              id="blog-search"
              type="text"
              placeholder="Buscar artigos..."
              class="w-full pl-12 pr-4 py-4 rounded-full border border-slate-200 bg-white shadow-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
            >
          </div>
        </div>

        <!-- Chips de categoria rápida -->
        <div class="flex flex-wrap justify-center gap-2">
          <button class="quick-chip active-chip px-4 py-2 rounded-full text-sm font-semibold bg-[#2563EB] text-white transition-colors" data-chip="all">Todos</button>
          <button class="quick-chip px-4 py-2 rounded-full text-sm font-semibold bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 transition-colors" data-chip="IA">IA</button>
          <button class="quick-chip px-4 py-2 rounded-full text-sm font-semibold bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 transition-colors" data-chip="SaaS">SaaS</button>
          <button class="quick-chip px-4 py-2 rounded-full text-sm font-semibold bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 transition-colors" data-chip="Cibersegurança">Cibersegurança</button>
          <button class="quick-chip px-4 py-2 rounded-full text-sm font-semibold bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 transition-colors" data-chip="Performance">Performance</button>
          <button class="quick-chip px-4 py-2 rounded-full text-sm font-semibold bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 transition-colors" data-chip="UI/UX">UI/UX</button>
        </div>
      </div>
    </section>

    <!-- ===== SEÇÃO 2: POSTS EM DESTAQUE ===== -->
    <section class="bg-[#020817] py-24">
      <div class="max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8">
        <div class="flex items-center gap-3 mb-12">
          <span class="inline-flex items-center gap-2 text-blue-400 bg-blue-500/10 border border-blue-500/20 rounded-full px-4 py-1.5 text-sm font-semibold">
            <i data-lucide="star" class="w-4 h-4"></i>
            Em Destaque
          </span>
        </div>

        <div class="grid lg:grid-cols-3 gap-6">
          <!-- Card Principal -->
          <article class="reveal-up lg:col-span-2 rounded-[2rem] overflow-hidden border border-white/10 bg-white/[0.02] hover:-translate-y-1 transition-transform flex flex-col">
            <div class="aspect-video bg-slate-800 relative overflow-hidden shrink-0">
              <img src="https://images.unsplash.com/photo-1677442135703-1787eea5ce01?w=900&h=506&fit=crop&q=80" alt="Inteligência Artificial — Método A.A.Q.I." class="w-full h-full object-cover">
              <div class="absolute top-4 left-4">
                <span class="bg-blue-600 text-white text-xs font-bold px-3 py-1.5 rounded-full uppercase tracking-wider">Performance</span>
              </div>
            </div>
            <div class="p-8 flex flex-col flex-grow">
              <h2 class="text-2xl md:text-3xl font-bold text-white mb-4 leading-tight hover:text-blue-300 transition-colors cursor-pointer">
                A Ciência por trás do Método A.A.Q.I.
              </h2>
              <p class="text-gray-400 leading-relaxed mb-6 flex-grow">
                Como uma abordagem estruturada em quatro etapas — Análise, Arquitetura, Quantização e Inteligência — está transformando operações B2B e gerando resultados mensuráveis em semanas.
              </p>
              <div class="flex items-center gap-4 pt-4 border-t border-white/10">
                <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold text-sm shrink-0">F</div>
                <div>
                  <p class="text-white font-semibold text-sm">Felipe — CEO</p>
                  <p class="text-gray-500 text-xs">6 mar. 2026 · 8 min de leitura</p>
                </div>
              </div>
            </div>
          </article>

          <!-- Cards Menores -->
          <div class="lg:col-span-1 flex flex-col gap-6">
            <article class="reveal-up delay-100 rounded-[2rem] overflow-hidden border border-white/10 bg-white/[0.02] hover:-translate-y-1 transition-transform flex items-center gap-5 p-6">
              <div class="w-20 h-20 rounded-2xl bg-slate-800 overflow-hidden shrink-0">
                <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?w=160&h=160&fit=crop&q=80" alt="calzap WhatsApp" class="w-full h-full object-cover">
              </div>
              <div class="flex-1 min-w-0">
                <span class="text-green-400 text-xs font-bold uppercase tracking-wider">SaaS</span>
                <h3 class="text-white font-bold leading-snug mt-1 mb-1 text-sm md:text-base cursor-pointer hover:text-blue-300 transition-colors">
                  Como o calzap.com.br revoluciona o atendimento imobiliário
                </h3>
                <p class="text-gray-500 text-xs">5 min de leitura</p>
              </div>
            </article>

            <article class="reveal-up delay-200 rounded-[2rem] overflow-hidden border border-white/10 bg-white/[0.02] hover:-translate-y-1 transition-transform flex items-center gap-5 p-6">
              <div class="w-20 h-20 rounded-2xl bg-slate-800 overflow-hidden shrink-0">
                <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=160&h=160&fit=crop&q=80" alt="Imobify gestão imobiliária" class="w-full h-full object-cover">
              </div>
              <div class="flex-1 min-w-0">
                <span class="text-purple-400 text-xs font-bold uppercase tracking-wider">SaaS</span>
                <h3 class="text-white font-bold leading-snug mt-1 mb-1 text-sm md:text-base cursor-pointer hover:text-blue-300 transition-colors">
                  Imobify.app: gestão de imóveis com IA integrada
                </h3>
                <p class="text-gray-500 text-xs">4 min de leitura</p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== SEÇÃO 3+4: FILTROS + GRADE DE ARTIGOS ===== -->
    <section class="bg-white py-24">
      <div class="max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8">
        <div class="mb-10">
          <h2 class="reveal-up text-3xl md:text-4xl font-bold text-slate-900 mb-8 tracking-tight">Todos os Artigos</h2>

          <!-- Filtros pill -->
          <div class="flex flex-wrap gap-3" id="filter-buttons">
            <button class="filter-btn active-filter px-5 py-2.5 rounded-full text-sm font-semibold bg-[#2563EB] text-white transition-colors" data-filter="all">Todos</button>
            <button class="filter-btn px-5 py-2.5 rounded-full text-sm font-semibold bg-slate-100 text-slate-700 hover:bg-slate-200 transition-colors" data-filter="Cibersegurança">Cibersegurança</button>
            <button class="filter-btn px-5 py-2.5 rounded-full text-sm font-semibold bg-slate-100 text-slate-700 hover:bg-slate-200 transition-colors" data-filter="Engenharia de IA">Engenharia de IA</button>
            <button class="filter-btn px-5 py-2.5 rounded-full text-sm font-semibold bg-slate-100 text-slate-700 hover:bg-slate-200 transition-colors" data-filter="SaaS">SaaS</button>
            <button class="filter-btn px-5 py-2.5 rounded-full text-sm font-semibold bg-slate-100 text-slate-700 hover:bg-slate-200 transition-colors" data-filter="UI/UX">UI/UX</button>
            <button class="filter-btn px-5 py-2.5 rounded-full text-sm font-semibold bg-slate-100 text-slate-700 hover:bg-slate-200 transition-colors" data-filter="Performance">Performance</button>
          </div>
        </div>

        <!-- Grade de artigos -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8" id="articles-grid">

          <!-- Card 1: FiscalDock -->
          <article class="article-card reveal-up delay-100 rounded-[2rem] border border-slate-100 shadow-sm hover:-translate-y-1 transition-transform flex flex-col overflow-hidden" data-category="SaaS">
            <div class="aspect-video bg-slate-100 relative overflow-hidden shrink-0">
              <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=800&h=450&fit=crop&q=80" alt="Documentos fiscais — FiscalDock" class="w-full h-full object-cover">
            </div>
            <div class="p-7 flex flex-col flex-grow">
              <span class="article-badge inline-block bg-orange-50 text-orange-600 border border-orange-100 text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full mb-4 w-fit">SaaS</span>
              <h3 class="article-title text-lg font-bold text-slate-900 mb-3 leading-snug cursor-pointer hover:text-blue-600 transition-colors">
                Compliance Fiscal com IA: o que é o FiscalDock?
              </h3>
              <p class="text-slate-500 text-sm leading-relaxed mb-6 flex-grow line-clamp-2">
                Como o fiscaldock.com.br centraliza arquivos fiscais, identifica pendências automaticamente e gera relatórios prontos para tomada de decisão.
              </p>
              <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
                <div class="w-8 h-8 rounded-full bg-orange-100 flex items-center justify-center text-orange-600 font-bold text-xs shrink-0">A</div>
                <span class="text-slate-400 text-xs">6 min de leitura</span>
              </div>
            </div>
          </article>

          <!-- Card 2: BotPlantão -->
          <article class="article-card reveal-up delay-200 rounded-[2rem] border border-slate-100 shadow-sm hover:-translate-y-1 transition-transform flex flex-col overflow-hidden" data-category="Engenharia de IA">
            <div class="aspect-video bg-slate-100 relative overflow-hidden shrink-0">
              <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=800&h=450&fit=crop&q=80" alt="Médico usando celular — BotPlantão" class="w-full h-full object-cover">
            </div>
            <div class="p-7 flex flex-col flex-grow">
              <span class="article-badge inline-block bg-blue-50 text-blue-600 border border-blue-100 text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full mb-4 w-fit">Engenharia de IA</span>
              <h3 class="article-title text-lg font-bold text-slate-900 mb-3 leading-snug cursor-pointer hover:text-blue-600 transition-colors">
                Atendimento 24/7: como o BotPlantão transforma o suporte
              </h3>
              <p class="text-slate-500 text-sm leading-relaxed mb-6 flex-grow line-clamp-2">
                Automação que monitora grupos de WhatsApp em milissegundos e garante que médicos nunca percam uma oportunidade de plantão por indisponibilidade.
              </p>
              <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
                <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold text-xs shrink-0">A</div>
                <span class="text-slate-400 text-xs">5 min de leitura</span>
              </div>
            </div>
          </article>

          <!-- Card 3: calzap -->
          <article class="article-card reveal-up delay-300 rounded-[2rem] border border-slate-100 shadow-sm hover:-translate-y-1 transition-transform flex flex-col overflow-hidden" data-category="SaaS">
            <div class="aspect-video bg-slate-100 relative overflow-hidden shrink-0">
              <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?w=800&h=450&fit=crop&q=80" alt="Automação de mensagens — calzap" class="w-full h-full object-cover">
            </div>
            <div class="p-7 flex flex-col flex-grow">
              <span class="article-badge inline-block bg-green-50 text-green-600 border border-green-100 text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full mb-4 w-fit">SaaS</span>
              <h3 class="article-title text-lg font-bold text-slate-900 mb-3 leading-snug cursor-pointer hover:text-blue-600 transition-colors">
                calzap: automação de WhatsApp para o mercado imobiliário
              </h3>
              <p class="text-slate-500 text-sm leading-relaxed mb-6 flex-grow line-clamp-2">
                Como fluxos visuais inteligentes e IA para transcrição de áudios estão recuperando vendas e automatizando o atendimento 24/7 no setor imobiliário.
              </p>
              <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
                <div class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center text-green-600 font-bold text-xs shrink-0">A</div>
                <span class="text-slate-400 text-xs">7 min de leitura</span>
              </div>
            </div>
          </article>

          <!-- Card 4: Imobify -->
          <article class="article-card reveal-up delay-100 rounded-[2rem] border border-slate-100 shadow-sm hover:-translate-y-1 transition-transform flex flex-col overflow-hidden" data-category="SaaS">
            <div class="aspect-video bg-slate-100 relative overflow-hidden shrink-0">
              <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=800&h=450&fit=crop&q=80" alt="Gestão imobiliária — Imobify" class="w-full h-full object-cover">
            </div>
            <div class="p-7 flex flex-col flex-grow">
              <span class="article-badge inline-block bg-purple-50 text-purple-600 border border-purple-100 text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full mb-4 w-fit">SaaS</span>
              <h3 class="article-title text-lg font-bold text-slate-900 mb-3 leading-snug cursor-pointer hover:text-blue-600 transition-colors">
                Imobify: a plataforma de gestão imobiliária com IA
              </h3>
              <p class="text-slate-500 text-sm leading-relaxed mb-6 flex-grow line-clamp-2">
                Gerencie aluguéis direto no WhatsApp com recibos automáticos, alertas de vencimento e relatórios prontos para o Imposto de Renda — tudo integrado com IA.
              </p>
              <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
                <div class="w-8 h-8 rounded-full bg-purple-100 flex items-center justify-center text-purple-600 font-bold text-xs shrink-0">A</div>
                <span class="text-slate-400 text-xs">4 min de leitura</span>
              </div>
            </div>
          </article>

          <!-- Card 5: Cibersegurança -->
          <article class="article-card reveal-up delay-200 rounded-[2rem] border border-slate-100 shadow-sm hover:-translate-y-1 transition-transform flex flex-col overflow-hidden" data-category="Cibersegurança">
            <div class="aspect-video bg-slate-100 relative overflow-hidden shrink-0">
              <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=800&h=450&fit=crop&q=80" alt="Cibersegurança — Zero Trust" class="w-full h-full object-cover">
            </div>
            <div class="p-7 flex flex-col flex-grow">
              <span class="article-badge inline-block bg-red-50 text-red-600 border border-red-100 text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full mb-4 w-fit">Cibersegurança</span>
              <h3 class="article-title text-lg font-bold text-slate-900 mb-3 leading-snug cursor-pointer hover:text-blue-600 transition-colors">
                Zero Trust na prática: protegendo dados da sua empresa
              </h3>
              <p class="text-slate-500 text-sm leading-relaxed mb-6 flex-grow line-clamp-2">
                Entenda como o modelo Zero Trust elimina suposições de confiança implícita na rede e por que ele é indispensável para empresas que escalam com tecnologia.
              </p>
              <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
                <div class="w-8 h-8 rounded-full bg-red-100 flex items-center justify-center text-red-600 font-bold text-xs shrink-0">A</div>
                <span class="text-slate-400 text-xs">9 min de leitura</span>
              </div>
            </div>
          </article>

          <!-- Card 6: A.A.Q.I. -->
          <article class="article-card reveal-up delay-300 rounded-[2rem] border border-slate-100 shadow-sm hover:-translate-y-1 transition-transform flex flex-col overflow-hidden" data-category="Performance">
            <div class="aspect-video bg-slate-100 relative overflow-hidden shrink-0">
              <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&h=450&fit=crop&q=80" alt="Dashboard de analytics — Método A.A.Q.I." class="w-full h-full object-cover">
            </div>
            <div class="p-7 flex flex-col flex-grow">
              <span class="article-badge inline-block bg-cyan-50 text-cyan-600 border border-cyan-100 text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full mb-4 w-fit">Performance</span>
              <h3 class="article-title text-lg font-bold text-slate-900 mb-3 leading-snug cursor-pointer hover:text-blue-600 transition-colors">
                Método A.A.Q.I.: como transformar operações em resultados
              </h3>
              <p class="text-slate-500 text-sm leading-relaxed mb-6 flex-grow line-clamp-2">
                Um guia completo sobre como as quatro etapas do método A.A.Q.I. — Análise, Arquitetura, Quantização e Inteligência — geram crescimento previsível e escalável.
              </p>
              <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
                <div class="w-8 h-8 rounded-full bg-cyan-100 flex items-center justify-center text-cyan-600 font-bold text-xs shrink-0">F</div>
                <span class="text-slate-400 text-xs">8 min de leitura</span>
              </div>
            </div>
          </article>

        </div>

        <!-- Nenhum resultado -->
        <div id="no-results" class="hidden text-center py-20">
          <i data-lucide="search-x" class="w-12 h-12 text-slate-300 mx-auto mb-4"></i>
          <p class="text-slate-500 text-lg font-medium">Nenhum artigo encontrado.</p>
          <p class="text-slate-400 text-sm mt-1">Tente outro termo ou categoria.</p>
        </div>
      </div>
    </section>

    <!-- ===== SEÇÃO 5: NEWSLETTER ===== -->
    <section class="bg-[#020817] py-24">
      <div class="max-w-xl mx-auto px-4 md:px-6 lg:px-8 text-center">
        <!-- Ícone -->
        <div class="w-16 h-16 rounded-full bg-blue-600/20 border border-blue-500/30 flex items-center justify-center mx-auto mb-6">
          <i data-lucide="mail" class="w-8 h-8 text-blue-400"></i>
        </div>

        <h2 class="reveal-up text-3xl md:text-4xl font-bold text-white mb-4 tracking-tight">
          Receba insights de alta<br>performance operacional
        </h2>
        <p class="reveal-up delay-100 text-gray-400 leading-relaxed mb-8">
          Análises sobre IA, SaaS e o Método A.A.Q.I. direto no seu e-mail. Conteúdo selecionado pela equipe Aivra.
        </p>

        <!-- Form -->
        <form id="newsletter-form" class="reveal-up delay-200 flex flex-col sm:flex-row gap-3">
          <input
            id="newsletter-email"
            type="email"
            placeholder="seu@email.com.br"
            required
            class="flex-1 px-5 py-4 rounded-full bg-white/10 border border-white/20 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
          >
          <button
            type="submit"
            id="newsletter-btn"
            class="bg-[#2563EB] hover:bg-blue-700 text-white px-7 py-4 rounded-full font-semibold transition-colors shadow-sm whitespace-nowrap"
          >
            Quero receber
          </button>
        </form>

        <div id="newsletter-success" class="hidden mt-6 flex items-center justify-center gap-2 text-green-400 font-semibold">
          <i data-lucide="check-circle" class="w-5 h-5"></i>
          Obrigado! Você receberá nossos insights em breve.
        </div>

        <p class="reveal-up delay-300 text-gray-600 text-sm mt-6">Sem spam. Cancele quando quiser.</p>
      </div>
    </section>

  </main>

  @include('partials.footer')

  <script>
    // Initialize Lucide Icons
    lucide.createIcons();

    // Header Scroll Effect
    const header = document.getElementById('main-header');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 10) {
        header.classList.remove('-translate-y-full');
        header.classList.add('translate-y-0', 'shadow-sm');
      } else {
        header.classList.remove('translate-y-0', 'shadow-sm');
        header.classList.add('-translate-y-full');
      }
    });

    // Mobile Menu Toggle
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');
    const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
    let isMobileMenuOpen = false;

    mobileMenuToggle.addEventListener('click', () => {
      isMobileMenuOpen = !isMobileMenuOpen;

      if (isMobileMenuOpen) {
        menuIcon.classList.add('hidden');
        closeIcon.classList.remove('hidden');
        mobileMenu.classList.remove('max-h-0', 'opacity-0');
        mobileMenu.classList.add('max-h-screen', 'opacity-100');
        mobileNavLinks.forEach(link => {
          link.classList.remove('opacity-0', '-translate-x-4');
          link.classList.add('opacity-100', 'translate-x-0');
        });
      } else {
        menuIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
        mobileMenu.classList.add('max-h-0', 'opacity-0');
        mobileMenu.classList.remove('max-h-screen', 'opacity-100');
        mobileNavLinks.forEach(link => {
          link.classList.add('opacity-0', '-translate-x-4');
          link.classList.remove('opacity-100', 'translate-x-0');
        });
      }
    });

    mobileNavLinks.forEach(link => {
      link.addEventListener('click', () => {
        if (isMobileMenuOpen) mobileMenuToggle.click();
      });
    });

    // Desktop Nav Hover Effects — Blog é o link ativo (índice 5)
    const desktopNavLinks = document.querySelectorAll('#desktop-nav .nav-link');
    desktopNavLinks.forEach(link => {
      link.addEventListener('mouseenter', () => {
        desktopNavLinks.forEach(otherLink => {
          const underline = otherLink.querySelector('.nav-underline');
          if (otherLink !== link && !otherLink.classList.contains('text-blue-600')) {
            underline.classList.add('opacity-0');
          }
        });
        if (!link.classList.contains('text-blue-600')) {
          link.classList.add('text-blue-600');
          const underline = link.querySelector('.nav-underline');
          if (underline) underline.classList.remove('opacity-0');
        }
      });

      link.addEventListener('mouseleave', () => {
        const activeLink = document.querySelector('#desktop-nav .nav-link.active-link') || desktopNavLinks[5];
        desktopNavLinks.forEach(otherLink => {
          const underline = otherLink.querySelector('.nav-underline');
          if (otherLink !== activeLink) {
            underline.classList.add('opacity-0');
            otherLink.classList.remove('text-blue-600');
          }
        });
        activeLink.classList.add('text-blue-600');
        const activeUnderline = activeLink.querySelector('.nav-underline');
        if (activeUnderline) activeUnderline.classList.remove('opacity-0');
      });
    });

    desktopNavLinks[5].classList.add('active-link');

    // Reveal Animations
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('active');
          obs.unobserve(entry.target);
        }
      });
    }, { root: null, rootMargin: '0px', threshold: 0.1 });

    document.querySelectorAll('.reveal-up').forEach(el => observer.observe(el));

    // Filtro de categorias
    const filterBtns = document.querySelectorAll('.filter-btn');
    const articleCards = document.querySelectorAll('.article-card');
    const noResults = document.getElementById('no-results');
    let activeFilter = 'all';

    function applyFilters() {
      const searchTerm = document.getElementById('blog-search').value.toLowerCase().trim();
      let visibleCount = 0;

      articleCards.forEach(card => {
        const category = card.dataset.category;
        const title = card.querySelector('.article-title').textContent.toLowerCase();
        const badge = card.querySelector('.article-badge').textContent.toLowerCase();

        const matchesFilter = activeFilter === 'all' || category === activeFilter;
        const matchesSearch = !searchTerm || title.includes(searchTerm) || badge.includes(searchTerm);

        if (matchesFilter && matchesSearch) {
          card.classList.remove('hidden');
          visibleCount++;
        } else {
          card.classList.add('hidden');
        }
      });

      noResults.classList.toggle('hidden', visibleCount > 0);
    }

    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        activeFilter = btn.dataset.filter;
        filterBtns.forEach(b => {
          b.classList.remove('active-filter', 'bg-[#2563EB]', 'text-white');
          b.classList.add('bg-slate-100', 'text-slate-700');
        });
        btn.classList.add('active-filter', 'bg-[#2563EB]', 'text-white');
        btn.classList.remove('bg-slate-100', 'text-slate-700');
        applyFilters();
      });
    });

    // Chips de categoria rápida (hero) sincronizados com filtros
    const quickChips = document.querySelectorAll('.quick-chip');
    quickChips.forEach(chip => {
      chip.addEventListener('click', () => {
        const chipVal = chip.dataset.chip;
        // Sync com filter-btn correspondente
        filterBtns.forEach(btn => {
          if (btn.dataset.filter === chipVal) btn.click();
        });
        // Update chip visual
        quickChips.forEach(c => {
          c.classList.remove('active-chip', 'bg-[#2563EB]', 'text-white');
          c.classList.add('bg-white', 'border', 'border-slate-200', 'text-slate-700');
        });
        chip.classList.add('active-chip', 'bg-[#2563EB]', 'text-white');
        chip.classList.remove('bg-white', 'border', 'border-slate-200', 'text-slate-700');
        // Scroll até artigos
        document.querySelector('#articles-grid').scrollIntoView({ behavior: 'smooth', block: 'start' });
      });
    });

    // Busca
    document.getElementById('blog-search').addEventListener('input', applyFilters);

    // Newsletter
    const newsletterForm = document.getElementById('newsletter-form');
    const newsletterBtn = document.getElementById('newsletter-btn');
    const newsletterSuccess = document.getElementById('newsletter-success');

    newsletterForm.addEventListener('submit', async (e) => {
      e.preventDefault();
      const email = document.getElementById('newsletter-email').value;

      newsletterBtn.disabled = true;
      newsletterBtn.textContent = 'Enviando...';

      try {
        const response = await fetch('/leads', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || '',
          },
          body: JSON.stringify({ email }),
        });

        if (response.ok || response.status === 422) {
          newsletterForm.classList.add('hidden');
          newsletterSuccess.classList.remove('hidden');
          lucide.createIcons();
        } else {
          throw new Error('Erro ao enviar');
        }
      } catch {
        newsletterBtn.disabled = false;
        newsletterBtn.textContent = 'Quero receber';
        alert('Ocorreu um erro. Tente novamente.');
      }
    });
  </script>
</body>

</html>
