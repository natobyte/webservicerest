<?php

class Consumidor
{
	private $result;
	private $msgErro;

	public function __construct(){}

	public function getResult(){ return $this->result; }
	public function getMsgErro(){ return $this->msgErro; }

	// O método abaixo consome os dados do webservice.
	public function getRequest($url)
	{
		// ###################################################
		// # PROCEDIMENTO QUE CAPTURA OS DADOS DO WEBSERVICE #
		// ###################################################
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch , CURLOPT_SSL_VERIFYPEER , false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);

		// ############### FIM DO PROCEDIMENTO  ##############

		// As condições abaixo definem qual página redirecionar.
		if($result !== FALSE) 
		{
			$this->result = json_decode($result);
			$qtdeResultados = count($this->result);
			if($qtdeResultados > 0){ include_once('list.phtml'); }
			else{ include_once('vazio.phtml'); }
		}
		else 
		{ 
			$this->msgErro = curl_error($ch);
			require_once('erro.phtml'); 
		}
	}
}