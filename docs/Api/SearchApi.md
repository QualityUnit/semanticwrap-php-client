# Swagger\Client\SearchApi

All URIs are relative to *https://localhost/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**search**](SearchApi.md#search) | **POST** /search/{index_name} | Get Related Documents from the index with ANN search
[**searchByVector**](SearchApi.md#searchByVector) | **POST** /search/vector/{index_name} | Get Related Documents from the index with ANN search
[**searchDocsById**](SearchApi.md#searchDocsById) | **POST** /search/{index_name}/{doc_id} | Get Related Documents from the index with ANN search for given document id


# **search**
> \Swagger\Client\Model\SearchResponse search($index_name, $payload)

Get Related Documents from the index with ANN search

Get Related Documents from the index with ANN search

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: openai_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X_OPENAI_KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X_OPENAI_KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$index_name = "index_name_example"; // string | 
$payload = new \Swagger\Client\Model\DocumentQuery(); // \Swagger\Client\Model\DocumentQuery | 

try {
    $result = $apiInstance->search($index_name, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **index_name** | **string**|  |
 **payload** | [**\Swagger\Client\Model\DocumentQuery**](../Model/DocumentQuery.md)|  |

### Return type

[**\Swagger\Client\Model\SearchResponse**](../Model/SearchResponse.md)

### Authorization

[openai_key](../../README.md#openai_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchByVector**
> \Swagger\Client\Model\SearchResponse searchByVector($index_name, $payload)

Get Related Documents from the index with ANN search

Get Related Documents from the index with ANN search by vector

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: openai_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X_OPENAI_KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X_OPENAI_KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$index_name = "index_name_example"; // string | 
$payload = new \Swagger\Client\Model\DocumentQueryByVector(); // \Swagger\Client\Model\DocumentQueryByVector | 

try {
    $result = $apiInstance->searchByVector($index_name, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchByVector: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **index_name** | **string**|  |
 **payload** | [**\Swagger\Client\Model\DocumentQueryByVector**](../Model/DocumentQueryByVector.md)|  |

### Return type

[**\Swagger\Client\Model\SearchResponse**](../Model/SearchResponse.md)

### Authorization

[openai_key](../../README.md#openai_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchDocsById**
> \Swagger\Client\Model\SearchResponse searchDocsById($index_name, $doc_id, $payload)

Get Related Documents from the index with ANN search for given document id

Get Related Documents from the index with ANN search for given document id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: openai_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X_OPENAI_KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X_OPENAI_KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$index_name = "index_name_example"; // string | 
$doc_id = "doc_id_example"; // string | 
$payload = new \Swagger\Client\Model\DocumentNonQuery(); // \Swagger\Client\Model\DocumentNonQuery | 

try {
    $result = $apiInstance->searchDocsById($index_name, $doc_id, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchDocsById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **index_name** | **string**|  |
 **doc_id** | **string**|  |
 **payload** | [**\Swagger\Client\Model\DocumentNonQuery**](../Model/DocumentNonQuery.md)|  |

### Return type

[**\Swagger\Client\Model\SearchResponse**](../Model/SearchResponse.md)

### Authorization

[openai_key](../../README.md#openai_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

