# Guia rápido para iniciar um projeto com Laravel

**Pré-requisitos:**Antes de começar, tenha certeza que sua maquina tenha: PHP, Composer, Laravel instaler e Node e NPM ou Bum.
***
## Instalação
***
Abra seu terminal **PowerShel** no modo *Administrador* e copie o seguinte código:
### Instalação do PHP e Composer:

    Set-ExecutionPolicy Bypass  -Scope  Process  -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor  3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))
***
Após a instalação, reinicie seu terminal, o fechando e abrindo novamente na pasta ***htdocs*** no ***Xampp***. Baixe o Laravel Installer via Composer:

### Baixando o Laravel Installer:

    composer global require laravel/installer
  ***
 #### Criando aplicação:
 

    Laravel new exemplo-app
   ***
   Depois que o aplicativo foi criado, você pode iniciar o servidor de desenvolvimento local Laravel, o *queue worker*e o servidor de desenvolvimento *Vite* usando o script *dev* Composer:
   

    cd exemplo-app 
    npm install && npm run build
    composer run dev
   ***
   Depois de iniciar o servidor de desenvolvimento, seu aplicativo estará acessível no seu navegador em http://localhost:8000/

## Guia de como abrir seu projeto laravel

**Pré-requisitos:** Como é dito anteriormente, é necessário ter em sua máquina: _PHP_,  _Composer_,  _Laravel instaler_  e  _Node e NPM_  ou  _Bun_.
***
Abra o *PowerShell* dentro da pasta onde seu projeto ***Laravel*** está alojado, e rode o seguinte comando:

     composer install
    
   Ele é responsável por baixar as dependências do projeto na pastas *vendor*.
   ***
   Para instalar as dependências de um projeto que possui *javascript*, rode o seguinte comando:
   

    npm install
Caso seu projeto tiver *webpack* ou *vite*, rode o comando:

    npm run build
***
Ente no *VSCode*, localize na sessao de arquivos .env.example, faça uma cópia do arquivo e à renomeie como .env
***
É necessário a criação de uma chave encripitada para o projeto, para desenvolve-la, rode o comando:

    php artisan key:generate
***
Rode as Migrations para a criação do banco de dados com o comando:

    php artisan migrate
Finalize com o comando:

    composer run dev

***
Para abrir seu arquivo precione **Ctrl** e selecione o link http://localhost:8000/
