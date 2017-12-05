# Swagger\Client\ProductsAttributesApi

All URIs are relative to *https://api.facestore.pt/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addProductsAttributes**](ProductsAttributesApi.md#addProductsAttributes) | **POST** /attributes | 
[**deleteProductAttributeById**](ProductsAttributesApi.md#deleteProductAttributeById) | **DELETE** /attributes/{id}/ | 
[**getProductAttributeById**](ProductsAttributesApi.md#getProductAttributeById) | **GET** /attributes/{id}/ | 
[**getProductsAttributes**](ProductsAttributesApi.md#getProductsAttributes) | **GET** /attributes | 
[**updateProductAttributeById**](ProductsAttributesApi.md#updateProductAttributeById) | **PUT** /attributes/{id}/ | 


# **addProductsAttributes**
> \Swagger\Client\Model\Attribute[] addProductsAttributes($attribute)



Creates a new attribute of products in the store.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('APIToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIToken', 'Bearer');

$api_instance = new Swagger\Client\Api\ProductsAttributesApi();
$attribute = new \Swagger\Client\Model\Attribute(); // \Swagger\Client\Model\Attribute | Attribute to add to the store

try {
    $result = $api_instance->addProductsAttributes($attribute);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsAttributesApi->addProductsAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute** | [**\Swagger\Client\Model\Attribute**](../Model/Attribute.md)| Attribute to add to the store |

### Return type

[**\Swagger\Client\Model\Attribute[]**](../Model/Attribute.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProductAttributeById**
> deleteProductAttributeById($id)



deletes a single attribute of products based on the ID supplied

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('APIToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIToken', 'Bearer');

$api_instance = new Swagger\Client\Api\ProductsAttributesApi();
$id = 789; // int | ID of attribute to delete

try {
    $api_instance->deleteProductAttributeById($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsAttributesApi->deleteProductAttributeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of attribute to delete |

### Return type

void (empty response body)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductAttributeById**
> \Swagger\Client\Model\Attribute getProductAttributeById($id, $includes)



Returns a attribute of products based on a single ID  ### Includes You can give the following values on includes parameter: `options`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('APIToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIToken', 'Bearer');

$api_instance = new Swagger\Client\Api\ProductsAttributesApi();
$id = 789; // int | ID of attribute to fetch
$includes = array("includes_example"); // string[] | Include associated objects within response

try {
    $result = $api_instance->getProductAttributeById($id, $includes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsAttributesApi->getProductAttributeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of attribute to fetch |
 **includes** | [**string[]**](../Model/string.md)| Include associated objects within response | [optional]

### Return type

[**\Swagger\Client\Model\Attribute**](../Model/Attribute.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductsAttributes**
> \Swagger\Client\Model\Attribute[] getProductsAttributes($includes, $limit, $order_by)



Returns all attributes of products from the system that the user has access to  ### Includes You can give the following values on includes parameter: `options`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('APIToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIToken', 'Bearer');

$api_instance = new Swagger\Client\Api\ProductsAttributesApi();
$includes = array("includes_example"); // string[] | Include associated objects within response
$limit = 56; // int | max records to return
$order_by = array("order_by_example"); // string[] | Specify the field to be sorted, examples:  - `?order_by=id|desc` - `?order_by=updated_at|desc,position|asc`

try {
    $result = $api_instance->getProductsAttributes($includes, $limit, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsAttributesApi->getProductsAttributes: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\Attribute[]**](../Model/Attribute.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProductAttributeById**
> \Swagger\Client\Model\Attribute updateProductAttributeById($id, $product_attribute)



update a single attribute of products based on the ID supplied

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('APIToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIToken', 'Bearer');

$api_instance = new Swagger\Client\Api\ProductsAttributesApi();
$id = 789; // int | ID of attribute to update
$product_attribute = new \Swagger\Client\Model\Attribute(); // \Swagger\Client\Model\Attribute | Attribute to add to the store

try {
    $result = $api_instance->updateProductAttributeById($id, $product_attribute);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsAttributesApi->updateProductAttributeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of attribute to update |
 **product_attribute** | [**\Swagger\Client\Model\Attribute**](../Model/Attribute.md)| Attribute to add to the store |

### Return type

[**\Swagger\Client\Model\Attribute**](../Model/Attribute.md)

### Authorization

[APIKeyHeader](../../README.md#APIKeyHeader)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

