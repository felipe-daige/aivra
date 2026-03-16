<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fluxo de Trabalho & Automações — IA Conversacional e Processos | Aivra</title>
  <meta name="description" content="A Aivra elimina tarefas manuais e implementa I.A. conversacional para que sua equipe foque no que realmente importa — enquanto a tecnologia cuida do resto.">
  <meta property="og:title" content="Fluxo de Trabalho & Automações — IA Conversacional e Processos | Aivra">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ secure_url('/servicos/automacao-fluxo') }}">
  <meta property="og:description" content="Eliminamos tarefas manuais e implementamos I.A. conversacional para que sua equipe foque no que realmente importa — enquanto a tecnologia cuida do resto.">
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
  <meta name="twitter:title" content="Fluxo de Trabalho & Automações — IA Conversacional | Aivra">
  <meta name="twitter:description" content="Eliminamos tarefas manuais e implementamos I.A. conversacional para que sua equipe foque no que realmente importa.">
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
          <i data-lucide="zap" class="w-4 h-4"></i>
          Fluxo de Trabalho &amp; Automações
        </div>

        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 tracking-tight leading-[1.1] mb-5">
          Sua empresa no piloto automático<br class="hidden md:block"> com Inteligência Artificial.
        </h1>
        <p class="text-lg md:text-xl text-slate-500 max-w-2xl mx-auto mb-10 leading-relaxed">
          Eliminamos tarefas manuais e implementamos I.A. conversacional para que sua equipe foque no que realmente importa — enquanto a tecnologia cuida do resto.
        </p>

        <!-- CTAs -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
          <a href="#cta" class="bg-[#2563EB] hover:bg-blue-700 text-white px-8 py-4 rounded-full font-semibold transition-colors shadow-sm text-[15px]">
            Automatizar minha Operação
          </a>
          <a href="#ecossistema" class="bg-white hover:bg-slate-50 text-slate-800 px-8 py-4 rounded-full font-semibold border border-slate-200 transition-colors text-[15px]">
            Ver o CalZap
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
            Da quantização tecnológica à automação total de processos.
          </h2>
          <p class="reveal-up delay-100 text-gray-400 text-lg max-w-2xl mx-auto leading-relaxed">
            Cada processo manual mapeado, cada gargalo quantificado — antes de uma linha de código ser escrita.
          </p>
        </div>

        <!-- Grid 2×2 -->
        <div class="grid md:grid-cols-2 gap-6">
          <!-- A — Análise de Fluxos -->
          <div class="reveal-up delay-100 rounded-[2rem] border border-white/10 bg-white/[0.03] p-8 hover:-translate-y-1 transition-transform">
            <div class="w-14 h-14 rounded-2xl bg-blue-500/20 border border-blue-500/30 flex items-center justify-center mb-6">
              <i data-lucide="git-branch" class="w-7 h-7 text-blue-400"></i>
            </div>
            <div class="flex items-baseline gap-3 mb-3">
              <span class="text-4xl font-black text-blue-400">A</span>
              <h3 class="text-xl font-bold text-white">Análise de Fluxos</h3>
            </div>
            <p class="text-gray-400 leading-relaxed">
              Mapeamos cada etapa do processo, identificando tarefas repetitivas e pontos de falha humana antes de qualquer automação.
            </p>
          </div>

          <!-- A — Arquitetura de Integrações -->
          <div class="reveal-up delay-200 rounded-[2rem] border border-white/10 bg-white/[0.03] p-8 hover:-translate-y-1 transition-transform">
            <div class="w-14 h-14 rounded-2xl bg-indigo-500/20 border border-indigo-500/30 flex items-center justify-center mb-6">
              <i data-lucide="layers" class="w-7 h-7 text-indigo-400"></i>
            </div>
            <div class="flex items-baseline gap-3 mb-3">
              <span class="text-4xl font-black text-indigo-400">A</span>
              <h3 class="text-xl font-bold text-white">Arquitetura de Integrações</h3>
            </div>
            <p class="text-gray-400 leading-relaxed">
              Desenhamos a arquitetura de APIs, webhooks e conectores para que todos os sistemas falem entre si sem atrito.
            </p>
          </div>

          <!-- Q — Quantização Tecnológica -->
          <div class="reveal-up delay-300 rounded-[2rem] border border-white/10 bg-white/[0.03] p-8 hover:-translate-y-1 transition-transform">
            <div class="w-14 h-14 rounded-2xl bg-cyan-500/20 border border-cyan-500/30 flex items-center justify-center mb-6">
              <i data-lucide="bar-chart-2" class="w-7 h-7 text-cyan-400"></i>
            </div>
            <div class="flex items-baseline gap-3 mb-3">
              <span class="text-4xl font-black text-cyan-400">Q</span>
              <h3 class="text-xl font-bold text-white">Quantização Tecnológica</h3>
            </div>
            <p class="text-gray-400 leading-relaxed">
              Medimos tempo gasto, erros humanos e custo operacional atual para provar o ROI da automação antes de implementar.
            </p>
          </div>

          <!-- I — IA Conversacional -->
          <div class="reveal-up delay-[400ms] rounded-[2rem] border border-white/10 bg-white/[0.03] p-8 hover:-translate-y-1 transition-transform">
            <div class="w-14 h-14 rounded-2xl bg-violet-500/20 border border-violet-500/30 flex items-center justify-center mb-6">
              <i data-lucide="message-square" class="w-7 h-7 text-violet-400"></i>
            </div>
            <div class="flex items-baseline gap-3 mb-3">
              <span class="text-4xl font-black text-violet-400">I</span>
              <h3 class="text-xl font-bold text-white">IA Conversacional</h3>
            </div>
            <p class="text-gray-400 leading-relaxed">
              Implementamos agentes de IA que aprendem com a operação, respondem clientes e tomam decisões sem intervenção humana.
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
            Especialistas em IA e integração no seu projeto.
          </h2>
        </div>

        <!-- 3 cards -->
        <div class="grid lg:grid-cols-3 gap-6">
          <!-- Estrategista de Automação -->
          <div class="reveal-up delay-100 rounded-[2rem] border border-white/10 bg-white/[0.03] p-8 hover:-translate-y-1 transition-transform">
            <div class="flex items-center gap-4 mb-6">
              <div class="w-14 h-14 rounded-full bg-blue-600 flex items-center justify-center text-white font-black text-xl shrink-0">
                E
              </div>
              <div>
                <p class="font-bold text-white text-lg leading-tight">Estrategista de Automação</p>
                <span class="inline-flex items-center gap-1 text-xs font-semibold text-blue-400 bg-blue-500/10 border border-blue-500/20 rounded-full px-2.5 py-0.5 mt-1">
                  <i data-lucide="git-branch" class="w-3 h-3"></i>
                  Automação
                </span>
              </div>
            </div>
            <p class="text-gray-400 leading-relaxed">
              Integrando sistemas para eliminar gargalos e criar fluxos que operam sem supervisão constante.
            </p>
          </div>

          <!-- Engenheiro de IA -->
          <div class="reveal-up delay-200 rounded-[2rem] border border-white/10 bg-white/[0.03] p-8 hover:-translate-y-1 transition-transform">
            <div class="flex items-center gap-4 mb-6">
              <div class="w-14 h-14 rounded-full bg-violet-600 flex items-center justify-center text-white font-black text-xl shrink-0">
                I
              </div>
              <div>
                <p class="font-bold text-white text-lg leading-tight">Engenheiro de IA</p>
                <span class="inline-flex items-center gap-1 text-xs font-semibold text-violet-400 bg-violet-500/10 border border-violet-500/20 rounded-full px-2.5 py-0.5 mt-1">
                  <i data-lucide="cpu" class="w-3 h-3"></i>
                  Inteligência Artificial
                </span>
              </div>
            </div>
            <p class="text-gray-400 leading-relaxed">
              Criando modelos que aprendem com a operação e evoluem conforme o negócio cresce.
            </p>
          </div>

          <!-- Desenvolvedor Full-Stack -->
          <div class="reveal-up delay-300 rounded-[2rem] border border-white/10 bg-white/[0.03] p-8 hover:-translate-y-1 transition-transform">
            <div class="flex items-center gap-4 mb-6">
              <div class="w-14 h-14 rounded-full bg-green-600 flex items-center justify-center text-white font-black text-xl shrink-0">
                D
              </div>
              <div>
                <p class="font-bold text-white text-lg leading-tight">Desenvolvedor Full-Stack</p>
                <span class="inline-flex items-center gap-1 text-xs font-semibold text-green-400 bg-green-500/10 border border-green-500/20 rounded-full px-2.5 py-0.5 mt-1">
                  <i data-lucide="code" class="w-3 h-3"></i>
                  Engenharia
                </span>
              </div>
            </div>
            <p class="text-gray-400 leading-relaxed">
              Engenharia de software para automações complexas que escalam com a demanda.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== SEÇÃO 4: ECOSSISTEMA ATIVO (claro bg-white) ===== -->
    <section id="ecossistema" class="bg-white py-24">
      <div class="max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8">
        <div class="text-center mb-16">
          <div class="inline-flex items-center gap-2 text-blue-600 bg-blue-50 border border-blue-100 rounded-full px-4 py-1.5 text-sm font-semibold mb-6">
            <i data-lucide="rocket" class="w-4 h-4"></i>
            Ecossistema em Produção
          </div>
          <h2 class="reveal-up text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 tracking-tight mb-5">
            Produtos que aceleram seu atendimento agora.
          </h2>
          <p class="reveal-up delay-100 text-slate-500 text-lg max-w-2xl mx-auto leading-relaxed">
            Dois motores de automação construídos com a mesma metodologia A.A.Q.I. — um ativo, um chegando.
          </p>
        </div>

        <!-- 2 cards lado a lado -->
        <div class="grid lg:grid-cols-2 gap-8">

          <!-- Card 1 — CalZap (ativo) -->
          <div class="reveal-up delay-100 rounded-[2rem] border border-slate-200 bg-slate-50 p-8 hover:-translate-y-1 transition-transform">
            <div class="flex items-start justify-between mb-6">
              <div class="w-14 h-14 rounded-2xl bg-green-100 border border-green-200 flex items-center justify-center shrink-0">
                <i data-lucide="phone" class="w-7 h-7 text-green-600"></i>
              </div>
              <span class="inline-flex items-center gap-1.5 text-xs font-bold text-green-700 bg-green-100 border border-green-200 rounded-full px-3 py-1">
                <span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></span>
                em produção
              </span>
            </div>

            <h3 class="text-2xl font-bold text-slate-900 mb-3">CalZap</h3>
            <p class="text-slate-500 leading-relaxed mb-6">
              Agendamento inteligente via WhatsApp. Seu cliente agenda, confirma e recebe lembretes automaticamente — zero intervenção manual.
            </p>

            <!-- Features -->
            <ul class="space-y-3 mb-8">
              <li class="flex items-center gap-3 text-slate-700 font-medium">
                <div class="w-5 h-5 rounded-full bg-green-100 border border-green-200 flex items-center justify-center shrink-0">
                  <i data-lucide="check" class="w-3 h-3 text-green-600"></i>
                </div>
                Agendamento via WhatsApp
              </li>
              <li class="flex items-center gap-3 text-slate-700 font-medium">
                <div class="w-5 h-5 rounded-full bg-green-100 border border-green-200 flex items-center justify-center shrink-0">
                  <i data-lucide="check" class="w-3 h-3 text-green-600"></i>
                </div>
                Confirmações automáticas
              </li>
              <li class="flex items-center gap-3 text-slate-700 font-medium">
                <div class="w-5 h-5 rounded-full bg-green-100 border border-green-200 flex items-center justify-center shrink-0">
                  <i data-lucide="check" class="w-3 h-3 text-green-600"></i>
                </div>
                Lembretes inteligentes
              </li>
            </ul>

            <!-- Pill produto -->
            <span class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-white border border-slate-200 text-slate-700 font-semibold text-sm">
              <i data-lucide="phone" class="w-4 h-4 text-green-500"></i>
              calzap.com.br
              <span class="inline-flex items-center px-2 py-0.5 rounded-full bg-green-100 border border-green-200 text-green-700 text-xs font-bold ml-1">ativo</span>
            </span>
          </div>

          <!-- Card 2 — BotPlantão (em breve) -->
          <div class="reveal-up delay-200 rounded-[2rem] border border-slate-200 bg-slate-50 p-8 hover:-translate-y-1 transition-transform">
            <div class="flex items-start justify-between mb-6">
              <div class="w-14 h-14 rounded-2xl bg-violet-100 border border-violet-200 flex items-center justify-center shrink-0">
                <i data-lucide="message-circle" class="w-7 h-7 text-violet-600"></i>
              </div>
              <span class="inline-flex items-center gap-1.5 text-xs font-bold text-amber-700 bg-amber-100 border border-amber-200 rounded-full px-3 py-1">
                em breve
              </span>
            </div>

            <h3 class="text-2xl font-bold text-slate-900 mb-3">BotPlantão</h3>
            <p class="text-slate-500 leading-relaxed mb-6">
              IA conversacional de plantão 24/7. Responde dúvidas, qualifica leads e encaminha atendimentos mesmo fora do horário comercial.
            </p>

            <!-- Features -->
            <ul class="space-y-3 mb-8">
              <li class="flex items-center gap-3 text-slate-700 font-medium">
                <div class="w-5 h-5 rounded-full bg-violet-100 border border-violet-200 flex items-center justify-center shrink-0">
                  <i data-lucide="check" class="w-3 h-3 text-violet-600"></i>
                </div>
                Atendimento 24/7
              </li>
              <li class="flex items-center gap-3 text-slate-700 font-medium">
                <div class="w-5 h-5 rounded-full bg-violet-100 border border-violet-200 flex items-center justify-center shrink-0">
                  <i data-lucide="check" class="w-3 h-3 text-violet-600"></i>
                </div>
                Qualificação de leads
              </li>
              <li class="flex items-center gap-3 text-slate-700 font-medium">
                <div class="w-5 h-5 rounded-full bg-violet-100 border border-violet-200 flex items-center justify-center shrink-0">
                  <i data-lucide="check" class="w-3 h-3 text-violet-600"></i>
                </div>
                Transferência inteligente
              </li>
            </ul>

            <!-- Pill produto -->
            <span class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-white border border-slate-200 text-slate-700 font-semibold text-sm">
              <i data-lucide="message-circle" class="w-4 h-4 text-violet-500"></i>
              botplantao
              <span class="inline-flex items-center px-2 py-0.5 rounded-full bg-amber-100 border border-amber-200 text-amber-700 text-xs font-bold ml-1">em breve</span>
            </span>
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
            Pronto para automatizar sua operação?
          </h2>
          <p class="reveal-up delay-100 text-lg text-slate-500 mb-10 leading-relaxed">
            Solicite uma consultoria estratégica gratuita. Em 45 minutos, mapeamos os processos manuais da sua empresa e entregamos um plano de automação completo.
          </p>

          <div class="reveal-up delay-200">
            <a href="/contato" class="inline-flex items-center gap-3 bg-[#2563EB] hover:bg-blue-700 text-white px-10 py-5 rounded-full font-semibold transition-colors shadow-sm text-[16px]">
              <i data-lucide="zap" class="w-5 h-5"></i>
              Automatizar minha Operação
            </a>
          </div>

          <p class="reveal-up delay-300 text-slate-400 text-sm mt-5 mb-8">
            Sem compromisso. Consultoria 100% gratuita.
          </p>

          <!-- Micro-pills -->
          <div class="reveal-up delay-[400ms] flex flex-wrap items-center justify-center gap-3">
            <span class="inline-flex items-center gap-1.5 text-sm font-semibold text-slate-600 bg-slate-50 border border-slate-200 rounded-full px-4 py-1.5">
              <i data-lucide="check" class="w-4 h-4 text-green-500"></i>
              Mapa de Processos
            </span>
            <span class="inline-flex items-center gap-1.5 text-sm font-semibold text-slate-600 bg-slate-50 border border-slate-200 rounded-full px-4 py-1.5">
              <i data-lucide="check" class="w-4 h-4 text-green-500"></i>
              ROI Estimado
            </span>
            <span class="inline-flex items-center gap-1.5 text-sm font-semibold text-slate-600 bg-slate-50 border border-slate-200 rounded-full px-4 py-1.5">
              <i data-lucide="check" class="w-4 h-4 text-green-500"></i>
              Plano de Automação
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
