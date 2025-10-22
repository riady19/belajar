<?php

namespace App\Filament\Resources\DosensResource\Pages;

use App\Filament\Resources\DosensResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDosens extends EditRecord
{
    protected static string $resource = DosensResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
