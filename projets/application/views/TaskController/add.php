<html>
	<head>
		<style>
	input[type=text] {
  padding:10px;
  border:0;
  width:100%;
  box-shadow:0 0 15px 4px lightblue;
  border-radius:30px;

}
#p{
		border-radius:90px;
		margin:auto;
		width:200px;
	}

input[type=date] {
  padding:10px;
  border-radius:30px;
  border:0;
  box-shadow:0 0 15px 4px lightblue;
}
	#p{
		border-radius:90px;
		margin:auto;
		width:200px;
	}
</style>


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	</head>
	<body>
	<h1 class="text-center  mt-5 mb-2 py-3">Ajouter une Tache</h1>

<div class="container">
	<div class="row">
		<div class="col-8 mx-auto">
			<form class="p-5 border mb-5" method="POST" action="TaskController/add">
				<div class="form-group">
					<label for="name">Nom</label>
					<input type="text" hidden name="projetID" value=" <?php echo $this->projetId; ?>"><br>

					<input type="text" required name="nom" class="form-control" id="name" >
				</div>
				<div class="form-group">
					<label for="price">Date Debut</label>
					<input type="date" required class="form-control" name="debut" id="price">
				</div>
				<div class="form-group">
					<label for="price">Date Fin</label>
					<input type="date" required class="form-control" name="fin" id="price">
				</div>

				<button type="submit"  id=p class="btn btn-primary">Envoyer</button>
			</form>
						
		</div>
	</div>
</div>
	</body>

</html>