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
use PHPUnit_Framework_TestCase;
use Swagger\Client\Api\CategoriesApi;
use Swagger\Client\Model\Category;
use Swagger\Client\Model\InlineResponse200;
use Swagger\Client\Model\InlineResponse2001;
use Swagger\Client\Model\InlineResponse2011;


/**
 * CategoriesApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CategoriesApiTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var Api\CategoriesApi
     */
    private $categoriesAPI;

    private $idCategory = 99;

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
        $category = new Category(
            [
                'active' => 1,
                'position'=> 1,
                'visibility'=> [
                    "facebook"
                ],
                'i18n' => [
                    [
                        'locale' => 'pt_PT',
                        'name'   => 'Category generated by integration test',
                    ]
                ]
            ]
        );

        $config = Configuration::getDefaultConfiguration()
            ->setApiKey('APIToken', '083e7be2ca947a899db97d00db4f512db6a85551');

        $this->categoriesAPI = new CategoriesApi(
            new Client(),
            $config
        );

        $response = $this->categoriesAPI->addCategories($category);

        $this->idCategory = $response->getData()[0]->getId();
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
        $category = new Category(
            [
                'active' => true,
                'position' => 1,
                'visibility' => [
                    'facebook'
                ],
                'i18n' => [
                    [
                        'locale' => 'pt_PT',
                        'name'   => 'Category generated by integration test',
                    ],
                    [
                        'locale' => 'en_US',
                        'name'   => 'Category generated by integration test',
                    ],
                    [
                        'locale' => 'es_ES',
                        'name'   => 'Category generated by integration test',
                    ]
                ]
            ],
            [
                'active' => true,
                'position' => 1,
                'visibility' => [
                    'facebook'
                ],
                'i18n' => [
                    [
                        'locale' => 'pt_PT',
                        'name'   => 'Category generated by integration test',
                    ]
                ]
            ],
            [
                'active' => true,
                'position' => 1,
                'visibility' => [
                    'mobile'
                ],
                'i18n' => [
                    [
                        'locale' => 'pt_PT',
                        'name'   => 'Category generated by integration test',
                    ]
                ]
            ]
        );

        $response = $this->categoriesAPI->addCategories($category);
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

        $category = new Category(
            [
                'active' => false
            ]
        );
        $category->setVisibility(['all']);

        $this->categoriesAPI->addCategories($category);
    }

    /**
     * Test case for addCategory
     *
     * .
     *
     */
    public function testAddMinimalCategoriesWithSuccess()
    {
        $category = new Category(
            [
                'i18n' => [
                    [
                        'locale' => 'pt_PT',
                        'name'   => 'Category generated by integration test',
                    ]
                ]
            ]
        );

        $response = $this->categoriesAPI->addCategories($category);

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
        $category->setVisibility(["facebook","mobile"]);

        $i18nUS = new Model\I18n();
        $i18nUS->setLocale('en_US');
        $i18nUS->setName('Category name here');
        $i18nUS->setDescription('Description of category here');
        $category->setI18n([
            new Model\I18n(
                [
                    'locale' => 'pt_PT',
                    'name'   => 'Category generated by integration test',
                    'description' => 'description'
                ]
            ),
            new Model\I18n(
                [
                    'locale' => 'es_ES',
                    'name'   => 'Category generated by integration test ES',
                    'description' => 'description ES'
                ]
            ),
            $i18nUS
        ])->setActive(true)->setPosition(1);

        $response = $this->categoriesAPI->addCategories($category);
        $this->assertInstanceOf(InlineResponse2011::class, $response);

    }

    /**
     * Test case for addCategory
     *
     * .
     *
     */
    public function testAddFullCategoriesWithImagesWithSuccess()
    {
//        $category = new Category();
//
//        $category->setVisibility([Model\Category::VISIBILITY_FACEBOOK, Model\Category::VISIBILITY_MOBILE]);
//
//        $i18nUS = new Model\I18n();
//        $i18nUS->setLocale('en_US');
//        $i18nUS->setName('Category name here');
//        $i18nUS->setDescription('Description of category here');
//        $category->setI18n([
//            new Model\I18n(
//                [
//                    'locale' => 'pt_PT',
//                    'name'   => 'Category generated by integration test',
//                    'description' => 'description'
//                ]
//            ),
//            new Model\I18n(
//                [
//                    'locale' => 'es_ES',
//                    'name'   => 'Category generated by integration test ES',
//                    'description' => 'description ES'
//                ]
//            ),
//            $i18nUS
//        ])->setActive(true);
//
//        $response = $this->categoriesAPI->addCategories($category);
//
//        $this->assertInstanceOf(InlineResponse201::class, $response);
//
//        /**
//         * @var $CategoryCreated Category
//         */
//        $categoryCreated = $response->getData()[0];
//
//        $this->assertInstanceOf(Category::class, $categoryCreated);
//
//        $this->assertTrue($categoryCreated->getActive());
//
//        $this->assertEquals(99, $categoryCreated->getPosition());
//
//        $this->assertCount(2, $categoryCreated->getVisibility());
//
//        $this->assertInstanceOf(I18n::class, $categoryCreated->getI18n()[0]);
//
//        $i18nPt = $categoryCreated->getI18n()[0];
//
//        $this->assertEquals('pt_PT', $i18nPt->getLocale());
//
//        $this->assertEquals('Category generated by integration test', $i18nPt->getName());
//
//        $this->assertEquals('description', $i18nPt->getDescription());
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

        $this->categoriesAPI->deleteCategoryById(-1);
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

        $this->categoriesAPI->deleteCategoryById($this->idCategory);

        $this->categoriesAPI->getCategoryById($this->idCategory);
    }

    /**
     * Test case for getCategories
     *
     * .
     *
     */
    public function testGetCategories()
    {
        $category = $this->categoriesAPI->getCategories();

        $this->assertInstanceOf( InlineResponse2001::class, $category);
    }

    /**
     * Test case for getCategoryById
     *
     *
     *
     */
    public function testGetCategoryById()
    {
        $response = $this->categoriesAPI->getCategoryById($this->idCategory);

        $this->assertInstanceOf(InlineResponse2011::class,$response);
    }

    /**
     * Test case for updateCategoryById
     *
     * .
     *
     */
    public function testUpdateCategoryByIdWithSuccess()
    {
//        $response = $this->categoriesAPI->getCategoryById($this->idCategory);
//
//        $category = $response->getData();
//        $category->setPosition(1);
//        $category->setActive(false);
//
//        $category = $this->categoriesAPI->updateCategoryById($category->getId(),$category);
//
//        $this->assertInstanceOf(InlineResponse2001::class, $category);
    }
}
