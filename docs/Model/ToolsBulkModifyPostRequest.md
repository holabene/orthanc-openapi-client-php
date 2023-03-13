# # ToolsBulkModifyPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asynchronous** | **bool** | If &#x60;true&#x60;, run the job in asynchronous mode, which means that the REST API call will immediately return, reporting the identifier of a job. Prefer this flavor wherever possible. | [optional]
**force** | **bool** | Allow the modification of tags related to DICOM identifiers, at the risk of breaking the DICOM model of the real world | [optional]
**keep** | **string[]** | Keep the original value of the specified tags, to be chosen among the &#x60;StudyInstanceUID&#x60;, &#x60;SeriesInstanceUID&#x60; and &#x60;SOPInstanceUID&#x60; tags. Avoid this feature as much as possible, as this breaks the DICOM model of the real world. | [optional]
**keep_source** | **bool** | If set to &#x60;false&#x60;, instructs Orthanc to the remove original resources. By default, the original resources are kept in Orthanc. | [optional]
**level** | **string** | Level of the modification (&#x60;Patient&#x60;, &#x60;Study&#x60;, &#x60;Series&#x60; or &#x60;Instance&#x60;). If absent, the level defaults to &#x60;Instance&#x60;, but is set to &#x60;Patient&#x60; if &#x60;PatientID&#x60; is modified, to &#x60;Study&#x60; if &#x60;StudyInstanceUID&#x60; is modified, or to &#x60;Series&#x60; if &#x60;SeriesInstancesUID&#x60; is modified. (new in Orthanc 1.9.7) | [optional]
**permissive** | **bool** | If &#x60;true&#x60;, ignore errors during the individual steps of the job. | [optional]
**priority** | **float** | In asynchronous mode, the priority of the job. The lower the value, the higher the priority. | [optional]
**private_creator** | **string** | The private creator to be used for private tags in &#x60;Replace&#x60; | [optional]
**remove** | **string[]** | List of tags that must be removed from the DICOM instances. Starting with Orthanc 1.9.4, paths to subsequences can be provided using the same syntax as the &#x60;dcmodify&#x60; command-line tool (wildcards are supported as well). | [optional]
**remove_private_tags** | **bool** | Remove the private tags from the DICOM instances (defaults to &#x60;false&#x60;) | [optional]
**replace** | **object** | Associative array to change the value of some DICOM tags in the DICOM instances. Starting with Orthanc 1.9.4, paths to subsequences can be provided using the same syntax as the &#x60;dcmodify&#x60; command-line tool (wildcards are supported as well). | [optional]
**resources** | **string[]** | List of the Orthanc identifiers of the patients/studies/series/instances of interest. | [optional]
**synchronous** | **bool** | If &#x60;true&#x60;, run the job in synchronous mode, which means that the HTTP answer will directly contain the result of the job. This is the default, easy behavior, but it is *not* desirable for long jobs, as it might lead to network timeouts. | [optional]
**transcode** | **string** | Transcode the DICOM instances to the provided DICOM transfer syntax: https://book.orthanc-server.com/faq/transcoding.html | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
