<?php

namespace App\Filament\Resources\DataBarangResource\Pages;

use App\Filament\Resources\DataBarangResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListDataBarangs extends ListRecords
{
    protected static string $resource = DataBarangResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getTableQuery(): Builder
    {
        if(auth()->user('user_umum')){
            return parent::getTableQuery()->where('user_id', auth()->id());
        }
        return parent::getTableQuery()->where('pengguna');
    }
}
