<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog | Aivra — Inteligência e Performance em Pauta</title>
  <meta name="description" content="Insights do Método A.A.Q.I., IA, SaaS e performance operacional.">
  <meta property="og:title" content="Blog | Aivra">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ secure_url('/blog') }}">
  <meta property="og:description" content="Insights do Método A.A.Q.I., IA, SaaS e performance operacional.">
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
  <meta name="twitter:title" content="Blog | Aivra — Inteligência e Performance em Pauta">
  <meta name="twitter:description" content="Insights do Método A.A.Q.I., IA, SaaS e performance operacional.">
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

  /* Shimmer animado para o badge hero */
  @keyframes shimmer {
    0%   { background-position: -200% center; }
    100% { background-position:  200% center; }
  }
  .badge-shimmer {
    background: linear-gradient(
      90deg,
      #3b82f6 0%,
      #818cf8 40%,
      #3b82f6 60%,
      #6366f1 100%
    );
    background-size: 200% auto;
    animation: shimmer 3s linear infinite;
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  /* Gradient text para o título */
  .gradient-text {
    background: linear-gradient(135deg, #2563eb 0%, #4f46e5 50%, #6366f1 100%);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  /* Chip hover: transição suave de cor via opacity do background */
  .quick-chip { transition: background-color 0.25s ease, color 0.25s ease, border-color 0.25s ease, box-shadow 0.25s ease; }

  /* Overlay editorial no card principal */
  .card-overlay {
    background: linear-gradient(to top, rgba(2,8,23,0.95) 0%, rgba(2,8,23,0.6) 45%, transparent 100%);
  }

  /* Borda lateral colorida para cards pequenos */
  .border-cat-green  { border-left: 4px solid #4ade80; }
  .border-cat-purple { border-left: 4px solid #a78bfa; }
  .border-cat-blue   { border-left: 4px solid #60a5fa; }
  .border-cat-orange { border-left: 4px solid #fb923c; }
  </style>

  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="bg-white text-slate-900 antialiased overflow-x-hidden">

  @include('partials.header', ['activeNav' => 'blog'])

  <main>

    <!-- ===== SEÇÃO 1: HERO ===== -->
    <section class="relative overflow-hidden bg-[#F8FAFC] pt-36 lg:pt-44 pb-20">

      {{-- Camada 1: grade sutil de linhas com máscara radial --}}
      <div class="absolute inset-0 bg-[linear-gradient(to_right,#e2e8f0_1px,transparent_1px),linear-gradient(to_bottom,#e2e8f0_1px,transparent_1px)] bg-[size:3rem_3rem] [mask-image:radial-gradient(ellipse_80%_60%_at_50%_40%,#000_60%,transparent_100%)] opacity-40"></div>

      {{-- Camada 2: halo azul suave no topo --}}
      <div class="absolute inset-0 bg-[radial-gradient(ellipse_70%_50%_at_50%_0%,rgba(219,234,254,0.7)_0%,transparent_70%)]"></div>

      {{-- Camada 3: reflexo indigo no rodapé do hero para criar profundidade --}}
      <div class="absolute inset-0 bg-[radial-gradient(ellipse_50%_30%_at_50%_100%,rgba(199,210,254,0.35)_0%,transparent_70%)]"></div>

      {{-- Blobs flutuantes: maiores e com dupla camada de blur para profundidade extra --}}
      <div class="absolute -top-16 -right-16 w-[36rem] h-[36rem] rounded-full bg-blue-300/40 blur-[80px] pointer-events-none animate-float-blob-a"></div>
      <div class="absolute -top-8 -right-8 w-[22rem] h-[22rem] rounded-full bg-indigo-300/30 blur-3xl pointer-events-none animate-float-blob-a"></div>
      <div class="absolute -bottom-8 -left-8 w-96 h-96 rounded-full bg-indigo-200/50 blur-[70px] pointer-events-none animate-float-blob-b"></div>
      <div class="absolute -bottom-2 left-8 w-56 h-56 rounded-full bg-blue-200/40 blur-2xl pointer-events-none animate-float-blob-b"></div>

      <div class="relative z-10 max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8 text-center">

        {{-- Badge com pill gradiente + shimmer animado --}}
        <div class="inline-flex items-center gap-2 bg-white border border-blue-100 shadow-sm shadow-blue-100/60 rounded-full px-4 py-1.5 text-sm font-semibold mb-6">
          {{-- Ícone em azul sólido para servir de âncora visual --}}
          <span class="flex items-center justify-center w-5 h-5 rounded-full bg-blue-600">
            <i data-lucide="rss" class="w-3 h-3 text-white"></i>
          </span>
          {{-- Texto com efeito shimmer de gradiente animado --}}
          <span class="badge-shimmer font-bold tracking-wide">Blog Aivra</span>
          {{-- Ponto piscando para indicar conteúdo ao vivo --}}
          <span class="w-1.5 h-1.5 rounded-full bg-blue-500 animate-pulse"></span>
        </div>

        {{-- Título: primeira linha em slate, segunda linha em gradient text --}}
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight leading-[1.1] mb-5">
          <span class="text-slate-900">Inteligência e Performance</span>
          <br class="hidden sm:block">
          {{-- "em Pauta" recebe gradient text blue → indigo como destaque editorial --}}
          <span class="gradient-text">em Pauta</span>
        </h1>

        {{-- Subtítulo: cor mais escura (slate-600 em vez de slate-500) para maior contraste WCAG --}}
        <p class="text-lg md:text-xl text-slate-600 max-w-2xl mx-auto mb-10 leading-relaxed font-medium">
          Insights práticos do Método A.A.Q.I., tendências em IA, SaaS e como transformar operações em resultados concretos.
        </p>

        {{-- Campo de busca: sombra pronunciada + anel de foco mais impactante --}}
        <div class="max-w-lg mx-auto mb-10">
          <div class="relative flex items-center group">
            <i data-lucide="search" class="absolute left-5 w-5 h-5 text-slate-400 pointer-events-none transition-colors group-focus-within:text-blue-500"></i>
            <input
              id="blog-search"
              type="text"
              placeholder="Buscar artigos..."
              class="w-full pl-12 pr-6 py-4 rounded-full border border-slate-200 bg-white
                     shadow-[0_4px_24px_rgba(37,99,235,0.10)] text-base text-slate-800
                     placeholder-slate-400
                     focus:outline-none focus:ring-[3px] focus:ring-blue-500/30
                     focus:border-blue-400 focus:shadow-[0_4px_32px_rgba(37,99,235,0.18)]
                     transition-all duration-200"
            >
          </div>
        </div>

        {{-- Chips de categoria: ícones pequenos + hover com sombra colorida suave --}}
        <div class="flex flex-wrap justify-center gap-2">
          {{-- Chip "Todos" — começa ativo --}}
          <button
            class="quick-chip active-chip inline-flex items-center gap-1.5 px-4 py-2 rounded-full text-sm font-semibold bg-[#2563EB] text-white min-h-[44px]"
            data-chip="all"
          >
            <i data-lucide="layout-grid" class="w-3.5 h-3.5 shrink-0"></i>
            Todos
          </button>

          <button
            class="quick-chip inline-flex items-center gap-1.5 px-4 py-2 rounded-full text-sm font-semibold bg-white border border-slate-200 text-slate-700 hover:border-blue-300 hover:text-blue-600 hover:shadow-sm hover:shadow-blue-100 min-h-[44px]"
            data-chip="IA"
          >
            <i data-lucide="cpu" class="w-3.5 h-3.5 shrink-0"></i>
            IA
          </button>

          <button
            class="quick-chip inline-flex items-center gap-1.5 px-4 py-2 rounded-full text-sm font-semibold bg-white border border-slate-200 text-slate-700 hover:border-blue-300 hover:text-blue-600 hover:shadow-sm hover:shadow-blue-100 min-h-[44px]"
            data-chip="SaaS"
          >
            <i data-lucide="cloud" class="w-3.5 h-3.5 shrink-0"></i>
            SaaS
          </button>

          <button
            class="quick-chip inline-flex items-center gap-1.5 px-4 py-2 rounded-full text-sm font-semibold bg-white border border-slate-200 text-slate-700 hover:border-blue-300 hover:text-blue-600 hover:shadow-sm hover:shadow-blue-100 min-h-[44px]"
            data-chip="Cibersegurança"
          >
            <i data-lucide="shield" class="w-3.5 h-3.5 shrink-0"></i>
            Cibersegurança
          </button>

          <button
            class="quick-chip inline-flex items-center gap-1.5 px-4 py-2 rounded-full text-sm font-semibold bg-white border border-slate-200 text-slate-700 hover:border-blue-300 hover:text-blue-600 hover:shadow-sm hover:shadow-blue-100 min-h-[44px]"
            data-chip="Performance"
          >
            <i data-lucide="zap" class="w-3.5 h-3.5 shrink-0"></i>
            Performance
          </button>

          <button
            class="quick-chip inline-flex items-center gap-1.5 px-4 py-2 rounded-full text-sm font-semibold bg-white border border-slate-200 text-slate-700 hover:border-blue-300 hover:text-blue-600 hover:shadow-sm hover:shadow-blue-100 min-h-[44px]"
            data-chip="UI/UX"
          >
            <i data-lucide="pen-tool" class="w-3.5 h-3.5 shrink-0"></i>
            UI/UX
          </button>
        </div>

      </div>
    </section>

    <!-- ===== SEÇÃO 2: POSTS EM DESTAQUE ===== -->
    <section class="bg-[#020817] py-24">
      <div class="max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8">

        {{-- Header da seção: pill + título com linha decorativa + contagem --}}
        <div class="mb-12">
          {{-- Pill badge --}}
          <div class="inline-flex items-center gap-2 text-blue-400 bg-blue-500/10 border border-blue-500/20 rounded-full px-4 py-1.5 text-sm font-semibold mb-4">
            <i data-lucide="star" class="w-4 h-4"></i>
            Em Destaque
          </div>

          {{-- Linha com título + linha decorativa + contagem de posts --}}
          <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4">
            <div class="flex items-center gap-4">
              {{-- Título da seção --}}
              <h2 class="text-2xl md:text-3xl font-bold text-white tracking-tight">
                Leituras essenciais
              </h2>
              {{-- Linha decorativa horizontal — cresce para preencher o espaço ao lado do título --}}
              <div class="hidden md:block h-px flex-1 w-24 bg-gradient-to-r from-blue-500/60 to-transparent"></div>
            </div>
            {{-- Contagem de posts em destaque — derivada do array $featuredPosts --}}
            <p class="text-gray-500 text-sm font-medium shrink-0">
              {{ count($featuredPosts) }} {{ count($featuredPosts) === 1 ? 'artigo selecionado' : 'artigos selecionados' }}
            </p>
          </div>
        </div>

        <div class="grid lg:grid-cols-3 gap-6">

          {{-- Coluna principal (large) e coluna de cards menores (small) --}}
          {{-- O primeiro $post com size='large' ocupa lg:col-span-2.         --}}
          {{-- Os demais posts (size='small') ficam empilhados na coluna direita. --}}

          @php $smallPosts = []; @endphp

          @foreach ($featuredPosts as $post)
            @if ($post['size'] === 'large')

              {{-- Card principal — layout editorial: título e autor DENTRO da imagem via overlay --}}
              <article class="reveal-up lg:col-span-2 rounded-[2rem] overflow-hidden border border-white/10 bg-white/[0.02] hover:-translate-y-1 transition-transform flex flex-col group relative">

                {{-- Área da imagem com overlay editorial (fundo → transparente) --}}
                <div class="aspect-video relative overflow-hidden shrink-0">
                  <img
                    src="{{ $post['image'] }}"
                    alt="{{ $post['alt'] }}"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                    loading="lazy"
                  >

                  {{-- Overlay gradient: bottom opaco → topo transparente, estilo editorial --}}
                  <div class="card-overlay absolute inset-0"></div>

                  {{-- Badge de categoria sobre a imagem (topo esquerdo) --}}
                  <div class="absolute top-5 left-5">
                    <span class="bg-blue-600 text-white text-xs font-bold px-3 py-1.5 rounded-full uppercase tracking-wider shadow-lg">{{ $post['category'] }}</span>
                  </div>

                  {{-- Título e autor dentro da imagem (rodapé do overlay) — estilo editorial --}}
                  <div class="absolute bottom-0 left-0 right-0 p-6 md:p-8">
                    <h2 class="text-xl md:text-2xl lg:text-3xl font-bold text-white leading-tight mb-4 text-shadow-lg group-hover:text-blue-200 transition-colors">
                      <a href="{{ $post['slug'] ? url('/blog/' . $post['slug']) : '#' }}" class="after:absolute after:inset-0">{{ $post['title'] }}</a>
                    </h2>

                    {{-- Info do autor + data + leitura --}}
                    <div class="flex items-center gap-3">
                      <div class="w-9 h-9 rounded-full bg-blue-600 border-2 border-white/20 flex items-center justify-center text-white font-bold text-sm shrink-0 shadow-lg">{{ $post['author_initial'] }}</div>
                      <div>
                        <p class="text-white font-semibold text-sm leading-none mb-0.5">{{ $post['author_name'] }}</p>
                        <p class="text-white/60 text-xs">{{ $post['date'] }} · {{ $post['reading_time'] }}</p>
                      </div>
                    </div>
                  </div>
                </div>

                {{-- Rodapé do card: descrição + botão CTA --}}
                <div class="p-6 md:p-8 flex flex-col flex-grow">
                  <p class="text-gray-400 leading-relaxed flex-grow mb-6">
                    {{ $post['description'] }}
                  </p>
                  {{-- Botão "Ler artigo" estilo ghost outline — destaque sem competir com a imagem --}}
                  <a
                    href="{{ $post['slug'] ? url('/blog/' . $post['slug']) : '#' }}"
                    class="relative z-10 inline-flex items-center gap-2 self-start px-5 py-2.5 rounded-full border border-white/20 text-white text-sm font-semibold hover:border-blue-400 hover:text-blue-300 hover:bg-blue-500/10 transition-all duration-200 min-h-[44px]"
                  >
                    Ler artigo
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                  </a>
                </div>
              </article>

            @else
              {{-- Acumula os posts pequenos para renderizar dentro da coluna direita --}}
              @php $smallPosts[] = $post; @endphp
            @endif
          @endforeach

          {{-- Coluna direita: cards menores empilhados --}}
          @if (count($smallPosts) > 0)
            <div class="lg:col-span-1 flex flex-col gap-5">
              @foreach ($smallPosts as $index => $post)
                {{-- Delay incremental: delay-100 para o primeiro, delay-200 para o segundo, etc. --}}
                @php
                  $delayClass = 'delay-' . (($index + 1) * 100);
                  // Cor da borda lateral baseada no índice (alterna verde → roxo → azul)
                  $borderColors = ['border-cat-green', 'border-cat-purple', 'border-cat-blue', 'border-cat-orange'];
                  $borderClass  = $borderColors[$index % count($borderColors)];
                  // Cor do texto da categoria sincronizada com a borda
                  $catTextColors = ['text-green-400', 'text-purple-400', 'text-blue-400', 'text-orange-400'];
                  $catTextClass  = $catTextColors[$index % count($catTextColors)];
                @endphp

                {{-- Card pequeno: borda colorida lateral + thumbnail maior + data --}}
                <article class="reveal-up {{ $delayClass }} {{ $borderClass }} rounded-r-[1.5rem] rounded-l-none overflow-hidden border border-white/10 bg-white/[0.02] hover:-translate-y-1 transition-transform flex items-stretch gap-0 group relative">

                  {{-- Thumbnail maior: w-24 h-24 para dar mais peso visual --}}
                  <div class="w-24 h-24 md:w-28 md:h-28 bg-slate-800 overflow-hidden shrink-0 self-stretch">
                    <img
                      src="{{ $post['image'] }}"
                      alt="{{ $post['alt'] }}"
                      class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                      loading="lazy"
                    >
                  </div>

                  {{-- Conteúdo textual --}}
                  <div class="flex-1 min-w-0 p-4 flex flex-col justify-center">
                    {{-- Categoria com cor alinhada à borda lateral --}}
                    <span class="{{ $catTextClass }} text-xs font-bold uppercase tracking-wider">{{ $post['category'] }}</span>

                    {{-- Título legível --}}
                    <h3 class="text-white font-bold leading-snug mt-1 mb-1.5 text-sm md:text-base group-hover:text-blue-300 transition-colors">
                      <a href="{{ $post['slug'] ? url('/blog/' . $post['slug']) : '#' }}" class="after:absolute after:inset-0">{{ $post['title'] }}</a>
                    </h3>

                    {{-- Data de publicação + tempo de leitura --}}
                    <p class="text-gray-500 text-xs flex items-center gap-1.5">
                      <i data-lucide="calendar" class="w-3 h-3 shrink-0"></i>
                      {{ $post['date'] }}
                      <span class="text-gray-700">·</span>
                      {{ $post['reading_time'] }}
                    </p>
                  </div>
                </article>
              @endforeach
            </div>
          @endif

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

        {{-- Mapeamento de cores para badges e avatares dos cards de artigos.
             Definido aqui no Blade (não no PHP do controller) para que o
             Tailwind v4 consiga escanear e incluir as classes no build final. --}}
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

        <!-- Grade de artigos -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8" id="articles-grid">

          @foreach ($allPosts as $post)
            {{-- Resolve as classes de cor a partir do mapa definido acima --}}
            @php
              $colors = $colorMap[$post['color']] ?? $colorMap['blue'];
            @endphp

            <article
              class="article-card reveal-up {{ $post['delay'] }} rounded-[2rem] border border-slate-100 shadow-sm hover:-translate-y-1 transition-transform flex flex-col overflow-hidden relative"
              data-category="{{ $post['category'] }}"
            >
              <div class="aspect-video bg-slate-100 relative overflow-hidden shrink-0">
                <img
                  src="{{ $post['image'] }}"
                  alt="{{ $post['alt'] }}"
                  class="w-full h-full object-cover"
                  loading="lazy"
                >
              </div>
              <div class="p-7 flex flex-col flex-grow">
                {{-- Badge de categoria — classes resolvidas via $colorMap para Tailwind v4 --}}
                <span class="article-badge inline-block {{ $colors['badge'] }} text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full mb-4 w-fit">{{ $post['category'] }}</span>
                <h3 class="article-title text-lg font-bold text-slate-900 mb-3 leading-snug cursor-pointer hover:text-blue-600 transition-colors">
                  <a href="{{ $post['slug'] ? url('/blog/' . $post['slug']) : '#' }}" class="after:absolute after:inset-0">{{ $post['title'] }}</a>
                </h3>
                <p class="text-slate-500 text-sm leading-relaxed mb-6 flex-grow line-clamp-2">
                  {{ $post['description'] }}
                </p>
                <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
                  {{-- Avatar com inicial do autor — cor derivada do mesmo mapa --}}
                  <div class="w-8 h-8 rounded-full {{ $colors['avatar'] }} flex items-center justify-center font-bold text-xs shrink-0">{{ $post['author_initial'] }}</div>
                  <span class="text-slate-400 text-xs">{{ $post['reading_time'] }}</span>
                </div>
              </div>
            </article>
          @endforeach

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
