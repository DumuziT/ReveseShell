# ReveseShell

### **Para que los ReverseShells funcionen correctamente tendra que tener instaladas dos herramientas:**

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
Debe ser ejecutado con el tipo de shell que su sistema GNU/LINUX tiene, puede hacerlo de dos maneras.

1. Para visualizar la shell de su GNU/LINUX ejecute `echo $SHELL` en la TERMINAL, la respuesta a este comando es el tipo de shell que usted tiene, en mi caso obtengo *"/bin/bash"* asi que tendria que ejecutar `bash ReverseShell.sh`.

2. Esta manera es la mas simple y rapida, personalmente mi favorita porque funciona con todas las distribuciones GNU/LINUX, puede ejecutar directamente en la terminal `$SHELL ReverseShell.sh`.

#### ATACANTE:
##### Attacker.sh
Debe ser ejecutado con el comando `$SHELL`.
