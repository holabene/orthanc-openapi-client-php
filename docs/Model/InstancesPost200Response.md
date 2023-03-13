# # InstancesPost200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Orthanc identifier of the new instance | [optional]
**parent_patient** | **string** | Orthanc identifier of the parent patient | [optional]
**parent_series** | **string** | Orthanc identifier of the parent series | [optional]
**parent_study** | **string** | Orthanc identifier of the parent study | [optional]
**path** | **string** | Path to the new instance in the REST API | [optional]
**status** | **string** | Can be &#x60;Success&#x60;, &#x60;AlreadyStored&#x60;, &#x60;Failure&#x60;, or &#x60;FilteredOut&#x60; (removed by some &#x60;NewInstanceFilter&#x60;) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
