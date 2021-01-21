<?php
  	class Cart {
    	var $kodeProduk;
    	var $kuantitas;

    	public $info = [];
    	public $point = 0;
    
    	public function tampilkanCart() {           
            $all_cart = [];
            foreach($this->info as $row) {
                $kode = $row['kode'];
                $jml = $row['jml'];

                if(!array_key_exists($kode, $all_cart)) {
                    $all_cart[$kode] = 0;
                }
                
                $all_cart[$kode] += $jml;
            }

            echo "Hasil : </br>";
            foreach($all_cart as $kode => $jml) {
                echo $kode." (".$jml.") <br>";
            }
    	}

    	public function tambahProduk($kodeProduk, $kuantitas){
      		$this->info[$this->point] = ['kode' => $kodeProduk, 'jml' => $kuantitas] ;
      		$this->point++;
    	}

    	public function hapusProduk($kodeProduk){
      		for($i=0; $i < count($this->info); $i++){
        		if($this->info[$i]['kode'] == $kodeProduk){
           			unset($this->info[$i]);
        		}
      		}
      		$this->info = array_values($this->info);
    	}
  	}
?>