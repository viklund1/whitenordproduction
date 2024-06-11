<?php

namespace App\Orchid\Screens;

use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Screen;
use App\Models\Service;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class ServiceScreenEdit extends Screen
{
    public $service;

    public function query(Service $service): iterable
    {
        return [
            'service' => $service
        ];
    }

    public function name(): ?string
    {
        return $this->service->exists ? 'Изменение услуги' : 'Добавление услуги';
    }

    public function description(): ?string
    {
        return 'Услуги';
    }

    public function commandBar(): iterable
    {
        return [
            Button::make('Создать')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->service->exists),

            Button::make('Обновить')
                ->icon('pencil-square')
                ->method('createOrUpdate')
                ->canSee($this->service->exists),
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::rows([
                Input::make('service.name')
                    ->title('Название')
                    ->required(),
                Cropper::make('service.image')
                    ->title('Обложка')
                    ->width(390)
                    ->height(470)
                    ->targetRelativeUrl()
                    ->required(),
            ])
        ];
    }

    public function createOrUpdate(Service $service, Request $request)
    {
        $service->fill($request->get('service'))->save();
        Toast::info('Услуга добавлена');
        return redirect()->route('platform.services.list');
    }
}
