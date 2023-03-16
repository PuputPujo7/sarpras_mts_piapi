<?php

namespace App\Filament\Resources\DataBarangResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\DataBarang;

class DataBarangOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Total Complaints', DataBarang::where('baik', 'Baik')->count())->label('Gedung A')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->descriptionIcon('heroicon-s-trending-up')
            ->extraAttributes([
            'class' => 'cursor-pointer',
            'wire:click' => '$emitUp("setStatusFilter", "processed")',
            ])
            ->color('danger'),
            Card::make('Total Complaints', DataBarang::where('ringan', 'Rusak Ringan')->count())->label('Rusak Ringan')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->descriptionIcon('heroicon-s-trending-up')
            ->extraAttributes([
            'class' => 'cursor-pointer',
            'wire:click' => '$emitUp("setStatusFilter", "processed")',
            ])
            ->color('warning'),
            Card::make('Total Complaints', DataBarang::where('sedang', 'Rusak Sedang')->count())->label('Rusak Sedang')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->descriptionIcon('heroicon-s-trending-up')
            ->extraAttributes([
            'class' => 'cursor-pointer',
            'wire:click' => '$emitUp("setStatusFilter", "processed")',
            ])
            ->color('success'),
            Card::make('Total Complaints', DataBarang::where('berat', 'Rusak Berat')->count())->label('Rusak Berat')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->descriptionIcon('heroicon-s-trending-up')
            ->extraAttributes([
            'class' => 'cursor-pointer',
            'wire:click' => '$emitUp("setStatusFilter", "processed")',
            ])
            // ->color('secondary'),
            // Card::make('Total Complaints', DataBarang::where('gedung', 'E')->count())->label('Gedung E')
            // ->chart([7, 2, 10, 3, 15, 4, 17])
            // ->descriptionIcon('heroicon-s-trending-up')
            // ->extraAttributes([
            // 'class' => 'cursor-pointer',
            // 'wire:click' => '$emitUp("setStatusFilter", "processed")',
            // ])
            ->color('info'),
        ];
    }
}
