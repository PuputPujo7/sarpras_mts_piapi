<?php

namespace App\Http\Livewire;

use App\Models\HasilSurvey;
use App\Models\Pemohon;
use App\Models\Survey as ModelsSurvey;
use Filament\Forms;
use Livewire\Component;

class Survey extends Component implements Forms\Contracts\HasForms
{

    use Forms\Concerns\InteractsWithForms;

    protected $questions;
    protected $formsSurvey = [];
    public
        $tiket,
        $review,
        $rating = [],
        $lastReview;

    public function mount($nomorTiket){
        $this->tiket = $nomorTiket;
        $this->lastReview = Pemohon::whereNotNull('review')->latest()->first();
    }

    public function submit(){
        // dd($this->rating);
        $pemohon = Pemohon::where('review')->first();
        $summary = [];


        // dd($summary);

        $this->questions = ModelsSurvey::all();
        foreach ($this->questions as $key => $question){
            array_push($summary,
                [
                    'pemohon_id' => $pemohon->id,
                    'survey_id' => $question->id,
                    'amount' => $this->rating[$key]
                ]
            );
            $hasil = HasilSurvey::create($summary[$key]);
        }
        $avg = array_sum(array_column($summary, 'amount')) / count($summary);
        $pemohon->review = $this->review;
        $pemohon->review_star = $avg;
        $pemohon->update();


        return redirect('/thanks');

    }

    public function render()
    {
        $this->questions = ModelsSurvey::all();
        $questions = $this->questions;
        return view('livewire.survey',compact('questions'))->extends('layouts.app');
    }
}
