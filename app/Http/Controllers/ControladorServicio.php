<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\Scalar\String_;
use Illuminate\Support\Facades\DB;

class ControladorServicio extends Controller
{
    public function createservice(string $servicename){
        DB::table('servicio')->insertGetId([['sevicename' => $servicename]]);
    }
    public function showservice(){
        $results = DB::select('select * from servicio');
        return $results;
    }
}
