# OpenAPI\Client\DocumentsApi

All URIs are relative to /api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteDocument()**](DocumentsApi.md#deleteDocument) | **DELETE** /doc/{index_name}/{doc_id} | Deletes a document |
| [**getDocument()**](DocumentsApi.md#getDocument) | **GET** /doc/{index_name}/{doc_id} | Get a document |
| [**getDocumentByQuery()**](DocumentsApi.md#getDocumentByQuery) | **POST** /doc/{index_name} | Get a document by query |


## `deleteDocument()`

```php
deleteDocument($index_name, $doc_id, $payload): \OpenAPI\Client\Model\Ack
```

Deletes a document

deletes a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$index_name = 'index_name_example'; // string
$doc_id = 'doc_id_example'; // string
$payload = new \OpenAPI\Client\Model\DocsSearch(); // \OpenAPI\Client\Model\DocsSearch

try {
    $result = $apiInstance->deleteDocument($index_name, $doc_id, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->deleteDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index_name** | **string**|  | |
| **doc_id** | **string**|  | |
| **payload** | [**\OpenAPI\Client\Model\DocsSearch**](../Model/DocsSearch.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Ack**](../Model/Ack.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocument()`

```php
getDocument($index_name, $doc_id, $payload): \OpenAPI\Client\Model\Document
```

Get a document

Get a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$index_name = 'index_name_example'; // string
$doc_id = 'doc_id_example'; // string
$payload = new \OpenAPI\Client\Model\DocsSearch(); // \OpenAPI\Client\Model\DocsSearch

try {
    $result = $apiInstance->getDocument($index_name, $doc_id, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index_name** | **string**|  | |
| **doc_id** | **string**|  | |
| **payload** | [**\OpenAPI\Client\Model\DocsSearch**](../Model/DocsSearch.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Document**](../Model/Document.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocumentByQuery()`

```php
getDocumentByQuery($index_name, $payload): \OpenAPI\Client\Model\Document[]
```

Get a document by query

Get a document by query

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$index_name = 'index_name_example'; // string
$payload = new \OpenAPI\Client\Model\DocsSearch(); // \OpenAPI\Client\Model\DocsSearch

try {
    $result = $apiInstance->getDocumentByQuery($index_name, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getDocumentByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index_name** | **string**|  | |
| **payload** | [**\OpenAPI\Client\Model\DocsSearch**](../Model/DocsSearch.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Document[]**](../Model/Document.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
