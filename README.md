# Documentation for Laravel_API_V1

##
Made on Laravel 11. 

The project can be expanded and used as a basis for developing your own API.

## POST User - Registration

POST /api/registration

> Body Parameters

```yaml
email: johnsmith@mail.com
password: "123456"
gender: m

```

### Params

|Name|Location|Type|Required|Description|
|---|---|---|---|---|
|body|body|object| no |none|
|» email|body|string| yes |none|
|» password|body|string| yes |none|
|» gender|body|string| yes |none|

> Response Examples

> 200 Response

```json
{}
```

### Responses

|HTTP Status Code |Meaning|Description|Data schema|
|---|---|---|---|
|200|OK|none|Inline|

### Responses Data Schema

## GET User - Profile

GET /api/profile/1

> Response Examples

> 200 Response

```json
{}
```

### Responses

|HTTP Status Code |Meaning|Description|Data schema|
|---|---|---|---|
|200|OK|none|Inline|

### Responses Data Schema

## GET Products - Prices

GET /api/prices/USD

> Response Examples

> 200 Response

```json
{}
```

### Responses

|HTTP Status Code |Meaning|Description|Data schema|
|---|---|---|---|
|200|OK|none|Inline|
