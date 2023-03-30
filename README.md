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




$apiInstance = new OpenAPI\Client\Api\AugmentationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$index_name = 'index_name_example'; // string
$payload = new \OpenAPI\Client\Model\MemoryfullAugmentationQuery(); // \OpenAPI\Client\Model\MemoryfullAugmentationQuery
$ignore_query = 'ignore_query_example'; // string | If true, the query is ignored and instead only the elasticsearch filter is applied
$with_source = 'with_source_example'; // string | If true, the source of the answer is returned

try {
    $result = $apiInstance->memoryfullAugment($index_name, $payload, $ignore_query, $with_source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AugmentationApi->memoryfullAugment: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to */api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AugmentationApi* | [**memoryfullAugment**](docs/Api/AugmentationApi.md#memoryfullaugment) | **POST** /augment/memoryfull/{index_name} | Answers a given query from the documents in the index
*AugmentationApi* | [**memorylessAugment**](docs/Api/AugmentationApi.md#memorylessaugment) | **POST** /augment/memoryless/{index_name} | Answers a given query from the documents in the index
*DocumentsApi* | [**deleteDocument**](docs/Api/DocumentsApi.md#deletedocument) | **DELETE** /doc/{index_name}/{doc_id} | Deletes a document
*DocumentsApi* | [**deleteDocumentByQuery**](docs/Api/DocumentsApi.md#deletedocumentbyquery) | **DELETE** /doc/{index_name} | Delete a document by query
*DocumentsApi* | [**getDocument**](docs/Api/DocumentsApi.md#getdocument) | **GET** /doc/{index_name}/{doc_id} | Get a document
*DocumentsApi* | [**getDocumentByQuery**](docs/Api/DocumentsApi.md#getdocumentbyquery) | **POST** /doc/{index_name} | Get a document by query
*IndexApi* | [**createIndex**](docs/Api/IndexApi.md#createindex) | **PUT** /index/_mapping/{index_name} | Create a new index if it does not exist
*IndexApi* | [**indexDocuments**](docs/Api/IndexApi.md#indexdocuments) | **POST** /index/bulk/{index_name} | Adds new documents to the index
*SearchApi* | [**search**](docs/Api/SearchApi.md#search) | **POST** /search/{index_name} | Get Related Documents from the index with ANN search
*SearchApi* | [**searchByVector**](docs/Api/SearchApi.md#searchbyvector) | **POST** /search/vector/{index_name} | Get Related Documents from the index with ANN search
*SearchApi* | [**searchDocsById**](docs/Api/SearchApi.md#searchdocsbyid) | **POST** /search/{index_name}/{doc_id} | Get Related Documents from the index with ANN search for given document id

## Models

- [AIModel](docs/Model/AIModel.md)
- [Ack](docs/Model/Ack.md)
- [AugmentationResponse](docs/Model/AugmentationResponse.md)
- [AugmentationResponseResult](docs/Model/AugmentationResponseResult.md)
- [AugmentationResponseTiming](docs/Model/AugmentationResponseTiming.md)
- [AuthSecurity](docs/Model/AuthSecurity.md)
- [BulkIndex](docs/Model/BulkIndex.md)
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
- [LlmResponse](docs/Model/LlmResponse.md)
- [MemoryfullAugmentationQuery](docs/Model/MemoryfullAugmentationQuery.md)
- [MemorylessAugmentationQuery](docs/Model/MemorylessAugmentationQuery.md)
- [MemorylessAugmentationQueryFilter](docs/Model/MemorylessAugmentationQueryFilter.md)
- [MemorylessAugmentationQueryModel](docs/Model/MemorylessAugmentationQueryModel.md)
- [MemorylessAugmentationQueryPrompt](docs/Model/MemorylessAugmentationQueryPrompt.md)
- [PromptTemplateModel](docs/Model/PromptTemplateModel.md)
- [QueryFilter](docs/Model/QueryFilter.md)
- [RelatedDocs](docs/Model/RelatedDocs.md)
- [SearchResponse](docs/Model/SearchResponse.md)
- [TimingModel](docs/Model/TimingModel.md)

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

- API version: `1.0`
    - Package version: `1.0.29`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
