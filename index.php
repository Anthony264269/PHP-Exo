<?php
//Partie 1
//Exercice 1
//
//$name = "Anthony";
//echo $name;

//Exercice 2
//$firstName = 'Anthony';
//$lastName = 'Canet';
//$age = 37;
//echo $firstname." ".$lastname." ".$age; 

//Exercice 3
//$km = 1;
//echo $km;
//$km = 3;
//echo $km;
//$km = 125;
//echo $km;

//Exercice 4
//$lettre = "Anthony";
//$nombre = 37;
//$virgule = 37.5;
//$vrai = false;
//echo $lettre . $nombre . $virgule . $vrai;

//Exercice 5
//$nombre = '';
//echo $nombre;
//$nombre = 2;
//echo $nombre;

//Exercice 6
//$name = "Anthony";
//echo "Bonjour"." ".$name." "."comment vas tu ?";

//Exercice 7
//$firstname = 'Anthony';
//$lastname = 'Canet';
//$age = 37;
//echo "Bonjour"." ".$lastname." ".$firstname." "."tu as"." ".$age." "."ans.";

//Exercice 8
//$resultat1 = 3+4;
//$resultat2 = 5*20;
//$resultat3 = 45/5;
//echo $resultat1." ".$resultat2." ".$resultat3;

//Partie 2
//Exercice 1
//$age = 37;
//function age($age){
//    if($age>=18){
//        echo "vous êtes majeur";
//    }
//    else{
//        echo "vous êtes mineur";
//    }
//}
//age($age);

////Exercice 2
//$isEasy = true;
//if($isEasy===true){
//    echo "C'est facile";
//
//}else{
//    echo "C'est difficile";
//}

//Exercice 3
//$age = 37;
//$gender = "Homme";
//if($age >= 18 && $gender === "Homme"){
// echo "Vous êtes un homme et vous êtes majeur";
//}
//elseif($age <= 17 && $gender === "Homme"){
//    echo "Vous êtes un homme et vous êtes mineur";
//}
//elseif($age >= 18 && $gender === "Femme"){
//    echo "Vous êtes une femme et vous êtes majeur";
//}
//elseif($age <= 17 && $gender === "Femme"){
//    echo "Vous êtes une femme et vous êtes mineur";
//}

//Exercice 4
//$ritcher = 1;
//case 1:
//      echo "Micro-séisme impossible à ressentir.";
//break;
//case 2:
//    echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
//break;
//case 3:
//    echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
//break;
//case 4:
//    echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
//break;
//case 5:
//    echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
//break;
//case 6:
//    echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
//break;
//case 7:
//    echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
//break;
//case 8:
//    echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
//break;
//case 9:
//    echo "Séisme capable de tout détruire sur une très vaste zone.";
//break;

//Exercice 5
//if($gender != "Homme"){
//    echo "C'est un développeuse !!!";
//}
//else{
//    echo "C'est une développeur !!!";
//}

//Exercice 6
//$age = 37;
//if($age >= 18){
//    echo "Tu es majeur";
//}else{
//    echo "Tu es mineur";
//}

//Exercice 7
//$isOk = false;
//if($isOk === true){
//    echo "C'est ok !!!";
//}else{
//    echo "C'est pas bon!!!";
//}

//Exercice 8
//$isOk = true;
//
//if($isOk){
//    echo "C'est ok!!";
//}else{
//    echo "C'est pas bon!!";
//}

//Partie 3
//Exercice 1
//for ($mavariable = 0; $mavariable <= 9; $mavariable++)
//{
//    echo $mavariable;
//}

//Exercice 2

//$variable2 = 86;
//
//for($variable1 = 0; $variable1 < 20; $variable1++){
//
//    echo "<p>" . $variable1*$variable2 ."</p>" ;
//
//}

//Exercice 3

//$variable2 = 8;
//for($variable1 = 100; $variable1>10; $variable1--){
//    echo "<p>" . $variable1*$variable2 ."</p>" ;
//}

//Exercice 4

//for($variable1 = 1; $variable1<=10; $variable1=$variable1*1.5)
//echo $variable1." ";

//Exercice 5
//for($variable1 = 1; $variable1<=15; $variable1++){
//    echo $variable1."<p>On arrive presque</p>";
//}

//Exercice 6
//for($variable1=20; $variable1 >= 0; $variable1-=1){
//    echo $variable1."<p>C'est presque bon</p>";
//}

//Exercice 7
//for($variable1=1; $variable1<=100; $variable1+=15){
//    echo $variable1."<p>On tient le bon bout</p>";
//}

//Exercice 8
//for($variable1=200; $variable1>=0; $variable1-=12){
//    echo $variable1."<p>Enfin!!!</p>";
//}

//Partie 4
//Exercice 1
//$vrai1=false;
//$vrai2=false;
//function bol($vr1,$vr2){
//
//echo $vr1=true;
//echo $vr2=true;  
//}
//bol($vrai1, $vrai2);

//Exercice 2

//function reto($var1){
//    
//       return $var1;
//     
//}
//echo reto("salut");

//Exercice 3

//function concatenation($a,$b){
//    echo $a." ".$b;
//}
//concatenation("bonjour","salut");

//Exercice 4
//function compare($a,$b){
//    if($a>$b){
//        echo "Le premier nombre est plus grand";
//
//    }elseif($a<$b){
//        echo "Le premier nombre est plus petit";
//
//    }elseif($a===$b){
//        echo "Les deux nombres sont identiques";
//    }
//}
//compare();

//Exercice 5
//function parametre($a,$b){
//    echo $a . $b;
//} 
//echo parametre(37,"salut")

//Exercice 6
//function npa($nom,$prenom,$age){
//echo "Bonjour " .$nom . $prenom ."tu as". $age;
//}
//echo npa("Canet ", "Anthony ", 37)

//Exercice 7
//function ag($a, $b){
//    if($a>=18 && $b==="homme"){
//        echo "Vous êtes un homme et vous êtes majeur";
//    }elseif($a<18 && $b==="homme"){
//        echo "Vous êtes un homme et vous êtes mineur";
//    }elseif($a>=18 && $b==="femme"){
//        echo "Vous êtes une femme et vous êtes majeur";
//    }elseif($a<18 && $b==="femme"){
//        echo "Vous êtes une femme et vous êtes mineur";
//    }
//}
//ag(37,"homme")

//Exercice 8
//function addition($a, $b, $c){
//    echo $a + $b + $c;
//}
//addition(1,2,4)

//Partie 5
//Exercice 1
//$tableaus=["janvier" , "fevrier" , "mars" , "avril" , "mai" , "juin" , "juillet" , "aout" , "septembre" , "octobre" , "novembre" , "decembre"];

//Exercice 2
//echo $tableaus[2];

//Exercice 3
//echo $tableaus[5];

//Exercice 4
//$tableaus[7]="août";
//var_dump ($tableaus);

//Exercice 5
//$recipes = [

// key  ||value
 //  02 => 'Aisne',
 //   59 => 'Nord',
 //   60 => 'Oise',
 //   62 => 'Pas-de-Calais',
 //   80 => 'Somme',
//];
//
//Exercice 6
//echo $recipes[59];

//Exercice 7
//$recipes[51]="La Marne";
////var_dump ($recipes)
//
//Exercice 8
//foreach($recipes as $recipe){
//echo "<p>" . $recipe . "</p>";
//}
//Exercice 9
//print_r($recipes);//pour afficher le tableau ou var_dump($recipes)

//Exercice 10

//foreach($recipes as $key => $value) {
    
//}
//Exercice BONUS
$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);
echo dico_count($dico)




























































































































?>