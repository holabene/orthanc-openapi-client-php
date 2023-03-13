# # StudiesIdMergePostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asynchronous** | **bool** | If &#x60;true&#x60;, run the job in asynchronous mode, which means that the REST API call will immediately return, reporting the identifier of a job. Prefer this flavor wherever possible. | [optional]
**keep_source** | **bool** | If set to &#x60;true&#x60;, instructs Orthanc to keep a copy of the original resources in their source study. By default, the original resources are deleted from Orthanc. | [optional]
**permissive** | **bool** | If &#x60;true&#x60;, ignore errors during the individual steps of the job. | [optional]
**priority** | **float** | In asynchronous mode, the priority of the job. The lower the value, the higher the priority. | [optional]
**resources** | **string[]** | The list of DICOM resources (studies, series, and/or instances) to be merged into the study of interest (mandatory option) | [optional]
**synchronous** | **bool** | If &#x60;true&#x60;, run the job in synchronous mode, which means that the HTTP answer will directly contain the result of the job. This is the default, easy behavior, but it is *not* desirable for long jobs, as it might lead to network timeouts. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
