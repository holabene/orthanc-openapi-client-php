# # ToolsFindPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**case_sensitive** | **bool** | Enable case-sensitive search for PN value representations (defaults to configuration option &#x60;CaseSensitivePN&#x60;) | [optional]
**expand** | **bool** | Also retrieve the content of the matching resources, not only their Orthanc identifiers | [optional]
**full** | **bool** | If set to &#x60;true&#x60;, report the DICOM tags in full format (tags indexed by their hexadecimal format, associated with their symbolic name and their value) | [optional]
**level** | **string** | Level of the query (&#x60;Patient&#x60;, &#x60;Study&#x60;, &#x60;Series&#x60; or &#x60;Instance&#x60;) | [optional]
**limit** | **float** | Limit the number of reported resources | [optional]
**query** | **object** | Associative array containing the filter on the values of the DICOM tags | [optional]
**requested_tags** | **string[]** | A list of DICOM tags to include in the response (applicable only if \&quot;Expand\&quot; is set to true).  The tags requested tags are returned in the &#39;RequestedTags&#39; field in the response.  Note that, if you are requesting tags that are not listed in the Main Dicom Tags stored in DB, building the response might be slow since Orthanc will need to access the DICOM files.  If not specified, Orthanc will return all Main Dicom Tags to keep backward compatibility with Orthanc prior to 1.11.0. | [optional]
**short** | **bool** | If set to &#x60;true&#x60;, report the DICOM tags in hexadecimal format | [optional]
**since** | **float** | Show only the resources since the provided index (in conjunction with &#x60;Limit&#x60;) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
