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
***

# TailWind CSS

### **O que é**

O **Tailwind CSS** funciona escaneando todos os seus arquivos HTML, componentes JavaScript e quaisquer outros modelos em busca de nomes de classes, gerando os estilos correspondentes e depois gravando-os em um arquivo CSS estático.
É rápido, flexível e confiável — com tempo de execução zero.

***

### Instalação

Instalar o Tailwind CSS como um plugin do **Vite** é a maneira mais fácil de integrá-lo com frameworks como Laravel, SvelteKit, React Router, Nuxt e SolidJS. Para iss0o, siga os seguintes passos:

**1. Crie seu projeto**
Comece criando um novo projeto Vite  no seu terminal, caso ainda não tenha um configurado. A abordagem mais comum é usar [o comando "Criar Vite"](https://vite.dev/guide/#scaffolding-your-first-vite-project) .

    npm create vite@latest my-projectcd my-project

**2. Instalar Tailwind CSS**
Instalar `tailwindcss`e `@tailwindcss/vite`via npm no terminal.

    npm install tailwindcss @tailwindcss/vite

**3. Configurar o plugin Vite**
Adicione o `@tailwindcss/vite`plugin à sua configuração do Vite em vite.config.ts.

    import { defineConfig } from 'vite'
    import tailwindcss from '@tailwindcss/vite'
    
    export default defineConfig({
      plugins: [
        tailwindcss(),
      ],
    })

**4. Importar CSS do Tailwind**
Adicione um `@import`ao seu arquivo CSS que importe o Tailwind CSS.

    @import "tailwindcss";

**5. Inicie seu processo de construção**
Execute seu processo de compilação com `npm run dev`ou qualquer comando que esteja configurado em seu arquivo.  `package.json`

    npm run dev

**6. Comece a usar o Tailwind em seu HTML**
Certifique-se de que seu CSS compilado esteja incluído no `<head>`  _(seu framework pode cuidar disso para você)_ e, em seguida, comece a usar as classes utilitárias do Tailwind para estilizar seu conteúdo.

    <!doctype html>
    <html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="/src/style.css" rel="stylesheet">
    </head>
    <body>
      <h1 class="text-3xl font-bold underline">
        Hello world!
      </h1>
    </body>
    </html>

