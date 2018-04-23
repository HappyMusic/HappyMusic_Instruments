
      <div class="jumbotron p-3 p-md-4 text-white rounded bg-dark" >
        <div class="col-md-6 px-0">
          <h1 class="display-6 font-italic">Bienvenue sur notre boutique en ligne. </h1>
          <p class="lead my-3">Nous vendons toutes sortes d'instruments des plus anciens comme le violon ou bien des instruments à la pointe de la technologie comme le roli seaboard</p>
          <p class="lead mb-0"><a href="<?php echo site_url('article/article') ?>" class="text-white font-weight-bold">Penser à consulter nos instruments phars</a></p>
        </div>
      </div>
      <hr>
      <h4>Découvrez nos catégories</h4>
        <?php  if($categories):?>
        <ul class="thumbnails">
              <li class="row">
                <?php foreach ($categories as $c): $show = site_url('article/show/'.$c->categorie_id);?>
                  <div class="ccol-sm-6 col-md-4">
                    <h3><?php echo $c->categorie_name;?></h3>
                    <a href="<?php echo $show;?>"><img src="<?php echo $this->pictureCategorie_path.$c->categorie_image;?>" alt="<?php $c->categorie_name; ?>" alt=""width="156" height="156"></a>
                    <div class="caption">
                        <p class="card-text mb-auto">découvrez toute notre gamme  de <strong><?php echo $c->categorie_name;?></strong>  sur notre boutique en ligne  </p>
                        <p>
                          <a href="<?php echo $show; ?>" class="btn btn-outline-primary">Découvrir...</a>

                        </p>
                    </div>
                </div>
                <?php endforeach; ?>
              </li>
        </ul>
        <?php endif;?>
        <hr>
