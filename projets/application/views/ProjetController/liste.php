<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<style>
	#p{
		border-radius:90px;
		margin-left: 40%;
		width:200px;
	}
	hr {
  border: 3px solid lightsteelblue;
  width: 64%;
}
</style>
</head>
<body>


<h1 class="text-center  my-5 py-3"><font color=lightskyblue><b>Tous Les Projets</b> </font></h1>
<hr >
<br>
<div class="container row"></div>
    <div class="col-8 mx-12 mx-auto">
    <table class="table">
                <thead class="table-primary">
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">Titre</th>
                    <th scope="col" style="width:150px;">Date Début</th>
                    <th scope="col" style="width:150px;">Date Fin</th>
                    <th scope="col" style="width:200px;">Description</th>
                    <th scope="col" colspan="3">Action</th>
                    </tr>
                </thead>
                <tbody>
					<?php
$i=1;
foreach( $this->projets as $projet){
echo '<tr><td>'.$i++.'</td><td>'.$projet['Titre'].'</td><td>'.$projet['DatDebut'].'</td><td>'.$projet['DateFin'].'</td><td>'.$projet['Description'].'</td></td>
      <td><a  style="color:#800080;" title="Supprimer Le projet" href="../projetController/delete/'.$projet['Id'].'"><i class="fa-solid fa-trash"></i></td>
	  <td><a style="color:#00CED1;" title="Planifier Le projet" href="../TaskController/add/'.$projet['Id'].'"><i class="fa fa-tasks"></i></td>
	  <td><a style="color:#00FF00;" title="Details du Projet" href="../ProjetController/details/'.$projet['Id'].'"><i class="fa-solid fa-circle-info"></i></td>
	  </tr>';
}
echo '</table>';
?>
	
	</body>
	<a href="../projetController/add" title="Ajouter Nouveau Projet"><button type="button" id="p" class="btn btn-info"><i class="fa-solid fa-plus"></i>  Nouveau  projet</button></a>

</html>