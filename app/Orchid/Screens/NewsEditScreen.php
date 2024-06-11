<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\TextArea;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Screen;
use App\Models\News;
use Illuminate\Http\Request;
use Orchid\Support\Facades\Toast;
use Orchid\Screen\Actions\Button;

class NewsEditScreen extends Screen
{
    public $news;

    public function query(News $news): iterable
    {
        return [
            'news' => $news
        ];
    }

    public function name(): ?string
    {
        return $this->news->exists ? 'Изменение новости' : 'Добавление новости';
    }

    public function description(): ?string
    {
        return 'Новости компании';
    }

    public function commandBar(): iterable
    {
        return [
            Button::make('Создать новость')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->news->exists),

            Button::make('Обновить новость')
                ->icon('pencil-square')
                ->method('createOrUpdate')
                ->canSee($this->news->exists),
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::rows([
                Input::make('news.title')
                    ->title('Заголовок')
                    ->required(),
                Quill::make('news.text')
                    ->title('Текст новости')
                    ->required(),
                Cropper::make('news.image')
                    ->title('Обложка')
                    ->width(390)
                    ->height(240)
                    ->targetRelativeUrl()
                    ->required(),
            ])
        ];
    }

    public function createOrUpdate(News $news, Request $request)
    {
        $news->fill($request->get('news'))->save();
        Toast::info('Новость добавлена');
        return redirect()->route('platform.news.list');
    }
}
