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
            "numero": 185,
            "temperatura": "5.4",
            "tamanho_id": 1,
            "estado_id": 2,
            "localizacao_id": 4,
            "tamanho": {
                "id": 1,
                "tamanho": "L"
            },
            "estado": {
                "id": 2,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 4,
                "nome": "Jillian Drive",
                "lat": "-87.531133",
                "long": "-118.261583",
                "codigo_postal": "6190-268",
                "cidade": "Bartellview"
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
            "numero": 446,
            "temperatura": "10.6",
            "tamanho_id": 3,
            "estado_id": 2,
            "localizacao_id": 3,
            "tamanho": {
                "id": 3,
                "tamanho": "XL"
            },
            "estado": {
                "id": 2,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 3,
                "nome": "Spinka Court",
                "lat": "-27.810836",
                "long": "167.365849",
                "codigo_postal": "5151-775",
                "cidade": "West Kennedystad"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/2",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/3",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/3"
            }
        },
        {
            "id": 3,
            "numero": 342,
            "temperatura": "6.3",
            "tamanho_id": 2,
            "estado_id": 2,
            "localizacao_id": 1,
            "tamanho": {
                "id": 2,
                "tamanho": "XL"
            },
            "estado": {
                "id": 2,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 1,
                "nome": "Koepp Mews",
                "lat": "63.732159",
                "long": "94.351739",
                "codigo_postal": "9716-814",
                "cidade": "Mayebury"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/3",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/2",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/1"
            }
        },
        {
            "id": 4,
            "numero": 70,
            "temperatura": "9.1",
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
                "nome": "Koepp Mews",
                "lat": "63.732159",
                "long": "94.351739",
                "codigo_postal": "9716-814",
                "cidade": "Mayebury"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/4",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/2",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/1"
            }
        },
        {
            "id": 5,
            "numero": 138,
            "temperatura": "5.5",
            "tamanho_id": 1,
            "estado_id": 2,
            "localizacao_id": 4,
            "tamanho": {
                "id": 1,
                "tamanho": "L"
            },
            "estado": {
                "id": 2,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 4,
                "nome": "Jillian Drive",
                "lat": "-87.531133",
                "long": "-118.261583",
                "codigo_postal": "6190-268",
                "cidade": "Bartellview"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/5",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/1",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/4"
            }
        },
        {
            "id": 6,
            "numero": 492,
            "temperatura": "0.4",
            "tamanho_id": 4,
            "estado_id": 1,
            "localizacao_id": 4,
            "tamanho": {
                "id": 4,
                "tamanho": "M"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 4,
                "nome": "Jillian Drive",
                "lat": "-87.531133",
                "long": "-118.261583",
                "codigo_postal": "6190-268",
                "cidade": "Bartellview"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/6",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/4",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/4"
            }
        },
        {
            "id": 7,
            "numero": 134,
            "temperatura": "10",
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
                "nome": "Yundt Brooks",
                "lat": "16.344016",
                "long": "-152.390071",
                "codigo_postal": "4875-698",
                "cidade": "Port Hettieburgh"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/7",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/4",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/5"
            }
        },
        {
            "id": 8,
            "numero": 76,
            "temperatura": "11.5",
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
                "nome": "Koepp Mews",
                "lat": "63.732159",
                "long": "94.351739",
                "codigo_postal": "9716-814",
                "cidade": "Mayebury"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/8",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/3",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/1"
            }
        },
        {
            "id": 9,
            "numero": 306,
            "temperatura": "1.1",
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
                "nome": "Clemmie Village",
                "lat": "-77.233379",
                "long": "59.094078",
                "codigo_postal": "7185-244",
                "cidade": "Feilborough"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/9",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/2",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/2"
            }
        },
        {
            "id": 10,
            "numero": 152,
            "temperatura": "10.1",
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
                "nome": "Jillian Drive",
                "lat": "-87.531133",
                "long": "-118.261583",
                "codigo_postal": "6190-268",
                "cidade": "Bartellview"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/10",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/4",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/4"
            }
        },
        {
            "id": 11,
            "numero": 378,
            "temperatura": "5.9",
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
                "nome": "Spinka Court",
                "lat": "-27.810836",
                "long": "167.365849",
                "codigo_postal": "5151-775",
                "cidade": "West Kennedystad"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/11",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/4",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/3"
            }
        },
        {
            "id": 12,
            "numero": 175,
            "temperatura": "0.4",
            "tamanho_id": 3,
            "estado_id": 1,
            "localizacao_id": 4,
            "tamanho": {
                "id": 3,
                "tamanho": "XL"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 4,
                "nome": "Jillian Drive",
                "lat": "-87.531133",
                "long": "-118.261583",
                "codigo_postal": "6190-268",
                "cidade": "Bartellview"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/12",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/3",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/4"
            }
        },
        {
            "id": 13,
            "numero": 340,
            "temperatura": "5.9",
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
                "nome": "Yundt Brooks",
                "lat": "16.344016",
                "long": "-152.390071",
                "codigo_postal": "4875-698",
                "cidade": "Port Hettieburgh"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/13",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/4",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/5"
            }
        },
        {
            "id": 14,
            "numero": 489,
            "temperatura": "0",
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
                "nome": "Yundt Brooks",
                "lat": "16.344016",
                "long": "-152.390071",
                "codigo_postal": "4875-698",
                "cidade": "Port Hettieburgh"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/14",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/2",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/5"
            }
        },
        {
            "id": 15,
            "numero": 380,
            "temperatura": "1.9",
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
                "nome": "Yundt Brooks",
                "lat": "16.344016",
                "long": "-152.390071",
                "codigo_postal": "4875-698",
                "cidade": "Port Hettieburgh"
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
            "numero": 389,
            "temperatura": "7.2",
            "tamanho_id": 3,
            "estado_id": 1,
            "localizacao_id": 5,
            "tamanho": {
                "id": 3,
                "tamanho": "XL"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 5,
                "nome": "Yundt Brooks",
                "lat": "16.344016",
                "long": "-152.390071",
                "codigo_postal": "4875-698",
                "cidade": "Port Hettieburgh"
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
            "numero": 268,
            "temperatura": "9.3",
            "tamanho_id": 3,
            "estado_id": 2,
            "localizacao_id": 2,
            "tamanho": {
                "id": 3,
                "tamanho": "XL"
            },
            "estado": {
                "id": 2,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 2,
                "nome": "Clemmie Village",
                "lat": "-77.233379",
                "long": "59.094078",
                "codigo_postal": "7185-244",
                "cidade": "Feilborough"
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
            "numero": 463,
            "temperatura": "8.1",
            "tamanho_id": 3,
            "estado_id": 2,
            "localizacao_id": 5,
            "tamanho": {
                "id": 3,
                "tamanho": "XL"
            },
            "estado": {
                "id": 2,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 5,
                "nome": "Yundt Brooks",
                "lat": "16.344016",
                "long": "-152.390071",
                "codigo_postal": "4875-698",
                "cidade": "Port Hettieburgh"
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
            "numero": 287,
            "temperatura": "0.8",
            "tamanho_id": 4,
            "estado_id": 1,
            "localizacao_id": 4,
            "tamanho": {
                "id": 4,
                "tamanho": "M"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 4,
                "nome": "Jillian Drive",
                "lat": "-87.531133",
                "long": "-118.261583",
                "codigo_postal": "6190-268",
                "cidade": "Bartellview"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/19",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/4",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/4"
            }
        },
        {
            "id": 20,
            "numero": 197,
            "temperatura": "10.7",
            "tamanho_id": 1,
            "estado_id": 1,
            "localizacao_id": 2,
            "tamanho": {
                "id": 1,
                "tamanho": "L"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 2,
                "nome": "Clemmie Village",
                "lat": "-77.233379",
                "long": "59.094078",
                "codigo_postal": "7185-244",
                "cidade": "Feilborough"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/20",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/1",
                "estado": "http:\/\/localhost\/api\/estados\/1",
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
curl -X POST "http://localhost/api/cacifos"     -d "numero"="wtVa0EKIbhIiqkHr" \
    -d "temperatura"="mJglZQplqjwmgX85" \
    -d "codigo"="CCzv3rAECKvenlvE" \
    -d "estado_id"="lOIzVzgOHHLRSAgP" \
    -d "tamanho_id"="TZG1T000qZsEYIU2" \
    -d "localizacao_id"="4YHNKKTbqCtuaQmC" 
```

```javascript
const url = new URL("http://localhost/api/cacifos");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "numero": "wtVa0EKIbhIiqkHr",
    "temperatura": "mJglZQplqjwmgX85",
    "codigo": "CCzv3rAECKvenlvE",
    "estado_id": "lOIzVzgOHHLRSAgP",
    "tamanho_id": "TZG1T000qZsEYIU2",
    "localizacao_id": "4YHNKKTbqCtuaQmC",
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
        "numero": 185,
        "temperatura": "5.4",
        "codigo": "Hnig2",
        "tamanho_id": 1,
        "estado_id": 2,
        "localizacao_id": 4,
        "tamanho": {
            "id": 1,
            "tamanho": "L"
        },
        "estado": {
            "id": 2,
            "estado": "Disponivel"
        },
        "localizacao": {
            "id": 4,
            "nome": "Jillian Drive",
            "lat": "-87.531133",
            "long": "-118.261583",
            "codigo_postal": "6190-268",
            "cidade": "Bartellview"
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
curl -X PUT "http://localhost/api/cacifos/{cacifo}"     -d "numero"="FnDrdiXHSdoNh3Jo" \
    -d "temperatura"="zFbsBrk27vGaWDdo" \
    -d "codigo"="YwuL9kIx96tRttS1" \
    -d "estado_id"="qtWEY5ANEtBxfwEU" \
    -d "tamanho_id"="taUIDV6t3Bls4iT0" \
    -d "localizacao_id"="cXH21woD9OfersY6" 
```

```javascript
const url = new URL("http://localhost/api/cacifos/{cacifo}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "numero": "FnDrdiXHSdoNh3Jo",
    "temperatura": "zFbsBrk27vGaWDdo",
    "codigo": "YwuL9kIx96tRttS1",
    "estado_id": "qtWEY5ANEtBxfwEU",
    "tamanho_id": "taUIDV6t3Bls4iT0",
    "localizacao_id": "cXH21woD9OfersY6",
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
            "nome": "Colten Murazik",
            "email": "ila.zulauf@yahoo.com",
            "telefone": "+1 (742) 299-0224",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/1"
            }
        },
        {
            "nome": "Blanca Langosh",
            "email": "catharine79@hotmail.com",
            "telefone": "240.765.3383",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/2"
            }
        },
        {
            "nome": "Roselyn Feil",
            "email": "fritsch.estella@hotmail.com",
            "telefone": "(968) 577-6627 x08509",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/3"
            }
        },
        {
            "nome": "Mr. Anthony McClure IV",
            "email": "balistreri.liam@yahoo.com",
            "telefone": "831-892-9556",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/4"
            }
        },
        {
            "nome": "Kayli Kessler",
            "email": "huel.edyth@hotmail.com",
            "telefone": "(312) 889-5261 x12095",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/5"
            }
        },
        {
            "nome": "Jarred Grimes",
            "email": "ashly.funk@hotmail.com",
            "telefone": "1-270-309-3280 x1950",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/6"
            }
        },
        {
            "nome": "Johnnie Marquardt",
            "email": "hand.nelson@hotmail.com",
            "telefone": "+1 (503) 789-7718",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/7"
            }
        },
        {
            "nome": "Jarvis Senger III",
            "email": "marquis.strosin@gmail.com",
            "telefone": "+1-948-786-3340",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/8"
            }
        },
        {
            "nome": "Sophia DuBuque V",
            "email": "adams.bria@yahoo.com",
            "telefone": "(587) 916-4443",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/9"
            }
        },
        {
            "nome": "Cortez Oberbrunner",
            "email": "beer.izaiah@yahoo.com",
            "telefone": "(585) 852-7106 x491",
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
curl -X POST "http://localhost/api/clientes"     -d "nome"="qUmGOCXLbACe4Crz" \
    -d "email"="G67xnPZi5wRXYrbB" \
    -d "telefone"="D4FWpumwLaedPIbJ" 
```

```javascript
const url = new URL("http://localhost/api/clientes");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "qUmGOCXLbACe4Crz",
    "email": "G67xnPZi5wRXYrbB",
    "telefone": "D4FWpumwLaedPIbJ",
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
        "nome": "Colten Murazik",
        "email": "ila.zulauf@yahoo.com",
        "telefone": "+1 (742) 299-0224"
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
curl -X PUT "http://localhost/api/clientes/{cliente}"     -d "nome"="iDGH6wnD4A84Yg0n" \
    -d "email"="8MyE3uBdQgTxaZrG" \
    -d "telefone"="iMDb75nUJk0Zo8eO" 
```

```javascript
const url = new URL("http://localhost/api/clientes/{cliente}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "iDGH6wnD4A84Yg0n",
    "email": "8MyE3uBdQgTxaZrG",
    "telefone": "iMDb75nUJk0Zo8eO",
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
            "id": 8,
            "numero_encomenda": 304,
            "data_estimada": "1972-12-09 17:21:47",
            "data_de_entrega": "1991-10-06 06:49:21",
            "data_de_levantamento": "1971-03-05 07:25:07",
            "data_de_entrada_no_sistema": "1999-06-07 15:01:32",
            "data_de_entrega_pretendida": "1972-02-24 11:51:15",
            "tempo_limite_de_levantamento": "1999-02-25 08:31:41",
            "estado_encomenda": 0,
            "temperatura": "7",
            "observacoes": "Hatter. 'Nor I,' said the Cat. 'Do you play croquet with the next witness.' And he got up and straightening itself out again, and that's very like having a game of croquet she was shrinking rapidly.",
            "tamanho": "S",
            "localizacao": "Christiana Keys",
            "cliente_id": 1,
            "cacifo_id": 10,
            "cliente": {
                "id": 1,
                "nome": "Colten Murazik",
                "email": "ila.zulauf@yahoo.com",
                "telefone": "+1 (742) 299-0224"
            },
            "cacifo": {
                "id": 10,
                "numero": 152,
                "temperatura": "10.1",
                "codigo": "LT9QtVhla",
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
                    "nome": "Jillian Drive",
                    "lat": "-87.531133",
                    "long": "-118.261583",
                    "codigo_postal": "6190-268",
                    "cidade": "Bartellview"
                }
            },
            "estafeta": [
                {
                    "id": 3,
                    "nome": "Carey Borer II",
                    "email": "kolson@gmail.com",
                    "telefone": "(675) 748-0997 x5822",
                    "data_nascimento": "1978-03-09",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 8,
                        "user_id": 3
                    }
                }
            ],
            "href": {
                "cliente": "http:\/\/localhost\/api\/clientes\/1",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/10"
            }
        },
        {
            "id": 19,
            "numero_encomenda": 636,
            "data_estimada": "2018-08-27 18:05:35",
            "data_de_entrega": "2008-07-14 07:16:38",
            "data_de_levantamento": "2016-06-11 12:30:33",
            "data_de_entrada_no_sistema": "1989-12-04 05:51:31",
            "data_de_entrega_pretendida": "1980-04-17 14:26:21",
            "tempo_limite_de_levantamento": "2000-02-20 03:26:57",
            "estado_encomenda": 0,
            "temperatura": "1.8",
            "observacoes": "Mock Turtle said: 'advance twice, set to work throwing everything within her reach at the March Hare, 'that \"I like what I say,' the Mock Turtle sighed deeply, and began, in rather a complaining.",
            "tamanho": "XL",
            "localizacao": "Fritsch Spurs",
            "cliente_id": 1,
            "cacifo_id": 1,
            "cliente": {
                "id": 1,
                "nome": "Colten Murazik",
                "email": "ila.zulauf@yahoo.com",
                "telefone": "+1 (742) 299-0224"
            },
            "cacifo": {
                "id": 1,
                "numero": 185,
                "temperatura": "5.4",
                "codigo": "Hnig2",
                "tamanho_id": 1,
                "estado_id": 2,
                "localizacao_id": 4,
                "tamanho": {
                    "id": 1,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 4,
                    "nome": "Jillian Drive",
                    "lat": "-87.531133",
                    "long": "-118.261583",
                    "codigo_postal": "6190-268",
                    "cidade": "Bartellview"
                }
            },
            "estafeta": [
                {
                    "id": 2,
                    "nome": "Alba West",
                    "email": "jdicki@yahoo.com",
                    "telefone": "(847) 622-8427",
                    "data_nascimento": "2011-08-30",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 19,
                        "user_id": 2
                    }
                }
            ],
            "href": {
                "cliente": "http:\/\/localhost\/api\/clientes\/1",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/1"
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
            "numero_encomenda": 843,
            "data_estimada": "2005-09-10 13:32:21",
            "data_de_entrega": "2017-07-12 12:41:57",
            "data_de_levantamento": "1976-02-18 20:10:26",
            "data_de_entrada": "1981-08-20 03:09:05",
            "data_de_entrega_pretendida": "1999-05-13 13:13:07",
            "tempo_limite_de_levantamento": "1978-04-17 19:15:52",
            "estado_encomenda": 0,
            "temperatura": "9",
            "observacoes": "I like being that person, I'll come up: if not, I'll stay down here till I'm somebody else\"--but, oh dear!' cried Alice, jumping up in spite of all the first really clever thing the King said to.",
            "tamanho": "S",
            "localizacao": "Melisa Fort",
            "cliente": {
                "id": 4,
                "nome": "Mr. Anthony McClure IV",
                "email": "balistreri.liam@yahoo.com",
                "telefone": "831-892-9556"
            },
            "estafeta": [
                {
                    "id": 4,
                    "nome": "Jackson Russel I",
                    "email": "hackett.barton@hotmail.com",
                    "telefone": "468-744-7469",
                    "data_nascimento": "1998-10-23",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 1,
                        "user_id": 4
                    }
                }
            ],
            "cacifo": {
                "id": 12,
                "numero": 175,
                "temperatura": "0.4",
                "codigo": "kZxUceP0Vi",
                "tamanho_id": 3,
                "estado_id": 1,
                "localizacao_id": 4,
                "tamanho": {
                    "id": 3,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 4,
                    "nome": "Jillian Drive",
                    "lat": "-87.531133",
                    "long": "-118.261583",
                    "codigo_postal": "6190-268",
                    "cidade": "Bartellview"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/1",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/12",
                "cliente": "http:\/\/localhost\/api\/clientes\/4"
            }
        },
        {
            "id": 2,
            "numero_encomenda": 934,
            "data_estimada": "1973-02-12 03:04:52",
            "data_de_entrega": "2012-04-17 08:23:15",
            "data_de_levantamento": "1974-08-12 18:54:17",
            "data_de_entrada": "1971-01-18 02:25:53",
            "data_de_entrega_pretendida": "1976-04-19 11:42:35",
            "tempo_limite_de_levantamento": "2016-02-26 09:12:57",
            "estado_encomenda": 1,
            "temperatura": "2.4",
            "observacoes": "I can go back and see after some executions I have to whisper a hint to Time, and round goes the clock in a pleased tone. 'Pray don't trouble yourself to say than his first speech. 'You should learn.",
            "tamanho": "M",
            "localizacao": "Schinner Heights",
            "cliente": {
                "id": 9,
                "nome": "Sophia DuBuque V",
                "email": "adams.bria@yahoo.com",
                "telefone": "(587) 916-4443"
            },
            "estafeta": [
                {
                    "id": 5,
                    "nome": "Giovanny Pollich Sr.",
                    "email": "koepp.tobin@hotmail.com",
                    "telefone": "1-578-581-4024 x51078",
                    "data_nascimento": "2000-03-27",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 2,
                        "user_id": 5
                    }
                }
            ],
            "cacifo": {
                "id": 16,
                "numero": 389,
                "temperatura": "7.2",
                "codigo": "oKnUDg",
                "tamanho_id": 3,
                "estado_id": 1,
                "localizacao_id": 5,
                "tamanho": {
                    "id": 3,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 5,
                    "nome": "Yundt Brooks",
                    "lat": "16.344016",
                    "long": "-152.390071",
                    "codigo_postal": "4875-698",
                    "cidade": "Port Hettieburgh"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/2",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/16",
                "cliente": "http:\/\/localhost\/api\/clientes\/9"
            }
        },
        {
            "id": 3,
            "numero_encomenda": 285,
            "data_estimada": "1970-03-04 10:31:54",
            "data_de_entrega": "1971-12-04 09:41:10",
            "data_de_levantamento": "2004-02-20 11:30:06",
            "data_de_entrada": "1975-12-23 21:19:27",
            "data_de_entrega_pretendida": "1980-11-13 12:39:58",
            "tempo_limite_de_levantamento": "2007-03-10 17:40:27",
            "estado_encomenda": 0,
            "temperatura": "7.9",
            "observacoes": "Hatter. 'Stolen!' the King hastily said, and went on again: 'Twenty-four hours, I THINK; or is it I can't see you?' She was a bright idea came into Alice's shoulder as he spoke, and added with a.",
            "tamanho": "S",
            "localizacao": "Garry Shoals",
            "cliente": {
                "id": 7,
                "nome": "Johnnie Marquardt",
                "email": "hand.nelson@hotmail.com",
                "telefone": "+1 (503) 789-7718"
            },
            "estafeta": [
                {
                    "id": 3,
                    "nome": "Carey Borer II",
                    "email": "kolson@gmail.com",
                    "telefone": "(675) 748-0997 x5822",
                    "data_nascimento": "1978-03-09",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 3,
                        "user_id": 3
                    }
                }
            ],
            "cacifo": {
                "id": 9,
                "numero": 306,
                "temperatura": "1.1",
                "codigo": "oRVhp",
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
                    "nome": "Clemmie Village",
                    "lat": "-77.233379",
                    "long": "59.094078",
                    "codigo_postal": "7185-244",
                    "cidade": "Feilborough"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/3",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/9",
                "cliente": "http:\/\/localhost\/api\/clientes\/7"
            }
        },
        {
            "id": 4,
            "numero_encomenda": 326,
            "data_estimada": "2010-06-15 02:07:58",
            "data_de_entrega": "1979-04-24 11:06:07",
            "data_de_levantamento": "2004-04-14 05:24:43",
            "data_de_entrada": "2017-05-03 13:55:03",
            "data_de_entrega_pretendida": "2005-12-23 01:19:32",
            "tempo_limite_de_levantamento": "2011-01-21 08:37:13",
            "estado_encomenda": 1,
            "temperatura": "4.3",
            "observacoes": "She stretched herself up and saying, 'Thank you, sir, for your interesting story,' but she had this fit) An obstacle that came between Him, and ourselves, and it. Don't let me hear the very tones of.",
            "tamanho": "S",
            "localizacao": "Rosenbaum Street",
            "cliente": {
                "id": 10,
                "nome": "Cortez Oberbrunner",
                "email": "beer.izaiah@yahoo.com",
                "telefone": "(585) 852-7106 x491"
            },
            "estafeta": [
                {
                    "id": 2,
                    "nome": "Alba West",
                    "email": "jdicki@yahoo.com",
                    "telefone": "(847) 622-8427",
                    "data_nascimento": "2011-08-30",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 4,
                        "user_id": 2
                    }
                }
            ],
            "cacifo": {
                "id": 14,
                "numero": 489,
                "temperatura": "0",
                "codigo": "PpGlnLf",
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
                    "nome": "Yundt Brooks",
                    "lat": "16.344016",
                    "long": "-152.390071",
                    "codigo_postal": "4875-698",
                    "cidade": "Port Hettieburgh"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/4",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/14",
                "cliente": "http:\/\/localhost\/api\/clientes\/10"
            }
        },
        {
            "id": 5,
            "numero_encomenda": 419,
            "data_estimada": "2003-09-01 14:40:20",
            "data_de_entrega": "1978-12-27 11:16:16",
            "data_de_levantamento": "1983-02-15 06:05:49",
            "data_de_entrada": "2004-12-11 05:28:31",
            "data_de_entrega_pretendida": "2007-05-10 10:48:47",
            "tempo_limite_de_levantamento": "1973-10-11 14:04:17",
            "estado_encomenda": 1,
            "temperatura": "11.6",
            "observacoes": "Alice think it would make with the tea,' the Hatter grumbled: 'you shouldn't have put it in a voice outside, and stopped to listen. 'Mary Ann! Mary Ann!' said the Gryphon. 'I've forgotten the.",
            "tamanho": "L",
            "localizacao": "Leone Highway",
            "cliente": {
                "id": 4,
                "nome": "Mr. Anthony McClure IV",
                "email": "balistreri.liam@yahoo.com",
                "telefone": "831-892-9556"
            },
            "estafeta": [
                {
                    "id": 8,
                    "nome": "Rahul Welch",
                    "email": "lesch.emiliano@gmail.com",
                    "telefone": "(315) 237-6911 x338",
                    "data_nascimento": "2014-07-04",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 5,
                        "user_id": 8
                    }
                }
            ],
            "cacifo": {
                "id": 19,
                "numero": 287,
                "temperatura": "0.8",
                "codigo": "eB-T7VzYH",
                "tamanho_id": 4,
                "estado_id": 1,
                "localizacao_id": 4,
                "tamanho": {
                    "id": 4,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 4,
                    "nome": "Jillian Drive",
                    "lat": "-87.531133",
                    "long": "-118.261583",
                    "codigo_postal": "6190-268",
                    "cidade": "Bartellview"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/5",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/19",
                "cliente": "http:\/\/localhost\/api\/clientes\/4"
            }
        },
        {
            "id": 6,
            "numero_encomenda": 224,
            "data_estimada": "2017-05-09 05:13:47",
            "data_de_entrega": "2005-09-19 19:28:31",
            "data_de_levantamento": "1999-03-08 09:52:37",
            "data_de_entrada": "2012-04-30 04:26:21",
            "data_de_entrega_pretendida": "1991-03-28 17:15:44",
            "tempo_limite_de_levantamento": "2014-05-06 18:35:56",
            "estado_encomenda": 0,
            "temperatura": "5",
            "observacoes": "March Hare. Alice was very fond of pretending to be no doubt that it would feel with all speed back to the little door into that lovely garden. I think you'd better leave off,' said the Gryphon.",
            "tamanho": "M",
            "localizacao": "Christa Stream",
            "cliente": {
                "id": 2,
                "nome": "Blanca Langosh",
                "email": "catharine79@hotmail.com",
                "telefone": "240.765.3383"
            },
            "estafeta": [
                {
                    "id": 6,
                    "nome": "Tristin Hyatt",
                    "email": "luigi69@gmail.com",
                    "telefone": "+1-671-642-7240",
                    "data_nascimento": "1989-06-20",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 6,
                        "user_id": 6
                    }
                }
            ],
            "cacifo": {
                "id": 17,
                "numero": 268,
                "temperatura": "9.3",
                "codigo": "X9XjY5RjG8",
                "tamanho_id": 3,
                "estado_id": 2,
                "localizacao_id": 2,
                "tamanho": {
                    "id": 3,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 2,
                    "nome": "Clemmie Village",
                    "lat": "-77.233379",
                    "long": "59.094078",
                    "codigo_postal": "7185-244",
                    "cidade": "Feilborough"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/6",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/17",
                "cliente": "http:\/\/localhost\/api\/clientes\/2"
            }
        },
        {
            "id": 7,
            "numero_encomenda": 291,
            "data_estimada": "1979-09-09 14:53:30",
            "data_de_entrega": "1989-04-06 23:08:14",
            "data_de_levantamento": "1972-06-04 04:44:06",
            "data_de_entrada": "2001-12-20 09:53:09",
            "data_de_entrega_pretendida": "2004-03-20 13:40:20",
            "tempo_limite_de_levantamento": "1973-06-04 16:37:11",
            "estado_encomenda": 0,
            "temperatura": "9.2",
            "observacoes": "Mock Turtle yawned and shut his eyes.--'Tell her about the temper of your flamingo. Shall I try the thing yourself, some winter day, I will tell you his history,' As they walked off together. Alice.",
            "tamanho": "M",
            "localizacao": "Elvis Mills",
            "cliente": {
                "id": 9,
                "nome": "Sophia DuBuque V",
                "email": "adams.bria@yahoo.com",
                "telefone": "(587) 916-4443"
            },
            "estafeta": [
                {
                    "id": 6,
                    "nome": "Tristin Hyatt",
                    "email": "luigi69@gmail.com",
                    "telefone": "+1-671-642-7240",
                    "data_nascimento": "1989-06-20",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 7,
                        "user_id": 6
                    }
                }
            ],
            "cacifo": {
                "id": 16,
                "numero": 389,
                "temperatura": "7.2",
                "codigo": "oKnUDg",
                "tamanho_id": 3,
                "estado_id": 1,
                "localizacao_id": 5,
                "tamanho": {
                    "id": 3,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 5,
                    "nome": "Yundt Brooks",
                    "lat": "16.344016",
                    "long": "-152.390071",
                    "codigo_postal": "4875-698",
                    "cidade": "Port Hettieburgh"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/7",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/16",
                "cliente": "http:\/\/localhost\/api\/clientes\/9"
            }
        },
        {
            "id": 8,
            "numero_encomenda": 304,
            "data_estimada": "1972-12-09 17:21:47",
            "data_de_entrega": "1991-10-06 06:49:21",
            "data_de_levantamento": "1971-03-05 07:25:07",
            "data_de_entrada": "1999-06-07 15:01:32",
            "data_de_entrega_pretendida": "1972-02-24 11:51:15",
            "tempo_limite_de_levantamento": "1999-02-25 08:31:41",
            "estado_encomenda": 0,
            "temperatura": "7",
            "observacoes": "Hatter. 'Nor I,' said the Cat. 'Do you play croquet with the next witness.' And he got up and straightening itself out again, and that's very like having a game of croquet she was shrinking rapidly.",
            "tamanho": "S",
            "localizacao": "Christiana Keys",
            "cliente": {
                "id": 1,
                "nome": "Colten Murazik",
                "email": "ila.zulauf@yahoo.com",
                "telefone": "+1 (742) 299-0224"
            },
            "estafeta": [
                {
                    "id": 3,
                    "nome": "Carey Borer II",
                    "email": "kolson@gmail.com",
                    "telefone": "(675) 748-0997 x5822",
                    "data_nascimento": "1978-03-09",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 8,
                        "user_id": 3
                    }
                }
            ],
            "cacifo": {
                "id": 10,
                "numero": 152,
                "temperatura": "10.1",
                "codigo": "LT9QtVhla",
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
                    "nome": "Jillian Drive",
                    "lat": "-87.531133",
                    "long": "-118.261583",
                    "codigo_postal": "6190-268",
                    "cidade": "Bartellview"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/8",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/10",
                "cliente": "http:\/\/localhost\/api\/clientes\/1"
            }
        },
        {
            "id": 9,
            "numero_encomenda": 801,
            "data_estimada": "2015-12-14 07:20:38",
            "data_de_entrega": "2003-04-04 17:24:51",
            "data_de_levantamento": "2012-07-30 21:44:47",
            "data_de_entrada": "2008-06-13 16:52:00",
            "data_de_entrega_pretendida": "1990-04-24 01:24:39",
            "tempo_limite_de_levantamento": "2012-08-19 14:24:04",
            "estado_encomenda": 0,
            "temperatura": "3.6",
            "observacoes": "Alice could see it quite plainly through the neighbouring pool--she could hear the name 'Alice!' CHAPTER XII. Alice's Evidence 'Here!' cried Alice, with a kind of serpent, that's all the time he was.",
            "tamanho": "M",
            "localizacao": "Crona Route",
            "cliente": {
                "id": 9,
                "nome": "Sophia DuBuque V",
                "email": "adams.bria@yahoo.com",
                "telefone": "(587) 916-4443"
            },
            "estafeta": [
                {
                    "id": 1,
                    "nome": "Lottie Hahn DDS",
                    "email": "rollin87@yahoo.com",
                    "telefone": "718-521-3209",
                    "data_nascimento": "1977-06-04",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 9,
                        "user_id": 1
                    }
                }
            ],
            "cacifo": {
                "id": 5,
                "numero": 138,
                "temperatura": "5.5",
                "codigo": "iM3nFv0",
                "tamanho_id": 1,
                "estado_id": 2,
                "localizacao_id": 4,
                "tamanho": {
                    "id": 1,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 4,
                    "nome": "Jillian Drive",
                    "lat": "-87.531133",
                    "long": "-118.261583",
                    "codigo_postal": "6190-268",
                    "cidade": "Bartellview"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/9",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/5",
                "cliente": "http:\/\/localhost\/api\/clientes\/9"
            }
        },
        {
            "id": 10,
            "numero_encomenda": 996,
            "data_estimada": "1989-07-31 06:28:01",
            "data_de_entrega": "1995-05-28 13:43:09",
            "data_de_levantamento": "2017-07-03 16:27:43",
            "data_de_entrada": "1978-04-06 00:02:47",
            "data_de_entrega_pretendida": "1973-03-22 15:50:33",
            "tempo_limite_de_levantamento": "1978-01-20 13:35:46",
            "estado_encomenda": 0,
            "temperatura": "0.6",
            "observacoes": "They're dreadfully fond of pretending to be managed? I suppose it were white, but there were a Duck and a large caterpillar, that was linked into hers began to say anything. 'Why,' said the Hatter.",
            "tamanho": "M",
            "localizacao": "Jenifer Stream",
            "cliente": {
                "id": 7,
                "nome": "Johnnie Marquardt",
                "email": "hand.nelson@hotmail.com",
                "telefone": "+1 (503) 789-7718"
            },
            "estafeta": [
                {
                    "id": 7,
                    "nome": "Dr. Mark Parisian",
                    "email": "herzog.gwendolyn@hotmail.com",
                    "telefone": "1-586-977-5911 x67461",
                    "data_nascimento": "1980-03-04",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 10,
                        "user_id": 7
                    }
                }
            ],
            "cacifo": {
                "id": 16,
                "numero": 389,
                "temperatura": "7.2",
                "codigo": "oKnUDg",
                "tamanho_id": 3,
                "estado_id": 1,
                "localizacao_id": 5,
                "tamanho": {
                    "id": 3,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 5,
                    "nome": "Yundt Brooks",
                    "lat": "16.344016",
                    "long": "-152.390071",
                    "codigo_postal": "4875-698",
                    "cidade": "Port Hettieburgh"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/10",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/16",
                "cliente": "http:\/\/localhost\/api\/clientes\/7"
            }
        },
        {
            "id": 11,
            "numero_encomenda": 461,
            "data_estimada": "1991-12-21 20:54:29",
            "data_de_entrega": "1994-06-13 09:45:20",
            "data_de_levantamento": "1973-10-21 10:58:39",
            "data_de_entrada": "1973-11-05 01:12:23",
            "data_de_entrega_pretendida": "1994-03-20 21:17:42",
            "tempo_limite_de_levantamento": "1989-04-21 06:50:16",
            "estado_encomenda": 1,
            "temperatura": "9.4",
            "observacoes": "I fancied that kind of serpent, that's all I can remember feeling a little different. But if I'm not the same, the next verse.' 'But about his toes?' the Mock Turtle. 'Very much indeed,' said Alice.",
            "tamanho": "S",
            "localizacao": "Osborne Points",
            "cliente": {
                "id": 2,
                "nome": "Blanca Langosh",
                "email": "catharine79@hotmail.com",
                "telefone": "240.765.3383"
            },
            "estafeta": [
                {
                    "id": 3,
                    "nome": "Carey Borer II",
                    "email": "kolson@gmail.com",
                    "telefone": "(675) 748-0997 x5822",
                    "data_nascimento": "1978-03-09",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 11,
                        "user_id": 3
                    }
                }
            ],
            "cacifo": {
                "id": 15,
                "numero": 380,
                "temperatura": "1.9",
                "codigo": "0lZRd",
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
                    "nome": "Yundt Brooks",
                    "lat": "16.344016",
                    "long": "-152.390071",
                    "codigo_postal": "4875-698",
                    "cidade": "Port Hettieburgh"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/11",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/15",
                "cliente": "http:\/\/localhost\/api\/clientes\/2"
            }
        },
        {
            "id": 12,
            "numero_encomenda": 675,
            "data_estimada": "1974-08-26 15:26:56",
            "data_de_entrega": "1982-02-17 13:05:10",
            "data_de_levantamento": "1972-07-08 11:14:36",
            "data_de_entrada": "1989-11-10 14:48:58",
            "data_de_entrega_pretendida": "2017-04-23 17:37:24",
            "tempo_limite_de_levantamento": "2006-03-27 01:42:14",
            "estado_encomenda": 1,
            "temperatura": "4.5",
            "observacoes": "She'll get me executed, as sure as ferrets are ferrets! Where CAN I have dropped them, I wonder?' As she said to itself in a deep voice, 'What are you getting on now, my dear?' it continued, turning.",
            "tamanho": "S",
            "localizacao": "Kassulke Wall",
            "cliente": {
                "id": 5,
                "nome": "Kayli Kessler",
                "email": "huel.edyth@hotmail.com",
                "telefone": "(312) 889-5261 x12095"
            },
            "estafeta": [
                {
                    "id": 8,
                    "nome": "Rahul Welch",
                    "email": "lesch.emiliano@gmail.com",
                    "telefone": "(315) 237-6911 x338",
                    "data_nascimento": "2014-07-04",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 12,
                        "user_id": 8
                    }
                }
            ],
            "cacifo": {
                "id": 15,
                "numero": 380,
                "temperatura": "1.9",
                "codigo": "0lZRd",
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
                    "nome": "Yundt Brooks",
                    "lat": "16.344016",
                    "long": "-152.390071",
                    "codigo_postal": "4875-698",
                    "cidade": "Port Hettieburgh"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/12",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/15",
                "cliente": "http:\/\/localhost\/api\/clientes\/5"
            }
        },
        {
            "id": 13,
            "numero_encomenda": 450,
            "data_estimada": "2017-02-11 08:27:54",
            "data_de_entrega": "2005-12-14 04:19:45",
            "data_de_levantamento": "1991-09-06 23:47:15",
            "data_de_entrada": "1987-10-30 15:13:52",
            "data_de_entrega_pretendida": "1970-11-05 04:01:11",
            "tempo_limite_de_levantamento": "1984-08-20 01:39:58",
            "estado_encomenda": 0,
            "temperatura": "3.1",
            "observacoes": "The first thing she heard a little scream, half of them--and it belongs to a mouse, you know. Come on!' 'Everybody says \"come on!\" here,' thought Alice, 'as all the things between whiles.' 'Then you.",
            "tamanho": "S",
            "localizacao": "Hintz Hill",
            "cliente": {
                "id": 9,
                "nome": "Sophia DuBuque V",
                "email": "adams.bria@yahoo.com",
                "telefone": "(587) 916-4443"
            },
            "estafeta": [
                {
                    "id": 6,
                    "nome": "Tristin Hyatt",
                    "email": "luigi69@gmail.com",
                    "telefone": "+1-671-642-7240",
                    "data_nascimento": "1989-06-20",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 13,
                        "user_id": 6
                    }
                }
            ],
            "cacifo": {
                "id": 2,
                "numero": 446,
                "temperatura": "10.6",
                "codigo": "C8SYb3J9",
                "tamanho_id": 3,
                "estado_id": 2,
                "localizacao_id": 3,
                "tamanho": {
                    "id": 3,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 3,
                    "nome": "Spinka Court",
                    "lat": "-27.810836",
                    "long": "167.365849",
                    "codigo_postal": "5151-775",
                    "cidade": "West Kennedystad"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/13",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/2",
                "cliente": "http:\/\/localhost\/api\/clientes\/9"
            }
        },
        {
            "id": 14,
            "numero_encomenda": 388,
            "data_estimada": "2012-02-04 11:22:37",
            "data_de_entrega": "2011-06-30 00:28:14",
            "data_de_levantamento": "1984-03-14 02:27:27",
            "data_de_entrada": "1998-01-01 06:16:54",
            "data_de_entrega_pretendida": "1992-11-15 04:40:00",
            "tempo_limite_de_levantamento": "2004-10-29 01:39:34",
            "estado_encomenda": 0,
            "temperatura": "8.9",
            "observacoes": "Duchess, digging her sharp little chin into Alice's shoulder as she spoke, but no result seemed to think about stopping herself before she had not got into it), and sometimes shorter, until she made.",
            "tamanho": "M",
            "localizacao": "Sigmund Plains",
            "cliente": {
                "id": 6,
                "nome": "Jarred Grimes",
                "email": "ashly.funk@hotmail.com",
                "telefone": "1-270-309-3280 x1950"
            },
            "estafeta": [
                {
                    "id": 1,
                    "nome": "Lottie Hahn DDS",
                    "email": "rollin87@yahoo.com",
                    "telefone": "718-521-3209",
                    "data_nascimento": "1977-06-04",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 14,
                        "user_id": 1
                    }
                }
            ],
            "cacifo": {
                "id": 20,
                "numero": 197,
                "temperatura": "10.7",
                "codigo": "5lRkyW",
                "tamanho_id": 1,
                "estado_id": 1,
                "localizacao_id": 2,
                "tamanho": {
                    "id": 1,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 2,
                    "nome": "Clemmie Village",
                    "lat": "-77.233379",
                    "long": "59.094078",
                    "codigo_postal": "7185-244",
                    "cidade": "Feilborough"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/14",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/20",
                "cliente": "http:\/\/localhost\/api\/clientes\/6"
            }
        },
        {
            "id": 15,
            "numero_encomenda": 252,
            "data_estimada": "2016-01-22 05:51:38",
            "data_de_entrega": "1998-04-05 17:47:40",
            "data_de_levantamento": "1974-11-15 02:15:47",
            "data_de_entrada": "1995-01-08 09:07:32",
            "data_de_entrega_pretendida": "2009-09-16 14:42:52",
            "tempo_limite_de_levantamento": "1978-05-04 22:11:15",
            "estado_encomenda": 1,
            "temperatura": "6.2",
            "observacoes": "After a while she was talking. Alice could hear the very middle of one! There ought to have been changed for Mabel! I'll try and say \"Who am I to do anything but sit with its wings. 'Serpent!'.",
            "tamanho": "XL",
            "localizacao": "Mayer Drive",
            "cliente": {
                "id": 8,
                "nome": "Jarvis Senger III",
                "email": "marquis.strosin@gmail.com",
                "telefone": "+1-948-786-3340"
            },
            "estafeta": [
                {
                    "id": 7,
                    "nome": "Dr. Mark Parisian",
                    "email": "herzog.gwendolyn@hotmail.com",
                    "telefone": "1-586-977-5911 x67461",
                    "data_nascimento": "1980-03-04",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 15,
                        "user_id": 7
                    }
                }
            ],
            "cacifo": {
                "id": 3,
                "numero": 342,
                "temperatura": "6.3",
                "codigo": "Oz-hok_xSi",
                "tamanho_id": 2,
                "estado_id": 2,
                "localizacao_id": 1,
                "tamanho": {
                    "id": 2,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 1,
                    "nome": "Koepp Mews",
                    "lat": "63.732159",
                    "long": "94.351739",
                    "codigo_postal": "9716-814",
                    "cidade": "Mayebury"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/15",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/3",
                "cliente": "http:\/\/localhost\/api\/clientes\/8"
            }
        },
        {
            "id": 16,
            "numero_encomenda": 901,
            "data_estimada": "1989-01-06 21:16:51",
            "data_de_entrega": "2007-04-27 03:57:55",
            "data_de_levantamento": "1988-03-18 00:58:17",
            "data_de_entrada": "1975-05-02 08:10:15",
            "data_de_entrega_pretendida": "1995-01-03 14:07:57",
            "tempo_limite_de_levantamento": "2011-11-02 20:53:32",
            "estado_encomenda": 1,
            "temperatura": "2.8",
            "observacoes": "The Footman seemed to rise like a frog; and both the hedgehogs were out of the teacups as the March Hare. 'Then it ought to have changed since her swim in the distance. 'And yet what a dear little.",
            "tamanho": "L",
            "localizacao": "Eldon Street",
            "cliente": {
                "id": 3,
                "nome": "Roselyn Feil",
                "email": "fritsch.estella@hotmail.com",
                "telefone": "(968) 577-6627 x08509"
            },
            "estafeta": [
                {
                    "id": 5,
                    "nome": "Giovanny Pollich Sr.",
                    "email": "koepp.tobin@hotmail.com",
                    "telefone": "1-578-581-4024 x51078",
                    "data_nascimento": "2000-03-27",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 16,
                        "user_id": 5
                    }
                }
            ],
            "cacifo": {
                "id": 20,
                "numero": 197,
                "temperatura": "10.7",
                "codigo": "5lRkyW",
                "tamanho_id": 1,
                "estado_id": 1,
                "localizacao_id": 2,
                "tamanho": {
                    "id": 1,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 2,
                    "nome": "Clemmie Village",
                    "lat": "-77.233379",
                    "long": "59.094078",
                    "codigo_postal": "7185-244",
                    "cidade": "Feilborough"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/16",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/20",
                "cliente": "http:\/\/localhost\/api\/clientes\/3"
            }
        },
        {
            "id": 17,
            "numero_encomenda": 275,
            "data_estimada": "1983-01-20 09:33:20",
            "data_de_entrega": "1977-06-25 04:49:42",
            "data_de_levantamento": "1983-03-12 20:32:57",
            "data_de_entrada": "1980-01-10 11:26:29",
            "data_de_entrega_pretendida": "2012-04-15 21:14:24",
            "tempo_limite_de_levantamento": "1984-04-26 06:11:46",
            "estado_encomenda": 0,
            "temperatura": "5.4",
            "observacoes": "There was exactly three inches high). 'But I'm not the smallest notice of them can explain it,' said Five, 'and I'll tell you his history,' As they walked off together, Alice heard the Rabbit began.",
            "tamanho": "L",
            "localizacao": "Dibbert Highway",
            "cliente": {
                "id": 9,
                "nome": "Sophia DuBuque V",
                "email": "adams.bria@yahoo.com",
                "telefone": "(587) 916-4443"
            },
            "estafeta": [
                {
                    "id": 8,
                    "nome": "Rahul Welch",
                    "email": "lesch.emiliano@gmail.com",
                    "telefone": "(315) 237-6911 x338",
                    "data_nascimento": "2014-07-04",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 17,
                        "user_id": 8
                    }
                }
            ],
            "cacifo": {
                "id": 6,
                "numero": 492,
                "temperatura": "0.4",
                "codigo": "yVJZoClUP",
                "tamanho_id": 4,
                "estado_id": 1,
                "localizacao_id": 4,
                "tamanho": {
                    "id": 4,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 4,
                    "nome": "Jillian Drive",
                    "lat": "-87.531133",
                    "long": "-118.261583",
                    "codigo_postal": "6190-268",
                    "cidade": "Bartellview"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/17",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/6",
                "cliente": "http:\/\/localhost\/api\/clientes\/9"
            }
        },
        {
            "id": 18,
            "numero_encomenda": 544,
            "data_estimada": "1975-08-31 05:15:16",
            "data_de_entrega": "2009-07-14 01:31:41",
            "data_de_levantamento": "1980-05-25 17:47:51",
            "data_de_entrada": "2000-08-29 19:41:23",
            "data_de_entrega_pretendida": "1981-04-12 00:40:04",
            "tempo_limite_de_levantamento": "1980-06-21 22:55:18",
            "estado_encomenda": 1,
            "temperatura": "3.2",
            "observacoes": "Eaglet. 'I don't know one,' said Alice, who felt very lonely and low-spirited. In a little irritated at the window, she suddenly spread out her hand again, and went down to them, and then quietly.",
            "tamanho": "L",
            "localizacao": "Jayda Mount",
            "cliente": {
                "id": 3,
                "nome": "Roselyn Feil",
                "email": "fritsch.estella@hotmail.com",
                "telefone": "(968) 577-6627 x08509"
            },
            "estafeta": [
                {
                    "id": 5,
                    "nome": "Giovanny Pollich Sr.",
                    "email": "koepp.tobin@hotmail.com",
                    "telefone": "1-578-581-4024 x51078",
                    "data_nascimento": "2000-03-27",
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
                "id": 17,
                "numero": 268,
                "temperatura": "9.3",
                "codigo": "X9XjY5RjG8",
                "tamanho_id": 3,
                "estado_id": 2,
                "localizacao_id": 2,
                "tamanho": {
                    "id": 3,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 2,
                    "nome": "Clemmie Village",
                    "lat": "-77.233379",
                    "long": "59.094078",
                    "codigo_postal": "7185-244",
                    "cidade": "Feilborough"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/18",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/17",
                "cliente": "http:\/\/localhost\/api\/clientes\/3"
            }
        },
        {
            "id": 19,
            "numero_encomenda": 636,
            "data_estimada": "2018-08-27 18:05:35",
            "data_de_entrega": "2008-07-14 07:16:38",
            "data_de_levantamento": "2016-06-11 12:30:33",
            "data_de_entrada": "1989-12-04 05:51:31",
            "data_de_entrega_pretendida": "1980-04-17 14:26:21",
            "tempo_limite_de_levantamento": "2000-02-20 03:26:57",
            "estado_encomenda": 0,
            "temperatura": "1.8",
            "observacoes": "Mock Turtle said: 'advance twice, set to work throwing everything within her reach at the March Hare, 'that \"I like what I say,' the Mock Turtle sighed deeply, and began, in rather a complaining.",
            "tamanho": "XL",
            "localizacao": "Fritsch Spurs",
            "cliente": {
                "id": 1,
                "nome": "Colten Murazik",
                "email": "ila.zulauf@yahoo.com",
                "telefone": "+1 (742) 299-0224"
            },
            "estafeta": [
                {
                    "id": 2,
                    "nome": "Alba West",
                    "email": "jdicki@yahoo.com",
                    "telefone": "(847) 622-8427",
                    "data_nascimento": "2011-08-30",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 19,
                        "user_id": 2
                    }
                }
            ],
            "cacifo": {
                "id": 1,
                "numero": 185,
                "temperatura": "5.4",
                "codigo": "Hnig2",
                "tamanho_id": 1,
                "estado_id": 2,
                "localizacao_id": 4,
                "tamanho": {
                    "id": 1,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 4,
                    "nome": "Jillian Drive",
                    "lat": "-87.531133",
                    "long": "-118.261583",
                    "codigo_postal": "6190-268",
                    "cidade": "Bartellview"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/19",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/1",
                "cliente": "http:\/\/localhost\/api\/clientes\/1"
            }
        },
        {
            "id": 20,
            "numero_encomenda": 36,
            "data_estimada": "2001-04-26 07:48:58",
            "data_de_entrega": "2009-10-03 22:21:48",
            "data_de_levantamento": "1977-07-02 07:37:11",
            "data_de_entrada": "1970-06-14 15:22:38",
            "data_de_entrega_pretendida": "1972-04-09 17:50:45",
            "tempo_limite_de_levantamento": "1993-10-20 07:18:09",
            "estado_encomenda": 0,
            "temperatura": "3.6",
            "observacoes": "She felt that she wasn't a really good school,' said the King. 'It began with the Duchess, it had a consultation about this, and after a minute or two, looking for it, you may nurse it a little way.",
            "tamanho": "M",
            "localizacao": "Marjorie Lights",
            "cliente": {
                "id": 10,
                "nome": "Cortez Oberbrunner",
                "email": "beer.izaiah@yahoo.com",
                "telefone": "(585) 852-7106 x491"
            },
            "estafeta": [
                {
                    "id": 4,
                    "nome": "Jackson Russel I",
                    "email": "hackett.barton@hotmail.com",
                    "telefone": "468-744-7469",
                    "data_nascimento": "1998-10-23",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 20,
                        "user_id": 4
                    }
                }
            ],
            "cacifo": {
                "id": 17,
                "numero": 268,
                "temperatura": "9.3",
                "codigo": "X9XjY5RjG8",
                "tamanho_id": 3,
                "estado_id": 2,
                "localizacao_id": 2,
                "tamanho": {
                    "id": 3,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 2,
                    "nome": "Clemmie Village",
                    "lat": "-77.233379",
                    "long": "59.094078",
                    "codigo_postal": "7185-244",
                    "cidade": "Feilborough"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/20",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/17",
                "cliente": "http:\/\/localhost\/api\/clientes\/10"
            }
        },
        {
            "id": 21,
            "numero_encomenda": 297,
            "data_estimada": "1995-07-05 08:45:46",
            "data_de_entrega": "2003-06-11 18:29:37",
            "data_de_levantamento": "1989-11-16 12:09:26",
            "data_de_entrada": "1972-06-08 12:52:56",
            "data_de_entrega_pretendida": "1994-01-20 01:09:40",
            "tempo_limite_de_levantamento": "2013-10-02 15:05:07",
            "estado_encomenda": 1,
            "temperatura": "2.1",
            "observacoes": "Alice: '--where's the Duchess?' 'Hush! Hush!' said the Dormouse, who seemed too much overcome to do it! Oh dear! I shall never get to the Cheshire Cat: now I shall have some fun now!' thought Alice.",
            "tamanho": "XL",
            "localizacao": "Gutmann Corner",
            "cliente": {
                "id": 10,
                "nome": "Cortez Oberbrunner",
                "email": "beer.izaiah@yahoo.com",
                "telefone": "(585) 852-7106 x491"
            },
            "estafeta": [
                {
                    "id": 3,
                    "nome": "Carey Borer II",
                    "email": "kolson@gmail.com",
                    "telefone": "(675) 748-0997 x5822",
                    "data_nascimento": "1978-03-09",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 21,
                        "user_id": 3
                    }
                }
            ],
            "cacifo": {
                "id": 13,
                "numero": 340,
                "temperatura": "5.9",
                "codigo": "48P1P",
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
                    "nome": "Yundt Brooks",
                    "lat": "16.344016",
                    "long": "-152.390071",
                    "codigo_postal": "4875-698",
                    "cidade": "Port Hettieburgh"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/21",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/13",
                "cliente": "http:\/\/localhost\/api\/clientes\/10"
            }
        },
        {
            "id": 22,
            "numero_encomenda": 725,
            "data_estimada": "1975-08-29 04:09:37",
            "data_de_entrega": "2006-03-07 16:30:31",
            "data_de_levantamento": "2011-11-28 03:09:46",
            "data_de_entrada": "2003-02-12 21:10:43",
            "data_de_entrega_pretendida": "1991-10-06 20:19:51",
            "tempo_limite_de_levantamento": "1979-04-09 05:27:26",
            "estado_encomenda": 1,
            "temperatura": "5.2",
            "observacoes": "Canary called out in a coaxing tone, and added with a growl, And concluded the banquet--] 'What IS the same tone, exactly as if nothing had happened. 'How am I to get an opportunity of adding.",
            "tamanho": "XL",
            "localizacao": "Geraldine Vista",
            "cliente": {
                "id": 4,
                "nome": "Mr. Anthony McClure IV",
                "email": "balistreri.liam@yahoo.com",
                "telefone": "831-892-9556"
            },
            "estafeta": [
                {
                    "id": 5,
                    "nome": "Giovanny Pollich Sr.",
                    "email": "koepp.tobin@hotmail.com",
                    "telefone": "1-578-581-4024 x51078",
                    "data_nascimento": "2000-03-27",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 22,
                        "user_id": 5
                    }
                }
            ],
            "cacifo": {
                "id": 20,
                "numero": 197,
                "temperatura": "10.7",
                "codigo": "5lRkyW",
                "tamanho_id": 1,
                "estado_id": 1,
                "localizacao_id": 2,
                "tamanho": {
                    "id": 1,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 2,
                    "nome": "Clemmie Village",
                    "lat": "-77.233379",
                    "long": "59.094078",
                    "codigo_postal": "7185-244",
                    "cidade": "Feilborough"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/22",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/20",
                "cliente": "http:\/\/localhost\/api\/clientes\/4"
            }
        },
        {
            "id": 23,
            "numero_encomenda": 350,
            "data_estimada": "2018-01-23 06:38:27",
            "data_de_entrega": "1983-05-13 02:09:21",
            "data_de_levantamento": "1983-07-17 07:30:13",
            "data_de_entrada": "2002-11-17 04:38:30",
            "data_de_entrega_pretendida": "1987-04-25 05:40:48",
            "tempo_limite_de_levantamento": "1996-08-27 20:03:03",
            "estado_encomenda": 1,
            "temperatura": "1.4",
            "observacoes": "I know!' exclaimed Alice, who had been to her, though, as they would die. 'The trial cannot proceed,' said the Gryphon: and Alice joined the procession, wondering very much of a treacle-well--eh.",
            "tamanho": "M",
            "localizacao": "Jakubowski Dale",
            "cliente": {
                "id": 3,
                "nome": "Roselyn Feil",
                "email": "fritsch.estella@hotmail.com",
                "telefone": "(968) 577-6627 x08509"
            },
            "estafeta": [
                {
                    "id": 6,
                    "nome": "Tristin Hyatt",
                    "email": "luigi69@gmail.com",
                    "telefone": "+1-671-642-7240",
                    "data_nascimento": "1989-06-20",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 23,
                        "user_id": 6
                    }
                }
            ],
            "cacifo": {
                "id": 3,
                "numero": 342,
                "temperatura": "6.3",
                "codigo": "Oz-hok_xSi",
                "tamanho_id": 2,
                "estado_id": 2,
                "localizacao_id": 1,
                "tamanho": {
                    "id": 2,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 1,
                    "nome": "Koepp Mews",
                    "lat": "63.732159",
                    "long": "94.351739",
                    "codigo_postal": "9716-814",
                    "cidade": "Mayebury"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/23",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/3",
                "cliente": "http:\/\/localhost\/api\/clientes\/3"
            }
        },
        {
            "id": 24,
            "numero_encomenda": 153,
            "data_estimada": "2017-12-11 18:00:07",
            "data_de_entrega": "1999-07-26 03:40:59",
            "data_de_levantamento": "2007-04-02 00:14:02",
            "data_de_entrada": "1997-09-25 01:22:20",
            "data_de_entrega_pretendida": "2005-02-04 10:44:59",
            "tempo_limite_de_levantamento": "1996-08-13 22:44:52",
            "estado_encomenda": 1,
            "temperatura": "10.4",
            "observacoes": "Alice sharply, for she was quite pleased to have wondered at this, she came up to the dance. Will you, won't you, will you, won't you, will you, won't you, will you join the dance? Will you, won't.",
            "tamanho": "L",
            "localizacao": "Cremin Tunnel",
            "cliente": {
                "id": 9,
                "nome": "Sophia DuBuque V",
                "email": "adams.bria@yahoo.com",
                "telefone": "(587) 916-4443"
            },
            "estafeta": [
                {
                    "id": 7,
                    "nome": "Dr. Mark Parisian",
                    "email": "herzog.gwendolyn@hotmail.com",
                    "telefone": "1-586-977-5911 x67461",
                    "data_nascimento": "1980-03-04",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 24,
                        "user_id": 7
                    }
                }
            ],
            "cacifo": {
                "id": 17,
                "numero": 268,
                "temperatura": "9.3",
                "codigo": "X9XjY5RjG8",
                "tamanho_id": 3,
                "estado_id": 2,
                "localizacao_id": 2,
                "tamanho": {
                    "id": 3,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 2,
                    "nome": "Clemmie Village",
                    "lat": "-77.233379",
                    "long": "59.094078",
                    "codigo_postal": "7185-244",
                    "cidade": "Feilborough"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/24",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/17",
                "cliente": "http:\/\/localhost\/api\/clientes\/9"
            }
        },
        {
            "id": 25,
            "numero_encomenda": 902,
            "data_estimada": "1978-11-20 10:59:09",
            "data_de_entrega": "1972-06-14 13:46:31",
            "data_de_levantamento": "2018-08-06 05:50:57",
            "data_de_entrada": "1970-01-09 06:13:05",
            "data_de_entrega_pretendida": "2012-12-17 10:58:48",
            "tempo_limite_de_levantamento": "1981-01-13 02:12:51",
            "estado_encomenda": 0,
            "temperatura": "7.8",
            "observacoes": "Alice in a natural way. 'I thought it would,' said the King, 'and don't look at a king,' said Alice. 'Well, then,' the Cat said, waving its right paw round, 'lives a Hatter: and in another moment.",
            "tamanho": "M",
            "localizacao": "Hagenes Glens",
            "cliente": {
                "id": 3,
                "nome": "Roselyn Feil",
                "email": "fritsch.estella@hotmail.com",
                "telefone": "(968) 577-6627 x08509"
            },
            "estafeta": [
                {
                    "id": 6,
                    "nome": "Tristin Hyatt",
                    "email": "luigi69@gmail.com",
                    "telefone": "+1-671-642-7240",
                    "data_nascimento": "1989-06-20",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 25,
                        "user_id": 6
                    }
                }
            ],
            "cacifo": {
                "id": 8,
                "numero": 76,
                "temperatura": "11.5",
                "codigo": "2XzUU",
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
                    "nome": "Koepp Mews",
                    "lat": "63.732159",
                    "long": "94.351739",
                    "codigo_postal": "9716-814",
                    "cidade": "Mayebury"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/25",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/8",
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
curl -X POST "http://localhost/api/encomendas"     -d "numero_encomenda"="18" \
    -d "data_estimada"="ESMv7fv9qzYSUXpI" \
    -d "data_de_entrega"="uWNCe4vcPxenzayH" \
    -d "data_de_levantamento"="xc1KmeophbYg8Ik4" \
    -d "data_de_entrada_no_sistema"="RA6p5xURoVu9sWxB" \
    -d "data_de_entrega_pretendida"="xBOjD4N9k5iWmmQJ" \
    -d "tempo_limite_de_levantamento"="WeeYNHzMiwQ43Lco" \
    -d "estado_encomenda"="false" \
    -d "temperatura"="2052.3" \
    -d "observacoes"="zQJfqXh9wdU9Kkdm" \
    -d "tamanho"="xLCvMQgpAjSNrzqY" \
    -d "localizacao"="INv7F1L92wXzyD7X" \
    -d "cliente_id"="FKjfnklmbwU8QK0W" \
    -d "cacifo_id"="0fJROasZhqMoE5A5" 
```

```javascript
const url = new URL("http://localhost/api/encomendas");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "numero_encomenda": "18",
    "data_estimada": "ESMv7fv9qzYSUXpI",
    "data_de_entrega": "uWNCe4vcPxenzayH",
    "data_de_levantamento": "xc1KmeophbYg8Ik4",
    "data_de_entrada_no_sistema": "RA6p5xURoVu9sWxB",
    "data_de_entrega_pretendida": "xBOjD4N9k5iWmmQJ",
    "tempo_limite_de_levantamento": "WeeYNHzMiwQ43Lco",
    "estado_encomenda": "",
    "temperatura": "2052.3",
    "observacoes": "zQJfqXh9wdU9Kkdm",
    "tamanho": "xLCvMQgpAjSNrzqY",
    "localizacao": "INv7F1L92wXzyD7X",
    "cliente_id": "FKjfnklmbwU8QK0W",
    "cacifo_id": "0fJROasZhqMoE5A5",
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
        "numero_encomenda": 843,
        "data_estimada": "2005-09-10 13:32:21",
        "data_de_entrega": "2017-07-12 12:41:57",
        "data_de_levantamento": "1976-02-18 20:10:26",
        "data_de_entrada_no_sistema": "1981-08-20 03:09:05",
        "data_de_entrega_pretendida": "1999-05-13 13:13:07",
        "tempo_limite_de_levantamento": "1978-04-17 19:15:52",
        "estado_encomenda": 0,
        "temperatura": "9",
        "observacoes": "I like being that person, I'll come up: if not, I'll stay down here till I'm somebody else\"--but, oh dear!' cried Alice, jumping up in spite of all the first really clever thing the King said to.",
        "tamanho": "S",
        "localizacao": "Melisa Fort",
        "cliente_id": 4,
        "cacifo_id": 12,
        "cliente": {
            "id": 4,
            "nome": "Mr. Anthony McClure IV",
            "email": "balistreri.liam@yahoo.com",
            "telefone": "831-892-9556"
        },
        "cacifo": {
            "id": 12,
            "numero": 175,
            "temperatura": "0.4",
            "codigo": "kZxUceP0Vi",
            "tamanho_id": 3,
            "estado_id": 1,
            "localizacao_id": 4,
            "tamanho": {
                "id": 3,
                "tamanho": "XL"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 4,
                "nome": "Jillian Drive",
                "lat": "-87.531133",
                "long": "-118.261583",
                "codigo_postal": "6190-268",
                "cidade": "Bartellview"
            }
        },
        "estafeta": [
            {
                "id": 4,
                "nome": "Jackson Russel I",
                "email": "hackett.barton@hotmail.com",
                "telefone": "468-744-7469",
                "data_nascimento": "1998-10-23",
                "local_de_trabalho": "TDIStore",
                "tipo_id": 2,
                "supervisor_id": 1,
                "pivot": {
                    "encomenda_id": 1,
                    "user_id": 4
                }
            }
        ],
        "href": {
            "cliente": "http:\/\/localhost\/api\/clientes\/4",
            "cacifo": "http:\/\/localhost\/api\/cacifos\/12"
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
    -d "data_estimada"="BDCkDfoNuuhZ08HP" \
    -d "data_de_entrega"="iQ2gphfSfpco5pez" \
    -d "data_de_levantamento"="LKOd6cJPfsuaQgEG" \
    -d "data_de_entrada_no_sistema"="BWYkAVTVNr7TryNA" \
    -d "data_de_entrega_pretendida"="HVFx0u4hpjukQ3Zf" \
    -d "tempo_limite_de_levantamento"="cQ1MsldtbwVKRHdi" \
    -d "estado_encomenda"="false" \
    -d "temperatura"="0.8" \
    -d "observacoes"="Y7vqQ88V5OEuBopX" \
    -d "tamanho"="qpwaTW5q0oe3ufXz" \
    -d "localizacao"="6MECd8W711n49qgb" \
    -d "cliente_id"="2wlCoz4LlPKY1mqz" \
    -d "cacifo_id"="2uNlgAshsgJ8BACz" 
```

```javascript
const url = new URL("http://localhost/api/encomendas/{encomenda}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "numero_encomenda": "11",
    "data_estimada": "BDCkDfoNuuhZ08HP",
    "data_de_entrega": "iQ2gphfSfpco5pez",
    "data_de_levantamento": "LKOd6cJPfsuaQgEG",
    "data_de_entrada_no_sistema": "BWYkAVTVNr7TryNA",
    "data_de_entrega_pretendida": "HVFx0u4hpjukQ3Zf",
    "tempo_limite_de_levantamento": "cQ1MsldtbwVKRHdi",
    "estado_encomenda": "",
    "temperatura": "0.8",
    "observacoes": "Y7vqQ88V5OEuBopX",
    "tamanho": "qpwaTW5q0oe3ufXz",
    "localizacao": "6MECd8W711n49qgb",
    "cliente_id": "2wlCoz4LlPKY1mqz",
    "cacifo_id": "2uNlgAshsgJ8BACz",
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
            "estado": "Disponivel",
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
curl -X POST "http://localhost/api/estados"     -d "estado"="nzQdE1mFp5xkgumV" 
```

```javascript
const url = new URL("http://localhost/api/estados");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "estado": "nzQdE1mFp5xkgumV",
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
curl -X PUT "http://localhost/api/estados/{estado}"     -d "estado"="QDkorZ8BjCFQnSZU" 
```

```javascript
const url = new URL("http://localhost/api/estados/{estado}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "estado": "QDkorZ8BjCFQnSZU",
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
            "nome": "Koepp Mews",
            "lat": "63.732159",
            "long": "94.351739",
            "codigo_postal": "9716-814",
            "cidade": "Mayebury",
            "href": {
                "link": "http:\/\/localhost\/api\/localizacaos\/1"
            }
        },
        {
            "nome": "Clemmie Village",
            "lat": "-77.233379",
            "long": "59.094078",
            "codigo_postal": "7185-244",
            "cidade": "Feilborough",
            "href": {
                "link": "http:\/\/localhost\/api\/localizacaos\/2"
            }
        },
        {
            "nome": "Spinka Court",
            "lat": "-27.810836",
            "long": "167.365849",
            "codigo_postal": "5151-775",
            "cidade": "West Kennedystad",
            "href": {
                "link": "http:\/\/localhost\/api\/localizacaos\/3"
            }
        },
        {
            "nome": "Jillian Drive",
            "lat": "-87.531133",
            "long": "-118.261583",
            "codigo_postal": "6190-268",
            "cidade": "Bartellview",
            "href": {
                "link": "http:\/\/localhost\/api\/localizacaos\/4"
            }
        },
        {
            "nome": "Yundt Brooks",
            "lat": "16.344016",
            "long": "-152.390071",
            "codigo_postal": "4875-698",
            "cidade": "Port Hettieburgh",
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
curl -X POST "http://localhost/api/localizacaos"     -d "nome"="sohYLc9tdNtETSW6" \
    -d "lat"="24834.505399599" \
    -d "long"="3089446.419" \
    -d "codigo_postal"="77GB9ffCOaY2WDoj" \
    -d "cidade"="6PaO6ZNOF7KXoXy4" 
```

```javascript
const url = new URL("http://localhost/api/localizacaos");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "sohYLc9tdNtETSW6",
    "lat": "24834.505399599",
    "long": "3089446.419",
    "codigo_postal": "77GB9ffCOaY2WDoj",
    "cidade": "6PaO6ZNOF7KXoXy4",
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
        "nome": "Koepp Mews",
        "lat": "63.732159",
        "long": "94.351739",
        "codigo_postal": "9716-814",
        "cidade": "Mayebury"
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
curl -X PUT "http://localhost/api/localizacaos/{localizacao}"     -d "nome"="jfEq1X1COAvwnnV6" \
    -d "latitude"="0xaXLUO3SH4N9E1x" \
    -d "longitude"="sZou6A2Ry60NbVwX" \
    -d "codigo_postal"="Pt1bQt3dGuytJ2uN" \
    -d "cidade"="sZ4XoHLKi3xFpRlH" 
```

```javascript
const url = new URL("http://localhost/api/localizacaos/{localizacao}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "jfEq1X1COAvwnnV6",
    "latitude": "0xaXLUO3SH4N9E1x",
    "longitude": "sZou6A2Ry60NbVwX",
    "codigo_postal": "Pt1bQt3dGuytJ2uN",
    "cidade": "sZ4XoHLKi3xFpRlH",
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
curl -X POST "http://localhost/api/cacifo/{cacifo}/log"     -d "data_hora"="TPhStTkN6bIQv6xd" \
    -d "cacifo_numero"="jfzDAdNFGKQbymTa" \
    -d "encomenda_numero"="16" \
    -d "user_id"="DPYmL9030W1r5mAF" \
    -d "user_name"="KPJem13FUD1BAqLy" \
    -d "user_tipo"="n6kmmvvjN8NCVsvC" \
    -d "cliente_id"="8" \
    -d "cliente_nome"="cMyRtVpCQJ6d4JcA" \
    -d "cacifo_id"="17" 
```

```javascript
const url = new URL("http://localhost/api/cacifo/{cacifo}/log");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "data_hora": "TPhStTkN6bIQv6xd",
    "cacifo_numero": "jfzDAdNFGKQbymTa",
    "encomenda_numero": "16",
    "user_id": "DPYmL9030W1r5mAF",
    "user_name": "KPJem13FUD1BAqLy",
    "user_tipo": "n6kmmvvjN8NCVsvC",
    "cliente_id": "8",
    "cliente_nome": "cMyRtVpCQJ6d4JcA",
    "cacifo_id": "17",
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
            "tamanho": "L",
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
curl -X POST "http://localhost/api/tamanhos"     -d "tamanho"="4etCUC7d41rYe9Kv" 
```

```javascript
const url = new URL("http://localhost/api/tamanhos");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "tamanho": "4etCUC7d41rYe9Kv",
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
        "tamanho": "L"
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
curl -X PUT "http://localhost/api/tamanhos/{tamanho}"     -d "tamanho"="2IWV9zCaJNjZp3Fx" 
```

```javascript
const url = new URL("http://localhost/api/tamanhos/{tamanho}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "tamanho": "2IWV9zCaJNjZp3Fx",
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
curl -X POST "http://localhost/api/userTypes"     -d "tipo"="cCtlyl7JOcIlGIfY" 
```

```javascript
const url = new URL("http://localhost/api/userTypes");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "tipo": "cCtlyl7JOcIlGIfY",
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
curl -X PUT "http://localhost/api/userTypes/{userType}"     -d "tipo"="UVR0LDhi3uBzURvy" 
```

```javascript
const url = new URL("http://localhost/api/userTypes/{userType}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "tipo": "UVR0LDhi3uBzURvy",
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
            "nome": "Lottie Hahn DDS",
            "email": "rollin87@yahoo.com",
            "telefone": "718-521-3209",
            "data_nascimento": "1977-06-04",
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
            "nome": "Alba West",
            "email": "jdicki@yahoo.com",
            "telefone": "(847) 622-8427",
            "data_nascimento": "2011-08-30",
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
            "nome": "Carey Borer II",
            "email": "kolson@gmail.com",
            "telefone": "(675) 748-0997 x5822",
            "data_nascimento": "1978-03-09",
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
            "nome": "Jackson Russel I",
            "email": "hackett.barton@hotmail.com",
            "telefone": "468-744-7469",
            "data_nascimento": "1998-10-23",
            "local_de_trabalho": "TDIStore",
            "tipo_id": 2,
            "supervisor_id": 1,
            "tipo": {
                "id": 2,
                "tipo": "Admin"
            }
        },
        {
            "id": 5,
            "nome": "Giovanny Pollich Sr.",
            "email": "koepp.tobin@hotmail.com",
            "telefone": "1-578-581-4024 x51078",
            "data_nascimento": "2000-03-27",
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
            "nome": "Tristin Hyatt",
            "email": "luigi69@gmail.com",
            "telefone": "+1-671-642-7240",
            "data_nascimento": "1989-06-20",
            "local_de_trabalho": "TDIStore",
            "tipo_id": 2,
            "supervisor_id": 1,
            "tipo": {
                "id": 2,
                "tipo": "Admin"
            }
        },
        {
            "id": 7,
            "nome": "Dr. Mark Parisian",
            "email": "herzog.gwendolyn@hotmail.com",
            "telefone": "1-586-977-5911 x67461",
            "data_nascimento": "1980-03-04",
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
            "nome": "Rahul Welch",
            "email": "lesch.emiliano@gmail.com",
            "telefone": "(315) 237-6911 x338",
            "data_nascimento": "2014-07-04",
            "local_de_trabalho": "TDIStore",
            "tipo_id": 1,
            "supervisor_id": 1,
            "tipo": {
                "id": 1,
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
curl -X POST "http://localhost/api/users"     -d "nome"="XKG3GKd5Jru0IWb5" \
    -d "email"="4bOgWTp4AwXllyus" \
    -d "password"="3dV1JKypV2Ewp4eK" \
    -d "telefone"="uPgGx0HbTfS80beu" \
    -d "data_nascimento"="yhaaOy3PvimK6wLN" \
    -d "local_de_trabalho"="cVnVM4ZE2rcYjMQI" \
    -d "tipo_id"="tJdSBHzRdjN1zRtj" \
    -d "supervisor_id"="qdR0QqoR9xPKuSUs" 
```

```javascript
const url = new URL("http://localhost/api/users");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "XKG3GKd5Jru0IWb5",
    "email": "4bOgWTp4AwXllyus",
    "password": "3dV1JKypV2Ewp4eK",
    "telefone": "uPgGx0HbTfS80beu",
    "data_nascimento": "yhaaOy3PvimK6wLN",
    "local_de_trabalho": "cVnVM4ZE2rcYjMQI",
    "tipo_id": "tJdSBHzRdjN1zRtj",
    "supervisor_id": "qdR0QqoR9xPKuSUs",
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
        "nome": "Lottie Hahn DDS",
        "email": "rollin87@yahoo.com",
        "password": "AqGel0S+cdCa",
        "telefone": "718-521-3209",
        "data_nascimento": "1977-06-04",
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
curl -X PUT "http://localhost/api/users/{user}"     -d "nome"="zV9aoKIMeAkezIlB" \
    -d "email"="OR0oIQkiixJBT93e" \
    -d "password"="PHSA01A1AtwVPIux" \
    -d "telefone"="YR4cBXJxPkyS4sDR" \
    -d "data_nascimento"="PiFpLp5IG1TAtgtD" \
    -d "tipo_id"="pRwbmW1rtcwAus6g" \
    -d "supervisor_id"="9PudEg1m8xMtwn5U" 
```

```javascript
const url = new URL("http://localhost/api/users/{user}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "zV9aoKIMeAkezIlB",
    "email": "OR0oIQkiixJBT93e",
    "password": "PHSA01A1AtwVPIux",
    "telefone": "YR4cBXJxPkyS4sDR",
    "data_nascimento": "PiFpLp5IG1TAtgtD",
    "tipo_id": "pRwbmW1rtcwAus6g",
    "supervisor_id": "9PudEg1m8xMtwn5U",
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
            "id": 9,
            "numero_encomenda": 801,
            "data_estimada": "2015-12-14 07:20:38",
            "data_de_entrega": "2003-04-04 17:24:51",
            "data_de_levantamento": "2012-07-30 21:44:47",
            "data_de_entrada_no_sistema": "2008-06-13 16:52:00",
            "data_de_entrega_pretendida": "1990-04-24 01:24:39",
            "tempo_limite_de_levantamento": "2012-08-19 14:24:04",
            "estado_encomenda": 0,
            "temperatura": "3.6",
            "observacoes": "Alice could see it quite plainly through the neighbouring pool--she could hear the name 'Alice!' CHAPTER XII. Alice's Evidence 'Here!' cried Alice, with a kind of serpent, that's all the time he was.",
            "tamanho": "M",
            "localizacao": "Crona Route",
            "cliente_id": 9,
            "cacifo_id": 5,
            "cliente": {
                "id": 9,
                "nome": "Sophia DuBuque V",
                "email": "adams.bria@yahoo.com",
                "telefone": "(587) 916-4443"
            },
            "cacifo": {
                "id": 5,
                "numero": 138,
                "temperatura": "5.5",
                "codigo": "iM3nFv0",
                "tamanho_id": 1,
                "estado_id": 2,
                "localizacao_id": 4,
                "tamanho": {
                    "id": 1,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 4,
                    "nome": "Jillian Drive",
                    "lat": "-87.531133",
                    "long": "-118.261583",
                    "codigo_postal": "6190-268",
                    "cidade": "Bartellview"
                }
            },
            "estafeta": [
                {
                    "id": 1,
                    "nome": "Lottie Hahn DDS",
                    "email": "rollin87@yahoo.com",
                    "telefone": "718-521-3209",
                    "data_nascimento": "1977-06-04",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 9,
                        "user_id": 1
                    }
                }
            ],
            "href": {
                "cliente": "http:\/\/localhost\/api\/clientes\/9",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/5"
            }
        },
        {
            "id": 14,
            "numero_encomenda": 388,
            "data_estimada": "2012-02-04 11:22:37",
            "data_de_entrega": "2011-06-30 00:28:14",
            "data_de_levantamento": "1984-03-14 02:27:27",
            "data_de_entrada_no_sistema": "1998-01-01 06:16:54",
            "data_de_entrega_pretendida": "1992-11-15 04:40:00",
            "tempo_limite_de_levantamento": "2004-10-29 01:39:34",
            "estado_encomenda": 0,
            "temperatura": "8.9",
            "observacoes": "Duchess, digging her sharp little chin into Alice's shoulder as she spoke, but no result seemed to think about stopping herself before she had not got into it), and sometimes shorter, until she made.",
            "tamanho": "M",
            "localizacao": "Sigmund Plains",
            "cliente_id": 6,
            "cacifo_id": 20,
            "cliente": {
                "id": 6,
                "nome": "Jarred Grimes",
                "email": "ashly.funk@hotmail.com",
                "telefone": "1-270-309-3280 x1950"
            },
            "cacifo": {
                "id": 20,
                "numero": 197,
                "temperatura": "10.7",
                "codigo": "5lRkyW",
                "tamanho_id": 1,
                "estado_id": 1,
                "localizacao_id": 2,
                "tamanho": {
                    "id": 1,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 2,
                    "nome": "Clemmie Village",
                    "lat": "-77.233379",
                    "long": "59.094078",
                    "codigo_postal": "7185-244",
                    "cidade": "Feilborough"
                }
            },
            "estafeta": [
                {
                    "id": 1,
                    "nome": "Lottie Hahn DDS",
                    "email": "rollin87@yahoo.com",
                    "telefone": "718-521-3209",
                    "data_nascimento": "1977-06-04",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 14,
                        "user_id": 1
                    }
                }
            ],
            "href": {
                "cliente": "http:\/\/localhost\/api\/clientes\/6",
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


