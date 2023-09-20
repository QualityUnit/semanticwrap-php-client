# Semanticwrap\AugmentationApi

All URIs are relative to /api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**asyncAugment()**](AugmentationApi.md#asyncAugment) | **POST** /augmentation/async/augment/{index_name} | Answers a given query from the documents in the index |
| [**augment()**](AugmentationApi.md#augment) | **POST** /augmentation/augment/{index_name} | Answers a given query from the documents in the index |
| [**augmentByUrls()**](AugmentationApi.md#augmentByUrls) | **POST** /augmentation/complex-chain/urls | Answers a given query from the documents in the index |
| [**chatAugment()**](AugmentationApi.md#chatAugment) | **POST** /augmentation/chat/augment/{index_name} | Answers a given query from the documents in the index |
| [**complexAugment()**](AugmentationApi.md#complexAugment) | **POST** /augmentation/complex-chain/docs | Answers a given query from the documents in the index |


## `asyncAugment()`

```php
asyncAugment($index_name, $payload, $error_on_empty_docs, $with_source): \Semanticwrap\Model\AsyncProcessResponse
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
$payload = new \Semanticwrap\Model\CompletionQuery(); // \Semanticwrap\Model\CompletionQuery
$error_on_empty_docs = 'error_on_empty_docs_example'; // string | If true, will return 400 error if no docs are found
$with_source = 'with_source_example'; // string | If true, the source of the answer is returned

try {
    $result = $apiInstance->asyncAugment($index_name, $payload, $error_on_empty_docs, $with_source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AugmentationApi->asyncAugment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index_name** | **string**|  | |
| **payload** | [**\Semanticwrap\Model\CompletionQuery**](../Model/CompletionQuery.md)|  | |
| **error_on_empty_docs** | **string**| If true, will return 400 error if no docs are found | [optional] |
| **with_source** | **string**| If true, the source of the answer is returned | [optional] |

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

## `augment()`

```php
augment($index_name, $payload, $error_on_empty_docs, $with_source): \Semanticwrap\Model\CompletionResponse
```

Answers a given query from the documents in the index

get an llm completion from your own indexed data

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
$payload = new \Semanticwrap\Model\CompletionQuery(); // \Semanticwrap\Model\CompletionQuery
$error_on_empty_docs = 'error_on_empty_docs_example'; // string | If true, will return 400 error if no docs are found
$with_source = 'with_source_example'; // string | If true, the source of the answer is returned

try {
    $result = $apiInstance->augment($index_name, $payload, $error_on_empty_docs, $with_source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AugmentationApi->augment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index_name** | **string**|  | |
| **payload** | [**\Semanticwrap\Model\CompletionQuery**](../Model/CompletionQuery.md)|  | |
| **error_on_empty_docs** | **string**| If true, will return 400 error if no docs are found | [optional] |
| **with_source** | **string**| If true, the source of the answer is returned | [optional] |

### Return type

[**\Semanticwrap\Model\CompletionResponse**](../Model/CompletionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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

## `chatAugment()`

```php
chatAugment($index_name, $payload, $error_on_empty_docs, $with_source): \Semanticwrap\Model\CompletionResponse
```

Answers a given query from the documents in the index

get an llm completion from your own indexed data

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
$payload = new \Semanticwrap\Model\ChatCompletionQuery(); // \Semanticwrap\Model\ChatCompletionQuery
$error_on_empty_docs = 'error_on_empty_docs_example'; // string | If true, will return 400 error if no docs are found
$with_source = 'with_source_example'; // string | If true, the source of the answer is returned

try {
    $result = $apiInstance->chatAugment($index_name, $payload, $error_on_empty_docs, $with_source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AugmentationApi->chatAugment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index_name** | **string**|  | |
| **payload** | [**\Semanticwrap\Model\ChatCompletionQuery**](../Model/ChatCompletionQuery.md)|  | |
| **error_on_empty_docs** | **string**| If true, will return 400 error if no docs are found | [optional] |
| **with_source** | **string**| If true, the source of the answer is returned | [optional] |

### Return type

[**\Semanticwrap\Model\CompletionResponse**](../Model/CompletionResponse.md)

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
