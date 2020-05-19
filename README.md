# php_proj

La partie 'expériences' est totalement modifiable via une BDD, cliquer sur 'modifier' amène a une page de login.

Si le login correspond, on est renvoyé à la page admin.php (pas de vérification si on va directement sur le lien /admin.php pour autant)

En admin, on peut modifier en direct les articles de la page expériences, les supprimer ou cliquer sur un lien renvoyant à une page de création.

Si on ajoute des apostrophes ou que le contenu est long, ça ne fonctionnera pas et si celà arrive ou que l'on modifie en laissant tout vide, un article est quand même présent mais vide.
