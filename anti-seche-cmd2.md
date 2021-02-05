Nacime Boubekeur
04/02/2021

# Commandes Windows et Linux #

|  Commandes Windows    |  Commandes Linux/Debian  |  Action effectuée par la commande  |
| -| :-: | -: |
|**mkdir** + <*nom*>|  **mkdir** + <*nom*>    | Création d'un répertoire|
| **cd** / **cd ..** / **cd** + <*nom*>|**cd** / **cd ..** / **cd** + <*nom*>|Le 1er affiche le répertoire courant, le deuxième passe au répertoire antérieur et le dernier change de répertoire (à partir du répertoire courant)                                    |
| **echo** + <*mot/phrase*>| **echo** + <*mot/phrase*>|Affiche un message sur le terminal, le commande permet également d'écrire dans un fichier si on lui associe : **> <*nom du fichier*>**, exemple : **echo** *Bonjour* *> oui.txt*|
|**more** + <*nom de fichier*>|**cat** + <*nom de fichier*>|Affiche le contenu d'un fichier|
|**rmdir /S** + <*dossier*>|**rmdir -rf** + <*dossier*>| La commande seule (**rmdir**) permet de supprimer un répertoire vide, mais si celui-ci est *non vide* il suffit seulement de rajouter la commande qui suit pour forcer la suppression
|**dir /a**|**ls -a**|Affiche le contenu du répertoire courant, la commande a qui suit permet d'afficher les fichiers cachés, elle est facultative
|**copy** <*fichier1*> vers <*fichier2*>|**cp** <*fichier1*> <*fichier2*>|Copie un fichier vers un autre, ce n'est pas préciser mais on peut également le copier vers un dossier, **xcopy** pour windows et **cp -r** pour linux vont eux permettre la copie d'un répertoire vers un autre, le chemin absolu sera donc préferable pour l'écriture de cette commande
|**ren** ou **rename** <*nom du fichier*> <*nouveau nom*>|**mv** <*nom du fichier*> <*nouveau nom*>|Renomme le fichier, exemple windows si on veut renommer son fichier naruto.txt en sasuke.txt : **rename** *naruto.txt* *sasuke.txt*
|**del** <*nom du fichier*>|**rm** <*nom du fichier*>|Supprime un fichier du répetoire courant
|**type nul >** <*nom*>|**touch** <*nom*>|Crée un fichier vide
|**move** <*nom du fichier*> <*chemin absolu du dossier*>|**mv** <*nom du fichier*> <*chemin absolu du dossier*>|Déplace un fichier vers un dossier, nous pouvons également utiliser une commande pour déplacer tous les fichiers d'une même extension ou qui commencent par le même mot etc.. exemple : **mv** *.txt */exemple/exemple1*, la commande va déplacer tous les fichiers en .txt du répertoire courant vers le répertoire *exemple1*
|**whoami**|**whoami**|Affiche le nom de l'utilisateur courant|
|**set**|**env**|Affiche la liste des variables d'environnement|
|**cls**|**clear**|Efface l'écran du terminal|
