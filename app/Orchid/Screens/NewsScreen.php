<?php

namespace App\Orchid\Screens;

use App\Models\News;
use App\Orchid\Layouts\NewsListLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class NewsScreen extends Screen
{

    public function query(): iterable
    {
        return [
            'news' => News::paginate()
        ];
    }

    public function name(): ?string
    {
        return 'Новости';
    }

    public function description(): ?string
    {
        return 'Добавление, редактирование и удаление новостей';
    }

    public function commandBar(): iterable
    {
        return [
            Link::make('Добавить новость')
                ->icon('pencil')
                ->route('platform.news.create')
        ];
    }

    public function layout(): iterable
    {
        return [
            NewsListLayout::class
        ];
    }

    public function remove(News $news, Request $request)
    {
        $news->findOrFail($request->get('id'))->delete();
        Toast::success('Новость удалена');
    }
}
