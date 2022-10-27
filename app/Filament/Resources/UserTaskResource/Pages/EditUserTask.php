<?php

namespace App\Filament\Resources\UserTaskResource\Pages;

use App\Filament\Resources\UserTaskResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserTask extends EditRecord
{
    protected static string $resource = UserTaskResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
