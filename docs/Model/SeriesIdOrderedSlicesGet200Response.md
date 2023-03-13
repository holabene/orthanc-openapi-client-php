# # SeriesIdOrderedSlicesGet200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dicom** | **string[]** | Ordered list of paths to DICOM instances | [optional]
**slices** | **string[]** | Ordered list of paths to frames. It is recommended to use this field, as it is also valid in the case of multiframe images. | [optional]
**slices_short** | **object[]** | Same information as the &#x60;Slices&#x60; field, but in a compact form | [optional]
**type** | **string** | Can be &#x60;Volume&#x60; (for 3D volumes) or &#x60;Sequence&#x60; (notably for cine images) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
