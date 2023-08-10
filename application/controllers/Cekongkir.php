<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cekongkir extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

    


	public function index()
	{

	     $data = [
            'title' =>  'Cekongkir'
		 ];
		$this->template->load('template','Cekongkir/Cekongkir', $data);
	}


    function Cek()  {

        $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.rajaongkir.com/starter/city",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "key: 61e5ef247e39cbcc0595466c0254eb76"
      ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    $kota = json_decode($response);
    
    
    // if ($err) {
    //   echo "cURL Error #:" . $err;
    // } else {
    //   echo $response;
    // }

        $data = [
            'title' =>  'Cekongkir',
            'kota' => $kota
		 ];
		$this->template->load('template','Cekongkir/Cek', $data);
    }


    function kalkulasi() {

      $from = $this->input->post('from');
      $to = $this->input->post('to');
      $berat = $this->input->post('berat');
      $kurir = $this->input->post('kurir');

    //   var_dump($kurir); die();
  
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "origin=$from&destination=$to&weight=$berat&courier=$kurir",
  CURLOPT_HTTPHEADER => array(
    "content-type: application/x-www-form-urlencoded",
    "key: 61e5ef247e39cbcc0595466c0254eb76"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

$result = json_decode($response);

$data = [
     'res' => $result
];
$this->template->load('template','Cekongkir/result', $data);
// if ($err) {
//   echo "cURL Error #:" . $err;
// } else {
//   echo $response;
// }
    }
}