# Database

## Tabela: `short_links`

- `id`: BIGINT, PRIMARY KEY, AUTO_INCREMENT

- `code`: CHAR(8), UNIQUE, NOT NULL

- `link`: VARCHAR(255), NOT NULL

## Futuramente

### Tabela: `users`

- `id`: BIGINT, PRIMARY KEY, AUTO_INCREMENT

- `name`: VARCHAR(255), NOT NULL

- `password`: VARCHAR(255), NOT NULL

### Alteração futura em `short_links`

Adicionar a coluna `id_user`para relacionar cada link curto ao usuário que o criou.

- `id_user`: BIGINT, FOREIGN KEY referenciando `users(id)`

Essa alteração permitirá identificar quais links pertencem a cada usuário.

## Padrão de nomenclatura

Utilizar o padrão **snake_case** para nomes de tabelas e colunas, com letras minúsculas e palavras separadas por `_`.

Exemplos:

- Tabela: `short_links`

- Tabela: `users`

- Coluna: `user_id`