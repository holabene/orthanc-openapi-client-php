<?php
/**
 * ModalitiesIdPutRequest
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
 * ModalitiesIdPutRequest Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ModalitiesIdPutRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_modalities__id__put_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'aet' => 'string',
        'allow_echo' => 'bool',
        'allow_find' => 'bool',
        'allow_find_worklist' => 'bool',
        'allow_get' => 'bool',
        'allow_move' => 'bool',
        'allow_storage_commitment' => 'bool',
        'allow_store' => 'bool',
        'allow_transcoding' => 'bool',
        'host' => 'string',
        'manufacturer' => 'string',
        'port' => 'float',
        'use_dicom_tls' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'aet' => null,
        'allow_echo' => null,
        'allow_find' => null,
        'allow_find_worklist' => null,
        'allow_get' => null,
        'allow_move' => null,
        'allow_storage_commitment' => null,
        'allow_store' => null,
        'allow_transcoding' => null,
        'host' => null,
        'manufacturer' => null,
        'port' => null,
        'use_dicom_tls' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'aet' => false,
		'allow_echo' => false,
		'allow_find' => false,
		'allow_find_worklist' => false,
		'allow_get' => false,
		'allow_move' => false,
		'allow_storage_commitment' => false,
		'allow_store' => false,
		'allow_transcoding' => false,
		'host' => false,
		'manufacturer' => false,
		'port' => false,
		'use_dicom_tls' => false
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
        'aet' => 'AET',
        'allow_echo' => 'AllowEcho',
        'allow_find' => 'AllowFind',
        'allow_find_worklist' => 'AllowFindWorklist',
        'allow_get' => 'AllowGet',
        'allow_move' => 'AllowMove',
        'allow_storage_commitment' => 'AllowStorageCommitment',
        'allow_store' => 'AllowStore',
        'allow_transcoding' => 'AllowTranscoding',
        'host' => 'Host',
        'manufacturer' => 'Manufacturer',
        'port' => 'Port',
        'use_dicom_tls' => 'UseDicomTls'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aet' => 'setAet',
        'allow_echo' => 'setAllowEcho',
        'allow_find' => 'setAllowFind',
        'allow_find_worklist' => 'setAllowFindWorklist',
        'allow_get' => 'setAllowGet',
        'allow_move' => 'setAllowMove',
        'allow_storage_commitment' => 'setAllowStorageCommitment',
        'allow_store' => 'setAllowStore',
        'allow_transcoding' => 'setAllowTranscoding',
        'host' => 'setHost',
        'manufacturer' => 'setManufacturer',
        'port' => 'setPort',
        'use_dicom_tls' => 'setUseDicomTls'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aet' => 'getAet',
        'allow_echo' => 'getAllowEcho',
        'allow_find' => 'getAllowFind',
        'allow_find_worklist' => 'getAllowFindWorklist',
        'allow_get' => 'getAllowGet',
        'allow_move' => 'getAllowMove',
        'allow_storage_commitment' => 'getAllowStorageCommitment',
        'allow_store' => 'getAllowStore',
        'allow_transcoding' => 'getAllowTranscoding',
        'host' => 'getHost',
        'manufacturer' => 'getManufacturer',
        'port' => 'getPort',
        'use_dicom_tls' => 'getUseDicomTls'
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
        $this->setIfExists('aet', $data ?? [], null);
        $this->setIfExists('allow_echo', $data ?? [], null);
        $this->setIfExists('allow_find', $data ?? [], null);
        $this->setIfExists('allow_find_worklist', $data ?? [], null);
        $this->setIfExists('allow_get', $data ?? [], null);
        $this->setIfExists('allow_move', $data ?? [], null);
        $this->setIfExists('allow_storage_commitment', $data ?? [], null);
        $this->setIfExists('allow_store', $data ?? [], null);
        $this->setIfExists('allow_transcoding', $data ?? [], null);
        $this->setIfExists('host', $data ?? [], null);
        $this->setIfExists('manufacturer', $data ?? [], null);
        $this->setIfExists('port', $data ?? [], null);
        $this->setIfExists('use_dicom_tls', $data ?? [], null);
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
     * Gets aet
     *
     * @return string|null
     */
    public function getAet()
    {
        return $this->container['aet'];
    }

    /**
     * Sets aet
     *
     * @param string|null $aet AET of the remote DICOM modality
     *
     * @return self
     */
    public function setAet($aet)
    {
        if (is_null($aet)) {
            throw new \InvalidArgumentException('non-nullable aet cannot be null');
        }
        $this->container['aet'] = $aet;

        return $this;
    }

    /**
     * Gets allow_echo
     *
     * @return bool|null
     */
    public function getAllowEcho()
    {
        return $this->container['allow_echo'];
    }

    /**
     * Sets allow_echo
     *
     * @param bool|null $allow_echo Whether to accept C-ECHO SCU commands issued by the remote modality
     *
     * @return self
     */
    public function setAllowEcho($allow_echo)
    {
        if (is_null($allow_echo)) {
            throw new \InvalidArgumentException('non-nullable allow_echo cannot be null');
        }
        $this->container['allow_echo'] = $allow_echo;

        return $this;
    }

    /**
     * Gets allow_find
     *
     * @return bool|null
     */
    public function getAllowFind()
    {
        return $this->container['allow_find'];
    }

    /**
     * Sets allow_find
     *
     * @param bool|null $allow_find Whether to accept C-FIND SCU commands issued by the remote modality
     *
     * @return self
     */
    public function setAllowFind($allow_find)
    {
        if (is_null($allow_find)) {
            throw new \InvalidArgumentException('non-nullable allow_find cannot be null');
        }
        $this->container['allow_find'] = $allow_find;

        return $this;
    }

    /**
     * Gets allow_find_worklist
     *
     * @return bool|null
     */
    public function getAllowFindWorklist()
    {
        return $this->container['allow_find_worklist'];
    }

    /**
     * Sets allow_find_worklist
     *
     * @param bool|null $allow_find_worklist Whether to accept C-FIND SCU commands for worklists issued by the remote modality
     *
     * @return self
     */
    public function setAllowFindWorklist($allow_find_worklist)
    {
        if (is_null($allow_find_worklist)) {
            throw new \InvalidArgumentException('non-nullable allow_find_worklist cannot be null');
        }
        $this->container['allow_find_worklist'] = $allow_find_worklist;

        return $this;
    }

    /**
     * Gets allow_get
     *
     * @return bool|null
     */
    public function getAllowGet()
    {
        return $this->container['allow_get'];
    }

    /**
     * Sets allow_get
     *
     * @param bool|null $allow_get Whether to accept C-GET SCU commands issued by the remote modality
     *
     * @return self
     */
    public function setAllowGet($allow_get)
    {
        if (is_null($allow_get)) {
            throw new \InvalidArgumentException('non-nullable allow_get cannot be null');
        }
        $this->container['allow_get'] = $allow_get;

        return $this;
    }

    /**
     * Gets allow_move
     *
     * @return bool|null
     */
    public function getAllowMove()
    {
        return $this->container['allow_move'];
    }

    /**
     * Sets allow_move
     *
     * @param bool|null $allow_move Whether to accept C-MOVE SCU commands issued by the remote modality
     *
     * @return self
     */
    public function setAllowMove($allow_move)
    {
        if (is_null($allow_move)) {
            throw new \InvalidArgumentException('non-nullable allow_move cannot be null');
        }
        $this->container['allow_move'] = $allow_move;

        return $this;
    }

    /**
     * Gets allow_storage_commitment
     *
     * @return bool|null
     */
    public function getAllowStorageCommitment()
    {
        return $this->container['allow_storage_commitment'];
    }

    /**
     * Sets allow_storage_commitment
     *
     * @param bool|null $allow_storage_commitment Whether to accept storage commitment requests issued by the remote modality
     *
     * @return self
     */
    public function setAllowStorageCommitment($allow_storage_commitment)
    {
        if (is_null($allow_storage_commitment)) {
            throw new \InvalidArgumentException('non-nullable allow_storage_commitment cannot be null');
        }
        $this->container['allow_storage_commitment'] = $allow_storage_commitment;

        return $this;
    }

    /**
     * Gets allow_store
     *
     * @return bool|null
     */
    public function getAllowStore()
    {
        return $this->container['allow_store'];
    }

    /**
     * Sets allow_store
     *
     * @param bool|null $allow_store Whether to accept C-STORE SCU commands issued by the remote modality
     *
     * @return self
     */
    public function setAllowStore($allow_store)
    {
        if (is_null($allow_store)) {
            throw new \InvalidArgumentException('non-nullable allow_store cannot be null');
        }
        $this->container['allow_store'] = $allow_store;

        return $this;
    }

    /**
     * Gets allow_transcoding
     *
     * @return bool|null
     */
    public function getAllowTranscoding()
    {
        return $this->container['allow_transcoding'];
    }

    /**
     * Sets allow_transcoding
     *
     * @param bool|null $allow_transcoding Whether to allow transcoding for operations initiated by this modality. This option applies to Orthanc C-GET SCP and to Orthanc C-STORE SCU. It only has an effect if the global option `EnableTranscoding` is set to `true`.
     *
     * @return self
     */
    public function setAllowTranscoding($allow_transcoding)
    {
        if (is_null($allow_transcoding)) {
            throw new \InvalidArgumentException('non-nullable allow_transcoding cannot be null');
        }
        $this->container['allow_transcoding'] = $allow_transcoding;

        return $this;
    }

    /**
     * Gets host
     *
     * @return string|null
     */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
     * Sets host
     *
     * @param string|null $host Host address of the remote DICOM modality (typically, an IP address)
     *
     * @return self
     */
    public function setHost($host)
    {
        if (is_null($host)) {
            throw new \InvalidArgumentException('non-nullable host cannot be null');
        }
        $this->container['host'] = $host;

        return $this;
    }

    /**
     * Gets manufacturer
     *
     * @return string|null
     */
    public function getManufacturer()
    {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer
     *
     * @param string|null $manufacturer Manufacturer of the remote DICOM modality (check configuration option `DicomModalities` for possible values
     *
     * @return self
     */
    public function setManufacturer($manufacturer)
    {
        if (is_null($manufacturer)) {
            throw new \InvalidArgumentException('non-nullable manufacturer cannot be null');
        }
        $this->container['manufacturer'] = $manufacturer;

        return $this;
    }

    /**
     * Gets port
     *
     * @return float|null
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     *
     * @param float|null $port TCP port of the remote DICOM modality
     *
     * @return self
     */
    public function setPort($port)
    {
        if (is_null($port)) {
            throw new \InvalidArgumentException('non-nullable port cannot be null');
        }
        $this->container['port'] = $port;

        return $this;
    }

    /**
     * Gets use_dicom_tls
     *
     * @return bool|null
     */
    public function getUseDicomTls()
    {
        return $this->container['use_dicom_tls'];
    }

    /**
     * Sets use_dicom_tls
     *
     * @param bool|null $use_dicom_tls Whether to use DICOM TLS in the SCU connection initiated by Orthanc (new in Orthanc 1.9.0)
     *
     * @return self
     */
    public function setUseDicomTls($use_dicom_tls)
    {
        if (is_null($use_dicom_tls)) {
            throw new \InvalidArgumentException('non-nullable use_dicom_tls cannot be null');
        }
        $this->container['use_dicom_tls'] = $use_dicom_tls;

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


