<!DOCTYPE html>
<html>
<head>
	<title>belajar array</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h1>belajar array</h1>
<?php 
$mahasiswa = ["husni", "dedi", "bahul" ,"ive","hedri"];


 $prodi =[ 
           [
            "id"=>1,
            "nama"=>"sisfo",
            "kuota"=>58,
            "kaprodi"=>"ilhamsyah"
            ],
            [
            "id"=>2,
            "nama"=>"kelautan",
            "kuota"=>32,
            "kaprodi"=>"nora"
            ],
            [
            "id"=>3,
            "nama"=>"kimia",
            "kuota"=>40,
            "kaprodi"=>"andy"
            ],
            [
            "id"=>4,
            "nama"=>"fisika",
            "kuota"=>25,
            "kaprodi"=>"nurhasanah"
            ],
            [
            "id"=>5,
            "nama"=>"biologi",
            "kuota"=>40,
            "kaprodi"=>"rizalindah"
            ]
 ];
?>
<h2><?php  echo $mahasiswa [0];
           echo "<br>";
           echo $prodi[4]["nama"];

           



?>

<table class="table table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama prodi</th>
            <th>Nama kaprodi</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($prodi as $prd): ?>
        
        <tr>
         <td><?= $prd["id"]; ?></td>
         <td><?= $prd["nama"]; ?></td>
         <td><?= $prd["kaprodi"]; ?></td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>
	
</h2>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>