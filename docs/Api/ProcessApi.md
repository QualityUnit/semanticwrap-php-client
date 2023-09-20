# Semanticwrap\ProcessApi

All URIs are relative to /api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAsyncProcessResult()**](ProcessApi.md#getAsyncProcessResult) | **GET** /async_process/{process_id} | Get result of async process |


## `getAsyncProcessResult()`

```php
getAsyncProcessResult($process_id): \Semanticwrap\Model\LlmBulkResponse
```

Get result of async process

get result of async process

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Semanticwrap\Api\ProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$process_id = 'process_id_example'; // string

try {
    $result = $apiInstance->getAsyncProcessResult($process_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessApi->getAsyncProcessResult: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **process_id** | **string**|  | |

### Return type

[**\Semanticwrap\Model\LlmBulkResponse**](../Model/LlmBulkResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
