<?php namespace App\Controllers;

use App\Models\AddModel;

class AddContoller extends BaseController
{
	public function index()
	{
		$addModel = new AddModel();
		$busqueda =  $addModel->asObject()->findAll();
		$datosVista = array('productos'=>$busqueda);

		return view('add', $datosVista);
	}

	public function add()
	{
		$addModel = new AddModel();

		$nombreProducto = $this->request->getPost('nombreProducto');
		$precio = $this->request->getPost('precio');
		$imagen = $this->request->getPost('imagen');
		$idproduct = $this->request->getPost('idproduct');

		$addModel->save([

			'nombreProducto'=>$nombreProducto,
			'precio'=>$precio,
			'imagen'=>$imagen,
			'idproduct'=>$idproduct

		]);

		return redirect()->to(base_url('public/altaGama'))->with('mensaje', 'Producto agregado correctamente');

	}

	public function eliminar($idproduct){

		$addModel = new AddModel();
		$addModel->where('idproduct', $idproduct)->delete();
		return redirect()->to(base_url('public/admi123'));

	}

	public function modificar($idproduct){

		
		$addModel = new AddModel();
		
		$nombreProducto = $this->request->getPost('nombreProducto2');
		$precio = $this->request->getPost('precio2');


		$addModel->update($idproduct,[
			'nombreProducto'=>$nombreProducto,
			'precio'=>$precio
		]);
		
		return redirect()->to(base_url('public/admi123'));


	}

}