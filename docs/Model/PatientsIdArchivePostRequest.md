# # PatientsIdArchivePostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asynchronous** | **bool** | If &#x60;true&#x60;, create the archive in asynchronous mode, which means that a job is submitted to create the archive in background. | [optional]
**priority** | **float** | In asynchronous mode, the priority of the job. The lower the value, the higher the priority. | [optional]
**synchronous** | **bool** | If &#x60;true&#x60;, create the archive in synchronous mode, which means that the HTTP answer will directly contain the ZIP file. This is the default, easy behavior. However, if global configuration option \&quot;SynchronousZipStream\&quot; is set to \&quot;false\&quot;, asynchronous transfers should be preferred for large amount of data, as the creation of the temporary file might lead to network timeouts. | [optional]
**transcode** | **string** | If present, the DICOM files in the archive will be transcoded to the provided transfer syntax: https://book.orthanc-server.com/faq/transcoding.html | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
