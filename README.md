# Formation Web

## Introduction
Le but de ce projet est de fournir un projet Web basique afin de découvrir les technologies web classiques : HTML / CSS / PHP / SQL. La mise en place des différents composants se fait en suivant les étapes ci-dessous.

## But du projet
Le but du projet est de créer une application web qui permet de créer, lister, modifier et supprimer des utilisateurs.

## Etapes
1. Installer MAMP (https://www.mamp.info/en/) ou XAMPP (https://www.apachefriends.org/fr/index.html). Ce sont 2 logiciels qui fournissent une suite de logiciels nécéssaires pour faire du développement web :
* Un serveur apache qui écoute les requêtes faites au serveur et appelle le code correspondant sur le serveur
* Un serveur MySQL qui permet la mise en place de bases de données

2. Une fois installé, il faut lancer les 2 serveurs (Apache et MySQL). Cela est généralement accessible via une unique applicaiton qui lance les 2 serveurs. Il faut configurer MAMP (ou XAMPP) pour spécifier les différents ports sur lequels sont lancés les serveurs et le dossier dans lequel sont situés les fichiers de code. Je vous conseille de laisser les réglages par défaut ( Apaches: port 80, MySQL: port 3306, et pour le dossier contenant le code, créez un nouveau dossier vide)

3. Pour débuter, commencez par créer un fichier `index.html` . HTML est un langage de mise en forme de données qui permet d'expliquer au navigateur ce que la page contient (par exemple : des titres, des paragraphes etc) qui fonctionne grâce à des balises qui décrivent le contenu de la page. Vous pouver remplir ce fichier avec le code suivant par exemple :
```
<!DOCTYPE html>
<html>
<head>
<title>Ma première page</title>
</head>
<body>
<div>
<h1>Ceci est un titre</h1>
<h2>Ceci est un sous-titre</h2>
<p>Ceci est un paragraphe</p>
<a href="">Ceci est un lien</a>
<ul>
<li>Ceci est le premier élément d'une liste</li>
<li>Ceci est le deuxième élément d'une liste</li>
</ul>
<input type="text" placeholder="Ceci est une entrée utilisateur de type text">
</div>
</body>
</html>
```

Une fois que votre fichier est sauvegardé, vous pouvez vous rendre à l'adresse `http://localhost/index.html` et vous observerez alors une page contenant différents composants (textes, titres, entrées utilisateurs etc). Familiarisez vous avec ces différents composants ( et découvrez-en d'autres ici : https://www.w3schools.com/tags/default.asp) et créez un formulaire qui permettre de créer un utilisateur avec ces attributs : Nom, Prénom, Age, Sexe, Pays d'origine et ce qu'il préfère manger.  Si vous avez des difficultés, vous pouvez vous aider du fichier `index.php` qui contient le formulaire tel qu'attendu. Pour chcune des entrées utilisateurs, il est important de spécifier un nom (attribut `name` des tags HTML) car c'est grâce au nom que nous retrouverons nos données à l'étape suivante.

4. Une fois que vous avez créée un formulaire, vous pouvez créer un fichier PHP ( `form.php`  par exemple) qui va recevoir les données du formulaire et les traiter. Pour relier le formulaire au fichier `form.php`, il suffit d'ajouter les attributs `action="form.php"`  et `method="POST"` au tag `form` de notre fichier `index.html`. Une fois que cela est fait, nous allons pouvoir les lire les valeurs des champs du formulaire de cette façon : `$prenom = $_POST["prenom"]`.

5. Une fois que cela est fait, vous pouvez ouvrir PHPMyAdmin (http://localhost/MAMP/ sur MAMP), page web grâce à laquelle vous allez pouvoir administrer votre base de données qui va contenir tous les utilisateurs. Vous pouvez créer une base de données ( https://www.siteground.com/tutorials/phpmyadmin/create-populate-tables/ ) et vous pouvez créer une table contenant les différentes informations : Nom (VARCHAR), Prénom (VARCHAR), Age (INT), Sexe (VARCHAR), Pays (VARCHAR). Pour vous familiariser avec le langage SQL (qui permet d'échanger avec la base de données), vous pouvez vous rendre dans la console SQL (onglet SQL de PHPMyAdmin) et rentrer des commandes en vous aidant de ce tutoriel par exemple : https://www.w3schools.com/sql/. 
