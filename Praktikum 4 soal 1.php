<!-- Nama  : Risha Kurnia Fitri -->
<!-- NIM   : 20051397009 -->
<!-- Kelas : D4 Manajemen Informatika - 2020A -->

<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="No 1.css">
    <title>Praktikum 4</title>
</head>
<body>
<div class="container">
<h2>Soal 1</h2>
<!-- Program PHP -->
<?php

class Orang{
    protected $nama,$umur;

    public function __construct($nama,$umur){
    $this->nama = $nama;
    $this->umur = $umur;
    }
}

class Dosen extends Orang{
    private $nip;
    
    public function __construct($nama, $umur, $nip){
    $this->nip = $nip;
    parent::__construct($nama, $umur);    
    }

    public function hasil(){
        return $this->nama . ' berumur ' . $this->umur. ' dengan NIP ' . $this->nip;
    }
}

$dosen1 = new Dosen('Johnny', 30, 19950209);
$dosen2 = new Dosen('Atuy', 28, 19951026);
$dosen3 = new Dosen('Janesh', 26, 19970214);

echo $dosen1->hasil();
echo '<br> <br>';
echo $dosen2->hasil();
echo '<br> <br>';
echo $dosen3->hasil();
echo '<br> <br>';

?>
<!-- Akhir Program PHP -->
</div>
</body>
</html>