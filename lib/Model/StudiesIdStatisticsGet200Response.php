<?php
/**
 * StudiesIdStatisticsGet200Response
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
 * StudiesIdStatisticsGet200Response Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StudiesIdStatisticsGet200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_studies__id__statistics_get_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'count_instances' => 'float',
        'count_series' => 'float',
        'dicom_disk_size' => 'string',
        'dicom_disk_size_mb' => 'float',
        'dicom_uncompressed_size' => 'string',
        'dicom_uncompressed_size_mb' => 'float',
        'disk_size' => 'string',
        'disk_size_mb' => 'float',
        'uncompressed_size' => 'string',
        'uncompressed_size_mb' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'count_instances' => null,
        'count_series' => null,
        'dicom_disk_size' => null,
        'dicom_disk_size_mb' => null,
        'dicom_uncompressed_size' => null,
        'dicom_uncompressed_size_mb' => null,
        'disk_size' => null,
        'disk_size_mb' => null,
        'uncompressed_size' => null,
        'uncompressed_size_mb' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'count_instances' => false,
		'count_series' => false,
		'dicom_disk_size' => false,
		'dicom_disk_size_mb' => false,
		'dicom_uncompressed_size' => false,
		'dicom_uncompressed_size_mb' => false,
		'disk_size' => false,
		'disk_size_mb' => false,
		'uncompressed_size' => false,
		'uncompressed_size_mb' => false
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
        'count_instances' => 'CountInstances',
        'count_series' => 'CountSeries',
        'dicom_disk_size' => 'DicomDiskSize',
        'dicom_disk_size_mb' => 'DicomDiskSizeMB',
        'dicom_uncompressed_size' => 'DicomUncompressedSize',
        'dicom_uncompressed_size_mb' => 'DicomUncompressedSizeMB',
        'disk_size' => 'DiskSize',
        'disk_size_mb' => 'DiskSizeMB',
        'uncompressed_size' => 'UncompressedSize',
        'uncompressed_size_mb' => 'UncompressedSizeMB'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'count_instances' => 'setCountInstances',
        'count_series' => 'setCountSeries',
        'dicom_disk_size' => 'setDicomDiskSize',
        'dicom_disk_size_mb' => 'setDicomDiskSizeMb',
        'dicom_uncompressed_size' => 'setDicomUncompressedSize',
        'dicom_uncompressed_size_mb' => 'setDicomUncompressedSizeMb',
        'disk_size' => 'setDiskSize',
        'disk_size_mb' => 'setDiskSizeMb',
        'uncompressed_size' => 'setUncompressedSize',
        'uncompressed_size_mb' => 'setUncompressedSizeMb'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'count_instances' => 'getCountInstances',
        'count_series' => 'getCountSeries',
        'dicom_disk_size' => 'getDicomDiskSize',
        'dicom_disk_size_mb' => 'getDicomDiskSizeMb',
        'dicom_uncompressed_size' => 'getDicomUncompressedSize',
        'dicom_uncompressed_size_mb' => 'getDicomUncompressedSizeMb',
        'disk_size' => 'getDiskSize',
        'disk_size_mb' => 'getDiskSizeMb',
        'uncompressed_size' => 'getUncompressedSize',
        'uncompressed_size_mb' => 'getUncompressedSizeMb'
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
        $this->setIfExists('count_instances', $data ?? [], null);
        $this->setIfExists('count_series', $data ?? [], null);
        $this->setIfExists('dicom_disk_size', $data ?? [], null);
        $this->setIfExists('dicom_disk_size_mb', $data ?? [], null);
        $this->setIfExists('dicom_uncompressed_size', $data ?? [], null);
        $this->setIfExists('dicom_uncompressed_size_mb', $data ?? [], null);
        $this->setIfExists('disk_size', $data ?? [], null);
        $this->setIfExists('disk_size_mb', $data ?? [], null);
        $this->setIfExists('uncompressed_size', $data ?? [], null);
        $this->setIfExists('uncompressed_size_mb', $data ?? [], null);
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
     * Gets count_instances
     *
     * @return float|null
     */
    public function getCountInstances()
    {
        return $this->container['count_instances'];
    }

    /**
     * Sets count_instances
     *
     * @param float|null $count_instances Number of child instances within this study
     *
     * @return self
     */
    public function setCountInstances($count_instances)
    {
        if (is_null($count_instances)) {
            throw new \InvalidArgumentException('non-nullable count_instances cannot be null');
        }
        $this->container['count_instances'] = $count_instances;

        return $this;
    }

    /**
     * Gets count_series
     *
     * @return float|null
     */
    public function getCountSeries()
    {
        return $this->container['count_series'];
    }

    /**
     * Sets count_series
     *
     * @param float|null $count_series Number of child series within this study
     *
     * @return self
     */
    public function setCountSeries($count_series)
    {
        if (is_null($count_series)) {
            throw new \InvalidArgumentException('non-nullable count_series cannot be null');
        }
        $this->container['count_series'] = $count_series;

        return $this;
    }

    /**
     * Gets dicom_disk_size
     *
     * @return string|null
     */
    public function getDicomDiskSize()
    {
        return $this->container['dicom_disk_size'];
    }

    /**
     * Sets dicom_disk_size
     *
     * @param string|null $dicom_disk_size Size on the disk of the DICOM instances associated with the study, expressed in bytes
     *
     * @return self
     */
    public function setDicomDiskSize($dicom_disk_size)
    {
        if (is_null($dicom_disk_size)) {
            throw new \InvalidArgumentException('non-nullable dicom_disk_size cannot be null');
        }
        $this->container['dicom_disk_size'] = $dicom_disk_size;

        return $this;
    }

    /**
     * Gets dicom_disk_size_mb
     *
     * @return float|null
     */
    public function getDicomDiskSizeMb()
    {
        return $this->container['dicom_disk_size_mb'];
    }

    /**
     * Sets dicom_disk_size_mb
     *
     * @param float|null $dicom_disk_size_mb Size on the disk of the DICOM instances associated with the study, expressed in megabytes (MB)
     *
     * @return self
     */
    public function setDicomDiskSizeMb($dicom_disk_size_mb)
    {
        if (is_null($dicom_disk_size_mb)) {
            throw new \InvalidArgumentException('non-nullable dicom_disk_size_mb cannot be null');
        }
        $this->container['dicom_disk_size_mb'] = $dicom_disk_size_mb;

        return $this;
    }

    /**
     * Gets dicom_uncompressed_size
     *
     * @return string|null
     */
    public function getDicomUncompressedSize()
    {
        return $this->container['dicom_uncompressed_size'];
    }

    /**
     * Sets dicom_uncompressed_size
     *
     * @param string|null $dicom_uncompressed_size Size on the disk of the uncompressed DICOM instances associated with the study, expressed in bytes
     *
     * @return self
     */
    public function setDicomUncompressedSize($dicom_uncompressed_size)
    {
        if (is_null($dicom_uncompressed_size)) {
            throw new \InvalidArgumentException('non-nullable dicom_uncompressed_size cannot be null');
        }
        $this->container['dicom_uncompressed_size'] = $dicom_uncompressed_size;

        return $this;
    }

    /**
     * Gets dicom_uncompressed_size_mb
     *
     * @return float|null
     */
    public function getDicomUncompressedSizeMb()
    {
        return $this->container['dicom_uncompressed_size_mb'];
    }

    /**
     * Sets dicom_uncompressed_size_mb
     *
     * @param float|null $dicom_uncompressed_size_mb Size on the disk of the uncompressed DICOM instances associated with the study, expressed in megabytes (MB)
     *
     * @return self
     */
    public function setDicomUncompressedSizeMb($dicom_uncompressed_size_mb)
    {
        if (is_null($dicom_uncompressed_size_mb)) {
            throw new \InvalidArgumentException('non-nullable dicom_uncompressed_size_mb cannot be null');
        }
        $this->container['dicom_uncompressed_size_mb'] = $dicom_uncompressed_size_mb;

        return $this;
    }

    /**
     * Gets disk_size
     *
     * @return string|null
     */
    public function getDiskSize()
    {
        return $this->container['disk_size'];
    }

    /**
     * Sets disk_size
     *
     * @param string|null $disk_size Size of the study on the disk in bytes, expressed as a string for 64bit compatibility with JSON
     *
     * @return self
     */
    public function setDiskSize($disk_size)
    {
        if (is_null($disk_size)) {
            throw new \InvalidArgumentException('non-nullable disk_size cannot be null');
        }
        $this->container['disk_size'] = $disk_size;

        return $this;
    }

    /**
     * Gets disk_size_mb
     *
     * @return float|null
     */
    public function getDiskSizeMb()
    {
        return $this->container['disk_size_mb'];
    }

    /**
     * Sets disk_size_mb
     *
     * @param float|null $disk_size_mb Size of the study on the disk, expressed in megabytes (MB)
     *
     * @return self
     */
    public function setDiskSizeMb($disk_size_mb)
    {
        if (is_null($disk_size_mb)) {
            throw new \InvalidArgumentException('non-nullable disk_size_mb cannot be null');
        }
        $this->container['disk_size_mb'] = $disk_size_mb;

        return $this;
    }

    /**
     * Gets uncompressed_size
     *
     * @return string|null
     */
    public function getUncompressedSize()
    {
        return $this->container['uncompressed_size'];
    }

    /**
     * Sets uncompressed_size
     *
     * @param string|null $uncompressed_size Size of the study after decompression in bytes, expressed as a string for 64bit compatibility with JSON
     *
     * @return self
     */
    public function setUncompressedSize($uncompressed_size)
    {
        if (is_null($uncompressed_size)) {
            throw new \InvalidArgumentException('non-nullable uncompressed_size cannot be null');
        }
        $this->container['uncompressed_size'] = $uncompressed_size;

        return $this;
    }

    /**
     * Gets uncompressed_size_mb
     *
     * @return float|null
     */
    public function getUncompressedSizeMb()
    {
        return $this->container['uncompressed_size_mb'];
    }

    /**
     * Sets uncompressed_size_mb
     *
     * @param float|null $uncompressed_size_mb Size of the study after decompression, expressed in megabytes (MB). This is different from `DiskSizeMB` iff `StorageCompression` is `true`.
     *
     * @return self
     */
    public function setUncompressedSizeMb($uncompressed_size_mb)
    {
        if (is_null($uncompressed_size_mb)) {
            throw new \InvalidArgumentException('non-nullable uncompressed_size_mb cannot be null');
        }
        $this->container['uncompressed_size_mb'] = $uncompressed_size_mb;

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

