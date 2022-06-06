# ReveseShell LINUX

***Es importante saber que tipo de shell tiene su GNU/LINUX, para visualizar la shell ejecute `echo $SHELL` en la TERMINAL, la respuesta a este comando es el tipo de shell que usted tiene, en mi caso obtengo *"/bin/bash"* asi que yo tendria que ejecutar `bash ReverseShell`.***

### **Para que los ReverseShells funcionen correctamente en la posicion de atacante, tendra que tener instaladas dos herramientas:**

1. ***NETCAT, para tener su maquina en escucha y poder recibir la shell de la victima, cuando esta ejecute algun ReverseShell.***

2. ***RLWRAP, es una utilidad que nos mejora un la movilidad en shells, permite que podamos utilizar atajos de teclado como `Ctrl+L`, o que podamos recuperar comandos previamente usados con la tecla `flecha hacia arriba` (Si hacemos `Ctrl+C` perderemos la shell) siempre que nos pongamos en escucha para recibir una shell, es recomendable usar `rlwrap`.***

### La manera de instalar NETCAT y RLWRAP
```
sudo apt-get update
sudo apt-get install netcat
sudo apt-get install rlwrap
```

## BASH

#### VICTIMA:
##### ReverseShell.sh
Debe ser ejecutado con la shell que tiene el GNU/LINUX de la victima o con el comando `$SHELL`.

#### ATACANTE:
##### Attacker.sh
Debe ser ejecutado con la shell que tiene su GNU/LINUX o con el comando `$SHELL`.
