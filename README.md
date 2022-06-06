# ReveseShell LINUX

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
