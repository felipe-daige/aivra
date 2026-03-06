@php $activeNav = $activeNav ?? 'home'; @endphp
<header id="main-header" class="fixed top-0 z-50 w-full bg-[#F8FAFC] transition-all duration-500 ease-in-out -translate-y-full">
  <div class="max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8">
    <nav class="flex items-center justify-between h-20 md:h-24 relative">
      <!-- Logo -->
      <div class="flex items-center cursor-pointer shrink-0">
        <a href="/" class="text-2xl md:text-3xl font-black text-slate-900 tracking-tighter uppercase">
          AIVRA
        </a>
      </div>

      <!-- Desktop Navigation -->
      <div class="hidden lg:flex flex-1 items-center justify-center h-full gap-4 xl:gap-8 px-4" id="desktop-nav">
        <a href="/" class="nav-link relative flex items-center h-full text-[13px] xl:text-[15px] whitespace-nowrap font-semibold pt-1 {{ $activeNav === 'home' ? 'text-blue-600' : 'text-slate-800 hover:text-blue-600 transition-colors' }}">
          Home
          <div class="nav-underline absolute bottom-0 left-0 right-0 h-1 bg-blue-600 rounded-t-sm {{ $activeNav !== 'home' ? 'opacity-0 transition-opacity' : '' }}"></div>
        </a>
        <a href="/sobre" class="nav-link relative flex items-center h-full text-[13px] xl:text-[15px] whitespace-nowrap font-semibold pt-1 {{ $activeNav === 'sobre' ? 'text-blue-600' : 'text-slate-800 hover:text-blue-600 transition-colors' }}">
          Sobre nós
          <div class="nav-underline absolute bottom-0 left-0 right-0 h-1 bg-blue-600 rounded-t-sm {{ $activeNav !== 'sobre' ? 'opacity-0 transition-opacity' : '' }}"></div>
        </a>

        <!-- Produtos e Serviços com dropdown -->
        <div class="relative h-full flex items-center" id="produtos-wrapper">
          <button type="button" class="nav-link relative flex items-center h-full text-[13px] xl:text-[15px] whitespace-nowrap font-semibold pt-1 {{ $activeNav === 'produtos' ? 'text-blue-600' : 'text-slate-800 hover:text-blue-600 transition-colors' }}" id="produtos-trigger">
            Produtos e Serviços
            <i data-lucide="chevron-down" class="w-4 h-4 ml-1.5 stroke-[2.5px]" id="produtos-chevron"></i>
            <div class="nav-underline absolute bottom-0 left-0 right-0 h-1 bg-blue-600 rounded-t-sm {{ $activeNav !== 'produtos' ? 'opacity-0 transition-opacity' : '' }}"></div>
          </button>
          <div id="produtos-dropdown" class="absolute top-full left-0 bg-white border border-slate-200 rounded-2xl shadow-lg py-2 min-w-[220px] opacity-0 pointer-events-none transition-all duration-200 z-50 translate-y-2">
            <a href="/servicos/presenca-digital" class="flex items-center gap-3 px-4 py-2.5 text-sm font-semibold text-slate-700 hover:text-blue-600 hover:bg-slate-50 transition-colors rounded-t-xl">
              <i data-lucide="monitor" class="w-4 h-4 text-blue-500"></i>
              Presença Digital
            </a>
            <a href="/servicos/erp-inteligente" class="flex items-center gap-3 px-4 py-2.5 text-sm font-semibold text-slate-700 hover:text-blue-600 hover:bg-slate-50 transition-colors">
              <i data-lucide="database" class="w-4 h-4 text-blue-500"></i>
              ERP Inteligente
            </a>
            <a href="/servicos/automacao-fluxo" class="flex items-center gap-3 px-4 py-2.5 text-sm font-semibold text-slate-700 hover:text-blue-600 hover:bg-slate-50 transition-colors rounded-b-xl">
              <i data-lucide="git-branch" class="w-4 h-4 text-blue-500"></i>
              Automação e Fluxo
            </a>
          </div>
        </div>

        <a href="/contato" class="nav-link relative flex items-center h-full text-[13px] xl:text-[15px] whitespace-nowrap font-semibold pt-1 {{ $activeNav === 'contato' ? 'text-blue-600' : 'text-slate-800 hover:text-blue-600 transition-colors' }}">
          Contato
          <div class="nav-underline absolute bottom-0 left-0 right-0 h-1 bg-blue-600 rounded-t-sm {{ $activeNav !== 'contato' ? 'opacity-0 transition-opacity' : '' }}"></div>
        </a>
        <a href="#" class="nav-link relative flex items-center h-full text-[13px] xl:text-[15px] whitespace-nowrap font-semibold pt-1 text-slate-800 hover:text-blue-600 transition-colors">
          Trabalhe conosco
          <i data-lucide="chevron-down" class="w-4 h-4 ml-1.5 stroke-[2.5px]"></i>
          <div class="nav-underline absolute bottom-0 left-0 right-0 h-1 bg-blue-600 rounded-t-sm opacity-0 transition-opacity"></div>
        </a>
        <a href="/blog" class="nav-link relative flex items-center h-full text-[13px] xl:text-[15px] whitespace-nowrap font-semibold pt-1 {{ $activeNav === 'blog' ? 'text-blue-600' : 'text-slate-800 hover:text-blue-600 transition-colors' }}">
          Blog
          <div class="nav-underline absolute bottom-0 left-0 right-0 h-1 bg-blue-600 rounded-t-sm {{ $activeNav !== 'blog' ? 'opacity-0 transition-opacity' : '' }}"></div>
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
        <a href="/contato" class="bg-[#2563EB] hover:bg-blue-700 text-white px-7 py-3 rounded-full font-semibold transition-colors shadow-sm text-[15px] ml-2">
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
      <a href="/" class="mobile-nav-link flex items-center justify-between py-4 text-lg font-semibold border-b border-gray-100 {{ $activeNav === 'home' ? 'text-blue-600' : 'text-slate-800 hover:text-blue-600' }} opacity-0 transform -translate-x-4 transition-all duration-300 delay-[50ms]">
        Home
      </a>
      <a href="/sobre" class="mobile-nav-link flex items-center justify-between py-4 text-lg font-semibold border-b border-gray-100 {{ $activeNav === 'sobre' ? 'text-blue-600' : 'text-slate-800 hover:text-blue-600' }} opacity-0 transform -translate-x-4 transition-all duration-300 delay-[100ms]">
        Sobre nós
      </a>

      <!-- Produtos e Serviços com sub-links -->
      <div class="mobile-nav-link border-b border-gray-100 opacity-0 transform -translate-x-4 transition-all duration-300 delay-[150ms]">
        <div class="flex items-center justify-between py-4 text-lg font-semibold {{ $activeNav === 'produtos' ? 'text-blue-600' : 'text-slate-800' }}">
          Produtos e Serviços
        </div>
        <div class="pl-4 pb-3 flex flex-col gap-1">
          <a href="/servicos/presenca-digital" class="py-2 text-sm font-semibold text-slate-600 hover:text-blue-600 transition-colors flex items-center gap-2">
            <i data-lucide="monitor" class="w-4 h-4 text-blue-400"></i>
            Presença Digital
          </a>
          <a href="/servicos/erp-inteligente" class="py-2 text-sm font-semibold text-slate-600 hover:text-blue-600 transition-colors flex items-center gap-2">
            <i data-lucide="database" class="w-4 h-4 text-blue-400"></i>
            ERP Inteligente
          </a>
          <a href="/servicos/automacao-fluxo" class="py-2 text-sm font-semibold text-slate-600 hover:text-blue-600 transition-colors flex items-center gap-2">
            <i data-lucide="git-branch" class="w-4 h-4 text-blue-400"></i>
            Automação e Fluxo
          </a>
        </div>
      </div>

      <a href="/contato" class="mobile-nav-link flex items-center justify-between py-4 text-lg font-semibold border-b border-gray-100 {{ $activeNav === 'contato' ? 'text-blue-600' : 'text-slate-800 hover:text-blue-600' }} opacity-0 transform -translate-x-4 transition-all duration-300 delay-[200ms]">
        Contato
      </a>
      <a href="#" class="mobile-nav-link flex items-center justify-between py-4 text-lg font-semibold text-slate-800 hover:text-blue-600 opacity-0 transform -translate-x-4 transition-all duration-300 delay-[250ms] border-b border-gray-100">
        Trabalhe conosco
        <i data-lucide="chevron-down" class="w-5 h-5 text-slate-400"></i>
      </a>
      <a href="/blog" class="mobile-nav-link flex items-center justify-between py-4 text-lg font-semibold {{ $activeNav === 'blog' ? 'text-blue-600' : 'text-slate-800 hover:text-blue-600' }} opacity-0 transform -translate-x-4 transition-all duration-300 delay-[300ms]">
        Blog
      </a>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const produtosWrapper = document.getElementById('produtos-wrapper');
      const produtosDropdown = document.getElementById('produtos-dropdown');
      const produtosChevron = document.getElementById('produtos-chevron');

      if (produtosWrapper && produtosDropdown) {
        let hideTimer;

        function showDropdown() {
          clearTimeout(hideTimer);
          produtosDropdown.classList.remove('opacity-0', 'pointer-events-none', 'translate-y-2');
          produtosDropdown.classList.add('opacity-100', 'pointer-events-auto', 'translate-y-0');
          if (produtosChevron) {
            produtosChevron.style.transform = 'rotate(180deg)';
            produtosChevron.style.transition = 'transform 0.2s';
          }
        }

        function hideDropdown() {
          hideTimer = setTimeout(() => {
            produtosDropdown.classList.add('opacity-0', 'pointer-events-none', 'translate-y-2');
            produtosDropdown.classList.remove('opacity-100', 'pointer-events-auto', 'translate-y-0');
            if (produtosChevron) produtosChevron.style.transform = 'rotate(0deg)';
          }, 120);
        }

        produtosWrapper.addEventListener('mouseenter', showDropdown);
        produtosWrapper.addEventListener('mouseleave', hideDropdown);
        produtosDropdown.addEventListener('mouseenter', showDropdown);
        produtosDropdown.addEventListener('mouseleave', hideDropdown);
      }
    });
  </script>
</header>
