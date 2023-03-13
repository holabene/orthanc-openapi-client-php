# # StudiesIdSplitPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asynchronous** | **bool** | If &#x60;true&#x60;, run the job in asynchronous mode, which means that the REST API call will immediately return, reporting the identifier of a job. Prefer this flavor wherever possible. | [optional]
**instances** | **string[]** | The list of instances to be separated from the parent study. These instances must all be children of the same source study, that is specified in the URI. | [optional]
**keep_source** | **bool** | If set to &#x60;true&#x60;, instructs Orthanc to keep a copy of the original series/instances in the source study. By default, the original series/instances are deleted from Orthanc. | [optional]
**permissive** | **bool** | If &#x60;true&#x60;, ignore errors during the individual steps of the job. | [optional]
**priority** | **float** | In asynchronous mode, the priority of the job. The lower the value, the higher the priority. | [optional]
**remove** | **string[]** | List of tags that must be removed in the new study (from the same modules as in the &#x60;Replace&#x60; option) | [optional]
**replace** | **object** | Associative array to change the value of some DICOM tags in the new study. These tags must be part of the \&quot;Patient Module Attributes\&quot; or the \&quot;General Study Module Attributes\&quot;, as specified by the DICOM 2011 standard in Tables C.7-1 and C.7-3. | [optional]
**series** | **string[]** | The list of series to be separated from the parent study. These series must all be children of the same source study, that is specified in the URI. | [optional]
**synchronous** | **bool** | If &#x60;true&#x60;, run the job in synchronous mode, which means that the HTTP answer will directly contain the result of the job. This is the default, easy behavior, but it is *not* desirable for long jobs, as it might lead to network timeouts. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
