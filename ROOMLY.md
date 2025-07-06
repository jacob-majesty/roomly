# Roomly - Sistema de Reserva de Salas

O **Roomly** é um sistema para gerenciamento e reserva de salas. Abaixo estão as funcionalidades principais para **administradores** e **clientes**.

## Funcionalidades do Admin

### 1. Gerenciamento de Salas
- **Cadastrar novas salas**: Adicionar novas salas com detalhes como nome, capacidade, equipamentos, etc.
- **Editar salas**: Atualizar as informações das salas, como nome, capacidade e outros atributos.
- **Excluir salas**: Remover salas que não serão mais usadas.
- **Definir horário de disponibilidade**: Configurar a disponibilidade das salas por dia e horário.

### 2. Gerenciamento de Usuários
- **Cadastrar e editar usuários**: Criar ou editar contas de clientes.
- **Atribuir permissões e funções**: Definir quais ações cada usuário pode realizar.
- **Excluir ou desativar contas de clientes**: Remover ou desabilitar usuários.

### 3. Gerenciamento de Reservas
- **Visualizar todas as reservas**: Consultar todas as reservas realizadas, incluindo detalhes das salas, horários e clientes.
- **Alterar ou cancelar reservas**: Modificar ou cancelar reservas feitas pelos clientes.
- **Gerenciar conflitos de reserva**: Resolver sobreposição de reservas para a mesma sala no mesmo horário.

### 4. Relatórios e Estatísticas
- **Gerar relatórios de utilização**: Criar relatórios sobre a utilização das salas e o número de reservas feitas.
- **Visualizar estatísticas**: Obter dados sobre a ocupação das salas, taxa de utilização, etc.

### 5. Configurações Gerais
- **Configurar políticas de reserva**: Estabelecer regras para a reserva de salas, como tempo mínimo de antecedência, duração máxima, políticas de cancelamento, etc.
- **Definir recursos adicionais**: Adicionar recursos extras que podem ser solicitados junto à reserva, como projetores, flipcharts, etc.

---

## Funcionalidades do Cliente

### 1. Cadastro e Autenticação
- **Criar conta**: O cliente pode se cadastrar no sistema com e-mail, senha ou login social.
- **Login/Logout**: O cliente pode acessar sua conta para realizar ações de reserva.
  
### 2. Busca e Reserva de Salas
- **Visualizar salas disponíveis**: O cliente pode buscar salas com base em critérios como horário, capacidade e equipamentos.
- **Reservar salas**: O cliente escolhe a sala desejada e faz a reserva.
- **Consultar disponibilidade em tempo real**: O cliente vê as salas disponíveis em tempo real para evitar conflitos de reservas.

### 3. Gerenciamento de Reservas
- **Visualizar reservas**: O cliente pode consultar todas as reservas feitas, passadas ou futuras.
- **Alterar ou cancelar reservas**: Dependendo das regras, o cliente pode alterar ou cancelar reservas.
- **Notificações de alterações**: O cliente é notificado sobre mudanças ou cancelamentos nas suas reservas.

### 4. Histórico e Relatórios Pessoais
- **Histórico de reservas**: O cliente pode acessar o histórico completo de suas reservas.
- **Gerar relatórios pessoais**: O cliente pode gerar relatórios sobre seu uso das salas.

### 5. Notificações e Lembretes
- **Lembretes de reserva**: O cliente recebe lembretes sobre suas reservas.
- **Notificações de alterações**: O cliente é notificado em caso de alterações nas reservas.

### 6. Avaliação de Salas e Feedback
- **Avaliar salas**: O cliente pode deixar uma avaliação sobre a sala após a utilização.
- **Deixar feedback**: O cliente pode fornecer feedback geral sobre o sistema de reservas.

---

## Exemplo de Fluxo de Reserva

### Cliente:
1. O cliente faz login no sistema.
2. Busca por uma sala disponível, filtrando por data, hora, capacidade e equipamentos.
3. Escolhe a sala e faz a reserva.
4. Recebe a confirmação e um lembrete antes do horário marcado.

### Admin:
1. O admin visualiza todas as reservas e pode gerenciá-las.
2. Caso necessário, o admin pode alterar ou cancelar reservas.
3. O admin configura o sistema, incluindo políticas de reserva e horários de disponibilidade das salas.

---

Essas são as funcionalidades básicas para o **Roomly**, cobrindo tanto o lado administrativo quanto o do cliente. As funcionalidades podem ser expandidas conforme a necessidade do sistema.
