# Semanticwrap\AugmentationApi

All URIs are relative to /api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**augmentByUrls()**](AugmentationApi.md#augmentByUrls) | **POST** /augment/complex-chain/urls | Answers a given query from the documents in the index |
| [**complexAugment()**](AugmentationApi.md#complexAugment) | **POST** /augment/complex-chain/docs | Answers a given query from the documents in the index |
| [**memoryfullAugment()**](AugmentationApi.md#memoryfullAugment) | **POST** /augment/memoryfull/{index_name} | Answers a given query from the documents in the index |
| [**memorylessAugment()**](AugmentationApi.md#memorylessAugment) | **POST** /augment/memoryless/{index_name} | Answers a given query from the documents in the index |


## `augmentByUrls()`

```php
augmentByUrls($payload): \Semanticwrap\Model\AsyncProcessResponse
```

Answers a given query from the documents in the index

get llm augmentation from urls specified in the request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Semanticwrap\Api\AugmentationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payload = new \Semanticwrap\Model\UrlCrawlingAugmentationQuery(); // \Semanticwrap\Model\UrlCrawlingAugmentationQuery

try {
    $result = $apiInstance->augmentByUrls($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AugmentationApi->augmentByUrls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payload** | [**\Semanticwrap\Model\UrlCrawlingAugmentationQuery**](../Model/UrlCrawlingAugmentationQuery.md)|  | |

### Return type

[**\Semanticwrap\Model\AsyncProcessResponse**](../Model/AsyncProcessResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `complexAugment()`

```php
complexAugment($payload): \Semanticwrap\Model\AsyncProcessResponse
```

Answers a given query from the documents in the index

get llm augmentation from urls specified in the request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Semanticwrap\Api\AugmentationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payload = new \Semanticwrap\Model\ComplexAugmentationWithDocs(); // \Semanticwrap\Model\ComplexAugmentationWithDocs

try {
    $result = $apiInstance->complexAugment($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AugmentationApi->complexAugment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payload** | [**\Semanticwrap\Model\ComplexAugmentationWithDocs**](../Model/ComplexAugmentationWithDocs.md)|  | |

### Return type

[**\Semanticwrap\Model\AsyncProcessResponse**](../Model/AsyncProcessResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `memoryfullAugment()`

```php
memoryfullAugment($index_name, $payload, $ignore_query, $with_source): \Semanticwrap\Model\AugmentationResponse
```

Answers a given query from the documents in the index

get an llm augmentation from your own indexed data with memory

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Semanticwrap\Api\AugmentationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$index_name = 'index_name_example'; // string
$payload = new \Semanticwrap\Model\MemoryfullAugmentationQuery(); // \Semanticwrap\Model\MemoryfullAugmentationQuery
$ignore_query = 'ignore_query_example'; // string | If true, the query is ignored and instead only the elasticsearch filter is applied
$with_source = 'with_source_example'; // string | If true, the source of the answer is returned

try {
    $result = $apiInstance->memoryfullAugment($index_name, $payload, $ignore_query, $with_source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AugmentationApi->memoryfullAugment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index_name** | **string**|  | |
| **payload** | [**\Semanticwrap\Model\MemoryfullAugmentationQuery**](../Model/MemoryfullAugmentationQuery.md)|  | |
| **ignore_query** | **string**| If true, the query is ignored and instead only the elasticsearch filter is applied | [optional] |
| **with_source** | **string**| If true, the source of the answer is returned | [optional] |

### Return type

[**\Semanticwrap\Model\AugmentationResponse**](../Model/AugmentationResponse.md)

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
memorylessAugment($index_name, $payload, $context_mandatory, $custom_context, $ignore_query, $with_source): \Semanticwrap\Model\AugmentationResponse
```

Answers a given query from the documents in the index

get an llm augmentation from your own indexed data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Semanticwrap\Api\AugmentationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$index_name = 'index_name_example'; // string
$payload = new \Semanticwrap\Model\MemorylessAugmentationQuery(); // \Semanticwrap\Model\MemorylessAugmentationQuery
$context_mandatory = 'context_mandatory_example'; // string | If true, the context is mandatory for the client to set
$custom_context = 'custom_context_example'; // string | If true, there will be user-defined custom documents fed to llm
$ignore_query = 'ignore_query_example'; // string | If true, the query is ignored and instead only the elasticsearch filter is applied
$with_source = 'with_source_example'; // string | If true, the source of the answer is returned

try {
    $result = $apiInstance->memorylessAugment($index_name, $payload, $context_mandatory, $custom_context, $ignore_query, $with_source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AugmentationApi->memorylessAugment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index_name** | **string**|  | |
| **payload** | [**\Semanticwrap\Model\MemorylessAugmentationQuery**](../Model/MemorylessAugmentationQuery.md)|  | |
| **context_mandatory** | **string**| If true, the context is mandatory for the client to set | [optional] |
| **custom_context** | **string**| If true, there will be user-defined custom documents fed to llm | [optional] |
| **ignore_query** | **string**| If true, the query is ignored and instead only the elasticsearch filter is applied | [optional] |
| **with_source** | **string**| If true, the source of the answer is returned | [optional] |

### Return type

[**\Semanticwrap\Model\AugmentationResponse**](../Model/AugmentationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
