# Tronco Forte - Website Corporativo

Site institucional da Tronco Forte, empresa premium de madeiras sustentáveis.

## 🌳 Sobre o Projeto

Este é o website corporativo da Tronco Forte, desenvolvido com foco em:
- **Sustentabilidade**: Destacando o compromisso ambiental da empresa
- **Qualidade Premium**: Apresentando produtos de alta qualidade
- **Experiência do Usuário**: Interface moderna e responsiva
- **Acessibilidade**: Seguindo padrões WCAG 2.1 AA

## 🛠️ Tecnologias Utilizadas

- **Backend**: FlightPHP (Framework PHP leve e rápido)
- **Frontend**: 
  - Tailwind CSS (Framework CSS utilitário)
  - Alpine.js (Framework JavaScript reativo)
  - Lucide Icons (Ícones SVG)
  - Glide.js (Carrossel/Slider)
- **Fontes**: Google Fonts (Inter)
- **Estrutura**: MVC Pattern

## 📁 Estrutura do Projeto

```
tronco-forte/
├── app/
│   ├── config/
│   │   ├── bootstrap.php
│   │   ├── config.php
│   │   ├── routes.php
│   │   └── services.php
│   ├── controllers/
│   │   └── HomeController.php
│   ├── views/
│   │   ├── layout.php
│   │   ├── home.php
│   │   ├── about.php
│   │   ├── products.php
│   │   ├── sustainability.php
│   │   └── contact.php
│   ├── log/
│   └── cache/
├── public/
│   ├── index.php
│   └── assets/
│       ├── css/
│       │   └── custom.css
│       └── js/
│           └── main.js
├── vendor/
└── composer.json
```

## 🚀 Como Executar

### Pré-requisitos
- PHP 8.0 ou superior
- Composer

### Instalação

1. Clone o repositório:
```bash
git clone [url-do-repositorio]
cd tronco-forte
```

2. Instale as dependências:
```bash
composer install
```

3. Inicie o servidor de desenvolvimento:
```bash
php -S localhost:8000 -t public
```

4. Acesse no navegador:
```
http://localhost:8000
```

## 📄 Páginas Disponíveis

- **Home** (`/`) - Página inicial com hero, diferenciais e depoimentos
- **Sobre** (`/sobre`) - História, missão, visão e valores da empresa
- **Produtos** (`/produtos`) - Catálogo de produtos com filtros
- **Sustentabilidade** (`/sustentabilidade`) - Compromissos ambientais
- **Contato** (`/contato`) - Formulário de contato e informações

## 🎨 Paleta de Cores

- **Marrom Principal**: `#8B4513` (tronco-brown)
- **Laranja Vibrante**: `#FF8C00` (tronco-orange)
- **Verde Floresta**: `#228B22` (tronco-green)
- **Bege Natural**: `#F5F5DC` (tronco-beige)
- **Cinza Elegante**: `#696969` (tronco-gray)

## 📱 Responsividade

O site é totalmente responsivo e otimizado para:
- 📱 Mobile (320px+)
- 📱 Tablet (768px+)
- 💻 Desktop (1024px+)
- 🖥️ Large Desktop (1280px+)

## ♿ Acessibilidade

- Seguindo padrões WCAG 2.1 AA
- Navegação por teclado
- Textos alternativos em imagens
- Contraste adequado de cores
- Estrutura semântica HTML5
- Skip links para navegação

## 🔧 Funcionalidades

### Frontend
- ✅ Carrossel de imagens (Hero e Depoimentos)
- ✅ Navegação mobile responsiva
- ✅ Filtros de produtos com Alpine.js
- ✅ Formulário de contato com validação
- ✅ Animações suaves de scroll
- ✅ Modal para especificações técnicas
- ✅ Accordion para FAQ
- ✅ Máscaras para campos de telefone
- ✅ Validação de email em tempo real

### Backend
- ✅ Roteamento com FlightPHP
- ✅ Controller para páginas principais
- ✅ Processamento de formulário de contato
- ✅ Log de contatos recebidos
- ✅ Estrutura MVC organizada

## 📊 SEO e Performance

- Meta tags otimizadas
- Schema.org JSON-LD
- Lazy loading de imagens
- CSS e JS minificados via CDN
- Estrutura semântica
- URLs amigáveis

## 🔒 Segurança

- Sanitização de dados de entrada
- Validação de formulários
- Proteção contra XSS
- Headers de segurança
- Logs de atividades

## 📝 Logs

Os contatos enviados pelo formulário são registrados em:
```
app/log/contacts.log
```

## 🤝 Contribuição

Para contribuir com o projeto:

1. Faça um fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/AmazingFeature`)
3. Commit suas mudanças (`git commit -m 'Add some AmazingFeature'`)
4. Push para a branch (`git push origin feature/AmazingFeature`)
5. Abra um Pull Request

## 📄 Licença

Este projeto está sob a licença MIT. Veja o arquivo `LICENSE` para mais detalhes.

## 📞 Contato

**Tronco Forte**
- 📧 Email: contato@troncoforte.com.br
- 📱 Telefone: (11) 3456-7890
- 📍 Endereço: Rua das Madeiras, 123 - São Paulo, SP

---

**Desenvolvido com ❤️ por [Essência Marketing](https://essenciamarketing.com.br)**

*Madeira de qualidade, futuro sustentável.*