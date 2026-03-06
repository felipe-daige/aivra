<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AIVRA</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

  <!-- Styles / Scripts -->
  @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @endif

  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="bg-white text-slate-900 antialiased overflow-x-hidden">
  <!-- Header -->
  <header id="main-header" class="fixed top-0 z-50 w-full bg-[#F8FAFC] transition-all duration-500 ease-in-out -translate-y-full">
    <div class="max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8">
      <nav class="flex items-center justify-between h-20 md:h-24 relative">
        <!-- Logo -->
        <div class="flex items-center cursor-pointer shrink-0">
          <span class="text-2xl md:text-3xl font-black text-slate-900 tracking-tighter uppercase">
            AIVRA
          </span>
        </div>

        <!-- Desktop Navigation -->
        <div class="hidden lg:flex flex-1 items-center justify-center h-full gap-4 xl:gap-8 px-4" id="desktop-nav">
          <!-- Nav Links -->
          <a href="#" class="nav-link relative flex items-center h-full text-[13px] xl:text-[15px] whitespace-nowrap font-semibold pt-1 text-blue-600">
            Home
            <div class="nav-underline absolute bottom-0 left-0 right-0 h-1 bg-blue-600 rounded-t-sm"></div>
          </a>
          <a href="#" class="nav-link relative flex items-center h-full text-[13px] xl:text-[15px] whitespace-nowrap font-semibold pt-1 text-slate-800 hover:text-blue-600 transition-colors">
            Sobre nós
            <div class="nav-underline absolute bottom-0 left-0 right-0 h-1 bg-blue-600 rounded-t-sm opacity-0 transition-opacity"></div>
          </a>
          <a href="#" class="nav-link relative flex items-center h-full text-[13px] xl:text-[15px] whitespace-nowrap font-semibold pt-1 text-slate-800 hover:text-blue-600 transition-colors">
            Produtos e Serviços
            <i data-lucide="chevron-down" class="w-4 h-4 ml-1.5 stroke-[2.5px]"></i>
            <div class="nav-underline absolute bottom-0 left-0 right-0 h-1 bg-blue-600 rounded-t-sm opacity-0 transition-opacity"></div>
          </a>
          <a href="#" class="nav-link relative flex items-center h-full text-[13px] xl:text-[15px] whitespace-nowrap font-semibold pt-1 text-slate-800 hover:text-blue-600 transition-colors">
            Contato
            <div class="nav-underline absolute bottom-0 left-0 right-0 h-1 bg-blue-600 rounded-t-sm opacity-0 transition-opacity"></div>
          </a>
          <a href="#" class="nav-link relative flex items-center h-full text-[13px] xl:text-[15px] whitespace-nowrap font-semibold pt-1 text-slate-800 hover:text-blue-600 transition-colors">
            Trabalhe conosco
            <i data-lucide="chevron-down" class="w-4 h-4 ml-1.5 stroke-[2.5px]"></i>
            <div class="nav-underline absolute bottom-0 left-0 right-0 h-1 bg-blue-600 rounded-t-sm opacity-0 transition-opacity"></div>
          </a>
        </div>

        <!-- Desktop Actions -->
        <div class="hidden lg:flex items-center gap-4 shrink-0">
          <a href="#" class="w-11 h-11 rounded-full bg-white border border-slate-200 flex items-center justify-center text-slate-600 transition-all hover:border-[#E1306C] hover:text-[#E1306C] hover:shadow-sm" aria-label="Instagram">
            <i data-lucide="instagram" class="w-5 h-5"></i>
          </a>
          <a href="#" class="w-11 h-11 rounded-full bg-white border border-slate-200 flex items-center justify-center text-slate-600 transition-all hover:border-[#25D366] hover:text-[#25D366] hover:shadow-sm" aria-label="WhatsApp">
            <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
            </svg>
          </a>
          <a href="#" class="bg-[#2563EB] hover:bg-blue-700 text-white px-7 py-3 rounded-full font-semibold transition-colors shadow-sm text-[15px] ml-2">
            FALE CONOSCO
          </a>
        </div>

        <!-- Mobile Menu Toggle -->
        <button id="mobile-menu-toggle" class="lg:hidden text-slate-900 p-2 focus:outline-none transition-transform active:scale-90" aria-label="Toggle menu">
          <i data-lucide="menu" class="w-7 h-7" id="menu-icon"></i>
          <i data-lucide="x" class="w-7 h-7 hidden" id="close-icon"></i>
        </button>
      </nav>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="absolute top-full left-0 right-0 bg-[#F8FAFC] border-t border-gray-200 shadow-lg lg:hidden overflow-hidden max-h-0 transition-all duration-300 ease-in-out opacity-0">
      <div class="flex flex-col px-6 py-4">
        <a href="#" class="mobile-nav-link flex items-center justify-between py-4 text-lg font-semibold border-b border-gray-100 text-blue-600 opacity-0 transform -translate-x-4 transition-all duration-300 delay-[50ms]">
          Home
        </a>
        <a href="#" class="mobile-nav-link flex items-center justify-between py-4 text-lg font-semibold border-b border-gray-100 text-slate-800 hover:text-blue-600 opacity-0 transform -translate-x-4 transition-all duration-300 delay-[100ms]">
          Sobre nós
        </a>
        <a href="#" class="mobile-nav-link flex items-center justify-between py-4 text-lg font-semibold border-b border-gray-100 text-slate-800 hover:text-blue-600 opacity-0 transform -translate-x-4 transition-all duration-300 delay-[150ms]">
          Produtos e Serviços
          <i data-lucide="chevron-down" class="w-5 h-5 text-slate-400"></i>
        </a>
        <a href="#" class="mobile-nav-link flex items-center justify-between py-4 text-lg font-semibold border-b border-gray-100 text-slate-800 hover:text-blue-600 opacity-0 transform -translate-x-4 transition-all duration-300 delay-[200ms]">
          Contato
        </a>
        <a href="#" class="mobile-nav-link flex items-center justify-between py-4 text-lg font-semibold text-slate-800 hover:text-blue-600 opacity-0 transform -translate-x-4 transition-all duration-300 delay-[250ms]">
          Trabalhe conosco
          <i data-lucide="chevron-down" class="w-5 h-5 text-slate-400"></i>
        </a>
      </div>
    </div>
  </header>

  <main id="main-content">
    <!-- Hero Section -->
    <div class="relative w-full min-h-screen flex items-center justify-center font-sans overflow-hidden">
      <!-- Video Background -->
      <video class="absolute inset-0 w-full h-full object-cover scale-[1.25] origin-center z-0" autoplay loop muted playsinline>
        <source src="/world.mp4" type="video/mp4">
      </video>
      <!-- Dark overlay to make text readable -->
      <div class="absolute inset-0 bg-black/50 z-0"></div>

      <div class="max-w-[1400px] w-full px-4 md:px-6 lg:px-8 relative z-10 flex flex-col lg:flex-row shadow-sm">
        <!-- Left Content -->
        <div class="w-full lg:w-[60%] flex flex-col">
          <!-- Top Content -->
          <div class="py-12 md:py-16 flex-grow flex flex-col justify-center">
            <!-- Badge -->
            <div class="inline-flex items-center bg-blue-600/90 backdrop-blur-sm rounded-full p-1 pr-4 sm:pr-5 w-max mb-8 cursor-pointer hover:bg-blue-600 transition-colors max-w-full overflow-hidden border border-white/10">
              <span class="bg-blue-900 text-white text-[10px] sm:text-xs font-semibold px-3 sm:px-4 py-1.5 sm:py-2 rounded-full mr-2 sm:mr-4 whitespace-nowrap">
                Mais de 1000 clientes
              </span>
              <span class="text-white text-xs sm:text-sm font-medium flex items-center whitespace-nowrap">
                Saiba mais <i data-lucide="arrow-right" class="w-3 h-3 sm:w-4 sm:h-4 ml-1"></i>
              </span>
            </div>

            <!-- Headline -->
            <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-[5rem] font-bold text-white leading-[1.1] lg:leading-[1.05] tracking-tight mb-6 sm:mb-8 text-shadow-lg">
              Construa o seu
              <br class="hidden sm:block" />
              Futuro com a
              <br class="hidden sm:block" />
              Frameblox
            </h1>

            <!-- Paragraph -->
            <p class="text-gray-200 text-base sm:text-lg lg:text-xl max-w-lg mb-8 sm:mb-10 leading-relaxed text-shadow">
              Acelere o crescimento da sua empresa com nossas soluções digitais.
              Desfrute de elementos personalizáveis e de alta qualidade para uma
              experiência de usuário perfeita e impressionante.
            </p>

            <!-- Buttons -->
            <div class="flex flex-col sm:flex-row flex-wrap gap-3 sm:gap-4 mb-16 lg:mb-0">
              <button class="bg-blue-600 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-full font-semibold flex items-center justify-center hover:bg-blue-500 transition-colors text-base sm:text-lg shadow-lg w-full sm:w-auto">
                Saiba mais <i data-lucide="arrow-right" class="w-4 h-4 sm:w-5 sm:h-5 ml-2"></i>
              </button>
              <button class="bg-white/10 backdrop-blur-md border border-white/20 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-full font-semibold hover:bg-white/20 transition-colors text-base sm:text-lg shadow-lg w-full sm:w-auto">
                Fale conosco
              </button>
            </div>
          </div>

          <!-- Stats Section -->
          <div class="flex flex-wrap gap-6 sm:gap-8 lg:gap-16 items-center w-full py-8 border-t border-white/20">
            <div class="flex flex-col flex-1 min-w-[100px] lg:flex-none">
              <span class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-1 sm:mb-2 tracking-tight text-shadow">
                500+
              </span>
              <span class="text-blue-200 text-xs sm:text-sm lg:text-base font-medium uppercase tracking-wider">
                Components
              </span>
            </div>
            <div class="flex flex-col flex-1 min-w-[100px] lg:flex-none">
              <span class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-1 sm:mb-2 tracking-tight text-shadow">
                50+
              </span>
              <span class="text-blue-200 text-xs sm:text-sm lg:text-base font-medium uppercase tracking-wider">
                Pages
              </span>
            </div>
            <div class="flex flex-col flex-1 min-w-[100px] lg:flex-none">
              <span class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-1 sm:mb-2 tracking-tight text-shadow">
                150+
              </span>
              <span class="text-blue-200 text-xs sm:text-sm lg:text-base font-medium uppercase tracking-wider">
                Customers
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Services Section -->
    <section class="py-24 bg-white font-sans">
      <div class="max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8">
        <div class="mb-16 md:mb-20 text-center max-w-3xl mx-auto">
          <h2 class="reveal-up text-4xl md:text-5xl font-bold text-black mb-6 tracking-tight">
            Nossas Soluções
          </h2>
          <p class="reveal-up text-lg text-gray-600 delay-100">
            Transformamos a operação e a presença digital da sua empresa com
            tecnologia de ponta e automações inteligentes.
          </p>
        </div>

        <!-- 3 Cards Container - Default stretch makes them equal height -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
          <!-- Card 1 -->
          <div class="reveal-up delay-100 bg-[#F4F7FB] rounded-[2rem] overflow-hidden flex flex-col shadow-sm border border-blue-50 hover:shadow-md transition-all hover:-translate-y-1 h-full">
            <div class="h-60 overflow-hidden relative shrink-0">
              <img
                src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=800&auto=format&fit=crop"
                alt="Presença Digital"
                class="w-full h-full object-cover hover:scale-105 transition-transform duration-700"
                referrerpolicy="no-referrer" />
            </div>
            <div class="p-8 flex flex-col flex-grow">
              <span class="text-sm font-bold text-blue-600 uppercase tracking-wider mb-3">
                1. Presença e Gestão Digital
              </span>
              <h3 class="text-2xl font-bold text-black mb-4 leading-tight">
                Arquitetura de Presença e Gestão Digital
              </h3>
              <p class="text-gray-600 leading-relaxed mb-8">
                Desenvolvemos a vitrine digital da sua marca e a infraestrutura
                interna do seu negócio.
              </p>

              <!-- Compact Pilares -->
              <div class="space-y-3 mb-6 mt-auto">
                <div class="flex items-center text-black font-medium">
                  <i data-lucide="layout" class="w-5 h-5 text-blue-600 mr-3 shrink-0"></i>
                  Design Estratégico
                </div>
                <div class="flex items-center text-black font-medium">
                  <i data-lucide="globe" class="w-5 h-5 text-blue-600 mr-3 shrink-0"></i>
                  Desenvolvimento Web
                </div>
                <div class="flex items-center text-black font-medium">
                  <i data-lucide="blocks" class="w-5 h-5 text-blue-600 mr-3 shrink-0"></i>
                  Integração de Sistemas
                </div>
              </div>

              <!-- Saiba mais button -->
              <button class="w-full bg-blue-600 text-white px-6 py-4 rounded-xl font-semibold flex items-center justify-center hover:bg-blue-700 transition-colors text-base shadow-md group">
                Saiba mais
                <i data-lucide="arrow-right" class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform"></i>
              </button>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="reveal-up delay-200 bg-[#F4F7FB] rounded-[2rem] overflow-hidden flex flex-col shadow-sm border border-blue-50 hover:shadow-md transition-all hover:-translate-y-1 h-full">
            <div class="h-60 overflow-hidden relative shrink-0">
              <img
                src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=800&auto=format&fit=crop"
                alt="Identidade Digital e ERP"
                class="w-full h-full object-cover hover:scale-105 transition-transform duration-700"
                referrerpolicy="no-referrer" />
            </div>
            <div class="p-8 flex flex-col flex-grow">
              <span class="text-sm font-bold text-blue-600 uppercase tracking-wider mb-3">
                2. Identidade Digital
              </span>
              <h3 class="text-2xl font-bold text-black mb-4 leading-tight">
                Controle Total e Operação Inteligente (ERP)
              </h3>
              <p class="text-gray-600 leading-relaxed mb-8">
                Chega de depender de planilhas soltas. Criamos sistemas internos
                personalizados e automações que conectam seus departamentos.
              </p>

              <!-- Compact Pilares -->
              <div class="space-y-3 mb-6 mt-auto">
                <div class="flex items-center text-black font-medium">
                  <i data-lucide="database" class="w-5 h-5 text-blue-600 mr-3 shrink-0"></i>
                  Gestão Centralizada
                </div>
                <div class="flex items-center text-black font-medium">
                  <i data-lucide="activity" class="w-5 h-5 text-blue-600 mr-3 shrink-0"></i>
                  Visão 360º em Tempo Real
                </div>
                <div class="flex items-center text-black font-medium">
                  <i data-lucide="shield-check" class="w-5 h-5 text-blue-600 mr-3 shrink-0"></i>
                  Eliminação de Retrabalho
                </div>
              </div>

              <!-- Saiba mais button -->
              <button class="w-full bg-blue-600 text-white px-6 py-4 rounded-xl font-semibold flex items-center justify-center hover:bg-blue-700 transition-colors text-base shadow-md group">
                Saiba mais
                <i data-lucide="arrow-right" class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform"></i>
              </button>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="reveal-up delay-300 bg-[#F4F7FB] rounded-[2rem] overflow-hidden flex flex-col shadow-sm border border-blue-50 hover:shadow-md transition-all hover:-translate-y-1 h-full">
            <div class="h-60 overflow-hidden relative shrink-0">
              <img
                src="https://images.unsplash.com/photo-1518770660439-4636190af475?q=80&w=800&auto=format&fit=crop"
                alt="Arquitetura de Automações"
                class="w-full h-full object-cover hover:scale-105 transition-transform duration-700"
                referrerpolicy="no-referrer" />
            </div>
            <div class="p-8 flex flex-col flex-grow">
              <span class="text-sm font-bold text-blue-600 uppercase tracking-wider mb-3">
                3. Arquitetura de Automações
              </span>
              <h3 class="text-2xl font-bold text-black mb-4 leading-tight">
                Fluxo de Trabalho e Automações
              </h3>
              <p class="text-gray-600 leading-relaxed mb-8">
                Transformamos tarefas manuais em fluxos automáticos, eliminando
                gargalos e multiplicando a capacidade da sua equipe.
              </p>

              <!-- Compact Pilares -->
              <div class="space-y-3 mb-6 mt-auto">
                <div class="flex items-center text-black font-medium">
                  <i data-lucide="zap" class="w-5 h-5 text-blue-600 mr-3 shrink-0"></i>
                  Automação de Fluxos
                </div>
                <div class="flex items-center text-black font-medium">
                  <i data-lucide="check-circle-2" class="w-5 h-5 text-blue-600 mr-3 shrink-0"></i>
                  Otimização de Projetos
                </div>
                <div class="flex items-center text-black font-medium">
                  <i data-lucide="bar-chart-3" class="w-5 h-5 text-blue-600 mr-3 shrink-0"></i>
                  Inteligência de Dados
                </div>
              </div>

              <!-- Saiba mais button -->
              <button class="w-full bg-blue-600 text-white px-6 py-4 rounded-xl font-semibold flex items-center justify-center hover:bg-blue-700 transition-colors text-base shadow-md group">
                Saiba mais
                <i data-lucide="arrow-right" class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Benefits Section -->
    <section class="py-24 lg:py-32 bg-[#020817] text-white font-sans relative overflow-hidden z-0">
      <!-- Dark Blue Gradient Background -->
      <div class="absolute inset-0 z-0 bg-[#030712]">
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_left,_var(--tw-gradient-stops))] from-blue-900/30 via-[#030712] to-[#030712]"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_bottom_right,_var(--tw-gradient-stops))] from-blue-800/20 via-transparent to-transparent"></div>
        <!-- Subtle grid overlay -->
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#1e293b_1px,transparent_1px),linear-gradient(to_bottom,#1e293b_1px,transparent_1px)] bg-[size:3rem_3rem] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_50%,#000_70%,transparent_100%)] opacity-20"></div>
      </div>

      <div class="relative z-10 max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-16 lg:gap-24 items-center lg:items-start">
          <!-- Left Column - Sticky Header -->
          <div class="w-full lg:w-5/12 lg:sticky lg:top-32">
            <div class="reveal-up">
              <span class="inline-block py-1 px-3 rounded-full bg-blue-500/10 border border-blue-500/20 text-blue-400 text-xs font-bold tracking-widest uppercase mb-6">
                Resultados Reais
              </span>
              <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-[1.1] tracking-tight mb-8">
                Sua Empresa no <br />
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-blue-600">
                  Próximo Nível
                </span>
              </h2>

              <div class="relative pl-6 md:pl-8 border-l-2 border-white/10">
                <div class="absolute left-[-2px] top-0 bottom-0 w-[2px] bg-gradient-to-b from-blue-500 to-transparent h-1/2"></div>
                <p class="text-xl md:text-2xl text-gray-400 font-medium leading-relaxed">
                  Aqui não falamos de código, <span class="text-white">falamos de resultado.</span>
                </p>
              </div>

              <button class="mt-12 hidden lg:flex items-center text-blue-400 font-semibold hover:text-blue-300 transition-colors group">
                Descubra como podemos ajudar
                <i data-lucide="arrow-right" class="w-5 h-5 ml-2 group-hover:translate-x-2 transition-transform"></i>
              </button>
            </div>
          </div>

          <!-- Right Column - Benefits List -->
          <div class="w-full lg:w-7/12 flex flex-col gap-6 md:gap-8">
            <!-- Benefit 1 -->
            <div class="reveal-up delay-100 relative bg-white/[0.02] border border-white/[0.05] p-8 md:p-10 rounded-[2rem] flex flex-col sm:flex-row items-start gap-6 md:gap-8 hover:bg-white/[0.04] hover:border-blue-500/30 transition-all duration-500 group overflow-hidden backdrop-blur-sm">
              <span class="absolute -right-4 -bottom-6 text-[8rem] font-black text-white/[0.02] group-hover:text-blue-500/[0.05] transition-colors duration-500 pointer-events-none select-none leading-none">
                01
              </span>
              <div class="absolute left-0 top-0 bottom-0 w-1 bg-blue-500 scale-y-0 group-hover:scale-y-100 transition-transform duration-500 origin-top"></div>

              <div class="relative z-10 bg-black/50 border border-white/10 text-blue-400 p-4 rounded-2xl shrink-0 group-hover:bg-blue-600 group-hover:text-white group-hover:border-blue-500 transition-all duration-500 shadow-[0_0_0_0_rgba(59,130,246,0)] group-hover:shadow-[0_0_20px_0_rgba(59,130,246,0.3)]">
                <i data-lucide="unlock" class="w-8 h-8"></i>
              </div>
              <div class="relative z-10">
                <h3 class="text-2xl md:text-3xl font-bold mb-4 text-white group-hover:text-blue-50 transition-colors">
                  Gestão Sem Gargalos
                </h3>
                <p class="text-gray-400 text-lg leading-relaxed group-hover:text-gray-300 transition-colors">
                  Identificamos onde sua operação trava e aplicamos tecnologia para destravar o fluxo.
                </p>
              </div>
            </div>

            <!-- Benefit 2 -->
            <div class="reveal-up delay-200 relative bg-white/[0.02] border border-white/[0.05] p-8 md:p-10 rounded-[2rem] flex flex-col sm:flex-row items-start gap-6 md:gap-8 hover:bg-white/[0.04] hover:border-blue-500/30 transition-all duration-500 group overflow-hidden backdrop-blur-sm">
              <span class="absolute -right-4 -bottom-6 text-[8rem] font-black text-white/[0.02] group-hover:text-blue-500/[0.05] transition-colors duration-500 pointer-events-none select-none leading-none">
                02
              </span>
              <div class="absolute left-0 top-0 bottom-0 w-1 bg-blue-500 scale-y-0 group-hover:scale-y-100 transition-transform duration-500 origin-top"></div>

              <div class="relative z-10 bg-black/50 border border-white/10 text-blue-400 p-4 rounded-2xl shrink-0 group-hover:bg-blue-600 group-hover:text-white group-hover:border-blue-500 transition-all duration-500 shadow-[0_0_0_0_rgba(59,130,246,0)] group-hover:shadow-[0_0_20px_0_rgba(59,130,246,0.3)]">
                <i data-lucide="pie-chart" class="w-8 h-8"></i>
              </div>
              <div class="relative z-10">
                <h3 class="text-2xl md:text-3xl font-bold mb-4 text-white group-hover:text-blue-50 transition-colors">
                  Decisões Baseadas em Dados
                </h3>
                <p class="text-gray-400 text-lg leading-relaxed group-hover:text-gray-300 transition-colors">
                  Substitua o "eu acho" por painéis inteligentes que mostram a realidade do seu negócio.
                </p>
              </div>
            </div>

            <!-- Benefit 3 -->
            <div class="reveal-up delay-300 relative bg-white/[0.02] border border-white/[0.05] p-8 md:p-10 rounded-[2rem] flex flex-col sm:flex-row items-start gap-6 md:gap-8 hover:bg-white/[0.04] hover:border-blue-500/30 transition-all duration-500 group overflow-hidden backdrop-blur-sm">
              <span class="absolute -right-4 -bottom-6 text-[8rem] font-black text-white/[0.02] group-hover:text-blue-500/[0.05] transition-colors duration-500 pointer-events-none select-none leading-none">
                03
              </span>
              <div class="absolute left-0 top-0 bottom-0 w-1 bg-blue-500 scale-y-0 group-hover:scale-y-100 transition-transform duration-500 origin-top"></div>

              <div class="relative z-10 bg-black/50 border border-white/10 text-blue-400 p-4 rounded-2xl shrink-0 group-hover:bg-blue-600 group-hover:text-white group-hover:border-blue-500 transition-all duration-500 shadow-[0_0_0_0_rgba(59,130,246,0)] group-hover:shadow-[0_0_20px_0_rgba(59,130,246,0.3)]">
                <i data-lucide="trending-up" class="w-8 h-8"></i>
              </div>
              <div class="relative z-10">
                <h3 class="text-2xl md:text-3xl font-bold mb-4 text-white group-hover:text-blue-50 transition-colors">
                  Prontidão para Escalar
                </h3>
                <p class="text-gray-400 text-lg leading-relaxed group-hover:text-gray-300 transition-colors">
                  Criamos a base tecnológica para que você possa dobrar de tamanho sem dobrar a confusão.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Method Section -->
    <section class="py-24 lg:py-32 bg-[#F4F7FB] font-sans relative overflow-hidden">
      <div class="max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 md:mb-24">
          <span class="reveal-up inline-block py-1 px-3 rounded-full bg-blue-100 text-blue-700 text-xs font-bold tracking-widest uppercase mb-6">
            Nosso Processo
          </span>
          <h2 class="reveal-up delay-100 text-4xl md:text-5xl font-bold text-black mb-6 tracking-tight">
            O Método <span class="text-blue-600">A.A.Q.I.</span>
          </h2>
          <p class="reveal-up delay-200 text-lg text-gray-600">
            Uma abordagem didática e estruturada para transformar a sua operação de ponta a ponta, sem complicação.
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
          <!-- Step 1 -->
          <div class="reveal-up delay-200 bg-white rounded-[2rem] p-8 shadow-lg shadow-gray-200/40 border border-gray-100 hover:border-blue-400 hover:shadow-2xl hover:shadow-blue-500/10 hover:-translate-y-2 transition-all duration-500 relative overflow-hidden group flex flex-col h-full">
            <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-blue-400 to-blue-600 scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
            <span class="absolute -right-2 -top-6 text-[10rem] font-black text-gray-100 group-hover:text-blue-50 transition-colors duration-500 pointer-events-none select-none leading-none z-0">A</span>
            <div class="relative z-10 flex flex-col flex-grow">
              <div class="flex items-start justify-between mb-8">
                <div class="w-16 h-16 rounded-2xl bg-blue-50 flex items-center justify-center group-hover:bg-blue-600 group-hover:rotate-3 transition-all duration-500 shadow-sm">
                  <i data-lucide="scan-search" class="w-8 h-8 text-blue-600 group-hover:text-white transition-colors duration-500"></i>
                </div>
              </div>
              <h3 class="text-2xl font-bold text-black mb-3 leading-tight">Análise Estrutural</h3>
              <p class="text-gray-600 text-base leading-relaxed mb-8">Mapeamento de processos e falhas.</p>
              <div class="mt-auto bg-black rounded-xl p-5 group-hover:bg-blue-950 transition-colors duration-500 border border-gray-800 group-hover:border-blue-900 shadow-md flex flex-col items-center justify-center text-center">
                <span class="text-blue-400 block mb-1.5 text-[10px] uppercase tracking-widest font-bold">Na prática:</span>
                <p class="text-white font-medium text-sm leading-relaxed">"Entendemos o seu alicerce."</p>
              </div>
            </div>
          </div>

          <!-- Step 2 -->
          <div class="reveal-up delay-300 bg-white rounded-[2rem] p-8 shadow-lg shadow-gray-200/40 border border-gray-100 hover:border-blue-400 hover:shadow-2xl hover:shadow-blue-500/10 hover:-translate-y-2 transition-all duration-500 relative overflow-hidden group flex flex-col h-full">
            <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-blue-400 to-blue-600 scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
            <span class="absolute -right-2 -top-6 text-[10rem] font-black text-gray-100 group-hover:text-blue-50 transition-colors duration-500 pointer-events-none select-none leading-none z-0">A</span>
            <div class="relative z-10 flex flex-col flex-grow">
              <div class="flex items-start justify-between mb-8">
                <div class="w-16 h-16 rounded-2xl bg-blue-50 flex items-center justify-center group-hover:bg-blue-600 group-hover:rotate-3 transition-all duration-500 shadow-sm">
                  <i data-lucide="workflow" class="w-8 h-8 text-blue-600 group-hover:text-white transition-colors duration-500"></i>
                </div>
              </div>
              <h3 class="text-2xl font-bold text-black mb-3 leading-tight">Arquitetura Operacional</h3>
              <p class="text-gray-600 text-base leading-relaxed mb-8">Planejamento da nova estrutura.</p>
              <div class="mt-auto bg-black rounded-xl p-5 group-hover:bg-blue-950 transition-colors duration-500 border border-gray-800 group-hover:border-blue-900 shadow-md flex flex-col items-center justify-center text-center">
                <span class="text-blue-400 block mb-1.5 text-[10px] uppercase tracking-widest font-bold">Na prática:</span>
                <p class="text-white font-medium text-sm leading-relaxed">"Desenhamos o fluxo perfeito."</p>
              </div>
            </div>
          </div>

          <!-- Step 3 -->
          <div class="reveal-up delay-400 bg-white rounded-[2rem] p-8 shadow-lg shadow-gray-200/40 border border-gray-100 hover:border-blue-400 hover:shadow-2xl hover:shadow-blue-500/10 hover:-translate-y-2 transition-all duration-500 relative overflow-hidden group flex flex-col h-full">
            <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-blue-400 to-blue-600 scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
            <span class="absolute -right-2 -top-6 text-[10rem] font-black text-gray-100 group-hover:text-blue-50 transition-colors duration-500 pointer-events-none select-none leading-none z-0">Q</span>
            <div class="relative z-10 flex flex-col flex-grow">
              <div class="flex items-start justify-between mb-8">
                <div class="w-16 h-16 rounded-2xl bg-blue-50 flex items-center justify-center group-hover:bg-blue-600 group-hover:rotate-3 transition-all duration-500 shadow-sm">
                  <i data-lucide="cpu" class="w-8 h-8 text-blue-600 group-hover:text-white transition-colors duration-500"></i>
                </div>
              </div>
              <h3 class="text-2xl font-bold text-black mb-3 leading-tight">Quantização Tecnológica</h3>
              <p class="text-gray-600 text-base leading-relaxed mb-8">A escolha e aplicação das ferramentas certas.</p>
              <div class="mt-auto bg-black rounded-xl p-5 group-hover:bg-blue-950 transition-colors duration-500 border border-gray-800 group-hover:border-blue-900 shadow-md flex flex-col items-center justify-center text-center">
                <span class="text-blue-400 block mb-1.5 text-[10px] uppercase tracking-widest font-bold">Na prática:</span>
                <p class="text-white font-medium text-sm leading-relaxed">"Implementamos o motor."</p>
              </div>
            </div>
          </div>

          <!-- Step 4 -->
          <div class="reveal-up delay-500 bg-white rounded-[2rem] p-8 shadow-lg shadow-gray-200/40 border border-gray-100 hover:border-blue-400 hover:shadow-2xl hover:shadow-blue-500/10 hover:-translate-y-2 transition-all duration-500 relative overflow-hidden group flex flex-col h-full">
            <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-blue-400 to-blue-600 scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
            <span class="absolute -right-2 -top-6 text-[10rem] font-black text-gray-100 group-hover:text-blue-50 transition-colors duration-500 pointer-events-none select-none leading-none z-0">I</span>
            <div class="relative z-10 flex flex-col flex-grow">
              <div class="flex items-start justify-between mb-8">
                <div class="w-16 h-16 rounded-2xl bg-blue-50 flex items-center justify-center group-hover:bg-blue-600 group-hover:rotate-3 transition-all duration-500 shadow-sm">
                  <i data-lucide="rocket" class="w-8 h-8 text-blue-600 group-hover:text-white transition-colors duration-500"></i>
                </div>
              </div>
              <h3 class="text-2xl font-bold text-black mb-3 leading-tight">Inteligência de Performance</h3>
              <p class="text-gray-600 text-base leading-relaxed mb-8">Otimização contínua e análise de resultados.</p>
              <div class="mt-auto bg-black rounded-xl p-5 group-hover:bg-blue-950 transition-colors duration-500 border border-gray-800 group-hover:border-blue-900 shadow-md flex flex-col items-center justify-center text-center">
                <span class="text-blue-400 block mb-1.5 text-[10px] uppercase tracking-widest font-bold">Na prática:</span>
                <p class="text-white font-medium text-sm leading-relaxed">"Ajustamos para a máxima velocidade."</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- SquadMarquee Section -->
    <section class="relative py-24 lg:py-32 font-sans overflow-hidden bg-[#020817]">
      <!-- Dark Blue Gradient Background with Image -->
      <div class="absolute inset-0 z-0 bg-[#030712]">
        <img src="/aivra-background-instagram.jpg" alt="Background Texture" class="absolute inset-0 w-full h-full object-cover opacity-20 mix-blend-screen" onerror="this.style.display='none'">
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-blue-900/30 via-[#030712]/90 to-[#030712]"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_bottom_left,_var(--tw-gradient-stops))] from-blue-800/20 via-transparent to-transparent"></div>
        <!-- Subtle grid overlay -->
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#1e293b_1px,transparent_1px),linear-gradient(to_bottom,#1e293b_1px,transparent_1px)] bg-[size:3rem_3rem] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_50%,#000_70%,transparent_100%)] opacity-20"></div>
      </div>

      <div class="relative z-10 max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8 mb-16">
        <div class="text-center">
          <h2 class="reveal-up text-3xl md:text-4xl lg:text-5xl font-bold text-white tracking-tight">
            Squads Especialistas para cada etapa do A.A.Q.I.
          </h2>
        </div>
      </div>

      <div class="relative z-10 flex flex-col gap-6">
        <!-- Top Row - Left Scroll -->
        <div class="flex overflow-hidden group shrink-0">
          <div id="squad-marquee-top" class="flex shrink-0 animate-marquee-left group-hover:[animation-play-state:paused] w-max">
            <!-- Array duplicated 2 times for smooth loop -->
            <div class="flex gap-6 pr-6 shrink-0">
              <div class="w-[320px] md:w-[400px] shrink-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl border border-gray-100 transition-transform hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-6">
                  <i data-lucide="layers" class="w-6 h-6 text-blue-600"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Arquiteto de Soluções</h3>
                <p class="text-gray-600 leading-relaxed">Desenha o esqueleto técnico para suportar o crescimento do seu negócio.</p>
              </div>
              <div class="w-[320px] md:w-[400px] shrink-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl border border-gray-100 transition-transform hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-6">
                  <i data-lucide="brain-circuit" class="w-6 h-6 text-blue-600"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Engenheiro de IA</h3>
                <p class="text-gray-600 leading-relaxed">Cria sistemas inteligentes que aprendem e evoluem com sua operação.</p>
              </div>
              <div class="w-[320px] md:w-[400px] shrink-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl border border-gray-100 transition-transform hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-6">
                  <i data-lucide="shield-check" class="w-6 h-6 text-blue-600"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Especialista em Cibersegurança</h3>
                <p class="text-gray-600 leading-relaxed">Proteção de dados e auditoria de segurança em rede e infraestrutura.</p>
              </div>
              <div class="w-[320px] md:w-[400px] shrink-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl border border-gray-100 transition-transform hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-6">
                  <i data-lucide="code-2" class="w-6 h-6 text-blue-600"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Desenvolvedor Full-Stack</h3>
                <p class="text-gray-600 leading-relaxed">Engenharia de software robusta, do servidor à interface final.</p>
              </div>
            </div>
            <!-- Duplicates -->
            <div class="flex gap-6 pr-6 shrink-0">
              <div class="w-[320px] md:w-[400px] shrink-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl border border-gray-100 transition-transform hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-6"><i data-lucide="layers" class="w-6 h-6 text-blue-600"></i></div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Arquiteto de Soluções</h3>
                <p class="text-gray-600 leading-relaxed">Desenha o esqueleto técnico para suportar o crescimento do seu negócio.</p>
              </div>
              <div class="w-[320px] md:w-[400px] shrink-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl border border-gray-100 transition-transform hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-6"><i data-lucide="brain-circuit" class="w-6 h-6 text-blue-600"></i></div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Engenheiro de IA</h3>
                <p class="text-gray-600 leading-relaxed">Cria sistemas inteligentes que aprendem e evoluem com sua operação.</p>
              </div>
              <div class="w-[320px] md:w-[400px] shrink-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl border border-gray-100 transition-transform hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-6"><i data-lucide="shield-check" class="w-6 h-6 text-blue-600"></i></div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Especialista em Cibersegurança</h3>
                <p class="text-gray-600 leading-relaxed">Proteção de dados e auditoria de segurança em rede e infraestrutura.</p>
              </div>
              <div class="w-[320px] md:w-[400px] shrink-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl border border-gray-100 transition-transform hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-6"><i data-lucide="code-2" class="w-6 h-6 text-blue-600"></i></div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Desenvolvedor Full-Stack</h3>
                <p class="text-gray-600 leading-relaxed">Engenharia de software robusta, do servidor à interface final.</p>
              </div>
            </div>
            <!-- Duplicates 2 -->
            <div class="flex gap-6 pr-6 shrink-0">
              <div class="w-[320px] md:w-[400px] shrink-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl border border-gray-100 transition-transform hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-6"><i data-lucide="layers" class="w-6 h-6 text-blue-600"></i></div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Arquiteto de Soluções</h3>
                <p class="text-gray-600 leading-relaxed">Desenha o esqueleto técnico para suportar o crescimento do seu negócio.</p>
              </div>
              <div class="w-[320px] md:w-[400px] shrink-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl border border-gray-100 transition-transform hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-6"><i data-lucide="brain-circuit" class="w-6 h-6 text-blue-600"></i></div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Engenheiro de IA</h3>
                <p class="text-gray-600 leading-relaxed">Cria sistemas inteligentes que aprendem e evoluem com sua operação.</p>
              </div>
              <div class="w-[320px] md:w-[400px] shrink-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl border border-gray-100 transition-transform hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-6"><i data-lucide="shield-check" class="w-6 h-6 text-blue-600"></i></div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Especialista em Cibersegurança</h3>
                <p class="text-gray-600 leading-relaxed">Proteção de dados e auditoria de segurança em rede e infraestrutura.</p>
              </div>
              <div class="w-[320px] md:w-[400px] shrink-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl border border-gray-100 transition-transform hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-6"><i data-lucide="code-2" class="w-6 h-6 text-blue-600"></i></div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Desenvolvedor Full-Stack</h3>
                <p class="text-gray-600 leading-relaxed">Engenharia de software robusta, do servidor à interface final.</p>
              </div>
            </div>
            <!-- Duplicates 3 -->
            <div class="flex gap-6 pr-6 shrink-0">
              <div class="w-[320px] md:w-[400px] shrink-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl border border-gray-100 transition-transform hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-6"><i data-lucide="layers" class="w-6 h-6 text-blue-600"></i></div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Arquiteto de Soluções</h3>
                <p class="text-gray-600 leading-relaxed">Desenha o esqueleto técnico para suportar o crescimento do seu negócio.</p>
              </div>
              <div class="w-[320px] md:w-[400px] shrink-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl border border-gray-100 transition-transform hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-6"><i data-lucide="brain-circuit" class="w-6 h-6 text-blue-600"></i></div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Engenheiro de IA</h3>
                <p class="text-gray-600 leading-relaxed">Cria sistemas inteligentes que aprendem e evoluem com sua operação.</p>
              </div>
              <div class="w-[320px] md:w-[400px] shrink-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl border border-gray-100 transition-transform hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-6"><i data-lucide="shield-check" class="w-6 h-6 text-blue-600"></i></div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Especialista em Cibersegurança</h3>
                <p class="text-gray-600 leading-relaxed">Proteção de dados e auditoria de segurança em rede e infraestrutura.</p>
              </div>
              <div class="w-[320px] md:w-[400px] shrink-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl border border-gray-100 transition-transform hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-6"><i data-lucide="code-2" class="w-6 h-6 text-blue-600"></i></div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Desenvolvedor Full-Stack</h3>
                <p class="text-gray-600 leading-relaxed">Engenharia de software robusta, do servidor à interface final.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Bottom Row - Right Scroll -->
        <div class="flex overflow-hidden group shrink-0">
          <div id="squad-marquee-bottom" class="flex shrink-0 animate-marquee-right group-hover:[animation-play-state:paused] w-max">
            <!-- Array duplicated 2 times for smooth loop -->
            <div class="flex gap-6 pr-6 shrink-0">
              <div class="w-[320px] md:w-[400px] shrink-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl border border-gray-100 transition-transform hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-6">
                  <i data-lucide="trending-up" class="w-6 h-6 text-blue-600"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Head de Performance</h3>
                <p class="text-gray-600 leading-relaxed">Liderança focada em transformar tecnologia em faturamento real.</p>
              </div>
              <div class="w-[320px] md:w-[400px] shrink-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl border border-gray-100 transition-transform hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-6">
                  <i data-lucide="line-chart" class="w-6 h-6 text-blue-600"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Analista de B.I.</h3>
                <p class="text-gray-600 leading-relaxed">Monitoramento de dados para decisões baseadas em evidências, não em palpites.</p>
              </div>
              <div class="w-[320px] md:w-[400px] shrink-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl border border-gray-100 transition-transform hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-6">
                  <i data-lucide="layout-template" class="w-6 h-6 text-blue-600"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Designer UI/UX</h3>
                <p class="text-gray-600 leading-relaxed">Interfaces elegantes que garantem fluidez e clareza para o usuário final.</p>
              </div>
              <div class="w-[320px] md:w-[400px] shrink-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl border border-gray-100 transition-transform hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-6">
                  <i data-lucide="workflow" class="w-6 h-6 text-blue-600"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Estrategista de Automação</h3>
                <p class="text-gray-600 leading-relaxed">Integra sistemas e elimina tarefas repetitivas com precisão técnica.</p>
              </div>
            </div>
            <!-- Duplicates -->
            <div class="flex gap-6 pr-6 shrink-0">
              <div class="w-[320px] md:w-[400px] shrink-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl border border-gray-100 transition-transform hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-6"><i data-lucide="trending-up" class="w-6 h-6 text-blue-600"></i></div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Head de Performance</h3>
                <p class="text-gray-600 leading-relaxed">Liderança focada em transformar tecnologia em faturamento real.</p>
              </div>
              <div class="w-[320px] md:w-[400px] shrink-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl border border-gray-100 transition-transform hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-6"><i data-lucide="line-chart" class="w-6 h-6 text-blue-600"></i></div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Analista de B.I.</h3>
                <p class="text-gray-600 leading-relaxed">Monitoramento de dados para decisões baseadas em evidências, não em palpites.</p>
              </div>
              <div class="w-[320px] md:w-[400px] shrink-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl border border-gray-100 transition-transform hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-6"><i data-lucide="layout-template" class="w-6 h-6 text-blue-600"></i></div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Designer UI/UX</h3>
                <p class="text-gray-600 leading-relaxed">Interfaces elegantes que garantem fluidez e clareza para o usuário final.</p>
              </div>
              <div class="w-[320px] md:w-[400px] shrink-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl border border-gray-100 transition-transform hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-6"><i data-lucide="workflow" class="w-6 h-6 text-blue-600"></i></div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Estrategista de Automação</h3>
                <p class="text-gray-600 leading-relaxed">Integra sistemas e elimina tarefas repetitivas com precisão técnica.</p>
              </div>
            </div>
            <!-- Duplicates 2 -->
            <div class="flex gap-6 pr-6 shrink-0">
              <div class="w-[320px] md:w-[400px] shrink-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl border border-gray-100 transition-transform hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-6"><i data-lucide="trending-up" class="w-6 h-6 text-blue-600"></i></div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Head de Performance</h3>
                <p class="text-gray-600 leading-relaxed">Liderança focada em transformar tecnologia em faturamento real.</p>
              </div>
              <div class="w-[320px] md:w-[400px] shrink-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl border border-gray-100 transition-transform hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-6"><i data-lucide="line-chart" class="w-6 h-6 text-blue-600"></i></div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Analista de B.I.</h3>
                <p class="text-gray-600 leading-relaxed">Monitoramento de dados para decisões baseadas em evidências, não em palpites.</p>
              </div>
              <div class="w-[320px] md:w-[400px] shrink-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl border border-gray-100 transition-transform hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-6"><i data-lucide="layout-template" class="w-6 h-6 text-blue-600"></i></div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Designer UI/UX</h3>
                <p class="text-gray-600 leading-relaxed">Interfaces elegantes que garantem fluidez e clareza para o usuário final.</p>
              </div>
              <div class="w-[320px] md:w-[400px] shrink-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl border border-gray-100 transition-transform hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-6"><i data-lucide="workflow" class="w-6 h-6 text-blue-600"></i></div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Estrategista de Automação</h3>
                <p class="text-gray-600 leading-relaxed">Integra sistemas e elimina tarefas repetitivas com precisão técnica.</p>
              </div>
            </div>
            <!-- Duplicates 3 -->
            <div class="flex gap-6 pr-6 shrink-0">
              <div class="w-[320px] md:w-[400px] shrink-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl border border-gray-100 transition-transform hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-6"><i data-lucide="trending-up" class="w-6 h-6 text-blue-600"></i></div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Head de Performance</h3>
                <p class="text-gray-600 leading-relaxed">Liderança focada em transformar tecnologia em faturamento real.</p>
              </div>
              <div class="w-[320px] md:w-[400px] shrink-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl border border-gray-100 transition-transform hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-6"><i data-lucide="line-chart" class="w-6 h-6 text-blue-600"></i></div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Analista de B.I.</h3>
                <p class="text-gray-600 leading-relaxed">Monitoramento de dados para decisões baseadas em evidências, não em palpites.</p>
              </div>
              <div class="w-[320px] md:w-[400px] shrink-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl border border-gray-100 transition-transform hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-6"><i data-lucide="layout-template" class="w-6 h-6 text-blue-600"></i></div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Designer UI/UX</h3>
                <p class="text-gray-600 leading-relaxed">Interfaces elegantes que garantem fluidez e clareza para o usuário final.</p>
              </div>
              <div class="w-[320px] md:w-[400px] shrink-0 bg-white rounded-2xl p-6 md:p-8 shadow-xl border border-gray-100 transition-transform hover:-translate-y-1">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center mb-6"><i data-lucide="workflow" class="w-6 h-6 text-blue-600"></i></div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">Estrategista de Automação</h3>
                <p class="text-gray-600 leading-relaxed">Integra sistemas e elimina tarefas repetitivas com precisão técnica.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Gradient fades on the sides for smooth entry/exit -->
      <div class="absolute top-0 bottom-0 left-0 w-12 md:w-64 bg-gradient-to-r from-[#030712] via-[#030712]/80 via-[#030712]/40 to-transparent z-20 pointer-events-none"></div>
      <div class="absolute top-0 bottom-0 right-0 w-12 md:w-64 bg-gradient-to-l from-[#030712] via-[#030712]/80 via-[#030712]/40 to-transparent z-20 pointer-events-none"></div>
    </section>

    <!-- BentoValues Section -->
    <section class="py-24 lg:py-32 bg-white font-sans overflow-hidden">
      <div class="max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 md:mb-24">
          <h2 class="reveal-up text-4xl md:text-5xl font-bold text-black mb-6 tracking-tight">
            Mentes especialistas, <br class="hidden sm:block" />
            <span class="text-gray-400">foco em resultados.</span>
          </h2>
          <p class="reveal-up delay-100 text-lg text-gray-600 leading-relaxed">
            A tecnologia é o nosso motor, mas a estratégia é guiada por pessoas.
            Conheça os pilares que sustentam nossa entrega.
          </p>
        </div>

        <div class="relative">
          <div id="bento-scroll" class="flex flex-nowrap overflow-x-auto snap-x snap-mandatory md:grid md:grid-cols-4 gap-4 lg:gap-6 md:auto-rows-[280px] pb-12 md:pb-0 [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">
            <!-- Card 1 -->
            <div class="reveal-up min-w-[85vw] shrink-0 h-[450px] md:h-auto md:min-w-0 snap-center relative rounded-3xl overflow-hidden group md:col-span-2 md:row-span-2">
              <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=1200&auto=format&fit=crop" alt="Foco Total em Eficiência Operacional" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" referrerpolicy="no-referrer" />
              <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
              <div class="absolute bottom-0 left-0 right-0 p-8 md:p-10 flex flex-col justify-end h-full">
                <h3 class="text-2xl md:text-3xl font-bold text-white mb-3 leading-tight">Foco Total em Eficiência Operacional</h3>
                <p class="text-gray-300 text-sm md:text-base font-medium leading-relaxed max-w-md">Toda nossa expertise é voltada para eliminar gargalos e escalar sua estrutura técnica.</p>
              </div>
            </div>

            <!-- Card 2 -->
            <div class="reveal-up delay-100 min-w-[85vw] shrink-0 h-[450px] md:h-auto md:min-w-0 snap-center relative rounded-3xl overflow-hidden group md:col-span-1 md:row-span-1">
              <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=800&auto=format&fit=crop" alt="Método A.A.Q.I. Comprovado" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" referrerpolicy="no-referrer" />
              <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
              <div class="absolute bottom-0 left-0 right-0 p-8 md:p-10 flex flex-col justify-end h-full">
                <h3 class="text-2xl md:text-3xl font-bold text-white mb-3 leading-tight">Método A.A.Q.I. Comprovado</h3>
                <p class="text-gray-300 text-sm md:text-base font-medium leading-relaxed max-w-md">Abordagem estratégica baseada em dados e refinada em múltiplos cenários B2B.</p>
              </div>
            </div>

            <!-- Card 3 -->
            <div class="reveal-up delay-200 min-w-[85vw] shrink-0 h-[450px] md:h-auto md:min-w-0 snap-center relative rounded-3xl overflow-hidden group md:col-span-1 md:row-span-2">
              <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=800&auto=format&fit=crop" alt="Sua Tecnologia, Nossa Estrutura" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" referrerpolicy="no-referrer" />
              <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
              <div class="absolute bottom-0 left-0 right-0 p-8 md:p-10 flex flex-col justify-end h-full">
                <h3 class="text-2xl md:text-3xl font-bold text-white mb-3 leading-tight">Sua Tecnologia, Nossa Estrutura</h3>
                <p class="text-gray-300 text-sm md:text-base font-medium leading-relaxed max-w-md">Atuamos como uma extensão do seu time, cobrindo todo o ciclo de vida do seu produto digital.</p>
              </div>
            </div>

            <!-- Card 4 -->
            <div class="reveal-up delay-300 min-w-[85vw] shrink-0 h-[450px] md:h-auto md:min-w-0 snap-center relative rounded-3xl overflow-hidden group md:col-span-1 md:row-span-1">
              <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=800&auto=format&fit=crop" alt="Performance de Ponta" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" referrerpolicy="no-referrer" />
              <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
              <div class="absolute bottom-0 left-0 right-0 p-8 md:p-10 flex flex-col justify-end h-full">
                <h3 class="text-2xl md:text-3xl font-bold text-white mb-3 leading-tight">Performance de Ponta</h3>
                <p class="text-gray-300 text-sm md:text-base font-medium leading-relaxed max-w-md">Cultura de resultados guiada por métricas de inteligência e precisão técnica.</p>
              </div>
            </div>
          </div>

          <!-- Mobile Pagination Dots -->
          <div class="flex justify-center gap-2 mt-4 md:hidden" id="bento-dots">
            <div class="h-1.5 rounded-full transition-all duration-300 w-8 bg-black"></div>
            <div class="h-1.5 rounded-full transition-all duration-300 w-2 bg-gray-200"></div>
            <div class="h-1.5 rounded-full transition-all duration-300 w-2 bg-gray-200"></div>
            <div class="h-1.5 rounded-full transition-all duration-300 w-2 bg-gray-200"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- LeadershipEcosystem Section -->
    <section class="relative py-24 overflow-hidden bg-slate-900">
      <!-- Background Image -->
      <div class="absolute inset-0 z-0 opacity-30 mix-blend-overlay" style="background-image: url('/aivra-background-instagram.jpg'); background-size: cover; background-position: center;"></div>

      <div class="max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8 relative z-10">
        <div class="mb-16">
          <h2 class="reveal-up text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4 tracking-tight">
            Liderança e Ecossistema Ativo
          </h2>
          <p class="reveal-up delay-100 text-gray-300 text-lg md:text-xl max-w-3xl">
            Mais que desenvolvedores, somos o braço direito tecnológico do seu negócio. Pessoas reais comprometidas com a sua eficiência e crescimento.
          </p>
        </div>

        <!-- Leadership Block -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 mb-24">
          <!-- CEO Photo (Left) -->
          <div class="reveal-up delay-200 lg:col-span-5 relative rounded-3xl overflow-hidden group h-[450px] lg:h-[600px]">
            <img src="https://images.unsplash.com/photo-1556157382-97eda2d62296?q=80&w=1000&auto=format&fit=crop" alt="Felipe CEO" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" referrerpolicy="no-referrer" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
            <div class="absolute bottom-0 left-0 p-8">
              <h3 class="text-3xl md:text-4xl font-bold text-white mb-3">Felipe CEO</h3>
              <p class="text-gray-200 text-lg md:text-xl font-medium">Liderando a revolução técnica da Aivra.</p>
            </div>
          </div>

          <!-- Team Mosaic (Right) -->
          <div class="lg:col-span-7">
            <!-- Mobile Carousel / Desktop Grid -->
            <div class="flex lg:grid lg:grid-cols-2 lg:grid-rows-2 gap-4 lg:gap-6 overflow-x-auto lg:overflow-visible pb-6 lg:pb-0 snap-x snap-mandatory [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none] h-[350px] lg:h-[600px]">

              <div class="reveal-up delay-300 relative rounded-3xl overflow-hidden group shrink-0 w-[85vw] sm:w-[60vw] lg:w-auto snap-center lg:col-span-2 lg:row-span-1">
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=800&auto=format&fit=crop" alt="Equipe" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" referrerpolicy="no-referrer" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-6 md:p-8">
                  <p class="text-white font-semibold text-xl md:text-2xl leading-tight">Expertise que acelera seu ROI</p>
                </div>
              </div>

              <div class="reveal-up delay-400 relative rounded-3xl overflow-hidden group shrink-0 w-[85vw] sm:w-[60vw] lg:w-auto snap-center lg:col-span-1 lg:row-span-1">
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=800&auto=format&fit=crop" alt="Equipe" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" referrerpolicy="no-referrer" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-6 md:p-8">
                  <p class="text-white font-semibold text-xl md:text-2xl leading-tight">Tecnologia que elimina gargalos operacionais</p>
                </div>
              </div>

              <div class="reveal-up delay-500 relative rounded-3xl overflow-hidden group shrink-0 w-[85vw] sm:w-[60vw] lg:w-auto snap-center lg:col-span-1 lg:row-span-1">
                <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?q=80&w=800&auto=format&fit=crop" alt="Equipe" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" referrerpolicy="no-referrer" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-6 md:p-8">
                  <p class="text-white font-semibold text-xl md:text-2xl leading-tight">Inovação contínua para o seu negócio</p>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!-- SaaS Portfolio Block -->
        <div class="reveal-up">
          <div class="mb-8">
            <h3 class="text-2xl md:text-3xl font-bold text-white mb-3">Nosso Ecossistema em Operação</h3>
            <p class="text-gray-300 text-base md:text-lg max-w-3xl">Conheça as soluções proprietárias da Aivra, desenvolvidas sob o rigor do método A.A.Q.I. e validadas por operações reais em diferentes setores do mercado.</p>
          </div>

          <div id="saas-container" class="flex gap-4 lg:gap-6 overflow-x-auto snap-x snap-mandatory [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none] pb-8 pt-4 -mt-4 transition-all duration-500">
            <!-- Product 1 -->
            <div class="saas-card shrink-0 w-[85vw] sm:w-[50vw] md:w-[calc(50%-0.5rem)] lg:w-[calc(33.333%-1rem)] bg-white rounded-2xl p-6 shadow-lg flex flex-col h-[340px] border border-gray-100 cursor-pointer hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 snap-center">
              <div class="flex items-start justify-between mb-4">
                <img src="https://images.unsplash.com/photo-1611162617474-5b21e879e113?q=80&w=150&auto=format&fit=crop" alt="calzap.com.br" class="w-12 h-12 rounded-xl object-cover shadow-sm border border-gray-100" referrerpolicy="no-referrer">
                <div class="flex items-center gap-3">
                  <span class="text-[10px] font-bold tracking-wider text-slate-500 uppercase bg-slate-100 px-2.5 py-1 rounded-full">NOVO</span>
                  <div class="relative flex items-center justify-center w-3 h-3">
                    <span class="absolute inline-flex h-full w-full rounded-full opacity-75 animate-ping bg-blue-500"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                  </div>
                </div>
              </div>
              <h4 class="text-lg font-bold text-slate-900 truncate mb-2">calzap.com.br</h4>
              <p class="text-sm text-slate-500 line-clamp-3 mb-4 flex-grow">Automação inteligente para WhatsApp que recupera vendas e atende clientes 24/7. Crie fluxos visuais, integre com plataformas de vendas e use IA para transcrever áudios e responder com contexto.</p>
              <div class="flex flex-wrap gap-2 mb-4">
                <span class="text-[10px] font-semibold text-slate-600 bg-slate-100 px-2 py-1 rounded-md">WhatsApp</span>
                <span class="text-[10px] font-semibold text-slate-600 bg-slate-100 px-2 py-1 rounded-md">Vendas</span>
                <span class="text-[10px] font-semibold text-slate-600 bg-slate-100 px-2 py-1 rounded-md">IA</span>
              </div>
              <button class="w-full py-2.5 rounded-xl text-sm font-semibold bg-slate-900 text-white hover:bg-slate-800 transition-colors mt-auto">Conhecer solução</button>
            </div>

            <!-- Product 2 -->
            <div class="saas-card shrink-0 w-[85vw] sm:w-[50vw] md:w-[calc(50%-0.5rem)] lg:w-[calc(33.333%-1rem)] bg-white rounded-2xl p-6 shadow-lg flex flex-col h-[340px] border border-gray-100 cursor-pointer hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 snap-center">
              <div class="flex items-start justify-between mb-4">
                <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?q=80&w=150&auto=format&fit=crop" alt="Imobify.app" class="w-12 h-12 rounded-xl object-cover shadow-sm border border-gray-100" referrerpolicy="no-referrer">
                <div class="flex items-center gap-3">
                  <span class="text-[10px] font-bold tracking-wider text-slate-500 uppercase bg-slate-100 px-2.5 py-1 rounded-full">ATIVO</span>
                  <div class="relative flex items-center justify-center w-3 h-3">
                    <span class="absolute inline-flex h-full w-full rounded-full opacity-75 animate-ping bg-green-500"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                  </div>
                </div>
              </div>
              <h4 class="text-lg font-bold text-slate-900 truncate mb-2">Imobify.app</h4>
              <p class="text-sm text-slate-500 line-clamp-3 mb-4 flex-grow">Automatize a forma de admnistrar seus imóveis. Gerencie todos os seus aluguéis direto no WhatsApp: recibos automáticos, alertas de vencimento e relatórios prontos para o Imposto de Renda e muito mais!</p>
              <div class="flex flex-wrap gap-2 mb-4">
                <span class="text-[10px] font-semibold text-slate-600 bg-slate-100 px-2 py-1 rounded-md">WhatsApp</span>
                <span class="text-[10px] font-semibold text-slate-600 bg-slate-100 px-2 py-1 rounded-md">IA</span>
                <span class="text-[10px] font-semibold text-slate-600 bg-slate-100 px-2 py-1 rounded-md">Imobiliário</span>
              </div>
              <button class="w-full py-2.5 rounded-xl text-sm font-semibold bg-slate-900 text-white hover:bg-slate-800 transition-colors mt-auto">Conhecer solução</button>
            </div>

            <!-- Product 3 -->
            <div class="saas-card shrink-0 w-[85vw] sm:w-[50vw] md:w-[calc(50%-0.5rem)] lg:w-[calc(33.333%-1rem)] bg-white rounded-2xl p-6 shadow-lg flex flex-col h-[340px] border border-gray-100 cursor-pointer hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 snap-center">
              <div class="flex items-start justify-between mb-4">
                <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?q=80&w=150&auto=format&fit=crop" alt="fiscaldock.com.br" class="w-12 h-12 rounded-xl object-cover shadow-sm border border-gray-100" referrerpolicy="no-referrer">
                <div class="flex items-center gap-3">
                  <span class="text-[10px] font-bold tracking-wider text-slate-500 uppercase bg-slate-100 px-2.5 py-1 rounded-full">EM BREVE</span>
                  <div class="relative flex items-center justify-center w-3 h-3">
                    <span class="absolute inline-flex h-full w-full rounded-full opacity-75 animate-ping bg-yellow-500"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-yellow-500"></span>
                  </div>
                </div>
              </div>
              <h4 class="text-lg font-bold text-slate-900 truncate mb-2">fiscaldock.com.br</h4>
              <p class="text-sm text-slate-500 line-clamp-3 mb-4 flex-grow">Centralize arquivos fiscais, identifique pendências e riscos automaticamente, gere relatórios prontos para decisão e automatize cobranças/entregas pelo WhatsApp — com trilha de evidências.</p>
              <div class="flex flex-wrap gap-2 mb-4">
                <span class="text-[10px] font-semibold text-slate-600 bg-slate-100 px-2 py-1 rounded-md">SPED</span>
                <span class="text-[10px] font-semibold text-slate-600 bg-slate-100 px-2 py-1 rounded-md">Compliance</span>
                <span class="text-[10px] font-semibold text-slate-600 bg-slate-100 px-2 py-1 rounded-md">WhatsApp</span>
              </div>
              <button class="w-full py-2.5 rounded-xl text-sm font-semibold bg-slate-900 text-white hover:bg-slate-800 transition-colors mt-auto">Conhecer solução</button>
            </div>

            <!-- Product 4 -->
            <div class="saas-card shrink-0 w-[85vw] sm:w-[50vw] md:w-[calc(50%-0.5rem)] lg:w-[calc(33.333%-1rem)] bg-white rounded-2xl p-6 shadow-lg flex flex-col h-[340px] border border-gray-100 cursor-pointer hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 snap-center">
              <div class="flex items-start justify-between mb-4">
                <img src="https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?q=80&w=150&auto=format&fit=crop" alt="botplantao" class="w-12 h-12 rounded-xl object-cover shadow-sm border border-gray-100" referrerpolicy="no-referrer">
                <div class="flex items-center gap-3">
                  <span class="text-[10px] font-bold tracking-wider text-slate-500 uppercase bg-slate-100 px-2.5 py-1 rounded-full">EM BREVE</span>
                  <div class="relative flex items-center justify-center w-3 h-3">
                    <span class="absolute inline-flex h-full w-full rounded-full opacity-75 animate-ping bg-yellow-500"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-yellow-500"></span>
                  </div>
                </div>
              </div>
              <h4 class="text-lg font-bold text-slate-900 truncate mb-2">botplantao</h4>
              <p class="text-sm text-slate-500 line-clamp-3 mb-4 flex-grow">Automação inteligente que monitora grupos de WhatsApp 24/7 e garante plantões médicos em milissegundos. Responda primeiro, aumente sua renda e nunca mais perca uma vaga por estar ocupado.</p>
              <div class="flex flex-wrap gap-2 mb-4">
                <span class="text-[10px] font-semibold text-slate-600 bg-slate-100 px-2 py-1 rounded-md">WhatsApp</span>
                <span class="text-[10px] font-semibold text-slate-600 bg-slate-100 px-2 py-1 rounded-md">Médico</span>
                <span class="text-[10px] font-semibold text-slate-600 bg-slate-100 px-2 py-1 rounded-md">Automação</span>
              </div>
              <button class="w-full py-2.5 rounded-xl text-sm font-semibold bg-slate-900 text-white hover:bg-slate-800 transition-colors mt-auto">Conhecer solução</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FinalSection (FAQ) -->
    <section class="relative py-24 lg:py-32 font-sans overflow-hidden bg-[#020817]">
      <!-- Background -->
      <div class="absolute inset-0 z-0 bg-[#030712]">
        <img src="/aivra-background-instagram.jpg" alt="Background Texture" class="absolute inset-0 w-full h-full object-cover opacity-20 mix-blend-screen" onerror="this.style.display='none'">
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-blue-900/30 via-[#030712]/90 to-[#030712]"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_bottom_left,_var(--tw-gradient-stops))] from-blue-800/20 via-transparent to-transparent"></div>
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#1e293b_1px,transparent_1px),linear-gradient(to_bottom,#1e293b_1px,transparent_1px)] bg-[size:3rem_3rem] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_50%,#000_70%,transparent_100%)] opacity-20"></div>
      </div>

      <div class="relative z-10 max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-16 lg:gap-24">
          <!-- Left Column -->
          <div class="lg:w-[30%]">
            <h2 class="reveal-up text-4xl md:text-5xl font-bold text-white mb-6 tracking-tight">
              Dúvidas Frequentes
            </h2>
            <p class="reveal-up delay-100 text-lg text-gray-300 leading-relaxed">
              Ao lado, reunimos algumas dúvidas comuns que podem te ajudar a entender melhor como funciona a parceria com a Aivra.
            </p>
          </div>

          <!-- Right Column - Accordion -->
          <div class="lg:w-[70%]">
            <div class="border-t border-white/20" id="faq-container">
              <!-- FAQ 1 -->
              <div class="reveal-up border-b border-white/20 faq-item">
                <button class="w-full flex items-center justify-between py-6 md:py-8 text-left focus:outline-none group faq-button">
                  <span class="text-xl md:text-2xl font-bold text-white pr-8 group-hover:text-blue-400 transition-colors">
                    Já possuo um time técnico na minha empresa, por que contratar a Aivra?
                  </span>
                  <span class="flex-shrink-0 text-white group-hover:text-blue-400 transition-colors">
                    <i data-lucide="plus" class="w-6 h-6 stroke-[2.5] faq-icon"></i>
                  </span>
                </button>
                <div class="overflow-hidden transition-all duration-500 ease-in-out max-h-0 opacity-0 faq-content">
                  <p class="text-gray-300 text-lg leading-relaxed pr-12 pb-8">
                    A Aivra atua como uma extensão estratégica e aceleradora. Nosso foco é aplicar o método A.A.Q.I. para trazer expertise técnica e metodologias que escalam sua operação atual.
                  </p>
                </div>
              </div>
              <!-- FAQ 2 -->
              <div class="reveal-up delay-100 border-b border-white/20 faq-item">
                <button class="w-full flex items-center justify-between py-6 md:py-8 text-left focus:outline-none group faq-button">
                  <span class="text-xl md:text-2xl font-bold text-white pr-8 group-hover:text-blue-400 transition-colors">
                    Vocês fazem site?
                  </span>
                  <span class="flex-shrink-0 text-white group-hover:text-blue-400 transition-colors">
                    <i data-lucide="plus" class="w-6 h-6 stroke-[2.5] faq-icon"></i>
                  </span>
                </button>
                <div class="overflow-hidden transition-all duration-500 ease-in-out max-h-0 opacity-0 faq-content">
                  <p class="text-gray-300 text-lg leading-relaxed pr-12 pb-8">
                    Sim. Temos um time de UX Writing, UI Design e Desenvolvimento que está pronto para turbinar seu negócio com sites e Landing Pages de alta conversão.
                  </p>
                </div>
              </div>
              <!-- FAQ 3 -->
              <div class="reveal-up delay-200 border-b border-white/20 faq-item">
                <button class="w-full flex items-center justify-between py-6 md:py-8 text-left focus:outline-none group faq-button">
                  <span class="text-xl md:text-2xl font-bold text-white pr-8 group-hover:text-blue-400 transition-colors">
                    Em quanto tempo terei resultados?
                  </span>
                  <span class="flex-shrink-0 text-white group-hover:text-blue-400 transition-colors">
                    <i data-lucide="plus" class="w-6 h-6 stroke-[2.5] faq-icon"></i>
                  </span>
                </button>
                <div class="overflow-hidden transition-all duration-500 ease-in-out max-h-0 opacity-0 faq-content">
                  <p class="text-gray-300 text-lg leading-relaxed pr-12 pb-8">
                    Os primeiros reflexos na eficiência são visíveis logo após a fase de Implementação do método A.A.Q.I. Resultados de performance e escala costumam ser mensurados já nas primeiras semanas de operação.
                  </p>
                </div>
              </div>
              <!-- FAQ 4 -->
              <div class="reveal-up delay-300 border-b border-white/20 faq-item">
                <button class="w-full flex items-center justify-between py-6 md:py-8 text-left focus:outline-none group faq-button">
                  <span class="text-xl md:text-2xl font-bold text-white pr-8 group-hover:text-blue-400 transition-colors">
                    Como o Método A.A.Q.I. garante resultados?
                  </span>
                  <span class="flex-shrink-0 text-white group-hover:text-blue-400 transition-colors">
                    <i data-lucide="plus" class="w-6 h-6 stroke-[2.5] faq-icon"></i>
                  </span>
                </button>
                <div class="overflow-hidden transition-all duration-500 ease-in-out max-h-0 opacity-0 faq-content">
                  <p class="text-gray-300 text-lg leading-relaxed pr-12 pb-8">
                    Através de uma progressão científica: Analisamos sua estrutura, desenhamos a arquitetura, implementamos a tecnologia exata e monitoramos a performance com inteligência contínua.
                  </p>
                </div>
              </div>
              <!-- FAQ 5 -->
              <div class="reveal-up delay-400 border-b border-white/20 faq-item">
                <button class="w-full flex items-center justify-between py-6 md:py-8 text-left focus:outline-none group faq-button">
                  <span class="text-xl md:text-2xl font-bold text-white pr-8 group-hover:text-blue-400 transition-colors">
                    Quais soluções o Ecossistema Aivra abrange?
                  </span>
                  <span class="flex-shrink-0 text-white group-hover:text-blue-400 transition-colors">
                    <i data-lucide="plus" class="w-6 h-6 stroke-[2.5] faq-icon"></i>
                  </span>
                </button>
                <div class="overflow-hidden transition-all duration-500 ease-in-out max-h-0 opacity-0 faq-content">
                  <p class="text-gray-300 text-lg leading-relaxed pr-12 pb-8">
                    Abrangemos desde o desenvolvimento de produtos comerciais (SaaS) até a criação de gateways de pagamento e automação de processos complexos.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="relative bg-[#020817] pt-24 pb-12 font-sans overflow-hidden border-t border-white/5">
    <!-- Background Elements -->
    <div class="absolute inset-0 z-0">
      <img src="/aivra-background-instagram.jpg" alt="Background Texture" class="absolute inset-0 w-full h-full object-cover opacity-10 mix-blend-screen" onerror="this.style.display='none'">
      <div class="absolute inset-0 bg-gradient-to-b from-[#020817]/50 to-[#020817]"></div>
    </div>

    <div class="relative z-10 max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8">
      <div class="reveal-up grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-16 mb-20">
        <!-- Column 1: Sobre -->
        <div class="flex flex-col gap-6">
          <div class="flex items-center gap-2">
            <div class="w-8 h-8 bg-white rounded flex items-center justify-center">
              <span class="text-[#020817] font-black text-lg">A</span>
            </div>
            <span class="text-xl font-bold text-white tracking-tighter">AIVRA</span>
          </div>
          <p class="text-gray-400 text-sm leading-relaxed max-w-xs">
            Transformando operações complexas em ecossistemas de alta performance através do método A.A.Q.I.
          </p>
        </div>

        <!-- Column 2: Soluções -->
        <div>
          <h4 class="text-white text-sm font-bold uppercase tracking-wider mb-6">Soluções</h4>
          <ul class="flex flex-col gap-4">
            <li><a href="#" class="text-gray-400 text-sm hover:text-white transition-colors">Ecossistema</a></li>
            <li><a href="#" class="text-gray-400 text-sm hover:text-white transition-colors">Método A.A.Q.I.</a></li>
            <li><a href="#" class="text-gray-400 text-sm hover:text-white transition-colors">SaaS B2B</a></li>
            <li><a href="#" class="text-gray-400 text-sm hover:text-white transition-colors">Landing Pages</a></li>
          </ul>
        </div>

        <!-- Column 3: Contato -->
        <div>
          <h4 class="text-white text-sm font-bold uppercase tracking-wider mb-6">Contato</h4>
          <ul class="flex flex-col gap-4 mb-6">
            <li class="flex items-center gap-2 text-gray-400 text-sm">
              <i data-lucide="mail" class="w-4 h-4 text-blue-500"></i>
              <span>contato@aivra.com.br</span>
            </li>
            <li class="flex items-center gap-2 text-gray-400 text-sm">
              <i data-lucide="calendar" class="w-4 h-4 text-blue-500"></i>
              <a href="#" class="hover:text-white transition-colors">Agendar Reunião</a>
            </li>
          </ul>
          <a href="https://wa.me/5511999999999" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 bg-white text-[#020817] px-5 py-2.5 rounded-full text-sm font-bold hover:bg-blue-50 transition-all group">
            <i data-lucide="message-circle" class="w-4 h-4 fill-current"></i>
            Fale com um Especialista
          </a>
        </div>

        <!-- Column 4: Social -->
        <div>
          <h4 class="text-white text-sm font-bold uppercase tracking-wider mb-6">Social</h4>
          <div class="flex gap-4">
            <a href="#" class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-gray-400 hover:text-white hover:border-white/30 transition-all" aria-label="LinkedIn">
              <i data-lucide="linkedin" class="w-5 h-5"></i>
            </a>
            <a href="#" class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-gray-400 hover:text-white hover:border-white/30 transition-all" aria-label="Instagram">
              <i data-lucide="instagram" class="w-5 h-5"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Bottom Bar -->
      <div class="pt-12 border-t border-white/10">
        <div class="flex flex-col items-center text-center gap-4">
          <p class="text-gray-500 text-sm">© 2024 Aivra. Todos os direitos reservados.</p>
          <div class="flex flex-col gap-2">
            <p class="text-gray-500 text-xs">F. Devecchi Daige e Cia LTDA | CNPJ: 63.112.970/0001-07</p>
            <p class="text-gray-600 text-[10px] md:text-xs">Av. Marcelino Pires, 6385, Sala 7, Vila Sao Francisco, Dourados - MS, 79833-001</p>
          </div>
        </div>
      </div>
    </div>
  </footer>

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

        // Animate links in
        mobileNavLinks.forEach(link => {
          link.classList.remove('opacity-0', '-translate-x-4');
          link.classList.add('opacity-100', 'translate-x-0');
        });
      } else {
        menuIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
        mobileMenu.classList.add('max-h-0', 'opacity-0');
        mobileMenu.classList.remove('max-h-screen', 'opacity-100');

        // Animate links out
        mobileNavLinks.forEach(link => {
          link.classList.add('opacity-0', '-translate-x-4');
          link.classList.remove('opacity-100', 'translate-x-0');
        });
      }
    });

    // Close mobile menu on link click
    mobileNavLinks.forEach(link => {
      link.addEventListener('click', () => {
        if (isMobileMenuOpen) {
          mobileMenuToggle.click();
        }
      });
    });

    // Desktop Nav Hover Effects (replaces Framer Motion layoutId="header-underline")
    const desktopNavLinks = document.querySelectorAll('#desktop-nav .nav-link');
    desktopNavLinks.forEach(link => {
      link.addEventListener('mouseenter', () => {
        // Hide all underlines except active and hovered
        desktopNavLinks.forEach(otherLink => {
          const underline = otherLink.querySelector('.nav-underline');
          if (otherLink !== link && !otherLink.classList.contains('text-blue-600')) {
            underline.classList.add('opacity-0');
            otherLink.classList.remove('text-blue-600');
          }
        });

        if (!link.classList.contains('text-blue-600')) {
          link.classList.add('text-blue-600');
          const underline = link.querySelector('.nav-underline');
          if (underline) underline.classList.remove('opacity-0');
        }
      });

      link.addEventListener('mouseleave', () => {
        const activeLink = document.querySelector('#desktop-nav .nav-link.active-link') || desktopNavLinks[0];

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

    // Initial state for navlinks
    desktopNavLinks[0].classList.add('active-link');

    // Reveal Animations
    const observerOptions = {
      root: null,
      rootMargin: '0px',
      threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('active');
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    document.querySelectorAll('.reveal-up').forEach(el => {
      observer.observe(el);
    });

    // FAQ Accordion
    const faqButtons = document.querySelectorAll('.faq-button');
    faqButtons.forEach(button => {
      button.addEventListener('click', () => {
        const content = button.nextElementSibling;
        const icon = button.querySelector('.faq-icon');
        const isOpen = !content.classList.contains('max-h-0');

        // Close all other FAQs
        document.querySelectorAll('.faq-content').forEach(c => {
          if (c !== content) {
            c.classList.add('max-h-0', 'opacity-0');
            c.classList.remove('max-h-[500px]', 'opacity-100');
          }
        });
        document.querySelectorAll('.faq-icon').forEach(i => {
          if (i !== icon) {
            i.classList.remove('rotate-45', 'text-blue-400');
          }
        });

        // Toggle current FAQ
        if (isOpen) {
          content.classList.add('max-h-0', 'opacity-0');
          content.classList.remove('max-h-[500px]', 'opacity-100');
          icon.classList.remove('rotate-45', 'text-blue-400');
        } else {
          content.classList.remove('max-h-0', 'opacity-0');
          content.classList.add('max-h-[500px]', 'opacity-100');
          icon.classList.add('rotate-45', 'text-blue-400');
        }
      });
    });

    // Bento Values Hover Effect
    const bentoCards = document.querySelectorAll('.bento-card');
    bentoCards.forEach(card => {
      card.addEventListener('mousemove', e => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        card.style.setProperty('--mouse-x', `${x}px`);
        card.style.setProperty('--mouse-y', `${y}px`);
      });
    });

  // Mobile Step Marquee (direções alternadas)
  (function () {
    if (window.innerWidth >= 768) return;
    const STEP = 344;  // 320px card + 24px gap
    const CARDS = 4;   // 4 cards únicos por fileira

    function stepMarquee(el, direction) {
      if (!el) return;
      el.classList.remove('animate-marquee-left', 'animate-marquee-right');
      const containerWidth = el.parentElement.offsetWidth;
      const centerOffset = (containerWidth - 320) / 2;
      const initialTranslate = direction === 'right'
        ? centerOffset - CARDS * STEP
        : centerOffset;
      el.style.transition = 'none';
      el.style.transform = `translateX(${initialTranslate}px)`;
      let step = 0;

      setInterval(() => {
        step++;
        const translate = direction === 'right'
          ? initialTranslate + step * STEP
          : initialTranslate - step * STEP;
        el.style.transition = 'transform 0.5s ease-in-out';
        el.style.transform = `translateX(${translate}px)`;

        if (step >= CARDS) {
          setTimeout(() => {
            el.style.transition = 'none';
            el.style.transform = `translateX(${initialTranslate}px)`;
            el.offsetHeight; // force reflow
            step = 0;
          }, 520);
        }
      }, 3500);
    }

    stepMarquee(document.getElementById('squad-marquee-top'), 'left');
    stepMarquee(document.getElementById('squad-marquee-bottom'), 'right');
  })();
  </script>
</body>

</html>