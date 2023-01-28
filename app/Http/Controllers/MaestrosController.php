<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaestrosController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $masters = [
            ['name'=>'sergio panti'],
            ['name'=>'rafael yabur'],
            ['name'=>'raymundo romero'],
            ['name'=>'maria ignot'],
            
            ['name'=>'rafael yabur'],
            ['name'=>'raymundo romero'],
            ['name'=>'maria ignot'],
        ];

        return view('maestros', compact('masters'));
    }
}
