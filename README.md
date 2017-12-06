# SwaggerClient-php
This is a reference to Facestore API.  # Introduction This API is documented in **OpenAPI format** and provided by [facestore.pt](http://facestore.pt) team.  # About the API Through the Facestore API your applications can retrieve and manage Facestore platform content in your store. The base address of the API is `https://api.facestore.pt`. There are several endpoints at that address, each with its own unique path. All endpoints are private and you need the permissions to access them. To get an API Token you have to be client of Facestore and access your personal account to request it (see the next topic).  # Get API Token To consume the Facestore API is take the unique token to identify your requests. You can do that accessing the store manager admin and doing the following steps: 1. Go to ``configurations > API`` section. 2. Copy the unique token.  # Requests The API is based on REST principles: data resources are accessed via standard HTTPS requests in UTF-8 format to an API endpoint. Where possible, the API strives to use appropriate HTTP verbs for each action: | VERB     | DESCRIPTION                                            | | -------- |:-------------:                                         | | GET      | Used for retrieving resources.                         | | POST     | Used for creating resources.                           | | PUT      | Used for changing/replacing resources or collections.  | | PATCH    | Used for changing/replacing partial resources.         | | DELETE   | Used for deleting resources.                           |  # Responses Response Status Codes The API uses the following response status codes, as defined in the RFC 2616 and RFC 6585:  | STATUS CODE | DESCRIPTION                                                                                                                                                                                                                       | |:-----------:|:---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------:| | 200         | OK - The request has succeeded. The client can read the result of the request in the body and the headers of the response.                                                                                                        | | 201         | Created - The request has been fulfilled and resulted in a new resource being created.                                                                                                                                            | | 202         | Accepted - The request has been accepted for processing, but the processing has not been completed.                                                                                                                               | | 204         | No Content - The request has succeeded but returns no message body.                                                                                                                                                               | | 304         | Not Modified. See Conditional requests.                                                                                                                                                                                           | | 400         | Bad Request - The request could not be understood by the server due to malformed syntax. The message body will contain more information; see Error Details.                                                                       | | 401         | Unauthorized - The request requires user authentication or, if the request included authorization credentials, authorization has been refused for those credentials.                                                              | | 403         | Forbidden - The server understood the request, but is refusing to fulfill it.                                                                                                                                                     | | 404         | Not Found - The requested resource could not be found. This error can be due to a temporary or permanent condition.                                                                                                               | | 429         | Too Many Requests - Rate limiting has been applied.                                                                                                                                                                               | | 500         | Internal Server Error. You should never receive this error because our clever coders catch them all ... but if you are unlucky enough to get one, please report it to us through a comment at the bottom of this page.            | | 502         | Bad Gateway - The server was acting as a gateway or proxy and received an invalid response from the upstream server.                                                                                                              | | 503         | Service Unavailable - The server is currently unable to handle the request due to a temporary condition which will be alleviated after some delay. You can choose to resend the request again.                                    |  # Rate limiting To make the API fast for everybody, rate limits apply.  Rate limiting is applied on an application basis (based on client id), regardless of how many users are using it.  If you get status code 429, it means that you have sent too many requests. If this happens, have a look in the Retry-After header, where you will see a number displayed. This is the amount of seconds that you need to wait, before you can retry sending your requests.  You can check the returned HTTP headers of any API request to see your current rate limit status:  ``` curl -i https://api.facestore.pt/v1/sample HTTP/1.1 200 OK Date: Mon, 01 Dec 2016 17:27:06 GMT Status: 200 OK X-RateLimit-Limit: 60 X-RateLimit-Remaining: 56 X-RateLimit-Reset: 1372700873 ```  The headers tell you everything you need to know about your current rate limit status:  | HEADER NAME           | DESCRIPTION                                                                     | |:---------------------:|:-------------------------------------------------------------------------------:| | X-RateLimit-Limit   | The maximum number of requests that the consumer is permitted to make per hour. | | X-RateLimit-Remaining | The number of requests remaining in the current rate limit window.              | | X-RateLimit-Reset   | The time at which the current rate limit window resets in UTC epoch seconds.    |  # Timestamps Timestamps are returned in ISO 8601 format as Coordinated Universal Time (UTC) with zero offset: YYYY-MM-DDTHH:MM:SSZ. If the time is imprecise (for example, the date/time of an product is created), an additional field will show the precision; see for example, created_at in an product object.  # Error Details The API uses the following format to describe unsuccessful responses, return information about the error as an error JSON object containing the following information::  | KEY         | VALUE TYPE   | VALUE DESCRIPTION | |:-----------:|:------------:|:-----------------:| | status_code | integer    | The HTTP status code (also returned in the response header; see Response Status Codes for more information). | | message     | string     | A short description of the cause of the error. |

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 0.1.4
- Build package: io.swagger.codegen.languages.PhpClientCodegen
For more information, please visit [http://facestore.pt](http://facestore.pt)

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
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
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: APIKeyHeader
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('APIToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('APIToken', 'Bearer');

$apiInstance = new Swagger\Client\Api\BrandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$brand = new \Swagger\Client\Model\Brand(); // \Swagger\Client\Model\Brand | Brand to add to the store

try {
    $result = $apiInstance->addBrands($brand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandsApi->addBrands: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.facestore.pt/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BrandsApi* | [**addBrands**](docs/Api/BrandsApi.md#addbrands) | **POST** /brands | 
*BrandsApi* | [**deleteBrandById**](docs/Api/BrandsApi.md#deletebrandbyid) | **DELETE** /brands/{id}/ | 
*BrandsApi* | [**getBrandById**](docs/Api/BrandsApi.md#getbrandbyid) | **GET** /brands/{id}/ | 
*BrandsApi* | [**getBrands**](docs/Api/BrandsApi.md#getbrands) | **GET** /brands | 
*BrandsApi* | [**updateBrandsById**](docs/Api/BrandsApi.md#updatebrandsbyid) | **PUT** /brands/{id}/ | 
*CategoriesApi* | [**addCategories**](docs/Api/CategoriesApi.md#addcategories) | **POST** /categories | 
*CategoriesApi* | [**deleteCategoryById**](docs/Api/CategoriesApi.md#deletecategorybyid) | **DELETE** /categories/{id}/ | 
*CategoriesApi* | [**getCategories**](docs/Api/CategoriesApi.md#getcategories) | **GET** /categories | 
*CategoriesApi* | [**getCategoryById**](docs/Api/CategoriesApi.md#getcategorybyid) | **GET** /categories/{id}/ | 
*CategoriesApi* | [**updateCategoryById**](docs/Api/CategoriesApi.md#updatecategorybyid) | **PUT** /categories/{id}/ | 
*CustomersApi* | [**getCustomerById**](docs/Api/CustomersApi.md#getcustomerbyid) | **GET** /customers/{id}/ | 
*CustomersApi* | [**getCustomers**](docs/Api/CustomersApi.md#getcustomers) | **GET** /customers | 
*DefaultApi* | [**uploadImages**](docs/Api/DefaultApi.md#uploadimages) | **POST** /brands/{id}/uploads/ | Upload de images for brand
*OrdersApi* | [**getOrderById**](docs/Api/OrdersApi.md#getorderbyid) | **GET** /orders/{id}/ | 
*OrdersApi* | [**getOrders**](docs/Api/OrdersApi.md#getorders) | **GET** /orders | 
*PaymentsApi* | [**getPaymentById**](docs/Api/PaymentsApi.md#getpaymentbyid) | **GET** /payments/{id}/ | 
*PaymentsApi* | [**getPayments**](docs/Api/PaymentsApi.md#getpayments) | **GET** /payments | 
*ProductsApi* | [**addProduct**](docs/Api/ProductsApi.md#addproduct) | **POST** /products | 
*ProductsApi* | [**deleteProductById**](docs/Api/ProductsApi.md#deleteproductbyid) | **DELETE** /products/{id}/ | 
*ProductsApi* | [**getProductById**](docs/Api/ProductsApi.md#getproductbyid) | **GET** /products/{id}/ | 
*ProductsApi* | [**getProducts**](docs/Api/ProductsApi.md#getproducts) | **GET** /products | 
*ProductsApi* | [**updateProductById**](docs/Api/ProductsApi.md#updateproductbyid) | **PUT** /products/{id}/ | 
*ProductsApi* | [**updateProductById_0**](docs/Api/ProductsApi.md#updateproductbyid_0) | **PATCH** /products/{id}/ | 
*ProductsAttributesApi* | [**addProductsAttributes**](docs/Api/ProductsAttributesApi.md#addproductsattributes) | **POST** /attributes | 
*ProductsAttributesApi* | [**deleteProductAttributeById**](docs/Api/ProductsAttributesApi.md#deleteproductattributebyid) | **DELETE** /attributes/{id}/ | 
*ProductsAttributesApi* | [**getProductAttributeById**](docs/Api/ProductsAttributesApi.md#getproductattributebyid) | **GET** /attributes/{id}/ | 
*ProductsAttributesApi* | [**getProductsAttributes**](docs/Api/ProductsAttributesApi.md#getproductsattributes) | **GET** /attributes | 
*ProductsAttributesApi* | [**updateProductAttributeById**](docs/Api/ProductsAttributesApi.md#updateproductattributebyid) | **PUT** /attributes/{id}/ | 
*ShippingsApi* | [**addShipping**](docs/Api/ShippingsApi.md#addshipping) | **POST** /shippings | 
*ShippingsApi* | [**deleteShippingById**](docs/Api/ShippingsApi.md#deleteshippingbyid) | **DELETE** /shippings/{id}/ | 
*ShippingsApi* | [**getShippingById**](docs/Api/ShippingsApi.md#getshippingbyid) | **GET** /shippings/{id}/ | 
*ShippingsApi* | [**getShippings**](docs/Api/ShippingsApi.md#getshippings) | **GET** /shippings | 
*ShippingsApi* | [**updateShippingById**](docs/Api/ShippingsApi.md#updateshippingbyid) | **PUT** /shippings/{id}/ | 
*TaxesApi* | [**addTaxes**](docs/Api/TaxesApi.md#addtaxes) | **POST** /taxes | 
*TaxesApi* | [**deleteTaxById**](docs/Api/TaxesApi.md#deletetaxbyid) | **DELETE** /taxes/{id}/ | 
*TaxesApi* | [**getTaxById**](docs/Api/TaxesApi.md#gettaxbyid) | **GET** /taxes/{id}/ | 
*TaxesApi* | [**getTaxes**](docs/Api/TaxesApi.md#gettaxes) | **GET** /taxes | 
*TaxesApi* | [**updateTaxById**](docs/Api/TaxesApi.md#updatetaxbyid) | **PUT** /taxes/{id}/ | 


## Documentation For Models

 - [Attribute](docs/Model/Attribute.md)
 - [AttributeOptions](docs/Model/AttributeOptions.md)
 - [Brand](docs/Model/Brand.md)
 - [Category](docs/Model/Category.md)
 - [Customer](docs/Model/Customer.md)
 - [DefaultResponse](docs/Model/DefaultResponse.md)
 - [I18n](docs/Model/I18n.md)
 - [I18nProduct](docs/Model/I18nProduct.md)
 - [I18nProductSeo](docs/Model/I18nProductSeo.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse2001Meta](docs/Model/InlineResponse2001Meta.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse201](docs/Model/InlineResponse201.md)
 - [InlineResponse2011](docs/Model/InlineResponse2011.md)
 - [InlineResponse2012](docs/Model/InlineResponse2012.md)
 - [InlineResponse2013](docs/Model/InlineResponse2013.md)
 - [InlineResponse2014](docs/Model/InlineResponse2014.md)
 - [InlineResponse422](docs/Model/InlineResponse422.md)
 - [InlineResponse422Message](docs/Model/InlineResponse422Message.md)
 - [InlineResponse422MessageErrors](docs/Model/InlineResponse422MessageErrors.md)
 - [MetaPartialResponse](docs/Model/MetaPartialResponse.md)
 - [NotFoundResponse](docs/Model/NotFoundResponse.md)
 - [Options](docs/Model/Options.md)
 - [Order](docs/Model/Order.md)
 - [Payment](docs/Model/Payment.md)
 - [Product](docs/Model/Product.md)
 - [Shipping](docs/Model/Shipping.md)
 - [Tax](docs/Model/Tax.md)


## Documentation For Authorization


## APIKeyHeader

- **Type**: API key
- **API key parameter name**: APIToken
- **Location**: HTTP header


## Author

apihelp@facestore.pt


