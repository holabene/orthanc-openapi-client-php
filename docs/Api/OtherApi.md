# OpenAPI\Client\OtherApi

All URIs are relative to https://demo.orthanc-server.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**instancesIdAttachmentsNameGet()**](OtherApi.md#instancesIdAttachmentsNameGet) | **GET** /instances/{id}/attachments/{name} | List operations on attachments |
| [**instancesIdFramesFrameGet()**](OtherApi.md#instancesIdFramesFrameGet) | **GET** /instances/{id}/frames/{frame} | List operations |
| [**patientsIdAttachmentsNameGet()**](OtherApi.md#patientsIdAttachmentsNameGet) | **GET** /patients/{id}/attachments/{name} | List operations on attachments |
| [**seriesIdAttachmentsNameGet()**](OtherApi.md#seriesIdAttachmentsNameGet) | **GET** /series/{id}/attachments/{name} | List operations on attachments |
| [**studiesIdAttachmentsNameGet()**](OtherApi.md#studiesIdAttachmentsNameGet) | **GET** /studies/{id}/attachments/{name} | List operations on attachments |
| [**toolsGet()**](OtherApi.md#toolsGet) | **GET** /tools | List operations |


## `instancesIdAttachmentsNameGet()`

```php
instancesIdAttachmentsNameGet($id, $name, $if_none_match): mixed
```

List operations on attachments

Get the list of the operations that are available for attachments associated with the given instance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OtherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the instance of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$if_none_match = 'if_none_match_example'; // string | Optional revision of the attachment, to check if its content has changed

try {
    $result = $apiInstance->instancesIdAttachmentsNameGet($id, $name, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OtherApi->instancesIdAttachmentsNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the instance of interest | |
| **name** | **string**| The name of the attachment, or its index (cf. &#x60;UserContentType&#x60; configuration option) | |
| **if_none_match** | **string**| Optional revision of the attachment, to check if its content has changed | [optional] |

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

## `instancesIdFramesFrameGet()`

```php
instancesIdFramesFrameGet($frame, $id): mixed
```

List operations

List the available operations under URI `/instances/{id}/frames/{frame}/`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OtherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$frame = 'frame_example'; // string | 
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->instancesIdFramesFrameGet($frame, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OtherApi->instancesIdFramesFrameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **frame** | **string**|  | |
| **id** | **string**|  | |

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

## `patientsIdAttachmentsNameGet()`

```php
patientsIdAttachmentsNameGet($id, $name, $if_none_match): mixed
```

List operations on attachments

Get the list of the operations that are available for attachments associated with the given patient

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OtherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the patient of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$if_none_match = 'if_none_match_example'; // string | Optional revision of the attachment, to check if its content has changed

try {
    $result = $apiInstance->patientsIdAttachmentsNameGet($id, $name, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OtherApi->patientsIdAttachmentsNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the patient of interest | |
| **name** | **string**| The name of the attachment, or its index (cf. &#x60;UserContentType&#x60; configuration option) | |
| **if_none_match** | **string**| Optional revision of the attachment, to check if its content has changed | [optional] |

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

## `seriesIdAttachmentsNameGet()`

```php
seriesIdAttachmentsNameGet($id, $name, $if_none_match): mixed
```

List operations on attachments

Get the list of the operations that are available for attachments associated with the given series

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OtherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the series of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$if_none_match = 'if_none_match_example'; // string | Optional revision of the attachment, to check if its content has changed

try {
    $result = $apiInstance->seriesIdAttachmentsNameGet($id, $name, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OtherApi->seriesIdAttachmentsNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the series of interest | |
| **name** | **string**| The name of the attachment, or its index (cf. &#x60;UserContentType&#x60; configuration option) | |
| **if_none_match** | **string**| Optional revision of the attachment, to check if its content has changed | [optional] |

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

## `studiesIdAttachmentsNameGet()`

```php
studiesIdAttachmentsNameGet($id, $name, $if_none_match): mixed
```

List operations on attachments

Get the list of the operations that are available for attachments associated with the given study

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OtherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Orthanc identifier of the study of interest
$name = 'name_example'; // string | The name of the attachment, or its index (cf. `UserContentType` configuration option)
$if_none_match = 'if_none_match_example'; // string | Optional revision of the attachment, to check if its content has changed

try {
    $result = $apiInstance->studiesIdAttachmentsNameGet($id, $name, $if_none_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OtherApi->studiesIdAttachmentsNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Orthanc identifier of the study of interest | |
| **name** | **string**| The name of the attachment, or its index (cf. &#x60;UserContentType&#x60; configuration option) | |
| **if_none_match** | **string**| Optional revision of the attachment, to check if its content has changed | [optional] |

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

## `toolsGet()`

```php
toolsGet(): mixed
```

List operations

List the available operations under URI `/tools/`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\OtherApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->toolsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OtherApi->toolsGet: ', $e->getMessage(), PHP_EOL;
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
