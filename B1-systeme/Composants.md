# **ROM (Read Only Memory)**

***

**Nacime BOUBEKEUR** 27/10/2020

***

Contrairement à la RAM, la **ROM**, aussi appelé **mémoire morte**, permet de stocker des données en l'absence de courant éléctrique

## Les données indispensables au démarrage

- Le **BIOS** est un programme permettant de piloter les interfaces d'entrée-sortie principales du système, d'où le nom de *BIOS ROM* donné parfois à la puce de mémoire morte de la carte-mère qui l'héberge.

- Le **chargeur d'amorce**: un programme permettant de charger le système d'exploitation en mémoire (vive) et de le lancer. Celui-ci cherche généralement le système d'exploitation sur le lecteur de disquette, puis sur le disque dur, ce qui permet de pouvoir lancer le système d'exploitation à partir d'une disquette système en cas de dysfonctionnement du système installé sur le disque dur.

- Le **Setup CMOS**, c'est l'écran disponible à l'allumage de l'ordinateur permettant de modifier les paramètres du système (souvent appelé *BIOS* à tort...).

- Le **Power-On Self Test** (*POST*), programme exécuté automatiquement à l'amorçage du système permettant de faire un test du système (c'est pour cela par exemple que vous voyez le système "compter" la RAM au démarrage).

Etant donné que les ROM sont beaucoup plus lentes que les mémoires de types RAM (une ROM a un temps d'accès de l'ordre de 150 ns tandis qu'une mémoire de type SDRAM a un temps d'accès d'environ 10 ns), les instructions contenues dans la ROM sont parfois copiées en RAM au démarrage, on parle alors de *shadowing* (en français cela pourrait se traduire par *ombrage*, mais on parle généralement de *mémoire fantôme*).

## Les types de ROM

Les ROM ont petit à petit évolué de *mémoires mortes figées* à des mémoires programmables, puis reprogrammables.

### ROM

Les premières **ROM** étaient fabriquées à l'aide d'un procédé inscrivant directement les données binaires dans une plaque de silicium grâce à un masque. Ce procédé est maintenant obsolète.

### PROM

Les **PROM** (*Programmable Read Only Memory*) ont été mises au point à la fin des années 70 par la firme *Texas Instruments*. Ces mémoires sont des puces constituées de milliers de fusibles (ou bien de diodes) pouvant être "grillés" grâce à un appareil appelé « *programmateur de ROM* », appliquant une forte tension (12V) aux cases mémoire devant être marquées. Les fusibles ainsi grillés correspondent à des 0, les autres à des 1.

### EPROM

Les **EPROM** (*Erasable Programmable Read Only Memory*) sont des PROM pouvant être effacées. Ces puces possèdent une vitre permettant de laisser passer des rayons ultra-violets. Lorsque la puce est en présence de rayons ultra-violets d'une certaine longueur d'onde, les fusibles sont reconstitués, c'est-à-dire que tous les bits de la mémoire sont à nouveau à 1. C'est pour cette raison que l'on qualifie ce type de PROM d'*effaçable*.

### EEPROM

Les **EEPROM** (*Electrically Erasable Read Only Memory*) sont aussi des PROM effaçables, mais contrairement aux EPROM, celles-ci peuvent être effacées par un simple courant électrique, c'est-à-dire qu'elles peuvent être effacées même lorsqu'elles sont en position dans l'ordinateur.

Il existe une variante de ces mémoires appelée **mémoires flash** (également *ROM Flash* ou *Flash EPROM*). Contrairement aux EEPROM classiques, utilisant 2 à 3 transistors par bit à mémoriser, la Flash EPROM utilise un seul transistor. D'autre part l'EEPROM peut-être écrite et lue mot par mot, alors que la Flash ne peut être effacée que par pages (la taille des pages étant en constante diminution).

![ROM](BOUBEKEUR/ROM2.jpg){width=75%}

![ROM](BOUBEKEUR/ROM3x.jpg){width=75%}
