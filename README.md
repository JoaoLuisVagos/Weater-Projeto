# Weather App

Este projeto é um aplicativo de previsão do tempo desenvolvido com PHP, AngularJS e Bootstrap. Ele permite que os usuários pesquisem a previsão do tempo para diferentes cidades e exibe as informações meteorológicas de forma clara e organizada.

## Tecnologias Utilizadas

- **PHP**: Linguagem de script do lado do servidor para processar as requisições de API e retornar os dados de previsão do tempo.
- **AngularJS**: Framework JavaScript para criar a interação dinâmica e a lógica do cliente.
- **Bootstrap**: Framework CSS para estilização e design responsivo.

## Funcionalidades

- Pesquisa de cidades para obter a previsão do tempo atual.
- Exibição de detalhes adicionais sobre o clima, como sensação térmica, temperatura mínima e máxima, umidade, pressão atmosférica, velocidade do vento e mais.
- Tabela para exibir o histórico das cidades pesquisadas, incluindo a data e a temperatura.

## Estrutura do Projeto

- **`index.html`**: Página principal do aplicativo com o formulário de pesquisa e a exibição dos resultados.
- **`weather_api.php`**: Script PHP que se comunica com a API de previsão do tempo e retorna os dados no formato JSON.
- **`assets/js/controllers/weather.controller.js`**: Controlador AngularJS que gerencia a lógica do cliente e a interação com o servidor.
- **`assets/css/style.css`**: Arquivo CSS para personalização do estilo do aplicativo.

## Instalação e Execução

### Requisitos

- Servidor web com suporte a PHP (por exemplo, Apache, Nginx).
- Ambiente para execução de AngularJS (pode ser um servidor local ou ambiente de desenvolvimento).

### Passos para Configuração

1. **Clone o repositório:**

   ```bash
        git clone https://github.com/JoaoLuisVagos/Weater-Projeto.git
        cd weater-projeto
   ```

2. **Configure o servidor web:**

   - Coloque os arquivos do projeto na raiz do seu servidor web (por exemplo, /var/www/html para Apache).

   ```bash
       sudo cp -r * /var/www/html
   ```

3. **Certifique-se de que o PHP está instalado e funcionando corretamente no seu servidor.**

   - O script PHP (weather_api.php) deve estar acessível via URL a partir do seu frontend AngularJS.
     Abra o projeto no navegador:

4. **Navegue até a URL onde o projeto está hospedado para visualizar o aplicativo em funcionamento.**
