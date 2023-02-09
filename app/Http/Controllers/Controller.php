<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;


/**
 * Class SwaggerConfiguration
 *
 * @package 
 *
 * This Class only for SwaggerConfiguration Declare
 * @OA\Info(
 *   title="Toprate App API",
 *   version="1.0.0",
 *   description="This is document that help you know how to call API to backend.
 *   You can use the api key `Bearer` to test the authorization filters.",
 *   @OA\Contact(
 *     name="TungND",
 *     email="tungnd@toprate.io"
 *   )
 * )
 *
 * @OA\Server(
 *     description="DEV Environment",
 *     url=""
 *   ),
 * @OA\Server(
 *     description="Production Environment",
 *     url=""
 *   )
 */
class Controller extends BaseController
{

    /**
     * @OA\Get(
     *     path="/",
     *     description="Home page",
     *     @OA\Response(response="default", description="Welcome page")
     * )
     */

    public function index()
    {
        # code...
    }

}
