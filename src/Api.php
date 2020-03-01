<?php 
	class Api {
		protected $url;

		public function __construct($getUrl){
			$this->url = $getUrl;
		}

		protected function fetchData(){
			$curl = curl_init();
			if (!$curl) {
            	die("Couldn't initialize a cURL handle");
        	}
        	curl_setopt($curl,CURLOPT_URL,$this->url);
    		curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

    		$output=curl_exec($curl);
		    curl_close($curl);

		    $apiData = json_decode($output,true);
		    return $apiData;
		}
	}

	class Response extends Api{
		public function showData(){
			return $this->fetchData();
		}
	}
?>