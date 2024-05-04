<?php
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Plateforme de Financement Participatif</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Plateforme de Financement Participatif</h1>
        <nav>
          <ul>
            <li><a href="#projets">Projets</a></li>
            <li><a href="#contribuer">Contribuer</a></li>
            <li><a href="#mon-compte">Mon Compte</a></li>
            <li><a href="inscription.html"> S'inscrire</a></li>
          </ul>
        </nav>
      </header>
      
      <section id="projets">
        <h2>Découvrez les Projets</h2>
        <div class="projet">
          <h3>Nom du Projet 1</h3>
          <p>Description du Projet 1...</p>
          <a href="#" class="btn">Voir plus</a>
        </div>
        <div class="projet">
          <h3>Nom du Projet 2</h3>
          <p>Description du Projet 2...</p>
          <a href="#" class="btn">Voir plus</a>
        </div>
        <!-- Ajoutez plus de projets ici -->
      </section>
      
      <section id="contribuer">
        <h2>Contribuer à un Projet</h2>
        <!-- Formulaire de contribution -->
      </section>
    
      <section id="mon-compte">
        <h2>Mon Compte</h2>
        <!-- Informations sur le compte utilisateur -->
      </section>
    
      <footer>
        <p>&copy; 2024 Plateforme de Financement Participatif</p>
      </footer>
</body>
</html>