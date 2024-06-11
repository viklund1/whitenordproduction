<?php

namespace App\Orchid\Screens;

use App\Models\Feedback;
use App\Orchid\Layouts\FeedbackListLayout;
use Illuminate\Support\Facades\DB;
use Orchid\Screen\Screen;
use Illuminate\Http\Request;

class FeedbackListScreen extends Screen
{

    public function query(): iterable
    {
        return [
            'feedback' => Feedback::paginate()
        ];
    }

    public function name(): ?string
    {
        return 'Заявки на обратную связь';
    }

    public function commandBar(): iterable
    {
        return [];
    }

    public function layout(): iterable
    {
        return [
            FeedbackListLayout::class
        ];
    }

    public function ApplicationSolved($id) {
        DB::table('feedback')->where('id', '=', $id)->update([
            'status' => 'Решён'
        ]);
    }
}
