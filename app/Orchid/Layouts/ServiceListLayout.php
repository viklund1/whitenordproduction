<?php

namespace App\Orchid\Layouts;

use App\Models\Service;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ServiceListLayout extends Table
{

    protected $target = 'services';

    protected function columns(): iterable
    {
        return [
            TD::make('name', 'Название'),
            TD::make('actions', 'Действия')
                ->cantHide()
                ->align(TD::ALIGN_RIGHT)
                ->width(100)
                ->render(fn(Service $service) => DropDown::make()
                    ->icon('three-dots-vertical')
                    ->list([
                        Link::make('Редактировать')
                            ->icon('pen')
                            ->route('platform.services.edit', $service),
                        Button::make('Удалить')
                            ->icon('trash')
                            ->method('remove', [
                                'id' => $service->id,
                            ]),
                    ])),
        ];
    }
}
