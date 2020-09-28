<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stanza;

class StanzeController extends Controller{
  // public function index() {
  //   $stanze = Stanza::all();
  //   return view('home', compact('stanze'));
  // }
  public function index() {
    $stanze = Stanza::all();
    return view('stanza.index', compact('stanze'));
  }

  // public function show($id){
  //   $stanza = stanza::findOrFail($id);
  //   return view('show', compact('stanza'));
  //
  //
  // }
  public function show($id){
    $stanza = stanza::findOrFail($id);
    return view('stanza.show', compact('stanza'));
  }

  // public function create(){
  //   return view('stanza.index');
  // }

  public function store(Request $request){
    $data = $request -> all();
    $stanza= Stanza::create($data);

    return redirect() -> route('stanza.index');

  }
}
