# Semanticwrap\FineTunedApi

All URIs are relative to /api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listFineTunedModel()**](FineTunedApi.md#listFineTunedModel) | **POST** /fine_tuned/ | Get fine tuned models |
| [**memorylessAugmentV2()**](FineTunedApi.md#memorylessAugmentV2) | **POST** /fine_tuned/memoryless/augment | Answers a given query from the documents in the index |


## `listFineTunedModel()`

```php
listFineTunedModel($payload): \Semanticwrap\Model\SWAIFineTunedModel
```

Get fine tuned models

Get a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Semanticwrap\Api\FineTunedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payload = new \Semanticwrap\Model\AuthSecurity(); // \Semanticwrap\Model\AuthSecurity

try {
    $result = $apiInstance->listFineTunedModel($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FineTunedApi->listFineTunedModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payload** | [**\Semanticwrap\Model\AuthSecurity**](../Model/AuthSecurity.md)|  | |

### Return type

[**\Semanticwrap\Model\SWAIFineTunedModel**](../Model/SWAIFineTunedModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `memorylessAugmentV2()`

```php
memorylessAugmentV2($payload): \Semanticwrap\Model\LlmResponse
```

Answers a given query from the documents in the index

get an llm augmentation from your own indexed data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Semanticwrap\Api\FineTunedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payload = new \Semanticwrap\Model\AugmentationQueryV2(); // \Semanticwrap\Model\AugmentationQueryV2

try {
    $result = $apiInstance->memorylessAugmentV2($payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FineTunedApi->memorylessAugmentV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payload** | [**\Semanticwrap\Model\AugmentationQueryV2**](../Model/AugmentationQueryV2.md)|  | |

### Return type

[**\Semanticwrap\Model\LlmResponse**](../Model/LlmResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
