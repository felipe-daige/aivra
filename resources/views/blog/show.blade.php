<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {{-- SEO --}}
  <title>{{ $post['title'] }} | Blog Aivra</title>
  <meta name="description" content="{{ $post['description'] ?? '' }}">
  <link rel="canonical" href="{{ url('/blog/' . $post['slug']) }}">

  {{-- Open Graph --}}
  <meta property="og:type" content="article">
  <meta property="og:title" content="{{ $post['title'] }}">
  <meta property="og:description" content="{{ $post['description'] ?? '' }}">
  <meta property="og:url" content="{{ url('/blog/' . $post['slug']) }}">
  <meta property="og:image" content="{{ $post['image'] ?? 'https://aivratech.com.br/aivra_linkpreview.png' }}">
  <meta property="og:image:secure_url" content="{{ $post['image'] ?? 'https://aivratech.com.br/aivra_linkpreview.png' }}">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:site_name" content="Aivra">
  @if(config('services.facebook.app_id'))
  <meta property="fb:app_id" content="{{ config('services.facebook.app_id') }}">
  @endif
  <meta property="article:published_time" content="{{ $post['date'] ?? '' }}">
  <meta property="article:section" content="{{ $post['category'] ?? '' }}">

  {{-- Twitter Card --}}
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="{{ $post['title'] }}">
  <meta name="twitter:description" content="{{ $post['description'] ?? '' }}">
  <meta name="twitter:image" content="{{ $post['image'] ?? '' }}">

  {{-- JSON-LD Article Schema --}}
  <script type="application/ld+json">
  {
    "@@context": "https://schema.org",
    "@type": "Article",
    "headline": "{{ addslashes($post['title']) }}",
    "description": "{{ addslashes($post['description'] ?? '') }}",
    "image": "{{ $post['image'] ?? '' }}",
    "author": {
      "@type": "Person",
      "name": "{{ addslashes($post['author_name'] ?? 'Equipe Aivra') }}"
    },
    "publisher": {
      "@type": "Organization",
      "name": "Aivra",
      "logo": {
        "@type": "ImageObject",
        "url": "{{ url('/') }}/favicon.ico"
      }
    },
    "datePublished": "{{ $post['date'] ?? '' }}",
    "url": "{{ url('/blog/' . $post['slug']) }}"
  }
  </script>

  @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @endif

  <style>
  @@keyframes float-blob-a {
    0%   { transform: translate(0, 0) scale(1); }
    50%  { transform: translate(-40px, 30px) scale(1.08); }
    100% { transform: translate(20px, -25px) scale(0.94); }
  }
  @@keyframes float-blob-b {
    0%   { transform: translate(0, 0) scale(1); }
    50%  { transform: translate(35px, -40px) scale(1.1); }
    100% { transform: translate(-20px, 20px) scale(0.92); }
  }
  .animate-float-blob-a { animation: float-blob-a 12s ease-in-out infinite alternate; }
  .animate-float-blob-b { animation: float-blob-b 9s ease-in-out infinite alternate; }

  /* Tipografia do artigo */
  .prose h2 {
    font-size: 1.5rem;
    font-weight: 700;
    color: #0f172a;
    margin-top: 2.5rem;
    margin-bottom: 1rem;
    line-height: 1.3;
  }
  .prose h3 {
    font-size: 1.2rem;
    font-weight: 700;
    color: #1e293b;
    margin-top: 2rem;
    margin-bottom: 0.75rem;
  }
  .prose p {
    color: #475569;
    line-height: 1.85;
    margin-bottom: 1.25rem;
  }
  .prose ul, .prose ol {
    color: #475569;
    line-height: 1.85;
    margin-bottom: 1.25rem;
    padding-left: 1.5rem;
  }
  .prose ul { list-style-type: disc; }
  .prose ol { list-style-type: decimal; }
  .prose li { margin-bottom: 0.5rem; }
  .prose a {
    color: #2563eb;
    text-decoration: underline;
    text-underline-offset: 3px;
  }
  .prose a:hover { color: #1d4ed8; }
  .prose strong { color: #1e293b; font-weight: 700; }
  .prose blockquote {
    border-left: 4px solid #2563eb;
    padding-left: 1.25rem;
    margin: 1.5rem 0;
    color: #64748b;
    font-style: italic;
  }
  @@media (min-width: 768px) {
    .prose h2 { font-size: 1.75rem; }
    .prose h3 { font-size: 1.375rem; }
  }
  </style>

  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="bg-white text-slate-900 antialiased overflow-x-hidden">

  @include('partials.header', ['activeNav' => 'blog'])

  <main>

    <!-- ===== HERO DO ARTIGO ===== -->
    <section class="relative overflow-hidden bg-[#F8FAFC] pt-36 lg:pt-44 pb-0">
      <div class="absolute inset-0 bg-[linear-gradient(to_right,#e2e8f0_1px,transparent_1px),linear-gradient(to_bottom,#e2e8f0_1px,transparent_1px)] bg-[size:3rem_3rem] [mask-image:radial-gradient(ellipse_80%_60%_at_50%_40%,#000_60%,transparent_100%)] opacity-40"></div>
      <div class="absolute inset-0 bg-[radial-gradient(ellipse_70%_50%_at_50%_0%,rgba(219,234,254,0.7)_0%,transparent_70%)]"></div>
      <div class="absolute -top-10 -right-10 w-[28rem] h-[28rem] rounded-full bg-blue-200/60 blur-3xl pointer-events-none animate-float-blob-a"></div>
      <div class="absolute -bottom-5 -left-5 w-80 h-80 rounded-full bg-indigo-200/50 blur-3xl pointer-events-none animate-float-blob-b"></div>

      <div class="relative z-10 max-w-3xl mx-auto px-4 md:px-6 lg:px-8 text-center pb-14">
        <!-- Breadcrumb -->
        <nav class="flex items-center justify-center gap-2 text-sm text-slate-500 mb-8">
          <a href="/" class="hover:text-blue-600 transition-colors">Home</a>
          <i data-lucide="chevron-right" class="w-4 h-4"></i>
          <a href="/blog" class="hover:text-blue-600 transition-colors">Blog</a>
          <i data-lucide="chevron-right" class="w-4 h-4"></i>
          <span class="text-slate-700 font-medium truncate max-w-[200px]">{{ $post['title'] }}</span>
        </nav>

        <!-- Badge de categoria -->
        <span class="inline-block bg-blue-50 text-blue-600 border border-blue-100 text-xs font-bold uppercase tracking-wider px-4 py-1.5 rounded-full mb-6">{{ $post['category'] }}</span>

        <!-- Título -->
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 tracking-tight leading-[1.15] mb-6">
          {{ $post['title'] }}
        </h1>

        @if (!empty($post['description']))
        <p class="text-lg text-slate-500 leading-relaxed mb-8 max-w-2xl mx-auto">
          {{ $post['description'] }}
        </p>
        @endif

        <!-- Meta do autor -->
        <div class="flex items-center justify-center gap-4">
          <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold text-sm shrink-0">{{ $post['author_initial'] ?? 'A' }}</div>
          <div class="text-left">
            <p class="text-slate-800 font-semibold text-sm">{{ $post['author_name'] ?? 'Equipe Aivra' }}</p>
            <p class="text-slate-400 text-xs">{{ $post['date'] ?? '' }}{{ !empty($post['date']) && !empty($post['reading_time']) ? ' · ' : '' }}{{ $post['reading_time'] ?? '' }}</p>
          </div>
        </div>
      </div>

      <!-- Imagem hero -->
      @if (!empty($post['image']))
      <div class="relative z-10 max-w-4xl mx-auto px-4 md:px-6 lg:px-8">
        <div class="rounded-t-[2rem] overflow-hidden aspect-video bg-slate-200 shadow-xl">
          <img
            src="{{ $post['image'] }}"
            alt="{{ $post['alt'] ?? $post['title'] }}"
            class="w-full h-full object-cover"
          >
        </div>
      </div>
      @endif
    </section>

    <!-- ===== CORPO DO ARTIGO ===== -->
    <section class="bg-white py-16 md:py-24">
      <div class="max-w-3xl mx-auto px-4 md:px-6 lg:px-8">
        <article class="prose">
          @includeIf($post['body_view'])
        </article>
      </div>
    </section>

    <!-- ===== CTA DIAGNÓSTICO ===== -->
    <section class="bg-[#020817] py-20">
      <div class="max-w-3xl mx-auto px-4 md:px-6 lg:px-8 text-center">
        <div class="w-16 h-16 rounded-full bg-blue-600/20 border border-blue-500/30 flex items-center justify-center mx-auto mb-6">
          <i data-lucide="zap" class="w-8 h-8 text-blue-400"></i>
        </div>
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 tracking-tight">
          Pronto para transformar sua operação?
        </h2>
        <p class="text-gray-400 leading-relaxed mb-8 max-w-xl mx-auto">
          Agende um diagnóstico gratuito com nossa equipe e descubra como o Método A.A.Q.I. pode gerar resultados mensuráveis no seu negócio em semanas.
        </p>
        <a
          href="/contato"
          class="inline-flex items-center gap-2 bg-[#2563EB] hover:bg-blue-700 text-white px-8 py-4 rounded-full font-semibold transition-colors shadow-sm"
        >
          <i data-lucide="calendar" class="w-5 h-5"></i>
          Agendar diagnóstico gratuito
        </a>
      </div>
    </section>

    <!-- ===== ARTIGOS RELACIONADOS ===== -->
    @if (!empty($relatedPosts))
    <section class="bg-white py-20">
      <div class="max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8">
        <h2 class="text-2xl md:text-3xl font-bold text-slate-900 mb-10 tracking-tight">Artigos relacionados</h2>

        @php
        $colorMap = [
            'orange' => ['badge' => 'bg-orange-50 text-orange-600 border border-orange-100', 'avatar' => 'bg-orange-100 text-orange-600'],
            'blue'   => ['badge' => 'bg-blue-50 text-blue-600 border border-blue-100',       'avatar' => 'bg-blue-100 text-blue-600'],
            'green'  => ['badge' => 'bg-green-50 text-green-600 border border-green-100',    'avatar' => 'bg-green-100 text-green-600'],
            'purple' => ['badge' => 'bg-purple-50 text-purple-600 border border-purple-100', 'avatar' => 'bg-purple-100 text-purple-600'],
            'red'    => ['badge' => 'bg-red-50 text-red-600 border border-red-100',          'avatar' => 'bg-red-100 text-red-600'],
            'cyan'   => ['badge' => 'bg-cyan-50 text-cyan-600 border border-cyan-100',       'avatar' => 'bg-cyan-100 text-cyan-600'],
        ];
        @endphp

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
          @foreach ($relatedPosts as $related)
            @php $colors = $colorMap[$related['color'] ?? 'blue'] ?? $colorMap['blue']; @endphp
            <article class="rounded-[2rem] border border-slate-100 shadow-sm hover:-translate-y-1 transition-transform flex flex-col overflow-hidden">
              <div class="aspect-video bg-slate-100 relative overflow-hidden shrink-0">
                <img
                  src="{{ $related['image'] }}"
                  alt="{{ $related['alt'] }}"
                  class="w-full h-full object-cover"
                  loading="lazy"
                >
              </div>
              <div class="p-7 flex flex-col flex-grow">
                <span class="inline-block {{ $colors['badge'] }} text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full mb-4 w-fit">{{ $related['category'] }}</span>
                <h3 class="text-lg font-bold text-slate-900 mb-3 leading-snug hover:text-blue-600 transition-colors">
                  <a href="{{ url('/blog/' . $related['slug']) }}">{{ $related['title'] }}</a>
                </h3>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 flex-grow line-clamp-2">
                  {{ $related['description'] }}
                </p>
                <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
                  <div class="w-8 h-8 rounded-full {{ $colors['avatar'] }} flex items-center justify-center font-bold text-xs shrink-0">{{ $related['author_initial'] }}</div>
                  <span class="text-slate-400 text-xs">{{ $related['reading_time'] }}</span>
                </div>
              </div>
            </article>
          @endforeach
        </div>

        <div class="text-center mt-12">
          <a href="/blog" class="inline-flex items-center gap-2 text-blue-600 font-semibold hover:text-blue-700 transition-colors">
            <i data-lucide="arrow-left" class="w-4 h-4"></i>
            Ver todos os artigos
          </a>
        </div>
      </div>
    </section>
    @endif

  </main>

  @include('partials.footer')

  <script>
    lucide.createIcons();

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

    if (desktopNavLinks[5]) desktopNavLinks[5].classList.add('active-link');
  </script>
</body>

</html>
