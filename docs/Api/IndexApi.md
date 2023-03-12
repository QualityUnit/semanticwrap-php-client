# Swagger\Client\IndexApi

All URIs are relative to *https://localhost/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createIndex**](IndexApi.md#createIndex) | **PUT** /index/_mapping/{index_name} | Create a new index if it does not exist
[**indexDocuments**](IndexApi.md#indexDocuments) | **POST** /index/bulk/{index_name} | Adds new documents to the index


# **createIndex**
> \Swagger\Client\Model\IndexMapping createIndex($index_name, $payload)

Create a new index if it does not exist

Create a new index, will return 400 if index already exists

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: openai_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X_OPENAI_KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X_OPENAI_KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\IndexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$index_name = "index_name_example"; // string | 
$payload = new \Swagger\Client\Model\IndexMapping(); // \Swagger\Client\Model\IndexMapping | 

try {
    $result = $apiInstance->createIndex($index_name, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndexApi->createIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **index_name** | **string**|  |
 **payload** | [**\Swagger\Client\Model\IndexMapping**](../Model/IndexMapping.md)|  |

### Return type

[**\Swagger\Client\Model\IndexMapping**](../Model/IndexMapping.md)

### Authorization

[openai_key](../../README.md#openai_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexDocuments**
> \Swagger\Client\Model\IndexResponse indexDocuments($index_name, $payload)

Adds new documents to the index

indexing multiple document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: openai_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X_OPENAI_KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X_OPENAI_KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\IndexApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$index_name = "index_name_example"; // string | 
$payload = new \Swagger\Client\Model\BulkIndex(); // \Swagger\Client\Model\BulkIndex | 

try {
    $result = $apiInstance->indexDocuments($index_name, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndexApi->indexDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **index_name** | **string**|  |
 **payload** | [**\Swagger\Client\Model\BulkIndex**](../Model/BulkIndex.md)|  |

### Return type

[**\Swagger\Client\Model\IndexResponse**](../Model/IndexResponse.md)

### Authorization

[openai_key](../../README.md#openai_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

