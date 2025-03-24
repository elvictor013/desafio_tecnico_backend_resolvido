# Desafio Técnico Proesc.com

## Descrição do Desafio

O desafio técnico envolve a análise e correção de alguns problemas em uma aplicação. Abaixo estão os problemas identificados pelos usuários e as soluções implementadas.

### Problemas Identificados e Correções

1. **Erro na Navegação para as Páginas de "Produtos" e "Categorias"**
   - **Descrição do Problema:** Ao tentar acessar as páginas de "Produtos" ou "Categorias", a navegação não funciona.
   - **Correção:** O problema estava relacionado com a definição incorreta das rotas no arquivo `web.php`. Foi adicionado o mapeamento correto das rotas para as páginas de "Produtos" e "Categorias".

2. **Problema no Cadastro de Categorias**
   - **Descrição do Problema:** Ao tentar cadastrar uma nova categoria, a mensagem de sucesso é exibida, mas o cadastro não é realizado.
   - **Correção:** O problema estava relacionado com o método da requisição, que estava utilizando `GET` ao invés de `POST`. A requisição foi corrigida para `POST`, e agora o cadastro da categoria é feito corretamente.

3. **Erro na Exibição do Nome da Categoria Relacionada ao Produto**
   - **Descrição do Problema:** Na página de listagem de produtos, o nome da categoria relacionada não estava sendo exibido, aparecendo apenas o ID da categoria.
   - **Correção:** O problema estava no relacionamento entre o produto e a categoria. Foi corrigido o relacionamento entre as tabelas e atualizado o código para exibir o nome correto da categoria associada ao produto.

4. **Outras Melhorias**
   - **Rota de Atualização de Categoria:** Foi adicionada a rota `Route::put('/categorias/{id}/', [CategoryController::class, 'update']);` no arquivo de rotas `web.php` para permitir a atualização das categorias.
   - **Autorização no Request:** No processo de cadastro, foi corrigido o problema de autorização, alterando para `true` no request.
   - **Mensagens de Sucesso:** Agora, todas as ações de criação, atualização e exclusão exibem mensagens de sucesso.
   - **Confirmação de Exclusão:** Para evitar exclusões acidentais, foi adicionado um alerta de confirmação quando o usuário tenta deletar um item.

---

## Como Preparar o Ambiente para Testar a Aplicação

Para testar a aplicação em seu ambiente local, siga os passos abaixo:

1. **Atualização do PHP e Docker**
   - Devido à dificuldade de configurar o ambiente com PHP 5.6, o ambiente foi atualizado para PHP 8.1 utilizando Docker.
   
2. **Construir os Volumes e Iniciar o Docker**
   Execute os seguintes comandos no terminal:

   ```bash
   ./bin/build.sh  # Cria os volumes do Docker
   docker network create backend_proesc_network  # Cria a rede do Docker
   docker-compose up -d  # Inicia os containers em segundo plano

3. **Acessar o Container e Configurar a Aplicação Após iniciar o Docker, acesse o container e configure a aplicação:**
docker-compose exec app sh  # Acessa o shell do container
composer install  # Instala as dependências do Composer
php artisan key:generate  # Gera a chave de aplicação
php artisan migrate  # Executa as migrações do banco de dados
php artisan db:seed  # Popula o banco de dados com dados iniciais
chmod -R 777 /var/www/html/storage  # Ajusta permissões do diretório storage