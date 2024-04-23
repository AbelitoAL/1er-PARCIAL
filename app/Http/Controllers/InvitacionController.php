<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvitacionController extends Controller
{
    public function index(){
        $diagrams_g = auth()->user()->diagrams_guest->sortByDesc('created_at');
            // "diagrams_g" => $diagrams_g,

        return view('invitaciones.index',[
            "diagrams_g" => $diagrams_g
        ]);
    }
}
