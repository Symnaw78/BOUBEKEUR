Nacime Boubekeur  
05/02/2021

# Déploiement sur un serveur distant avec AlwaysData #

## Etape 0 ##

- Il y a biensûr l'hébergement d'applications grâce à une mise en ligne de l'application ou le site web qui a été développé en amont par le client, il y a également un hébergement des données, il nous permet aussi de configurer notre boîte mail avec un antispam et des règles de filtrage. Et pour finir AlwaysData nous permet d'enregistrer nos domaines avec plus de 700 extensions disponibles.  
- En théorie, l'hébergement seule sera nécessaire, cependant en y incluant le PHP il nous faudra gérer une base de données qui se fera donc avec AlwaysData.
- Le nom de domaine choisi pour le déploiement de mon site est :
**nacimeb.alwaysdata.net**

## Etape 1 ##

- L'intérêt du protocole **SSH** est sa communication sécurisée, imposant à l'utilisateur un échange de clés de chiffrement à chaque début de connexion, il garantit une authentification sûre des personnes souhaitant communiquer entre elles. Par défaut il est actif sur le **port 22**.
- Le protocole qui semble avoir les mêmes fonctionnalités est le protocole **FTP**, car ils peuvent échanger des fichiers sur internet entre deux ordinateurs, ils suivent donc le modèle client-serveur. Cependant la différence majeure est que **SSH** est par défaut sécurisé contrairement à **FTP**.  
- Pour activer un accès au serveur on configure son protocole SSH avec une connexion par mot de passe, mot de passe qu'il faudra entrer (rien de plus), ensuite on clique sur le lien qui nous est proposé sur *par le Web*, ou on entre l'url qui est affiché juste avant la parenthèse.
- Pour se connecter on entre son identifiant et son mot de passe, puis on entre la commande **cd** *www*.
- Il faut déposer ses fichiers dans le répertoire *www* (**nacimeb@ssh1:~/www**).

## Etape 2 ##

-
-**scp** et **rsync** peuvent être d'une grande utilité car **scp** permet le transfert de fichier vers un serveur distant en tout sécurité, quant à **rsync** il va, lui, permettre la synchronisation de fichiers/répertoires vers un serveur distant en toute sécurité également.
- La commande complète pour ajouter des fichiers sauvegardés en local sur le serveur dédié est, pour ma part :  
`scp monportfolio3/* nacimeb@ssh-nacimeb.alwaysdata.net:~/www/`

Mais si on pouvait généraliser la commande, cela donnerait :  

    scp <chemin absolu du répertoire>* [nom d'utilisateur]@ssh-[nom d'utilisateur].alwaysdata.net:~/www/

- Pour vérifier que l'ajout a bien été effectué, on retourne sur notre espace dédiée et on entre la commande **cd www** puis **ls**, on est ainsi sensé voir nos fichiers être affiché.
- J'annonce avec fierté que l'url permettant de voir mon site en ligne est <nacimeb.alwaysdata.net

