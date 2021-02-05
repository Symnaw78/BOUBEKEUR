Nacime Boubekeur  
02/02/2021

# Exercices Terminal Windows #

## Exercice 1 ##

Création de l'arborescence :  

**mkdir ligne-commande** (création du répertoire) -> **cd ligne-commande** (on se déplace dans le répertoire pour effectuer nos manipulations).

Arrivée dans C:\Users\symna\ligne-commande> on crée nos 4 répertoires :
- dossier
- rep1
- rep2
- rep3

**cd rep1**, C:\Users\symna\ligne-commande\rep1> on crée les 2 fichiers qui lui sont associés selon l'arborescence :  
**type nul > fichier11.txt** puis **type nul > fichier12.txt**.
On écrit maintenant la ligne MS-DOS dans le fichier fichier11.txt avec echo, ainsi la commande est **echo MS-DOS > fichier11.txt**, de même pour fichier12.txt -> **echo Windows > fichier12.txt**.

Passons dans rep2, **cd ..** -> **cd rep2**, un dernier fichier fichier22.txt devra contenir le mot Linux, pour aller plus vite nous créérons le fichier et son contenu sur la même ligne avec **echo Linux > fichier22.txt**.

Nous terminons maintenant l'arborescence, **mkdir rep21**.

On passe sur rep3 (**cd .. -> cd rep3**), **mkdir rep31** puis **mkdir rep32**.

## Exercice 2 ##

1. Pour se déplacer dans la partition (C pour ma part), on utilise la commande cd C:\
2. On utilise la commande **dir**
3. On utilise la commande mkdir -> **mkdir exo2**
4. Pour se déplacer dans exo2, on utilise **cd exo2**
5. La création d'un fichier se fait avec **type nul >**, ainsi **type nul > moi.txt**
6. La commande **echo** seule sert à afficher des messages.
7. Pour afficher le message "Je suis en BTS SIO" dans le fichier moi.txt, j'utilise la commande  
**echo** Je suis en BTS SIO **> moi.txt**
8. Pour ajouter du texte à la ligne d'une autre on ajoute seulement un **>**, la commande donne ainsi  
**echo** Et j'aime ça ! **>> moi.txt**
9. On utilise **cd \**

## Exercice 3 ##

#### 1ère Partie ####

Après avoir trouvé que **&** permettait d'enchaîner des commandes tout en les différenciant, j'ai pu établir cette ligne de commande qui répond à tous les critères de l'exercice :

    mkdir exo3 & cd exo3 & echo Je suis en BTS SIO & echo Je suis en BTS SIO > moi.txt & echo Et j'aime ça ! >> moi.txt

#### 2nde Partie ####

Et quant à la seconde partie, ma commande donne ceci :  

    copy presidents.txt presidentsFrance.txt & move pre* C:\Users\symna & cd .. & del pre* & rmdir /S exo3 & cls

## Exercice 4 ##

- Pour afficher le nom de l'utilisateur courant on utilise **whoami**.
- Pour afficher les variables d'environnement on utilise la commande **set**.






