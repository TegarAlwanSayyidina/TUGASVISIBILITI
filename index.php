<?php

    class hewan{
        public $nama;
        public $jenisHewan;
        public function tampilNama($nama) {
            echo "Nama hewan? : ".$this->$nama = $nama;
        }
    }

    $hewan1 = new hewan();
    $hewan1->tampilNama("Anjing");
    echo "<br>";
    $hewan2 = new hewan();
    $hewan2->tampilNama("Domba");

?>