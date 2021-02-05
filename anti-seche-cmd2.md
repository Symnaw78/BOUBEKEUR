Nacime Boubekeur
04/02/2021

# Commandes Windows et Linux #

|  Commandes Windows    |  Commandes Linux/Debian  |  Action effectuée par la commande  |
| -| :-: | -: |
|**mkdir** + <*nom*>|  **mkdir** + <*nom*>    | Création d'un répertoire|
| **cd** / **cd ..** / **cd** + <*nom*>|**cd** / **cd ..** / **cd** + <*nom*>|Le 1er affiche le répertoire courant, le deuxième passe au répertoire antérieur et le dernier change de répertoire (à partir du répertoire courant)                                    |
| **echo** + <*mot/phrase*>| **echo** + <*mot/phrase*>|Affiche un message sur le terminal, le commande permet également d'écrire dans un fichier
|**more** + <*nom de fichier*>|**cat** + <*nom de fichier*>|Affiche le contenu d'un fichier|
|**rmdir /S** + <*dossier*>|**rmdir -rf** + <*dossier*>|Supprime un répertoire vide, utiliser la commande qui suit si *non vide*
|**dir /a**|**ls -a**|Affiche le contenu du répertoire courant, la commande a qui suit permet d'afficher les fichiers cachés
|**copy** <*fichier1*> vers <*fichier2*>|**cp** <*fichier1*> <*fichier2*>|Copie un fichier vers un autre
|**xcopy** <*répertoire*> vers <*répertoire*>|**cp -r**  <*fichier1*> <*fichier2*>|Copie un répertoire vers un autre (utiliser chemin absolu)
|**ren** ou **rename** <*nom du fichier*> <*nouveau nom*>|**mv** <*nom du fichier*> <*nouveau nom*>|Renomme le fichier, 
|**del** <*nom du fichier*>|**rm** <*nom du fichier*>|Supprime un fichier du répetoire courant
|**type nul >** <*nom*>|**touch** <*nom*>|Crée un fichier vide
|**move** <*nom du fichier*> <*chemin absolu du dossier*>|**mv** <*nom du fichier*> <*chemin absolu du dossier*>|Déplace un fichier vers un dossier
|**whoami**|**whoami**|Affiche le nom de l'utilisateur courant|
|**set**|**env**|Affiche la liste des variables d'environnement|
|**cls**|**clear**|Efface l'écran du terminal|
