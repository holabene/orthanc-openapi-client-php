# # ModalitiesIdQueryPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**level** | **string** | Level of the query (&#x60;Patient&#x60;, &#x60;Study&#x60;, &#x60;Series&#x60; or &#x60;Instance&#x60;) | [optional]
**local_aet** | **string** | Local AET that is used for this commands, defaults to &#x60;DicomAet&#x60; configuration option. Ignored if &#x60;DicomModalities&#x60; already sets &#x60;LocalAet&#x60; for this modality. | [optional]
**normalize** | **bool** | Whether to normalize the query, i.e. whether to wipe out from the query, the DICOM tags that are not applicable for the query-retrieve level of interest | [optional]
**query** | **object** | Associative array containing the filter on the values of the DICOM tags | [optional]
**timeout** | **float** | Timeout for the C-FIND command and subsequent C-MOVE retrievals, in seconds (new in Orthanc 1.9.1) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
