# Desafio Técnico - Proesc.com

## Tecnologias Utilizadas

- **PHP**: Atualizado para a versão **8.1** (devido à dificuldade de configurar o ambiente com PHP 5.6).
- **Framework**: Laravel
- **Banco de Dados**: PostgreSQL
- **Docker**: Utilizado para facilitar a configuração do ambiente

## Configuração do Ambiente

### Passos para Iniciar a Aplicação

1. **Criar os volumes do Docker**:
   ```bash
   ./bin/build.sh
   ```

2. **Criar a rede para comunicação entre containers**:
   ```bash
   docker network create backend_proesc_network
   ```

3. **Subir os containers**:
   ```bash
   docker-compose up -d
   ```

4. **Acessar o container da aplicação**:
   ```bash
   docker-compose exec app sh
   ```

5. **Instalar as dependências do Laravel**:
   ```bash
   composer install
   ```

6. **Gerar a chave da aplicação**:
   ```bash
   php artisan key:generate
   ```

7. **Executar as migrações e seeds do banco**:
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

8. **Garantir permissões no diretório de storage**:
   ```bash
   chmod -R 777 /var/www/html/storage
   ```

### Configuração do Arquivo `.env`

Para facilitar a configuração, incluí dois arquivos `.env.example`. Basta renomear os dois para `.env` funcionar o sistema.
Precisa dos dois arquivos .env

### Acesso ao Sistema

A aplicação pode ser acessada através do **localhost** no Nginx do Docker:
```
http://laravel_app
```
Ou, caso esteja rodando na porta 80, acesse:
```
http://localhost
```

## Correções Realizadas

### 1. Erro na Navegação para "Produtos" e "Categorias"
   **Problema**: A rota para "Produtos" e "Categorias" não estava definida corretamente no `web.php`.
   **Correção**:
   - Adicionadas as rotas ausentes no arquivo `routes/web.php`.
   
### 2. Erro no Cadastro de Categoria
   **Problema**: O botão "Salvar" exibia a mensagem de sucesso, mas não realizava o cadastro.
   **Correção**:
   - O formulário estava enviando a requisição como **GET**, em vez de **POST**.
   - Ajustado o método do formulário para **POST**, garantindo que a função correta fosse chamada.

### 3. Nome da Categoria não Exibido na Listagem de Produtos
   **Problema**: Apenas o ID da categoria era exibido na listagem de produtos.
   **Correção**:
   - Foi estabelecido o relacionamento correto entre `Produto` e `Categoria`.
   - Ajustada a consulta para exibir o nome da categoria em vez do ID.

### 4. Outras Melhorias
   - **Adicionada rota de atualização de categoria:**
     ```php
     Route::put('/categorias/{id}/', [CategoryController::class, 'update']);
     ```
   - **Ajuste na autorização**: Alterado para `true` no request para corrigir problemas de permissão.
   - **Feedback melhorado**: Agora todas as ações exibem mensagens de sucesso.
   - **Confirmação ao deletar**: Adicionado um alerta para confirmar a exclusão de registros.

Se tiver alguma dúvida ou precisar de suporte para rodar a aplicação, entre em contato!

---
Desenvolvido por Victor Gabriel 

