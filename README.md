# Sistema Laravel

Bem-vindo ao **Sistema Laravel**, um projeto desenvolvido para demonstrar as melhores práticas de desenvolvimento web utilizando o framework [Laravel](https://laravel.com/). Este sistema serve como base para sistemas administrativos, aplicações empresariais ou qualquer solução robusta que precise de escalabilidade, segurança e flexibilidade.
  
<img width="1920" height="831" alt="image" src="https://github.com/user-attachments/assets/3b61bfea-689a-456d-a387-a43aac51e44a" />

## Tecnologias Utilizadas

- [Laravel](https://laravel.com/) (PHP)
- [MySQL](https://www.mysql.com/) ou [PostgreSQL](https://www.postgresql.org/)
- [Bootstrap](https://getbootstrap.com/) ou [Tailwind CSS](https://tailwindcss.com/)
- [JavaScript](https://www.javascript.com/)
- [Composer](https://getcomposer.org/)
- [Docker](https://www.docker.com/) (opcional)

## Pré-requisitos

- PHP >= 8.0
- Composer
- MySQL ou PostgreSQL
- Node.js e NPM (para assets front-end)
- Docker (opcional)

## Instalação

1. **Clone o repositório:**
   ```bash
   git clone https://github.com/Guilhermefariah/Sistema_Laravel.git
   cd Sistema_Laravel
   ```

2. **Instale as dependências do PHP:**
   ```bash
   composer install
   ```

3. **Instale as dependências do front-end:**
   ```bash
   npm install && npm run dev
   ```

4. **Configure o arquivo `.env`:**
   - Copie o arquivo `.env.example` para `.env` e ajuste as variáveis conforme seu ambiente.

   ```bash
   cp .env.example .env
   ```

   - Gere a chave da aplicação:
     ```bash
     php artisan key:generate
     ```

5. **Configure o banco de dados:**
   - Certifique-se de que seu banco está rodando e as credenciais no `.env` estão corretas.
   - Rode as migrações:
     ```bash
     php artisan migrate
     ```

6. **(Opcional) Popule o banco com dados fictícios:**
   ```bash
   php artisan db:seed
   ```

7. **Inicie o servidor:**
   ```bash
   php artisan serve
   ```

Acesse a aplicação em [http://localhost:8000](http://localhost:8000).

## Como Usar

- Registre-se ou faça login.
- Gerencie usuários, permissões e dados conforme seu papel.
- Utilize o dashboard para visualizar informações administrativas.
- Expanda a aplicação conforme suas necessidades.

## Estrutura do Projeto

```
Sistema_Laravel/
├── app/
├── bootstrap/
├── config/
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
├── resources/
│   ├── views/
│   └── js/
├── routes/
│   └── web.php
├── tests/
└── ...
```

## Contribuindo

Contribuições são sempre bem-vindas!

1. Faça um fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/NovaFeature`)
3. Commit suas alterações (`git commit -m 'Adiciona nova feature'`)
4. Push para a branch (`git push origin feature/NovaFeature`)
5. Abra um Pull Request

## Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.
