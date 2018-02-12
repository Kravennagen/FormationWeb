<?php
include("header.html")
?>
        <p>Formulaire</p>
        <form action="form.php" method="POST">
            <p>Prénom</p><input type="text" name="prenom"/><br/>
            <p>Nom</p><input type="text" name="nom"/><br/>
            <p>Âge</p><input type="number" name="age"/><br/>
            <p>Genre?</p><input type="radio" name="genre" value="Masculin"><label id="couleur">Masculin</label><br/>
            <input type="radio" name="genre" value="Feminin"/><label id="couleur">Feminin</label><br/>
            <p>Qu'est ce que vous préférez manger?</p><input type="checkbox" name="Nourriture" value="Pizza"/><label id="couleur">Pizza</label><br/>
            <input type="checkbox" name="Nourriture" value="Burger"/><label id="couleur">Burger</label><br/>
            <input type="checkbox" name="Nourriture" value="Frites"/><label id="couleur">Frites</label><br/>
            <p>Votre pays?</p><select name="Pays">
                <option value="France">France</option>
                <option value="Allemagne">Allemagne</option>
                <option value="Etat-Unis">Etat-Unis</option>
                <option value="Angleterre">Angleterre</option>
                <option value="Espagne">Espagne</option>
                <option value="Italie">Italie</option>
                <option value="Portugal">Portugal</option>
                <option value="Suisse">Suisse</option>
                <option value="">Chine</option>
            </select><br/>
            <input type="submit"/>
        </form>
<?php
include("footer.html")
?>