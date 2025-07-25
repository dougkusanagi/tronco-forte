<!-- Seção Hero Contato -->
<section class="relative py-20 bg-gradient-to-r from-tronco-brown to-tronco-orange text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">
                Entre em Contato
            </h1>
            <p class="text-xl md:text-2xl text-gray-200 max-w-3xl mx-auto">
                Nossa equipe está pronta para ajudar você a encontrar a solução ideal em madeiras sustentáveis.
            </p>
        </div>
    </div>
</section>

<!-- Seção Principal de Contato -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            
            <!-- Formulário de Contato -->
            <div class="bg-tronco-beige rounded-lg p-8">
                <h2 class="text-2xl font-bold text-tronco-brown mb-6">
                    Solicite seu Orçamento
                </h2>
                
                <form id="contactForm" class="space-y-6" x-data="contactForm()" @submit.prevent="submitForm()">
                    <!-- Nome -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-tronco-brown mb-2">
                            Nome Completo *
                        </label>
                        <input type="text" 
                               id="name" 
                               name="name" 
                               x-model="form.name"
                               required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-tronco-orange focus:border-transparent transition-colors duration-200"
                               placeholder="Seu nome completo">
                    </div>
                    
                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-tronco-brown mb-2">
                            E-mail *
                        </label>
                        <input type="email" 
                               id="email" 
                               name="email" 
                               x-model="form.email"
                               required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-tronco-orange focus:border-transparent transition-colors duration-200"
                               placeholder="seu@email.com">
                    </div>
                    
                    <!-- Telefone -->
                    <div>
                        <label for="phone" class="block text-sm font-medium text-tronco-brown mb-2">
                            Telefone *
                        </label>
                        <input type="tel" 
                               id="phone" 
                               name="phone" 
                               x-model="form.phone"
                               required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-tronco-orange focus:border-transparent transition-colors duration-200"
                               placeholder="(11) 99999-9999">
                    </div>
                    
                    <!-- Empresa -->
                    <div>
                        <label for="company" class="block text-sm font-medium text-tronco-brown mb-2">
                            Empresa
                        </label>
                        <input type="text" 
                               id="company" 
                               name="company" 
                               x-model="form.company"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-tronco-orange focus:border-transparent transition-colors duration-200"
                               placeholder="Nome da sua empresa">
                    </div>
                    
                    <!-- Tipo de Cliente -->
                    <div>
                        <label for="client_type" class="block text-sm font-medium text-tronco-brown mb-2">
                            Tipo de Cliente *
                        </label>
                        <select id="client_type" 
                                name="client_type" 
                                x-model="form.client_type"
                                required 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-tronco-orange focus:border-transparent transition-colors duration-200">
                            <option value="">Selecione uma opção</option>
                            <option value="construtora">Construtora</option>
                            <option value="marcenaria">Marcenaria</option>
                            <option value="arquiteto">Arquiteto/Designer</option>
                            <option value="pessoa_fisica">Pessoa Física</option>
                            <option value="outro">Outro</option>
                        </select>
                    </div>
                    
                    <!-- Produto de Interesse -->
                    <div>
                        <label for="product_interest" class="block text-sm font-medium text-tronco-brown mb-2">
                            Produto de Interesse
                        </label>
                        <select id="product_interest" 
                                name="product_interest" 
                                x-model="form.product_interest"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-tronco-orange focus:border-transparent transition-colors duration-200">
                            <option value="">Selecione uma categoria</option>
                            <option value="estrutural">Madeira Estrutural</option>
                            <option value="acabamento">Madeira para Acabamento</option>
                            <option value="moveis">Madeira para Móveis</option>
                            <option value="deck">Deck e Pergolado</option>
                            <option value="consultoria">Consultoria Técnica</option>
                        </select>
                    </div>
                    
                    <!-- Mensagem -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-tronco-brown mb-2">
                            Mensagem *
                        </label>
                        <textarea id="message" 
                                  name="message" 
                                  x-model="form.message"
                                  required 
                                  rows="4" 
                                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-tronco-orange focus:border-transparent transition-colors duration-200"
                                  placeholder="Descreva seu projeto e necessidades..."></textarea>
                    </div>
                    
                    <!-- Checkbox LGPD -->
                    <div class="flex items-start space-x-3">
                        <input type="checkbox" 
                               id="privacy" 
                               name="privacy" 
                               x-model="form.privacy"
                               required 
                               class="mt-1 w-4 h-4 text-tronco-orange border-gray-300 rounded focus:ring-tronco-orange">
                        <label for="privacy" class="text-sm text-tronco-gray">
                            Concordo com o tratamento dos meus dados pessoais conforme a 
                            <a href="#" class="text-tronco-orange hover:underline">Política de Privacidade</a> 
                            e autorizo o contato para fins comerciais. *
                        </label>
                    </div>
                    
                    <!-- Botão de Envio -->
                    <button type="submit" 
                            :disabled="loading"
                            :class="loading ? 'bg-gray-400 cursor-not-allowed' : 'bg-tronco-orange hover:bg-orange-600'"
                            class="w-full text-white py-4 rounded-lg font-semibold transition-colors duration-200 flex items-center justify-center">
                        <span x-show="!loading" class="flex items-center">
                            <i data-lucide="send" class="w-5 h-5 mr-2"></i>
                            Enviar Solicitação
                        </span>
                        <span x-show="loading" class="flex items-center">
                            <i data-lucide="loader-2" class="w-5 h-5 mr-2 animate-spin"></i>
                            Enviando...
                        </span>
                    </button>
                </form>
                
                <!-- Mensagem de Sucesso/Erro -->
                <div x-show="message" 
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 transform translate-y-2"
                     x-transition:enter-end="opacity-100 transform translate-y-0"
                     :class="messageType === 'success' ? 'bg-green-100 border-green-400 text-green-700' : 'bg-red-100 border-red-400 text-red-700'"
                     class="mt-6 border-l-4 p-4 rounded">
                    <p x-text="message"></p>
                </div>
            </div>
            
            <!-- Informações de Contato -->
            <div class="space-y-8">
                <div>
                    <h2 class="text-2xl font-bold text-tronco-brown mb-6">
                        Informações de Contato
                    </h2>
                    
                    <div class="space-y-6">
                        <!-- Telefone -->
                        <div class="flex items-start space-x-4">
                            <div class="bg-tronco-orange/10 w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i data-lucide="phone" class="w-6 h-6 text-tronco-orange"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-tronco-brown">Telefone</h3>
                                <p class="text-tronco-gray">(11) 3456-7890</p>
                                <p class="text-tronco-gray">(11) 99876-5432</p>
                            </div>
                        </div>
                        
                        <!-- Email -->
                        <div class="flex items-start space-x-4">
                            <div class="bg-tronco-green/10 w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i data-lucide="mail" class="w-6 h-6 text-tronco-green"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-tronco-brown">E-mail</h3>
                                <p class="text-tronco-gray">contato@troncoforte.com.br</p>
                                <p class="text-tronco-gray">vendas@troncoforte.com.br</p>
                            </div>
                        </div>
                        
                        <!-- Endereço -->
                        <div class="flex items-start space-x-4">
                            <div class="bg-tronco-brown/10 w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i data-lucide="map-pin" class="w-6 h-6 text-tronco-brown"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-tronco-brown">Endereço</h3>
                                <p class="text-tronco-gray">
                                    Rua das Madeiras, 1500<br>
                                    Distrito Industrial<br>
                                    São Paulo - SP, 01234-567
                                </p>
                            </div>
                        </div>
                        
                        <!-- Horário -->
                        <div class="flex items-start space-x-4">
                            <div class="bg-tronco-orange/10 w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i data-lucide="clock" class="w-6 h-6 text-tronco-orange"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-tronco-brown">Horário de Atendimento</h3>
                                <p class="text-tronco-gray">
                                    Segunda a Sexta: 8h às 18h<br>
                                    Sábado: 8h às 12h<br>
                                    Domingo: Fechado
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Redes Sociais -->
                <div>
                    <h3 class="text-xl font-semibold text-tronco-brown mb-4">
                        Siga-nos nas Redes Sociais
                    </h3>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-tronco-orange hover:bg-orange-600 text-white w-12 h-12 rounded-lg flex items-center justify-center transition-colors duration-200">
                            <i data-lucide="facebook" class="w-6 h-6"></i>
                        </a>
                        <a href="#" class="bg-tronco-orange hover:bg-orange-600 text-white w-12 h-12 rounded-lg flex items-center justify-center transition-colors duration-200">
                            <i data-lucide="instagram" class="w-6 h-6"></i>
                        </a>
                        <a href="#" class="bg-tronco-orange hover:bg-orange-600 text-white w-12 h-12 rounded-lg flex items-center justify-center transition-colors duration-200">
                            <i data-lucide="linkedin" class="w-6 h-6"></i>
                        </a>
                        <a href="#" class="bg-tronco-orange hover:bg-orange-600 text-white w-12 h-12 rounded-lg flex items-center justify-center transition-colors duration-200">
                            <i data-lucide="youtube" class="w-6 h-6"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Seção Mapa -->
<section class="py-16 bg-tronco-beige">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-tronco-brown mb-4">
                Nossa Localização
            </h2>
            <p class="text-lg text-tronco-gray">
                Visite nosso showroom e depósito para conhecer pessoalmente nossos produtos.
            </p>
        </div>
        
        <!-- Placeholder para Mapa -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="h-96 bg-gray-200 flex items-center justify-center">
                <div class="text-center">
                    <i data-lucide="map-pin" class="w-16 h-16 text-tronco-orange mx-auto mb-4"></i>
                    <h3 class="text-xl font-semibold text-tronco-brown mb-2">Mapa Interativo</h3>
                    <p class="text-tronco-gray">Rua das Madeiras, 1500 - Distrito Industrial</p>
                    <p class="text-tronco-gray">São Paulo - SP, 01234-567</p>
                    <a href="https://maps.google.com" target="_blank" 
                       class="inline-flex items-center mt-4 bg-tronco-orange hover:bg-orange-600 text-white px-6 py-3 rounded-lg font-semibold transition-colors duration-200">
                        <i data-lucide="external-link" class="w-5 h-5 mr-2"></i>
                        Ver no Google Maps
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Seção FAQ -->
<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-tronco-brown mb-4">
                Perguntas Frequentes
            </h2>
            <p class="text-lg text-tronco-gray">
                Respostas para as dúvidas mais comuns sobre nossos produtos e serviços.
            </p>
        </div>
        
        <div class="space-y-4" x-data="{ openFaq: null }">
            <!-- FAQ 1 -->
            <div class="border border-gray-200 rounded-lg">
                <button @click="openFaq = openFaq === 1 ? null : 1" 
                        class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-tronco-beige transition-colors duration-200">
                    <span class="font-semibold text-tronco-brown">Todas as madeiras são certificadas FSC?</span>
                    <i data-lucide="chevron-down" 
                       :class="openFaq === 1 ? 'rotate-180' : ''"
                       class="w-5 h-5 text-tronco-orange transition-transform duration-200"></i>
                </button>
                <div x-show="openFaq === 1" 
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 max-h-0"
                     x-transition:enter-end="opacity-100 max-h-96"
                     class="px-6 pb-4">
                    <p class="text-tronco-gray">Sim, 100% das nossas madeiras possuem certificação FSC (Forest Stewardship Council), garantindo que provêm de florestas manejadas de forma sustentável e responsável.</p>
                </div>
            </div>
            
            <!-- FAQ 2 -->
            <div class="border border-gray-200 rounded-lg">
                <button @click="openFaq = openFaq === 2 ? null : 2" 
                        class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-tronco-beige transition-colors duration-200">
                    <span class="font-semibold text-tronco-brown">Qual o prazo de entrega?</span>
                    <i data-lucide="chevron-down" 
                       :class="openFaq === 2 ? 'rotate-180' : ''"
                       class="w-5 h-5 text-tronco-orange transition-transform duration-200"></i>
                </button>
                <div x-show="openFaq === 2" 
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 max-h-0"
                     x-transition:enter-end="opacity-100 max-h-96"
                     class="px-6 pb-4">
                    <p class="text-tronco-gray">O prazo varia conforme o produto e quantidade. Para produtos em estoque, a entrega é feita em até 3 dias úteis. Para produtos sob medida, o prazo é de 7 a 15 dias úteis.</p>
                </div>
            </div>
            
            <!-- FAQ 3 -->
            <div class="border border-gray-200 rounded-lg">
                <button @click="openFaq = openFaq === 3 ? null : 3" 
                        class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-tronco-beige transition-colors duration-200">
                    <span class="font-semibold text-tronco-brown">Vocês fazem cortes sob medida?</span>
                    <i data-lucide="chevron-down" 
                       :class="openFaq === 3 ? 'rotate-180' : ''"
                       class="w-5 h-5 text-tronco-orange transition-transform duration-200"></i>
                </button>
                <div x-show="openFaq === 3" 
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 max-h-0"
                     x-transition:enter-end="opacity-100 max-h-96"
                     class="px-6 pb-4">
                    <p class="text-tronco-gray">Sim, oferecemos serviço de corte sob medida com precisão milimétrica. Nossa equipe técnica pode ajudar você a otimizar o aproveitamento da madeira conforme seu projeto.</p>
                </div>
            </div>
            
            <!-- FAQ 4 -->
            <div class="border border-gray-200 rounded-lg">
                <button @click="openFaq = openFaq === 4 ? null : 4" 
                        class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-tronco-beige transition-colors duration-200">
                    <span class="font-semibold text-tronco-brown">Oferecem consultoria técnica?</span>
                    <i data-lucide="chevron-down" 
                       :class="openFaq === 4 ? 'rotate-180' : ''"
                       class="w-5 h-5 text-tronco-orange transition-transform duration-200"></i>
                </button>
                <div x-show="openFaq === 4" 
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 max-h-0"
                     x-transition:enter-end="opacity-100 max-h-96"
                     class="px-6 pb-4">
                    <p class="text-tronco-gray">Sim, nossa equipe de especialistas oferece consultoria técnica gratuita para todos os clientes, ajudando na escolha da madeira ideal para cada aplicação e projeto.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Script do Formulário -->
<script>
    function contactForm() {
        return {
            form: {
                name: '',
                email: '',
                phone: '',
                company: '',
                client_type: '',
                product_interest: '',
                message: '',
                privacy: false
            },
            loading: false,
            message: '',
            messageType: 'success',
            
            async submitForm() {
                this.loading = true;
                this.message = '';
                
                try {
                    const response = await fetch('/contato', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify(this.form)
                    });
                    
                    const result = await response.json();
                    
                    if (response.ok) {
                        this.messageType = 'success';
                        this.message = 'Mensagem enviada com sucesso! Entraremos em contato em breve.';
                        this.resetForm();
                    } else {
                        this.messageType = 'error';
                        this.message = result.message || 'Erro ao enviar mensagem. Tente novamente.';
                    }
                } catch (error) {
                    this.messageType = 'error';
                    this.message = 'Erro de conexão. Tente novamente mais tarde.';
                }
                
                this.loading = false;
                
                // Limpar mensagem após 5 segundos
                setTimeout(() => {
                    this.message = '';
                }, 5000);
            },
            
            resetForm() {
                this.form = {
                    name: '',
                    email: '',
                    phone: '',
                    company: '',
                    client_type: '',
                    product_interest: '',
                    message: '',
                    privacy: false
                };
            }
        };
    }
</script>