<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    public function listar(){
        $data = [];
        $data['jugadores'] = Jugador::all();
        return view('listar-jugadores',$data);
    }

    public function formJugador(){
        $data["equipos"] = Equipo::all();

        return view('form-jugador',$data);
    }

    public function addJugador(){
        $data=[];
        $j=new Jugador();

        $error="";

        $nombre = $_POST['nombre']??null;
        $apellidos = $_POST['aps']??null;
        $dorsal = $_POST['dorsal']??null;
        $fechaNac = $_POST['fecha-nac']??null;

        $equipo = $_POST['equipo']??null;
        
        if(!isset($nombre) || trim($nombre)==""){
            $error.="El nombre está vacío<br>";
        }

        if(!isset($apellidos) || trim($apellidos)==""){
            $error.="Apellidos vacíos<br>";
        }

        if(!isset($dorsal)){
            $error.="Dorsal no seleccionado<br>";
        }

        if(!isset($fechaNac)){
            $error.="Fecha de nacimiento vacía<br>";
        }

        if(!empty($error)){
            $data["error"]=$error;
        }else {
            $j->nombre=$nombre;
            $j->apellidos=$apellidos;
            $j->dorsal=$dorsal;
            $j->f_nac=$fechaNac;

            $j->save();
    
            $data["msg"] = "Jugador añadido correctamente!";
        }

        return view('form-jugador',$data);
    }
}
