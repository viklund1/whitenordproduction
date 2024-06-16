<?php

namespace App\Orchid\Screens;

use App\Models\Service;
use App\Orchid\Layouts\ServiceListLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class ServiceScreenList extends Screen
{

    public function query(): iterable
    {
        return [
            'services' => Service::paginate()
        ];
    }

    public function name(): ?string
    {
        return 'Услуги';
    }

    public function description(): ?string
    {
        return 'Добавление, редактирование и удаление услуг';
    }

    public function commandBar(): iterable
    {
        return [
            Link::make('Добавить услугу')
                ->icon('pencil')
                ->route('platform.services.create')
        ];
    }

    public function layout(): iterable
    {
        return [
            ServiceListLayout::class
        ];
    }

    public function remove(Service $service, Request $request)
    {
        $service->findOrFail($request->get('id'))->delete();
        Toast::success('Услуга удалена');
    }
}
