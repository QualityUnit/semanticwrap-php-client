# OpenAPI\Client\IndexApi

All URIs are relative to /api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createIndex()**](IndexApi.md#createIndex) | **PUT** /index/_mapping/{index_name} | Create a new index if it does not exist |
| [**indexDocuments()**](IndexApi.md#indexDocuments) | **POST** /index/bulk/{index_name} | Adds new documents to the index |


## `createIndex()`

```php
createIndex($index_name, $payload): \OpenAPI\Client\Model\IndexMapping
```

Create a new index if it does not exist

Create a new index, will return 400 if index already exists

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: huggingface_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-HUGGINGFACE-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-HUGGINGFACE-KEY', 'Bearer');

// Configure API key authorization: openai_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-OPENAI-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-OPENAI-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IndexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$index_name = 'index_name_example'; // string
$payload = new \OpenAPI\Client\Model\IndexMapping(); // \OpenAPI\Client\Model\IndexMapping

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
| **payload** | [**\OpenAPI\Client\Model\IndexMapping**](../Model/IndexMapping.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IndexMapping**](../Model/IndexMapping.md)

### Authorization

[huggingface_key](../../README.md#huggingface_key), [openai_key](../../README.md#openai_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexDocuments()`

```php
indexDocuments($index_name, $payload): \OpenAPI\Client\Model\IndexResponse
```

Adds new documents to the index

indexing multiple document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: huggingface_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-HUGGINGFACE-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-HUGGINGFACE-KEY', 'Bearer');

// Configure API key authorization: openai_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-OPENAI-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-OPENAI-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IndexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$index_name = 'index_name_example'; // string
$payload = new \OpenAPI\Client\Model\BulkIndex(); // \OpenAPI\Client\Model\BulkIndex

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
| **payload** | [**\OpenAPI\Client\Model\BulkIndex**](../Model/BulkIndex.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IndexResponse**](../Model/IndexResponse.md)

### Authorization

[huggingface_key](../../README.md#huggingface_key), [openai_key](../../README.md#openai_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
