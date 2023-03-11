<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicios
{
    public $idS;
    public $nombreS;

    static public function  all()
    {
        $arreglo = session('arreglo', []);
        return $arreglo;
    }

    public function save()
    {
        $arreglo = session('arreglo', []);
        $arreglo[$this->idS] = $this->nombreS;
        session(['arreglo' => $arreglo]);
        return true;
    }

    static public function  find($id)
    {
        $arreglo = session('arreglo', []);
        if (isset($arreglo[$id])) {
            $nuevo = new Servicios();
            $nuevo->idS = $id;
            $nuevo->nombreS = $arreglo[$id];
            return $nuevo;
        } else {
            return null;
        }
    }
    public function delete()
    {
        $arreglo = session('arreglo', []);
        unset($arreglo[$this->idS]);
        session(['arreglo' => $arreglo]);
    }
}
