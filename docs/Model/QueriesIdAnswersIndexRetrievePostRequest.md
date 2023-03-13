# # QueriesIdAnswersIndexRetrievePostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asynchronous** | **bool** | If &#x60;true&#x60;, run the job in asynchronous mode, which means that the REST API call will immediately return, reporting the identifier of a job. Prefer this flavor wherever possible. | [optional]
**full** | **bool** | If set to &#x60;true&#x60;, report the DICOM tags in full format (tags indexed by their hexadecimal format, associated with their symbolic name and their value) | [optional]
**permissive** | **bool** | If &#x60;true&#x60;, ignore errors during the individual steps of the job. | [optional]
**priority** | **float** | In asynchronous mode, the priority of the job. The lower the value, the higher the priority. | [optional]
**simplify** | **bool** | If set to &#x60;true&#x60;, report the DICOM tags in human-readable format (using the symbolic name of the tags) | [optional]
**synchronous** | **bool** | If &#x60;true&#x60;, run the job in synchronous mode, which means that the HTTP answer will directly contain the result of the job. This is the default, easy behavior, but it is *not* desirable for long jobs, as it might lead to network timeouts. | [optional]
**target_aet** | **string** | AET of the target modality. By default, the AET of Orthanc is used, as defined in the &#x60;DicomAet&#x60; configuration option. | [optional]
**timeout** | **float** | Timeout for the C-MOVE command, in seconds | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
