# # SeriesIdStatisticsGet200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**count_instances** | **float** | Number of child instances within this series | [optional]
**dicom_disk_size** | **string** | Size on the disk of the DICOM instances associated with the series, expressed in bytes | [optional]
**dicom_disk_size_mb** | **float** | Size on the disk of the DICOM instances associated with the series, expressed in megabytes (MB) | [optional]
**dicom_uncompressed_size** | **string** | Size on the disk of the uncompressed DICOM instances associated with the series, expressed in bytes | [optional]
**dicom_uncompressed_size_mb** | **float** | Size on the disk of the uncompressed DICOM instances associated with the series, expressed in megabytes (MB) | [optional]
**disk_size** | **string** | Size of the series on the disk in bytes, expressed as a string for 64bit compatibility with JSON | [optional]
**disk_size_mb** | **float** | Size of the series on the disk, expressed in megabytes (MB) | [optional]
**uncompressed_size** | **string** | Size of the series after decompression in bytes, expressed as a string for 64bit compatibility with JSON | [optional]
**uncompressed_size_mb** | **float** | Size of the series after decompression, expressed in megabytes (MB). This is different from &#x60;DiskSizeMB&#x60; iff &#x60;StorageCompression&#x60; is &#x60;true&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
