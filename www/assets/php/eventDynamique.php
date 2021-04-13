<?php 
/* premiere procedure pour afficher les event */
    $query = $DB->db->prepare('CALL display_all_event');
    $query->execute();
    $events = $query->fetchAll();  
            foreach ( $events as $event): ?>
<!-- dans cette page on va avoir 2  foreach en premier le foreach pour afficher les event comme dans la boutique -->
<!-- Ensuite on a le deuxieme foreach pour afficher les commentaires dans les event en verifiant a l'aide d'une procedure que les id correspondent -->
                  <div class="col-md-6 ">
                    <div class="card mb-4 shadow-sm">
                      <img src="../img/event/<?= $event['URL'] ?>" class="card-img-top" alt='Image'>
                        <div class="card-body">
                        <h5 class="card-title">" <?= $event['Titre'] ?> </h5>
                        <p class="card-text"> <?= $event['Description'] ?> </p>
                          <div>
                      <form method="get" action="addComment.php" >
                            Mettre un commentaire : <br/>
                            <textarea name ="content" value="content" class="form-control" id="exampleFormControlTextarea1"  required></textarea>
                            <button type="submit" class="btn btn-outline-primary">Valider</button>
                        
                            <input type="hidden" name="id_event" value='<?= $event['id_Manifestations'] ?>'>
                            <input type="hidden" name="id_user" value='1'>
                          </div>
                          <br/>
                    
                      </form> 
                    
                      </form> 
                        <div class="d-flex justify-content-between align-items-center"\>
                          <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Like</button>
                          </div> 
                            <?php 
    /* deuxieme procedure pour afficher les commentaires */
                           $query = $DB->db->prepare('CALL display_comment(:input_id_event)');
                           $query->bindValue(':input_id_event', $event['id_Manifestations'], PDO::PARAM_STR);
                          $query->execute();
                          $comments= $query->fetchAll();   
                            foreach(  $comments as $comment): ?>
                              <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                  <h5 class="card-title"><?= $comment['id_Utilisateurs'] ?></h5>
                                  <p class="card-text"> <?= $comment['Commentaires'] ?></p>
                                </div>
                              </div>
                            <?php endforeach; ?>
                          <form method="get" action="addIncription">
                            <button type="submit" class="btn btn-sm btn-outline-secondary">M'inscrire</button>

                            <input type="hidden" name="id_event" value='<?= $event['id_Manifestations'] ?>'>
                            <input type="hidden" name="id_user" value='1'>
                          </form>  
                        </div>
                      </div>
                    </div>
                  </div>
                <?php  endforeach;  
?>
