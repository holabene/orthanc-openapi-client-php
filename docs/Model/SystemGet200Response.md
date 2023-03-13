# # SystemGet200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**api_version** | **float** | Version of the REST API | [optional]
**check_revisions** | **bool** | Whether Orthanc handle revisions of metadata and attachments to deal with multiple writers (new in Orthanc 1.9.2) | [optional]
**database_backend_plugin** | **string** | Information about the installed database index plugin (&#x60;null&#x60; if no such plugin is installed) | [optional]
**database_server_identifier** | **string** | ID of the server in the database (when running multiple Orthanc on the same DB) | [optional]
**database_version** | **float** | Version of the database: https://book.orthanc-server.com/developers/db-versioning.html | [optional]
**dicom_aet** | **string** | The DICOM AET of Orthanc | [optional]
**dicom_port** | **float** | The port to the DICOM server of Orthanc | [optional]
**http_port** | **float** | The port to the HTTP server of Orthanc | [optional]
**ingest_transcoding** | **string** | Whether instances are transcoded when ingested into Orthanc (&#x60;&#x60; if no transcoding is performed) (new in Orthanc 1.11.0) | [optional]
**is_http_server_secure** | **bool** | Whether the REST API is properly secured (assuming no reverse proxy is in use): https://book.orthanc-server.com/faq/security.html#securing-the-http-server | [optional]
**main_dicom_tags** | **object** | The list of MainDicomTags saved in DB for each resource level (new in Orthanc 1.11.0) | [optional]
**maximum_storage_mode** | **string** | The configured MaximumStorageMode (new in Orthanc 1.11.3) | [optional]
**maximum_storage_size** | **float** | The configured MaximumStorageSize in MB (new in Orthanc 1.11.3) | [optional]
**name** | **string** | The name of the Orthanc server, cf. the &#x60;Name&#x60; configuration option | [optional]
**overwrite_instances** | **bool** | Whether instances are overwritten when re-ingested (new in Orthanc 1.11.0) | [optional]
**plugins_enabled** | **bool** | Whether Orthanc was built with support for plugins | [optional]
**storage_area_plugin** | **string** | Information about the installed storage area plugin (&#x60;null&#x60; if no such plugin is installed) | [optional]
**storage_compression** | **bool** | Whether storage compression is enabled (new in Orthanc 1.11.0) | [optional]
**version** | **string** | Version of Orthanc | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
