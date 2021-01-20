# ProjetoLaravel
 Aprendendo Laravel framework

 <h2>Introdução</h2>

Aprendendo e aprimorando as habilidades com o framework Laravel, construindo o primeiro WebSite em Laravel, entendo o Fomato MVC, conhecendo a estrutura e praticando a sintaxe, metodos, rotas, entre outros.

<h2>Aprendizado</h2>

1. Baixando arquivos e configurando ambiente de trabalho, usando **VSCode** como editor, **Composer** como terminal, **XAMP** como container, **Laravel Fremework** como linguagem e **MySQL** como banco de dados.

    1. Para ver o conteudo e necessario: Laravel Framework, Composer, XAMP (ou equivalente), VSCode (ou equivalente).

2. Criando **Hello World** no arquivo **"Welcome"** conhecendo os componentes do Laravel como views e rotas.

3. Aprendendo **Rotas** no arquivo **"Routes/Web"** e passando valores e variaveis para serem impressos na tela.

4. Criando if, else, for, foreach usando a estrutura blade, incluindo comentarios fora do html.

5. Criando Layouts para evitar repeticão de codigo, usando o comando **@section** e **@export** para definir o caminho do layout **"view/layouts/main"**.

6. Parametros nas rotas de forma obrigatoria e opcional.
    1. Obrigatoria: Passa o id para a rota
    2. Opcional: Passa o id e um valor pre-definido usando **"?"**

7. **Controllers**, usando padrão Laravel para manipular as rotas pelo Controllers de forma que o arquio **'Route'** fique limpo.
    1. Comando: php artisan make:Controllers

8. Introdução Conexão com banco de dados, usando **ORM** chamada **Eloquent** e criação de tabelas as **migrations**, versionamento de banco de dadso, avançar, retroceder o banco, fazer setup de DB, e verificando status de migrations.
    1. Comando: php artisan magrate (iniciar)
    2. Comando: php artisan make:migration create_produtcts_table (Insert)
    3. Comando: php artisan migrate:status (Select)
    4. Comando: php artisan migrate:fresh (Update)
        Conectar banco de dados no arquivo **.env**

9. **Eloquent**, criando tabelas no **Model**, criando tabelas no **phpMyAdmin**, recebendo dados do banco de dados e **imprimindo** na pagina **"welcome"**.
    1. Model singular
    2. Tabelas plural
    