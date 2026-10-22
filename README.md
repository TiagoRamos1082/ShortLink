# ShortLink

## Sobre o projeto

O **ShortLink** é um projeto desenvolvido com o objetivo de encurtar URLs extensas, tornando os links mais compactos, organizados e fáceis de compartilhar.

A ideia surgiu durante uma conversa em meu grupo de jovens, quando percebi que os links compartilhados pelo WhatsApp ficavam muito extensos, dificultando a organização e a apresentação das mensagens.

A partir dessa necessidade, surgiu a proposta de desenvolver um sistema simples de encurtamento de links.

## Funcionalidades

- Criar links curtos.

- Consultar links curtos pelo código.

- Listar links curtos criados.

- Excluir links curtos.

- Implementar cadastro e gerenciamento de usuários.

- Limitar a criação de links por usuário.

## Arquitetura

O projeto será organizado em camadas, buscando manter uma separação clara de responsabilidades e facilitar a manutenção e a evolução do sistema.

```
src/
├── Domain/
├── Infrastructure/
│   ├── Database/
│   └── Repositories/
├── Application/
│   ├── UserCases/
│   └── Repositories/
└── Http/
    ├── Controllers/
    └── Routes/
```

## Tecnologias

As tecnologias utilizadas serão documentadas conforme o desenvolvimento do projeto.

## Status do projeto

🚧 Em desenvolvimento.

## Objetivo

Além de resolver um problema cotidiano, o projeto tem como objetivo praticar conceitos de desenvolvimento de software, organização de código, arquitetura em camadas e persistência de dados.