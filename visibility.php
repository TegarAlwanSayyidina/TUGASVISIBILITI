<?php

    class Spesies{
        
        public $nama;
        private $namasekolah;
        protected $tempattanggallahir;

        // method untuk setter = menyimpan data
        public function setNama($data){
            $this->nama = $data;
        }

        public function setNamaSekolah($data){
            $this->namasekolah = $data;
        }

        public function settempattanggallahir($data){
            $this->tempattanggallahir = $data;
        }

        // method untuk getter = mengabil data dari method setter
        public function getNama(){
            return $this->nama;
        }

        public function getNamaSekolah(){
            return $this->namasekolah;
        }

        public function getTempatTanggalLahir(){
            return $this->tempattanggallahir;
        }

    }

    $kelas1 = new Spesies;
    $kelas1->setNama("Tegar Alwan Sayyidina HK");
    $kelas1->setNamaSekolah("SMK WIKRAMA BOGOR");
    $kelas1->setTempatTanggalLahir("Bogor 15 Juni 2007");

    // menampilkan isi dari setter yang diambil menggunakan getter
    echo "Nama Saya Adalah " . $kelas1->getNama();
    echo "<br>";
    echo "Nama Sekolah Saya Adalah " . $kelas1->getNamaSekolah();
    echo "<br>";
    echo "Dan Tempat Tanggal Lahir Saya Adalah" . $kelas1->getTempatTanggalLahir();
?>