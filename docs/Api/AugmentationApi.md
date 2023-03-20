# OpenAPI\Client\AugmentationApi

All URIs are relative to /api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**memoryfullAugment()**](AugmentationApi.md#memoryfullAugment) | **POST** /augment/memoryfull/{index_name} | Answers a given query from the documents in the index |
| [**memorylessAugment()**](AugmentationApi.md#memorylessAugment) | **POST** /augment/memoryless/{index_name} | Answers a given query from the documents in the index |


## `memoryfullAugment()`

```php
memoryfullAugment($index_name, $payload, $with_source): \OpenAPI\Client\Model\AugmentationResponse
```

Answers a given query from the documents in the index

get an llm augmentation from your own indexed data with memory

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AugmentationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$index_name = 'index_name_example'; // string
$payload = new \OpenAPI\Client\Model\MemoryfullAugmentationQuery(); // \OpenAPI\Client\Model\MemoryfullAugmentationQuery
$with_source = 'with_source_example'; // string | If true, the source of the answer is returned

try {
    $result = $apiInstance->memoryfullAugment($index_name, $payload, $with_source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AugmentationApi->memoryfullAugment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index_name** | **string**|  | |
| **payload** | [**\OpenAPI\Client\Model\MemoryfullAugmentationQuery**](../Model/MemoryfullAugmentationQuery.md)|  | |
| **with_source** | **string**| If true, the source of the answer is returned | [optional] |

### Return type

[**\OpenAPI\Client\Model\AugmentationResponse**](../Model/AugmentationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `memorylessAugment()`

```php
memorylessAugment($index_name, $payload, $ignore_query, $with_source): \OpenAPI\Client\Model\AugmentationResponse
```

Answers a given query from the documents in the index

get an llm augmentation from your own indexed data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AugmentationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$index_name = 'index_name_example'; // string
$payload = new \OpenAPI\Client\Model\MemorylessAugmentationQuery(); // \OpenAPI\Client\Model\MemorylessAugmentationQuery
$ignore_query = 'ignore_query_example'; // string | If true, the query is ignored and instead only the elasticsearch filter is applied
$with_source = 'with_source_example'; // string | If true, the source of the answer is returned

try {
    $result = $apiInstance->memorylessAugment($index_name, $payload, $ignore_query, $with_source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AugmentationApi->memorylessAugment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index_name** | **string**|  | |
| **payload** | [**\OpenAPI\Client\Model\MemorylessAugmentationQuery**](../Model/MemorylessAugmentationQuery.md)|  | |
| **ignore_query** | **string**| If true, the query is ignored and instead only the elasticsearch filter is applied | [optional] |
| **with_source** | **string**| If true, the source of the answer is returned | [optional] |

### Return type

[**\OpenAPI\Client\Model\AugmentationResponse**](../Model/AugmentationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
