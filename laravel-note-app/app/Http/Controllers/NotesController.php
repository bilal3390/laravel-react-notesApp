<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notes;

class NotesController extends Controller
{
    public function store (Request $request) {

        $data = Notes::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        $data->save();

    }

    public function view () {

        return Notes::all();

    }
}
