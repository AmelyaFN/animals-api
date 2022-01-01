<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    private $animals = ['Cat', 'Rabbit', 'Fish'];

    function index() {
        echo "Menampilkan data hewan";
        foreach ($this->animals as $animal) {
            echo "<br>";
            echo $animal;
        }
    }

    function store(Request $request) {
        array_push($this->animals, $request->nama);
        echo "Menambah data hewan : $request->nama";
        echo "<br>";
        echo $this->index();
    }

    function update(Request $request, $id) {
        $this->animals[$id] =  $request->nama;
        
        echo "Data animal telah diubah !";
        echo "<br>";
        echo "Hewan terbaru adalah $request->nama";
        echo "<br>";
        echo $this->index();
    }

    function destroy($id) {
        unset($this->animals[$id]);

        echo "Data hewan telah dihapus";
        echo "<br>";
        echo $this->index();
    }
}
