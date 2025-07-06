# Roomly - Sistema de Reserva de Salas

## Visão Geral

Roomly é um sistema profissional de reserva de salas desenvolvido em PHP seguindo o padrão MVC (Model-View-Controller) com implementação orientada a objetos. O projeto utiliza Docker para containerização e MySQL para armazenamento de dados.

## Padrão MVC Implementado

O padrão MVC (Model-View-Controller) foi rigorosamente seguido para garantir uma separação clara de responsabilidades:

### Model (Modelo)
- Responsável pela lógica de dados e interação com o banco de dados
- Classes localizadas em `src/Models/`
- Exemplos: `User.php`, `Room.php`, `Booking.php`
- Manipulam diretamente os dados e aplicam regras de negócio

### View (Visão)
- Responsável pela apresentação dos dados
- Templates localizados em `src/views/`
- Contém apenas HTML com pequenas estruturas de apresentação
- Não contém lógica de negócio

### Controller (Controlador)
- Intermediário entre Model e View
- Classes localizadas em `src/Controllers/`
- Processa requisições, interage com Models e retorna Views
- Exemplos: `AuthController.php`, `RoomController.php`

## Tecnologias Utilizadas

- PHP 8.2 (Orientação a Objetos)
- MySQL 8.0
- Docker (PHP-FPM, Nginx, MySQL)
- PDO para acesso seguro ao banco
- Composer para autoloading (PSR-4)
- Bootstrap 5 para interface

## Funcionalidades Principais

- Cadastro e gerenciamento de salas (nome, capacidade, localização)
- Sistema de autenticação de usuários com hash de senha
- Reserva de salas com seleção de horário
- Validação de conflitos de agendamento
- Painel administrativo
- Painel de reservas por usuário

## Instalação

1. Clone o repositório:
```
git clone https://github.com/seu-usuario/roomly.git
cd roomly
```

2. Configure o ambiente:
```
cp .env.example .env
```

3. Inicie os containers:
```
docker-compose up -d
```

4. Instale as dependências:
```
docker-compose exec app composer install
```

5. Execute as migrações do banco de dados:
```
docker-compose exec app php database/migrate.php
```

6. Acesse a aplicação:
```
http://localhost:8000
```

## Estrutura do Projeto

```
roomly/
├── docker/          # Configurações do Docker
├── src/             # Código fonte MVC
│   ├── Controllers/ # Controladores
│   ├── Core/        # Componentes centrais
│   ├── Models/      # Modelos de dados
│   ├── Services/    # Lógica de negócio
│   └── views/       # Templates de visualização
├── public/          # Arquivos públicos
├── database/        # Migrações e schema
└── tests/           # Testes unitários
```

## Configuração do Banco de Dados

O sistema utiliza as seguintes tabelas principais:

1. `users` - Armazena informações dos usuários
2. `rooms` - Cadastro de salas disponíveis
3. `bookings` - Registro das reservas realizadas

O schema completo está disponível em `database/schema.sql`

## Credenciais para Teste

- Administrador: admin@roomly.com / admin123
- Usuário regular: user@roomly.com / user123

*Estas credenciais devem ser alteradas em ambiente de produção*

## Melhorias Futuras

- Implementação de testes unitários abrangentes
- Sistema de permissões mais granular
- Integração com calendários externos
- API REST para integração com outros sistemas

