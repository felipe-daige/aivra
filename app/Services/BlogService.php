<?php

namespace App\Services;

class BlogService
{
    /**
     * Posts em destaque exibidos na seção escura do topo.
     * O primeiro item é o card grande (lg:col-span-2), os demais são cards pequenos.
     */
    public function getFeaturedPosts(): array
    {
        return [
            [
                'size'         => 'large',
                'image'        => 'https://images.unsplash.com/photo-1677442135703-1787eea5ce01?w=900&h=506&fit=crop&q=80',
                'alt'          => 'Inteligência Artificial — Método A.A.Q.I.',
                'category'     => 'Performance',
                'title'        => 'A Ciência por trás do Método A.A.Q.I.',
                'description'  => 'Como uma abordagem estruturada em quatro etapas — Análise, Arquitetura, Quantização e Inteligência — está transformando operações B2B e gerando resultados mensuráveis em semanas.',
                'author_name'  => 'Felipe — CEO',
                'author_initial' => 'F',
                'date'         => '6 mar. 2026',
                'reading_time' => '8 min de leitura',
                'slug'         => 'metodo-aaqi-transformar-operacoes',
                'body_view'    => 'blog.posts.metodo-aaqi-transformar-operacoes',
            ],
            [
                'size'         => 'small',
                'image'        => 'https://images.unsplash.com/photo-1563986768609-322da13575f3?w=160&h=160&fit=crop&q=80',
                'alt'          => 'calzap WhatsApp',
                'category'     => 'SaaS',
                'title'        => 'Como o calzap.com.br revoluciona o atendimento imobiliário',
                'date'         => '1 mar. 2026',
                'reading_time' => '5 min de leitura',
                'slug'         => 'calzap-automacao-whatsapp-imobiliario',
                'body_view'    => 'blog.posts.calzap-automacao-whatsapp-imobiliario',
            ],
            [
                'size'         => 'small',
                'image'        => 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=160&h=160&fit=crop&q=80',
                'alt'          => 'Imobify gestão imobiliária',
                'category'     => 'SaaS',
                'title'        => 'Imobify.app: gestão de imóveis com IA integrada',
                'date'         => '2 mar. 2026',
                'reading_time' => '4 min de leitura',
                'slug'         => 'imobify-gestao-imobiliaria-ia',
                'body_view'    => 'blog.posts.imobify-gestao-imobiliaria-ia',
            ],
        ];
    }

    /**
     * Todos os artigos exibidos na grade de cards (seção branca).
     */
    public function getAllPosts(): array
    {
        return [
            [
                'image'        => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=800&h=450&fit=crop&q=80',
                'alt'          => 'Documentos fiscais — FiscalDock',
                'category'     => 'SaaS',
                'color'        => 'orange',
                'title'        => 'Compliance Fiscal com IA: o que é o FiscalDock?',
                'description'  => 'Como o fiscaldock.com.br centraliza arquivos fiscais, identifica pendências automaticamente e gera relatórios prontos para tomada de decisão.',
                'author_name'  => 'Equipe Aivra',
                'author_initial' => 'A',
                'date'         => '28 fev. 2026',
                'reading_time' => '6 min de leitura',
                'delay'        => 'delay-100',
                'slug'         => 'compliance-fiscal-fiscaldock',
                'body_view'    => 'blog.posts.compliance-fiscal-fiscaldock',
            ],
            [
                'image'        => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=800&h=450&fit=crop&q=80',
                'alt'          => 'Médico usando celular — BotPlantão',
                'category'     => 'Engenharia de IA',
                'color'        => 'blue',
                'title'        => 'Atendimento 24/7: como o BotPlantão transforma o suporte',
                'description'  => 'Automação que monitora grupos de WhatsApp em milissegundos e garante que médicos nunca percam uma oportunidade de plantão por indisponibilidade.',
                'author_name'  => 'Equipe Aivra',
                'author_initial' => 'A',
                'date'         => '3 mar. 2026',
                'reading_time' => '5 min de leitura',
                'delay'        => 'delay-200',
                'slug'         => 'atendimento-24h-botplantao',
                'body_view'    => 'blog.posts.atendimento-24h-botplantao',
            ],
            [
                'image'        => 'https://images.unsplash.com/photo-1563986768609-322da13575f3?w=800&h=450&fit=crop&q=80',
                'alt'          => 'Automação de mensagens — calzap',
                'category'     => 'SaaS',
                'color'        => 'green',
                'title'        => 'calzap: automação de WhatsApp para o mercado imobiliário',
                'description'  => 'Como fluxos visuais inteligentes e IA para transcrição de áudios estão recuperando vendas e automatizando o atendimento 24/7 no setor imobiliário.',
                'author_name'  => 'Equipe Aivra',
                'author_initial' => 'A',
                'date'         => '1 mar. 2026',
                'reading_time' => '7 min de leitura',
                'delay'        => 'delay-300',
                'slug'         => 'calzap-automacao-whatsapp-imobiliario',
                'body_view'    => 'blog.posts.calzap-automacao-whatsapp-imobiliario',
            ],
            [
                'image'        => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=800&h=450&fit=crop&q=80',
                'alt'          => 'Gestão imobiliária — Imobify',
                'category'     => 'SaaS',
                'color'        => 'purple',
                'title'        => 'Imobify: a plataforma de gestão imobiliária com IA',
                'description'  => 'Gerencie aluguéis direto no WhatsApp com recibos automáticos, alertas de vencimento e relatórios prontos para o Imposto de Renda — tudo integrado com IA.',
                'author_name'  => 'Equipe Aivra',
                'author_initial' => 'A',
                'date'         => '2 mar. 2026',
                'reading_time' => '4 min de leitura',
                'delay'        => 'delay-100',
                'slug'         => 'imobify-gestao-imobiliaria-ia',
                'body_view'    => 'blog.posts.imobify-gestao-imobiliaria-ia',
            ],
            [
                'image'        => 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=800&h=450&fit=crop&q=80',
                'alt'          => 'Cibersegurança — Zero Trust',
                'category'     => 'Cibersegurança',
                'color'        => 'red',
                'title'        => 'Zero Trust na prática: protegendo dados da sua empresa',
                'description'  => 'Entenda como o modelo Zero Trust elimina suposições de confiança implícita na rede e por que ele é indispensável para empresas que escalam com tecnologia.',
                'author_name'  => 'Equipe Aivra',
                'author_initial' => 'A',
                'date'         => '4 mar. 2026',
                'reading_time' => '9 min de leitura',
                'delay'        => 'delay-200',
                'slug'         => 'zero-trust-protecao-dados-empresa',
                'body_view'    => 'blog.posts.zero-trust-protecao-dados-empresa',
            ],
            [
                'image'        => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&h=450&fit=crop&q=80',
                'alt'          => 'Dashboard de analytics — Método A.A.Q.I.',
                'category'     => 'Performance',
                'color'        => 'cyan',
                'title'        => 'Método A.A.Q.I.: como transformar operações em resultados',
                'description'  => 'Um guia completo sobre como as quatro etapas do método A.A.Q.I. — Análise, Arquitetura, Quantização e Inteligência — geram crescimento previsível e escalável.',
                'author_name'  => 'Felipe — CEO',
                'author_initial' => 'F',
                'date'         => '6 mar. 2026',
                'reading_time' => '8 min de leitura',
                'delay'        => 'delay-300',
                'slug'         => 'metodo-aaqi-transformar-operacoes',
                'body_view'    => 'blog.posts.metodo-aaqi-transformar-operacoes',
            ],
        ];
    }

    public function getPostBySlug(string $slug): ?array
    {
        $all = array_merge($this->getFeaturedPosts(), $this->getAllPosts());
        foreach ($all as $post) {
            if (($post['slug'] ?? null) === $slug) {
                return $post;
            }
        }
        return null;
    }

    public function getRelatedPosts(string $slug, int $limit = 3): array
    {
        $all = $this->getAllPosts();
        $related = array_filter($all, fn($p) => ($p['slug'] ?? null) !== $slug);
        return array_slice(array_values($related), 0, $limit);
    }
}
