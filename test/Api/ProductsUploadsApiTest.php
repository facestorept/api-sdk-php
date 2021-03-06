<?php
/**
 * ProductsUploadsApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Facestore API
 *
 * This is a reference to Facestore API.  # Introduction This API is documented in **OpenAPI format** and provided by [facestore.pt](http://facestore.pt) team.  # About the API Through the Facestore API your applications can retrieve and manage Facestore platform content in your store. The base address of the API is `https://api.facestore.pt`. There are several endpoints at that address, each with its own unique path. All endpoints are private and you need the permissions to access them. To get an API Token you have to be client of Facestore and access your personal account to request it (see the next topic).  # Get API Token To consume the Facestore API is take the unique token to identify your requests. You can do that accessing the store manager admin and doing the following steps: 1. Go to ``configurations > API`` section. 2. Copy the unique token.  # Requests The API is based on REST principles: data resources are accessed via standard HTTPS requests in UTF-8 format to an API endpoint. Where possible, the API strives to use appropriate HTTP verbs for each action: | VERB     | DESCRIPTION                                            | | -------- |:-------------:                                         | | GET      | Used for retrieving resources.                         | | POST     | Used for creating resources.                           | | PUT      | Used for changing/replacing resources or collections.  | | PATCH    | Used for changing/replacing partial resources.         | | DELETE   | Used for deleting resources.                           |  # Responses Response Status Codes The API uses the following response status codes, as defined in the RFC 2616 and RFC 6585:  | STATUS CODE | DESCRIPTION                                                                                                                                                                                                                       | |:-----------:|:---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------:| | 200         | OK - The request has succeeded. The client can read the result of the request in the body and the headers of the response.                                                                                                        | | 201         | Created - The request has been fulfilled and resulted in a new resource being created.                                                                                                                                            | | 202         | Accepted - The request has been accepted for processing, but the processing has not been completed.                                                                                                                               | | 204         | No Content - The request has succeeded but returns no message body.                                                                                                                                                               | | 304         | Not Modified. See Conditional requests.                                                                                                                                                                                           | | 400         | Bad Request - The request could not be understood by the server due to malformed syntax. The message body will contain more information; see Error Details.                                                                       | | 401         | Unauthorized - The request requires user authentication or, if the request included authorization credentials, authorization has been refused for those credentials.                                                              | | 403         | Forbidden - The server understood the request, but is refusing to fulfill it.                                                                                                                                                     | | 404         | Not Found - The requested resource could not be found. This error can be due to a temporary or permanent condition.                                                                                                               | | 429         | Too Many Requests - Rate limiting has been applied.                                                                                                                                                                               | | 500         | Internal Server Error. You should never receive this error because our clever coders catch them all ... but if you are unlucky enough to get one, please report it to us through a comment at the bottom of this page.            | | 502         | Bad Gateway - The server was acting as a gateway or proxy and received an invalid response from the upstream server.                                                                                                              | | 503         | Service Unavailable - The server is currently unable to handle the request due to a temporary condition which will be alleviated after some delay. You can choose to resend the request again.                                    |  # Rate limiting To make the API fast for everybody, rate limits apply.  Rate limiting is applied on an application basis (based on client id), regardless of how many users are using it.  If you get status code 429, it means that you have sent too many requests. If this happens, have a look in the Retry-After header, where you will see a number displayed. This is the amount of seconds that you need to wait, before you can retry sending your requests.  You can check the returned HTTP headers of any API request to see your current rate limit status:  ``` curl -i https://api.facestore.pt/v1/sample HTTP/1.1 200 OK Date: Mon, 01 Dec 2016 17:27:06 GMT Status: 200 OK X-RateLimit-Limit: 60 X-RateLimit-Remaining: 56 X-RateLimit-Reset: 1372700873 ```  The headers tell you everything you need to know about your current rate limit status:  | HEADER NAME           | DESCRIPTION                                                                     | |:---------------------:|:-------------------------------------------------------------------------------:| | X-RateLimit-Limit   | The maximum number of requests that the consumer is permitted to make per hour. | | X-RateLimit-Remaining | The number of requests remaining in the current rate limit window.              | | X-RateLimit-Reset   | The time at which the current rate limit window resets in UTC epoch seconds.    |  # Timestamps Timestamps are returned in ISO 8601 format as Coordinated Universal Time (UTC) with zero offset: YYYY-MM-DDTHH:MM:SSZ. If the time is imprecise (for example, the date/time of an product is created), an additional field will show the precision; see for example, created_at in an product object.  # Error Details The API uses the following format to describe unsuccessful responses, return information about the error as an error JSON object containing the following information::  | KEY         | VALUE TYPE   | VALUE DESCRIPTION | |:-----------:|:------------:|:-----------------:| | status_code | integer    | The HTTP status code (also returned in the response header; see Response Status Codes for more information). | | message     | string     | A short description of the cause of the error. |
 *
 * OpenAPI spec version: 0.1.4
 * Contact: apihelp@facestore.pt
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Client;

use GuzzleHttp\Client;
use Swagger\Client\Api\ProductsApi;
use Swagger\Client\Api\ProductsUploadsApi;
use Swagger\Client\Model\InlineResponse20012;
use Swagger\Client\Model\InlineResponse20013;
use Swagger\Client\Model\InlineResponse2009;
use Swagger\Client\Model\InlineResponse2015;
use Swagger\Client\Model\Product;

/**
 * ProductsUploadsApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductsUploadsApiTest extends \PHPUnit_Framework_TestCase
{
    private static $config;
    /**
     * @var Api\ProductsApi
     */
    private static $resourceAPI;
    private static $productUpload;
    private static $productUploadId;

    private static $resourceId = 99;

    private static $resourceIdBrands = 29;
    private static $resourceIdCategory = 1;

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
        $productSku = 'Sku1248wwqndq2';

        $product = new Product();
        $product->setSku($productSku);
        $product->setManual('Foobar Manual');
        $product->setUrlVideo('https://www.youtube.com/watch?v=VJPrV0K8RPg');
        $product->setVisibility([Product::VISIBILITY_MOBILE]);
        $product->setInHomepage(true);
        $product->setIsPrefered(true);
        $product->setIsDigital(true);
        $product->setIsNew(true);
        $product->setActive(true);
        $product->setBrand(self::$resourceIdBrands);
        $product->setPosition(555);
        $product->setIdTaxesGroup(1);

        $prices = new Model\ProductPrices();
        $prices->setPrice(20);

        $productCategories = new Model\ProductCategories();
        $productCategories->setPosition(1);
        $productCategories->setId(self::$resourceIdCategory);

        $i18n = new Model\I18nProduct();
        $i18n->setLocale('pt_PT');
        $i18n->setCharacteristics('Foobar Characteristics');
        $i18n->setDescription('Foobar Description');
        $i18n->setName('Foobar name');
        $i18n->setSynopsis('Foobar synopsis');

//        $seo=new Model\I18nProductSeo();
//        $seo->setTitle('Foobar title');
//        $seo->setKeywords('Foobar keywords');
//        $seo->setDescription('Foobar Description');
//
//        $i18n->setSeo($seo);

        $product->setPrices($prices);
        $product->setCategories([$productCategories]);
        $product->setI18n([$i18n]);

        self::$config = Configuration::getDefaultConfiguration()
            ->setApiKey('APIToken', '083e7be2ca947a899db97d00db4f512db6a85551');

        self::$resourceAPI = new ProductsApi(
            new Client(),
            self::$config
        );

        $response = self::$resourceAPI->addProduct($product);

        self::$resourceId = $response->getData()[0]->getId();
    }

    /**
     * Test case for uploadProductsImages
     *
     * Upload de images for product.
     *
     */
    public function testUploadProductsImages()
    {
        self::$productUpload = new ProductsUploadsApi(
            new Client(),
            self::$config
        );

        $image = self::$productUpload->uploadProductsImages(self::$resourceId, __DIR__ . '/image.jpg');

        self::$productUploadId = $image->getData()[0]->getId();

        $this->assertInstanceOf(InlineResponse20012::class, $image);
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for getProductImages
     *
     * Get images for product.
     *
     */
    public function testGetProductImages()
    {
        self::$productUpload = new ProductsUploadsApi(
            new Client(),
            self::$config
        );

        $image = self::$productUpload->getProductImages(self::$resourceId);

        $this->assertInstanceOf(InlineResponse20012::class, $image);
    }

    /**
     * Test case for getProductImagesById
     *
     * Get images for product.
     *
     */
    public function testGetProductImagesById()
    {
        self::$productUpload = new ProductsUploadsApi(
            new Client(),
            self::$config
        );

        $image = self::$productUpload->getProductImagesById(self::$resourceId, self::$productUploadId);

        $this->assertInstanceOf(InlineResponse20012::class, $image);
    }

    /**
     * createDataProductForTest
     *
     * .
     *
     */
    public function createDataProductForTest(): Product
    {
        $productSku = 'Sku1248wwqndq2';

        $product = new Product();
        $product->setSku($productSku);
        $product->setManual('Foobar Manual');
        $product->setUrlVideo('https://www.youtube.com/watch?v=VJPrV0K8RPg');
        $product->setVisibility([Product::VISIBILITY_MOBILE]);
        $product->setInHomepage(true);
        $product->setIsPrefered(true);
        $product->setIsDigital(true);
        $product->setIsNew(true);
        $product->setActive(false);
        $product->setBrand(self::$resourceIdBrands);
        $product->setPosition(666);
        $product->setIdTaxesGroup(1);

        $prices = new Model\ProductPrices();
        $prices->setPrice(20);

        $pricesVariants = new Model\ProductPrices();
        $pricesVariants->setPrice(20);

        $productCategories = new Model\ProductCategories();
        $productCategories->setPosition(1);
        $productCategories->setId(self::$resourceIdCategory);


        $i18n = new Model\I18nProduct();
        $i18n->setLocale('pt_PT');
        $i18n->setCharacteristics('Foobar Characteristics');
        $i18n->setDescription('Foobar Description');
        $i18n->setName('Foobar name');
        $i18n->setSynopsis('Foobar synopsis');

//        $seo=new Model\I18nProductSeo();
//        $seo->setTitle('Foobar title');
//        $seo->setKeywords('Foobar keywords');
//        $seo->setDescription('Foobar Description');
//
//        $i18n->setSeo($seo);

        $product->setPrices($prices);
        $product->setI18n([$i18n]);
        $product->setCategories([$productCategories]);

        return $product;
    }

    /**
     * Test case for deleteProductImageById
     *
     * Delete image for products.
     *
     */
    public function testDeleteProductImageById()
    {
        $this->setExpectedException(ApiException::class, null,404);

        self::$productUpload->deleteProductImageById(self::$resourceId, self::$productUploadId);

        self::$productUpload->getProductImagesById(self::$resourceId, self::$productUploadId);
    }

    /**
     * Test case for DeleteImagesNotAssociatedToProduct
     *
     * .
     *
     */
    public function testDeleteImagesNotAssociatedToProduct()
    {
        $this->setExpectedException(ApiException::class, null, 404);

        $product = $this->createDataProductForTest();
        $resourceAPI = new ProductsApi(
            new Client(),
            self::$config
        );

        $responseProduct = $resourceAPI->addProduct($product);

        self::$resourceId = $responseProduct->getData()[0]->getId();

        self::$productUpload = new ProductsUploadsApi(
            new Client(),
            self::$config
        );

        $responseUpload = $resourceAPI->addProduct($product);

        self::$productUpload->deleteProductImageById($responseUpload->getData()[0]->getId(), 1);
    }

}
