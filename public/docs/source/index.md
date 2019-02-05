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
            "numero": 147,
            "temperatura": "5.6",
            "tamanho_id": 2,
            "estado_id": 2,
            "localizacao_id": 3,
            "tamanho": {
                "id": 2,
                "tamanho": "XL"
            },
            "estado": {
                "id": 2,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 3,
                "nome": "Ariane Vista",
                "lat": "58.435104",
                "lng": "103.061084",
                "codigo_postal": "9103-650",
                "cidade": "East Juanaside"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/1",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/2",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/3"
            }
        },
        {
            "id": 2,
            "numero": 417,
            "temperatura": "6.2",
            "tamanho_id": 1,
            "estado_id": 1,
            "localizacao_id": 5,
            "tamanho": {
                "id": 1,
                "tamanho": "S"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 5,
                "nome": "Kunze Dale",
                "lat": "-62.949086",
                "lng": "140.9678",
                "codigo_postal": "4148-910",
                "cidade": "Framibury"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/2",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/1",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/5"
            }
        },
        {
            "id": 3,
            "numero": 268,
            "temperatura": "9.5",
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
                "nome": "Drake Mews",
                "lat": "-12.235179",
                "lng": "-166.851449",
                "codigo_postal": "3303-517",
                "cidade": "Lake Rex"
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
            "numero": 341,
            "temperatura": "10.3",
            "tamanho_id": 3,
            "estado_id": 1,
            "localizacao_id": 2,
            "tamanho": {
                "id": 3,
                "tamanho": "L"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 2,
                "nome": "Verona Ridges",
                "lat": "-40.165968",
                "lng": "12.338295",
                "codigo_postal": "5381-921",
                "cidade": "East Shyann"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/4",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/3",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/2"
            }
        },
        {
            "id": 5,
            "numero": 466,
            "temperatura": "9",
            "tamanho_id": 4,
            "estado_id": 2,
            "localizacao_id": 4,
            "tamanho": {
                "id": 4,
                "tamanho": "L"
            },
            "estado": {
                "id": 2,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 4,
                "nome": "Hammes Grove",
                "lat": "55.155212",
                "lng": "134.57384",
                "codigo_postal": "7795-535",
                "cidade": "Dwightberg"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/5",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/4",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/4"
            }
        },
        {
            "id": 6,
            "numero": 41,
            "temperatura": "7.6",
            "tamanho_id": 1,
            "estado_id": 1,
            "localizacao_id": 5,
            "tamanho": {
                "id": 1,
                "tamanho": "S"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 5,
                "nome": "Kunze Dale",
                "lat": "-62.949086",
                "lng": "140.9678",
                "codigo_postal": "4148-910",
                "cidade": "Framibury"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/6",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/1",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/5"
            }
        },
        {
            "id": 7,
            "numero": 265,
            "temperatura": "0.7",
            "tamanho_id": 3,
            "estado_id": 2,
            "localizacao_id": 1,
            "tamanho": {
                "id": 3,
                "tamanho": "L"
            },
            "estado": {
                "id": 2,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 1,
                "nome": "Drake Mews",
                "lat": "-12.235179",
                "lng": "-166.851449",
                "codigo_postal": "3303-517",
                "cidade": "Lake Rex"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/7",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/3",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/1"
            }
        },
        {
            "id": 8,
            "numero": 374,
            "temperatura": "7.9",
            "tamanho_id": 4,
            "estado_id": 1,
            "localizacao_id": 2,
            "tamanho": {
                "id": 4,
                "tamanho": "L"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 2,
                "nome": "Verona Ridges",
                "lat": "-40.165968",
                "lng": "12.338295",
                "codigo_postal": "5381-921",
                "cidade": "East Shyann"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/8",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/4",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/2"
            }
        },
        {
            "id": 9,
            "numero": 424,
            "temperatura": "2.8",
            "tamanho_id": 1,
            "estado_id": 2,
            "localizacao_id": 3,
            "tamanho": {
                "id": 1,
                "tamanho": "S"
            },
            "estado": {
                "id": 2,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 3,
                "nome": "Ariane Vista",
                "lat": "58.435104",
                "lng": "103.061084",
                "codigo_postal": "9103-650",
                "cidade": "East Juanaside"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/9",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/1",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/3"
            }
        },
        {
            "id": 10,
            "numero": 252,
            "temperatura": "10.5",
            "tamanho_id": 3,
            "estado_id": 2,
            "localizacao_id": 3,
            "tamanho": {
                "id": 3,
                "tamanho": "L"
            },
            "estado": {
                "id": 2,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 3,
                "nome": "Ariane Vista",
                "lat": "58.435104",
                "lng": "103.061084",
                "codigo_postal": "9103-650",
                "cidade": "East Juanaside"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/10",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/3",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/3"
            }
        },
        {
            "id": 11,
            "numero": 282,
            "temperatura": "4.2",
            "tamanho_id": 4,
            "estado_id": 2,
            "localizacao_id": 4,
            "tamanho": {
                "id": 4,
                "tamanho": "L"
            },
            "estado": {
                "id": 2,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 4,
                "nome": "Hammes Grove",
                "lat": "55.155212",
                "lng": "134.57384",
                "codigo_postal": "7795-535",
                "cidade": "Dwightberg"
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
            "numero": 321,
            "temperatura": "4.8",
            "tamanho_id": 2,
            "estado_id": 1,
            "localizacao_id": 1,
            "tamanho": {
                "id": 2,
                "tamanho": "XL"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 1,
                "nome": "Drake Mews",
                "lat": "-12.235179",
                "lng": "-166.851449",
                "codigo_postal": "3303-517",
                "cidade": "Lake Rex"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/12",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/2",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/1"
            }
        },
        {
            "id": 13,
            "numero": 243,
            "temperatura": "10",
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
                "nome": "Verona Ridges",
                "lat": "-40.165968",
                "lng": "12.338295",
                "codigo_postal": "5381-921",
                "cidade": "East Shyann"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/13",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/2",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/2"
            }
        },
        {
            "id": 14,
            "numero": 32,
            "temperatura": "8.5",
            "tamanho_id": 4,
            "estado_id": 1,
            "localizacao_id": 2,
            "tamanho": {
                "id": 4,
                "tamanho": "L"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 2,
                "nome": "Verona Ridges",
                "lat": "-40.165968",
                "lng": "12.338295",
                "codigo_postal": "5381-921",
                "cidade": "East Shyann"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/14",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/4",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/2"
            }
        },
        {
            "id": 15,
            "numero": 474,
            "temperatura": "8.7",
            "tamanho_id": 3,
            "estado_id": 1,
            "localizacao_id": 2,
            "tamanho": {
                "id": 3,
                "tamanho": "L"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 2,
                "nome": "Verona Ridges",
                "lat": "-40.165968",
                "lng": "12.338295",
                "codigo_postal": "5381-921",
                "cidade": "East Shyann"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/15",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/3",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/2"
            }
        },
        {
            "id": 16,
            "numero": 116,
            "temperatura": "11.7",
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
                "nome": "Kunze Dale",
                "lat": "-62.949086",
                "lng": "140.9678",
                "codigo_postal": "4148-910",
                "cidade": "Framibury"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/16",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/3",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/5"
            }
        },
        {
            "id": 17,
            "numero": 308,
            "temperatura": "4.9",
            "tamanho_id": 2,
            "estado_id": 2,
            "localizacao_id": 5,
            "tamanho": {
                "id": 2,
                "tamanho": "XL"
            },
            "estado": {
                "id": 2,
                "estado": "Indisponivel"
            },
            "localizacao": {
                "id": 5,
                "nome": "Kunze Dale",
                "lat": "-62.949086",
                "lng": "140.9678",
                "codigo_postal": "4148-910",
                "cidade": "Framibury"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/17",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/2",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/5"
            }
        },
        {
            "id": 18,
            "numero": 3,
            "temperatura": "7.6",
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
                "nome": "Ariane Vista",
                "lat": "58.435104",
                "lng": "103.061084",
                "codigo_postal": "9103-650",
                "cidade": "East Juanaside"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/18",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/2",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/3"
            }
        },
        {
            "id": 19,
            "numero": 480,
            "temperatura": "8.2",
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
                "nome": "Kunze Dale",
                "lat": "-62.949086",
                "lng": "140.9678",
                "codigo_postal": "4148-910",
                "cidade": "Framibury"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/19",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/2",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/5"
            }
        },
        {
            "id": 20,
            "numero": 61,
            "temperatura": "6.9",
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
                "nome": "Verona Ridges",
                "lat": "-40.165968",
                "lng": "12.338295",
                "codigo_postal": "5381-921",
                "cidade": "East Shyann"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/20",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/2",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/2"
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
curl -X POST "http://localhost/api/cacifos"     -d "numero"="4yn33i3rjNOwGGbr" \
    -d "temperatura"="hz7w8O7qfHLsR7rZ" \
    -d "codigo"="x5zNwLGsNvNWclyB" \
    -d "estado_id"="qkaORkEVYM5ZiuT8" \
    -d "tamanho_id"="lJPOJYQCqyiuiSfV" \
    -d "localizacao_id"="FzZrnamWaM2P4gES" 
```

```javascript
const url = new URL("http://localhost/api/cacifos");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "numero": "4yn33i3rjNOwGGbr",
    "temperatura": "hz7w8O7qfHLsR7rZ",
    "codigo": "x5zNwLGsNvNWclyB",
    "estado_id": "qkaORkEVYM5ZiuT8",
    "tamanho_id": "lJPOJYQCqyiuiSfV",
    "localizacao_id": "FzZrnamWaM2P4gES",
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
        "numero": 147,
        "temperatura": "5.6",
        "codigo": "o0BXnNPA",
        "tamanho_id": 2,
        "estado_id": 2,
        "localizacao_id": 3,
        "tamanho": {
            "id": 2,
            "tamanho": "XL"
        },
        "estado": {
            "id": 2,
            "estado": "Indisponivel"
        },
        "localizacao": {
            "id": 3,
            "nome": "Ariane Vista",
            "lat": "58.435104",
            "lng": "103.061084",
            "codigo_postal": "9103-650",
            "cidade": "East Juanaside"
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
curl -X PUT "http://localhost/api/cacifos/{cacifo}"     -d "numero"="76yDLpRpqdZPjGnI" \
    -d "temperatura"="dvKVgXG0GmG16Lkt" \
    -d "codigo"="ZxFi7Ed0gZ0vFNQT" \
    -d "estado_id"="LjInNcw63szlkXdF" \
    -d "tamanho_id"="3GZzSNjDIGHANzB7" \
    -d "localizacao_id"="S1wu94RGbJPAQSLA" 
```

```javascript
const url = new URL("http://localhost/api/cacifos/{cacifo}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "numero": "76yDLpRpqdZPjGnI",
    "temperatura": "dvKVgXG0GmG16Lkt",
    "codigo": "ZxFi7Ed0gZ0vFNQT",
    "estado_id": "LjInNcw63szlkXdF",
    "tamanho_id": "3GZzSNjDIGHANzB7",
    "localizacao_id": "S1wu94RGbJPAQSLA",
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
            "nome": "Robb Brekke",
            "email": "harley.douglas@gmail.com",
            "telefone": "461.972.0484",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/1"
            }
        },
        {
            "nome": "Skyla Luettgen MD",
            "email": "mose30@gmail.com",
            "telefone": "(935) 756-6571 x1212",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/2"
            }
        },
        {
            "nome": "Mrs. Rosetta Runolfsson",
            "email": "ransom.baumbach@yahoo.com",
            "telefone": "579-356-8573",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/3"
            }
        },
        {
            "nome": "Merl Veum",
            "email": "trenton17@hotmail.com",
            "telefone": "287.455.4002",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/4"
            }
        },
        {
            "nome": "Allan Bahringer PhD",
            "email": "halle39@yahoo.com",
            "telefone": "1-538-463-1247 x03615",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/5"
            }
        },
        {
            "nome": "Francisca Mills",
            "email": "bins.carole@gmail.com",
            "telefone": "365.381.2064",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/6"
            }
        },
        {
            "nome": "Erwin Armstrong DDS",
            "email": "schimmel.kathryne@gmail.com",
            "telefone": "1-437-925-1279 x81322",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/7"
            }
        },
        {
            "nome": "Ms. Savannah Lubowitz MD",
            "email": "pearline67@yahoo.com",
            "telefone": "1-438-988-8461 x842",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/8"
            }
        },
        {
            "nome": "Miss Alverta Stracke Jr.",
            "email": "lincoln16@gmail.com",
            "telefone": "456-638-8428 x34722",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/9"
            }
        },
        {
            "nome": "Dr. Verona Hodkiewicz",
            "email": "delores.bogisich@yahoo.com",
            "telefone": "662-427-9039 x870",
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
curl -X POST "http://localhost/api/clientes"     -d "nome"="BnPE8uOYR9r4GmFr" \
    -d "email"="C0q2cJybwg97HvV2" \
    -d "telefone"="glrpjlK2ofOh0iRH" 
```

```javascript
const url = new URL("http://localhost/api/clientes");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "BnPE8uOYR9r4GmFr",
    "email": "C0q2cJybwg97HvV2",
    "telefone": "glrpjlK2ofOh0iRH",
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
        "nome": "Robb Brekke",
        "email": "harley.douglas@gmail.com",
        "telefone": "461.972.0484"
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
curl -X PUT "http://localhost/api/clientes/{cliente}"     -d "nome"="AXGDFTTtbJ9DK0TT" \
    -d "email"="kMp7SaQdLxv05pHp" \
    -d "telefone"="fQFGgrxwBSir12PL" 
```

```javascript
const url = new URL("http://localhost/api/clientes/{cliente}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "AXGDFTTtbJ9DK0TT",
    "email": "kMp7SaQdLxv05pHp",
    "telefone": "fQFGgrxwBSir12PL",
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
            "id": 1,
            "numero_encomenda": 160,
            "data_de_entrega": "1978-03-05 11:17:32",
            "data_de_levantamento": "2005-06-20 12:07:18",
            "data_de_entrada_no_sistema": "1993-09-13 03:59:07",
            "data_de_entrega_pretendida": "1974-03-08 00:33:59",
            "tempo_limite_de_levantamento": "2002-12-08 04:52:38",
            "estado_encomenda": 0,
            "temperatura": "6.6",
            "observacoes": "Five and Seven said nothing, but looked at it, and talking over its head. 'Very uncomfortable for the immediate adoption of more broken glass.) 'Now tell me, please, which way you go,' said the.",
            "tamanho": "XL",
            "cliente_id": 1,
            "cacifo_id": 3,
            "estafeta": [
                {
                    "id": 8,
                    "nome": "Prof. Sienna Mitchell",
                    "email": "nathaniel.nikolaus@hotmail.com",
                    "telefone": "990.508.1719 x68601",
                    "data_nascimento": "2009-02-10",
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
                "id": 3,
                "numero": 268,
                "temperatura": "9.5",
                "codigo": "ARZVZs860",
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
                    "nome": "Drake Mews",
                    "lat": "-12.235179",
                    "lng": "-166.851449",
                    "codigo_postal": "3303-517",
                    "cidade": "Lake Rex"
                }
            },
            "cliente": {
                "id": 1,
                "nome": "Robb Brekke",
                "email": "harley.douglas@gmail.com",
                "telefone": "461.972.0484"
            },
            "href": {
                "cliente": "http:\/\/localhost\/api\/clientes\/1",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/3"
            }
        },
        {
            "id": 3,
            "numero_encomenda": 197,
            "data_de_entrega": "1972-08-11 18:46:39",
            "data_de_levantamento": "1991-01-10 14:12:24",
            "data_de_entrada_no_sistema": "2016-06-30 09:56:21",
            "data_de_entrega_pretendida": "1974-03-07 13:33:49",
            "tempo_limite_de_levantamento": "1980-04-08 03:08:11",
            "estado_encomenda": 0,
            "temperatura": "0",
            "observacoes": "When the procession came opposite to Alice, and she put one arm out of the Lobster Quadrille, that she was trying to make ONE respectable person!' Soon her eye fell upon a neat little house, on the.",
            "tamanho": "XL",
            "cliente_id": 1,
            "cacifo_id": 18,
            "estafeta": [
                {
                    "id": 8,
                    "nome": "Prof. Sienna Mitchell",
                    "email": "nathaniel.nikolaus@hotmail.com",
                    "telefone": "990.508.1719 x68601",
                    "data_nascimento": "2009-02-10",
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
                "id": 18,
                "numero": 3,
                "temperatura": "7.6",
                "codigo": "3daEQ7",
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
                    "nome": "Ariane Vista",
                    "lat": "58.435104",
                    "lng": "103.061084",
                    "codigo_postal": "9103-650",
                    "cidade": "East Juanaside"
                }
            },
            "cliente": {
                "id": 1,
                "nome": "Robb Brekke",
                "email": "harley.douglas@gmail.com",
                "telefone": "461.972.0484"
            },
            "href": {
                "cliente": "http:\/\/localhost\/api\/clientes\/1",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/18"
            }
        },
        {
            "id": 12,
            "numero_encomenda": 439,
            "data_de_entrega": "1987-03-06 13:35:05",
            "data_de_levantamento": "1998-04-13 04:39:47",
            "data_de_entrada_no_sistema": "1985-03-02 17:31:32",
            "data_de_entrega_pretendida": "1984-03-11 16:57:48",
            "tempo_limite_de_levantamento": "1980-12-20 07:55:12",
            "estado_encomenda": 0,
            "temperatura": "10.1",
            "observacoes": "A bright idea came into her face. 'Very,' said Alice: 'I don't think they play at all comfortable, and it was impossible to say when I got up and picking the daisies, when suddenly a White Rabbit.",
            "tamanho": "M",
            "cliente_id": 1,
            "cacifo_id": 7,
            "estafeta": [
                {
                    "id": 5,
                    "nome": "Josue Prosacco",
                    "email": "devon58@gmail.com",
                    "telefone": "1-718-655-6180 x589",
                    "data_nascimento": "1982-08-06",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 12,
                        "user_id": 5
                    }
                }
            ],
            "cacifo": {
                "id": 7,
                "numero": 265,
                "temperatura": "0.7",
                "codigo": "k2sIxL",
                "tamanho_id": 3,
                "estado_id": 2,
                "localizacao_id": 1,
                "tamanho": {
                    "id": 3,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 1,
                    "nome": "Drake Mews",
                    "lat": "-12.235179",
                    "lng": "-166.851449",
                    "codigo_postal": "3303-517",
                    "cidade": "Lake Rex"
                }
            },
            "cliente": {
                "id": 1,
                "nome": "Robb Brekke",
                "email": "harley.douglas@gmail.com",
                "telefone": "461.972.0484"
            },
            "href": {
                "cliente": "http:\/\/localhost\/api\/clientes\/1",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/7"
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
            "numero_encomenda": 160,
            "data_de_entrega": "1978-03-05 11:17:32",
            "data_de_levantamento": "2005-06-20 12:07:18",
            "data_de_entrada_no_sistema": "1993-09-13 03:59:07",
            "data_de_entrega_pretendida": "1974-03-08 00:33:59",
            "tempo_limite_de_levantamento": "2002-12-08 04:52:38",
            "estado_encomenda": 0,
            "temperatura": "6.6",
            "observacoes": "Five and Seven said nothing, but looked at it, and talking over its head. 'Very uncomfortable for the immediate adoption of more broken glass.) 'Now tell me, please, which way you go,' said the.",
            "tamanho": "XL",
            "cliente_id": 1,
            "estafeta": [
                {
                    "id": 8,
                    "nome": "Prof. Sienna Mitchell",
                    "email": "nathaniel.nikolaus@hotmail.com",
                    "telefone": "990.508.1719 x68601",
                    "data_nascimento": "2009-02-10",
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
                "id": 3,
                "numero": 268,
                "temperatura": "9.5",
                "codigo": "ARZVZs860",
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
                    "nome": "Drake Mews",
                    "lat": "-12.235179",
                    "lng": "-166.851449",
                    "codigo_postal": "3303-517",
                    "cidade": "Lake Rex"
                }
            },
            "cliente": {
                "id": 1,
                "nome": "Robb Brekke",
                "email": "harley.douglas@gmail.com",
                "telefone": "461.972.0484"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/1",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/3",
                "cliente": "http:\/\/localhost\/api\/clientes\/1"
            }
        },
        {
            "id": 2,
            "numero_encomenda": 244,
            "data_de_entrega": "2003-07-26 14:44:38",
            "data_de_levantamento": "2007-03-01 21:49:12",
            "data_de_entrada_no_sistema": "1996-12-24 14:39:16",
            "data_de_entrega_pretendida": "1994-05-08 03:36:12",
            "tempo_limite_de_levantamento": "1989-09-06 15:56:07",
            "estado_encomenda": 0,
            "temperatura": "5.6",
            "observacoes": "MINE.' The Queen turned angrily away from her as hard as it turned round and swam slowly back to the other side of the lefthand bit of stick, and held it out to be executed for having cheated.",
            "tamanho": "XL",
            "cliente_id": 2,
            "estafeta": [
                {
                    "id": 4,
                    "nome": "Kip Abernathy",
                    "email": "schaefer.shanelle@hotmail.com",
                    "telefone": "516.859.7021 x0352",
                    "data_nascimento": "2001-08-17",
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
                "id": 13,
                "numero": 243,
                "temperatura": "10",
                "codigo": "HmAI-luL",
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
                    "nome": "Verona Ridges",
                    "lat": "-40.165968",
                    "lng": "12.338295",
                    "codigo_postal": "5381-921",
                    "cidade": "East Shyann"
                }
            },
            "cliente": {
                "id": 2,
                "nome": "Skyla Luettgen MD",
                "email": "mose30@gmail.com",
                "telefone": "(935) 756-6571 x1212"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/2",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/13",
                "cliente": "http:\/\/localhost\/api\/clientes\/2"
            }
        },
        {
            "id": 3,
            "numero_encomenda": 197,
            "data_de_entrega": "1972-08-11 18:46:39",
            "data_de_levantamento": "1991-01-10 14:12:24",
            "data_de_entrada_no_sistema": "2016-06-30 09:56:21",
            "data_de_entrega_pretendida": "1974-03-07 13:33:49",
            "tempo_limite_de_levantamento": "1980-04-08 03:08:11",
            "estado_encomenda": 0,
            "temperatura": "0",
            "observacoes": "When the procession came opposite to Alice, and she put one arm out of the Lobster Quadrille, that she was trying to make ONE respectable person!' Soon her eye fell upon a neat little house, on the.",
            "tamanho": "XL",
            "cliente_id": 1,
            "estafeta": [
                {
                    "id": 8,
                    "nome": "Prof. Sienna Mitchell",
                    "email": "nathaniel.nikolaus@hotmail.com",
                    "telefone": "990.508.1719 x68601",
                    "data_nascimento": "2009-02-10",
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
                "id": 18,
                "numero": 3,
                "temperatura": "7.6",
                "codigo": "3daEQ7",
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
                    "nome": "Ariane Vista",
                    "lat": "58.435104",
                    "lng": "103.061084",
                    "codigo_postal": "9103-650",
                    "cidade": "East Juanaside"
                }
            },
            "cliente": {
                "id": 1,
                "nome": "Robb Brekke",
                "email": "harley.douglas@gmail.com",
                "telefone": "461.972.0484"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/3",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/18",
                "cliente": "http:\/\/localhost\/api\/clientes\/1"
            }
        },
        {
            "id": 4,
            "numero_encomenda": 131,
            "data_de_entrega": "2013-09-22 06:27:38",
            "data_de_levantamento": "1990-12-20 11:39:10",
            "data_de_entrada_no_sistema": "1996-07-02 01:44:04",
            "data_de_entrega_pretendida": "2006-10-08 19:23:43",
            "tempo_limite_de_levantamento": "1984-01-10 15:19:35",
            "estado_encomenda": 0,
            "temperatura": "4.8",
            "observacoes": "However, I've got to the Mock Turtle: 'crumbs would all come wrong, and she hastily dried her eyes to see it quite plainly through the wood. 'It's the stupidest tea-party I ever heard!' 'Yes, I.",
            "tamanho": "M",
            "cliente_id": 7,
            "estafeta": [
                {
                    "id": 8,
                    "nome": "Prof. Sienna Mitchell",
                    "email": "nathaniel.nikolaus@hotmail.com",
                    "telefone": "990.508.1719 x68601",
                    "data_nascimento": "2009-02-10",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 4,
                        "user_id": 8
                    }
                }
            ],
            "cacifo": {
                "id": 1,
                "numero": 147,
                "temperatura": "5.6",
                "codigo": "o0BXnNPA",
                "tamanho_id": 2,
                "estado_id": 2,
                "localizacao_id": 3,
                "tamanho": {
                    "id": 2,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 3,
                    "nome": "Ariane Vista",
                    "lat": "58.435104",
                    "lng": "103.061084",
                    "codigo_postal": "9103-650",
                    "cidade": "East Juanaside"
                }
            },
            "cliente": {
                "id": 7,
                "nome": "Erwin Armstrong DDS",
                "email": "schimmel.kathryne@gmail.com",
                "telefone": "1-437-925-1279 x81322"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/4",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/1",
                "cliente": "http:\/\/localhost\/api\/clientes\/7"
            }
        },
        {
            "id": 5,
            "numero_encomenda": 615,
            "data_de_entrega": "1984-12-19 10:47:40",
            "data_de_levantamento": "1971-01-26 18:23:34",
            "data_de_entrada_no_sistema": "2003-04-21 14:06:54",
            "data_de_entrega_pretendida": "1984-03-10 11:03:45",
            "tempo_limite_de_levantamento": "1988-11-22 05:05:48",
            "estado_encomenda": 0,
            "temperatura": "1.8",
            "observacoes": "HER about it.' (The jury all wrote down on the floor, as it can't possibly make me smaller, I suppose.' So she tucked it away under her arm, with its tongue hanging out of its mouth and yawned once.",
            "tamanho": "S",
            "cliente_id": 3,
            "estafeta": [
                {
                    "id": 3,
                    "nome": "Esta Bruen III",
                    "email": "dena26@hotmail.com",
                    "telefone": "+1-509-688-4484",
                    "data_nascimento": "2008-04-12",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 5,
                        "user_id": 3
                    }
                }
            ],
            "cacifo": {
                "id": 17,
                "numero": 308,
                "temperatura": "4.9",
                "codigo": "wf2HOCMaJ",
                "tamanho_id": 2,
                "estado_id": 2,
                "localizacao_id": 5,
                "tamanho": {
                    "id": 2,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 5,
                    "nome": "Kunze Dale",
                    "lat": "-62.949086",
                    "lng": "140.9678",
                    "codigo_postal": "4148-910",
                    "cidade": "Framibury"
                }
            },
            "cliente": {
                "id": 3,
                "nome": "Mrs. Rosetta Runolfsson",
                "email": "ransom.baumbach@yahoo.com",
                "telefone": "579-356-8573"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/5",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/17",
                "cliente": "http:\/\/localhost\/api\/clientes\/3"
            }
        },
        {
            "id": 6,
            "numero_encomenda": 64,
            "data_de_entrega": "2012-02-06 09:11:54",
            "data_de_levantamento": "1993-01-25 11:19:07",
            "data_de_entrada_no_sistema": "2017-01-25 22:39:40",
            "data_de_entrega_pretendida": "2013-12-08 17:24:47",
            "tempo_limite_de_levantamento": "2012-10-02 21:45:28",
            "estado_encomenda": 0,
            "temperatura": "10.5",
            "observacoes": "YOU like cats if you wouldn't have come here.' Alice didn't think that very few things indeed were really impossible. There seemed to be sure; but I hadn't to bring tears into her face. 'Very,' said.",
            "tamanho": "M",
            "cliente_id": 6,
            "estafeta": [
                {
                    "id": 5,
                    "nome": "Josue Prosacco",
                    "email": "devon58@gmail.com",
                    "telefone": "1-718-655-6180 x589",
                    "data_nascimento": "1982-08-06",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 6,
                        "user_id": 5
                    }
                }
            ],
            "cacifo": {
                "id": 17,
                "numero": 308,
                "temperatura": "4.9",
                "codigo": "wf2HOCMaJ",
                "tamanho_id": 2,
                "estado_id": 2,
                "localizacao_id": 5,
                "tamanho": {
                    "id": 2,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 5,
                    "nome": "Kunze Dale",
                    "lat": "-62.949086",
                    "lng": "140.9678",
                    "codigo_postal": "4148-910",
                    "cidade": "Framibury"
                }
            },
            "cliente": {
                "id": 6,
                "nome": "Francisca Mills",
                "email": "bins.carole@gmail.com",
                "telefone": "365.381.2064"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/6",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/17",
                "cliente": "http:\/\/localhost\/api\/clientes\/6"
            }
        },
        {
            "id": 7,
            "numero_encomenda": 42,
            "data_de_entrega": "1971-03-21 00:54:58",
            "data_de_levantamento": "1999-11-30 23:03:06",
            "data_de_entrada_no_sistema": "2008-04-08 00:31:41",
            "data_de_entrega_pretendida": "2007-02-08 13:18:50",
            "tempo_limite_de_levantamento": "1995-04-11 06:05:14",
            "estado_encomenda": 1,
            "temperatura": "9.8",
            "observacoes": "Dormouse go on with the birds and beasts, as well to say anything. 'Why,' said the Mock Turtle angrily: 'really you are painting those roses?' Five and Seven said nothing, but looked at each other.",
            "tamanho": "S",
            "cliente_id": 7,
            "estafeta": [
                {
                    "id": 7,
                    "nome": "Matilde Schroeder",
                    "email": "mckenzie.jorge@yahoo.com",
                    "telefone": "1-359-748-0326 x13542",
                    "data_nascimento": "1970-06-27",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 7,
                        "user_id": 7
                    }
                }
            ],
            "cacifo": {
                "id": 15,
                "numero": 474,
                "temperatura": "8.7",
                "codigo": "uQEHEYQj",
                "tamanho_id": 3,
                "estado_id": 1,
                "localizacao_id": 2,
                "tamanho": {
                    "id": 3,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 2,
                    "nome": "Verona Ridges",
                    "lat": "-40.165968",
                    "lng": "12.338295",
                    "codigo_postal": "5381-921",
                    "cidade": "East Shyann"
                }
            },
            "cliente": {
                "id": 7,
                "nome": "Erwin Armstrong DDS",
                "email": "schimmel.kathryne@gmail.com",
                "telefone": "1-437-925-1279 x81322"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/7",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/15",
                "cliente": "http:\/\/localhost\/api\/clientes\/7"
            }
        },
        {
            "id": 8,
            "numero_encomenda": 585,
            "data_de_entrega": "2012-01-10 05:23:46",
            "data_de_levantamento": "1979-07-28 23:21:13",
            "data_de_entrada_no_sistema": "2013-05-06 18:46:28",
            "data_de_entrega_pretendida": "1997-04-12 23:07:48",
            "tempo_limite_de_levantamento": "2015-02-20 17:06:42",
            "estado_encomenda": 1,
            "temperatura": "0.5",
            "observacoes": "Alice panted as she spoke. Alice did not venture to go on. 'And so these three weeks!' 'I'm very sorry you've been annoyed,' said Alice, 'and those twelve creatures,' (she was obliged to write this.",
            "tamanho": "M",
            "cliente_id": 9,
            "estafeta": [
                {
                    "id": 8,
                    "nome": "Prof. Sienna Mitchell",
                    "email": "nathaniel.nikolaus@hotmail.com",
                    "telefone": "990.508.1719 x68601",
                    "data_nascimento": "2009-02-10",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 8,
                        "user_id": 8
                    }
                }
            ],
            "cacifo": {
                "id": 19,
                "numero": 480,
                "temperatura": "8.2",
                "codigo": "NDVT3KPb",
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
                    "nome": "Kunze Dale",
                    "lat": "-62.949086",
                    "lng": "140.9678",
                    "codigo_postal": "4148-910",
                    "cidade": "Framibury"
                }
            },
            "cliente": {
                "id": 9,
                "nome": "Miss Alverta Stracke Jr.",
                "email": "lincoln16@gmail.com",
                "telefone": "456-638-8428 x34722"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/8",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/19",
                "cliente": "http:\/\/localhost\/api\/clientes\/9"
            }
        },
        {
            "id": 9,
            "numero_encomenda": 774,
            "data_de_entrega": "2012-02-06 01:06:33",
            "data_de_levantamento": "2000-03-08 01:18:54",
            "data_de_entrada_no_sistema": "1986-09-08 01:28:00",
            "data_de_entrega_pretendida": "1986-06-14 17:52:08",
            "tempo_limite_de_levantamento": "2001-08-25 10:29:46",
            "estado_encomenda": 0,
            "temperatura": "4.2",
            "observacoes": "I'll be jury,\" Said cunning old Fury: \"I'll try the effect: the next witness!' said the Mock Turtle. 'No, no! The adventures first,' said the Mock Turtle a little while, however, she again heard a.",
            "tamanho": "XL",
            "cliente_id": 9,
            "estafeta": [
                {
                    "id": 7,
                    "nome": "Matilde Schroeder",
                    "email": "mckenzie.jorge@yahoo.com",
                    "telefone": "1-359-748-0326 x13542",
                    "data_nascimento": "1970-06-27",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 9,
                        "user_id": 7
                    }
                }
            ],
            "cacifo": {
                "id": 10,
                "numero": 252,
                "temperatura": "10.5",
                "codigo": "wXyIM9",
                "tamanho_id": 3,
                "estado_id": 2,
                "localizacao_id": 3,
                "tamanho": {
                    "id": 3,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 3,
                    "nome": "Ariane Vista",
                    "lat": "58.435104",
                    "lng": "103.061084",
                    "codigo_postal": "9103-650",
                    "cidade": "East Juanaside"
                }
            },
            "cliente": {
                "id": 9,
                "nome": "Miss Alverta Stracke Jr.",
                "email": "lincoln16@gmail.com",
                "telefone": "456-638-8428 x34722"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/9",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/10",
                "cliente": "http:\/\/localhost\/api\/clientes\/9"
            }
        },
        {
            "id": 10,
            "numero_encomenda": 275,
            "data_de_entrega": "2001-04-06 08:50:14",
            "data_de_levantamento": "1977-07-11 03:23:47",
            "data_de_entrada_no_sistema": "2014-11-27 22:38:49",
            "data_de_entrega_pretendida": "1983-04-08 05:06:47",
            "tempo_limite_de_levantamento": "1983-06-29 08:41:32",
            "estado_encomenda": 0,
            "temperatura": "7.1",
            "observacoes": "The Dormouse had closed its eyes by this time, as it went, as if he were trying which word sounded best. Some of the water, and seemed to rise like a telescope! I think I may as well as I was a.",
            "tamanho": "S",
            "cliente_id": 8,
            "estafeta": [
                {
                    "id": 2,
                    "nome": "Marielle O'Conner",
                    "email": "mia.hane@yahoo.com",
                    "telefone": "419.995.0608 x95744",
                    "data_nascimento": "1993-01-26",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 10,
                        "user_id": 2
                    }
                }
            ],
            "cacifo": {
                "id": 19,
                "numero": 480,
                "temperatura": "8.2",
                "codigo": "NDVT3KPb",
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
                    "nome": "Kunze Dale",
                    "lat": "-62.949086",
                    "lng": "140.9678",
                    "codigo_postal": "4148-910",
                    "cidade": "Framibury"
                }
            },
            "cliente": {
                "id": 8,
                "nome": "Ms. Savannah Lubowitz MD",
                "email": "pearline67@yahoo.com",
                "telefone": "1-438-988-8461 x842"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/10",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/19",
                "cliente": "http:\/\/localhost\/api\/clientes\/8"
            }
        },
        {
            "id": 11,
            "numero_encomenda": 145,
            "data_de_entrega": "1970-04-05 00:44:09",
            "data_de_levantamento": "1994-07-18 05:10:11",
            "data_de_entrada_no_sistema": "1998-07-23 15:31:58",
            "data_de_entrega_pretendida": "1983-10-29 00:59:27",
            "tempo_limite_de_levantamento": "1981-08-11 01:24:19",
            "estado_encomenda": 0,
            "temperatura": "9.7",
            "observacoes": "And she began shrinking directly. As soon as it could go, and broke to pieces against one of the garden, and I shall be a footman in livery came running out of court! Suppress him! Pinch him! Off.",
            "tamanho": "S",
            "cliente_id": 6,
            "estafeta": [
                {
                    "id": 8,
                    "nome": "Prof. Sienna Mitchell",
                    "email": "nathaniel.nikolaus@hotmail.com",
                    "telefone": "990.508.1719 x68601",
                    "data_nascimento": "2009-02-10",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 11,
                        "user_id": 8
                    }
                }
            ],
            "cacifo": {
                "id": 12,
                "numero": 321,
                "temperatura": "4.8",
                "codigo": "Fl3AHai",
                "tamanho_id": 2,
                "estado_id": 1,
                "localizacao_id": 1,
                "tamanho": {
                    "id": 2,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 1,
                    "nome": "Drake Mews",
                    "lat": "-12.235179",
                    "lng": "-166.851449",
                    "codigo_postal": "3303-517",
                    "cidade": "Lake Rex"
                }
            },
            "cliente": {
                "id": 6,
                "nome": "Francisca Mills",
                "email": "bins.carole@gmail.com",
                "telefone": "365.381.2064"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/11",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/12",
                "cliente": "http:\/\/localhost\/api\/clientes\/6"
            }
        },
        {
            "id": 12,
            "numero_encomenda": 439,
            "data_de_entrega": "1987-03-06 13:35:05",
            "data_de_levantamento": "1998-04-13 04:39:47",
            "data_de_entrada_no_sistema": "1985-03-02 17:31:32",
            "data_de_entrega_pretendida": "1984-03-11 16:57:48",
            "tempo_limite_de_levantamento": "1980-12-20 07:55:12",
            "estado_encomenda": 0,
            "temperatura": "10.1",
            "observacoes": "A bright idea came into her face. 'Very,' said Alice: 'I don't think they play at all comfortable, and it was impossible to say when I got up and picking the daisies, when suddenly a White Rabbit.",
            "tamanho": "M",
            "cliente_id": 1,
            "estafeta": [
                {
                    "id": 5,
                    "nome": "Josue Prosacco",
                    "email": "devon58@gmail.com",
                    "telefone": "1-718-655-6180 x589",
                    "data_nascimento": "1982-08-06",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 12,
                        "user_id": 5
                    }
                }
            ],
            "cacifo": {
                "id": 7,
                "numero": 265,
                "temperatura": "0.7",
                "codigo": "k2sIxL",
                "tamanho_id": 3,
                "estado_id": 2,
                "localizacao_id": 1,
                "tamanho": {
                    "id": 3,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 1,
                    "nome": "Drake Mews",
                    "lat": "-12.235179",
                    "lng": "-166.851449",
                    "codigo_postal": "3303-517",
                    "cidade": "Lake Rex"
                }
            },
            "cliente": {
                "id": 1,
                "nome": "Robb Brekke",
                "email": "harley.douglas@gmail.com",
                "telefone": "461.972.0484"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/12",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/7",
                "cliente": "http:\/\/localhost\/api\/clientes\/1"
            }
        },
        {
            "id": 13,
            "numero_encomenda": 885,
            "data_de_entrega": "1972-01-22 09:31:27",
            "data_de_levantamento": "1995-01-18 07:22:44",
            "data_de_entrada_no_sistema": "1995-03-10 17:58:16",
            "data_de_entrega_pretendida": "2016-07-02 15:47:00",
            "tempo_limite_de_levantamento": "2019-01-01 17:01:14",
            "estado_encomenda": 0,
            "temperatura": "7.3",
            "observacoes": "Alice doubtfully: 'it means--to--make--anything--prettier.' 'Well, then,' the Gryphon said, in a sorrowful tone, 'I'm afraid I don't put my arm round your waist,' the Duchess said after a pause.",
            "tamanho": "M",
            "cliente_id": 10,
            "estafeta": [
                {
                    "id": 8,
                    "nome": "Prof. Sienna Mitchell",
                    "email": "nathaniel.nikolaus@hotmail.com",
                    "telefone": "990.508.1719 x68601",
                    "data_nascimento": "2009-02-10",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 13,
                        "user_id": 8
                    }
                }
            ],
            "cacifo": {
                "id": 14,
                "numero": 32,
                "temperatura": "8.5",
                "codigo": "IYPOJM5JHE",
                "tamanho_id": 4,
                "estado_id": 1,
                "localizacao_id": 2,
                "tamanho": {
                    "id": 4,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 2,
                    "nome": "Verona Ridges",
                    "lat": "-40.165968",
                    "lng": "12.338295",
                    "codigo_postal": "5381-921",
                    "cidade": "East Shyann"
                }
            },
            "cliente": {
                "id": 10,
                "nome": "Dr. Verona Hodkiewicz",
                "email": "delores.bogisich@yahoo.com",
                "telefone": "662-427-9039 x870"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/13",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/14",
                "cliente": "http:\/\/localhost\/api\/clientes\/10"
            }
        },
        {
            "id": 14,
            "numero_encomenda": 256,
            "data_de_entrega": "2017-05-12 20:44:11",
            "data_de_levantamento": "2012-06-03 10:19:33",
            "data_de_entrada_no_sistema": "1991-02-21 21:42:19",
            "data_de_entrega_pretendida": "1987-03-15 04:56:58",
            "tempo_limite_de_levantamento": "1986-02-21 22:37:58",
            "estado_encomenda": 1,
            "temperatura": "3.2",
            "observacoes": "Mock Turtle sang this, very slowly and sadly:-- '\"Will you walk a little recovered from the Queen jumped up and straightening itself out again, so that her flamingo was gone across to the door.",
            "tamanho": "M",
            "cliente_id": 4,
            "estafeta": [
                {
                    "id": 3,
                    "nome": "Esta Bruen III",
                    "email": "dena26@hotmail.com",
                    "telefone": "+1-509-688-4484",
                    "data_nascimento": "2008-04-12",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 14,
                        "user_id": 3
                    }
                }
            ],
            "cacifo": {
                "id": 17,
                "numero": 308,
                "temperatura": "4.9",
                "codigo": "wf2HOCMaJ",
                "tamanho_id": 2,
                "estado_id": 2,
                "localizacao_id": 5,
                "tamanho": {
                    "id": 2,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 5,
                    "nome": "Kunze Dale",
                    "lat": "-62.949086",
                    "lng": "140.9678",
                    "codigo_postal": "4148-910",
                    "cidade": "Framibury"
                }
            },
            "cliente": {
                "id": 4,
                "nome": "Merl Veum",
                "email": "trenton17@hotmail.com",
                "telefone": "287.455.4002"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/14",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/17",
                "cliente": "http:\/\/localhost\/api\/clientes\/4"
            }
        },
        {
            "id": 15,
            "numero_encomenda": 443,
            "data_de_entrega": "1996-06-13 18:24:49",
            "data_de_levantamento": "2005-10-05 06:24:54",
            "data_de_entrada_no_sistema": "1986-09-18 11:22:25",
            "data_de_entrega_pretendida": "2014-04-21 15:14:28",
            "tempo_limite_de_levantamento": "1974-10-03 20:46:19",
            "estado_encomenda": 1,
            "temperatura": "0.9",
            "observacoes": "The poor little thing howled so, that Alice quite jumped; but she did it at all. 'But perhaps he can't help that,' said Alice. 'Of course not,' Alice cautiously replied: 'but I must be the right.",
            "tamanho": "XL",
            "cliente_id": 5,
            "estafeta": [
                {
                    "id": 3,
                    "nome": "Esta Bruen III",
                    "email": "dena26@hotmail.com",
                    "telefone": "+1-509-688-4484",
                    "data_nascimento": "2008-04-12",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 15,
                        "user_id": 3
                    }
                }
            ],
            "cacifo": {
                "id": 19,
                "numero": 480,
                "temperatura": "8.2",
                "codigo": "NDVT3KPb",
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
                    "nome": "Kunze Dale",
                    "lat": "-62.949086",
                    "lng": "140.9678",
                    "codigo_postal": "4148-910",
                    "cidade": "Framibury"
                }
            },
            "cliente": {
                "id": 5,
                "nome": "Allan Bahringer PhD",
                "email": "halle39@yahoo.com",
                "telefone": "1-538-463-1247 x03615"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/15",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/19",
                "cliente": "http:\/\/localhost\/api\/clientes\/5"
            }
        },
        {
            "id": 16,
            "numero_encomenda": 418,
            "data_de_entrega": "2005-05-06 10:42:45",
            "data_de_levantamento": "1999-05-12 02:21:22",
            "data_de_entrada_no_sistema": "1973-04-25 13:40:06",
            "data_de_entrega_pretendida": "1989-04-13 12:01:02",
            "tempo_limite_de_levantamento": "1974-11-17 22:52:35",
            "estado_encomenda": 1,
            "temperatura": "2",
            "observacoes": "As soon as there was no 'One, two, three, and away,' but they all crowded round it, panting, and asking, 'But who has won?' This question the Dodo could not make out at all a proper way of escape.",
            "tamanho": "XL",
            "cliente_id": 3,
            "estafeta": [
                {
                    "id": 5,
                    "nome": "Josue Prosacco",
                    "email": "devon58@gmail.com",
                    "telefone": "1-718-655-6180 x589",
                    "data_nascimento": "1982-08-06",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 16,
                        "user_id": 5
                    }
                }
            ],
            "cacifo": {
                "id": 10,
                "numero": 252,
                "temperatura": "10.5",
                "codigo": "wXyIM9",
                "tamanho_id": 3,
                "estado_id": 2,
                "localizacao_id": 3,
                "tamanho": {
                    "id": 3,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 2,
                    "estado": "Indisponivel"
                },
                "localizacao": {
                    "id": 3,
                    "nome": "Ariane Vista",
                    "lat": "58.435104",
                    "lng": "103.061084",
                    "codigo_postal": "9103-650",
                    "cidade": "East Juanaside"
                }
            },
            "cliente": {
                "id": 3,
                "nome": "Mrs. Rosetta Runolfsson",
                "email": "ransom.baumbach@yahoo.com",
                "telefone": "579-356-8573"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/16",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/10",
                "cliente": "http:\/\/localhost\/api\/clientes\/3"
            }
        },
        {
            "id": 17,
            "numero_encomenda": 231,
            "data_de_entrega": "1992-04-17 15:49:54",
            "data_de_levantamento": "1992-08-30 02:55:29",
            "data_de_entrada_no_sistema": "2017-09-01 05:50:11",
            "data_de_entrega_pretendida": "1991-09-25 00:00:47",
            "tempo_limite_de_levantamento": "1975-03-08 00:56:43",
            "estado_encomenda": 0,
            "temperatura": "4.7",
            "observacoes": "Alice was silent. The Dormouse slowly opened his eyes very wide on hearing this; but all he SAID was, 'Why is a raven like a candle. I wonder what Latitude was, or Longitude I've got to see it pop.",
            "tamanho": "M",
            "cliente_id": 8,
            "estafeta": [
                {
                    "id": 1,
                    "nome": "Joshuah Haley DDS",
                    "email": "bayer.june@gmail.com",
                    "telefone": "+1-805-762-8003",
                    "data_nascimento": "1994-01-14",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 17,
                        "user_id": 1
                    }
                }
            ],
            "cacifo": {
                "id": 13,
                "numero": 243,
                "temperatura": "10",
                "codigo": "HmAI-luL",
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
                    "nome": "Verona Ridges",
                    "lat": "-40.165968",
                    "lng": "12.338295",
                    "codigo_postal": "5381-921",
                    "cidade": "East Shyann"
                }
            },
            "cliente": {
                "id": 8,
                "nome": "Ms. Savannah Lubowitz MD",
                "email": "pearline67@yahoo.com",
                "telefone": "1-438-988-8461 x842"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/17",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/13",
                "cliente": "http:\/\/localhost\/api\/clientes\/8"
            }
        },
        {
            "id": 18,
            "numero_encomenda": 706,
            "data_de_entrega": "2001-12-25 08:34:50",
            "data_de_levantamento": "1983-01-22 06:51:26",
            "data_de_entrada_no_sistema": "2007-03-24 07:36:23",
            "data_de_entrega_pretendida": "1995-10-29 17:36:15",
            "tempo_limite_de_levantamento": "1976-07-18 03:17:15",
            "estado_encomenda": 0,
            "temperatura": "8.2",
            "observacoes": "I'll set Dinah at you!' There was a long way back, and barking hoarsely all the jurymen are back in their mouths--and they're all over with diamonds, and walked off; the Dormouse indignantly.",
            "tamanho": "M",
            "cliente_id": 7,
            "estafeta": [
                {
                    "id": 8,
                    "nome": "Prof. Sienna Mitchell",
                    "email": "nathaniel.nikolaus@hotmail.com",
                    "telefone": "990.508.1719 x68601",
                    "data_nascimento": "2009-02-10",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 18,
                        "user_id": 8
                    }
                }
            ],
            "cacifo": {
                "id": 14,
                "numero": 32,
                "temperatura": "8.5",
                "codigo": "IYPOJM5JHE",
                "tamanho_id": 4,
                "estado_id": 1,
                "localizacao_id": 2,
                "tamanho": {
                    "id": 4,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 2,
                    "nome": "Verona Ridges",
                    "lat": "-40.165968",
                    "lng": "12.338295",
                    "codigo_postal": "5381-921",
                    "cidade": "East Shyann"
                }
            },
            "cliente": {
                "id": 7,
                "nome": "Erwin Armstrong DDS",
                "email": "schimmel.kathryne@gmail.com",
                "telefone": "1-437-925-1279 x81322"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/18",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/14",
                "cliente": "http:\/\/localhost\/api\/clientes\/7"
            }
        },
        {
            "id": 19,
            "numero_encomenda": 678,
            "data_de_entrega": "1982-09-18 05:25:42",
            "data_de_levantamento": "1991-04-01 00:17:33",
            "data_de_entrada_no_sistema": "1996-01-17 08:54:23",
            "data_de_entrega_pretendida": "1974-03-11 05:25:25",
            "tempo_limite_de_levantamento": "1993-12-08 21:28:52",
            "estado_encomenda": 0,
            "temperatura": "11.6",
            "observacoes": "She was close behind it was very fond of pretending to be otherwise.\"' 'I think you might catch a bat, and that's all you know what to do it.' (And, as you liked.' 'Is that all?' said the King; and.",
            "tamanho": "M",
            "cliente_id": 4,
            "estafeta": [
                {
                    "id": 1,
                    "nome": "Joshuah Haley DDS",
                    "email": "bayer.june@gmail.com",
                    "telefone": "+1-805-762-8003",
                    "data_nascimento": "1994-01-14",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 19,
                        "user_id": 1
                    }
                }
            ],
            "cacifo": {
                "id": 20,
                "numero": 61,
                "temperatura": "6.9",
                "codigo": "12ekIq4",
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
                    "nome": "Verona Ridges",
                    "lat": "-40.165968",
                    "lng": "12.338295",
                    "codigo_postal": "5381-921",
                    "cidade": "East Shyann"
                }
            },
            "cliente": {
                "id": 4,
                "nome": "Merl Veum",
                "email": "trenton17@hotmail.com",
                "telefone": "287.455.4002"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/19",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/20",
                "cliente": "http:\/\/localhost\/api\/clientes\/4"
            }
        },
        {
            "id": 20,
            "numero_encomenda": 576,
            "data_de_entrega": "2015-10-25 07:20:17",
            "data_de_levantamento": "1999-04-21 00:04:28",
            "data_de_entrada_no_sistema": "1986-09-20 03:41:29",
            "data_de_entrega_pretendida": "2004-11-19 23:04:05",
            "tempo_limite_de_levantamento": "1974-02-23 02:37:14",
            "estado_encomenda": 1,
            "temperatura": "1.9",
            "observacoes": "Why, there's hardly enough of it had finished this short speech, they all moved off, and Alice joined the procession, wondering very much confused, 'I don't even know what a dear little puppy it.",
            "tamanho": "L",
            "cliente_id": 3,
            "estafeta": [
                {
                    "id": 4,
                    "nome": "Kip Abernathy",
                    "email": "schaefer.shanelle@hotmail.com",
                    "telefone": "516.859.7021 x0352",
                    "data_nascimento": "2001-08-17",
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
                "id": 2,
                "numero": 417,
                "temperatura": "6.2",
                "codigo": "pyMYKop",
                "tamanho_id": 1,
                "estado_id": 1,
                "localizacao_id": 5,
                "tamanho": {
                    "id": 1,
                    "tamanho": "S"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 5,
                    "nome": "Kunze Dale",
                    "lat": "-62.949086",
                    "lng": "140.9678",
                    "codigo_postal": "4148-910",
                    "cidade": "Framibury"
                }
            },
            "cliente": {
                "id": 3,
                "nome": "Mrs. Rosetta Runolfsson",
                "email": "ransom.baumbach@yahoo.com",
                "telefone": "579-356-8573"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/20",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/2",
                "cliente": "http:\/\/localhost\/api\/clientes\/3"
            }
        },
        {
            "id": 21,
            "numero_encomenda": 878,
            "data_de_entrega": "2012-07-21 19:55:46",
            "data_de_levantamento": "1999-03-19 09:17:41",
            "data_de_entrada_no_sistema": "1979-01-21 10:54:01",
            "data_de_entrega_pretendida": "1971-03-30 12:57:12",
            "tempo_limite_de_levantamento": "1975-05-24 22:32:02",
            "estado_encomenda": 0,
            "temperatura": "3.6",
            "observacoes": "I mentioned before, And have grown most uncommonly fat; Yet you finished the first day,' said the Mock Turtle. 'She can't explain it,' said Alice as he found it very much,' said Alice; 'it's laid.",
            "tamanho": "S",
            "cliente_id": 7,
            "estafeta": [
                {
                    "id": 7,
                    "nome": "Matilde Schroeder",
                    "email": "mckenzie.jorge@yahoo.com",
                    "telefone": "1-359-748-0326 x13542",
                    "data_nascimento": "1970-06-27",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 21,
                        "user_id": 7
                    }
                }
            ],
            "cacifo": {
                "id": 6,
                "numero": 41,
                "temperatura": "7.6",
                "codigo": "DhPtc",
                "tamanho_id": 1,
                "estado_id": 1,
                "localizacao_id": 5,
                "tamanho": {
                    "id": 1,
                    "tamanho": "S"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 5,
                    "nome": "Kunze Dale",
                    "lat": "-62.949086",
                    "lng": "140.9678",
                    "codigo_postal": "4148-910",
                    "cidade": "Framibury"
                }
            },
            "cliente": {
                "id": 7,
                "nome": "Erwin Armstrong DDS",
                "email": "schimmel.kathryne@gmail.com",
                "telefone": "1-437-925-1279 x81322"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/21",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/6",
                "cliente": "http:\/\/localhost\/api\/clientes\/7"
            }
        },
        {
            "id": 22,
            "numero_encomenda": 810,
            "data_de_entrega": "1992-12-10 08:14:03",
            "data_de_levantamento": "1988-03-27 05:34:02",
            "data_de_entrada_no_sistema": "1970-06-02 23:47:10",
            "data_de_entrega_pretendida": "2009-12-21 06:06:50",
            "tempo_limite_de_levantamento": "2004-08-23 11:45:23",
            "estado_encomenda": 1,
            "temperatura": "11.4",
            "observacoes": "She is such a fall as this, I shall think nothing of the ground, Alice soon came upon a little timidly: 'but it's no use in crying like that!' 'I couldn't afford to learn it.' said the Hatter, 'when.",
            "tamanho": "S",
            "cliente_id": 8,
            "estafeta": [
                {
                    "id": 5,
                    "nome": "Josue Prosacco",
                    "email": "devon58@gmail.com",
                    "telefone": "1-718-655-6180 x589",
                    "data_nascimento": "1982-08-06",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 22,
                        "user_id": 5
                    }
                }
            ],
            "cacifo": {
                "id": 6,
                "numero": 41,
                "temperatura": "7.6",
                "codigo": "DhPtc",
                "tamanho_id": 1,
                "estado_id": 1,
                "localizacao_id": 5,
                "tamanho": {
                    "id": 1,
                    "tamanho": "S"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 5,
                    "nome": "Kunze Dale",
                    "lat": "-62.949086",
                    "lng": "140.9678",
                    "codigo_postal": "4148-910",
                    "cidade": "Framibury"
                }
            },
            "cliente": {
                "id": 8,
                "nome": "Ms. Savannah Lubowitz MD",
                "email": "pearline67@yahoo.com",
                "telefone": "1-438-988-8461 x842"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/22",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/6",
                "cliente": "http:\/\/localhost\/api\/clientes\/8"
            }
        },
        {
            "id": 23,
            "numero_encomenda": 695,
            "data_de_entrega": "2013-06-27 00:08:45",
            "data_de_levantamento": "1975-06-01 10:15:38",
            "data_de_entrada_no_sistema": "1988-01-09 00:44:27",
            "data_de_entrega_pretendida": "1973-12-28 21:26:43",
            "tempo_limite_de_levantamento": "2009-09-22 00:47:22",
            "estado_encomenda": 1,
            "temperatura": "5",
            "observacoes": "Oh, I shouldn't want YOURS: I don't believe you do either!' And the moral of that is--\"Birds of a good deal on where you want to go! Let me think: was I the same thing,' said the Pigeon; 'but if.",
            "tamanho": "M",
            "cliente_id": 2,
            "estafeta": [
                {
                    "id": 3,
                    "nome": "Esta Bruen III",
                    "email": "dena26@hotmail.com",
                    "telefone": "+1-509-688-4484",
                    "data_nascimento": "2008-04-12",
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
                "id": 13,
                "numero": 243,
                "temperatura": "10",
                "codigo": "HmAI-luL",
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
                    "nome": "Verona Ridges",
                    "lat": "-40.165968",
                    "lng": "12.338295",
                    "codigo_postal": "5381-921",
                    "cidade": "East Shyann"
                }
            },
            "cliente": {
                "id": 2,
                "nome": "Skyla Luettgen MD",
                "email": "mose30@gmail.com",
                "telefone": "(935) 756-6571 x1212"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/23",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/13",
                "cliente": "http:\/\/localhost\/api\/clientes\/2"
            }
        },
        {
            "id": 24,
            "numero_encomenda": 981,
            "data_de_entrega": "1975-01-31 12:33:48",
            "data_de_levantamento": "1986-04-03 16:45:27",
            "data_de_entrada_no_sistema": "1973-01-24 07:52:24",
            "data_de_entrega_pretendida": "2010-09-30 00:09:58",
            "tempo_limite_de_levantamento": "1986-08-22 03:29:36",
            "estado_encomenda": 0,
            "temperatura": "3.5",
            "observacoes": "King. On this the White Rabbit blew three blasts on the hearth and grinning from ear to ear. 'Please would you like to see a little wider. 'Come, it's pleased so far,' thought Alice, as she swam.",
            "tamanho": "XL",
            "cliente_id": 7,
            "estafeta": [
                {
                    "id": 8,
                    "nome": "Prof. Sienna Mitchell",
                    "email": "nathaniel.nikolaus@hotmail.com",
                    "telefone": "990.508.1719 x68601",
                    "data_nascimento": "2009-02-10",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 24,
                        "user_id": 8
                    }
                }
            ],
            "cacifo": {
                "id": 14,
                "numero": 32,
                "temperatura": "8.5",
                "codigo": "IYPOJM5JHE",
                "tamanho_id": 4,
                "estado_id": 1,
                "localizacao_id": 2,
                "tamanho": {
                    "id": 4,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 2,
                    "nome": "Verona Ridges",
                    "lat": "-40.165968",
                    "lng": "12.338295",
                    "codigo_postal": "5381-921",
                    "cidade": "East Shyann"
                }
            },
            "cliente": {
                "id": 7,
                "nome": "Erwin Armstrong DDS",
                "email": "schimmel.kathryne@gmail.com",
                "telefone": "1-437-925-1279 x81322"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/24",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/14",
                "cliente": "http:\/\/localhost\/api\/clientes\/7"
            }
        },
        {
            "id": 25,
            "numero_encomenda": 604,
            "data_de_entrega": "2013-07-29 12:50:24",
            "data_de_levantamento": "2018-02-23 03:40:01",
            "data_de_entrada_no_sistema": "1992-12-18 12:23:54",
            "data_de_entrega_pretendida": "1972-09-11 13:16:25",
            "tempo_limite_de_levantamento": "2000-09-15 22:46:36",
            "estado_encomenda": 1,
            "temperatura": "4",
            "observacoes": "I almost wish I'd gone to see if she had asked it aloud; and in another moment down went Alice like the three gardeners at it, busily painting them red. Alice thought this must ever be A secret.",
            "tamanho": "M",
            "cliente_id": 10,
            "estafeta": [
                {
                    "id": 2,
                    "nome": "Marielle O'Conner",
                    "email": "mia.hane@yahoo.com",
                    "telefone": "419.995.0608 x95744",
                    "data_nascimento": "1993-01-26",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 25,
                        "user_id": 2
                    }
                }
            ],
            "cacifo": {
                "id": 13,
                "numero": 243,
                "temperatura": "10",
                "codigo": "HmAI-luL",
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
                    "nome": "Verona Ridges",
                    "lat": "-40.165968",
                    "lng": "12.338295",
                    "codigo_postal": "5381-921",
                    "cidade": "East Shyann"
                }
            },
            "cliente": {
                "id": 10,
                "nome": "Dr. Verona Hodkiewicz",
                "email": "delores.bogisich@yahoo.com",
                "telefone": "662-427-9039 x870"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/25",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/13",
                "cliente": "http:\/\/localhost\/api\/clientes\/10"
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
curl -X POST "http://localhost/api/encomendas"     -d "numero_encomenda"="20" \
    -d "data_de_entrega"="3iFmRIK8tlGnYW4Q" \
    -d "data_de_levantamento"="48az5QDI0Hf61t95" \
    -d "data_de_entrada_no_sistema"="kBEUTxE0p04PEurg" \
    -d "data_de_entrega_pretendida"="Zuiw8ZoS79Wj7UpG" \
    -d "tempo_limite_de_levantamento"="6YC7Yjwe7qbuQBoY" \
    -d "estado_encomenda"="false" \
    -d "temperatura"="9226.553345074" \
    -d "observacoes"="3t5PNgvOVXdU7DYo" \
    -d "tamanho"="FK8vRmF1WoFadtA9" \
    -d "cliente_id"="kTd1avEysdswMpMJ" \
    -d "cacifo_id"="IkGw6O9gTMnJwL7C" 
```

```javascript
const url = new URL("http://localhost/api/encomendas");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "numero_encomenda": "20",
    "data_de_entrega": "3iFmRIK8tlGnYW4Q",
    "data_de_levantamento": "48az5QDI0Hf61t95",
    "data_de_entrada_no_sistema": "kBEUTxE0p04PEurg",
    "data_de_entrega_pretendida": "Zuiw8ZoS79Wj7UpG",
    "tempo_limite_de_levantamento": "6YC7Yjwe7qbuQBoY",
    "estado_encomenda": "",
    "temperatura": "9226.553345074",
    "observacoes": "3t5PNgvOVXdU7DYo",
    "tamanho": "FK8vRmF1WoFadtA9",
    "cliente_id": "kTd1avEysdswMpMJ",
    "cacifo_id": "IkGw6O9gTMnJwL7C",
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
        "numero_encomenda": 160,
        "data_de_entrega": "1978-03-05 11:17:32",
        "data_de_levantamento": "2005-06-20 12:07:18",
        "data_de_entrada_no_sistema": "1993-09-13 03:59:07",
        "data_de_entrega_pretendida": "1974-03-08 00:33:59",
        "tempo_limite_de_levantamento": "2002-12-08 04:52:38",
        "estado_encomenda": 0,
        "temperatura": "6.6",
        "observacoes": "Five and Seven said nothing, but looked at it, and talking over its head. 'Very uncomfortable for the immediate adoption of more broken glass.) 'Now tell me, please, which way you go,' said the.",
        "tamanho": "XL",
        "cliente_id": 1,
        "cacifo_id": 3,
        "estafeta": [
            {
                "id": 8,
                "nome": "Prof. Sienna Mitchell",
                "email": "nathaniel.nikolaus@hotmail.com",
                "telefone": "990.508.1719 x68601",
                "data_nascimento": "2009-02-10",
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
            "id": 3,
            "numero": 268,
            "temperatura": "9.5",
            "codigo": "ARZVZs860",
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
                "nome": "Drake Mews",
                "lat": "-12.235179",
                "lng": "-166.851449",
                "codigo_postal": "3303-517",
                "cidade": "Lake Rex"
            }
        },
        "cliente": {
            "id": 1,
            "nome": "Robb Brekke",
            "email": "harley.douglas@gmail.com",
            "telefone": "461.972.0484"
        },
        "href": {
            "cliente": "http:\/\/localhost\/api\/clientes\/1",
            "cacifo": "http:\/\/localhost\/api\/cacifos\/3"
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
curl -X PUT "http://localhost/api/encomendas/{encomenda}"     -d "numero_encomenda"="17" \
    -d "data_de_entrega"="Srv7IuMlIKeNBYVu" \
    -d "data_de_levantamento"="ZAje7LOGtT1UuTFT" \
    -d "data_de_entrada_no_sistema"="e3ZOBhBD3SCuRk8t" \
    -d "data_de_entrega_pretendida"="ulUxfVXxmnNApTrm" \
    -d "tempo_limite_de_levantamento"="kXXXd4H4JWxw7Cqk" \
    -d "estado_encomenda"="1" \
    -d "temperatura"="5.887056" \
    -d "observacoes"="KUOKZspnFBrVZ97D" \
    -d "tamanho"="h6DIR9ODSDcgQxn1" \
    -d "cliente_id"="leSSmOjSQVJD92eo" \
    -d "cacifo_id"="Ey7FG91HoNkp06M7" 
```

```javascript
const url = new URL("http://localhost/api/encomendas/{encomenda}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "numero_encomenda": "17",
    "data_de_entrega": "Srv7IuMlIKeNBYVu",
    "data_de_levantamento": "ZAje7LOGtT1UuTFT",
    "data_de_entrada_no_sistema": "e3ZOBhBD3SCuRk8t",
    "data_de_entrega_pretendida": "ulUxfVXxmnNApTrm",
    "tempo_limite_de_levantamento": "kXXXd4H4JWxw7Cqk",
    "estado_encomenda": "1",
    "temperatura": "5.887056",
    "observacoes": "KUOKZspnFBrVZ97D",
    "tamanho": "h6DIR9ODSDcgQxn1",
    "cliente_id": "leSSmOjSQVJD92eo",
    "cacifo_id": "Ey7FG91HoNkp06M7",
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
curl -X POST "http://localhost/api/estados"     -d "estado"="IPg952eWZsXI7nW7" 
```

```javascript
const url = new URL("http://localhost/api/estados");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "estado": "IPg952eWZsXI7nW7",
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
curl -X PUT "http://localhost/api/estados/{estado}"     -d "estado"="ANTruQSonZfqmV5s" 
```

```javascript
const url = new URL("http://localhost/api/estados/{estado}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "estado": "ANTruQSonZfqmV5s",
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
            "nome": "Drake Mews",
            "lat": "-12.235179",
            "lng": "-166.851449",
            "codigo_postal": "3303-517",
            "cidade": "Lake Rex",
            "href": {
                "link": "http:\/\/localhost\/api\/localizacaos\/1"
            }
        },
        {
            "nome": "Verona Ridges",
            "lat": "-40.165968",
            "lng": "12.338295",
            "codigo_postal": "5381-921",
            "cidade": "East Shyann",
            "href": {
                "link": "http:\/\/localhost\/api\/localizacaos\/2"
            }
        },
        {
            "nome": "Ariane Vista",
            "lat": "58.435104",
            "lng": "103.061084",
            "codigo_postal": "9103-650",
            "cidade": "East Juanaside",
            "href": {
                "link": "http:\/\/localhost\/api\/localizacaos\/3"
            }
        },
        {
            "nome": "Hammes Grove",
            "lat": "55.155212",
            "lng": "134.57384",
            "codigo_postal": "7795-535",
            "cidade": "Dwightberg",
            "href": {
                "link": "http:\/\/localhost\/api\/localizacaos\/4"
            }
        },
        {
            "nome": "Kunze Dale",
            "lat": "-62.949086",
            "lng": "140.9678",
            "codigo_postal": "4148-910",
            "cidade": "Framibury",
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
curl -X POST "http://localhost/api/localizacaos"     -d "nome"="cymvq5JyApn2tMLd" \
    -d "lat"="18.74912659" \
    -d "long"="21.83" \
    -d "codigo_postal"="JI2gBbtHLoJWvlyV" \
    -d "cidade"="Z401bBu3OucdiLWB" 
```

```javascript
const url = new URL("http://localhost/api/localizacaos");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "cymvq5JyApn2tMLd",
    "lat": "18.74912659",
    "long": "21.83",
    "codigo_postal": "JI2gBbtHLoJWvlyV",
    "cidade": "Z401bBu3OucdiLWB",
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
        "nome": "Drake Mews",
        "lat": "-12.235179",
        "lng": "-166.851449",
        "codigo_postal": "3303-517",
        "cidade": "Lake Rex"
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
curl -X PUT "http://localhost/api/localizacaos/{localizacao}"     -d "nome"="jEkVag5nLGwlFkIT" \
    -d "latitude"="hrkDuB8aqvK7Ghhi" \
    -d "longitude"="vByLwMPltDV1mYY2" \
    -d "codigo_postal"="Ek4G7TAHeWtKwjak" \
    -d "cidade"="gYK2sKJaBmVUXOUh" 
```

```javascript
const url = new URL("http://localhost/api/localizacaos/{localizacao}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "jEkVag5nLGwlFkIT",
    "latitude": "hrkDuB8aqvK7Ghhi",
    "longitude": "vByLwMPltDV1mYY2",
    "codigo_postal": "Ek4G7TAHeWtKwjak",
    "cidade": "gYK2sKJaBmVUXOUh",
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
[]
```

### HTTP Request
`GET api/cacifo/{cacifo}/log`


<!-- END_ac1d028c597059c30da88f07f7727c6e -->

<!-- START_8119020f3e89ff3420f5c49571fd7bd0 -->
## Post Encomenda

Adiciona uma nova encomenda.

> Example request:

```bash
curl -X POST "http://localhost/api/cacifo/{cacifo}/log"     -d "data_hora"="Y50hUGoEcROr6qhV" \
    -d "cacifo_numero"="vJB3y8smNmZ13O8Y" \
    -d "encomenda_numero"="6" \
    -d "user_id"="m0eNIU5lzlJMn54Y" \
    -d "user_name"="R5lGSb6N2Fo1MqEe" \
    -d "user_tipo"="rLYKL9mHUW17SLB0" \
    -d "cliente_id"="5" \
    -d "cliente_nome"="vPADxhYrRlQhngPl" \
    -d "cacifo_id"="8" 
```

```javascript
const url = new URL("http://localhost/api/cacifo/{cacifo}/log");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "data_hora": "Y50hUGoEcROr6qhV",
    "cacifo_numero": "vJB3y8smNmZ13O8Y",
    "encomenda_numero": "6",
    "user_id": "m0eNIU5lzlJMn54Y",
    "user_name": "R5lGSb6N2Fo1MqEe",
    "user_tipo": "rLYKL9mHUW17SLB0",
    "cliente_id": "5",
    "cliente_nome": "vPADxhYrRlQhngPl",
    "cacifo_id": "8",
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
            "tamanho": "S",
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
            "tamanho": "L",
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
curl -X POST "http://localhost/api/tamanhos"     -d "tamanho"="z3RR1mWnDg0cGokv" 
```

```javascript
const url = new URL("http://localhost/api/tamanhos");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "tamanho": "z3RR1mWnDg0cGokv",
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
curl -X PUT "http://localhost/api/tamanhos/{tamanho}"     -d "tamanho"="5JgyqetDrn1K8IJg" 
```

```javascript
const url = new URL("http://localhost/api/tamanhos/{tamanho}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "tamanho": "5JgyqetDrn1K8IJg",
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
curl -X POST "http://localhost/api/userTypes"     -d "tipo"="zq26mmjlykjSzYLC" 
```

```javascript
const url = new URL("http://localhost/api/userTypes");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "tipo": "zq26mmjlykjSzYLC",
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
curl -X PUT "http://localhost/api/userTypes/{userType}"     -d "tipo"="JsObmDkcc96UpOuC" 
```

```javascript
const url = new URL("http://localhost/api/userTypes/{userType}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "tipo": "JsObmDkcc96UpOuC",
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
            "nome": "Joshuah Haley DDS",
            "email": "bayer.june@gmail.com",
            "telefone": "+1-805-762-8003",
            "data_nascimento": "1994-01-14",
            "local_de_trabalho": "TDIStore",
            "tipo_id": 2,
            "supervisor_id": 1,
            "tipo": {
                "id": 2,
                "tipo": "Admin"
            }
        },
        {
            "id": 2,
            "nome": "Marielle O'Conner",
            "email": "mia.hane@yahoo.com",
            "telefone": "419.995.0608 x95744",
            "data_nascimento": "1993-01-26",
            "local_de_trabalho": "TDIStore",
            "tipo_id": 1,
            "supervisor_id": 1,
            "tipo": {
                "id": 1,
                "tipo": "Estafeta"
            }
        },
        {
            "id": 3,
            "nome": "Esta Bruen III",
            "email": "dena26@hotmail.com",
            "telefone": "+1-509-688-4484",
            "data_nascimento": "2008-04-12",
            "local_de_trabalho": "TDIStore",
            "tipo_id": 2,
            "supervisor_id": 1,
            "tipo": {
                "id": 2,
                "tipo": "Admin"
            }
        },
        {
            "id": 4,
            "nome": "Kip Abernathy",
            "email": "schaefer.shanelle@hotmail.com",
            "telefone": "516.859.7021 x0352",
            "data_nascimento": "2001-08-17",
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
            "nome": "Josue Prosacco",
            "email": "devon58@gmail.com",
            "telefone": "1-718-655-6180 x589",
            "data_nascimento": "1982-08-06",
            "local_de_trabalho": "TDIStore",
            "tipo_id": 2,
            "supervisor_id": 1,
            "tipo": {
                "id": 2,
                "tipo": "Admin"
            }
        },
        {
            "id": 6,
            "nome": "Prof. Dee Kshlerin II",
            "email": "bbode@yahoo.com",
            "telefone": "783.784.0198 x7849",
            "data_nascimento": "2005-10-23",
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
            "nome": "Matilde Schroeder",
            "email": "mckenzie.jorge@yahoo.com",
            "telefone": "1-359-748-0326 x13542",
            "data_nascimento": "1970-06-27",
            "local_de_trabalho": "TDIStore",
            "tipo_id": 2,
            "supervisor_id": 1,
            "tipo": {
                "id": 2,
                "tipo": "Admin"
            }
        },
        {
            "id": 8,
            "nome": "Prof. Sienna Mitchell",
            "email": "nathaniel.nikolaus@hotmail.com",
            "telefone": "990.508.1719 x68601",
            "data_nascimento": "2009-02-10",
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
curl -X POST "http://localhost/api/users"     -d "nome"="e45FLPBvC366neJG" \
    -d "email"="ZjE2uRbxYh8Qhz0L" \
    -d "password"="9fIYslZyZxtXuoXo" \
    -d "telefone"="n3gLkqalii0IwsBA" \
    -d "data_nascimento"="nGQhcG3ZdAZq9fRX" \
    -d "local_de_trabalho"="wkrgmV0xBnmnVSqz" \
    -d "tipo_id"="WIH0TB44EGBWYBs0" \
    -d "supervisor_id"="a9UluI7nujfgIdy8" 
```

```javascript
const url = new URL("http://localhost/api/users");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "e45FLPBvC366neJG",
    "email": "ZjE2uRbxYh8Qhz0L",
    "password": "9fIYslZyZxtXuoXo",
    "telefone": "n3gLkqalii0IwsBA",
    "data_nascimento": "nGQhcG3ZdAZq9fRX",
    "local_de_trabalho": "wkrgmV0xBnmnVSqz",
    "tipo_id": "WIH0TB44EGBWYBs0",
    "supervisor_id": "a9UluI7nujfgIdy8",
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
        "nome": "Joshuah Haley DDS",
        "email": "bayer.june@gmail.com",
        "password": "yIBRe?D['f7",
        "telefone": "+1-805-762-8003",
        "data_nascimento": "1994-01-14",
        "local_de_trabalho": "TDIStore",
        "tipo_id": 2,
        "supervisor_id": 1,
        "tipo": {
            "id": 2,
            "tipo": "Admin"
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
curl -X PUT "http://localhost/api/users/{user}"     -d "nome"="4ZOBNUMhmuOSKWBR" \
    -d "email"="6MFyU9s1lLggB5hR" \
    -d "password"="njJfDqEZtiG4Gxrb" \
    -d "telefone"="4PonFZODhUfH8O9R" \
    -d "data_nascimento"="5UCx6Y8Jp7AqtLrF" \
    -d "tipo_id"="0cL9925ss9j5HgQX" \
    -d "supervisor_id"="XTlvYHodU1XS3gpt" 
```

```javascript
const url = new URL("http://localhost/api/users/{user}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "4ZOBNUMhmuOSKWBR",
    "email": "6MFyU9s1lLggB5hR",
    "password": "njJfDqEZtiG4Gxrb",
    "telefone": "4PonFZODhUfH8O9R",
    "data_nascimento": "5UCx6Y8Jp7AqtLrF",
    "tipo_id": "0cL9925ss9j5HgQX",
    "supervisor_id": "XTlvYHodU1XS3gpt",
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
            "id": 17,
            "numero_encomenda": 231,
            "data_de_entrega": "1992-04-17 15:49:54",
            "data_de_levantamento": "1992-08-30 02:55:29",
            "data_de_entrada_no_sistema": "2017-09-01 05:50:11",
            "data_de_entrega_pretendida": "1991-09-25 00:00:47",
            "tempo_limite_de_levantamento": "1975-03-08 00:56:43",
            "estado_encomenda": 0,
            "temperatura": "4.7",
            "observacoes": "Alice was silent. The Dormouse slowly opened his eyes very wide on hearing this; but all he SAID was, 'Why is a raven like a candle. I wonder what Latitude was, or Longitude I've got to see it pop.",
            "tamanho": "M",
            "cliente_id": 8,
            "cacifo_id": 13,
            "estafeta": [
                {
                    "id": 1,
                    "nome": "Joshuah Haley DDS",
                    "email": "bayer.june@gmail.com",
                    "telefone": "+1-805-762-8003",
                    "data_nascimento": "1994-01-14",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 17,
                        "user_id": 1
                    }
                }
            ],
            "cacifo": {
                "id": 13,
                "numero": 243,
                "temperatura": "10",
                "codigo": "HmAI-luL",
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
                    "nome": "Verona Ridges",
                    "lat": "-40.165968",
                    "lng": "12.338295",
                    "codigo_postal": "5381-921",
                    "cidade": "East Shyann"
                }
            },
            "cliente": {
                "id": 8,
                "nome": "Ms. Savannah Lubowitz MD",
                "email": "pearline67@yahoo.com",
                "telefone": "1-438-988-8461 x842"
            },
            "href": {
                "cliente": "http:\/\/localhost\/api\/clientes\/8",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/13"
            }
        },
        {
            "id": 19,
            "numero_encomenda": 678,
            "data_de_entrega": "1982-09-18 05:25:42",
            "data_de_levantamento": "1991-04-01 00:17:33",
            "data_de_entrada_no_sistema": "1996-01-17 08:54:23",
            "data_de_entrega_pretendida": "1974-03-11 05:25:25",
            "tempo_limite_de_levantamento": "1993-12-08 21:28:52",
            "estado_encomenda": 0,
            "temperatura": "11.6",
            "observacoes": "She was close behind it was very fond of pretending to be otherwise.\"' 'I think you might catch a bat, and that's all you know what to do it.' (And, as you liked.' 'Is that all?' said the King; and.",
            "tamanho": "M",
            "cliente_id": 4,
            "cacifo_id": 20,
            "estafeta": [
                {
                    "id": 1,
                    "nome": "Joshuah Haley DDS",
                    "email": "bayer.june@gmail.com",
                    "telefone": "+1-805-762-8003",
                    "data_nascimento": "1994-01-14",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 19,
                        "user_id": 1
                    }
                }
            ],
            "cacifo": {
                "id": 20,
                "numero": 61,
                "temperatura": "6.9",
                "codigo": "12ekIq4",
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
                    "nome": "Verona Ridges",
                    "lat": "-40.165968",
                    "lng": "12.338295",
                    "codigo_postal": "5381-921",
                    "cidade": "East Shyann"
                }
            },
            "cliente": {
                "id": 4,
                "nome": "Merl Veum",
                "email": "trenton17@hotmail.com",
                "telefone": "287.455.4002"
            },
            "href": {
                "cliente": "http:\/\/localhost\/api\/clientes\/4",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/20"
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


