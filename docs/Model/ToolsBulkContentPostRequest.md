# # ToolsBulkContentPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**full** | **bool** | If set to &#x60;true&#x60;, report the DICOM tags in full format (tags indexed by their hexadecimal format, associated with their symbolic name and their value) | [optional]
**level** | **string** | This optional argument specifies the level of interest (can be &#x60;Patient&#x60;, &#x60;Study&#x60;, &#x60;Series&#x60; or &#x60;Instance&#x60;). Orthanc will loop over the items inside &#x60;Resources&#x60;, and explore upward or downward in the DICOM hierarchy in order to find the level of interest. | [optional]
**metadata** | **bool** | If set to &#x60;true&#x60; (default value), the metadata associated with the resources will also be retrieved. | [optional]
**resources** | **string[]** | List of the Orthanc identifiers of the patients/studies/series/instances of interest. | [optional]
**short** | **bool** | If set to &#x60;true&#x60;, report the DICOM tags in hexadecimal format | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
