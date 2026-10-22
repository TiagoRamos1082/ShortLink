# Routes

## 1\. GET `/{id}`

Obtém a URL original a partir do identificador do link, convertido de Base62 para o ID interno.

### Request

```http
GET /{id}
```

**Parâmetro de rota:**

|Parâmetro|Tipo|Descrição|
|-|-|-|
|`id`|`string`|Identificador público codificado em Base62|

**Exemplo:**

```http
GET /a8Kx2p
```

### Response

**Status:** `200 OK`

```json
{
  "url": "https://novolink.com"
}
```

\---

## 2\. GET `/view/{id}`

Obtém os detalhes de um link encurtado a partir do seu identificador público.

### Request

```http
GET /view/{id}
```

**Exemplo:**

```http
GET /view/a8Kx2p
```

### Response

**Status:** `200 OK`

```json
{
  "linkcurto": "https://seulink.com/a8Kx2p",
  "url": "https://novolink.com"
}
```

\---

## 3\. GET `/view/`

Lista todos os links cadastrados.

### Request

```http
GET /view/
```

Não requer parâmetros.

### Response

**Status:** `200 OK`

```json
\[
  {
    "linkcurto": "https://seulink.com/a8Kx2p",
    "url": "https://novolink.com"
  },
  {
    "linkcurto": "https://seulink.com/b7Lm3q",
    "url": "https://outrolink.com"
  }
]
```

\---

## 4\. DELETE `/{id}`

Exclui um link a partir do seu identificador público.

### Request

```http
DELETE /{id}
```

**Exemplo:**

```http
DELETE /a8Kx2p
```

### Response

**Status:** `204 No Content`

Não retorna conteúdo no corpo da resposta.

\---

## Resumo dos Endpoints

|Método|Endpoint|Status de sucesso|Descrição|
|-|-|-|-|
|`GET`|`/{id}`|`200 OK`|Obtém a URL original|
|`GET`|`/view/{id}`|`200 OK`|Consulta os detalhes de um link|
|`GET`|`/view/`|`200 OK`|Lista os links cadastrados|
|`DELETE`|`/{id}`|`204 No Content`|Exclui um link|

\---

## Regras de identificação

* O banco de dados utiliza `BIGINT` como identificador interno.
* O identificador público é gerado pela conversão do ID para Base62.
* O código Base62 é utilizado nas URLs públicas.
* A conversão deve ser determinística, garantindo que o mesmo ID sempre gere o mesmo código.
* Para consultar ou excluir um link, a aplicação converte o código Base62 para o ID interno correspondente.

### Exemplo de conversão

```text
ID interno (BIGINT): 231451
Código público:      a8Kx2p
URL curta:           https://seulink.com/a8Kx2p
URL original:        https://novolink.com
```

*Os valores de código e URL acima são ilustrativos.*

