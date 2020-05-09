<?php include("menu.php");?>

<div>
    <img src="./Photos/pauline-2.jpg" id="photo_home" class="responsive" alt="Portrait Louvre Paris Hiver"/>
</div>

<div>
    <h3>CONTACT</h3>
    <p id="italique">Si mon travail vous plaît, n'hésitez pas à me le dire !</p>

    <p id="email">Email</p>
    <p id="email"><a href="mailto:contact@aliasphotography.fr" id="link_email">contact@aliasphotography.fr</a></p>
</div>

<!-- FORMULAIRE DE CONTACT -->
<div id="formulaire_contact">
    <form method="post" action="traitement_formulaire.php">
        <fieldset><legend>FORMULAIRE DE CONTACT</legend>
                <p><label for="nom">Votre nom</label><br/><input type="text" id="nom" name="nom" /></p>
                <p><label for="email">Votre email</label><br/><input type="text" id="email" name="email" /></p>
        
                <p><label for="objet">Sujet</label><br/><input type="text" id="objet" name="objet" /></p>
                <p><label for="message">Votre message</label><br/><textarea id="message" name="message" cols="30" rows="8"></textarea></p>
        
            <div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer le formulaire !" /></div>
        </fieldset>
    </form>
</div>

<?php include("footer.php");?>