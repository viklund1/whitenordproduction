<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function SendFeedback(Request $request, Feedback $fb)
    {
        $fb->fill([
            'name' => $request->input('name'),
            'question' => $request->input('question'),
            'number' => $request->input('number'),
            'email' => $request->input('email'),
        ])->save();
        return redirect()->route('index');
    }
}
