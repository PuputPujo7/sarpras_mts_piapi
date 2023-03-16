<?php

namespace App\Filament\Resources\DataBarangResource\Pages;

use App\Filament\Resources\DataBarangResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDataBarang extends EditRecord
{
    protected static string $resource = DataBarangResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
