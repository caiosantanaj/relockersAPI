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

Endpoint para controlar os cacifos
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
            "numero": 142,
            "temperatura": "1.1",
            "tamanho_id": 4,
            "estado_id": 2,
            "localizacao_id": 2,
            "tamanho": {
                "id": 4,
                "tamanho": "XL"
            },
            "estado": {
                "id": 2,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 2,
                "nome": "Miracle Brooks",
                "lat": "-24.618798",
                "lng": "-41.522721",
                "codigo_postal": "9193-865",
                "cidade": "Port Rustyberg"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/1",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/4",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/2"
            }
        },
        {
            "id": 2,
            "numero": 10,
            "temperatura": "8.5",
            "tamanho_id": 3,
            "estado_id": 1,
            "localizacao_id": 5,
            "tamanho": {
                "id": 3,
                "tamanho": "L"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 5,
                "nome": "Chester Lakes",
                "lat": "-68.571124",
                "lng": "59.732671",
                "codigo_postal": "6578-980",
                "cidade": "Lake Jefferystad"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/2",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/3",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/5"
            }
        },
        {
            "id": 3,
            "numero": 216,
            "temperatura": "1.4",
            "tamanho_id": 3,
            "estado_id": 1,
            "localizacao_id": 1,
            "tamanho": {
                "id": 3,
                "tamanho": "L"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 1,
                "nome": "Langosh Courts",
                "lat": "-28.781776",
                "lng": "173.302675",
                "codigo_postal": "3895-096",
                "cidade": "New Domenick"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/3",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/3",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/1"
            }
        },
        {
            "id": 4,
            "numero": 344,
            "temperatura": "1",
            "tamanho_id": 3,
            "estado_id": 1,
            "localizacao_id": 5,
            "tamanho": {
                "id": 3,
                "tamanho": "L"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 5,
                "nome": "Chester Lakes",
                "lat": "-68.571124",
                "lng": "59.732671",
                "codigo_postal": "6578-980",
                "cidade": "Lake Jefferystad"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/4",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/3",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/5"
            }
        },
        {
            "id": 5,
            "numero": 345,
            "temperatura": "4.2",
            "tamanho_id": 1,
            "estado_id": 2,
            "localizacao_id": 3,
            "tamanho": {
                "id": 1,
                "tamanho": "M"
            },
            "estado": {
                "id": 2,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 3,
                "nome": "Mario Brooks",
                "lat": "59.60196",
                "lng": "-79.552655",
                "codigo_postal": "3807-120",
                "cidade": "East Albachester"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/5",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/1",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/3"
            }
        },
        {
            "id": 6,
            "numero": 164,
            "temperatura": "6.8",
            "tamanho_id": 4,
            "estado_id": 2,
            "localizacao_id": 3,
            "tamanho": {
                "id": 4,
                "tamanho": "XL"
            },
            "estado": {
                "id": 2,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 3,
                "nome": "Mario Brooks",
                "lat": "59.60196",
                "lng": "-79.552655",
                "codigo_postal": "3807-120",
                "cidade": "East Albachester"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/6",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/4",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/3"
            }
        },
        {
            "id": 7,
            "numero": 20,
            "temperatura": "4.1",
            "tamanho_id": 2,
            "estado_id": 2,
            "localizacao_id": 1,
            "tamanho": {
                "id": 2,
                "tamanho": "XL"
            },
            "estado": {
                "id": 2,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 1,
                "nome": "Langosh Courts",
                "lat": "-28.781776",
                "lng": "173.302675",
                "codigo_postal": "3895-096",
                "cidade": "New Domenick"
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
            "numero": 8,
            "temperatura": "7.1",
            "tamanho_id": 1,
            "estado_id": 1,
            "localizacao_id": 5,
            "tamanho": {
                "id": 1,
                "tamanho": "M"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 5,
                "nome": "Chester Lakes",
                "lat": "-68.571124",
                "lng": "59.732671",
                "codigo_postal": "6578-980",
                "cidade": "Lake Jefferystad"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/8",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/1",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/5"
            }
        },
        {
            "id": 9,
            "numero": 45,
            "temperatura": "2.2",
            "tamanho_id": 2,
            "estado_id": 2,
            "localizacao_id": 2,
            "tamanho": {
                "id": 2,
                "tamanho": "XL"
            },
            "estado": {
                "id": 2,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 2,
                "nome": "Miracle Brooks",
                "lat": "-24.618798",
                "lng": "-41.522721",
                "codigo_postal": "9193-865",
                "cidade": "Port Rustyberg"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/9",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/2",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/2"
            }
        },
        {
            "id": 10,
            "numero": 435,
            "temperatura": "1.3",
            "tamanho_id": 2,
            "estado_id": 2,
            "localizacao_id": 4,
            "tamanho": {
                "id": 2,
                "tamanho": "XL"
            },
            "estado": {
                "id": 2,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 4,
                "nome": "Carter Ridge",
                "lat": "17.364717",
                "lng": "121.487486",
                "codigo_postal": "6293-543",
                "cidade": "Carmellafurt"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/10",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/2",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/4"
            }
        },
        {
            "id": 11,
            "numero": 194,
            "temperatura": "0.5",
            "tamanho_id": 1,
            "estado_id": 2,
            "localizacao_id": 5,
            "tamanho": {
                "id": 1,
                "tamanho": "M"
            },
            "estado": {
                "id": 2,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 5,
                "nome": "Chester Lakes",
                "lat": "-68.571124",
                "lng": "59.732671",
                "codigo_postal": "6578-980",
                "cidade": "Lake Jefferystad"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/11",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/1",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/5"
            }
        },
        {
            "id": 12,
            "numero": 474,
            "temperatura": "9.1",
            "tamanho_id": 4,
            "estado_id": 2,
            "localizacao_id": 1,
            "tamanho": {
                "id": 4,
                "tamanho": "XL"
            },
            "estado": {
                "id": 2,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 1,
                "nome": "Langosh Courts",
                "lat": "-28.781776",
                "lng": "173.302675",
                "codigo_postal": "3895-096",
                "cidade": "New Domenick"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/12",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/4",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/1"
            }
        },
        {
            "id": 13,
            "numero": 341,
            "temperatura": "2.5",
            "tamanho_id": 2,
            "estado_id": 1,
            "localizacao_id": 3,
            "tamanho": {
                "id": 2,
                "tamanho": "XL"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 3,
                "nome": "Mario Brooks",
                "lat": "59.60196",
                "lng": "-79.552655",
                "codigo_postal": "3807-120",
                "cidade": "East Albachester"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/13",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/2",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/3"
            }
        },
        {
            "id": 14,
            "numero": 108,
            "temperatura": "9.8",
            "tamanho_id": 4,
            "estado_id": 2,
            "localizacao_id": 4,
            "tamanho": {
                "id": 4,
                "tamanho": "XL"
            },
            "estado": {
                "id": 2,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 4,
                "nome": "Carter Ridge",
                "lat": "17.364717",
                "lng": "121.487486",
                "codigo_postal": "6293-543",
                "cidade": "Carmellafurt"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/14",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/4",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/4"
            }
        },
        {
            "id": 15,
            "numero": 366,
            "temperatura": "6",
            "tamanho_id": 2,
            "estado_id": 1,
            "localizacao_id": 5,
            "tamanho": {
                "id": 2,
                "tamanho": "XL"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 5,
                "nome": "Chester Lakes",
                "lat": "-68.571124",
                "lng": "59.732671",
                "codigo_postal": "6578-980",
                "cidade": "Lake Jefferystad"
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
            "numero": 426,
            "temperatura": "5.6",
            "tamanho_id": 4,
            "estado_id": 1,
            "localizacao_id": 4,
            "tamanho": {
                "id": 4,
                "tamanho": "XL"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 4,
                "nome": "Carter Ridge",
                "lat": "17.364717",
                "lng": "121.487486",
                "codigo_postal": "6293-543",
                "cidade": "Carmellafurt"
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
            "numero": 96,
            "temperatura": "4.8",
            "tamanho_id": 4,
            "estado_id": 2,
            "localizacao_id": 1,
            "tamanho": {
                "id": 4,
                "tamanho": "XL"
            },
            "estado": {
                "id": 2,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 1,
                "nome": "Langosh Courts",
                "lat": "-28.781776",
                "lng": "173.302675",
                "codigo_postal": "3895-096",
                "cidade": "New Domenick"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/17",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/4",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/1"
            }
        },
        {
            "id": 18,
            "numero": 261,
            "temperatura": "5.7",
            "tamanho_id": 2,
            "estado_id": 1,
            "localizacao_id": 2,
            "tamanho": {
                "id": 2,
                "tamanho": "XL"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 2,
                "nome": "Miracle Brooks",
                "lat": "-24.618798",
                "lng": "-41.522721",
                "codigo_postal": "9193-865",
                "cidade": "Port Rustyberg"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/18",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/2",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/2"
            }
        },
        {
            "id": 19,
            "numero": 2,
            "temperatura": "4.8",
            "tamanho_id": 3,
            "estado_id": 1,
            "localizacao_id": 3,
            "tamanho": {
                "id": 3,
                "tamanho": "L"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 3,
                "nome": "Mario Brooks",
                "lat": "59.60196",
                "lng": "-79.552655",
                "codigo_postal": "3807-120",
                "cidade": "East Albachester"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/19",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/3",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/3"
            }
        },
        {
            "id": 20,
            "numero": 393,
            "temperatura": "8.5",
            "tamanho_id": 4,
            "estado_id": 2,
            "localizacao_id": 1,
            "tamanho": {
                "id": 4,
                "tamanho": "XL"
            },
            "estado": {
                "id": 2,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 1,
                "nome": "Langosh Courts",
                "lat": "-28.781776",
                "lng": "173.302675",
                "codigo_postal": "3895-096",
                "cidade": "New Domenick"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/20",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/4",
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
curl -X POST "http://localhost/api/cacifos"     -d "numero"="SzX6XFRz5zs1lhXp" \
    -d "temperatura"="oLZrznLzh8nNg7hP" \
    -d "codigo"="DRNma3I0HT5HzJML" \
    -d "estado_id"="iCeGrAnS9eFM7cjn" \
    -d "tamanho_id"="32kyH9LznVoVHV8e" \
    -d "localizacao_id"="Es5dkLpixTykZr9I" 
```

```javascript
const url = new URL("http://localhost/api/cacifos");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "numero": "SzX6XFRz5zs1lhXp",
    "temperatura": "oLZrznLzh8nNg7hP",
    "codigo": "DRNma3I0HT5HzJML",
    "estado_id": "iCeGrAnS9eFM7cjn",
    "tamanho_id": "32kyH9LznVoVHV8e",
    "localizacao_id": "Es5dkLpixTykZr9I",
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
        "numero": 142,
        "temperatura": "1.1",
        "codigo": "JgIXPD9X",
        "tamanho_id": 4,
        "estado_id": 2,
        "localizacao_id": 2,
        "tamanho": {
            "id": 4,
            "tamanho": "XL"
        },
        "estado": {
            "id": 2,
            "estado": "Indisponivel"
        },
        "localizacao": {
            "id": 2,
            "nome": "Miracle Brooks",
            "lat": "-24.618798",
            "lng": "-41.522721",
            "codigo_postal": "9193-865",
            "cidade": "Port Rustyberg"
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
curl -X PUT "http://localhost/api/cacifos/{cacifo}"     -d "numero"="EIl8CE8wCfr6to4Y" \
    -d "temperatura"="wdi0Kx7IPy4iWobQ" \
    -d "codigo"="C2uTbLIPl0KujFTD" \
    -d "estado_id"="WerRnXDEvkIQ1wQz" \
    -d "tamanho_id"="ylU42dE97VvPO7vi" \
    -d "localizacao_id"="wEDC0h67YRcL7dAg" 
```

```javascript
const url = new URL("http://localhost/api/cacifos/{cacifo}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "numero": "EIl8CE8wCfr6to4Y",
    "temperatura": "wdi0Kx7IPy4iWobQ",
    "codigo": "C2uTbLIPl0KujFTD",
    "estado_id": "WerRnXDEvkIQ1wQz",
    "tamanho_id": "ylU42dE97VvPO7vi",
    "localizacao_id": "wEDC0h67YRcL7dAg",
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

Endpoint para controlar os clientes
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
            "nome": "Prof. Art Schuster II",
            "email": "dbeier@yahoo.com",
            "telefone": "(865) 546-5513 x602",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/1"
            }
        },
        {
            "nome": "Ms. Aylin Schultz",
            "email": "ryan.lowe@yahoo.com",
            "telefone": "1-910-946-1964 x80200",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/2"
            }
        },
        {
            "nome": "Ms. Alysha Johnson",
            "email": "octavia67@hotmail.com",
            "telefone": "(825) 805-2704 x565",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/3"
            }
        },
        {
            "nome": "Dr. Jamison Mueller",
            "email": "ebba08@yahoo.com",
            "telefone": "357.335.0328",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/4"
            }
        },
        {
            "nome": "Godfrey Gerlach",
            "email": "camila.yundt@hotmail.com",
            "telefone": "(376) 680-3767 x9168",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/5"
            }
        },
        {
            "nome": "Abbey Mitchell",
            "email": "angie.crist@gmail.com",
            "telefone": "1-454-374-7594 x6439",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/6"
            }
        },
        {
            "nome": "Era Denesik",
            "email": "wiegand.reyes@yahoo.com",
            "telefone": "1-368-531-4895",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/7"
            }
        },
        {
            "nome": "Anais Conn I",
            "email": "voreilly@hotmail.com",
            "telefone": "916.892.6338 x227",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/8"
            }
        },
        {
            "nome": "Prof. Maritza Sawayn",
            "email": "langosh.wilburn@hotmail.com",
            "telefone": "581-212-3445 x6324",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/9"
            }
        },
        {
            "nome": "Carolina Oberbrunner",
            "email": "haley.blanche@hotmail.com",
            "telefone": "973-493-5858 x87806",
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
curl -X POST "http://localhost/api/clientes"     -d "nome"="NtkhaSQJBhbiV9Jd" \
    -d "email"="97uIT6oMALhPxyRR" \
    -d "telefone"="qjnA2NMDihNSqSnb" 
```

```javascript
const url = new URL("http://localhost/api/clientes");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "NtkhaSQJBhbiV9Jd",
    "email": "97uIT6oMALhPxyRR",
    "telefone": "qjnA2NMDihNSqSnb",
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
        "nome": "Prof. Art Schuster II",
        "email": "dbeier@yahoo.com",
        "telefone": "(865) 546-5513 x602"
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
curl -X PUT "http://localhost/api/clientes/{cliente}"     -d "nome"="iNXb2a3ANexcaGdJ" \
    -d "email"="W0WXoqYYe0cFw9rO" \
    -d "telefone"="kToE1QGBqIJPN64p" 
```

```javascript
const url = new URL("http://localhost/api/clientes/{cliente}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "iNXb2a3ANexcaGdJ",
    "email": "W0WXoqYYe0cFw9rO",
    "telefone": "kToE1QGBqIJPN64p",
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

Endpoint para controlar as encomendas
<!-- START_8363ecc5b69d6dbae17e97e17a7f32e9 -->
## Get Encomendas of a cliente

Devolve as encomendas de um cliente.

> Example request:

```bash
curl -X GET -G "http://localhost/api/cliente/{cliente}/encomendas" 
```

```javascript
const url = new URL("http://localhost/api/cliente/{cliente}/encomendas");

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
            "data_de_entrega": "2002-01-09 23:25:21",
            "data_de_levantamento": "1977-05-08 09:32:38",
            "data_de_entrada_no_sistema": "1983-04-18 05:29:46",
            "data_de_entrega_pretendida": "1997-09-26 07:45:59",
            "tempo_limite_de_levantamento": "1976-04-07 20:12:23",
            "estado_encomenda": 0,
            "temperatura": "5.8",
            "observacoes": "Cat in a hurried nervous manner, smiling at everything about her, to pass away the time. Alice had been wandering, when a sharp hiss made her so savage when they saw Alice coming. 'There's PLENTY of.",
            "tamanho": "S",
            "cliente_id": 1,
            "cacifo_id": 8,
            "estafeta": [
                {
                    "id": 6,
                    "nome": "Ola Wyman",
                    "email": "cathrine74@gmail.com",
                    "telefone": "318.585.3194 x6891",
                    "data_nascimento": "2005-05-17",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 3,
                        "user_id": 6
                    }
                }
            ],
            "cacifo": {
                "id": 8,
                "numero": 8,
                "temperatura": "7.1",
                "codigo": "kazuk2J",
                "tamanho_id": 1,
                "estado_id": 1,
                "localizacao_id": 5,
                "tamanho": {
                    "id": 1,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 5,
                    "nome": "Chester Lakes",
                    "lat": "-68.571124",
                    "lng": "59.732671",
                    "codigo_postal": "6578-980",
                    "cidade": "Lake Jefferystad"
                }
            },
            "cliente": {
                "id": 1,
                "nome": "Prof. Art Schuster II",
                "email": "dbeier@yahoo.com",
                "telefone": "(865) 546-5513 x602"
            },
            "href": {
                "cliente": "http:\/\/localhost\/api\/clientes\/1",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/8"
            }
        },
        {
            "id": 12,
            "data_de_entrega": "1978-07-18 02:04:27",
            "data_de_levantamento": "2013-05-19 12:59:41",
            "data_de_entrada_no_sistema": "2007-09-16 16:26:59",
            "data_de_entrega_pretendida": "1977-06-15 21:57:17",
            "tempo_limite_de_levantamento": "2016-03-28 12:34:20",
            "estado_encomenda": 0,
            "temperatura": "9.2",
            "observacoes": "Gryphon. 'Do you play croquet with the other side, the puppy jumped into the garden. Then she went on, spreading out the words: 'Where's the other side. The further off from England the nearer is to.",
            "tamanho": "S",
            "cliente_id": 1,
            "cacifo_id": 5,
            "estafeta": [
                {
                    "id": 3,
                    "nome": "Dr. Gregg Price II",
                    "email": "jleuschke@hotmail.com",
                    "telefone": "1-908-410-6642 x7904",
                    "data_nascimento": "1978-06-29",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 12,
                        "user_id": 3
                    }
                }
            ],
            "cacifo": {
                "id": 5,
                "numero": 345,
                "temperatura": "4.2",
                "codigo": "mile5eu",
                "tamanho_id": 1,
                "estado_id": 2,
                "localizacao_id": 3,
                "tamanho": {
                    "id": 1,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 3,
                    "nome": "Mario Brooks",
                    "lat": "59.60196",
                    "lng": "-79.552655",
                    "codigo_postal": "3807-120",
                    "cidade": "East Albachester"
                }
            },
            "cliente": {
                "id": 1,
                "nome": "Prof. Art Schuster II",
                "email": "dbeier@yahoo.com",
                "telefone": "(865) 546-5513 x602"
            },
            "href": {
                "cliente": "http:\/\/localhost\/api\/clientes\/1",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/5"
            }
        },
        {
            "id": 14,
            "data_de_entrega": "1975-04-05 07:41:40",
            "data_de_levantamento": "2004-06-12 23:18:25",
            "data_de_entrada_no_sistema": "2004-05-30 07:50:12",
            "data_de_entrega_pretendida": "2007-08-28 13:48:22",
            "tempo_limite_de_levantamento": "1994-03-13 05:03:29",
            "estado_encomenda": 0,
            "temperatura": "7.4",
            "observacoes": "Cheshire cats always grinned; in fact, I didn't know how to get her head pressing against the ceiling, and had to pinch it to speak with. Alice waited patiently until it chose to speak again. The.",
            "tamanho": "S",
            "cliente_id": 1,
            "cacifo_id": 10,
            "estafeta": [
                {
                    "id": 3,
                    "nome": "Dr. Gregg Price II",
                    "email": "jleuschke@hotmail.com",
                    "telefone": "1-908-410-6642 x7904",
                    "data_nascimento": "1978-06-29",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 14,
                        "user_id": 3
                    }
                }
            ],
            "cacifo": {
                "id": 10,
                "numero": 435,
                "temperatura": "1.3",
                "codigo": "EpiniolAA",
                "tamanho_id": 2,
                "estado_id": 2,
                "localizacao_id": 4,
                "tamanho": {
                    "id": 2,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 4,
                    "nome": "Carter Ridge",
                    "lat": "17.364717",
                    "lng": "121.487486",
                    "codigo_postal": "6293-543",
                    "cidade": "Carmellafurt"
                }
            },
            "cliente": {
                "id": 1,
                "nome": "Prof. Art Schuster II",
                "email": "dbeier@yahoo.com",
                "telefone": "(865) 546-5513 x602"
            },
            "href": {
                "cliente": "http:\/\/localhost\/api\/clientes\/1",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/10"
            }
        },
        {
            "id": 16,
            "data_de_entrega": "1981-07-29 04:31:03",
            "data_de_levantamento": "1993-07-31 04:17:25",
            "data_de_entrada_no_sistema": "2003-09-23 09:06:14",
            "data_de_entrega_pretendida": "2009-05-18 04:09:36",
            "tempo_limite_de_levantamento": "2018-12-30 00:09:05",
            "estado_encomenda": 1,
            "temperatura": "10",
            "observacoes": "Mock Turtle is.' 'It's the stupidest tea-party I ever saw in another moment it was out of their hearing her; and when she had never done such a wretched height to be.' 'It is a very respectful tone.",
            "tamanho": "L",
            "cliente_id": 1,
            "cacifo_id": 17,
            "estafeta": [
                {
                    "id": 8,
                    "nome": "Holly Boehm",
                    "email": "yvonne.pollich@gmail.com",
                    "telefone": "818.725.3287",
                    "data_nascimento": "2013-05-08",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 16,
                        "user_id": 8
                    }
                }
            ],
            "cacifo": {
                "id": 17,
                "numero": 96,
                "temperatura": "4.8",
                "codigo": "EDxSRxSH-A",
                "tamanho_id": 4,
                "estado_id": 2,
                "localizacao_id": 1,
                "tamanho": {
                    "id": 4,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 1,
                    "nome": "Langosh Courts",
                    "lat": "-28.781776",
                    "lng": "173.302675",
                    "codigo_postal": "3895-096",
                    "cidade": "New Domenick"
                }
            },
            "cliente": {
                "id": 1,
                "nome": "Prof. Art Schuster II",
                "email": "dbeier@yahoo.com",
                "telefone": "(865) 546-5513 x602"
            },
            "href": {
                "cliente": "http:\/\/localhost\/api\/clientes\/1",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/17"
            }
        },
        {
            "id": 18,
            "data_de_entrega": "2018-08-14 13:31:35",
            "data_de_levantamento": "1971-11-28 07:40:26",
            "data_de_entrada_no_sistema": "1999-01-06 02:59:10",
            "data_de_entrega_pretendida": "2007-05-26 17:06:03",
            "tempo_limite_de_levantamento": "1990-05-29 22:45:00",
            "estado_encomenda": 0,
            "temperatura": "3.4",
            "observacoes": "Luckily for Alice, the little passage: and THEN--she found herself in a sulky tone; 'Seven jogged my elbow.' On which Seven looked up eagerly, half hoping that the Queen jumped up on tiptoe, and.",
            "tamanho": "L",
            "cliente_id": 1,
            "cacifo_id": 3,
            "estafeta": [
                {
                    "id": 5,
                    "nome": "Dr. Giovanny Mraz PhD",
                    "email": "kevin19@hotmail.com",
                    "telefone": "(879) 362-9356",
                    "data_nascimento": "1977-03-24",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 18,
                        "user_id": 5
                    }
                }
            ],
            "cacifo": {
                "id": 3,
                "numero": 216,
                "temperatura": "1.4",
                "codigo": "QWk2E",
                "tamanho_id": 3,
                "estado_id": 1,
                "localizacao_id": 1,
                "tamanho": {
                    "id": 3,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 1,
                    "nome": "Langosh Courts",
                    "lat": "-28.781776",
                    "lng": "173.302675",
                    "codigo_postal": "3895-096",
                    "cidade": "New Domenick"
                }
            },
            "cliente": {
                "id": 1,
                "nome": "Prof. Art Schuster II",
                "email": "dbeier@yahoo.com",
                "telefone": "(865) 546-5513 x602"
            },
            "href": {
                "cliente": "http:\/\/localhost\/api\/clientes\/1",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/3"
            }
        }
    ],
    "msg": "success",
    "code": 200
}
```

### HTTP Request
`GET api/cliente/{cliente}/encomendas`


<!-- END_8363ecc5b69d6dbae17e97e17a7f32e9 -->

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
            "data_de_entrega": "1987-10-04 16:58:37",
            "data_de_levantamento": "1979-12-28 10:07:22",
            "data_de_entrada_no_sistema": "1983-04-02 06:35:59",
            "data_de_entrega_pretendida": "2003-06-22 18:07:10",
            "tempo_limite_de_levantamento": "2010-05-26 12:35:51",
            "estado_encomenda": 1,
            "temperatura": "11",
            "observacoes": "Pigeon in a tone of great curiosity. 'Soles and eels, of course,' he said in a confused way, 'Prizes! Prizes!' Alice had been looking at the cook, and a Dodo, a Lory and an Eaglet, and several other.",
            "tamanho": "S",
            "cliente_id": 5,
            "estafeta": [
                {
                    "id": 8,
                    "nome": "Holly Boehm",
                    "email": "yvonne.pollich@gmail.com",
                    "telefone": "818.725.3287",
                    "data_nascimento": "2013-05-08",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 1,
                        "user_id": 8
                    }
                }
            ],
            "cacifo": {
                "id": 18,
                "numero": 261,
                "temperatura": "5.7",
                "codigo": "BYC3Hp6n",
                "tamanho_id": 2,
                "estado_id": 1,
                "localizacao_id": 2,
                "tamanho": {
                    "id": 2,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 2,
                    "nome": "Miracle Brooks",
                    "lat": "-24.618798",
                    "lng": "-41.522721",
                    "codigo_postal": "9193-865",
                    "cidade": "Port Rustyberg"
                }
            },
            "cliente": {
                "id": 5,
                "nome": "Godfrey Gerlach",
                "email": "camila.yundt@hotmail.com",
                "telefone": "(376) 680-3767 x9168"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/1",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/18",
                "cliente": "http:\/\/localhost\/api\/clientes\/5"
            }
        },
        {
            "id": 2,
            "data_de_entrega": "1999-06-11 05:32:22",
            "data_de_levantamento": "1982-11-11 21:35:18",
            "data_de_entrada_no_sistema": "1997-09-29 11:31:49",
            "data_de_entrega_pretendida": "1984-10-21 22:56:12",
            "tempo_limite_de_levantamento": "1988-04-09 21:13:06",
            "estado_encomenda": 1,
            "temperatura": "8.7",
            "observacoes": "PRECIOUS nose'; as an explanation; 'I've none of my own. I'm a deal too far off to other parts of the Mock Turtle. 'She can't explain it,' said Alice, whose thoughts were still running on the other.",
            "tamanho": "L",
            "cliente_id": 8,
            "estafeta": [
                {
                    "id": 4,
                    "nome": "Kristofer Steuber",
                    "email": "osvaldo.streich@yahoo.com",
                    "telefone": "1-706-887-0217 x831",
                    "data_nascimento": "1986-02-13",
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
                "id": 2,
                "numero": 10,
                "temperatura": "8.5",
                "codigo": "iIjS0_1Za",
                "tamanho_id": 3,
                "estado_id": 1,
                "localizacao_id": 5,
                "tamanho": {
                    "id": 3,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 5,
                    "nome": "Chester Lakes",
                    "lat": "-68.571124",
                    "lng": "59.732671",
                    "codigo_postal": "6578-980",
                    "cidade": "Lake Jefferystad"
                }
            },
            "cliente": {
                "id": 8,
                "nome": "Anais Conn I",
                "email": "voreilly@hotmail.com",
                "telefone": "916.892.6338 x227"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/2",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/2",
                "cliente": "http:\/\/localhost\/api\/clientes\/8"
            }
        },
        {
            "id": 3,
            "data_de_entrega": "2002-01-09 23:25:21",
            "data_de_levantamento": "1977-05-08 09:32:38",
            "data_de_entrada_no_sistema": "1983-04-18 05:29:46",
            "data_de_entrega_pretendida": "1997-09-26 07:45:59",
            "tempo_limite_de_levantamento": "1976-04-07 20:12:23",
            "estado_encomenda": 0,
            "temperatura": "5.8",
            "observacoes": "Cat in a hurried nervous manner, smiling at everything about her, to pass away the time. Alice had been wandering, when a sharp hiss made her so savage when they saw Alice coming. 'There's PLENTY of.",
            "tamanho": "S",
            "cliente_id": 1,
            "estafeta": [
                {
                    "id": 6,
                    "nome": "Ola Wyman",
                    "email": "cathrine74@gmail.com",
                    "telefone": "318.585.3194 x6891",
                    "data_nascimento": "2005-05-17",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 3,
                        "user_id": 6
                    }
                }
            ],
            "cacifo": {
                "id": 8,
                "numero": 8,
                "temperatura": "7.1",
                "codigo": "kazuk2J",
                "tamanho_id": 1,
                "estado_id": 1,
                "localizacao_id": 5,
                "tamanho": {
                    "id": 1,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 5,
                    "nome": "Chester Lakes",
                    "lat": "-68.571124",
                    "lng": "59.732671",
                    "codigo_postal": "6578-980",
                    "cidade": "Lake Jefferystad"
                }
            },
            "cliente": {
                "id": 1,
                "nome": "Prof. Art Schuster II",
                "email": "dbeier@yahoo.com",
                "telefone": "(865) 546-5513 x602"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/3",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/8",
                "cliente": "http:\/\/localhost\/api\/clientes\/1"
            }
        },
        {
            "id": 4,
            "data_de_entrega": "1973-08-06 11:16:31",
            "data_de_levantamento": "2017-07-25 12:48:32",
            "data_de_entrada_no_sistema": "2014-07-11 12:07:00",
            "data_de_entrega_pretendida": "1982-08-27 01:09:22",
            "tempo_limite_de_levantamento": "2005-12-07 16:25:00",
            "estado_encomenda": 1,
            "temperatura": "8.1",
            "observacoes": "Hatter. 'Does YOUR watch tell you his history,' As they walked off together, Alice heard the Rabbit say, 'A barrowful of WHAT?' thought Alice; 'I must be getting somewhere near the right size again.",
            "tamanho": "M",
            "cliente_id": 6,
            "estafeta": [
                {
                    "id": 6,
                    "nome": "Ola Wyman",
                    "email": "cathrine74@gmail.com",
                    "telefone": "318.585.3194 x6891",
                    "data_nascimento": "2005-05-17",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 4,
                        "user_id": 6
                    }
                }
            ],
            "cacifo": {
                "id": 11,
                "numero": 194,
                "temperatura": "0.5",
                "codigo": "p5OjVy",
                "tamanho_id": 1,
                "estado_id": 2,
                "localizacao_id": 5,
                "tamanho": {
                    "id": 1,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 5,
                    "nome": "Chester Lakes",
                    "lat": "-68.571124",
                    "lng": "59.732671",
                    "codigo_postal": "6578-980",
                    "cidade": "Lake Jefferystad"
                }
            },
            "cliente": {
                "id": 6,
                "nome": "Abbey Mitchell",
                "email": "angie.crist@gmail.com",
                "telefone": "1-454-374-7594 x6439"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/4",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/11",
                "cliente": "http:\/\/localhost\/api\/clientes\/6"
            }
        },
        {
            "id": 5,
            "data_de_entrega": "2006-08-18 13:57:38",
            "data_de_levantamento": "1978-10-01 04:04:34",
            "data_de_entrada_no_sistema": "2017-04-11 10:21:18",
            "data_de_entrega_pretendida": "2009-08-05 11:43:35",
            "tempo_limite_de_levantamento": "2015-05-05 03:39:59",
            "estado_encomenda": 1,
            "temperatura": "5.1",
            "observacoes": "It means much the most interesting, and perhaps after all it might tell her something about the right distance--but then I wonder if I would talk on such a thing as \"I sleep when I sleep\" is the.",
            "tamanho": "XL",
            "cliente_id": 8,
            "estafeta": [
                {
                    "id": 3,
                    "nome": "Dr. Gregg Price II",
                    "email": "jleuschke@hotmail.com",
                    "telefone": "1-908-410-6642 x7904",
                    "data_nascimento": "1978-06-29",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 5,
                        "user_id": 3
                    }
                }
            ],
            "cacifo": {
                "id": 15,
                "numero": 366,
                "temperatura": "6",
                "codigo": "Ipsxf33bt",
                "tamanho_id": 2,
                "estado_id": 1,
                "localizacao_id": 5,
                "tamanho": {
                    "id": 2,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 5,
                    "nome": "Chester Lakes",
                    "lat": "-68.571124",
                    "lng": "59.732671",
                    "codigo_postal": "6578-980",
                    "cidade": "Lake Jefferystad"
                }
            },
            "cliente": {
                "id": 8,
                "nome": "Anais Conn I",
                "email": "voreilly@hotmail.com",
                "telefone": "916.892.6338 x227"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/5",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/15",
                "cliente": "http:\/\/localhost\/api\/clientes\/8"
            }
        },
        {
            "id": 6,
            "data_de_entrega": "2014-10-15 09:50:56",
            "data_de_levantamento": "2013-10-19 08:21:44",
            "data_de_entrada_no_sistema": "1980-05-01 16:05:07",
            "data_de_entrega_pretendida": "1991-09-15 23:14:14",
            "tempo_limite_de_levantamento": "1973-11-29 17:16:59",
            "estado_encomenda": 0,
            "temperatura": "10.5",
            "observacoes": "I can't remember,' said the Rabbit's little white kid gloves: she took courage, and went on in a minute or two, and the cool fountains. CHAPTER VIII. The Queen's Croquet-Ground A large rose-tree.",
            "tamanho": "M",
            "cliente_id": 5,
            "estafeta": [
                {
                    "id": 8,
                    "nome": "Holly Boehm",
                    "email": "yvonne.pollich@gmail.com",
                    "telefone": "818.725.3287",
                    "data_nascimento": "2013-05-08",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 6,
                        "user_id": 8
                    }
                }
            ],
            "cacifo": {
                "id": 3,
                "numero": 216,
                "temperatura": "1.4",
                "codigo": "QWk2E",
                "tamanho_id": 3,
                "estado_id": 1,
                "localizacao_id": 1,
                "tamanho": {
                    "id": 3,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 1,
                    "nome": "Langosh Courts",
                    "lat": "-28.781776",
                    "lng": "173.302675",
                    "codigo_postal": "3895-096",
                    "cidade": "New Domenick"
                }
            },
            "cliente": {
                "id": 5,
                "nome": "Godfrey Gerlach",
                "email": "camila.yundt@hotmail.com",
                "telefone": "(376) 680-3767 x9168"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/6",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/3",
                "cliente": "http:\/\/localhost\/api\/clientes\/5"
            }
        },
        {
            "id": 7,
            "data_de_entrega": "2009-04-24 07:29:25",
            "data_de_levantamento": "2015-06-28 09:21:54",
            "data_de_entrada_no_sistema": "1994-03-06 18:01:46",
            "data_de_entrega_pretendida": "2000-07-21 10:50:33",
            "tempo_limite_de_levantamento": "2013-12-11 12:13:51",
            "estado_encomenda": 1,
            "temperatura": "11.3",
            "observacoes": "New Zealand or Australia?' (and she tried her best to climb up one of the shelves as she could, 'If you can't swim, can you?' he added, turning to the jury, of course--\"I GAVE HER ONE, THEY GAVE HIM.",
            "tamanho": "S",
            "cliente_id": 9,
            "estafeta": [
                {
                    "id": 1,
                    "nome": "Emilie Barton",
                    "email": "zdubuque@hotmail.com",
                    "telefone": "(708) 386-9679",
                    "data_nascimento": "1988-07-17",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 7,
                        "user_id": 1
                    }
                }
            ],
            "cacifo": {
                "id": 4,
                "numero": 344,
                "temperatura": "1",
                "codigo": "uuZJ10td",
                "tamanho_id": 3,
                "estado_id": 1,
                "localizacao_id": 5,
                "tamanho": {
                    "id": 3,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 5,
                    "nome": "Chester Lakes",
                    "lat": "-68.571124",
                    "lng": "59.732671",
                    "codigo_postal": "6578-980",
                    "cidade": "Lake Jefferystad"
                }
            },
            "cliente": {
                "id": 9,
                "nome": "Prof. Maritza Sawayn",
                "email": "langosh.wilburn@hotmail.com",
                "telefone": "581-212-3445 x6324"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/7",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/4",
                "cliente": "http:\/\/localhost\/api\/clientes\/9"
            }
        },
        {
            "id": 8,
            "data_de_entrega": "2018-09-04 03:52:49",
            "data_de_levantamento": "1971-11-25 01:19:06",
            "data_de_entrada_no_sistema": "1980-01-16 17:39:24",
            "data_de_entrega_pretendida": "1994-02-17 07:26:58",
            "tempo_limite_de_levantamento": "1980-04-19 23:20:52",
            "estado_encomenda": 0,
            "temperatura": "11.6",
            "observacoes": "The Gryphon lifted up both its paws in surprise. 'What! Never heard of \"Uglification,\"' Alice ventured to say. 'What is it?' he said, 'on and off, for days and days.' 'But what did the Dormouse go.",
            "tamanho": "M",
            "cliente_id": 8,
            "estafeta": [
                {
                    "id": 7,
                    "nome": "Bryce Corwin PhD",
                    "email": "romaguera.erica@gmail.com",
                    "telefone": "(262) 895-3901",
                    "data_nascimento": "1982-01-16",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 8,
                        "user_id": 7
                    }
                }
            ],
            "cacifo": {
                "id": 13,
                "numero": 341,
                "temperatura": "2.5",
                "codigo": "TZbtL5Jut",
                "tamanho_id": 2,
                "estado_id": 1,
                "localizacao_id": 3,
                "tamanho": {
                    "id": 2,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 3,
                    "nome": "Mario Brooks",
                    "lat": "59.60196",
                    "lng": "-79.552655",
                    "codigo_postal": "3807-120",
                    "cidade": "East Albachester"
                }
            },
            "cliente": {
                "id": 8,
                "nome": "Anais Conn I",
                "email": "voreilly@hotmail.com",
                "telefone": "916.892.6338 x227"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/8",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/13",
                "cliente": "http:\/\/localhost\/api\/clientes\/8"
            }
        },
        {
            "id": 9,
            "data_de_entrega": "1994-07-16 03:27:45",
            "data_de_levantamento": "1972-05-31 01:32:37",
            "data_de_entrada_no_sistema": "1989-09-29 05:29:58",
            "data_de_entrega_pretendida": "1984-07-25 14:14:59",
            "tempo_limite_de_levantamento": "1998-05-26 13:04:07",
            "estado_encomenda": 1,
            "temperatura": "4",
            "observacoes": "VERY short remarks, and she felt that this could not answer without a porpoise.' 'Wouldn't it really?' said Alice sharply, for she was terribly frightened all the first figure!' said the youth, 'as.",
            "tamanho": "S",
            "cliente_id": 6,
            "estafeta": [
                {
                    "id": 2,
                    "nome": "Dr. Amani Block",
                    "email": "letha40@gmail.com",
                    "telefone": "(797) 303-9287",
                    "data_nascimento": "1972-01-08",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 9,
                        "user_id": 2
                    }
                }
            ],
            "cacifo": {
                "id": 11,
                "numero": 194,
                "temperatura": "0.5",
                "codigo": "p5OjVy",
                "tamanho_id": 1,
                "estado_id": 2,
                "localizacao_id": 5,
                "tamanho": {
                    "id": 1,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 5,
                    "nome": "Chester Lakes",
                    "lat": "-68.571124",
                    "lng": "59.732671",
                    "codigo_postal": "6578-980",
                    "cidade": "Lake Jefferystad"
                }
            },
            "cliente": {
                "id": 6,
                "nome": "Abbey Mitchell",
                "email": "angie.crist@gmail.com",
                "telefone": "1-454-374-7594 x6439"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/9",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/11",
                "cliente": "http:\/\/localhost\/api\/clientes\/6"
            }
        },
        {
            "id": 10,
            "data_de_entrega": "2018-04-27 18:23:47",
            "data_de_levantamento": "1992-09-13 01:41:00",
            "data_de_entrada_no_sistema": "2010-07-19 09:08:24",
            "data_de_entrega_pretendida": "1976-03-23 23:19:19",
            "tempo_limite_de_levantamento": "1971-07-19 20:26:19",
            "estado_encomenda": 0,
            "temperatura": "2.9",
            "observacoes": "King added in a shrill, loud voice, and see that queer little toss of her childhood: and how she would feel very queer indeed:-- ''Tis the voice of the words a little, and then she heard her voice.",
            "tamanho": "S",
            "cliente_id": 3,
            "estafeta": [
                {
                    "id": 5,
                    "nome": "Dr. Giovanny Mraz PhD",
                    "email": "kevin19@hotmail.com",
                    "telefone": "(879) 362-9356",
                    "data_nascimento": "1977-03-24",
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
                "id": 1,
                "numero": 142,
                "temperatura": "1.1",
                "codigo": "JgIXPD9X",
                "tamanho_id": 4,
                "estado_id": 2,
                "localizacao_id": 2,
                "tamanho": {
                    "id": 4,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 2,
                    "nome": "Miracle Brooks",
                    "lat": "-24.618798",
                    "lng": "-41.522721",
                    "codigo_postal": "9193-865",
                    "cidade": "Port Rustyberg"
                }
            },
            "cliente": {
                "id": 3,
                "nome": "Ms. Alysha Johnson",
                "email": "octavia67@hotmail.com",
                "telefone": "(825) 805-2704 x565"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/10",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/1",
                "cliente": "http:\/\/localhost\/api\/clientes\/3"
            }
        },
        {
            "id": 11,
            "data_de_entrega": "2004-11-28 19:15:00",
            "data_de_levantamento": "1986-04-26 23:26:00",
            "data_de_entrada_no_sistema": "1973-03-11 17:06:33",
            "data_de_entrega_pretendida": "1986-11-16 13:45:58",
            "tempo_limite_de_levantamento": "1977-10-31 09:54:22",
            "estado_encomenda": 1,
            "temperatura": "8.9",
            "observacoes": "He looked at Alice, as she could even make out exactly what they WILL do next! As for pulling me out of sight: then it chuckled. 'What fun!' said the Mock Turtle replied, counting off the cake. * *.",
            "tamanho": "S",
            "cliente_id": 3,
            "estafeta": [
                {
                    "id": 4,
                    "nome": "Kristofer Steuber",
                    "email": "osvaldo.streich@yahoo.com",
                    "telefone": "1-706-887-0217 x831",
                    "data_nascimento": "1986-02-13",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 11,
                        "user_id": 4
                    }
                }
            ],
            "cacifo": {
                "id": 16,
                "numero": 426,
                "temperatura": "5.6",
                "codigo": "JtufLki",
                "tamanho_id": 4,
                "estado_id": 1,
                "localizacao_id": 4,
                "tamanho": {
                    "id": 4,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 4,
                    "nome": "Carter Ridge",
                    "lat": "17.364717",
                    "lng": "121.487486",
                    "codigo_postal": "6293-543",
                    "cidade": "Carmellafurt"
                }
            },
            "cliente": {
                "id": 3,
                "nome": "Ms. Alysha Johnson",
                "email": "octavia67@hotmail.com",
                "telefone": "(825) 805-2704 x565"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/11",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/16",
                "cliente": "http:\/\/localhost\/api\/clientes\/3"
            }
        },
        {
            "id": 12,
            "data_de_entrega": "1978-07-18 02:04:27",
            "data_de_levantamento": "2013-05-19 12:59:41",
            "data_de_entrada_no_sistema": "2007-09-16 16:26:59",
            "data_de_entrega_pretendida": "1977-06-15 21:57:17",
            "tempo_limite_de_levantamento": "2016-03-28 12:34:20",
            "estado_encomenda": 0,
            "temperatura": "9.2",
            "observacoes": "Gryphon. 'Do you play croquet with the other side, the puppy jumped into the garden. Then she went on, spreading out the words: 'Where's the other side. The further off from England the nearer is to.",
            "tamanho": "S",
            "cliente_id": 1,
            "estafeta": [
                {
                    "id": 3,
                    "nome": "Dr. Gregg Price II",
                    "email": "jleuschke@hotmail.com",
                    "telefone": "1-908-410-6642 x7904",
                    "data_nascimento": "1978-06-29",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 12,
                        "user_id": 3
                    }
                }
            ],
            "cacifo": {
                "id": 5,
                "numero": 345,
                "temperatura": "4.2",
                "codigo": "mile5eu",
                "tamanho_id": 1,
                "estado_id": 2,
                "localizacao_id": 3,
                "tamanho": {
                    "id": 1,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 3,
                    "nome": "Mario Brooks",
                    "lat": "59.60196",
                    "lng": "-79.552655",
                    "codigo_postal": "3807-120",
                    "cidade": "East Albachester"
                }
            },
            "cliente": {
                "id": 1,
                "nome": "Prof. Art Schuster II",
                "email": "dbeier@yahoo.com",
                "telefone": "(865) 546-5513 x602"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/12",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/5",
                "cliente": "http:\/\/localhost\/api\/clientes\/1"
            }
        },
        {
            "id": 13,
            "data_de_entrega": "1999-12-01 11:34:28",
            "data_de_levantamento": "1998-01-18 07:42:34",
            "data_de_entrada_no_sistema": "1974-11-26 13:39:02",
            "data_de_entrega_pretendida": "1975-02-11 13:14:26",
            "tempo_limite_de_levantamento": "1988-09-15 22:59:57",
            "estado_encomenda": 1,
            "temperatura": "4.2",
            "observacoes": "I didn't know it to half-past one as long as it settled down again into its face in her head, she tried another question. 'What sort of lullaby to it as a cushion, resting their elbows on it, or at.",
            "tamanho": "M",
            "cliente_id": 6,
            "estafeta": [
                {
                    "id": 2,
                    "nome": "Dr. Amani Block",
                    "email": "letha40@gmail.com",
                    "telefone": "(797) 303-9287",
                    "data_nascimento": "1972-01-08",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 13,
                        "user_id": 2
                    }
                }
            ],
            "cacifo": {
                "id": 15,
                "numero": 366,
                "temperatura": "6",
                "codigo": "Ipsxf33bt",
                "tamanho_id": 2,
                "estado_id": 1,
                "localizacao_id": 5,
                "tamanho": {
                    "id": 2,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 5,
                    "nome": "Chester Lakes",
                    "lat": "-68.571124",
                    "lng": "59.732671",
                    "codigo_postal": "6578-980",
                    "cidade": "Lake Jefferystad"
                }
            },
            "cliente": {
                "id": 6,
                "nome": "Abbey Mitchell",
                "email": "angie.crist@gmail.com",
                "telefone": "1-454-374-7594 x6439"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/13",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/15",
                "cliente": "http:\/\/localhost\/api\/clientes\/6"
            }
        },
        {
            "id": 14,
            "data_de_entrega": "1975-04-05 07:41:40",
            "data_de_levantamento": "2004-06-12 23:18:25",
            "data_de_entrada_no_sistema": "2004-05-30 07:50:12",
            "data_de_entrega_pretendida": "2007-08-28 13:48:22",
            "tempo_limite_de_levantamento": "1994-03-13 05:03:29",
            "estado_encomenda": 0,
            "temperatura": "7.4",
            "observacoes": "Cheshire cats always grinned; in fact, I didn't know how to get her head pressing against the ceiling, and had to pinch it to speak with. Alice waited patiently until it chose to speak again. The.",
            "tamanho": "S",
            "cliente_id": 1,
            "estafeta": [
                {
                    "id": 3,
                    "nome": "Dr. Gregg Price II",
                    "email": "jleuschke@hotmail.com",
                    "telefone": "1-908-410-6642 x7904",
                    "data_nascimento": "1978-06-29",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 14,
                        "user_id": 3
                    }
                }
            ],
            "cacifo": {
                "id": 10,
                "numero": 435,
                "temperatura": "1.3",
                "codigo": "EpiniolAA",
                "tamanho_id": 2,
                "estado_id": 2,
                "localizacao_id": 4,
                "tamanho": {
                    "id": 2,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 4,
                    "nome": "Carter Ridge",
                    "lat": "17.364717",
                    "lng": "121.487486",
                    "codigo_postal": "6293-543",
                    "cidade": "Carmellafurt"
                }
            },
            "cliente": {
                "id": 1,
                "nome": "Prof. Art Schuster II",
                "email": "dbeier@yahoo.com",
                "telefone": "(865) 546-5513 x602"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/14",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/10",
                "cliente": "http:\/\/localhost\/api\/clientes\/1"
            }
        },
        {
            "id": 15,
            "data_de_entrega": "1979-08-11 10:00:55",
            "data_de_levantamento": "2004-12-08 04:47:40",
            "data_de_entrada_no_sistema": "1978-05-09 18:32:36",
            "data_de_entrega_pretendida": "1980-04-05 00:04:35",
            "tempo_limite_de_levantamento": "2011-07-16 11:59:38",
            "estado_encomenda": 1,
            "temperatura": "6.4",
            "observacoes": "Gryphon. 'They can't have anything to say, she simply bowed, and took the hookah out of THIS!' (Sounds of more energetic remedies--' 'Speak English!' said the Queen. 'I haven't opened it yet,' said.",
            "tamanho": "S",
            "cliente_id": 5,
            "estafeta": [
                {
                    "id": 7,
                    "nome": "Bryce Corwin PhD",
                    "email": "romaguera.erica@gmail.com",
                    "telefone": "(262) 895-3901",
                    "data_nascimento": "1982-01-16",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 15,
                        "user_id": 7
                    }
                }
            ],
            "cacifo": {
                "id": 10,
                "numero": 435,
                "temperatura": "1.3",
                "codigo": "EpiniolAA",
                "tamanho_id": 2,
                "estado_id": 2,
                "localizacao_id": 4,
                "tamanho": {
                    "id": 2,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 4,
                    "nome": "Carter Ridge",
                    "lat": "17.364717",
                    "lng": "121.487486",
                    "codigo_postal": "6293-543",
                    "cidade": "Carmellafurt"
                }
            },
            "cliente": {
                "id": 5,
                "nome": "Godfrey Gerlach",
                "email": "camila.yundt@hotmail.com",
                "telefone": "(376) 680-3767 x9168"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/15",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/10",
                "cliente": "http:\/\/localhost\/api\/clientes\/5"
            }
        },
        {
            "id": 16,
            "data_de_entrega": "1981-07-29 04:31:03",
            "data_de_levantamento": "1993-07-31 04:17:25",
            "data_de_entrada_no_sistema": "2003-09-23 09:06:14",
            "data_de_entrega_pretendida": "2009-05-18 04:09:36",
            "tempo_limite_de_levantamento": "2018-12-30 00:09:05",
            "estado_encomenda": 1,
            "temperatura": "10",
            "observacoes": "Mock Turtle is.' 'It's the stupidest tea-party I ever saw in another moment it was out of their hearing her; and when she had never done such a wretched height to be.' 'It is a very respectful tone.",
            "tamanho": "L",
            "cliente_id": 1,
            "estafeta": [
                {
                    "id": 8,
                    "nome": "Holly Boehm",
                    "email": "yvonne.pollich@gmail.com",
                    "telefone": "818.725.3287",
                    "data_nascimento": "2013-05-08",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 16,
                        "user_id": 8
                    }
                }
            ],
            "cacifo": {
                "id": 17,
                "numero": 96,
                "temperatura": "4.8",
                "codigo": "EDxSRxSH-A",
                "tamanho_id": 4,
                "estado_id": 2,
                "localizacao_id": 1,
                "tamanho": {
                    "id": 4,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 1,
                    "nome": "Langosh Courts",
                    "lat": "-28.781776",
                    "lng": "173.302675",
                    "codigo_postal": "3895-096",
                    "cidade": "New Domenick"
                }
            },
            "cliente": {
                "id": 1,
                "nome": "Prof. Art Schuster II",
                "email": "dbeier@yahoo.com",
                "telefone": "(865) 546-5513 x602"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/16",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/17",
                "cliente": "http:\/\/localhost\/api\/clientes\/1"
            }
        },
        {
            "id": 17,
            "data_de_entrega": "1975-11-05 03:05:41",
            "data_de_levantamento": "1993-05-22 01:47:46",
            "data_de_entrada_no_sistema": "2001-02-07 15:52:50",
            "data_de_entrega_pretendida": "1973-02-03 06:26:03",
            "tempo_limite_de_levantamento": "1986-06-07 23:38:44",
            "estado_encomenda": 0,
            "temperatura": "2.5",
            "observacoes": "White Rabbit, 'but it sounds uncommon nonsense.' Alice said to herself, 'it would have appeared to them to sell,' the Hatter said, tossing his head contemptuously. 'I dare say there may be.",
            "tamanho": "L",
            "cliente_id": 6,
            "estafeta": [
                {
                    "id": 4,
                    "nome": "Kristofer Steuber",
                    "email": "osvaldo.streich@yahoo.com",
                    "telefone": "1-706-887-0217 x831",
                    "data_nascimento": "1986-02-13",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 17,
                        "user_id": 4
                    }
                }
            ],
            "cacifo": {
                "id": 17,
                "numero": 96,
                "temperatura": "4.8",
                "codigo": "EDxSRxSH-A",
                "tamanho_id": 4,
                "estado_id": 2,
                "localizacao_id": 1,
                "tamanho": {
                    "id": 4,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 1,
                    "nome": "Langosh Courts",
                    "lat": "-28.781776",
                    "lng": "173.302675",
                    "codigo_postal": "3895-096",
                    "cidade": "New Domenick"
                }
            },
            "cliente": {
                "id": 6,
                "nome": "Abbey Mitchell",
                "email": "angie.crist@gmail.com",
                "telefone": "1-454-374-7594 x6439"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/17",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/17",
                "cliente": "http:\/\/localhost\/api\/clientes\/6"
            }
        },
        {
            "id": 18,
            "data_de_entrega": "2018-08-14 13:31:35",
            "data_de_levantamento": "1971-11-28 07:40:26",
            "data_de_entrada_no_sistema": "1999-01-06 02:59:10",
            "data_de_entrega_pretendida": "2007-05-26 17:06:03",
            "tempo_limite_de_levantamento": "1990-05-29 22:45:00",
            "estado_encomenda": 0,
            "temperatura": "3.4",
            "observacoes": "Luckily for Alice, the little passage: and THEN--she found herself in a sulky tone; 'Seven jogged my elbow.' On which Seven looked up eagerly, half hoping that the Queen jumped up on tiptoe, and.",
            "tamanho": "L",
            "cliente_id": 1,
            "estafeta": [
                {
                    "id": 5,
                    "nome": "Dr. Giovanny Mraz PhD",
                    "email": "kevin19@hotmail.com",
                    "telefone": "(879) 362-9356",
                    "data_nascimento": "1977-03-24",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 18,
                        "user_id": 5
                    }
                }
            ],
            "cacifo": {
                "id": 3,
                "numero": 216,
                "temperatura": "1.4",
                "codigo": "QWk2E",
                "tamanho_id": 3,
                "estado_id": 1,
                "localizacao_id": 1,
                "tamanho": {
                    "id": 3,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 1,
                    "nome": "Langosh Courts",
                    "lat": "-28.781776",
                    "lng": "173.302675",
                    "codigo_postal": "3895-096",
                    "cidade": "New Domenick"
                }
            },
            "cliente": {
                "id": 1,
                "nome": "Prof. Art Schuster II",
                "email": "dbeier@yahoo.com",
                "telefone": "(865) 546-5513 x602"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/18",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/3",
                "cliente": "http:\/\/localhost\/api\/clientes\/1"
            }
        },
        {
            "id": 19,
            "data_de_entrega": "2006-04-15 07:55:46",
            "data_de_levantamento": "1993-10-19 12:08:45",
            "data_de_entrada_no_sistema": "1986-08-13 22:02:29",
            "data_de_entrega_pretendida": "2005-05-30 18:42:58",
            "tempo_limite_de_levantamento": "2004-05-12 03:26:48",
            "estado_encomenda": 0,
            "temperatura": "7",
            "observacoes": "Dormouse,' the Queen said to the end of half those long words, and, what's more, I don't put my arm round your waist,' the Duchess replied, in a furious passion, and went by without noticing her.",
            "tamanho": "S",
            "cliente_id": 3,
            "estafeta": [
                {
                    "id": 5,
                    "nome": "Dr. Giovanny Mraz PhD",
                    "email": "kevin19@hotmail.com",
                    "telefone": "(879) 362-9356",
                    "data_nascimento": "1977-03-24",
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
                "id": 8,
                "numero": 8,
                "temperatura": "7.1",
                "codigo": "kazuk2J",
                "tamanho_id": 1,
                "estado_id": 1,
                "localizacao_id": 5,
                "tamanho": {
                    "id": 1,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 5,
                    "nome": "Chester Lakes",
                    "lat": "-68.571124",
                    "lng": "59.732671",
                    "codigo_postal": "6578-980",
                    "cidade": "Lake Jefferystad"
                }
            },
            "cliente": {
                "id": 3,
                "nome": "Ms. Alysha Johnson",
                "email": "octavia67@hotmail.com",
                "telefone": "(825) 805-2704 x565"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/19",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/8",
                "cliente": "http:\/\/localhost\/api\/clientes\/3"
            }
        },
        {
            "id": 20,
            "data_de_entrega": "2015-08-28 04:18:42",
            "data_de_levantamento": "1978-01-21 13:35:26",
            "data_de_entrada_no_sistema": "1982-08-17 09:30:59",
            "data_de_entrega_pretendida": "1998-12-03 03:07:54",
            "tempo_limite_de_levantamento": "2004-12-02 16:39:01",
            "estado_encomenda": 0,
            "temperatura": "11.5",
            "observacoes": "Like a tea-tray in the lock, and to her feet as the hall was very nearly carried it out into the jury-box, or they would call after her: the last words out loud, and the three were all crowded round.",
            "tamanho": "M",
            "cliente_id": 3,
            "estafeta": [
                {
                    "id": 4,
                    "nome": "Kristofer Steuber",
                    "email": "osvaldo.streich@yahoo.com",
                    "telefone": "1-706-887-0217 x831",
                    "data_nascimento": "1986-02-13",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 20,
                        "user_id": 4
                    }
                }
            ],
            "cacifo": {
                "id": 16,
                "numero": 426,
                "temperatura": "5.6",
                "codigo": "JtufLki",
                "tamanho_id": 4,
                "estado_id": 1,
                "localizacao_id": 4,
                "tamanho": {
                    "id": 4,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 4,
                    "nome": "Carter Ridge",
                    "lat": "17.364717",
                    "lng": "121.487486",
                    "codigo_postal": "6293-543",
                    "cidade": "Carmellafurt"
                }
            },
            "cliente": {
                "id": 3,
                "nome": "Ms. Alysha Johnson",
                "email": "octavia67@hotmail.com",
                "telefone": "(825) 805-2704 x565"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/20",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/16",
                "cliente": "http:\/\/localhost\/api\/clientes\/3"
            }
        },
        {
            "id": 21,
            "data_de_entrega": "1977-02-19 19:33:49",
            "data_de_levantamento": "1982-07-10 01:40:43",
            "data_de_entrada_no_sistema": "1978-10-16 08:07:50",
            "data_de_entrega_pretendida": "2002-12-24 17:17:51",
            "tempo_limite_de_levantamento": "2014-11-01 11:30:58",
            "estado_encomenda": 0,
            "temperatura": "10.9",
            "observacoes": "Alice dear!' said her sister; 'Why, what are they made of?' Alice asked in a low, hurried tone. He looked at poor Alice, that she was looking at Alice the moment she appeared on the slate. 'Herald.",
            "tamanho": "M",
            "cliente_id": 8,
            "estafeta": [
                {
                    "id": 6,
                    "nome": "Ola Wyman",
                    "email": "cathrine74@gmail.com",
                    "telefone": "318.585.3194 x6891",
                    "data_nascimento": "2005-05-17",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 21,
                        "user_id": 6
                    }
                }
            ],
            "cacifo": {
                "id": 8,
                "numero": 8,
                "temperatura": "7.1",
                "codigo": "kazuk2J",
                "tamanho_id": 1,
                "estado_id": 1,
                "localizacao_id": 5,
                "tamanho": {
                    "id": 1,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 5,
                    "nome": "Chester Lakes",
                    "lat": "-68.571124",
                    "lng": "59.732671",
                    "codigo_postal": "6578-980",
                    "cidade": "Lake Jefferystad"
                }
            },
            "cliente": {
                "id": 8,
                "nome": "Anais Conn I",
                "email": "voreilly@hotmail.com",
                "telefone": "916.892.6338 x227"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/21",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/8",
                "cliente": "http:\/\/localhost\/api\/clientes\/8"
            }
        },
        {
            "id": 22,
            "data_de_entrega": "1977-12-09 11:32:26",
            "data_de_levantamento": "2006-10-28 00:42:12",
            "data_de_entrada_no_sistema": "1987-08-05 09:58:07",
            "data_de_entrega_pretendida": "1995-07-21 05:28:57",
            "tempo_limite_de_levantamento": "1980-03-24 19:58:13",
            "estado_encomenda": 1,
            "temperatura": "3.3",
            "observacoes": "Queen! The Queen!' and the arm that was trickling down his brush, and had been all the jurymen on to the Duchess: 'flamingoes and mustard both bite. And the moral of THAT is--\"Take care of.",
            "tamanho": "S",
            "cliente_id": 7,
            "estafeta": [
                {
                    "id": 2,
                    "nome": "Dr. Amani Block",
                    "email": "letha40@gmail.com",
                    "telefone": "(797) 303-9287",
                    "data_nascimento": "1972-01-08",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 22,
                        "user_id": 2
                    }
                }
            ],
            "cacifo": {
                "id": 7,
                "numero": 20,
                "temperatura": "4.1",
                "codigo": "7H9epXao",
                "tamanho_id": 2,
                "estado_id": 2,
                "localizacao_id": 1,
                "tamanho": {
                    "id": 2,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 1,
                    "nome": "Langosh Courts",
                    "lat": "-28.781776",
                    "lng": "173.302675",
                    "codigo_postal": "3895-096",
                    "cidade": "New Domenick"
                }
            },
            "cliente": {
                "id": 7,
                "nome": "Era Denesik",
                "email": "wiegand.reyes@yahoo.com",
                "telefone": "1-368-531-4895"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/22",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/7",
                "cliente": "http:\/\/localhost\/api\/clientes\/7"
            }
        },
        {
            "id": 23,
            "data_de_entrega": "1991-07-13 22:51:54",
            "data_de_levantamento": "1978-07-29 07:01:27",
            "data_de_entrada_no_sistema": "2013-05-06 06:58:47",
            "data_de_entrega_pretendida": "2005-08-17 15:55:56",
            "tempo_limite_de_levantamento": "1972-10-24 04:09:41",
            "estado_encomenda": 0,
            "temperatura": "2.5",
            "observacoes": "Alice thought to herself 'This is Bill,' she gave a sudden leap out of sight: then it watched the Queen jumped up and leave the room, when her eye fell upon a low trembling voice, 'Let us get to the.",
            "tamanho": "M",
            "cliente_id": 6,
            "estafeta": [
                {
                    "id": 7,
                    "nome": "Bryce Corwin PhD",
                    "email": "romaguera.erica@gmail.com",
                    "telefone": "(262) 895-3901",
                    "data_nascimento": "1982-01-16",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 23,
                        "user_id": 7
                    }
                }
            ],
            "cacifo": {
                "id": 16,
                "numero": 426,
                "temperatura": "5.6",
                "codigo": "JtufLki",
                "tamanho_id": 4,
                "estado_id": 1,
                "localizacao_id": 4,
                "tamanho": {
                    "id": 4,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 4,
                    "nome": "Carter Ridge",
                    "lat": "17.364717",
                    "lng": "121.487486",
                    "codigo_postal": "6293-543",
                    "cidade": "Carmellafurt"
                }
            },
            "cliente": {
                "id": 6,
                "nome": "Abbey Mitchell",
                "email": "angie.crist@gmail.com",
                "telefone": "1-454-374-7594 x6439"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/23",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/16",
                "cliente": "http:\/\/localhost\/api\/clientes\/6"
            }
        },
        {
            "id": 24,
            "data_de_entrega": "1988-07-13 04:16:27",
            "data_de_levantamento": "2012-08-20 14:49:12",
            "data_de_entrada_no_sistema": "2002-10-22 07:57:02",
            "data_de_entrega_pretendida": "1997-03-23 15:39:11",
            "tempo_limite_de_levantamento": "1998-01-17 03:27:21",
            "estado_encomenda": 0,
            "temperatura": "0.5",
            "observacoes": "King said, turning to Alice: he had a wink of sleep these three little sisters--they were learning to draw,' the Dormouse again, so violently, that she was terribly frightened all the rest, Between.",
            "tamanho": "M",
            "cliente_id": 6,
            "estafeta": [
                {
                    "id": 3,
                    "nome": "Dr. Gregg Price II",
                    "email": "jleuschke@hotmail.com",
                    "telefone": "1-908-410-6642 x7904",
                    "data_nascimento": "1978-06-29",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 24,
                        "user_id": 3
                    }
                }
            ],
            "cacifo": {
                "id": 11,
                "numero": 194,
                "temperatura": "0.5",
                "codigo": "p5OjVy",
                "tamanho_id": 1,
                "estado_id": 2,
                "localizacao_id": 5,
                "tamanho": {
                    "id": 1,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 5,
                    "nome": "Chester Lakes",
                    "lat": "-68.571124",
                    "lng": "59.732671",
                    "codigo_postal": "6578-980",
                    "cidade": "Lake Jefferystad"
                }
            },
            "cliente": {
                "id": 6,
                "nome": "Abbey Mitchell",
                "email": "angie.crist@gmail.com",
                "telefone": "1-454-374-7594 x6439"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/24",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/11",
                "cliente": "http:\/\/localhost\/api\/clientes\/6"
            }
        },
        {
            "id": 25,
            "data_de_entrega": "2006-12-07 20:36:55",
            "data_de_levantamento": "2014-05-03 21:34:52",
            "data_de_entrada_no_sistema": "2007-10-14 14:37:46",
            "data_de_entrega_pretendida": "1995-04-08 23:55:29",
            "tempo_limite_de_levantamento": "1974-04-13 02:34:23",
            "estado_encomenda": 1,
            "temperatura": "7.2",
            "observacoes": "His voice has a timid and tremulous sound.] 'That's different from what I get\" is the driest thing I ask! It's always six o'clock now.' A bright idea came into Alice's shoulder as he came, 'Oh! the.",
            "tamanho": "M",
            "cliente_id": 7,
            "estafeta": [
                {
                    "id": 3,
                    "nome": "Dr. Gregg Price II",
                    "email": "jleuschke@hotmail.com",
                    "telefone": "1-908-410-6642 x7904",
                    "data_nascimento": "1978-06-29",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 25,
                        "user_id": 3
                    }
                }
            ],
            "cacifo": {
                "id": 11,
                "numero": 194,
                "temperatura": "0.5",
                "codigo": "p5OjVy",
                "tamanho_id": 1,
                "estado_id": 2,
                "localizacao_id": 5,
                "tamanho": {
                    "id": 1,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 5,
                    "nome": "Chester Lakes",
                    "lat": "-68.571124",
                    "lng": "59.732671",
                    "codigo_postal": "6578-980",
                    "cidade": "Lake Jefferystad"
                }
            },
            "cliente": {
                "id": 7,
                "nome": "Era Denesik",
                "email": "wiegand.reyes@yahoo.com",
                "telefone": "1-368-531-4895"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/25",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/11",
                "cliente": "http:\/\/localhost\/api\/clientes\/7"
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
curl -X POST "http://localhost/api/encomendas"     -d "data_de_entrega"="W5YLrh4EWN4CUt0k" \
    -d "data_de_levantamento"="dtb0G0CoS9cpGspB" \
    -d "data_de_entrada_no_sistema"="g33O0TATc7hfjHaL" \
    -d "data_de_entrega_pretendida"="sklEgtuZNzIfmNDQ" \
    -d "tempo_limite_de_levantamento"="M3tyz9hL3nbgM3XA" \
    -d "estado_encomenda"="1" \
    -d "temperatura"="3358" \
    -d "observacoes"="wJcjmuJ1mt9RbbjA" \
    -d "tamanho"="GI5iwxdWKkPPgztN" \
    -d "cliente_id"="numWUuf9JbdmBH6i" \
    -d "cacifo_id"="d1CmnHeE72GdUrnF" 
```

```javascript
const url = new URL("http://localhost/api/encomendas");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "data_de_entrega": "W5YLrh4EWN4CUt0k",
    "data_de_levantamento": "dtb0G0CoS9cpGspB",
    "data_de_entrada_no_sistema": "g33O0TATc7hfjHaL",
    "data_de_entrega_pretendida": "sklEgtuZNzIfmNDQ",
    "tempo_limite_de_levantamento": "M3tyz9hL3nbgM3XA",
    "estado_encomenda": "1",
    "temperatura": "3358",
    "observacoes": "wJcjmuJ1mt9RbbjA",
    "tamanho": "GI5iwxdWKkPPgztN",
    "cliente_id": "numWUuf9JbdmBH6i",
    "cacifo_id": "d1CmnHeE72GdUrnF",
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
    data_de_entrega | date |  optional  | optional Data de entrega da encomenda.
    data_de_levantamento | date |  optional  | optional Data de levantamento da encomenda.
    data_de_entrada_no_sistema | date |  required  | Data em que a encomenda foi registada no sistema.
    data_de_entrega_pretendida | date |  required  | Data em que o cliente pretende a entrega.
    tempo_limite_de_levantamento | date |  required  | Tempo limite para o levantamento de certa encomenda.
    estado_encomenda | boolean |  optional  | Váriavel que diz se a encomenda está pronto para a entrega ou não
    temperatura | float |  optional  | optional Temperatura de uma encomenda. Caso seja nulo o valor default será: 20.
    observacoes | string |  optional  | optional Observações de uma encomenda. Caso seja nula o valor default será: "Nenhuma observação.".
    tamanho | string |  required  | Tamanho de uma encomenda.
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
        "data_de_entrega": "1987-10-04 16:58:37",
        "data_de_levantamento": "1979-12-28 10:07:22",
        "data_de_entrada_no_sistema": "1983-04-02 06:35:59",
        "data_de_entrega_pretendida": "2003-06-22 18:07:10",
        "tempo_limite_de_levantamento": "2010-05-26 12:35:51",
        "estado_encomenda": 1,
        "temperatura": "11",
        "observacoes": "Pigeon in a tone of great curiosity. 'Soles and eels, of course,' he said in a confused way, 'Prizes! Prizes!' Alice had been looking at the cook, and a Dodo, a Lory and an Eaglet, and several other.",
        "tamanho": "S",
        "cliente_id": 5,
        "cacifo_id": 18,
        "estafeta": [
            {
                "id": 8,
                "nome": "Holly Boehm",
                "email": "yvonne.pollich@gmail.com",
                "telefone": "818.725.3287",
                "data_nascimento": "2013-05-08",
                "local_de_trabalho": "TDIStore",
                "tipo_id": 2,
                "supervisor_id": 1,
                "pivot": {
                    "encomenda_id": 1,
                    "user_id": 8
                }
            }
        ],
        "cacifo": {
            "id": 18,
            "numero": 261,
            "temperatura": "5.7",
            "codigo": "BYC3Hp6n",
            "tamanho_id": 2,
            "estado_id": 1,
            "localizacao_id": 2,
            "tamanho": {
                "id": 2,
                "tamanho": "XL"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 2,
                "nome": "Miracle Brooks",
                "lat": "-24.618798",
                "lng": "-41.522721",
                "codigo_postal": "9193-865",
                "cidade": "Port Rustyberg"
            }
        },
        "cliente": {
            "id": 5,
            "nome": "Godfrey Gerlach",
            "email": "camila.yundt@hotmail.com",
            "telefone": "(376) 680-3767 x9168"
        },
        "href": {
            "cliente": "http:\/\/localhost\/api\/clientes\/5",
            "cacifo": "http:\/\/localhost\/api\/cacifos\/18"
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
curl -X PUT "http://localhost/api/encomendas/{encomenda}"     -d "data_de_entrega"="fo7lYIzNZeSHclbl" \
    -d "data_de_levantamento"="UeYMrxdGpAfF1dxr" \
    -d "data_de_entrada_no_sistema"="9tUdhBvX5rfWbuxA" \
    -d "data_de_entrega_pretendida"="RSEKXtLsEmn7KqvV" \
    -d "tempo_limite_de_levantamento"="fUvORzFe5uMuO46i" \
    -d "estado_encomenda"="false" \
    -d "temperatura"="1371.927759" \
    -d "observacoes"="SSmw20GqEA7ih2cY" \
    -d "tamanho"="PUFDJ1kOBAV0Lt1g" \
    -d "cliente_id"="oarVrWuXek3k7rh3" \
    -d "cacifo_id"="Ry35zmJJ2cD25GXH" 
```

```javascript
const url = new URL("http://localhost/api/encomendas/{encomenda}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "data_de_entrega": "fo7lYIzNZeSHclbl",
    "data_de_levantamento": "UeYMrxdGpAfF1dxr",
    "data_de_entrada_no_sistema": "9tUdhBvX5rfWbuxA",
    "data_de_entrega_pretendida": "RSEKXtLsEmn7KqvV",
    "tempo_limite_de_levantamento": "fUvORzFe5uMuO46i",
    "estado_encomenda": "",
    "temperatura": "1371.927759",
    "observacoes": "SSmw20GqEA7ih2cY",
    "tamanho": "PUFDJ1kOBAV0Lt1g",
    "cliente_id": "oarVrWuXek3k7rh3",
    "cacifo_id": "Ry35zmJJ2cD25GXH",
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
    data_de_entrega | date |  optional  | optional Data de entrega da encomenda.
    data_de_levantamento | date |  optional  | optional Data de levantamento da encomenda.
    data_de_entrada_no_sistema | date |  optional  | optional Data em que a encomenda foi registada no sistema.
    data_de_entrega_pretendida | date |  optional  | optional Data em que o cliente pretende a entrega.
    tempo_limite_de_levantamento | date |  optional  | optional Tempo limite para o levantamento de certa encomenda.
    estado_encomenda | boolean |  optional  | Váriavel que diz se a encomenda está pronto para a entrega ou não
    temperatura | float |  optional  | optional Temperatura de uma encomenda. Caso seja nulo o valor default será: 20.
    observacoes | string |  optional  | optional Observações de uma encomenda. Caso seja nula o valor default será: "Nenhuma observação.".
    tamanho | string |  optional  | optional Tamanho de uma encomenda.
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

Endpoint para controlar os estados
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
curl -X POST "http://localhost/api/estados"     -d "estado"="tE5dO7ANWgU4fG2y" 
```

```javascript
const url = new URL("http://localhost/api/estados");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "estado": "tE5dO7ANWgU4fG2y",
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
curl -X PUT "http://localhost/api/estados/{estado}"     -d "estado"="lSzqtur4rozDTMtv" 
```

```javascript
const url = new URL("http://localhost/api/estados/{estado}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "estado": "lSzqtur4rozDTMtv",
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

Endpoint para controlar as localizacoes
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
            "nome": "Langosh Courts",
            "lat": "-28.781776",
            "lng": "173.302675",
            "codigo_postal": "3895-096",
            "cidade": "New Domenick",
            "href": {
                "link": "http:\/\/localhost\/api\/localizacaos\/1"
            }
        },
        {
            "nome": "Miracle Brooks",
            "lat": "-24.618798",
            "lng": "-41.522721",
            "codigo_postal": "9193-865",
            "cidade": "Port Rustyberg",
            "href": {
                "link": "http:\/\/localhost\/api\/localizacaos\/2"
            }
        },
        {
            "nome": "Mario Brooks",
            "lat": "59.60196",
            "lng": "-79.552655",
            "codigo_postal": "3807-120",
            "cidade": "East Albachester",
            "href": {
                "link": "http:\/\/localhost\/api\/localizacaos\/3"
            }
        },
        {
            "nome": "Carter Ridge",
            "lat": "17.364717",
            "lng": "121.487486",
            "codigo_postal": "6293-543",
            "cidade": "Carmellafurt",
            "href": {
                "link": "http:\/\/localhost\/api\/localizacaos\/4"
            }
        },
        {
            "nome": "Chester Lakes",
            "lat": "-68.571124",
            "lng": "59.732671",
            "codigo_postal": "6578-980",
            "cidade": "Lake Jefferystad",
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
curl -X POST "http://localhost/api/localizacaos"     -d "nome"="EVcS7n6q2CJVny2y" \
    -d "lat"="307010.01314" \
    -d "long"="43341.18" \
    -d "codigo_postal"="d0fCILA2TmMU48pz" \
    -d "cidade"="k2cU8M8EVGVuQKZT" 
```

```javascript
const url = new URL("http://localhost/api/localizacaos");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "EVcS7n6q2CJVny2y",
    "lat": "307010.01314",
    "long": "43341.18",
    "codigo_postal": "d0fCILA2TmMU48pz",
    "cidade": "k2cU8M8EVGVuQKZT",
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
    codigo_postal | string |  required  | Código-postal da localização.
    cidade | string |  required  | Cidade da localização.

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
        "nome": "Langosh Courts",
        "lat": "-28.781776",
        "lng": "173.302675",
        "codigo_postal": "3895-096",
        "cidade": "New Domenick"
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
curl -X PUT "http://localhost/api/localizacaos/{localizacao}"     -d "nome"="PZwsYqWE8nq0MCGn" \
    -d "latitude"="6ALJJBxVcSZPOkxJ" \
    -d "longitude"="PKcru5SJwtT5d8Fm" \
    -d "codigo_postal"="z5n1TNZLqwBHDsDB" \
    -d "cidade"="zBs51fDRkzlytoTs" 
```

```javascript
const url = new URL("http://localhost/api/localizacaos/{localizacao}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "PZwsYqWE8nq0MCGn",
    "latitude": "6ALJJBxVcSZPOkxJ",
    "longitude": "PKcru5SJwtT5d8Fm",
    "codigo_postal": "z5n1TNZLqwBHDsDB",
    "cidade": "zBs51fDRkzlytoTs",
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
    codigo_postal | string |  required  | Código-postal da localização.
    cidade | string |  required  | Cidade da localização.

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

#Log management

Endpoint para controlar os logs
<!-- START_ac1d028c597059c30da88f07f7727c6e -->
## Get Log

Lista todas os logs de um cacifo.

> Example request:

```bash
curl -X GET -G "http://localhost/api/cacifo/{cacifo}/log" 
```

```javascript
const url = new URL("http://localhost/api/cacifo/{cacifo}/log");

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
        "id": 3,
        "data_hora": "1976-10-22 23:34:52",
        "cacifo_numero": 142,
        "encomenda_numero": 19,
        "user_id": 5,
        "user_name": "Dr. Giovanny Mraz PhD",
        "user_tipo": "Admin",
        "cliente_id": 8,
        "cliente_nome": "Anais Conn I",
        "cacifo_id": 1,
        "updated_at": "2019-02-05 23:54:10"
    },
    {
        "id": 18,
        "data_hora": "2008-11-09 18:06:32",
        "cacifo_numero": 142,
        "encomenda_numero": 10,
        "user_id": 7,
        "user_name": "Bryce Corwin PhD",
        "user_tipo": "Estafeta",
        "cliente_id": 6,
        "cliente_nome": "Abbey Mitchell",
        "cacifo_id": 1,
        "updated_at": "2019-02-05 23:54:10"
    }
]
```

### HTTP Request
`GET api/cacifo/{cacifo}/log`


<!-- END_ac1d028c597059c30da88f07f7727c6e -->

<!-- START_8119020f3e89ff3420f5c49571fd7bd0 -->
## Post Encomenda

Adiciona uma nova encomenda.

> Example request:

```bash
curl -X POST "http://localhost/api/cacifo/{cacifo}/log"     -d "data_hora"="XvX9vhJ3WWPw9xlG" \
    -d "cacifo_numero"="6s1ebYdGhkC1pdYb" \
    -d "encomenda_numero"="5" \
    -d "user_id"="cr3TIzNZajaPR7FS" \
    -d "user_name"="WSBVEdKUV8moorgF" \
    -d "user_tipo"="xmbWRk5DE6JMRKXT" \
    -d "cliente_id"="1" \
    -d "cliente_nome"="ufODJWctUohWaaPA" \
    -d "cacifo_id"="13" 
```

```javascript
const url = new URL("http://localhost/api/cacifo/{cacifo}/log");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "data_hora": "XvX9vhJ3WWPw9xlG",
    "cacifo_numero": "6s1ebYdGhkC1pdYb",
    "encomenda_numero": "5",
    "user_id": "cr3TIzNZajaPR7FS",
    "user_name": "WSBVEdKUV8moorgF",
    "user_tipo": "xmbWRk5DE6JMRKXT",
    "cliente_id": "1",
    "cliente_nome": "ufODJWctUohWaaPA",
    "cacifo_id": "13",
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
        "properties": "logCacifoObject"
    }
}
```

### HTTP Request
`POST api/cacifo/{cacifo}/log`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    data_hora | date |  required  | Data e hora do registo.
    cacifo_numero | required |  optional  | int Número do cacifo.
    encomenda_numero | integer |  required  | Número da encomenda.
    user_id | date |  optional  | int Id do utilizador.
    user_name | string |  optional  | Nome do utilizador.
    user_tipo | string |  optional  | Tipo do utilizador.
    cliente_id | integer |  optional  | Id do cliente associadoa encomenda.
    cliente_nome | string |  optional  | Nome do cliente associado a encomenda.
    cacifo_id | integer |  required  | Id do cacifo.

<!-- END_8119020f3e89ff3420f5c49571fd7bd0 -->

<!-- START_3879657ab4f05e864f142f59132458c1 -->
## Get a Log.

Mostra um log detalhada.

> Example request:

```bash
curl -X GET -G "http://localhost/api/cacifo/{cacifo}/log/{log}" 
```

```javascript
const url = new URL("http://localhost/api/cacifo/{cacifo}/log/{log}");

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

> Example response (500):

```json
{
    "message": "Class 'App\\Http\\Resources\\LogCacifo\\CacifoResource' not found",
    "exception": "Symfony\\Component\\Debug\\Exception\\FatalThrowableError",
    "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/app\/Http\/Resources\/LogCacifo\/LogCacifoResource.php",
    "line": 31,
    "trace": [
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Http\/Resources\/Json\/JsonResource.php",
            "line": 90,
            "function": "toArray",
            "class": "App\\Http\\Resources\\LogCacifo\\LogCacifoResource",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Http\/Resources\/Json\/ResourceResponse.php",
            "line": 39,
            "function": "resolve",
            "class": "Illuminate\\Http\\Resources\\Json\\JsonResource",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Http\/Resources\/Json\/JsonResource.php",
            "line": 197,
            "function": "toResponse",
            "class": "Illuminate\\Http\\Resources\\Json\\ResourceResponse",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 735,
            "function": "toResponse",
            "class": "Illuminate\\Http\\Resources\\Json\\JsonResource",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 722,
            "function": "toResponse",
            "class": "Illuminate\\Routing\\Router",
            "type": "::"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 682,
            "function": "prepareResponse",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 684,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 659,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 625,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 614,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Tools\/ResponseStrategies\/ResponseCallStrategy.php",
            "line": 272,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Tools\/ResponseStrategies\/ResponseCallStrategy.php",
            "line": 256,
            "function": "callLaravelRoute",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Tools\/ResponseStrategies\/ResponseCallStrategy.php",
            "line": 33,
            "function": "makeApiCall",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Tools\/ResponseResolver.php",
            "line": 49,
            "function": "__invoke",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Tools\/ResponseResolver.php",
            "line": 68,
            "function": "resolve",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseResolver",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Tools\/Generator.php",
            "line": 54,
            "function": "getResponse",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseResolver",
            "type": "::"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Commands\/GenerateDocumentation.php",
            "line": 196,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Tools\\Generator",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Commands\/GenerateDocumentation.php",
            "line": 57,
            "function": "processRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 572,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 183,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 255,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 170,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/symfony\/console\/Application.php",
            "line": 901,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/symfony\/console\/Application.php",
            "line": 262,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/symfony\/console\/Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 89,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/caio\/MCMM\/htdocs\/tdi\/relockersAPI\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/cacifo/{cacifo}/log/{log}`


<!-- END_3879657ab4f05e864f142f59132458c1 -->

<!-- START_cfcfa0445240b4d007ce20b315db1ce1 -->
## Remove a log.

Disabled request.

> Example request:

```bash
curl -X DELETE "http://localhost/api/cacifo/{cacifo}/log/{log}" 
```

```javascript
const url = new URL("http://localhost/api/cacifo/{cacifo}/log/{log}");

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


### HTTP Request
`DELETE api/cacifo/{cacifo}/log/{log}`


<!-- END_cfcfa0445240b4d007ce20b315db1ce1 -->

#Tamanhos management

Endpoint para controlar os tamanhos
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
            "tamanho": "M",
            "href": {
                "link": "http:\/\/localhost\/api\/tamanhos\/1"
            }
        },
        {
            "tamanho": "XL",
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
            "tamanho": "XL",
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
curl -X POST "http://localhost/api/tamanhos"     -d "tamanho"="HP9Psdxo2WMfACEa" 
```

```javascript
const url = new URL("http://localhost/api/tamanhos");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "tamanho": "HP9Psdxo2WMfACEa",
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
        "tamanho": "M"
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
curl -X PUT "http://localhost/api/tamanhos/{tamanho}"     -d "tamanho"="fwhlMSOKfak4NDid" 
```

```javascript
const url = new URL("http://localhost/api/tamanhos/{tamanho}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "tamanho": "fwhlMSOKfak4NDid",
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

Endpoint para controlar o tipo de um utilizador.
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
            "tipo": "Estafeta",
            "href": {
                "link": "http:\/\/localhost\/api\/userTypes\/1"
            }
        },
        {
            "tipo": "Admin",
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
curl -X POST "http://localhost/api/userTypes"     -d "tipo"="8BZe1V5FedxNmKdB" 
```

```javascript
const url = new URL("http://localhost/api/userTypes");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "tipo": "8BZe1V5FedxNmKdB",
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
        "tipo": "Estafeta"
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
curl -X PUT "http://localhost/api/userTypes/{userType}"     -d "tipo"="8WCCwXvBykPgYeEI" 
```

```javascript
const url = new URL("http://localhost/api/userTypes/{userType}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "tipo": "8WCCwXvBykPgYeEI",
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

Endpoint para controlar os users
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
            "nome": "Emilie Barton",
            "email": "zdubuque@hotmail.com",
            "telefone": "(708) 386-9679",
            "data_nascimento": "1988-07-17",
            "local_de_trabalho": "TDIStore",
            "tipo_id": 1,
            "supervisor_id": 1,
            "tipo": {
                "id": 1,
                "tipo": "Estafeta"
            }
        },
        {
            "id": 2,
            "nome": "Dr. Amani Block",
            "email": "letha40@gmail.com",
            "telefone": "(797) 303-9287",
            "data_nascimento": "1972-01-08",
            "local_de_trabalho": "TDIStore",
            "tipo_id": 2,
            "supervisor_id": 1,
            "tipo": {
                "id": 2,
                "tipo": "Admin"
            }
        },
        {
            "id": 3,
            "nome": "Dr. Gregg Price II",
            "email": "jleuschke@hotmail.com",
            "telefone": "1-908-410-6642 x7904",
            "data_nascimento": "1978-06-29",
            "local_de_trabalho": "TDIStore",
            "tipo_id": 1,
            "supervisor_id": 1,
            "tipo": {
                "id": 1,
                "tipo": "Estafeta"
            }
        },
        {
            "id": 4,
            "nome": "Kristofer Steuber",
            "email": "osvaldo.streich@yahoo.com",
            "telefone": "1-706-887-0217 x831",
            "data_nascimento": "1986-02-13",
            "local_de_trabalho": "TDIStore",
            "tipo_id": 1,
            "supervisor_id": 1,
            "tipo": {
                "id": 1,
                "tipo": "Estafeta"
            }
        },
        {
            "id": 5,
            "nome": "Dr. Giovanny Mraz PhD",
            "email": "kevin19@hotmail.com",
            "telefone": "(879) 362-9356",
            "data_nascimento": "1977-03-24",
            "local_de_trabalho": "TDIStore",
            "tipo_id": 1,
            "supervisor_id": 1,
            "tipo": {
                "id": 1,
                "tipo": "Estafeta"
            }
        },
        {
            "id": 6,
            "nome": "Ola Wyman",
            "email": "cathrine74@gmail.com",
            "telefone": "318.585.3194 x6891",
            "data_nascimento": "2005-05-17",
            "local_de_trabalho": "TDIStore",
            "tipo_id": 1,
            "supervisor_id": 1,
            "tipo": {
                "id": 1,
                "tipo": "Estafeta"
            }
        },
        {
            "id": 7,
            "nome": "Bryce Corwin PhD",
            "email": "romaguera.erica@gmail.com",
            "telefone": "(262) 895-3901",
            "data_nascimento": "1982-01-16",
            "local_de_trabalho": "TDIStore",
            "tipo_id": 1,
            "supervisor_id": 1,
            "tipo": {
                "id": 1,
                "tipo": "Estafeta"
            }
        },
        {
            "id": 8,
            "nome": "Holly Boehm",
            "email": "yvonne.pollich@gmail.com",
            "telefone": "818.725.3287",
            "data_nascimento": "2013-05-08",
            "local_de_trabalho": "TDIStore",
            "tipo_id": 2,
            "supervisor_id": 1,
            "tipo": {
                "id": 2,
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
curl -X POST "http://localhost/api/users"     -d "nome"="CLXOm7pHw4TOPP2E" \
    -d "email"="1A2H6pAT5ZX06QO0" \
    -d "password"="N4LH5xOJ75jHH690" \
    -d "telefone"="MzMxwJ2qiI2FS5av" \
    -d "data_nascimento"="vI7yWVnhPU9NUjUK" \
    -d "local_de_trabalho"="4WkdVqQ6XBj2L2wB" \
    -d "tipo_id"="hIduno2cHA2EV1nO" \
    -d "supervisor_id"="I0B8diZWPP0FBHjF" 
```

```javascript
const url = new URL("http://localhost/api/users");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "CLXOm7pHw4TOPP2E",
    "email": "1A2H6pAT5ZX06QO0",
    "password": "N4LH5xOJ75jHH690",
    "telefone": "MzMxwJ2qiI2FS5av",
    "data_nascimento": "vI7yWVnhPU9NUjUK",
    "local_de_trabalho": "4WkdVqQ6XBj2L2wB",
    "tipo_id": "hIduno2cHA2EV1nO",
    "supervisor_id": "I0B8diZWPP0FBHjF",
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
        "nome": "Emilie Barton",
        "email": "zdubuque@hotmail.com",
        "password": "7r3+B(w^]WE#",
        "telefone": "(708) 386-9679",
        "data_nascimento": "1988-07-17",
        "local_de_trabalho": "TDIStore",
        "tipo_id": 1,
        "supervisor_id": 1,
        "tipo": {
            "id": 1,
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
curl -X PUT "http://localhost/api/users/{user}"     -d "nome"="mapV4QZ9uCf36l7r" \
    -d "email"="gbfHYYhdDtlbqarG" \
    -d "password"="2aSTQMUx0sa8Bphq" \
    -d "telefone"="jukdBzPr36VEFn6N" \
    -d "data_nascimento"="6osfk8CZF8I0g8Vy" \
    -d "tipo_id"="NbHjVpMDw6nr1ZEn" \
    -d "supervisor_id"="ZhferTEbduGExc8I" 
```

```javascript
const url = new URL("http://localhost/api/users/{user}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "mapV4QZ9uCf36l7r",
    "email": "gbfHYYhdDtlbqarG",
    "password": "2aSTQMUx0sa8Bphq",
    "telefone": "jukdBzPr36VEFn6N",
    "data_nascimento": "6osfk8CZF8I0g8Vy",
    "tipo_id": "NbHjVpMDw6nr1ZEn",
    "supervisor_id": "ZhferTEbduGExc8I",
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
            "id": 7,
            "data_de_entrega": "2009-04-24 07:29:25",
            "data_de_levantamento": "2015-06-28 09:21:54",
            "data_de_entrada_no_sistema": "1994-03-06 18:01:46",
            "data_de_entrega_pretendida": "2000-07-21 10:50:33",
            "tempo_limite_de_levantamento": "2013-12-11 12:13:51",
            "estado_encomenda": 1,
            "temperatura": "11.3",
            "observacoes": "New Zealand or Australia?' (and she tried her best to climb up one of the shelves as she could, 'If you can't swim, can you?' he added, turning to the jury, of course--\"I GAVE HER ONE, THEY GAVE HIM.",
            "tamanho": "S",
            "cliente_id": 9,
            "cacifo_id": 4,
            "estafeta": [
                {
                    "id": 1,
                    "nome": "Emilie Barton",
                    "email": "zdubuque@hotmail.com",
                    "telefone": "(708) 386-9679",
                    "data_nascimento": "1988-07-17",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 7,
                        "user_id": 1
                    }
                }
            ],
            "cacifo": {
                "id": 4,
                "numero": 344,
                "temperatura": "1",
                "codigo": "uuZJ10td",
                "tamanho_id": 3,
                "estado_id": 1,
                "localizacao_id": 5,
                "tamanho": {
                    "id": 3,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 5,
                    "nome": "Chester Lakes",
                    "lat": "-68.571124",
                    "lng": "59.732671",
                    "codigo_postal": "6578-980",
                    "cidade": "Lake Jefferystad"
                }
            },
            "cliente": {
                "id": 9,
                "nome": "Prof. Maritza Sawayn",
                "email": "langosh.wilburn@hotmail.com",
                "telefone": "581-212-3445 x6324"
            },
            "href": {
                "cliente": "http:\/\/localhost\/api\/clientes\/9",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/4"
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


