# # ModalitiesIdMovePostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asynchronous** | **bool** | If &#x60;true&#x60;, run the job in asynchronous mode, which means that the REST API call will immediately return, reporting the identifier of a job. Prefer this flavor wherever possible. | [optional]
**level** | **string** | Level of the query (&#x60;Patient&#x60;, &#x60;Study&#x60;, &#x60;Series&#x60; or &#x60;Instance&#x60;) | [optional]
**local_aet** | **string** | Local AET that is used for this commands, defaults to &#x60;DicomAet&#x60; configuration option. Ignored if &#x60;DicomModalities&#x60; already sets &#x60;LocalAet&#x60; for this modality. | [optional]
**permissive** | **bool** | If &#x60;true&#x60;, ignore errors during the individual steps of the job. | [optional]
**priority** | **float** | In asynchronous mode, the priority of the job. The lower the value, the higher the priority. | [optional]
**resources** | **object[]** | List of queries identifying all the DICOM resources to be sent | [optional]
**synchronous** | **bool** | If &#x60;true&#x60;, run the job in synchronous mode, which means that the HTTP answer will directly contain the result of the job. This is the default, easy behavior, but it is *not* desirable for long jobs, as it might lead to network timeouts. | [optional]
**target_aet** | **string** | Target AET that will be used by the remote DICOM modality as a target for its C-STORE SCU commands, defaults to &#x60;DicomAet&#x60; configuration option in order to do a simple query/retrieve | [optional]
**timeout** | **float** | Timeout for the C-MOVE command, in seconds | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
