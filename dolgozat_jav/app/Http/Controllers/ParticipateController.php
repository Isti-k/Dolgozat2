<?php

namespace App\Http\Controllers;

use App\Models\Participate;
use Illuminate\Http\Request;

class ParticipateController extends Controller
{
    public function index(){
        return Participate::all();
    }
 
    public function store(Request $request){
        $record = new Participate();
        $record -> fill($request -> all());
        $record -> save();
    }
 
    public function show(string $event_id, string $user_id){
        $participate = Participate::where('event_id', $event_id)
            ->where('user_id', $user_id)
            ->get();
        return $participate[0];
    }
 
    public function update(Request $request, string $event_id, string $user_id){
        $event = $this->show($event_id, $user_id);
        $event -> fill($request->all());
        $event -> save;
    }
 
    public function deestroy(string $event_id, string $user_id){
        $this -> show($event_id, $user_id)->delete();
    }
}
