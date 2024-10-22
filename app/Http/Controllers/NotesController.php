<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotesController extends Controller{

    public $notes=["Mohamed Alaoui" => "16", "Ahmed Bennani" => "14", "Rachida kich" =>
    "6", "Aicha Saaoudi" => "19", "Noura Alaoui" => "7", "Samar Rhaoussi" => "13",
    "Aicha Siraj" => "10", "Samiha Hakim" => "09", "Mohamed Rami"=> "17", "Sami Tazi"
    => "7", "Noura Tazi" => "14"] ;

    public function index(){
        $sortedNotes = collect($this->notes)->sortDesc();
        return view('tableau', ['res' => $sortedNotes]);
    }
    public function handle(){
        $sortedNotes = collect($this->notes)->sortDesc();
        return view('tableau', ['res' => $sortedNotes]);


    }

    public function show(Request $request){
 
        $search = $request->input('search');
 
        $filteredNotes = [];

        if ($search) {
            foreach ($this->notes as $name => $note) {
                if (stripos($name, $search) !== false) {
                    $filteredNotes[$name] = $note;
                }
                
            }
        } else {
            $filteredNotes = $this->notes; 
        }

        return view('tableau', ['res' => $filteredNotes, 'search' => $search]);
    }

    public function decorate(){
        $sortedNotes = collect($this->notes)->sortDesc();
        return view('tableau', ['res' => $sortedNotes]);

    }
}


