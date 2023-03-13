# # StorageCommitmentIdGet200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**failures** | **object[]** | List of failures that have been encountered during the storage commitment request | [optional]
**remote_aet** | **string** | AET of the remote DICOM modality | [optional]
**status** | **string** | Can be &#x60;Success&#x60;, &#x60;Failure&#x60;, or &#x60;Pending&#x60; (the latter means that no report has been received yet) | [optional]
**success** | **object[]** | List of DICOM instances that have been acknowledged by the remote modality, each one is reported as a JSON object containing the &#x60;SOPClassUID&#x60; and &#x60;SOPInstanceUID&#x60; DICOM tags | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
