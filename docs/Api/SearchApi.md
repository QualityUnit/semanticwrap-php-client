# Semanticwrap\SearchApi

All URIs are relative to /api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**search()**](SearchApi.md#search) | **POST** /search/{index_name} | Get Related Documents from the index with ANN search |
| [**searchByVector()**](SearchApi.md#searchByVector) | **POST** /search/vector/{index_name} | Get Related Documents from the index with ANN search |
| [**searchDocsById()**](SearchApi.md#searchDocsById) | **POST** /search/{index_name}/{doc_id} | Get Related Documents from the index with ANN search for given document id |


## `search()`

```php
search($index_name, $payload): \Semanticwrap\Model\SearchResponse
```

Get Related Documents from the index with ANN search

Get Related Documents from the index with ANN search

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Semanticwrap\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$index_name = 'index_name_example'; // string
$payload = new \Semanticwrap\Model\DocumentQuery(); // \Semanticwrap\Model\DocumentQuery

try {
    $result = $apiInstance->search($index_name, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->search: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index_name** | **string**|  | |
| **payload** | [**\Semanticwrap\Model\DocumentQuery**](../Model/DocumentQuery.md)|  | |

### Return type

[**\Semanticwrap\Model\SearchResponse**](../Model/SearchResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchByVector()`

```php
searchByVector($index_name, $payload, $ignore_query): \Semanticwrap\Model\SearchResponse
```

Get Related Documents from the index with ANN search

Get Related Documents from the index with ANN search by vector

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Semanticwrap\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$index_name = 'index_name_example'; // string
$payload = new \Semanticwrap\Model\DocumentQueryByVector(); // \Semanticwrap\Model\DocumentQueryByVector
$ignore_query = 'ignore_query_example'; // string | If true, the query is ignored and instead only the elasticsearch filter is applied

try {
    $result = $apiInstance->searchByVector($index_name, $payload, $ignore_query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchByVector: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index_name** | **string**|  | |
| **payload** | [**\Semanticwrap\Model\DocumentQueryByVector**](../Model/DocumentQueryByVector.md)|  | |
| **ignore_query** | **string**| If true, the query is ignored and instead only the elasticsearch filter is applied | [optional] |

### Return type

[**\Semanticwrap\Model\SearchResponse**](../Model/SearchResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchDocsById()`

```php
searchDocsById($index_name, $doc_id, $payload): \Semanticwrap\Model\SearchResponse
```

Get Related Documents from the index with ANN search for given document id

Get Related Documents from the index with ANN search for given document id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Semanticwrap\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$index_name = 'index_name_example'; // string
$doc_id = 'doc_id_example'; // string
$payload = new \Semanticwrap\Model\DocumentNonQuery(); // \Semanticwrap\Model\DocumentNonQuery

try {
    $result = $apiInstance->searchDocsById($index_name, $doc_id, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchDocsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index_name** | **string**|  | |
| **doc_id** | **string**|  | |
| **payload** | [**\Semanticwrap\Model\DocumentNonQuery**](../Model/DocumentNonQuery.md)|  | |

### Return type

[**\Semanticwrap\Model\SearchResponse**](../Model/SearchResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
