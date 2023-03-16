<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
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
use Filament\Forms\Components\MultiSelect;
use Illuminate\Support\Facades\Hash;

class Register extends Component 
implements Forms\Contracts\HasForms
{

    use Forms\Concerns\InteractsWithForms;

    public $data, $pemohon, $user;
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
                TextInput::make('name')->required(),
                TextInput::make('email')->email()->required(),
                TextInput::make('password')
                ->password()
                ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                ->dehydrated(fn ($state) => filled($state))
                ->required(fn (string $context): bool => $context === 'create'),
                // MultiSelect::make('roles')
                // ->relationship('roles', 'name'),
                FileUpload::make('avatar'),
                Hidden::make('roles')->default('user_umum')
        ];
    }

    public function submit()
    {
        $this->data = $this->form->getState();

        // dd($this->data);
        // $randomNumber = random_int(1000000, 9999999);

        // $this->no_tiket = $randomNumber;

        $user = User::create($this->form->getState());

        $this->form->model($user)->saveRelationships();

        // dd($pemohon);

        return redirect('/admin');

    }

    public function render()
    {
        return view('livewire.register');
    }
}
