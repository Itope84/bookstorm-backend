<?php

namespace App\Http\Controllers\Api;

use App\Tag;
use App\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\QuestionResource;

class QuestionController extends Controller
{
    public function index()
    {
        return QuestionResource::collection(Question::latest()->with('user')->paginate(request()->perpage ?? 30));
    }

    public function ask (Request $request)
    {
        $data = $request->only(['title', 'body']);
        $data['user_id'] = $request->user()->id;
        $question = Question::create($data);

        $tags = collect($request->tags)->map(function ($item) use ($question) {
            $tag = Tag::whereName($item)->first() ?? Tag::create(['name' => $item]);
            $question->tags()->save($tag);
            return $tag;
        });

        $question->tags;

        return response()->json($question, 200);
    }
}
