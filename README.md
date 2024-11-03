# 🌟 Minelab Project

Bem-vindo ao Minelab! Este projeto é fácil de configurar e perfeito para iniciar rapidamente em um ambiente local.

## 🚀 Instalação e Configuração

Siga os passos abaixo para configurar o Minelab no seu ambiente local.

### 1. Clone o Repositório

Para começar, faça o clone do projeto para o seu computador:

```bash
git clone https://github.com/HyperDevsOficial/minelab.git

2. Copie para o Seu Servidor Local

    Coloque o projeto em um diretório do seu servidor local, como XAMPP, WAMP, ou outro servidor de sua preferência.
    Certifique-se de que o servidor está ativo.

3. Configure o Banco de Dados

    Crie um banco de dados no seu servidor local (usando phpMyAdmin ou outra ferramenta de sua escolha).
    Importe o arquivo SQL (se disponível) para o banco de dados criado.
    Atualize as configurações de conexão ao banco de dados no arquivo de configuração do projeto (como config.php ou .env).

4. Adição da Coluna available_miners à Tabela plans

Foi adicionada uma nova coluna available_miners na tabela plans. Esta coluna é do tipo INT e tem o valor padrão de 0. Caso você precise adicionar manualmente a coluna, use o comando SQL abaixo:

sql

ALTER TABLE plans ADD COLUMN available_miners INT DEFAULT 0;

Essa coluna é utilizada para controlar a quantidade de "miners" disponíveis em cada plano e é integrada à lógica de adição e atualização na interface de administração.
5. Acesse no Navegador

Abra o navegador e acesse o projeto através do seu servidor local:

plaintext

http://localhost/minelab

    Dica: Verifique se o servidor e o banco de dados estão configurados corretamente antes de acessar.
