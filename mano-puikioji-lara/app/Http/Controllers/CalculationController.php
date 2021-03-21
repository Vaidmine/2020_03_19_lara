<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculationController extends Controller
{
    public function suma($a, $b) //<--- suma metodas
    {
        $suma = $a + $b;
        return view('suma', compact('a', 'b', 'suma'));
    }

    public function daugyba($a, $b) //<--- daugyba metodas
    {
        $daugyba = $a * $b;
        return view('daugyba', compact('a', 'b', 'daugyba'));
    }

    public function dalyba($a, $b) //<--- dalyba metodas
    {
        $dalyba = $a / $b;
        return view('dalyba', compact('a', 'b', 'dalyba'));
    }

    public function atimtis($a, $b) //<--- atimtis metodas
    {
        $atimtis = $a - $b;
        return view('atimtis', compact('a', 'b', 'atimtis'));
    }

}
