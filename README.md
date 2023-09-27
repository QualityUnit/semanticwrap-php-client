# OpenAPIClient-php

To answer any query about your data


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/semanticwrap/semanticwrap-php-client.git"
    }
  ],
  "require": {
    "semanticwrap/semanticwrap-php-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to */api/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AugmentationApi* | [**asyncAugment**](docs/Api/AugmentationApi.md#asyncaugment) | **POST** /augmentation/async/augment/{index_name} | Answers a given query from the documents in the index
*AugmentationApi* | [**augment**](docs/Api/AugmentationApi.md#augment) | **POST** /augmentation/augment/{index_name} | Answers a given query from the documents in the index
*AugmentationApi* | [**augmentByUrls**](docs/Api/AugmentationApi.md#augmentbyurls) | **POST** /augmentation/complex-chain/urls | Answers a given query from the documents in the index
*AugmentationApi* | [**chatAugment**](docs/Api/AugmentationApi.md#chataugment) | **POST** /augmentation/chat/augment/{index_name} | Answers a given query from the documents in the index
*AugmentationApi* | [**complexAugment**](docs/Api/AugmentationApi.md#complexaugment) | **POST** /augmentation/complex-chain/docs | Answers a given query from the documents in the index
*DocumentsApi* | [**deleteDocument**](docs/Api/DocumentsApi.md#deletedocument) | **DELETE** /doc/{index_name}/{doc_id} | Deletes a document
*DocumentsApi* | [**deleteDocumentByQuery**](docs/Api/DocumentsApi.md#deletedocumentbyquery) | **POST** /doc/delete_by_query/{index_name} | Delete a document by query
*DocumentsApi* | [**getDocument**](docs/Api/DocumentsApi.md#getdocument) | **GET** /doc/{index_name}/{doc_id} | Get a document
*DocumentsApi* | [**getDocumentByQuery**](docs/Api/DocumentsApi.md#getdocumentbyquery) | **POST** /doc/{index_name} | Get a document by query
*DocumentsApi* | [**updateDocumentByQuery**](docs/Api/DocumentsApi.md#updatedocumentbyquery) | **POST** /doc/_update_by_query/{index_name} | Update a document by query
*FineTunedApi* | [**listFineTunedModel**](docs/Api/FineTunedApi.md#listfinetunedmodel) | **POST** /fine_tuned/ | Get fine tuned models
*FineTunedApi* | [**memorylessAugmentV2**](docs/Api/FineTunedApi.md#memorylessaugmentv2) | **POST** /fine_tuned/memoryless/augment | Answers a given query from the documents in the index
*IndexApi* | [**createIndex**](docs/Api/IndexApi.md#createindex) | **PUT** /index/_mapping/{index_name} | Create a new index if it does not exist
*IndexApi* | [**indexDocuments**](docs/Api/IndexApi.md#indexdocuments) | **POST** /index/bulk/{index_name} | Adds new documents to the index
*ProcessApi* | [**getAsyncProcessResult**](docs/Api/ProcessApi.md#getasyncprocessresult) | **GET** /async_process/{process_id} | Get result of async process
*SearchApi* | [**search**](docs/Api/SearchApi.md#search) | **POST** /search/{index_name} | Get Related Documents from the index with ANN search
*SearchApi* | [**searchByVector**](docs/Api/SearchApi.md#searchbyvector) | **POST** /search/vector/{index_name} | Get Related Documents from the index with ANN search
*SearchApi* | [**searchDocsById**](docs/Api/SearchApi.md#searchdocsbyid) | **POST** /search/{index_name}/{doc_id} | Get Related Documents from the index with ANN search for given document id
*VideoApi* | [**getYoutubeTranscript**](docs/Api/VideoApi.md#getyoutubetranscript) | **POST** /video/youtube_transcript/{video_id} | Get video transcript

## Models

- [AIModel](docs/Model/AIModel.md)
- [Ack](docs/Model/Ack.md)
- [AsyncProcessResponse](docs/Model/AsyncProcessResponse.md)
- [AugmentationQueryV2](docs/Model/AugmentationQueryV2.md)
- [AuthSecurity](docs/Model/AuthSecurity.md)
- [BulkIndex](docs/Model/BulkIndex.md)
- [ChatCompletionQuery](docs/Model/ChatCompletionQuery.md)
- [CompletionQuery](docs/Model/CompletionQuery.md)
- [CompletionQueryFilter](docs/Model/CompletionQueryFilter.md)
- [CompletionQueryModel](docs/Model/CompletionQueryModel.md)
- [CompletionQueryPrompt](docs/Model/CompletionQueryPrompt.md)
- [CompletionResponse](docs/Model/CompletionResponse.md)
- [CompletionResponseResult](docs/Model/CompletionResponseResult.md)
- [CompletionResponseTiming](docs/Model/CompletionResponseTiming.md)
- [ComplexAugmentationWithDocs](docs/Model/ComplexAugmentationWithDocs.md)
- [DocsSearch](docs/Model/DocsSearch.md)
- [DocsSearchFilter](docs/Model/DocsSearchFilter.md)
- [Document](docs/Model/Document.md)
- [DocumentNonQuery](docs/Model/DocumentNonQuery.md)
- [DocumentQuery](docs/Model/DocumentQuery.md)
- [DocumentQueryByVector](docs/Model/DocumentQueryByVector.md)
- [DocumentQueryFilter](docs/Model/DocumentQueryFilter.md)
- [DocumentQueryModel](docs/Model/DocumentQueryModel.md)
- [Error](docs/Model/Error.md)
- [IndexMapping](docs/Model/IndexMapping.md)
- [IndexMappingModel](docs/Model/IndexMappingModel.md)
- [IndexResponse](docs/Model/IndexResponse.md)
- [IndexResponseTiming](docs/Model/IndexResponseTiming.md)
- [LlmBulkResponse](docs/Model/LlmBulkResponse.md)
- [LlmBulkResponseTiming](docs/Model/LlmBulkResponseTiming.md)
- [LlmResponse](docs/Model/LlmResponse.md)
- [PromptTemplateModel](docs/Model/PromptTemplateModel.md)
- [QueryFilter](docs/Model/QueryFilter.md)
- [RelatedDocs](docs/Model/RelatedDocs.md)
- [SWAIFineTunedModel](docs/Model/SWAIFineTunedModel.md)
- [SearchResponse](docs/Model/SearchResponse.md)
- [TimingModel](docs/Model/TimingModel.md)
- [UpdateDoc](docs/Model/UpdateDoc.md)
- [UrlCrawlingAugmentationQuery](docs/Model/UrlCrawlingAugmentationQuery.md)
- [YoutubeMicrodataRequestModel](docs/Model/YoutubeMicrodataRequestModel.md)
- [YoutubeTranscriptResponseModel](docs/Model/YoutubeTranscriptResponseModel.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.0`
    - Package version: `2.0.4`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
