<?php
/**
 * VideoApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Semanticwrap
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SEMANTIC WRAPPER API
 *
 * To answer any query about your data
 *
 * The version of the OpenAPI document: 2.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Semanticwrap\semanticwrap;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Semanticwrap\ApiException;
use Semanticwrap\Configuration;
use Semanticwrap\HeaderSelector;
use Semanticwrap\ObjectSerializer;

/**
 * VideoApi Class Doc Comment
 *
 * @category Class
 * @package  Semanticwrap
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class VideoApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'getYoutubeTranscript' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getYoutubeTranscript
     *
     * Get video transcript
     *
     * @param  string $video_id video_id (required)
     * @param  \Semanticwrap\Model\YoutubeMicrodataRequestModel $payload payload (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getYoutubeTranscript'] to see the possible values for this operation
     *
     * @throws \Semanticwrap\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Semanticwrap\Model\YoutubeTranscriptResponseModel|\Semanticwrap\Model\Ack|\Semanticwrap\Model\Error
     */
    public function getYoutubeTranscript($video_id, $payload, string $contentType = self::contentTypes['getYoutubeTranscript'][0])
    {
        list($response) = $this->getYoutubeTranscriptWithHttpInfo($video_id, $payload, $contentType);
        return $response;
    }

    /**
     * Operation getYoutubeTranscriptWithHttpInfo
     *
     * Get video transcript
     *
     * @param  string $video_id (required)
     * @param  \Semanticwrap\Model\YoutubeMicrodataRequestModel $payload (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getYoutubeTranscript'] to see the possible values for this operation
     *
     * @throws \Semanticwrap\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Semanticwrap\Model\YoutubeTranscriptResponseModel|\Semanticwrap\Model\Ack|\Semanticwrap\Model\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function getYoutubeTranscriptWithHttpInfo($video_id, $payload, string $contentType = self::contentTypes['getYoutubeTranscript'][0])
    {
        $request = $this->getYoutubeTranscriptRequest($video_id, $payload, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Semanticwrap\Model\YoutubeTranscriptResponseModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Semanticwrap\Model\YoutubeTranscriptResponseModel' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Semanticwrap\Model\YoutubeTranscriptResponseModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 202:
                    if ('\Semanticwrap\Model\Ack' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Semanticwrap\Model\Ack' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Semanticwrap\Model\Ack', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Semanticwrap\Model\Error' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Semanticwrap\Model\Error' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Semanticwrap\Model\Error', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Semanticwrap\Model\YoutubeTranscriptResponseModel';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Semanticwrap\Model\YoutubeTranscriptResponseModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Semanticwrap\Model\Ack',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Semanticwrap\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getYoutubeTranscriptAsync
     *
     * Get video transcript
     *
     * @param  string $video_id (required)
     * @param  \Semanticwrap\Model\YoutubeMicrodataRequestModel $payload (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getYoutubeTranscript'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getYoutubeTranscriptAsync($video_id, $payload, string $contentType = self::contentTypes['getYoutubeTranscript'][0])
    {
        return $this->getYoutubeTranscriptAsyncWithHttpInfo($video_id, $payload, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getYoutubeTranscriptAsyncWithHttpInfo
     *
     * Get video transcript
     *
     * @param  string $video_id (required)
     * @param  \Semanticwrap\Model\YoutubeMicrodataRequestModel $payload (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getYoutubeTranscript'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getYoutubeTranscriptAsyncWithHttpInfo($video_id, $payload, string $contentType = self::contentTypes['getYoutubeTranscript'][0])
    {
        $returnType = '\Semanticwrap\Model\YoutubeTranscriptResponseModel';
        $request = $this->getYoutubeTranscriptRequest($video_id, $payload, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getYoutubeTranscript'
     *
     * @param  string $video_id (required)
     * @param  \Semanticwrap\Model\YoutubeMicrodataRequestModel $payload (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getYoutubeTranscript'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getYoutubeTranscriptRequest($video_id, $payload, string $contentType = self::contentTypes['getYoutubeTranscript'][0])
    {

        // verify the required parameter 'video_id' is set
        if ($video_id === null || (is_array($video_id) && count($video_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $video_id when calling getYoutubeTranscript'
            );
        }

        // verify the required parameter 'payload' is set
        if ($payload === null || (is_array($payload) && count($payload) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payload when calling getYoutubeTranscript'
            );
        }


        $resourcePath = '/video/youtube_transcript/{video_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($video_id !== null) {
            $resourcePath = str_replace(
                '{' . 'video_id' . '}',
                ObjectSerializer::toPathValue($video_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($payload)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($payload));
            } else {
                $httpBody = $payload;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
