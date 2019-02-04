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
            "numero": 289,
            "temperatura": "8.8",
            "tamanho_id": 1,
            "estado_id": 2,
            "localizacao_id": 4,
            "tamanho": {
                "id": 1,
                "tamanho": "M"
            },
            "estado": {
                "id": 2,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 4,
                "nome": "Shad Trafficway",
                "lat": "-37.032013",
                "long": "55.974499",
                "codigo_postal": "0431-403",
                "cidade": "Kossland"
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
            "numero": 47,
            "temperatura": "7.8",
            "tamanho_id": 1,
            "estado_id": 2,
            "localizacao_id": 2,
            "tamanho": {
                "id": 1,
                "tamanho": "M"
            },
            "estado": {
                "id": 2,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 2,
                "nome": "Frederique Fort",
                "lat": "5.807627",
                "long": "30.412405",
                "codigo_postal": "4894-902",
                "cidade": "Jaskolskiville"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/2",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/1",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/2"
            }
        },
        {
            "id": 3,
            "numero": 191,
            "temperatura": "10",
            "tamanho_id": 2,
            "estado_id": 2,
            "localizacao_id": 3,
            "tamanho": {
                "id": 2,
                "tamanho": "L"
            },
            "estado": {
                "id": 2,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 3,
                "nome": "O'Kon Fords",
                "lat": "87.672979",
                "long": "120.782568",
                "codigo_postal": "6541-952",
                "cidade": "Vivienchester"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/3",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/2",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/3"
            }
        },
        {
            "id": 4,
            "numero": 388,
            "temperatura": "6.2",
            "tamanho_id": 3,
            "estado_id": 2,
            "localizacao_id": 4,
            "tamanho": {
                "id": 3,
                "tamanho": "XL"
            },
            "estado": {
                "id": 2,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 4,
                "nome": "Shad Trafficway",
                "lat": "-37.032013",
                "long": "55.974499",
                "codigo_postal": "0431-403",
                "cidade": "Kossland"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/4",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/3",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/4"
            }
        },
        {
            "id": 5,
            "numero": 364,
            "temperatura": "0.1",
            "tamanho_id": 2,
            "estado_id": 1,
            "localizacao_id": 1,
            "tamanho": {
                "id": 2,
                "tamanho": "L"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 1,
                "nome": "Rosenbaum Mountain",
                "lat": "-81.846382",
                "long": "-20.792293",
                "codigo_postal": "9903-796",
                "cidade": "Port Marielle"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/5",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/2",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/1"
            }
        },
        {
            "id": 6,
            "numero": 250,
            "temperatura": "2.3",
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
                "nome": "Keeling Crescent",
                "lat": "61.543925",
                "long": "-154.533423",
                "codigo_postal": "3508-185",
                "cidade": "Destineemouth"
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
            "numero": 223,
            "temperatura": "10.1",
            "tamanho_id": 2,
            "estado_id": 2,
            "localizacao_id": 3,
            "tamanho": {
                "id": 2,
                "tamanho": "L"
            },
            "estado": {
                "id": 2,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 3,
                "nome": "O'Kon Fords",
                "lat": "87.672979",
                "long": "120.782568",
                "codigo_postal": "6541-952",
                "cidade": "Vivienchester"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/7",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/2",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/3"
            }
        },
        {
            "id": 8,
            "numero": 152,
            "temperatura": "12",
            "tamanho_id": 1,
            "estado_id": 2,
            "localizacao_id": 2,
            "tamanho": {
                "id": 1,
                "tamanho": "M"
            },
            "estado": {
                "id": 2,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 2,
                "nome": "Frederique Fort",
                "lat": "5.807627",
                "long": "30.412405",
                "codigo_postal": "4894-902",
                "cidade": "Jaskolskiville"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/8",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/1",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/2"
            }
        },
        {
            "id": 9,
            "numero": 339,
            "temperatura": "7.3",
            "tamanho_id": 3,
            "estado_id": 2,
            "localizacao_id": 1,
            "tamanho": {
                "id": 3,
                "tamanho": "XL"
            },
            "estado": {
                "id": 2,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 1,
                "nome": "Rosenbaum Mountain",
                "lat": "-81.846382",
                "long": "-20.792293",
                "codigo_postal": "9903-796",
                "cidade": "Port Marielle"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/9",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/3",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/1"
            }
        },
        {
            "id": 10,
            "numero": 198,
            "temperatura": "3.6",
            "tamanho_id": 2,
            "estado_id": 2,
            "localizacao_id": 3,
            "tamanho": {
                "id": 2,
                "tamanho": "L"
            },
            "estado": {
                "id": 2,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 3,
                "nome": "O'Kon Fords",
                "lat": "87.672979",
                "long": "120.782568",
                "codigo_postal": "6541-952",
                "cidade": "Vivienchester"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/10",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/2",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/3"
            }
        },
        {
            "id": 11,
            "numero": 377,
            "temperatura": "0.7",
            "tamanho_id": 4,
            "estado_id": 2,
            "localizacao_id": 3,
            "tamanho": {
                "id": 4,
                "tamanho": "M"
            },
            "estado": {
                "id": 2,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 3,
                "nome": "O'Kon Fords",
                "lat": "87.672979",
                "long": "120.782568",
                "codigo_postal": "6541-952",
                "cidade": "Vivienchester"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/11",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/4",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/3"
            }
        },
        {
            "id": 12,
            "numero": 404,
            "temperatura": "5.2",
            "tamanho_id": 1,
            "estado_id": 2,
            "localizacao_id": 2,
            "tamanho": {
                "id": 1,
                "tamanho": "M"
            },
            "estado": {
                "id": 2,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 2,
                "nome": "Frederique Fort",
                "lat": "5.807627",
                "long": "30.412405",
                "codigo_postal": "4894-902",
                "cidade": "Jaskolskiville"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/12",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/1",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/2"
            }
        },
        {
            "id": 13,
            "numero": 496,
            "temperatura": "8.9",
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
                "nome": "Shad Trafficway",
                "lat": "-37.032013",
                "long": "55.974499",
                "codigo_postal": "0431-403",
                "cidade": "Kossland"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/13",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/4",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/4"
            }
        },
        {
            "id": 14,
            "numero": 231,
            "temperatura": "10.9",
            "tamanho_id": 1,
            "estado_id": 1,
            "localizacao_id": 4,
            "tamanho": {
                "id": 1,
                "tamanho": "M"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 4,
                "nome": "Shad Trafficway",
                "lat": "-37.032013",
                "long": "55.974499",
                "codigo_postal": "0431-403",
                "cidade": "Kossland"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/14",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/1",
                "estado": "http:\/\/localhost\/api\/estados\/1",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/4"
            }
        },
        {
            "id": 15,
            "numero": 413,
            "temperatura": "0.7",
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
                "nome": "Keeling Crescent",
                "lat": "61.543925",
                "long": "-154.533423",
                "codigo_postal": "3508-185",
                "cidade": "Destineemouth"
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
            "numero": 415,
            "temperatura": "0.7",
            "tamanho_id": 2,
            "estado_id": 2,
            "localizacao_id": 2,
            "tamanho": {
                "id": 2,
                "tamanho": "L"
            },
            "estado": {
                "id": 2,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 2,
                "nome": "Frederique Fort",
                "lat": "5.807627",
                "long": "30.412405",
                "codigo_postal": "4894-902",
                "cidade": "Jaskolskiville"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/16",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/2",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/2"
            }
        },
        {
            "id": 17,
            "numero": 349,
            "temperatura": "7.6",
            "tamanho_id": 1,
            "estado_id": 2,
            "localizacao_id": 1,
            "tamanho": {
                "id": 1,
                "tamanho": "M"
            },
            "estado": {
                "id": 2,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 1,
                "nome": "Rosenbaum Mountain",
                "lat": "-81.846382",
                "long": "-20.792293",
                "codigo_postal": "9903-796",
                "cidade": "Port Marielle"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/17",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/1",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/1"
            }
        },
        {
            "id": 18,
            "numero": 88,
            "temperatura": "5.9",
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
                "nome": "Rosenbaum Mountain",
                "lat": "-81.846382",
                "long": "-20.792293",
                "codigo_postal": "9903-796",
                "cidade": "Port Marielle"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/18",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/4",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/1"
            }
        },
        {
            "id": 19,
            "numero": 154,
            "temperatura": "5.7",
            "tamanho_id": 1,
            "estado_id": 2,
            "localizacao_id": 4,
            "tamanho": {
                "id": 1,
                "tamanho": "M"
            },
            "estado": {
                "id": 2,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 4,
                "nome": "Shad Trafficway",
                "lat": "-37.032013",
                "long": "55.974499",
                "codigo_postal": "0431-403",
                "cidade": "Kossland"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/19",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/1",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/4"
            }
        },
        {
            "id": 20,
            "numero": 172,
            "temperatura": "4.7",
            "tamanho_id": 1,
            "estado_id": 2,
            "localizacao_id": 3,
            "tamanho": {
                "id": 1,
                "tamanho": "M"
            },
            "estado": {
                "id": 2,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 3,
                "nome": "O'Kon Fords",
                "lat": "87.672979",
                "long": "120.782568",
                "codigo_postal": "6541-952",
                "cidade": "Vivienchester"
            },
            "href": {
                "link": "http:\/\/localhost\/api\/cacifos\/20",
                "tamanho": "http:\/\/localhost\/api\/tamanhos\/1",
                "estado": "http:\/\/localhost\/api\/estados\/2",
                "localizacao": "http:\/\/localhost\/api\/localizacaos\/3"
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
curl -X POST "http://localhost/api/cacifos"     -d "numero"="3y4pkyrc3GBo6xr1" \
    -d "temperatura"="3hBf6OuyX6mP3rss" \
    -d "codigo"="UqbEYwLFrzQ9n6ve" \
    -d "estado_id"="4EaRBmsoO2944v8S" \
    -d "tamanho_id"="qdrOe3jQq3ZdenfS" \
    -d "localizacao_id"="letxYlAk2ske3PX5" 
```

```javascript
const url = new URL("http://localhost/api/cacifos");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "numero": "3y4pkyrc3GBo6xr1",
    "temperatura": "3hBf6OuyX6mP3rss",
    "codigo": "UqbEYwLFrzQ9n6ve",
    "estado_id": "4EaRBmsoO2944v8S",
    "tamanho_id": "qdrOe3jQq3ZdenfS",
    "localizacao_id": "letxYlAk2ske3PX5",
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
        "numero": 289,
        "temperatura": "8.8",
        "codigo": "np09JHy",
        "tamanho_id": 1,
        "estado_id": 2,
        "localizacao_id": 4,
        "tamanho": {
            "id": 1,
            "tamanho": "M"
        },
        "estado": {
            "id": 2,
            "estado": "Disponivel"
        },
        "localizacao": {
            "id": 4,
            "nome": "Shad Trafficway",
            "lat": "-37.032013",
            "long": "55.974499",
            "codigo_postal": "0431-403",
            "cidade": "Kossland"
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
curl -X PUT "http://localhost/api/cacifos/{cacifo}"     -d "numero"="pMFmu49hq1Bvqcv8" \
    -d "temperatura"="CAZcPHO4HabmqCyv" \
    -d "codigo"="52qNSklkz3tovc6B" \
    -d "estado_id"="S64CA6tmTx2EAmnA" \
    -d "tamanho_id"="AiZbiE2kjqegWtH4" \
    -d "localizacao_id"="C5imt6icN4E2Bt66" 
```

```javascript
const url = new URL("http://localhost/api/cacifos/{cacifo}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "numero": "pMFmu49hq1Bvqcv8",
    "temperatura": "CAZcPHO4HabmqCyv",
    "codigo": "52qNSklkz3tovc6B",
    "estado_id": "S64CA6tmTx2EAmnA",
    "tamanho_id": "AiZbiE2kjqegWtH4",
    "localizacao_id": "C5imt6icN4E2Bt66",
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
            "nome": "Prof. Vincenzo Schimmel I",
            "email": "elouise.hamill@gmail.com",
            "telefone": "+1-629-353-5939",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/1"
            }
        },
        {
            "nome": "Rhiannon Schiller",
            "email": "flossie67@gmail.com",
            "telefone": "+1-610-390-5041",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/2"
            }
        },
        {
            "nome": "Miss Delta Kris",
            "email": "vicky.eichmann@gmail.com",
            "telefone": "1-552-562-7785 x288",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/3"
            }
        },
        {
            "nome": "Osvaldo Barton",
            "email": "dickinson.ryder@hotmail.com",
            "telefone": "956-759-0408",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/4"
            }
        },
        {
            "nome": "Beau Conn MD",
            "email": "alf67@hotmail.com",
            "telefone": "934.294.7933 x03894",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/5"
            }
        },
        {
            "nome": "Brooklyn Kiehn",
            "email": "friesen.heather@hotmail.com",
            "telefone": "+1 (859) 420-9198",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/6"
            }
        },
        {
            "nome": "Eugenia Hills",
            "email": "delphine77@hotmail.com",
            "telefone": "1-727-844-0022 x68544",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/7"
            }
        },
        {
            "nome": "Chaim Christiansen",
            "email": "marisol48@gmail.com",
            "telefone": "+1.257.651.5218",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/8"
            }
        },
        {
            "nome": "Dr. Irma Goodwin",
            "email": "reynold82@gmail.com",
            "telefone": "1-275-344-8777",
            "href": {
                "link": "http:\/\/localhost\/api\/clientes\/9"
            }
        },
        {
            "nome": "Rocio Jacobi",
            "email": "cpadberg@gmail.com",
            "telefone": "1-748-666-6267 x1510",
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
curl -X POST "http://localhost/api/clientes"     -d "nome"="yIWUxRa3jTbYXqRo" \
    -d "email"="iQ9Pmo7QNE4pFlSx" \
    -d "telefone"="tVMYE6ezjAtkmhDM" 
```

```javascript
const url = new URL("http://localhost/api/clientes");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "yIWUxRa3jTbYXqRo",
    "email": "iQ9Pmo7QNE4pFlSx",
    "telefone": "tVMYE6ezjAtkmhDM",
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
        "nome": "Prof. Vincenzo Schimmel I",
        "email": "elouise.hamill@gmail.com",
        "telefone": "+1-629-353-5939"
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
curl -X PUT "http://localhost/api/clientes/{cliente}"     -d "nome"="W2lLyVZ2NyB21Vw1" \
    -d "email"="3JFDQ3mxPgauV5DL" \
    -d "telefone"="uCWcjJedzipsnJKF" 
```

```javascript
const url = new URL("http://localhost/api/clientes/{cliente}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "W2lLyVZ2NyB21Vw1",
    "email": "3JFDQ3mxPgauV5DL",
    "telefone": "uCWcjJedzipsnJKF",
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
            "id": 2,
            "numero_encomenda": 747,
            "data_estimada": "2015-10-27 21:49:38",
            "data_de_entrega": "1982-10-20 12:44:39",
            "data_de_levantamento": "2006-05-10 17:02:48",
            "data_de_entrada_no_sistema": "2008-02-25 16:58:25",
            "data_de_entrega_pretendida": "1999-11-10 02:47:24",
            "tempo_limite_de_levantamento": "1977-01-04 15:12:27",
            "estado_encomenda": 0,
            "temperatura": "2.4",
            "observacoes": "Let this be a great hurry; 'this paper has just been picked up.' 'What's in it?' said the Caterpillar. 'Well, perhaps your feelings may be different,' said Alice; not that she had read several nice.",
            "tamanho": "L",
            "localizacao": "Jaron Plains",
            "cliente_id": 1,
            "cacifo_id": 3,
            "cliente": {
                "id": 1,
                "nome": "Prof. Vincenzo Schimmel I",
                "email": "elouise.hamill@gmail.com",
                "telefone": "+1-629-353-5939"
            },
            "cacifo": {
                "id": 3,
                "numero": 191,
                "temperatura": "10",
                "codigo": "yseJgZs8",
                "tamanho_id": 2,
                "estado_id": 2,
                "localizacao_id": 3,
                "tamanho": {
                    "id": 2,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 3,
                    "nome": "O'Kon Fords",
                    "lat": "87.672979",
                    "long": "120.782568",
                    "codigo_postal": "6541-952",
                    "cidade": "Vivienchester"
                }
            },
            "estafeta": [
                {
                    "id": 8,
                    "nome": "Marlee Schinner",
                    "email": "general.price@yahoo.com",
                    "telefone": "1-724-825-6871 x458",
                    "data_nascimento": "2014-10-12",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 2,
                        "user_id": 8
                    }
                }
            ],
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
            "numero_encomenda": 987,
            "data_estimada": "1974-02-06 15:58:55",
            "data_de_entrega": "2014-01-25 04:00:22",
            "data_de_levantamento": "2010-06-18 13:16:18",
            "data_de_entrada": "2000-02-17 18:28:37",
            "data_de_entrega_pretendida": "2010-08-05 17:45:55",
            "tempolimite_de_levantamento": "2004-12-23 19:06:15",
            "estado_encomenda": 0,
            "temperatura": "0.9",
            "observacoes": "Mouse had changed his mind, and was going on, as she could not remember ever having seen in her life; it was labelled 'ORANGE MARMALADE', but to her that she was beginning to end,' said the Mock.",
            "tamanho": "XL",
            "localizacao": "Elias Wall",
            "cliente": {
                "id": 5,
                "nome": "Beau Conn MD",
                "email": "alf67@hotmail.com",
                "telefone": "934.294.7933 x03894"
            },
            "estafeta": [
                {
                    "id": 1,
                    "nome": "Merl Erdman",
                    "email": "waldo.nienow@gmail.com",
                    "telefone": "+1.531.427.2720",
                    "data_nascimento": "1986-03-08",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 1,
                        "user_id": 1
                    }
                }
            ],
            "cacifo": {
                "id": 5,
                "numero": 364,
                "temperatura": "0.1",
                "codigo": "kr5RfXMl-f",
                "tamanho_id": 2,
                "estado_id": 1,
                "localizacao_id": 1,
                "tamanho": {
                    "id": 2,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 1,
                    "nome": "Rosenbaum Mountain",
                    "lat": "-81.846382",
                    "long": "-20.792293",
                    "codigo_postal": "9903-796",
                    "cidade": "Port Marielle"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/1",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/5",
                "cliente": "http:\/\/localhost\/api\/clientes\/5"
            }
        },
        {
            "id": 2,
            "numero_encomenda": 747,
            "data_estimada": "2015-10-27 21:49:38",
            "data_de_entrega": "1982-10-20 12:44:39",
            "data_de_levantamento": "2006-05-10 17:02:48",
            "data_de_entrada": "2008-02-25 16:58:25",
            "data_de_entrega_pretendida": "1999-11-10 02:47:24",
            "tempolimite_de_levantamento": "1977-01-04 15:12:27",
            "estado_encomenda": 0,
            "temperatura": "2.4",
            "observacoes": "Let this be a great hurry; 'this paper has just been picked up.' 'What's in it?' said the Caterpillar. 'Well, perhaps your feelings may be different,' said Alice; not that she had read several nice.",
            "tamanho": "L",
            "localizacao": "Jaron Plains",
            "cliente": {
                "id": 1,
                "nome": "Prof. Vincenzo Schimmel I",
                "email": "elouise.hamill@gmail.com",
                "telefone": "+1-629-353-5939"
            },
            "estafeta": [
                {
                    "id": 8,
                    "nome": "Marlee Schinner",
                    "email": "general.price@yahoo.com",
                    "telefone": "1-724-825-6871 x458",
                    "data_nascimento": "2014-10-12",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 2,
                        "user_id": 8
                    }
                }
            ],
            "cacifo": {
                "id": 3,
                "numero": 191,
                "temperatura": "10",
                "codigo": "yseJgZs8",
                "tamanho_id": 2,
                "estado_id": 2,
                "localizacao_id": 3,
                "tamanho": {
                    "id": 2,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 3,
                    "nome": "O'Kon Fords",
                    "lat": "87.672979",
                    "long": "120.782568",
                    "codigo_postal": "6541-952",
                    "cidade": "Vivienchester"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/2",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/3",
                "cliente": "http:\/\/localhost\/api\/clientes\/1"
            }
        },
        {
            "id": 3,
            "numero_encomenda": 528,
            "data_estimada": "1984-06-17 21:11:24",
            "data_de_entrega": "1979-02-16 07:42:02",
            "data_de_levantamento": "1992-07-29 07:37:41",
            "data_de_entrada": "1970-11-22 00:05:27",
            "data_de_entrega_pretendida": "2018-09-08 04:31:58",
            "tempolimite_de_levantamento": "2008-12-02 04:51:38",
            "estado_encomenda": 1,
            "temperatura": "5.9",
            "observacoes": "It was high time you were never even spoke to Time!' 'Perhaps not,' Alice cautiously replied: 'but I know is, it would be quite absurd for her to speak first, 'why your cat grins like that?' 'It's a.",
            "tamanho": "XL",
            "localizacao": "Moriah Plains",
            "cliente": {
                "id": 10,
                "nome": "Rocio Jacobi",
                "email": "cpadberg@gmail.com",
                "telefone": "1-748-666-6267 x1510"
            },
            "estafeta": [
                {
                    "id": 6,
                    "nome": "Dr. Kristin Wehner V",
                    "email": "ltorphy@hotmail.com",
                    "telefone": "+18672096924",
                    "data_nascimento": "2001-11-20",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 3,
                        "user_id": 6
                    }
                }
            ],
            "cacifo": {
                "id": 2,
                "numero": 47,
                "temperatura": "7.8",
                "codigo": "44alPhEe4",
                "tamanho_id": 1,
                "estado_id": 2,
                "localizacao_id": 2,
                "tamanho": {
                    "id": 1,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 2,
                    "nome": "Frederique Fort",
                    "lat": "5.807627",
                    "long": "30.412405",
                    "codigo_postal": "4894-902",
                    "cidade": "Jaskolskiville"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/3",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/2",
                "cliente": "http:\/\/localhost\/api\/clientes\/10"
            }
        },
        {
            "id": 4,
            "numero_encomenda": 831,
            "data_estimada": "1976-03-09 18:39:45",
            "data_de_entrega": "1983-04-08 11:31:32",
            "data_de_levantamento": "2005-06-05 15:39:09",
            "data_de_entrada": "1990-06-27 02:09:41",
            "data_de_entrega_pretendida": "1995-12-10 00:02:36",
            "tempolimite_de_levantamento": "1981-06-25 11:52:41",
            "estado_encomenda": 1,
            "temperatura": "5.3",
            "observacoes": "I shall be punished for it flashed across her mind that she knew that it was the only difficulty was, that you never had to ask the question?' said the Pigeon in a moment like a Jack-in-the-box, and.",
            "tamanho": "S",
            "localizacao": "Kennedy Circle",
            "cliente": {
                "id": 8,
                "nome": "Chaim Christiansen",
                "email": "marisol48@gmail.com",
                "telefone": "+1.257.651.5218"
            },
            "estafeta": [
                {
                    "id": 6,
                    "nome": "Dr. Kristin Wehner V",
                    "email": "ltorphy@hotmail.com",
                    "telefone": "+18672096924",
                    "data_nascimento": "2001-11-20",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 4,
                        "user_id": 6
                    }
                }
            ],
            "cacifo": {
                "id": 17,
                "numero": 349,
                "temperatura": "7.6",
                "codigo": "IIW965OGNK",
                "tamanho_id": 1,
                "estado_id": 2,
                "localizacao_id": 1,
                "tamanho": {
                    "id": 1,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 1,
                    "nome": "Rosenbaum Mountain",
                    "lat": "-81.846382",
                    "long": "-20.792293",
                    "codigo_postal": "9903-796",
                    "cidade": "Port Marielle"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/4",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/17",
                "cliente": "http:\/\/localhost\/api\/clientes\/8"
            }
        },
        {
            "id": 5,
            "numero_encomenda": 468,
            "data_estimada": "2011-04-17 19:36:32",
            "data_de_entrega": "1974-06-19 21:01:19",
            "data_de_levantamento": "1985-05-08 08:41:04",
            "data_de_entrada": "2009-12-03 05:12:40",
            "data_de_entrega_pretendida": "1993-04-13 21:36:51",
            "tempolimite_de_levantamento": "2003-06-24 10:10:07",
            "estado_encomenda": 1,
            "temperatura": "8.3",
            "observacoes": "Alice. 'Then you should say \"With what porpoise?\"' 'Don't you mean \"purpose\"?' said Alice. 'I'm a--I'm a--' 'Well! WHAT are you?' And then a row of lodging houses, and behind it when she had tired.",
            "tamanho": "XL",
            "localizacao": "Mateo Trafficway",
            "cliente": {
                "id": 2,
                "nome": "Rhiannon Schiller",
                "email": "flossie67@gmail.com",
                "telefone": "+1-610-390-5041"
            },
            "estafeta": [
                {
                    "id": 1,
                    "nome": "Merl Erdman",
                    "email": "waldo.nienow@gmail.com",
                    "telefone": "+1.531.427.2720",
                    "data_nascimento": "1986-03-08",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 5,
                        "user_id": 1
                    }
                }
            ],
            "cacifo": {
                "id": 5,
                "numero": 364,
                "temperatura": "0.1",
                "codigo": "kr5RfXMl-f",
                "tamanho_id": 2,
                "estado_id": 1,
                "localizacao_id": 1,
                "tamanho": {
                    "id": 2,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 1,
                    "nome": "Rosenbaum Mountain",
                    "lat": "-81.846382",
                    "long": "-20.792293",
                    "codigo_postal": "9903-796",
                    "cidade": "Port Marielle"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/5",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/5",
                "cliente": "http:\/\/localhost\/api\/clientes\/2"
            }
        },
        {
            "id": 6,
            "numero_encomenda": 668,
            "data_estimada": "2008-03-27 21:40:57",
            "data_de_entrega": "1970-10-29 22:04:24",
            "data_de_levantamento": "1993-07-29 09:55:47",
            "data_de_entrada": "1972-07-22 06:50:39",
            "data_de_entrega_pretendida": "2004-04-16 08:12:03",
            "tempolimite_de_levantamento": "2004-07-19 00:21:47",
            "estado_encomenda": 0,
            "temperatura": "8.8",
            "observacoes": "I give you fair warning,' shouted the Gryphon, 'she wants for to know your history, you know,' the Mock Turtle: 'nine the next, and so on; then, when you've cleared all the jurymen on to himself as.",
            "tamanho": "M",
            "localizacao": "Bailee Spring",
            "cliente": {
                "id": 9,
                "nome": "Dr. Irma Goodwin",
                "email": "reynold82@gmail.com",
                "telefone": "1-275-344-8777"
            },
            "estafeta": [
                {
                    "id": 2,
                    "nome": "Dr. Presley Jast II",
                    "email": "carol87@hotmail.com",
                    "telefone": "(432) 378-1803 x81844",
                    "data_nascimento": "2017-03-17",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 6,
                        "user_id": 2
                    }
                }
            ],
            "cacifo": {
                "id": 15,
                "numero": 413,
                "temperatura": "0.7",
                "codigo": "hNLEtUMd_x",
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
                    "nome": "Keeling Crescent",
                    "lat": "61.543925",
                    "long": "-154.533423",
                    "codigo_postal": "3508-185",
                    "cidade": "Destineemouth"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/6",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/15",
                "cliente": "http:\/\/localhost\/api\/clientes\/9"
            }
        },
        {
            "id": 7,
            "numero_encomenda": 236,
            "data_estimada": "1998-08-15 04:47:56",
            "data_de_entrega": "1975-05-16 05:11:45",
            "data_de_levantamento": "1993-05-06 18:37:15",
            "data_de_entrada": "1978-08-11 03:55:07",
            "data_de_entrega_pretendida": "1976-02-28 23:56:53",
            "tempolimite_de_levantamento": "1982-04-11 10:09:22",
            "estado_encomenda": 0,
            "temperatura": "9",
            "observacoes": "Mock Turtle in the back. However, it was only sobbing,' she thought, 'it's sure to make it stop. 'Well, I'd hardly finished the guinea-pigs!' thought Alice. 'I don't know the meaning of half those.",
            "tamanho": "S",
            "localizacao": "Bethany Radial",
            "cliente": {
                "id": 5,
                "nome": "Beau Conn MD",
                "email": "alf67@hotmail.com",
                "telefone": "934.294.7933 x03894"
            },
            "estafeta": [
                {
                    "id": 1,
                    "nome": "Merl Erdman",
                    "email": "waldo.nienow@gmail.com",
                    "telefone": "+1.531.427.2720",
                    "data_nascimento": "1986-03-08",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 7,
                        "user_id": 1
                    }
                }
            ],
            "cacifo": {
                "id": 3,
                "numero": 191,
                "temperatura": "10",
                "codigo": "yseJgZs8",
                "tamanho_id": 2,
                "estado_id": 2,
                "localizacao_id": 3,
                "tamanho": {
                    "id": 2,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 3,
                    "nome": "O'Kon Fords",
                    "lat": "87.672979",
                    "long": "120.782568",
                    "codigo_postal": "6541-952",
                    "cidade": "Vivienchester"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/7",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/3",
                "cliente": "http:\/\/localhost\/api\/clientes\/5"
            }
        },
        {
            "id": 8,
            "numero_encomenda": 996,
            "data_estimada": "1972-09-12 18:47:08",
            "data_de_entrega": "2017-11-15 01:30:11",
            "data_de_levantamento": "2006-02-05 03:17:00",
            "data_de_entrada": "2009-08-03 00:14:51",
            "data_de_entrega_pretendida": "1971-01-05 23:52:55",
            "tempolimite_de_levantamento": "2018-05-27 01:47:42",
            "estado_encomenda": 1,
            "temperatura": "3.9",
            "observacoes": "I suppose?' 'Yes,' said Alice desperately: 'he's perfectly idiotic!' And she began fancying the sort of idea that they would die. 'The trial cannot proceed,' said the King, 'that saves a world of.",
            "tamanho": "M",
            "localizacao": "Strosin Meadow",
            "cliente": {
                "id": 5,
                "nome": "Beau Conn MD",
                "email": "alf67@hotmail.com",
                "telefone": "934.294.7933 x03894"
            },
            "estafeta": [
                {
                    "id": 1,
                    "nome": "Merl Erdman",
                    "email": "waldo.nienow@gmail.com",
                    "telefone": "+1.531.427.2720",
                    "data_nascimento": "1986-03-08",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 8,
                        "user_id": 1
                    }
                }
            ],
            "cacifo": {
                "id": 8,
                "numero": 152,
                "temperatura": "12",
                "codigo": "bPraZ6",
                "tamanho_id": 1,
                "estado_id": 2,
                "localizacao_id": 2,
                "tamanho": {
                    "id": 1,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 2,
                    "nome": "Frederique Fort",
                    "lat": "5.807627",
                    "long": "30.412405",
                    "codigo_postal": "4894-902",
                    "cidade": "Jaskolskiville"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/8",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/8",
                "cliente": "http:\/\/localhost\/api\/clientes\/5"
            }
        },
        {
            "id": 9,
            "numero_encomenda": 894,
            "data_estimada": "1972-10-05 13:40:32",
            "data_de_entrega": "1999-05-19 09:04:21",
            "data_de_levantamento": "2003-07-05 14:35:41",
            "data_de_entrada": "1995-03-28 15:48:28",
            "data_de_entrega_pretendida": "1976-04-14 09:41:54",
            "tempolimite_de_levantamento": "2016-12-25 05:51:05",
            "estado_encomenda": 0,
            "temperatura": "11.4",
            "observacoes": "The Dormouse had closed its eyes were nearly out of sight, he said to herself, 'because of his pocket, and pulled out a race-course, in a melancholy air, and, after glaring at her for a baby.",
            "tamanho": "L",
            "localizacao": "Hamill Squares",
            "cliente": {
                "id": 5,
                "nome": "Beau Conn MD",
                "email": "alf67@hotmail.com",
                "telefone": "934.294.7933 x03894"
            },
            "estafeta": [
                {
                    "id": 7,
                    "nome": "Barrett Glover Sr.",
                    "email": "abbott.ernie@gmail.com",
                    "telefone": "+17065457508",
                    "data_nascimento": "1984-05-24",
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
                "id": 20,
                "numero": 172,
                "temperatura": "4.7",
                "codigo": "WK_ocGlZUr",
                "tamanho_id": 1,
                "estado_id": 2,
                "localizacao_id": 3,
                "tamanho": {
                    "id": 1,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 3,
                    "nome": "O'Kon Fords",
                    "lat": "87.672979",
                    "long": "120.782568",
                    "codigo_postal": "6541-952",
                    "cidade": "Vivienchester"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/9",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/20",
                "cliente": "http:\/\/localhost\/api\/clientes\/5"
            }
        },
        {
            "id": 10,
            "numero_encomenda": 657,
            "data_estimada": "2018-10-18 15:45:36",
            "data_de_entrega": "1992-03-28 11:02:54",
            "data_de_levantamento": "2018-06-06 02:26:57",
            "data_de_entrada": "2018-01-21 02:48:05",
            "data_de_entrega_pretendida": "2013-12-14 19:03:40",
            "tempolimite_de_levantamento": "2002-02-24 12:44:13",
            "estado_encomenda": 0,
            "temperatura": "3.6",
            "observacoes": "I'm somebody else\"--but, oh dear!' cried Alice in a tone of this rope--Will the roof bear?--Mind that loose slate--Oh, it's coming down! Heads below!' (a loud crash)--'Now, who did that?--It was.",
            "tamanho": "XL",
            "localizacao": "Colby Road",
            "cliente": {
                "id": 10,
                "nome": "Rocio Jacobi",
                "email": "cpadberg@gmail.com",
                "telefone": "1-748-666-6267 x1510"
            },
            "estafeta": [
                {
                    "id": 5,
                    "nome": "Faustino Ziemann",
                    "email": "rocky66@gmail.com",
                    "telefone": "860.887.4034 x756",
                    "data_nascimento": "1994-06-14",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 10,
                        "user_id": 5
                    }
                }
            ],
            "cacifo": {
                "id": 4,
                "numero": 388,
                "temperatura": "6.2",
                "codigo": "U3z-y",
                "tamanho_id": 3,
                "estado_id": 2,
                "localizacao_id": 4,
                "tamanho": {
                    "id": 3,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 4,
                    "nome": "Shad Trafficway",
                    "lat": "-37.032013",
                    "long": "55.974499",
                    "codigo_postal": "0431-403",
                    "cidade": "Kossland"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/10",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/4",
                "cliente": "http:\/\/localhost\/api\/clientes\/10"
            }
        },
        {
            "id": 11,
            "numero_encomenda": 988,
            "data_estimada": "2006-04-12 21:33:41",
            "data_de_entrega": "1977-06-19 13:33:43",
            "data_de_levantamento": "2006-12-18 08:24:33",
            "data_de_entrada": "1998-08-12 07:47:23",
            "data_de_entrega_pretendida": "1981-07-24 06:40:15",
            "tempolimite_de_levantamento": "2016-07-01 07:33:08",
            "estado_encomenda": 0,
            "temperatura": "8.7",
            "observacoes": "I'd been the right thing to eat some of YOUR adventures.' 'I could tell you what year it is?' 'Of course not,' said the Gryphon, and all that,' he said in an offended tone, 'was, that the reason so.",
            "tamanho": "L",
            "localizacao": "Nash Overpass",
            "cliente": {
                "id": 8,
                "nome": "Chaim Christiansen",
                "email": "marisol48@gmail.com",
                "telefone": "+1.257.651.5218"
            },
            "estafeta": [
                {
                    "id": 3,
                    "nome": "Kelley Effertz",
                    "email": "gcollins@hotmail.com",
                    "telefone": "+1-756-675-3680",
                    "data_nascimento": "2011-08-18",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 11,
                        "user_id": 3
                    }
                }
            ],
            "cacifo": {
                "id": 16,
                "numero": 415,
                "temperatura": "0.7",
                "codigo": "zrkLATgbe",
                "tamanho_id": 2,
                "estado_id": 2,
                "localizacao_id": 2,
                "tamanho": {
                    "id": 2,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 2,
                    "nome": "Frederique Fort",
                    "lat": "5.807627",
                    "long": "30.412405",
                    "codigo_postal": "4894-902",
                    "cidade": "Jaskolskiville"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/11",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/16",
                "cliente": "http:\/\/localhost\/api\/clientes\/8"
            }
        },
        {
            "id": 12,
            "numero_encomenda": 61,
            "data_estimada": "2003-04-08 21:02:20",
            "data_de_entrega": "2009-08-10 10:11:07",
            "data_de_levantamento": "1972-10-14 21:18:17",
            "data_de_entrada": "1985-08-23 09:06:46",
            "data_de_entrega_pretendida": "1988-11-17 05:32:58",
            "tempolimite_de_levantamento": "1998-09-01 16:55:53",
            "estado_encomenda": 1,
            "temperatura": "1.5",
            "observacoes": "I almost wish I'd gone to see if she were saying lessons, and began smoking again. This time there were no arches left, and all of them bowed low. 'Would you tell me, please, which way it was very.",
            "tamanho": "S",
            "localizacao": "Gislason Plains",
            "cliente": {
                "id": 8,
                "nome": "Chaim Christiansen",
                "email": "marisol48@gmail.com",
                "telefone": "+1.257.651.5218"
            },
            "estafeta": [
                {
                    "id": 8,
                    "nome": "Marlee Schinner",
                    "email": "general.price@yahoo.com",
                    "telefone": "1-724-825-6871 x458",
                    "data_nascimento": "2014-10-12",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 12,
                        "user_id": 8
                    }
                }
            ],
            "cacifo": {
                "id": 5,
                "numero": 364,
                "temperatura": "0.1",
                "codigo": "kr5RfXMl-f",
                "tamanho_id": 2,
                "estado_id": 1,
                "localizacao_id": 1,
                "tamanho": {
                    "id": 2,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 1,
                    "nome": "Rosenbaum Mountain",
                    "lat": "-81.846382",
                    "long": "-20.792293",
                    "codigo_postal": "9903-796",
                    "cidade": "Port Marielle"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/12",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/5",
                "cliente": "http:\/\/localhost\/api\/clientes\/8"
            }
        },
        {
            "id": 13,
            "numero_encomenda": 81,
            "data_estimada": "2011-03-27 02:02:19",
            "data_de_entrega": "1995-12-19 15:51:58",
            "data_de_levantamento": "1984-05-23 22:18:50",
            "data_de_entrada": "1987-04-20 01:09:24",
            "data_de_entrega_pretendida": "1994-02-12 22:22:12",
            "tempolimite_de_levantamento": "1980-12-28 10:20:07",
            "estado_encomenda": 0,
            "temperatura": "0.4",
            "observacoes": "Alice, timidly; 'some of the wood to listen. The Fish-Footman began by taking the little golden key was too late to wish that! She went on to her ear. 'You're thinking about something, my dear, YOU.",
            "tamanho": "M",
            "localizacao": "Mohammed Harbor",
            "cliente": {
                "id": 2,
                "nome": "Rhiannon Schiller",
                "email": "flossie67@gmail.com",
                "telefone": "+1-610-390-5041"
            },
            "estafeta": [
                {
                    "id": 3,
                    "nome": "Kelley Effertz",
                    "email": "gcollins@hotmail.com",
                    "telefone": "+1-756-675-3680",
                    "data_nascimento": "2011-08-18",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 13,
                        "user_id": 3
                    }
                }
            ],
            "cacifo": {
                "id": 10,
                "numero": 198,
                "temperatura": "3.6",
                "codigo": "ZuDcQdgIOJ",
                "tamanho_id": 2,
                "estado_id": 2,
                "localizacao_id": 3,
                "tamanho": {
                    "id": 2,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 3,
                    "nome": "O'Kon Fords",
                    "lat": "87.672979",
                    "long": "120.782568",
                    "codigo_postal": "6541-952",
                    "cidade": "Vivienchester"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/13",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/10",
                "cliente": "http:\/\/localhost\/api\/clientes\/2"
            }
        },
        {
            "id": 14,
            "numero_encomenda": 12,
            "data_estimada": "2005-04-29 23:06:34",
            "data_de_entrega": "1987-10-17 12:58:04",
            "data_de_levantamento": "1988-05-29 20:36:52",
            "data_de_entrada": "1985-01-16 18:43:37",
            "data_de_entrega_pretendida": "1980-04-12 21:01:21",
            "tempolimite_de_levantamento": "2018-03-05 17:25:14",
            "estado_encomenda": 1,
            "temperatura": "6.7",
            "observacoes": "The Knave of Hearts, carrying the King's crown on a three-legged stool in the morning, just time to wash the things get used to it!' pleaded poor Alice began telling them her adventures from the.",
            "tamanho": "L",
            "localizacao": "Fadel Key",
            "cliente": {
                "id": 2,
                "nome": "Rhiannon Schiller",
                "email": "flossie67@gmail.com",
                "telefone": "+1-610-390-5041"
            },
            "estafeta": [
                {
                    "id": 6,
                    "nome": "Dr. Kristin Wehner V",
                    "email": "ltorphy@hotmail.com",
                    "telefone": "+18672096924",
                    "data_nascimento": "2001-11-20",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 14,
                        "user_id": 6
                    }
                }
            ],
            "cacifo": {
                "id": 11,
                "numero": 377,
                "temperatura": "0.7",
                "codigo": "YFfvNr7",
                "tamanho_id": 4,
                "estado_id": 2,
                "localizacao_id": 3,
                "tamanho": {
                    "id": 4,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 3,
                    "nome": "O'Kon Fords",
                    "lat": "87.672979",
                    "long": "120.782568",
                    "codigo_postal": "6541-952",
                    "cidade": "Vivienchester"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/14",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/11",
                "cliente": "http:\/\/localhost\/api\/clientes\/2"
            }
        },
        {
            "id": 15,
            "numero_encomenda": 287,
            "data_estimada": "1996-04-01 04:21:32",
            "data_de_entrega": "2017-10-30 02:35:39",
            "data_de_levantamento": "1990-01-16 07:11:41",
            "data_de_entrada": "2016-11-16 07:46:51",
            "data_de_entrega_pretendida": "2000-03-01 14:22:34",
            "tempolimite_de_levantamento": "1976-03-28 18:38:14",
            "estado_encomenda": 0,
            "temperatura": "8.7",
            "observacoes": "Majesty,' said the King: 'leave out that she was coming back to finish his story. CHAPTER IV. The Rabbit started violently, dropped the white kid gloves in one hand and a large crowd collected round.",
            "tamanho": "S",
            "localizacao": "Mandy Spur",
            "cliente": {
                "id": 8,
                "nome": "Chaim Christiansen",
                "email": "marisol48@gmail.com",
                "telefone": "+1.257.651.5218"
            },
            "estafeta": [
                {
                    "id": 7,
                    "nome": "Barrett Glover Sr.",
                    "email": "abbott.ernie@gmail.com",
                    "telefone": "+17065457508",
                    "data_nascimento": "1984-05-24",
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
                "id": 8,
                "numero": 152,
                "temperatura": "12",
                "codigo": "bPraZ6",
                "tamanho_id": 1,
                "estado_id": 2,
                "localizacao_id": 2,
                "tamanho": {
                    "id": 1,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 2,
                    "nome": "Frederique Fort",
                    "lat": "5.807627",
                    "long": "30.412405",
                    "codigo_postal": "4894-902",
                    "cidade": "Jaskolskiville"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/15",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/8",
                "cliente": "http:\/\/localhost\/api\/clientes\/8"
            }
        },
        {
            "id": 16,
            "numero_encomenda": 371,
            "data_estimada": "2011-04-08 17:45:14",
            "data_de_entrega": "1986-01-01 09:54:01",
            "data_de_levantamento": "2003-05-23 23:46:53",
            "data_de_entrada": "1996-08-12 01:13:26",
            "data_de_entrega_pretendida": "2010-07-02 17:40:24",
            "tempolimite_de_levantamento": "1978-06-09 13:06:46",
            "estado_encomenda": 1,
            "temperatura": "0.4",
            "observacoes": "Dormouse sulkily remarked, 'If you didn't like cats.' 'Not like cats!' cried the Mouse, frowning, but very politely: 'Did you say it.' 'That's nothing to what I should understand that better,' Alice.",
            "tamanho": "L",
            "localizacao": "Gerda Radial",
            "cliente": {
                "id": 10,
                "nome": "Rocio Jacobi",
                "email": "cpadberg@gmail.com",
                "telefone": "1-748-666-6267 x1510"
            },
            "estafeta": [
                {
                    "id": 5,
                    "nome": "Faustino Ziemann",
                    "email": "rocky66@gmail.com",
                    "telefone": "860.887.4034 x756",
                    "data_nascimento": "1994-06-14",
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
                "id": 19,
                "numero": 154,
                "temperatura": "5.7",
                "codigo": "fiLUhojy",
                "tamanho_id": 1,
                "estado_id": 2,
                "localizacao_id": 4,
                "tamanho": {
                    "id": 1,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 4,
                    "nome": "Shad Trafficway",
                    "lat": "-37.032013",
                    "long": "55.974499",
                    "codigo_postal": "0431-403",
                    "cidade": "Kossland"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/16",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/19",
                "cliente": "http:\/\/localhost\/api\/clientes\/10"
            }
        },
        {
            "id": 17,
            "numero_encomenda": 514,
            "data_estimada": "1978-07-24 08:36:50",
            "data_de_entrega": "2001-02-04 03:01:39",
            "data_de_levantamento": "1985-03-06 23:34:09",
            "data_de_entrada": "2005-05-30 13:30:55",
            "data_de_entrega_pretendida": "1996-12-26 08:20:55",
            "tempolimite_de_levantamento": "1973-03-20 12:42:47",
            "estado_encomenda": 1,
            "temperatura": "4.2",
            "observacoes": "WHAT things?' said the Cat, 'a dog's not mad. You grant that?' 'I suppose so,' said Alice. 'Anything you like,' said the Caterpillar. This was not quite know what to do with this creature when I got.",
            "tamanho": "L",
            "localizacao": "Dickens Overpass",
            "cliente": {
                "id": 7,
                "nome": "Eugenia Hills",
                "email": "delphine77@hotmail.com",
                "telefone": "1-727-844-0022 x68544"
            },
            "estafeta": [
                {
                    "id": 7,
                    "nome": "Barrett Glover Sr.",
                    "email": "abbott.ernie@gmail.com",
                    "telefone": "+17065457508",
                    "data_nascimento": "1984-05-24",
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
                "id": 10,
                "numero": 198,
                "temperatura": "3.6",
                "codigo": "ZuDcQdgIOJ",
                "tamanho_id": 2,
                "estado_id": 2,
                "localizacao_id": 3,
                "tamanho": {
                    "id": 2,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 3,
                    "nome": "O'Kon Fords",
                    "lat": "87.672979",
                    "long": "120.782568",
                    "codigo_postal": "6541-952",
                    "cidade": "Vivienchester"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/17",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/10",
                "cliente": "http:\/\/localhost\/api\/clientes\/7"
            }
        },
        {
            "id": 18,
            "numero_encomenda": 302,
            "data_estimada": "1993-10-27 12:43:45",
            "data_de_entrega": "1995-06-03 00:35:02",
            "data_de_levantamento": "1974-09-19 02:11:05",
            "data_de_entrada": "2004-05-02 08:14:39",
            "data_de_entrega_pretendida": "2018-02-14 09:02:15",
            "tempolimite_de_levantamento": "1979-05-12 06:50:09",
            "estado_encomenda": 0,
            "temperatura": "8.7",
            "observacoes": "Heads below!' (a loud crash)--'Now, who did that?--It was Bill, I fancy--Who's to go down the chimney, and said nothing. 'Perhaps it doesn't mind.' The table was a paper label, with the lobsters and.",
            "tamanho": "S",
            "localizacao": "Imani Gateway",
            "cliente": {
                "id": 2,
                "nome": "Rhiannon Schiller",
                "email": "flossie67@gmail.com",
                "telefone": "+1-610-390-5041"
            },
            "estafeta": [
                {
                    "id": 6,
                    "nome": "Dr. Kristin Wehner V",
                    "email": "ltorphy@hotmail.com",
                    "telefone": "+18672096924",
                    "data_nascimento": "2001-11-20",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 18,
                        "user_id": 6
                    }
                }
            ],
            "cacifo": {
                "id": 2,
                "numero": 47,
                "temperatura": "7.8",
                "codigo": "44alPhEe4",
                "tamanho_id": 1,
                "estado_id": 2,
                "localizacao_id": 2,
                "tamanho": {
                    "id": 1,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 2,
                    "nome": "Frederique Fort",
                    "lat": "5.807627",
                    "long": "30.412405",
                    "codigo_postal": "4894-902",
                    "cidade": "Jaskolskiville"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/18",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/2",
                "cliente": "http:\/\/localhost\/api\/clientes\/2"
            }
        },
        {
            "id": 19,
            "numero_encomenda": 997,
            "data_estimada": "1998-08-17 16:40:33",
            "data_de_entrega": "1977-08-30 18:42:05",
            "data_de_levantamento": "1983-02-20 07:21:10",
            "data_de_entrada": "1997-02-12 19:28:51",
            "data_de_entrega_pretendida": "2003-10-23 01:37:03",
            "tempolimite_de_levantamento": "1972-02-07 15:07:45",
            "estado_encomenda": 0,
            "temperatura": "11.9",
            "observacoes": "Him, and ourselves, and it. Don't let me help to undo it!' 'I shall sit here,' the Footman went on muttering over the jury-box with the words did not venture to ask his neighbour to tell them.",
            "tamanho": "M",
            "localizacao": "Trace Dam",
            "cliente": {
                "id": 10,
                "nome": "Rocio Jacobi",
                "email": "cpadberg@gmail.com",
                "telefone": "1-748-666-6267 x1510"
            },
            "estafeta": [
                {
                    "id": 5,
                    "nome": "Faustino Ziemann",
                    "email": "rocky66@gmail.com",
                    "telefone": "860.887.4034 x756",
                    "data_nascimento": "1994-06-14",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 19,
                        "user_id": 5
                    }
                }
            ],
            "cacifo": {
                "id": 1,
                "numero": 289,
                "temperatura": "8.8",
                "codigo": "np09JHy",
                "tamanho_id": 1,
                "estado_id": 2,
                "localizacao_id": 4,
                "tamanho": {
                    "id": 1,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 4,
                    "nome": "Shad Trafficway",
                    "lat": "-37.032013",
                    "long": "55.974499",
                    "codigo_postal": "0431-403",
                    "cidade": "Kossland"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/19",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/1",
                "cliente": "http:\/\/localhost\/api\/clientes\/10"
            }
        },
        {
            "id": 20,
            "numero_encomenda": 56,
            "data_estimada": "2012-10-22 18:30:27",
            "data_de_entrega": "2014-05-09 04:24:53",
            "data_de_levantamento": "1990-12-30 12:37:08",
            "data_de_entrada": "2000-05-15 16:07:51",
            "data_de_entrega_pretendida": "2019-01-20 16:04:20",
            "tempolimite_de_levantamento": "1980-08-21 21:57:15",
            "estado_encomenda": 1,
            "temperatura": "2.1",
            "observacoes": "Alice, 'to pretend to be Number One,' said Alice. 'Why, there they lay on the bank, with her head!' Alice glanced rather anxiously at the bottom of a well?' 'Take some more bread-and-butter--' 'But.",
            "tamanho": "S",
            "localizacao": "Frami Mountains",
            "cliente": {
                "id": 8,
                "nome": "Chaim Christiansen",
                "email": "marisol48@gmail.com",
                "telefone": "+1.257.651.5218"
            },
            "estafeta": [
                {
                    "id": 3,
                    "nome": "Kelley Effertz",
                    "email": "gcollins@hotmail.com",
                    "telefone": "+1-756-675-3680",
                    "data_nascimento": "2011-08-18",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 20,
                        "user_id": 3
                    }
                }
            ],
            "cacifo": {
                "id": 12,
                "numero": 404,
                "temperatura": "5.2",
                "codigo": "vS27XkF",
                "tamanho_id": 1,
                "estado_id": 2,
                "localizacao_id": 2,
                "tamanho": {
                    "id": 1,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 2,
                    "nome": "Frederique Fort",
                    "lat": "5.807627",
                    "long": "30.412405",
                    "codigo_postal": "4894-902",
                    "cidade": "Jaskolskiville"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/20",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/12",
                "cliente": "http:\/\/localhost\/api\/clientes\/8"
            }
        },
        {
            "id": 21,
            "numero_encomenda": 411,
            "data_estimada": "1987-08-19 04:06:50",
            "data_de_entrega": "1996-07-02 15:01:16",
            "data_de_levantamento": "2011-09-24 14:53:07",
            "data_de_entrada": "2017-03-27 06:36:02",
            "data_de_entrega_pretendida": "2015-05-05 21:51:16",
            "tempolimite_de_levantamento": "1971-12-14 20:14:48",
            "estado_encomenda": 0,
            "temperatura": "1.6",
            "observacoes": "Edgar Atheling to meet William and offer him the crown. William's conduct at first was in a large flower-pot that stood near the entrance of the conversation. Alice felt dreadfully puzzled. The.",
            "tamanho": "XL",
            "localizacao": "Blanche Plaza",
            "cliente": {
                "id": 7,
                "nome": "Eugenia Hills",
                "email": "delphine77@hotmail.com",
                "telefone": "1-727-844-0022 x68544"
            },
            "estafeta": [
                {
                    "id": 4,
                    "nome": "Dr. Nikko Kutch",
                    "email": "kuhic.elinor@gmail.com",
                    "telefone": "1-489-885-4882 x2433",
                    "data_nascimento": "2007-05-02",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 21,
                        "user_id": 4
                    }
                }
            ],
            "cacifo": {
                "id": 9,
                "numero": 339,
                "temperatura": "7.3",
                "codigo": "WLfixxDSu",
                "tamanho_id": 3,
                "estado_id": 2,
                "localizacao_id": 1,
                "tamanho": {
                    "id": 3,
                    "tamanho": "XL"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 1,
                    "nome": "Rosenbaum Mountain",
                    "lat": "-81.846382",
                    "long": "-20.792293",
                    "codigo_postal": "9903-796",
                    "cidade": "Port Marielle"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/21",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/9",
                "cliente": "http:\/\/localhost\/api\/clientes\/7"
            }
        },
        {
            "id": 22,
            "numero_encomenda": 15,
            "data_estimada": "1991-12-09 03:12:46",
            "data_de_entrega": "1987-09-29 23:00:12",
            "data_de_levantamento": "1971-03-13 12:27:54",
            "data_de_entrada": "1975-07-14 08:25:59",
            "data_de_entrega_pretendida": "2010-09-06 13:05:38",
            "tempolimite_de_levantamento": "2012-08-08 08:58:21",
            "estado_encomenda": 1,
            "temperatura": "10",
            "observacoes": "Bill's got the other--Bill! fetch it here, lad!--Here, put 'em up at the corners: next the ten courtiers; these were all shaped like the largest telescope that ever was! Good-bye, feet!' (for when.",
            "tamanho": "XL",
            "localizacao": "Susana Mountain",
            "cliente": {
                "id": 8,
                "nome": "Chaim Christiansen",
                "email": "marisol48@gmail.com",
                "telefone": "+1.257.651.5218"
            },
            "estafeta": [
                {
                    "id": 7,
                    "nome": "Barrett Glover Sr.",
                    "email": "abbott.ernie@gmail.com",
                    "telefone": "+17065457508",
                    "data_nascimento": "1984-05-24",
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
                "id": 10,
                "numero": 198,
                "temperatura": "3.6",
                "codigo": "ZuDcQdgIOJ",
                "tamanho_id": 2,
                "estado_id": 2,
                "localizacao_id": 3,
                "tamanho": {
                    "id": 2,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 3,
                    "nome": "O'Kon Fords",
                    "lat": "87.672979",
                    "long": "120.782568",
                    "codigo_postal": "6541-952",
                    "cidade": "Vivienchester"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/22",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/10",
                "cliente": "http:\/\/localhost\/api\/clientes\/8"
            }
        },
        {
            "id": 23,
            "numero_encomenda": 444,
            "data_estimada": "1993-07-23 03:16:15",
            "data_de_entrega": "2014-07-12 00:29:03",
            "data_de_levantamento": "1983-11-14 12:47:38",
            "data_de_entrada": "2008-07-04 15:29:18",
            "data_de_entrega_pretendida": "2016-06-03 14:25:25",
            "tempolimite_de_levantamento": "2016-10-07 01:28:34",
            "estado_encomenda": 0,
            "temperatura": "8.4",
            "observacoes": "I will tell you more than nine feet high, and she tried the effect of lying down on the floor, as it spoke. 'As wet as ever,' said Alice loudly. 'The idea of having the sentence first!' 'Hold your.",
            "tamanho": "S",
            "localizacao": "Franecki Parkway",
            "cliente": {
                "id": 2,
                "nome": "Rhiannon Schiller",
                "email": "flossie67@gmail.com",
                "telefone": "+1-610-390-5041"
            },
            "estafeta": [
                {
                    "id": 5,
                    "nome": "Faustino Ziemann",
                    "email": "rocky66@gmail.com",
                    "telefone": "860.887.4034 x756",
                    "data_nascimento": "1994-06-14",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 23,
                        "user_id": 5
                    }
                }
            ],
            "cacifo": {
                "id": 11,
                "numero": 377,
                "temperatura": "0.7",
                "codigo": "YFfvNr7",
                "tamanho_id": 4,
                "estado_id": 2,
                "localizacao_id": 3,
                "tamanho": {
                    "id": 4,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 3,
                    "nome": "O'Kon Fords",
                    "lat": "87.672979",
                    "long": "120.782568",
                    "codigo_postal": "6541-952",
                    "cidade": "Vivienchester"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/23",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/11",
                "cliente": "http:\/\/localhost\/api\/clientes\/2"
            }
        },
        {
            "id": 24,
            "numero_encomenda": 754,
            "data_estimada": "1983-12-09 05:40:05",
            "data_de_entrega": "1998-03-20 14:23:13",
            "data_de_levantamento": "1979-07-29 08:03:59",
            "data_de_entrada": "2003-03-16 22:49:58",
            "data_de_entrega_pretendida": "2001-01-12 06:48:51",
            "tempolimite_de_levantamento": "2008-05-10 16:38:20",
            "estado_encomenda": 1,
            "temperatura": "2.4",
            "observacoes": "She was a sound of many footsteps, and Alice guessed who it was, and, as the March Hare and the pair of the fact. 'I keep them to sell,' the Hatter went on eagerly. 'That's enough about lessons,'.",
            "tamanho": "M",
            "localizacao": "Cali Terrace",
            "cliente": {
                "id": 5,
                "nome": "Beau Conn MD",
                "email": "alf67@hotmail.com",
                "telefone": "934.294.7933 x03894"
            },
            "estafeta": [
                {
                    "id": 4,
                    "nome": "Dr. Nikko Kutch",
                    "email": "kuhic.elinor@gmail.com",
                    "telefone": "1-489-885-4882 x2433",
                    "data_nascimento": "2007-05-02",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 1,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 24,
                        "user_id": 4
                    }
                }
            ],
            "cacifo": {
                "id": 11,
                "numero": 377,
                "temperatura": "0.7",
                "codigo": "YFfvNr7",
                "tamanho_id": 4,
                "estado_id": 2,
                "localizacao_id": 3,
                "tamanho": {
                    "id": 4,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 3,
                    "nome": "O'Kon Fords",
                    "lat": "87.672979",
                    "long": "120.782568",
                    "codigo_postal": "6541-952",
                    "cidade": "Vivienchester"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/24",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/11",
                "cliente": "http:\/\/localhost\/api\/clientes\/5"
            }
        },
        {
            "id": 25,
            "numero_encomenda": 72,
            "data_estimada": "2016-11-18 17:35:12",
            "data_de_entrega": "1973-12-12 18:29:03",
            "data_de_levantamento": "1983-05-28 15:38:30",
            "data_de_entrada": "1986-03-30 06:35:30",
            "data_de_entrega_pretendida": "1990-01-20 07:46:26",
            "tempolimite_de_levantamento": "2013-05-16 13:13:34",
            "estado_encomenda": 1,
            "temperatura": "4.8",
            "observacoes": "I ever saw in another moment it was just saying to herself 'Now I can say.' This was quite a large cat which was the first day,' said the Hatter, 'when the Queen was in March.' As she said to the.",
            "tamanho": "M",
            "localizacao": "Leannon Square",
            "cliente": {
                "id": 4,
                "nome": "Osvaldo Barton",
                "email": "dickinson.ryder@hotmail.com",
                "telefone": "956-759-0408"
            },
            "estafeta": [
                {
                    "id": 6,
                    "nome": "Dr. Kristin Wehner V",
                    "email": "ltorphy@hotmail.com",
                    "telefone": "+18672096924",
                    "data_nascimento": "2001-11-20",
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
                "id": 2,
                "numero": 47,
                "temperatura": "7.8",
                "codigo": "44alPhEe4",
                "tamanho_id": 1,
                "estado_id": 2,
                "localizacao_id": 2,
                "tamanho": {
                    "id": 1,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 2,
                    "nome": "Frederique Fort",
                    "lat": "5.807627",
                    "long": "30.412405",
                    "codigo_postal": "4894-902",
                    "cidade": "Jaskolskiville"
                }
            },
            "href": {
                "link": "http:\/\/localhost\/api\/encomendas\/25",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/2",
                "cliente": "http:\/\/localhost\/api\/clientes\/4"
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
curl -X POST "http://localhost/api/encomendas"     -d "numero_encomenda"="9" \
    -d "data_estimada"="PXiSqDw3mO6caMeu" \
    -d "data_de_entrega"="yiZeoWksvlm4kKLM" \
    -d "data_de_levantamento"="7En82tOug1oHmBME" \
    -d "data_de_entrada_no_sistema"="SSlsObTOQUKoCCy8" \
    -d "data_de_entrega_pretendida"="oajukWo5vnxx5xdc" \
    -d "tempo_limite_de_levantamento"="bgKOJpW2aDTWKbvw" \
    -d "estado_encomenda"="1" \
    -d "temperatura"="30507877" \
    -d "observacoes"="sabn9hj9NRYPmr4I" \
    -d "tamanho"="IHoTaN90eejw9GHq" \
    -d "localizacao"="LukO6ViJg5VtjyFP" \
    -d "cliente_id"="9mrcAtcQa17Yv4ja" \
    -d "cacifo_id"="bZEhBGaajizevJMJ" 
```

```javascript
const url = new URL("http://localhost/api/encomendas");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "numero_encomenda": "9",
    "data_estimada": "PXiSqDw3mO6caMeu",
    "data_de_entrega": "yiZeoWksvlm4kKLM",
    "data_de_levantamento": "7En82tOug1oHmBME",
    "data_de_entrada_no_sistema": "SSlsObTOQUKoCCy8",
    "data_de_entrega_pretendida": "oajukWo5vnxx5xdc",
    "tempo_limite_de_levantamento": "bgKOJpW2aDTWKbvw",
    "estado_encomenda": "1",
    "temperatura": "30507877",
    "observacoes": "sabn9hj9NRYPmr4I",
    "tamanho": "IHoTaN90eejw9GHq",
    "localizacao": "LukO6ViJg5VtjyFP",
    "cliente_id": "9mrcAtcQa17Yv4ja",
    "cacifo_id": "bZEhBGaajizevJMJ",
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
        "numero_encomenda": 987,
        "data_estimada": "1974-02-06 15:58:55",
        "data_de_entrega": "2014-01-25 04:00:22",
        "data_de_levantamento": "2010-06-18 13:16:18",
        "data_de_entrada_no_sistema": "2000-02-17 18:28:37",
        "data_de_entrega_pretendida": "2010-08-05 17:45:55",
        "tempo_limite_de_levantamento": "2004-12-23 19:06:15",
        "estado_encomenda": 0,
        "temperatura": "0.9",
        "observacoes": "Mouse had changed his mind, and was going on, as she could not remember ever having seen in her life; it was labelled 'ORANGE MARMALADE', but to her that she was beginning to end,' said the Mock.",
        "tamanho": "XL",
        "localizacao": "Elias Wall",
        "cliente_id": 5,
        "cacifo_id": 5,
        "cliente": {
            "id": 5,
            "nome": "Beau Conn MD",
            "email": "alf67@hotmail.com",
            "telefone": "934.294.7933 x03894"
        },
        "cacifo": {
            "id": 5,
            "numero": 364,
            "temperatura": "0.1",
            "codigo": "kr5RfXMl-f",
            "tamanho_id": 2,
            "estado_id": 1,
            "localizacao_id": 1,
            "tamanho": {
                "id": 2,
                "tamanho": "L"
            },
            "estado": {
                "id": 1,
                "estado": "Disponivel"
            },
            "localizacao": {
                "id": 1,
                "nome": "Rosenbaum Mountain",
                "lat": "-81.846382",
                "long": "-20.792293",
                "codigo_postal": "9903-796",
                "cidade": "Port Marielle"
            }
        },
        "estafeta": [
            {
                "id": 1,
                "nome": "Merl Erdman",
                "email": "waldo.nienow@gmail.com",
                "telefone": "+1.531.427.2720",
                "data_nascimento": "1986-03-08",
                "local_de_trabalho": "TDIStore",
                "tipo_id": 2,
                "supervisor_id": 1,
                "pivot": {
                    "encomenda_id": 1,
                    "user_id": 1
                }
            }
        ],
        "href": {
            "cliente": "http:\/\/localhost\/api\/clientes\/5",
            "cacifo": "http:\/\/localhost\/api\/cacifos\/5"
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
    -d "data_estimada"="BdVhFQrISjVuVdFJ" \
    -d "data_de_entrega"="wf1doujM1JaTOvQa" \
    -d "data_de_levantamento"="fF9ByN6jamTlRYfQ" \
    -d "data_de_entrada_no_sistema"="m4C2UDEmxTGq1ogr" \
    -d "data_de_entrega_pretendida"="BQBr3LCTpS1Ab1Qy" \
    -d "tempo_limite_de_levantamento"="I0pKnuX8QGsIBX6K" \
    -d "estado_encomenda"="false" \
    -d "temperatura"="51715.1513" \
    -d "observacoes"="UUOcmQtTzqRI7QBN" \
    -d "tamanho"="QFS41fHpaC8ltoFD" \
    -d "localizacao"="f6pdaz3zIIVdhq55" \
    -d "cliente_id"="TkAOKlreZ82bWNf3" \
    -d "cacifo_id"="TjruCj9ivSVWlNyY" 
```

```javascript
const url = new URL("http://localhost/api/encomendas/{encomenda}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "numero_encomenda": "11",
    "data_estimada": "BdVhFQrISjVuVdFJ",
    "data_de_entrega": "wf1doujM1JaTOvQa",
    "data_de_levantamento": "fF9ByN6jamTlRYfQ",
    "data_de_entrada_no_sistema": "m4C2UDEmxTGq1ogr",
    "data_de_entrega_pretendida": "BQBr3LCTpS1Ab1Qy",
    "tempo_limite_de_levantamento": "I0pKnuX8QGsIBX6K",
    "estado_encomenda": "",
    "temperatura": "51715.1513",
    "observacoes": "UUOcmQtTzqRI7QBN",
    "tamanho": "QFS41fHpaC8ltoFD",
    "localizacao": "f6pdaz3zIIVdhq55",
    "cliente_id": "TkAOKlreZ82bWNf3",
    "cacifo_id": "TjruCj9ivSVWlNyY",
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
curl -X POST "http://localhost/api/estados"     -d "estado"="2TjpS8Mdg65IfXGG" 
```

```javascript
const url = new URL("http://localhost/api/estados");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "estado": "2TjpS8Mdg65IfXGG",
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
curl -X PUT "http://localhost/api/estados/{estado}"     -d "estado"="Ay8MnwY9tprabS5o" 
```

```javascript
const url = new URL("http://localhost/api/estados/{estado}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "estado": "Ay8MnwY9tprabS5o",
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
            "nome": "Rosenbaum Mountain",
            "lat": "-81.846382",
            "long": "-20.792293",
            "codigo_postal": "9903-796",
            "cidade": "Port Marielle",
            "href": {
                "link": "http:\/\/localhost\/api\/localizacaos\/1"
            }
        },
        {
            "nome": "Frederique Fort",
            "lat": "5.807627",
            "long": "30.412405",
            "codigo_postal": "4894-902",
            "cidade": "Jaskolskiville",
            "href": {
                "link": "http:\/\/localhost\/api\/localizacaos\/2"
            }
        },
        {
            "nome": "O'Kon Fords",
            "lat": "87.672979",
            "long": "120.782568",
            "codigo_postal": "6541-952",
            "cidade": "Vivienchester",
            "href": {
                "link": "http:\/\/localhost\/api\/localizacaos\/3"
            }
        },
        {
            "nome": "Shad Trafficway",
            "lat": "-37.032013",
            "long": "55.974499",
            "codigo_postal": "0431-403",
            "cidade": "Kossland",
            "href": {
                "link": "http:\/\/localhost\/api\/localizacaos\/4"
            }
        },
        {
            "nome": "Keeling Crescent",
            "lat": "61.543925",
            "long": "-154.533423",
            "codigo_postal": "3508-185",
            "cidade": "Destineemouth",
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
curl -X POST "http://localhost/api/localizacaos"     -d "nome"="rBgFSRW24Fu6H1pY" \
    -d "lat"="7194625.1862" \
    -d "long"="363609.8446" \
    -d "codigo_postal"="acfTbqoDeYpZ8tTQ" \
    -d "cidade"="mYsI5VloBoT6gaSR" 
```

```javascript
const url = new URL("http://localhost/api/localizacaos");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "rBgFSRW24Fu6H1pY",
    "lat": "7194625.1862",
    "long": "363609.8446",
    "codigo_postal": "acfTbqoDeYpZ8tTQ",
    "cidade": "mYsI5VloBoT6gaSR",
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
        "nome": "Rosenbaum Mountain",
        "lat": "-81.846382",
        "long": "-20.792293",
        "codigo_postal": "9903-796",
        "cidade": "Port Marielle"
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
curl -X PUT "http://localhost/api/localizacaos/{localizacao}"     -d "nome"="lydMLzq5hAoJWUJi" \
    -d "latitude"="sLmuzVGhrgw4vKB0" \
    -d "longitude"="l7eikl6CbrbuTsD3" \
    -d "codigo_postal"="FOn6eFtgdbWRpax3" \
    -d "cidade"="bk6P1HT2dyuyTckp" 
```

```javascript
const url = new URL("http://localhost/api/localizacaos/{localizacao}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "lydMLzq5hAoJWUJi",
    "latitude": "sLmuzVGhrgw4vKB0",
    "longitude": "l7eikl6CbrbuTsD3",
    "codigo_postal": "FOn6eFtgdbWRpax3",
    "cidade": "bk6P1HT2dyuyTckp",
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
        "id": 17,
        "data_hora": "1995-07-31 04:45:19",
        "cacifo_numero": 289,
        "encomenda_numero": 24,
        "user_id": 1,
        "user_name": "Merl Erdman",
        "user_tipo": "Estafeta",
        "cliente_id": 3,
        "cliente_nome": "Miss Delta Kris",
        "cacifo_id": 1,
        "updated_at": "2019-02-04 00:04:07"
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
curl -X POST "http://localhost/api/cacifo/{cacifo}/log"     -d "data_hora"="bJY17nz4ZY23xFEi" \
    -d "cacifo_numero"="QBzBPZeny3AuzSl5" \
    -d "encomenda_numero"="18" \
    -d "user_id"="mIl4Igg3aGIKFJnk" \
    -d "user_name"="rcJMTTpluC4l8maR" \
    -d "user_tipo"="dWD6Pr2CkEujwgv9" \
    -d "cliente_id"="1" \
    -d "cliente_nome"="nfxj0fCVBCc3Ik0J" \
    -d "cacifo_id"="16" 
```

```javascript
const url = new URL("http://localhost/api/cacifo/{cacifo}/log");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "data_hora": "bJY17nz4ZY23xFEi",
    "cacifo_numero": "QBzBPZeny3AuzSl5",
    "encomenda_numero": "18",
    "user_id": "mIl4Igg3aGIKFJnk",
    "user_name": "rcJMTTpluC4l8maR",
    "user_tipo": "dWD6Pr2CkEujwgv9",
    "cliente_id": "1",
    "cliente_nome": "nfxj0fCVBCc3Ik0J",
    "cacifo_id": "16",
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
curl -X POST "http://localhost/api/tamanhos"     -d "tamanho"="yEcTZm0m7eItojjm" 
```

```javascript
const url = new URL("http://localhost/api/tamanhos");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "tamanho": "yEcTZm0m7eItojjm",
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
curl -X PUT "http://localhost/api/tamanhos/{tamanho}"     -d "tamanho"="2b1FVOtnwBz4VGna" 
```

```javascript
const url = new URL("http://localhost/api/tamanhos/{tamanho}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "tamanho": "2b1FVOtnwBz4VGna",
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
curl -X POST "http://localhost/api/userTypes"     -d "tipo"="xSZFz64jbKM75YgW" 
```

```javascript
const url = new URL("http://localhost/api/userTypes");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "tipo": "xSZFz64jbKM75YgW",
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
curl -X PUT "http://localhost/api/userTypes/{userType}"     -d "tipo"="9PPIHsDVXfwWGsTu" 
```

```javascript
const url = new URL("http://localhost/api/userTypes/{userType}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "tipo": "9PPIHsDVXfwWGsTu",
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
            "nome": "Merl Erdman",
            "email": "waldo.nienow@gmail.com",
            "telefone": "+1.531.427.2720",
            "data_nascimento": "1986-03-08",
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
            "nome": "Dr. Presley Jast II",
            "email": "carol87@hotmail.com",
            "telefone": "(432) 378-1803 x81844",
            "data_nascimento": "2017-03-17",
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
            "nome": "Kelley Effertz",
            "email": "gcollins@hotmail.com",
            "telefone": "+1-756-675-3680",
            "data_nascimento": "2011-08-18",
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
            "nome": "Dr. Nikko Kutch",
            "email": "kuhic.elinor@gmail.com",
            "telefone": "1-489-885-4882 x2433",
            "data_nascimento": "2007-05-02",
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
            "nome": "Faustino Ziemann",
            "email": "rocky66@gmail.com",
            "telefone": "860.887.4034 x756",
            "data_nascimento": "1994-06-14",
            "local_de_trabalho": "TDIStore",
            "tipo_id": 2,
            "supervisor_id": 1,
            "tipo": {
                "id": 2,
                "tipo": "Estafeta"
            }
        },
        {
            "id": 6,
            "nome": "Dr. Kristin Wehner V",
            "email": "ltorphy@hotmail.com",
            "telefone": "+18672096924",
            "data_nascimento": "2001-11-20",
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
            "nome": "Barrett Glover Sr.",
            "email": "abbott.ernie@gmail.com",
            "telefone": "+17065457508",
            "data_nascimento": "1984-05-24",
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
            "nome": "Marlee Schinner",
            "email": "general.price@yahoo.com",
            "telefone": "1-724-825-6871 x458",
            "data_nascimento": "2014-10-12",
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
curl -X POST "http://localhost/api/users"     -d "nome"="tYl1tQJYRJfMzHWH" \
    -d "email"="OBLHjE0eHLBsQ9RB" \
    -d "password"="C4XUtUk9g0nf9xEL" \
    -d "telefone"="prHVaNykczokG3pL" \
    -d "data_nascimento"="ZKiv6rLVtpSCmPIx" \
    -d "local_de_trabalho"="bjXT27py1i5gAeK3" \
    -d "tipo_id"="m5XLo9cje8zYqY87" \
    -d "supervisor_id"="Ss6CDEdrzXJD3eB8" 
```

```javascript
const url = new URL("http://localhost/api/users");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "tYl1tQJYRJfMzHWH",
    "email": "OBLHjE0eHLBsQ9RB",
    "password": "C4XUtUk9g0nf9xEL",
    "telefone": "prHVaNykczokG3pL",
    "data_nascimento": "ZKiv6rLVtpSCmPIx",
    "local_de_trabalho": "bjXT27py1i5gAeK3",
    "tipo_id": "m5XLo9cje8zYqY87",
    "supervisor_id": "Ss6CDEdrzXJD3eB8",
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
        "nome": "Merl Erdman",
        "email": "waldo.nienow@gmail.com",
        "password": "hJ\\Af\/J9@L6}+^FF'<\"",
        "telefone": "+1.531.427.2720",
        "data_nascimento": "1986-03-08",
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
curl -X PUT "http://localhost/api/users/{user}"     -d "nome"="9SwLfRrCu3ODdHDO" \
    -d "email"="EKDuG4ihTg5zOK2Y" \
    -d "password"="C0O22jkO2iymZzlq" \
    -d "telefone"="jHdkGNAF9pFOtVBp" \
    -d "data_nascimento"="XgF9vdFzj13VOUau" \
    -d "tipo_id"="CWPa3l7dOmog8WJa" \
    -d "supervisor_id"="LAI6aCpSCU9EyaZj" 
```

```javascript
const url = new URL("http://localhost/api/users/{user}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "nome": "9SwLfRrCu3ODdHDO",
    "email": "EKDuG4ihTg5zOK2Y",
    "password": "C0O22jkO2iymZzlq",
    "telefone": "jHdkGNAF9pFOtVBp",
    "data_nascimento": "XgF9vdFzj13VOUau",
    "tipo_id": "CWPa3l7dOmog8WJa",
    "supervisor_id": "LAI6aCpSCU9EyaZj",
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
            "id": 1,
            "numero_encomenda": 987,
            "data_estimada": "1974-02-06 15:58:55",
            "data_de_entrega": "2014-01-25 04:00:22",
            "data_de_levantamento": "2010-06-18 13:16:18",
            "data_de_entrada_no_sistema": "2000-02-17 18:28:37",
            "data_de_entrega_pretendida": "2010-08-05 17:45:55",
            "tempo_limite_de_levantamento": "2004-12-23 19:06:15",
            "estado_encomenda": 0,
            "temperatura": "0.9",
            "observacoes": "Mouse had changed his mind, and was going on, as she could not remember ever having seen in her life; it was labelled 'ORANGE MARMALADE', but to her that she was beginning to end,' said the Mock.",
            "tamanho": "XL",
            "localizacao": "Elias Wall",
            "cliente_id": 5,
            "cacifo_id": 5,
            "cliente": {
                "id": 5,
                "nome": "Beau Conn MD",
                "email": "alf67@hotmail.com",
                "telefone": "934.294.7933 x03894"
            },
            "cacifo": {
                "id": 5,
                "numero": 364,
                "temperatura": "0.1",
                "codigo": "kr5RfXMl-f",
                "tamanho_id": 2,
                "estado_id": 1,
                "localizacao_id": 1,
                "tamanho": {
                    "id": 2,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 1,
                    "nome": "Rosenbaum Mountain",
                    "lat": "-81.846382",
                    "long": "-20.792293",
                    "codigo_postal": "9903-796",
                    "cidade": "Port Marielle"
                }
            },
            "estafeta": [
                {
                    "id": 1,
                    "nome": "Merl Erdman",
                    "email": "waldo.nienow@gmail.com",
                    "telefone": "+1.531.427.2720",
                    "data_nascimento": "1986-03-08",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 1,
                        "user_id": 1
                    }
                }
            ],
            "href": {
                "cliente": "http:\/\/localhost\/api\/clientes\/5",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/5"
            }
        },
        {
            "id": 5,
            "numero_encomenda": 468,
            "data_estimada": "2011-04-17 19:36:32",
            "data_de_entrega": "1974-06-19 21:01:19",
            "data_de_levantamento": "1985-05-08 08:41:04",
            "data_de_entrada_no_sistema": "2009-12-03 05:12:40",
            "data_de_entrega_pretendida": "1993-04-13 21:36:51",
            "tempo_limite_de_levantamento": "2003-06-24 10:10:07",
            "estado_encomenda": 1,
            "temperatura": "8.3",
            "observacoes": "Alice. 'Then you should say \"With what porpoise?\"' 'Don't you mean \"purpose\"?' said Alice. 'I'm a--I'm a--' 'Well! WHAT are you?' And then a row of lodging houses, and behind it when she had tired.",
            "tamanho": "XL",
            "localizacao": "Mateo Trafficway",
            "cliente_id": 2,
            "cacifo_id": 5,
            "cliente": {
                "id": 2,
                "nome": "Rhiannon Schiller",
                "email": "flossie67@gmail.com",
                "telefone": "+1-610-390-5041"
            },
            "cacifo": {
                "id": 5,
                "numero": 364,
                "temperatura": "0.1",
                "codigo": "kr5RfXMl-f",
                "tamanho_id": 2,
                "estado_id": 1,
                "localizacao_id": 1,
                "tamanho": {
                    "id": 2,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 1,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 1,
                    "nome": "Rosenbaum Mountain",
                    "lat": "-81.846382",
                    "long": "-20.792293",
                    "codigo_postal": "9903-796",
                    "cidade": "Port Marielle"
                }
            },
            "estafeta": [
                {
                    "id": 1,
                    "nome": "Merl Erdman",
                    "email": "waldo.nienow@gmail.com",
                    "telefone": "+1.531.427.2720",
                    "data_nascimento": "1986-03-08",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 5,
                        "user_id": 1
                    }
                }
            ],
            "href": {
                "cliente": "http:\/\/localhost\/api\/clientes\/2",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/5"
            }
        },
        {
            "id": 7,
            "numero_encomenda": 236,
            "data_estimada": "1998-08-15 04:47:56",
            "data_de_entrega": "1975-05-16 05:11:45",
            "data_de_levantamento": "1993-05-06 18:37:15",
            "data_de_entrada_no_sistema": "1978-08-11 03:55:07",
            "data_de_entrega_pretendida": "1976-02-28 23:56:53",
            "tempo_limite_de_levantamento": "1982-04-11 10:09:22",
            "estado_encomenda": 0,
            "temperatura": "9",
            "observacoes": "Mock Turtle in the back. However, it was only sobbing,' she thought, 'it's sure to make it stop. 'Well, I'd hardly finished the guinea-pigs!' thought Alice. 'I don't know the meaning of half those.",
            "tamanho": "S",
            "localizacao": "Bethany Radial",
            "cliente_id": 5,
            "cacifo_id": 3,
            "cliente": {
                "id": 5,
                "nome": "Beau Conn MD",
                "email": "alf67@hotmail.com",
                "telefone": "934.294.7933 x03894"
            },
            "cacifo": {
                "id": 3,
                "numero": 191,
                "temperatura": "10",
                "codigo": "yseJgZs8",
                "tamanho_id": 2,
                "estado_id": 2,
                "localizacao_id": 3,
                "tamanho": {
                    "id": 2,
                    "tamanho": "L"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 3,
                    "nome": "O'Kon Fords",
                    "lat": "87.672979",
                    "long": "120.782568",
                    "codigo_postal": "6541-952",
                    "cidade": "Vivienchester"
                }
            },
            "estafeta": [
                {
                    "id": 1,
                    "nome": "Merl Erdman",
                    "email": "waldo.nienow@gmail.com",
                    "telefone": "+1.531.427.2720",
                    "data_nascimento": "1986-03-08",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 7,
                        "user_id": 1
                    }
                }
            ],
            "href": {
                "cliente": "http:\/\/localhost\/api\/clientes\/5",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/3"
            }
        },
        {
            "id": 8,
            "numero_encomenda": 996,
            "data_estimada": "1972-09-12 18:47:08",
            "data_de_entrega": "2017-11-15 01:30:11",
            "data_de_levantamento": "2006-02-05 03:17:00",
            "data_de_entrada_no_sistema": "2009-08-03 00:14:51",
            "data_de_entrega_pretendida": "1971-01-05 23:52:55",
            "tempo_limite_de_levantamento": "2018-05-27 01:47:42",
            "estado_encomenda": 1,
            "temperatura": "3.9",
            "observacoes": "I suppose?' 'Yes,' said Alice desperately: 'he's perfectly idiotic!' And she began fancying the sort of idea that they would die. 'The trial cannot proceed,' said the King, 'that saves a world of.",
            "tamanho": "M",
            "localizacao": "Strosin Meadow",
            "cliente_id": 5,
            "cacifo_id": 8,
            "cliente": {
                "id": 5,
                "nome": "Beau Conn MD",
                "email": "alf67@hotmail.com",
                "telefone": "934.294.7933 x03894"
            },
            "cacifo": {
                "id": 8,
                "numero": 152,
                "temperatura": "12",
                "codigo": "bPraZ6",
                "tamanho_id": 1,
                "estado_id": 2,
                "localizacao_id": 2,
                "tamanho": {
                    "id": 1,
                    "tamanho": "M"
                },
                "estado": {
                    "id": 2,
                    "estado": "Disponivel"
                },
                "localizacao": {
                    "id": 2,
                    "nome": "Frederique Fort",
                    "lat": "5.807627",
                    "long": "30.412405",
                    "codigo_postal": "4894-902",
                    "cidade": "Jaskolskiville"
                }
            },
            "estafeta": [
                {
                    "id": 1,
                    "nome": "Merl Erdman",
                    "email": "waldo.nienow@gmail.com",
                    "telefone": "+1.531.427.2720",
                    "data_nascimento": "1986-03-08",
                    "local_de_trabalho": "TDIStore",
                    "tipo_id": 2,
                    "supervisor_id": 1,
                    "pivot": {
                        "encomenda_id": 8,
                        "user_id": 1
                    }
                }
            ],
            "href": {
                "cliente": "http:\/\/localhost\/api\/clientes\/5",
                "cacifo": "http:\/\/localhost\/api\/cacifos\/8"
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


