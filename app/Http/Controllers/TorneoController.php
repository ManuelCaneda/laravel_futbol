<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Jugador;
use App\Models\Torneo;
use Illuminate\Http\Request;

class TorneoController extends Controller
{
    public function listarEquipos(){
        $data = [];

        $anho = $_POST["anho"]??null;
        $torneo = $_POST["torneo"]??null;

        $data['anho'] = $anho;
        $data['torneos'] = Torneo::all();
        $data['equipos'] = Equipo::all();

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

    public function addEquipoTorneo(Request $r){
        $torneo = Torneo::find($r->input("torneo"));
        $equipo = Equipo::find($r->input("equipo"));
        $anho = $r->input("anho");

        $equipo->torneos()->attach($torneo,["anho"=>$anho]);

        return $this->formEquipoTorneo();
    }
}

