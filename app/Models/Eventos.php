<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos
{
    public $idE;
    public $nombreE;

    static public function  all()
    {
        $arreglo = session('arreglo', []);
        return $arreglo;
    }

    public function save()
    {
        $arreglo = session('arreglo', []);
        $arreglo[$this->idE] = $this->nombreE;
        session(['arreglo' => $arreglo]);
        return true;
    }

    static public function  find($id)
    {
        $arreglo = session('arreglo', []);
        if (isset($arreglo[$id])) {
            $nuevo = new Eventos();
            $nuevo->idE = $id;
            $nuevo->nombreE = $arreglo[$id];
            return $nuevo;
        } else {
            return null;
        }
    }
    public function delete()
    {
        $arreglo = session('arreglo', []);
        unset($arreglo[$this->idE]);
        session(['arreglo' => $arreglo]);
    }
}
