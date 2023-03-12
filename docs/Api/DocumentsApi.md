# Swagger\Client\DocumentsApi

All URIs are relative to *https://localhost/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteDocument**](DocumentsApi.md#deleteDocument) | **DELETE** /doc/{index_name}/{doc_id} | Deletes a document
[**getDocument**](DocumentsApi.md#getDocument) | **GET** /doc/{index_name}/{doc_id} | Get a document
[**getDocumentByQuery**](DocumentsApi.md#getDocumentByQuery) | **POST** /doc/{index_name} | Get a document by query


# **deleteDocument**
> \Swagger\Client\Model\Ack deleteDocument($embedding_class, $embedding_model_name, $index_name, $doc_id)

Deletes a document

deletes a document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$embedding_class = "embedding_class_example"; // string | The embedding class used for indexing document
$embedding_model_name = "embedding_model_name_example"; // string | The embedding model name used for indexing document
$index_name = "index_name_example"; // string | 
$doc_id = "doc_id_example"; // string | 

try {
    $result = $apiInstance->deleteDocument($embedding_class, $embedding_model_name, $index_name, $doc_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->deleteDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **embedding_class** | **string**| The embedding class used for indexing document |
 **embedding_model_name** | **string**| The embedding model name used for indexing document |
 **index_name** | **string**|  |
 **doc_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\Ack**](../Model/Ack.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocument**
> \Swagger\Client\Model\Document getDocument($embedding_class, $embedding_model_name, $index_name, $doc_id)

Get a document

Get a document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$embedding_class = "embedding_class_example"; // string | The embedding class used for indexing document
$embedding_model_name = "embedding_model_name_example"; // string | The embedding model name used for indexing document
$index_name = "index_name_example"; // string | 
$doc_id = "doc_id_example"; // string | 

try {
    $result = $apiInstance->getDocument($embedding_class, $embedding_model_name, $index_name, $doc_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **embedding_class** | **string**| The embedding class used for indexing document |
 **embedding_model_name** | **string**| The embedding model name used for indexing document |
 **index_name** | **string**|  |
 **doc_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\Document**](../Model/Document.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocumentByQuery**
> \Swagger\Client\Model\Document[] getDocumentByQuery($embedding_class, $embedding_model_name, $index_name, $payload)

Get a document by query

Get a document by query

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$embedding_class = "embedding_class_example"; // string | The embedding class used for indexing document
$embedding_model_name = "embedding_model_name_example"; // string | The embedding model name used for indexing document
$index_name = "index_name_example"; // string | 
$payload = new \Swagger\Client\Model\QueryFilter(); // \Swagger\Client\Model\QueryFilter | 

try {
    $result = $apiInstance->getDocumentByQuery($embedding_class, $embedding_model_name, $index_name, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getDocumentByQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **embedding_class** | **string**| The embedding class used for indexing document |
 **embedding_model_name** | **string**| The embedding model name used for indexing document |
 **index_name** | **string**|  |
 **payload** | [**\Swagger\Client\Model\QueryFilter**](../Model/QueryFilter.md)|  |

### Return type

[**\Swagger\Client\Model\Document[]**](../Model/Document.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

