
# Aivra Landing Page

Projeto construído em Laravel com Blade renderizando HTML puro e Tailwind CSS.

## 🚀 Como Iniciar o Projeto

Siga estas instruções para configurar e rodar o projeto localmente na sua máquina:

### 1. Requisitos
- [PHP](https://www.php.net/) (Versão recomendada: 8.2+)
- [Composer](https://getcomposer.org/)
- [Node.js e NPM](https://nodejs.org/en) (Para compilação dos assets via Vite)

### 2. Instalação e Dependências

Clone o projeto e entre na pasta:
```bash
git clone git@github.com:felipe-daige/aivra.git
cd aivra
```

Instale as dependências PHP do Laravel:
```bash
composer install
```

Copie o arquivo de ambiente e gere a chave única da aplicação:
```bash
cp .env.example .env
php artisan key:generate
```

Instale as dependências Node/CSS (Tailwind e Vite):
```bash
npm install
```

### 3. Rodando o Servidor

Para rodar o projeto e ver as atualizações em tempo real com HMR (Hot Module Replacement), você precisará rodar **dois terminais em paralelo** na raiz do seu projeto:

**Terminal 1 (Backend PHP):**
```bash
php artisan serve
```
Isso iniciará o servidor PHP na URL `http://127.0.0.1:8000`

**Terminal 2 (Frontend JS/CSS):**
```bash
npm run dev
```
Isso iniciará o Vite, permitindo que modificações no `welcome.blade.php`, `app.css` ou imagens sejam atualizadas na hora no navegador, sem precisar dar reload.

### Em Produção
Ao enviar os arquivos para um servidor em produção (cPanel, AWS, Forge etc) certifique-se de executar o build final dos assets para o Vite otimizar o código:
```bash
npm run build
```
