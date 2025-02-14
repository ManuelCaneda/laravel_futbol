<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Torneo;
use Illuminate\Http\Request;

class TorneoController extends Controller
{
    public function listar(){
        $data['torneos'] = Torneo::all();
        return view('listar-torneos',$data);
    }

    public function formTorneo(){
        return view('form-torneo');
    }

    public function addTorneo(){
        $t=new Torneo();

        $nombre = $_POST['nombre']??null;

        $nacional = (isset($_POST['nacional']))
        ? true:
        false;
        
        
        if(isset($nombre) && trim($nombre)!=""){
            $t->nombre=$nombre;
            $t->nacional=$nacional;

            $t->save();
        }

        return view('form-torneo');
    }

    public function formEquipoTorneo(){
        $data=[];
        $data["equipos"] = Equipo::all();
        $data["torneos"] = Torneo::all();

        return view('form-eq-torneo',$data);
    }
}
