{{-- Lead Funnel Modal — Funil A.A.Q.I. --}}
<div id="lead-funnel-overlay" class="fixed inset-0 z-[9999] flex items-center justify-center bg-black/60 backdrop-blur-sm hidden" onclick="handleOverlayClick(event)">
  <div class="modal-card bg-white rounded-2xl shadow-2xl w-full max-w-lg mx-4 overflow-hidden" onclick="event.stopPropagation()">
    <div class="h-1 bg-gradient-to-r from-blue-500 to-blue-700 w-full"></div>

    {{-- Header: progresso + fechar --}}
    <div class="flex items-center justify-between px-6 pt-4 pb-0">
      <div class="flex items-center gap-2">
        <span class="bg-blue-600 text-white text-[11px] font-bold uppercase tracking-widest px-3 py-1 rounded-full">A.A.Q.I.</span>
        <span class="text-slate-400 text-xs font-medium" id="step-label">Passo 1 de 4</span>
      </div>
      <button onclick="closeFunnel()" class="text-slate-400 hover:text-slate-600 transition-colors p-1 rounded-full hover:bg-slate-100" aria-label="Fechar">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
      </button>
    </div>

    {{-- Barra de progresso --}}
    <div class="px-6 pt-2">
      <div class="w-full bg-slate-100 rounded-full h-2">
        <div id="funnel-progress-bar" class="bg-gradient-to-r from-blue-500 to-blue-600 h-2 rounded-full transition-all duration-500" style="width: 25%"></div>
      </div>
    </div>

    {{-- Wrapper dos passos --}}
    <div class="relative overflow-hidden">
      <div id="steps-wrapper" class="flex transition-transform duration-300 ease-in-out" style="width: 500%">

        {{-- PASSO 1 — Perfil --}}
        <div class="step-panel w-1/5 px-6 pt-4 pb-5 shrink-0">
          <h2 class="text-lg font-bold text-slate-900 mb-0.5">Qual é o seu perfil?</h2>
          <p class="text-slate-500 text-sm mb-4">Isso nos ajuda a entender como podemos te ajudar melhor.</p>
          <div class="grid grid-cols-2 gap-3">
            <button type="button" onclick="selectProfile('empresa')" id="card-empresa"
              class="profile-card flex flex-col items-center gap-2 p-4 rounded-xl border-2 border-slate-200 bg-slate-50 hover:border-blue-400 hover:bg-blue-50/50 hover:shadow-md transition-all duration-200 cursor-pointer text-left group">
              <span class="text-2xl">🏢</span>
              <div>
                <div class="font-bold text-slate-900 text-sm">Empresa</div>
                <div class="text-xs text-slate-500 mt-0.5">Tenho um negócio ou equipe</div>
              </div>
            </button>
            <button type="button" onclick="selectProfile('pf')" id="card-pf"
              class="profile-card flex flex-col items-center gap-2 p-4 rounded-xl border-2 border-slate-200 bg-slate-50 hover:border-blue-400 hover:bg-blue-50/50 hover:shadow-md transition-all duration-200 cursor-pointer text-left group">
              <span class="text-2xl">👤</span>
              <div>
                <div class="font-bold text-slate-900 text-sm">Pessoa Física</div>
                <div class="text-xs text-slate-500 mt-0.5">Quero usar uma solução</div>
              </div>
            </button>
          </div>
        </div>

        {{-- PASSO 2 — Interesse --}}
        <div class="step-panel w-1/5 px-6 pt-4 pb-5 shrink-0">
          <h2 class="text-lg font-bold text-slate-900 mb-0.5">O que você busca?</h2>
          <p class="text-slate-500 text-sm mb-3">Selecione tudo que faz sentido para você.</p>
          <div class="flex flex-col gap-2 mb-4">
            <label class="interest-option flex items-center gap-3 p-3 rounded-xl border-2 border-slate-200 cursor-pointer hover:border-blue-400 transition-all duration-200 has-[:checked]:border-blue-600 has-[:checked]:bg-blue-50">
              <input type="checkbox" name="interest" value="Gestão Digital" class="hidden">
              <span class="w-5 h-5 rounded border-2 border-slate-300 bg-slate-50 flex items-center justify-center shrink-0 check-box">
                <svg class="w-3 h-3 text-white hidden check-mark" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
              </span>
              <div>
                <div class="font-semibold text-slate-900 text-sm">Gestão Digital</div>
                <div class="text-xs text-slate-500">Site, presença online, CRM</div>
              </div>
            </label>
            <label class="interest-option flex items-center gap-3 p-3 rounded-xl border-2 border-slate-200 cursor-pointer hover:border-blue-400 transition-all duration-200 has-[:checked]:border-blue-600 has-[:checked]:bg-blue-50">
              <input type="checkbox" name="interest" value="ERP/Segurança" class="hidden">
              <span class="w-5 h-5 rounded border-2 border-slate-300 bg-slate-50 flex items-center justify-center shrink-0 check-box">
                <svg class="w-3 h-3 text-white hidden check-mark" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
              </span>
              <div>
                <div class="font-semibold text-slate-900 text-sm">ERP / Segurança</div>
                <div class="text-xs text-slate-500">Gestão interna, fiscal, controle</div>
              </div>
            </label>
            <label class="interest-option flex items-center gap-3 p-3 rounded-xl border-2 border-slate-200 cursor-pointer hover:border-blue-400 transition-all duration-200 has-[:checked]:border-blue-600 has-[:checked]:bg-blue-50">
              <input type="checkbox" name="interest" value="Automação com IA" class="hidden">
              <span class="w-5 h-5 rounded border-2 border-slate-300 bg-slate-50 flex items-center justify-center shrink-0 check-box">
                <svg class="w-3 h-3 text-white hidden check-mark" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
              </span>
              <div>
                <div class="font-semibold text-slate-900 text-sm">Automação com IA</div>
                <div class="text-xs text-slate-500">Bots, fluxos inteligentes, IA</div>
              </div>
            </label>
          </div>
          <div class="flex justify-between gap-3">
            <button type="button" onclick="goToStep(1)" class="flex-1 py-2.5 rounded-xl border border-slate-200 text-slate-500 bg-white font-semibold text-sm hover:bg-slate-50 transition-colors">Voltar</button>
            <button type="button" onclick="advanceStep2()" class="flex-1 py-2.5 rounded-xl bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-semibold text-sm transition-all shadow-sm hover:shadow-md">Próximo</button>
          </div>
        </div>

        {{-- PASSO 3 — Qualificação (condicional) --}}
        <div class="step-panel w-1/5 px-6 pt-4 pb-5 shrink-0">
          {{-- Empresa: tamanho do time --}}
          <div id="step3-empresa">
            <h2 class="text-lg font-bold text-slate-900 mb-0.5">Qual o tamanho do seu time?</h2>
            <p class="text-slate-500 text-sm mb-4">Isso nos ajuda a calibrar a solução ideal.</p>
            <div class="grid grid-cols-5 gap-2 mb-4">
              <button type="button" onclick="selectEmployees(this, '1')" class="employee-card py-3 px-2 rounded-xl border-2 border-slate-200 bg-slate-50 text-slate-700 font-bold text-sm hover:bg-blue-50/50 hover:border-blue-400 hover:shadow-sm transition-all duration-200">1</button>
              <button type="button" onclick="selectEmployees(this, '2-5')" class="employee-card py-3 px-2 rounded-xl border-2 border-slate-200 bg-slate-50 text-slate-700 font-bold text-sm hover:bg-blue-50/50 hover:border-blue-400 hover:shadow-sm transition-all duration-200">2-5</button>
              <button type="button" onclick="selectEmployees(this, '6-20')" class="employee-card py-3 px-2 rounded-xl border-2 border-slate-200 bg-slate-50 text-slate-700 font-bold text-sm hover:bg-blue-50/50 hover:border-blue-400 hover:shadow-sm transition-all duration-200">6-20</button>
              <button type="button" onclick="selectEmployees(this, '21-50')" class="employee-card py-3 px-2 rounded-xl border-2 border-slate-200 bg-slate-50 text-slate-700 font-bold text-sm hover:bg-blue-50/50 hover:border-blue-400 hover:shadow-sm transition-all duration-200">21-50</button>
              <button type="button" onclick="selectEmployees(this, '50+')" class="employee-card py-3 px-2 rounded-xl border-2 border-slate-200 bg-slate-50 text-slate-700 font-bold text-sm hover:bg-blue-50/50 hover:border-blue-400 hover:shadow-sm transition-all duration-200">50+</button>
            </div>
          </div>
          {{-- PF: SaaS de interesse --}}
          <div id="step3-pf" class="hidden">
            <h2 class="text-lg font-bold text-slate-900 mb-0.5">Qual solução te interessa?</h2>
            <p class="text-slate-500 text-sm mb-3">Nossos produtos prontos para você usar.</p>
            <div class="grid grid-cols-2 gap-2 mb-4">
              <button type="button" onclick="selectSaas(this, 'Imobify')" class="saas-card flex flex-col items-start gap-0.5 p-3 rounded-xl border-2 border-slate-200 bg-slate-50 hover:bg-blue-50/50 hover:border-blue-400 hover:shadow-sm transition-all">
                <span class="text-lg">🏠</span>
                <div class="font-bold text-slate-900 text-sm">Imobify</div>
                <div class="text-xs text-slate-500">Gestão imobiliária</div>
              </button>
              <button type="button" onclick="selectSaas(this, 'Calzap')" class="saas-card flex flex-col items-start gap-0.5 p-3 rounded-xl border-2 border-slate-200 bg-slate-50 hover:bg-blue-50/50 hover:border-blue-400 hover:shadow-sm transition-all">
                <span class="text-lg">📅</span>
                <div class="font-bold text-slate-900 text-sm">Calzap</div>
                <div class="text-xs text-slate-500">Agendamentos via WhatsApp</div>
              </button>
              <button type="button" onclick="selectSaas(this, 'FiscalDock')" class="saas-card flex flex-col items-start gap-0.5 p-3 rounded-xl border-2 border-slate-200 bg-slate-50 hover:bg-blue-50/50 hover:border-blue-400 hover:shadow-sm transition-all">
                <span class="text-lg">📊</span>
                <div class="font-bold text-slate-900 text-sm">FiscalDock</div>
                <div class="text-xs text-slate-500">Gestão fiscal e contábil</div>
              </button>
              <button type="button" onclick="selectSaas(this, 'BotPlantão')" class="saas-card flex flex-col items-start gap-0.5 p-3 rounded-xl border-2 border-slate-200 bg-slate-50 hover:bg-blue-50/50 hover:border-blue-400 hover:shadow-sm transition-all">
                <span class="text-lg">🤖</span>
                <div class="font-bold text-slate-900 text-sm">BotPlantão</div>
                <div class="text-xs text-slate-500">Atendimento 24h com IA</div>
              </button>
            </div>
          </div>
          <div class="flex justify-between gap-3">
            <button type="button" onclick="goToStep(2)" class="flex-1 py-2.5 rounded-xl border border-slate-200 text-slate-500 bg-white font-semibold text-sm hover:bg-slate-50 transition-colors">Voltar</button>
            <button type="button" onclick="advanceStep3()" class="flex-1 py-2.5 rounded-xl bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-semibold text-sm transition-all shadow-sm hover:shadow-md">Próximo</button>
          </div>
        </div>

        {{-- PASSO 4 — Contato --}}
        <div class="step-panel w-1/5 px-6 pt-4 pb-5 shrink-0">
          <h2 class="text-lg font-bold text-slate-900 mb-0.5">Quase lá!</h2>
          <p class="text-slate-500 text-sm mb-3">Deixe seu contato para nosso especialista chegar no seu WhatsApp.</p>
          <div class="flex flex-col gap-3 mb-3">
            <div>
              <label class="block text-xs font-semibold text-slate-600 mb-1.5 uppercase tracking-wide">Nome completo</label>
              <div class="relative">
                <span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none">
                  <i data-lucide="user" class="w-4 h-4"></i>
                </span>
                <input type="text" id="funnel-name" placeholder="Seu nome" class="w-full pl-10 pr-4 py-2.5 rounded-xl border-2 border-slate-200 text-slate-900 text-sm focus:outline-none focus:border-blue-500 transition-colors placeholder:text-slate-400">
              </div>
            </div>
            <div>
              <label class="block text-xs font-semibold text-slate-600 mb-1.5 uppercase tracking-wide">WhatsApp</label>
              <div class="relative">
                <span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none">
                  <i data-lucide="phone" class="w-4 h-4"></i>
                </span>
                <input type="tel" id="funnel-whatsapp" placeholder="(67) 9 9999-9999" class="w-full pl-10 pr-4 py-2.5 rounded-xl border-2 border-slate-200 text-slate-900 text-sm focus:outline-none focus:border-blue-500 transition-colors placeholder:text-slate-400">
              </div>
            </div>
            <div>
              <label class="block text-xs font-semibold text-slate-600 mb-1.5 uppercase tracking-wide">Cidade</label>
              <div class="flex items-center gap-3 mb-1.5">
                <label class="flex items-center gap-2 cursor-pointer">
                  <input type="checkbox" id="funnel-dourados" onchange="toggleDourados(this)" class="w-4 h-4 accent-blue-600">
                  <span class="text-sm text-slate-700 font-medium">Sou de Dourados/MS</span>
                </label>
              </div>
              <div class="relative">
                <span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 pointer-events-none">
                  <i data-lucide="map-pin" class="w-4 h-4"></i>
                </span>
                <input type="text" id="funnel-cidade" placeholder="Informe sua cidade" class="w-full pl-10 pr-4 py-2.5 rounded-xl border-2 border-slate-200 text-slate-900 text-sm focus:outline-none focus:border-blue-500 transition-colors placeholder:text-slate-400">
              </div>
            </div>
          </div>
          <p id="funnel-error" class="text-red-500 text-xs mb-3 hidden">Por favor, preencha todos os campos.</p>
          <div class="flex justify-between gap-3">
            <button type="button" onclick="goToStep(3)" class="flex-1 py-2.5 rounded-xl border border-slate-200 text-slate-500 bg-white font-semibold text-sm hover:bg-slate-50 transition-colors">Voltar</button>
            <button type="button" onclick="submitFunnel()" id="funnel-submit-btn" class="flex-1 py-2.5 rounded-xl bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-bold text-sm transition-all shadow-sm hover:shadow-md flex items-center justify-center gap-2">
              <span id="submit-label">Enviar</span>
              <svg id="submit-spinner" class="hidden w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"/></svg>
            </button>
          </div>
        </div>

        {{-- PASSO 5 — Confirmação --}}
        <div class="step-panel w-1/5 px-6 pt-5 pb-6 shrink-0 text-center">
          <div class="w-14 h-14 bg-gradient-to-br from-blue-100 to-blue-200 shadow-md rounded-full flex items-center justify-center mx-auto mb-3">
            <svg class="w-7 h-7 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
          </div>
          <span class="bg-blue-600 text-white text-[11px] font-bold uppercase tracking-widest px-3 py-1 rounded-full inline-block mb-2">A.A.Q.I. Ativado</span>
          <h2 class="text-lg font-bold text-slate-900 mb-2">Obrigado!</h2>
          <p class="text-slate-600 text-sm leading-relaxed mb-4">
            Nossa inteligência está analisando seu perfil baseado no método <strong>A.A.Q.I.</strong> Em breve, um especialista ou o link para seu acesso chegará no seu <strong>WhatsApp</strong>.
          </p>
          <button type="button" onclick="closeFunnel()" class="px-8 py-2.5 rounded-full bg-blue-600 text-white font-semibold text-sm hover:bg-blue-700 transition-colors">
            Fechar
          </button>
        </div>

      </div>{{-- /steps-wrapper --}}
    </div>{{-- /relative overflow-hidden --}}

  </div>{{-- /modal-card --}}
</div>{{-- /overlay --}}

<script>
(function () {
  var currentStep = 1;
  var funnelData = {
    profile: null,      // 'empresa' | 'pf'
    interests: [],      // array de strings
    employees: null,    // só para empresa
    saas: null,         // só para pf
  };

  var progressMap = { 1: '25%', 2: '50%', 3: '75%', 4: '100%', 5: '100%' };
  var labelMap = { 1: 'Passo 1 de 4', 2: 'Passo 2 de 4', 3: 'Passo 3 de 4', 4: 'Passo 4 de 4', 5: 'Concluído' };

  function updateProgress(step) {
    var bar = document.getElementById('funnel-progress-bar');
    var label = document.getElementById('step-label');
    if (bar) bar.style.width = progressMap[step] || '100%';
    if (label) label.textContent = labelMap[step] || '';
  }

  window.openFunnel = function () {
    var overlay = document.getElementById('lead-funnel-overlay');
    if (overlay) {
      overlay.classList.remove('hidden');
      document.body.style.overflow = 'hidden';
    }
  };

  window.closeFunnel = function () {
    var overlay = document.getElementById('lead-funnel-overlay');
    if (overlay) {
      overlay.classList.add('hidden');
      document.body.style.overflow = '';
      resetFunnel();
    }
  };

  window.handleOverlayClick = function (e) {
    if (e.target === document.getElementById('lead-funnel-overlay')) {
      closeFunnel();
    }
  };

  window.goToStep = function (step) {
    currentStep = step;
    var wrapper = document.getElementById('steps-wrapper');
    if (wrapper) {
      wrapper.style.transform = 'translateX(-' + ((step - 1) * 20) + '%)';
    }
    updateProgress(step);
  };

  function resetFunnel() {
    currentStep = 1;
    funnelData = { profile: null, interests: [], employees: null, saas: null };

    // reset profile cards
    document.querySelectorAll('.profile-card').forEach(function (c) {
      c.classList.remove('border-blue-600', 'bg-blue-50');
      c.classList.add('border-slate-200');
    });

    // reset checkboxes
    document.querySelectorAll('.interest-option input[type=checkbox]').forEach(function (cb) {
      cb.checked = false;
    });
    syncCheckboxUI();

    // reset employee cards
    document.querySelectorAll('.employee-card').forEach(function (c) {
      c.classList.remove('border-blue-600', 'bg-blue-50', 'text-blue-700');
      c.classList.add('border-slate-200', 'text-slate-700');
    });

    // reset saas cards
    document.querySelectorAll('.saas-card').forEach(function (c) {
      c.classList.remove('border-blue-600', 'bg-blue-50');
      c.classList.add('border-slate-200');
    });

    // reset contact fields
    ['funnel-name', 'funnel-whatsapp', 'funnel-cidade'].forEach(function (id) {
      var el = document.getElementById(id);
      if (el) el.value = '';
    });
    var cb = document.getElementById('funnel-dourados');
    if (cb) cb.checked = false;

    // reset error
    var err = document.getElementById('funnel-error');
    if (err) err.classList.add('hidden');

    // reset submit btn
    resetSubmitBtn();

    // go to step 1
    var wrapper = document.getElementById('steps-wrapper');
    if (wrapper) {
      wrapper.style.transition = 'none';
      wrapper.style.transform = 'translateX(0%)';
      wrapper.offsetHeight; // force reflow
      wrapper.style.transition = '';
    }
    updateProgress(1);
  }

  function syncCheckboxUI() {
    document.querySelectorAll('.interest-option').forEach(function (label) {
      var cb = label.querySelector('input[type=checkbox]');
      var box = label.querySelector('.check-box');
      var mark = label.querySelector('.check-mark');
      if (!cb || !box || !mark) return;
      if (cb.checked) {
        box.classList.remove('border-slate-300', 'bg-slate-50');
        box.classList.add('border-blue-600', 'bg-blue-600');
        mark.classList.remove('hidden');
      } else {
        box.classList.remove('border-blue-600', 'bg-blue-600');
        box.classList.add('border-slate-300', 'bg-slate-50');
        mark.classList.add('hidden');
      }
    });
  }

  // attach checkbox change handlers after DOM ready
  document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.interest-option input[type=checkbox]').forEach(function (cb) {
      cb.addEventListener('change', syncCheckboxUI);
    });
  });

  window.selectProfile = function (profile) {
    funnelData.profile = profile;

    document.querySelectorAll('.profile-card').forEach(function (c) {
      c.classList.remove('border-blue-600', 'bg-blue-50');
      c.classList.add('border-slate-200');
    });
    var active = document.getElementById('card-' + profile);
    if (active) {
      active.classList.remove('border-slate-200');
      active.classList.add('border-blue-600', 'bg-blue-50');
    }

    // Toggle passo 3 content
    var s3e = document.getElementById('step3-empresa');
    var s3p = document.getElementById('step3-pf');
    if (profile === 'empresa') {
      if (s3e) s3e.classList.remove('hidden');
      if (s3p) s3p.classList.add('hidden');
    } else {
      if (s3e) s3e.classList.add('hidden');
      if (s3p) s3p.classList.remove('hidden');
    }

    // auto-advance
    setTimeout(function () { goToStep(2); }, 220);
  };

  window.advanceStep2 = function () {
    var checked = document.querySelectorAll('.interest-option input[type=checkbox]:checked');
    if (checked.length === 0) {
      alert('Selecione ao menos uma opção.');
      return;
    }
    funnelData.interests = Array.from(checked).map(function (c) { return c.value; });
    goToStep(3);
  };

  window.selectEmployees = function (btn, value) {
    funnelData.employees = value;
    document.querySelectorAll('.employee-card').forEach(function (c) {
      c.classList.remove('border-blue-600', 'bg-blue-50', 'text-blue-700');
      c.classList.add('border-slate-200', 'text-slate-700');
    });
    btn.classList.remove('border-slate-200', 'text-slate-700');
    btn.classList.add('border-blue-600', 'bg-blue-50', 'text-blue-700');
  };

  window.selectSaas = function (btn, value) {
    funnelData.saas = value;
    document.querySelectorAll('.saas-card').forEach(function (c) {
      c.classList.remove('border-blue-600', 'bg-blue-50');
      c.classList.add('border-slate-200');
    });
    btn.classList.remove('border-slate-200');
    btn.classList.add('border-blue-600', 'bg-blue-50');
  };

  window.advanceStep3 = function () {
    if (funnelData.profile === 'empresa' && !funnelData.employees) {
      alert('Selecione o tamanho do seu time.');
      return;
    }
    if (funnelData.profile === 'pf' && !funnelData.saas) {
      alert('Selecione uma solução de interesse.');
      return;
    }
    goToStep(4);
  };

  window.toggleDourados = function (cb) {
    var input = document.getElementById('funnel-cidade');
    if (!input) return;
    if (cb.checked) {
      input.value = 'Dourados/MS';
      input.disabled = true;
      input.classList.add('bg-slate-50', 'text-slate-400');
    } else {
      input.value = '';
      input.disabled = false;
      input.classList.remove('bg-slate-50', 'text-slate-400');
    }
  };

  function resetSubmitBtn() {
    var btn = document.getElementById('funnel-submit-btn');
    var label = document.getElementById('submit-label');
    var spinner = document.getElementById('submit-spinner');
    if (btn) btn.disabled = false;
    if (label) label.textContent = 'Enviar';
    if (spinner) spinner.classList.add('hidden');
  }

  window.submitFunnel = function () {
    var name = (document.getElementById('funnel-name') || {}).value || '';
    var whatsapp = (document.getElementById('funnel-whatsapp') || {}).value || '';
    var cidade = (document.getElementById('funnel-cidade') || {}).value || '';
    var err = document.getElementById('funnel-error');

    if (!name.trim() || !whatsapp.trim() || !cidade.trim()) {
      if (err) err.classList.remove('hidden');
      return;
    }
    if (err) err.classList.add('hidden');

    // Build payload
    var company = funnelData.profile === 'pf' ? 'Pessoa Física' : '';
    var main_problem = funnelData.interests.join(', ');
    var employees = funnelData.profile === 'empresa' ? funnelData.employees : null;
    var segment = funnelData.profile === 'pf' ? funnelData.saas : cidade;
    var expectation = cidade;

    var payload = {
      name: name.trim(),
      whatsapp: whatsapp.trim(),
      company: company,
      main_problem: main_problem,
      expectation: expectation,
    };
    if (employees) payload.employees = employees;
    if (segment) payload.segment = segment;

    // Show loading
    var btn = document.getElementById('funnel-submit-btn');
    var label = document.getElementById('submit-label');
    var spinner = document.getElementById('submit-spinner');
    if (btn) btn.disabled = true;
    if (label) label.textContent = 'Enviando...';
    if (spinner) spinner.classList.remove('hidden');

    var csrfEl = document.querySelector('meta[name=csrf-token]');
    var csrf = csrfEl ? csrfEl.getAttribute('content') : '';

    fetch('/leads', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json',
        'X-CSRF-TOKEN': csrf,
      },
      body: JSON.stringify(payload),
    })
      .then(function (res) {
        if (res.ok || res.status === 201 || res.status === 200) {
          goToStep(5);
        } else {
          return res.json().then(function (data) {
            throw new Error(data.message || 'Erro ao enviar.');
          });
        }
      })
      .catch(function (e) {
        resetSubmitBtn();
        alert('Ocorreu um erro: ' + e.message + '\nTente novamente ou entre em contato pelo WhatsApp.');
      });
  };
})();
</script>
