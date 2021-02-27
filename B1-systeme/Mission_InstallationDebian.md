Nacime  
Boubekeur  
27/02/2021

# Introduction à la virtualisation #

## Etape 1 ##

1. La version installée et utilisée de VirtualBox est la version 6.1.18.

2. Le système d'exploitation hôte est Windows 10 Famille, version 1909.

3. Pour accéder au BIOS manuellement à partir d'un PC allumé, il faut tout d'abord appuyer sur la touche **Windows** où il faudra cliquer sur le rouage qui va nous emmener dans les **paramètres**, ensuite **Mise à jour et sécurité**, on va dans **Récupération** à gauche dans l'onglet déroulant et on descend tout en bas pour cliquer sur **Redémarrer maintenant**.
Nous allons atterir sur un écran bleu où il faudra cliquer sur les éléments suivants :  
**Dépannage -> Option avancées -> Changer les paramètres du microprogramme UEFI -> Redémarrer**    
Nous voici finalement dans le BIOS, pour vérifier le paramètre de configuration qui permet de rendre la virtualisation possible il faut appuyer sur **F7** et cliquer sur **Advanced**, nous voyons ainsi une option **Intel Virtualization Technology** qui est **Enabled**, cela veut dire qu'elle est activé.  

4. Le type de virtualisation mis en oeuvre par l'hyperviseur VirtualBox est le type 2, ce qui veut dire qu'il est possible d'exécuter plusieurs hyperviseurs à la fois contrairement au type 1, mais étant donné que ce type d'hyperviseur s’installe et s’exécute sur un système d’exploitation déjà en place, plus de ressources sont utilisées car en plus du système d'exploitation, on fait également tourner l'hyperviseur simultanément et c'est ce qui nous limite à ce niveau là.

## Etape 2 ##

1. 
