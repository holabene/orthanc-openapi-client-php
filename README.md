# OpenAPIClient-php

This is the full documentation of the [REST API](https://book.orthanc-server.com/users/rest.html) of Orthanc.<p>This reference is automatically generated from the source code of Orthanc. A [shorter cheat sheet](https://book.orthanc-server.com/users/rest-cheatsheet.html) is part of the Orthanc Book.<p>An earlier, manually crafted version from August 2019, is [still available](2019-08-orthanc-openapi.html), but is not up-to-date anymore ([source](https://groups.google.com/g/orthanc-users/c/NUiJTEICSl8/m/xKeqMrbqAAAJ)).


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\InstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$expand = 'expand_example'; // string | If present, retrieve detailed information about the individual instances
$full = True; // bool | If present, report the DICOM tags in full format (tags indexed by their hexadecimal format, associated with their symbolic name and their value)
$limit = 3.4; // float | Limit the number of results
$requested_tags = 'requested_tags_example'; // string | If present, list the DICOM Tags you want to list in the response.  This argument is a semi-column separated list of DICOM Tags identifiers; e.g: 'requestedTags=0010,0010;PatientBirthDate'.  The tags requested tags are returned in the 'RequestedTags' field in the response.  Note that, if you are requesting tags that are not listed in the Main Dicom Tags stored in DB, building the response might be slow since Orthanc will need to access the DICOM files.  If not specified, Orthanc will return
$short = True; // bool | If present, report the DICOM tags in hexadecimal format
$since = 3.4; // float | Show only the resources since the provided index

try {
    $result = $apiInstance->instancesGet($expand, $full, $limit, $requested_tags, $short, $since);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstancesApi->instancesGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://demo.orthanc-server.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*InstancesApi* | [**instancesGet**](docs/Api/InstancesApi.md#instancesget) | **GET** /instances | List the available instances
*InstancesApi* | [**instancesIdAnonymizePost**](docs/Api/InstancesApi.md#instancesidanonymizepost) | **POST** /instances/{id}/anonymize | Anonymize instance
*InstancesApi* | [**instancesIdAttachmentsGet**](docs/Api/InstancesApi.md#instancesidattachmentsget) | **GET** /instances/{id}/attachments | List attachments
*InstancesApi* | [**instancesIdAttachmentsNameCompressPost**](docs/Api/InstancesApi.md#instancesidattachmentsnamecompresspost) | **POST** /instances/{id}/attachments/{name}/compress | Compress attachment
*InstancesApi* | [**instancesIdAttachmentsNameCompressedDataGet**](docs/Api/InstancesApi.md#instancesidattachmentsnamecompresseddataget) | **GET** /instances/{id}/attachments/{name}/compressed-data | Get attachment (no decompression)
*InstancesApi* | [**instancesIdAttachmentsNameCompressedMd5Get**](docs/Api/InstancesApi.md#instancesidattachmentsnamecompressedmd5get) | **GET** /instances/{id}/attachments/{name}/compressed-md5 | Get MD5 of attachment on disk
*InstancesApi* | [**instancesIdAttachmentsNameCompressedSizeGet**](docs/Api/InstancesApi.md#instancesidattachmentsnamecompressedsizeget) | **GET** /instances/{id}/attachments/{name}/compressed-size | Get size of attachment on disk
*InstancesApi* | [**instancesIdAttachmentsNameDataGet**](docs/Api/InstancesApi.md#instancesidattachmentsnamedataget) | **GET** /instances/{id}/attachments/{name}/data | Get attachment
*InstancesApi* | [**instancesIdAttachmentsNameDelete**](docs/Api/InstancesApi.md#instancesidattachmentsnamedelete) | **DELETE** /instances/{id}/attachments/{name} | Delete attachment
*InstancesApi* | [**instancesIdAttachmentsNameInfoGet**](docs/Api/InstancesApi.md#instancesidattachmentsnameinfoget) | **GET** /instances/{id}/attachments/{name}/info | Get info about the attachment
*InstancesApi* | [**instancesIdAttachmentsNameIsCompressedGet**](docs/Api/InstancesApi.md#instancesidattachmentsnameiscompressedget) | **GET** /instances/{id}/attachments/{name}/is-compressed | Is attachment compressed?
*InstancesApi* | [**instancesIdAttachmentsNameMd5Get**](docs/Api/InstancesApi.md#instancesidattachmentsnamemd5get) | **GET** /instances/{id}/attachments/{name}/md5 | Get MD5 of attachment
*InstancesApi* | [**instancesIdAttachmentsNamePut**](docs/Api/InstancesApi.md#instancesidattachmentsnameput) | **PUT** /instances/{id}/attachments/{name} | Set attachment
*InstancesApi* | [**instancesIdAttachmentsNameSizeGet**](docs/Api/InstancesApi.md#instancesidattachmentsnamesizeget) | **GET** /instances/{id}/attachments/{name}/size | Get size of attachment
*InstancesApi* | [**instancesIdAttachmentsNameUncompressPost**](docs/Api/InstancesApi.md#instancesidattachmentsnameuncompresspost) | **POST** /instances/{id}/attachments/{name}/uncompress | Uncompress attachment
*InstancesApi* | [**instancesIdAttachmentsNameVerifyMd5Post**](docs/Api/InstancesApi.md#instancesidattachmentsnameverifymd5post) | **POST** /instances/{id}/attachments/{name}/verify-md5 | Verify attachment
*InstancesApi* | [**instancesIdContentGet**](docs/Api/InstancesApi.md#instancesidcontentget) | **GET** /instances/{id}/content | Get raw tag
*InstancesApi* | [**instancesIdDelete**](docs/Api/InstancesApi.md#instancesiddelete) | **DELETE** /instances/{id} | Delete some instance
*InstancesApi* | [**instancesIdExportPost**](docs/Api/InstancesApi.md#instancesidexportpost) | **POST** /instances/{id}/export | Write DICOM onto filesystem
*InstancesApi* | [**instancesIdFileGet**](docs/Api/InstancesApi.md#instancesidfileget) | **GET** /instances/{id}/file | Download DICOM
*InstancesApi* | [**instancesIdFramesFrameImageInt16Get**](docs/Api/InstancesApi.md#instancesidframesframeimageint16get) | **GET** /instances/{id}/frames/{frame}/image-int16 | Decode a frame (int16)
*InstancesApi* | [**instancesIdFramesFrameImageUint16Get**](docs/Api/InstancesApi.md#instancesidframesframeimageuint16get) | **GET** /instances/{id}/frames/{frame}/image-uint16 | Decode a frame (uint16)
*InstancesApi* | [**instancesIdFramesFrameImageUint8Get**](docs/Api/InstancesApi.md#instancesidframesframeimageuint8get) | **GET** /instances/{id}/frames/{frame}/image-uint8 | Decode a frame (uint8)
*InstancesApi* | [**instancesIdFramesFrameMatlabGet**](docs/Api/InstancesApi.md#instancesidframesframematlabget) | **GET** /instances/{id}/frames/{frame}/matlab | Decode frame for Matlab
*InstancesApi* | [**instancesIdFramesFrameNumpyGet**](docs/Api/InstancesApi.md#instancesidframesframenumpyget) | **GET** /instances/{id}/frames/{frame}/numpy | Decode frame for numpy
*InstancesApi* | [**instancesIdFramesFramePreviewGet**](docs/Api/InstancesApi.md#instancesidframesframepreviewget) | **GET** /instances/{id}/frames/{frame}/preview | Decode a frame (preview)
*InstancesApi* | [**instancesIdFramesFrameRawGet**](docs/Api/InstancesApi.md#instancesidframesframerawget) | **GET** /instances/{id}/frames/{frame}/raw | Access raw frame
*InstancesApi* | [**instancesIdFramesFrameRawGzGet**](docs/Api/InstancesApi.md#instancesidframesframerawgzget) | **GET** /instances/{id}/frames/{frame}/raw.gz | Access raw frame (compressed)
*InstancesApi* | [**instancesIdFramesFrameRenderedGet**](docs/Api/InstancesApi.md#instancesidframesframerenderedget) | **GET** /instances/{id}/frames/{frame}/rendered | Render a frame
*InstancesApi* | [**instancesIdFramesGet**](docs/Api/InstancesApi.md#instancesidframesget) | **GET** /instances/{id}/frames | List available frames
*InstancesApi* | [**instancesIdGet**](docs/Api/InstancesApi.md#instancesidget) | **GET** /instances/{id} | Get information about some instance
*InstancesApi* | [**instancesIdHeaderGet**](docs/Api/InstancesApi.md#instancesidheaderget) | **GET** /instances/{id}/header | Get DICOM meta-header
*InstancesApi* | [**instancesIdImageInt16Get**](docs/Api/InstancesApi.md#instancesidimageint16get) | **GET** /instances/{id}/image-int16 | Decode an image (int16)
*InstancesApi* | [**instancesIdImageUint16Get**](docs/Api/InstancesApi.md#instancesidimageuint16get) | **GET** /instances/{id}/image-uint16 | Decode an image (uint16)
*InstancesApi* | [**instancesIdImageUint8Get**](docs/Api/InstancesApi.md#instancesidimageuint8get) | **GET** /instances/{id}/image-uint8 | Decode an image (uint8)
*InstancesApi* | [**instancesIdMatlabGet**](docs/Api/InstancesApi.md#instancesidmatlabget) | **GET** /instances/{id}/matlab | Decode frame for Matlab
*InstancesApi* | [**instancesIdMetadataGet**](docs/Api/InstancesApi.md#instancesidmetadataget) | **GET** /instances/{id}/metadata | List metadata
*InstancesApi* | [**instancesIdMetadataNameDelete**](docs/Api/InstancesApi.md#instancesidmetadatanamedelete) | **DELETE** /instances/{id}/metadata/{name} | Delete metadata
*InstancesApi* | [**instancesIdMetadataNameGet**](docs/Api/InstancesApi.md#instancesidmetadatanameget) | **GET** /instances/{id}/metadata/{name} | Get metadata
*InstancesApi* | [**instancesIdMetadataNamePut**](docs/Api/InstancesApi.md#instancesidmetadatanameput) | **PUT** /instances/{id}/metadata/{name} | Set metadata
*InstancesApi* | [**instancesIdModifyPost**](docs/Api/InstancesApi.md#instancesidmodifypost) | **POST** /instances/{id}/modify | Modify instance
*InstancesApi* | [**instancesIdModuleGet**](docs/Api/InstancesApi.md#instancesidmoduleget) | **GET** /instances/{id}/module | Get instance module
*InstancesApi* | [**instancesIdNumpyGet**](docs/Api/InstancesApi.md#instancesidnumpyget) | **GET** /instances/{id}/numpy | Decode instance for numpy
*InstancesApi* | [**instancesIdPatientGet**](docs/Api/InstancesApi.md#instancesidpatientget) | **GET** /instances/{id}/patient | Get parent patient
*InstancesApi* | [**instancesIdPdfGet**](docs/Api/InstancesApi.md#instancesidpdfget) | **GET** /instances/{id}/pdf | Get embedded PDF
*InstancesApi* | [**instancesIdPreviewGet**](docs/Api/InstancesApi.md#instancesidpreviewget) | **GET** /instances/{id}/preview | Decode an image (preview)
*InstancesApi* | [**instancesIdReconstructPost**](docs/Api/InstancesApi.md#instancesidreconstructpost) | **POST** /instances/{id}/reconstruct | Reconstruct tags &amp; optionally files of instance
*InstancesApi* | [**instancesIdRenderedGet**](docs/Api/InstancesApi.md#instancesidrenderedget) | **GET** /instances/{id}/rendered | Render an image
*InstancesApi* | [**instancesIdSeriesGet**](docs/Api/InstancesApi.md#instancesidseriesget) | **GET** /instances/{id}/series | Get parent series
*InstancesApi* | [**instancesIdSimplifiedTagsGet**](docs/Api/InstancesApi.md#instancesidsimplifiedtagsget) | **GET** /instances/{id}/simplified-tags | Get human-readable tags
*InstancesApi* | [**instancesIdStatisticsGet**](docs/Api/InstancesApi.md#instancesidstatisticsget) | **GET** /instances/{id}/statistics | Get instance statistics
*InstancesApi* | [**instancesIdStudyGet**](docs/Api/InstancesApi.md#instancesidstudyget) | **GET** /instances/{id}/study | Get parent study
*InstancesApi* | [**instancesIdTagsGet**](docs/Api/InstancesApi.md#instancesidtagsget) | **GET** /instances/{id}/tags | Get DICOM tags
*InstancesApi* | [**instancesPost**](docs/Api/InstancesApi.md#instancespost) | **POST** /instances | Upload DICOM instances
*JobsApi* | [**jobsGet**](docs/Api/JobsApi.md#jobsget) | **GET** /jobs | List jobs
*JobsApi* | [**jobsIdCancelPost**](docs/Api/JobsApi.md#jobsidcancelpost) | **POST** /jobs/{id}/cancel | Cancel job
*JobsApi* | [**jobsIdGet**](docs/Api/JobsApi.md#jobsidget) | **GET** /jobs/{id} | Get job
*JobsApi* | [**jobsIdKeyGet**](docs/Api/JobsApi.md#jobsidkeyget) | **GET** /jobs/{id}/{key} | Get job output
*JobsApi* | [**jobsIdPausePost**](docs/Api/JobsApi.md#jobsidpausepost) | **POST** /jobs/{id}/pause | Pause job
*JobsApi* | [**jobsIdResubmitPost**](docs/Api/JobsApi.md#jobsidresubmitpost) | **POST** /jobs/{id}/resubmit | Resubmit job
*JobsApi* | [**jobsIdResumePost**](docs/Api/JobsApi.md#jobsidresumepost) | **POST** /jobs/{id}/resume | Resume job
*LogsApi* | [**toolsLogLevelDicomGet**](docs/Api/LogsApi.md#toolslogleveldicomget) | **GET** /tools/log-level-dicom | Get log level for &#x60;dicom&#x60;
*LogsApi* | [**toolsLogLevelDicomPut**](docs/Api/LogsApi.md#toolslogleveldicomput) | **PUT** /tools/log-level-dicom | Set log level for &#x60;dicom&#x60;
*LogsApi* | [**toolsLogLevelGenericGet**](docs/Api/LogsApi.md#toolsloglevelgenericget) | **GET** /tools/log-level-generic | Get log level for &#x60;generic&#x60;
*LogsApi* | [**toolsLogLevelGenericPut**](docs/Api/LogsApi.md#toolsloglevelgenericput) | **PUT** /tools/log-level-generic | Set log level for &#x60;generic&#x60;
*LogsApi* | [**toolsLogLevelGet**](docs/Api/LogsApi.md#toolsloglevelget) | **GET** /tools/log-level | Get main log level
*LogsApi* | [**toolsLogLevelHttpGet**](docs/Api/LogsApi.md#toolsloglevelhttpget) | **GET** /tools/log-level-http | Get log level for &#x60;http&#x60;
*LogsApi* | [**toolsLogLevelHttpPut**](docs/Api/LogsApi.md#toolsloglevelhttpput) | **PUT** /tools/log-level-http | Set log level for &#x60;http&#x60;
*LogsApi* | [**toolsLogLevelJobsGet**](docs/Api/LogsApi.md#toolslogleveljobsget) | **GET** /tools/log-level-jobs | Get log level for &#x60;jobs&#x60;
*LogsApi* | [**toolsLogLevelJobsPut**](docs/Api/LogsApi.md#toolslogleveljobsput) | **PUT** /tools/log-level-jobs | Set log level for &#x60;jobs&#x60;
*LogsApi* | [**toolsLogLevelLuaGet**](docs/Api/LogsApi.md#toolsloglevelluaget) | **GET** /tools/log-level-lua | Get log level for &#x60;lua&#x60;
*LogsApi* | [**toolsLogLevelLuaPut**](docs/Api/LogsApi.md#toolsloglevelluaput) | **PUT** /tools/log-level-lua | Set log level for &#x60;lua&#x60;
*LogsApi* | [**toolsLogLevelPluginsGet**](docs/Api/LogsApi.md#toolsloglevelpluginsget) | **GET** /tools/log-level-plugins | Get log level for &#x60;plugins&#x60;
*LogsApi* | [**toolsLogLevelPluginsPut**](docs/Api/LogsApi.md#toolsloglevelpluginsput) | **PUT** /tools/log-level-plugins | Set log level for &#x60;plugins&#x60;
*LogsApi* | [**toolsLogLevelPut**](docs/Api/LogsApi.md#toolsloglevelput) | **PUT** /tools/log-level | Set main log level
*LogsApi* | [**toolsLogLevelSqliteGet**](docs/Api/LogsApi.md#toolsloglevelsqliteget) | **GET** /tools/log-level-sqlite | Get log level for &#x60;sqlite&#x60;
*LogsApi* | [**toolsLogLevelSqlitePut**](docs/Api/LogsApi.md#toolsloglevelsqliteput) | **PUT** /tools/log-level-sqlite | Set log level for &#x60;sqlite&#x60;
*NetworkingApi* | [**modalitiesGet**](docs/Api/NetworkingApi.md#modalitiesget) | **GET** /modalities | List DICOM modalities
*NetworkingApi* | [**modalitiesIdConfigurationGet**](docs/Api/NetworkingApi.md#modalitiesidconfigurationget) | **GET** /modalities/{id}/configuration | Get modality configuration
*NetworkingApi* | [**modalitiesIdDelete**](docs/Api/NetworkingApi.md#modalitiesiddelete) | **DELETE** /modalities/{id} | Delete DICOM modality
*NetworkingApi* | [**modalitiesIdEchoPost**](docs/Api/NetworkingApi.md#modalitiesidechopost) | **POST** /modalities/{id}/echo | Trigger C-ECHO SCU
*NetworkingApi* | [**modalitiesIdFindInstancePost**](docs/Api/NetworkingApi.md#modalitiesidfindinstancepost) | **POST** /modalities/{id}/find-instance | C-FIND SCU for instances
*NetworkingApi* | [**modalitiesIdFindPatientPost**](docs/Api/NetworkingApi.md#modalitiesidfindpatientpost) | **POST** /modalities/{id}/find-patient | C-FIND SCU for patients
*NetworkingApi* | [**modalitiesIdFindPost**](docs/Api/NetworkingApi.md#modalitiesidfindpost) | **POST** /modalities/{id}/find | Hierarchical C-FIND SCU
*NetworkingApi* | [**modalitiesIdFindSeriesPost**](docs/Api/NetworkingApi.md#modalitiesidfindseriespost) | **POST** /modalities/{id}/find-series | C-FIND SCU for series
*NetworkingApi* | [**modalitiesIdFindStudyPost**](docs/Api/NetworkingApi.md#modalitiesidfindstudypost) | **POST** /modalities/{id}/find-study | C-FIND SCU for studies
*NetworkingApi* | [**modalitiesIdFindWorklistPost**](docs/Api/NetworkingApi.md#modalitiesidfindworklistpost) | **POST** /modalities/{id}/find-worklist | C-FIND SCU for worklist
*NetworkingApi* | [**modalitiesIdGet**](docs/Api/NetworkingApi.md#modalitiesidget) | **GET** /modalities/{id} | List operations on modality
*NetworkingApi* | [**modalitiesIdMovePost**](docs/Api/NetworkingApi.md#modalitiesidmovepost) | **POST** /modalities/{id}/move | Trigger C-MOVE SCU
*NetworkingApi* | [**modalitiesIdPut**](docs/Api/NetworkingApi.md#modalitiesidput) | **PUT** /modalities/{id} | Update DICOM modality
*NetworkingApi* | [**modalitiesIdQueryPost**](docs/Api/NetworkingApi.md#modalitiesidquerypost) | **POST** /modalities/{id}/query | Trigger C-FIND SCU
*NetworkingApi* | [**modalitiesIdStorageCommitmentPost**](docs/Api/NetworkingApi.md#modalitiesidstoragecommitmentpost) | **POST** /modalities/{id}/storage-commitment | Trigger storage commitment request
*NetworkingApi* | [**modalitiesIdStorePost**](docs/Api/NetworkingApi.md#modalitiesidstorepost) | **POST** /modalities/{id}/store | Trigger C-STORE SCU
*NetworkingApi* | [**modalitiesIdStoreStraightPost**](docs/Api/NetworkingApi.md#modalitiesidstorestraightpost) | **POST** /modalities/{id}/store-straight | Straight C-STORE SCU
*NetworkingApi* | [**peersGet**](docs/Api/NetworkingApi.md#peersget) | **GET** /peers | List Orthanc peers
*NetworkingApi* | [**peersIdConfigurationGet**](docs/Api/NetworkingApi.md#peersidconfigurationget) | **GET** /peers/{id}/configuration | Get peer configuration
*NetworkingApi* | [**peersIdDelete**](docs/Api/NetworkingApi.md#peersiddelete) | **DELETE** /peers/{id} | Delete Orthanc peer
*NetworkingApi* | [**peersIdGet**](docs/Api/NetworkingApi.md#peersidget) | **GET** /peers/{id} | List operations on peer
*NetworkingApi* | [**peersIdPut**](docs/Api/NetworkingApi.md#peersidput) | **PUT** /peers/{id} | Update Orthanc peer
*NetworkingApi* | [**peersIdStorePost**](docs/Api/NetworkingApi.md#peersidstorepost) | **POST** /peers/{id}/store | Send to Orthanc peer
*NetworkingApi* | [**peersIdStoreStraightPost**](docs/Api/NetworkingApi.md#peersidstorestraightpost) | **POST** /peers/{id}/store-straight | Straight store to peer
*NetworkingApi* | [**peersIdSystemGet**](docs/Api/NetworkingApi.md#peersidsystemget) | **GET** /peers/{id}/system | Get peer system information
*NetworkingApi* | [**queriesGet**](docs/Api/NetworkingApi.md#queriesget) | **GET** /queries | List query/retrieve operations
*NetworkingApi* | [**queriesIdAnswersGet**](docs/Api/NetworkingApi.md#queriesidanswersget) | **GET** /queries/{id}/answers | List answers to a query
*NetworkingApi* | [**queriesIdAnswersIndexContentGet**](docs/Api/NetworkingApi.md#queriesidanswersindexcontentget) | **GET** /queries/{id}/answers/{index}/content | Get one answer
*NetworkingApi* | [**queriesIdAnswersIndexGet**](docs/Api/NetworkingApi.md#queriesidanswersindexget) | **GET** /queries/{id}/answers/{index} | List operations on an answer
*NetworkingApi* | [**queriesIdAnswersIndexQueryInstancesPost**](docs/Api/NetworkingApi.md#queriesidanswersindexqueryinstancespost) | **POST** /queries/{id}/answers/{index}/query-instances | Query the child instances of an answer
*NetworkingApi* | [**queriesIdAnswersIndexQuerySeriesPost**](docs/Api/NetworkingApi.md#queriesidanswersindexqueryseriespost) | **POST** /queries/{id}/answers/{index}/query-series | Query the child series of an answer
*NetworkingApi* | [**queriesIdAnswersIndexQueryStudiesPost**](docs/Api/NetworkingApi.md#queriesidanswersindexquerystudiespost) | **POST** /queries/{id}/answers/{index}/query-studies | Query the child studies of an answer
*NetworkingApi* | [**queriesIdAnswersIndexRetrievePost**](docs/Api/NetworkingApi.md#queriesidanswersindexretrievepost) | **POST** /queries/{id}/answers/{index}/retrieve | Retrieve one answer
*NetworkingApi* | [**queriesIdDelete**](docs/Api/NetworkingApi.md#queriesiddelete) | **DELETE** /queries/{id} | Delete a query
*NetworkingApi* | [**queriesIdGet**](docs/Api/NetworkingApi.md#queriesidget) | **GET** /queries/{id} | List operations on a query
*NetworkingApi* | [**queriesIdLevelGet**](docs/Api/NetworkingApi.md#queriesidlevelget) | **GET** /queries/{id}/level | Get level of original query
*NetworkingApi* | [**queriesIdModalityGet**](docs/Api/NetworkingApi.md#queriesidmodalityget) | **GET** /queries/{id}/modality | Get modality of original query
*NetworkingApi* | [**queriesIdQueryGet**](docs/Api/NetworkingApi.md#queriesidqueryget) | **GET** /queries/{id}/query | Get original query arguments
*NetworkingApi* | [**queriesIdRetrievePost**](docs/Api/NetworkingApi.md#queriesidretrievepost) | **POST** /queries/{id}/retrieve | Retrieve all answers
*NetworkingApi* | [**storageCommitmentIdGet**](docs/Api/NetworkingApi.md#storagecommitmentidget) | **GET** /storage-commitment/{id} | Get storage commitment report
*NetworkingApi* | [**storageCommitmentIdRemovePost**](docs/Api/NetworkingApi.md#storagecommitmentidremovepost) | **POST** /storage-commitment/{id}/remove | Remove after storage commitment
*OtherApi* | [**instancesIdAttachmentsNameGet**](docs/Api/OtherApi.md#instancesidattachmentsnameget) | **GET** /instances/{id}/attachments/{name} | List operations on attachments
*OtherApi* | [**instancesIdFramesFrameGet**](docs/Api/OtherApi.md#instancesidframesframeget) | **GET** /instances/{id}/frames/{frame} | List operations
*OtherApi* | [**patientsIdAttachmentsNameGet**](docs/Api/OtherApi.md#patientsidattachmentsnameget) | **GET** /patients/{id}/attachments/{name} | List operations on attachments
*OtherApi* | [**seriesIdAttachmentsNameGet**](docs/Api/OtherApi.md#seriesidattachmentsnameget) | **GET** /series/{id}/attachments/{name} | List operations on attachments
*OtherApi* | [**studiesIdAttachmentsNameGet**](docs/Api/OtherApi.md#studiesidattachmentsnameget) | **GET** /studies/{id}/attachments/{name} | List operations on attachments
*OtherApi* | [**toolsGet**](docs/Api/OtherApi.md#toolsget) | **GET** /tools | List operations
*PatientsApi* | [**patientsGet**](docs/Api/PatientsApi.md#patientsget) | **GET** /patients | List the available patients
*PatientsApi* | [**patientsIdAnonymizePost**](docs/Api/PatientsApi.md#patientsidanonymizepost) | **POST** /patients/{id}/anonymize | Anonymize patient
*PatientsApi* | [**patientsIdArchiveGet**](docs/Api/PatientsApi.md#patientsidarchiveget) | **GET** /patients/{id}/archive | Create ZIP archive
*PatientsApi* | [**patientsIdArchivePost**](docs/Api/PatientsApi.md#patientsidarchivepost) | **POST** /patients/{id}/archive | Create ZIP archive
*PatientsApi* | [**patientsIdAttachmentsGet**](docs/Api/PatientsApi.md#patientsidattachmentsget) | **GET** /patients/{id}/attachments | List attachments
*PatientsApi* | [**patientsIdAttachmentsNameCompressPost**](docs/Api/PatientsApi.md#patientsidattachmentsnamecompresspost) | **POST** /patients/{id}/attachments/{name}/compress | Compress attachment
*PatientsApi* | [**patientsIdAttachmentsNameCompressedDataGet**](docs/Api/PatientsApi.md#patientsidattachmentsnamecompresseddataget) | **GET** /patients/{id}/attachments/{name}/compressed-data | Get attachment (no decompression)
*PatientsApi* | [**patientsIdAttachmentsNameCompressedMd5Get**](docs/Api/PatientsApi.md#patientsidattachmentsnamecompressedmd5get) | **GET** /patients/{id}/attachments/{name}/compressed-md5 | Get MD5 of attachment on disk
*PatientsApi* | [**patientsIdAttachmentsNameCompressedSizeGet**](docs/Api/PatientsApi.md#patientsidattachmentsnamecompressedsizeget) | **GET** /patients/{id}/attachments/{name}/compressed-size | Get size of attachment on disk
*PatientsApi* | [**patientsIdAttachmentsNameDataGet**](docs/Api/PatientsApi.md#patientsidattachmentsnamedataget) | **GET** /patients/{id}/attachments/{name}/data | Get attachment
*PatientsApi* | [**patientsIdAttachmentsNameDelete**](docs/Api/PatientsApi.md#patientsidattachmentsnamedelete) | **DELETE** /patients/{id}/attachments/{name} | Delete attachment
*PatientsApi* | [**patientsIdAttachmentsNameInfoGet**](docs/Api/PatientsApi.md#patientsidattachmentsnameinfoget) | **GET** /patients/{id}/attachments/{name}/info | Get info about the attachment
*PatientsApi* | [**patientsIdAttachmentsNameIsCompressedGet**](docs/Api/PatientsApi.md#patientsidattachmentsnameiscompressedget) | **GET** /patients/{id}/attachments/{name}/is-compressed | Is attachment compressed?
*PatientsApi* | [**patientsIdAttachmentsNameMd5Get**](docs/Api/PatientsApi.md#patientsidattachmentsnamemd5get) | **GET** /patients/{id}/attachments/{name}/md5 | Get MD5 of attachment
*PatientsApi* | [**patientsIdAttachmentsNamePut**](docs/Api/PatientsApi.md#patientsidattachmentsnameput) | **PUT** /patients/{id}/attachments/{name} | Set attachment
*PatientsApi* | [**patientsIdAttachmentsNameSizeGet**](docs/Api/PatientsApi.md#patientsidattachmentsnamesizeget) | **GET** /patients/{id}/attachments/{name}/size | Get size of attachment
*PatientsApi* | [**patientsIdAttachmentsNameUncompressPost**](docs/Api/PatientsApi.md#patientsidattachmentsnameuncompresspost) | **POST** /patients/{id}/attachments/{name}/uncompress | Uncompress attachment
*PatientsApi* | [**patientsIdAttachmentsNameVerifyMd5Post**](docs/Api/PatientsApi.md#patientsidattachmentsnameverifymd5post) | **POST** /patients/{id}/attachments/{name}/verify-md5 | Verify attachment
*PatientsApi* | [**patientsIdDelete**](docs/Api/PatientsApi.md#patientsiddelete) | **DELETE** /patients/{id} | Delete some patient
*PatientsApi* | [**patientsIdGet**](docs/Api/PatientsApi.md#patientsidget) | **GET** /patients/{id} | Get information about some patient
*PatientsApi* | [**patientsIdInstancesGet**](docs/Api/PatientsApi.md#patientsidinstancesget) | **GET** /patients/{id}/instances | Get child instances
*PatientsApi* | [**patientsIdInstancesTagsGet**](docs/Api/PatientsApi.md#patientsidinstancestagsget) | **GET** /patients/{id}/instances-tags | Get tags of instances
*PatientsApi* | [**patientsIdMediaGet**](docs/Api/PatientsApi.md#patientsidmediaget) | **GET** /patients/{id}/media | Create DICOMDIR media
*PatientsApi* | [**patientsIdMediaPost**](docs/Api/PatientsApi.md#patientsidmediapost) | **POST** /patients/{id}/media | Create DICOMDIR media
*PatientsApi* | [**patientsIdMetadataGet**](docs/Api/PatientsApi.md#patientsidmetadataget) | **GET** /patients/{id}/metadata | List metadata
*PatientsApi* | [**patientsIdMetadataNameDelete**](docs/Api/PatientsApi.md#patientsidmetadatanamedelete) | **DELETE** /patients/{id}/metadata/{name} | Delete metadata
*PatientsApi* | [**patientsIdMetadataNameGet**](docs/Api/PatientsApi.md#patientsidmetadatanameget) | **GET** /patients/{id}/metadata/{name} | Get metadata
*PatientsApi* | [**patientsIdMetadataNamePut**](docs/Api/PatientsApi.md#patientsidmetadatanameput) | **PUT** /patients/{id}/metadata/{name} | Set metadata
*PatientsApi* | [**patientsIdModifyPost**](docs/Api/PatientsApi.md#patientsidmodifypost) | **POST** /patients/{id}/modify | Modify patient
*PatientsApi* | [**patientsIdModuleGet**](docs/Api/PatientsApi.md#patientsidmoduleget) | **GET** /patients/{id}/module | Get patient module
*PatientsApi* | [**patientsIdProtectedGet**](docs/Api/PatientsApi.md#patientsidprotectedget) | **GET** /patients/{id}/protected | Is the patient protected against recycling?
*PatientsApi* | [**patientsIdProtectedPut**](docs/Api/PatientsApi.md#patientsidprotectedput) | **PUT** /patients/{id}/protected | Protect one patient against recycling
*PatientsApi* | [**patientsIdReconstructPost**](docs/Api/PatientsApi.md#patientsidreconstructpost) | **POST** /patients/{id}/reconstruct | Reconstruct tags &amp; optionally files of patient
*PatientsApi* | [**patientsIdSeriesGet**](docs/Api/PatientsApi.md#patientsidseriesget) | **GET** /patients/{id}/series | Get child series
*PatientsApi* | [**patientsIdSharedTagsGet**](docs/Api/PatientsApi.md#patientsidsharedtagsget) | **GET** /patients/{id}/shared-tags | Get shared tags
*PatientsApi* | [**patientsIdStatisticsGet**](docs/Api/PatientsApi.md#patientsidstatisticsget) | **GET** /patients/{id}/statistics | Get patient statistics
*PatientsApi* | [**patientsIdStudiesGet**](docs/Api/PatientsApi.md#patientsidstudiesget) | **GET** /patients/{id}/studies | Get child studies
*SeriesApi* | [**seriesGet**](docs/Api/SeriesApi.md#seriesget) | **GET** /series | List the available series
*SeriesApi* | [**seriesIdAnonymizePost**](docs/Api/SeriesApi.md#seriesidanonymizepost) | **POST** /series/{id}/anonymize | Anonymize series
*SeriesApi* | [**seriesIdArchiveGet**](docs/Api/SeriesApi.md#seriesidarchiveget) | **GET** /series/{id}/archive | Create ZIP archive
*SeriesApi* | [**seriesIdArchivePost**](docs/Api/SeriesApi.md#seriesidarchivepost) | **POST** /series/{id}/archive | Create ZIP archive
*SeriesApi* | [**seriesIdAttachmentsGet**](docs/Api/SeriesApi.md#seriesidattachmentsget) | **GET** /series/{id}/attachments | List attachments
*SeriesApi* | [**seriesIdAttachmentsNameCompressPost**](docs/Api/SeriesApi.md#seriesidattachmentsnamecompresspost) | **POST** /series/{id}/attachments/{name}/compress | Compress attachment
*SeriesApi* | [**seriesIdAttachmentsNameCompressedDataGet**](docs/Api/SeriesApi.md#seriesidattachmentsnamecompresseddataget) | **GET** /series/{id}/attachments/{name}/compressed-data | Get attachment (no decompression)
*SeriesApi* | [**seriesIdAttachmentsNameCompressedMd5Get**](docs/Api/SeriesApi.md#seriesidattachmentsnamecompressedmd5get) | **GET** /series/{id}/attachments/{name}/compressed-md5 | Get MD5 of attachment on disk
*SeriesApi* | [**seriesIdAttachmentsNameCompressedSizeGet**](docs/Api/SeriesApi.md#seriesidattachmentsnamecompressedsizeget) | **GET** /series/{id}/attachments/{name}/compressed-size | Get size of attachment on disk
*SeriesApi* | [**seriesIdAttachmentsNameDataGet**](docs/Api/SeriesApi.md#seriesidattachmentsnamedataget) | **GET** /series/{id}/attachments/{name}/data | Get attachment
*SeriesApi* | [**seriesIdAttachmentsNameDelete**](docs/Api/SeriesApi.md#seriesidattachmentsnamedelete) | **DELETE** /series/{id}/attachments/{name} | Delete attachment
*SeriesApi* | [**seriesIdAttachmentsNameInfoGet**](docs/Api/SeriesApi.md#seriesidattachmentsnameinfoget) | **GET** /series/{id}/attachments/{name}/info | Get info about the attachment
*SeriesApi* | [**seriesIdAttachmentsNameIsCompressedGet**](docs/Api/SeriesApi.md#seriesidattachmentsnameiscompressedget) | **GET** /series/{id}/attachments/{name}/is-compressed | Is attachment compressed?
*SeriesApi* | [**seriesIdAttachmentsNameMd5Get**](docs/Api/SeriesApi.md#seriesidattachmentsnamemd5get) | **GET** /series/{id}/attachments/{name}/md5 | Get MD5 of attachment
*SeriesApi* | [**seriesIdAttachmentsNamePut**](docs/Api/SeriesApi.md#seriesidattachmentsnameput) | **PUT** /series/{id}/attachments/{name} | Set attachment
*SeriesApi* | [**seriesIdAttachmentsNameSizeGet**](docs/Api/SeriesApi.md#seriesidattachmentsnamesizeget) | **GET** /series/{id}/attachments/{name}/size | Get size of attachment
*SeriesApi* | [**seriesIdAttachmentsNameUncompressPost**](docs/Api/SeriesApi.md#seriesidattachmentsnameuncompresspost) | **POST** /series/{id}/attachments/{name}/uncompress | Uncompress attachment
*SeriesApi* | [**seriesIdAttachmentsNameVerifyMd5Post**](docs/Api/SeriesApi.md#seriesidattachmentsnameverifymd5post) | **POST** /series/{id}/attachments/{name}/verify-md5 | Verify attachment
*SeriesApi* | [**seriesIdDelete**](docs/Api/SeriesApi.md#seriesiddelete) | **DELETE** /series/{id} | Delete some series
*SeriesApi* | [**seriesIdGet**](docs/Api/SeriesApi.md#seriesidget) | **GET** /series/{id} | Get information about some series
*SeriesApi* | [**seriesIdInstancesGet**](docs/Api/SeriesApi.md#seriesidinstancesget) | **GET** /series/{id}/instances | Get child instances
*SeriesApi* | [**seriesIdInstancesTagsGet**](docs/Api/SeriesApi.md#seriesidinstancestagsget) | **GET** /series/{id}/instances-tags | Get tags of instances
*SeriesApi* | [**seriesIdMediaGet**](docs/Api/SeriesApi.md#seriesidmediaget) | **GET** /series/{id}/media | Create DICOMDIR media
*SeriesApi* | [**seriesIdMediaPost**](docs/Api/SeriesApi.md#seriesidmediapost) | **POST** /series/{id}/media | Create DICOMDIR media
*SeriesApi* | [**seriesIdMetadataGet**](docs/Api/SeriesApi.md#seriesidmetadataget) | **GET** /series/{id}/metadata | List metadata
*SeriesApi* | [**seriesIdMetadataNameDelete**](docs/Api/SeriesApi.md#seriesidmetadatanamedelete) | **DELETE** /series/{id}/metadata/{name} | Delete metadata
*SeriesApi* | [**seriesIdMetadataNameGet**](docs/Api/SeriesApi.md#seriesidmetadatanameget) | **GET** /series/{id}/metadata/{name} | Get metadata
*SeriesApi* | [**seriesIdMetadataNamePut**](docs/Api/SeriesApi.md#seriesidmetadatanameput) | **PUT** /series/{id}/metadata/{name} | Set metadata
*SeriesApi* | [**seriesIdModifyPost**](docs/Api/SeriesApi.md#seriesidmodifypost) | **POST** /series/{id}/modify | Modify series
*SeriesApi* | [**seriesIdModuleGet**](docs/Api/SeriesApi.md#seriesidmoduleget) | **GET** /series/{id}/module | Get series module
*SeriesApi* | [**seriesIdNumpyGet**](docs/Api/SeriesApi.md#seriesidnumpyget) | **GET** /series/{id}/numpy | Decode series for numpy
*SeriesApi* | [**seriesIdOrderedSlicesGet**](docs/Api/SeriesApi.md#seriesidorderedslicesget) | **GET** /series/{id}/ordered-slices | Order the slices
*SeriesApi* | [**seriesIdPatientGet**](docs/Api/SeriesApi.md#seriesidpatientget) | **GET** /series/{id}/patient | Get parent patient
*SeriesApi* | [**seriesIdReconstructPost**](docs/Api/SeriesApi.md#seriesidreconstructpost) | **POST** /series/{id}/reconstruct | Reconstruct tags &amp; optionally files of series
*SeriesApi* | [**seriesIdSharedTagsGet**](docs/Api/SeriesApi.md#seriesidsharedtagsget) | **GET** /series/{id}/shared-tags | Get shared tags
*SeriesApi* | [**seriesIdStatisticsGet**](docs/Api/SeriesApi.md#seriesidstatisticsget) | **GET** /series/{id}/statistics | Get series statistics
*SeriesApi* | [**seriesIdStudyGet**](docs/Api/SeriesApi.md#seriesidstudyget) | **GET** /series/{id}/study | Get parent study
*StudiesApi* | [**studiesGet**](docs/Api/StudiesApi.md#studiesget) | **GET** /studies | List the available studies
*StudiesApi* | [**studiesIdAnonymizePost**](docs/Api/StudiesApi.md#studiesidanonymizepost) | **POST** /studies/{id}/anonymize | Anonymize study
*StudiesApi* | [**studiesIdArchiveGet**](docs/Api/StudiesApi.md#studiesidarchiveget) | **GET** /studies/{id}/archive | Create ZIP archive
*StudiesApi* | [**studiesIdArchivePost**](docs/Api/StudiesApi.md#studiesidarchivepost) | **POST** /studies/{id}/archive | Create ZIP archive
*StudiesApi* | [**studiesIdAttachmentsGet**](docs/Api/StudiesApi.md#studiesidattachmentsget) | **GET** /studies/{id}/attachments | List attachments
*StudiesApi* | [**studiesIdAttachmentsNameCompressPost**](docs/Api/StudiesApi.md#studiesidattachmentsnamecompresspost) | **POST** /studies/{id}/attachments/{name}/compress | Compress attachment
*StudiesApi* | [**studiesIdAttachmentsNameCompressedDataGet**](docs/Api/StudiesApi.md#studiesidattachmentsnamecompresseddataget) | **GET** /studies/{id}/attachments/{name}/compressed-data | Get attachment (no decompression)
*StudiesApi* | [**studiesIdAttachmentsNameCompressedMd5Get**](docs/Api/StudiesApi.md#studiesidattachmentsnamecompressedmd5get) | **GET** /studies/{id}/attachments/{name}/compressed-md5 | Get MD5 of attachment on disk
*StudiesApi* | [**studiesIdAttachmentsNameCompressedSizeGet**](docs/Api/StudiesApi.md#studiesidattachmentsnamecompressedsizeget) | **GET** /studies/{id}/attachments/{name}/compressed-size | Get size of attachment on disk
*StudiesApi* | [**studiesIdAttachmentsNameDataGet**](docs/Api/StudiesApi.md#studiesidattachmentsnamedataget) | **GET** /studies/{id}/attachments/{name}/data | Get attachment
*StudiesApi* | [**studiesIdAttachmentsNameDelete**](docs/Api/StudiesApi.md#studiesidattachmentsnamedelete) | **DELETE** /studies/{id}/attachments/{name} | Delete attachment
*StudiesApi* | [**studiesIdAttachmentsNameInfoGet**](docs/Api/StudiesApi.md#studiesidattachmentsnameinfoget) | **GET** /studies/{id}/attachments/{name}/info | Get info about the attachment
*StudiesApi* | [**studiesIdAttachmentsNameIsCompressedGet**](docs/Api/StudiesApi.md#studiesidattachmentsnameiscompressedget) | **GET** /studies/{id}/attachments/{name}/is-compressed | Is attachment compressed?
*StudiesApi* | [**studiesIdAttachmentsNameMd5Get**](docs/Api/StudiesApi.md#studiesidattachmentsnamemd5get) | **GET** /studies/{id}/attachments/{name}/md5 | Get MD5 of attachment
*StudiesApi* | [**studiesIdAttachmentsNamePut**](docs/Api/StudiesApi.md#studiesidattachmentsnameput) | **PUT** /studies/{id}/attachments/{name} | Set attachment
*StudiesApi* | [**studiesIdAttachmentsNameSizeGet**](docs/Api/StudiesApi.md#studiesidattachmentsnamesizeget) | **GET** /studies/{id}/attachments/{name}/size | Get size of attachment
*StudiesApi* | [**studiesIdAttachmentsNameUncompressPost**](docs/Api/StudiesApi.md#studiesidattachmentsnameuncompresspost) | **POST** /studies/{id}/attachments/{name}/uncompress | Uncompress attachment
*StudiesApi* | [**studiesIdAttachmentsNameVerifyMd5Post**](docs/Api/StudiesApi.md#studiesidattachmentsnameverifymd5post) | **POST** /studies/{id}/attachments/{name}/verify-md5 | Verify attachment
*StudiesApi* | [**studiesIdDelete**](docs/Api/StudiesApi.md#studiesiddelete) | **DELETE** /studies/{id} | Delete some study
*StudiesApi* | [**studiesIdGet**](docs/Api/StudiesApi.md#studiesidget) | **GET** /studies/{id} | Get information about some study
*StudiesApi* | [**studiesIdInstancesGet**](docs/Api/StudiesApi.md#studiesidinstancesget) | **GET** /studies/{id}/instances | Get child instances
*StudiesApi* | [**studiesIdInstancesTagsGet**](docs/Api/StudiesApi.md#studiesidinstancestagsget) | **GET** /studies/{id}/instances-tags | Get tags of instances
*StudiesApi* | [**studiesIdMediaGet**](docs/Api/StudiesApi.md#studiesidmediaget) | **GET** /studies/{id}/media | Create DICOMDIR media
*StudiesApi* | [**studiesIdMediaPost**](docs/Api/StudiesApi.md#studiesidmediapost) | **POST** /studies/{id}/media | Create DICOMDIR media
*StudiesApi* | [**studiesIdMergePost**](docs/Api/StudiesApi.md#studiesidmergepost) | **POST** /studies/{id}/merge | Merge study
*StudiesApi* | [**studiesIdMetadataGet**](docs/Api/StudiesApi.md#studiesidmetadataget) | **GET** /studies/{id}/metadata | List metadata
*StudiesApi* | [**studiesIdMetadataNameDelete**](docs/Api/StudiesApi.md#studiesidmetadatanamedelete) | **DELETE** /studies/{id}/metadata/{name} | Delete metadata
*StudiesApi* | [**studiesIdMetadataNameGet**](docs/Api/StudiesApi.md#studiesidmetadatanameget) | **GET** /studies/{id}/metadata/{name} | Get metadata
*StudiesApi* | [**studiesIdMetadataNamePut**](docs/Api/StudiesApi.md#studiesidmetadatanameput) | **PUT** /studies/{id}/metadata/{name} | Set metadata
*StudiesApi* | [**studiesIdModifyPost**](docs/Api/StudiesApi.md#studiesidmodifypost) | **POST** /studies/{id}/modify | Modify study
*StudiesApi* | [**studiesIdModuleGet**](docs/Api/StudiesApi.md#studiesidmoduleget) | **GET** /studies/{id}/module | Get study module
*StudiesApi* | [**studiesIdModulePatientGet**](docs/Api/StudiesApi.md#studiesidmodulepatientget) | **GET** /studies/{id}/module-patient | Get patient module of study
*StudiesApi* | [**studiesIdPatientGet**](docs/Api/StudiesApi.md#studiesidpatientget) | **GET** /studies/{id}/patient | Get parent patient
*StudiesApi* | [**studiesIdReconstructPost**](docs/Api/StudiesApi.md#studiesidreconstructpost) | **POST** /studies/{id}/reconstruct | Reconstruct tags &amp; optionally files of study
*StudiesApi* | [**studiesIdSeriesGet**](docs/Api/StudiesApi.md#studiesidseriesget) | **GET** /studies/{id}/series | Get child series
*StudiesApi* | [**studiesIdSharedTagsGet**](docs/Api/StudiesApi.md#studiesidsharedtagsget) | **GET** /studies/{id}/shared-tags | Get shared tags
*StudiesApi* | [**studiesIdSplitPost**](docs/Api/StudiesApi.md#studiesidsplitpost) | **POST** /studies/{id}/split | Split study
*StudiesApi* | [**studiesIdStatisticsGet**](docs/Api/StudiesApi.md#studiesidstatisticsget) | **GET** /studies/{id}/statistics | Get study statistics
*SystemApi* | [**pluginsExplorerJsGet**](docs/Api/SystemApi.md#pluginsexplorerjsget) | **GET** /plugins/explorer.js | JavaScript extensions to Orthanc Explorer
*SystemApi* | [**pluginsGet**](docs/Api/SystemApi.md#pluginsget) | **GET** /plugins | List plugins
*SystemApi* | [**pluginsIdGet**](docs/Api/SystemApi.md#pluginsidget) | **GET** /plugins/{id} | Get plugin
*SystemApi* | [**statisticsGet**](docs/Api/SystemApi.md#statisticsget) | **GET** /statistics | Get database statistics
*SystemApi* | [**systemGet**](docs/Api/SystemApi.md#systemget) | **GET** /system | Get system information
*SystemApi* | [**toolsAcceptedTransferSyntaxesGet**](docs/Api/SystemApi.md#toolsacceptedtransfersyntaxesget) | **GET** /tools/accepted-transfer-syntaxes | Get accepted transfer syntaxes
*SystemApi* | [**toolsAcceptedTransferSyntaxesPut**](docs/Api/SystemApi.md#toolsacceptedtransfersyntaxesput) | **PUT** /tools/accepted-transfer-syntaxes | Set accepted transfer syntaxes
*SystemApi* | [**toolsBulkAnonymizePost**](docs/Api/SystemApi.md#toolsbulkanonymizepost) | **POST** /tools/bulk-anonymize | Anonymize a set of resources
*SystemApi* | [**toolsBulkContentPost**](docs/Api/SystemApi.md#toolsbulkcontentpost) | **POST** /tools/bulk-content | Describe a set of resources
*SystemApi* | [**toolsBulkDeletePost**](docs/Api/SystemApi.md#toolsbulkdeletepost) | **POST** /tools/bulk-delete | Delete a set of resources
*SystemApi* | [**toolsBulkModifyPost**](docs/Api/SystemApi.md#toolsbulkmodifypost) | **POST** /tools/bulk-modify | Modify a set of resources
*SystemApi* | [**toolsCreateArchivePost**](docs/Api/SystemApi.md#toolscreatearchivepost) | **POST** /tools/create-archive | Create ZIP archive
*SystemApi* | [**toolsCreateDicomPost**](docs/Api/SystemApi.md#toolscreatedicompost) | **POST** /tools/create-dicom | Create one DICOM instance
*SystemApi* | [**toolsCreateMediaExtendedPost**](docs/Api/SystemApi.md#toolscreatemediaextendedpost) | **POST** /tools/create-media-extended | Create DICOMDIR media
*SystemApi* | [**toolsCreateMediaPost**](docs/Api/SystemApi.md#toolscreatemediapost) | **POST** /tools/create-media | Create DICOMDIR media
*SystemApi* | [**toolsDefaultEncodingGet**](docs/Api/SystemApi.md#toolsdefaultencodingget) | **GET** /tools/default-encoding | Get default encoding
*SystemApi* | [**toolsDefaultEncodingPut**](docs/Api/SystemApi.md#toolsdefaultencodingput) | **PUT** /tools/default-encoding | Set default encoding
*SystemApi* | [**toolsDicomConformanceGet**](docs/Api/SystemApi.md#toolsdicomconformanceget) | **GET** /tools/dicom-conformance | Get DICOM conformance
*SystemApi* | [**toolsDicomEchoPost**](docs/Api/SystemApi.md#toolsdicomechopost) | **POST** /tools/dicom-echo | Trigger C-ECHO SCU
*SystemApi* | [**toolsExecuteScriptPost**](docs/Api/SystemApi.md#toolsexecutescriptpost) | **POST** /tools/execute-script | Execute Lua script
*SystemApi* | [**toolsFindPost**](docs/Api/SystemApi.md#toolsfindpost) | **POST** /tools/find | Look for local resources
*SystemApi* | [**toolsGenerateUidGet**](docs/Api/SystemApi.md#toolsgenerateuidget) | **GET** /tools/generate-uid | Generate an identifier
*SystemApi* | [**toolsInvalidateTagsPost**](docs/Api/SystemApi.md#toolsinvalidatetagspost) | **POST** /tools/invalidate-tags | Invalidate DICOM-as-JSON summaries
*SystemApi* | [**toolsLookupPost**](docs/Api/SystemApi.md#toolslookuppost) | **POST** /tools/lookup | Look for DICOM identifiers
*SystemApi* | [**toolsMetricsGet**](docs/Api/SystemApi.md#toolsmetricsget) | **GET** /tools/metrics | Are metrics collected?
*SystemApi* | [**toolsMetricsPrometheusGet**](docs/Api/SystemApi.md#toolsmetricsprometheusget) | **GET** /tools/metrics-prometheus | Get usage metrics
*SystemApi* | [**toolsMetricsPut**](docs/Api/SystemApi.md#toolsmetricsput) | **PUT** /tools/metrics | Enable collection of metrics
*SystemApi* | [**toolsNowGet**](docs/Api/SystemApi.md#toolsnowget) | **GET** /tools/now | Get UTC time
*SystemApi* | [**toolsNowLocalGet**](docs/Api/SystemApi.md#toolsnowlocalget) | **GET** /tools/now-local | Get local time
*SystemApi* | [**toolsReconstructPost**](docs/Api/SystemApi.md#toolsreconstructpost) | **POST** /tools/reconstruct | Reconstruct all the index
*SystemApi* | [**toolsResetPost**](docs/Api/SystemApi.md#toolsresetpost) | **POST** /tools/reset | Restart Orthanc
*SystemApi* | [**toolsShutdownPost**](docs/Api/SystemApi.md#toolsshutdownpost) | **POST** /tools/shutdown | Shutdown Orthanc
*SystemApi* | [**toolsUnknownSopClassAcceptedGet**](docs/Api/SystemApi.md#toolsunknownsopclassacceptedget) | **GET** /tools/unknown-sop-class-accepted | Is unknown SOP class accepted?
*SystemApi* | [**toolsUnknownSopClassAcceptedPut**](docs/Api/SystemApi.md#toolsunknownsopclassacceptedput) | **PUT** /tools/unknown-sop-class-accepted | Set unknown SOP class accepted
*TrackingChangesApi* | [**changesDelete**](docs/Api/TrackingChangesApi.md#changesdelete) | **DELETE** /changes | Clear changes
*TrackingChangesApi* | [**changesGet**](docs/Api/TrackingChangesApi.md#changesget) | **GET** /changes | List changes
*TrackingChangesApi* | [**exportsDelete**](docs/Api/TrackingChangesApi.md#exportsdelete) | **DELETE** /exports | Clear exports
*TrackingChangesApi* | [**exportsGet**](docs/Api/TrackingChangesApi.md#exportsget) | **GET** /exports | List exports

## Models

- [ChangesGet200Response](docs/Model/ChangesGet200Response.md)
- [InstancesIdAnonymizePostRequest](docs/Model/InstancesIdAnonymizePostRequest.md)
- [InstancesIdModifyPostRequest](docs/Model/InstancesIdModifyPostRequest.md)
- [InstancesIdReconstructPostRequest](docs/Model/InstancesIdReconstructPostRequest.md)
- [InstancesIdStatisticsGet200Response](docs/Model/InstancesIdStatisticsGet200Response.md)
- [InstancesPost200Response](docs/Model/InstancesPost200Response.md)
- [ModalitiesIdEchoPostRequest](docs/Model/ModalitiesIdEchoPostRequest.md)
- [ModalitiesIdFindWorklistPostRequest](docs/Model/ModalitiesIdFindWorklistPostRequest.md)
- [ModalitiesIdMovePost200Response](docs/Model/ModalitiesIdMovePost200Response.md)
- [ModalitiesIdMovePostRequest](docs/Model/ModalitiesIdMovePostRequest.md)
- [ModalitiesIdPutRequest](docs/Model/ModalitiesIdPutRequest.md)
- [ModalitiesIdQueryPost200Response](docs/Model/ModalitiesIdQueryPost200Response.md)
- [ModalitiesIdQueryPostRequest](docs/Model/ModalitiesIdQueryPostRequest.md)
- [ModalitiesIdStorageCommitmentPost200Response](docs/Model/ModalitiesIdStorageCommitmentPost200Response.md)
- [ModalitiesIdStorageCommitmentPostRequest](docs/Model/ModalitiesIdStorageCommitmentPostRequest.md)
- [ModalitiesIdStorePostRequest](docs/Model/ModalitiesIdStorePostRequest.md)
- [ModalitiesIdStoreStraightPost200Response](docs/Model/ModalitiesIdStoreStraightPost200Response.md)
- [PatientsIdAnonymizePostRequest](docs/Model/PatientsIdAnonymizePostRequest.md)
- [PatientsIdArchivePost200Response](docs/Model/PatientsIdArchivePost200Response.md)
- [PatientsIdArchivePostRequest](docs/Model/PatientsIdArchivePostRequest.md)
- [PatientsIdMediaPostRequest](docs/Model/PatientsIdMediaPostRequest.md)
- [PatientsIdModifyPostRequest](docs/Model/PatientsIdModifyPostRequest.md)
- [PatientsIdStatisticsGet200Response](docs/Model/PatientsIdStatisticsGet200Response.md)
- [PeersIdPutRequest](docs/Model/PeersIdPutRequest.md)
- [PeersIdStorePostRequest](docs/Model/PeersIdStorePostRequest.md)
- [PeersIdStoreStraightPost200Response](docs/Model/PeersIdStoreStraightPost200Response.md)
- [QueriesIdAnswersIndexQueryInstancesPostRequest](docs/Model/QueriesIdAnswersIndexQueryInstancesPostRequest.md)
- [QueriesIdAnswersIndexRetrievePostRequest](docs/Model/QueriesIdAnswersIndexRetrievePostRequest.md)
- [SeriesIdOrderedSlicesGet200Response](docs/Model/SeriesIdOrderedSlicesGet200Response.md)
- [SeriesIdStatisticsGet200Response](docs/Model/SeriesIdStatisticsGet200Response.md)
- [StatisticsGet200Response](docs/Model/StatisticsGet200Response.md)
- [StorageCommitmentIdGet200Response](docs/Model/StorageCommitmentIdGet200Response.md)
- [StudiesIdMergePostRequest](docs/Model/StudiesIdMergePostRequest.md)
- [StudiesIdSplitPostRequest](docs/Model/StudiesIdSplitPostRequest.md)
- [StudiesIdStatisticsGet200Response](docs/Model/StudiesIdStatisticsGet200Response.md)
- [SystemGet200Response](docs/Model/SystemGet200Response.md)
- [ToolsBulkAnonymizePost200Response](docs/Model/ToolsBulkAnonymizePost200Response.md)
- [ToolsBulkAnonymizePostRequest](docs/Model/ToolsBulkAnonymizePostRequest.md)
- [ToolsBulkContentPostRequest](docs/Model/ToolsBulkContentPostRequest.md)
- [ToolsBulkDeletePostRequest](docs/Model/ToolsBulkDeletePostRequest.md)
- [ToolsBulkModifyPost200Response](docs/Model/ToolsBulkModifyPost200Response.md)
- [ToolsBulkModifyPostRequest](docs/Model/ToolsBulkModifyPostRequest.md)
- [ToolsCreateArchivePostRequest](docs/Model/ToolsCreateArchivePostRequest.md)
- [ToolsCreateDicomPost200Response](docs/Model/ToolsCreateDicomPost200Response.md)
- [ToolsCreateDicomPostRequest](docs/Model/ToolsCreateDicomPostRequest.md)
- [ToolsCreateMediaExtendedPostRequest](docs/Model/ToolsCreateMediaExtendedPostRequest.md)
- [ToolsCreateMediaPostRequest](docs/Model/ToolsCreateMediaPostRequest.md)
- [ToolsDicomEchoPostRequest](docs/Model/ToolsDicomEchoPostRequest.md)
- [ToolsFindPostRequest](docs/Model/ToolsFindPostRequest.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.11.3`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
