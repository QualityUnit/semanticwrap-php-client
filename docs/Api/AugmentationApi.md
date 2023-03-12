# Swagger\Client\AugmentationApi

All URIs are relative to *https://localhost/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**memoryfullAugment**](AugmentationApi.md#memoryfullAugment) | **POST** /augment/memoryfull/{index_name} | Answers a given query from the documents in the index
[**memorylessAugment**](AugmentationApi.md#memorylessAugment) | **POST** /augment/memoryless/{index_name} | Answers a given query from the documents in the index


# **memoryfullAugment**
> \Swagger\Client\Model\AugmentationResponse memoryfullAugment($index_name, $payload, $with_source)

Answers a given query from the documents in the index

get an llm augmentation from your own indexed data with memory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: openai_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X_OPENAI_KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X_OPENAI_KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\AugmentationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$index_name = "index_name_example"; // string | 
$payload = new \Swagger\Client\Model\MemoryfullAugmentationQuery(); // \Swagger\Client\Model\MemoryfullAugmentationQuery | 
$with_source = "with_source_example"; // string | If true, the source of the answer is returned

try {
    $result = $apiInstance->memoryfullAugment($index_name, $payload, $with_source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AugmentationApi->memoryfullAugment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **index_name** | **string**|  |
 **payload** | [**\Swagger\Client\Model\MemoryfullAugmentationQuery**](../Model/MemoryfullAugmentationQuery.md)|  |
 **with_source** | **string**| If true, the source of the answer is returned | [optional]

### Return type

[**\Swagger\Client\Model\AugmentationResponse**](../Model/AugmentationResponse.md)

### Authorization

[openai_key](../../README.md#openai_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **memorylessAugment**
> \Swagger\Client\Model\AugmentationResponse memorylessAugment($index_name, $payload, $with_source)

Answers a given query from the documents in the index

get an llm augmentation from your own indexed data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: openai_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X_OPENAI_KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X_OPENAI_KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\AugmentationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$index_name = "index_name_example"; // string | 
$payload = new \Swagger\Client\Model\MemorylessAugmentationQuery(); // \Swagger\Client\Model\MemorylessAugmentationQuery | 
$with_source = "with_source_example"; // string | If true, the source of the answer is returned

try {
    $result = $apiInstance->memorylessAugment($index_name, $payload, $with_source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AugmentationApi->memorylessAugment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **index_name** | **string**|  |
 **payload** | [**\Swagger\Client\Model\MemorylessAugmentationQuery**](../Model/MemorylessAugmentationQuery.md)|  |
 **with_source** | **string**| If true, the source of the answer is returned | [optional]

### Return type

[**\Swagger\Client\Model\AugmentationResponse**](../Model/AugmentationResponse.md)

### Authorization

[openai_key](../../README.md#openai_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

