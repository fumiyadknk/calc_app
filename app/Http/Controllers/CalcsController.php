<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcsController extends Controller
{
     public function calculate($n_1, $operator, $n_2)
     {      
        if ($operator == "addition") {
            $result = $n_1 + $n_2;
        } elseif ($operator == "subtractio"){
            $result = $n_1 - $n_2;
        } elseif ($operator == "multiplication"){
            $result = $n_1 * $n_2;
        } elseif ($operator == "division"){
            $result = $n_1 / $n_2;
        }
        return view("calcs.result" , ["result" => $result]);

     }
};




