# Semanticwrap\DocumentsApi

All URIs are relative to /api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteDocument()**](DocumentsApi.md#deleteDocument) | **DELETE** /doc/{index_name}/{doc_id} | Deletes a document |
| [**deleteDocumentByQuery()**](DocumentsApi.md#deleteDocumentByQuery) | **POST** /doc/delete_by_query/{index_name} | Delete a document by query |
| [**getDocument()**](DocumentsApi.md#getDocument) | **GET** /doc/{index_name}/{doc_id} | Get a document |
| [**getDocumentByQuery()**](DocumentsApi.md#getDocumentByQuery) | **POST** /doc/{index_name} | Get a document by query |


## `deleteDocument()`

```php
deleteDocument($index_name, $doc_id, $payload): \Semanticwrap\Model\Ack
```

Deletes a document

deletes a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Semanticwrap\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$index_name = 'index_name_example'; // string
$doc_id = 'doc_id_example'; // string
$payload = new \Semanticwrap\Model\DocsSearch(); // \Semanticwrap\Model\DocsSearch

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
| **payload** | [**\Semanticwrap\Model\DocsSearch**](../Model/DocsSearch.md)|  | |

### Return type

[**\Semanticwrap\Model\Ack**](../Model/Ack.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDocumentByQuery()`

```php
deleteDocumentByQuery($index_name, $payload): \Semanticwrap\Model\Ack
```

Delete a document by query

Delete a document by query

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Semanticwrap\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$index_name = 'index_name_example'; // string
$payload = new \Semanticwrap\Model\DocsSearch(); // \Semanticwrap\Model\DocsSearch

try {
    $result = $apiInstance->deleteDocumentByQuery($index_name, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->deleteDocumentByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index_name** | **string**|  | |
| **payload** | [**\Semanticwrap\Model\DocsSearch**](../Model/DocsSearch.md)|  | |

### Return type

[**\Semanticwrap\Model\Ack**](../Model/Ack.md)

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
getDocument($index_name, $doc_id, $payload): \Semanticwrap\Model\Document
```

Get a document

Get a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Semanticwrap\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$index_name = 'index_name_example'; // string
$doc_id = 'doc_id_example'; // string
$payload = new \Semanticwrap\Model\DocsSearch(); // \Semanticwrap\Model\DocsSearch

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
| **payload** | [**\Semanticwrap\Model\DocsSearch**](../Model/DocsSearch.md)|  | |

### Return type

[**\Semanticwrap\Model\Document**](../Model/Document.md)

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
getDocumentByQuery($index_name, $payload): \Semanticwrap\Model\Document[]
```

Get a document by query

Get a document by query

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Semanticwrap\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$index_name = 'index_name_example'; // string
$payload = new \Semanticwrap\Model\DocsSearch(); // \Semanticwrap\Model\DocsSearch

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
| **payload** | [**\Semanticwrap\Model\DocsSearch**](../Model/DocsSearch.md)|  | |

### Return type

[**\Semanticwrap\Model\Document[]**](../Model/Document.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
