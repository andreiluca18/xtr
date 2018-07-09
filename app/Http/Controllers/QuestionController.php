<?php

namespace Xtrainers\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Xtrainers\User;
use Xtrainers\Topic;

class QuestionController extends HomeController
{
    /**
     * Store a new question.
     *
     * @param  Request $request
     */
    public function store(Request $request)
    {
        $data = $request->input('data');
        $user_id = $request->user()->id;

        $topic = new Topic();

        $topic->topic_author_id = $user_id;
        $topic->topic_up_votes = 0;
        $topic->topic_down_votes = 0;
        $topic->topic_title = $data['title'];
        $topic->topic_content = $data['body'];

        $topic->save();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|Topic[]
     */
    public function all() {
        return Topic::all();
    }
}
