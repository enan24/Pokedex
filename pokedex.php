<!DOCTYPE html>
<html>
<head>
	<title>Pokedex</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<?php

	$pokemons = array(
		'pikachu' =>
					 ['nombre' => 'Pikachu',
					  'ataque' => 'Impactrueno',
					  'imagen' => 'imagesPokemons/pikachu.png',
				   	  'imagenTipo' => 'imagesTipos/electrico.png'],
		'charmander' =>
					 ['nombre' => 'Charmander',
					  'ataque' => 'Ascuas',
					  'imagen' => 'imagesPokemons/charmander.png',
					  'imagenTipo' => 'imagesTipos/fuego.png'],
		'bulbasaur' =>
					 ['nombre' => 'Bulbasaur ',
					  'ataque' => 'Látigo cepa',
					  'imagen' => 'imagesPokemons/bulbasaur.png',
					  'imagenTipo' => 'imagesTipos/planta.png'],
		'squirtle' =>
					 ['nombre' => 'Squirtle',
					  'ataque' => 'Chorro de agua',
					  'imagen' => 'imagesPokemons/squirtle.png',
					  'imagenTipo' => 'imagesTipos/agua.png'],
		'jigglypuff' =>
					 ['nombre' => 'Jigglypuff',
					  'ataque' => 'Canto',
					  'imagen' => 'imagesPokemons/Jigglypuff.png',
					  'imagenTipo' => 'imagesTipos/hada.png'],
		'clefairy' =>
					 ['nombre' => 'Clefairy',
					  'ataque' => 'Doble bofetón',
					  'imagen' => 'imagesPokemons/clefairy.png',
					  'imagenTipo' => 'imagesTipos/hada.png'],
		'butterfree' =>
					 ['nombre' => 'Butterfree',
					  'ataque' => 'Tornado',
					  'imagen' => 'imagesPokemons/butterfree.png',
					  'imagenTipo' => 'imagesTipos/bicho.png'],
		'caterpie' =>
					 ['nombre' => 'Caterpie',
					  'ataque' => 'Picadura',
					  'imagen' => 'imagesPokemons/caterpie.png',
					  'imagenTipo' => 'imagesTipos/bicho.png']
				   	);


	if (!isset($_GET['whoisthatpokemon']) || empty($_GET['whoisthatpokemon'])) {
		foreach ($pokemons as $key => $pokemon) {
			echo "<img src=". $pokemon['imagen'] .">";
			echo "<h4>" . $pokemon['nombre'] . "</h4>";
			echo "<h6>" . $pokemon['ataque'] . "</h6>";
			echo "<img src=". $pokemon['imagenTipo'] .">";
		}
	} else {
		$pokemonB = $_GET['whoisthatpokemon'];
		$flag = false;

		foreach ($pokemons as $key => $pokemon) {
			if ($key == strtolower($pokemonB)) {
				$flag = true;
			}
		}

		if ($flag == true) {
			echo "<img src=". $pokemons[$pokemonB]['imagen'] .">";
			echo "<h4>" . $pokemons[$pokemonB]['nombre'] . "</h4>";
			echo "<h6>" . $pokemons[$pokemonB]['ataque'] . "</h6>";
			echo "<img src=". $pokemons[$pokemonB]['imagenTipo'] .">";
		} else {
			echo "<h1>No se encontro el Pokemon</h1>";
		}
	}

?>
</body>
</html>
