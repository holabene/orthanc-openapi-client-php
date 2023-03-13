# # ModalitiesIdStorageCommitmentPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dicom_instances** | **object[]** | List of DICOM resources that are not necessarily stored within Orthanc, but that must be checked by storage commitment. This is a list of JSON objects that must contain the &#x60;SOPClassUID&#x60; and &#x60;SOPInstanceUID&#x60; fields. | [optional]
**resources** | **string[]** | List of the Orthanc identifiers of the DICOM resources to be checked by storage commitment | [optional]
**timeout** | **float** | Timeout for the storage commitment command (new in Orthanc 1.9.1) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
