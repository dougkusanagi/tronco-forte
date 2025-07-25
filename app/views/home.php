<!-- Seção Hero com Carrossel -->
<section class="relative h-screen overflow-hidden">
    <div class="glide hero-carousel h-full">
        <div class="glide__track h-full" data-glide-el="track">
            <ul class="glide__slides h-full">
                <!-- Slide 1 -->
                <li class="glide__slide relative h-full">
                    <div class="absolute inset-0 bg-gradient-to-r from-black/60 to-black/30 z-10"></div>
                    <img src="https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=modern%20lumber%20warehouse%20with%20organized%20wood%20stacks%20professional%20lighting%20industrial%20setting%20high%20quality%20sustainable%20forestry&image_size=landscape_16_9" 
                         alt="Depósito moderno da Tronco Forte" 
                         class="w-full h-full object-cover" 
                         loading="eager">
                    <div class="absolute inset-0 z-20 flex items-center justify-center">
                        <div class="text-center text-white max-w-4xl px-4">
                            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                                Madeiras Premium com
                                <span class="text-tronco-orange">Sustentabilidade</span>
                            </h1>
                            <p class="text-xl md:text-2xl mb-8 text-gray-200">
                                Certificação FSC, rastreabilidade completa e qualidade superior para seus projetos
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                <a href="/contato" class="bg-tronco-orange hover:bg-orange-600 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-colors duration-200 inline-flex items-center justify-center">
                                    <i data-lucide="phone" class="w-5 h-5 mr-2"></i>
                                    Solicitar Orçamento
                                </a>
                                <a href="/produtos" class="border-2 border-white text-white hover:bg-white hover:text-tronco-brown px-8 py-4 rounded-lg text-lg font-semibold transition-colors duration-200 inline-flex items-center justify-center">
                                    <i data-lucide="eye" class="w-5 h-5 mr-2"></i>
                                    Ver Produtos
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                
                <!-- Slide 2 -->
                <li class="glide__slide relative h-full">
                    <div class="absolute inset-0 bg-gradient-to-r from-black/60 to-black/30 z-10"></div>
                    <img src="https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=FSC%20certified%20sustainable%20forest%20management%20professional%20forestry%20equipment%20environmental%20conservation%20green%20certification&image_size=landscape_16_9" 
                         alt="Manejo sustentável de florestas" 
                         class="w-full h-full object-cover" 
                         loading="lazy">
                    <div class="absolute inset-0 z-20 flex items-center justify-center">
                        <div class="text-center text-white max-w-4xl px-4">
                            <h2 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                                <span class="text-tronco-green">100% Certificado</span>
                                FSC
                            </h2>
                            <p class="text-xl md:text-2xl mb-8 text-gray-200">
                                Rastreabilidade completa da origem até o destino final
                            </p>
                            <a href="/sustentabilidade" class="bg-tronco-green hover:bg-green-600 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-colors duration-200 inline-flex items-center justify-center">
                                <i data-lucide="leaf" class="w-5 h-5 mr-2"></i>
                                Conheça Nossa Sustentabilidade
                            </a>
                        </div>
                    </div>
                </li>
                
                <!-- Slide 3 -->
                <li class="glide__slide relative h-full">
                    <div class="absolute inset-0 bg-gradient-to-r from-black/60 to-black/30 z-10"></div>
                    <img src="https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=professional%20carpentry%20workshop%20high%20quality%20wood%20furniture%20craftsmanship%20modern%20woodworking%20tools%20premium%20lumber&image_size=landscape_16_9" 
                         alt="Marcenaria profissional" 
                         class="w-full h-full object-cover" 
                         loading="lazy">
                    <div class="absolute inset-0 z-20 flex items-center justify-center">
                        <div class="text-center text-white max-w-4xl px-4">
                            <h2 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                                Assessoria Técnica
                                <span class="text-tronco-orange">Especializada</span>
                            </h2>
                            <p class="text-xl md:text-2xl mb-8 text-gray-200">
                                Suporte completo para construtoras, marcenarias e arquitetos
                            </p>
                            <a href="/sobre" class="bg-tronco-brown hover:bg-amber-800 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-colors duration-200 inline-flex items-center justify-center">
                                <i data-lucide="users" class="w-5 h-5 mr-2"></i>
                                Conheça Nossa Equipe
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        
        <!-- Controles do Carrossel -->
        <div class="glide__arrows absolute inset-y-0 left-0 right-0 flex items-center justify-between px-4 z-30" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left bg-white/20 hover:bg-white/40 text-white p-3 rounded-full transition-colors duration-200" data-glide-dir="<">
                <i data-lucide="chevron-left" class="w-6 h-6"></i>
            </button>
            <button class="glide__arrow glide__arrow--right bg-white/20 hover:bg-white/40 text-white p-3 rounded-full transition-colors duration-200" data-glide-dir=">">
                <i data-lucide="chevron-right" class="w-6 h-6"></i>
            </button>
        </div>
        
        <!-- Indicadores -->
        <div class="glide__bullets absolute bottom-8 left-1/2 transform -translate-x-1/2 flex space-x-2 z-30" data-glide-el="controls[nav]">
            <button class="glide__bullet w-3 h-3 bg-white/50 rounded-full transition-colors duration-200" data-glide-dir="=0"></button>
            <button class="glide__bullet w-3 h-3 bg-white/50 rounded-full transition-colors duration-200" data-glide-dir="=1"></button>
            <button class="glide__bullet w-3 h-3 bg-white/50 rounded-full transition-colors duration-200" data-glide-dir="=2"></button>
        </div>
    </div>
</section>

<!-- Seção Diferenciais -->
<section class="py-16 bg-tronco-beige">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-tronco-brown mb-4">
                Por que escolher a Tronco Forte?
            </h2>
            <p class="text-lg text-tronco-gray max-w-3xl mx-auto">
                Somos referência em qualidade e sustentabilidade no setor madeireiro, oferecendo soluções completas para seus projetos.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Diferencial 1 -->
            <div class="bg-white rounded-lg p-6 shadow-lg hover:shadow-xl transition-shadow duration-200 text-center">
                <div class="bg-tronco-green/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="award" class="w-8 h-8 text-tronco-green"></i>
                </div>
                <h3 class="text-xl font-semibold text-tronco-brown mb-2">Certificação FSC</h3>
                <p class="text-tronco-gray">100% das nossas madeiras possuem certificação FSC, garantindo origem sustentável e responsável.</p>
            </div>
            
            <!-- Diferencial 2 -->
            <div class="bg-white rounded-lg p-6 shadow-lg hover:shadow-xl transition-shadow duration-200 text-center">
                <div class="bg-tronco-orange/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="search" class="w-8 h-8 text-tronco-orange"></i>
                </div>
                <h3 class="text-xl font-semibold text-tronco-brown mb-2">Rastreabilidade</h3>
                <p class="text-tronco-gray">Sistema completo de rastreamento da origem das madeiras, da floresta até o cliente final.</p>
            </div>
            
            <!-- Diferencial 3 -->
            <div class="bg-white rounded-lg p-6 shadow-lg hover:shadow-xl transition-shadow duration-200 text-center">
                <div class="bg-tronco-brown/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="users" class="w-8 h-8 text-tronco-brown"></i>
                </div>
                <h3 class="text-xl font-semibold text-tronco-brown mb-2">Assessoria Técnica</h3>
                <p class="text-tronco-gray">Equipe especializada oferece suporte técnico gratuito para todos os nossos clientes.</p>
            </div>
            
            <!-- Diferencial 4 -->
            <div class="bg-white rounded-lg p-6 shadow-lg hover:shadow-xl transition-shadow duration-200 text-center">
                <div class="bg-tronco-gray/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="truck" class="w-8 h-8 text-tronco-gray"></i>
                </div>
                <h3 class="text-xl font-semibold text-tronco-brown mb-2">Logística Própria</h3>
                <p class="text-tronco-gray">Frota própria garante pontualidade nas entregas e cuidado especial no transporte.</p>
            </div>
        </div>
    </div>
</section>

<!-- Seção Números -->
<section class="py-16 bg-tronco-brown text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-4xl md:text-5xl font-bold text-tronco-orange mb-2">15+</div>
                <div class="text-lg">Anos de Experiência</div>
            </div>
            <div>
                <div class="text-4xl md:text-5xl font-bold text-tronco-orange mb-2">500+</div>
                <div class="text-lg">Clientes Ativos</div>
            </div>
            <div>
                <div class="text-4xl md:text-5xl font-bold text-tronco-orange mb-2">100%</div>
                <div class="text-lg">Certificação FSC</div>
            </div>
            <div>
                <div class="text-4xl md:text-5xl font-bold text-tronco-orange mb-2">6</div>
                <div class="text-lg">Estados Atendidos</div>
            </div>
        </div>
    </div>
</section>

<!-- Seção Depoimentos -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-tronco-brown mb-4">
                O que nossos clientes dizem
            </h2>
            <p class="text-lg text-tronco-gray max-w-3xl mx-auto">
                Conheça a experiência de profissionais que confiam na Tronco Forte para seus projetos.
            </p>
        </div>
        
        <div class="glide testimonials-carousel">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <!-- Depoimento 1 -->
                    <li class="glide__slide">
                        <div class="bg-tronco-beige rounded-lg p-8 mx-4">
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 bg-tronco-orange rounded-full flex items-center justify-center text-white font-bold text-xl mr-4">
                                    RM
                                </div>
                                <div>
                                    <h4 class="text-xl font-semibold text-tronco-brown">Ricardo Mendes</h4>
                                    <p class="text-tronco-gray">Proprietário - Marcenaria Premium</p>
                                </div>
                            </div>
                            <p class="text-tronco-gray text-lg italic mb-4">
                                "A Tronco Forte transformou nosso negócio. A qualidade das madeiras é excepcional e a pontualidade nas entregas nos permite cumprir todos os prazos com nossos clientes. A certificação FSC é um diferencial que nossos clientes valorizam muito."
                            </p>
                            <div class="flex text-tronco-orange">
                                <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            </div>
                        </div>
                    </li>
                    
                    <!-- Depoimento 2 -->
                    <li class="glide__slide">
                        <div class="bg-tronco-beige rounded-lg p-8 mx-4">
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 bg-tronco-green rounded-full flex items-center justify-center text-white font-bold text-xl mr-4">
                                    AS
                                </div>
                                <div>
                                    <h4 class="text-xl font-semibold text-tronco-brown">Ana Silva</h4>
                                    <p class="text-tronco-gray">Arquiteta - Silva & Associados</p>
                                </div>
                            </div>
                            <p class="text-tronco-gray text-lg italic mb-4">
                                "Como arquiteta, preciso de fornecedores confiáveis e que compartilhem dos valores de sustentabilidade. A Tronco Forte oferece exatamente isso: qualidade, responsabilidade ambiental e um atendimento excepcional."
                            </p>
                            <div class="flex text-tronco-orange">
                                <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            </div>
                        </div>
                    </li>
                    
                    <!-- Depoimento 3 -->
                    <li class="glide__slide">
                        <div class="bg-tronco-beige rounded-lg p-8 mx-4">
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 bg-tronco-brown rounded-full flex items-center justify-center text-white font-bold text-xl mr-4">
                                    CF
                                </div>
                                <div>
                                    <h4 class="text-xl font-semibold text-tronco-brown">Carlos Ferreira</h4>
                                    <p class="text-tronco-gray">Diretor - Construtora Ferreira</p>
                                </div>
                            </div>
                            <p class="text-tronco-gray text-lg italic mb-4">
                                "Trabalhamos com a Tronco Forte há mais de 5 anos. A assessoria técnica é fundamental para nossos projetos e a logística própria garante que nunca tenhamos atrasos. Parceria de confiança!"
                            </p>
                            <div class="flex text-tronco-orange">
                                <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            
            <!-- Controles dos Depoimentos -->
            <div class="glide__arrows flex justify-center mt-8 space-x-4" data-glide-el="controls">
                <button class="glide__arrow glide__arrow--left bg-tronco-orange hover:bg-orange-600 text-white p-3 rounded-full transition-colors duration-200" data-glide-dir="<">
                    <i data-lucide="chevron-left" class="w-5 h-5"></i>
                </button>
                <button class="glide__arrow glide__arrow--right bg-tronco-orange hover:bg-orange-600 text-white p-3 rounded-full transition-colors duration-200" data-glide-dir=">">
                    <i data-lucide="chevron-right" class="w-5 h-5"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Seção CTA Final -->
<section class="py-16 bg-gradient-to-r from-tronco-brown to-tronco-orange text-white">
    <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">
            Pronto para seu próximo projeto?
        </h2>
        <p class="text-xl mb-8 text-gray-200">
            Entre em contato conosco e descubra como podemos ajudar com madeiras de qualidade superior e sustentáveis.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/contato" class="bg-white text-tronco-brown hover:bg-gray-100 px-8 py-4 rounded-lg text-lg font-semibold transition-colors duration-200 inline-flex items-center justify-center">
                <i data-lucide="phone" class="w-5 h-5 mr-2"></i>
                Solicitar Orçamento
            </a>
            <a href="/produtos" class="border-2 border-white text-white hover:bg-white hover:text-tronco-brown px-8 py-4 rounded-lg text-lg font-semibold transition-colors duration-200 inline-flex items-center justify-center">
                <i data-lucide="package" class="w-5 h-5 mr-2"></i>
                Ver Catálogo
            </a>
        </div>
    </div>
</section>

<!-- Scripts dos Carrosséis -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Carrossel Hero
        new Glide('.hero-carousel', {
            type: 'carousel',
            autoplay: 5000,
            hoverpause: true,
            animationDuration: 800,
            animationTimingFunc: 'ease-in-out'
        }).mount();
        
        // Carrossel Depoimentos
        new Glide('.testimonials-carousel', {
            type: 'carousel',
            perView: 1,
            autoplay: 4000,
            hoverpause: true,
            animationDuration: 600,
            breakpoints: {
                768: {
                    perView: 1
                }
            }
        }).mount();
        
        // Reinicializar ícones após carregamento
        lucide.createIcons();
    });
</script>