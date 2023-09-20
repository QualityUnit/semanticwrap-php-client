# Semanticwrap\IndexApi

All URIs are relative to /api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createIndex()**](IndexApi.md#createIndex) | **PUT** /index/_mapping/{index_name} | Create a new index if it does not exist |
| [**indexDocuments()**](IndexApi.md#indexDocuments) | **POST** /index/bulk/{index_name} | Adds new documents to the index |


## `createIndex()`

```php
createIndex($index_name, $payload): \Semanticwrap\Model\IndexMapping
```

Create a new index if it does not exist

Create a new index, will return 400 if index already exists

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Semanticwrap\Api\IndexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$index_name = 'index_name_example'; // string
$payload = new \Semanticwrap\Model\IndexMapping(); // \Semanticwrap\Model\IndexMapping

try {
    $result = $apiInstance->createIndex($index_name, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndexApi->createIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index_name** | **string**|  | |
| **payload** | [**\Semanticwrap\Model\IndexMapping**](../Model/IndexMapping.md)|  | |

### Return type

[**\Semanticwrap\Model\IndexMapping**](../Model/IndexMapping.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexDocuments()`

```php
indexDocuments($index_name, $payload): \Semanticwrap\Model\IndexResponse
```

Adds new documents to the index

indexing multiple document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Semanticwrap\Api\IndexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$index_name = 'index_name_example'; // string
$payload = new \Semanticwrap\Model\BulkIndex(); // \Semanticwrap\Model\BulkIndex

try {
    $result = $apiInstance->indexDocuments($index_name, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndexApi->indexDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index_name** | **string**|  | |
| **payload** | [**\Semanticwrap\Model\BulkIndex**](../Model/BulkIndex.md)|  | |

### Return type

[**\Semanticwrap\Model\IndexResponse**](../Model/IndexResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
