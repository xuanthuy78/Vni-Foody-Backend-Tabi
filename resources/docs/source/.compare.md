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

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_6e7e2bdf41dacf38a5c6768ef817e8b6 -->
## api/upload
> Example request:

```bash
curl -X POST \
    "http://localhost/api/upload" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/upload"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/upload`


<!-- END_6e7e2bdf41dacf38a5c6768ef817e8b6 -->

<!-- START_b5ccc394c53688c9ca2e4943cdc2e246 -->
## api/uploadsimple
> Example request:

```bash
curl -X POST \
    "http://localhost/api/uploadsimple" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/uploadsimple"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/uploadsimple`


<!-- END_b5ccc394c53688c9ca2e4943cdc2e246 -->

<!-- START_dc538d69a8586a7a3c36d4393cee42e6 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/product" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

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
    "status": "success",
    "data": {
        "data": [
            {
                "id": 120,
                "name": "Xà lách trộn kiểu Nga120",
                "description": "Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.",
                "category_id": 11,
                "category_name": "Tủ bếp truyền thống",
                "brand_name": "",
                "brand_id": null,
                "content": "<h2>This is content<\/h2>",
                "thumbnail": "xa-lach-gcf126-405.jpg",
                "price": "12000000",
                "promotion_price": "18000000",
                "promotion_description": null,
                "quality": 23,
                "alias": "xa-lach-tron-kieu-nga120",
                "code": "XL-233",
                "image": [
                    {
                        "id": 87705,
                        "product_id": 120,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 87946,
                        "product_id": 120,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 88188,
                        "product_id": 120,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 88431,
                        "product_id": 120,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 88675,
                        "product_id": 120,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 88920,
                        "product_id": 120,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    }
                ],
                "comment": [],
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 119,
                "name": "Xà lách trộn kiểu Nga119",
                "description": "Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.",
                "category_id": 11,
                "category_name": "Tủ bếp truyền thống",
                "brand_name": "",
                "brand_id": null,
                "content": "<h2>This is content<\/h2>",
                "thumbnail": "xa-lach-gcf126-405.jpg",
                "price": "12000000",
                "promotion_price": "18000000",
                "promotion_description": null,
                "quality": 23,
                "alias": "xa-lach-tron-kieu-nga119",
                "code": "XL-233",
                "image": [
                    {
                        "id": 86260,
                        "product_id": 119,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 86499,
                        "product_id": 119,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 86739,
                        "product_id": 119,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 86980,
                        "product_id": 119,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 87222,
                        "product_id": 119,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 87465,
                        "product_id": 119,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    }
                ],
                "comment": [],
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 118,
                "name": "Xà lách trộn kiểu Nga118",
                "description": "Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.",
                "category_id": 11,
                "category_name": "Tủ bếp truyền thống",
                "brand_name": "",
                "brand_id": null,
                "content": "<h2>This is content<\/h2>",
                "thumbnail": "xa-lach-gcf126-405.jpg",
                "price": "12000000",
                "promotion_price": "18000000",
                "promotion_description": null,
                "quality": 23,
                "alias": "xa-lach-tron-kieu-nga118",
                "code": "XL-233",
                "image": [
                    {
                        "id": 84827,
                        "product_id": 118,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 85064,
                        "product_id": 118,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 85302,
                        "product_id": 118,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 85541,
                        "product_id": 118,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 85781,
                        "product_id": 118,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 86022,
                        "product_id": 118,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    }
                ],
                "comment": [],
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 117,
                "name": "Xà lách trộn kiểu Nga117",
                "description": "Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.",
                "category_id": 11,
                "category_name": "Tủ bếp truyền thống",
                "brand_name": "",
                "brand_id": null,
                "content": "<h2>This is content<\/h2>",
                "thumbnail": "xa-lach-gcf126-405.jpg",
                "price": "12000000",
                "promotion_price": "18000000",
                "promotion_description": null,
                "quality": 23,
                "alias": "xa-lach-tron-kieu-nga117",
                "code": "XL-233",
                "image": [
                    {
                        "id": 83406,
                        "product_id": 117,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 83641,
                        "product_id": 117,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 83877,
                        "product_id": 117,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 84114,
                        "product_id": 117,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 84352,
                        "product_id": 117,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 84591,
                        "product_id": 117,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    }
                ],
                "comment": [],
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 116,
                "name": "Xà lách trộn kiểu Nga116",
                "description": "Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.",
                "category_id": 11,
                "category_name": "Tủ bếp truyền thống",
                "brand_name": "",
                "brand_id": null,
                "content": "<h2>This is content<\/h2>",
                "thumbnail": "xa-lach-gcf126-405.jpg",
                "price": "12000000",
                "promotion_price": "18000000",
                "promotion_description": null,
                "quality": 23,
                "alias": "xa-lach-tron-kieu-nga116",
                "code": "XL-233",
                "image": [
                    {
                        "id": 81997,
                        "product_id": 116,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 82230,
                        "product_id": 116,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 82464,
                        "product_id": 116,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 82699,
                        "product_id": 116,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 82935,
                        "product_id": 116,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 83172,
                        "product_id": 116,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    }
                ],
                "comment": [],
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 115,
                "name": "Xà lách trộn kiểu Nga115",
                "description": "Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.",
                "category_id": 11,
                "category_name": "Tủ bếp truyền thống",
                "brand_name": "",
                "brand_id": null,
                "content": "<h2>This is content<\/h2>",
                "thumbnail": "xa-lach-gcf126-405.jpg",
                "price": "12000000",
                "promotion_price": "18000000",
                "promotion_description": null,
                "quality": 23,
                "alias": "xa-lach-tron-kieu-nga115",
                "code": "XL-233",
                "image": [
                    {
                        "id": 80600,
                        "product_id": 115,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 80831,
                        "product_id": 115,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 81063,
                        "product_id": 115,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 81296,
                        "product_id": 115,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 81530,
                        "product_id": 115,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 81765,
                        "product_id": 115,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    }
                ],
                "comment": [],
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 114,
                "name": "Xà lách trộn kiểu Nga114",
                "description": "Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.",
                "category_id": 11,
                "category_name": "Tủ bếp truyền thống",
                "brand_name": "",
                "brand_id": null,
                "content": "<h2>This is content<\/h2>",
                "thumbnail": "xa-lach-gcf126-405.jpg",
                "price": "12000000",
                "promotion_price": "18000000",
                "promotion_description": null,
                "quality": 23,
                "alias": "xa-lach-tron-kieu-nga114",
                "code": "XL-233",
                "image": [
                    {
                        "id": 79215,
                        "product_id": 114,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 79444,
                        "product_id": 114,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 79674,
                        "product_id": 114,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 79905,
                        "product_id": 114,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 80137,
                        "product_id": 114,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 80370,
                        "product_id": 114,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    }
                ],
                "comment": [],
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 113,
                "name": "Xà lách trộn kiểu Nga113",
                "description": "Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.",
                "category_id": 11,
                "category_name": "Tủ bếp truyền thống",
                "brand_name": "",
                "brand_id": null,
                "content": "<h2>This is content<\/h2>",
                "thumbnail": "xa-lach-gcf126-405.jpg",
                "price": "12000000",
                "promotion_price": "18000000",
                "promotion_description": null,
                "quality": 23,
                "alias": "xa-lach-tron-kieu-nga113",
                "code": "XL-233",
                "image": [
                    {
                        "id": 77842,
                        "product_id": 113,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 78069,
                        "product_id": 113,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 78297,
                        "product_id": 113,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 78526,
                        "product_id": 113,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 78756,
                        "product_id": 113,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 78987,
                        "product_id": 113,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    }
                ],
                "comment": [],
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 112,
                "name": "Xà lách trộn kiểu Nga112",
                "description": "Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.",
                "category_id": 11,
                "category_name": "Tủ bếp truyền thống",
                "brand_name": "",
                "brand_id": null,
                "content": "<h2>This is content<\/h2>",
                "thumbnail": "xa-lach-gcf126-405.jpg",
                "price": "12000000",
                "promotion_price": "18000000",
                "promotion_description": null,
                "quality": 23,
                "alias": "xa-lach-tron-kieu-nga112",
                "code": "XL-233",
                "image": [
                    {
                        "id": 76481,
                        "product_id": 112,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 76706,
                        "product_id": 112,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 76932,
                        "product_id": 112,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 77159,
                        "product_id": 112,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 77387,
                        "product_id": 112,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 77616,
                        "product_id": 112,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    }
                ],
                "comment": [],
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 111,
                "name": "Xà lách trộn kiểu Nga111",
                "description": "Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.",
                "category_id": 11,
                "category_name": "Tủ bếp truyền thống",
                "brand_name": "",
                "brand_id": null,
                "content": "<h2>This is content<\/h2>",
                "thumbnail": "xa-lach-gcf126-405.jpg",
                "price": "12000000",
                "promotion_price": "18000000",
                "promotion_description": null,
                "quality": 23,
                "alias": "xa-lach-tron-kieu-nga111",
                "code": "XL-233",
                "image": [
                    {
                        "id": 75132,
                        "product_id": 111,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 75355,
                        "product_id": 111,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 75579,
                        "product_id": 111,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 75804,
                        "product_id": 111,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 76030,
                        "product_id": 111,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 76257,
                        "product_id": 111,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    }
                ],
                "comment": [],
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 110,
                "name": "Xà lách trộn kiểu Nga110",
                "description": "Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.",
                "category_id": 11,
                "category_name": "Tủ bếp truyền thống",
                "brand_name": "",
                "brand_id": null,
                "content": "<h2>This is content<\/h2>",
                "thumbnail": "xa-lach-gcf126-405.jpg",
                "price": "12000000",
                "promotion_price": "18000000",
                "promotion_description": null,
                "quality": 23,
                "alias": "xa-lach-tron-kieu-nga110",
                "code": "XL-233",
                "image": [
                    {
                        "id": 73795,
                        "product_id": 110,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 74016,
                        "product_id": 110,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 74238,
                        "product_id": 110,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 74461,
                        "product_id": 110,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 74685,
                        "product_id": 110,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 74910,
                        "product_id": 110,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    }
                ],
                "comment": [],
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 109,
                "name": "Xà lách trộn kiểu Nga109",
                "description": "Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.",
                "category_id": 11,
                "category_name": "Tủ bếp truyền thống",
                "brand_name": "",
                "brand_id": null,
                "content": "<h2>This is content<\/h2>",
                "thumbnail": "xa-lach-gcf126-405.jpg",
                "price": "12000000",
                "promotion_price": "18000000",
                "promotion_description": null,
                "quality": 23,
                "alias": "xa-lach-tron-kieu-nga109",
                "code": "XL-233",
                "image": [
                    {
                        "id": 72470,
                        "product_id": 109,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 72689,
                        "product_id": 109,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 72909,
                        "product_id": 109,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 73130,
                        "product_id": 109,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 73352,
                        "product_id": 109,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 73575,
                        "product_id": 109,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    }
                ],
                "comment": [],
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 108,
                "name": "Xà lách trộn kiểu Nga108",
                "description": "Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.",
                "category_id": 11,
                "category_name": "Tủ bếp truyền thống",
                "brand_name": "",
                "brand_id": null,
                "content": "<h2>This is content<\/h2>",
                "thumbnail": "xa-lach-gcf126-405.jpg",
                "price": "12000000",
                "promotion_price": "18000000",
                "promotion_description": null,
                "quality": 23,
                "alias": "xa-lach-tron-kieu-nga108",
                "code": "XL-233",
                "image": [
                    {
                        "id": 71157,
                        "product_id": 108,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 71374,
                        "product_id": 108,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 71592,
                        "product_id": 108,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 71811,
                        "product_id": 108,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 72031,
                        "product_id": 108,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 72252,
                        "product_id": 108,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    }
                ],
                "comment": [],
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 107,
                "name": "Xà lách trộn kiểu Nga107",
                "description": "Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.",
                "category_id": 11,
                "category_name": "Tủ bếp truyền thống",
                "brand_name": "",
                "brand_id": null,
                "content": "<h2>This is content<\/h2>",
                "thumbnail": "xa-lach-gcf126-405.jpg",
                "price": "12000000",
                "promotion_price": "18000000",
                "promotion_description": null,
                "quality": 23,
                "alias": "xa-lach-tron-kieu-nga107",
                "code": "XL-233",
                "image": [
                    {
                        "id": 69856,
                        "product_id": 107,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 70071,
                        "product_id": 107,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 70287,
                        "product_id": 107,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 70504,
                        "product_id": 107,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 70722,
                        "product_id": 107,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 70941,
                        "product_id": 107,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    }
                ],
                "comment": [],
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 106,
                "name": "Xà lách trộn kiểu Nga106",
                "description": "Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.",
                "category_id": 11,
                "category_name": "Tủ bếp truyền thống",
                "brand_name": "",
                "brand_id": null,
                "content": "<h2>This is content<\/h2>",
                "thumbnail": "xa-lach-gcf126-405.jpg",
                "price": "12000000",
                "promotion_price": "18000000",
                "promotion_description": null,
                "quality": 23,
                "alias": "xa-lach-tron-kieu-nga106",
                "code": "XL-233",
                "image": [
                    {
                        "id": 68567,
                        "product_id": 106,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 68780,
                        "product_id": 106,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 68994,
                        "product_id": 106,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 69209,
                        "product_id": 106,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 69425,
                        "product_id": 106,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 69642,
                        "product_id": 106,
                        "image": "xa-lach-gcf126-405.jpg",
                        "created_at": null,
                        "updated_at": null
                    }
                ],
                "comment": [],
                "created_at": null,
                "updated_at": null
            }
        ],
        "meta": {
            "pagination": {
                "total": 120,
                "count": 15,
                "per_page": 15,
                "current_page": 1,
                "total_pages": 8,
                "links": {
                    "next": "http:\/\/localhost\/api\/product?page=2"
                }
            }
        }
    }
}
```

### HTTP Request
`GET api/product`


<!-- END_dc538d69a8586a7a3c36d4393cee42e6 -->

<!-- START_2d62ba7cf16a7d6db447375e13e86c34 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/product" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/product`


<!-- END_2d62ba7cf16a7d6db447375e13e86c34 -->

<!-- START_1fcbf5d495e6ada99ea017e9ae32b380 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

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
    "status": "success",
    "data": {
        "data": {
            "id": 1,
            "name": "Xà lách trộn kiểu Nga1",
            "description": "Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.",
            "category_id": 2,
            "category_name": "Món khai vị",
            "brand_name": "",
            "brand_id": null,
            "content": "<h2>This is content<\/h2>",
            "thumbnail": "xa-lach-gcf126-405.jpg",
            "price": "32000000",
            "promotion_price": "15000000",
            "promotion_description": null,
            "quality": 23,
            "alias": "xa-lach-tron-kieu-nga1",
            "code": "XL-233",
            "image": [
                {
                    "id": 2,
                    "product_id": 1,
                    "image": "xa-lach-gcf126-405.jpg",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 5,
                    "product_id": 1,
                    "image": "xa-lach-gcf126-405.jpg",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 9,
                    "product_id": 1,
                    "image": "xa-lach-gcf126-405.jpg",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 14,
                    "product_id": 1,
                    "image": "xa-lach-gcf126-405.jpg",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 20,
                    "product_id": 1,
                    "image": "xa-lach-gcf126-405.jpg",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 27,
                    "product_id": 1,
                    "image": "xa-lach-gcf126-405.jpg",
                    "created_at": null,
                    "updated_at": null
                }
            ],
            "comment": [
                {
                    "id": 1,
                    "user_id": 1,
                    "product_id": 1,
                    "content": "Bánh này ngon, có tiền thì nghĩ ngay đến nó",
                    "created_at": null,
                    "updated_at": null
                }
            ],
            "created_at": null,
            "updated_at": null
        }
    }
}
```

### HTTP Request
`GET api/product/{product}`


<!-- END_1fcbf5d495e6ada99ea017e9ae32b380 -->

<!-- START_682327ab9f9deab00b7c603486ad935a -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/product/{product}`

`PATCH api/product/{product}`


<!-- END_682327ab9f9deab00b7c603486ad935a -->

<!-- START_587b06cc0dc038b2e049f3a1baa2593b -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/product/{product}`


<!-- END_587b06cc0dc038b2e049f3a1baa2593b -->

<!-- START_ec5d69c57dff08a10fad5f9cf208ad9f -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/brand" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/brand"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

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
    "status": "success",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "name": "KAFF",
                "alias": "kaff",
                "description": "description",
                "image": "kfc-192020.png",
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 2,
                "name": "BOSCH",
                "alias": "bosch",
                "description": "description",
                "image": "kfc-192020.png",
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 3,
                "name": "GIOVANI",
                "alias": "giovani",
                "description": "description",
                "image": "kfc-192020.png",
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 4,
                "name": "CANZY",
                "alias": "canzy",
                "description": "description",
                "image": "kfc-192020.png",
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 5,
                "name": "Sika",
                "alias": "sika",
                "description": "description",
                "image": "kfc-192020.png",
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 6,
                "name": "Pramie",
                "alias": "pramie",
                "description": "description",
                "image": "kfc-192020.png",
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 7,
                "name": "CHEFS",
                "alias": "chefs",
                "description": "description",
                "image": "kfc-192020.png",
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 8,
                "name": "CATA",
                "alias": "cata",
                "description": "description",
                "image": "kfc-192020.png",
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 9,
                "name": "MUNCHEN",
                "alias": "munchen",
                "description": "description",
                "image": "kfc-192020.png",
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 10,
                "name": "FAGOR",
                "alias": "fagor",
                "description": "description",
                "image": "kfc-192020.png",
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 11,
                "name": "FASTER",
                "alias": "faster",
                "description": "description",
                "image": "kfc-192020.png",
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 12,
                "name": "FANDY",
                "alias": "faster",
                "description": "description",
                "image": "kfc-192020.png",
                "created_at": null,
                "updated_at": null
            }
        ],
        "first_page_url": "http:\/\/localhost\/api\/brand?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http:\/\/localhost\/api\/brand?page=1",
        "next_page_url": null,
        "path": "http:\/\/localhost\/api\/brand",
        "per_page": 15,
        "prev_page_url": null,
        "to": 12,
        "total": 12
    }
}
```

### HTTP Request
`GET api/brand`


<!-- END_ec5d69c57dff08a10fad5f9cf208ad9f -->

<!-- START_3910324459f124f3ea9c178d9c278861 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/brand" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/brand"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/brand`


<!-- END_3910324459f124f3ea9c178d9c278861 -->

<!-- START_907ecccfb795fb1a76e52450b3d2dd1f -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/brand/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/brand/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

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
    "status": "success",
    "data": {
        "id": 1,
        "name": "KAFF",
        "alias": "kaff",
        "description": "description",
        "image": "kfc-192020.png",
        "created_at": null,
        "updated_at": null
    }
}
```

### HTTP Request
`GET api/brand/{brand}`


<!-- END_907ecccfb795fb1a76e52450b3d2dd1f -->

<!-- START_74d705ff5986d604dca81e7cb47895df -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/brand/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/brand/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/brand/{brand}`

`PATCH api/brand/{brand}`


<!-- END_74d705ff5986d604dca81e7cb47895df -->

<!-- START_38ebeb9ea1755dadb881b7471e4a1211 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/brand/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/brand/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/brand/{brand}`


<!-- END_38ebeb9ea1755dadb881b7471e4a1211 -->

<!-- START_6a8e50c7a5d7c12bb4838234a16aba2a -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/slide" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/slide"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

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
    "status": "success",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "name": "slide 1",
                "image": "slider-1.png",
                "order": 1,
                "created_at": null,
                "updated_at": null
            },
            {
                "id": 2,
                "name": "slide 2",
                "image": "slider-2.png",
                "order": 2,
                "created_at": null,
                "updated_at": null
            }
        ],
        "first_page_url": "http:\/\/localhost\/api\/slide?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http:\/\/localhost\/api\/slide?page=1",
        "next_page_url": null,
        "path": "http:\/\/localhost\/api\/slide",
        "per_page": 15,
        "prev_page_url": null,
        "to": 2,
        "total": 2
    }
}
```

### HTTP Request
`GET api/slide`


<!-- END_6a8e50c7a5d7c12bb4838234a16aba2a -->

<!-- START_ee47a75964cef1d7beee7848ba195843 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/slide" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/slide"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/slide`


<!-- END_ee47a75964cef1d7beee7848ba195843 -->

<!-- START_e77e06b32ef90d5d038f6fd6f0ec4e1e -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/slide/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/slide/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

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
    "status": "success",
    "data": {
        "id": 1,
        "name": "slide 1",
        "image": "slider-1.png",
        "order": 1,
        "created_at": null,
        "updated_at": null
    }
}
```

### HTTP Request
`GET api/slide/{slide}`


<!-- END_e77e06b32ef90d5d038f6fd6f0ec4e1e -->

<!-- START_e64f63a60c938cd2258e0d9c9223699e -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/slide/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/slide/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/slide/{slide}`

`PATCH api/slide/{slide}`


<!-- END_e64f63a60c938cd2258e0d9c9223699e -->

<!-- START_43e8c282ba77a942d86edb301daecfc9 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/slide/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/slide/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/slide/{slide}`


<!-- END_43e8c282ba77a942d86edb301daecfc9 -->

<!-- START_130c2b5344f6d7c722fe29a7bb60cf33 -->
## api/articles/categories
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/articles/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/articles/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

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
            "name": "Chuyên đề nội thất",
            "alias": "chuyen-de-noi-that",
            "description": null,
            "order": 1,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 2,
            "name": "Trang trí nhà đẹp",
            "alias": "trang-tri-nha-dep",
            "description": null,
            "order": 1,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 3,
            "name": "Khuyến mãi",
            "alias": "khuyen-mai",
            "description": null,
            "order": 1,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 4,
            "name": "Tuyển dụng",
            "alias": "tuyen-dung",
            "description": null,
            "order": 1,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 5,
            "name": "Dự án tiêu biểu",
            "alias": "du-an-tieu-bieu",
            "description": null,
            "order": 1,
            "created_at": null,
            "updated_at": null
        }
    ],
    "status": "success"
}
```

### HTTP Request
`GET api/articles/categories`


<!-- END_130c2b5344f6d7c722fe29a7bb60cf33 -->

<!-- START_0d4cb2104f73e3ee9cf74a52a015de76 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/articles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/articles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

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
    "status": "success",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "title": "Tặng 1 bánh pizza miễn phí cho ngày sinh nhật của bạn",
                "description": " Tặng 1 pizza cỡ M (áp dụng cho tất cả các loại pizza trừ số 3, 11 và 12)",
                "image": "supreme_pizza_large.jpg",
                "content": "<h3>This is content<\/h3>",
                "article_category_id": 1,
                "created_at": "2020-01-06 10:00:00",
                "updated_at": "2020-01-06 10:00:00"
            },
            {
                "id": 2,
                "title": "Tặng 1 bánh pizza miễn phí cho ngày sinh nhật của bạn",
                "description": " Tặng 1 pizza cỡ M (áp dụng cho tất cả các loại pizza trừ số 3, 11 và 12)",
                "image": "supreme_pizza_large.jpg",
                "content": "<h3>This is content<\/h3>",
                "article_category_id": 1,
                "created_at": "2020-01-06 10:00:00",
                "updated_at": "2020-01-06 10:00:00"
            },
            {
                "id": 3,
                "title": "Tặng 1 bánh pizza miễn phí cho ngày sinh nhật của bạn",
                "description": " Tặng 1 pizza cỡ M (áp dụng cho tất cả các loại pizza trừ số 3, 11 và 12)",
                "image": "supreme_pizza_large.jpg",
                "content": "<h3>This is content<\/h3>",
                "article_category_id": 1,
                "created_at": "2020-01-06 10:00:00",
                "updated_at": "2020-01-06 10:00:00"
            },
            {
                "id": 4,
                "title": "Tặng 1 bánh pizza miễn phí cho ngày sinh nhật của bạn",
                "description": " Tặng 1 pizza cỡ M (áp dụng cho tất cả các loại pizza trừ số 3, 11 và 12)",
                "image": "supreme_pizza_large.jpg",
                "content": "<h3>This is content<\/h3>",
                "article_category_id": 1,
                "created_at": "2020-01-06 10:00:00",
                "updated_at": "2020-01-06 10:00:00"
            },
            {
                "id": 5,
                "title": "Tặng 1 bánh pizza miễn phí cho ngày sinh nhật của bạn",
                "description": " Tặng 1 pizza cỡ M (áp dụng cho tất cả các loại pizza trừ số 3, 11 và 12)",
                "image": "supreme_pizza_large.jpg",
                "content": "<h3>This is content<\/h3>",
                "article_category_id": 1,
                "created_at": "2020-01-06 10:00:00",
                "updated_at": "2020-01-06 10:00:00"
            },
            {
                "id": 6,
                "title": "Tặng 1 bánh pizza miễn phí cho ngày sinh nhật của bạn",
                "description": " Tặng 1 pizza cỡ M (áp dụng cho tất cả các loại pizza trừ số 3, 11 và 12)",
                "image": "supreme_pizza_large.jpg",
                "content": "<h3>This is content<\/h3>",
                "article_category_id": 1,
                "created_at": "2020-01-06 10:00:00",
                "updated_at": "2020-01-06 10:00:00"
            },
            {
                "id": 7,
                "title": "Tặng 1 bánh pizza miễn phí cho ngày sinh nhật của bạn",
                "description": " Tặng 1 pizza cỡ M (áp dụng cho tất cả các loại pizza trừ số 3, 11 và 12)",
                "image": "supreme_pizza_large.jpg",
                "content": "<h3>This is content<\/h3>",
                "article_category_id": 1,
                "created_at": "2020-01-06 10:00:00",
                "updated_at": "2020-01-06 10:00:00"
            },
            {
                "id": 8,
                "title": "Tặng 1 bánh pizza miễn phí cho ngày sinh nhật của bạn",
                "description": " Tặng 1 pizza cỡ M (áp dụng cho tất cả các loại pizza trừ số 3, 11 và 12)",
                "image": "supreme_pizza_large.jpg",
                "content": "<h3>This is content<\/h3>",
                "article_category_id": 1,
                "created_at": "2020-01-06 10:00:00",
                "updated_at": "2020-01-06 10:00:00"
            },
            {
                "id": 9,
                "title": "Tặng 1 bánh pizza miễn phí cho ngày sinh nhật của bạn",
                "description": " Tặng 1 pizza cỡ M (áp dụng cho tất cả các loại pizza trừ số 3, 11 và 12)",
                "image": "supreme_pizza_large.jpg",
                "content": "<h3>This is content<\/h3>",
                "article_category_id": 1,
                "created_at": "2020-01-06 10:00:00",
                "updated_at": "2020-01-06 10:00:00"
            },
            {
                "id": 10,
                "title": "Tặng 1 bánh pizza miễn phí cho ngày sinh nhật của bạn",
                "description": " Tặng 1 pizza cỡ M (áp dụng cho tất cả các loại pizza trừ số 3, 11 và 12)",
                "image": "supreme_pizza_large.jpg",
                "content": "<h3>This is content<\/h3>",
                "article_category_id": 1,
                "created_at": "2020-01-06 10:00:00",
                "updated_at": "2020-01-06 10:00:00"
            },
            {
                "id": 11,
                "title": "Tặng 1 bánh pizza miễn phí cho ngày sinh nhật của bạn",
                "description": " Tặng 1 pizza cỡ M (áp dụng cho tất cả các loại pizza trừ số 3, 11 và 12)",
                "image": "supreme_pizza_large.jpg",
                "content": "<h3>This is content<\/h3>",
                "article_category_id": 1,
                "created_at": "2020-01-06 10:00:00",
                "updated_at": "2020-01-06 10:00:00"
            },
            {
                "id": 12,
                "title": "Tặng 1 bánh pizza miễn phí cho ngày sinh nhật của bạn",
                "description": " Tặng 1 pizza cỡ M (áp dụng cho tất cả các loại pizza trừ số 3, 11 và 12)",
                "image": "supreme_pizza_large.jpg",
                "content": "<h3>This is content<\/h3>",
                "article_category_id": 1,
                "created_at": "2020-01-06 10:00:00",
                "updated_at": "2020-01-06 10:00:00"
            },
            {
                "id": 13,
                "title": "Tặng 1 bánh pizza miễn phí cho ngày sinh nhật của bạn",
                "description": " Tặng 1 pizza cỡ M (áp dụng cho tất cả các loại pizza trừ số 3, 11 và 12)",
                "image": "supreme_pizza_large.jpg",
                "content": "<h3>This is content<\/h3>",
                "article_category_id": 1,
                "created_at": "2020-01-06 10:00:00",
                "updated_at": "2020-01-06 10:00:00"
            },
            {
                "id": 14,
                "title": "Tặng 1 bánh pizza miễn phí cho ngày sinh nhật của bạn",
                "description": " Tặng 1 pizza cỡ M (áp dụng cho tất cả các loại pizza trừ số 3, 11 và 12)",
                "image": "supreme_pizza_large.jpg",
                "content": "<h3>This is content<\/h3>",
                "article_category_id": 1,
                "created_at": "2020-01-06 10:00:00",
                "updated_at": "2020-01-06 10:00:00"
            },
            {
                "id": 15,
                "title": "Tặng 1 bánh pizza miễn phí cho ngày sinh nhật của bạn",
                "description": " Tặng 1 pizza cỡ M (áp dụng cho tất cả các loại pizza trừ số 3, 11 và 12)",
                "image": "supreme_pizza_large.jpg",
                "content": "<h3>This is content<\/h3>",
                "article_category_id": 1,
                "created_at": "2020-01-06 10:00:00",
                "updated_at": "2020-01-06 10:00:00"
            }
        ],
        "first_page_url": "http:\/\/localhost\/api\/articles?page=1",
        "from": 1,
        "last_page": 10,
        "last_page_url": "http:\/\/localhost\/api\/articles?page=10",
        "next_page_url": "http:\/\/localhost\/api\/articles?page=2",
        "path": "http:\/\/localhost\/api\/articles",
        "per_page": 15,
        "prev_page_url": null,
        "to": 15,
        "total": 150
    }
}
```

### HTTP Request
`GET api/articles`


<!-- END_0d4cb2104f73e3ee9cf74a52a015de76 -->

<!-- START_b9cfac88a54b626b9825ddcc2134f118 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/articles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/articles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/articles`


<!-- END_b9cfac88a54b626b9825ddcc2134f118 -->

<!-- START_a98fdf52c7db91e78049d31130bbb5f1 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/articles/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/articles/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

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
    "status": "success",
    "data": {
        "id": 1,
        "title": "Tặng 1 bánh pizza miễn phí cho ngày sinh nhật của bạn",
        "description": " Tặng 1 pizza cỡ M (áp dụng cho tất cả các loại pizza trừ số 3, 11 và 12)",
        "image": "supreme_pizza_large.jpg",
        "content": "<h3>This is content<\/h3>",
        "article_category_id": 1,
        "created_at": "2020-01-06 10:00:00",
        "updated_at": "2020-01-06 10:00:00"
    }
}
```

### HTTP Request
`GET api/articles/{article}`


<!-- END_a98fdf52c7db91e78049d31130bbb5f1 -->

<!-- START_725b7ccde91c84ae0ac1703955fcd806 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/articles/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/articles/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/articles/{article}`

`PATCH api/articles/{article}`


<!-- END_725b7ccde91c84ae0ac1703955fcd806 -->

<!-- START_8a228d26f297a77c77c901dc23a49e51 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/articles/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/articles/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/articles/{article}`


<!-- END_8a228d26f297a77c77c901dc23a49e51 -->

<!-- START_109013899e0bc43247b0f00b67f889cf -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

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
            "_lft": 1,
            "_rgt": 6,
            "parent_id": null,
            "name": "THỰC ĐƠN CHÍNH",
            "description": "THỰC ĐƠN CHÍNH",
            "image": "cate.jpg",
            "icon": null,
            "order": 1,
            "created_at": null,
            "updated_at": null,
            "children": [
                {
                    "id": 2,
                    "_lft": 2,
                    "_rgt": 3,
                    "parent_id": 1,
                    "name": "Món khai vị",
                    "description": null,
                    "image": null,
                    "icon": null,
                    "order": 1,
                    "created_at": null,
                    "updated_at": null,
                    "children": []
                },
                {
                    "id": 3,
                    "_lft": 4,
                    "_rgt": 5,
                    "parent_id": 1,
                    "name": "Pizza",
                    "description": null,
                    "image": null,
                    "icon": null,
                    "order": 1,
                    "created_at": null,
                    "updated_at": null,
                    "children": []
                }
            ]
        },
        {
            "id": 4,
            "_lft": 7,
            "_rgt": 12,
            "parent_id": null,
            "name": "THỰC ĐƠN ĐẶC BIỆT",
            "description": "thực đơn đặc biệt",
            "image": "cate.jpg",
            "icon": null,
            "order": 1,
            "created_at": null,
            "updated_at": null,
            "children": [
                {
                    "id": 5,
                    "_lft": 8,
                    "_rgt": 9,
                    "parent_id": 4,
                    "name": "Kệ tivi",
                    "description": null,
                    "image": null,
                    "icon": null,
                    "order": 1,
                    "created_at": null,
                    "updated_at": null,
                    "children": []
                },
                {
                    "id": 6,
                    "_lft": 10,
                    "_rgt": 11,
                    "parent_id": 4,
                    "name": "Bàn trà",
                    "description": null,
                    "image": null,
                    "icon": null,
                    "order": 1,
                    "created_at": null,
                    "updated_at": null,
                    "children": []
                }
            ]
        },
        {
            "id": 7,
            "_lft": 13,
            "_rgt": 17,
            "parent_id": null,
            "name": "PHÒNG BẾP",
            "description": "Hiện nay, nội thất phòng khách là vấn đề rất nhiều gia đình quan tâm. Từ những đôi vợ chồng trẻ đến những gia đình đã có cuộc sống ổn đinh. Việc thay đổi nội thất phòng khách vẫn rất được chú trọng. Chỉ với bộ sofa và kệ tivi đã có thể làm nên một phòng khách đẹp và sang trọng.",
            "image": "cate.jpg",
            "icon": null,
            "order": 1,
            "created_at": null,
            "updated_at": null,
            "children": [
                {
                    "id": 8,
                    "_lft": 14,
                    "_rgt": 15,
                    "parent_id": 7,
                    "name": "Bàn ghế ăn",
                    "description": null,
                    "image": null,
                    "icon": null,
                    "order": 1,
                    "created_at": null,
                    "updated_at": null,
                    "children": []
                },
                {
                    "id": 9,
                    "_lft": 16,
                    "_rgt": 21,
                    "parent_id": 7,
                    "name": "Tủ bếp",
                    "description": null,
                    "image": null,
                    "icon": null,
                    "order": 1,
                    "created_at": null,
                    "updated_at": null,
                    "children": [
                        {
                            "id": 10,
                            "_lft": 17,
                            "_rgt": 18,
                            "parent_id": 9,
                            "name": "Tủ bếp hiện đại",
                            "description": null,
                            "image": null,
                            "icon": null,
                            "order": 1,
                            "created_at": null,
                            "updated_at": null,
                            "children": []
                        },
                        {
                            "id": 11,
                            "_lft": 19,
                            "_rgt": 20,
                            "parent_id": 9,
                            "name": "Tủ bếp truyền thống",
                            "description": null,
                            "image": null,
                            "icon": null,
                            "order": 1,
                            "created_at": null,
                            "updated_at": null,
                            "children": []
                        }
                    ]
                }
            ]
        }
    ],
    "status": "success"
}
```

### HTTP Request
`GET api/categories`


<!-- END_109013899e0bc43247b0f00b67f889cf -->

<!-- START_2335abbed7f782ea7d7dd6df9c738d74 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/categories`


<!-- END_2335abbed7f782ea7d7dd6df9c738d74 -->

<!-- START_34925c1e31e7ecc53f8f52c8b1e91d44 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

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
    "status": "success",
    "data": {
        "id": 1,
        "_lft": 1,
        "_rgt": 6,
        "parent_id": null,
        "name": "THỰC ĐƠN CHÍNH",
        "description": "THỰC ĐƠN CHÍNH",
        "image": "cate.jpg",
        "icon": null,
        "order": 1,
        "created_at": null,
        "updated_at": null
    }
}
```

### HTTP Request
`GET api/categories/{category}`


<!-- END_34925c1e31e7ecc53f8f52c8b1e91d44 -->

<!-- START_549109b98c9f25ebff47fb4dc23423b6 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/categories/{category}`

`PATCH api/categories/{category}`


<!-- END_549109b98c9f25ebff47fb4dc23423b6 -->

<!-- START_7513823f87b59040507bd5ab26f9ceb5 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/categories/{category}`


<!-- END_7513823f87b59040507bd5ab26f9ceb5 -->

<!-- START_a058bd4f9319edbcca599b1822880435 -->
## api/product-category/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/product-category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product-category/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

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
    "status": "success",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 40,
                "thumbnail": "xa-lach-gcf126-405.jpg",
                "category_id": 3,
                "brand_id": null,
                "name": "Xà lách trộn kiểu Nga40",
                "price": "32000000.00",
                "quality": 23,
                "description": "Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.",
                "content": "<h2>This is content<\/h2>",
                "code": "XL-233",
                "promotion_price": "15000000.00",
                "promotion_description": null,
                "alias": "xa-lach-tron-kieu-nga40",
                "created_at": null,
                "updated_at": null,
                "deleted_at": null
            },
            {
                "id": 39,
                "thumbnail": "xa-lach-gcf126-405.jpg",
                "category_id": 3,
                "brand_id": null,
                "name": "Xà lách trộn kiểu Nga39",
                "price": "32000000.00",
                "quality": 23,
                "description": "Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.",
                "content": "<h2>This is content<\/h2>",
                "code": "XL-233",
                "promotion_price": "15000000.00",
                "promotion_description": null,
                "alias": "xa-lach-tron-kieu-nga39",
                "created_at": null,
                "updated_at": null,
                "deleted_at": null
            },
            {
                "id": 38,
                "thumbnail": "xa-lach-gcf126-405.jpg",
                "category_id": 3,
                "brand_id": null,
                "name": "Xà lách trộn kiểu Nga38",
                "price": "32000000.00",
                "quality": 23,
                "description": "Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.",
                "content": "<h2>This is content<\/h2>",
                "code": "XL-233",
                "promotion_price": "15000000.00",
                "promotion_description": null,
                "alias": "xa-lach-tron-kieu-nga38",
                "created_at": null,
                "updated_at": null,
                "deleted_at": null
            },
            {
                "id": 37,
                "thumbnail": "xa-lach-gcf126-405.jpg",
                "category_id": 3,
                "brand_id": null,
                "name": "Xà lách trộn kiểu Nga37",
                "price": "32000000.00",
                "quality": 23,
                "description": "Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.",
                "content": "<h2>This is content<\/h2>",
                "code": "XL-233",
                "promotion_price": "15000000.00",
                "promotion_description": null,
                "alias": "xa-lach-tron-kieu-nga37",
                "created_at": null,
                "updated_at": null,
                "deleted_at": null
            },
            {
                "id": 36,
                "thumbnail": "xa-lach-gcf126-405.jpg",
                "category_id": 3,
                "brand_id": null,
                "name": "Xà lách trộn kiểu Nga36",
                "price": "32000000.00",
                "quality": 23,
                "description": "Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.",
                "content": "<h2>This is content<\/h2>",
                "code": "XL-233",
                "promotion_price": "15000000.00",
                "promotion_description": null,
                "alias": "xa-lach-tron-kieu-nga36",
                "created_at": null,
                "updated_at": null,
                "deleted_at": null
            },
            {
                "id": 35,
                "thumbnail": "xa-lach-gcf126-405.jpg",
                "category_id": 3,
                "brand_id": null,
                "name": "Xà lách trộn kiểu Nga35",
                "price": "32000000.00",
                "quality": 23,
                "description": "Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.",
                "content": "<h2>This is content<\/h2>",
                "code": "XL-233",
                "promotion_price": "15000000.00",
                "promotion_description": null,
                "alias": "xa-lach-tron-kieu-nga35",
                "created_at": null,
                "updated_at": null,
                "deleted_at": null
            },
            {
                "id": 34,
                "thumbnail": "xa-lach-gcf126-405.jpg",
                "category_id": 3,
                "brand_id": null,
                "name": "Xà lách trộn kiểu Nga34",
                "price": "32000000.00",
                "quality": 23,
                "description": "Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.",
                "content": "<h2>This is content<\/h2>",
                "code": "XL-233",
                "promotion_price": "15000000.00",
                "promotion_description": null,
                "alias": "xa-lach-tron-kieu-nga34",
                "created_at": null,
                "updated_at": null,
                "deleted_at": null
            },
            {
                "id": 33,
                "thumbnail": "xa-lach-gcf126-405.jpg",
                "category_id": 3,
                "brand_id": null,
                "name": "Xà lách trộn kiểu Nga33",
                "price": "32000000.00",
                "quality": 23,
                "description": "Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.",
                "content": "<h2>This is content<\/h2>",
                "code": "XL-233",
                "promotion_price": "15000000.00",
                "promotion_description": null,
                "alias": "xa-lach-tron-kieu-nga33",
                "created_at": null,
                "updated_at": null,
                "deleted_at": null
            },
            {
                "id": 32,
                "thumbnail": "xa-lach-gcf126-405.jpg",
                "category_id": 3,
                "brand_id": null,
                "name": "Xà lách trộn kiểu Nga32",
                "price": "32000000.00",
                "quality": 23,
                "description": "Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.",
                "content": "<h2>This is content<\/h2>",
                "code": "XL-233",
                "promotion_price": "15000000.00",
                "promotion_description": null,
                "alias": "xa-lach-tron-kieu-nga32",
                "created_at": null,
                "updated_at": null,
                "deleted_at": null
            },
            {
                "id": 31,
                "thumbnail": "xa-lach-gcf126-405.jpg",
                "category_id": 3,
                "brand_id": null,
                "name": "Xà lách trộn kiểu Nga31",
                "price": "32000000.00",
                "quality": 23,
                "description": "Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.",
                "content": "<h2>This is content<\/h2>",
                "code": "XL-233",
                "promotion_price": "15000000.00",
                "promotion_description": null,
                "alias": "xa-lach-tron-kieu-nga31",
                "created_at": null,
                "updated_at": null,
                "deleted_at": null
            }
        ],
        "first_page_url": "http:\/\/localhost\/api\/product-category\/1?page=1",
        "from": 1,
        "last_page": 4,
        "last_page_url": "http:\/\/localhost\/api\/product-category\/1?page=4",
        "next_page_url": "http:\/\/localhost\/api\/product-category\/1?page=2",
        "path": "http:\/\/localhost\/api\/product-category\/1",
        "per_page": 10,
        "prev_page_url": null,
        "to": 10,
        "total": 40
    }
}
```

### HTTP Request
`GET api/product-category/{id}`


<!-- END_a058bd4f9319edbcca599b1822880435 -->

<!-- START_3db79f856cbed2669e802338432e5649 -->
## api/product-brand/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/product-brand/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product-brand/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

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
    "status": "success",
    "data": {
        "current_page": 1,
        "data": [],
        "first_page_url": "http:\/\/localhost\/api\/product-brand\/1?page=1",
        "from": null,
        "last_page": 1,
        "last_page_url": "http:\/\/localhost\/api\/product-brand\/1?page=1",
        "next_page_url": null,
        "path": "http:\/\/localhost\/api\/product-brand\/1",
        "per_page": 10,
        "prev_page_url": null,
        "to": null,
        "total": 0
    }
}
```

### HTTP Request
`GET api/product-brand/{id}`


<!-- END_3db79f856cbed2669e802338432e5649 -->

<!-- START_d2e080af51835880674d3e2496ed6e62 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

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
    "status": "success",
    "data": {
        "data": [
            {
                "id": 120,
                "user_id": 120,
                "name": "Vincent Kshlerin",
                "email": "ahessel@hotmail.com",
                "address": "118 Junius Valley\nKesslermouth, VA 75124-8202",
                "phone": "1-542-253-3301 x3883",
                "description": "corrupti",
                "payment": "17000",
                "transport": "Viettel Post",
                "status": 2,
                "total": "15000000",
                "details": [],
                "created_at": "29-06-2020",
                "updated_at": "2005-05-14T00:00:00.000000Z"
            },
            {
                "id": 119,
                "user_id": 119,
                "name": "Rossie Romaguera",
                "email": "rrunte@harris.com",
                "address": "9549 Brock Pike Suite 808\nPort Oma, MO 08174",
                "phone": "1-892-600-7455",
                "description": "at",
                "payment": "17000",
                "transport": "Viettel Post",
                "status": 0,
                "total": "15000000",
                "details": [],
                "created_at": "29-06-2020",
                "updated_at": "1977-04-22T00:00:00.000000Z"
            },
            {
                "id": 118,
                "user_id": 118,
                "name": "Vernon Little",
                "email": "raven07@gmail.com",
                "address": "66720 Kshlerin Valley Suite 290\nPort Jennifer, WY 14842-1878",
                "phone": "1-737-853-6668",
                "description": "consequatur",
                "payment": "17000",
                "transport": "Viettel Post",
                "status": 1,
                "total": "15000000",
                "details": [],
                "created_at": "29-06-2020",
                "updated_at": "1996-02-07T00:00:00.000000Z"
            },
            {
                "id": 117,
                "user_id": 117,
                "name": "Teresa West",
                "email": "blair20@kohler.com",
                "address": "531 Gunnar Highway Apt. 166\nRuthieton, GA 26915-3145",
                "phone": "+1-396-669-6313",
                "description": "quas",
                "payment": "17000",
                "transport": "Viettel Post",
                "status": 1,
                "total": "15000000",
                "details": [],
                "created_at": "29-06-2020",
                "updated_at": "2004-05-27T00:00:00.000000Z"
            },
            {
                "id": 116,
                "user_id": 116,
                "name": "Solon Kovacek",
                "email": "guadalupe.wisozk@von.net",
                "address": "4893 Stamm Plains\nKuhictown, PA 07969-0462",
                "phone": "(615) 903-7943 x229",
                "description": "corrupti",
                "payment": "17000",
                "transport": "Viettel Post",
                "status": 2,
                "total": "15000000",
                "details": [],
                "created_at": "29-06-2020",
                "updated_at": "2020-02-07T00:00:00.000000Z"
            },
            {
                "id": 115,
                "user_id": 115,
                "name": "Imani Mills Jr.",
                "email": "zwolf@hauck.com",
                "address": "8788 Wiley Harbor Suite 399\nEduardobury, ND 85793-2779",
                "phone": "743-353-0290 x465",
                "description": "tempore",
                "payment": "17000",
                "transport": "Viettel Post",
                "status": 1,
                "total": "15000000",
                "details": [],
                "created_at": "29-06-2020",
                "updated_at": "1980-05-12T00:00:00.000000Z"
            },
            {
                "id": 114,
                "user_id": 114,
                "name": "Luis Welch",
                "email": "madonna52@yahoo.com",
                "address": "5789 Goldner Divide Suite 010\nTyreeview, ND 84790",
                "phone": "(647) 830-6135",
                "description": "et",
                "payment": "17000",
                "transport": "Viettel Post",
                "status": 0,
                "total": "15000000",
                "details": [],
                "created_at": "29-06-2020",
                "updated_at": "2015-12-03T00:00:00.000000Z"
            },
            {
                "id": 113,
                "user_id": 113,
                "name": "Gavin Anderson Jr.",
                "email": "catherine.nitzsche@gutmann.com",
                "address": "16919 Effertz Motorway Suite 865\nHenrybury, AL 64261-3019",
                "phone": "(632) 702-2909",
                "description": "perspiciatis",
                "payment": "17000",
                "transport": "Viettel Post",
                "status": 1,
                "total": "15000000",
                "details": [],
                "created_at": "29-06-2020",
                "updated_at": "1983-09-08T00:00:00.000000Z"
            },
            {
                "id": 112,
                "user_id": 112,
                "name": "Samanta Stiedemann",
                "email": "lubowitz.emmy@mertz.net",
                "address": "8196 Albina Drives\nLake Kaitlynberg, RI 39322-6851",
                "phone": "(612) 865-6904 x708",
                "description": "facilis",
                "payment": "17000",
                "transport": "Viettel Post",
                "status": 2,
                "total": "15000000",
                "details": [],
                "created_at": "29-06-2020",
                "updated_at": "2001-09-16T00:00:00.000000Z"
            },
            {
                "id": 111,
                "user_id": 111,
                "name": "Bud Kub",
                "email": "sheaney@gmail.com",
                "address": "9974 Rohan Circle\nTremayneville, NM 52736",
                "phone": "901.807.3145 x005",
                "description": "et",
                "payment": "17000",
                "transport": "Viettel Post",
                "status": 1,
                "total": "15000000",
                "details": [],
                "created_at": "29-06-2020",
                "updated_at": "2013-01-27T00:00:00.000000Z"
            },
            {
                "id": 110,
                "user_id": 110,
                "name": "Prof. Amir Harber III",
                "email": "monahan.maye@gmail.com",
                "address": "14592 Fisher Gateway Suite 842\nNorth Brock, VA 10311",
                "phone": "734.301.0513",
                "description": "temporibus",
                "payment": "17000",
                "transport": "Viettel Post",
                "status": 2,
                "total": "15000000",
                "details": [],
                "created_at": "29-06-2020",
                "updated_at": "1971-03-10T00:00:00.000000Z"
            },
            {
                "id": 109,
                "user_id": 109,
                "name": "Stefanie Fisher I",
                "email": "tomasa09@hotmail.com",
                "address": "7895 Kirlin Avenue\nEast Murphy, MA 00019-7035",
                "phone": "(282) 926-8311 x1886",
                "description": "aut",
                "payment": "17000",
                "transport": "Viettel Post",
                "status": 2,
                "total": "15000000",
                "details": [],
                "created_at": "29-06-2020",
                "updated_at": "1973-10-21T00:00:00.000000Z"
            },
            {
                "id": 108,
                "user_id": 108,
                "name": "Gregory Dare",
                "email": "misael.christiansen@rogahn.com",
                "address": "1265 Kurtis Pine Apt. 626\nPort Kamron, AK 81554",
                "phone": "212-562-8062",
                "description": "et",
                "payment": "17000",
                "transport": "Viettel Post",
                "status": 1,
                "total": "15000000",
                "details": [],
                "created_at": "29-06-2020",
                "updated_at": "2015-12-28T00:00:00.000000Z"
            },
            {
                "id": 107,
                "user_id": 107,
                "name": "Holly Borer",
                "email": "xmorar@gmail.com",
                "address": "730 Will Park\nDarylbury, RI 02666",
                "phone": "413-747-0712 x46326",
                "description": "suscipit",
                "payment": "17000",
                "transport": "Viettel Post",
                "status": 1,
                "total": "15000000",
                "details": [],
                "created_at": "29-06-2020",
                "updated_at": "1972-03-24T00:00:00.000000Z"
            },
            {
                "id": 106,
                "user_id": 106,
                "name": "Carlo Hettinger",
                "email": "velma.johnston@kshlerin.com",
                "address": "6330 Maxime Crossing Apt. 038\nRuthefort, FL 15248-7658",
                "phone": "+1-250-251-8506",
                "description": "maxime",
                "payment": "17000",
                "transport": "Viettel Post",
                "status": 2,
                "total": "15000000",
                "details": [],
                "created_at": "29-06-2020",
                "updated_at": "2000-12-17T00:00:00.000000Z"
            }
        ],
        "meta": {
            "pagination": {
                "total": 120,
                "count": 15,
                "per_page": 15,
                "current_page": 1,
                "total_pages": 8,
                "links": {
                    "next": "http:\/\/localhost\/api\/order?page=2"
                }
            }
        }
    }
}
```

### HTTP Request
`GET api/order`


<!-- END_d2e080af51835880674d3e2496ed6e62 -->

<!-- START_cd95d3e90339c282e0b608349e80a381 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/order`


<!-- END_cd95d3e90339c282e0b608349e80a381 -->

<!-- START_9c4ec790d3f07a332b085b8efc187b58 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/order/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/order/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

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
    "status": "success",
    "data": {
        "data": {
            "id": 1,
            "user_id": 1,
            "name": "Marianna Adams",
            "email": "estrella.kris@heathcote.com",
            "address": "30981 Kshlerin Heights\nTimmymouth, GA 02154",
            "phone": "+1.802.368.1687",
            "description": "debitis",
            "payment": "17000",
            "transport": "Viettel Post",
            "status": 0,
            "total": "15000000",
            "details": [],
            "created_at": "29-06-2020",
            "updated_at": "1978-01-10T00:00:00.000000Z"
        }
    }
}
```

### HTTP Request
`GET api/order/{order}`


<!-- END_9c4ec790d3f07a332b085b8efc187b58 -->

<!-- START_7e6a4bec449169aefb738a72d134f654 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/order/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/order/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/order/{order}`

`PATCH api/order/{order}`


<!-- END_7e6a4bec449169aefb738a72d134f654 -->

<!-- START_13abedc865b3acba6db70061a19ecb09 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/order/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/order/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/order/{order}`


<!-- END_13abedc865b3acba6db70061a19ecb09 -->

<!-- START_f329965099e51ed43db3cbc48425d11d -->
## api/order/updateStatus
> Example request:

```bash
curl -X POST \
    "http://localhost/api/order/updateStatus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/order/updateStatus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/order/updateStatus`


<!-- END_f329965099e51ed43db3cbc48425d11d -->

<!-- START_acb8269be2928b6a8d3878ae76e8e34a -->
## api/carts
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/carts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/carts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

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
    "message": "Bạn chưa có sản phẩm nào trong giỏ hàng"
}
```

### HTTP Request
`GET api/carts`


<!-- END_acb8269be2928b6a8d3878ae76e8e34a -->

<!-- START_209151df6d4ff372c60684bbc809008a -->
## api/carts/{id}/add
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/carts/1/add" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/carts/1/add"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

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
    "count": 1
}
```

### HTTP Request
`GET api/carts/{id}/add`


<!-- END_209151df6d4ff372c60684bbc809008a -->

<!-- START_99562a66acd9bba9a98e3010fb634c93 -->
## api/carts/{id}/remove
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/carts/1/remove" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/carts/1/remove"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

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
    "message": "Bạn đã xóa giỏ hàng"
}
```

### HTTP Request
`GET api/carts/{id}/remove`


<!-- END_99562a66acd9bba9a98e3010fb634c93 -->

<!-- START_fb57d129e8046b5e7ba2bf8276a51238 -->
## api/carts/{id}/update
> Example request:

```bash
curl -X POST \
    "http://localhost/api/carts/1/update" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/carts/1/update"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/carts/{id}/update`


<!-- END_fb57d129e8046b5e7ba2bf8276a51238 -->

<!-- START_1ae2cc25e1afb2b87a70a92c6cd5a56a -->
## api/order/create
> Example request:

```bash
curl -X POST \
    "http://localhost/api/order/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/order/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/order/create`


<!-- END_1ae2cc25e1afb2b87a70a92c6cd5a56a -->

<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## api/login
> Example request:

```bash
curl -X POST \
    "http://localhost/api/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/login`


<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->

<!-- START_90f45d502fd52fdc0b289e55ba3c2ec6 -->
## api/signup
> Example request:

```bash
curl -X POST \
    "http://localhost/api/signup" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/signup"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/signup`


<!-- END_90f45d502fd52fdc0b289e55ba3c2ec6 -->

<!-- START_61739f3220a224b34228600649230ad1 -->
## api/logout
> Example request:

```bash
curl -X POST \
    "http://localhost/api/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/logout`


<!-- END_61739f3220a224b34228600649230ad1 -->

<!-- START_9bbfc13f0750a7e9c27c0786a5f67e0a -->
## api/user/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/user/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (400):

```json
{
    "error": true,
    "message": "error"
}
```

### HTTP Request
`GET api/user/{id}`


<!-- END_9bbfc13f0750a7e9c27c0786a5f67e0a -->

<!-- START_2e8bfad8b5ee0d3e9c3ecb359efaa492 -->
## api/user/update/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/user/update/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user/update/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/update/{id}`


<!-- END_2e8bfad8b5ee0d3e9c3ecb359efaa492 -->

<!-- START_9b8dd9b5728ff76460a0238f5a08e87f -->
## api/user/changePassword/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/api/user/changePassword/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user/changePassword/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user/changePassword/{id}`


<!-- END_9b8dd9b5728ff76460a0238f5a08e87f -->

<!-- START_e89023096f9286fd231ccec7dd6a0439 -->
## api/cart/user
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/cart/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/cart/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/cart/user`


<!-- END_e89023096f9286fd231ccec7dd6a0439 -->

<!-- START_3045eab9b818156433434f751510823f -->
## api/cart/{id}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/cart/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/cart/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/cart/{id}`


<!-- END_3045eab9b818156433434f751510823f -->

<!-- START_31ffac3a110ca4858e085244a686e611 -->
## api/cart/{id}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/cart/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/cart/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/cart/{id}`


<!-- END_31ffac3a110ca4858e085244a686e611 -->

<!-- START_70299d96b6b738f70d3e06e58bb051a9 -->
## api/product/{id}/comment
> Example request:

```bash
curl -X POST \
    "http://localhost/api/product/1/comment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/product/1/comment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/product/{id}/comment`


<!-- END_70299d96b6b738f70d3e06e58bb051a9 -->

<!-- START_79440f0eff63910eb430f2c9f55ea537 -->
## api/comment/{id}
> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/comment/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/comment/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/comment/{id}`


<!-- END_79440f0eff63910eb430f2c9f55ea537 -->


