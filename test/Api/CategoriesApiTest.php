<?php
/**
 * CategoriesApiTest
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
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Client;

use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;
use PHPUnit_Framework_TestCase;
use SplFileObject;
use Swagger\Client\Api\CategoriesApi;
use Swagger\Client\Api\DefaultApi;
use Swagger\Client\Api\ProductsApi;
use Swagger\Client\Model\Category;
use Swagger\Client\Model\I18n;
use Swagger\Client\Model\InlineResponse200;
use Swagger\Client\Model\InlineResponse2001;
use Swagger\Client\Model\InlineResponse2011;
use Swagger\Client\Model\InlineResponse2014;
use Swagger\Client\Model\Product;


/**
 * CategoriesApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CategoriesApiTest extends \PHPUnit_Framework_TestCase
{

    private $config;
    /**
     * @var Api\CategoriesApi
     */
    private $resourceAPI;

    private $resourceId = 99;

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
        $category = new Category();
        $category->setActive(true);
        $category->setPosition(1);
        $category->setVisibility([Model\Brand::VISIBILITY_FACEBOOK]);

        $i18n = new Model\I18n();
        $i18n->setName('Foobar name');
        $i18n->setLocale('pt_PT');
        $i18n->setDescription('Foobar description');

        $category->setI18n([$i18n]);

        $this->config = Configuration::getDefaultConfiguration()
            ->setApiKey('APIToken', '083e7be2ca947a899db97d00db4f512db6a85551');

        $this->resourceAPI = new CategoriesApi(
            new Client(),
            $this->config
        );

        $response = $this->resourceAPI->addCategories($category);

        $this->resourceId = $response->getData()[0]->getId();
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
     * Test case for addCategories
     *
     * .
     *
     */
    public function testAddCategories()
    {
        $category = new Category();
        $category->setActive(true);
        $category->setPosition(1);
        $category->setVisibility([Model\Brand::VISIBILITY_FACEBOOK]);

        $i18n = new Model\I18n();
        $i18n->setName('Foobar name');
        $i18n->setLocale('pt_PT');
        $i18n->setDescription('Foobar description');

        $category->setI18n([$i18n]);

        $response = $this->resourceAPI->addCategories($category);
        $this->assertInstanceOf(InlineResponse2011::class, $response);
    }

    /**
     * Test case for addCategories
     *
     * .
     *
     */
    public function testAddCategoriesWithError()
    {
        $this->setExpectedException(ApiException::class, null,422);

        $category = new Category();
        $category->setVisibility(['all']);

        $i18nPT = new Model\I18n();
        $i18nPT->setName('Foobar name');
        $i18nPT->setLocale('pt_PT');
        $i18nPT->setDescription('Foobar description');

        $i18nPT2 = new Model\I18n();
        $i18nPT2->setName('Foobar name');
        $i18nPT2->setLocale('pt_PT');
        $i18nPT2->setDescription('Foobar description');

        $category->setI18n([$i18nPT,$i18nPT2]);

        $this->resourceAPI->addCategories($category);
    }

    /**
     * Test case for addCategories
     *
     * .
     *
     */
    public function testAddCategoriesWithoutI18n()
    {
        $this->setExpectedException(ApiException::class, null,422);

        $category = new Category();
        $category->setActive(true);
        $category->setPosition(1);
        $category->setVisibility([Model\Brand::VISIBILITY_FACEBOOK]);

        $this->resourceAPI->addCategories($category);
    }

    /**
     * Test case for addCategory
     *
     * .
     *
     */
    public function testAddMinimalCategoriesWithSuccess()
    {
        $category = new Category();

        $i18n = new Model\I18n();
        $i18n->setName('Foobar name');
        $i18n->setLocale('pt_PT');
        $i18n->setDescription('Foobar description');

        $category->setI18n([$i18n]);

        $response = $this->resourceAPI->addCategories($category);

        $this->assertInstanceOf(InlineResponse2011::class, $response);
    }

    /**
     * Test case for addCategories
     *
     * .
     *
     */
    public function testAddFullCategoriesWithSuccess()
    {
        $category = new Category();
        $category->setVisibility([Model\Brand::VISIBILITY_FACEBOOK,Model\Brand::VISIBILITY_MOBILE]);
        $category->setPosition(1);
        $category->setActive(true);

        $i18nUS = new Model\I18n();
        $i18nUS->setLocale('en_US');
        $i18nUS->setName('Category name here');
        $i18nUS->setDescription('Description of category here');

        $i18nPT = new Model\I18n();
        $i18nPT->setName('Foobar name');
        $i18nPT->setLocale('pt_PT');
        $i18nPT->setDescription('Foobar description');

        $category->setI18n([$i18nUS,$i18nPT]);

        $response = $this->resourceAPI->addCategories($category);

        $this->assertInstanceOf(InlineResponse2011::class, $response);

    }

    /**
     * Test case for addCategories
     *
     * .
     *
     */
    public function testAddFullCategoriesWithImagesWithSuccess()
    {
        $category = new Category();
        $category->setVisibility([Category::VISIBILITY_FACEBOOK, Category::VISIBILITY_MOBILE]);
        $category->setPosition(99);
        $category->setActive(true);

        $i18nUS = new I18n();
        $i18nUS->setLocale('en_US');
        $i18nUS->setName('Category name here');
        $i18nUS->setDescription('Description of category here');

        $category->setI18n([$i18nUS]);

        $response = $this->resourceAPI->addCategories($category);
        $this->assertInstanceOf(InlineResponse2011::class, $response);
        /**
         * @var $categoryCreated Category
         */
        $categoryCreated = $response->getData()[0];
        $this->assertInstanceOf(Category::class, $categoryCreated);
        $this->assertTrue($categoryCreated->getActive());
        $this->assertEquals(99, $categoryCreated->getPosition());
        $this->assertCount(2, $categoryCreated->getVisibility());
        $this->assertInstanceOf(I18n::class, $categoryCreated->getI18n()[0]);
        $i18nPt = $categoryCreated->getI18n()[0];
        $this->assertEquals('pt_PT', $i18nPt->getLocale());
        $this->assertEquals('Category generated by integration test', $i18nPt->getName());
        $this->assertEquals('description', $i18nPt->getDescription());
    }

    /**
     * Test case for deleteCategoryById
     *
     * .
     *
     */
    public function testDeleteCategoryByIdWithResourceNotFound()
    {
        $this->setExpectedException(ApiException::class, null, 404);

        $this->resourceAPI->deleteCategoryById(-1);
    }

    /**
     * Test case for deleteCategoryById
     *
     *
     *
     */
    public function testDeleteCategoryByIdSuccess()
    {
        $this->setExpectedException(ApiException::class, null,404);

        $this->resourceAPI->deleteCategoryById($this->resourceId);

        $this->resourceAPI->getCategoryById($this->resourceId);
    }

    /**
     * Test case for getCategories
     *
     *
     *
     */
    public function testGetCategories()
    {
        $category = $this->resourceAPI->getCategories();

        $this->assertInstanceOf(InlineResponse2001::class, $category);
    }

    /**
     * Test case for getCategoryById
     *
     *
     *
     */
    public function testGetCategoryById()
    {
        $response = $this->resourceAPI->getCategoryById($this->resourceId);

        $this->assertInstanceOf(InlineResponse2011::class,$response);
    }

    /**
     * Test case for AddParentsOfCategoryWithSuccess
     *
     *
     *
     */
    public function testAddParentsOfCategoryWithSuccess()
    {
        $categoriesCreatedArray = $this->createCategoriesDataForTest();

        $lastValueArray = end($categoriesCreatedArray);
        $firstValueArray = $categoriesCreatedArray[0];

        $this->assertInstanceOf(InlineResponse2011::class, $lastValueArray);

        $this->resourceAPI->deleteCategoryById($firstValueArray->getData()[0]->getId());
    }

    /**
     * Test case for AddParentsOfCategoryWithError
     *
     *
     *
     */
    public function testAddParentsOfCategoryWithError()
    {
        $this->setExpectedException(ApiException::class, null,423);

        $this->testAddParentsOfCategoryWithSuccess();

        $categoriesCreatedArray = $this->createCategoriesDataForTest();

        $lastValueArray = end($categoriesCreatedArray);

        $category4 = new Category();
        $category4->setPosition(4);
        $category4->setActive(true);
        $category4->setVisibility([Model\Brand::VISIBILITY_FACEBOOK]);
        $category4->setIdParent($lastValueArray->getData()[0]->getId());

        $i18n4  = new Model\I18n();
        $i18n4->setDescription('Foobar description');
        $i18n4->setLocale('pt_PT');
        $i18n4->setName('Foobar name');

        $category4->setI18n([$i18n4]);

        $createCategory4 = $this->resourceAPI->addCategories($category4);

        $this->assertInstanceOf(InlineResponse2011::class,$createCategory4);

        $this->resourceAPI->deleteCategoryById($this->resourceId);
    }

    /**
     * Test case for DeleteParentsOfCategoryWithProducts
     *
     *
     *
     */
    public function testDeleteParentsOfCategoryWithProductsWithError()
    {
            $this->setExpectedException(ApiException::class, null,423);

            $categoriesCreatedArray = $this->createCategoriesDataForTest();

            $lastValueArray = end($categoriesCreatedArray);
            $firstValueArray = $categoriesCreatedArray[0];

            $product = $this->createProductDataForTest($lastValueArray);

            $resourceProductAPI = new ProductsApi(
                new Client(),
                $this->config
            );
            $response = $resourceProductAPI->addProduct($product);

            $this->assertInstanceOf(InlineResponse2014::class,$response);

            $this->resourceAPI->deleteCategoryById($firstValueArray->getData()[0]->getId());

            $this->cleanUpDataAfterDeleteCategoryTest($resourceProductAPI, $response, $firstValueArray);
    }

    /**
     * Test case for DeleteParentsOfCategoryWithoutProducts
     *
     *
     *
     */
    public function testDeleteParentsOfCategoryWithoutProducts()
    {
        $categoriesCreatedArray = $this->createCategoriesDataForTest();

        $firstValueArray = $categoriesCreatedArray[0];

        $this->resourceAPI->deleteCategoryById($firstValueArray->getData()[0]->getId());
    }

    /**
     * Test case for GetCategoriesWithIncludesNested
     *
     *
     *
     */
    public function testGetCategoriesWithIncludesNested()
    {
        $includes = ["children"];

        $categories = $this->resourceAPI->getCategoryById($this->resourceId, $includes);

        $this->assertInstanceOf(InlineResponse2011::class,$categories);
    }



    /**
     * Test case for updateCategoryById
     *
     * .
     *
     */
    public function testUpdateCategoryByIdWithSuccess()
    {
        $category = new Category();
        $category->setVisibility([Category::VISIBILITY_FACEBOOK, Category::VISIBILITY_MOBILE]);
        $category->setPosition(555);
        $category->setActive(false);

        $i18nUS = new I18n();
        $i18nUS->setLocale('en_US');
        $i18nUS->setName('Category name here');
        $i18nUS->setDescription('Description of category here');

        $category->setI18n([$i18nUS]);

        $this->resourceAPI->updateCategoryById($this->resourceId, $category);

        $categoryResponse = $this->resourceAPI->getCategoryById($this->resourceId);
        $category = $categoryResponse->getData()[0];
        $this->assertEquals(555, $category->getPosition());
        $this->assertEquals(false, $category->getActive());
    }

    /**
     * Test case for UploadImagesBrand
     *
     * .
     *
     */
    public function testUploadImagesBrand()
    {
        $this->resourceAPI->uploadImages(
            $this->resourceId,
            __DIR__ . '/image.jpg',
            __DIR__ . '/image.jpg'
        );

        $categoryResponse = $this->resourceAPI->getCategoryById($this->resourceId);
        
        $imageSmall = $categoryResponse->getData()[0]->getImageSmall();

        $this->assertNotEmpty($imageSmall);
    }

    /**
     * @return array
     */
    public function createCategoriesDataForTest(): array
    {
        $category1 = new Category();
        $category1->setPosition(1);
        $category1->setActive(true);
        $category1->setVisibility([Category::VISIBILITY_FACEBOOK]);
        $category1->setIdParent(null);

        $i18n1 = new Model\I18n();
        $i18n1->setDescription('Foobar description');
        $i18n1->setLocale('pt_PT');
        $i18n1->setName('Foobar name');

        $category1->setI18n([$i18n1]);

        $createCategory1 = $this->resourceAPI->addCategories($category1);

        $category2 = new Category();
        $category2->setPosition(2);
        $category2->setActive(true);
        $category2->setVisibility([Category::VISIBILITY_FACEBOOK,Category::VISIBILITY_MOBILE]);
        $category2->setIdParent($createCategory1->getData()[0]->getId());
        $category2->setI18n([$i18n1]);

        $createCategory2 = $this->resourceAPI->addCategories($category2);

        $category3 = new Category();
        $category3->setPosition(3);
        $category3->setActive(true);
        $category3->setVisibility([Category::VISIBILITY_MOBILE]);
        $category3->setIdParent($createCategory2->getData()[0]->getId());
        $category3->setI18n([$i18n1]);

        $createCategory3 = $this->resourceAPI->addCategories($category3);

        $categoriesCreated = array($createCategory1, $createCategory2, $createCategory3);

        return $categoriesCreated;
    }

    /**
     * @param $lastValueArray
     * @return Product
     */
        public function createProductDataForTest($lastValueArray): Product
    {
        $product = new Product();
        $product->setSku('Foobar Sku128');
        $product->setManual('Foobar Manual');
        $product->setUrlVideo('https://www.youtube.com/watch?v=VJPrV0K8RPg');
        $product->setVisibility([Category::VISIBILITY_MOBILE]);
        $product->setInHomepage(true);
        $product->setIsPrefered(true);
        $product->setIsDigital(true);
        $product->setIsNew(true);
        $product->setActive(true);
        $product->setBrand(50);
        $product->setPosition(555);
        $product->setIdTaxesGroup(2);

        $productCategories = new Model\ProductCategories();
        $productCategories->setPosition(1);
        $productCategories->setId($lastValueArray->getData()[0]->getId());


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
        $product->setI18n([$i18n]);
        $product->setCategories([$productCategories]);

        return $product;
    }

    /**
     * @param $resourceProductAPI
     * @param $response
     * @param $firstValueArray
     */
    public function cleanUpDataAfterDeleteCategoryTest($resourceProductAPI, $response, $firstValueArray): void
    {
//        var_dump("ff");exit;
        $resourceProductAPI->deleteProductById($response->getData()[0]->getId());
        $this->resourceAPI->deleteCategoryById($firstValueArray->getData()[0]->getId());
    }
}
