<?php

namespace App\Http\Controllers;
use App\Models\Entry;
use Illuminate\Http\Request;

class EntriesController extends Controller
{
    public function index(){
        $entries = Entry::all();
        return view('entries.index',['entries'=>$entries]);
    }
    public function view ($id){
        $entry = Entry::findOrFail($id);
        return view ('entries.view',['entry' =>$entry]);
    }
    //
}
