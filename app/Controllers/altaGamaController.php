<?php namespace App\Controllers;

use App\Models\AddModel;

class altaGamaController extends BaseController
{
	public function index()
	{
		$addModel = new AddModel();
		$busqueda =  $addModel->asObject()->findAll();
		$datosVista = array('productos'=>$busqueda);
		
		return view('altaGama',$datosVista);
	}

}
