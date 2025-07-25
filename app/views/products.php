<!-- Seção Hero Produtos -->
<section class="relative py-20 bg-gradient-to-r from-tronco-brown to-tronco-orange text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">
                Nossos Produtos
            </h1>
            <p class="text-xl md:text-2xl text-gray-200 max-w-3xl mx-auto">
                Catálogo completo de madeiras certificadas FSC com qualidade superior e rastreabilidade garantida.
            </p>
        </div>
    </div>
</section>

<!-- Filtros de Categoria -->
<section class="py-8 bg-tronco-beige border-b">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-center gap-4" x-data="{ activeCategory: 'todos' }">
            <button @click="activeCategory = 'todos'" 
                    :class="activeCategory === 'todos' ? 'bg-tronco-orange text-white' : 'bg-white text-tronco-brown hover:bg-tronco-orange hover:text-white'"
                    class="px-6 py-3 rounded-lg font-semibold transition-colors duration-200">
                Todos os Produtos
            </button>
            <button @click="activeCategory = 'estrutural'" 
                    :class="activeCategory === 'estrutural' ? 'bg-tronco-orange text-white' : 'bg-white text-tronco-brown hover:bg-tronco-orange hover:text-white'"
                    class="px-6 py-3 rounded-lg font-semibold transition-colors duration-200">
                Madeira Estrutural
            </button>
            <button @click="activeCategory = 'acabamento'" 
                    :class="activeCategory === 'acabamento' ? 'bg-tronco-orange text-white' : 'bg-white text-tronco-brown hover:bg-tronco-orange hover:text-white'"
                    class="px-6 py-3 rounded-lg font-semibold transition-colors duration-200">
                Acabamento
            </button>
            <button @click="activeCategory = 'moveis'" 
                    :class="activeCategory === 'moveis' ? 'bg-tronco-orange text-white' : 'bg-white text-tronco-brown hover:bg-tronco-orange hover:text-white'"
                    class="px-6 py-3 rounded-lg font-semibold transition-colors duration-200">
                Móveis
            </button>
            <button @click="activeCategory = 'deck'" 
                    :class="activeCategory === 'deck' ? 'bg-tronco-orange text-white' : 'bg-white text-tronco-brown hover:bg-tronco-orange hover:text-white'"
                    class="px-6 py-3 rounded-lg font-semibold transition-colors duration-200">
                Deck e Pergolado
            </button>
        </div>
    </div>
</section>

<!-- Catálogo de Produtos -->
<section class="py-16 bg-white" x-data="{ activeCategory: 'todos', selectedProduct: null }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Madeira Estrutural -->
        <div x-show="activeCategory === 'todos' || activeCategory === 'estrutural'" class="mb-16">
            <h2 class="text-3xl font-bold text-tronco-brown mb-8 text-center">Madeira Estrutural</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Produto 1 -->
                <div class="bg-tronco-beige rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-200">
                    <img src="https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=eucalyptus%20lumber%20structural%20wood%20beams%20construction%20grade%20FSC%20certified%20high%20quality&image_size=landscape_4_3" 
                         alt="Eucalipto Estrutural" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-tronco-brown mb-2">Eucalipto Estrutural</h3>
                        <p class="text-tronco-gray mb-4">Ideal para estruturas, vigas e caibros. Alta resistência e durabilidade.</p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="bg-tronco-green text-white px-3 py-1 rounded-full text-sm font-medium">
                                <i data-lucide="award" class="w-4 h-4 inline mr-1"></i>
                                FSC Certificado
                            </span>
                            <span class="text-tronco-orange font-semibold">Sob consulta</span>
                        </div>
                        <button @click="selectedProduct = 'eucalipto'" 
                                class="w-full bg-tronco-orange hover:bg-orange-600 text-white py-2 rounded-lg font-semibold transition-colors duration-200">
                            Ver Especificações
                        </button>
                    </div>
                </div>
                
                <!-- Produto 2 -->
                <div class="bg-tronco-beige rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-200">
                    <img src="https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=pine%20lumber%20structural%20wood%20construction%20beams%20FSC%20certified%20sustainable%20forestry&image_size=landscape_4_3" 
                         alt="Pinus Estrutural" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-tronco-brown mb-2">Pinus Estrutural</h3>
                        <p class="text-tronco-gray mb-4">Excelente para construção civil e estruturas de grande porte.</p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="bg-tronco-green text-white px-3 py-1 rounded-full text-sm font-medium">
                                <i data-lucide="award" class="w-4 h-4 inline mr-1"></i>
                                FSC Certificado
                            </span>
                            <span class="text-tronco-orange font-semibold">Sob consulta</span>
                        </div>
                        <button @click="selectedProduct = 'pinus'" 
                                class="w-full bg-tronco-orange hover:bg-orange-600 text-white py-2 rounded-lg font-semibold transition-colors duration-200">
                            Ver Especificações
                        </button>
                    </div>
                </div>
                
                <!-- Produto 3 -->
                <div class="bg-tronco-beige rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-200">
                    <img src="https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=teak%20lumber%20premium%20structural%20wood%20high%20grade%20construction%20FSC%20certified&image_size=landscape_4_3" 
                         alt="Teca Estrutural" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-tronco-brown mb-2">Teca Estrutural</h3>
                        <p class="text-tronco-gray mb-4">Premium para projetos especiais que exigem máxima qualidade.</p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="bg-tronco-green text-white px-3 py-1 rounded-full text-sm font-medium">
                                <i data-lucide="award" class="w-4 h-4 inline mr-1"></i>
                                FSC Certificado
                            </span>
                            <span class="text-tronco-orange font-semibold">Sob consulta</span>
                        </div>
                        <button @click="selectedProduct = 'teca'" 
                                class="w-full bg-tronco-orange hover:bg-orange-600 text-white py-2 rounded-lg font-semibold transition-colors duration-200">
                            Ver Especificações
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Madeira para Acabamento -->
        <div x-show="activeCategory === 'todos' || activeCategory === 'acabamento'" class="mb-16">
            <h2 class="text-3xl font-bold text-tronco-brown mb-8 text-center">Madeira para Acabamento</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Produto 4 -->
                <div class="bg-tronco-beige rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-200">
                    <img src="https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=cedar%20wood%20finishing%20lumber%20interior%20design%20premium%20quality%20FSC%20certified&image_size=landscape_4_3" 
                         alt="Cedro Acabamento" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-tronco-brown mb-2">Cedro para Acabamento</h3>
                        <p class="text-tronco-gray mb-4">Perfeito para revestimentos internos e detalhes arquitetônicos.</p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="bg-tronco-green text-white px-3 py-1 rounded-full text-sm font-medium">
                                <i data-lucide="award" class="w-4 h-4 inline mr-1"></i>
                                FSC Certificado
                            </span>
                            <span class="text-tronco-orange font-semibold">Sob consulta</span>
                        </div>
                        <button @click="selectedProduct = 'cedro'" 
                                class="w-full bg-tronco-orange hover:bg-orange-600 text-white py-2 rounded-lg font-semibold transition-colors duration-200">
                            Ver Especificações
                        </button>
                    </div>
                </div>
                
                <!-- Produto 5 -->
                <div class="bg-tronco-beige rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-200">
                    <img src="https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=mahogany%20wood%20finishing%20lumber%20premium%20interior%20design%20FSC%20certified&image_size=landscape_4_3" 
                         alt="Mogno Acabamento" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-tronco-brown mb-2">Mogno para Acabamento</h3>
                        <p class="text-tronco-gray mb-4">Luxo e sofisticação para projetos de alto padrão.</p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="bg-tronco-green text-white px-3 py-1 rounded-full text-sm font-medium">
                                <i data-lucide="award" class="w-4 h-4 inline mr-1"></i>
                                FSC Certificado
                            </span>
                            <span class="text-tronco-orange font-semibold">Sob consulta</span>
                        </div>
                        <button @click="selectedProduct = 'mogno'" 
                                class="w-full bg-tronco-orange hover:bg-orange-600 text-white py-2 rounded-lg font-semibold transition-colors duration-200">
                            Ver Especificações
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Madeira para Móveis -->
        <div x-show="activeCategory === 'todos' || activeCategory === 'moveis'" class="mb-16">
            <h2 class="text-3xl font-bold text-tronco-brown mb-8 text-center">Madeira para Móveis</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Produto 6 -->
                <div class="bg-tronco-beige rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-200">
                    <img src="https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=oak%20wood%20furniture%20lumber%20premium%20quality%20woodworking%20FSC%20certified&image_size=landscape_4_3" 
                         alt="Carvalho para Móveis" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-tronco-brown mb-2">Carvalho para Móveis</h3>
                        <p class="text-tronco-gray mb-4">Resistência e beleza para móveis de alta qualidade.</p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="bg-tronco-green text-white px-3 py-1 rounded-full text-sm font-medium">
                                <i data-lucide="award" class="w-4 h-4 inline mr-1"></i>
                                FSC Certificado
                            </span>
                            <span class="text-tronco-orange font-semibold">Sob consulta</span>
                        </div>
                        <button @click="selectedProduct = 'carvalho'" 
                                class="w-full bg-tronco-orange hover:bg-orange-600 text-white py-2 rounded-lg font-semibold transition-colors duration-200">
                            Ver Especificações
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Deck e Pergolado -->
        <div x-show="activeCategory === 'todos' || activeCategory === 'deck'" class="mb-16">
            <h2 class="text-3xl font-bold text-tronco-brown mb-8 text-center">Deck e Pergolado</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Produto 7 -->
                <div class="bg-tronco-beige rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-200">
                    <img src="https://trae-api-us.mchost.guru/api/ide/v1/text_to_image?prompt=cumaru%20deck%20wood%20outdoor%20lumber%20weather%20resistant%20FSC%20certified&image_size=landscape_4_3" 
                         alt="Cumaru para Deck" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-tronco-brown mb-2">Cumaru para Deck</h3>
                        <p class="text-tronco-gray mb-4">Resistência natural às intempéries, ideal para áreas externas.</p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="bg-tronco-green text-white px-3 py-1 rounded-full text-sm font-medium">
                                <i data-lucide="award" class="w-4 h-4 inline mr-1"></i>
                                FSC Certificado
                            </span>
                            <span class="text-tronco-orange font-semibold">Sob consulta</span>
                        </div>
                        <button @click="selectedProduct = 'cumaru'" 
                                class="w-full bg-tronco-orange hover:bg-orange-600 text-white py-2 rounded-lg font-semibold transition-colors duration-200">
                            Ver Especificações
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal de Especificações -->
    <div x-show="selectedProduct" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4"
         @click.away="selectedProduct = null">
        
        <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto"
             @click.stop>
            <div class="p-6">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-2xl font-bold text-tronco-brown">Especificações Técnicas</h3>
                    <button @click="selectedProduct = null" 
                            class="text-tronco-gray hover:text-tronco-brown">
                        <i data-lucide="x" class="w-6 h-6"></i>
                    </button>
                </div>
                
                <!-- Conteúdo do Modal baseado no produto selecionado -->
                <div x-show="selectedProduct === 'eucalipto'">
                    <h4 class="text-xl font-semibold text-tronco-brown mb-4">Eucalipto Estrutural</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h5 class="font-semibold text-tronco-brown mb-2">Características:</h5>
                            <ul class="text-tronco-gray space-y-1">
                                <li>• Densidade: 600-800 kg/m³</li>
                                <li>• Resistência à compressão: 45 MPa</li>
                                <li>• Umidade: 12-15%</li>
                                <li>• Certificação: FSC 100%</li>
                            </ul>
                        </div>
                        <div>
                            <h5 class="font-semibold text-tronco-brown mb-2">Aplicações:</h5>
                            <ul class="text-tronco-gray space-y-1">
                                <li>• Estruturas de telhado</li>
                                <li>• Vigas e caibros</li>
                                <li>• Construção civil</li>
                                <li>• Andaimes</li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-6">
                        <h5 class="font-semibold text-tronco-brown mb-2">Dimensões Disponíveis:</h5>
                        <p class="text-tronco-gray">5x5cm, 5x10cm, 5x15cm, 10x10cm, 10x15cm, 15x15cm</p>
                    </div>
                </div>
                
                <!-- Adicionar conteúdo similar para outros produtos -->
                <div x-show="selectedProduct !== 'eucalipto'" class="text-center py-8">
                    <p class="text-tronco-gray mb-4">Especificações técnicas detalhadas disponíveis.</p>
                    <a href="/contato" class="bg-tronco-orange hover:bg-orange-600 text-white px-6 py-3 rounded-lg font-semibold transition-colors duration-200 inline-flex items-center">
                        <i data-lucide="phone" class="w-5 h-5 mr-2"></i>
                        Solicitar Informações
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Seção Serviços Adicionais -->
<section class="py-16 bg-tronco-beige">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-tronco-brown mb-4">
                Serviços Adicionais
            </h2>
            <p class="text-lg text-tronco-gray max-w-3xl mx-auto">
                Oferecemos serviços completos para atender todas as suas necessidades.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Serviço 1 -->
            <div class="bg-white rounded-lg p-6 text-center shadow-lg">
                <div class="bg-tronco-orange/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="ruler" class="w-8 h-8 text-tronco-orange"></i>
                </div>
                <h3 class="text-lg font-semibold text-tronco-brown mb-2">Corte Sob Medida</h3>
                <p class="text-tronco-gray text-sm">Cortes precisos conforme suas especificações</p>
            </div>
            
            <!-- Serviço 2 -->
            <div class="bg-white rounded-lg p-6 text-center shadow-lg">
                <div class="bg-tronco-green/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="truck" class="w-8 h-8 text-tronco-green"></i>
                </div>
                <h3 class="text-lg font-semibold text-tronco-brown mb-2">Entrega Programada</h3>
                <p class="text-tronco-gray text-sm">Logística própria com pontualidade garantida</p>
            </div>
            
            <!-- Serviço 3 -->
            <div class="bg-white rounded-lg p-6 text-center shadow-lg">
                <div class="bg-tronco-brown/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="users" class="w-8 h-8 text-tronco-brown"></i>
                </div>
                <h3 class="text-lg font-semibold text-tronco-brown mb-2">Consultoria Técnica</h3>
                <p class="text-tronco-gray text-sm">Suporte especializado para seu projeto</p>
            </div>
            
            <!-- Serviço 4 -->
            <div class="bg-white rounded-lg p-6 text-center shadow-lg">
                <div class="bg-tronco-gray/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i data-lucide="shield-check" class="w-8 h-8 text-tronco-gray"></i>
                </div>
                <h3 class="text-lg font-semibold text-tronco-brown mb-2">Garantia de Qualidade</h3>
                <p class="text-tronco-gray text-sm">Certificação e rastreabilidade completa</p>
            </div>
        </div>
    </div>
</section>

<!-- Seção CTA -->
<section class="py-16 bg-gradient-to-r from-tronco-brown to-tronco-orange text-white">
    <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">
            Precisa de um orçamento personalizado?
        </h2>
        <p class="text-xl mb-8 text-gray-200">
            Nossa equipe técnica está pronta para ajudar você a escolher a madeira ideal para seu projeto.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/contato" class="bg-white text-tronco-brown hover:bg-gray-100 px-8 py-4 rounded-lg text-lg font-semibold transition-colors duration-200 inline-flex items-center justify-center">
                <i data-lucide="phone" class="w-5 h-5 mr-2"></i>
                Solicitar Orçamento
            </a>
            <a href="/sobre" class="border-2 border-white text-white hover:bg-white hover:text-tronco-brown px-8 py-4 rounded-lg text-lg font-semibold transition-colors duration-200 inline-flex items-center justify-center">
                <i data-lucide="users" class="w-5 h-5 mr-2"></i>
                Falar com Especialista
            </a>
        </div>
    </div>
</section>