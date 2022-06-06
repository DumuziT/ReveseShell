# ReveseShell LINUX

1. [Español](https://github.com/DumuziT/ReveseShell#Español)
2. [English](https://github.com/DumuziT/ReveseShell#English)

## Español

***Es importante saber que tipo de shell tiene tu GNU/LINUX, para mostrar el shell ejecuta `echo $SHELL` en la TERMINAL, la respuesta a este comando es el tipo de shell que tienes, en mi caso obtengo " /bin/bash", así que tendría que ejecutar `bash ReverseShell`.***

### **Para que los ReverseShells funcionen correctamente en la posición de atacante, deberá tener dos herramientas instaladas:**

1. ***NETCAT, para tener su máquina en escucha y poder recibir el shell de la víctima, cuando esta ejecute un ReverseShell.***

2. ***RLWRAP, es una utilidad que mejora la movilidad en shells, nos permite usar atajos de teclado como `Ctrl+L`, o recuperar comandos usados anteriormente con la tecla `flecha arriba` (si hacemos `Ctrl+C ` perderemos el shell) cada vez que estemos en escucha a un shell, se recomienda usar `rlwrap`.***

### Cómo instalar NETCAT y RLWRAP
```
sudo apt-get update
sudo apt-get install netcat
sudo apt-get install rlwrap
```

## BASH

#### VÍCTIMA:
##### ReverseShell.sh
Debe ejecutarse con el shell GNU/LINUX de la víctima o con el comando `$SHELL`.

#### ATACANTE:
##### Atacante.sh
Debe ejecutarse con el shell que tenga su GNU/LINUX o con el comando `$SHELL`.

## English

***It is important to know what type of shell your GNU/LINUX has, to show the shell execute `echo $SHELL` in the TERMINAL, the response to this command is the type of shell you have, in my case I get "/ bin/bash", so you would have to run `bash ReverseShell`.***

### **For ReverseShells to work properly at the attacker's position, you will need to have two tools installed:**

1. ***NETCAT, to have your machine listening and to be able to receive the shell of the victim, when it executes a ReverseShell.***

2. ***RLWRAP, is a utility that improves mobility in shells, it allows us to use keyboard shortcuts like `Ctrl+L`, or recover previously used commands with the `up arrow` key (if we do `Ctrl+ C ` we will lose the shell) every time we listen to a shell, it is recommended to use `rlwrap`.***

### How to install NETCAT and RLWRAP
```
sudo apt-get update
sudo apt-get install netcat
sudo apt-get install rlwrap
```

## BASH

#### VICTIM:
##### ReverseShell.sh
It must be run with the victim's GNU/LINUX shell or with the `$SHELL` command.

#### ATTACKER:
##### Attacker.sh
It must be run with whatever shell your GNU/LINUX has or with the `$SHELL` command.
