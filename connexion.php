<?php 
include 'INC/includes.php';
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
                                <li class="active">CONNEXION</li>
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
                    <form action="verification.php" class="form-horizontal">
                    <fieldset>
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Pseudo</label>  
                      <div class="col-md-4">
                      <input id="textinput" name="textinput" type="text" placeholder="Admin" class="form-control input-md" required="">
                        
                      </div>
                    </div>

                    <!-- Password input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="passwordinput">Mot de passe</label>
                      <div class="col-md-4">
                        <input id="passwordinput" name="passwordinput" type="password" placeholder="*********" class="form-control input-md">
                        
                      </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="singlebutton"></label>
                      <div class="col-md-4">
                        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Connexion</button>
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