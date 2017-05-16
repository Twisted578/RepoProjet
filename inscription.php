<?php 
include 'INC/includes.php';


if($_SERVER['REQUEST_METHOD'] == "POST"){
    $validate = true;

    if (empty($_POST['pseudo'])){
        $erreur_pseudo = "Un pseudo est requis."
        $validate = false;
    }

    if(empty($_POST['email'])){
        $erreur_email = "Adresse Email requise !"
        $validate = false;
    }elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $erreur_email = "Adresse email non valide !";
        $validate = false;
    }

    if (empty($_POST['password'])){
        $erreur_password = "Un mot de passe est requis !";
        $validate = false;
    }elseif (empty($_POST['confirm_password'])){
        $erreur_confirm_password = "Veuillez confirmer votre mot de passe !"
        $validate = false;
    }elseif ($_POST['confirm_password'] != $_POST['password']){
        $erreur_confirm_password = "Les deux mots de passe ne sont pas identiques !"
    }

    if($validate){
        $data = array(
            'pseudo' => htmlspecialchars($_POST['pseudo']),
            'email' => htmlspecialchars($_POST['email']),
            'password' => User::hashPassword($_POST['password']),
            );

        $rep = $db -> insert('INSERT INTO connexion(pseudo,email,password) VALUES (:pseudo,:email,:password',$data);
        if ($rep) {
            
            $mail_to= $_POST['email'];
            $mail_Subject = "Identifiant admin de votre site."
            $headers .= "From : guenole-lequentrec.ovh \n";
            $headers .= "Reply-To : guenole578@gmail.com \n";
            $headers .= "MIME-Vsersion : 1.0 \n";
            $headers .= "Content-type: text/html; charset=utf-8 \n";

            $mail_body = 'Bonjour,</br> Voici vos identifiants pour vous connecter à votre compte administrateur :</br>Pseudo :'.$_POST['pseudo'].'</br>Email :'.$_POST['email'].'</br>Mot de passe :'.$_POST['password'].'</br>Voici le lien pour aller sur la page de connexion <a href="http://guenole-lequentrec.ovh/connexion.php';

            if (mail($mail_to,$mail_Subject,$mail_body,$headers)){
                $_SESSION['message'] = "INSCRIPTION : un email a été envoyé dans votre boite email."
                unset($_POST);
            }else{
                $_SESSION['erreur'] = "Un problème est survenu lors de l'envoi de votre email.";
            }
        }else{
            $_SESSION['erreur'] = "Un problème est survenu lors de la sauvegarde ."
        }
    }
}


include 'INC/header.php'; 

?>

        <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>CONNEXION</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.html">
                                        <i class="ion-ios-home"></i>
                                        Acceuil
                                    </a>
                                </li>
                                <li class="active">INSCRIPTION</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 
        ================================================== 
            Company Description Section Start
        ================================================== -->
        <section class="company-description">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                        </div>
                    </div>
                    <div class="col-md-12">
                    <form class="form-horizontal">
                    <fieldset>

                    <!-- Form Name -->
                    <legend>Inscription</legend>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="pseudo">Votre Pseudo</label>  
                      <div class="col-md-4">
                      <input id="pseudo" name="pseudo" type="text" placeholder="Pseudo" class="form-control input-md">
                        
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="email">Votre adresse mail</label>  
                      <div class="col-md-4">
                      <input id="email" name="email" type="text" placeholder="exemple@mail.com" class="form-control input-md">
                        
                      </div>
                    </div>

                    <!-- Password input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="password">Votre mot de passe</label>
                      <div class="col-md-4">
                        <input id="password" name="password" type="password" placeholder="******************" class="form-control input-md">
                        
                      </div>
                    </div>

                    <!-- Password input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="confirm_password">Confirmer votre mot de passe</label>
                      <div class="col-md-4">
                        <input id="confirm_password" name="confirm_password" type="password" placeholder="*************" class="form-control input-md">
                        
                      </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="singlebutton"></label>
                      <div class="col-md-4">
                        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Inscription</button>
                      </div>
                    </div>

                    </fieldset>
                    </form>
                </div>
            </div>
            </div>
        </section>
        </body>
    </html>