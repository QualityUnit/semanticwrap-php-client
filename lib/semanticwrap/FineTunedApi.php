<?php
/**
 * FineTunedApi
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
 * The version of the OpenAPI document: 1.0
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
 * FineTunedApi Class Doc Comment
 *
 * @category Class
 * @package  Semanticwrap
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FineTunedApi
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
        'listFineTunedModel' => [
            'application/json',
        ],
        'memorylessAugmentV2' => [
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
     * Operation listFineTunedModel
     *
     * Get fine tuned models
     *
     * @param  \Semanticwrap\Model\AuthSecurity $payload payload (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listFineTunedModel'] to see the possible values for this operation
     *
     * @throws \Semanticwrap\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Semanticwrap\Model\SWAIModel[]|\Semanticwrap\Model\Error|\Semanticwrap\Model\Error
     */
    public function listFineTunedModel($payload, string $contentType = self::contentTypes['listFineTunedModel'][0])
    {
        list($response) = $this->listFineTunedModelWithHttpInfo($payload, $contentType);
        return $response;
    }

    /**
     * Operation listFineTunedModelWithHttpInfo
     *
     * Get fine tuned models
     *
     * @param  \Semanticwrap\Model\AuthSecurity $payload (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listFineTunedModel'] to see the possible values for this operation
     *
     * @throws \Semanticwrap\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Semanticwrap\Model\SWAIModel[]|\Semanticwrap\Model\Error|\Semanticwrap\Model\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function listFineTunedModelWithHttpInfo($payload, string $contentType = self::contentTypes['listFineTunedModel'][0])
    {
        $request = $this->listFineTunedModelRequest($payload, $contentType);

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
                    if ('\Semanticwrap\Model\SWAIModel[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Semanticwrap\Model\SWAIModel[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Semanticwrap\Model\SWAIModel[]', []),
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
                case 404:
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

            $returnType = '\Semanticwrap\Model\SWAIModel[]';
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
                        '\Semanticwrap\Model\SWAIModel[]',
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
                case 404:
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
     * Operation listFineTunedModelAsync
     *
     * Get fine tuned models
     *
     * @param  \Semanticwrap\Model\AuthSecurity $payload (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listFineTunedModel'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listFineTunedModelAsync($payload, string $contentType = self::contentTypes['listFineTunedModel'][0])
    {
        return $this->listFineTunedModelAsyncWithHttpInfo($payload, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listFineTunedModelAsyncWithHttpInfo
     *
     * Get fine tuned models
     *
     * @param  \Semanticwrap\Model\AuthSecurity $payload (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listFineTunedModel'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listFineTunedModelAsyncWithHttpInfo($payload, string $contentType = self::contentTypes['listFineTunedModel'][0])
    {
        $returnType = '\Semanticwrap\Model\SWAIModel[]';
        $request = $this->listFineTunedModelRequest($payload, $contentType);

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
     * Create request for operation 'listFineTunedModel'
     *
     * @param  \Semanticwrap\Model\AuthSecurity $payload (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['listFineTunedModel'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function listFineTunedModelRequest($payload, string $contentType = self::contentTypes['listFineTunedModel'][0])
    {

        // verify the required parameter 'payload' is set
        if ($payload === null || (is_array($payload) && count($payload) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payload when calling listFineTunedModel'
            );
        }


        $resourcePath = '/fine_tuned/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





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
     * Operation memorylessAugmentV2
     *
     * Answers a given query from the documents in the index
     *
     * @param  string $index_name index_name (required)
     * @param  \Semanticwrap\Model\AugmentationQueryV2 $payload payload (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['memorylessAugmentV2'] to see the possible values for this operation
     *
     * @throws \Semanticwrap\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Semanticwrap\Model\AugmentationResponse|\Semanticwrap\Model\Error
     */
    public function memorylessAugmentV2($index_name, $payload, string $contentType = self::contentTypes['memorylessAugmentV2'][0])
    {
        list($response) = $this->memorylessAugmentV2WithHttpInfo($index_name, $payload, $contentType);
        return $response;
    }

    /**
     * Operation memorylessAugmentV2WithHttpInfo
     *
     * Answers a given query from the documents in the index
     *
     * @param  string $index_name (required)
     * @param  \Semanticwrap\Model\AugmentationQueryV2 $payload (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['memorylessAugmentV2'] to see the possible values for this operation
     *
     * @throws \Semanticwrap\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Semanticwrap\Model\AugmentationResponse|\Semanticwrap\Model\Error, HTTP status code, HTTP response headers (array of strings)
     */
    public function memorylessAugmentV2WithHttpInfo($index_name, $payload, string $contentType = self::contentTypes['memorylessAugmentV2'][0])
    {
        $request = $this->memorylessAugmentV2Request($index_name, $payload, $contentType);

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
                    if ('\Semanticwrap\Model\AugmentationResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Semanticwrap\Model\AugmentationResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Semanticwrap\Model\AugmentationResponse', []),
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

            $returnType = '\Semanticwrap\Model\AugmentationResponse';
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
                        '\Semanticwrap\Model\AugmentationResponse',
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
     * Operation memorylessAugmentV2Async
     *
     * Answers a given query from the documents in the index
     *
     * @param  string $index_name (required)
     * @param  \Semanticwrap\Model\AugmentationQueryV2 $payload (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['memorylessAugmentV2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function memorylessAugmentV2Async($index_name, $payload, string $contentType = self::contentTypes['memorylessAugmentV2'][0])
    {
        return $this->memorylessAugmentV2AsyncWithHttpInfo($index_name, $payload, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation memorylessAugmentV2AsyncWithHttpInfo
     *
     * Answers a given query from the documents in the index
     *
     * @param  string $index_name (required)
     * @param  \Semanticwrap\Model\AugmentationQueryV2 $payload (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['memorylessAugmentV2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function memorylessAugmentV2AsyncWithHttpInfo($index_name, $payload, string $contentType = self::contentTypes['memorylessAugmentV2'][0])
    {
        $returnType = '\Semanticwrap\Model\AugmentationResponse';
        $request = $this->memorylessAugmentV2Request($index_name, $payload, $contentType);

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
     * Create request for operation 'memorylessAugmentV2'
     *
     * @param  string $index_name (required)
     * @param  \Semanticwrap\Model\AugmentationQueryV2 $payload (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['memorylessAugmentV2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function memorylessAugmentV2Request($index_name, $payload, string $contentType = self::contentTypes['memorylessAugmentV2'][0])
    {

        // verify the required parameter 'index_name' is set
        if ($index_name === null || (is_array($index_name) && count($index_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $index_name when calling memorylessAugmentV2'
            );
        }

        // verify the required parameter 'payload' is set
        if ($payload === null || (is_array($payload) && count($payload) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payload when calling memorylessAugmentV2'
            );
        }


        $resourcePath = '/fine_tuned/memoryless/augment/{index_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($index_name !== null) {
            $resourcePath = str_replace(
                '{' . 'index_name' . '}',
                ObjectSerializer::toPathValue($index_name),
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
