<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\JsonResponse;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return new JsonResponse([
            'data' => 'Users'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        return new JsonResponse([
            'data' => 'store'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return Illuminate\Http\JsonResponse
     */
    public function show(User $user)
    {
        // dump($request);
        return new JsonResponse([
            'data' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  App\Models\User  $post
     * @return Illuminate\Http\JsonResponse
     */
    public function update(Request $request, User  $post)
    {
        return new JsonResponse([
            'data' => 'update'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\User  $user
     * @return Illuminate\Http\JsonResponse
     */
    public function destroy(User  $post)
    {
        return new JsonResponse([
            'data' => 'destroy'
        ]);
    }
}
