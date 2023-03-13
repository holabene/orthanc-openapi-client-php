# # InstancesIdModifyPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**force** | **bool** | Allow the modification of tags related to DICOM identifiers, at the risk of breaking the DICOM model of the real world | [optional]
**keep** | **string[]** | Keep the original value of the specified tags, to be chosen among the &#x60;StudyInstanceUID&#x60;, &#x60;SeriesInstanceUID&#x60; and &#x60;SOPInstanceUID&#x60; tags. Avoid this feature as much as possible, as this breaks the DICOM model of the real world. | [optional]
**keep_source** | **bool** | If set to &#x60;false&#x60;, instructs Orthanc to the remove original resources. By default, the original resources are kept in Orthanc. | [optional]
**private_creator** | **string** | The private creator to be used for private tags in &#x60;Replace&#x60; | [optional]
**remove** | **string[]** | List of tags that must be removed from the DICOM instances. Starting with Orthanc 1.9.4, paths to subsequences can be provided using the same syntax as the &#x60;dcmodify&#x60; command-line tool (wildcards are supported as well). | [optional]
**remove_private_tags** | **bool** | Remove the private tags from the DICOM instances (defaults to &#x60;false&#x60;) | [optional]
**replace** | **object** | Associative array to change the value of some DICOM tags in the DICOM instances. Starting with Orthanc 1.9.4, paths to subsequences can be provided using the same syntax as the &#x60;dcmodify&#x60; command-line tool (wildcards are supported as well). | [optional]
**transcode** | **string** | Transcode the DICOM instances to the provided DICOM transfer syntax: https://book.orthanc-server.com/faq/transcoding.html | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
