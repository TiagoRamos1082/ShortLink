# Use Cases

- `CreateShortLink(string $link): ShortLink`
- `SearchShortLink(string $code): ?ShortLink`
- `ListShortLink(): array`
- `DeleteShortLink(int $id): bool`

# Retornos e Regras

- **CreateShortLink:** Retorna o link curto criado.
- **SearchShortLink:** Retorna um objeto da classe `ShortLink` ou `null` caso não seja encontrado.
- **ListShortLink:** Retorna um array de objetos `ShortLink` ou um array vazio (`[]`) caso não existam registros.
- **DeleteShortLink:** Recebe o ID informado pelo Controller e exclui o registro correspondente, desde que ele exista.
