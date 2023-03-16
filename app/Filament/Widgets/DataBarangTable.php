<?php

namespace App\Filament\Widgets;

use App\Models\DataBarang;
use Closure;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\BadgeColumn;

class DataBarangTable extends BaseWidget
{
    protected int | string | array $columnSpan='full';
    protected function getTableQuery(): Builder
    {
        return DataBarang::query()->latest();
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('user.name')->searchable()->sortable()->label('Petugas'),
            Tables\Columns\TextColumn::make('pengguna')->searchable()->sortable()->label('Pengguna'),
            Tables\Columns\TextColumn::make('nama_barang')->wrap()->searchable()->sortable(),
            Tables\Columns\TextColumn::make('kondisi')->searchable(),
            Tables\Columns\TextColumn::make('jumlah'),
            Tables\Columns\TextColumn::make('nomor_aset')->searchable()->label('Nomor Aset'),
            BadgeColumn::make('kondisi')->searchable()->sortable()
                ->enum([
                'baik' => 'Baik',
                'ringan' => 'Rusak Ringan',
                'sedang' => 'Rusak Sedang',
                'berat' => 'Rusak Berat',
                'total' => 'Rusak Total'
                    ])->colors([
                'danger' => 'berat',
                'warning' => 'ringan',
                'success' => 'baik',
                'secondary' => 'sedang',
                'danger' => 'total',
                    ]),
            Tables\Columns\TextColumn::make('ruang')->wrap()->searchable()->toggleable(),
            Tables\Columns\TextColumn::make('gedung')->wrap()->sortable()->toggleable(),
            Tables\Columns\ImageColumn::make('gambar')
        ];
    }
}
