<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Presença Digital — UI/UX, SEO e Performance | Aivra</title>
  <meta name="description" content="A Aivra transforma sua presença digital com UI/UX estratégico, SEO técnico e performance de dados. Método A.A.Q.I. aplicado do diagnóstico ao lançamento.">
  <meta property="og:title" content="Presença Digital — UI/UX, SEO e Performance | Aivra">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url('/servicos/presenca-digital') }}">
  <meta property="og:description" content="Transformamos sua marca em uma máquina de aquisição de clientes com UI/UX estratégico, SEO técnico e inteligência de dados.">

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

  @include('partials.header', ['activeNav' => 'produtos'])

  <main>

    <!-- ===== SEÇÃO 1: HERO (claro #F8FAFC) ===== -->
    <section class="relative overflow-hidden bg-[#F8FAFC] pt-36 lg:pt-44 pb-24">
      <!-- Decoração de fundo -->
      <div class="absolute inset-0 bg-[linear-gradient(to_right,#e2e8f0_1px,transparent_1px),linear-gradient(to_bottom,#e2e8f0_1px,transparent_1px)] bg-[size:3rem_3rem] [mask-image:radial-gradient(ellipse_80%_60%_at_50%_40%,#000_60%,transparent_100%)] opacity-40"></div>
      <div class="absolute inset-0 bg-[radial-gradient(ellipse_70%_50%_at_50%_0%,rgba(219,234,254,0.7)_0%,transparent_70%)]"></div>
      <div class="absolute -top-10 -right-10 w-[28rem] h-[28rem] rounded-full bg-blue-200/60 blur-3xl pointer-events-none animate-float-blob-a"></div>
      <div class="absolute -bottom-5 -left-5 w-80 h-80 rounded-full bg-indigo-200/50 blur-3xl pointer-events-none animate-float-blob-b"></div>

      <div class="relative z-10 max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8 text-center">
        <!-- Badge -->
        <div class="inline-flex items-center gap-2 text-blue-600 bg-blue-50 border border-blue-100 rounded-full px-4 py-1.5 text-sm font-semibold mb-6">
          <i data-lucide="monitor" class="w-4 h-4"></i>
          Presença &amp; Gestão Digital
        </div>

        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 tracking-tight leading-[1.1] mb-5">
          Sua vitrine digital<br class="hidden md:block"> projetada para converter.
        </h1>
        <p class="text-lg md:text-xl text-slate-500 max-w-2xl mx-auto mb-10 leading-relaxed">
          Combinamos UI/UX estratégico, SEO técnico e performance de dados para transformar sua marca em uma máquina de aquisição de clientes.
        </p>

        <!-- CTAs -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
          <a href="#cta" class="bg-[#2563EB] hover:bg-blue-700 text-white px-8 py-4 rounded-full font-semibold transition-colors shadow-sm text-[15px]">
            Agendar Diagnóstico
          </a>
          <a href="#case" class="bg-white hover:bg-slate-50 text-slate-800 px-8 py-4 rounded-full font-semibold border border-slate-200 transition-colors text-[15px]">
            Ver caso de sucesso
          </a>
        </div>
      </div>
    </section>

    <!-- ===== SEÇÃO 2: MÉTODO A.A.Q.I. APLICADO (escuro #020817) ===== -->
    <section class="relative bg-[#020817] py-24 overflow-hidden">
      <div class="relative z-10 max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8">
        <div class="text-center mb-16">
          <div class="inline-flex items-center gap-2 text-blue-400 bg-blue-500/10 border border-blue-500/20 rounded-full px-4 py-1.5 text-sm font-semibold mb-6">
            <i data-lucide="zap" class="w-4 h-4"></i>
            Método A.A.Q.I. em Ação
          </div>
          <h2 class="reveal-up text-3xl md:text-4xl lg:text-5xl font-bold text-white tracking-tight mb-5">
            Da análise do seu cliente ideal<br class="hidden md:block"> à arquitetura que converte.
          </h2>
          <p class="reveal-up delay-100 text-gray-400 text-lg max-w-2xl mx-auto leading-relaxed">
            Cada decisão de design e conteúdo é informada por dados — não por intuição.
          </p>
        </div>

        <!-- Grid 2×2 -->
        <div class="grid md:grid-cols-2 gap-6">
          <!-- A — Análise de ICP -->
          <div class="reveal-up delay-100 rounded-[2rem] border border-white/10 bg-white/[0.03] p-8 hover:-translate-y-1 transition-transform">
            <div class="w-14 h-14 rounded-2xl bg-blue-500/20 border border-blue-500/30 flex items-center justify-center mb-6">
              <i data-lucide="search" class="w-7 h-7 text-blue-400"></i>
            </div>
            <div class="flex items-baseline gap-3 mb-3">
              <span class="text-4xl font-black text-blue-400">A</span>
              <h3 class="text-xl font-bold text-white">Análise de ICP</h3>
            </div>
            <p class="text-gray-400 leading-relaxed">
              Mapeamos seu cliente ideal: comportamento, objeções e gatilhos de conversão antes de qualquer pixel.
            </p>
          </div>

          <!-- A — Arquitetura de Design -->
          <div class="reveal-up delay-200 rounded-[2rem] border border-white/10 bg-white/[0.03] p-8 hover:-translate-y-1 transition-transform">
            <div class="w-14 h-14 rounded-2xl bg-indigo-500/20 border border-indigo-500/30 flex items-center justify-center mb-6">
              <i data-lucide="layers" class="w-7 h-7 text-indigo-400"></i>
            </div>
            <div class="flex items-baseline gap-3 mb-3">
              <span class="text-4xl font-black text-indigo-400">A</span>
              <h3 class="text-xl font-bold text-white">Arquitetura de Design</h3>
            </div>
            <p class="text-gray-400 leading-relaxed">
              Estruturamos hierarquia visual, fluxo de jornada e CTA strategy para maximizar conversão.
            </p>
          </div>

          <!-- Q — Quantização de Resultados -->
          <div class="reveal-up delay-300 rounded-[2rem] border border-white/10 bg-white/[0.03] p-8 hover:-translate-y-1 transition-transform">
            <div class="w-14 h-14 rounded-2xl bg-cyan-500/20 border border-cyan-500/30 flex items-center justify-center mb-6">
              <i data-lucide="bar-chart-2" class="w-7 h-7 text-cyan-400"></i>
            </div>
            <div class="flex items-baseline gap-3 mb-3">
              <span class="text-4xl font-black text-cyan-400">Q</span>
              <h3 class="text-xl font-bold text-white">Quantização de Resultados</h3>
            </div>
            <p class="text-gray-400 leading-relaxed">
              KPIs definidos antes do lançamento: taxa de conversão, tempo na página, custo por lead.
            </p>
          </div>

          <!-- I — Inteligência Contínua -->
          <div class="reveal-up delay-[400ms] rounded-[2rem] border border-white/10 bg-white/[0.03] p-8 hover:-translate-y-1 transition-transform">
            <div class="w-14 h-14 rounded-2xl bg-violet-500/20 border border-violet-500/30 flex items-center justify-center mb-6">
              <i data-lucide="cpu" class="w-7 h-7 text-violet-400"></i>
            </div>
            <div class="flex items-baseline gap-3 mb-3">
              <span class="text-4xl font-black text-violet-400">I</span>
              <h3 class="text-xl font-bold text-white">Inteligência Contínua</h3>
            </div>
            <p class="text-gray-400 leading-relaxed">
              IA aplicada para testes A/B automatizados, personalização de conteúdo e otimização progressiva.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== SEÇÃO 3: SQUAD EM AÇÃO (claro #F8FAFC) ===== -->
    <section class="bg-[#F8FAFC] py-24">
      <div class="max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8">
        <div class="text-center mb-16">
          <div class="inline-flex items-center gap-2 text-blue-600 bg-blue-50 border border-blue-100 rounded-full px-4 py-1.5 text-sm font-semibold mb-6">
            <i data-lucide="users" class="w-4 h-4"></i>
            Quem Executa
          </div>
          <h2 class="reveal-up text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 tracking-tight mb-5">
            Especialistas dedicados<br class="hidden md:block"> ao seu projeto.
          </h2>
        </div>

        <!-- 3 cards horizontais -->
        <div class="grid lg:grid-cols-3 gap-6">
          <!-- Designer UI/UX -->
          <div class="reveal-up delay-100 rounded-[2rem] border border-slate-200 bg-white p-8 hover:-translate-y-1 transition-transform">
            <div class="flex items-center gap-4 mb-6">
              <div class="w-14 h-14 rounded-full bg-pink-100 flex items-center justify-center text-pink-600 font-black text-xl shrink-0">
                D
              </div>
              <div>
                <p class="font-bold text-slate-900 text-lg leading-tight">Designer UI/UX</p>
                <span class="inline-flex items-center gap-1 text-xs font-semibold text-blue-600 bg-blue-50 border border-blue-100 rounded-full px-2.5 py-0.5 mt-1">
                  <i data-lucide="pen-tool" class="w-3 h-3"></i>
                  Design
                </span>
              </div>
            </div>
            <p class="text-slate-500 leading-relaxed">
              Constrói interfaces que guiam o usuário em cada etapa da jornada — do primeiro clique à conversão.
            </p>
          </div>

          <!-- Especialista em SEO -->
          <div class="reveal-up delay-200 rounded-[2rem] border border-slate-200 bg-white p-8 hover:-translate-y-1 transition-transform">
            <div class="flex items-center gap-4 mb-6">
              <div class="w-14 h-14 rounded-full bg-green-100 flex items-center justify-center text-green-600 font-black text-xl shrink-0">
                S
              </div>
              <div>
                <p class="font-bold text-slate-900 text-lg leading-tight">Especialista em SEO</p>
                <span class="inline-flex items-center gap-1 text-xs font-semibold text-green-600 bg-green-50 border border-green-100 rounded-full px-2.5 py-0.5 mt-1">
                  <i data-lucide="search" class="w-3 h-3"></i>
                  SEO
                </span>
              </div>
            </div>
            <p class="text-slate-500 leading-relaxed">
              Estrutura técnica, arquitetura de conteúdo e autoridade de domínio para visibilidade orgânica máxima.
            </p>
          </div>

          <!-- Head de Performance -->
          <div class="reveal-up delay-300 rounded-[2rem] border border-slate-200 bg-white p-8 hover:-translate-y-1 transition-transform">
            <div class="flex items-center gap-4 mb-6">
              <div class="w-14 h-14 rounded-full bg-violet-100 flex items-center justify-center text-violet-600 font-black text-xl shrink-0">
                P
              </div>
              <div>
                <p class="font-bold text-slate-900 text-lg leading-tight">Head de Performance</p>
                <span class="inline-flex items-center gap-1 text-xs font-semibold text-violet-600 bg-violet-50 border border-violet-100 rounded-full px-2.5 py-0.5 mt-1">
                  <i data-lucide="trending-up" class="w-3 h-3"></i>
                  Performance
                </span>
              </div>
            </div>
            <p class="text-slate-500 leading-relaxed">
              Monitora, ajusta e escala. Cada métrica é uma alavanca para crescimento previsível.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== SEÇÃO 4: CASO DE SUCESSO — IMOBIFY (escuro #020817) ===== -->
    <section id="case" class="relative bg-[#020817] py-24 overflow-hidden">
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
          <!-- Esquerda: Texto -->
          <div>
            <div class="inline-flex items-center gap-2 text-yellow-400 bg-yellow-500/10 border border-yellow-500/20 rounded-full px-4 py-1.5 text-sm font-semibold mb-6">
              <i data-lucide="star" class="w-4 h-4"></i>
              Caso de Sucesso
            </div>
            <h2 class="reveal-up text-3xl md:text-4xl lg:text-5xl font-bold text-white tracking-tight leading-[1.15] mb-6">
              Imobify.app — Gestão imobiliária com presença que vende.
            </h2>
            <p class="reveal-up delay-100 text-gray-400 leading-relaxed mb-5">
              O Imobify.app foi construído com esta metodologia — da análise do ICP (proprietários e imobiliárias) à UI que guia o usuário ao cadastro, com SEO técnico voltado para buscas locais.
            </p>
            <p class="reveal-up delay-200 text-gray-400 leading-relaxed mb-8">
              Cada decisão de interface foi validada contra o comportamento real do cliente ideal, resultando em uma plataforma que não apenas funciona — converte.
            </p>
            <!-- Pill do produto -->
            <div class="reveal-up delay-300">
              <span class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-white/[0.06] border border-white/10 text-white font-semibold text-sm">
                <i data-lucide="home" class="w-4 h-4 text-blue-400"></i>
                imobify.app
              </span>
            </div>
          </div>

          <!-- Direita: Stat cards -->
          <div class="space-y-4">
            <div class="reveal-up delay-100 rounded-[2rem] border border-white/10 bg-white/[0.03] p-6">
              <div class="flex items-center gap-4 mb-2">
                <div class="w-10 h-10 rounded-xl bg-blue-500/20 border border-blue-500/30 flex items-center justify-center shrink-0">
                  <i data-lucide="smartphone" class="w-5 h-5 text-blue-400"></i>
                </div>
                <p class="text-white font-bold text-lg">UI Mobile-first</p>
              </div>
              <p class="text-gray-400 text-sm leading-relaxed pl-14">100% responsivo e otimizado para conversão mobile</p>
            </div>

            <div class="reveal-up delay-200 rounded-[2rem] border border-white/10 bg-white/[0.03] p-6">
              <div class="flex items-center gap-4 mb-2">
                <div class="w-10 h-10 rounded-xl bg-green-500/20 border border-green-500/30 flex items-center justify-center shrink-0">
                  <i data-lucide="search" class="w-5 h-5 text-green-400"></i>
                </div>
                <p class="text-white font-bold text-lg">SEO Técnico</p>
              </div>
              <p class="text-gray-400 text-sm leading-relaxed pl-14">Estrutura semântica e velocidade para ranqueamento orgânico</p>
            </div>

            <div class="reveal-up delay-300 rounded-[2rem] border border-white/10 bg-white/[0.03] p-6">
              <div class="flex items-center gap-4 mb-2">
                <div class="w-10 h-10 rounded-xl bg-violet-500/20 border border-violet-500/30 flex items-center justify-center shrink-0">
                  <i data-lucide="zap" class="w-5 h-5 text-violet-400"></i>
                </div>
                <p class="text-white font-bold text-lg">A.A.Q.I. completo</p>
              </div>
              <p class="text-gray-400 text-sm leading-relaxed pl-14">As 4 etapas aplicadas do diagnóstico ao lançamento</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== SEÇÃO 5: CTA (claro branco) ===== -->
    <section id="cta" class="bg-white py-24">
      <div class="max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto text-center">
          <div class="inline-flex items-center gap-2 text-blue-600 bg-blue-50 border border-blue-100 rounded-full px-4 py-1.5 text-sm font-semibold mb-6">
            <i data-lucide="calendar" class="w-4 h-4"></i>
            Próximo Passo
          </div>
          <h2 class="reveal-up text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 tracking-tight mb-5">
            Pronto para transformar sua presença digital?
          </h2>
          <p class="reveal-up delay-100 text-lg text-slate-500 mb-10 leading-relaxed">
            Agende um diagnóstico gratuito. Em 30 minutos, mapeamos os gaps da sua presença atual e apresentamos um plano de ação.
          </p>

          <div class="reveal-up delay-200">
            <a href="/contato" class="inline-flex items-center gap-3 bg-[#2563EB] hover:bg-blue-700 text-white px-10 py-5 rounded-full font-semibold transition-colors shadow-sm text-[16px]">
              <i data-lucide="calendar-check" class="w-5 h-5"></i>
              Agendar Diagnóstico de Presença
            </a>
          </div>

          <p class="reveal-up delay-300 text-slate-400 text-sm mt-5 mb-8">
            Sem compromisso. Diagnóstico 100% gratuito.
          </p>

          <!-- Micro-pills -->
          <div class="reveal-up delay-[400ms] flex flex-wrap items-center justify-center gap-3">
            <span class="inline-flex items-center gap-1.5 text-sm font-semibold text-slate-600 bg-slate-50 border border-slate-200 rounded-full px-4 py-1.5">
              <i data-lucide="check" class="w-4 h-4 text-green-500"></i>
              Análise de ICP
            </span>
            <span class="inline-flex items-center gap-1.5 text-sm font-semibold text-slate-600 bg-slate-50 border border-slate-200 rounded-full px-4 py-1.5">
              <i data-lucide="check" class="w-4 h-4 text-green-500"></i>
              Mapa de jornada
            </span>
            <span class="inline-flex items-center gap-1.5 text-sm font-semibold text-slate-600 bg-slate-50 border border-slate-200 rounded-full px-4 py-1.5">
              <i data-lucide="check" class="w-4 h-4 text-green-500"></i>
              Plano de ação
            </span>
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

    // Desktop Nav Hover Effects — Produtos e Serviços é o link ativo (índice 2)
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
        const activeLink = document.querySelector('#desktop-nav .nav-link.active-link') || desktopNavLinks[2];
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

    desktopNavLinks[2].classList.add('active-link');

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
