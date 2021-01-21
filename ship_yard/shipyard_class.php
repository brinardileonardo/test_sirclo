<?php
	abstract class ship {
		private $namaKapal;
		private $kodeKapal;
		
		private $jenisMesin;
		private $bahanBakar;

		private $tahunKeluaran;
		var $kecepatanKapal;

		public function setNamakapal($namaKapal) {
			$this->namaKapal = $namaKapal;
		}
		
		public function setKodekapal($kodeKapal) {
			$this->kodeKapal = $kodeKapal;
		}

		public function setJenismesin($jenisMesin) {
			$this->jenisMesin = $jenisMesin;
		}

		public function setBahanbakar($bahanBakar) {
			$this->bahanBakar = $bahanBakar;
		}

		public function setTahunProduksi($tahunKeluaran) {
			$this->tahunKeluaran = $tahunKeluaran;
		}
		
		public function setKecepatan($kecepatanKapal) {
			$this->kecepatanKapal = $kecepatanKapal;
		}	

		public function getNamakapal() {
			return $this->namaKapal;
		}

		public function getKodekapal() {
			return $this->kodeKapal;
		}

		public function getJenismesin() {
			return $this->jenisMesin;
		}

		public function getBahanbakar() {
			return $this->bahanBakar;
		}
		
		public function getTahunproduksi() {
			return $this->tahunKeluaran;
		}

		public function getKecepatan() {
			return $this->kecepatanKapal;
		}

		public function infoKapal() {
			echo "Nama Kapal: ".$this->namaKapal."<br/>";
			echo "Tahun Produksi: ".$this->tahunKeluaran."<br/>";
			echo "Kode Kapal: ".$this->kodeKapal."<br/>";
			echo "Tipe mesin digunakan: ".$this->jenisMesin."<br/>";
			echo "Bahan bakar digunakan: ".$this->bahanBakar."<br/>";
			echo "<br/>";
		}

		abstract public function maju($kecepatanKapal);
	}

	class perahu_motor extends ship {
		private $crew;
		
		public function perahu_motor($crew, $namaKapal, $kodeKapal, $jenisMesin, $bahanBakar, $tahunKeluaran){
		    $this->setNahkoda($crew);
		    $this->setNamakapal($namaKapal);
		    $this->setKodekapal($kodeKapal);
		    $this->setJenismesin($jenisMesin);
			$this->setBahanbakar($bahanBakar);
			$this->setTahunProduksi($tahunKeluaran);
		}

		public function maju($kecepatanKapal) {
			echo "Kapal Motor ".$this->getNamakapal()." bergerak dengan max kecepatan ".$kecepatanKapal." km/jam<br/>";
			$this->setKecepatan($kecepatanKapal);
		}
		
		public function setNahkoda($crew) {
			$this->crew = $crew;
		}
		
		public function getNahkoda() {
			return $this->crew;
		}
		
		public function detail() {
			echo "Nama Nahkoda : ".$this->crew."<br/>";
			$this->infoKapal();
		}
	}

	class perahu_layar extends ship {
		private $crew;
		
		public function perahu_layar($crew, $namaKapal, $kodeKapal, $jenisMesin, $bahanBakar, $tahunKeluaran){
		    $this->setNahkoda($crew);
		    $this->setNamakapal($namaKapal);
		    $this->setKodekapal($kodeKapal);
		    $this->setJenismesin($jenisMesin);
			$this->setBahanbakar($bahanBakar);
			$this->setTahunProduksi($tahunKeluaran);
		}

		public function maju($kecepatanKapal) {
			echo "Kapal Layar ".$this->getNamakapal()." bergerak dengan max kecepatan ".$kecepatanKapal." km/jam<br/>";
			$this->setKecepatan($kecepatanKapal);
		}
		
		public function setNahkoda($crew) {
			$this->crew = $crew;
		}
		
		public function getNahkoda() {
			return $this->crew;
		}
		
		public function detail() {
			echo "Nama Nahkoda : ".$this->crew."<br/>";
			$this->infoKapal();
		}
	}

	class kapal_pesiar extends ship {
		private $crew;
		
		public function kapal_pesiar($crew, $namaKapal, $kodeKapal, $jenisMesin, $bahanBakar, $tahunKeluaran){
		    $this->setNahkoda($crew);
		    $this->setNamakapal($namaKapal);
		    $this->setKodekapal($kodeKapal);
		    $this->setJenismesin($jenisMesin);
			$this->setBahanbakar($bahanBakar);
			$this->setTahunProduksi($tahunKeluaran);
		}

		public function maju($kecepatanKapal) {
			echo "Kapal Pesiar ".$this->getNamakapal()." bergerak dengan max kecepatan ".$kecepatanKapal." km/jam<br/>";
			$this->setKecepatan($kecepatanKapal);
		}
		
		public function setNahkoda($crew) {
			$this->crew = $crew;
		}
		
		public function getNahkoda() {
			return $this->crew;
		}
		
		public function detail() {
			echo "Nama Nahkoda : ".$this->crew."<br/>";
			$this->infoKapal();
		}
	}