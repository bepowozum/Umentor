# Umentor
Projeto Técnico Umentor - Cadastro de Usuários

## Requisitos

- PHP
- Xampp
- MySQL
- Git

1. **Clonar o Repositório:**
    ```bash
    git clone https://github.com/seu-usuario/seu-repositorio.git
    cd seu-repositorio
    ```

2. **Importar o Banco de Dados:**
    - Abra o MySQL Workbench.
    - Conecte-se ao servidor de banco de dados.
    - Selecione ou crie um banco de dados.
    - Vá para `Server` > `Data Import`.
    - Escolha "Import from Self-Contained File" e selecione o arquivo SQL (`umentor-form_umentor_data.sql`) do projeto.
    - Execute a operação de importação.

3. **Configurar o Banco de Dados no Código PHP:**
    - Verifique se o arquivo PHP que interage com o banco de dados (por exemplo, `config.php`) tem as credenciais corretas.

4. **Acessar a Aplicação:**
    - Abra o navegador e acesse a aplicação via `http://localhost/seu-repositorio/listagem.php`.
