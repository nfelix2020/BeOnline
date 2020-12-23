<?php


// function connectionbase(){

$bdServeur='localhost';
$bdUserName='root';
$bdpassword='';
$bdnom='beonline';

$connect= mysqli_connect($bdServeur, $bdUserName, $bdpassword, $bdnom);

//     if($connect){
//         return $connect;
//     }else{
//         die('ERREUR DE CONNEXION');
//     }

// }

// connectionbase();
// echo 'Yes, Reussi!!';

if(isset($_POST['submit'])){

if(!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['ville']) && !empty($_POST['code'])){

    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $ville=$_POST['ville'];
    $code=$_POST['code'];

    $sql="insert into  personnes (Prénom,Nom,Ville,Code) values('$prenom', '$nom', '$ville', '$code')";
    
    $res= mysqli_query($connect, $sql);

        if($res){
        echo "<h2>Merci de nous avoir contacté! Nous reviendrons vers vous très rapidement. A bientôt!</h2>";
        }
        else
        echo "form not submitted";
}else{
    echo "all fields required";
}
} 
?>