<?php namespace App\Controllers;

use App\Models\userModel;

class userController extends BaseController
{
	public function index()
	{
		$userModel = new userModel();
		$busqueda =  $userModel->asObject()->findAll();
		$datosVista = array('usuarios'=>$busqueda);

		return view('signin', $datosVista);
	}
	
	public function add()
	{

		$userModel = new userModel();

		$correo = $this->request->getPost('correo');
		$nombreUser = $this->request->getPost('nombreUser');
		$contraUser = $this->request->getPost('contraUser');

		

		$userModel->save([

			'correo'=>$correo,
			'nombreUser'=>$nombreUser,
			'contraUser'=>$contraUser
			
		]);

		return redirect()->to(base_url('public/usuarios'))->with('mensaje2', 'Registrado con exito');

	}

	public function eliminar($idUser){

		$userModel = new userModel();
		$userModel->where('idUser', $idUser)->delete();
		return redirect()->to(base_url('public/usuarios'));

	}

	public function modificar($idUser){

		
		$userModel = new userModel();
		
		$nombreUser = $this->request->getPost('nombreUser2');
		$correo = $this->request->getPost('correo2');


		$userModel->update($idUser,[
			'nombreUser'=>$nombreUser,
			'correo'=>$correo
		]);
		
		return redirect()->to(base_url('public/usuarios'));


	}

}
