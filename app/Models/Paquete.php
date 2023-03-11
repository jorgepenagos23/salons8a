<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquete
{
    public $idP;
    public $nombreP;

    static public function  all()
    {
        $arreglo = session('arreglo', []);
        return $arreglo;
    }

    public function save()
    {
        $arreglo = session('arreglo', []);
        $arreglo[$this->idP] = $this->nombreP;
        session(['arreglo' => $arreglo]);
        return true;
    }

    static public function  find($id)
    {
        $arreglo = session('arreglo', []);
        if (isset($arreglo[$id])) {
            $nuevo = new Paquete();
            $nuevo->idP = $id;
            $nuevo->nombreP = $arreglo[$id];
            return $nuevo;
        } else {
            return null;
        }
    }
    public function delete()
    {
        $arreglo = session('arreglo', []);
        unset($arreglo[$this->idP]);
        session(['arreglo' => $arreglo]);
    }
}
