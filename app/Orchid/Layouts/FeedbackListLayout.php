<?php

namespace App\Orchid\Layouts;

use Carbon\Carbon;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class FeedbackListLayout extends Table
{

    protected $target = 'feedback';

    protected function columns(): iterable
    {
        return [
            TD::make('name', 'Имя'),
            TD::make('question', 'Вопрос'),
            TD::make('number', 'Номер'),
            TD::make('email', 'Электронная почта'),
            TD::make('created_at', 'Дата обращения')
            ->render(function ($feedback) {
                $parsed = new Carbon($feedback->created_at);
                return $parsed->isoFormat("D MMMM YYYY");
            }),
            TD::make('status', 'Статус')->width(120),
            TD::make('actions', 'Действия')
                ->width(100)
                ->render(function($feedback) {
                    return Button::make('Решён')
                        ->method('ApplicationSolved')
                        ->parameters(['id' => $feedback->id])->canSee($feedback->status === 'Не решён');
                })
        ];
    }
}
