<?php


class Produtos
{
	var $prod;

	public function __construct()
	{
		$this->arrVar = array();		
	}

	// Neste método foram colocados valores fixos dentro de array para exemplificar de forma bem simples como seria um webservice rest.
	// O intuíto aqui é mostrar que estamos passando os dados do array para o formato JSON, deixando-os prontos para serem consumidos.
	public function getDados()
	{
		header('Content-type: text/json');
		header('Content-type: application/json');

		$this->prod['cliente'][0]['nome'] = 'byiorio.com (localhost)';
		$this->prod['cliente'][0]['imagemCapa'] = '/img/byiorio.png';

		$this->prod['produto'][0]['descricao'] = 'Revista Virtual';
		$this->prod['produto'][0]['preco'] = '15 reais mensais';
		$this->prod['produto'][0]['imagemProduto'] = '/img/prod1.png';
		$this->prod['produto'][1]['descricao'] = 'Layout Revista';
		$this->prod['produto'][1]['preco'] = '100 reais';
		$this->prod['produto'][1]['imagemProduto'] = '/img/prod2.png';
		$this->prod['produto'][2]['descricao'] = 'Revista Personalizada';
		$this->prod['produto'][2]['preco'] = '1000 reais';
		$this->prod['produto'][2]['imagemProduto'] = '/img/prod3.png';
		
		$json = json_encode($this->prod);

		echo $json;
	}
}
$obj = new Produtos();
$obj->getDados();