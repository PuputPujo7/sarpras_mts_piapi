<?php

namespace App\Filament\Resources\Asset\DataBarangResource\Pages;

use App\Filament\Resources\Asset\DataBarangResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewDataBarang extends ViewRecord
{
    protected static string $resource = DataBarangResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}