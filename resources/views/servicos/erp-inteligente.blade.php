<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ERP Inteligente — BI, Segurança e Gestão Fiscal | Aivra</title>
  <meta name="description" content="A Aivra integra Business Intelligence, segurança de dados e gestão fiscal para dar às empresas o controle real que precisam para escalar com previsibilidade.">
  <meta property="og:title" content="ERP Inteligente — BI, Segurança e Gestão Fiscal | Aivra">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ secure_url('/servicos/erp-inteligente') }}">
  <meta property="og:description" content="Integramos Business Intelligence, segurança de dados e gestão fiscal para dar às empresas o controle real que precisam para escalar com previsibilidade.">
  <meta property="og:image" content="https://aivratech.com.br/aivra_linkpreview.png">
  <meta property="og:image:secure_url" content="https://aivratech.com.br/aivra_linkpreview.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="Aivra — Engenharia de Performance e Estratégia Digital">
  <meta property="og:site_name" content="Aivra">
  @if(config('services.facebook.app_id'))
  <meta property="fb:app_id" content="{{ config('services.facebook.app_id') }}">
  @endif
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="ERP Inteligente — BI, Segurança e Gestão Fiscal | Aivra">
  <meta name="twitter:description" content="Integramos Business Intelligence, segurança de dados e gestão fiscal para escalar com previsibilidade.">
  <meta name="twitter:image" content="{{ secure_asset('aivra_linkpreview.png') }}">

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
          <i data-lucide="database" class="w-4 h-4"></i>
          ERP &amp; Operação Inteligente
        </div>

        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 tracking-tight leading-[1.1] mb-5">
          Gestão sem pontos cegos.<br class="hidden md:block"> Operação sem falhas.
        </h1>
        <p class="text-lg md:text-xl text-slate-500 max-w-2xl mx-auto mb-10 leading-relaxed">
          Integramos Business Intelligence, segurança de dados e gestão fiscal para dar às empresas o controle real que precisam para escalar com previsibilidade.
        </p>

        <!-- CTAs -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
          <a href="#cta" class="bg-[#2563EB] hover:bg-blue-700 text-white px-8 py-4 rounded-full font-semibold transition-colors shadow-sm text-[15px]">
            Solicitar Consultoria
          </a>
          <a href="#fiscaldock" class="bg-white hover:bg-slate-50 text-slate-800 px-8 py-4 rounded-full font-semibold border border-slate-200 transition-colors text-[15px]">
            Ver o FiscalDock
          </a>
        </div>
      </div>
    </section>

    <!-- ===== SEÇÃO 2: MÉTODO A.A.Q.I. EM AÇÃO (escuro #020817) ===== -->
    <section class="relative bg-[#020817] py-24 overflow-hidden">
      <div class="relative z-10 max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8">
        <div class="text-center mb-16">
          <div class="inline-flex items-center gap-2 text-blue-400 bg-blue-500/10 border border-blue-500/20 rounded-full px-4 py-1.5 text-sm font-semibold mb-6">
            <i data-lucide="zap" class="w-4 h-4"></i>
            Método A.A.Q.I. em Ação
          </div>
          <h2 class="reveal-up text-3xl md:text-4xl lg:text-5xl font-bold text-white tracking-tight mb-5">
            Da análise de dados à inteligência preditiva.
          </h2>
          <p class="reveal-up delay-100 text-gray-400 text-lg max-w-2xl mx-auto leading-relaxed">
            Cada camada da sua operação é mapeada, estruturada e monitorada — antes de qualquer linha de código.
          </p>
        </div>

        <!-- Grid 2×2 -->
        <div class="grid md:grid-cols-2 gap-6">
          <!-- A — Análise de Processos -->
          <div class="reveal-up delay-100 rounded-[2rem] border border-white/10 bg-white/[0.03] p-8 hover:-translate-y-1 transition-transform">
            <div class="w-14 h-14 rounded-2xl bg-blue-500/20 border border-blue-500/30 flex items-center justify-center mb-6">
              <i data-lucide="search" class="w-7 h-7 text-blue-400"></i>
            </div>
            <div class="flex items-baseline gap-3 mb-3">
              <span class="text-4xl font-black text-blue-400">A</span>
              <h3 class="text-xl font-bold text-white">Análise de Processos</h3>
            </div>
            <p class="text-gray-400 leading-relaxed">
              Mapeamos fluxos operacionais, gargalos e pontos de perda de receita antes de propor qualquer solução técnica.
            </p>
          </div>

          <!-- A — Arquitetura de Dados -->
          <div class="reveal-up delay-200 rounded-[2rem] border border-white/10 bg-white/[0.03] p-8 hover:-translate-y-1 transition-transform">
            <div class="w-14 h-14 rounded-2xl bg-indigo-500/20 border border-indigo-500/30 flex items-center justify-center mb-6">
              <i data-lucide="layers" class="w-7 h-7 text-indigo-400"></i>
            </div>
            <div class="flex items-baseline gap-3 mb-3">
              <span class="text-4xl font-black text-indigo-400">A</span>
              <h3 class="text-xl font-bold text-white">Arquitetura de Dados</h3>
            </div>
            <p class="text-gray-400 leading-relaxed">
              Estruturamos modelo de dados, integrações e camada de segurança sob medida para a complexidade do seu negócio.
            </p>
          </div>

          <!-- Q — Quantização Operacional -->
          <div class="reveal-up delay-300 rounded-[2rem] border border-white/10 bg-white/[0.03] p-8 hover:-translate-y-1 transition-transform">
            <div class="w-14 h-14 rounded-2xl bg-cyan-500/20 border border-cyan-500/30 flex items-center justify-center mb-6">
              <i data-lucide="bar-chart-2" class="w-7 h-7 text-cyan-400"></i>
            </div>
            <div class="flex items-baseline gap-3 mb-3">
              <span class="text-4xl font-black text-cyan-400">Q</span>
              <h3 class="text-xl font-bold text-white">Quantização Operacional</h3>
            </div>
            <p class="text-gray-400 leading-relaxed">
              KPIs de eficiência, dashboards em tempo real e alertas configurados antes do go-live.
            </p>
          </div>

          <!-- I — Inteligência Preditiva -->
          <div class="reveal-up delay-[400ms] rounded-[2rem] border border-white/10 bg-white/[0.03] p-8 hover:-translate-y-1 transition-transform">
            <div class="w-14 h-14 rounded-2xl bg-violet-500/20 border border-violet-500/30 flex items-center justify-center mb-6">
              <i data-lucide="cpu" class="w-7 h-7 text-violet-400"></i>
            </div>
            <div class="flex items-baseline gap-3 mb-3">
              <span class="text-4xl font-black text-violet-400">I</span>
              <h3 class="text-xl font-bold text-white">Inteligência Preditiva</h3>
            </div>
            <p class="text-gray-400 leading-relaxed">
              IA para detecção de anomalias, previsão de demanda e automação de decisões operacionais repetitivas.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== SEÇÃO 3: SQUAD EM AÇÃO (escuro #020817) ===== -->
    <section class="bg-[#020817] py-24 border-t border-white/5">
      <div class="max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8">
        <div class="text-center mb-16">
          <div class="inline-flex items-center gap-2 text-blue-400 bg-blue-500/10 border border-blue-500/20 rounded-full px-4 py-1.5 text-sm font-semibold mb-6">
            <i data-lucide="users" class="w-4 h-4"></i>
            Quem Executa
          </div>
          <h2 class="reveal-up text-3xl md:text-4xl lg:text-5xl font-bold text-white tracking-tight mb-5">
            Engenharia e segurança.<br class="hidden md:block"> Do core ao perímetro.
          </h2>
        </div>

        <!-- 3 cards -->
        <div class="grid lg:grid-cols-3 gap-6">
          <!-- Arquiteto de Soluções -->
          <div class="reveal-up delay-100 rounded-[2rem] border border-white/10 bg-white/[0.03] p-8 hover:-translate-y-1 transition-transform">
            <div class="flex items-center gap-4 mb-6">
              <div class="w-14 h-14 rounded-full bg-indigo-600 flex items-center justify-center text-white font-black text-xl shrink-0">
                A
              </div>
              <div>
                <p class="font-bold text-white text-lg leading-tight">Arquiteto de Soluções</p>
                <span class="inline-flex items-center gap-1 text-xs font-semibold text-indigo-400 bg-indigo-500/10 border border-indigo-500/20 rounded-full px-2.5 py-0.5 mt-1">
                  <i data-lucide="server" class="w-3 h-3"></i>
                  Arquitetura
                </span>
              </div>
            </div>
            <p class="text-gray-400 leading-relaxed">
              Desenhando o esqueleto técnico robusto que sustenta sua operação hoje e suporta o crescimento de amanhã.
            </p>
          </div>

          <!-- Analista de B.I. -->
          <div class="reveal-up delay-200 rounded-[2rem] border border-white/10 bg-white/[0.03] p-8 hover:-translate-y-1 transition-transform">
            <div class="flex items-center gap-4 mb-6">
              <div class="w-14 h-14 rounded-full bg-cyan-600 flex items-center justify-center text-white font-black text-xl shrink-0">
                B
              </div>
              <div>
                <p class="font-bold text-white text-lg leading-tight">Analista de B.I.</p>
                <span class="inline-flex items-center gap-1 text-xs font-semibold text-cyan-400 bg-cyan-500/10 border border-cyan-500/20 rounded-full px-2.5 py-0.5 mt-1">
                  <i data-lucide="bar-chart-2" class="w-3 h-3"></i>
                  Business Intelligence
                </span>
              </div>
            </div>
            <p class="text-gray-400 leading-relaxed">
              Transformando dados operacionais brutos em dashboards e decisões que impactam diretamente o lucro.
            </p>
          </div>

          <!-- Especialista em Cibersegurança -->
          <div class="reveal-up delay-300 rounded-[2rem] border border-white/10 bg-white/[0.03] p-8 hover:-translate-y-1 transition-transform">
            <div class="flex items-center gap-4 mb-6">
              <div class="w-14 h-14 rounded-full bg-red-600 flex items-center justify-center text-white font-black text-xl shrink-0">
                C
              </div>
              <div>
                <p class="font-bold text-white text-lg leading-tight">Especialista em Cibersegurança</p>
                <span class="inline-flex items-center gap-1 text-xs font-semibold text-red-400 bg-red-500/10 border border-red-500/20 rounded-full px-2.5 py-0.5 mt-1">
                  <i data-lucide="shield" class="w-3 h-3"></i>
                  Segurança
                </span>
              </div>
            </div>
            <p class="text-gray-400 leading-relaxed">
              Blindagem total da infraestrutura, dados sensíveis e conformidade regulatória — sem concessões.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== SEÇÃO 4: FISCALDOCK (claro bg-white) ===== -->
    <section id="fiscaldock" class="bg-white py-24">
      <div class="max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
          <!-- Esquerda: Texto -->
          <div>
            <div class="inline-flex items-center gap-2 text-amber-600 bg-amber-50 border border-amber-100 rounded-full px-4 py-1.5 text-sm font-semibold mb-6">
              <i data-lucide="rocket" class="w-4 h-4"></i>
              Em Breve
            </div>
            <h2 class="reveal-up text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 tracking-tight leading-[1.15] mb-6">
              O futuro da gestão fiscal inteligente chegando ao mercado.
            </h2>
            <p class="reveal-up delay-100 text-slate-500 leading-relaxed mb-5">
              O <strong class="text-slate-700">fiscaldock.com.br</strong> é o produto que a Aivra está construindo com esta metodologia — uma plataforma de gestão fiscal B2B que automatiza obrigações, centraliza documentos e entrega inteligência tributária em tempo real.
            </p>
            <p class="reveal-up delay-200 text-slate-500 leading-relaxed mb-8">
              Cada decisão técnica foi validada contra a dor real dos departamentos fiscais: complexidade tributária, retrabalho manual e risco de autuação.
            </p>
            <!-- Pill do produto -->
            <div class="reveal-up delay-300">
              <span class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-slate-100 border border-slate-200 text-slate-700 font-semibold text-sm">
                <i data-lucide="file-text" class="w-4 h-4 text-blue-500"></i>
                fiscaldock.com.br
                <span class="inline-flex items-center px-2 py-0.5 rounded-full bg-amber-100 border border-amber-200 text-amber-700 text-xs font-bold ml-1">em breve</span>
              </span>
            </div>
          </div>

          <!-- Direita: Feature cards -->
          <div class="space-y-4">
            <div class="reveal-up delay-100 rounded-[2rem] border border-slate-200 bg-slate-50 p-6 hover:-translate-y-1 transition-transform">
              <div class="flex items-center gap-4 mb-2">
                <div class="w-10 h-10 rounded-xl bg-green-100 border border-green-200 flex items-center justify-center shrink-0">
                  <i data-lucide="file-check" class="w-5 h-5 text-green-600"></i>
                </div>
                <p class="text-slate-900 font-bold text-lg">Obrigações Automatizadas</p>
              </div>
              <p class="text-slate-500 text-sm leading-relaxed pl-14">NFe, SPED, DCTF e mais — gerados e entregues automaticamente.</p>
            </div>

            <div class="reveal-up delay-200 rounded-[2rem] border border-slate-200 bg-slate-50 p-6 hover:-translate-y-1 transition-transform">
              <div class="flex items-center gap-4 mb-2">
                <div class="w-10 h-10 rounded-xl bg-blue-100 border border-blue-200 flex items-center justify-center shrink-0">
                  <i data-lucide="lock" class="w-5 h-5 text-blue-600"></i>
                </div>
                <p class="text-slate-900 font-bold text-lg">Dados Fiscais Seguros</p>
              </div>
              <p class="text-slate-500 text-sm leading-relaxed pl-14">Armazenamento criptografado e conformidade com LGPD desde a fundação.</p>
            </div>

            <div class="reveal-up delay-300 rounded-[2rem] border border-slate-200 bg-slate-50 p-6 hover:-translate-y-1 transition-transform">
              <div class="flex items-center gap-4 mb-2">
                <div class="w-10 h-10 rounded-xl bg-violet-100 border border-violet-200 flex items-center justify-center shrink-0">
                  <i data-lucide="cpu" class="w-5 h-5 text-violet-600"></i>
                </div>
                <p class="text-slate-900 font-bold text-lg">IA Tributária</p>
              </div>
              <p class="text-slate-500 text-sm leading-relaxed pl-14">Alertas proativos de oportunidades de recuperação fiscal e riscos de autuação.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== SEÇÃO 5: CTA (claro bg-white) ===== -->
    <section id="cta" class="bg-white py-24 border-t border-slate-100">
      <div class="max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto text-center">
          <div class="inline-flex items-center gap-2 text-blue-600 bg-blue-50 border border-blue-100 rounded-full px-4 py-1.5 text-sm font-semibold mb-6">
            <i data-lucide="briefcase" class="w-4 h-4"></i>
            Próximo Passo
          </div>
          <h2 class="reveal-up text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 tracking-tight mb-5">
            Pronto para ter controle total da sua operação?
          </h2>
          <p class="reveal-up delay-100 text-lg text-slate-500 mb-10 leading-relaxed">
            Solicite uma consultoria estratégica gratuita. Em 45 minutos, auditamos seus processos atuais e entregamos um mapa de oportunidades.
          </p>

          <div class="reveal-up delay-200">
            <a href="/contato" class="inline-flex items-center gap-3 bg-[#2563EB] hover:bg-blue-700 text-white px-10 py-5 rounded-full font-semibold transition-colors shadow-sm text-[16px]">
              <i data-lucide="phone" class="w-5 h-5"></i>
              Solicitar Consultoria Estratégica
            </a>
          </div>

          <p class="reveal-up delay-300 text-slate-400 text-sm mt-5 mb-8">
            Sem compromisso. Consultoria 100% gratuita.
          </p>

          <!-- Micro-pills -->
          <div class="reveal-up delay-[400ms] flex flex-wrap items-center justify-center gap-3">
            <span class="inline-flex items-center gap-1.5 text-sm font-semibold text-slate-600 bg-slate-50 border border-slate-200 rounded-full px-4 py-1.5">
              <i data-lucide="check" class="w-4 h-4 text-green-500"></i>
              Auditoria Operacional
            </span>
            <span class="inline-flex items-center gap-1.5 text-sm font-semibold text-slate-600 bg-slate-50 border border-slate-200 rounded-full px-4 py-1.5">
              <i data-lucide="check" class="w-4 h-4 text-green-500"></i>
              Mapa de Dados
            </span>
            <span class="inline-flex items-center gap-1.5 text-sm font-semibold text-slate-600 bg-slate-50 border border-slate-200 rounded-full px-4 py-1.5">
              <i data-lucide="check" class="w-4 h-4 text-green-500"></i>
              Plano de Escala
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
        header.classList.remove('shadow-sm');
        // não esconde — header permanece visível
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
