# Swagger\Client\TaxesApi

All URIs are relative to *https://api.facestore.local/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTaxes**](TaxesApi.md#addTaxes) | **POST** /taxes | 
[**deleteTaxById**](TaxesApi.md#deleteTaxById) | **DELETE** /taxes/{id}/ | 
[**getTaxById**](TaxesApi.md#getTaxById) | **GET** /taxes/{id}/ | 
[**getTaxes**](TaxesApi.md#getTaxes) | **GET** /taxes | 
[**updateTaxById**](TaxesApi.md#updateTaxById) | **PUT** /taxes/{id}/ | 
[**updateTaxById_0**](TaxesApi.md#updateTaxById_0) | **PATCH** /taxes/{id}/ | 


# **addTaxes**
> \Swagger\Client\Model\InlineResponse2012 addTaxes($tax)



Creates a new tax in the store.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('APIToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIToken', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tax = new \Swagger\Client\Model\Tax(); // \Swagger\Client\Model\Tax | Tax to add to the store

try {
    $result = $apiInstance->addTaxes($tax);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->addTaxes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tax** | [**\Swagger\Client\Model\Tax**](../Model/Tax.md)| Tax to add to the store |

### Return type

[**\Swagger\Client\Model\InlineResponse2012**](../Model/InlineResponse2012.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTaxById**
> deleteTaxById($id)



deletes a single tax based on the ID supplied

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('APIToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIToken', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | ID of tax to delete

try {
    $apiInstance->deleteTaxById($id);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->deleteTaxById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of tax to delete |

### Return type

void (empty response body)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaxById**
> \Swagger\Client\Model\InlineResponse2012 getTaxById($id, $includes)



Returns a tax based on a single ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('APIToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIToken', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | ID of tax to fetch
$includes = array("includes_example"); // string[] | Include associated objects within response

try {
    $result = $apiInstance->getTaxById($id, $includes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->getTaxById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of tax to fetch |
 **includes** | [**string[]**](../Model/string.md)| Include associated objects within response | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2012**](../Model/InlineResponse2012.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaxes**
> \Swagger\Client\Model\InlineResponse2002 getTaxes($includes, $limit, $order_by)



Returns all taxes from the system that the user has access to

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('APIToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIToken', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$includes = array("includes_example"); // string[] | Include associated objects within response
$limit = 56; // int | max records to return
$order_by = array("order_by_example"); // string[] | Specify the field to be sorted, examples:  - `?order_by=id|desc` - `?order_by=updated_at|desc,position|asc`

try {
    $result = $apiInstance->getTaxes($includes, $limit, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->getTaxes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **includes** | [**string[]**](../Model/string.md)| Include associated objects within response | [optional]
 **limit** | **int**| max records to return | [optional]
 **order_by** | [**string[]**](../Model/string.md)| Specify the field to be sorted, examples:  - &#x60;?order_by&#x3D;id|desc&#x60; - &#x60;?order_by&#x3D;updated_at|desc,position|asc&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTaxById**
> \Swagger\Client\Model\InlineResponse2012 updateTaxById($id, $tax)



update a single tax based on the ID supplied

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('APIToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIToken', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | ID of tax to update
$tax = new \Swagger\Client\Model\Tax(); // \Swagger\Client\Model\Tax | Tax to add to the store

try {
    $result = $apiInstance->updateTaxById($id, $tax);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->updateTaxById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of tax to update |
 **tax** | [**\Swagger\Client\Model\Tax**](../Model/Tax.md)| Tax to add to the store |

### Return type

[**\Swagger\Client\Model\InlineResponse2012**](../Model/InlineResponse2012.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTaxById_0**
> \Swagger\Client\Model\InlineResponse2012 updateTaxById_0($id, $tax)



update a single tax based on the ID supplied

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('APIToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIToken', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | ID of tax to update
$tax = new \Swagger\Client\Model\Tax(); // \Swagger\Client\Model\Tax | Tax to add to the store

try {
    $result = $apiInstance->updateTaxById_0($id, $tax);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->updateTaxById_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of tax to update |
 **tax** | [**\Swagger\Client\Model\Tax**](../Model/Tax.md)| Tax to add to the store |

### Return type

[**\Swagger\Client\Model\InlineResponse2012**](../Model/InlineResponse2012.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

