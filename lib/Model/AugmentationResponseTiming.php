<?php
/**
 * AugmentationResponseTiming
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
 * AugmentationResponseTiming Class Doc Comment
 *
 * @category Class
 * @description The timing of the cal
 * @package  Semanticwrap
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AugmentationResponseTiming implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AugmentationResponse_timing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'vector_timing' => 'int',
        'augment_timing' => 'int',
        'embedding_token_count' => 'int',
        'augmenting_token_count' => 'int',
        'model_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'vector_timing' => null,
        'augment_timing' => null,
        'embedding_token_count' => null,
        'augmenting_token_count' => null,
        'model_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'vector_timing' => false,
		'augment_timing' => false,
		'embedding_token_count' => false,
		'augmenting_token_count' => false,
		'model_name' => false
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
        'vector_timing' => 'vector_timing',
        'augment_timing' => 'augment_timing',
        'embedding_token_count' => 'embedding_token_count',
        'augmenting_token_count' => 'augmenting_token_count',
        'model_name' => 'model_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vector_timing' => 'setVectorTiming',
        'augment_timing' => 'setAugmentTiming',
        'embedding_token_count' => 'setEmbeddingTokenCount',
        'augmenting_token_count' => 'setAugmentingTokenCount',
        'model_name' => 'setModelName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vector_timing' => 'getVectorTiming',
        'augment_timing' => 'getAugmentTiming',
        'embedding_token_count' => 'getEmbeddingTokenCount',
        'augmenting_token_count' => 'getAugmentingTokenCount',
        'model_name' => 'getModelName'
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
        $this->setIfExists('vector_timing', $data ?? [], null);
        $this->setIfExists('augment_timing', $data ?? [], null);
        $this->setIfExists('embedding_token_count', $data ?? [], null);
        $this->setIfExists('augmenting_token_count', $data ?? [], null);
        $this->setIfExists('model_name', $data ?? [], null);
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

        if ($this->container['vector_timing'] === null) {
            $invalidProperties[] = "'vector_timing' can't be null";
        }
        if ($this->container['augment_timing'] === null) {
            $invalidProperties[] = "'augment_timing' can't be null";
        }
        if ($this->container['embedding_token_count'] === null) {
            $invalidProperties[] = "'embedding_token_count' can't be null";
        }
        if ($this->container['augmenting_token_count'] === null) {
            $invalidProperties[] = "'augmenting_token_count' can't be null";
        }
        if ($this->container['model_name'] === null) {
            $invalidProperties[] = "'model_name' can't be null";
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
     * Gets vector_timing
     *
     * @return int
     */
    public function getVectorTiming()
    {
        return $this->container['vector_timing'];
    }

    /**
     * Sets vector_timing
     *
     * @param int $vector_timing The time taken to search the vector store
     *
     * @return self
     */
    public function setVectorTiming($vector_timing)
    {
        if (is_null($vector_timing)) {
            throw new \InvalidArgumentException('non-nullable vector_timing cannot be null');
        }
        $this->container['vector_timing'] = $vector_timing;

        return $this;
    }

    /**
     * Gets augment_timing
     *
     * @return int
     */
    public function getAugmentTiming()
    {
        return $this->container['augment_timing'];
    }

    /**
     * Sets augment_timing
     *
     * @param int $augment_timing The time taken to augment the results
     *
     * @return self
     */
    public function setAugmentTiming($augment_timing)
    {
        if (is_null($augment_timing)) {
            throw new \InvalidArgumentException('non-nullable augment_timing cannot be null');
        }
        $this->container['augment_timing'] = $augment_timing;

        return $this;
    }

    /**
     * Gets embedding_token_count
     *
     * @return int
     */
    public function getEmbeddingTokenCount()
    {
        return $this->container['embedding_token_count'];
    }

    /**
     * Sets embedding_token_count
     *
     * @param int $embedding_token_count The number of tokens in the embedding
     *
     * @return self
     */
    public function setEmbeddingTokenCount($embedding_token_count)
    {
        if (is_null($embedding_token_count)) {
            throw new \InvalidArgumentException('non-nullable embedding_token_count cannot be null');
        }
        $this->container['embedding_token_count'] = $embedding_token_count;

        return $this;
    }

    /**
     * Gets augmenting_token_count
     *
     * @return int
     */
    public function getAugmentingTokenCount()
    {
        return $this->container['augmenting_token_count'];
    }

    /**
     * Sets augmenting_token_count
     *
     * @param int $augmenting_token_count The number of tokens in the augmenting text
     *
     * @return self
     */
    public function setAugmentingTokenCount($augmenting_token_count)
    {
        if (is_null($augmenting_token_count)) {
            throw new \InvalidArgumentException('non-nullable augmenting_token_count cannot be null');
        }
        $this->container['augmenting_token_count'] = $augmenting_token_count;

        return $this;
    }

    /**
     * Gets model_name
     *
     * @return string
     */
    public function getModelName()
    {
        return $this->container['model_name'];
    }

    /**
     * Sets model_name
     *
     * @param string $model_name The name of the model
     *
     * @return self
     */
    public function setModelName($model_name)
    {
        if (is_null($model_name)) {
            throw new \InvalidArgumentException('non-nullable model_name cannot be null');
        }
        $this->container['model_name'] = $model_name;

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


