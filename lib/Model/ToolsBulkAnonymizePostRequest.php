<?php
/**
 * ToolsBulkAnonymizePostRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Orthanc API
 *
 * This is the full documentation of the [REST API](https://book.orthanc-server.com/users/rest.html) of Orthanc.<p>This reference is automatically generated from the source code of Orthanc. A [shorter cheat sheet](https://book.orthanc-server.com/users/rest-cheatsheet.html) is part of the Orthanc Book.<p>An earlier, manually crafted version from August 2019, is [still available](2019-08-orthanc-openapi.html), but is not up-to-date anymore ([source](https://groups.google.com/g/orthanc-users/c/NUiJTEICSl8/m/xKeqMrbqAAAJ)).
 *
 * The version of the OpenAPI document: 1.11.3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ToolsBulkAnonymizePostRequest Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ToolsBulkAnonymizePostRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_tools_bulk_anonymize_post_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'asynchronous' => 'bool',
        'dicom_version' => 'string',
        'force' => 'bool',
        'keep' => 'string[]',
        'keep_private_tags' => 'bool',
        'keep_source' => 'bool',
        'permissive' => 'bool',
        'priority' => 'float',
        'private_creator' => 'string',
        'remove' => 'string[]',
        'replace' => 'object',
        'resources' => 'string[]',
        'synchronous' => 'bool',
        'transcode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'asynchronous' => null,
        'dicom_version' => null,
        'force' => null,
        'keep' => null,
        'keep_private_tags' => null,
        'keep_source' => null,
        'permissive' => null,
        'priority' => null,
        'private_creator' => null,
        'remove' => null,
        'replace' => null,
        'resources' => null,
        'synchronous' => null,
        'transcode' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'asynchronous' => false,
		'dicom_version' => false,
		'force' => false,
		'keep' => false,
		'keep_private_tags' => false,
		'keep_source' => false,
		'permissive' => false,
		'priority' => false,
		'private_creator' => false,
		'remove' => false,
		'replace' => false,
		'resources' => false,
		'synchronous' => false,
		'transcode' => false
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
        'asynchronous' => 'Asynchronous',
        'dicom_version' => 'DicomVersion',
        'force' => 'Force',
        'keep' => 'Keep',
        'keep_private_tags' => 'KeepPrivateTags',
        'keep_source' => 'KeepSource',
        'permissive' => 'Permissive',
        'priority' => 'Priority',
        'private_creator' => 'PrivateCreator',
        'remove' => 'Remove',
        'replace' => 'Replace',
        'resources' => 'Resources',
        'synchronous' => 'Synchronous',
        'transcode' => 'Transcode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asynchronous' => 'setAsynchronous',
        'dicom_version' => 'setDicomVersion',
        'force' => 'setForce',
        'keep' => 'setKeep',
        'keep_private_tags' => 'setKeepPrivateTags',
        'keep_source' => 'setKeepSource',
        'permissive' => 'setPermissive',
        'priority' => 'setPriority',
        'private_creator' => 'setPrivateCreator',
        'remove' => 'setRemove',
        'replace' => 'setReplace',
        'resources' => 'setResources',
        'synchronous' => 'setSynchronous',
        'transcode' => 'setTranscode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asynchronous' => 'getAsynchronous',
        'dicom_version' => 'getDicomVersion',
        'force' => 'getForce',
        'keep' => 'getKeep',
        'keep_private_tags' => 'getKeepPrivateTags',
        'keep_source' => 'getKeepSource',
        'permissive' => 'getPermissive',
        'priority' => 'getPriority',
        'private_creator' => 'getPrivateCreator',
        'remove' => 'getRemove',
        'replace' => 'getReplace',
        'resources' => 'getResources',
        'synchronous' => 'getSynchronous',
        'transcode' => 'getTranscode'
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
        $this->setIfExists('asynchronous', $data ?? [], null);
        $this->setIfExists('dicom_version', $data ?? [], null);
        $this->setIfExists('force', $data ?? [], null);
        $this->setIfExists('keep', $data ?? [], null);
        $this->setIfExists('keep_private_tags', $data ?? [], null);
        $this->setIfExists('keep_source', $data ?? [], null);
        $this->setIfExists('permissive', $data ?? [], null);
        $this->setIfExists('priority', $data ?? [], null);
        $this->setIfExists('private_creator', $data ?? [], null);
        $this->setIfExists('remove', $data ?? [], null);
        $this->setIfExists('replace', $data ?? [], null);
        $this->setIfExists('resources', $data ?? [], null);
        $this->setIfExists('synchronous', $data ?? [], null);
        $this->setIfExists('transcode', $data ?? [], null);
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
     * Gets asynchronous
     *
     * @return bool|null
     */
    public function getAsynchronous()
    {
        return $this->container['asynchronous'];
    }

    /**
     * Sets asynchronous
     *
     * @param bool|null $asynchronous If `true`, run the job in asynchronous mode, which means that the REST API call will immediately return, reporting the identifier of a job. Prefer this flavor wherever possible.
     *
     * @return self
     */
    public function setAsynchronous($asynchronous)
    {
        if (is_null($asynchronous)) {
            throw new \InvalidArgumentException('non-nullable asynchronous cannot be null');
        }
        $this->container['asynchronous'] = $asynchronous;

        return $this;
    }

    /**
     * Gets dicom_version
     *
     * @return string|null
     */
    public function getDicomVersion()
    {
        return $this->container['dicom_version'];
    }

    /**
     * Sets dicom_version
     *
     * @param string|null $dicom_version Version of the DICOM standard to be used for anonymization. Check out configuration option `DeidentifyLogsDicomVersion` for possible values.
     *
     * @return self
     */
    public function setDicomVersion($dicom_version)
    {
        if (is_null($dicom_version)) {
            throw new \InvalidArgumentException('non-nullable dicom_version cannot be null');
        }
        $this->container['dicom_version'] = $dicom_version;

        return $this;
    }

    /**
     * Gets force
     *
     * @return bool|null
     */
    public function getForce()
    {
        return $this->container['force'];
    }

    /**
     * Sets force
     *
     * @param bool|null $force Allow the modification of tags related to DICOM identifiers, at the risk of breaking the DICOM model of the real world
     *
     * @return self
     */
    public function setForce($force)
    {
        if (is_null($force)) {
            throw new \InvalidArgumentException('non-nullable force cannot be null');
        }
        $this->container['force'] = $force;

        return $this;
    }

    /**
     * Gets keep
     *
     * @return string[]|null
     */
    public function getKeep()
    {
        return $this->container['keep'];
    }

    /**
     * Sets keep
     *
     * @param string[]|null $keep List of DICOM tags whose value must not be destroyed by the anonymization. Starting with Orthanc 1.9.4, paths to subsequences can be provided using the same syntax as the `dcmodify` command-line tool (wildcards are supported as well).
     *
     * @return self
     */
    public function setKeep($keep)
    {
        if (is_null($keep)) {
            throw new \InvalidArgumentException('non-nullable keep cannot be null');
        }
        $this->container['keep'] = $keep;

        return $this;
    }

    /**
     * Gets keep_private_tags
     *
     * @return bool|null
     */
    public function getKeepPrivateTags()
    {
        return $this->container['keep_private_tags'];
    }

    /**
     * Sets keep_private_tags
     *
     * @param bool|null $keep_private_tags Keep the private tags from the DICOM instances (defaults to `false`)
     *
     * @return self
     */
    public function setKeepPrivateTags($keep_private_tags)
    {
        if (is_null($keep_private_tags)) {
            throw new \InvalidArgumentException('non-nullable keep_private_tags cannot be null');
        }
        $this->container['keep_private_tags'] = $keep_private_tags;

        return $this;
    }

    /**
     * Gets keep_source
     *
     * @return bool|null
     */
    public function getKeepSource()
    {
        return $this->container['keep_source'];
    }

    /**
     * Sets keep_source
     *
     * @param bool|null $keep_source If set to `false`, instructs Orthanc to the remove original resources. By default, the original resources are kept in Orthanc.
     *
     * @return self
     */
    public function setKeepSource($keep_source)
    {
        if (is_null($keep_source)) {
            throw new \InvalidArgumentException('non-nullable keep_source cannot be null');
        }
        $this->container['keep_source'] = $keep_source;

        return $this;
    }

    /**
     * Gets permissive
     *
     * @return bool|null
     */
    public function getPermissive()
    {
        return $this->container['permissive'];
    }

    /**
     * Sets permissive
     *
     * @param bool|null $permissive If `true`, ignore errors during the individual steps of the job.
     *
     * @return self
     */
    public function setPermissive($permissive)
    {
        if (is_null($permissive)) {
            throw new \InvalidArgumentException('non-nullable permissive cannot be null');
        }
        $this->container['permissive'] = $permissive;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return float|null
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param float|null $priority In asynchronous mode, the priority of the job. The lower the value, the higher the priority.
     *
     * @return self
     */
    public function setPriority($priority)
    {
        if (is_null($priority)) {
            throw new \InvalidArgumentException('non-nullable priority cannot be null');
        }
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets private_creator
     *
     * @return string|null
     */
    public function getPrivateCreator()
    {
        return $this->container['private_creator'];
    }

    /**
     * Sets private_creator
     *
     * @param string|null $private_creator The private creator to be used for private tags in `Replace`
     *
     * @return self
     */
    public function setPrivateCreator($private_creator)
    {
        if (is_null($private_creator)) {
            throw new \InvalidArgumentException('non-nullable private_creator cannot be null');
        }
        $this->container['private_creator'] = $private_creator;

        return $this;
    }

    /**
     * Gets remove
     *
     * @return string[]|null
     */
    public function getRemove()
    {
        return $this->container['remove'];
    }

    /**
     * Sets remove
     *
     * @param string[]|null $remove List of additional tags to be removed from the DICOM instances. Starting with Orthanc 1.9.4, paths to subsequences can be provided using the same syntax as the `dcmodify` command-line tool (wildcards are supported as well).
     *
     * @return self
     */
    public function setRemove($remove)
    {
        if (is_null($remove)) {
            throw new \InvalidArgumentException('non-nullable remove cannot be null');
        }
        $this->container['remove'] = $remove;

        return $this;
    }

    /**
     * Gets replace
     *
     * @return object|null
     */
    public function getReplace()
    {
        return $this->container['replace'];
    }

    /**
     * Sets replace
     *
     * @param object|null $replace Associative array to change the value of some DICOM tags in the DICOM instances. Starting with Orthanc 1.9.4, paths to subsequences can be provided using the same syntax as the `dcmodify` command-line tool (wildcards are supported as well).
     *
     * @return self
     */
    public function setReplace($replace)
    {
        if (is_null($replace)) {
            throw new \InvalidArgumentException('non-nullable replace cannot be null');
        }
        $this->container['replace'] = $replace;

        return $this;
    }

    /**
     * Gets resources
     *
     * @return string[]|null
     */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
     * Sets resources
     *
     * @param string[]|null $resources List of the Orthanc identifiers of the patients/studies/series/instances of interest.
     *
     * @return self
     */
    public function setResources($resources)
    {
        if (is_null($resources)) {
            throw new \InvalidArgumentException('non-nullable resources cannot be null');
        }
        $this->container['resources'] = $resources;

        return $this;
    }

    /**
     * Gets synchronous
     *
     * @return bool|null
     */
    public function getSynchronous()
    {
        return $this->container['synchronous'];
    }

    /**
     * Sets synchronous
     *
     * @param bool|null $synchronous If `true`, run the job in synchronous mode, which means that the HTTP answer will directly contain the result of the job. This is the default, easy behavior, but it is *not* desirable for long jobs, as it might lead to network timeouts.
     *
     * @return self
     */
    public function setSynchronous($synchronous)
    {
        if (is_null($synchronous)) {
            throw new \InvalidArgumentException('non-nullable synchronous cannot be null');
        }
        $this->container['synchronous'] = $synchronous;

        return $this;
    }

    /**
     * Gets transcode
     *
     * @return string|null
     */
    public function getTranscode()
    {
        return $this->container['transcode'];
    }

    /**
     * Sets transcode
     *
     * @param string|null $transcode Transcode the DICOM instances to the provided DICOM transfer syntax: https://book.orthanc-server.com/faq/transcoding.html
     *
     * @return self
     */
    public function setTranscode($transcode)
    {
        if (is_null($transcode)) {
            throw new \InvalidArgumentException('non-nullable transcode cannot be null');
        }
        $this->container['transcode'] = $transcode;

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


