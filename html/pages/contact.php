<?php

require_once('../inc/init.php');
require_once('../inc/header.php');
require_once('../inc/nav.php');

if($_POST)
{
    // if(empty($_POST['Prenom']))
    // {
    //  $errorPseudo = "<class=''>Veuillez saisir un Pseudo
    // </small>";
    // $cool = true;
    // }


if(empty($_POST['email']))
    {
        
        $errorEmail = "<class=''>Merci de saisir une adresse Email.</small>";

        $cool = true;
    }
elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
    {
       

        $errorEmail = "<class=''>Merci de vérifier votre adresse mail svp.</small>";
        $cool = true;
    }
// echo '<pre>'; print_r($_POST); echo '</pre>';

    if(isset($_POST['commentaire'])){
    $entete  = 'MIME-Version: 1.0' . "\r\n";
    $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $entete .= 'From: ' . $_POST['email'] . "\r\n";

    $message = '<h1>Message envoyé depuis Maaja.fr</h1>
    <p><b>Nom : </b>' . $_POST['nom'] . '<br>
    <b>Prénom : </b>' . $_POST['prenom'] . '<br>
    <p><b>Téléphone : </b>' . $_POST['tel'] . '<br>
    <p><b>Email : </b>' . $_POST['email'] . '<br>
    <p><b>Presta : </b>' . $_POST['presta_1'] . '<br>
    <b>Presta : </b>' . $_POST['presta_2'] . '<br>
    <b>Presta : </b>' . $_POST['presta_3'] . '<br>
    <b>Presta : </b>' . $_POST['presta_4'] . '<br>
    <b>Presta : </b>' . $_POST['presta_5'] . '<br>
    <p><b>Demande : </b>' . htmlspecialchars($_POST['commentaire']) . '</p>';

    $retour = mail('pinodonometa@gmail.com', 'PinoTyR', $message, $entete);
//
    

$cool = "<div class='center'><p class='center fond'> $_POST[prenom] $_POST[nom] ! Votre demande est bien envoyée ! </p></div>";
    }

}

?>

<!-- contact -->
<section id="contact" class="contact"> 

<div class="contactForm">
    <div class="">
        <h2 class="title2 title2__bottop">Contactez-moi</h2>
    </div>
    <?php
    // if($retour)
    //     echo '<p class="red">Votre message a bien été envoyé.</p>';

    ?>
    <?php if(isset($cool)) echo $cool; ?>
        
        <form method="post" class="formu"> 
            <div class="formu__content">
                <div class="formu__block__espace">
                    <!-- Prenom -->
                    <div class="formu__saisi">
                        <!-- <label for="prenom" class="contentPosition">Prénom</label> -->
                        <input type="text" class="" id="prenom" name="prenom" placeholder="Prénom">
                    </div>
                    <!-- Nom -->
                    <div class="formu__saisi">
                        <!-- <label for="nom" class="contentPosition">Nom</label> -->
                        <input type="text" class="" id="nom" name="nom" placeholder="nom">
                    </div>
                        <!-- Telephone -->
                    <div class="formu__saisi">
                        <!-- <label for="tel" class="contentPosition">Téléphone</label> -->
                        <input type="text" class="" id="tel" name="tel" placeholder="tel">
                    </div>
                    <!-- Email -->
                    <div class="formu__saisi">
                            <!-- <label for="email" class="contentPosition">email</label> -->
                            <input type="email" class=" <?php if(isset($errorEmail)); ?>" id="email" name="email" placeholder="email">
                        <?php 
                        if(isset($errorEmail)) echo $errorEmail; 
                        ?> 
                    </div>
                </div>
                <!-- Choice -->
                
                
                <div class="formu__block">
                <div>
                    <h5 class="contentPosition center title2__bottop">
                    Sélectionnez la / les prestations qui vous interesses : 
                    </h5>
                </div>

                    <div class="contentPosition__pad">
                        <input type="checkbox" id="presta_1" name="presta_1" value="Coaching">
                        <label for="presta_1">Coaching</label>
                    </div>
                    <div class="contentPosition__pad">
                        <input type="checkbox" id="presta_2" name="presta_2" value="Projet">
                        <label for="presta_2">Projet</label>
                    </div>
                    <div class="contentPosition__pad">
                        <input type="checkbox" id="presta_3" name="presta_3" value="Atelier">
                        <label for="presta_3">Atelier</label>
                    </div>
                    <div class="contentPosition__pad">
                        <input type="checkbox" id="presta_4" name="presta_4" value="Vitrine">
                        <label for="presta_3">Vitrine</label>
                    </div>
                    <div class="contentPosition__pad">
                        <input type="checkbox" id="presta_5" name="presta_5" value="Home Staging">
                        <label for="presta_3">Home Staging</label>
                    </div>
                </div>
            </div>
            <!-- Commentaire demande -->
            <div class="contentPosition__center">
                <div class="contentPosition__marbot">
                    <label for="commentaire" class="contentPosition"> Demande / Information</label>
                </div>
                
                <textarea class="" id="commentaire" name="commentaire" rows="3" placeholder="Objet de la demande"></textarea>
            </div>
            <!-- Bouton -->
            <div class="contentPosition center">
                <button type="submit" class="btnSend">Envoyer</button>
            </div>
        </form>

</div>

</section>

<?php

require_once('./inc/footer.php');

?>