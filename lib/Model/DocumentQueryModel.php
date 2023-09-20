<?php
/**
 * DocumentQueryModel
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
 * The version of the OpenAPI document: 2.0
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
 * DocumentQueryModel Class Doc Comment
 *
 * @category Class
 * @description The model to use for the query
 * @package  Semanticwrap
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DocumentQueryModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DocumentQuery_model';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'embedding_class' => 'string',
        'embedding_model_name' => 'string',
        'augmenting_class' => 'string',
        'augmenting_model_name' => 'string',
        'embed_instruction' => 'string',
        'query_instruction' => 'string',
        'self_hosted_url' => 'string',
        'auth_security' => '\Semanticwrap\Model\AuthSecurity'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'embedding_class' => null,
        'embedding_model_name' => null,
        'augmenting_class' => null,
        'augmenting_model_name' => null,
        'embed_instruction' => null,
        'query_instruction' => null,
        'self_hosted_url' => null,
        'auth_security' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'embedding_class' => false,
		'embedding_model_name' => false,
		'augmenting_class' => false,
		'augmenting_model_name' => false,
		'embed_instruction' => false,
		'query_instruction' => false,
		'self_hosted_url' => false,
		'auth_security' => false
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
        'embedding_class' => 'embedding_class',
        'embedding_model_name' => 'embedding_model_name',
        'augmenting_class' => 'augmenting_class',
        'augmenting_model_name' => 'augmenting_model_name',
        'embed_instruction' => 'embed_instruction',
        'query_instruction' => 'query_instruction',
        'self_hosted_url' => 'self_hosted_url',
        'auth_security' => 'auth_security'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'embedding_class' => 'setEmbeddingClass',
        'embedding_model_name' => 'setEmbeddingModelName',
        'augmenting_class' => 'setAugmentingClass',
        'augmenting_model_name' => 'setAugmentingModelName',
        'embed_instruction' => 'setEmbedInstruction',
        'query_instruction' => 'setQueryInstruction',
        'self_hosted_url' => 'setSelfHostedUrl',
        'auth_security' => 'setAuthSecurity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'embedding_class' => 'getEmbeddingClass',
        'embedding_model_name' => 'getEmbeddingModelName',
        'augmenting_class' => 'getAugmentingClass',
        'augmenting_model_name' => 'getAugmentingModelName',
        'embed_instruction' => 'getEmbedInstruction',
        'query_instruction' => 'getQueryInstruction',
        'self_hosted_url' => 'getSelfHostedUrl',
        'auth_security' => 'getAuthSecurity'
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
        $this->setIfExists('embedding_class', $data ?? [], null);
        $this->setIfExists('embedding_model_name', $data ?? [], null);
        $this->setIfExists('augmenting_class', $data ?? [], null);
        $this->setIfExists('augmenting_model_name', $data ?? [], null);
        $this->setIfExists('embed_instruction', $data ?? [], null);
        $this->setIfExists('query_instruction', $data ?? [], null);
        $this->setIfExists('self_hosted_url', $data ?? [], null);
        $this->setIfExists('auth_security', $data ?? [], null);
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
     * Gets embedding_class
     *
     * @return string|null
     */
    public function getEmbeddingClass()
    {
        return $this->container['embedding_class'];
    }

    /**
     * Sets embedding_class
     *
     * @param string|null $embedding_class The class of the embedding embedding_model
     *
     * @return self
     */
    public function setEmbeddingClass($embedding_class)
    {
        if (is_null($embedding_class)) {
            throw new \InvalidArgumentException('non-nullable embedding_class cannot be null');
        }
        $this->container['embedding_class'] = $embedding_class;

        return $this;
    }

    /**
     * Gets embedding_model_name
     *
     * @return string|null
     */
    public function getEmbeddingModelName()
    {
        return $this->container['embedding_model_name'];
    }

    /**
     * Sets embedding_model_name
     *
     * @param string|null $embedding_model_name The name of the embedding embedding_model
     *
     * @return self
     */
    public function setEmbeddingModelName($embedding_model_name)
    {
        if (is_null($embedding_model_name)) {
            throw new \InvalidArgumentException('non-nullable embedding_model_name cannot be null');
        }
        $this->container['embedding_model_name'] = $embedding_model_name;

        return $this;
    }

    /**
     * Gets augmenting_class
     *
     * @return string|null
     */
    public function getAugmentingClass()
    {
        return $this->container['augmenting_class'];
    }

    /**
     * Sets augmenting_class
     *
     * @param string|null $augmenting_class The class of the augmenting embedding_model
     *
     * @return self
     */
    public function setAugmentingClass($augmenting_class)
    {
        if (is_null($augmenting_class)) {
            throw new \InvalidArgumentException('non-nullable augmenting_class cannot be null');
        }
        $this->container['augmenting_class'] = $augmenting_class;

        return $this;
    }

    /**
     * Gets augmenting_model_name
     *
     * @return string|null
     */
    public function getAugmentingModelName()
    {
        return $this->container['augmenting_model_name'];
    }

    /**
     * Sets augmenting_model_name
     *
     * @param string|null $augmenting_model_name The name of the augmenting embedding_model
     *
     * @return self
     */
    public function setAugmentingModelName($augmenting_model_name)
    {
        if (is_null($augmenting_model_name)) {
            throw new \InvalidArgumentException('non-nullable augmenting_model_name cannot be null');
        }
        $this->container['augmenting_model_name'] = $augmenting_model_name;

        return $this;
    }

    /**
     * Gets embed_instruction
     *
     * @return string|null
     */
    public function getEmbedInstruction()
    {
        return $this->container['embed_instruction'];
    }

    /**
     * Sets embed_instruction
     *
     * @param string|null $embed_instruction The instruction for embedding
     *
     * @return self
     */
    public function setEmbedInstruction($embed_instruction)
    {
        if (is_null($embed_instruction)) {
            throw new \InvalidArgumentException('non-nullable embed_instruction cannot be null');
        }
        $this->container['embed_instruction'] = $embed_instruction;

        return $this;
    }

    /**
     * Gets query_instruction
     *
     * @return string|null
     */
    public function getQueryInstruction()
    {
        return $this->container['query_instruction'];
    }

    /**
     * Sets query_instruction
     *
     * @param string|null $query_instruction The instruction for querying
     *
     * @return self
     */
    public function setQueryInstruction($query_instruction)
    {
        if (is_null($query_instruction)) {
            throw new \InvalidArgumentException('non-nullable query_instruction cannot be null');
        }
        $this->container['query_instruction'] = $query_instruction;

        return $this;
    }

    /**
     * Gets self_hosted_url
     *
     * @return string|null
     */
    public function getSelfHostedUrl()
    {
        return $this->container['self_hosted_url'];
    }

    /**
     * Sets self_hosted_url
     *
     * @param string|null $self_hosted_url The url for self hosted embedding_model
     *
     * @return self
     */
    public function setSelfHostedUrl($self_hosted_url)
    {
        if (is_null($self_hosted_url)) {
            throw new \InvalidArgumentException('non-nullable self_hosted_url cannot be null');
        }
        $this->container['self_hosted_url'] = $self_hosted_url;

        return $this;
    }

    /**
     * Gets auth_security
     *
     * @return \Semanticwrap\Model\AuthSecurity|null
     */
    public function getAuthSecurity()
    {
        return $this->container['auth_security'];
    }

    /**
     * Sets auth_security
     *
     * @param \Semanticwrap\Model\AuthSecurity|null $auth_security auth_security
     *
     * @return self
     */
    public function setAuthSecurity($auth_security)
    {
        if (is_null($auth_security)) {
            throw new \InvalidArgumentException('non-nullable auth_security cannot be null');
        }
        $this->container['auth_security'] = $auth_security;

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


