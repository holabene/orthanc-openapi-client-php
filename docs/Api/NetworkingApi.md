# OpenAPI\Client\NetworkingApi

All URIs are relative to https://demo.orthanc-server.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**modalitiesGet()**](NetworkingApi.md#modalitiesGet) | **GET** /modalities | List DICOM modalities |
| [**modalitiesIdConfigurationGet()**](NetworkingApi.md#modalitiesIdConfigurationGet) | **GET** /modalities/{id}/configuration | Get modality configuration |
| [**modalitiesIdDelete()**](NetworkingApi.md#modalitiesIdDelete) | **DELETE** /modalities/{id} | Delete DICOM modality |
| [**modalitiesIdEchoPost()**](NetworkingApi.md#modalitiesIdEchoPost) | **POST** /modalities/{id}/echo | Trigger C-ECHO SCU |
| [**modalitiesIdFindInstancePost()**](NetworkingApi.md#modalitiesIdFindInstancePost) | **POST** /modalities/{id}/find-instance | C-FIND SCU for instances |
| [**modalitiesIdFindPatientPost()**](NetworkingApi.md#modalitiesIdFindPatientPost) | **POST** /modalities/{id}/find-patient | C-FIND SCU for patients |
| [**modalitiesIdFindPost()**](NetworkingApi.md#modalitiesIdFindPost) | **POST** /modalities/{id}/find | Hierarchical C-FIND SCU |
| [**modalitiesIdFindSeriesPost()**](NetworkingApi.md#modalitiesIdFindSeriesPost) | **POST** /modalities/{id}/find-series | C-FIND SCU for series |
| [**modalitiesIdFindStudyPost()**](NetworkingApi.md#modalitiesIdFindStudyPost) | **POST** /modalities/{id}/find-study | C-FIND SCU for studies |
| [**modalitiesIdFindWorklistPost()**](NetworkingApi.md#modalitiesIdFindWorklistPost) | **POST** /modalities/{id}/find-worklist | C-FIND SCU for worklist |
| [**modalitiesIdGet()**](NetworkingApi.md#modalitiesIdGet) | **GET** /modalities/{id} | List operations on modality |
| [**modalitiesIdMovePost()**](NetworkingApi.md#modalitiesIdMovePost) | **POST** /modalities/{id}/move | Trigger C-MOVE SCU |
| [**modalitiesIdPut()**](NetworkingApi.md#modalitiesIdPut) | **PUT** /modalities/{id} | Update DICOM modality |
| [**modalitiesIdQueryPost()**](NetworkingApi.md#modalitiesIdQueryPost) | **POST** /modalities/{id}/query | Trigger C-FIND SCU |
| [**modalitiesIdStorageCommitmentPost()**](NetworkingApi.md#modalitiesIdStorageCommitmentPost) | **POST** /modalities/{id}/storage-commitment | Trigger storage commitment request |
| [**modalitiesIdStorePost()**](NetworkingApi.md#modalitiesIdStorePost) | **POST** /modalities/{id}/store | Trigger C-STORE SCU |
| [**modalitiesIdStoreStraightPost()**](NetworkingApi.md#modalitiesIdStoreStraightPost) | **POST** /modalities/{id}/store-straight | Straight C-STORE SCU |
| [**peersGet()**](NetworkingApi.md#peersGet) | **GET** /peers | List Orthanc peers |
| [**peersIdConfigurationGet()**](NetworkingApi.md#peersIdConfigurationGet) | **GET** /peers/{id}/configuration | Get peer configuration |
| [**peersIdDelete()**](NetworkingApi.md#peersIdDelete) | **DELETE** /peers/{id} | Delete Orthanc peer |
| [**peersIdGet()**](NetworkingApi.md#peersIdGet) | **GET** /peers/{id} | List operations on peer |
| [**peersIdPut()**](NetworkingApi.md#peersIdPut) | **PUT** /peers/{id} | Update Orthanc peer |
| [**peersIdStorePost()**](NetworkingApi.md#peersIdStorePost) | **POST** /peers/{id}/store | Send to Orthanc peer |
| [**peersIdStoreStraightPost()**](NetworkingApi.md#peersIdStoreStraightPost) | **POST** /peers/{id}/store-straight | Straight store to peer |
| [**peersIdSystemGet()**](NetworkingApi.md#peersIdSystemGet) | **GET** /peers/{id}/system | Get peer system information |
| [**queriesGet()**](NetworkingApi.md#queriesGet) | **GET** /queries | List query/retrieve operations |
| [**queriesIdAnswersGet()**](NetworkingApi.md#queriesIdAnswersGet) | **GET** /queries/{id}/answers | List answers to a query |
| [**queriesIdAnswersIndexContentGet()**](NetworkingApi.md#queriesIdAnswersIndexContentGet) | **GET** /queries/{id}/answers/{index}/content | Get one answer |
| [**queriesIdAnswersIndexGet()**](NetworkingApi.md#queriesIdAnswersIndexGet) | **GET** /queries/{id}/answers/{index} | List operations on an answer |
| [**queriesIdAnswersIndexQueryInstancesPost()**](NetworkingApi.md#queriesIdAnswersIndexQueryInstancesPost) | **POST** /queries/{id}/answers/{index}/query-instances | Query the child instances of an answer |
| [**queriesIdAnswersIndexQuerySeriesPost()**](NetworkingApi.md#queriesIdAnswersIndexQuerySeriesPost) | **POST** /queries/{id}/answers/{index}/query-series | Query the child series of an answer |
| [**queriesIdAnswersIndexQueryStudiesPost()**](NetworkingApi.md#queriesIdAnswersIndexQueryStudiesPost) | **POST** /queries/{id}/answers/{index}/query-studies | Query the child studies of an answer |
| [**queriesIdAnswersIndexRetrievePost()**](NetworkingApi.md#queriesIdAnswersIndexRetrievePost) | **POST** /queries/{id}/answers/{index}/retrieve | Retrieve one answer |
| [**queriesIdDelete()**](NetworkingApi.md#queriesIdDelete) | **DELETE** /queries/{id} | Delete a query |
| [**queriesIdGet()**](NetworkingApi.md#queriesIdGet) | **GET** /queries/{id} | List operations on a query |
| [**queriesIdLevelGet()**](NetworkingApi.md#queriesIdLevelGet) | **GET** /queries/{id}/level | Get level of original query |
| [**queriesIdModalityGet()**](NetworkingApi.md#queriesIdModalityGet) | **GET** /queries/{id}/modality | Get modality of original query |
| [**queriesIdQueryGet()**](NetworkingApi.md#queriesIdQueryGet) | **GET** /queries/{id}/query | Get original query arguments |
| [**queriesIdRetrievePost()**](NetworkingApi.md#queriesIdRetrievePost) | **POST** /queries/{id}/retrieve | Retrieve all answers |
| [**storageCommitmentIdGet()**](NetworkingApi.md#storageCommitmentIdGet) | **GET** /storage-commitment/{id} | Get storage commitment report |
| [**storageCommitmentIdRemovePost()**](NetworkingApi.md#storageCommitmentIdRemovePost) | **POST** /storage-commitment/{id}/remove | Remove after storage commitment |


## `modalitiesGet()`

```php
modalitiesGet($expand): mixed
```

List DICOM modalities

List all the DICOM modalities that are known to Orthanc. This corresponds either to the content of the `DicomModalities` configuration option, or to the information stored in the database if `DicomModalitiesInDatabase` is `true`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$expand = 'expand_example'; // string | If present, retrieve detailed information about the individual DICOM modalities

try {
    $result = $apiInstance->modalitiesGet($expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->modalitiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **expand** | **string**| If present, retrieve detailed information about the individual DICOM modalities | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modalitiesIdConfigurationGet()`

```php
modalitiesIdConfigurationGet($id): mixed
```

Get modality configuration

Get detailed information about the configuration of some DICOM modality

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the modality of interest

try {
    $result = $apiInstance->modalitiesIdConfigurationGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->modalitiesIdConfigurationGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the modality of interest | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modalitiesIdDelete()`

```php
modalitiesIdDelete($id)
```

Delete DICOM modality

Delete one DICOM modality. This change is permanent iff. `DicomModalitiesInDatabase` is `true`, otherwise it is lost at the next restart of Orthanc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the DICOM modality of interest

try {
    $apiInstance->modalitiesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->modalitiesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the DICOM modality of interest | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modalitiesIdEchoPost()`

```php
modalitiesIdEchoPost($id, $modalities_id_echo_post_request)
```

Trigger C-ECHO SCU

Trigger C-ECHO SCU command against the DICOM modality whose identifier is provided in URL: https://book.orthanc-server.com/users/rest.html#performing-c-echo

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the modality of interest
$modalities_id_echo_post_request = new \OpenAPI\Client\Model\ModalitiesIdEchoPostRequest(); // \OpenAPI\Client\Model\ModalitiesIdEchoPostRequest

try {
    $apiInstance->modalitiesIdEchoPost($id, $modalities_id_echo_post_request);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->modalitiesIdEchoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the modality of interest | |
| **modalities_id_echo_post_request** | [**\OpenAPI\Client\Model\ModalitiesIdEchoPostRequest**](../Model/ModalitiesIdEchoPostRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modalitiesIdFindInstancePost()`

```php
modalitiesIdFindInstancePost($id, $body): mixed
```

C-FIND SCU for instances

Trigger C-FIND SCU command against the DICOM modality whose identifier is provided in URL, in order to find an instance. Deprecated in favor of `/modalities/{id}/query`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the modality of interest
$body = NULL; // mixed

try {
    $result = $apiInstance->modalitiesIdFindInstancePost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->modalitiesIdFindInstancePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the modality of interest | |
| **body** | **mixed**|  | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modalitiesIdFindPatientPost()`

```php
modalitiesIdFindPatientPost($id, $body): mixed
```

C-FIND SCU for patients

Trigger C-FIND SCU command against the DICOM modality whose identifier is provided in URL, in order to find a patient. Deprecated in favor of `/modalities/{id}/query`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the modality of interest
$body = NULL; // mixed

try {
    $result = $apiInstance->modalitiesIdFindPatientPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->modalitiesIdFindPatientPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the modality of interest | |
| **body** | **mixed**|  | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modalitiesIdFindPost()`

```php
modalitiesIdFindPost($id, $body): mixed
```

Hierarchical C-FIND SCU

Trigger a sequence of C-FIND SCU commands against the DICOM modality whose identifier is provided in URL, in order to discover a hierarchy of matching patients/studies/series. Deprecated in favor of `/modalities/{id}/query`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the modality of interest
$body = NULL; // mixed

try {
    $result = $apiInstance->modalitiesIdFindPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->modalitiesIdFindPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the modality of interest | |
| **body** | **mixed**|  | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modalitiesIdFindSeriesPost()`

```php
modalitiesIdFindSeriesPost($id, $body): mixed
```

C-FIND SCU for series

Trigger C-FIND SCU command against the DICOM modality whose identifier is provided in URL, in order to find a series. Deprecated in favor of `/modalities/{id}/query`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the modality of interest
$body = NULL; // mixed

try {
    $result = $apiInstance->modalitiesIdFindSeriesPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->modalitiesIdFindSeriesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the modality of interest | |
| **body** | **mixed**|  | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modalitiesIdFindStudyPost()`

```php
modalitiesIdFindStudyPost($id, $body): mixed
```

C-FIND SCU for studies

Trigger C-FIND SCU command against the DICOM modality whose identifier is provided in URL, in order to find a study. Deprecated in favor of `/modalities/{id}/query`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the modality of interest
$body = NULL; // mixed

try {
    $result = $apiInstance->modalitiesIdFindStudyPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->modalitiesIdFindStudyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the modality of interest | |
| **body** | **mixed**|  | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modalitiesIdFindWorklistPost()`

```php
modalitiesIdFindWorklistPost($id, $modalities_id_find_worklist_post_request): mixed
```

C-FIND SCU for worklist

Trigger C-FIND SCU command against the remote worklists of the DICOM modality whose identifier is provided in URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the modality of interest
$modalities_id_find_worklist_post_request = new \OpenAPI\Client\Model\ModalitiesIdFindWorklistPostRequest(); // \OpenAPI\Client\Model\ModalitiesIdFindWorklistPostRequest

try {
    $result = $apiInstance->modalitiesIdFindWorklistPost($id, $modalities_id_find_worklist_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->modalitiesIdFindWorklistPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the modality of interest | |
| **modalities_id_find_worklist_post_request** | [**\OpenAPI\Client\Model\ModalitiesIdFindWorklistPostRequest**](../Model/ModalitiesIdFindWorklistPostRequest.md)|  | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modalitiesIdGet()`

```php
modalitiesIdGet($id): mixed
```

List operations on modality

List the operations that are available for a DICOM modality.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the DICOM modality of interest

try {
    $result = $apiInstance->modalitiesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->modalitiesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the DICOM modality of interest | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modalitiesIdMovePost()`

```php
modalitiesIdMovePost($id, $modalities_id_move_post_request): \OpenAPI\Client\Model\ModalitiesIdMovePost200Response
```

Trigger C-MOVE SCU

Start a C-MOVE SCU command as a job, in order to drive the execution of a sequence of C-STORE commands by some remote DICOM modality whose identifier is provided in the URL: https://book.orthanc-server.com/users/rest.html#performing-c-move

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the modality of interest
$modalities_id_move_post_request = new \OpenAPI\Client\Model\ModalitiesIdMovePostRequest(); // \OpenAPI\Client\Model\ModalitiesIdMovePostRequest

try {
    $result = $apiInstance->modalitiesIdMovePost($id, $modalities_id_move_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->modalitiesIdMovePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the modality of interest | |
| **modalities_id_move_post_request** | [**\OpenAPI\Client\Model\ModalitiesIdMovePostRequest**](../Model/ModalitiesIdMovePostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModalitiesIdMovePost200Response**](../Model/ModalitiesIdMovePost200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modalitiesIdPut()`

```php
modalitiesIdPut($id, $modalities_id_put_request)
```

Update DICOM modality

Define a new DICOM modality, or update an existing one. This change is permanent iff. `DicomModalitiesInDatabase` is `true`, otherwise it is lost at the next restart of Orthanc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the new/updated DICOM modality
$modalities_id_put_request = new \OpenAPI\Client\Model\ModalitiesIdPutRequest(); // \OpenAPI\Client\Model\ModalitiesIdPutRequest

try {
    $apiInstance->modalitiesIdPut($id, $modalities_id_put_request);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->modalitiesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the new/updated DICOM modality | |
| **modalities_id_put_request** | [**\OpenAPI\Client\Model\ModalitiesIdPutRequest**](../Model/ModalitiesIdPutRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modalitiesIdQueryPost()`

```php
modalitiesIdQueryPost($id, $modalities_id_query_post_request): \OpenAPI\Client\Model\ModalitiesIdQueryPost200Response
```

Trigger C-FIND SCU

Trigger C-FIND SCU command against the DICOM modality whose identifier is provided in URL: https://book.orthanc-server.com/users/rest.html#performing-query-retrieve-c-find-and-find-with-rest

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the modality of interest
$modalities_id_query_post_request = new \OpenAPI\Client\Model\ModalitiesIdQueryPostRequest(); // \OpenAPI\Client\Model\ModalitiesIdQueryPostRequest

try {
    $result = $apiInstance->modalitiesIdQueryPost($id, $modalities_id_query_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->modalitiesIdQueryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the modality of interest | |
| **modalities_id_query_post_request** | [**\OpenAPI\Client\Model\ModalitiesIdQueryPostRequest**](../Model/ModalitiesIdQueryPostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModalitiesIdQueryPost200Response**](../Model/ModalitiesIdQueryPost200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modalitiesIdStorageCommitmentPost()`

```php
modalitiesIdStorageCommitmentPost($id, $modalities_id_storage_commitment_post_request): \OpenAPI\Client\Model\ModalitiesIdStorageCommitmentPost200Response
```

Trigger storage commitment request

Trigger a storage commitment request to some remote DICOM modality whose identifier is provided in the URL: https://book.orthanc-server.com/users/storage-commitment.html#storage-commitment-scu

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the modality of interest
$modalities_id_storage_commitment_post_request = new \OpenAPI\Client\Model\ModalitiesIdStorageCommitmentPostRequest(); // \OpenAPI\Client\Model\ModalitiesIdStorageCommitmentPostRequest

try {
    $result = $apiInstance->modalitiesIdStorageCommitmentPost($id, $modalities_id_storage_commitment_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->modalitiesIdStorageCommitmentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the modality of interest | |
| **modalities_id_storage_commitment_post_request** | [**\OpenAPI\Client\Model\ModalitiesIdStorageCommitmentPostRequest**](../Model/ModalitiesIdStorageCommitmentPostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModalitiesIdStorageCommitmentPost200Response**](../Model/ModalitiesIdStorageCommitmentPost200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modalitiesIdStorePost()`

```php
modalitiesIdStorePost($id, $modalities_id_store_post_request): \OpenAPI\Client\Model\ModalitiesIdMovePost200Response
```

Trigger C-STORE SCU

Start a C-STORE SCU command as a job, in order to send DICOM resources stored locally to some remote DICOM modality whose identifier is provided in the URL: https://book.orthanc-server.com/users/rest.html#rest-store-scu

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the modality of interest
$modalities_id_store_post_request = new \OpenAPI\Client\Model\ModalitiesIdStorePostRequest(); // \OpenAPI\Client\Model\ModalitiesIdStorePostRequest

try {
    $result = $apiInstance->modalitiesIdStorePost($id, $modalities_id_store_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->modalitiesIdStorePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the modality of interest | |
| **modalities_id_store_post_request** | [**\OpenAPI\Client\Model\ModalitiesIdStorePostRequest**](../Model/ModalitiesIdStorePostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModalitiesIdMovePost200Response**](../Model/ModalitiesIdMovePost200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/plain`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modalitiesIdStoreStraightPost()`

```php
modalitiesIdStoreStraightPost($id, $body): \OpenAPI\Client\Model\ModalitiesIdStoreStraightPost200Response
```

Straight C-STORE SCU

Synchronously send the DICOM instance in the POST body to the remote DICOM modality whose identifier is provided in URL, without having to first store it locally within Orthanc. This is an alternative to command-line tools such as `storescu` from DCMTK or dcm4che.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the modality of interest
$body = NULL; // mixed

try {
    $result = $apiInstance->modalitiesIdStoreStraightPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->modalitiesIdStoreStraightPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the modality of interest | |
| **body** | **mixed**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModalitiesIdStoreStraightPost200Response**](../Model/ModalitiesIdStoreStraightPost200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/dicom`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `peersGet()`

```php
peersGet($expand): mixed
```

List Orthanc peers

List all the Orthanc peers that are known to Orthanc. This corresponds either to the content of the `OrthancPeers` configuration option, or to the information stored in the database if `OrthancPeersInDatabase` is `true`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$expand = 'expand_example'; // string | If present, retrieve detailed information about the individual Orthanc peers

try {
    $result = $apiInstance->peersGet($expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->peersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **expand** | **string**| If present, retrieve detailed information about the individual Orthanc peers | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `peersIdConfigurationGet()`

```php
peersIdConfigurationGet($id): mixed
```

Get peer configuration

Get detailed information about the configuration of some Orthanc peer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the peer of interest

try {
    $result = $apiInstance->peersIdConfigurationGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->peersIdConfigurationGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the peer of interest | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `peersIdDelete()`

```php
peersIdDelete($id)
```

Delete Orthanc peer

Delete one Orthanc peer. This change is permanent iff. `OrthancPeersInDatabase` is `true`, otherwise it is lost at the next restart of Orthanc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the Orthanc peer of interest

try {
    $apiInstance->peersIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->peersIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the Orthanc peer of interest | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `peersIdGet()`

```php
peersIdGet($id): mixed
```

List operations on peer

List the operations that are available for an Orthanc peer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the peer of interest

try {
    $result = $apiInstance->peersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->peersIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the peer of interest | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `peersIdPut()`

```php
peersIdPut($id, $peers_id_put_request)
```

Update Orthanc peer

Define a new Orthanc peer, or update an existing one. This change is permanent iff. `OrthancPeersInDatabase` is `true`, otherwise it is lost at the next restart of Orthanc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the new/updated Orthanc peer
$peers_id_put_request = new \OpenAPI\Client\Model\PeersIdPutRequest(); // \OpenAPI\Client\Model\PeersIdPutRequest

try {
    $apiInstance->peersIdPut($id, $peers_id_put_request);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->peersIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the new/updated Orthanc peer | |
| **peers_id_put_request** | [**\OpenAPI\Client\Model\PeersIdPutRequest**](../Model/PeersIdPutRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `peersIdStorePost()`

```php
peersIdStorePost($id, $peers_id_store_post_request): \OpenAPI\Client\Model\ModalitiesIdMovePost200Response
```

Send to Orthanc peer

Send DICOM resources stored locally to some remote Orthanc peer whose identifier is provided in the URL: https://book.orthanc-server.com/users/rest.html#sending-one-resource

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the modality of interest
$peers_id_store_post_request = new \OpenAPI\Client\Model\PeersIdStorePostRequest(); // \OpenAPI\Client\Model\PeersIdStorePostRequest

try {
    $result = $apiInstance->peersIdStorePost($id, $peers_id_store_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->peersIdStorePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the modality of interest | |
| **peers_id_store_post_request** | [**\OpenAPI\Client\Model\PeersIdStorePostRequest**](../Model/PeersIdStorePostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModalitiesIdMovePost200Response**](../Model/ModalitiesIdMovePost200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/plain`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `peersIdStoreStraightPost()`

```php
peersIdStoreStraightPost($id, $body): \OpenAPI\Client\Model\PeersIdStoreStraightPost200Response
```

Straight store to peer

Synchronously send the DICOM instance in the POST body to the Orthanc peer whose identifier is provided in URL, without having to first store it locally within Orthanc. This is an alternative to command-line tools such as `curl`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the modality of interest
$body = NULL; // mixed

try {
    $result = $apiInstance->peersIdStoreStraightPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->peersIdStoreStraightPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the modality of interest | |
| **body** | **mixed**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PeersIdStoreStraightPost200Response**](../Model/PeersIdStoreStraightPost200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/dicom`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `peersIdSystemGet()`

```php
peersIdSystemGet($id): mixed
```

Get peer system information

Get system information about some Orthanc peer. This corresponds to doing a `GET` request against the `/system` URI of the remote peer. This route can be used to test connectivity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the peer of interest

try {
    $result = $apiInstance->peersIdSystemGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->peersIdSystemGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the peer of interest | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queriesGet()`

```php
queriesGet(): mixed
```

List query/retrieve operations

List the identifiers of all the query/retrieve operations on DICOM modalities, as initiated by calls to `/modalities/{id}/query`. The length of this list is bounded by the `QueryRetrieveSize` configuration option of Orthanc. https://book.orthanc-server.com/users/rest.html#performing-query-retrieve-c-find-and-find-with-rest

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->queriesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->queriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queriesIdAnswersGet()`

```php
queriesIdAnswersGet($id, $expand, $short, $simplify): mixed
```

List answers to a query

List the indices of all the available answers resulting from a query/retrieve operation on some DICOM modality, whose identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the query of interest
$expand = 'expand_example'; // string | If present, retrieve detailed information about the individual answers
$short = True; // bool | If present, report the DICOM tags in hexadecimal format
$simplify = True; // bool | If present, report the DICOM tags in human-readable format (using the symbolic name of the tags)

try {
    $result = $apiInstance->queriesIdAnswersGet($id, $expand, $short, $simplify);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->queriesIdAnswersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the query of interest | |
| **expand** | **string**| If present, retrieve detailed information about the individual answers | [optional] |
| **short** | **bool**| If present, report the DICOM tags in hexadecimal format | [optional] |
| **simplify** | **bool**| If present, report the DICOM tags in human-readable format (using the symbolic name of the tags) | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queriesIdAnswersIndexContentGet()`

```php
queriesIdAnswersIndexContentGet($id, $index, $short, $simplify): mixed
```

Get one answer

Get the content (DICOM tags) of one answer associated with the query/retrieve operation whose identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the query of interest
$index = 'index_example'; // string | Index of the answer
$short = True; // bool | If present, report the DICOM tags in hexadecimal format
$simplify = True; // bool | If present, report the DICOM tags in human-readable format (using the symbolic name of the tags)

try {
    $result = $apiInstance->queriesIdAnswersIndexContentGet($id, $index, $short, $simplify);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->queriesIdAnswersIndexContentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the query of interest | |
| **index** | **string**| Index of the answer | |
| **short** | **bool**| If present, report the DICOM tags in hexadecimal format | [optional] |
| **simplify** | **bool**| If present, report the DICOM tags in human-readable format (using the symbolic name of the tags) | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queriesIdAnswersIndexGet()`

```php
queriesIdAnswersIndexGet($id, $index): mixed
```

List operations on an answer

List the available operations on an answer associated with the query/retrieve operation whose identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the query of interest
$index = 'index_example'; // string | Index of the answer

try {
    $result = $apiInstance->queriesIdAnswersIndexGet($id, $index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->queriesIdAnswersIndexGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the query of interest | |
| **index** | **string**| Index of the answer | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queriesIdAnswersIndexQueryInstancesPost()`

```php
queriesIdAnswersIndexQueryInstancesPost($id, $index, $queries_id_answers_index_query_instances_post_request): \OpenAPI\Client\Model\ModalitiesIdQueryPost200Response
```

Query the child instances of an answer

Issue a second DICOM C-FIND operation, in order to query the child instances associated with one answer to some query/retrieve operation whose identifiers are provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the query of interest
$index = 'index_example'; // string | Index of the answer
$queries_id_answers_index_query_instances_post_request = new \OpenAPI\Client\Model\QueriesIdAnswersIndexQueryInstancesPostRequest(); // \OpenAPI\Client\Model\QueriesIdAnswersIndexQueryInstancesPostRequest

try {
    $result = $apiInstance->queriesIdAnswersIndexQueryInstancesPost($id, $index, $queries_id_answers_index_query_instances_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->queriesIdAnswersIndexQueryInstancesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the query of interest | |
| **index** | **string**| Index of the answer | |
| **queries_id_answers_index_query_instances_post_request** | [**\OpenAPI\Client\Model\QueriesIdAnswersIndexQueryInstancesPostRequest**](../Model/QueriesIdAnswersIndexQueryInstancesPostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModalitiesIdQueryPost200Response**](../Model/ModalitiesIdQueryPost200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queriesIdAnswersIndexQuerySeriesPost()`

```php
queriesIdAnswersIndexQuerySeriesPost($id, $index, $queries_id_answers_index_query_instances_post_request): \OpenAPI\Client\Model\ModalitiesIdQueryPost200Response
```

Query the child series of an answer

Issue a second DICOM C-FIND operation, in order to query the child series associated with one answer to some query/retrieve operation whose identifiers are provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the query of interest
$index = 'index_example'; // string | Index of the answer
$queries_id_answers_index_query_instances_post_request = new \OpenAPI\Client\Model\QueriesIdAnswersIndexQueryInstancesPostRequest(); // \OpenAPI\Client\Model\QueriesIdAnswersIndexQueryInstancesPostRequest

try {
    $result = $apiInstance->queriesIdAnswersIndexQuerySeriesPost($id, $index, $queries_id_answers_index_query_instances_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->queriesIdAnswersIndexQuerySeriesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the query of interest | |
| **index** | **string**| Index of the answer | |
| **queries_id_answers_index_query_instances_post_request** | [**\OpenAPI\Client\Model\QueriesIdAnswersIndexQueryInstancesPostRequest**](../Model/QueriesIdAnswersIndexQueryInstancesPostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModalitiesIdQueryPost200Response**](../Model/ModalitiesIdQueryPost200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queriesIdAnswersIndexQueryStudiesPost()`

```php
queriesIdAnswersIndexQueryStudiesPost($id, $index, $queries_id_answers_index_query_instances_post_request): \OpenAPI\Client\Model\ModalitiesIdQueryPost200Response
```

Query the child studies of an answer

Issue a second DICOM C-FIND operation, in order to query the child studies associated with one answer to some query/retrieve operation whose identifiers are provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the query of interest
$index = 'index_example'; // string | Index of the answer
$queries_id_answers_index_query_instances_post_request = new \OpenAPI\Client\Model\QueriesIdAnswersIndexQueryInstancesPostRequest(); // \OpenAPI\Client\Model\QueriesIdAnswersIndexQueryInstancesPostRequest

try {
    $result = $apiInstance->queriesIdAnswersIndexQueryStudiesPost($id, $index, $queries_id_answers_index_query_instances_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->queriesIdAnswersIndexQueryStudiesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the query of interest | |
| **index** | **string**| Index of the answer | |
| **queries_id_answers_index_query_instances_post_request** | [**\OpenAPI\Client\Model\QueriesIdAnswersIndexQueryInstancesPostRequest**](../Model/QueriesIdAnswersIndexQueryInstancesPostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModalitiesIdQueryPost200Response**](../Model/ModalitiesIdQueryPost200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queriesIdAnswersIndexRetrievePost()`

```php
queriesIdAnswersIndexRetrievePost($id, $index, $queries_id_answers_index_retrieve_post_request): \OpenAPI\Client\Model\ModalitiesIdMovePost200Response
```

Retrieve one answer

Start a C-MOVE SCU command as a job, in order to retrieve one answer associated with the query/retrieve operation whose identifiers are provided in the URL: https://book.orthanc-server.com/users/rest.html#performing-retrieve-c-move

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the query of interest
$index = 'index_example'; // string | Index of the answer
$queries_id_answers_index_retrieve_post_request = new \OpenAPI\Client\Model\QueriesIdAnswersIndexRetrievePostRequest(); // \OpenAPI\Client\Model\QueriesIdAnswersIndexRetrievePostRequest

try {
    $result = $apiInstance->queriesIdAnswersIndexRetrievePost($id, $index, $queries_id_answers_index_retrieve_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->queriesIdAnswersIndexRetrievePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the query of interest | |
| **index** | **string**| Index of the answer | |
| **queries_id_answers_index_retrieve_post_request** | [**\OpenAPI\Client\Model\QueriesIdAnswersIndexRetrievePostRequest**](../Model/QueriesIdAnswersIndexRetrievePostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModalitiesIdMovePost200Response**](../Model/ModalitiesIdMovePost200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/plain`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queriesIdDelete()`

```php
queriesIdDelete($id)
```

Delete a query

Delete the query/retrieve operation whose identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the query of interest

try {
    $apiInstance->queriesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->queriesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the query of interest | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queriesIdGet()`

```php
queriesIdGet($id): mixed
```

List operations on a query

List the available operations for the query/retrieve operation whose identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the query of interest

try {
    $result = $apiInstance->queriesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->queriesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the query of interest | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queriesIdLevelGet()`

```php
queriesIdLevelGet($id): mixed
```

Get level of original query

Get the query level (value of the `QueryRetrieveLevel` tag) of the query/retrieve operation whose identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the query of interest

try {
    $result = $apiInstance->queriesIdLevelGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->queriesIdLevelGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the query of interest | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queriesIdModalityGet()`

```php
queriesIdModalityGet($id): mixed
```

Get modality of original query

Get the identifier of the DICOM modality that was targeted by the query/retrieve operation whose identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the query of interest

try {
    $result = $apiInstance->queriesIdModalityGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->queriesIdModalityGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the query of interest | |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queriesIdQueryGet()`

```php
queriesIdQueryGet($id, $short, $simplify): mixed
```

Get original query arguments

Get the original DICOM filter associated with the query/retrieve operation whose identifier is provided in the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the query of interest
$short = True; // bool | If present, report the DICOM tags in hexadecimal format
$simplify = True; // bool | If present, report the DICOM tags in human-readable format (using the symbolic name of the tags)

try {
    $result = $apiInstance->queriesIdQueryGet($id, $short, $simplify);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->queriesIdQueryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the query of interest | |
| **short** | **bool**| If present, report the DICOM tags in hexadecimal format | [optional] |
| **simplify** | **bool**| If present, report the DICOM tags in human-readable format (using the symbolic name of the tags) | [optional] |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queriesIdRetrievePost()`

```php
queriesIdRetrievePost($id, $queries_id_answers_index_retrieve_post_request): \OpenAPI\Client\Model\ModalitiesIdMovePost200Response
```

Retrieve all answers

Start a C-MOVE SCU command as a job, in order to retrieve all the answers associated with the query/retrieve operation whose identifier is provided in the URL: https://book.orthanc-server.com/users/rest.html#performing-retrieve-c-move

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the query of interest
$queries_id_answers_index_retrieve_post_request = new \OpenAPI\Client\Model\QueriesIdAnswersIndexRetrievePostRequest(); // \OpenAPI\Client\Model\QueriesIdAnswersIndexRetrievePostRequest

try {
    $result = $apiInstance->queriesIdRetrievePost($id, $queries_id_answers_index_retrieve_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->queriesIdRetrievePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the query of interest | |
| **queries_id_answers_index_retrieve_post_request** | [**\OpenAPI\Client\Model\QueriesIdAnswersIndexRetrievePostRequest**](../Model/QueriesIdAnswersIndexRetrievePostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ModalitiesIdMovePost200Response**](../Model/ModalitiesIdMovePost200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/plain`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageCommitmentIdGet()`

```php
storageCommitmentIdGet($id): \OpenAPI\Client\Model\StorageCommitmentIdGet200Response
```

Get storage commitment report

Get the storage commitment report whose identifier is provided in the URL: https://book.orthanc-server.com/users/storage-commitment.html#storage-commitment-scu

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the storage commitment report

try {
    $result = $apiInstance->storageCommitmentIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->storageCommitmentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the storage commitment report | |

### Return type

[**\OpenAPI\Client\Model\StorageCommitmentIdGet200Response**](../Model/StorageCommitmentIdGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storageCommitmentIdRemovePost()`

```php
storageCommitmentIdRemovePost($id)
```

Remove after storage commitment

Remove out of Orthanc, the DICOM instances that have been reported to have been properly received the storage commitment report whose identifier is provided in the URL. This is only possible if the `Status` of the storage commitment report is `Success`. https://book.orthanc-server.com/users/storage-commitment.html#removing-the-instances

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NetworkingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Identifier of the storage commitment report

try {
    $apiInstance->storageCommitmentIdRemovePost($id);
} catch (Exception $e) {
    echo 'Exception when calling NetworkingApi->storageCommitmentIdRemovePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the storage commitment report | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
