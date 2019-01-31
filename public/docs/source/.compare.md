---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Bem-vindo a documentação do ReLockersAPI.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#Cacifos management

Endpoint para controlar a APIs dos cacifos
<!-- START_1407c361b7d59f39aae9eaaf2b869b76 -->
## Get Cacifos

Lista todos os cacifos.

> Example request:

```bash
curl -X GET -G "http://localhost/api/cacifos" 
```

```javascript
const url = new URL("http://localhost/api/cacifos");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "numero": 318,
            "temperatura": "7.7",
            "tamanho_id": 1,
            "estado_id": 2,
            "localizacao_id": 3,
            "tamanho": {
                "id": 1,
                "tamanho": "S"
            },
            "estado": {
                "id": 2,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 3,
                "nome": "Brown Vista",
                "lat": "-77.427651",
                "long": "146.845388"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/1",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/1",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/3"
            }
        },
        {
            "id": 2,
            "numero": 230,
            "temperatura": "2.7",
            "tamanho_id": 1,
            "estado_id": 1,
            "localizacao_id": 1,
            "tamanho": {
                "id": 1,
                "tamanho": "S"
            },
            "estado": {
                "id": 1,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 1,
                "nome": "Kenyon Extension",
                "lat": "-46.770013",
                "long": "-39.327016"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/2",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/1",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/1"
            }
        },
        {
            "id": 3,
            "numero": 484,
            "temperatura": "10.1",
            "tamanho_id": 3,
            "estado_id": 1,
            "localizacao_id": 2,
            "tamanho": {
                "id": 3,
                "tamanho": "L"
            },
            "estado": {
                "id": 1,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 2,
                "nome": "Mikayla Keys",
                "lat": "-87.664343",
                "long": "-142.524696"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/3",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/3",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/2"
            }
        },
        {
            "id": 4,
            "numero": 465,
            "temperatura": "6",
            "tamanho_id": 3,
            "estado_id": 2,
            "localizacao_id": 1,
            "tamanho": {
                "id": 3,
                "tamanho": "L"
            },
            "estado": {
                "id": 2,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 1,
                "nome": "Kenyon Extension",
                "lat": "-46.770013",
                "long": "-39.327016"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/4",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/3",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/1"
            }
        },
        {
            "id": 5,
            "numero": 184,
            "temperatura": "11.6",
            "tamanho_id": 1,
            "estado_id": 1,
            "localizacao_id": 5,
            "tamanho": {
                "id": 1,
                "tamanho": "S"
            },
            "estado": {
                "id": 1,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 5,
                "nome": "Jamaal Rapids",
                "lat": "-72.131007",
                "long": "150.981984"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/5",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/1",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/5"
            }
        },
        {
            "id": 6,
            "numero": 480,
            "temperatura": "10.6",
            "tamanho_id": 3,
            "estado_id": 1,
            "localizacao_id": 4,
            "tamanho": {
                "id": 3,
                "tamanho": "L"
            },
            "estado": {
                "id": 1,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 4,
                "nome": "Jayde Plaza",
                "lat": "3.178722",
                "long": "-88.667992"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/6",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/3",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/4"
            }
        },
        {
            "id": 7,
            "numero": 74,
            "temperatura": "2.3",
            "tamanho_id": 2,
            "estado_id": 2,
            "localizacao_id": 1,
            "tamanho": {
                "id": 2,
                "tamanho": "L"
            },
            "estado": {
                "id": 2,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 1,
                "nome": "Kenyon Extension",
                "lat": "-46.770013",
                "long": "-39.327016"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/7",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/2",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/1"
            }
        },
        {
            "id": 8,
            "numero": 255,
            "temperatura": "11.1",
            "tamanho_id": 4,
            "estado_id": 2,
            "localizacao_id": 1,
            "tamanho": {
                "id": 4,
                "tamanho": "M"
            },
            "estado": {
                "id": 2,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 1,
                "nome": "Kenyon Extension",
                "lat": "-46.770013",
                "long": "-39.327016"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/8",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/4",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/1"
            }
        },
        {
            "id": 9,
            "numero": 135,
            "temperatura": "11.2",
            "tamanho_id": 2,
            "estado_id": 2,
            "localizacao_id": 4,
            "tamanho": {
                "id": 2,
                "tamanho": "L"
            },
            "estado": {
                "id": 2,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 4,
                "nome": "Jayde Plaza",
                "lat": "3.178722",
                "long": "-88.667992"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/9",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/2",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/4"
            }
        },
        {
            "id": 10,
            "numero": 56,
            "temperatura": "10.7",
            "tamanho_id": 1,
            "estado_id": 2,
            "localizacao_id": 4,
            "tamanho": {
                "id": 1,
                "tamanho": "S"
            },
            "estado": {
                "id": 2,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 4,
                "nome": "Jayde Plaza",
                "lat": "3.178722",
                "long": "-88.667992"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/10",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/1",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/4"
            }
        },
        {
            "id": 11,
            "numero": 455,
            "temperatura": "7.5",
            "tamanho_id": 4,
            "estado_id": 2,
            "localizacao_id": 4,
            "tamanho": {
                "id": 4,
                "tamanho": "M"
            },
            "estado": {
                "id": 2,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 4,
                "nome": "Jayde Plaza",
                "lat": "3.178722",
                "long": "-88.667992"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/11",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/4",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/4"
            }
        },
        {
            "id": 12,
            "numero": 426,
            "temperatura": "0.7",
            "tamanho_id": 1,
            "estado_id": 1,
            "localizacao_id": 4,
            "tamanho": {
                "id": 1,
                "tamanho": "S"
            },
            "estado": {
                "id": 1,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 4,
                "nome": "Jayde Plaza",
                "lat": "3.178722",
                "long": "-88.667992"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/12",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/1",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/4"
            }
        },
        {
            "id": 13,
            "numero": 260,
            "temperatura": "10.1",
            "tamanho_id": 3,
            "estado_id": 2,
            "localizacao_id": 3,
            "tamanho": {
                "id": 3,
                "tamanho": "L"
            },
            "estado": {
                "id": 2,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 3,
                "nome": "Brown Vista",
                "lat": "-77.427651",
                "long": "146.845388"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/13",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/3",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/3"
            }
        },
        {
            "id": 14,
            "numero": 82,
            "temperatura": "2.9",
            "tamanho_id": 4,
            "estado_id": 2,
            "localizacao_id": 5,
            "tamanho": {
                "id": 4,
                "tamanho": "M"
            },
            "estado": {
                "id": 2,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 5,
                "nome": "Jamaal Rapids",
                "lat": "-72.131007",
                "long": "150.981984"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/14",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/4",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/5"
            }
        },
        {
            "id": 15,
            "numero": 410,
            "temperatura": "2.8",
            "tamanho_id": 2,
            "estado_id": 1,
            "localizacao_id": 5,
            "tamanho": {
                "id": 2,
                "tamanho": "L"
            },
            "estado": {
                "id": 1,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 5,
                "nome": "Jamaal Rapids",
                "lat": "-72.131007",
                "long": "150.981984"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/15",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/2",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/5"
            }
        },
        {
            "id": 16,
            "numero": 343,
            "temperatura": "3.7",
            "tamanho_id": 4,
            "estado_id": 1,
            "localizacao_id": 4,
            "tamanho": {
                "id": 4,
                "tamanho": "M"
            },
            "estado": {
                "id": 1,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 4,
                "nome": "Jayde Plaza",
                "lat": "3.178722",
                "long": "-88.667992"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/16",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/4",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/4"
            }
        },
        {
            "id": 17,
            "numero": 466,
            "temperatura": "9.9",
            "tamanho_id": 3,
            "estado_id": 2,
            "localizacao_id": 2,
            "tamanho": {
                "id": 3,
                "tamanho": "L"
            },
            "estado": {
                "id": 2,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 2,
                "nome": "Mikayla Keys",
                "lat": "-87.664343",
                "long": "-142.524696"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/17",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/3",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/2"
            }
        },
        {
            "id": 18,
            "numero": 406,
            "temperatura": "9.1",
            "tamanho_id": 1,
            "estado_id": 2,
            "localizacao_id": 3,
            "tamanho": {
                "id": 1,
                "tamanho": "S"
            },
            "estado": {
                "id": 2,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 3,
                "nome": "Brown Vista",
                "lat": "-77.427651",
                "long": "146.845388"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/18",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/1",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/3"
            }
        },
        {
            "id": 19,
            "numero": 146,
            "temperatura": "0.6",
            "tamanho_id": 4,
            "estado_id": 2,
            "localizacao_id": 2,
            "tamanho": {
                "id": 4,
                "tamanho": "M"
            },
            "estado": {
                "id": 2,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 2,
                "nome": "Mikayla Keys",
                "lat": "-87.664343",
                "long": "-142.524696"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/19",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/4",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/2"
            }
        },
        {
            "id": 20,
            "numero": 457,
            "temperatura": "8.2",
            "tamanho_id": 2,
            "estado_id": 1,
            "localizacao_id": 1,
            "tamanho": {
                "id": 2,
                "tamanho": "L"
            },
            "estado": {
                "id": 1,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 1,
                "nome": "Kenyon Extension",
                "lat": "-46.770013",
                "long": "-39.327016"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/20",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/2",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/1"
            }
        }
    ],
    "msg": "success",
    "code": 200
}
```

### HTTP Request
`GET api/cacifos`


<!-- END_1407c361b7d59f39aae9eaaf2b869b76 -->

<!-- START_ce745d4812b8c094f4bb33924ab2466a -->
## Post Cacifos

Adiciona um novo cacifos.

> Example request:

```bash
curl -X POST "http://localhost/api/cacifos"     -d "numero"="tHUYhyCB6XhCEg9t" \
    -d "temperatura"="GMfk81E33ulfrOuu" \
    -d "codigo"="nHgT0FpSb1s4ph90" \
    -d "estado_id"="NZZKMcYjZsVBKowC" \
    -d "tamanho_id"="Gc9M9GKbOcQO7Lyt" \
    -d "localizacao_id"="pNFxyaYJqdaDkbfB" 
```

```javascript
const url = new URL("http://localhost/api/cacifos");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "numero": "tHUYhyCB6XhCEg9t",
    "temperatura": "GMfk81E33ulfrOuu",
    "codigo": "nHgT0FpSb1s4ph90",
    "estado_id": "NZZKMcYjZsVBKowC",
    "tamanho_id": "Gc9M9GKbOcQO7Lyt",
    "localizacao_id": "pNFxyaYJqdaDkbfB",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "msg": "Success",
    "code": 201,
    "data": {
        "properties": "cacifoObject"
    }
}
```

### HTTP Request
`POST api/cacifos`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    numero | string |  required  | Número do cacífo.
    temperatura | string |  required  | Temperatura do cacífo.
    codigo | string |  required  | Código do cacífo.
    estado_id | string |  required  | Estado do cacífo(id).
    tamanho_id | string |  required  | Tamanho do cacífo(id).
    localizacao_id | string |  required  | Localização do cacífo(id).

<!-- END_ce745d4812b8c094f4bb33924ab2466a -->

<!-- START_aceda048d2bc5818b4ddd639d6d58fe0 -->
## Get um cacifo.

Mostra um cacifo detalhado.

> Example request:

```bash
curl -X GET -G "http://localhost/api/cacifos/{cacifo}" 
```

```javascript
const url = new URL("http://localhost/api/cacifos/{cacifo}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 1,
        "numero": 318,
        "temperatura": "7.7",
        "codigo": "B5lpA",
        "tamanho_id": 1,
        "estado_id": 2,
        "localizacao_id": 3,
        "tamanho": {
            "id": 1,
            "tamanho": "S"
        },
        "estado": {
            "id": 2,
            "estado": "Disponivel"
        },
        "localizacao": {
            "id": 3,
            "nome": "Brown Vista",
            "lat": "-77.427651",
            "long": "146.845388"
        }
    }
}
```

### HTTP Request
`GET api/cacifos/{cacifo}`


<!-- END_aceda048d2bc5818b4ddd639d6d58fe0 -->

<!-- START_787766e3ce69ed141cfbc9024e5e2f46 -->
## Update Cacifos

Faz update a um cacifos.

> Example request:

```bash
curl -X PUT "http://localhost/api/cacifos/{cacifo}"     -d "numero"="S6U5VFbRrkEnBFJw" \
    -d "temperatura"="p8VBYPYTjVBYfNXa" \
    -d "codigo"="UvmX5R0vZGc5dv1F" \
    -d "estado_id"="QYuUQaKWjQhWXW88" \
    -d "tamanho_id"="cJwro6xP6apNrJfw" \
    -d "localizacao_id"="dzWKH7beZ7YZ4sQL" 
```

```javascript
const url = new URL("http://localhost/api/cacifos/{cacifo}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "numero": "S6U5VFbRrkEnBFJw",
    "temperatura": "p8VBYPYTjVBYfNXa",
    "codigo": "UvmX5R0vZGc5dv1F",
    "estado_id": "QYuUQaKWjQhWXW88",
    "tamanho_id": "cJwro6xP6apNrJfw",
    "localizacao_id": "dzWKH7beZ7YZ4sQL",
})

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "msg": "Success",
    "code": 200,
    "data": {
        "properties": "cacifoObject"
    }
}
```

### HTTP Request
`PUT api/cacifos/{cacifo}`

`PATCH api/cacifos/{cacifo}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    numero | string |  optional  | Número do cacífo.
    temperatura | string |  optional  | Temperatura do cacífo.
    codigo | string |  optional  | Código do cacífo.
    estado_id | string |  optional  | Estado do cacífo(id).
    tamanho_id | string |  optional  | Tamanho do cacífo(id).
    localizacao_id | string |  optional  | Localização do cacífo(id).

<!-- END_787766e3ce69ed141cfbc9024e5e2f46 -->

<!-- START_e5063c9eb32fea8e0810d74a8a728302 -->
## Delete Cacifo.

Apaga um cacifo.

> Example request:

```bash
curl -X DELETE "http://localhost/api/cacifos/{cacifo}" 
```

```javascript
const url = new URL("http://localhost/api/cacifos/{cacifo}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "msg": "Seccess",
    "code": 200
}
```

### HTTP Request
`DELETE api/cacifos/{cacifo}`


<!-- END_e5063c9eb32fea8e0810d74a8a728302 -->

#Clientes management

Endpoint para controlar a APIs dos clientes
<!-- START_4708a91a0309f0ddbadd902f0e0f3767 -->
## Get Clientes

Lista todos os clientes.

> Example request:

```bash
curl -X GET -G "http://localhost/api/clientes" 
```

```javascript
const url = new URL("http://localhost/api/clientes");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "nome": "Rubie Little",
            "email": "aprice@gmail.com",
            "telefone": "1-560-987-8844 x180",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/1"
            }
        },
        {
            "nome": "Caden Bernhard",
            "email": "parker.stanton@hotmail.com",
            "telefone": "(875) 539-8999 x1751",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/2"
            }
        },
        {
            "nome": "Deron Stoltenberg",
            "email": "groob@yahoo.com",
            "telefone": "+1-208-997-3360",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/3"
            }
        },
        {
            "nome": "Mrs. Faye Thiel",
            "email": "rbayer@hotmail.com",
            "telefone": "+1-605-776-3463",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/4"
            }
        },
        {
            "nome": "Abdullah Bailey",
            "email": "thurman26@hotmail.com",
            "telefone": "742-338-7811",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/5"
            }
        },
        {
            "nome": "Mr. Anthony Spencer IV",
            "email": "nhudson@yahoo.com",
            "telefone": "212-372-5377 x778",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/6"
            }
        },
        {
            "nome": "Gordon Conn",
            "email": "esteban52@hotmail.com",
            "telefone": "1-681-828-5047 x137",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/7"
            }
        },
        {
            "nome": "Delphine Hermann",
            "email": "hoppe.vilma@gmail.com",
            "telefone": "(483) 418-4267",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/8"
            }
        },
        {
            "nome": "Moshe Brekke DVM",
            "email": "boyle.freeman@yahoo.com",
            "telefone": "898-560-9194 x818",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/9"
            }
        },
        {
            "nome": "Bertram Ward Sr.",
            "email": "mariana.koepp@hotmail.com",
            "telefone": "754-604-7017 x221",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/10"
            }
        }
    ]
}
```

### HTTP Request
`GET api/clientes`


<!-- END_4708a91a0309f0ddbadd902f0e0f3767 -->

<!-- START_c7130feb7007e7ce36b8fbc7584cbe58 -->
## Post Cliente

Adiciona um novo cliente.

> Example request:

```bash
curl -X POST "http://localhost/api/clientes"     -d "nome"="QKmY5XUQdreLk2s4" \
    -d "email"="pbQHuRTyXLXt6qjX" \
    -d "telefone"="z7dSeNbKspRZlwF9" 
```

```javascript
const url = new URL("http://localhost/api/clientes");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "QKmY5XUQdreLk2s4",
    "email": "pbQHuRTyXLXt6qjX",
    "telefone": "z7dSeNbKspRZlwF9",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "msg": "Success",
    "code": 201,
    "data": {
        "properties": "clienteObject"
    }
}
```

### HTTP Request
`POST api/clientes`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    nome | string |  required  | Número do cacífo.
    email | string |  required  | Temperatura do cacífo.
    telefone | string |  required  | Código do cacífo.

<!-- END_c7130feb7007e7ce36b8fbc7584cbe58 -->

<!-- START_d42edddc5c01411c3dddf01adb8a2f79 -->
## Get um cliente.

Mostra um cliente detalhado.

> Example request:

```bash
curl -X GET -G "http://localhost/api/clientes/{cliente}" 
```

```javascript
const url = new URL("http://localhost/api/clientes/{cliente}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 1,
        "nome": "Rubie Little",
        "email": "aprice@gmail.com",
        "telefone": "1-560-987-8844 x180"
    }
}
```

### HTTP Request
`GET api/clientes/{cliente}`


<!-- END_d42edddc5c01411c3dddf01adb8a2f79 -->

<!-- START_84238590a7a12d110fd20345273abb25 -->
## Update Cliente.

Atualiza um cliente.

> Example request:

```bash
curl -X PUT "http://localhost/api/clientes/{cliente}"     -d "nome"="wNFyEu4WFJFtIMVs" \
    -d "email"="Uech15yOefXggSn6" \
    -d "telefone"="Fy20zVXeXJraUCQm" 
```

```javascript
const url = new URL("http://localhost/api/clientes/{cliente}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "wNFyEu4WFJFtIMVs",
    "email": "Uech15yOefXggSn6",
    "telefone": "Fy20zVXeXJraUCQm",
})

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "msg": "Success",
    "code": 200,
    "data": {
        "properties": "clienteObject"
    }
}
```

### HTTP Request
`PUT api/clientes/{cliente}`

`PATCH api/clientes/{cliente}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    nome | string |  optional  | Nome do cliente.
    email | string |  optional  | E-mail do cliente.
    telefone | string |  optional  | Telefone do cliente.

<!-- END_84238590a7a12d110fd20345273abb25 -->

<!-- START_6864d4bf53f3add54af093e7fd2e8864 -->
## Delete Cleinte

Apaga um cliente.

> Example request:

```bash
curl -X DELETE "http://localhost/api/clientes/{cliente}" 
```

```javascript
const url = new URL("http://localhost/api/clientes/{cliente}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "msg": "Seccess",
    "code": 200
}
```

### HTTP Request
`DELETE api/clientes/{cliente}`


<!-- END_6864d4bf53f3add54af093e7fd2e8864 -->

#Encomendas management

Endpoint para controlar a APIs das encomendas
<!-- START_80cdd4990301b691ea1362dc392185fe -->
## Get Encomendas of a cliente

Devolve as encomendas de um cliente.

> Example request:

```bash
curl -X GET -G "http://localhost/api/clientes/{cliente}/encomendas" 
```

```javascript
const url = new URL("http://localhost/api/clientes/{cliente}/encomendas");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "data_estimada": "1996-12-13 15:51:51",
            "data_de_entrega": "1989-03-20 21:58:35",
            "data_de_levantamento": "2004-02-26 11:02:24",
            "data_de_entrada_no_sistema": "2007-03-19 12:08:53",
            "data_de_entrega_pretendida": "2004-11-14 21:15:33",
            "tempo_limite_de_levantamento": "1",
            "temperatura": "0.2",
            "observacoes": "How brave they'll all think me at home! Why, I do it again and again.' 'You are all pardoned.' 'Come, THAT'S a good many little girls of her sharp little chin into Alice's shoulder as she did not.",
            "tamanho": "M",
            "localizacao": "Ratke Island",
            "cliente_id": 1,
            "cacifo_id": 18,
            "cacifo": {
                "id": 18,
                "numero": 406,
                "temperatura": "9.1",
                "codigo": "iHVDXi",
                "tamanho_id": 1,
                "estado_id": 2,
                "localizacao_id": 3,
                "tamanho": {
                    "id": 1,
                    "tamanho": "S"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 3,
                    "nome": "Brown Vista",
                    "lat": "-77.427651",
                    "long": "146.845388"
                }
            },
            "cliente": {
                "id": 1,
                "nome": "Rubie Little",
                "email": "aprice@gmail.com",
                "telefone": "1-560-987-8844 x180"
            },
            "href": {
                "cliente": "http:\/\/localhost\/api\/clientes\/1",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/18"
            }
        },
        {
            "id": 19,
            "data_estimada": "2017-12-12 07:08:11",
            "data_de_entrega": "1998-06-10 07:24:50",
            "data_de_levantamento": "1992-04-26 18:20:35",
            "data_de_entrada_no_sistema": "1990-09-01 09:37:19",
            "data_de_entrega_pretendida": "1992-12-21 11:39:41",
            "tempo_limite_de_levantamento": "3",
            "temperatura": "8.6",
            "observacoes": "I had not long to doubt, for the first figure,' said the youth, 'as I mentioned before, And have grown most uncommonly fat; Yet you finished the guinea-pigs!' thought Alice. 'I don't even know what.",
            "tamanho": "S",
            "localizacao": "Schamberger Forges",
            "cliente_id": 1,
            "cacifo_id": 13,
            "cacifo": {
                "id": 13,
                "numero": 260,
                "temperatura": "10.1",
                "codigo": "eFf2N43aO",
                "tamanho_id": 3,
                "estado_id": 2,
                "localizacao_id": 3,
                "tamanho": {
                    "id": 3,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 3,
                    "nome": "Brown Vista",
                    "lat": "-77.427651",
                    "long": "146.845388"
                }
            },
            "cliente": {
                "id": 1,
                "nome": "Rubie Little",
                "email": "aprice@gmail.com",
                "telefone": "1-560-987-8844 x180"
            },
            "href": {
                "cliente": "http:\/\/localhost\/api\/clientes\/1",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/13"
            }
        },
        {
            "id": 25,
            "data_estimada": "1971-06-04 02:32:22",
            "data_de_entrega": "1974-04-01 03:41:29",
            "data_de_levantamento": "1990-06-21 21:42:07",
            "data_de_entrada_no_sistema": "1998-06-02 06:25:02",
            "data_de_entrega_pretendida": "1991-02-05 20:26:31",
            "tempo_limite_de_levantamento": "2",
            "temperatura": "1.5",
            "observacoes": "She took down a large pool all round her, about the temper of your flamingo. Shall I try the first verse,' said the Footman, 'and that for the Dormouse,' thought Alice; 'only, as it's asleep, I.",
            "tamanho": "XL",
            "localizacao": "Willis Vista",
            "cliente_id": 1,
            "cacifo_id": 3,
            "cacifo": {
                "id": 3,
                "numero": 484,
                "temperatura": "10.1",
                "codigo": "_vAxsq",
                "tamanho_id": 3,
                "estado_id": 1,
                "localizacao_id": 2,
                "tamanho": {
                    "id": 3,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 1,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 2,
                    "nome": "Mikayla Keys",
                    "lat": "-87.664343",
                    "long": "-142.524696"
                }
            },
            "cliente": {
                "id": 1,
                "nome": "Rubie Little",
                "email": "aprice@gmail.com",
                "telefone": "1-560-987-8844 x180"
            },
            "href": {
                "cliente": "http:\/\/localhost\/api\/clientes\/1",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/3"
            }
        }
    ]
}
```

### HTTP Request
`GET api/clientes/{cliente}/encomendas`


<!-- END_80cdd4990301b691ea1362dc392185fe -->

<!-- START_9103cfbc8321cf197d1d8d4f7fbedeb8 -->
## Get Encomendas

Lista todas as encomendas.

> Example request:

```bash
curl -X GET -G "http://localhost/api/encomendas" 
```

```javascript
const url = new URL("http://localhost/api/encomendas");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
[
    {
        "id": 1,
        "data_estimada": "1996-12-13 15:51:51",
        "data_de_entrada_no_sistema": "2007-03-19 12:08:53",
        "data_de_entrega_pretendida": "2004-11-14 21:15:33",
        "tempo_limite_de_levantamento": "1",
        "data_de_entrega": "1989-03-20 21:58:35",
        "data_de_levantamento": "2004-02-26 11:02:24",
        "temperatura": 0.2,
        "observacoes": "How brave they'll all think me at home! Why, I do it again and again.' 'You are all pardoned.' 'Come, THAT'S a good many little girls of her sharp little chin into Alice's shoulder as she did not.",
        "tamanho": "M",
        "localizacao": "Ratke Island",
        "cliente_id": 1,
        "cacifo_id": 18,
        "users": [
            {
                "id": 6,
                "nome": "Mr. Buster Reinger Sr.",
                "email": "cleo.kling@yahoo.com",
                "telefone": "+1 (330) 893-9230",
                "data_nascimento": "1985-09-05",
                "tipo_id": 2,
                "supervisor_id": 1,
                "created_at": "2019-01-31 15:48:58",
                "updated_at": "2019-01-31 15:48:58",
                "deleted_at": null,
                "pivot": {
                    "encomenda_id": 1,
                    "user_id": 6
                }
            }
        ],
        "cacifo": {
            "id": 18,
            "numero": 406,
            "temperatura": 9.1,
            "codigo": "iHVDXi",
            "tamanho_id": 1,
            "estado_id": 2,
            "localizacao_id": 3,
            "updated_at": "2019-01-31 15:48:58"
        },
        "cliente": {
            "id": 1,
            "nome": "Rubie Little",
            "email": "aprice@gmail.com",
            "telefone": "1-560-987-8844 x180",
            "updated_at": "2019-01-31 15:48:58"
        }
    },
    {
        "id": 2,
        "data_estimada": "1973-01-27 03:12:33",
        "data_de_entrada_no_sistema": "1995-11-02 22:34:52",
        "data_de_entrega_pretendida": "1987-12-31 01:44:09",
        "tempo_limite_de_levantamento": "3",
        "data_de_entrega": "2000-02-19 09:49:14",
        "data_de_levantamento": "1972-09-05 15:20:22",
        "temperatura": 10,
        "observacoes": "Queen. 'Well, I shan't go, at any rate it would be only rustling in the other. In the very tones of her knowledge. 'Just think of nothing better to say which), and they lived at the Queen, who had.",
        "tamanho": "M",
        "localizacao": "Pfeffer Wall",
        "cliente_id": 5,
        "cacifo_id": 1,
        "users": [
            {
                "id": 5,
                "nome": "Marilyne Gislason",
                "email": "istrosin@yahoo.com",
                "telefone": "+1-461-267-4385",
                "data_nascimento": "2012-02-02",
                "tipo_id": 1,
                "supervisor_id": 1,
                "created_at": "2019-01-31 15:48:58",
                "updated_at": "2019-01-31 15:48:58",
                "deleted_at": null,
                "pivot": {
                    "encomenda_id": 2,
                    "user_id": 5
                }
            }
        ],
        "cacifo": {
            "id": 1,
            "numero": 318,
            "temperatura": 7.7,
            "codigo": "B5lpA",
            "tamanho_id": 1,
            "estado_id": 2,
            "localizacao_id": 3,
            "updated_at": "2019-01-31 15:48:58"
        },
        "cliente": {
            "id": 5,
            "nome": "Abdullah Bailey",
            "email": "thurman26@hotmail.com",
            "telefone": "742-338-7811",
            "updated_at": "2019-01-31 15:48:58"
        }
    },
    {
        "id": 3,
        "data_estimada": "1976-06-10 13:18:17",
        "data_de_entrada_no_sistema": "1976-11-26 10:44:42",
        "data_de_entrega_pretendida": "1997-10-13 03:53:57",
        "tempo_limite_de_levantamento": "2",
        "data_de_entrega": "1986-04-20 21:44:10",
        "data_de_levantamento": "2003-10-04 01:54:19",
        "temperatura": 2,
        "observacoes": "Lizard, who seemed to be in a confused way, 'Prizes! Prizes!' Alice had begun to dream that she could not swim. He sent them word I had not noticed before, and she went on: '--that begins with an.",
        "tamanho": "M",
        "localizacao": "Boehm Circle",
        "cliente_id": 7,
        "cacifo_id": 14,
        "users": [
            {
                "id": 1,
                "nome": "Mr. Enid Pollich",
                "email": "erika68@hotmail.com",
                "telefone": "(871) 285-4194",
                "data_nascimento": "1988-05-05",
                "tipo_id": 2,
                "supervisor_id": 1,
                "created_at": "2019-01-31 15:48:58",
                "updated_at": "2019-01-31 15:48:58",
                "deleted_at": null,
                "pivot": {
                    "encomenda_id": 3,
                    "user_id": 1
                }
            }
        ],
        "cacifo": {
            "id": 14,
            "numero": 82,
            "temperatura": 2.9,
            "codigo": "IjCzm4Ti",
            "tamanho_id": 4,
            "estado_id": 2,
            "localizacao_id": 5,
            "updated_at": "2019-01-31 15:48:58"
        },
        "cliente": {
            "id": 7,
            "nome": "Gordon Conn",
            "email": "esteban52@hotmail.com",
            "telefone": "1-681-828-5047 x137",
            "updated_at": "2019-01-31 15:48:58"
        }
    },
    {
        "id": 4,
        "data_estimada": "1977-01-06 11:21:27",
        "data_de_entrada_no_sistema": "1996-01-14 02:04:12",
        "data_de_entrega_pretendida": "1990-06-10 22:34:40",
        "tempo_limite_de_levantamento": "3",
        "data_de_entrega": "2004-03-04 00:54:21",
        "data_de_levantamento": "1980-06-07 20:52:49",
        "temperatura": 9.1,
        "observacoes": "Duchess, 'and that's why. Pig!' She said it to the Gryphon. 'How the creatures argue. It's enough to get out of a muchness?' 'Really, now you ask me,' said Alice, 'and why it is you hate--C and D,'.",
        "tamanho": "XL",
        "localizacao": "Rempel Junctions",
        "cliente_id": 6,
        "cacifo_id": 20,
        "users": [
            {
                "id": 1,
                "nome": "Mr. Enid Pollich",
                "email": "erika68@hotmail.com",
                "telefone": "(871) 285-4194",
                "data_nascimento": "1988-05-05",
                "tipo_id": 2,
                "supervisor_id": 1,
                "created_at": "2019-01-31 15:48:58",
                "updated_at": "2019-01-31 15:48:58",
                "deleted_at": null,
                "pivot": {
                    "encomenda_id": 4,
                    "user_id": 1
                }
            }
        ],
        "cacifo": {
            "id": 20,
            "numero": 457,
            "temperatura": 8.2,
            "codigo": "ObNNe",
            "tamanho_id": 2,
            "estado_id": 1,
            "localizacao_id": 1,
            "updated_at": "2019-01-31 15:48:58"
        },
        "cliente": {
            "id": 6,
            "nome": "Mr. Anthony Spencer IV",
            "email": "nhudson@yahoo.com",
            "telefone": "212-372-5377 x778",
            "updated_at": "2019-01-31 15:48:58"
        }
    },
    {
        "id": 5,
        "data_estimada": "1977-12-24 09:24:39",
        "data_de_entrada_no_sistema": "2009-03-04 19:36:33",
        "data_de_entrega_pretendida": "2018-02-02 01:27:01",
        "tempo_limite_de_levantamento": "3",
        "data_de_entrega": "1977-04-27 10:53:51",
        "data_de_levantamento": "1974-06-13 10:01:54",
        "temperatura": 10.2,
        "observacoes": "Dodo, pointing to the shore, and then I'll tell him--it was for bringing the cook had disappeared. 'Never mind!' said the Rabbit coming to look over their shoulders, that all the time at the.",
        "tamanho": "M",
        "localizacao": "Rory Green",
        "cliente_id": 6,
        "cacifo_id": 20,
        "users": [
            {
                "id": 6,
                "nome": "Mr. Buster Reinger Sr.",
                "email": "cleo.kling@yahoo.com",
                "telefone": "+1 (330) 893-9230",
                "data_nascimento": "1985-09-05",
                "tipo_id": 2,
                "supervisor_id": 1,
                "created_at": "2019-01-31 15:48:58",
                "updated_at": "2019-01-31 15:48:58",
                "deleted_at": null,
                "pivot": {
                    "encomenda_id": 5,
                    "user_id": 6
                }
            }
        ],
        "cacifo": {
            "id": 20,
            "numero": 457,
            "temperatura": 8.2,
            "codigo": "ObNNe",
            "tamanho_id": 2,
            "estado_id": 1,
            "localizacao_id": 1,
            "updated_at": "2019-01-31 15:48:58"
        },
        "cliente": {
            "id": 6,
            "nome": "Mr. Anthony Spencer IV",
            "email": "nhudson@yahoo.com",
            "telefone": "212-372-5377 x778",
            "updated_at": "2019-01-31 15:48:58"
        }
    },
    {
        "id": 6,
        "data_estimada": "1982-02-21 03:40:37",
        "data_de_entrada_no_sistema": "1973-07-24 11:09:25",
        "data_de_entrega_pretendida": "1975-03-31 11:56:02",
        "tempo_limite_de_levantamento": "2",
        "data_de_entrega": "2018-04-28 07:58:25",
        "data_de_levantamento": "1980-08-04 04:42:58",
        "temperatura": 4.8,
        "observacoes": "White Rabbit read:-- 'They told me he was obliged to say 'creatures,' you see, because some of the country is, you ARE a simpleton.' Alice did not answer, so Alice went on, '--likely to win, that.",
        "tamanho": "XL",
        "localizacao": "Jones Shoals",
        "cliente_id": 6,
        "cacifo_id": 11,
        "users": [
            {
                "id": 2,
                "nome": "Stacy Koelpin",
                "email": "hiram.effertz@yahoo.com",
                "telefone": "(874) 921-0276 x13997",
                "data_nascimento": "1978-10-29",
                "tipo_id": 1,
                "supervisor_id": 1,
                "created_at": "2019-01-31 15:48:58",
                "updated_at": "2019-01-31 15:48:58",
                "deleted_at": null,
                "pivot": {
                    "encomenda_id": 6,
                    "user_id": 2
                }
            }
        ],
        "cacifo": {
            "id": 11,
            "numero": 455,
            "temperatura": 7.5,
            "codigo": "9C3Ben-",
            "tamanho_id": 4,
            "estado_id": 2,
            "localizacao_id": 4,
            "updated_at": "2019-01-31 15:48:58"
        },
        "cliente": {
            "id": 6,
            "nome": "Mr. Anthony Spencer IV",
            "email": "nhudson@yahoo.com",
            "telefone": "212-372-5377 x778",
            "updated_at": "2019-01-31 15:48:58"
        }
    },
    {
        "id": 7,
        "data_estimada": "1997-05-29 18:25:19",
        "data_de_entrada_no_sistema": "2001-07-08 15:23:17",
        "data_de_entrega_pretendida": "1985-04-05 02:51:02",
        "tempo_limite_de_levantamento": "2",
        "data_de_entrega": "2001-04-08 08:22:38",
        "data_de_levantamento": "1981-10-24 06:39:18",
        "temperatura": 1.1,
        "observacoes": "Wonderland, though she felt a little faster?\" said a whiting to a day-school, too,' said Alice; 'it's laid for a minute or two. 'They couldn't have wanted it much,' said the Mock Turtle repeated.",
        "tamanho": "S",
        "localizacao": "Schulist Islands",
        "cliente_id": 6,
        "cacifo_id": 3,
        "users": [
            {
                "id": 5,
                "nome": "Marilyne Gislason",
                "email": "istrosin@yahoo.com",
                "telefone": "+1-461-267-4385",
                "data_nascimento": "2012-02-02",
                "tipo_id": 1,
                "supervisor_id": 1,
                "created_at": "2019-01-31 15:48:58",
                "updated_at": "2019-01-31 15:48:58",
                "deleted_at": null,
                "pivot": {
                    "encomenda_id": 7,
                    "user_id": 5
                }
            }
        ],
        "cacifo": {
            "id": 3,
            "numero": 484,
            "temperatura": 10.1,
            "codigo": "_vAxsq",
            "tamanho_id": 3,
            "estado_id": 1,
            "localizacao_id": 2,
            "updated_at": "2019-01-31 15:48:58"
        },
        "cliente": {
            "id": 6,
            "nome": "Mr. Anthony Spencer IV",
            "email": "nhudson@yahoo.com",
            "telefone": "212-372-5377 x778",
            "updated_at": "2019-01-31 15:48:58"
        }
    },
    {
        "id": 8,
        "data_estimada": "1976-07-21 00:19:28",
        "data_de_entrada_no_sistema": "1981-05-20 14:50:26",
        "data_de_entrega_pretendida": "1992-01-01 03:27:50",
        "tempo_limite_de_levantamento": "4",
        "data_de_entrega": "1991-08-17 16:22:31",
        "data_de_levantamento": "2007-10-31 16:40:23",
        "temperatura": 3.7,
        "observacoes": "Tortoise, if he would not join the dance? Will you, won't you join the dance? Will you, won't you, will you, won't you join the dance. Would not, could not, could not, would not, could not, would.",
        "tamanho": "S",
        "localizacao": "Champlin Rue",
        "cliente_id": 2,
        "cacifo_id": 5,
        "users": [
            {
                "id": 8,
                "nome": "Joanne Konopelski DVM",
                "email": "ressie.greenfelder@hotmail.com",
                "telefone": "1-717-754-0260",
                "data_nascimento": "1971-12-08",
                "tipo_id": 1,
                "supervisor_id": 1,
                "created_at": "2019-01-31 15:48:58",
                "updated_at": "2019-01-31 15:48:58",
                "deleted_at": null,
                "pivot": {
                    "encomenda_id": 8,
                    "user_id": 8
                }
            }
        ],
        "cacifo": {
            "id": 5,
            "numero": 184,
            "temperatura": 11.6,
            "codigo": "hiHIC2C",
            "tamanho_id": 1,
            "estado_id": 1,
            "localizacao_id": 5,
            "updated_at": "2019-01-31 15:48:58"
        },
        "cliente": {
            "id": 2,
            "nome": "Caden Bernhard",
            "email": "parker.stanton@hotmail.com",
            "telefone": "(875) 539-8999 x1751",
            "updated_at": "2019-01-31 15:48:58"
        }
    },
    {
        "id": 9,
        "data_estimada": "1985-08-14 22:01:04",
        "data_de_entrada_no_sistema": "2009-08-06 17:57:46",
        "data_de_entrega_pretendida": "1973-12-07 14:56:14",
        "tempo_limite_de_levantamento": "3",
        "data_de_entrega": "2003-06-27 19:54:13",
        "data_de_levantamento": "1987-02-15 02:37:09",
        "temperatura": 10.7,
        "observacoes": "The long grass rustled at her as she added, 'and the moral of that is--\"The more there is of yours.\"' 'Oh, I know!' exclaimed Alice, who always took a minute or two, she made it out to be told so.",
        "tamanho": "S",
        "localizacao": "Travis Crest",
        "cliente_id": 6,
        "cacifo_id": 8,
        "users": [
            {
                "id": 6,
                "nome": "Mr. Buster Reinger Sr.",
                "email": "cleo.kling@yahoo.com",
                "telefone": "+1 (330) 893-9230",
                "data_nascimento": "1985-09-05",
                "tipo_id": 2,
                "supervisor_id": 1,
                "created_at": "2019-01-31 15:48:58",
                "updated_at": "2019-01-31 15:48:58",
                "deleted_at": null,
                "pivot": {
                    "encomenda_id": 9,
                    "user_id": 6
                }
            }
        ],
        "cacifo": {
            "id": 8,
            "numero": 255,
            "temperatura": 11.1,
            "codigo": "xDI3jOJ",
            "tamanho_id": 4,
            "estado_id": 2,
            "localizacao_id": 1,
            "updated_at": "2019-01-31 15:48:58"
        },
        "cliente": {
            "id": 6,
            "nome": "Mr. Anthony Spencer IV",
            "email": "nhudson@yahoo.com",
            "telefone": "212-372-5377 x778",
            "updated_at": "2019-01-31 15:48:58"
        }
    },
    {
        "id": 10,
        "data_estimada": "1985-07-27 08:35:28",
        "data_de_entrada_no_sistema": "2015-08-31 23:41:50",
        "data_de_entrega_pretendida": "1998-12-28 19:22:54",
        "tempo_limite_de_levantamento": "3",
        "data_de_entrega": "1974-03-25 22:27:56",
        "data_de_levantamento": "1987-02-11 06:19:57",
        "temperatura": 7.6,
        "observacoes": "I to do it.' (And, as you can--' 'Swim after them!' screamed the Gryphon. 'It's all about as it was YOUR table,' said Alice; 'that's not at all fairly,' Alice began, in a hurried nervous manner.",
        "tamanho": "M",
        "localizacao": "Novella Junctions",
        "cliente_id": 7,
        "cacifo_id": 14,
        "users": [
            {
                "id": 5,
                "nome": "Marilyne Gislason",
                "email": "istrosin@yahoo.com",
                "telefone": "+1-461-267-4385",
                "data_nascimento": "2012-02-02",
                "tipo_id": 1,
                "supervisor_id": 1,
                "created_at": "2019-01-31 15:48:58",
                "updated_at": "2019-01-31 15:48:58",
                "deleted_at": null,
                "pivot": {
                    "encomenda_id": 10,
                    "user_id": 5
                }
            }
        ],
        "cacifo": {
            "id": 14,
            "numero": 82,
            "temperatura": 2.9,
            "codigo": "IjCzm4Ti",
            "tamanho_id": 4,
            "estado_id": 2,
            "localizacao_id": 5,
            "updated_at": "2019-01-31 15:48:58"
        },
        "cliente": {
            "id": 7,
            "nome": "Gordon Conn",
            "email": "esteban52@hotmail.com",
            "telefone": "1-681-828-5047 x137",
            "updated_at": "2019-01-31 15:48:58"
        }
    },
    {
        "id": 11,
        "data_estimada": "1988-07-14 11:03:39",
        "data_de_entrada_no_sistema": "1977-01-17 21:47:43",
        "data_de_entrega_pretendida": "1981-09-30 05:34:19",
        "tempo_limite_de_levantamento": "1",
        "data_de_entrega": "1982-05-17 12:56:02",
        "data_de_levantamento": "1992-12-07 00:02:50",
        "temperatura": 10.9,
        "observacoes": "Alice; 'but when you have of putting things!' 'It's a Cheshire cat,' said the Caterpillar. 'Is that the pebbles were all turning into little cakes as they used to say.' 'So he did, so he did,' said.",
        "tamanho": "L",
        "localizacao": "Terry Camp",
        "cliente_id": 6,
        "cacifo_id": 4,
        "users": [
            {
                "id": 6,
                "nome": "Mr. Buster Reinger Sr.",
                "email": "cleo.kling@yahoo.com",
                "telefone": "+1 (330) 893-9230",
                "data_nascimento": "1985-09-05",
                "tipo_id": 2,
                "supervisor_id": 1,
                "created_at": "2019-01-31 15:48:58",
                "updated_at": "2019-01-31 15:48:58",
                "deleted_at": null,
                "pivot": {
                    "encomenda_id": 11,
                    "user_id": 6
                }
            }
        ],
        "cacifo": {
            "id": 4,
            "numero": 465,
            "temperatura": 6,
            "codigo": "7m-LwaEevv",
            "tamanho_id": 3,
            "estado_id": 2,
            "localizacao_id": 1,
            "updated_at": "2019-01-31 15:48:58"
        },
        "cliente": {
            "id": 6,
            "nome": "Mr. Anthony Spencer IV",
            "email": "nhudson@yahoo.com",
            "telefone": "212-372-5377 x778",
            "updated_at": "2019-01-31 15:48:58"
        }
    },
    {
        "id": 12,
        "data_estimada": "1986-06-05 11:02:46",
        "data_de_entrada_no_sistema": "1994-09-29 00:00:51",
        "data_de_entrega_pretendida": "1975-10-25 16:46:24",
        "tempo_limite_de_levantamento": "1",
        "data_de_entrega": "1994-08-31 05:41:30",
        "data_de_levantamento": "1988-12-23 01:17:55",
        "temperatura": 0.7,
        "observacoes": "Mock Turtle. 'Seals, turtles, salmon, and so on.' 'What a pity it wouldn't stay!' sighed the Lory, with a melancholy tone: 'it doesn't seem to be\"--or if you'd rather not.' 'We indeed!' cried the.",
        "tamanho": "XL",
        "localizacao": "Towne Light",
        "cliente_id": 3,
        "cacifo_id": 9,
        "users": [
            {
                "id": 4,
                "nome": "Carson Simonis MD",
                "email": "heidenreich.cyril@gmail.com",
                "telefone": "534.687.5687 x270",
                "data_nascimento": "2016-02-04",
                "tipo_id": 2,
                "supervisor_id": 1,
                "created_at": "2019-01-31 15:48:58",
                "updated_at": "2019-01-31 15:48:58",
                "deleted_at": null,
                "pivot": {
                    "encomenda_id": 12,
                    "user_id": 4
                }
            }
        ],
        "cacifo": {
            "id": 9,
            "numero": 135,
            "temperatura": 11.2,
            "codigo": "epgeiO-L",
            "tamanho_id": 2,
            "estado_id": 2,
            "localizacao_id": 4,
            "updated_at": "2019-01-31 15:48:58"
        },
        "cliente": {
            "id": 3,
            "nome": "Deron Stoltenberg",
            "email": "groob@yahoo.com",
            "telefone": "+1-208-997-3360",
            "updated_at": "2019-01-31 15:48:58"
        }
    },
    {
        "id": 13,
        "data_estimada": "1981-02-10 12:12:07",
        "data_de_entrada_no_sistema": "2016-09-29 09:28:48",
        "data_de_entrega_pretendida": "2009-12-19 13:50:03",
        "tempo_limite_de_levantamento": "3",
        "data_de_entrega": "1985-11-05 14:41:24",
        "data_de_levantamento": "1998-01-04 21:26:54",
        "temperatura": 3.6,
        "observacoes": "IS a long breath, and till the Pigeon in a moment: she looked back once or twice, and shook itself. Then it got down off the top of its voice. 'Back to land again, and looking anxiously about her.",
        "tamanho": "XL",
        "localizacao": "Erich Hills",
        "cliente_id": 4,
        "cacifo_id": 7,
        "users": [
            {
                "id": 7,
                "nome": "Dedric Trantow",
                "email": "clemmie.herman@gmail.com",
                "telefone": "1-903-417-1344 x0545",
                "data_nascimento": "2017-11-08",
                "tipo_id": 1,
                "supervisor_id": 1,
                "created_at": "2019-01-31 15:48:58",
                "updated_at": "2019-01-31 15:48:58",
                "deleted_at": null,
                "pivot": {
                    "encomenda_id": 13,
                    "user_id": 7
                }
            }
        ],
        "cacifo": {
            "id": 7,
            "numero": 74,
            "temperatura": 2.3,
            "codigo": "eAWuOa",
            "tamanho_id": 2,
            "estado_id": 2,
            "localizacao_id": 1,
            "updated_at": "2019-01-31 15:48:58"
        },
        "cliente": {
            "id": 4,
            "nome": "Mrs. Faye Thiel",
            "email": "rbayer@hotmail.com",
            "telefone": "+1-605-776-3463",
            "updated_at": "2019-01-31 15:48:58"
        }
    },
    {
        "id": 14,
        "data_estimada": "1971-06-01 09:18:30",
        "data_de_entrada_no_sistema": "1974-06-27 08:42:30",
        "data_de_entrega_pretendida": "1984-09-18 02:50:22",
        "tempo_limite_de_levantamento": "2",
        "data_de_entrega": "2004-10-26 16:12:36",
        "data_de_levantamento": "2010-08-18 21:04:28",
        "temperatura": 5.2,
        "observacoes": "Dormouse shall!' they both sat silent for a great deal to ME,' said Alice indignantly. 'Ah! then yours wasn't a really good school,' said the Mock Turtle, 'they--you've seen them, of course?' 'Yes,'.",
        "tamanho": "XL",
        "localizacao": "VonRueden Shores",
        "cliente_id": 7,
        "cacifo_id": 18,
        "users": [
            {
                "id": 3,
                "nome": "Maude O'Reilly",
                "email": "franz.predovic@gmail.com",
                "telefone": "1-925-324-0336 x72851",
                "data_nascimento": "2000-08-29",
                "tipo_id": 2,
                "supervisor_id": 1,
                "created_at": "2019-01-31 15:48:58",
                "updated_at": "2019-01-31 15:48:58",
                "deleted_at": null,
                "pivot": {
                    "encomenda_id": 14,
                    "user_id": 3
                }
            }
        ],
        "cacifo": {
            "id": 18,
            "numero": 406,
            "temperatura": 9.1,
            "codigo": "iHVDXi",
            "tamanho_id": 1,
            "estado_id": 2,
            "localizacao_id": 3,
            "updated_at": "2019-01-31 15:48:58"
        },
        "cliente": {
            "id": 7,
            "nome": "Gordon Conn",
            "email": "esteban52@hotmail.com",
            "telefone": "1-681-828-5047 x137",
            "updated_at": "2019-01-31 15:48:58"
        }
    },
    {
        "id": 15,
        "data_estimada": "2006-02-21 15:14:53",
        "data_de_entrada_no_sistema": "1986-05-28 20:36:23",
        "data_de_entrega_pretendida": "1991-03-24 03:57:52",
        "tempo_limite_de_levantamento": "1",
        "data_de_entrega": "1988-10-19 12:18:59",
        "data_de_levantamento": "2007-06-08 01:12:43",
        "temperatura": 10.3,
        "observacoes": "Please, Ma'am, is this New Zealand or Australia?' (and she tried another question. 'What sort of present!' thought Alice. 'Now we shall get on better.' 'I'd rather finish my tea,' said the Mock.",
        "tamanho": "L",
        "localizacao": "Eichmann Road",
        "cliente_id": 7,
        "cacifo_id": 13,
        "users": [
            {
                "id": 5,
                "nome": "Marilyne Gislason",
                "email": "istrosin@yahoo.com",
                "telefone": "+1-461-267-4385",
                "data_nascimento": "2012-02-02",
                "tipo_id": 1,
                "supervisor_id": 1,
                "created_at": "2019-01-31 15:48:58",
                "updated_at": "2019-01-31 15:48:58",
                "deleted_at": null,
                "pivot": {
                    "encomenda_id": 15,
                    "user_id": 5
                }
            }
        ],
        "cacifo": {
            "id": 13,
            "numero": 260,
            "temperatura": 10.1,
            "codigo": "eFf2N43aO",
            "tamanho_id": 3,
            "estado_id": 2,
            "localizacao_id": 3,
            "updated_at": "2019-01-31 15:48:58"
        },
        "cliente": {
            "id": 7,
            "nome": "Gordon Conn",
            "email": "esteban52@hotmail.com",
            "telefone": "1-681-828-5047 x137",
            "updated_at": "2019-01-31 15:48:58"
        }
    },
    {
        "id": 16,
        "data_estimada": "2018-11-26 16:16:26",
        "data_de_entrada_no_sistema": "1997-03-30 10:04:39",
        "data_de_entrega_pretendida": "1971-05-10 15:08:58",
        "tempo_limite_de_levantamento": "4",
        "data_de_entrega": "1972-06-26 23:05:29",
        "data_de_levantamento": "2009-07-26 03:57:51",
        "temperatura": 6.2,
        "observacoes": "Alice replied very politely, 'if I had to sing this:-- 'Beautiful Soup, so rich and green, Waiting in a hurry: a large crowd collected round it: there was Mystery,' the Mock Turtle a little glass.",
        "tamanho": "XL",
        "localizacao": "Fay Orchard",
        "cliente_id": 5,
        "cacifo_id": 19,
        "users": [
            {
                "id": 5,
                "nome": "Marilyne Gislason",
                "email": "istrosin@yahoo.com",
                "telefone": "+1-461-267-4385",
                "data_nascimento": "2012-02-02",
                "tipo_id": 1,
                "supervisor_id": 1,
                "created_at": "2019-01-31 15:48:58",
                "updated_at": "2019-01-31 15:48:58",
                "deleted_at": null,
                "pivot": {
                    "encomenda_id": 16,
                    "user_id": 5
                }
            }
        ],
        "cacifo": {
            "id": 19,
            "numero": 146,
            "temperatura": 0.6,
            "codigo": "DtaFMuHv",
            "tamanho_id": 4,
            "estado_id": 2,
            "localizacao_id": 2,
            "updated_at": "2019-01-31 15:48:58"
        },
        "cliente": {
            "id": 5,
            "nome": "Abdullah Bailey",
            "email": "thurman26@hotmail.com",
            "telefone": "742-338-7811",
            "updated_at": "2019-01-31 15:48:58"
        }
    },
    {
        "id": 17,
        "data_estimada": "1982-03-29 04:07:27",
        "data_de_entrada_no_sistema": "2013-05-25 20:32:16",
        "data_de_entrega_pretendida": "1993-05-13 05:59:17",
        "tempo_limite_de_levantamento": "2",
        "data_de_entrega": "1976-06-17 11:46:19",
        "data_de_levantamento": "2000-11-09 07:44:01",
        "temperatura": 9.7,
        "observacoes": "WATCH OUT OF ITS WAISTCOAT-POCKET, and looked at it, busily painting them red. Alice thought she might as well look and see how he did it,) he did it,) he did with the birds and animals that had.",
        "tamanho": "L",
        "localizacao": "Kozey Coves",
        "cliente_id": 4,
        "cacifo_id": 20,
        "users": [
            {
                "id": 2,
                "nome": "Stacy Koelpin",
                "email": "hiram.effertz@yahoo.com",
                "telefone": "(874) 921-0276 x13997",
                "data_nascimento": "1978-10-29",
                "tipo_id": 1,
                "supervisor_id": 1,
                "created_at": "2019-01-31 15:48:58",
                "updated_at": "2019-01-31 15:48:58",
                "deleted_at": null,
                "pivot": {
                    "encomenda_id": 17,
                    "user_id": 2
                }
            }
        ],
        "cacifo": {
            "id": 20,
            "numero": 457,
            "temperatura": 8.2,
            "codigo": "ObNNe",
            "tamanho_id": 2,
            "estado_id": 1,
            "localizacao_id": 1,
            "updated_at": "2019-01-31 15:48:58"
        },
        "cliente": {
            "id": 4,
            "nome": "Mrs. Faye Thiel",
            "email": "rbayer@hotmail.com",
            "telefone": "+1-605-776-3463",
            "updated_at": "2019-01-31 15:48:58"
        }
    },
    {
        "id": 18,
        "data_estimada": "2012-10-21 11:42:31",
        "data_de_entrada_no_sistema": "1988-07-28 07:30:26",
        "data_de_entrega_pretendida": "2005-04-03 21:27:46",
        "tempo_limite_de_levantamento": "3",
        "data_de_entrega": "2017-05-20 17:54:00",
        "data_de_levantamento": "1982-02-09 04:45:57",
        "temperatura": 3.2,
        "observacoes": "Arithmetic--Ambition, Distraction, Uglification, and Derision.' 'I never saw one, or heard of such a capital one for catching mice you can't be Mabel, for I know is, something comes at me like.",
        "tamanho": "L",
        "localizacao": "Crystel Rue",
        "cliente_id": 2,
        "cacifo_id": 20,
        "users": [
            {
                "id": 6,
                "nome": "Mr. Buster Reinger Sr.",
                "email": "cleo.kling@yahoo.com",
                "telefone": "+1 (330) 893-9230",
                "data_nascimento": "1985-09-05",
                "tipo_id": 2,
                "supervisor_id": 1,
                "created_at": "2019-01-31 15:48:58",
                "updated_at": "2019-01-31 15:48:58",
                "deleted_at": null,
                "pivot": {
                    "encomenda_id": 18,
                    "user_id": 6
                }
            }
        ],
        "cacifo": {
            "id": 20,
            "numero": 457,
            "temperatura": 8.2,
            "codigo": "ObNNe",
            "tamanho_id": 2,
            "estado_id": 1,
            "localizacao_id": 1,
            "updated_at": "2019-01-31 15:48:58"
        },
        "cliente": {
            "id": 2,
            "nome": "Caden Bernhard",
            "email": "parker.stanton@hotmail.com",
            "telefone": "(875) 539-8999 x1751",
            "updated_at": "2019-01-31 15:48:58"
        }
    },
    {
        "id": 19,
        "data_estimada": "2017-12-12 07:08:11",
        "data_de_entrada_no_sistema": "1990-09-01 09:37:19",
        "data_de_entrega_pretendida": "1992-12-21 11:39:41",
        "tempo_limite_de_levantamento": "3",
        "data_de_entrega": "1998-06-10 07:24:50",
        "data_de_levantamento": "1992-04-26 18:20:35",
        "temperatura": 8.6,
        "observacoes": "I had not long to doubt, for the first figure,' said the youth, 'as I mentioned before, And have grown most uncommonly fat; Yet you finished the guinea-pigs!' thought Alice. 'I don't even know what.",
        "tamanho": "S",
        "localizacao": "Schamberger Forges",
        "cliente_id": 1,
        "cacifo_id": 13,
        "users": [
            {
                "id": 1,
                "nome": "Mr. Enid Pollich",
                "email": "erika68@hotmail.com",
                "telefone": "(871) 285-4194",
                "data_nascimento": "1988-05-05",
                "tipo_id": 2,
                "supervisor_id": 1,
                "created_at": "2019-01-31 15:48:58",
                "updated_at": "2019-01-31 15:48:58",
                "deleted_at": null,
                "pivot": {
                    "encomenda_id": 19,
                    "user_id": 1
                }
            }
        ],
        "cacifo": {
            "id": 13,
            "numero": 260,
            "temperatura": 10.1,
            "codigo": "eFf2N43aO",
            "tamanho_id": 3,
            "estado_id": 2,
            "localizacao_id": 3,
            "updated_at": "2019-01-31 15:48:58"
        },
        "cliente": {
            "id": 1,
            "nome": "Rubie Little",
            "email": "aprice@gmail.com",
            "telefone": "1-560-987-8844 x180",
            "updated_at": "2019-01-31 15:48:58"
        }
    },
    {
        "id": 20,
        "data_estimada": "1991-02-24 14:05:04",
        "data_de_entrada_no_sistema": "1982-12-14 20:25:39",
        "data_de_entrega_pretendida": "1995-11-28 11:07:53",
        "tempo_limite_de_levantamento": "2",
        "data_de_entrega": "1971-04-04 21:03:57",
        "data_de_levantamento": "1973-07-14 17:32:54",
        "temperatura": 10.9,
        "observacoes": "Seven flung down his face, as long as you are; secondly, because they're making such a thing as \"I sleep when I learn music.' 'Ah! that accounts for it,' said Alice very meekly: 'I'm growing.'.",
        "tamanho": "S",
        "localizacao": "Hackett Neck",
        "cliente_id": 5,
        "cacifo_id": 3,
        "users": [
            {
                "id": 6,
                "nome": "Mr. Buster Reinger Sr.",
                "email": "cleo.kling@yahoo.com",
                "telefone": "+1 (330) 893-9230",
                "data_nascimento": "1985-09-05",
                "tipo_id": 2,
                "supervisor_id": 1,
                "created_at": "2019-01-31 15:48:58",
                "updated_at": "2019-01-31 15:48:58",
                "deleted_at": null,
                "pivot": {
                    "encomenda_id": 20,
                    "user_id": 6
                }
            }
        ],
        "cacifo": {
            "id": 3,
            "numero": 484,
            "temperatura": 10.1,
            "codigo": "_vAxsq",
            "tamanho_id": 3,
            "estado_id": 1,
            "localizacao_id": 2,
            "updated_at": "2019-01-31 15:48:58"
        },
        "cliente": {
            "id": 5,
            "nome": "Abdullah Bailey",
            "email": "thurman26@hotmail.com",
            "telefone": "742-338-7811",
            "updated_at": "2019-01-31 15:48:58"
        }
    },
    {
        "id": 21,
        "data_estimada": "2003-06-12 13:04:18",
        "data_de_entrada_no_sistema": "2003-10-27 23:14:39",
        "data_de_entrega_pretendida": "2008-12-07 20:32:33",
        "tempo_limite_de_levantamento": "3",
        "data_de_entrega": "1990-04-17 15:30:20",
        "data_de_levantamento": "2005-07-04 02:25:26",
        "temperatura": 7.8,
        "observacoes": "As she said to herself how she would get up and rubbed its eyes: then it watched the White Rabbit, trotting slowly back again, and put back into the garden with one finger pressed upon its nose. The.",
        "tamanho": "XL",
        "localizacao": "Keeley Greens",
        "cliente_id": 9,
        "cacifo_id": 14,
        "users": [
            {
                "id": 6,
                "nome": "Mr. Buster Reinger Sr.",
                "email": "cleo.kling@yahoo.com",
                "telefone": "+1 (330) 893-9230",
                "data_nascimento": "1985-09-05",
                "tipo_id": 2,
                "supervisor_id": 1,
                "created_at": "2019-01-31 15:48:58",
                "updated_at": "2019-01-31 15:48:58",
                "deleted_at": null,
                "pivot": {
                    "encomenda_id": 21,
                    "user_id": 6
                }
            }
        ],
        "cacifo": {
            "id": 14,
            "numero": 82,
            "temperatura": 2.9,
            "codigo": "IjCzm4Ti",
            "tamanho_id": 4,
            "estado_id": 2,
            "localizacao_id": 5,
            "updated_at": "2019-01-31 15:48:58"
        },
        "cliente": {
            "id": 9,
            "nome": "Moshe Brekke DVM",
            "email": "boyle.freeman@yahoo.com",
            "telefone": "898-560-9194 x818",
            "updated_at": "2019-01-31 15:48:58"
        }
    },
    {
        "id": 22,
        "data_estimada": "2007-01-13 17:25:57",
        "data_de_entrada_no_sistema": "2013-06-05 05:58:19",
        "data_de_entrega_pretendida": "1970-04-21 03:10:15",
        "tempo_limite_de_levantamento": "1",
        "data_de_entrega": "2010-06-18 05:26:50",
        "data_de_levantamento": "2010-04-27 21:51:49",
        "temperatura": 3.8,
        "observacoes": "King. 'It began with the Duchess, 'and that's the jury, of course--\"I GAVE HER ONE, THEY GAVE HIM TWO--\" why, that must be Mabel after all, and I don't put my arm round your waist,' the Duchess was.",
        "tamanho": "L",
        "localizacao": "Taryn Mountains",
        "cliente_id": 10,
        "cacifo_id": 19,
        "users": [
            {
                "id": 6,
                "nome": "Mr. Buster Reinger Sr.",
                "email": "cleo.kling@yahoo.com",
                "telefone": "+1 (330) 893-9230",
                "data_nascimento": "1985-09-05",
                "tipo_id": 2,
                "supervisor_id": 1,
                "created_at": "2019-01-31 15:48:58",
                "updated_at": "2019-01-31 15:48:58",
                "deleted_at": null,
                "pivot": {
                    "encomenda_id": 22,
                    "user_id": 6
                }
            }
        ],
        "cacifo": {
            "id": 19,
            "numero": 146,
            "temperatura": 0.6,
            "codigo": "DtaFMuHv",
            "tamanho_id": 4,
            "estado_id": 2,
            "localizacao_id": 2,
            "updated_at": "2019-01-31 15:48:58"
        },
        "cliente": {
            "id": 10,
            "nome": "Bertram Ward Sr.",
            "email": "mariana.koepp@hotmail.com",
            "telefone": "754-604-7017 x221",
            "updated_at": "2019-01-31 15:48:58"
        }
    },
    {
        "id": 23,
        "data_estimada": "1987-11-02 10:50:15",
        "data_de_entrada_no_sistema": "2009-04-23 05:13:21",
        "data_de_entrega_pretendida": "2017-04-26 17:41:10",
        "tempo_limite_de_levantamento": "3",
        "data_de_entrega": "1990-01-26 16:42:10",
        "data_de_levantamento": "2014-10-05 15:08:46",
        "temperatura": 11.5,
        "observacoes": "And will talk in contemptuous tones of her or of anything else. CHAPTER V. Advice from a bottle marked 'poison,' it is I hate cats and dogs.' It was the only difficulty was, that anything that had.",
        "tamanho": "S",
        "localizacao": "Halvorson Lock",
        "cliente_id": 2,
        "cacifo_id": 7,
        "users": [
            {
                "id": 1,
                "nome": "Mr. Enid Pollich",
                "email": "erika68@hotmail.com",
                "telefone": "(871) 285-4194",
                "data_nascimento": "1988-05-05",
                "tipo_id": 2,
                "supervisor_id": 1,
                "created_at": "2019-01-31 15:48:58",
                "updated_at": "2019-01-31 15:48:58",
                "deleted_at": null,
                "pivot": {
                    "encomenda_id": 23,
                    "user_id": 1
                }
            }
        ],
        "cacifo": {
            "id": 7,
            "numero": 74,
            "temperatura": 2.3,
            "codigo": "eAWuOa",
            "tamanho_id": 2,
            "estado_id": 2,
            "localizacao_id": 1,
            "updated_at": "2019-01-31 15:48:58"
        },
        "cliente": {
            "id": 2,
            "nome": "Caden Bernhard",
            "email": "parker.stanton@hotmail.com",
            "telefone": "(875) 539-8999 x1751",
            "updated_at": "2019-01-31 15:48:58"
        }
    },
    {
        "id": 24,
        "data_estimada": "2010-03-03 01:46:52",
        "data_de_entrada_no_sistema": "1986-09-22 23:51:26",
        "data_de_entrega_pretendida": "2000-04-04 23:35:06",
        "tempo_limite_de_levantamento": "2",
        "data_de_entrega": "1991-02-15 04:10:41",
        "data_de_levantamento": "2003-06-15 18:43:15",
        "temperatura": 11.2,
        "observacoes": "Alice, 'I've often seen them so often, of course was, how to set them free, Exactly as we were. My notion was that you weren't to talk to.' 'How are you thinking of?' 'I beg pardon, your Majesty,'.",
        "tamanho": "XL",
        "localizacao": "Lauriane Stream",
        "cliente_id": 8,
        "cacifo_id": 2,
        "users": [
            {
                "id": 8,
                "nome": "Joanne Konopelski DVM",
                "email": "ressie.greenfelder@hotmail.com",
                "telefone": "1-717-754-0260",
                "data_nascimento": "1971-12-08",
                "tipo_id": 1,
                "supervisor_id": 1,
                "created_at": "2019-01-31 15:48:58",
                "updated_at": "2019-01-31 15:48:58",
                "deleted_at": null,
                "pivot": {
                    "encomenda_id": 24,
                    "user_id": 8
                }
            }
        ],
        "cacifo": {
            "id": 2,
            "numero": 230,
            "temperatura": 2.7,
            "codigo": "Ot0RY4G8",
            "tamanho_id": 1,
            "estado_id": 1,
            "localizacao_id": 1,
            "updated_at": "2019-01-31 15:48:58"
        },
        "cliente": {
            "id": 8,
            "nome": "Delphine Hermann",
            "email": "hoppe.vilma@gmail.com",
            "telefone": "(483) 418-4267",
            "updated_at": "2019-01-31 15:48:58"
        }
    },
    {
        "id": 25,
        "data_estimada": "1971-06-04 02:32:22",
        "data_de_entrada_no_sistema": "1998-06-02 06:25:02",
        "data_de_entrega_pretendida": "1991-02-05 20:26:31",
        "tempo_limite_de_levantamento": "2",
        "data_de_entrega": "1974-04-01 03:41:29",
        "data_de_levantamento": "1990-06-21 21:42:07",
        "temperatura": 1.5,
        "observacoes": "She took down a large pool all round her, about the temper of your flamingo. Shall I try the first verse,' said the Footman, 'and that for the Dormouse,' thought Alice; 'only, as it's asleep, I.",
        "tamanho": "XL",
        "localizacao": "Willis Vista",
        "cliente_id": 1,
        "cacifo_id": 3,
        "users": [
            {
                "id": 8,
                "nome": "Joanne Konopelski DVM",
                "email": "ressie.greenfelder@hotmail.com",
                "telefone": "1-717-754-0260",
                "data_nascimento": "1971-12-08",
                "tipo_id": 1,
                "supervisor_id": 1,
                "created_at": "2019-01-31 15:48:58",
                "updated_at": "2019-01-31 15:48:58",
                "deleted_at": null,
                "pivot": {
                    "encomenda_id": 25,
                    "user_id": 8
                }
            }
        ],
        "cacifo": {
            "id": 3,
            "numero": 484,
            "temperatura": 10.1,
            "codigo": "_vAxsq",
            "tamanho_id": 3,
            "estado_id": 1,
            "localizacao_id": 2,
            "updated_at": "2019-01-31 15:48:58"
        },
        "cliente": {
            "id": 1,
            "nome": "Rubie Little",
            "email": "aprice@gmail.com",
            "telefone": "1-560-987-8844 x180",
            "updated_at": "2019-01-31 15:48:58"
        }
    }
]
```

### HTTP Request
`GET api/encomendas`


<!-- END_9103cfbc8321cf197d1d8d4f7fbedeb8 -->

<!-- START_351b13c152e13c47fcf0347d4daf989b -->
## Post Encomenda

Adiciona uma nova encomenda.

> Example request:

```bash
curl -X POST "http://localhost/api/encomendas"     -d "data_estimada"="BtLaOMr536mBZJbK" \
    -d "data_de_entrega"="L22qALIrSQ41tByE" \
    -d "data_de_levantamento"="MiWuJ4gbDOkB2VK7" \
    -d "data_de_entrada_no_sistema"="1b6CCPFPMsa92HU7" \
    -d "data_de_entrega_pretendida"="bQ0q9rbhKSLyajXc" \
    -d "tempo_limite_de_levantamento"="70P1PXQzPD2nGpMb" \
    -d "temperatura"="4660778.94" \
    -d "observacoes"="RTmIXivt77aptv2B" \
    -d "tamanho"="Is0OWyPsirzoJVyy" \
    -d "localizacao"="mcsAz84sM4vCttpS" \
    -d "cliente_id"="Sa0UFfKTCtx82Xd0" \
    -d "cacifo_id"="mPdeanRAD34iXtUm" 
```

```javascript
const url = new URL("http://localhost/api/encomendas");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "data_estimada": "BtLaOMr536mBZJbK",
    "data_de_entrega": "L22qALIrSQ41tByE",
    "data_de_levantamento": "MiWuJ4gbDOkB2VK7",
    "data_de_entrada_no_sistema": "1b6CCPFPMsa92HU7",
    "data_de_entrega_pretendida": "bQ0q9rbhKSLyajXc",
    "tempo_limite_de_levantamento": "70P1PXQzPD2nGpMb",
    "temperatura": "4660778.94",
    "observacoes": "RTmIXivt77aptv2B",
    "tamanho": "Is0OWyPsirzoJVyy",
    "localizacao": "mcsAz84sM4vCttpS",
    "cliente_id": "Sa0UFfKTCtx82Xd0",
    "cacifo_id": "mPdeanRAD34iXtUm",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "msg": "Success",
    "code": 201,
    "data": {
        "properties": "encomendaObject"
    }
}
```

### HTTP Request
`POST api/encomendas`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    data_estimada | date |  required  | Data estimada da entrega da encomenda..
    data_de_entrega | date |  optional  | optional Data de entrega da encomenda.
    data_de_levantamento | date |  optional  | optional Data de levantamento da encomenda.
    data_de_entrada_no_sistema | date |  required  | Data em que a encomenda foi registada no sistema.
    data_de_entrega_pretendida | date |  required  | Data em que o cliente pretende a entrega.
    tempo_limite_de_levantamento | date |  required  | Tempo limite para o levantamento de certa encomenda.
    temperatura | float |  optional  | optional Temperatura de uma encomenda. Caso seja nulo o valor default será: 20.
    observacoes | string |  optional  | optional Observações de uma encomenda. Caso seja nula o valor default será: "Nenhuma observação.".
    tamanho | string |  required  | Tamanho de uma encomenda.
    localizacao | string |  required  | Localização de entrega pretendida.
    cliente_id | string |  required  | Id do cliente que possui a encomenda.
    cacifo_id | string |  optional  | optional Id do cacifo de onde a encomenda vai ser colocada.

<!-- END_351b13c152e13c47fcf0347d4daf989b -->

<!-- START_e262c7297ef3120caf36a82783e68f06 -->
## Get a Encomenda.

Mostra uma encomenda detalhada.

> Example request:

```bash
curl -X GET -G "http://localhost/api/encomendas/{encomenda}" 
```

```javascript
const url = new URL("http://localhost/api/encomendas/{encomenda}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
[
    {
        "id": 1,
        "data_estimada": "1996-12-13 15:51:51",
        "data_de_entrada_no_sistema": "2007-03-19 12:08:53",
        "data_de_entrega_pretendida": "2004-11-14 21:15:33",
        "tempo_limite_de_levantamento": "1",
        "data_de_entrega": "1989-03-20 21:58:35",
        "data_de_levantamento": "2004-02-26 11:02:24",
        "temperatura": 0.2,
        "observacoes": "How brave they'll all think me at home! Why, I do it again and again.' 'You are all pardoned.' 'Come, THAT'S a good many little girls of her sharp little chin into Alice's shoulder as she did not.",
        "tamanho": "M",
        "localizacao": "Ratke Island",
        "cliente_id": 1,
        "cacifo_id": 18,
        "users": [
            {
                "id": 6,
                "nome": "Mr. Buster Reinger Sr.",
                "email": "cleo.kling@yahoo.com",
                "telefone": "+1 (330) 893-9230",
                "data_nascimento": "1985-09-05",
                "tipo_id": 2,
                "supervisor_id": 1,
                "created_at": "2019-01-31 15:48:58",
                "updated_at": "2019-01-31 15:48:58",
                "deleted_at": null,
                "pivot": {
                    "encomenda_id": 1,
                    "user_id": 6
                }
            }
        ],
        "cacifo": {
            "id": 18,
            "numero": 406,
            "temperatura": 9.1,
            "codigo": "iHVDXi",
            "tamanho_id": 1,
            "estado_id": 2,
            "localizacao_id": 3,
            "updated_at": "2019-01-31 15:48:58"
        },
        "cliente": {
            "id": 1,
            "nome": "Rubie Little",
            "email": "aprice@gmail.com",
            "telefone": "1-560-987-8844 x180",
            "updated_at": "2019-01-31 15:48:58"
        }
    }
]
```

### HTTP Request
`GET api/encomendas/{encomenda}`


<!-- END_e262c7297ef3120caf36a82783e68f06 -->

<!-- START_21b58c957ec03c5fd31f65ab1b836751 -->
## Update Encomenda

Atualiza uma encomenda.

> Example request:

```bash
curl -X PUT "http://localhost/api/encomendas/{encomenda}"     -d "data_estimada"="nRMUuifOlmQUJvhF" \
    -d "data_de_entrega"="SKfBs0uYgb068PZF" \
    -d "data_de_levantamento"="qomfYs378hRoq4NV" \
    -d "data_de_entrada_no_sistema"="qgHZWayVxFRGVjGu" \
    -d "data_de_entrega_pretendida"="Ltd8quMH9VkrfiiU" \
    -d "tempo_limite_de_levantamento"="S0amQsPRH5ryfWpp" \
    -d "temperatura"="109732412.25317" \
    -d "observacoes"="RRyt3rxm5FCJMhGs" \
    -d "tamanho"="w0DL7fg9aa3tOa8l" \
    -d "localizacao"="MN7GDt2ezGQmeYm9" \
    -d "cliente_id"="0nymach3FwnhGIBi" \
    -d "cacifo_id"="hYnMLQyJA2gSvzQl" 
```

```javascript
const url = new URL("http://localhost/api/encomendas/{encomenda}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "data_estimada": "nRMUuifOlmQUJvhF",
    "data_de_entrega": "SKfBs0uYgb068PZF",
    "data_de_levantamento": "qomfYs378hRoq4NV",
    "data_de_entrada_no_sistema": "qgHZWayVxFRGVjGu",
    "data_de_entrega_pretendida": "Ltd8quMH9VkrfiiU",
    "tempo_limite_de_levantamento": "S0amQsPRH5ryfWpp",
    "temperatura": "109732412.25317",
    "observacoes": "RRyt3rxm5FCJMhGs",
    "tamanho": "w0DL7fg9aa3tOa8l",
    "localizacao": "MN7GDt2ezGQmeYm9",
    "cliente_id": "0nymach3FwnhGIBi",
    "cacifo_id": "hYnMLQyJA2gSvzQl",
})

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "msg": "Success",
    "code": 200,
    "data": {
        "properties": "encomendaObject"
    }
}
```

### HTTP Request
`PUT api/encomendas/{encomenda}`

`PATCH api/encomendas/{encomenda}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    data_estimada | date |  optional  | optional Data estimada da entrega da encomenda..
    data_de_entrega | date |  optional  | optional Data de entrega da encomenda.
    data_de_levantamento | date |  optional  | optional Data de levantamento da encomenda.
    data_de_entrada_no_sistema | date |  optional  | optional Data em que a encomenda foi registada no sistema.
    data_de_entrega_pretendida | date |  optional  | optional Data em que o cliente pretende a entrega.
    tempo_limite_de_levantamento | date |  optional  | optional Tempo limite para o levantamento de certa encomenda.
    temperatura | float |  optional  | optional Temperatura de uma encomenda. Caso seja nulo o valor default será: 20.
    observacoes | string |  optional  | optional Observações de uma encomenda. Caso seja nula o valor default será: "Nenhuma observação.".
    tamanho | string |  optional  | optional Tamanho de uma encomenda.
    localizacao | string |  optional  | optional Localização de entrega pretendida.
    cliente_id | string |  optional  | optional Id do cliente que possui a encomenda.
    cacifo_id | string |  optional  | optional Id do cacifo de onde a encomenda vai ser colocada.

<!-- END_21b58c957ec03c5fd31f65ab1b836751 -->

<!-- START_f69358971fad0e59f15fe1e82945c9e5 -->
## Delete Encomenda

Apaga uma encomenda.

> Example request:

```bash
curl -X DELETE "http://localhost/api/encomendas/{encomenda}" 
```

```javascript
const url = new URL("http://localhost/api/encomendas/{encomenda}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "msg": "Seccess",
    "code": 200
}
```

### HTTP Request
`DELETE api/encomendas/{encomenda}`


<!-- END_f69358971fad0e59f15fe1e82945c9e5 -->

#Estados management

Endpoint para controlar a APIs dos estados
<!-- START_ac5f293a4430cf75efc1e7194302aea4 -->
## Get Estado

mostra todos os estados.

> Example request:

```bash
curl -X GET -G "http://localhost/api/estados" 
```

```javascript
const url = new URL("http://localhost/api/estados");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "estado": "Indisponivel",
            "href": {
                "link": "http:\/\/localhost\/api\/estados\/1"
            }
        },
        {
            "estado": "Disponivel",
            "href": {
                "link": "http:\/\/localhost\/api\/estados\/2"
            }
        }
    ]
}
```

### HTTP Request
`GET api/estados`


<!-- END_ac5f293a4430cf75efc1e7194302aea4 -->

<!-- START_12b8c44faff90c50600fdf54d6b28100 -->
## Post Estado

Adiciona um novo estado.

> Example request:

```bash
curl -X POST "http://localhost/api/estados"     -d "estado"="sFlFhdP8Sb2sRIqn" 
```

```javascript
const url = new URL("http://localhost/api/estados");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "estado": "sFlFhdP8Sb2sRIqn",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "msg": "Success",
    "code": 201,
    "data": {
        "properties": "estadoObject"
    }
}
```

### HTTP Request
`POST api/estados`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    estado | string |  required  | Estado de um cacífo.

<!-- END_12b8c44faff90c50600fdf54d6b28100 -->

<!-- START_81604ca46a9d7fb8fe23c7833dcdbb8b -->
## Get um estado.

Mostra um estado detalhado.

> Example request:

```bash
curl -X GET -G "http://localhost/api/estados/{estado}" 
```

```javascript
const url = new URL("http://localhost/api/estados/{estado}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 1,
        "estado": "Indisponivel"
    }
}
```

### HTTP Request
`GET api/estados/{estado}`


<!-- END_81604ca46a9d7fb8fe23c7833dcdbb8b -->

<!-- START_edc8cb441d35eee921089d801017ab90 -->
## Update Estado.

Atualiza um estado.

> Example request:

```bash
curl -X PUT "http://localhost/api/estados/{estado}"     -d "estado"="9suyffw4yvLVOn4j" 
```

```javascript
const url = new URL("http://localhost/api/estados/{estado}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "estado": "9suyffw4yvLVOn4j",
})

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "msg": "Success",
    "code": 200,
    "data": {
        "properties": "estadoObject"
    }
}
```

### HTTP Request
`PUT api/estados/{estado}`

`PATCH api/estados/{estado}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    estado | string |  required  | Nome do estado.

<!-- END_edc8cb441d35eee921089d801017ab90 -->

<!-- START_4dffc4046cb3367db34359bf4f412565 -->
## Delete Estado

Apaga um estado.

> Example request:

```bash
curl -X DELETE "http://localhost/api/estados/{estado}" 
```

```javascript
const url = new URL("http://localhost/api/estados/{estado}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "msg": "Seccess",
    "code": 200
}
```

### HTTP Request
`DELETE api/estados/{estado}`


<!-- END_4dffc4046cb3367db34359bf4f412565 -->

#Localizacaos management

Endpoint para controlar a APIs as localizacoes
<!-- START_1d3824e1b446b76c2fe7ab6a2a9c6714 -->
## Get Localizacao.

Mostra todas as localizações.

> Example request:

```bash
curl -X GET -G "http://localhost/api/localizacaos" 
```

```javascript
const url = new URL("http://localhost/api/localizacaos");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "nome": "Kenyon Extension",
            "lat": "-46.770013",
            "long": "-39.327016",
            "href": {
                "link": "http:\/\/localhost\/api\/localizacaos\/1"
            }
        },
        {
            "nome": "Mikayla Keys",
            "lat": "-87.664343",
            "long": "-142.524696",
            "href": {
                "link": "http:\/\/localhost\/api\/localizacaos\/2"
            }
        },
        {
            "nome": "Brown Vista",
            "lat": "-77.427651",
            "long": "146.845388",
            "href": {
                "link": "http:\/\/localhost\/api\/localizacaos\/3"
            }
        },
        {
            "nome": "Jayde Plaza",
            "lat": "3.178722",
            "long": "-88.667992",
            "href": {
                "link": "http:\/\/localhost\/api\/localizacaos\/4"
            }
        },
        {
            "nome": "Jamaal Rapids",
            "lat": "-72.131007",
            "long": "150.981984",
            "href": {
                "link": "http:\/\/localhost\/api\/localizacaos\/5"
            }
        }
    ],
    "msg": "Success",
    "code": 200
}
```

### HTTP Request
`GET api/localizacaos`


<!-- END_1d3824e1b446b76c2fe7ab6a2a9c6714 -->

<!-- START_82ec123977aeaeb445155a9418d2d5e0 -->
## Post Localizacao

Adiciona uma nova localizacao.

> Example request:

```bash
curl -X POST "http://localhost/api/localizacaos"     -d "nome"="ivMJBFerrqIvpWcD" \
    -d "lat"="13.3" \
    -d "long"="0.19514633" 
```

```javascript
const url = new URL("http://localhost/api/localizacaos");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "ivMJBFerrqIvpWcD",
    "lat": "13.3",
    "long": "0.19514633",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "msg": "Success",
    "code": 201,
    "data": {
        "properties": "localizacaoObject"
    }
}
```

### HTTP Request
`POST api/localizacaos`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    nome | string |  required  | Nome da localização.
    lat | float |  required  | Latitude da localização.
    long | float |  required  | Longitude da localização.

<!-- END_82ec123977aeaeb445155a9418d2d5e0 -->

<!-- START_66e32a4889a5adc165582adfe3fa634f -->
## Get uma localizacao.

Mostra uma localização detalhada.

> Example request:

```bash
curl -X GET -G "http://localhost/api/localizacaos/{localizacao}" 
```

```javascript
const url = new URL("http://localhost/api/localizacaos/{localizacao}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 1,
        "nome": "Kenyon Extension",
        "lat": "-46.770013",
        "long": "-39.327016"
    }
}
```

### HTTP Request
`GET api/localizacaos/{localizacao}`


<!-- END_66e32a4889a5adc165582adfe3fa634f -->

<!-- START_34f786553c4f147c34c5146f754faf9e -->
## Update Localizacao.

Atualiza uma localizacao.

> Example request:

```bash
curl -X PUT "http://localhost/api/localizacaos/{localizacao}"     -d "nome"="Sfus9zCHUAjgF5WS" \
    -d "latitude"="afetjmb53SbgRoC5" \
    -d "longitude"="WMmozGuZyK3BnV0R" 
```

```javascript
const url = new URL("http://localhost/api/localizacaos/{localizacao}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "Sfus9zCHUAjgF5WS",
    "latitude": "afetjmb53SbgRoC5",
    "longitude": "WMmozGuZyK3BnV0R",
})

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "msg": "Success",
    "code": 200,
    "data": {
        "properties": "localizacaoObject"
    }
}
```

### HTTP Request
`PUT api/localizacaos/{localizacao}`

`PATCH api/localizacaos/{localizacao}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    nome | string |  optional  | Nome da localização.
    latitude | string |  optional  | Latitude da localização.
    longitude | string |  optional  | Longitude da localização.

<!-- END_34f786553c4f147c34c5146f754faf9e -->

<!-- START_90f9194fa9dd72ce64f86052b1b7a874 -->
## Delete Localizacao

Apaga uma localizacao.

> Example request:

```bash
curl -X DELETE "http://localhost/api/localizacaos/{localizacao}" 
```

```javascript
const url = new URL("http://localhost/api/localizacaos/{localizacao}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "msg": "Seccess",
    "code": 200
}
```

### HTTP Request
`DELETE api/localizacaos/{localizacao}`


<!-- END_90f9194fa9dd72ce64f86052b1b7a874 -->

#Tamanhos management

Endpoint para controlar a APIs os tamanhos
<!-- START_910f847967dfd033adc177580aac35a2 -->
## Get Tamanho

Mostra todos os tamanhos.

> Example request:

```bash
curl -X GET -G "http://localhost/api/tamanhos" 
```

```javascript
const url = new URL("http://localhost/api/tamanhos");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "tamanho": "S",
            "href": {
                "link": "http:\/\/localhost\/api\/tamanhos\/1"
            }
        },
        {
            "tamanho": "L",
            "href": {
                "link": "http:\/\/localhost\/api\/tamanhos\/2"
            }
        },
        {
            "tamanho": "L",
            "href": {
                "link": "http:\/\/localhost\/api\/tamanhos\/3"
            }
        },
        {
            "tamanho": "M",
            "href": {
                "link": "http:\/\/localhost\/api\/tamanhos\/4"
            }
        }
    ]
}
```

### HTTP Request
`GET api/tamanhos`


<!-- END_910f847967dfd033adc177580aac35a2 -->

<!-- START_441919fa78c2e050906d9079ed13e3ff -->
## Post Tamanho

Adiciona um novo tamanho.

> Example request:

```bash
curl -X POST "http://localhost/api/tamanhos"     -d "tamanho"="lP8kyEn1EZ9q0Ela" 
```

```javascript
const url = new URL("http://localhost/api/tamanhos");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "tamanho": "lP8kyEn1EZ9q0Ela",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "msg": "Success",
    "code": 201,
    "data": {
        "properties": "tamanhoObject"
    }
}
```

### HTTP Request
`POST api/tamanhos`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    tamanho | string |  required  | Tamanho de um cacífo.

<!-- END_441919fa78c2e050906d9079ed13e3ff -->

<!-- START_e549b304b29bc4a6784f985291bf7581 -->
## Get um tamanho.

Mostra um tamanho detalhado.

> Example request:

```bash
curl -X GET -G "http://localhost/api/tamanhos/{tamanho}" 
```

```javascript
const url = new URL("http://localhost/api/tamanhos/{tamanho}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 1,
        "tamanho": "S"
    }
}
```

### HTTP Request
`GET api/tamanhos/{tamanho}`


<!-- END_e549b304b29bc4a6784f985291bf7581 -->

<!-- START_e4fafdaa44af0c54d99e8cc84c7ad8d8 -->
## Update Tamanho.

Atualiza um tamanho.

> Example request:

```bash
curl -X PUT "http://localhost/api/tamanhos/{tamanho}"     -d "tamanho"="URoxd3uxd6Gv50ti" 
```

```javascript
const url = new URL("http://localhost/api/tamanhos/{tamanho}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "tamanho": "URoxd3uxd6Gv50ti",
})

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "msg": "Success",
    "code": 200,
    "data": {
        "properties": "tamanhoObject"
    }
}
```

### HTTP Request
`PUT api/tamanhos/{tamanho}`

`PATCH api/tamanhos/{tamanho}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    tamanho | string |  required  | Tamanho do cacifo.

<!-- END_e4fafdaa44af0c54d99e8cc84c7ad8d8 -->

<!-- START_12933aa0be5df8b051558391f02e216e -->
## Delete tamanho

Apaga um tamanho.

> Example request:

```bash
curl -X DELETE "http://localhost/api/tamanhos/{tamanho}" 
```

```javascript
const url = new URL("http://localhost/api/tamanhos/{tamanho}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "msg": "Seccess",
    "code": 200
}
```

### HTTP Request
`DELETE api/tamanhos/{tamanho}`


<!-- END_12933aa0be5df8b051558391f02e216e -->

#UserTypes management

Endpoint para controlar a APIs o tipo de um utilizador.
<!-- START_fdbced2face3dd6a26e1020d1c51382b -->
## Get UserType.

Mostra todos os tipos de utilizadores.

> Example request:

```bash
curl -X GET -G "http://localhost/api/userTypes" 
```

```javascript
const url = new URL("http://localhost/api/userTypes");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "tipo": "Admin",
            "href": {
                "link": "http:\/\/localhost\/api\/userTypes\/1"
            }
        },
        {
            "tipo": "Estafeta",
            "href": {
                "link": "http:\/\/localhost\/api\/userTypes\/2"
            }
        }
    ]
}
```

### HTTP Request
`GET api/userTypes`


<!-- END_fdbced2face3dd6a26e1020d1c51382b -->

<!-- START_bea86f55a0848e4f30fde3db05bd042e -->
## Post UserType

Adiciona um novo tipo de utilizador.

> Example request:

```bash
curl -X POST "http://localhost/api/userTypes"     -d "tipo"="O9PcHlkeFhkalEp9" 
```

```javascript
const url = new URL("http://localhost/api/userTypes");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "tipo": "O9PcHlkeFhkalEp9",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "msg": "Success",
    "code": 201,
    "data": {
        "properties": "userTypeObject"
    }
}
```

### HTTP Request
`POST api/userTypes`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    tipo | string |  required  | Tipo de um utilizador.

<!-- END_bea86f55a0848e4f30fde3db05bd042e -->

<!-- START_17504c8df8555443b0ad5983570eacde -->
## Get um userType.

Mostra um tipo de utilizador detalhado.

> Example request:

```bash
curl -X GET -G "http://localhost/api/userTypes/{userType}" 
```

```javascript
const url = new URL("http://localhost/api/userTypes/{userType}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 1,
        "tipo": "Admin"
    }
}
```

### HTTP Request
`GET api/userTypes/{userType}`


<!-- END_17504c8df8555443b0ad5983570eacde -->

<!-- START_eff4784bbabb014511d40d3585bcf54d -->
## Update UserType.

Atualiza uma localizacao.

> Example request:

```bash
curl -X PUT "http://localhost/api/userTypes/{userType}"     -d "tipo"="pSMHxuRQ9xNFGQH8" 
```

```javascript
const url = new URL("http://localhost/api/userTypes/{userType}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "tipo": "pSMHxuRQ9xNFGQH8",
})

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "msg": "Success",
    "code": 200,
    "data": {
        "properties": "userTypeObject"
    }
}
```

### HTTP Request
`PUT api/userTypes/{userType}`

`PATCH api/userTypes/{userType}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    tipo | string |  required  | Tipo de utilizador.

<!-- END_eff4784bbabb014511d40d3585bcf54d -->

<!-- START_4b69bdddb9975f5e96f14c7ac291006c -->
## Delete UserType

Apaga um tipo de utilizador.

> Example request:

```bash
curl -X DELETE "http://localhost/api/userTypes/{userType}" 
```

```javascript
const url = new URL("http://localhost/api/userTypes/{userType}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "msg": "Seccess",
    "code": 200
}
```

### HTTP Request
`DELETE api/userTypes/{userType}`


<!-- END_4b69bdddb9975f5e96f14c7ac291006c -->

#Users management

Endpoint para controlar a APIs dos users
<!-- START_fc1e4f6a697e3c48257de845299b71d5 -->
## Get Users

Lista todos os utilizadores.

> Example request:

```bash
curl -X GET -G "http://localhost/api/users" 
```

```javascript
const url = new URL("http://localhost/api/users");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "nome": "Mr. Enid Pollich",
            "email": "erika68@hotmail.com",
            "telefone": "(871) 285-4194",
            "data_nascimento": "1988-05-05",
            "tipo_id": 2,
            "supervisor_id": 1,
            "tipo": {
                "id": 2,
                "tipo": "Estafeta"
            }
        },
        {
            "id": 2,
            "nome": "Stacy Koelpin",
            "email": "hiram.effertz@yahoo.com",
            "telefone": "(874) 921-0276 x13997",
            "data_nascimento": "1978-10-29",
            "tipo_id": 1,
            "supervisor_id": 1,
            "tipo": {
                "id": 1,
                "tipo": "Admin"
            }
        },
        {
            "id": 3,
            "nome": "Maude O'Reilly",
            "email": "franz.predovic@gmail.com",
            "telefone": "1-925-324-0336 x72851",
            "data_nascimento": "2000-08-29",
            "tipo_id": 2,
            "supervisor_id": 1,
            "tipo": {
                "id": 2,
                "tipo": "Estafeta"
            }
        },
        {
            "id": 4,
            "nome": "Carson Simonis MD",
            "email": "heidenreich.cyril@gmail.com",
            "telefone": "534.687.5687 x270",
            "data_nascimento": "2016-02-04",
            "tipo_id": 2,
            "supervisor_id": 1,
            "tipo": {
                "id": 2,
                "tipo": "Estafeta"
            }
        },
        {
            "id": 5,
            "nome": "Marilyne Gislason",
            "email": "istrosin@yahoo.com",
            "telefone": "+1-461-267-4385",
            "data_nascimento": "2012-02-02",
            "tipo_id": 1,
            "supervisor_id": 1,
            "tipo": {
                "id": 1,
                "tipo": "Admin"
            }
        },
        {
            "id": 6,
            "nome": "Mr. Buster Reinger Sr.",
            "email": "cleo.kling@yahoo.com",
            "telefone": "+1 (330) 893-9230",
            "data_nascimento": "1985-09-05",
            "tipo_id": 2,
            "supervisor_id": 1,
            "tipo": {
                "id": 2,
                "tipo": "Estafeta"
            }
        },
        {
            "id": 7,
            "nome": "Dedric Trantow",
            "email": "clemmie.herman@gmail.com",
            "telefone": "1-903-417-1344 x0545",
            "data_nascimento": "2017-11-08",
            "tipo_id": 1,
            "supervisor_id": 1,
            "tipo": {
                "id": 1,
                "tipo": "Admin"
            }
        },
        {
            "id": 8,
            "nome": "Joanne Konopelski DVM",
            "email": "ressie.greenfelder@hotmail.com",
            "telefone": "1-717-754-0260",
            "data_nascimento": "1971-12-08",
            "tipo_id": 1,
            "supervisor_id": 1,
            "tipo": {
                "id": 1,
                "tipo": "Admin"
            }
        }
    ]
}
```

### HTTP Request
`GET api/users`


<!-- END_fc1e4f6a697e3c48257de845299b71d5 -->

<!-- START_12e37982cc5398c7100e59625ebb5514 -->
## Post User

Adiciona um novo utilizador.

> Example request:

```bash
curl -X POST "http://localhost/api/users"     -d "nome"="ZRtSiMidpGR64a1R" \
    -d "email"="fJ3u0XA9dlbITpWt" \
    -d "password"="FSNDaSRXaWy3OoON" \
    -d "telefone"="TBxnWX0GbhBOPO3X" \
    -d "data_nascimento"="WhQtF8JbmOu9XwqD" \
    -d "tipo_id"="6MZOsasaMWE1ow0X" \
    -d "supervisor_id"="PL11lbtONemInHwP" 
```

```javascript
const url = new URL("http://localhost/api/users");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "ZRtSiMidpGR64a1R",
    "email": "fJ3u0XA9dlbITpWt",
    "password": "FSNDaSRXaWy3OoON",
    "telefone": "TBxnWX0GbhBOPO3X",
    "data_nascimento": "WhQtF8JbmOu9XwqD",
    "tipo_id": "6MZOsasaMWE1ow0X",
    "supervisor_id": "PL11lbtONemInHwP",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "msg": "Success",
    "code": 201,
    "data": {
        "properties": "userObject"
    }
}
```

### HTTP Request
`POST api/users`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    nome | string |  required  | Nome do utilizador.
    email | string |  required  | E-mail do ttilizador.
    password | string |  required  | Password do utilizador.
    telefone | string |  required  | Telefone do utilizador.
    data_nascimento | required |  optional  | Data de nascimento do utilizador.
    tipo_id | string |  required  | Tipo do utilizador.
    supervisor_id | string |  required  | Supervisor do utilizador.

<!-- END_12e37982cc5398c7100e59625ebb5514 -->

<!-- START_8653614346cb0e3d444d164579a0a0a2 -->
## Get a User.

Mostra um utilizador detalhado.

> Example request:

```bash
curl -X GET -G "http://localhost/api/users/{user}" 
```

```javascript
const url = new URL("http://localhost/api/users/{user}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 1,
        "nome": "Mr. Enid Pollich",
        "email": "erika68@hotmail.com",
        "password": "$q$EQ!",
        "telefone": "(871) 285-4194",
        "data_nascimento": "1988-05-05",
        "tipo_id": 2,
        "supervisor_id": 1,
        "tipo": {
            "id": 2,
            "tipo": "Estafeta"
        }
    }
}
```

### HTTP Request
`GET api/users/{user}`


<!-- END_8653614346cb0e3d444d164579a0a0a2 -->

<!-- START_48a3115be98493a3c866eb0e23347262 -->
## Update User

Atualiza um novo utilizador.

> Example request:

```bash
curl -X PUT "http://localhost/api/users/{user}"     -d "nome"="GHonRjXrLXV20DGm" \
    -d "email"="V6zw7njsAr1a4SkI" \
    -d "password"="oUnCLHvMxa7SlIG2" \
    -d "telefone"="WYPsYg7BMH541ivv" \
    -d "data_nascimento"="Fh8FPoyZ8wFwl5t2" \
    -d "tipo_id"="iG8hMVZvXjKzWj6I" \
    -d "supervisor_id"="QjaosXEqC2mteDsH" 
```

```javascript
const url = new URL("http://localhost/api/users/{user}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "GHonRjXrLXV20DGm",
    "email": "V6zw7njsAr1a4SkI",
    "password": "oUnCLHvMxa7SlIG2",
    "telefone": "WYPsYg7BMH541ivv",
    "data_nascimento": "Fh8FPoyZ8wFwl5t2",
    "tipo_id": "iG8hMVZvXjKzWj6I",
    "supervisor_id": "QjaosXEqC2mteDsH",
})

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "msg": "Success",
    "code": 200,
    "data": {
        "properties": "userObject"
    }
}
```

### HTTP Request
`PUT api/users/{user}`

`PATCH api/users/{user}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    nome | string |  optional  | Nome do utilizador.
    email | string |  optional  | E-mail do ttilizador.
    password | string |  required  | Password do utilizador.
    telefone | string |  optional  | Telefone do utilizador.
    data_nascimento | Data |  optional  | de nascimento do utilizador.
    tipo_id | string |  optional  | Tipo do utilizador.
    supervisor_id | string |  optional  | Supervisor do utilizador.

<!-- END_48a3115be98493a3c866eb0e23347262 -->

<!-- START_d2db7a9fe3abd141d5adbc367a88e969 -->
## Delete User

Apaga um utilizador.

> Example request:

```bash
curl -X DELETE "http://localhost/api/users/{user}" 
```

```javascript
const url = new URL("http://localhost/api/users/{user}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "msg": "Seccess",
    "code": 200
}
```

### HTTP Request
`DELETE api/users/{user}`


<!-- END_d2db7a9fe3abd141d5adbc367a88e969 -->

<!-- START_1be1183aa2a90a7a8dbfb818f3c7fe00 -->
## Get Encomendas of a User

Devolve as encomendas de um utilizador.

> Example request:

```bash
curl -X GET -G "http://localhost/api/users/{user}/encomendas" 
```

```javascript
const url = new URL("http://localhost/api/users/{user}/encomendas");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "id": 3,
            "data_estimada": "1976-06-10 13:18:17",
            "data_de_entrega": "1986-04-20 21:44:10",
            "data_de_levantamento": "2003-10-04 01:54:19",
            "data_de_entrada_no_sistema": "1976-11-26 10:44:42",
            "data_de_entrega_pretendida": "1997-10-13 03:53:57",
            "tempo_limite_de_levantamento": "2",
            "temperatura": "2",
            "observacoes": "Lizard, who seemed to be in a confused way, 'Prizes! Prizes!' Alice had begun to dream that she could not swim. He sent them word I had not noticed before, and she went on: '--that begins with an.",
            "tamanho": "M",
            "localizacao": "Boehm Circle",
            "cliente_id": 7,
            "cacifo_id": 14,
            "cacifo": {
                "id": 14,
                "numero": 82,
                "temperatura": "2.9",
                "codigo": "IjCzm4Ti",
                "tamanho_id": 4,
                "estado_id": 2,
                "localizacao_id": 5,
                "tamanho": {
                    "id": 4,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 5,
                    "nome": "Jamaal Rapids",
                    "lat": "-72.131007",
                    "long": "150.981984"
                }
            },
            "cliente": {
                "id": 7,
                "nome": "Gordon Conn",
                "email": "esteban52@hotmail.com",
                "telefone": "1-681-828-5047 x137"
            },
            "href": {
                "cliente": "http:\/\/localhost\/api\/clientes\/7",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/14"
            }
        },
        {
            "id": 4,
            "data_estimada": "1977-01-06 11:21:27",
            "data_de_entrega": "2004-03-04 00:54:21",
            "data_de_levantamento": "1980-06-07 20:52:49",
            "data_de_entrada_no_sistema": "1996-01-14 02:04:12",
            "data_de_entrega_pretendida": "1990-06-10 22:34:40",
            "tempo_limite_de_levantamento": "3",
            "temperatura": "9.1",
            "observacoes": "Duchess, 'and that's why. Pig!' She said it to the Gryphon. 'How the creatures argue. It's enough to get out of a muchness?' 'Really, now you ask me,' said Alice, 'and why it is you hate--C and D,'.",
            "tamanho": "XL",
            "localizacao": "Rempel Junctions",
            "cliente_id": 6,
            "cacifo_id": 20,
            "cacifo": {
                "id": 20,
                "numero": 457,
                "temperatura": "8.2",
                "codigo": "ObNNe",
                "tamanho_id": 2,
                "estado_id": 1,
                "localizacao_id": 1,
                "tamanho": {
                    "id": 2,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 1,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 1,
                    "nome": "Kenyon Extension",
                    "lat": "-46.770013",
                    "long": "-39.327016"
                }
            },
            "cliente": {
                "id": 6,
                "nome": "Mr. Anthony Spencer IV",
                "email": "nhudson@yahoo.com",
                "telefone": "212-372-5377 x778"
            },
            "href": {
                "cliente": "http:\/\/localhost\/api\/clientes\/6",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/20"
            }
        },
        {
            "id": 19,
            "data_estimada": "2017-12-12 07:08:11",
            "data_de_entrega": "1998-06-10 07:24:50",
            "data_de_levantamento": "1992-04-26 18:20:35",
            "data_de_entrada_no_sistema": "1990-09-01 09:37:19",
            "data_de_entrega_pretendida": "1992-12-21 11:39:41",
            "tempo_limite_de_levantamento": "3",
            "temperatura": "8.6",
            "observacoes": "I had not long to doubt, for the first figure,' said the youth, 'as I mentioned before, And have grown most uncommonly fat; Yet you finished the guinea-pigs!' thought Alice. 'I don't even know what.",
            "tamanho": "S",
            "localizacao": "Schamberger Forges",
            "cliente_id": 1,
            "cacifo_id": 13,
            "cacifo": {
                "id": 13,
                "numero": 260,
                "temperatura": "10.1",
                "codigo": "eFf2N43aO",
                "tamanho_id": 3,
                "estado_id": 2,
                "localizacao_id": 3,
                "tamanho": {
                    "id": 3,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 3,
                    "nome": "Brown Vista",
                    "lat": "-77.427651",
                    "long": "146.845388"
                }
            },
            "cliente": {
                "id": 1,
                "nome": "Rubie Little",
                "email": "aprice@gmail.com",
                "telefone": "1-560-987-8844 x180"
            },
            "href": {
                "cliente": "http:\/\/localhost\/api\/clientes\/1",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/13"
            }
        },
        {
            "id": 23,
            "data_estimada": "1987-11-02 10:50:15",
            "data_de_entrega": "1990-01-26 16:42:10",
            "data_de_levantamento": "2014-10-05 15:08:46",
            "data_de_entrada_no_sistema": "2009-04-23 05:13:21",
            "data_de_entrega_pretendida": "2017-04-26 17:41:10",
            "tempo_limite_de_levantamento": "3",
            "temperatura": "11.5",
            "observacoes": "And will talk in contemptuous tones of her or of anything else. CHAPTER V. Advice from a bottle marked 'poison,' it is I hate cats and dogs.' It was the only difficulty was, that anything that had.",
            "tamanho": "S",
            "localizacao": "Halvorson Lock",
            "cliente_id": 2,
            "cacifo_id": 7,
            "cacifo": {
                "id": 7,
                "numero": 74,
                "temperatura": "2.3",
                "codigo": "eAWuOa",
                "tamanho_id": 2,
                "estado_id": 2,
                "localizacao_id": 1,
                "tamanho": {
                    "id": 2,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 1,
                    "nome": "Kenyon Extension",
                    "lat": "-46.770013",
                    "long": "-39.327016"
                }
            },
            "cliente": {
                "id": 2,
                "nome": "Caden Bernhard",
                "email": "parker.stanton@hotmail.com",
                "telefone": "(875) 539-8999 x1751"
            },
            "href": {
                "cliente": "http:\/\/localhost\/api\/clientes\/2",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/7"
            }
        }
    ]
}
```

### HTTP Request
`GET api/users/{user}/encomendas`


<!-- END_1be1183aa2a90a7a8dbfb818f3c7fe00 -->

<!-- START_cbfcfe03d00111bbf229efeaa22c46c4 -->
## Create encomenda of user

Cria uma ligação de um utilizador com uma encomenda.

> Example request:

```bash
curl -X POST "http://localhost/api/users/{user}/encomendas/{encomenda}" 
```

```javascript
const url = new URL("http://localhost/api/users/{user}/encomendas/{encomenda}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "msg": "Seccess",
    "code": 200
}
```

### HTTP Request
`POST api/users/{user}/encomendas/{encomenda}`


<!-- END_cbfcfe03d00111bbf229efeaa22c46c4 -->


