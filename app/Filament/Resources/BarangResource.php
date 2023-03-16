<?php

// namespace App\Filament\Resources;

// use App\Filament\Resources\BarangResource\Pages;
// use App\Filament\Resources\BarangResource\RelationManagers;
// use App\Models\Barang;
// use Filament\Forms;
// use Filament\Resources\Form;
// use Filament\Resources\Resource;
// use Filament\Resources\Table;
// use Filament\Tables;
// use Illuminate\Database\Eloquent\Builder;
// use Illuminate\Database\Eloquent\SoftDeletingScope;
// use Filament\Tables\Columns\BadgeColumn;
// use Filament\Tables\Columns\TextColumn;
// use Filament\Tables\Columns\ImageColumn;
// use Filament\Tables\Actions\Position;
// use Filament\Tables\Actions\BulkAction;
// use KoalaFacade\FilamentAlertBox\Forms\Components\AlertBox;
// use Filament\Tables\Filters\SelectFilter;
// use AlperenErsoy\FilamentExport\Actions\FilamentExportBulkAction;
// use AlperenErsoy\FilamentExport\Actions\FilamentExportHeaderAction;
// use App\Models\DataBarang;

// class BarangResource extends Resource
// {
//     protected static ?string $model = Barang::class;

//     protected static ?string $navigationIcon = 'heroicon-o-collection';

//     public static function form(Form $form): Form
//     {
//         return $form
//             ->schema([
//                 //
//             ]);
//     }

//     public static function table(Table $table): Table
//     {
//         return $table
//         ->columns([
//             TextColumn::make('user.name')->label('Petugas'),
//             TextColumn::make('pengguna')->searchable()->sortable()->label('Pengguna'),
//             TextColumn::make('nama_barang')->searchable()->sortable(),
//             TextColumn::make('kondisi')->searchable(),
//             TextColumn::make('jumlah'),
//             TextColumn::make('nomor_aset')->searchable()->label('Nomor Aset'),
//             BadgeColumn::make('kondisi')->searchable()->sortable()
//                 ->enum([
//                 'baik' => 'Baik',
//                 'ringan' => 'Rusak Ringan',
//                 'sedang' => 'Rusak Sedang',
//                 'berat' => 'Rusak Berat',
//                 'total' => 'Rusak Total'
//                     ])->colors([
//                 'danger' => 'berat',
//                 'warning' => 'ringan',
//                 'success' => 'baik',
//                 'secondary' => 'sedang',
//                 'info' => 'total',
//                     ]),
//             TextColumn::make('ruang')->wrap()->searchable()->toggleable(),
//             TextColumn::make('gedung')->wrap()->sortable()->toggleable(),
//             ImageColumn::make('gambar')


//         ])
//         ->filters([
//             SelectFilter::make('kondisi')
//             ->options([
//                 'baik' => 'Baik',
//                 'ringan' => 'Rusak Ringan',
//                 'sedang' => 'Rusak Sedang',
//                 'berat' => 'Rusak Berat',
//                 'total' => 'Rusak Total',
//             ])
//         ])
//         ->actions([

//         ])
//         ->headerActions([
//             FilamentExportHeaderAction::make('export')
//         ])
//         ->bulkActions([
//             Tables\Actions\DeleteBulkAction::make(),
//             FilamentExportBulkAction::make('export')
//         ]);
//             ->actions([
//                 Tables\Actions\EditAction::make(),
//             ])
//             ->bulkActions([
//                 Tables\Actions\DeleteBulkAction::make(),
//             ]);
//     }
    
//     public static function getRelations(): array
//     {
//         return [
//             //
//         ];
//     }
    
//     public static function getPages(): array
//     {
//         return [
//             'index' => Pages\ListBarangs::route('/'),
//             'create' => Pages\CreateBarang::route('/create'),
//             'edit' => Pages\EditBarang::route('/{record}/edit'),
//         ];
//     }    
// }
