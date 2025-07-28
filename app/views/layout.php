<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?? 'Tronco Forte - Madeireira Premium Sustentável' ?></title>
    <meta name="description" content="<?= $meta_description ?? 'Madeireira premium com foco em sustentabilidade. Certificação FSC, rastreabilidade completa e assessoria técnica especializada.' ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    
    <!-- GlideJS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.theme.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/glide.min.js"></script>
    
    <!-- Configuração do Tailwind CSS com cores personalizadas -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'tronco': {
                            'brown': '#4A2F20',
                            'orange': '#D97925',
                            'beige': '#F2E6DC',
                            'green': '#6A7F4E',
                            'gray': '#2D2D2D'
                        }
                    },
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif']
                    }
                }
            }
        }
    </script>
    
    <!-- CSS Customizado -->
    <link rel="stylesheet" href="/assets/css/custom.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Main JavaScript -->
    <script src="/assets/js/main.js" defer></script>
    
    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Tronco Forte",
        "description": "Madeireira premium especializada em comércio e beneficiamento de madeiras com foco em sustentabilidade",
        "url": "<?= $_SERVER['HTTP_HOST'] ?>",
        "logo": "<?= $_SERVER['HTTP_HOST'] ?>/assets/logo.png",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+55-11-9999-9999",
            "contactType": "customer service",
            "areaServed": "BR",
            "availableLanguage": "Portuguese"
        },
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "São Paulo",
            "addressRegion": "SP",
            "addressCountry": "BR"
        }
    }
    </script>
</head>
<body class="font-sans bg-white text-tronco-gray">
    <!-- Navegação -->
    <nav class="bg-white shadow-lg fixed w-full top-0 z-50" x-data="{ mobileMenuOpen: false }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="<?= $base_path ?: '/' ?>" class="flex items-center">
                        <span class="text-2xl font-bold text-tronco-brown">Tronco Forte</span>
                    </a>
                </div>
                
                <!-- Menu Desktop -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="<?= $base_path ?: '/' ?>" class="<?= ($current_page ?? '') === 'home' ? 'text-tronco-orange border-b-2 border-tronco-orange' : 'text-tronco-gray hover:text-tronco-orange' ?> px-3 py-2 text-sm font-medium transition-colors duration-200">Início</a>
                        <a href="<?= $base_path ?>/sobre" class="<?= ($current_page ?? '') === 'about' ? 'text-tronco-orange border-b-2 border-tronco-orange' : 'text-tronco-gray hover:text-tronco-orange' ?> px-3 py-2 text-sm font-medium transition-colors duration-200">Sobre Nós</a>
                        <a href="<?= $base_path ?>/produtos" class="<?= ($current_page ?? '') === 'products' ? 'text-tronco-orange border-b-2 border-tronco-orange' : 'text-tronco-gray hover:text-tronco-orange' ?> px-3 py-2 text-sm font-medium transition-colors duration-200">Produtos</a>
                        <a href="<?= $base_path ?>/sustentabilidade" class="<?= ($current_page ?? '') === 'sustainability' ? 'text-tronco-orange border-b-2 border-tronco-orange' : 'text-tronco-gray hover:text-tronco-orange' ?> px-3 py-2 text-sm font-medium transition-colors duration-200">Sustentabilidade</a>
                        <a href="<?= $base_path ?>/contato" class="<?= ($current_page ?? '') === 'contact' ? 'bg-tronco-orange text-white' : 'bg-tronco-brown text-white hover:bg-tronco-orange' ?> px-4 py-2 rounded-md text-sm font-medium transition-colors duration-200">Contato</a>
                    </div>
                </div>
                
                <!-- Botão Menu Mobile -->
                <div class="md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-tronco-gray hover:text-tronco-orange focus:outline-none focus:text-tronco-orange">
                        <i data-lucide="menu" class="w-6 h-6"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Menu Mobile -->
        <div x-show="mobileMenuOpen" x-transition class="md:hidden bg-white border-t border-gray-200">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="<?= $base_path ?: '/' ?>" class="<?= ($current_page ?? '') === 'home' ? 'bg-tronco-beige text-tronco-orange' : 'text-tronco-gray hover:bg-tronco-beige hover:text-tronco-orange' ?> block px-3 py-2 rounded-md text-base font-medium transition-colors duration-200">Início</a>
                <a href="<?= $base_path ?>/sobre" class="<?= ($current_page ?? '') === 'about' ? 'bg-tronco-beige text-tronco-orange' : 'text-tronco-gray hover:bg-tronco-beige hover:text-tronco-orange' ?> block px-3 py-2 rounded-md text-base font-medium transition-colors duration-200">Sobre Nós</a>
                <a href="<?= $base_path ?>/produtos" class="<?= ($current_page ?? '') === 'products' ? 'bg-tronco-beige text-tronco-orange' : 'text-tronco-gray hover:bg-tronco-beige hover:text-tronco-orange' ?> block px-3 py-2 rounded-md text-base font-medium transition-colors duration-200">Produtos</a>
                <a href="<?= $base_path ?>/sustentabilidade" class="<?= ($current_page ?? '') === 'sustainability' ? 'bg-tronco-beige text-tronco-orange' : 'text-tronco-gray hover:bg-tronco-beige hover:text-tronco-orange' ?> block px-3 py-2 rounded-md text-base font-medium transition-colors duration-200">Sustentabilidade</a>
                <a href="<?= $base_path ?>/contato" class="bg-tronco-orange text-white block px-3 py-2 rounded-md text-base font-medium mx-3 mb-2 text-center">Contato</a>
            </div>
        </div>
    </nav>
    
    <!-- Conteúdo Principal -->
    <main class="pt-16">
        <?= $content ?>
    </main>
    
    <!-- Rodapé -->
    <footer class="bg-tronco-brown text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Logo e Descrição -->
                <div class="col-span-1 md:col-span-2">
                    <h3 class="text-2xl font-bold mb-4">Tronco Forte</h3>
                    <p class="text-gray-300 mb-4">Madeireira premium especializada em comércio e beneficiamento de madeiras com foco em sustentabilidade e qualidade superior.</p>
                    <div class="flex space-x-4">
                        <i data-lucide="award" class="w-6 h-6 text-tronco-orange"></i>
                        <span class="text-sm text-gray-300">Certificação FSC</span>
                    </div>
                </div>
                
                <!-- Links Rápidos -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Links Rápidos</h4>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-gray-300 hover:text-tronco-orange transition-colors duration-200">Início</a></li>
                        <li><a href="/sobre" class="text-gray-300 hover:text-tronco-orange transition-colors duration-200">Sobre Nós</a></li>
                        <li><a href="/produtos" class="text-gray-300 hover:text-tronco-orange transition-colors duration-200">Produtos</a></li>
                        <li><a href="/sustentabilidade" class="text-gray-300 hover:text-tronco-orange transition-colors duration-200">Sustentabilidade</a></li>
                    </ul>
                </div>
                
                <!-- Contato -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contato</h4>
                    <div class="space-y-2">
                        <div class="flex items-center">
                            <i data-lucide="phone" class="w-4 h-4 mr-2 text-tronco-orange"></i>
                            <span class="text-gray-300 text-sm">(11) 9999-9999</span>
                        </div>
                        <div class="flex items-center">
                            <i data-lucide="mail" class="w-4 h-4 mr-2 text-tronco-orange"></i>
                            <span class="text-gray-300 text-sm">contato@troncoforte.com.br</span>
                        </div>
                        <div class="flex items-center">
                            <i data-lucide="map-pin" class="w-4 h-4 mr-2 text-tronco-orange"></i>
                            <span class="text-gray-300 text-sm">São Paulo, SP</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-600 mt-8 pt-8 text-center">
                <p class="text-gray-300 text-sm">
                    &copy; 2024 Tronco Forte. Todos os direitos reservados. | 
                    Desenvolvido por <a href="https://essenciamarketing.com.br/" class="underline text-tronco-orange hover:text-white transition-colors duration-200" target="_blank">Essência Marketing e Gestão</a>
                </p>
            </div>
        </div>
    </footer>
    
    <!-- Inicializar Lucide Icons -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            lucide.createIcons();
        });
    </script>
</body>
</html>