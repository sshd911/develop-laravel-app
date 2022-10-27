<?php

namespace App\Filament\Resources\UserTaskResource\Pages;

use App\Filament\Resources\UserTaskResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserTasks extends ListRecords
{
    protected static string $resource = UserTaskResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
