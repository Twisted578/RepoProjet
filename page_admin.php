       <?php 
       include 'INC/includes.php';
       include 'INC/header.php';

       ini_set('display_errors',1); 
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
                            <h2>Page D'édition</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.html">
                                        <i class="ion-ios-home"></i>
                                        Acceuil
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            </section><!--/#Page header-->
            </br>
            </br>
        
                <div class="global-page-body">
                    <div class="container">
                        <section class="row">
                            <aside class="col-lg-2">
                               <ul class="list-group">
                                  <a href="#" class="list-group-item active">
                                      Ajouter un Chapitre
                                  </a>
                                  <a href="#" class="list-group-item">
                                      Modifier un Chapitre
                                  </a>
                                </ul>
                            </aside> 
                    <div class="col-lg-8">
                        <form action="page_admin_post.php" method="post">
                            <fieldset>

                            <!-- Form Name -->
                            <legend>Chapitre</legend>
                            <div>
                                    <label for="numero">Numéro du Chapitre</label>
                                    <input type="text" name="id_chapitre" placeholder="N°">
                            </div>
                            </br>
                            <div>
                                    <legend>Titre</legend>
                                    <label for="chapitre"></label>
                                    <textarea name="titre" cols="100" rows="1" placeholder="texte"></textarea>
                            </div>
                            <div>
                                    <label for="texte"></label>
                                    <textarea name="corps" cols="150" rows="20" placeholder="texte"></textarea>
                                    <script>
                                     // On replace le ckeditor à la place du texte area
                                    CKEDITOR.replace( 'corps' );
                                    </script>
                            </div>
                            </br>
                            <div>
                            <label for="singlebutton"></label>
                            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Envoyer</button>
                            </div>
                            </fieldset>
                        </form>    
                        </section>                  
                    </div>
                </div>
            <!--
            ==================================================
            Footer Section Start
            ================================================== -->
             <footer id="footer">
                <div class="container">
                    <div class="col-md-8">
                        <p class="copyright">Copyright: <span>2017</span> . Design and Developed by <a href="https://www.facebook.com/guenole.lequentrec">Guénolé Le Quentrec</a></p>
                    </div>
                    <div class="col-md-4">
                        <!-- Social Media -->
                        <ul class="social">
                            <li>
                                <a href="http://wwww.fb.com/themefisher" class="Facebook">
                                    <i class="ion-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://wwww.twitter.com/themefisher" class="Twitter">
                                    <i class="ion-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="Linkedin">
                                    <i class="ion-social-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://wwww.fb.com/themefisher" class="Google Plus">
                                    <i class="ion-social-googleplus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer> <!-- /#footer -->
                
        </body>
    </html>