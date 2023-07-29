<?php
/**
 * UrlCrawlingAugmentationQuery
 *
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

namespace Semanticwrap\Model;

use \ArrayAccess;
use \Semanticwrap\ObjectSerializer;

/**
 * UrlCrawlingAugmentationQuery Class Doc Comment
 *
 * @category Class
 * @package  Semanticwrap
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UrlCrawlingAugmentationQuery implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UrlCrawlingAugmentationQuery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'prompt' => 'object',
        'take_top_chunks' => 'int',
        'model' => '\Semanticwrap\Model\MemorylessAugmentationQueryModel',
        'urls' => 'string[]',
        'max_input_tokens' => 'int',
        'merge_strategy' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'prompt' => null,
        'take_top_chunks' => null,
        'model' => null,
        'urls' => null,
        'max_input_tokens' => null,
        'merge_strategy' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'prompt' => false,
		'take_top_chunks' => false,
		'model' => false,
		'urls' => false,
		'max_input_tokens' => false,
		'merge_strategy' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'prompt' => 'prompt',
        'take_top_chunks' => 'take_top_chunks',
        'model' => 'model',
        'urls' => 'urls',
        'max_input_tokens' => 'max_input_tokens',
        'merge_strategy' => 'merge_strategy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'prompt' => 'setPrompt',
        'take_top_chunks' => 'setTakeTopChunks',
        'model' => 'setModel',
        'urls' => 'setUrls',
        'max_input_tokens' => 'setMaxInputTokens',
        'merge_strategy' => 'setMergeStrategy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'prompt' => 'getPrompt',
        'take_top_chunks' => 'getTakeTopChunks',
        'model' => 'getModel',
        'urls' => 'getUrls',
        'max_input_tokens' => 'getMaxInputTokens',
        'merge_strategy' => 'getMergeStrategy'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('prompt', $data ?? [], null);
        $this->setIfExists('take_top_chunks', $data ?? [], null);
        $this->setIfExists('model', $data ?? [], null);
        $this->setIfExists('urls', $data ?? [], null);
        $this->setIfExists('max_input_tokens', $data ?? [], null);
        $this->setIfExists('merge_strategy', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['prompt'] === null) {
            $invalidProperties[] = "'prompt' can't be null";
        }
        if ($this->container['model'] === null) {
            $invalidProperties[] = "'model' can't be null";
        }
        if ($this->container['urls'] === null) {
            $invalidProperties[] = "'urls' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets prompt
     *
     * @return object
     */
    public function getPrompt()
    {
        return $this->container['prompt'];
    }

    /**
     * Sets prompt
     *
     * @param object $prompt Main prompt template to use
     *
     * @return self
     */
    public function setPrompt($prompt)
    {
        if (is_null($prompt)) {
            throw new \InvalidArgumentException('non-nullable prompt cannot be null');
        }
        $this->container['prompt'] = $prompt;

        return $this;
    }

    /**
     * Gets take_top_chunks
     *
     * @return int|null
     */
    public function getTakeTopChunks()
    {
        return $this->container['take_top_chunks'];
    }

    /**
     * Sets take_top_chunks
     *
     * @param int|null $take_top_chunks Number of top chunks to take
     *
     * @return self
     */
    public function setTakeTopChunks($take_top_chunks)
    {
        if (is_null($take_top_chunks)) {
            throw new \InvalidArgumentException('non-nullable take_top_chunks cannot be null');
        }
        $this->container['take_top_chunks'] = $take_top_chunks;

        return $this;
    }

    /**
     * Gets model
     *
     * @return \Semanticwrap\Model\MemorylessAugmentationQueryModel
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param \Semanticwrap\Model\MemorylessAugmentationQueryModel $model model
     *
     * @return self
     */
    public function setModel($model)
    {
        if (is_null($model)) {
            throw new \InvalidArgumentException('non-nullable model cannot be null');
        }
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets urls
     *
     * @return string[]
     */
    public function getUrls()
    {
        return $this->container['urls'];
    }

    /**
     * Sets urls
     *
     * @param string[] $urls urls
     *
     * @return self
     */
    public function setUrls($urls)
    {
        if (is_null($urls)) {
            throw new \InvalidArgumentException('non-nullable urls cannot be null');
        }
        $this->container['urls'] = $urls;

        return $this;
    }

    /**
     * Gets max_input_tokens
     *
     * @return int|null
     */
    public function getMaxInputTokens()
    {
        return $this->container['max_input_tokens'];
    }

    /**
     * Sets max_input_tokens
     *
     * @param int|null $max_input_tokens Maximum number of tokens
     *
     * @return self
     */
    public function setMaxInputTokens($max_input_tokens)
    {
        if (is_null($max_input_tokens)) {
            throw new \InvalidArgumentException('non-nullable max_input_tokens cannot be null');
        }
        $this->container['max_input_tokens'] = $max_input_tokens;

        return $this;
    }

    /**
     * Gets merge_strategy
     *
     * @return string|null
     */
    public function getMergeStrategy()
    {
        return $this->container['merge_strategy'];
    }

    /**
     * Sets merge_strategy
     *
     * @param string|null $merge_strategy Merge strategy
     *
     * @return self
     */
    public function setMergeStrategy($merge_strategy)
    {
        if (is_null($merge_strategy)) {
            throw new \InvalidArgumentException('non-nullable merge_strategy cannot be null');
        }
        $this->container['merge_strategy'] = $merge_strategy;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


