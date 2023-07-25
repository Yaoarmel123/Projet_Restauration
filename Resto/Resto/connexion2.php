<?php
$host='localhost';
$dbname='restauration';
$user='root';
$pwd='';
try{
    $newBD=new PDO('mysql:host=$host;dbname=$dbname',$user,$pwd);
    echo "Connexion etablie";
    /*$access=new PDO("mysql:host=localhost;dbname=restauration;charset=utf8", "root", "");
    echo "Connexion etablie";
    $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);*/
}catch(PDOException $e){
    die('Erreur :'.$e->getMessage());
}
if (isset($_POST['Nom'])&&(isset($_POST['email'])&&(isset($_POST['message'])){

    $insertion $dbname->prepare('INSERT INTO restoih VALUES(NULL,:Nom,:email,:message)');
    $insertion->bindValue(':Nom',$_POST['Nom']);
    $insertion->bindValue(':email',$_POST['email']);
    $insertion->bindValue(':email',$_POST['email']);
}else{
    echo "Une variable n'est pas declaree et ou est null ";
}

?>
