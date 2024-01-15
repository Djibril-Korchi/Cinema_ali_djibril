<?php
$bdd = new PDO('mysql:host=localhost;dbname=dki_cinema;charset=utf8', 'root', '');
$rechercher=$bdd->prepare("SELECT * FROM film WHERE Titre LIKE :t");
$rechercher->execute(array(
   't'=>'%'.$_POST['rechercher'].'%'
));
$recherche = $rechercher->fetchAll();
?>
<table width="100%">
    <tr>
        <td> Affiche </td>  <td>Titre</td>  <td>Auteur</td>
    </tr>


<?php
foreach ($recherche as $element){
    echo "
<tr> 
    <td>
    <a href=''><img src=".$element['Affiche']." width='50%' height='200px'></a>
   </td>
   ". "<td>"  . $element['Titre'] ."</td>
     <td>".$element['Auteur'] ."</td>
</tr> ";

}?>
</table>