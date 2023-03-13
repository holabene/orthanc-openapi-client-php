# # ToolsCreateDicomPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**content** | **string** | This field can be used to embed an image (pixel data) or a PDF inside the created DICOM instance. The PNG image, the JPEG image or the PDF file must be provided using their [data URI scheme encoding](https://en.wikipedia.org/wiki/Data_URI_scheme). This field can possibly contain a JSON array, in which case a DICOM series is created containing one DICOM instance for each item in the &#x60;Content&#x60; field. | [optional]
**force** | **bool** | Avoid the consistency checks for the DICOM tags that enforce the DICOM model of the real-world. You can notably use this flag if you need to manually set the tags &#x60;StudyInstanceUID&#x60;, &#x60;SeriesInstanceUID&#x60;, or &#x60;SOPInstanceUID&#x60;. Be careful with this feature. | [optional]
**interpret_binary_tags** | **bool** | If some value in the &#x60;Tags&#x60; associative array is formatted according to some [data URI scheme encoding](https://en.wikipedia.org/wiki/Data_URI_scheme), whether this value is decoded to a binary value or kept as such (&#x60;true&#x60; by default) | [optional]
**parent** | **string** | If present, the newly created instance will be attached to the parent DICOM resource whose Orthanc identifier is contained in this field. The DICOM tags of the parent modules in the DICOM hierarchy will be automatically copied to the newly created instance. | [optional]
**private_creator** | **string** | The private creator to be used for private tags in &#x60;Tags&#x60; | [optional]
**tags** | **object** | Associative array containing the tags of the new instance to be created | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
