<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sobre a Aivra — Engenharia de Performance e Visão de Futuro</title>
  <meta name="description" content="Conheça a Aivra: empresa de Engenharia de Software e SaaS B2B fundada em Dourados-MS. Desenvolvemos produtos com o Método A.A.Q.I., transformando complexidade tecnológica em vantagem competitiva.">
  <meta property="og:title" content="Sobre a Aivra — Engenharia de Performance e Visão de Futuro">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url('/sobre') }}">
  <meta property="og:description" content="Empresa de Engenharia de Software e SaaS B2B fundada em Dourados-MS. Método A.A.Q.I. aplicado a produtos de alto impacto.">

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

  @include('partials.header', ['activeNav' => 'sobre'])

  <main>

    <!-- ===== SEÇÃO 1: HERO ===== -->
    <section class="relative overflow-hidden bg-[#F8FAFC] pt-36 lg:pt-44 pb-24">
      <!-- Decoração de fundo -->
      <div class="absolute inset-0 bg-[linear-gradient(to_right,#e2e8f0_1px,transparent_1px),linear-gradient(to_bottom,#e2e8f0_1px,transparent_1px)] bg-[size:3rem_3rem] [mask-image:radial-gradient(ellipse_80%_60%_at_50%_40%,#000_60%,transparent_100%)] opacity-40"></div>
      <div class="absolute inset-0 bg-[radial-gradient(ellipse_70%_50%_at_50%_0%,rgba(219,234,254,0.7)_0%,transparent_70%)]"></div>
      <div class="absolute -top-10 -right-10 w-[28rem] h-[28rem] rounded-full bg-blue-200/60 blur-3xl pointer-events-none animate-float-blob-a"></div>
      <div class="absolute -bottom-5 -left-5 w-80 h-80 rounded-full bg-indigo-200/50 blur-3xl pointer-events-none animate-float-blob-b"></div>

      <div class="relative z-10 max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8 text-center">
        <!-- Badge -->
        <div class="inline-flex items-center gap-2 text-blue-600 bg-blue-50 border border-blue-100 rounded-full px-4 py-1.5 text-sm font-semibold mb-6">
          <i data-lucide="info" class="w-4 h-4"></i>
          Conheça a Aivra
        </div>

        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 tracking-tight leading-[1.1] mb-5">
          Engenharia de Performance.<br class="hidden md:block"> Visão de Futuro.
        </h1>
        <p class="text-lg md:text-xl text-slate-500 max-w-2xl mx-auto mb-10 leading-relaxed">
          A Aivra nasceu para transformar complexidade tecnológica em vantagem competitiva — com o Método A.A.Q.I. aplicado a produtos SaaS B2B que geram resultados mensuráveis.
        </p>

        <!-- CTAs -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
          <a href="#aaqi" class="bg-[#2563EB] hover:bg-blue-700 text-white px-8 py-4 rounded-full font-semibold transition-colors shadow-sm text-[15px]">
            Ver metodologia
          </a>
          <a href="/contato" class="bg-white hover:bg-slate-50 text-slate-800 px-8 py-4 rounded-full font-semibold border border-slate-200 transition-colors text-[15px]">
            Fale conosco
          </a>
        </div>
      </div>
    </section>

    <!-- ===== SEÇÃO 2: NOSSA HISTÓRIA ===== -->
    <section class="relative bg-[#020817] py-24 overflow-hidden">
      <!-- Background image com overlay -->
      <div class="absolute inset-0">
        <img
          src="/aivra-background-instagram.jpg"
          alt=""
          class="w-full h-full object-cover opacity-10"
          onerror="this.style.display='none'"
        >
        <div class="absolute inset-0 bg-gradient-to-br from-[#020817] via-[#020817]/90 to-[#020817]"></div>
      </div>

      <div class="relative z-10 max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
          <!-- Texto -->
          <div>
            <div class="inline-flex items-center gap-2 text-blue-400 bg-blue-500/10 border border-blue-500/20 rounded-full px-4 py-1.5 text-sm font-semibold mb-6">
              <i data-lucide="clock" class="w-4 h-4"></i>
              Nossa História
            </div>
            <h2 class="reveal-up text-3xl md:text-4xl lg:text-5xl font-bold text-white tracking-tight leading-[1.15] mb-6">
              Nascemos para resolver o que o mercado ignorava.
            </h2>
            <p class="reveal-up delay-100 text-gray-400 leading-relaxed mb-5">
              Fundada em outubro de 2025, a Aivra — razão social <strong class="text-gray-200">F. Devecchi Daige e Cia LTDA</strong> — surgiu em Dourados, Mato Grosso do Sul, com uma missão clara: oferecer Engenharia de Software de alto padrão para empresas que precisam crescer com consistência.
            </p>
            <p class="reveal-up delay-200 text-gray-400 leading-relaxed">
              Desde o início, nossa abordagem foi diferente. Em vez de entregar projetos avulsos, construímos produtos SaaS B2B que continuam gerando valor meses após o lançamento — sustentados por uma metodologia proprietária que chamamos de A.A.Q.I.
            </p>
          </div>

          <!-- Quote + Stats -->
          <div class="space-y-6">
            <!-- Quote -->
            <div class="reveal-up delay-100 rounded-[2rem] border border-white/10 bg-white/[0.03] p-8">
              <i data-lucide="quote" class="w-8 h-8 text-blue-400 mb-4"></i>
              <blockquote class="text-xl md:text-2xl font-semibold text-white leading-relaxed italic">
                "Não entregamos apenas código; entregamos infraestrutura de crescimento."
              </blockquote>
              <p class="text-gray-500 text-sm mt-4">— Felipe, CEO da Aivra</p>
            </div>

            <!-- Stats -->
            <div class="reveal-up delay-200 grid grid-cols-2 gap-4">
              <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 text-center">
                <p class="text-3xl font-bold text-white mb-1">2025</p>
                <p class="text-gray-500 text-sm">Fundação</p>
              </div>
              <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 text-center">
                <p class="text-3xl font-bold text-white mb-1">MS</p>
                <p class="text-gray-500 text-sm">Dourados, MS</p>
              </div>
              <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 text-center">
                <p class="text-3xl font-bold text-white mb-1">8</p>
                <p class="text-gray-500 text-sm">Squads</p>
              </div>
              <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-6 text-center">
                <p class="text-3xl font-bold text-white mb-1">3+</p>
                <p class="text-gray-500 text-sm">Produtos B2B</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== SEÇÃO 3: METODOLOGIA A.A.Q.I. ===== -->
    <section id="aaqi" class="bg-[#F8FAFC] py-24">
      <div class="max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8">
        <div class="text-center mb-16">
          <div class="inline-flex items-center gap-2 text-blue-600 bg-blue-50 border border-blue-100 rounded-full px-4 py-1.5 text-sm font-semibold mb-6">
            <i data-lucide="zap" class="w-4 h-4"></i>
            Nossa Metodologia
          </div>
          <h2 class="reveal-up text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 tracking-tight mb-5">
            O Método A.A.Q.I.
          </h2>
          <p class="reveal-up delay-100 text-lg text-slate-500 max-w-2xl mx-auto leading-relaxed">
            Quatro etapas que transformam o caos operacional em crescimento previsível — aplicadas em cada produto que desenvolvemos.
          </p>
        </div>

        <!-- Grid 2×2 -->
        <div class="grid md:grid-cols-2 gap-6 mb-16">
          <!-- A — Análise -->
          <div class="reveal-up delay-100 rounded-[2rem] border border-slate-200 bg-white p-8 hover:-translate-y-1 transition-transform">
            <div class="w-14 h-14 rounded-2xl bg-blue-50 border border-blue-100 flex items-center justify-center mb-6">
              <i data-lucide="search" class="w-7 h-7 text-blue-600"></i>
            </div>
            <div class="flex items-baseline gap-3 mb-3">
              <span class="text-4xl font-black text-blue-600">A</span>
              <h3 class="text-xl font-bold text-slate-900">Análise</h3>
            </div>
            <p class="text-slate-500 leading-relaxed">
              Diagnóstico profundo do negócio, mapeamento de gargalos e identificação de oportunidades antes de escrever uma única linha de código.
            </p>
          </div>

          <!-- A — Arquitetura -->
          <div class="reveal-up delay-200 rounded-[2rem] border border-slate-200 bg-white p-8 hover:-translate-y-1 transition-transform">
            <div class="w-14 h-14 rounded-2xl bg-indigo-50 border border-indigo-100 flex items-center justify-center mb-6">
              <i data-lucide="layers" class="w-7 h-7 text-indigo-600"></i>
            </div>
            <div class="flex items-baseline gap-3 mb-3">
              <span class="text-4xl font-black text-indigo-600">A</span>
              <h3 class="text-xl font-bold text-slate-900">Arquitetura</h3>
            </div>
            <p class="text-slate-500 leading-relaxed">
              Design de solução escalável, escolha criteriosa de tecnologias e construção de fundações que sustentam crescimento sem reescritas custosas.
            </p>
          </div>

          <!-- Q — Quantização -->
          <div class="reveal-up delay-300 rounded-[2rem] border border-slate-200 bg-white p-8 hover:-translate-y-1 transition-transform">
            <div class="w-14 h-14 rounded-2xl bg-cyan-50 border border-cyan-100 flex items-center justify-center mb-6">
              <i data-lucide="bar-chart-2" class="w-7 h-7 text-cyan-600"></i>
            </div>
            <div class="flex items-baseline gap-3 mb-3">
              <span class="text-4xl font-black text-cyan-600">Q</span>
              <h3 class="text-xl font-bold text-slate-900">Quantização</h3>
            </div>
            <p class="text-slate-500 leading-relaxed">
              Definição de métricas e KPIs de sucesso desde o início — porque o que não é medido não pode ser melhorado nem comunicado a stakeholders.
            </p>
          </div>

          <!-- I — Inteligência -->
          <div class="reveal-up delay-[400ms] rounded-[2rem] border border-slate-200 bg-white p-8 hover:-translate-y-1 transition-transform">
            <div class="w-14 h-14 rounded-2xl bg-violet-50 border border-violet-100 flex items-center justify-center mb-6">
              <i data-lucide="cpu" class="w-7 h-7 text-violet-600"></i>
            </div>
            <div class="flex items-baseline gap-3 mb-3">
              <span class="text-4xl font-black text-violet-600">I</span>
              <h3 class="text-xl font-bold text-slate-900">Inteligência</h3>
            </div>
            <p class="text-slate-500 leading-relaxed">
              IA aplicada estrategicamente para automação de tarefas repetitivas, decisões mais rápidas e aceleração do crescimento sustentável.
            </p>
          </div>
        </div>

        <!-- Produtos -->
        <div class="reveal-up text-center">
          <p class="text-slate-500 text-sm font-semibold uppercase tracking-widest mb-5">Produtos construídos com este método</p>
          <div class="flex flex-wrap justify-center gap-3">
            <span class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-white border border-slate-200 text-slate-700 font-semibold text-sm shadow-sm">
              <i data-lucide="home" class="w-4 h-4 text-blue-500"></i>
              Imobify.app
            </span>
            <span class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-white border border-slate-200 text-slate-700 font-semibold text-sm shadow-sm">
              <i data-lucide="message-circle" class="w-4 h-4 text-green-500"></i>
              calzap.com.br
            </span>
            <span class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-white border border-slate-200 text-slate-700 font-semibold text-sm shadow-sm">
              <i data-lucide="file-text" class="w-4 h-4 text-orange-500"></i>
              FiscalDock
            </span>
            <span class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-white border border-slate-200 text-slate-700 font-semibold text-sm shadow-sm">
              <i data-lucide="bot" class="w-4 h-4 text-violet-500"></i>
              BotPlantão
            </span>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== SEÇÃO 4: LIDERANÇA E SQUADS ===== -->
    <section class="bg-[#020817] py-24">
      <div class="max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8">
        <div class="text-center mb-16">
          <div class="inline-flex items-center gap-2 text-blue-400 bg-blue-500/10 border border-blue-500/20 rounded-full px-4 py-1.5 text-sm font-semibold mb-6">
            <i data-lucide="users" class="w-4 h-4"></i>
            Time
          </div>
          <h2 class="reveal-up text-3xl md:text-4xl lg:text-5xl font-bold text-white tracking-tight mb-5">
            Liderança e Squads
          </h2>
          <p class="reveal-up delay-100 text-gray-400 text-lg max-w-xl mx-auto">
            Oito times especializados trabalhando em sinergia para entregar produtos de alto impacto.
          </p>
        </div>

        <!-- Card do Fundador -->
        <div class="reveal-up max-w-sm mx-auto mb-16">
          <div class="rounded-[2rem] border border-white/10 bg-white/[0.03] p-8 text-center">
            <div class="w-20 h-20 rounded-full bg-blue-600 flex items-center justify-center text-white font-black text-3xl mx-auto mb-5">
              F
            </div>
            <h3 class="text-xl font-bold text-white mb-1">Felipe Devecchi Daige</h3>
            <p class="text-blue-400 font-semibold text-sm mb-4">CEO & Fundador</p>
            <p class="text-gray-400 text-sm leading-relaxed">
              Fundador da Aivra e idealizador do Método A.A.Q.I. Lidera a visão estratégica e o desenvolvimento de produtos SaaS B2B de alto impacto para o mercado brasileiro.
            </p>
          </div>
        </div>

        <!-- Grid de Squads -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
          <div class="reveal-up delay-100 rounded-2xl border border-white/10 bg-white/[0.03] p-6 flex flex-col items-center text-center gap-3 hover:-translate-y-1 transition-transform">
            <div class="w-12 h-12 rounded-xl bg-violet-500/20 border border-violet-500/30 flex items-center justify-center">
              <i data-lucide="cpu" class="w-6 h-6 text-violet-400"></i>
            </div>
            <p class="text-white font-semibold text-sm leading-snug">IA & Machine Learning</p>
          </div>

          <div class="reveal-up delay-200 rounded-2xl border border-white/10 bg-white/[0.03] p-6 flex flex-col items-center text-center gap-3 hover:-translate-y-1 transition-transform">
            <div class="w-12 h-12 rounded-xl bg-red-500/20 border border-red-500/30 flex items-center justify-center">
              <i data-lucide="shield" class="w-6 h-6 text-red-400"></i>
            </div>
            <p class="text-white font-semibold text-sm leading-snug">Cibersegurança</p>
          </div>

          <div class="reveal-up delay-300 rounded-2xl border border-white/10 bg-white/[0.03] p-6 flex flex-col items-center text-center gap-3 hover:-translate-y-1 transition-transform">
            <div class="w-12 h-12 rounded-xl bg-blue-500/20 border border-blue-500/30 flex items-center justify-center">
              <i data-lucide="cloud" class="w-6 h-6 text-blue-400"></i>
            </div>
            <p class="text-white font-semibold text-sm leading-snug">DevOps & Cloud</p>
          </div>

          <div class="reveal-up delay-[400ms] rounded-2xl border border-white/10 bg-white/[0.03] p-6 flex flex-col items-center text-center gap-3 hover:-translate-y-1 transition-transform">
            <div class="w-12 h-12 rounded-xl bg-pink-500/20 border border-pink-500/30 flex items-center justify-center">
              <i data-lucide="pen-tool" class="w-6 h-6 text-pink-400"></i>
            </div>
            <p class="text-white font-semibold text-sm leading-snug">UI/UX Design</p>
          </div>

          <div class="reveal-up delay-100 rounded-2xl border border-white/10 bg-white/[0.03] p-6 flex flex-col items-center text-center gap-3 hover:-translate-y-1 transition-transform">
            <div class="w-12 h-12 rounded-xl bg-green-500/20 border border-green-500/30 flex items-center justify-center">
              <i data-lucide="server" class="w-6 h-6 text-green-400"></i>
            </div>
            <p class="text-white font-semibold text-sm leading-snug">Backend Engineering</p>
          </div>

          <div class="reveal-up delay-200 rounded-2xl border border-white/10 bg-white/[0.03] p-6 flex flex-col items-center text-center gap-3 hover:-translate-y-1 transition-transform">
            <div class="w-12 h-12 rounded-xl bg-cyan-500/20 border border-cyan-500/30 flex items-center justify-center">
              <i data-lucide="smartphone" class="w-6 h-6 text-cyan-400"></i>
            </div>
            <p class="text-white font-semibold text-sm leading-snug">Frontend & Mobile</p>
          </div>

          <div class="reveal-up delay-300 rounded-2xl border border-white/10 bg-white/[0.03] p-6 flex flex-col items-center text-center gap-3 hover:-translate-y-1 transition-transform">
            <div class="w-12 h-12 rounded-xl bg-orange-500/20 border border-orange-500/30 flex items-center justify-center">
              <i data-lucide="bar-chart" class="w-6 h-6 text-orange-400"></i>
            </div>
            <p class="text-white font-semibold text-sm leading-snug">Dados & Analytics</p>
          </div>

          <div class="reveal-up delay-[400ms] rounded-2xl border border-white/10 bg-white/[0.03] p-6 flex flex-col items-center text-center gap-3 hover:-translate-y-1 transition-transform">
            <div class="w-12 h-12 rounded-xl bg-yellow-500/20 border border-yellow-500/30 flex items-center justify-center">
              <i data-lucide="users" class="w-6 h-6 text-yellow-400"></i>
            </div>
            <p class="text-white font-semibold text-sm leading-snug">Customer Success</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== SEÇÃO 5: IDENTIDADE LEGAL ===== -->
    <section class="bg-white py-24">
      <div class="max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8 text-center">
        <div class="inline-flex items-center gap-2 text-blue-600 bg-blue-50 border border-blue-100 rounded-full px-4 py-1.5 text-sm font-semibold mb-6">
          <i data-lucide="shield-check" class="w-4 h-4"></i>
          Transparência Institucional
        </div>
        <h3 class="reveal-up text-3xl md:text-4xl font-bold text-slate-900 tracking-tight mb-4">
          Nossa Identidade Legal
        </h3>
        <p class="reveal-up delay-100 text-slate-500 mb-12 max-w-lg mx-auto">
          Operamos com total transparência. Conheça os dados institucionais da Aivra.
        </p>

        <div class="flex flex-col md:flex-row items-stretch justify-center gap-6 max-w-3xl mx-auto">
          <!-- Razão Social + CNPJ -->
          <div class="reveal-up delay-100 flex-1 rounded-[2rem] border border-slate-200 bg-slate-50 p-8 text-left">
            <div class="w-12 h-12 rounded-2xl bg-blue-50 border border-blue-100 flex items-center justify-center mb-5">
              <i data-lucide="building-2" class="w-6 h-6 text-blue-600"></i>
            </div>
            <p class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-2">Razão Social</p>
            <p class="text-lg font-bold text-slate-900 mb-4">F. Devecchi Daige e Cia LTDA</p>
            <p class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-2">CNPJ</p>
            <p class="text-lg font-mono font-semibold text-slate-700">63.112.970/0001-07</p>
          </div>

          <!-- Sede -->
          <div class="reveal-up delay-200 flex-1 rounded-[2rem] border border-slate-200 bg-slate-50 p-8 text-left">
            <div class="w-12 h-12 rounded-2xl bg-blue-50 border border-blue-100 flex items-center justify-center mb-5">
              <i data-lucide="map-pin" class="w-6 h-6 text-blue-600"></i>
            </div>
            <p class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-2">Sede</p>
            <p class="text-lg font-bold text-slate-900 mb-2">Dourados — MS</p>
            <p class="text-slate-500 text-sm leading-relaxed">
              Av. Marcelino Pires, 6385, Sala 7<br>
              Vila São Francisco<br>
              Dourados - MS, 79833-001
            </p>
          </div>
        </div>
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

    // Desktop Nav Hover Effects — Sobre nós é o link ativo (índice 1)
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
        const activeLink = document.querySelector('#desktop-nav .nav-link.active-link') || desktopNavLinks[1];
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

    desktopNavLinks[1].classList.add('active-link');

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
  </script>
</body>

</html>
