<?php

namespace App\Filament\Widgets;

use App\Models\DataBarang;
use Filament\Tables\Columns\Layout\Grid;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;


class BarangsOverview extends BaseWidget
{

    // protected function getHeaderWidgetsColumns(): int | array
    // {
    //     return 5;
    // }

    protected function getCards(): array
    {
        return [
            Card::make('Total Complaints', DataBarang::where('kondisi', 'Baik')->count())->label('Baik')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->descriptionIcon('heroicon-s-trending-up')
            ->extraAttributes([
            'class' => 'cursor-pointer',
            'wire:click' => '$emitUp("setStatusFilter", "processed")',
            ])
            ->color('success'),
            Card::make('Total Complaints', DataBarang::where('kondisi', 'Rusak Ringan')->count())->label('Rusak Ringan')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->descriptionIcon('heroicon-s-trending-up')
            ->extraAttributes([
            'class' => 'cursor-pointer',
            'wire:click' => '$emitUp("setStatusFilter", "processed")',
            ])
            ->color('warning'),
            Card::make('Total Complaints', DataBarang::where('kondisi', 'Rusak Sedang')->count())->label('Rusak Sedang')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->descriptionIcon('heroicon-s-trending-up')
            ->extraAttributes([
            'class' => 'cursor-pointer',
            'wire:click' => '$emitUp("setStatusFilter", "processed")',
            ])
            ->color('secondary'),
            Card::make('Total Complaints', DataBarang::where('kondisi', 'Rusak Berat')->count())->label('Rusak Berat')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->descriptionIcon('heroicon-s-trending-up')
            ->extraAttributes([
            'class' => 'cursor-pointer',
            'wire:click' => '$emitUp("setStatusFilter", "processed")',
            ])
            ->color('danger'),
            Card::make('Total Complaints', DataBarang::where('kondisi', 'Rusak Total')->count())->label('Rusak Total')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->descriptionIcon('heroicon-s-trending-up')
            ->extraAttributes([
            'class' => 'cursor-pointer',
            'wire:click' => '$emitUp("setStatusFilter", "processed")',
            ])
            ->color('info'),
        ];
    }
}
