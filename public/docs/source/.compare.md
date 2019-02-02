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
            "numero": 404,
            "temperatura": "10.2",
            "tamanho_id": 1,
            "estado_id": 2,
            "localizacao_id": 4,
            "tamanho": {
                "id": 1,
                "tamanho": "XL"
            },
            "estado": {
                "id": 2,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 4,
                "nome": "Durgan Stravenue",
                "lat": "38.731756",
                "long": "0.386087"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/1",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/1",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/4"
            }
        },
        {
            "id": 2,
            "numero": 290,
            "temperatura": "6",
            "tamanho_id": 4,
            "estado_id": 1,
            "localizacao_id": 5,
            "tamanho": {
                "id": 4,
                "tamanho": "M"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 5,
                "nome": "Millie Greens",
                "lat": "34.573756",
                "long": "-35.68727"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/2",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/4",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/5"
            }
        },
        {
            "id": 3,
            "numero": 281,
            "temperatura": "6.2",
            "tamanho_id": 1,
            "estado_id": 2,
            "localizacao_id": 1,
            "tamanho": {
                "id": 1,
                "tamanho": "XL"
            },
            "estado": {
                "id": 2,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 1,
                "nome": "Deontae Radial",
                "lat": "-81.935546",
                "long": "165.201912"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/3",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/1",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/1"
            }
        },
        {
            "id": 4,
            "numero": 251,
            "temperatura": "4.9",
            "tamanho_id": 2,
            "estado_id": 2,
            "localizacao_id": 5,
            "tamanho": {
                "id": 2,
                "tamanho": "L"
            },
            "estado": {
                "id": 2,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 5,
                "nome": "Millie Greens",
                "lat": "34.573756",
                "long": "-35.68727"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/4",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/2",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/5"
            }
        },
        {
            "id": 5,
            "numero": 493,
            "temperatura": "5",
            "tamanho_id": 2,
            "estado_id": 2,
            "localizacao_id": 4,
            "tamanho": {
                "id": 2,
                "tamanho": "L"
            },
            "estado": {
                "id": 2,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 4,
                "nome": "Durgan Stravenue",
                "lat": "38.731756",
                "long": "0.386087"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/5",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/2",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/4"
            }
        },
        {
            "id": 6,
            "numero": 462,
            "temperatura": "0.6",
            "tamanho_id": 3,
            "estado_id": 1,
            "localizacao_id": 1,
            "tamanho": {
                "id": 3,
                "tamanho": "XL"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 1,
                "nome": "Deontae Radial",
                "lat": "-81.935546",
                "long": "165.201912"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/6",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/3",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/1"
            }
        },
        {
            "id": 7,
            "numero": 1,
            "temperatura": "2.2",
            "tamanho_id": 4,
            "estado_id": 2,
            "localizacao_id": 2,
            "tamanho": {
                "id": 4,
                "tamanho": "M"
            },
            "estado": {
                "id": 2,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 2,
                "nome": "Fay Locks",
                "lat": "43.884245",
                "long": "0.511181"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/7",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/4",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/2"
            }
        },
        {
            "id": 8,
            "numero": 322,
            "temperatura": "7.3",
            "tamanho_id": 3,
            "estado_id": 1,
            "localizacao_id": 3,
            "tamanho": {
                "id": 3,
                "tamanho": "XL"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 3,
                "nome": "Hegmann Prairie",
                "lat": "46.23877",
                "long": "68.079565"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/8",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/3",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/3"
            }
        },
        {
            "id": 9,
            "numero": 88,
            "temperatura": "6.4",
            "tamanho_id": 4,
            "estado_id": 1,
            "localizacao_id": 2,
            "tamanho": {
                "id": 4,
                "tamanho": "M"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 2,
                "nome": "Fay Locks",
                "lat": "43.884245",
                "long": "0.511181"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/9",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/4",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/2"
            }
        },
        {
            "id": 10,
            "numero": 400,
            "temperatura": "8.4",
            "tamanho_id": 4,
            "estado_id": 1,
            "localizacao_id": 3,
            "tamanho": {
                "id": 4,
                "tamanho": "M"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 3,
                "nome": "Hegmann Prairie",
                "lat": "46.23877",
                "long": "68.079565"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/10",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/4",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/3"
            }
        },
        {
            "id": 11,
            "numero": 363,
            "temperatura": "9",
            "tamanho_id": 3,
            "estado_id": 1,
            "localizacao_id": 1,
            "tamanho": {
                "id": 3,
                "tamanho": "XL"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 1,
                "nome": "Deontae Radial",
                "lat": "-81.935546",
                "long": "165.201912"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/11",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/3",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/1"
            }
        },
        {
            "id": 12,
            "numero": 215,
            "temperatura": "2",
            "tamanho_id": 2,
            "estado_id": 2,
            "localizacao_id": 4,
            "tamanho": {
                "id": 2,
                "tamanho": "L"
            },
            "estado": {
                "id": 2,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 4,
                "nome": "Durgan Stravenue",
                "lat": "38.731756",
                "long": "0.386087"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/12",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/2",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/4"
            }
        },
        {
            "id": 13,
            "numero": 292,
            "temperatura": "0.6",
            "tamanho_id": 2,
            "estado_id": 2,
            "localizacao_id": 3,
            "tamanho": {
                "id": 2,
                "tamanho": "L"
            },
            "estado": {
                "id": 2,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 3,
                "nome": "Hegmann Prairie",
                "lat": "46.23877",
                "long": "68.079565"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/13",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/2",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/3"
            }
        },
        {
            "id": 14,
            "numero": 12,
            "temperatura": "2.8",
            "tamanho_id": 4,
            "estado_id": 1,
            "localizacao_id": 3,
            "tamanho": {
                "id": 4,
                "tamanho": "M"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 3,
                "nome": "Hegmann Prairie",
                "lat": "46.23877",
                "long": "68.079565"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/14",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/4",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/3"
            }
        },
        {
            "id": 15,
            "numero": 449,
            "temperatura": "6.8",
            "tamanho_id": 4,
            "estado_id": 2,
            "localizacao_id": 5,
            "tamanho": {
                "id": 4,
                "tamanho": "M"
            },
            "estado": {
                "id": 2,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 5,
                "nome": "Millie Greens",
                "lat": "34.573756",
                "long": "-35.68727"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/15",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/4",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/5"
            }
        },
        {
            "id": 16,
            "numero": 196,
            "temperatura": "2.9",
            "tamanho_id": 1,
            "estado_id": 1,
            "localizacao_id": 4,
            "tamanho": {
                "id": 1,
                "tamanho": "XL"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 4,
                "nome": "Durgan Stravenue",
                "lat": "38.731756",
                "long": "0.386087"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/16",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/1",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/4"
            }
        },
        {
            "id": 17,
            "numero": 470,
            "temperatura": "8.1",
            "tamanho_id": 2,
            "estado_id": 2,
            "localizacao_id": 4,
            "tamanho": {
                "id": 2,
                "tamanho": "L"
            },
            "estado": {
                "id": 2,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 4,
                "nome": "Durgan Stravenue",
                "lat": "38.731756",
                "long": "0.386087"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/17",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/2",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/4"
            }
        },
        {
            "id": 18,
            "numero": 425,
            "temperatura": "10",
            "tamanho_id": 3,
            "estado_id": 2,
            "localizacao_id": 5,
            "tamanho": {
                "id": 3,
                "tamanho": "XL"
            },
            "estado": {
                "id": 2,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 5,
                "nome": "Millie Greens",
                "lat": "34.573756",
                "long": "-35.68727"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/18",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/3",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/5"
            }
        },
        {
            "id": 19,
            "numero": 338,
            "temperatura": "7",
            "tamanho_id": 3,
            "estado_id": 2,
            "localizacao_id": 2,
            "tamanho": {
                "id": 3,
                "tamanho": "XL"
            },
            "estado": {
                "id": 2,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 2,
                "nome": "Fay Locks",
                "lat": "43.884245",
                "long": "0.511181"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/19",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/3",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/2"
            }
        },
        {
            "id": 20,
            "numero": 134,
            "temperatura": "5.6",
            "tamanho_id": 3,
            "estado_id": 2,
            "localizacao_id": 1,
            "tamanho": {
                "id": 3,
                "tamanho": "XL"
            },
            "estado": {
                "id": 2,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 1,
                "nome": "Deontae Radial",
                "lat": "-81.935546",
                "long": "165.201912"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/20",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/3",
                "estado": "http:\/\/localhost\/api\/estados\/2",
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
curl -X POST "http://localhost/api/cacifos"     -d "numero"="mE1IBi632Uv9hqVY" \
    -d "temperatura"="MJLl2SbrdI5xiX7T" \
    -d "codigo"="5Y77kohnrgKUtumF" \
    -d "estado_id"="0vNcawJwZZkiWmcL" \
    -d "tamanho_id"="r98jGx6nCV2WxeL8" \
    -d "localizacao_id"="z3aa1LzlvYmLP7AA" 
```

```javascript
const url = new URL("http://localhost/api/cacifos");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "numero": "mE1IBi632Uv9hqVY",
    "temperatura": "MJLl2SbrdI5xiX7T",
    "codigo": "5Y77kohnrgKUtumF",
    "estado_id": "0vNcawJwZZkiWmcL",
    "tamanho_id": "r98jGx6nCV2WxeL8",
    "localizacao_id": "z3aa1LzlvYmLP7AA",
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
        "numero": 404,
        "temperatura": "10.2",
        "codigo": "hNash",
        "tamanho_id": 1,
        "estado_id": 2,
        "localizacao_id": 4,
        "tamanho": {
            "id": 1,
            "tamanho": "XL"
        },
        "estado": {
            "id": 2,
            "estado": "Indisponivel"
        },
        "localizacao": {
            "id": 4,
            "nome": "Durgan Stravenue",
            "lat": "38.731756",
            "long": "0.386087"
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
curl -X PUT "http://localhost/api/cacifos/{cacifo}"     -d "numero"="XJzJIblyOp0i29XN" \
    -d "temperatura"="GpxBZtWJXsYuBRXE" \
    -d "codigo"="9XyPMXOGOXafd8Ae" \
    -d "estado_id"="FtM7xGsqm7mVSpIV" \
    -d "tamanho_id"="Z3lRFO5BSBoSNzNt" \
    -d "localizacao_id"="TbTN97HYblOvG2KX" 
```

```javascript
const url = new URL("http://localhost/api/cacifos/{cacifo}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "numero": "XJzJIblyOp0i29XN",
    "temperatura": "GpxBZtWJXsYuBRXE",
    "codigo": "9XyPMXOGOXafd8Ae",
    "estado_id": "FtM7xGsqm7mVSpIV",
    "tamanho_id": "Z3lRFO5BSBoSNzNt",
    "localizacao_id": "TbTN97HYblOvG2KX",
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
            "nome": "Noemi Becker",
            "email": "maryam.gusikowski@gmail.com",
            "telefone": "782-691-0238 x3298",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/1"
            }
        },
        {
            "nome": "Geovany Durgan",
            "email": "sabina.kerluke@yahoo.com",
            "telefone": "+1 (417) 208-9707",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/2"
            }
        },
        {
            "nome": "Madge Barton",
            "email": "tjacobs@hotmail.com",
            "telefone": "363.645.8880",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/3"
            }
        },
        {
            "nome": "Lesley Kub",
            "email": "patience.hickle@hotmail.com",
            "telefone": "869-437-4198",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/4"
            }
        },
        {
            "nome": "Katheryn Lang",
            "email": "reid.jenkins@hotmail.com",
            "telefone": "1-710-445-9116",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/5"
            }
        },
        {
            "nome": "Prof. Barry Brekke",
            "email": "rowan03@hotmail.com",
            "telefone": "1-952-222-5406 x997",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/6"
            }
        },
        {
            "nome": "Kristofer McGlynn",
            "email": "simonis.itzel@gmail.com",
            "telefone": "(483) 880-7929 x070",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/7"
            }
        },
        {
            "nome": "Holly Jast",
            "email": "simonis.stacey@hotmail.com",
            "telefone": "+1.373.986.4687",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/8"
            }
        },
        {
            "nome": "Roscoe Steuber",
            "email": "gcole@hotmail.com",
            "telefone": "214-553-8218 x171",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/9"
            }
        },
        {
            "nome": "Garrick Hyatt",
            "email": "ydibbert@gmail.com",
            "telefone": "+1.907.668.9548",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/10"
            }
        }
    ],
    "msg": "success",
    "code": 200
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
curl -X POST "http://localhost/api/clientes"     -d "nome"="tSEv8nbQbZEuzRst" \
    -d "email"="B4ystQqDTiWc4RQ0" \
    -d "telefone"="FI7aulzKXUhgbhAr" 
```

```javascript
const url = new URL("http://localhost/api/clientes");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "tSEv8nbQbZEuzRst",
    "email": "B4ystQqDTiWc4RQ0",
    "telefone": "FI7aulzKXUhgbhAr",
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
        "nome": "Noemi Becker",
        "email": "maryam.gusikowski@gmail.com",
        "telefone": "782-691-0238 x3298"
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
curl -X PUT "http://localhost/api/clientes/{cliente}"     -d "nome"="VmdetQWYnRNZMsKJ" \
    -d "email"="vevNu4AbxqiTiMfj" \
    -d "telefone"="4EQXHf6gLqBi9COE" 
```

```javascript
const url = new URL("http://localhost/api/clientes/{cliente}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "VmdetQWYnRNZMsKJ",
    "email": "vevNu4AbxqiTiMfj",
    "telefone": "4EQXHf6gLqBi9COE",
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
            "numero_encomenda": 149,
            "data_estimada": "1996-06-27 01:49:33",
            "data_de_entrega": "1975-03-20 15:01:26",
            "data_de_levantamento": "1986-03-21 09:59:49",
            "data_de_entrada_no_sistema": "1984-04-01 06:54:57",
            "data_de_entrega_pretendida": "1983-02-01 00:19:02",
            "tempo_limite_de_levantamento": "2015-07-07 11:25:30",
            "estado_encomenda": 1,
            "temperatura": "1.4",
            "observacoes": "Lory, with a bound into the sky all the players, except the Lizard, who seemed too much pepper in my own tears! That WILL be a LITTLE larger, sir, if you could see it pop down a large plate came.",
            "tamanho": "S",
            "localizacao": "Bart Forest",
            "cliente_id": 1,
            "cacifo_id": 4,
            "cliente": {
                "id": 1,
                "nome": "Noemi Becker",
                "email": "maryam.gusikowski@gmail.com",
                "telefone": "782-691-0238 x3298"
            },
            "cacifo": {
                "id": 4,
                "numero": 251,
                "temperatura": "4.9",
                "codigo": "lodbC",
                "tamanho_id": 2,
                "estado_id": 2,
                "localizacao_id": 5,
                "tamanho": {
                    "id": 2,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 5,
                    "nome": "Millie Greens",
                    "lat": "34.573756",
                    "long": "-35.68727"
                }
            },
            "estafeta": [
                {
                    "id": 3,
                    "nome": "Mikel Hauck MD",
                    "email": "yhermiston@gmail.com",
                    "telefone": "(838) 541-7325 x3592",
                    "data_nascimento": "1974-03-18",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 1,
                        "user_id": 3
                    }
                }
            ],
            "href": {
                "cliente": "http:\/\/localhost\/api\/clientes\/1",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/4"
            }
        },
        {
            "id": 5,
            "numero_encomenda": 833,
            "data_estimada": "1992-03-13 23:14:23",
            "data_de_entrega": "2009-04-01 09:50:34",
            "data_de_levantamento": "1999-09-07 15:36:51",
            "data_de_entrada_no_sistema": "2006-09-13 19:00:04",
            "data_de_entrega_pretendida": "1978-02-27 09:51:52",
            "tempo_limite_de_levantamento": "2015-06-18 19:02:21",
            "estado_encomenda": 1,
            "temperatura": "4.6",
            "observacoes": "Quick, now!' And Alice was not here before,' said the March Hare. 'Exactly so,' said Alice. 'Anything you like,' said the Hatter. 'You MUST remember,' remarked the King, who had been broken to.",
            "tamanho": "L",
            "localizacao": "Dallin Shoals",
            "cliente_id": 1,
            "cacifo_id": 19,
            "cliente": {
                "id": 1,
                "nome": "Noemi Becker",
                "email": "maryam.gusikowski@gmail.com",
                "telefone": "782-691-0238 x3298"
            },
            "cacifo": {
                "id": 19,
                "numero": 338,
                "temperatura": "7",
                "codigo": "DVfqacU6t",
                "tamanho_id": 3,
                "estado_id": 2,
                "localizacao_id": 2,
                "tamanho": {
                    "id": 3,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 2,
                    "nome": "Fay Locks",
                    "lat": "43.884245",
                    "long": "0.511181"
                }
            },
            "estafeta": [
                {
                    "id": 4,
                    "nome": "Brandi Dach",
                    "email": "jude.jakubowski@yahoo.com",
                    "telefone": "1-693-284-3319 x657",
                    "data_nascimento": "1994-08-04",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 5,
                        "user_id": 4
                    }
                }
            ],
            "href": {
                "cliente": "http:\/\/localhost\/api\/clientes\/1",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/19"
            }
        },
        {
            "id": 8,
            "numero_encomenda": 126,
            "data_estimada": "2017-11-02 14:00:12",
            "data_de_entrega": "2010-02-07 06:13:55",
            "data_de_levantamento": "2014-05-16 10:03:19",
            "data_de_entrada_no_sistema": "2010-06-02 01:25:11",
            "data_de_entrega_pretendida": "1980-08-18 06:20:31",
            "tempo_limite_de_levantamento": "1992-01-22 03:36:11",
            "estado_encomenda": 0,
            "temperatura": "4.3",
            "observacoes": "ARE OLD, FATHER WILLIAM,' to the voice of the goldfish kept running in her life; it was only too glad to find that she looked down, was an uncomfortably sharp chin. However, she got up, and there.",
            "tamanho": "XL",
            "localizacao": "Blick Causeway",
            "cliente_id": 1,
            "cacifo_id": 8,
            "cliente": {
                "id": 1,
                "nome": "Noemi Becker",
                "email": "maryam.gusikowski@gmail.com",
                "telefone": "782-691-0238 x3298"
            },
            "cacifo": {
                "id": 8,
                "numero": 322,
                "temperatura": "7.3",
                "codigo": "G4Xfalg5",
                "tamanho_id": 3,
                "estado_id": 1,
                "localizacao_id": 3,
                "tamanho": {
                    "id": 3,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 3,
                    "nome": "Hegmann Prairie",
                    "lat": "46.23877",
                    "long": "68.079565"
                }
            },
            "estafeta": [
                {
                    "id": 4,
                    "nome": "Brandi Dach",
                    "email": "jude.jakubowski@yahoo.com",
                    "telefone": "1-693-284-3319 x657",
                    "data_nascimento": "1994-08-04",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 8,
                        "user_id": 4
                    }
                }
            ],
            "href": {
                "cliente": "http:\/\/localhost\/api\/clientes\/1",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/8"
            }
        },
        {
            "id": 16,
            "numero_encomenda": 287,
            "data_estimada": "1981-01-31 11:10:50",
            "data_de_entrega": "1980-03-11 15:55:59",
            "data_de_levantamento": "1972-04-20 22:06:01",
            "data_de_entrada_no_sistema": "1982-03-25 15:36:32",
            "data_de_entrega_pretendida": "2004-02-26 04:08:32",
            "tempo_limite_de_levantamento": "2003-07-14 03:58:04",
            "estado_encomenda": 1,
            "temperatura": "3.2",
            "observacoes": "I could not stand, and she felt that there was a paper label, with the strange creatures of her age knew the right house, because the chimneys were shaped like the tone of delight, which changed.",
            "tamanho": "S",
            "localizacao": "Brionna Hollow",
            "cliente_id": 1,
            "cacifo_id": 14,
            "cliente": {
                "id": 1,
                "nome": "Noemi Becker",
                "email": "maryam.gusikowski@gmail.com",
                "telefone": "782-691-0238 x3298"
            },
            "cacifo": {
                "id": 14,
                "numero": 12,
                "temperatura": "2.8",
                "codigo": "3MJtlo",
                "tamanho_id": 4,
                "estado_id": 1,
                "localizacao_id": 3,
                "tamanho": {
                    "id": 4,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 3,
                    "nome": "Hegmann Prairie",
                    "lat": "46.23877",
                    "long": "68.079565"
                }
            },
            "estafeta": [
                {
                    "id": 6,
                    "nome": "Dr. Katherine Krajcik",
                    "email": "stefan34@gmail.com",
                    "telefone": "232.728.9409",
                    "data_nascimento": "1988-12-28",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 16,
                        "user_id": 6
                    }
                }
            ],
            "href": {
                "cliente": "http:\/\/localhost\/api\/clientes\/1",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/14"
            }
        }
    ],
    "msg": "success",
    "code": 200
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
{
    "data": [
        {
            "id": 1,
            "numero_encomenda": 149,
            "data_estimada": "1996-06-27 01:49:33",
            "data_de_entrega": "1975-03-20 15:01:26",
            "data_de_levantamento": "1986-03-21 09:59:49",
            "data_de_entrada": "1984-04-01 06:54:57",
            "data_de_entrega_pretendida": "1983-02-01 00:19:02",
            "tempolimite_de_levantamento": "2015-07-07 11:25:30",
            "estado_encomenda": 1,
            "temperatura": "1.4",
            "observacoes": "Lory, with a bound into the sky all the players, except the Lizard, who seemed too much pepper in my own tears! That WILL be a LITTLE larger, sir, if you could see it pop down a large plate came.",
            "tamanho": "S",
            "localizacao": "Bart Forest",
            "cliente": {
                "id": 1,
                "nome": "Noemi Becker",
                "email": "maryam.gusikowski@gmail.com",
                "telefone": "782-691-0238 x3298"
            },
            "estafeta": [
                {
                    "id": 3,
                    "nome": "Mikel Hauck MD",
                    "email": "yhermiston@gmail.com",
                    "telefone": "(838) 541-7325 x3592",
                    "data_nascimento": "1974-03-18",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 1,
                        "user_id": 3
                    }
                }
            ],
            "cacifo": {
                "id": 4,
                "numero": 251,
                "temperatura": "4.9",
                "codigo": "lodbC",
                "tamanho_id": 2,
                "estado_id": 2,
                "localizacao_id": 5,
                "tamanho": {
                    "id": 2,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 5,
                    "nome": "Millie Greens",
                    "lat": "34.573756",
                    "long": "-35.68727"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/1",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/4",
                "cliente": "http:\/\/localhost\/api\/clientes\/1"
            }
        },
        {
            "id": 2,
            "numero_encomenda": 862,
            "data_estimada": "2006-08-10 07:34:15",
            "data_de_entrega": "2018-02-09 02:34:33",
            "data_de_levantamento": "1980-02-02 21:04:56",
            "data_de_entrada": "1999-05-16 11:08:23",
            "data_de_entrega_pretendida": "1970-08-14 01:04:29",
            "tempolimite_de_levantamento": "1985-02-22 17:34:35",
            "estado_encomenda": 1,
            "temperatura": "8.2",
            "observacoes": "She had not as yet had any dispute with the bones and the Dormouse went on, 'you see, a dog growls when it's angry, and wags its tail when it's angry, and wags its tail about in all directions.",
            "tamanho": "L",
            "localizacao": "Herman Turnpike",
            "cliente": {
                "id": 8,
                "nome": "Holly Jast",
                "email": "simonis.stacey@hotmail.com",
                "telefone": "+1.373.986.4687"
            },
            "estafeta": [
                {
                    "id": 4,
                    "nome": "Brandi Dach",
                    "email": "jude.jakubowski@yahoo.com",
                    "telefone": "1-693-284-3319 x657",
                    "data_nascimento": "1994-08-04",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 2,
                        "user_id": 4
                    }
                }
            ],
            "cacifo": {
                "id": 7,
                "numero": 1,
                "temperatura": "2.2",
                "codigo": "on4qofS",
                "tamanho_id": 4,
                "estado_id": 2,
                "localizacao_id": 2,
                "tamanho": {
                    "id": 4,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 2,
                    "nome": "Fay Locks",
                    "lat": "43.884245",
                    "long": "0.511181"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/2",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/7",
                "cliente": "http:\/\/localhost\/api\/clientes\/8"
            }
        },
        {
            "id": 3,
            "numero_encomenda": 432,
            "data_estimada": "1984-12-21 09:43:56",
            "data_de_entrega": "1977-08-05 10:53:10",
            "data_de_levantamento": "1978-11-25 18:52:52",
            "data_de_entrada": "2002-03-31 04:54:34",
            "data_de_entrega_pretendida": "1982-11-03 14:14:15",
            "tempolimite_de_levantamento": "2009-06-20 06:20:54",
            "estado_encomenda": 1,
            "temperatura": "9.1",
            "observacoes": "Alice went on, 'What HAVE you been doing here?' 'May it please your Majesty,' said the Hatter: 'it's very rude.' The Hatter was the first verse,' said the Cat, 'if you don't like them!' When the.",
            "tamanho": "M",
            "localizacao": "Alycia Ways",
            "cliente": {
                "id": 9,
                "nome": "Roscoe Steuber",
                "email": "gcole@hotmail.com",
                "telefone": "214-553-8218 x171"
            },
            "estafeta": [
                {
                    "id": 8,
                    "nome": "Mr. Consuelo Schinner",
                    "email": "ebba49@yahoo.com",
                    "telefone": "759.363.0359 x0889",
                    "data_nascimento": "1979-12-22",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 3,
                        "user_id": 8
                    }
                }
            ],
            "cacifo": {
                "id": 15,
                "numero": 449,
                "temperatura": "6.8",
                "codigo": "oKpVA",
                "tamanho_id": 4,
                "estado_id": 2,
                "localizacao_id": 5,
                "tamanho": {
                    "id": 4,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 5,
                    "nome": "Millie Greens",
                    "lat": "34.573756",
                    "long": "-35.68727"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/3",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/15",
                "cliente": "http:\/\/localhost\/api\/clientes\/9"
            }
        },
        {
            "id": 4,
            "numero_encomenda": 189,
            "data_estimada": "1973-06-25 20:49:46",
            "data_de_entrega": "2008-07-04 02:44:23",
            "data_de_levantamento": "2011-11-09 19:55:50",
            "data_de_entrada": "2005-05-14 21:41:16",
            "data_de_entrega_pretendida": "1973-09-01 00:52:17",
            "tempolimite_de_levantamento": "1985-11-30 12:52:29",
            "estado_encomenda": 1,
            "temperatura": "1",
            "observacoes": "King. 'I can't go no lower,' said the Hatter: 'let's all move one place on.' He moved on as he said to the company generally, 'You are old,' said the Duchess; 'and most of 'em do.' 'I don't much.",
            "tamanho": "L",
            "localizacao": "Nadia Court",
            "cliente": {
                "id": 3,
                "nome": "Madge Barton",
                "email": "tjacobs@hotmail.com",
                "telefone": "363.645.8880"
            },
            "estafeta": [
                {
                    "id": 7,
                    "nome": "Florence Mitchell",
                    "email": "jacobi.marcia@gmail.com",
                    "telefone": "1-541-322-0112",
                    "data_nascimento": "1993-04-23",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 4,
                        "user_id": 7
                    }
                }
            ],
            "cacifo": {
                "id": 3,
                "numero": 281,
                "temperatura": "6.2",
                "codigo": "DrCdkY",
                "tamanho_id": 1,
                "estado_id": 2,
                "localizacao_id": 1,
                "tamanho": {
                    "id": 1,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 1,
                    "nome": "Deontae Radial",
                    "lat": "-81.935546",
                    "long": "165.201912"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/4",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/3",
                "cliente": "http:\/\/localhost\/api\/clientes\/3"
            }
        },
        {
            "id": 5,
            "numero_encomenda": 833,
            "data_estimada": "1992-03-13 23:14:23",
            "data_de_entrega": "2009-04-01 09:50:34",
            "data_de_levantamento": "1999-09-07 15:36:51",
            "data_de_entrada": "2006-09-13 19:00:04",
            "data_de_entrega_pretendida": "1978-02-27 09:51:52",
            "tempolimite_de_levantamento": "2015-06-18 19:02:21",
            "estado_encomenda": 1,
            "temperatura": "4.6",
            "observacoes": "Quick, now!' And Alice was not here before,' said the March Hare. 'Exactly so,' said Alice. 'Anything you like,' said the Hatter. 'You MUST remember,' remarked the King, who had been broken to.",
            "tamanho": "L",
            "localizacao": "Dallin Shoals",
            "cliente": {
                "id": 1,
                "nome": "Noemi Becker",
                "email": "maryam.gusikowski@gmail.com",
                "telefone": "782-691-0238 x3298"
            },
            "estafeta": [
                {
                    "id": 4,
                    "nome": "Brandi Dach",
                    "email": "jude.jakubowski@yahoo.com",
                    "telefone": "1-693-284-3319 x657",
                    "data_nascimento": "1994-08-04",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 5,
                        "user_id": 4
                    }
                }
            ],
            "cacifo": {
                "id": 19,
                "numero": 338,
                "temperatura": "7",
                "codigo": "DVfqacU6t",
                "tamanho_id": 3,
                "estado_id": 2,
                "localizacao_id": 2,
                "tamanho": {
                    "id": 3,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 2,
                    "nome": "Fay Locks",
                    "lat": "43.884245",
                    "long": "0.511181"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/5",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/19",
                "cliente": "http:\/\/localhost\/api\/clientes\/1"
            }
        },
        {
            "id": 6,
            "numero_encomenda": 99,
            "data_estimada": "1978-11-05 09:44:40",
            "data_de_entrega": "1981-04-28 18:45:48",
            "data_de_levantamento": "1996-08-30 02:39:14",
            "data_de_entrada": "1999-08-04 22:33:00",
            "data_de_entrega_pretendida": "1972-10-19 16:48:36",
            "tempolimite_de_levantamento": "2005-09-06 02:07:41",
            "estado_encomenda": 0,
            "temperatura": "8.3",
            "observacoes": "Good-bye, feet!' (for when she got to the law, And argued each case with my wife; And the Gryphon went on just as well. The twelve jurors were writing down 'stupid things!' on their slates, when the.",
            "tamanho": "L",
            "localizacao": "Gibson Lodge",
            "cliente": {
                "id": 7,
                "nome": "Kristofer McGlynn",
                "email": "simonis.itzel@gmail.com",
                "telefone": "(483) 880-7929 x070"
            },
            "estafeta": [
                {
                    "id": 7,
                    "nome": "Florence Mitchell",
                    "email": "jacobi.marcia@gmail.com",
                    "telefone": "1-541-322-0112",
                    "data_nascimento": "1993-04-23",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 6,
                        "user_id": 7
                    }
                }
            ],
            "cacifo": {
                "id": 8,
                "numero": 322,
                "temperatura": "7.3",
                "codigo": "G4Xfalg5",
                "tamanho_id": 3,
                "estado_id": 1,
                "localizacao_id": 3,
                "tamanho": {
                    "id": 3,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 3,
                    "nome": "Hegmann Prairie",
                    "lat": "46.23877",
                    "long": "68.079565"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/6",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/8",
                "cliente": "http:\/\/localhost\/api\/clientes\/7"
            }
        },
        {
            "id": 7,
            "numero_encomenda": 406,
            "data_estimada": "1982-06-13 10:02:58",
            "data_de_entrega": "1989-06-14 13:04:26",
            "data_de_levantamento": "2000-07-12 22:24:18",
            "data_de_entrada": "1996-07-30 17:45:18",
            "data_de_entrega_pretendida": "2008-05-12 19:03:23",
            "tempolimite_de_levantamento": "1970-09-26 16:35:44",
            "estado_encomenda": 1,
            "temperatura": "5.2",
            "observacoes": "After these came the royal children; there were any tears. No, there were TWO little shrieks, and more faintly came, carried on the same when I grow at a reasonable pace,' said the Hatter. Alice.",
            "tamanho": "S",
            "localizacao": "Windler Square",
            "cliente": {
                "id": 5,
                "nome": "Katheryn Lang",
                "email": "reid.jenkins@hotmail.com",
                "telefone": "1-710-445-9116"
            },
            "estafeta": [
                {
                    "id": 5,
                    "nome": "Emely Ziemann PhD",
                    "email": "jace45@hotmail.com",
                    "telefone": "+1-798-915-3635",
                    "data_nascimento": "1978-07-20",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 7,
                        "user_id": 5
                    }
                }
            ],
            "cacifo": {
                "id": 5,
                "numero": 493,
                "temperatura": "5",
                "codigo": "uOdfMa",
                "tamanho_id": 2,
                "estado_id": 2,
                "localizacao_id": 4,
                "tamanho": {
                    "id": 2,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 4,
                    "nome": "Durgan Stravenue",
                    "lat": "38.731756",
                    "long": "0.386087"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/7",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/5",
                "cliente": "http:\/\/localhost\/api\/clientes\/5"
            }
        },
        {
            "id": 8,
            "numero_encomenda": 126,
            "data_estimada": "2017-11-02 14:00:12",
            "data_de_entrega": "2010-02-07 06:13:55",
            "data_de_levantamento": "2014-05-16 10:03:19",
            "data_de_entrada": "2010-06-02 01:25:11",
            "data_de_entrega_pretendida": "1980-08-18 06:20:31",
            "tempolimite_de_levantamento": "1992-01-22 03:36:11",
            "estado_encomenda": 0,
            "temperatura": "4.3",
            "observacoes": "ARE OLD, FATHER WILLIAM,' to the voice of the goldfish kept running in her life; it was only too glad to find that she looked down, was an uncomfortably sharp chin. However, she got up, and there.",
            "tamanho": "XL",
            "localizacao": "Blick Causeway",
            "cliente": {
                "id": 1,
                "nome": "Noemi Becker",
                "email": "maryam.gusikowski@gmail.com",
                "telefone": "782-691-0238 x3298"
            },
            "estafeta": [
                {
                    "id": 4,
                    "nome": "Brandi Dach",
                    "email": "jude.jakubowski@yahoo.com",
                    "telefone": "1-693-284-3319 x657",
                    "data_nascimento": "1994-08-04",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 8,
                        "user_id": 4
                    }
                }
            ],
            "cacifo": {
                "id": 8,
                "numero": 322,
                "temperatura": "7.3",
                "codigo": "G4Xfalg5",
                "tamanho_id": 3,
                "estado_id": 1,
                "localizacao_id": 3,
                "tamanho": {
                    "id": 3,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 3,
                    "nome": "Hegmann Prairie",
                    "lat": "46.23877",
                    "long": "68.079565"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/8",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/8",
                "cliente": "http:\/\/localhost\/api\/clientes\/1"
            }
        },
        {
            "id": 9,
            "numero_encomenda": 77,
            "data_estimada": "1995-07-16 06:21:31",
            "data_de_entrega": "1989-02-19 09:34:10",
            "data_de_levantamento": "1992-02-01 13:46:08",
            "data_de_entrada": "1990-12-19 16:15:35",
            "data_de_entrega_pretendida": "2012-01-24 22:47:36",
            "tempolimite_de_levantamento": "1994-11-28 15:03:52",
            "estado_encomenda": 0,
            "temperatura": "4.4",
            "observacoes": "I shall think nothing of the Queen furiously, throwing an inkstand at the corners: next the ten courtiers; these were ornamented all over with William the Conqueror.' (For, with all her fancy, that.",
            "tamanho": "S",
            "localizacao": "Kutch Harbor",
            "cliente": {
                "id": 4,
                "nome": "Lesley Kub",
                "email": "patience.hickle@hotmail.com",
                "telefone": "869-437-4198"
            },
            "estafeta": [
                {
                    "id": 2,
                    "nome": "Gerardo Stoltenberg DDS",
                    "email": "cassandre26@hotmail.com",
                    "telefone": "(875) 766-9156 x64768",
                    "data_nascimento": "1987-08-19",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 9,
                        "user_id": 2
                    }
                }
            ],
            "cacifo": {
                "id": 5,
                "numero": 493,
                "temperatura": "5",
                "codigo": "uOdfMa",
                "tamanho_id": 2,
                "estado_id": 2,
                "localizacao_id": 4,
                "tamanho": {
                    "id": 2,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 4,
                    "nome": "Durgan Stravenue",
                    "lat": "38.731756",
                    "long": "0.386087"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/9",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/5",
                "cliente": "http:\/\/localhost\/api\/clientes\/4"
            }
        },
        {
            "id": 10,
            "numero_encomenda": 319,
            "data_estimada": "2000-04-03 05:03:18",
            "data_de_entrega": "1979-12-19 19:10:31",
            "data_de_levantamento": "2018-09-24 14:28:10",
            "data_de_entrada": "2015-11-07 23:43:15",
            "data_de_entrega_pretendida": "1974-04-15 00:18:12",
            "tempolimite_de_levantamento": "1972-12-08 10:54:50",
            "estado_encomenda": 0,
            "temperatura": "1",
            "observacoes": "Alice: 'three inches is such a thing. After a while she remembered trying to find her in a great hurry. 'You did!' said the Hatter, with an air of great relief. 'Call the next moment a shower of.",
            "tamanho": "L",
            "localizacao": "West Prairie",
            "cliente": {
                "id": 8,
                "nome": "Holly Jast",
                "email": "simonis.stacey@hotmail.com",
                "telefone": "+1.373.986.4687"
            },
            "estafeta": [
                {
                    "id": 5,
                    "nome": "Emely Ziemann PhD",
                    "email": "jace45@hotmail.com",
                    "telefone": "+1-798-915-3635",
                    "data_nascimento": "1978-07-20",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 10,
                        "user_id": 5
                    }
                }
            ],
            "cacifo": {
                "id": 2,
                "numero": 290,
                "temperatura": "6",
                "codigo": "QWqshHqBm",
                "tamanho_id": 4,
                "estado_id": 1,
                "localizacao_id": 5,
                "tamanho": {
                    "id": 4,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 5,
                    "nome": "Millie Greens",
                    "lat": "34.573756",
                    "long": "-35.68727"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/10",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/2",
                "cliente": "http:\/\/localhost\/api\/clientes\/8"
            }
        },
        {
            "id": 11,
            "numero_encomenda": 148,
            "data_estimada": "1984-10-04 10:30:49",
            "data_de_entrega": "1998-09-07 11:16:52",
            "data_de_levantamento": "1994-04-12 12:43:45",
            "data_de_entrada": "2008-08-18 19:03:50",
            "data_de_entrega_pretendida": "1978-01-31 21:38:02",
            "tempolimite_de_levantamento": "1998-07-30 23:54:28",
            "estado_encomenda": 1,
            "temperatura": "1.8",
            "observacoes": "Gryphon, 'she wants for to know what a wonderful dream it had lost something; and she said to herself how this same little sister of hers that you never had to do it.' (And, as you are; secondly.",
            "tamanho": "M",
            "localizacao": "Prosacco Light",
            "cliente": {
                "id": 3,
                "nome": "Madge Barton",
                "email": "tjacobs@hotmail.com",
                "telefone": "363.645.8880"
            },
            "estafeta": [
                {
                    "id": 7,
                    "nome": "Florence Mitchell",
                    "email": "jacobi.marcia@gmail.com",
                    "telefone": "1-541-322-0112",
                    "data_nascimento": "1993-04-23",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 11,
                        "user_id": 7
                    }
                }
            ],
            "cacifo": {
                "id": 20,
                "numero": 134,
                "temperatura": "5.6",
                "codigo": "jJPlY8",
                "tamanho_id": 3,
                "estado_id": 2,
                "localizacao_id": 1,
                "tamanho": {
                    "id": 3,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 1,
                    "nome": "Deontae Radial",
                    "lat": "-81.935546",
                    "long": "165.201912"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/11",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/20",
                "cliente": "http:\/\/localhost\/api\/clientes\/3"
            }
        },
        {
            "id": 12,
            "numero_encomenda": 663,
            "data_estimada": "1998-03-02 17:42:24",
            "data_de_entrega": "1993-12-26 21:09:41",
            "data_de_levantamento": "1981-04-28 05:12:26",
            "data_de_entrada": "1987-10-06 05:24:17",
            "data_de_entrega_pretendida": "1992-03-16 06:28:03",
            "tempolimite_de_levantamento": "2002-05-17 06:00:19",
            "estado_encomenda": 0,
            "temperatura": "11.3",
            "observacoes": "Alice, 'to speak to this last remark that had made her draw back in a low, hurried tone. He looked at Alice, and sighing. 'It IS a long way back, and barking hoarsely all the other bit. Her chin was.",
            "tamanho": "L",
            "localizacao": "Runolfsson Parks",
            "cliente": {
                "id": 7,
                "nome": "Kristofer McGlynn",
                "email": "simonis.itzel@gmail.com",
                "telefone": "(483) 880-7929 x070"
            },
            "estafeta": [
                {
                    "id": 5,
                    "nome": "Emely Ziemann PhD",
                    "email": "jace45@hotmail.com",
                    "telefone": "+1-798-915-3635",
                    "data_nascimento": "1978-07-20",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 12,
                        "user_id": 5
                    }
                }
            ],
            "cacifo": {
                "id": 3,
                "numero": 281,
                "temperatura": "6.2",
                "codigo": "DrCdkY",
                "tamanho_id": 1,
                "estado_id": 2,
                "localizacao_id": 1,
                "tamanho": {
                    "id": 1,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 1,
                    "nome": "Deontae Radial",
                    "lat": "-81.935546",
                    "long": "165.201912"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/12",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/3",
                "cliente": "http:\/\/localhost\/api\/clientes\/7"
            }
        },
        {
            "id": 13,
            "numero_encomenda": 814,
            "data_estimada": "1990-10-30 12:26:36",
            "data_de_entrega": "2014-04-29 06:30:00",
            "data_de_levantamento": "1999-02-01 18:54:46",
            "data_de_entrada": "1980-05-31 16:28:31",
            "data_de_entrega_pretendida": "1976-12-18 18:49:46",
            "tempolimite_de_levantamento": "1978-08-25 02:36:03",
            "estado_encomenda": 0,
            "temperatura": "0.9",
            "observacoes": "Dodo. Then they all crowded round her, calling out in a sulky tone; 'Seven jogged my elbow.' On which Seven looked up and say \"Who am I to do that,' said the Hatter. 'Nor I,' said the Hatter. He.",
            "tamanho": "S",
            "localizacao": "Hoyt Burg",
            "cliente": {
                "id": 5,
                "nome": "Katheryn Lang",
                "email": "reid.jenkins@hotmail.com",
                "telefone": "1-710-445-9116"
            },
            "estafeta": [
                {
                    "id": 4,
                    "nome": "Brandi Dach",
                    "email": "jude.jakubowski@yahoo.com",
                    "telefone": "1-693-284-3319 x657",
                    "data_nascimento": "1994-08-04",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 13,
                        "user_id": 4
                    }
                }
            ],
            "cacifo": {
                "id": 7,
                "numero": 1,
                "temperatura": "2.2",
                "codigo": "on4qofS",
                "tamanho_id": 4,
                "estado_id": 2,
                "localizacao_id": 2,
                "tamanho": {
                    "id": 4,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 2,
                    "nome": "Fay Locks",
                    "lat": "43.884245",
                    "long": "0.511181"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/13",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/7",
                "cliente": "http:\/\/localhost\/api\/clientes\/5"
            }
        },
        {
            "id": 14,
            "numero_encomenda": 439,
            "data_estimada": "1998-11-24 22:29:27",
            "data_de_entrega": "1978-12-20 22:05:50",
            "data_de_levantamento": "1986-10-18 02:47:10",
            "data_de_entrada": "1989-05-14 16:29:48",
            "data_de_entrega_pretendida": "1973-09-02 21:45:47",
            "tempolimite_de_levantamento": "1999-07-07 23:07:05",
            "estado_encomenda": 0,
            "temperatura": "6.8",
            "observacoes": "Mouse's tail; 'but why do you call it sad?' And she squeezed herself up on tiptoe, and peeped over the fire, and at once set to work at once set to work very carefully, remarking, 'I really must be.",
            "tamanho": "S",
            "localizacao": "Medhurst Hill",
            "cliente": {
                "id": 5,
                "nome": "Katheryn Lang",
                "email": "reid.jenkins@hotmail.com",
                "telefone": "1-710-445-9116"
            },
            "estafeta": [
                {
                    "id": 7,
                    "nome": "Florence Mitchell",
                    "email": "jacobi.marcia@gmail.com",
                    "telefone": "1-541-322-0112",
                    "data_nascimento": "1993-04-23",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 14,
                        "user_id": 7
                    }
                }
            ],
            "cacifo": {
                "id": 14,
                "numero": 12,
                "temperatura": "2.8",
                "codigo": "3MJtlo",
                "tamanho_id": 4,
                "estado_id": 1,
                "localizacao_id": 3,
                "tamanho": {
                    "id": 4,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 3,
                    "nome": "Hegmann Prairie",
                    "lat": "46.23877",
                    "long": "68.079565"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/14",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/14",
                "cliente": "http:\/\/localhost\/api\/clientes\/5"
            }
        },
        {
            "id": 15,
            "numero_encomenda": 553,
            "data_estimada": "2001-07-16 19:50:53",
            "data_de_entrega": "1994-09-11 07:30:16",
            "data_de_levantamento": "1971-02-26 06:55:27",
            "data_de_entrada": "1987-03-06 19:46:35",
            "data_de_entrega_pretendida": "1981-02-17 09:22:17",
            "tempolimite_de_levantamento": "1983-06-19 01:43:44",
            "estado_encomenda": 0,
            "temperatura": "4.4",
            "observacoes": "I used--and I don't want to get very tired of being upset, and their curls got entangled together. Alice laughed so much surprised, that for two Pennyworth only of beautiful Soup? Beau--ootiful.",
            "tamanho": "XL",
            "localizacao": "Annabell Circle",
            "cliente": {
                "id": 8,
                "nome": "Holly Jast",
                "email": "simonis.stacey@hotmail.com",
                "telefone": "+1.373.986.4687"
            },
            "estafeta": [
                {
                    "id": 8,
                    "nome": "Mr. Consuelo Schinner",
                    "email": "ebba49@yahoo.com",
                    "telefone": "759.363.0359 x0889",
                    "data_nascimento": "1979-12-22",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 15,
                        "user_id": 8
                    }
                }
            ],
            "cacifo": {
                "id": 10,
                "numero": 400,
                "temperatura": "8.4",
                "codigo": "yXbYDV",
                "tamanho_id": 4,
                "estado_id": 1,
                "localizacao_id": 3,
                "tamanho": {
                    "id": 4,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 3,
                    "nome": "Hegmann Prairie",
                    "lat": "46.23877",
                    "long": "68.079565"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/15",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/10",
                "cliente": "http:\/\/localhost\/api\/clientes\/8"
            }
        },
        {
            "id": 16,
            "numero_encomenda": 287,
            "data_estimada": "1981-01-31 11:10:50",
            "data_de_entrega": "1980-03-11 15:55:59",
            "data_de_levantamento": "1972-04-20 22:06:01",
            "data_de_entrada": "1982-03-25 15:36:32",
            "data_de_entrega_pretendida": "2004-02-26 04:08:32",
            "tempolimite_de_levantamento": "2003-07-14 03:58:04",
            "estado_encomenda": 1,
            "temperatura": "3.2",
            "observacoes": "I could not stand, and she felt that there was a paper label, with the strange creatures of her age knew the right house, because the chimneys were shaped like the tone of delight, which changed.",
            "tamanho": "S",
            "localizacao": "Brionna Hollow",
            "cliente": {
                "id": 1,
                "nome": "Noemi Becker",
                "email": "maryam.gusikowski@gmail.com",
                "telefone": "782-691-0238 x3298"
            },
            "estafeta": [
                {
                    "id": 6,
                    "nome": "Dr. Katherine Krajcik",
                    "email": "stefan34@gmail.com",
                    "telefone": "232.728.9409",
                    "data_nascimento": "1988-12-28",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 16,
                        "user_id": 6
                    }
                }
            ],
            "cacifo": {
                "id": 14,
                "numero": 12,
                "temperatura": "2.8",
                "codigo": "3MJtlo",
                "tamanho_id": 4,
                "estado_id": 1,
                "localizacao_id": 3,
                "tamanho": {
                    "id": 4,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 3,
                    "nome": "Hegmann Prairie",
                    "lat": "46.23877",
                    "long": "68.079565"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/16",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/14",
                "cliente": "http:\/\/localhost\/api\/clientes\/1"
            }
        },
        {
            "id": 17,
            "numero_encomenda": 983,
            "data_estimada": "1971-06-27 10:35:23",
            "data_de_entrega": "1977-07-22 09:11:36",
            "data_de_levantamento": "1973-05-14 15:29:46",
            "data_de_entrada": "2015-04-22 17:42:13",
            "data_de_entrega_pretendida": "1998-12-14 14:31:00",
            "tempolimite_de_levantamento": "1988-04-06 06:37:35",
            "estado_encomenda": 0,
            "temperatura": "9.7",
            "observacoes": "CAN all that green stuff be?' said Alice. 'You did,' said the White Rabbit, 'but it sounds uncommon nonsense.' Alice said very politely, 'for I never understood what it meant till now.' 'If that's.",
            "tamanho": "S",
            "localizacao": "Isaiah Skyway",
            "cliente": {
                "id": 4,
                "nome": "Lesley Kub",
                "email": "patience.hickle@hotmail.com",
                "telefone": "869-437-4198"
            },
            "estafeta": [
                {
                    "id": 7,
                    "nome": "Florence Mitchell",
                    "email": "jacobi.marcia@gmail.com",
                    "telefone": "1-541-322-0112",
                    "data_nascimento": "1993-04-23",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 17,
                        "user_id": 7
                    }
                }
            ],
            "cacifo": {
                "id": 1,
                "numero": 404,
                "temperatura": "10.2",
                "codigo": "hNash",
                "tamanho_id": 1,
                "estado_id": 2,
                "localizacao_id": 4,
                "tamanho": {
                    "id": 1,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 4,
                    "nome": "Durgan Stravenue",
                    "lat": "38.731756",
                    "long": "0.386087"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/17",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/1",
                "cliente": "http:\/\/localhost\/api\/clientes\/4"
            }
        },
        {
            "id": 18,
            "numero_encomenda": 871,
            "data_estimada": "2008-09-29 18:41:44",
            "data_de_entrega": "2003-01-24 11:48:50",
            "data_de_levantamento": "2009-12-31 13:16:51",
            "data_de_entrada": "1997-03-03 20:26:25",
            "data_de_entrega_pretendida": "1993-02-13 19:40:20",
            "tempolimite_de_levantamento": "2011-03-21 18:54:07",
            "estado_encomenda": 1,
            "temperatura": "3.7",
            "observacoes": "I begin, please your Majesty?' he asked. 'Begin at the top of his shrill little voice, the name 'Alice!' CHAPTER XII. Alice's Evidence 'Here!' cried Alice, jumping up and said, without opening its.",
            "tamanho": "S",
            "localizacao": "Ortiz Junction",
            "cliente": {
                "id": 5,
                "nome": "Katheryn Lang",
                "email": "reid.jenkins@hotmail.com",
                "telefone": "1-710-445-9116"
            },
            "estafeta": [
                {
                    "id": 3,
                    "nome": "Mikel Hauck MD",
                    "email": "yhermiston@gmail.com",
                    "telefone": "(838) 541-7325 x3592",
                    "data_nascimento": "1974-03-18",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 18,
                        "user_id": 3
                    }
                }
            ],
            "cacifo": {
                "id": 12,
                "numero": 215,
                "temperatura": "2",
                "codigo": "3XH9Tu",
                "tamanho_id": 2,
                "estado_id": 2,
                "localizacao_id": 4,
                "tamanho": {
                    "id": 2,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 4,
                    "nome": "Durgan Stravenue",
                    "lat": "38.731756",
                    "long": "0.386087"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/18",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/12",
                "cliente": "http:\/\/localhost\/api\/clientes\/5"
            }
        },
        {
            "id": 19,
            "numero_encomenda": 678,
            "data_estimada": "1971-07-22 16:16:09",
            "data_de_entrega": "2011-01-18 16:05:28",
            "data_de_levantamento": "2018-12-19 21:33:48",
            "data_de_entrada": "2002-11-28 18:02:00",
            "data_de_entrega_pretendida": "2018-09-21 14:36:42",
            "tempolimite_de_levantamento": "1991-07-22 23:43:08",
            "estado_encomenda": 1,
            "temperatura": "8.8",
            "observacoes": "Gryphon added 'Come, let's try Geography. London is the capital of Paris, and Paris is the use of a dance is it?' 'Why,' said the Caterpillar took the cauldron of soup off the subjects on his.",
            "tamanho": "S",
            "localizacao": "Lesch Underpass",
            "cliente": {
                "id": 6,
                "nome": "Prof. Barry Brekke",
                "email": "rowan03@hotmail.com",
                "telefone": "1-952-222-5406 x997"
            },
            "estafeta": [
                {
                    "id": 5,
                    "nome": "Emely Ziemann PhD",
                    "email": "jace45@hotmail.com",
                    "telefone": "+1-798-915-3635",
                    "data_nascimento": "1978-07-20",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 19,
                        "user_id": 5
                    }
                }
            ],
            "cacifo": {
                "id": 16,
                "numero": 196,
                "temperatura": "2.9",
                "codigo": "mDOIqV",
                "tamanho_id": 1,
                "estado_id": 1,
                "localizacao_id": 4,
                "tamanho": {
                    "id": 1,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 4,
                    "nome": "Durgan Stravenue",
                    "lat": "38.731756",
                    "long": "0.386087"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/19",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/16",
                "cliente": "http:\/\/localhost\/api\/clientes\/6"
            }
        },
        {
            "id": 20,
            "numero_encomenda": 91,
            "data_estimada": "2011-04-20 21:44:36",
            "data_de_entrega": "1985-02-14 21:00:01",
            "data_de_levantamento": "2017-01-26 10:46:52",
            "data_de_entrada": "1975-03-15 07:20:56",
            "data_de_entrega_pretendida": "1985-01-21 03:39:24",
            "tempolimite_de_levantamento": "1991-05-11 10:00:18",
            "estado_encomenda": 1,
            "temperatura": "4",
            "observacoes": "There was nothing on it but tea. 'I don't think it's at all a pity. I said \"What for?\"' 'She boxed the Queen's absence, and were resting in the night? Let me see: four times five is twelve, and four.",
            "tamanho": "L",
            "localizacao": "Patrick Way",
            "cliente": {
                "id": 9,
                "nome": "Roscoe Steuber",
                "email": "gcole@hotmail.com",
                "telefone": "214-553-8218 x171"
            },
            "estafeta": [
                {
                    "id": 6,
                    "nome": "Dr. Katherine Krajcik",
                    "email": "stefan34@gmail.com",
                    "telefone": "232.728.9409",
                    "data_nascimento": "1988-12-28",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 20,
                        "user_id": 6
                    }
                }
            ],
            "cacifo": {
                "id": 15,
                "numero": 449,
                "temperatura": "6.8",
                "codigo": "oKpVA",
                "tamanho_id": 4,
                "estado_id": 2,
                "localizacao_id": 5,
                "tamanho": {
                    "id": 4,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 5,
                    "nome": "Millie Greens",
                    "lat": "34.573756",
                    "long": "-35.68727"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/20",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/15",
                "cliente": "http:\/\/localhost\/api\/clientes\/9"
            }
        },
        {
            "id": 21,
            "numero_encomenda": 579,
            "data_estimada": "2004-07-13 02:26:09",
            "data_de_entrega": "2009-03-28 11:18:21",
            "data_de_levantamento": "2012-08-27 19:46:02",
            "data_de_entrada": "1997-08-27 21:22:49",
            "data_de_entrega_pretendida": "2018-10-15 05:22:41",
            "tempolimite_de_levantamento": "1976-03-22 09:12:00",
            "estado_encomenda": 0,
            "temperatura": "2.8",
            "observacoes": "Mary Ann, what ARE you talking to?' said one of the evening, beautiful Soup! Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Soo--oop of the doors of the garden, where Alice could see it trying in a.",
            "tamanho": "L",
            "localizacao": "Buckridge Plaza",
            "cliente": {
                "id": 2,
                "nome": "Geovany Durgan",
                "email": "sabina.kerluke@yahoo.com",
                "telefone": "+1 (417) 208-9707"
            },
            "estafeta": [
                {
                    "id": 1,
                    "nome": "Shad Welch",
                    "email": "alexie.blick@hotmail.com",
                    "telefone": "+1.352.926.4048",
                    "data_nascimento": "1989-06-19",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 21,
                        "user_id": 1
                    }
                }
            ],
            "cacifo": {
                "id": 17,
                "numero": 470,
                "temperatura": "8.1",
                "codigo": "WrE5r",
                "tamanho_id": 2,
                "estado_id": 2,
                "localizacao_id": 4,
                "tamanho": {
                    "id": 2,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 4,
                    "nome": "Durgan Stravenue",
                    "lat": "38.731756",
                    "long": "0.386087"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/21",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/17",
                "cliente": "http:\/\/localhost\/api\/clientes\/2"
            }
        },
        {
            "id": 22,
            "numero_encomenda": 418,
            "data_estimada": "1995-03-05 12:06:01",
            "data_de_entrega": "1979-09-20 23:25:54",
            "data_de_levantamento": "1995-02-14 09:11:45",
            "data_de_entrada": "1983-11-04 23:29:51",
            "data_de_entrega_pretendida": "2011-03-26 05:01:08",
            "tempolimite_de_levantamento": "1979-09-18 03:08:32",
            "estado_encomenda": 1,
            "temperatura": "4.2",
            "observacoes": "I grow up, I'll write one--but I'm grown up now,' she added in an offended tone, and added with a great crowd assembled about them--all sorts of little Alice and all would change to dull.",
            "tamanho": "L",
            "localizacao": "Gustave Burg",
            "cliente": {
                "id": 10,
                "nome": "Garrick Hyatt",
                "email": "ydibbert@gmail.com",
                "telefone": "+1.907.668.9548"
            },
            "estafeta": [
                {
                    "id": 7,
                    "nome": "Florence Mitchell",
                    "email": "jacobi.marcia@gmail.com",
                    "telefone": "1-541-322-0112",
                    "data_nascimento": "1993-04-23",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 22,
                        "user_id": 7
                    }
                }
            ],
            "cacifo": {
                "id": 7,
                "numero": 1,
                "temperatura": "2.2",
                "codigo": "on4qofS",
                "tamanho_id": 4,
                "estado_id": 2,
                "localizacao_id": 2,
                "tamanho": {
                    "id": 4,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 2,
                    "nome": "Fay Locks",
                    "lat": "43.884245",
                    "long": "0.511181"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/22",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/7",
                "cliente": "http:\/\/localhost\/api\/clientes\/10"
            }
        },
        {
            "id": 23,
            "numero_encomenda": 821,
            "data_estimada": "2003-02-20 12:36:49",
            "data_de_entrega": "2014-02-20 22:58:39",
            "data_de_levantamento": "2012-01-20 05:55:45",
            "data_de_entrada": "1978-01-21 18:18:03",
            "data_de_entrega_pretendida": "1983-01-19 01:15:59",
            "tempolimite_de_levantamento": "1988-04-20 14:15:58",
            "estado_encomenda": 0,
            "temperatura": "0.8",
            "observacoes": "Mock Turtle in a mournful tone, 'he won't do a thing before, but she gained courage as she went on in a rather offended tone, and everybody laughed, 'Let the jury wrote it down 'important,' and some.",
            "tamanho": "S",
            "localizacao": "Sven Dam",
            "cliente": {
                "id": 9,
                "nome": "Roscoe Steuber",
                "email": "gcole@hotmail.com",
                "telefone": "214-553-8218 x171"
            },
            "estafeta": [
                {
                    "id": 3,
                    "nome": "Mikel Hauck MD",
                    "email": "yhermiston@gmail.com",
                    "telefone": "(838) 541-7325 x3592",
                    "data_nascimento": "1974-03-18",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 23,
                        "user_id": 3
                    }
                }
            ],
            "cacifo": {
                "id": 9,
                "numero": 88,
                "temperatura": "6.4",
                "codigo": "bm6M9",
                "tamanho_id": 4,
                "estado_id": 1,
                "localizacao_id": 2,
                "tamanho": {
                    "id": 4,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 2,
                    "nome": "Fay Locks",
                    "lat": "43.884245",
                    "long": "0.511181"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/23",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/9",
                "cliente": "http:\/\/localhost\/api\/clientes\/9"
            }
        },
        {
            "id": 24,
            "numero_encomenda": 66,
            "data_estimada": "2006-10-13 10:30:50",
            "data_de_entrega": "1971-12-23 01:05:37",
            "data_de_levantamento": "2001-08-01 07:00:03",
            "data_de_entrada": "1998-01-20 22:53:06",
            "data_de_entrega_pretendida": "1993-08-27 00:23:52",
            "tempolimite_de_levantamento": "1978-05-18 22:58:18",
            "estado_encomenda": 0,
            "temperatura": "2.5",
            "observacoes": "Alice went on eagerly: 'There is such a dear quiet thing,' Alice went on saying to her great delight it fitted! Alice opened the door of which was lit up by two guinea-pigs, who were all ornamented.",
            "tamanho": "M",
            "localizacao": "Schulist Squares",
            "cliente": {
                "id": 5,
                "nome": "Katheryn Lang",
                "email": "reid.jenkins@hotmail.com",
                "telefone": "1-710-445-9116"
            },
            "estafeta": [
                {
                    "id": 1,
                    "nome": "Shad Welch",
                    "email": "alexie.blick@hotmail.com",
                    "telefone": "+1.352.926.4048",
                    "data_nascimento": "1989-06-19",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 24,
                        "user_id": 1
                    }
                }
            ],
            "cacifo": {
                "id": 16,
                "numero": 196,
                "temperatura": "2.9",
                "codigo": "mDOIqV",
                "tamanho_id": 1,
                "estado_id": 1,
                "localizacao_id": 4,
                "tamanho": {
                    "id": 1,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 4,
                    "nome": "Durgan Stravenue",
                    "lat": "38.731756",
                    "long": "0.386087"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/24",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/16",
                "cliente": "http:\/\/localhost\/api\/clientes\/5"
            }
        },
        {
            "id": 25,
            "numero_encomenda": 668,
            "data_estimada": "1989-08-17 10:12:40",
            "data_de_entrega": "2008-04-30 11:59:13",
            "data_de_levantamento": "2006-03-10 09:58:15",
            "data_de_entrada": "1992-10-28 22:04:28",
            "data_de_entrega_pretendida": "1999-08-01 19:36:53",
            "tempolimite_de_levantamento": "1973-09-15 13:26:56",
            "estado_encomenda": 0,
            "temperatura": "6.1",
            "observacoes": "Mouse heard this, it turned round and look up in such confusion that she knew that were of the tail, and ending with the tea,' the March Hare and his friends shared their never-ending meal, and the.",
            "tamanho": "XL",
            "localizacao": "Jazlyn Lake",
            "cliente": {
                "id": 3,
                "nome": "Madge Barton",
                "email": "tjacobs@hotmail.com",
                "telefone": "363.645.8880"
            },
            "estafeta": [
                {
                    "id": 4,
                    "nome": "Brandi Dach",
                    "email": "jude.jakubowski@yahoo.com",
                    "telefone": "1-693-284-3319 x657",
                    "data_nascimento": "1994-08-04",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 25,
                        "user_id": 4
                    }
                }
            ],
            "cacifo": {
                "id": 10,
                "numero": 400,
                "temperatura": "8.4",
                "codigo": "yXbYDV",
                "tamanho_id": 4,
                "estado_id": 1,
                "localizacao_id": 3,
                "tamanho": {
                    "id": 4,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 3,
                    "nome": "Hegmann Prairie",
                    "lat": "46.23877",
                    "long": "68.079565"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/25",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/10",
                "cliente": "http:\/\/localhost\/api\/clientes\/3"
            }
        }
    ],
    "msg": "success",
    "code": 200
}
```

### HTTP Request
`GET api/encomendas`


<!-- END_9103cfbc8321cf197d1d8d4f7fbedeb8 -->

<!-- START_351b13c152e13c47fcf0347d4daf989b -->
## Post Encomenda

Adiciona uma nova encomenda.

> Example request:

```bash
curl -X POST "http://localhost/api/encomendas"     -d "numero_encomenda"="4" \
    -d "data_estimada"="k8B4PVN3DYxupdtT" \
    -d "data_de_entrega"="dbcDtcUwdx8jCrQv" \
    -d "data_de_levantamento"="pmIE0ZkZ1deOZXqk" \
    -d "data_de_entrada_no_sistema"="WpcM0ZoUD16tIqBW" \
    -d "data_de_entrega_pretendida"="kNCWRmUGJU2uhiox" \
    -d "tempo_limite_de_levantamento"="HDaxZF9HA6hjvCQC" \
    -d "estado_encomenda"="1" \
    -d "temperatura"="2074.3" \
    -d "observacoes"="HbB9cwOMUlHxfozo" \
    -d "tamanho"="8SxzEfNovnG7qV21" \
    -d "localizacao"="Oft1BZl0zSUgzyQh" \
    -d "cliente_id"="HsVZIpEPbyRV29Qp" \
    -d "cacifo_id"="XoeyXw1ISpnJTFwd" 
```

```javascript
const url = new URL("http://localhost/api/encomendas");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "numero_encomenda": "4",
    "data_estimada": "k8B4PVN3DYxupdtT",
    "data_de_entrega": "dbcDtcUwdx8jCrQv",
    "data_de_levantamento": "pmIE0ZkZ1deOZXqk",
    "data_de_entrada_no_sistema": "WpcM0ZoUD16tIqBW",
    "data_de_entrega_pretendida": "kNCWRmUGJU2uhiox",
    "tempo_limite_de_levantamento": "HDaxZF9HA6hjvCQC",
    "estado_encomenda": "1",
    "temperatura": "2074.3",
    "observacoes": "HbB9cwOMUlHxfozo",
    "tamanho": "8SxzEfNovnG7qV21",
    "localizacao": "Oft1BZl0zSUgzyQh",
    "cliente_id": "HsVZIpEPbyRV29Qp",
    "cacifo_id": "XoeyXw1ISpnJTFwd",
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
    numero_encomenda | integer |  optional  | Número duma encomenda
    data_estimada | date |  required  | Data estimada da entrega da encomenda..
    data_de_entrega | date |  optional  | optional Data de entrega da encomenda.
    data_de_levantamento | date |  optional  | optional Data de levantamento da encomenda.
    data_de_entrada_no_sistema | date |  required  | Data em que a encomenda foi registada no sistema.
    data_de_entrega_pretendida | date |  required  | Data em que o cliente pretende a entrega.
    tempo_limite_de_levantamento | date |  required  | Tempo limite para o levantamento de certa encomenda.
    estado_encomenda | boolean |  optional  | Váriavel que diz se a encomenda está pronto para a entrega ou não
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
{
    "data": {
        "id": 1,
        "numero_encomenda": 149,
        "data_estimada": "1996-06-27 01:49:33",
        "data_de_entrega": "1975-03-20 15:01:26",
        "data_de_levantamento": "1986-03-21 09:59:49",
        "data_de_entrada_no_sistema": "1984-04-01 06:54:57",
        "data_de_entrega_pretendida": "1983-02-01 00:19:02",
        "tempo_limite_de_levantamento": "2015-07-07 11:25:30",
        "estado_encomenda": 1,
        "temperatura": "1.4",
        "observacoes": "Lory, with a bound into the sky all the players, except the Lizard, who seemed too much pepper in my own tears! That WILL be a LITTLE larger, sir, if you could see it pop down a large plate came.",
        "tamanho": "S",
        "localizacao": "Bart Forest",
        "cliente_id": 1,
        "cacifo_id": 4,
        "cliente": {
            "id": 1,
            "nome": "Noemi Becker",
            "email": "maryam.gusikowski@gmail.com",
            "telefone": "782-691-0238 x3298"
        },
        "cacifo": {
            "id": 4,
            "numero": 251,
            "temperatura": "4.9",
            "codigo": "lodbC",
            "tamanho_id": 2,
            "estado_id": 2,
            "localizacao_id": 5,
            "tamanho": {
                "id": 2,
                "tamanho": "L"
            },
            "estado": {
                "id": 2,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 5,
                "nome": "Millie Greens",
                "lat": "34.573756",
                "long": "-35.68727"
            }
        },
        "estafeta": [
            {
                "id": 3,
                "nome": "Mikel Hauck MD",
                "email": "yhermiston@gmail.com",
                "telefone": "(838) 541-7325 x3592",
                "data_nascimento": "1974-03-18",
                "local_de_trabalho": "TDIStore",
                "tipo_id": 2,
                "supervisor_id": 1,
                "pivot": {
                    "encomenda_id": 1,
                    "user_id": 3
                }
            }
        ],
        "href": {
            "cliente": "http:\/\/localhost\/api\/clientes\/1",
            "cacifo": "http:\/\/localhost\/api\/cacifos\/4"
        }
    }
}
```

### HTTP Request
`GET api/encomendas/{encomenda}`


<!-- END_e262c7297ef3120caf36a82783e68f06 -->

<!-- START_21b58c957ec03c5fd31f65ab1b836751 -->
## Update Encomenda

Atualiza uma encomenda.

> Example request:

```bash
curl -X PUT "http://localhost/api/encomendas/{encomenda}"     -d "numero_encomenda"="11" \
    -d "data_estimada"="4vz2EKeHqVAx7GN8" \
    -d "data_de_entrega"="0HGEImNl5wQGTwie" \
    -d "data_de_levantamento"="7nJ0CdxmCHL6YBV2" \
    -d "data_de_entrada_no_sistema"="e1wdxQeRk9C1NgCk" \
    -d "data_de_entrega_pretendida"="b1WVoHItgWpDmuOn" \
    -d "tempo_limite_de_levantamento"="gtUjQGaQWSxADTWU" \
    -d "estado_encomenda"="false" \
    -d "temperatura"="169832" \
    -d "observacoes"="BR5VFNXi5ynMvi9g" \
    -d "tamanho"="cAQbYzW0tDkxBv9f" \
    -d "localizacao"="oqZsICd91dZO2hlS" \
    -d "cliente_id"="RSprF6le3nntbLK7" \
    -d "cacifo_id"="rs5ZKJwQ1oHzXnvx" 
```

```javascript
const url = new URL("http://localhost/api/encomendas/{encomenda}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "numero_encomenda": "11",
    "data_estimada": "4vz2EKeHqVAx7GN8",
    "data_de_entrega": "0HGEImNl5wQGTwie",
    "data_de_levantamento": "7nJ0CdxmCHL6YBV2",
    "data_de_entrada_no_sistema": "e1wdxQeRk9C1NgCk",
    "data_de_entrega_pretendida": "b1WVoHItgWpDmuOn",
    "tempo_limite_de_levantamento": "gtUjQGaQWSxADTWU",
    "estado_encomenda": "",
    "temperatura": "169832",
    "observacoes": "BR5VFNXi5ynMvi9g",
    "tamanho": "cAQbYzW0tDkxBv9f",
    "localizacao": "oqZsICd91dZO2hlS",
    "cliente_id": "RSprF6le3nntbLK7",
    "cacifo_id": "rs5ZKJwQ1oHzXnvx",
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
    numero_encomenda | integer |  optional  | Número duma encomenda
    data_estimada | date |  optional  | optional Data estimada da entrega da encomenda..
    data_de_entrega | date |  optional  | optional Data de entrega da encomenda.
    data_de_levantamento | date |  optional  | optional Data de levantamento da encomenda.
    data_de_entrada_no_sistema | date |  optional  | optional Data em que a encomenda foi registada no sistema.
    data_de_entrega_pretendida | date |  optional  | optional Data em que o cliente pretende a entrega.
    tempo_limite_de_levantamento | date |  optional  | optional Tempo limite para o levantamento de certa encomenda.
    estado_encomenda | boolean |  optional  | Váriavel que diz se a encomenda está pronto para a entrega ou não
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
            "estado": "Disponivel",
            "href": {
                "link": "http:\/\/localhost\/api\/estados\/1"
            }
        },
        {
            "estado": "Indisponivel",
            "href": {
                "link": "http:\/\/localhost\/api\/estados\/2"
            }
        }
    ],
    "msg": "success",
    "code": 200
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
curl -X POST "http://localhost/api/estados"     -d "estado"="Is9I8peZ0VZ8ovw8" 
```

```javascript
const url = new URL("http://localhost/api/estados");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "estado": "Is9I8peZ0VZ8ovw8",
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
        "estado": "Disponivel"
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
curl -X PUT "http://localhost/api/estados/{estado}"     -d "estado"="LHokJgIzktvEsyvd" 
```

```javascript
const url = new URL("http://localhost/api/estados/{estado}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "estado": "LHokJgIzktvEsyvd",
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
            "nome": "Deontae Radial",
            "lat": "-81.935546",
            "long": "165.201912",
            "href": {
                "link": "http:\/\/localhost\/api\/localizacaos\/1"
            }
        },
        {
            "nome": "Fay Locks",
            "lat": "43.884245",
            "long": "0.511181",
            "href": {
                "link": "http:\/\/localhost\/api\/localizacaos\/2"
            }
        },
        {
            "nome": "Hegmann Prairie",
            "lat": "46.23877",
            "long": "68.079565",
            "href": {
                "link": "http:\/\/localhost\/api\/localizacaos\/3"
            }
        },
        {
            "nome": "Durgan Stravenue",
            "lat": "38.731756",
            "long": "0.386087",
            "href": {
                "link": "http:\/\/localhost\/api\/localizacaos\/4"
            }
        },
        {
            "nome": "Millie Greens",
            "lat": "34.573756",
            "long": "-35.68727",
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
curl -X POST "http://localhost/api/localizacaos"     -d "nome"="BTwzIyZmhmzQPOXC" \
    -d "lat"="358299272.9208" \
    -d "long"="156816609.04883" 
```

```javascript
const url = new URL("http://localhost/api/localizacaos");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "BTwzIyZmhmzQPOXC",
    "lat": "358299272.9208",
    "long": "156816609.04883",
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
        "nome": "Deontae Radial",
        "lat": "-81.935546",
        "long": "165.201912"
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
curl -X PUT "http://localhost/api/localizacaos/{localizacao}"     -d "nome"="plu7Bd5lsZx0RQKv" \
    -d "latitude"="YfvfEpU9QcxQYNl9" \
    -d "longitude"="IEiQX7IGTXU1e4Tm" 
```

```javascript
const url = new URL("http://localhost/api/localizacaos/{localizacao}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "plu7Bd5lsZx0RQKv",
    "latitude": "YfvfEpU9QcxQYNl9",
    "longitude": "IEiQX7IGTXU1e4Tm",
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
            "tamanho": "XL",
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
            "tamanho": "XL",
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
curl -X POST "http://localhost/api/tamanhos"     -d "tamanho"="dW207JGCPSTQtpLa" 
```

```javascript
const url = new URL("http://localhost/api/tamanhos");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "tamanho": "dW207JGCPSTQtpLa",
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
        "tamanho": "XL"
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
curl -X PUT "http://localhost/api/tamanhos/{tamanho}"     -d "tamanho"="mMq6uW9eNIGFheWE" 
```

```javascript
const url = new URL("http://localhost/api/tamanhos/{tamanho}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "tamanho": "mMq6uW9eNIGFheWE",
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
    ],
    "msg": "success",
    "code": 200
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
curl -X POST "http://localhost/api/userTypes"     -d "tipo"="ZTvJK9ovl4vF3H3o" 
```

```javascript
const url = new URL("http://localhost/api/userTypes");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "tipo": "ZTvJK9ovl4vF3H3o",
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
curl -X PUT "http://localhost/api/userTypes/{userType}"     -d "tipo"="MXB4ItlEAk67j678" 
```

```javascript
const url = new URL("http://localhost/api/userTypes/{userType}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "tipo": "MXB4ItlEAk67j678",
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
            "nome": "Shad Welch",
            "email": "alexie.blick@hotmail.com",
            "telefone": "+1.352.926.4048",
            "data_nascimento": "1989-06-19",
            "local_de_trabalho": "TDIStore",
            "tipo_id": 2,
            "supervisor_id": 1,
            "tipo": {
                "id": 2,
                "tipo": "Estafeta"
            }
        },
        {
            "id": 2,
            "nome": "Gerardo Stoltenberg DDS",
            "email": "cassandre26@hotmail.com",
            "telefone": "(875) 766-9156 x64768",
            "data_nascimento": "1987-08-19",
            "local_de_trabalho": "TDIStore",
            "tipo_id": 1,
            "supervisor_id": 1,
            "tipo": {
                "id": 1,
                "tipo": "Admin"
            }
        },
        {
            "id": 3,
            "nome": "Mikel Hauck MD",
            "email": "yhermiston@gmail.com",
            "telefone": "(838) 541-7325 x3592",
            "data_nascimento": "1974-03-18",
            "local_de_trabalho": "TDIStore",
            "tipo_id": 2,
            "supervisor_id": 1,
            "tipo": {
                "id": 2,
                "tipo": "Estafeta"
            }
        },
        {
            "id": 4,
            "nome": "Brandi Dach",
            "email": "jude.jakubowski@yahoo.com",
            "telefone": "1-693-284-3319 x657",
            "data_nascimento": "1994-08-04",
            "local_de_trabalho": "TDIStore",
            "tipo_id": 1,
            "supervisor_id": 1,
            "tipo": {
                "id": 1,
                "tipo": "Admin"
            }
        },
        {
            "id": 5,
            "nome": "Emely Ziemann PhD",
            "email": "jace45@hotmail.com",
            "telefone": "+1-798-915-3635",
            "data_nascimento": "1978-07-20",
            "local_de_trabalho": "TDIStore",
            "tipo_id": 1,
            "supervisor_id": 1,
            "tipo": {
                "id": 1,
                "tipo": "Admin"
            }
        },
        {
            "id": 6,
            "nome": "Dr. Katherine Krajcik",
            "email": "stefan34@gmail.com",
            "telefone": "232.728.9409",
            "data_nascimento": "1988-12-28",
            "local_de_trabalho": "TDIStore",
            "tipo_id": 2,
            "supervisor_id": 1,
            "tipo": {
                "id": 2,
                "tipo": "Estafeta"
            }
        },
        {
            "id": 7,
            "nome": "Florence Mitchell",
            "email": "jacobi.marcia@gmail.com",
            "telefone": "1-541-322-0112",
            "data_nascimento": "1993-04-23",
            "local_de_trabalho": "TDIStore",
            "tipo_id": 2,
            "supervisor_id": 1,
            "tipo": {
                "id": 2,
                "tipo": "Estafeta"
            }
        },
        {
            "id": 8,
            "nome": "Mr. Consuelo Schinner",
            "email": "ebba49@yahoo.com",
            "telefone": "759.363.0359 x0889",
            "data_nascimento": "1979-12-22",
            "local_de_trabalho": "TDIStore",
            "tipo_id": 2,
            "supervisor_id": 1,
            "tipo": {
                "id": 2,
                "tipo": "Estafeta"
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
curl -X POST "http://localhost/api/users"     -d "nome"="i8f8as23BO9DBSbI" \
    -d "email"="hxAfT4WTlVr7KWp6" \
    -d "password"="ncBp4KIw9MCRRMAE" \
    -d "telefone"="gsMMcKGG3OSOtqM5" \
    -d "data_nascimento"="l11IGt9eTPTBpU9J" \
    -d "local_de_trabalho"="2KYgFfftHRVNnXfp" \
    -d "tipo_id"="8tQK8Kq5voq2vo4z" \
    -d "supervisor_id"="03XG9EoYYrgzK86Z" 
```

```javascript
const url = new URL("http://localhost/api/users");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "i8f8as23BO9DBSbI",
    "email": "hxAfT4WTlVr7KWp6",
    "password": "ncBp4KIw9MCRRMAE",
    "telefone": "gsMMcKGG3OSOtqM5",
    "data_nascimento": "l11IGt9eTPTBpU9J",
    "local_de_trabalho": "2KYgFfftHRVNnXfp",
    "tipo_id": "8tQK8Kq5voq2vo4z",
    "supervisor_id": "03XG9EoYYrgzK86Z",
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
    local_de_trabalho | required |  optional  | Local de trabalho do utilizador
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
        "nome": "Shad Welch",
        "email": "alexie.blick@hotmail.com",
        "password": "A?G(?m=')(;t<zc^W",
        "telefone": "+1.352.926.4048",
        "data_nascimento": "1989-06-19",
        "local_de_trabalho": "TDIStore",
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
curl -X PUT "http://localhost/api/users/{user}"     -d "nome"="CpGyz4NSunZbx9d6" \
    -d "email"="9SnhhVVGHPEpMmJX" \
    -d "password"="AgIGioQzH6LBdgLM" \
    -d "telefone"="zzh2D3Uc45Y1H6GL" \
    -d "data_nascimento"="cRtiMARLBUYQngWD" \
    -d "tipo_id"="TOCTaPBkxkWDfjIx" \
    -d "supervisor_id"="Zhw0ioclZQMqhtCH" 
```

```javascript
const url = new URL("http://localhost/api/users/{user}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "CpGyz4NSunZbx9d6",
    "email": "9SnhhVVGHPEpMmJX",
    "password": "AgIGioQzH6LBdgLM",
    "telefone": "zzh2D3Uc45Y1H6GL",
    "data_nascimento": "cRtiMARLBUYQngWD",
    "tipo_id": "TOCTaPBkxkWDfjIx",
    "supervisor_id": "Zhw0ioclZQMqhtCH",
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
            "id": 21,
            "numero_encomenda": 579,
            "data_estimada": "2004-07-13 02:26:09",
            "data_de_entrega": "2009-03-28 11:18:21",
            "data_de_levantamento": "2012-08-27 19:46:02",
            "data_de_entrada_no_sistema": "1997-08-27 21:22:49",
            "data_de_entrega_pretendida": "2018-10-15 05:22:41",
            "tempo_limite_de_levantamento": "1976-03-22 09:12:00",
            "estado_encomenda": 0,
            "temperatura": "2.8",
            "observacoes": "Mary Ann, what ARE you talking to?' said one of the evening, beautiful Soup! Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Soo--oop of the doors of the garden, where Alice could see it trying in a.",
            "tamanho": "L",
            "localizacao": "Buckridge Plaza",
            "cliente_id": 2,
            "cacifo_id": 17,
            "cliente": {
                "id": 2,
                "nome": "Geovany Durgan",
                "email": "sabina.kerluke@yahoo.com",
                "telefone": "+1 (417) 208-9707"
            },
            "cacifo": {
                "id": 17,
                "numero": 470,
                "temperatura": "8.1",
                "codigo": "WrE5r",
                "tamanho_id": 2,
                "estado_id": 2,
                "localizacao_id": 4,
                "tamanho": {
                    "id": 2,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 4,
                    "nome": "Durgan Stravenue",
                    "lat": "38.731756",
                    "long": "0.386087"
                }
            },
            "estafeta": [
                {
                    "id": 1,
                    "nome": "Shad Welch",
                    "email": "alexie.blick@hotmail.com",
                    "telefone": "+1.352.926.4048",
                    "data_nascimento": "1989-06-19",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 21,
                        "user_id": 1
                    }
                }
            ],
            "href": {
                "cliente": "http:\/\/localhost\/api\/clientes\/2",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/17"
            }
        },
        {
            "id": 24,
            "numero_encomenda": 66,
            "data_estimada": "2006-10-13 10:30:50",
            "data_de_entrega": "1971-12-23 01:05:37",
            "data_de_levantamento": "2001-08-01 07:00:03",
            "data_de_entrada_no_sistema": "1998-01-20 22:53:06",
            "data_de_entrega_pretendida": "1993-08-27 00:23:52",
            "tempo_limite_de_levantamento": "1978-05-18 22:58:18",
            "estado_encomenda": 0,
            "temperatura": "2.5",
            "observacoes": "Alice went on eagerly: 'There is such a dear quiet thing,' Alice went on saying to her great delight it fitted! Alice opened the door of which was lit up by two guinea-pigs, who were all ornamented.",
            "tamanho": "M",
            "localizacao": "Schulist Squares",
            "cliente_id": 5,
            "cacifo_id": 16,
            "cliente": {
                "id": 5,
                "nome": "Katheryn Lang",
                "email": "reid.jenkins@hotmail.com",
                "telefone": "1-710-445-9116"
            },
            "cacifo": {
                "id": 16,
                "numero": 196,
                "temperatura": "2.9",
                "codigo": "mDOIqV",
                "tamanho_id": 1,
                "estado_id": 1,
                "localizacao_id": 4,
                "tamanho": {
                    "id": 1,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 4,
                    "nome": "Durgan Stravenue",
                    "lat": "38.731756",
                    "long": "0.386087"
                }
            },
            "estafeta": [
                {
                    "id": 1,
                    "nome": "Shad Welch",
                    "email": "alexie.blick@hotmail.com",
                    "telefone": "+1.352.926.4048",
                    "data_nascimento": "1989-06-19",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 24,
                        "user_id": 1
                    }
                }
            ],
            "href": {
                "cliente": "http:\/\/localhost\/api\/clientes\/5",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/16"
            }
        }
    ],
    "msg": "success",
    "code": 200
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


