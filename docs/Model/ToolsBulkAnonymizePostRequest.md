# # ToolsBulkAnonymizePostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asynchronous** | **bool** | If &#x60;true&#x60;, run the job in asynchronous mode, which means that the REST API call will immediately return, reporting the identifier of a job. Prefer this flavor wherever possible. | [optional]
**dicom_version** | **string** | Version of the DICOM standard to be used for anonymization. Check out configuration option &#x60;DeidentifyLogsDicomVersion&#x60; for possible values. | [optional]
**force** | **bool** | Allow the modification of tags related to DICOM identifiers, at the risk of breaking the DICOM model of the real world | [optional]
**keep** | **string[]** | List of DICOM tags whose value must not be destroyed by the anonymization. Starting with Orthanc 1.9.4, paths to subsequences can be provided using the same syntax as the &#x60;dcmodify&#x60; command-line tool (wildcards are supported as well). | [optional]
**keep_private_tags** | **bool** | Keep the private tags from the DICOM instances (defaults to &#x60;false&#x60;) | [optional]
**keep_source** | **bool** | If set to &#x60;false&#x60;, instructs Orthanc to the remove original resources. By default, the original resources are kept in Orthanc. | [optional]
**permissive** | **bool** | If &#x60;true&#x60;, ignore errors during the individual steps of the job. | [optional]
**priority** | **float** | In asynchronous mode, the priority of the job. The lower the value, the higher the priority. | [optional]
**private_creator** | **string** | The private creator to be used for private tags in &#x60;Replace&#x60; | [optional]
**remove** | **string[]** | List of additional tags to be removed from the DICOM instances. Starting with Orthanc 1.9.4, paths to subsequences can be provided using the same syntax as the &#x60;dcmodify&#x60; command-line tool (wildcards are supported as well). | [optional]
**replace** | **object** | Associative array to change the value of some DICOM tags in the DICOM instances. Starting with Orthanc 1.9.4, paths to subsequences can be provided using the same syntax as the &#x60;dcmodify&#x60; command-line tool (wildcards are supported as well). | [optional]
**resources** | **string[]** | List of the Orthanc identifiers of the patients/studies/series/instances of interest. | [optional]
**synchronous** | **bool** | If &#x60;true&#x60;, run the job in synchronous mode, which means that the HTTP answer will directly contain the result of the job. This is the default, easy behavior, but it is *not* desirable for long jobs, as it might lead to network timeouts. | [optional]
**transcode** | **string** | Transcode the DICOM instances to the provided DICOM transfer syntax: https://book.orthanc-server.com/faq/transcoding.html | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
