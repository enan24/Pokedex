<!DOCTYPE html>
<html>
<head>
	<title>PokedexSearch</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Encuentra a tu Pokemon!</h1>
		<form action="pokedex.php" method="GET">
			<div class="row">
   				<div class="col">
   					<input type="text" name="whoisthatpokemon" class="form-control" placeholder="Ingrese nombre del pokemon">
   				</div>
  			    <div class="col">
        			<input type="submit" name="buscar" value="Buscar" class="btn btn-primary">
    			</div>
    		</div>
		</form>
	</div>
</body>
</html>
