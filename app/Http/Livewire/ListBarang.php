<?php

namespace App\Http\Livewire;

use Livewire\Component;


    
// }
// <?php

// namespace App\Http\Livewire;

// use Livewire\Component;
use App\Models\DataBarang;
use Carbon\Carbon;
use Filament\Forms;

// use Filament\Forms\Components\Card;
// use Filament\Forms\Components\Grid;
// use Filament\Forms\Components\Hidden;
// use Filament\Forms\Components\Radio;
// use Filament\Forms\Components\Select;
// use Filament\Forms\Components\Textarea;
// use Filament\Forms\Components\TextInput;
// use Filament\Forms\Components\FileUpload;
// use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
// use Filament\Forms\Components\Repeater;
// use Filament\Resources\Form;
// use Filament\Resources\Resource;
// use Filament\Resources\Table;
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

class ListBarang extends Component

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

    // public function mount(): void
    // {
    //     $this->form->fill();
    // }


    // protected function getFormSchema(): array
    // {
    //     return [
        
    //     ];
    // }

    // public $dataBarangs;
    // public function mount()
    // {
    //     $this->dataBarangs = DataBarang::all();
    //     //dd($this->dataBarangs);
    // }

    public $search;

    protected $queryString = ['search'=> ['except' => '']];
   
    public $limitPerPage = 10;

    protected $listeners = [
        'list-barang' => 'listbarang'
    ];
   
    public function listbarang()
    {
        $this->limitPerPage = $this->limitPerPage + 6;
    }

    public function render()
    {
        $barangs = DataBarang::latest()->paginate($this->limitPerPage);

        if ($this->search !== null) {
            $barangs = DataBarang::where('nama_barang','like', '%' . $this->search . '%')
            ->latest()->paginate($this->limitPerPage);
        }
        $this->emit('barangStore');

        return view('livewire.list-barang', ['barangs' => $barangs]);
    }

    // public function render()
    // {
    //     return view('livewire.list-barang');
    // }
}
