<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;

use MongoDB\BSON\ObjectId;

use App\Models\Post;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return  PostResource::collection($posts);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        if (!preg_match('/^[0-9a-f]{24}$/', $id)) {
            return response()->json(['error' => 'Invalid ID format.'], 400);
        }

        $post = Post::findOrFail(new ObjectId($id));
        return new PostResource($post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
