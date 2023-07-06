<?php

namespace Docs\Default\Http\Controllers\User;

use OpenApi\Annotations as OA;

class UserController
{
    /**
     * @OA\Post(
     *      tags={"Users"},
     *      path="/users",
     *      summary="Add a new user register",
     *      @OA\RequestBody(
     *          description="",
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/UserCreate"),
     *      ),
     *      @OA\Response(
     *          response=201,
     *          description="Success",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(ref="#/components/schemas/UserResource")
     *          )
     *      ),
     *      @OA\Response(
     *          response=409,
     *          description="Conflict",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(ref="#/components/schemas/RequestException")
     *          )
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="Invalid input",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(ref="#/components/schemas/Unprocessable")
     *          )
     *      ),
     *      @OA\Response(
     *          response=500,
     *          description="Internal Error",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(
     *                  @OA\Property(
     *                      property="message",
     *                      type="string"
     *                  ),
     *                  example={"message": "Internal Error"}
     *              )
     *          )
     *      )
     * )
     */
    public function store()
    {
    }

    /**
     * @OA\Put(
     *      tags={"Users"},
     *      path="/users/{user_id}",
     *      summary="Update a user",
     *      @OA\RequestBody(
     *          description="",
     *          @OA\JsonContent(ref="#/components/schemas/UserUpdate"),
     *      ),
     *      @OA\Parameter(
     *          in="header",
     *          name="Authorization",
     *          description="Bearer Token",
     *          required=true,
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *      @OA\Parameter(
     *          in="path",
     *          name="user_id",
     *          description="",
     *          required=true,
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Success",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(ref="#/components/schemas/UserResource")
     *          )
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="Unprocessable Entity",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(ref="#/components/schemas/Unprocessable")
     *          )
     *      ),
     *      @OA\Response(
     *          response=500,
     *          description="Internal Error",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(
     *                  @OA\Property(
     *                      property="message",
     *                      type="string"
     *                  ),
     *                  example={"message": "Internal Error"}
     *              )
     *          )
     *      )
     * )
     */
    public function update()
    {
    }

    /**
     * @OA\Get(
     *      tags={"Users"},
     *      path="/users",
     *      summary="Get all users",
     *      @OA\Parameter(
     *          in="header",
     *          name="Authorization",
     *          description="Bearer Token",
     *          required=true,
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Success",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(ref="#/components/schemas/UserResource")
     *          )
     *      ),
     *      @OA\Response(
     *          response=500,
     *          description="Internal Error",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(
     *                  @OA\Property(
     *                      property="message",
     *                      type="string"
     *                  ),
     *                  example={"message": "Internal Error"}
     *              )
     *          )
     *      )
     * )
     */
    public function index()
    {
    }

    /**
     * @OA\Get(
     *      tags={"Users"},
     *      path="/users/{user_id}",
     *      summary="Get a user",
     *      @OA\Parameter(
     *          in="header",
     *          name="Authorization",
     *          description="Bearer Token",
     *          required=true,
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *      @OA\Parameter(
     *          in="path",
     *          name="user_id",
     *          description="",
     *          required=true,
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Success",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(ref="#/components/schemas/User")
     *          )
     *      ),
     *      @OA\Response(
     *          response=500,
     *          description="Internal Error",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(
     *                  @OA\Property(
     *                      property="message",
     *                      type="string"
     *                  ),
     *                  example={"message": "Internal Error"}
     *              )
     *          )
     *      )
     * )
     */
    public function show()
    {
    }
}
