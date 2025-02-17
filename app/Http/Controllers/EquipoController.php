<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Jugador;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function listar(){
        $data['equipos'] = Equipo::all();
        return view('listar-equipos',$data);
    }

    public function listJugadores($id){
        $data = [];

        $data['equipo'] = Equipo::find($id);
        $data['jugadores'] = Jugador::where('equipo',$id)->get();

        return view('listar-jugadores',$data);
    }

    public function formEquipo(){
        return view('form-equipo');
    }

    public function addEquipo(){
        $data=[];
        $p=new Equipo();

        $nombre = $_POST['nombre']??null;
        $socios = $_POST['num-socios']??null;                
        
        if(isset($nombre) && trim($nombre)!="" && isset($socios)){
            $p->nombre=$nombre;
            $p->num_socios=$socios;

            $p->save();

            $data["msg"] = "Equipo añadido correctamente!";
        } else {
            $data["error"] = "Error añadiendo al equipo.";
        }

        return view('form-equipo',$data);
    }

    public function addJugadorForm($id){
        $data=[];

        $data['equipo'] = Equipo::find($id);
        $data['jugadores'] = Jugador::where('equipo',null)->get();

        return view("form-add-jugador-equipo",$data);
    }

    public function addJugador(Request $r, $id){
        $equipo = Equipo::find($id);
        $id_jugadores = $r->get('id_jugadores');

        if($id_jugadores!=null){
            foreach ($id_jugadores as $j_id) {
                $j = Jugador::find($j_id);
                $j->equipo=$id;
                $j->save();
            }
        }

        return $this->listar();
    }
}
