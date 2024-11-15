## PSS - Sistema de Gestão de Contratação de Profissionais Temporários de Saúde

Este projeto tem como objetivo facilitar e otimizar o processo de contratação de profissionais temporários de saúde, permitindo que instituições públicas gerenciem processos seletivos de forma eficiente.

## Principais Funcionalidades

* **Cadastro de Usuários:**
    * Permite que candidatos criem uma conta com login e senha para acessar o sistema.
* **Formulário de Inscrição:**
    * Candidatos podem preencher suas informações pessoais e enviar documentos diretamente pelo sistema.
* **Acompanhamento do Processo Seletivo:**
    * Candidatos podem acompanhar o status de sua inscrição e receber atualizações sobre o processo seletivo.

## Tecnologias Utilizadas

* **Front-end:** HTML, CSS
* **Back-end:** PHP
* **Banco de Dados:** MySQL

## Como Executar o Projeto

### Pré-requisitos

* Servidor Web (Apache, Nginx, etc.)
* PHP 7.x ou superior
* MySQL 5.x ou superior

### Passos para Executar o Projeto Localmente

1. **Clonar o repositório:**

   ```bash
   git clone https://github.com/seu-usuario/nome-do-repositorio.git
   ```

2. **Configurar o banco de dados:**

   * Crie um banco de dados MySQL.
   * Importe o arquivo database.sql para configurar as tabelas.
   * Configure as credenciais de conexão do banco de dados no arquivo config.php.

3. **Iniciar o servidor:**

   * Coloque os arquivos do projeto no diretório raiz do seu servidor web (por exemplo, htdocs no XAMPP).

4. **Acessar o sistema:**

   * Abra seu navegador e vá para http://localhost/nome-do-repositorio
