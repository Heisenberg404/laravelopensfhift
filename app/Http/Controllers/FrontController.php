<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class FrontController extends Controller
{
    public function index(){
    	$facturas = $this->getInvoices();
		return view('index')->with ('facturas',json_decode($facturas, true)); //Se renderiza la vista enviando el array con las facturas
    }

   public function getInvoices(){
   	$client = new Client();
		$res = $client->request('GET','https://invoice.zoho.com/api/v3/invoices', [
			'query' => ['authtoken' => '2482f8c8849cf6a0a5204643e7408ef9','organization_id' => '637955433']
			]);
		$facturas = $res -> getBody();
		return $facturas; //retorna el Json obtenido del request al API
   }

   
   public function indexFiltro()
	{
		$facturas = $this->getInvoices();
		$facturas = json_decode($facturas,true);
		
		$count=0;
		
		foreach ($facturas['invoices'] as $key => $factura) {
			if(($facturas['invoices'][$count]['total']) <= (100000) ){
				unset($facturas['invoices'][$key]);
			}
			$count++;
		}	
		$facturas=json_encode($facturas);

		return view('index')->with ('facturas',json_decode($facturas, true)); 
	}

	
	public function FiltroDraft()
	{
		$facturas = $this->getInvoices();
		$facturas = json_decode($facturas,true);
		
		$count=0;
		
		foreach ($facturas['invoices'] as $key => $factura) {
			if(($facturas['invoices'][$count]['status']) != 'draft' ){
				unset($facturas['invoices'][$key]);
			}
			$count++;
		}	
		$facturas=json_encode($facturas);

		return view('index')->with ('facturas',json_decode($facturas, true)); 
	}

}
