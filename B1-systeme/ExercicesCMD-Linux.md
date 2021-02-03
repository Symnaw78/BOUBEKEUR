Nacime Boubekeur
03/02/2021  


# Exercices Terminal Gnu Linux #

## Exercice 1 ##

#### 1ère partie ####

1. Le chemin absolu pour référencer track1.mp3 est /home/bob/music/rock/track1.mp3.
2. Le chemin relatif vers track1.mp3 serait /music/rock/track1.mp3.
3. Il n'y a pas de chemin relatif, selon le répertoire courant, on se trouve dans le dossier /images, or track1.mp3 se trouve dans le dossier /music.
4. Même réponse que pour la question précedente, mais à contrario le répertoire courant qui nous est donné est un chemin absolu qui mène à un fichier texte, nous ne pouvons donc y "avancer" davantage.

#### 2nde partie ####

*Répertoire courant : /home/bob/music*

1. Pour se déplacer dans le répertoire rock : cd rock.
2. Pour aller ensuite dans le répertoire tests :  
     cd ..  
     cd ..  
     cd tmp/tests  
3. Puis pour aller dans le répertoire personnel de bob, qui je suppose est /bob  
 cd ..  
 cd ..
4. Pour se déplacer à la racine, nous utiliserons directement :  
    cd /
5. Et pour finir, étant actuellement à la racine, nous devons seulement utiliser la commande :
    cd etc  

## Exercice 2 ##

![chemin](img/2021-02-03.png)

Voici l'arborescence.

1. Pour afficher le chemin du répertoire, il faut se placer dans le répertoire home et utiliser "find".
2. On se place tout d'abord dans le répertoire mon site avec **cd symna/monsite** puis on utiliser la commande **mkdir .gitignore**.
3. On utilise la commande **ls -l**.  
**ls** permettant ici de lister le contenu d'un répertoire et **-l** de lister avec les informations détaillées.
4. Pour executer la même commande tout en rajoutant les fichiers cachés on utilise cette fois la commande **ls -l -a**.  
**-a** se chargeant ici d'inclure les fichiers cachés.
5.





