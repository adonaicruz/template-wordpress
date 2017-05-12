# Template Wordpress

Template simples para blogs desenvolvido com [WordPress](https://br.wordpress.org/). Abaixo segue um passo a passo de como proceder para instalar em seu ambiente local de desenvolvimento utilizando o sistema operacional Windows.

## Requisitos:

Para rodar este projeto e para instalar ele localmente, os seguintes requisitos são necessários:

* [PHP](http://www.php.net/) na versão 7 ou superior;
* [MySQL](http://www.mysql.com/) na versão 5.6 ou superior;
* [Git Bash](https://git-for-windows.github.io/) para executar os comandos.

## Passo 1: (baixar o projeto)

Através da linha de comando do [Git Bash](https://git-for-windows.github.io/), navegue até uma pasta de sua preferência. Eu vou utilizar a pasta raiz do usuário.

```bash
$ cd ~
```

Agora vamos obter uma cópia atualizada do projeto fazendo um clone do repositório.

```bash
$ https://github.com/dalloglio/template-wordpress.git
```

Após isso navegue até a pasta onde o repositório foi baixado.

```bash
$ cd template-wordpress/
```

## Passo 2: (criar o banco de dados e importar as tabelas)

Agora será necessário criar um banco de dados, para isso vamos utilizar o ` Prompt de Comando ` do Windows. Para abrir o ` Prompt de Comando ` pressione as teclas `Windows` + `r` e na janela que abrir digite ` cmd ` e clique em ` OK ` ou clique no botão ` Iniciar ` e na caixa de pesquisa digite ` Prompt de Comando `. Com o prompt de comando aberto digite o seguinte comando:

```cmd
C:\> mysql -u{usuario} -p{senha}
```
*Em ` {usuario} ` e ` {senha} ` você deverá informar as suas próprias credenciais.*

Agora vamos criar a tabela e após criar a tabela digite o comando ` exit ` e tecle ` enter ` para sair.

```mysql
CREATE DATABASE `wordpress`;
exit
```

Navegue para a pasta onde esta localizado o arquivo de backup do banco de dados ` banco-de-dados.sql `, vamos fazer a importação das tabelas e registros e no final fechar o ` Prompt de Comando ` com o comando ` exit `.

```cmd
C:\>cd template-wordpress/db/
C:\>mysql -u{usuario} -p{senha} wordpress < banco-de-dados.sql
C:\>exit
```
*Em ` {usuario} ` e ` {senha} ` você deverá informar as suas próprias credenciais.*

## Passo 3: (definir as configurações do banco de dados)

Neste passo vamos apenas definir as configurações para que o projeto possa se comunicar com o banco de dados criado no passo anterior. Então, abra o arquivo ` wp-config.php ` que esta na raiz do projeto com o seu editor preferido e edite as linhas 26, 29 com o usuário e senha do banco de dados.

## Passo 4: (executar o projeto)

Finalmente deve estar tudo certo, então vamos rodar o servidor embutido do [PHP](http://www.php.net/) para executar o projeto e visualizá-lo no navegador. Agora volte para o [Git Bash](https://git-for-windows.github.io/) para executar o próximo comando.

```bash
$ php -S localhost:8000
```

Agora abra o seu navegador e na barra de endereços digite: `http://localhost:8000/` e tecle enter.

Fim!!
