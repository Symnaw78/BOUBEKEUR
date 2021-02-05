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

![](2021-02-05__2_.png)

- Pour activer un accès au serveur on configure son protocole SSH avec une connexion par mot de passe, mot de passe qu'il faudra entrer (rien de plus), ensuite on clique sur le lien qui nous est proposé sur *par le Web*, ou on entre l'url qui est affiché juste avant la parenthèse.

