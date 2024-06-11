<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use App\Models\News;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\Button;
use Carbon\Carbon;

class NewsListLayout extends Table
{
    protected $target = 'news';

    protected function columns(): iterable
    {
        return [
            TD::make('title', 'Заголовок'),
            TD::make('text', 'Текст новости')
                ->render(function ($news) {
                    if (strlen($news->text < 80)) return strip_tags($news->text);
                    else return mb_strimwidth(strip_tags($news->text), 0 ,80, '...');
                }),
            TD::make('created_at', 'Дата создания')
                ->render(function ($news) {
                    $date = new Carbon($news->created_at);
                    return $date->isoFormat("D MMMM YYYY");
                }),
            TD::make('actions', 'Действия')
                ->cantHide()
                ->align(TD::ALIGN_RIGHT)
                ->width(100)
                ->render(fn(News $news) => DropDown::make()
                    ->icon('three-dots-vertical')
                    ->list([
                        Link::make('Редактировать')
                            ->icon('pen')
                            ->route('platform.news.edit', $news),
                        Button::make('Удалить')
                            ->icon('trash')
                            ->method('remove', [
                                'id' => $news->id,
                            ]),
                    ])),
        ];
    }
}
