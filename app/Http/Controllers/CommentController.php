<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Auth;

class CommentController extends Controller
{
    public function commentCreate(Request $request)
    {
        $request->validate(
            [
                'comment' => ['required', 'string', 'max:2500']
            ],
            [
                'comment.required' => '※コメント内容は必須です。',
                'comment.max' => '※コメントは2500文字以内で記入してください。',
            ]
        );

        Comment::create([
            'artwork_id' => $request->artwork_id,
            'user_id' => Auth::id(),
            'comment' => $request->comment,
            'create_at' => now()
        ]);
        return back();
    }

    public function commentEdit(Request $request)
    {
        $request->validate(
            [
                'comment' => ['required', 'string', 'max:2500']
            ],
            [
                'comment.required' => '※コメント内容は必須です。',
                'comment.max' => '※コメントは2500文字以内で記入してください。',
            ]
        );

        Comment::where('id', $request->comment_id)->update([
            'comment' => $request->comment,
        ]);
        return back();
    }

    public function commentDelete($id)
    {
        Comment::where('id', $id)->delete();
        return back();
    }
}
