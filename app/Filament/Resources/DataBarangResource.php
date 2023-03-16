<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DataBarangResource\Pages;
use App\Filament\Resources\DataBarangResource\RelationManagers;
use App\Models\DataBarang;
use App\Models\User;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions\Position;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\BulkAction;
use KoalaFacade\FilamentAlertBox\Forms\Components\AlertBox;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use AlperenErsoy\FilamentExport\Actions\FilamentExportBulkAction;
use AlperenErsoy\FilamentExport\Actions\FilamentExportHeaderAction;
use Filament\Tables\Actions\ViewAction;

class DataBarangResource extends Resource
{
    protected static ?string $model = DataBarang::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Management Barang';

    protected static ?int $navigationSort = 1;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Data Barang';

    protected static ?string $pluralLabel = 'Data Barang';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Card::make()->schema([
                //     Select::make('id')->relationship('user', 'name'),
                    
                    TextInput::make('nama_barang')->required(),
                    Grid::make()->schema([
                        TextInput::make('pengguna')->required(),
                        Select::make('kondisi')->options([
                            'baik' => 'Baik',
                            'ringan' => 'Rusak Ringan',
                            'sedang' => 'Rusak Sedang',
                            'berat' => 'Rusak Berat',
                            'total' => 'Rusak Total',
                            
                        ]),
                        TextInput::make('jumlah')->numeric()->required(),
                        TextInput::make('nomor_aset')->numeric()->required(),
                        TextInput::make('ruang')->required(),
                        TextInput::make('gedung')->required(),
                    ])->columns(2),
                    // SpatieMediaLibraryFileUpload::make('gambar'),
                    // Repeater::make()->schema([
                        FileUpload::make('gambar'),
                        // ->multiple()
                        // ->minFiles(1)
                        // ->maxFiles(5),
                    // ]),
                    
                    Hidden::make('date')->default(Carbon::now()->format('M')),
                    Hidden::make('user_id')->default(auth()->id())
                    // Hidden::make('id')->relationship('user', 'name')
                //    Hidden::make('kondisi')->default(Carbon::now()->format('Ymd'))

                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')->label('Petugas'),
                TextColumn::make('pengguna')->searchable()->sortable()->label('Pengguna'),
                TextColumn::make('nama_barang')->searchable()->sortable(),
                TextColumn::make('kondisi')->searchable(),
                TextColumn::make('jumlah'),
                TextColumn::make('nomor_aset')->searchable()->label('Nomor Aset'),
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
                'info' => 'total',
                    ]),
                TextColumn::make('ruang')->wrap()->searchable()->toggleable(),
                TextColumn::make('gedung')->wrap()->sortable()->toggleable(),
                ImageColumn::make('gambar')


            ])
            ->filters([
                SelectFilter::make('kondisi')
                ->options([
                    'baik' => 'Baik',
                    'ringan' => 'Rusak Ringan',
                    'sedang' => 'Rusak Sedang',
                    'berat' => 'Rusak Berat',
                    'total' => 'Rusak Total',
                ])
            ])
            ->actions([
                Tables\Actions\EditAction::make()->iconButton(),
                Tables\Actions\DeleteAction::make()->iconButton()
                ->requiresConfirmation()
                ->modalHeading('Hapus DataBarang')
                ->modalSubheading('Are you sure you\'d like to delete these posts? This cannot be undone.')
                ->modalButton('Yes, delete them'),
            ])
            ->headerActions([
                FilamentExportHeaderAction::make('export')
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                FilamentExportBulkAction::make('export')
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];

    }

    public static function getWidgets(): array
    {
    return [
        DataBarangResource\Widgets\DataBarangOverview::class,

    ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['pengguna', 'nama_barang', 'gedung'];
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDataBarangs::route('/'),
            'create' => Pages\CreateDataBarang::route('/create'),
            'edit' => Pages\EditDataBarang::route('/{record}/edit'),
        ];
    }
//     protected function getTableQuery(): Builder
//     {
//         if (auth()->user()->hasRole('databarang')) {
//             return parent::getTableQuery()->where('id', auth()->user()->databarang->id);
//         }
//         return parent::getTableQuery();
//     }
}
