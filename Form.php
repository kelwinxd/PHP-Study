<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="justify-items:center; display: grid">
    
<?php 
if(isset($_POST['action'])){
    if($_POST['name'] == 'hack'){die("nao seja um haker!"); }
    
    echo 'Nome: '.$_POST['name'];

    

}else if(isset($_GET['action'])){
    echo 'Get: '.$_GET['name'];
}

if(isset($_POST['valor'])){
    foreach ($_POST['valor'] as $key => $value) {
        echo '<br/>';
        echo $value.', ';
    }
    echo '<br/>';
}




if(isset($_POST['action2'])){
    echo $_FILES['arquivo']['name'];
}
?>



<form action="" method="post"  style="margin-top: 150px">

     <label for="name">Nome</label>
    <input type="text" name="name" id="">
    <br><br>
    <label for="valor">Qual voce prefere?</label>
    <input type="checkbox" name="valor[]" value="Dbz" id="">DBZ
    <input type="checkbox" name="valor[]" value="Naruto" id="">Naruto
    <input type="checkbox" name="valor[]" value="Bleach" id="">Bleach
    
    
    <input type="submit" name="action" value="Enviar">


    </form>

<br><br><br><br><br>
    <form action="" enctype="multipart/form-data" method="post">
<input type="file" name="arquivo" id="arquivo">
<input type="submit" name="action2" value="Enviar">


    </form>
</body>
</html>