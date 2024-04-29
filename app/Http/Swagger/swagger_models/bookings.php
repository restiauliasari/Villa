<?php

/**
  * @OA\Get(
  *      path="/v1/entities/bookings",
  *      operationId="browseBookings",
  *      tags={"bookings"},
  *      summary="Browse Bookings",
  *      description="Returns list of Bookings",
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Get(
  *      path="/v1/entities/bookings/read?slug=bookings&id={id}",
  *      operationId="readBookings",
  *      tags={"bookings"},
  *      summary="Get Bookings based on id",
  *      description="Returns Bookings based on id",
  *      @OA\Parameter(
  *          name="id",
  *          required=true,
  *          in="path",
  *          @OA\Schema(
  *              type="integer"
  *          )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Post(
  *      path="/v1/entities/bookings/add",
  *      operationId="addBookings",
  *      tags={"bookings"},
  *      summary="Insert new Bookings",
  *      description="Insert new Bookings into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"userId":"", "roomId":"", "serviceId":"", "name":"Abc", "phone":"Abc", "checkin":"2021-01-01T00:00:00.000Z", "checkout":"2021-01-01T00:00:00.000Z", "total":"123", "dp":"123", "statusPembayaran":"Abc"},
  *                 ),
  *             )
  *         )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/bookings/edit",
  *      operationId="editBookings",
  *      tags={"bookings"},
  *      summary="Edit an existing Bookings",
  *      description="Edit an existing Bookings",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"userId":"", "roomId":"", "serviceId":"", "name":"Abc", "phone":"Abc", "checkin":"2021-01-01T00:00:00.000Z", "checkout":"2021-01-01T00:00:00.000Z", "total":"123", "dp":"123", "statusPembayaran":"Abc"},
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/bookings/delete",
  *      operationId="deleteBookings",
  *      tags={"bookings"},
  *      summary="Delete one record of Bookings",
  *      description="Delete one record of Bookings",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="bookings",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="integer", property="value", example="123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/bookings/delete-multiple",
  *      operationId="deleteMultipleBookings",
  *      tags={"bookings"},
  *      summary="Delete multiple record of Bookings",
  *      description="Delete multiple record of Bookings",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="bookings",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="ids"),
  *                         @OA\Property(type="{}", property="value", example="123,123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/bookings/sort",
  *      operationId="sortBookings",
  *      tags={"bookings"},
  *      summary="Sort existing Bookings",
  *      description="Sort existing Bookings",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="bookings",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "userId":"", "roomId":"", "serviceId":"", "name":"Abc", "phone":"Abc", "checkin":"2021-01-01T00:00:00.000Z", "checkout":"2021-01-01T00:00:00.000Z", "total":"123", "dp":"123", "statusPembayaran":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "userId":"", "roomId":"", "serviceId":"", "name":"Abc", "phone":"Abc", "checkin":"2021-01-01T00:00:00.000Z", "checkout":"2021-01-01T00:00:00.000Z", "total":"123", "dp":"123", "statusPembayaran":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="userId"), 
  *                         @OA\Property(type="string", property="roomId"), 
  *                         @OA\Property(type="string", property="serviceId"), 
  *                         @OA\Property(type="string", property="name"), 
  *                         @OA\Property(type="string", property="phone"), 
  *                         @OA\Property(type="string", property="checkin"), 
  *                         @OA\Property(type="string", property="checkout"), 
  *                         @OA\Property(type="integer", property="total"), 
  *                         @OA\Property(type="integer", property="dp"), 
  *                         @OA\Property(type="string", property="statusPembayaran"), 
  *                         @OA\Property(type="string", property="createdAt"), 
  *                         @OA\Property(type="string", property="updatedAt"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */