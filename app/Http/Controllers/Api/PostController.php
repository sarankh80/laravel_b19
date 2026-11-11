<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Post::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     // 'user_id' => 'required|exists:users,id',
        //     'title' => 'required|string|max:255',
        //     'content' => 'required|string',
        //     // 'slug' => 'required|string|max:255|unique:posts,slug',
        //     // 'count' => 'required|numeric',
        //     // 'status' => 'required|boolean',
        //     // 'ordering' => 'required|integer',
        // ]);
        $post = [
            'user_id' => 1,
            'title' => "This is title 1",
            'content' => "This is content 1",
            'slug' => "this-is-slug1",
            'count' => 0,
            'status' => 1,
            'ordering' => 0,
        ];
        $post = Post::create($post);

        return response()->json($post, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }
        return response()->json($post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::find($id);
        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }
        $post->update($request->all());

        return response()->json($post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }
        $post->delete();
        return response()->json(['message' => 'Post deleted successfully']);
    }
    public function getPostsByUserId($userId)
    {
        $posts = Post::where('user_id', $userId)->get();
        return response()->json($posts);
    }
}
