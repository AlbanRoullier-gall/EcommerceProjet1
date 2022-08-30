<?php $title = "README"; ?>
<?php $style = "view/css/readme.css"; ?>

<?php ob_start(); ?>

<?php require('component/header.php'); ?>

 <!--ABOUT ME----------------------------------------------------------------------->

 <section>
      <h1>
        Livrable 1 : HTML/CSS <br />
      </h1>
      <ul>
        <li>
          <h3>Page Catalogue:</h3>
          Utilisation de logos (Création adobe illustator pour la marque +
          banque d'icône fontawesome + banque d'icône SVG).
          Dimensionnement des photos.
          Ajout d'animations.<br />
        </li>
        <li>
        <h3>HTML 5 Structure document:</h3>
        Structuration du code avec ajout de commentaires.  
        Tri par dossiers des différents types de fichiers.
        Validation des pages aux validateur HTML/CSS https://validator.w3.org.<br />
        </li>
        <li>
        <h3>CSS 3 multimédia responsive:</h3>
        Agencement responsive.<br />
        </li>
        <li>
        <h3>Autres pages et ensemble cohérent:</h3>
        pages: lancement, catalogue, descriptive, panier, facturation,
        informative
        Usage de hacks CSS: <br />
        le bouton catégorie dans la page index.html <br />
        Le choix de pierre dans la page descriptionpage.html<br />
        </li>
      </ul>
      <h1>
        Livrable 2 : Catalogue-produit sous mini-architecture Model-View-Controller <br />
      </h1>
      <ul>
        <li>
          <h3>Processus d'identification (php)</h3>
          Pour Essaie : email: alban-roullier-gall@hotmail.com ; Password: x4501004
          Authentification avec rendu d'informations sur chaque page via des variables de session et des cookies.
        </li>
        <li>
          <h3>Affichage du catalogue php</h3>
          Affichage des produits du catalogue, affichage de projets, Affichage de catégories.
        </li>
        <li>
          <h3>Model db cat, user et fct cat, user</h3>
          Définition des fonctions de récupération dans la base de données + définition des fonctions d'entités  
        </li>
        <li>
          <h3>View HTML groupées</h3>
          Segmentation des vues en un dossier composant + boucle php de dedans.
        </li>
        <li>
          <h3>Controllers avec superglobal groupés.</h3>
          Controllers avec superglobal groupés.
        </li>
      </ul>
      <h1>
        Livrable 3 : Interaction avancée sous architecture Model-View-Controller <br />
      </h1>
      <ul>
      <li>
          <h3>Trie dossiers model/view/controller + Utilisation de POST/GET + SESSION/COOKIES + login cart SESSION</h3>
        </li>
        <li>
          Segmentation des vues au travers d'un layout.
        </li>
        <li>
          Définition d'un router index.php.
        </li>
      </ul>
      <h1>
      Livrable 4 : Intégration de données externes SQL et XML <br />
      </h1>
      <ul>
        <li>
          <h3>Structure DB</h3>
          Définition d'une base de donnée avec segmentations des différentes tables.
        </li>
        <li>
          <h3>Intégration DB en PHP</h3>
          Utilisation de jointure pour récupérer certaines données de la base de donnée.
          Restriction de l'accès à la base de données.
        </li>
        <li>
        <h3>Fonctionnalité XML</h3>
          Manipulation de données XML avec cookies afin de restreindre l'accès à la page d'information.
        </li>
        <li>
          <h3>Fonctionnalité JSON</h3>
          Manipulation de données JSON
        </li>
      </ul>
      <h1>
      Livrable 4 bis : Programmation Orientée Objet <br />
      </h1>
      <ul>
        <li>
          Début de définition de classes.
        </li>
      </ul>
      <h1>
      Livrable 5: Page web dynamique et intégration Javascript <br />
      </h1>
      <ul>
        <li>
        <h3>Fonctionnalité panier</h3>
          Intégration et utilisation de jquéry.
          Utilisation de requète AJAX.
          BUG: Ajout par nom et suppression par nom
        </li>
        <li>
          <h3>Programmation événementielle</h3>
          Ajout du nombre d'élément panier
        </li>
        <li>
          <h3>Inclusion AJAX en MVC</h3>
          $.post, $.get avec Session
        </li>
        <li>
          <h3>Gestion Serveur DB: Session</h3>
          $.post, $.get avec Session
        </li>
      </ul>
    </section>

<?php require('component/footer.php'); ?>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>

