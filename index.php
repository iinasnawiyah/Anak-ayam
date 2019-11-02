<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>anak ayam</title>
    <style>
    /* membuat warna teks ganjil orange */
    .ganjil{
        color:orange;
    }
    /* membuat warna teks genap biru */
    .genap{
        color:blue;
    }
    </style>
</head>
<body>
    <!--program menghitung anak ayam  -->
    <p>menghitung anak ayam yuhhh... </p>
    <?php 
// $nama="joko";

// if($nama!="joko"){
    // echo "Anda bukan joko";
// } else{
    // echo '<p class="ganjil"> selamat datang '.$nama.'</p>'; //membuat 
// }

//switch ($nama) {
   //case 'joko':
     //   echo "\n cocok";
     //   break;
    
   // default:
        //echo "\n tidak cocok";
       // break;
//}

//deklarasi anak ayam yang akan dihitung
    $anak_ayam=8;
    // menampilkan anak ayam yang akan dihitung 
    echo" tek-kotek-kotek-kotek anak ayam turun $anak_ayam";
//perulangan decrement anak ayam yang mati 
    for ($anak_ayam=8-1; $anak_ayam>=0; $anak_ayam--){
      
       if($anak_ayam%2==1){
        echo'<p class="ganjil"> mati satu tinggal' .$anak_ayam. '</p>';
        }else if($anak_ayam==0){
        echo"<p> mati satu mati semua habis deh anak ayam aku ;( huhuhuh.... </p>";
        }
        else {
        echo'<p class="genap"> mati satu tinggal' .$anak_ayam. '</p>';
        }
   } 
  ?>
</body>
</html>

