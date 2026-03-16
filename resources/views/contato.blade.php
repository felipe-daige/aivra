<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Solicite sua Consultoria — Aivra</title>
  <meta name="description" content="Solicite uma consultoria gratuita com a Aivra. Em 45 minutos, identificamos gargalos operacionais e entregamos um plano de automação personalizado.">
  <meta property="og:title" content="Solicite sua Consultoria — Aivra">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ secure_url('/contato') }}">
  <meta property="og:description" content="Consultoria estratégica gratuita. Em 45 min, diagnóstico completo dos gargalos da sua operação.">
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
  <meta name="twitter:title" content="Solicite sua Consultoria — Aivra">
  <meta name="twitter:description" content="Consultoria estratégica gratuita. Em 45 min, diagnóstico completo dos gargalos da sua operação.">
  <meta name="twitter:image" content="{{ secure_asset('aivra_linkpreview.png') }}">

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

  @include('partials.header', ['activeNav' => 'contato'])

  <main>

    <!-- ===== SEÇÃO 1: HERO (claro #F8FAFC) ===== -->
    <section class="relative overflow-hidden bg-[#F8FAFC] pt-36 lg:pt-44 pb-20">
      <div class="absolute inset-0 bg-[linear-gradient(to_right,#e2e8f0_1px,transparent_1px),linear-gradient(to_bottom,#e2e8f0_1px,transparent_1px)] bg-[size:3rem_3rem] [mask-image:radial-gradient(ellipse_80%_60%_at_50%_40%,#000_60%,transparent_100%)] opacity-40"></div>
      <div class="absolute inset-0 bg-[radial-gradient(ellipse_70%_50%_at_50%_0%,rgba(219,234,254,0.7)_0%,transparent_70%)]"></div>
      <div class="absolute -top-10 -right-10 w-[28rem] h-[28rem] rounded-full bg-blue-200/60 blur-3xl pointer-events-none animate-float-blob-a"></div>
      <div class="absolute -bottom-5 -left-5 w-80 h-80 rounded-full bg-indigo-200/50 blur-3xl pointer-events-none animate-float-blob-b"></div>

      <div class="relative z-10 max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8 text-center">
        <div class="inline-flex items-center gap-2 text-blue-600 bg-blue-50 border border-blue-100 rounded-full px-4 py-1.5 text-sm font-semibold mb-6">
          <i data-lucide="phone" class="w-4 h-4"></i>
          Consultoria Estratégica Gratuita
        </div>

        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 tracking-tight leading-[1.1] mb-5">
          Vamos mapear o potencial<br class="hidden md:block"> da sua empresa juntos.
        </h1>
        <p class="text-lg md:text-xl text-slate-500 max-w-2xl mx-auto mb-8 leading-relaxed">
          Em 45 minutos, identificamos os gargalos operacionais e entregamos um plano de automação personalizado — sem compromisso.
        </p>

        <!-- Micro-pills -->
        <div class="flex flex-wrap items-center justify-center gap-3">
          <span class="inline-flex items-center gap-1.5 text-sm font-semibold text-slate-600 bg-white border border-slate-200 rounded-full px-4 py-1.5">
            <i data-lucide="check" class="w-4 h-4 text-green-500"></i>
            Diagnóstico em 45 min
          </span>
          <span class="inline-flex items-center gap-1.5 text-sm font-semibold text-slate-600 bg-white border border-slate-200 rounded-full px-4 py-1.5">
            <i data-lucide="check" class="w-4 h-4 text-green-500"></i>
            Sem compromisso
          </span>
          <span class="inline-flex items-center gap-1.5 text-sm font-semibold text-slate-600 bg-white border border-slate-200 rounded-full px-4 py-1.5">
            <i data-lucide="check" class="w-4 h-4 text-green-500"></i>
            100% Gratuito
          </span>
        </div>
      </div>
    </section>

    <!-- ===== SEÇÃO 2: FORMULÁRIO (claro bg-white) ===== -->
    <section class="bg-gradient-to-b from-slate-50 to-white py-20">
      <div class="max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto">
          <div class="rounded-[2rem] border border-slate-200/80 bg-white shadow-xl overflow-hidden">
            <!-- Topo azul accent -->
            <div class="h-1.5 bg-gradient-to-r from-blue-500 to-blue-700 w-full"></div>
            <div class="p-8 md:p-10">
              <!-- Header do card -->
              <div class="mb-8">
                <h2 class="text-xl font-bold text-slate-900">Solicite sua Consultoria</h2>
                <p class="text-sm text-slate-500 mt-1">Preencha os campos abaixo. Responderemos em até 24h.</p>
              </div>

            <!-- Estado de sucesso -->
            <div id="form-success" class="hidden flex-col items-center gap-4 py-8 text-center">
              <div class="w-16 h-16 rounded-full bg-green-100 flex items-center justify-center mx-auto">
                <i data-lucide="check-circle" class="w-8 h-8 text-green-600"></i>
              </div>
              <h3 class="text-xl font-bold text-slate-900">Solicitação enviada com sucesso!</h3>
              <p class="text-slate-500">Entraremos em contato em breve para agendar sua consultoria gratuita.</p>
            </div>

            <!-- Estado de erro -->
            <div id="form-error" class="hidden flex-col items-center gap-3 mb-6 p-4 bg-red-50 border border-red-200 rounded-xl">
              <div class="flex items-center gap-2">
                <i data-lucide="alert-circle" class="w-5 h-5 text-red-600 shrink-0"></i>
                <p id="form-error-msg" class="text-red-600 text-sm font-semibold">Ocorreu um erro ao enviar. Tente novamente.</p>
              </div>
            </div>

            <!-- Formulário -->
            <form id="lead-form" class="space-y-5">
              <div class="grid sm:grid-cols-2 gap-5">
                <div>
                  <label class="block text-sm font-semibold text-slate-800 mb-1.5 tracking-tight">
                    Nome completo <span class="text-red-500">*</span>
                  </label>
                  <div class="relative">
                    <span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none">
                      <i data-lucide="user" class="w-4 h-4"></i>
                    </span>
                    <input type="text" name="name" required placeholder="Seu nome"
                      class="w-full rounded-xl border border-slate-200 pl-10 pr-4 py-3 text-slate-900 placeholder-slate-400 text-sm focus:outline-none focus:ring-2 focus:ring-blue-600/20 focus:border-blue-600 transition-colors">
                  </div>
                </div>
                <div>
                  <label class="block text-sm font-semibold text-slate-800 mb-1.5 tracking-tight">
                    E-mail <span class="text-red-500">*</span>
                  </label>
                  <div class="relative">
                    <span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none">
                      <i data-lucide="mail" class="w-4 h-4"></i>
                    </span>
                    <input type="email" name="email" required placeholder="seu@email.com"
                      class="w-full rounded-xl border border-slate-200 pl-10 pr-4 py-3 text-slate-900 placeholder-slate-400 text-sm focus:outline-none focus:ring-2 focus:ring-blue-600/20 focus:border-blue-600 transition-colors">
                  </div>
                </div>
              </div>

              <div class="grid sm:grid-cols-2 gap-5">
                <div>
                  <label class="block text-sm font-semibold text-slate-800 mb-1.5 tracking-tight">
                    WhatsApp <span class="text-red-500">*</span>
                  </label>
                  <div class="relative">
                    <span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none">
                      <i data-lucide="phone" class="w-4 h-4"></i>
                    </span>
                    <input type="tel" name="whatsapp" required placeholder="+55 (67) 9..."
                      class="w-full rounded-xl border border-slate-200 pl-10 pr-4 py-3 text-slate-900 placeholder-slate-400 text-sm focus:outline-none focus:ring-2 focus:ring-blue-600/20 focus:border-blue-600 transition-colors">
                  </div>
                </div>
                <div>
                  <label class="block text-sm font-semibold text-slate-800 mb-1.5 tracking-tight">
                    Empresa <span class="text-red-500">*</span>
                  </label>
                  <div class="relative">
                    <span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none">
                      <i data-lucide="building-2" class="w-4 h-4"></i>
                    </span>
                    <input type="text" name="company" required placeholder="Nome da empresa"
                      class="w-full rounded-xl border border-slate-200 pl-10 pr-4 py-3 text-slate-900 placeholder-slate-400 text-sm focus:outline-none focus:ring-2 focus:ring-blue-600/20 focus:border-blue-600 transition-colors">
                  </div>
                </div>
              </div>

              <div>
                <label class="block text-sm font-semibold text-slate-800 mb-1.5 tracking-tight">Cargo</label>
                <div class="relative">
                  <span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none">
                    <i data-lucide="briefcase" class="w-4 h-4"></i>
                  </span>
                  <input type="text" name="role" placeholder="Seu cargo na empresa"
                    class="w-full rounded-xl border border-slate-200 pl-10 pr-4 py-3 text-slate-900 placeholder-slate-400 text-sm focus:outline-none focus:ring-2 focus:ring-blue-600/20 focus:border-blue-600 transition-colors">
                </div>
              </div>

              <div>
                <label class="block text-sm font-semibold text-slate-800 mb-1.5 tracking-tight">
                  Principal desafio da operação <span class="text-red-500">*</span>
                </label>
                <textarea name="main_problem" required rows="4"
                  placeholder="Descreva o maior gargalo ou problema que enfrenta hoje..."
                  class="w-full rounded-xl border border-slate-200 px-4 py-3 text-slate-900 placeholder-slate-400 text-sm focus:outline-none focus:ring-2 focus:ring-blue-600/20 focus:border-blue-600 transition-colors resize-none"></textarea>
              </div>

              <div>
                <label class="block text-sm font-semibold text-slate-800 mb-1.5 tracking-tight">
                  O que espera alcançar com tecnologia?
                </label>
                <textarea name="expectation" rows="3"
                  placeholder="Ex.: reduzir custos operacionais, automatizar processos, integrar sistemas..."
                  class="w-full rounded-xl border border-slate-200 px-4 py-3 text-slate-900 placeholder-slate-400 text-sm focus:outline-none focus:ring-2 focus:ring-blue-600/20 focus:border-blue-600 transition-colors resize-none"></textarea>
              </div>

              <button type="submit" id="submit-btn"
                class="w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white py-4 rounded-xl font-semibold text-base transition-all flex items-center justify-center gap-2 shadow-md hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0">
                <span id="btn-text" class="flex items-center gap-2">
                  <i data-lucide="arrow-right" class="w-4 h-4"></i>
                  Enviar Solicitação
                </span>
                <span id="btn-loading" class="hidden items-center gap-2">
                  <svg class="animate-spin w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                  </svg>
                  Enviando...
                </span>
              </button>
            </form>

            </div>{{-- /p-8 md:p-10 --}}
          </div>
        </div>
      </div>
    </section>

    <!-- ===== SEÇÃO 3: BENEFÍCIOS (claro bg-white) ===== -->
    <section class="bg-white py-16 border-t border-slate-100">
      <div class="max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8">
        <div class="grid md:grid-cols-3 gap-6 max-w-4xl mx-auto">

          <div class="reveal-up rounded-[2rem] border border-slate-200 bg-slate-50 p-6">
            <div class="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center mb-4">
              <i data-lucide="search" class="w-5 h-5 text-blue-600"></i>
            </div>
            <h3 class="font-bold text-slate-900 mb-2">Diagnóstico Estrutural</h3>
            <p class="text-sm text-slate-500 leading-relaxed">Identificamos processos manuais e gargalos reais da operação.</p>
          </div>

          <div class="reveal-up delay-100 rounded-[2rem] border border-slate-200 bg-slate-50 p-6">
            <div class="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center mb-4">
              <i data-lucide="bar-chart-2" class="w-5 h-5 text-blue-600"></i>
            </div>
            <h3 class="font-bold text-slate-900 mb-2">ROI Projetado</h3>
            <p class="text-sm text-slate-500 leading-relaxed">Quantificamos o retorno antes de qualquer investimento.</p>
          </div>

          <div class="reveal-up delay-200 rounded-[2rem] border border-slate-200 bg-slate-50 p-6">
            <div class="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center mb-4">
              <i data-lucide="zap" class="w-5 h-5 text-blue-600"></i>
            </div>
            <h3 class="font-bold text-slate-900 mb-2">Plano de Automação</h3>
            <p class="text-sm text-slate-500 leading-relaxed">Entregamos um roadmap executável adaptado ao seu tamanho.</p>
          </div>

        </div>
      </div>
    </section>

  </main>

  @include('partials.footer')

  <script>
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

    // Desktop Nav Hover Effects — Contato é o link ativo (índice 3)
    const desktopNavLinks = document.querySelectorAll('#desktop-nav .nav-link');
    desktopNavLinks.forEach(link => {
      link.addEventListener('mouseenter', () => {
        desktopNavLinks.forEach(otherLink => {
          const underline = otherLink.querySelector('.nav-underline');
          if (otherLink !== link && !otherLink.classList.contains('text-blue-600')) {
            if (underline) underline.classList.add('opacity-0');
          }
        });
        if (!link.classList.contains('text-blue-600')) {
          link.classList.add('text-blue-600');
          const underline = link.querySelector('.nav-underline');
          if (underline) underline.classList.remove('opacity-0');
        }
      });

      link.addEventListener('mouseleave', () => {
        const activeLink = document.querySelector('#desktop-nav .nav-link.active-link') || desktopNavLinks[3];
        desktopNavLinks.forEach(otherLink => {
          const underline = otherLink.querySelector('.nav-underline');
          if (otherLink !== activeLink) {
            if (underline) underline.classList.add('opacity-0');
            otherLink.classList.remove('text-blue-600');
          }
        });
        activeLink.classList.add('text-blue-600');
        const activeUnderline = activeLink.querySelector('.nav-underline');
        if (activeUnderline) activeUnderline.classList.remove('opacity-0');
      });
    });

    desktopNavLinks[3].classList.add('active-link');

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

    // Form Submission
    const form = document.getElementById('lead-form');
    const submitBtn = document.getElementById('submit-btn');
    const btnText = document.getElementById('btn-text');
    const btnLoading = document.getElementById('btn-loading');
    const formSuccess = document.getElementById('form-success');
    const formError = document.getElementById('form-error');
    const formErrorMsg = document.getElementById('form-error-msg');

    form.addEventListener('submit', async (e) => {
      e.preventDefault();
      formError.classList.add('hidden');
      formError.classList.remove('flex');

      // Loading state
      btnText.classList.add('hidden');
      btnLoading.classList.remove('hidden');
      btnLoading.classList.add('flex');
      submitBtn.disabled = true;

      const data = {};
      new FormData(form).forEach((value, key) => { if (value) data[key] = value; });

      try {
        const res = await fetch('/leads', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
          },
          body: JSON.stringify(data),
        });

        if (res.status === 201 || res.ok) {
          form.classList.add('hidden');
          formSuccess.classList.remove('hidden');
          formSuccess.classList.add('flex');
        } else {
          const json = await res.json().catch(() => ({}));
          let msg = 'Ocorreu um erro ao enviar. Tente novamente.';
          if (json.errors) {
            const firstError = Object.values(json.errors)[0];
            if (Array.isArray(firstError)) msg = firstError[0];
          } else if (json.message) {
            msg = json.message;
          }
          formErrorMsg.textContent = msg;
          formError.classList.remove('hidden');
          formError.classList.add('flex');
        }
      } catch (err) {
        formErrorMsg.textContent = 'Erro de conexão. Verifique sua internet e tente novamente.';
        formError.classList.remove('hidden');
        formError.classList.add('flex');
      } finally {
        btnText.classList.remove('hidden');
        btnLoading.classList.add('hidden');
        btnLoading.classList.remove('flex');
        submitBtn.disabled = false;
      }
    });
  </script>

</body>

</html>
