# Swagger\Client\DefaultApi

All URIs are relative to *https://api.facestore.pt/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**uploadImages**](DefaultApi.md#uploadImages) | **POST** /brands/{id}/uploads/ | Upload de images for brand


# **uploadImages**
> uploadImages($id, $image_small, $image_large)

Upload de images for brand

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('APIToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIToken', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | ID of brand to update
$image_small = array('key' => "image_small_example"); // map[string,string] | Small image for brand
$image_large = array('key' => "image_large_example"); // map[string,string] | Large image for brand

try {
    $apiInstance->uploadImages($id, $image_small, $image_large);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->uploadImages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of brand to update |
 **image_small** | [**map[string,string]**](../Model/string.md)| Small image for brand | [optional]
 **image_large** | [**map[string,string]**](../Model/string.md)| Large image for brand | [optional]

### Return type

void (empty response body)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

