<?php
require('pdf/fpdf.php');
require "config/database.php";
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$sql = "SELECT * FROM tb_inventori";
$query = mysqli_query($koneksi,$sql);
$no=0;
$cek = mysqli_num_rows($query);
$after = 0;
$after2 = 0;
$bagi = 1;
if ($cek>0){
while ($row = mysqli_fetch_array($query)){
    $pdf->Image("https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=".$row['id'],$after2,$after,50,50,'PNG');
    
    $after2 = $after2 + 50;
    if($no/3==$bagi){
       
        $after = $after + 50;
        $after2 = 0;
        $bagi++;
        $after2 = $after2 + 0;
    }
   
    
    $no++;
    
}
}

$pdf->Output();
?>