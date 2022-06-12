
<?php include "header.php";
include "connexionPdo.php";
$libelle=$_POSt['libelle']; // je recupere le libelle du formulaire

$req=$monPdo->prepare("insert into nationalite(libelle) values(:libelle)");
$req->bindParam(':libelle', $libelle);
$nb=$req->execute();
  
echo '<div class="container mt-5">';

if($nb == 1) {
    echo '<div class="alert alert-success" role="alert">
 La nationalite a bien ete ajoutee
</div> ';
}else{
    echo '<div class="alert alert-danger" role="alert">
 La nationalite n\'a pas bien ete ajoutee
</div> ';
}
?>

<a href="listeNationalites.php" class="btn btn-primary">Revenir a la liste des nationalites</a>



    </div>

 


<?php include "footer.php";

?>