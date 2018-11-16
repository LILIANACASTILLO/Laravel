<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ProjectControllerAlumnos extends BaseController
{
     public function index()
    {
        $petic= $_GET['accionProc'];
		if('CREAR' == $petic){
			return view('projects.alumnosCREAR');
		} 
		if('LISTAR' == $petic){
			return view('projects.alumnosLISTAR');
		}
		if('EDITAR' == $petic){
			return view('projects.alumnosEDITAR');
		}
		
    }
}
