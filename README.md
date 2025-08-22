# Laravel External API Project

## Visão Geral

Este repositório contém dois projetos Laravel independentes:

- **App-Clínica**: Aplicação principal de uma clínica, responsável pelo gerenciamento de pacientes, agendamentos, médicos, entre outros.
- **External-API**: API externa que fornece e consome dados, permitindo integração com sistemas de terceiros.

Ambos os projetos seguem as melhores práticas do Laravel, com estrutura modular, autenticação, testes e integração via API RESTful.

---

## Estrutura do Repositório

```
├── App-Clínica/
│   ├── app/
│   ├── bootstrap/
│   ├── config/
│   ├── database/
│   ├── public/
│   ├── resources/
│   ├── routes/
│   ├── storage/
│   ├── tests/
│   ├── artisan
│   ├── composer.json
│   └── ...
├── External-API/
│   ├── app/
│   ├── bootstrap/
│   ├── config/
│   ├── database/
│   ├── public/
│   ├── resources/
│   ├── routes/
│   ├── storage/
│   ├── tests/
│   ├── artisan
│   ├── composer.json
│   └── ...
├── LICENSE
└── README.md
```

---

## Funcionalidades Principais

### App-Clínica
- Cadastro, edição e exclusão de pacientes
- Gerenciamento de médicos e especialidades
- Agendamento de consultas
- Integração com a API externa para sincronização de dados
- Autenticação e autorização de usuários
- Interface web responsiva

### External-API
- API RESTful para integração com sistemas externos
- Endpoints para CRUD de pacientes, médicos e agendamentos
- Autenticação via tokens (Laravel Sanctum ou Passport)
- Validação e tratamento de erros padronizados
- Documentação de endpoints (ex: Swagger/OpenAPI)

---

## Pré-requisitos

- PHP >= 8.1
- Composer
- Node.js & NPM (para assets front-end)
- SQLite (ou outro banco de dados suportado pelo Laravel)

---

## Instalação

### 1. Clone o repositório
```bash
git clone https://github.com/jimmyadmsenior/Laravel-External-API.git
cd Laravel-External-API
```

### 2. Instale as dependências de cada projeto
```bash
cd App-Clínica
composer install
npm install
cd ../External-API
composer install
npm install
```

### 3. Configure o ambiente
Copie o arquivo `.env.example` para `.env` em cada projeto e ajuste as variáveis conforme necessário:
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Execute as migrações e seeders
```bash
php artisan migrate --seed
```

### 5. Inicie o servidor de desenvolvimento
```bash
php artisan serve
```

---

## Testes

Para rodar os testes automatizados:
```bash
php artisan test
```

---

## Estrutura de Pastas Importantes

- `app/Http/Controllers`: Controladores das rotas e lógica de negócio
- `app/Models`: Modelos Eloquent
- `routes/web.php`: Rotas web
- `routes/api.php`: Rotas de API
- `database/migrations`: Migrações do banco de dados
- `database/seeders`: Seeders para popular o banco
- `resources/views`: Views Blade (App-Clínica)
- `public/`: Arquivos públicos (index.php, assets)

---

## Integração entre App-Clínica e External-API

A comunicação entre os projetos é feita via requisições HTTP (REST), utilizando autenticação por token. O App-Clínica consome endpoints da External-API para sincronizar e obter dados externos.

Exemplo de chamada:
```php
$response = Http::withToken($token)->get('https://external-api-url/api/pacientes');
```

---

## Segurança
- Autenticação via Laravel Sanctum/Passport
- Validação de dados em todas as requisições
- Proteção contra CSRF e XSS
- Logs de acesso e erros

---

## Contribuição

1. Fork este repositório
2. Crie uma branch (`git checkout -b feature/nova-funcionalidade`)
3. Commit suas alterações (`git commit -am 'Adiciona nova funcionalidade'`)
4. Push para a branch (`git push origin feature/nova-funcionalidade`)
5. Abra um Pull Request

---

## Licença

Este projeto está licenciado sob a licença MIT. Veja o arquivo LICENSE para mais detalhes.

---

## Contato

Dúvidas, sugestões ou feedback? Entre em contato:
- [Seu Nome]
- [Seu Email]
- [LinkedIn ou outra rede]

---

## Referências
- [Documentação Laravel](https://laravel.com/docs)
- [Documentação Composer](https://getcomposer.org/doc/)
- [Documentação PHP](https://www.php.net/docs.php)
- [Documentação Vue.js](https://vuejs.org/) (se aplicável)

---

> Projeto desenvolvido para integração de sistemas clínicos com APIs externas, promovendo interoperabilidade, segurança e escalabilidade.

