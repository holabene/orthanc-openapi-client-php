<?php
/**
 * SystemGet200Response
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
 * SystemGet200Response Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SystemGet200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_system_get_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'api_version' => 'float',
        'check_revisions' => 'bool',
        'database_backend_plugin' => 'string',
        'database_server_identifier' => 'string',
        'database_version' => 'float',
        'dicom_aet' => 'string',
        'dicom_port' => 'float',
        'http_port' => 'float',
        'ingest_transcoding' => 'string',
        'is_http_server_secure' => 'bool',
        'main_dicom_tags' => 'object',
        'maximum_storage_mode' => 'string',
        'maximum_storage_size' => 'float',
        'name' => 'string',
        'overwrite_instances' => 'bool',
        'plugins_enabled' => 'bool',
        'storage_area_plugin' => 'string',
        'storage_compression' => 'bool',
        'version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'api_version' => null,
        'check_revisions' => null,
        'database_backend_plugin' => null,
        'database_server_identifier' => null,
        'database_version' => null,
        'dicom_aet' => null,
        'dicom_port' => null,
        'http_port' => null,
        'ingest_transcoding' => null,
        'is_http_server_secure' => null,
        'main_dicom_tags' => null,
        'maximum_storage_mode' => null,
        'maximum_storage_size' => null,
        'name' => null,
        'overwrite_instances' => null,
        'plugins_enabled' => null,
        'storage_area_plugin' => null,
        'storage_compression' => null,
        'version' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'api_version' => false,
		'check_revisions' => false,
		'database_backend_plugin' => false,
		'database_server_identifier' => false,
		'database_version' => false,
		'dicom_aet' => false,
		'dicom_port' => false,
		'http_port' => false,
		'ingest_transcoding' => false,
		'is_http_server_secure' => false,
		'main_dicom_tags' => false,
		'maximum_storage_mode' => false,
		'maximum_storage_size' => false,
		'name' => false,
		'overwrite_instances' => false,
		'plugins_enabled' => false,
		'storage_area_plugin' => false,
		'storage_compression' => false,
		'version' => false
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
        'api_version' => 'ApiVersion',
        'check_revisions' => 'CheckRevisions',
        'database_backend_plugin' => 'DatabaseBackendPlugin',
        'database_server_identifier' => 'DatabaseServerIdentifier',
        'database_version' => 'DatabaseVersion',
        'dicom_aet' => 'DicomAet',
        'dicom_port' => 'DicomPort',
        'http_port' => 'HttpPort',
        'ingest_transcoding' => 'IngestTranscoding',
        'is_http_server_secure' => 'IsHttpServerSecure',
        'main_dicom_tags' => 'MainDicomTags',
        'maximum_storage_mode' => 'MaximumStorageMode',
        'maximum_storage_size' => 'MaximumStorageSize',
        'name' => 'Name',
        'overwrite_instances' => 'OverwriteInstances',
        'plugins_enabled' => 'PluginsEnabled',
        'storage_area_plugin' => 'StorageAreaPlugin',
        'storage_compression' => 'StorageCompression',
        'version' => 'Version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'api_version' => 'setApiVersion',
        'check_revisions' => 'setCheckRevisions',
        'database_backend_plugin' => 'setDatabaseBackendPlugin',
        'database_server_identifier' => 'setDatabaseServerIdentifier',
        'database_version' => 'setDatabaseVersion',
        'dicom_aet' => 'setDicomAet',
        'dicom_port' => 'setDicomPort',
        'http_port' => 'setHttpPort',
        'ingest_transcoding' => 'setIngestTranscoding',
        'is_http_server_secure' => 'setIsHttpServerSecure',
        'main_dicom_tags' => 'setMainDicomTags',
        'maximum_storage_mode' => 'setMaximumStorageMode',
        'maximum_storage_size' => 'setMaximumStorageSize',
        'name' => 'setName',
        'overwrite_instances' => 'setOverwriteInstances',
        'plugins_enabled' => 'setPluginsEnabled',
        'storage_area_plugin' => 'setStorageAreaPlugin',
        'storage_compression' => 'setStorageCompression',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'api_version' => 'getApiVersion',
        'check_revisions' => 'getCheckRevisions',
        'database_backend_plugin' => 'getDatabaseBackendPlugin',
        'database_server_identifier' => 'getDatabaseServerIdentifier',
        'database_version' => 'getDatabaseVersion',
        'dicom_aet' => 'getDicomAet',
        'dicom_port' => 'getDicomPort',
        'http_port' => 'getHttpPort',
        'ingest_transcoding' => 'getIngestTranscoding',
        'is_http_server_secure' => 'getIsHttpServerSecure',
        'main_dicom_tags' => 'getMainDicomTags',
        'maximum_storage_mode' => 'getMaximumStorageMode',
        'maximum_storage_size' => 'getMaximumStorageSize',
        'name' => 'getName',
        'overwrite_instances' => 'getOverwriteInstances',
        'plugins_enabled' => 'getPluginsEnabled',
        'storage_area_plugin' => 'getStorageAreaPlugin',
        'storage_compression' => 'getStorageCompression',
        'version' => 'getVersion'
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
        $this->setIfExists('api_version', $data ?? [], null);
        $this->setIfExists('check_revisions', $data ?? [], null);
        $this->setIfExists('database_backend_plugin', $data ?? [], null);
        $this->setIfExists('database_server_identifier', $data ?? [], null);
        $this->setIfExists('database_version', $data ?? [], null);
        $this->setIfExists('dicom_aet', $data ?? [], null);
        $this->setIfExists('dicom_port', $data ?? [], null);
        $this->setIfExists('http_port', $data ?? [], null);
        $this->setIfExists('ingest_transcoding', $data ?? [], null);
        $this->setIfExists('is_http_server_secure', $data ?? [], null);
        $this->setIfExists('main_dicom_tags', $data ?? [], null);
        $this->setIfExists('maximum_storage_mode', $data ?? [], null);
        $this->setIfExists('maximum_storage_size', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('overwrite_instances', $data ?? [], null);
        $this->setIfExists('plugins_enabled', $data ?? [], null);
        $this->setIfExists('storage_area_plugin', $data ?? [], null);
        $this->setIfExists('storage_compression', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
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
     * Gets api_version
     *
     * @return float|null
     */
    public function getApiVersion()
    {
        return $this->container['api_version'];
    }

    /**
     * Sets api_version
     *
     * @param float|null $api_version Version of the REST API
     *
     * @return self
     */
    public function setApiVersion($api_version)
    {
        if (is_null($api_version)) {
            throw new \InvalidArgumentException('non-nullable api_version cannot be null');
        }
        $this->container['api_version'] = $api_version;

        return $this;
    }

    /**
     * Gets check_revisions
     *
     * @return bool|null
     */
    public function getCheckRevisions()
    {
        return $this->container['check_revisions'];
    }

    /**
     * Sets check_revisions
     *
     * @param bool|null $check_revisions Whether Orthanc handle revisions of metadata and attachments to deal with multiple writers (new in Orthanc 1.9.2)
     *
     * @return self
     */
    public function setCheckRevisions($check_revisions)
    {
        if (is_null($check_revisions)) {
            throw new \InvalidArgumentException('non-nullable check_revisions cannot be null');
        }
        $this->container['check_revisions'] = $check_revisions;

        return $this;
    }

    /**
     * Gets database_backend_plugin
     *
     * @return string|null
     */
    public function getDatabaseBackendPlugin()
    {
        return $this->container['database_backend_plugin'];
    }

    /**
     * Sets database_backend_plugin
     *
     * @param string|null $database_backend_plugin Information about the installed database index plugin (`null` if no such plugin is installed)
     *
     * @return self
     */
    public function setDatabaseBackendPlugin($database_backend_plugin)
    {
        if (is_null($database_backend_plugin)) {
            throw new \InvalidArgumentException('non-nullable database_backend_plugin cannot be null');
        }
        $this->container['database_backend_plugin'] = $database_backend_plugin;

        return $this;
    }

    /**
     * Gets database_server_identifier
     *
     * @return string|null
     */
    public function getDatabaseServerIdentifier()
    {
        return $this->container['database_server_identifier'];
    }

    /**
     * Sets database_server_identifier
     *
     * @param string|null $database_server_identifier ID of the server in the database (when running multiple Orthanc on the same DB)
     *
     * @return self
     */
    public function setDatabaseServerIdentifier($database_server_identifier)
    {
        if (is_null($database_server_identifier)) {
            throw new \InvalidArgumentException('non-nullable database_server_identifier cannot be null');
        }
        $this->container['database_server_identifier'] = $database_server_identifier;

        return $this;
    }

    /**
     * Gets database_version
     *
     * @return float|null
     */
    public function getDatabaseVersion()
    {
        return $this->container['database_version'];
    }

    /**
     * Sets database_version
     *
     * @param float|null $database_version Version of the database: https://book.orthanc-server.com/developers/db-versioning.html
     *
     * @return self
     */
    public function setDatabaseVersion($database_version)
    {
        if (is_null($database_version)) {
            throw new \InvalidArgumentException('non-nullable database_version cannot be null');
        }
        $this->container['database_version'] = $database_version;

        return $this;
    }

    /**
     * Gets dicom_aet
     *
     * @return string|null
     */
    public function getDicomAet()
    {
        return $this->container['dicom_aet'];
    }

    /**
     * Sets dicom_aet
     *
     * @param string|null $dicom_aet The DICOM AET of Orthanc
     *
     * @return self
     */
    public function setDicomAet($dicom_aet)
    {
        if (is_null($dicom_aet)) {
            throw new \InvalidArgumentException('non-nullable dicom_aet cannot be null');
        }
        $this->container['dicom_aet'] = $dicom_aet;

        return $this;
    }

    /**
     * Gets dicom_port
     *
     * @return float|null
     */
    public function getDicomPort()
    {
        return $this->container['dicom_port'];
    }

    /**
     * Sets dicom_port
     *
     * @param float|null $dicom_port The port to the DICOM server of Orthanc
     *
     * @return self
     */
    public function setDicomPort($dicom_port)
    {
        if (is_null($dicom_port)) {
            throw new \InvalidArgumentException('non-nullable dicom_port cannot be null');
        }
        $this->container['dicom_port'] = $dicom_port;

        return $this;
    }

    /**
     * Gets http_port
     *
     * @return float|null
     */
    public function getHttpPort()
    {
        return $this->container['http_port'];
    }

    /**
     * Sets http_port
     *
     * @param float|null $http_port The port to the HTTP server of Orthanc
     *
     * @return self
     */
    public function setHttpPort($http_port)
    {
        if (is_null($http_port)) {
            throw new \InvalidArgumentException('non-nullable http_port cannot be null');
        }
        $this->container['http_port'] = $http_port;

        return $this;
    }

    /**
     * Gets ingest_transcoding
     *
     * @return string|null
     */
    public function getIngestTranscoding()
    {
        return $this->container['ingest_transcoding'];
    }

    /**
     * Sets ingest_transcoding
     *
     * @param string|null $ingest_transcoding Whether instances are transcoded when ingested into Orthanc (`` if no transcoding is performed) (new in Orthanc 1.11.0)
     *
     * @return self
     */
    public function setIngestTranscoding($ingest_transcoding)
    {
        if (is_null($ingest_transcoding)) {
            throw new \InvalidArgumentException('non-nullable ingest_transcoding cannot be null');
        }
        $this->container['ingest_transcoding'] = $ingest_transcoding;

        return $this;
    }

    /**
     * Gets is_http_server_secure
     *
     * @return bool|null
     */
    public function getIsHttpServerSecure()
    {
        return $this->container['is_http_server_secure'];
    }

    /**
     * Sets is_http_server_secure
     *
     * @param bool|null $is_http_server_secure Whether the REST API is properly secured (assuming no reverse proxy is in use): https://book.orthanc-server.com/faq/security.html#securing-the-http-server
     *
     * @return self
     */
    public function setIsHttpServerSecure($is_http_server_secure)
    {
        if (is_null($is_http_server_secure)) {
            throw new \InvalidArgumentException('non-nullable is_http_server_secure cannot be null');
        }
        $this->container['is_http_server_secure'] = $is_http_server_secure;

        return $this;
    }

    /**
     * Gets main_dicom_tags
     *
     * @return object|null
     */
    public function getMainDicomTags()
    {
        return $this->container['main_dicom_tags'];
    }

    /**
     * Sets main_dicom_tags
     *
     * @param object|null $main_dicom_tags The list of MainDicomTags saved in DB for each resource level (new in Orthanc 1.11.0)
     *
     * @return self
     */
    public function setMainDicomTags($main_dicom_tags)
    {
        if (is_null($main_dicom_tags)) {
            throw new \InvalidArgumentException('non-nullable main_dicom_tags cannot be null');
        }
        $this->container['main_dicom_tags'] = $main_dicom_tags;

        return $this;
    }

    /**
     * Gets maximum_storage_mode
     *
     * @return string|null
     */
    public function getMaximumStorageMode()
    {
        return $this->container['maximum_storage_mode'];
    }

    /**
     * Sets maximum_storage_mode
     *
     * @param string|null $maximum_storage_mode The configured MaximumStorageMode (new in Orthanc 1.11.3)
     *
     * @return self
     */
    public function setMaximumStorageMode($maximum_storage_mode)
    {
        if (is_null($maximum_storage_mode)) {
            throw new \InvalidArgumentException('non-nullable maximum_storage_mode cannot be null');
        }
        $this->container['maximum_storage_mode'] = $maximum_storage_mode;

        return $this;
    }

    /**
     * Gets maximum_storage_size
     *
     * @return float|null
     */
    public function getMaximumStorageSize()
    {
        return $this->container['maximum_storage_size'];
    }

    /**
     * Sets maximum_storage_size
     *
     * @param float|null $maximum_storage_size The configured MaximumStorageSize in MB (new in Orthanc 1.11.3)
     *
     * @return self
     */
    public function setMaximumStorageSize($maximum_storage_size)
    {
        if (is_null($maximum_storage_size)) {
            throw new \InvalidArgumentException('non-nullable maximum_storage_size cannot be null');
        }
        $this->container['maximum_storage_size'] = $maximum_storage_size;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the Orthanc server, cf. the `Name` configuration option
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets overwrite_instances
     *
     * @return bool|null
     */
    public function getOverwriteInstances()
    {
        return $this->container['overwrite_instances'];
    }

    /**
     * Sets overwrite_instances
     *
     * @param bool|null $overwrite_instances Whether instances are overwritten when re-ingested (new in Orthanc 1.11.0)
     *
     * @return self
     */
    public function setOverwriteInstances($overwrite_instances)
    {
        if (is_null($overwrite_instances)) {
            throw new \InvalidArgumentException('non-nullable overwrite_instances cannot be null');
        }
        $this->container['overwrite_instances'] = $overwrite_instances;

        return $this;
    }

    /**
     * Gets plugins_enabled
     *
     * @return bool|null
     */
    public function getPluginsEnabled()
    {
        return $this->container['plugins_enabled'];
    }

    /**
     * Sets plugins_enabled
     *
     * @param bool|null $plugins_enabled Whether Orthanc was built with support for plugins
     *
     * @return self
     */
    public function setPluginsEnabled($plugins_enabled)
    {
        if (is_null($plugins_enabled)) {
            throw new \InvalidArgumentException('non-nullable plugins_enabled cannot be null');
        }
        $this->container['plugins_enabled'] = $plugins_enabled;

        return $this;
    }

    /**
     * Gets storage_area_plugin
     *
     * @return string|null
     */
    public function getStorageAreaPlugin()
    {
        return $this->container['storage_area_plugin'];
    }

    /**
     * Sets storage_area_plugin
     *
     * @param string|null $storage_area_plugin Information about the installed storage area plugin (`null` if no such plugin is installed)
     *
     * @return self
     */
    public function setStorageAreaPlugin($storage_area_plugin)
    {
        if (is_null($storage_area_plugin)) {
            throw new \InvalidArgumentException('non-nullable storage_area_plugin cannot be null');
        }
        $this->container['storage_area_plugin'] = $storage_area_plugin;

        return $this;
    }

    /**
     * Gets storage_compression
     *
     * @return bool|null
     */
    public function getStorageCompression()
    {
        return $this->container['storage_compression'];
    }

    /**
     * Sets storage_compression
     *
     * @param bool|null $storage_compression Whether storage compression is enabled (new in Orthanc 1.11.0)
     *
     * @return self
     */
    public function setStorageCompression($storage_compression)
    {
        if (is_null($storage_compression)) {
            throw new \InvalidArgumentException('non-nullable storage_compression cannot be null');
        }
        $this->container['storage_compression'] = $storage_compression;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version Version of Orthanc
     *
     * @return self
     */
    public function setVersion($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }
        $this->container['version'] = $version;

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


