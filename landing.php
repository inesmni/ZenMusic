  <?php 
    session_start();
    require_once 'config.php'; // ajout connexion bdd 
   // si la session existe pas soit si l'on est pas connecté on redirige
    if(!isset($_SESSION['user'])){
        header('Location:index.php');
        die();
    }

    
   
?>  
<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Zen'Music</title>
  <link rel="stylesheet" href="musique.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  
</head>

<body>
<header> 
    <div class="menu_side">
        <h1>ZenMusic</h1>
        <div class="playlist">
            
            <h4><span></span><a href="mesFavoris.php">Mes Favoris<a></h4>
            
            
        </div>
        <button><a href="ajouter_favoris.php">Ajouter en favoris<a></button>
        <div class="menu_music"><div id="myModal" class="modal">

                
          </div>
            <h2>Top 6 de la semaine</h2>
            <li class="songItem">
                <span>01</span>
                <img src="jpg/medyn.jpg">
                <h5>
                Meydan
                <div class="subtitle">Synthwave Vibe</div>
                </h5>
                <i class="bi playListPlay bi-play-circle" id="1"></i>
                
            </li>
            <li class="songItem">
                <span>02</span>
                <img src="jpg/run.jpg">
                <h5>
                Run
                <div class="subtitle">Kai Engel</div>
                </h5>
                <i class="bi playListPlay bi-play-circle" id="2"></i>
                
            </li>
            <li class="songItem">
                <span>03</span>
                <img src="jpg/reset.jpg">
                <h5>
                Reset
                <div class="subtitle">Jaunter</div>
                </h5>
                <i class="bi playListPlay bi-play-circle" id="3"></i>
                
            </li>
            <li class="songItem">
                <span>04</span>
                <img src="jpg/fragments.jpg">
                <h5>
                Fragments
                <div class="subtitle">Nomyn</div>
                </h5>
                <i class="bi playListPlay bi-play-circle" id="4"></i>
                
            </li>
            <li class="songItem">
                <span>05</span>
                <img src="jpg/takayama.jpg">
                <h5>
                    Takayama
                    <div class="subtitle">Niwel</div>
                </h5>
                <i class="bi playListPlay bi-play-circle" id="5"></i>
            </li>
            <li class="songItem">
                <span>06</span>
                <img src="jpg/vacs in the.jpg">
                <h5>
                Vacs In The Mor...
                <div class="subtitle">Martijn Schmit</div>
                </h5>
                <i class="bi playListPlay bi-play-circle" id="6"></i>   
            </li>
        </div>
    </div>
    <div class="song_side">
        <nav>
            <ul>
                <li>Explorer <span></span></li>
                <!-- <li>Ma Librairie</li> -->
                 <li><a href="modifier_mot_de_passe.php">Mon Compte</a></li>
            </ul>
            <div class="recherche">
                <i class="bi bi-search-heart-fill"></i>
                <input type="text" placeholder="Rechercher musique...">
            </div>
            <div class="user">
                <img src="" alt="user" title="user">
            </div>
        </nav>
        <div class="content">
            <h1>Accueil</h1>
            <p>
                Bienvenue sur ZenMusic ! 
                <br>
                La plateforme de musique libre de droits relaxante.
            </p>
            <!-- <div class="bouton">
                <button>PLAY</button>
                <button>FOLLOW</button>
            </div> -->
        </div>
        <div class="popular_song">
            <div class="h4">
                <h4>Sons Populaires</h4>
                <div class="btn_s">
                    <i id="left_scroll" class="bi bi-arrow-left-short"></i>
                    <i id="right_scroll" class="bi bi-arrow-right-short"></i>
                </div>
            </div>
            <div class="pop_song">
                <li class="songItem">
                    <div class="img_play">
                        <img src="jpg/marée.jpg" alt="">
                        <i class="bi bi-play-circle-fill" id="7"></i>
                    </div>
                    <h5>Marée
                        <br>
                        <div class="subtitle">KaiEngel</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="jpg/naya.jpg" alt="">
                        <i class="bi bi-play-circle-fill" id="8"></i>
                    </div>
                    <h5>Hatom
                        <br>
                        <div class="subtitle">Naya</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="jpg/hatachi.jpg" alt="">
                        <i class="bi bi-play-circle-fill" id="9"></i>
                    </div>
                    <h5>Kerusu
                        <br>
                        <div class="subtitle">Hatachi</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="jpg/shine.jpg" alt="">
                        <i class="bi bi-play-circle-fill" id="10"></i>
                    </div>
                    <h5>Onycs
                        <br>
                        <div class="subtitle">Shine</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="jpg/now.jpg" alt="">
                        <i class="bi bi-play-circle-fill" id="11"></i>
                    </div>
                    <h5>Now
                        <br>
                        <div class="subtitle">Vexento</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="jpg/awake.jpg" alt="">
                        <i class="bi bi-play-circle-fill" id="12"></i>
                    </div>
                    <h5>Awake
                        <br>
                        <div class="subtitle">Emmetelle</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="jpg/ghost.jpg" alt="">
                        <i class="bi bi-play-circle-fill" id="13"></i>
                    </div>
                    <h5>Ghoststriffer
                        <br>
                        <div class="subtitle">Midnight Stroll</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="jpg/darren.jpg" alt="">
                        <i class="bi bi-play-circle-fill" id="14"></i>
                    </div>
                    <h5>Journey's Reflection
                        <br>
                        <div class="subtitle">Darren Curtis</div>
                    </h5>
                </li>
            </div>
        </div>
        <div class="popular_artists">
            <div class="h4">
                <h4>Artistes Populaires</h4>
                <div class="btn_s">
                    <i id="left_scrolls" class="bi bi-arrow-left-short"></i>
                    <i id="right_scrolls" class="bi bi-arrow-right-short"></i>
                </div>
            </div>
            <div class="item">
                <li>
                    <img src="img/vexento.jfif" alt="awake" title="Vexento">
                </li>
                <li>
                    <img src="img/emmetelle.jfif" alt="awake" title="Emmetelle">
                </li>
                <li>
                    <img src="img/jauter.jfif" alt="awake" title="Jaunter">
                </li>
                <li>
                    <img src="img/kaiengel.jfif" alt="awake" title="KaiEngel">
                </li>
                <li>
                    <img src="img/nomyn.jfif" alt="awake" title="Nomyn">
                </li>
                <li>
                    <img src="img/meydan.jfif" alt="awake" title="Meydan">
                </li>
                <li>
                    <img src="img/mid.jfif" alt="awake" title="Midnight Stroll">
                </li>
                <li>
                    <img src="img/martin.jfif" alt="awake" title="Martin Schmit">
                </li>
                <li>
                    <img src="img/nywel.jfif" alt="awake" title="Awake">
                </li>
                <li>
                    <img src="img/darren.jfif" alt="awake" title="Darren Curtis">
                </li>
                <li>
                    <img src="jpg/awake.jpg" alt="awake" title="Awake">
                </li>
            </div>
        </div>
    </div>

    <div class="master_play">
        <div class="wave">
            <div class="wave1"></div>
            <div class="wave1"></div>
            <div class="wave1"></div>
        </div>
        <img src="jpg/awake.jpg" alt="Emmetelle">
        <h5>Awake <br>
            <div class="subtitle">Emmetelle</div>
        </h5>
        <div class="icon">
            <i class="bi bi-skip-start"></i>
            <i class="bi bi-play-fill"></i>
            <i class="bi bi-skip-end"></i>
        </div>
        <span id="curDebut">0:00</span>
        <div class="barre">
            <input type="range" id="seek" min="0" value="0" max="100">
             <div class="bar2" id="bar2"></div>
            <div class="dot"></div>
        </div>
        <span id="curFin">0:00</span>

        <div class="vol">
            <i class="bi bi-volume-down-fill"></i>
            <input type="range" id="vol" min="0" value="0" max="100">
            <div class="vol-bar"></div>
            <div class="dot" id="vol_dot"></div>
        </div>
    </div>
</header>
  <script src="app.js">


  </script>
  
</body>
</html>
<!-- <!doctype html>
<html lang="en">
  <head>
    <title>Espace membre</title>
  Required meta tags -->
    <!-- <meta charset="utf-8"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <!-- </head>
  <body>
  <div class="modal fade" id="change_password" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Changer mon mot de passe</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                         </div>
                            <div class="modal-body">
                                <form action="layouts/change_password.php" method="POST">
                                    <label for='current_password'>Mot de passe actuel</label>
                                    <input type="password" id="current_password" name="current_password" class="form-control" required/>
                                    <br />
                                    <label for='new_password'>Nouveau mot de passe</label>
                                    <input type="password" id="new_password" name="new_password" class="form-control" required/>
                                    <br />
                                    <label for='new_password_retype'>Re tapez le nouveau mot de passe</label>
                                    <input type="password" id="new_password_retype" name="new_password_retype" class="form-control" required/>
                                    <br />
                                    <button type="submit" class="btn btn-success">Sauvegarder</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div> -->

            <!-- <div class="modal fade" id="avatar" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Changer mon avatar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                            <form action="layouts/change_avatar.php" method="POST" enctype="multipart/form-data">
                                <label for="avatar">Images autorisées : png, jpg, jpeg, gif - max 20Mo</label>
                                <input type="file" name="avatar_file">
                                <br />
                                <button type="submit" class="btn btn-success">Modifier</button>
                            </form>
                        </div>
                        <br />
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div> -->
        <!-- <div class="container"> -->
            <!-- <div class="col-md-12"> -->
                <!-- <?php 
                        if(isset($_GET['err'])){
                            $err = htmlspecialchars($_GET['err']);
                            switch($err){
                                case 'current_password':
                                    echo "<div class='alert alert-danger'>Le mot de passe actuel est incorrect</div>";
                                break;

                                case 'success_password':
                                    echo "<div class='alert alert-success'>Le mot de passe a bien été modifié ! </div>";
                                break; 
                            }
                        }
                    ?> -->


                <!-- <div class="text-center"> -->
                        <!-- <h1 class="p-5">Bonjour <?php echo $data['pseudo']; ?> !</h1>
                        <hr />
                        <a href="deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a>
                        Button trigger modal -->
                        <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#change_password"> -->
                          <!-- Changer mon mot de passe
                        </button>
                </div>
            </div>
        </div>     --> 

       
         
        <!-- Modal -->
        <!-- <div class="modal fade" id="change_password" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true"> -->
            <!-- <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Changer mon mot de passe</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                         </div>
                            <div class="modal-body">
                                <form action="layouts/change_password.php" method="POST">
                                    <label for='current_password'>Mot de passe actuel</label>
                                    <input type="password" id="current_password" name="current_password" class="form-control" required/>
                                    <br />
                                    <label for='new_password'>Nouveau mot de passe</label>
                                    <input type="password" id="new_password" name="new_password" class="form-control" required/>
                                    <br />
                                    <label for='new_password_retype'>Re tapez le nouveau mot de passe</label> -->
                                    <!-- <input type="password" id="new_password_retype" name="new_password_retype" class="form-control" required/>
                                    <br />
                                    <button type="submit" class="btn btn-success">Sauvegarder</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div> --> 

            
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>  --> 