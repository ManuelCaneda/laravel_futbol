<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function listar(){
        $data['equipos'] = Equipo::all();
        return view('listar-equipos',$data);
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
}
