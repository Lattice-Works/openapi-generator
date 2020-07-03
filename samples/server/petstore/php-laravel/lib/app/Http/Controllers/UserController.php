<?php

/**
 * OpenAPI Petstore
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 * PHP version 7.2.5
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 *
 * NOTE: This class is auto generated by OpenAPI-Generator
 * https://openapi-generator.tech
 * Do not edit the class manually.
 *
 * Source files are located at:
 *
 * > https://github.com/OpenAPITools/openapi-generator/blob/master/modules/openapi-generator/src/main/resources/php-laravel/
 */


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class UserController extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Operation createUser
     *
     * Create user.
     *
     *
     * @return Http response
     */
    public function createUser()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['user'])) {
            throw new \InvalidArgumentException('Missing the required parameter $user when calling createUser');
        }
        $user = $input['user'];


        return response('How about implementing createUser as a post method ?');
    }
    /**
     * Operation createUsersWithArrayInput
     *
     * Creates list of users with given input array.
     *
     *
     * @return Http response
     */
    public function createUsersWithArrayInput()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['user'])) {
            throw new \InvalidArgumentException('Missing the required parameter $user when calling createUsersWithArrayInput');
        }
        $user = $input['user'];


        return response('How about implementing createUsersWithArrayInput as a post method ?');
    }
    /**
     * Operation createUsersWithListInput
     *
     * Creates list of users with given input array.
     *
     *
     * @return Http response
     */
    public function createUsersWithListInput()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['user'])) {
            throw new \InvalidArgumentException('Missing the required parameter $user when calling createUsersWithListInput');
        }
        $user = $input['user'];


        return response('How about implementing createUsersWithListInput as a post method ?');
    }
    /**
     * Operation loginUser
     *
     * Logs user into the system.
     *
     *
     * @return Http response
     */
    public function loginUser()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['username'])) {
            throw new \InvalidArgumentException('Missing the required parameter $username when calling loginUser');
        }
        $username = $input['username'];

        if (!isset($input['password'])) {
            throw new \InvalidArgumentException('Missing the required parameter $password when calling loginUser');
        }
        $password = $input['password'];


        return response('How about implementing loginUser as a get method ?');
    }
    /**
     * Operation logoutUser
     *
     * Logs out current logged in user session.
     *
     *
     * @return Http response
     */
    public function logoutUser()
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing logoutUser as a get method ?');
    }
    /**
     * Operation deleteUser
     *
     * Delete user.
     *
     * @param string $username The name that needs to be deleted (required)
     *
     * @return Http response
     */
    public function deleteUser($username)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing deleteUser as a delete method ?');
    }
    /**
     * Operation getUserByName
     *
     * Get user by user name.
     *
     * @param string $username The name that needs to be fetched. Use user1 for testing. (required)
     *
     * @return Http response
     */
    public function getUserByName($username)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing getUserByName as a get method ?');
    }
    /**
     * Operation updateUser
     *
     * Updated user.
     *
     * @param string $username name that need to be deleted (required)
     *
     * @return Http response
     */
    public function updateUser($username)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing updateUser as a put method ?');
    }
}
