<?php 
class latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang... Selamat Belajar Web Programming";
    }


    public function penjumlahan($n1, $n2)
    {
        $this -> load -> model('model_latihan1.php');
        $hasil = $this -> model_latihan1 -> jumlah($n1, $n2);
        echo "Hasil penjumlahan dari". $n1 ." + ". $n2 ." = ". $hasil;
    }
}
?>