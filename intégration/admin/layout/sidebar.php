<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        <li class="<?php if(preg_match("/admin\/$/", $_SERVER["REQUEST_URI"])) : ?>active<?php endif; ?>">
            <a href="<?php echo $website_root; ?>admin/">Dashboard</a>
        </li>

        <li class="<?php if(strpos($_SERVER["REQUEST_URI"], "crud/tag")) : ?>active<?php endif; ?>">
            <a href="<?php echo $website_root; ?>admin/crud/destination/">Destinations</a>
            <ul>
              <li class="<?php if(strpos($_SERVER["REQUEST_URI"], "crud/tag")) : ?>active<?php endif; ?>">
                  <a href="<?php echo $website_root; ?>admin/crud/sejours/">Séjours</a>
              </li>
              <li class="<?php if(strpos($_SERVER["REQUEST_URI"], "crud/tag")) : ?>active<?php endif; ?>">
                  <a href="<?php echo $website_root; ?>admin/crud/date_depart/">Date de départ</a>
              </li>
            </ul>
        </li>
        <li class="<?php if(strpos($_SERVER["REQUEST_URI"], "crud/article")) : ?>active<?php endif; ?>">
            <a href="<?php echo $website_root; ?>admin/crud/article/">Articles</a>
            <ul>
              <li class="<?php if(strpos($_SERVER["REQUEST_URI"], "crud/categorie")) : ?>active<?php endif; ?>">
                  <a href="<?php echo $website_root; ?>admin/crud/categorie/">Catégories</a>
              </li>
            </ul>
        </li>
        <li class="<?php if(strpos($_SERVER["REQUEST_URI"], "crud/tag")) : ?>active<?php endif; ?>">
            <a href="<?php echo $website_root; ?>admin/crud/utilisateur/">Utilisateurs</a>
        </li>
        <li class="<?php if(strpos($_SERVER["REQUEST_URI"], "crud/tag")) : ?>active<?php endif; ?>">
            <a href="<?php echo $website_root; ?>admin/crud/commentaire/">Commentaires</a>
        </li>
    </ul>
</div>
