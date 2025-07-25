<?php

namespace app\controllers;

use flight\Engine;
use Exception;

class HomeController
{
    private Engine $app;

    public function __construct(Engine $app)
    {
        $this->app = $app;
    }

    /**
     * Página inicial
     */
    public function index()
    {
        $data = [
            'page_title' => 'Tronco Forte - Madeireira Premium Sustentável',
            'meta_description' => 'Madeireira premium com foco em sustentabilidade. Certificação FSC, rastreabilidade completa e assessoria técnica especializada.',
            'current_page' => 'home'
        ];
        
        // Render the home content
        $content = $this->app->view()->fetch('home', $data);
        
        // Render the layout with the content
        $data['content'] = $content;
        $this->app->render('layout', $data);
    }

    /**
     * Página sobre nós
     */
    public function about()
    {
        $data = [
            'page_title' => 'Sobre Nós - Tronco Forte',
            'meta_description' => 'Conheça a história da Tronco Forte, nossos valores e compromisso com a sustentabilidade no setor madeireiro.',
            'current_page' => 'about'
        ];
        
        // Render the about content
        $content = $this->app->view()->fetch('about', $data);
        
        // Render the layout with the content
        $data['content'] = $content;
        $this->app->render('layout', $data);
    }

    /**
     * Página produtos e serviços
     */
    public function products()
    {
        $data = [
            'page_title' => 'Produtos e Serviços - Tronco Forte',
            'meta_description' => 'Catálogo completo de madeiras certificadas FSC, especificações técnicas e serviços especializados.',
            'current_page' => 'products'
        ];
        
        // Render the products content
        $content = $this->app->view()->fetch('products', $data);
        
        // Render the layout with the content
        $data['content'] = $content;
        $this->app->render('layout', $data);
    }

    /**
     * Página sustentabilidade
     */
    public function sustainability()
    {
        $data = [
            'page_title' => 'Sustentabilidade - Tronco Forte',
            'meta_description' => 'Práticas ambientais, certificações FSC e rastreabilidade completa das madeiras.',
            'current_page' => 'sustainability'
        ];
        
        // Render the sustainability content
        $content = $this->app->view()->fetch('sustainability', $data);
        
        // Render the layout with the content
        $data['content'] = $content;
        $this->app->render('layout', $data);
    }

    /**
     * Página contato
     */
    public function contact()
    {
        $data = [
            'page_title' => 'Contato - Tronco Forte',
            'meta_description' => 'Entre em contato conosco para orçamentos e informações. Matriz em São Paulo e filiais estratégicas.',
            'current_page' => 'contact'
        ];
        
        // Render the contact content
        $content = $this->app->view()->fetch('contact', $data);
        
        // Render the layout with the content
        $data['content'] = $content;
        $this->app->render('layout', $data);
    }

    /**
     * Processar formulário de contato
     */
    public function submitContact()
    {
        try {
            // Obter dados do formulário
            $data = $this->app->request()->data;
            
            // Validação básica
            $required_fields = ['name', 'email', 'phone', 'message', 'client_type'];
            foreach ($required_fields as $field) {
                if (empty($data->$field)) {
                    $this->app->json([
                        'success' => false,
                        'message' => 'Todos os campos obrigatórios devem ser preenchidos.'
                    ], 400);
                    return;
                }
            }
            
            // Validar email
            if (!filter_var($data->email, FILTER_VALIDATE_EMAIL)) {
                $this->app->json([
                    'success' => false,
                    'message' => 'E-mail inválido.'
                ], 400);
                return;
            }
            
            // Verificar checkbox de privacidade
            if (!$data->privacy) {
                $this->app->json([
                    'success' => false,
                    'message' => 'É necessário concordar com a política de privacidade.'
                ], 400);
                return;
            }
            
            // Preparar dados para log/email
            $contact_data = [
                'name' => htmlspecialchars($data->name),
                'email' => htmlspecialchars($data->email),
                'phone' => htmlspecialchars($data->phone),
                'company' => htmlspecialchars($data->company ?? ''),
                'client_type' => htmlspecialchars($data->client_type),
                'product_interest' => htmlspecialchars($data->product_interest ?? ''),
                'message' => htmlspecialchars($data->message),
                'timestamp' => date('Y-m-d H:i:s'),
                'ip' => $_SERVER['REMOTE_ADDR'] ?? 'unknown'
            ];
            
            // Log do contato (em produção, salvar em banco de dados)
            $log_entry = date('Y-m-d H:i:s') . " - Novo contato de: {$contact_data['name']} ({$contact_data['email']})\n";
            $log_entry .= "Empresa: {$contact_data['company']}\n";
            $log_entry .= "Tipo: {$contact_data['client_type']}\n";
            $log_entry .= "Interesse: {$contact_data['product_interest']}\n";
            $log_entry .= "Mensagem: {$contact_data['message']}\n";
            $log_entry .= "IP: {$contact_data['ip']}\n";
            $log_entry .= "---\n";
            
            // Salvar log (criar diretório se não existir)
            $log_dir = __DIR__ . '/../log';
            if (!is_dir($log_dir)) {
                mkdir($log_dir, 0755, true);
            }
            
            file_put_contents(
                $log_dir . '/contacts.log',
                $log_entry,
                FILE_APPEND | LOCK_EX
            );
            
            // Em produção, aqui seria enviado um email
            // mail($to, $subject, $message, $headers);
            
            $this->app->json([
                'success' => true,
                'message' => 'Mensagem enviada com sucesso! Entraremos em contato em breve.'
            ]);
            
        } catch (Exception $e) {
            // Log do erro
            error_log('Erro no formulário de contato: ' . $e->getMessage());
            
            $this->app->json([
                'success' => false,
                'message' => 'Erro interno do servidor. Tente novamente mais tarde.'
            ], 500);
        }
    }
}