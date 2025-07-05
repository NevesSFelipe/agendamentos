
# 📅 Sistema de Agendamento - API (PHP)

Este projeto é uma API modular desenvolvida em PHP com foco em agendamento de serviços. Foi planejado para crescer por meio de módulos (sprints) e ser reutilizado ou comercializado como uma solução SaaS (Software as a Service).

---

## 🚀 Objetivo

Criar uma API robusta, escalável e com boas práticas, começando com funcionalidades essenciais como autenticação e agendamento de horários.

---

## 🧱 Estrutura Inicial (Módulo 01)

- Estrutura base MVC simplificada
- Roteamento dinâmico por URL amigável
- Resposta JSON padronizada
- Controller padrão (`HomeController`)
- Tratamento de erros para:
  - Controller inexistente
  - Método inexistente
- Uso de `autoload` com Composer
- Organização inicial para crescimento modular

---

## 📁 Estrutura de Pastas

```
/
├── App/
│   ├── Configs/
│   │   └── Constantes.php
│   ├── Controllers/
│   │   └── Controller.php
│   │   └── HomeController.php
│   ├── Core/
│   │   └── Router.php
│   └── Helpers/
│       └── RespostaHTTP.php
├── .gitignore
├── .htaccess
├── composer.json
└── index.php
├── README.md
```

---

## ⚙️ Requisitos

- PHP 8.0+
- Apache com `mod_rewrite` habilitado
- Composer

---

## 🔧 Instalação

```bash
git clone https://github.com/seu-usuario/seu-repositorio.git
cd seu-repositorio
composer install
```

---

## 🌐 Acessando

Acesse no navegador:

```
http://localhost/seu-projeto/
```

Exemplo de rota:
```
http://localhost/seu-projeto/usuario/listar
```

---

## 🔜 Próximos passos

- [x] Módulo 02: Sistema de login/logout com JWT

---

## 🧑‍💻 Autor

**Felipe Santos das Neves**

---
