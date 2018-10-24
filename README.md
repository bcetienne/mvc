# MVC
## Etienne Blanc-Coquand
## Thibault Hamnache

###### L'index.php fait appel a l'autoload et au route.php
###### Le fichier route contient les différentes routes que l'on a crée. Il fait appel au fichier Router.php dans Model.
###### Dans le Router.php on y retrouve la fonction trimUri qui permet de recupérer l'url rentré et la fonction redirect qui elle permet de renvoyer un texte si l'url renseigné possède un controller du même nom ou non.

##### Le Controller :
###### Il content plusieur fonctions representants des actions qui sont chacune égale a une route indiqué dans Config/route.php.
###### Chacune de ces fonctions charge une vue grace au loadview de View.php ainsi qu'n fonction getOne ou getAll permettant d'afficher la totalité ou non de la BDD enfonction de la requ^^e 