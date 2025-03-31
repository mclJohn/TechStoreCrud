TechStore - Sistema de Cadastro de Produtos
Este é um sistema simples de cadastro e gerenciamento de produtos para uma loja virtual chamada TechStore. O sistema utiliza PHP e MySQL para gerenciar os dados dos produtos, como nome, descrição, preço e quantidade.

Pré-requisitos
Antes de começar, certifique-se de que você tenha os seguintes programas instalados:

XAMPP (ou outro servidor local com PHP e MySQL)

PHP 7.4 ou superior

MySQL 

phpMyAdmin 

Instalação
1. Clonando o Repositório
Primeiro, você precisa clonar o repositório para sua máquina local. Para isso, execute o seguinte comando no terminal:

git clone https://github.com/mclJohn/TechStoreCrud


2. Configuração do Servidor Local
Baixe e instale o XAMPP (se você ainda não tiver). O XAMPP inclui o Apache, PHP e MySQL.

Inicie o XAMPP e execute os serviços Apache e MySQL.

3. Configuração do Banco de Dados
Após clonar o repositório, dentro da pasta do projeto, você encontrará um arquivo chamado config.php Este arquivo contém os comandos SQL necessários para criar o banco de dados e as tabelas.

Abra o phpMyAdmin no seu navegador http://localhost/phpmyadmin/

No phpMyAdmin, crie um novo banco de dados chamado usuarios.

Clique em "Novo" no menu lateral esquerdo.

Digite usuarios no campo "Nome do banco de dados".

Clique em Criar.

No painel do phpMyAdmin, selecione o banco de dados usuarios e, em seguida use os dados do config.php para criar o banco de dados

4. no terminal, coloque o seguinte código: php -S localhost:8000 para inciar o projeto, e siga no link fornecido http://localhost:8000/

Você verá a página inicial com as opções para cadastrar e listar os produtos.

5. Funcionalidades
Cadastro de Produto: Você pode cadastrar novos produtos, informando o nome, descrição, preço e quantidade.

Listagem de Produtos: Visualize os produtos cadastrados, com opções para editar ou excluir.

Edição de Produto: Altere os dados dos produtos já cadastrados.

6. Tecnologias Utilizadas
PHP: Linguagem de programação utilizada para o backend.

MySQL: Banco de dados utilizado para armazenar informações sobre os produtos.

Bootstrap: Framework CSS utilizado para o layout do sistema.

jQuery: Biblioteca JavaScript para interações dinâmicas (DataTables).

7. Possíveis Problemas e Soluções
Erro de Conexão com o Banco de Dados: Verifique se o MySQL está em execução e se as credenciais estão corretas no arquivo de configuração (config.php).

Erro ao Criar Tabela: Se a tabela produtos não foi criada corretamente, verifique se o código SQL foi copiado corretamente.

Erro no Navegador: Se o site não carregar, verifique os logs do servidor Apache (geralmente em xampp/apache/logs/error.log) para identificar problemas.
