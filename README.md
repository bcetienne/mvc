# MVC
## Etienne Blanc-Coquand, Thibault Hamnache

### Routing
L'index.php fait appel a l'autoload et au route.php

Le fichier route contient les différentes routes que l'on a crée. Il fait appel au fichier Router.php dans Model.

Dans le Router.php on y retrouve la fonction trimUri qui permet de recupérer l'url rentré et la fonction redirect qui elle permet de renvoyer un message si l'url renseigné possède un controller du même nom ou non, de même pour la méthode testée dans le controller.

### Controller
Chaque controller fait référence à une page, chaque controller contient des méthodes qui représentent une page enfant de la page parent (exemple une fonction d'ajout de salarié (méthode `add()`) pour les salariés (du controller `Salaries()`)).

Une fois le routing réalisé, la fonction en question du controller est chargée, dans celle-ci est appelé un model bien précis qui execute une méthode ou plusieurs pour récupérer les données de la base de données.

### Model
Chaque model est utile pour récupérer les données de différentes tables de la base de données.

### Twig
L'intégration de Twig directement dans le controller permet de trier et d'afficher directement les données récupérées du model dans la vue.

### Ce qui bug
L'envoie de l'ajout qui route mal.

Le templating fonctionne pas non plus. Pas dans les prios.

Des optimisations à revoir tranquillement.
