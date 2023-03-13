# OpenAPI\Client\LogsApi

All URIs are relative to https://demo.orthanc-server.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**toolsLogLevelDicomGet()**](LogsApi.md#toolsLogLevelDicomGet) | **GET** /tools/log-level-dicom | Get log level for &#x60;dicom&#x60; |
| [**toolsLogLevelDicomPut()**](LogsApi.md#toolsLogLevelDicomPut) | **PUT** /tools/log-level-dicom | Set log level for &#x60;dicom&#x60; |
| [**toolsLogLevelGenericGet()**](LogsApi.md#toolsLogLevelGenericGet) | **GET** /tools/log-level-generic | Get log level for &#x60;generic&#x60; |
| [**toolsLogLevelGenericPut()**](LogsApi.md#toolsLogLevelGenericPut) | **PUT** /tools/log-level-generic | Set log level for &#x60;generic&#x60; |
| [**toolsLogLevelGet()**](LogsApi.md#toolsLogLevelGet) | **GET** /tools/log-level | Get main log level |
| [**toolsLogLevelHttpGet()**](LogsApi.md#toolsLogLevelHttpGet) | **GET** /tools/log-level-http | Get log level for &#x60;http&#x60; |
| [**toolsLogLevelHttpPut()**](LogsApi.md#toolsLogLevelHttpPut) | **PUT** /tools/log-level-http | Set log level for &#x60;http&#x60; |
| [**toolsLogLevelJobsGet()**](LogsApi.md#toolsLogLevelJobsGet) | **GET** /tools/log-level-jobs | Get log level for &#x60;jobs&#x60; |
| [**toolsLogLevelJobsPut()**](LogsApi.md#toolsLogLevelJobsPut) | **PUT** /tools/log-level-jobs | Set log level for &#x60;jobs&#x60; |
| [**toolsLogLevelLuaGet()**](LogsApi.md#toolsLogLevelLuaGet) | **GET** /tools/log-level-lua | Get log level for &#x60;lua&#x60; |
| [**toolsLogLevelLuaPut()**](LogsApi.md#toolsLogLevelLuaPut) | **PUT** /tools/log-level-lua | Set log level for &#x60;lua&#x60; |
| [**toolsLogLevelPluginsGet()**](LogsApi.md#toolsLogLevelPluginsGet) | **GET** /tools/log-level-plugins | Get log level for &#x60;plugins&#x60; |
| [**toolsLogLevelPluginsPut()**](LogsApi.md#toolsLogLevelPluginsPut) | **PUT** /tools/log-level-plugins | Set log level for &#x60;plugins&#x60; |
| [**toolsLogLevelPut()**](LogsApi.md#toolsLogLevelPut) | **PUT** /tools/log-level | Set main log level |
| [**toolsLogLevelSqliteGet()**](LogsApi.md#toolsLogLevelSqliteGet) | **GET** /tools/log-level-sqlite | Get log level for &#x60;sqlite&#x60; |
| [**toolsLogLevelSqlitePut()**](LogsApi.md#toolsLogLevelSqlitePut) | **PUT** /tools/log-level-sqlite | Set log level for &#x60;sqlite&#x60; |


## `toolsLogLevelDicomGet()`

```php
toolsLogLevelDicomGet(): mixed
```

Get log level for `dicom`

Get the log level of the log category `dicom`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->toolsLogLevelDicomGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->toolsLogLevelDicomGet: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toolsLogLevelDicomPut()`

```php
toolsLogLevelDicomPut($body)
```

Set log level for `dicom`

Set the log level of the log category `dicom`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = NULL; // mixed

try {
    $apiInstance->toolsLogLevelDicomPut($body);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->toolsLogLevelDicomPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **mixed**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `text/plain`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toolsLogLevelGenericGet()`

```php
toolsLogLevelGenericGet(): mixed
```

Get log level for `generic`

Get the log level of the log category `generic`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->toolsLogLevelGenericGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->toolsLogLevelGenericGet: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toolsLogLevelGenericPut()`

```php
toolsLogLevelGenericPut($body)
```

Set log level for `generic`

Set the log level of the log category `generic`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = NULL; // mixed

try {
    $apiInstance->toolsLogLevelGenericPut($body);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->toolsLogLevelGenericPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **mixed**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `text/plain`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toolsLogLevelGet()`

```php
toolsLogLevelGet(): mixed
```

Get main log level

Get the main log level of Orthanc

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->toolsLogLevelGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->toolsLogLevelGet: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toolsLogLevelHttpGet()`

```php
toolsLogLevelHttpGet(): mixed
```

Get log level for `http`

Get the log level of the log category `http`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->toolsLogLevelHttpGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->toolsLogLevelHttpGet: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toolsLogLevelHttpPut()`

```php
toolsLogLevelHttpPut($body)
```

Set log level for `http`

Set the log level of the log category `http`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = NULL; // mixed

try {
    $apiInstance->toolsLogLevelHttpPut($body);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->toolsLogLevelHttpPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **mixed**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `text/plain`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toolsLogLevelJobsGet()`

```php
toolsLogLevelJobsGet(): mixed
```

Get log level for `jobs`

Get the log level of the log category `jobs`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->toolsLogLevelJobsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->toolsLogLevelJobsGet: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toolsLogLevelJobsPut()`

```php
toolsLogLevelJobsPut($body)
```

Set log level for `jobs`

Set the log level of the log category `jobs`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = NULL; // mixed

try {
    $apiInstance->toolsLogLevelJobsPut($body);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->toolsLogLevelJobsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **mixed**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `text/plain`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toolsLogLevelLuaGet()`

```php
toolsLogLevelLuaGet(): mixed
```

Get log level for `lua`

Get the log level of the log category `lua`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->toolsLogLevelLuaGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->toolsLogLevelLuaGet: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toolsLogLevelLuaPut()`

```php
toolsLogLevelLuaPut($body)
```

Set log level for `lua`

Set the log level of the log category `lua`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = NULL; // mixed

try {
    $apiInstance->toolsLogLevelLuaPut($body);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->toolsLogLevelLuaPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **mixed**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `text/plain`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toolsLogLevelPluginsGet()`

```php
toolsLogLevelPluginsGet(): mixed
```

Get log level for `plugins`

Get the log level of the log category `plugins`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->toolsLogLevelPluginsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->toolsLogLevelPluginsGet: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toolsLogLevelPluginsPut()`

```php
toolsLogLevelPluginsPut($body)
```

Set log level for `plugins`

Set the log level of the log category `plugins`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = NULL; // mixed

try {
    $apiInstance->toolsLogLevelPluginsPut($body);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->toolsLogLevelPluginsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **mixed**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `text/plain`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toolsLogLevelPut()`

```php
toolsLogLevelPut($body)
```

Set main log level

Set the main log level of Orthanc

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = NULL; // mixed

try {
    $apiInstance->toolsLogLevelPut($body);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->toolsLogLevelPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **mixed**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `text/plain`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toolsLogLevelSqliteGet()`

```php
toolsLogLevelSqliteGet(): mixed
```

Get log level for `sqlite`

Get the log level of the log category `sqlite`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->toolsLogLevelSqliteGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->toolsLogLevelSqliteGet: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toolsLogLevelSqlitePut()`

```php
toolsLogLevelSqlitePut($body)
```

Set log level for `sqlite`

Set the log level of the log category `sqlite`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = NULL; // mixed

try {
    $apiInstance->toolsLogLevelSqlitePut($body);
} catch (Exception $e) {
    echo 'Exception when calling LogsApi->toolsLogLevelSqlitePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **mixed**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `text/plain`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
