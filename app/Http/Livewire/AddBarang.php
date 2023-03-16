<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DataBarang;
use Carbon\Carbon;
use Filament\Forms;
// use Filament\Forms\Components\Grid;
// use Filament\Forms\Components\Hidden;
// use Filament\Forms\Components\Radio;
// use Filament\Forms\Components\Select;
// use Filament\Forms\Components\Textarea;
// use Filament\Forms\Components\TextInput;
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

class AddBarang extends Component 
implements Forms\Contracts\HasForms
{

    use Forms\Concerns\InteractsWithForms;
    // public $kode = [
    //     'A',
    //     'B',
    //     'C',
    //     'D',
    // ];

    public $data, $pemohon, $attributes;
    public $nama, $alamat, $no_hp,
    $jenis_kelamin, $usia, $pendidikan,
    $jenis_layanan, $date, $no_tiket ;

    public function mount(): void
    {
        $this->form->fill();
    }


    protected function getFormSchema(): array
    {
        return [
            // ->schema([

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
                //    Hidden::make('no_tiket')->default(Carbon::now()->format('Ymd'))

                    ]),
            // ]);
        ];
    }


    public function render()
    {
        return view('livewire.add-barang');
    }
}
