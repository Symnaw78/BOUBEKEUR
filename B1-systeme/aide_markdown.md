Nacime Boubekeur

## Aide markdown ##

Sites de référence

• http://blog.wax-o.com/2014/04/tutoriel-un-guide-pour-bien-commencer-avec-markdown/

• http://enacit1.epfl.ch/markdown-pandoc/

 ### Titre et sous-titre ###

- **Les =** en dessous d'un mot/phrase : Titre de niveau 1
- **Les -** en dessous d'un mot phrase : Titre de niveau 2

Et le nombre de # va permettre de choisir le niveau de son titre :
- **Un #** entre chaque mot/phrase : Titre de niveau 1
- **2 #** entre chaque mot/phrase : Titre de niveau 2  
etc... (Il ne faut pas oublier l'espace)

### Emphase ###

- **Un astérisque** ou **underscore** de chaque côté d'un mot/phrase : **italique**
- **2 astérisques** ou **underscore** de chaque côté d'un mot/phrase : **gras**
- Ainsi **3 asrérisques** permettent un rendu en **gras/italique**

### Citation ###

Les **>** servent à écrire une citation.

### Les listes non ordonnée ###

Le **+**, le __*__ et le **-**, ont la même utilité quant au fait de rédiger des listes.

### Les listes ordonnées ###

Il suffit d'écrire un **nombre suivi d'un point** : **1. 2.** etc..

### Bloc de code ###

Pour afficher un bloc de code, **sautez deux lignes comme pour un paragraphe**, puis **indentez** avec **4 espaces** ou une **tabulation**.

### Code dans une ligne ###

Pour afficher du code dans une ligne, il faut **l’entourer par des guillemets simples** : (`).

### Barre de séparation ###

Au moins **3 caractères** (* ou -) et entourée avec du saut de ligne comme ci-dessous :

    --------
    oui
    --------

### Les tableaux ###

Il y a 2 façons de faire des tableaux mais la plus agréable est celle où on ne se préoccupe pas d'aligner toutes les colonnes, exemple :  

    |Colonne 1|Colonne 2|Colonne 3|
    |---------|:-------:|--------:|
    |Ligne 1  |     x   |        y|
    |Ligne 2  |     x   |        y|

En effet, j'utilise la façon la moins compréhensible en markdown mais beaucoup plus pratique :  

    |Colonne 1|Colonne 2|Colonne 3|
    |-|:-:|-:|
    |Ligne 1| x | y|
    |Ligne 2| x | y|

### Les liens ###

Encadrer le lien par des chevrons est suffisant pour le rendre cliquable, exemple :  

    <https://scantrad.net/>

### Les images ###

Le code en markdown nécessaire est :  

    ![Naruto Kyuubi](https://static1.cbrimages.com/wordpress/wp-content/uploads/2020/04/Naruto-Key-Visual.jpg "naruto image")

Ici le ![ ] va permettre d'écrire un texte qui ne sera vu que si l'image n'est pas chargé ou lu, ensuite on insère le lien entre parenthèse et le texte entre guillemets est facultatif, mais celui-ci sera affiché au survol de la souris sur l'image.
