# Semanticwrap\VideoApi

All URIs are relative to /api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getYoutubeTranscript()**](VideoApi.md#getYoutubeTranscript) | **POST** /video/youtube_transcript/{video_id} | Get video transcript |


## `getYoutubeTranscript()`

```php
getYoutubeTranscript($video_id, $payload): \Semanticwrap\Model\YoutubeTranscriptResponseModel
```

Get video transcript

get YouTube video transcript

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Semanticwrap\Api\VideoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$video_id = 'video_id_example'; // string
$payload = new \Semanticwrap\Model\YoutubeMicrodataRequestModel(); // \Semanticwrap\Model\YoutubeMicrodataRequestModel

try {
    $result = $apiInstance->getYoutubeTranscript($video_id, $payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoApi->getYoutubeTranscript: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **video_id** | **string**|  | |
| **payload** | [**\Semanticwrap\Model\YoutubeMicrodataRequestModel**](../Model/YoutubeMicrodataRequestModel.md)|  | |

### Return type

[**\Semanticwrap\Model\YoutubeTranscriptResponseModel**](../Model/YoutubeTranscriptResponseModel.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
