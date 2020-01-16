<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="src/style/main.css">
		<link rel="stylesheet" media="screen and (max-width: 1280px)" href="petite_resolution.css" />
		<title>NMGS - Pokemon</title>
	</head>

<!-- Commentaire HTML-->

	<body>

<!-- ------------------------------------------------------------------------------------------------------------------ -->

		<h1 id="top">ORGANISATION</h1>

		<h1>Titre 1</h1>
		<h2>Titre 2 jusqu'à 6</h2>
		<p>Paragraphe <br/> </p>
		<p>
			<em>mise en valeur</em> <br/>
			<strong>important</strong><br/>
			<mark>faire resortir</mark><br/><br/>

			<ul>
				<li>Liste</li>
				<li>Liste</li>
				<li>Liste</li>
			</ul>

			<ol>
				<li>Liste</li>
				<li>Liste</li>
				<li>Liste</li>
			</ol>

		</p>

<!-- ------------------------------------------------------------------------------------------------------------------ -->

		<h1>LES LIENS</h1>

		<p>
			<a href="http://google.ca" title="Pour une grosse recherche" target="_blank">Google</a> <br/>
			<a href="index.php">Vers l'accueil</a> <br/>
			<a href="html.php#top">Vers le top</a> <br/>
			<a href="mailto:maxverville14@gmail.com">M'écrire directement</a> <br/>
		</p>

<!-- ------------------------------------------------------------------------------------------------------------------ -->

		<h1>LES IMAGES</h1>

		<p>
			<a href="src/img/bulbasaur.jpg">
				<img src="src/img/bulbasaur_mini.jpg" alt="Bulbasaur" title="Le tout premier" />
			</a>
		</p>

		<p>Les trois starter d'origine</p>

		<figure>
			<img src="src/img/bulbasaur.jpg" alt="Bulbasaur" />
			<img src="src/img/squirtle.jpg" alt="Squirtle" />
			<img src="src/img/charmander.jpg" alt="Charmander" />

			<figcaption>Les 3 starters</figcaption>
		</figure>

<!-- ------------------------------------------------------------------------------------------------------------------ -->

		<h1>Les balises universelles</h1>

		<p>La balise <span>span</span> qui est in-line</p> <br/>

		<div>
			<h3>La balise div</h3>
			<p>La balise pour appliquer sur un block</p>
		</div>

<!-- ------------------------------------------------------------------------------------------------------------------ -->

		<h1>Les tableaux simple</h1>

		<p>
			<table>
				<caption>Membre de la famille</caption>

				<tr>
					<th>Prénom</th>
					<th>Nom</th>
					<th>Age</th>
				</tr>
				<tr>
					<td>Maxime</td>
					<td>Verville</td>
					<td>33ans</td>
				</tr>
				<tr>
					<td>Annie</td>
					<td>Gagnon</td>
					<td>35ans</td>
				</tr>
				<tr>
					<td>Nathan</td>
					<td>Lefebvre-Gagnon</td>
					<td>13ans</td>
				</tr>
			</table>
		</p>

<!-- ------------------------------------------------------------------------------------------------------------------ -->

		<h1>Les tableaux complexes</h1>

		<p>
			<table>
   				<caption>Passagers du vol 377</caption>

   				<thead> <!-- En-tête du tableau -->
       				<tr>
          				<th>Nom</th>
           				<th>Âge</th>
           				<th>Pays</th>
       				</tr>
   				</thead>

   				<tfoot> <!-- Pied de tableau -->
       				<tr>
           				<th>Nom</th>
           				<th>Âge</th>
           				<th>Pays</th>
       				</tr>
   				</tfoot>

   				<tbody> <!-- Corps du tableau -->
       				<tr>
           				<td>Carmen</td>
           				<td>33 ans</td>
           				<td>Espagne</td>
       				</tr>
       				<tr>
           				<td>Michelle</td>
           				<td>26 ans</td>
           				<td>États-Unis</td>
       				</tr>
       				<tr>
           				<td>François</td>
           				<td>43 ans</td>
           				<td>France</td>
       				</tr>
       				<tr>
           				<td>Martine</td>
           				<td>34 ans</td>
           				<td>France</td>
       				</tr>
       				<tr>
           				<td>Jonathan</td>
           				<td>13 ans</td>
           				<td>Australie</td>
       				</tr>
       				<tr>
           				<td>Xu</td>
           				<td>19 ans</td>
           				<td>Chine</td>
       				</tr>
   				</tbody>
			</table>
		</p>

<!-- ------------------------------------------------------------------------------------------------------------------ -->

	<h1>Les tableaux - Fusion</h1>

	<p>
		<table>
      		<tr>
       			<th>Titre du film</th>
       			<th>Pour enfants ?</th>
       			<th>Pour adolescents ?</th>
   			</tr>
   			<tr>
       			<td>Massacre à la tronçonneuse</td>
       			<td >Non, trop violent</td>
       			<td>Oui</td>
   			</tr>
   			<tr>
       			<td>Les bisounours font du ski</td>
       			<td>Oui, adapté</td>
       			<td>Pas assez violent...</td>
   			</tr>
   			<tr>
       			<td>Lucky Luke, seul contre tous</td>
       			<td colspan="2">Pour toute la famille !</td>
   			</tr>
		</table>
	</p>

	<p>
		<table>
   			<tr>
       			<th>Titre du film</th>
      			<td>Massacre à la tronçonneuse</td>
       			<td>Les bisounours font du ski</td>
       			<td>Lucky Luke, seul contre tous</td>
   			</tr>
   			<tr>
       			<th>Pour enfants ?</th>
       			<td>Non, trop violent</td>
       			<td>Oui, adapté</td>
       			<td rowspan="2">Pour toute la famille !</td>
   			</tr>
   			<tr>
       			<th>Pour adolescents ?</th>
       			<td>Oui</td>
       			<td>Pas assez violent...</td>
   			</tr>
		</table>
	</p>

<!-- ------------------------------------------------------------------------------------------------------------------ -->

	<h1>Formulaire</h1>

	<form method="post" action="script.php"> <!-- method="get" -->
		<p>
			<label for="texte1">Texte une ligne :</label>
			<input type="text" name="texte1" id="texte1" placeholder="texte d'exemple" size="30" maxlength="10" />
			<br />

			<label for="pass">Mot de passe :</label>
			<input type="password" name="pass" id="pass" size="20" />
			<br />

			<label for="texte-multi">Texte multi-ligne :</label>
			<textarea name="texte-multi" id="texte-multi" rows="10" cols="50">Ici le texte par defaut</textarea>
			<br />

			<label for="courriel">courriel :</label>
			<input type="email" name="courriel" id="courriel" />
			<br />

			<label for="liens-web">liens web :</label>
			<input type="url" name="liens-web" id="liens-web" />
			<br />

			<label for="telephone">telephone :</label>
			<input type="tel" name="telephone" id="telephone" />
			<br />

			<label for="nombre">nombre :</label>
			<input type="number" name="nombre" id="nombre" min="5" max="100" step="5" />
			<br />

			<label for="curseur">curseur :</label>
			<input type="range" name="curseur" id="curseur" min="5" max="100" step="5" />
			<br />

			<label for="couleur">couleur :</label>
			<input type="color" name="couleur" id="couleur" />
			<br />

			<label for="date">date :</label>
			<input type="date" name="date" id="date" />
			<br />

			<label for="heure">heure :</label>
			<input type="time" name="heure" id="heure" />
			<br />

			<label for="semaine">semaine :</label>
			<input type="week" name="semaine" id="semaine" />
			<br />

			<label for="mois">mois :</label>
			<input type="month" name="mois" id="mois" />
			<br />

			<label for="dateheure-dec">date et heure avec decalage :</label>
			<input type="datetime" name="dateheure-dec" id="dateheure-dec" />
			<br />

			<label for="dateheure">date et heure sans decalage :</label>
			<input type="datetime-local" name="dateheure" id="dateheure" />
			<br />

			<label for="recherche">recherche :</label>
			<input type="search" name="recherche" id="recherche" />
			<br /><br />

			<input type="checkbox" name="option1" id="option1" checked /><label for="option1">Option 1</label><br />
			<input type="checkbox" name="option2" id="option2" /><label for="option2">Option 2</label><br />
			<input type="checkbox" name="option3" id="option3" /><label for="option3">Option 3</label><br />
			<br />

			<input type="radio" name="choix" value="choix1" id="choix1" checked /><label for="choix1">Choix1</label><br />
			<input type="radio" name="choix" value="choix2" id="choix2" /><label for="choix2">Choix2</label><br />
			<input type="radio" name="choix" value="choix3" id="choix3" /><label for="choix3">Choix3</label><br />
			<br />

			<label for="liste">Exemple de liste</label><br />
			<select name="liste" id="liste">
				<optgroup label="Groupe1">
					<option value="1-1">1</option>
					<option value="1-2">2</option>
					<option value="1-3">3</option>
				</optgroup>
				<optgroup label="Groupe2">
					<option value="2-1">1</option>
					<option value="2-2">2</option>
					<option value="2-3">3</option>
				</optgroup>
				<optgroup label="Groupe3">
					<option value="3-1">1</option>
					<option value="3-2">2</option>
					<option value="3-3">3</option>
				</optgroup>
			</select>

			<fieldset>
				<legend>Groupe de formulaire</legend>
					<label for="texteauto">Texte en autofocus :</label>
					<input type="text" name="texteauto" id="texteauto" autofocus="" />
					<br />
					<label for="texterequis">Texte requis :</label>
					<input type="text" name="texterequis" id="texterequis" required="" />
					<br />
			</fieldset>

			<input type="submit" name="soumission" value="mot custom"><br />
			<input type="reset" name="reinitialisation"><br />
			<input type="image" src="src/img/bulbasaur_mini.jpg" name="soumission-image"><br />
			<input type="button" name="bouton-javascript"><br />
		</p>
	</form>

<!-- ------------------------------------------------------------------------------------------------------------------ -->

	<h1>Vidéo et audio</h1>	

	<p>
		<audio src="hype_home.mp3" controls></audio>
	</p>

	<p>
		<video src="sintel.webm"></video>
	</p>

	</body>
</html>