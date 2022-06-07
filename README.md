# ReveseShell Victima LINUX

1. [Español](https://github.com/DumuziT/ReveseShell#Español)
2. [English](https://github.com/DumuziT/ReveseShell#English)

## Español

***Como atacante, si su sistema operativo es "GNU/LINUX", es importante saber que tipo de shell tiene tu maquina, para mostrar el shell ejecuta `echo $SHELL` en la TERMINAL, la respuesta a este comando es el tipo de shell que tienes, en mi caso obtengo "/bin/bash", así que tendría que ejecutar `bash ReverseShell`. Si su sistema operativo es "Windows", sabemos que tenemos la "cmd.exe" pero es importante tener espacio en su disco duro para poder descargar [nc.exe](https://github.com/int0x33/nc.exe/)***

### **Para que los ReverseShells funcionen correctamente en la posición de atacante, deberá tener dos herramientas instaladas:**

1. ***NETCAT(Linux/Windows), para tener tu máquina en escucha antes de que la victima ejecute el ReverseShell.***

2. ***RLWRAP(Linux), es una utilidad que mejora la movilidad en shells, nos permite usar atajos de teclado como `Ctrl+L`, o recuperar comandos usados anteriormente con la tecla `flecha arriba` (si hacemos `Ctrl+C ` perderemos el shell) cada vez que estemos en escucha a un shell, se recomienda usar `rlwrap`.***

### Instalar NETCAT y RLWRAP (GNU/LINUX)
```
sudo apt-get update
sudo apt-get install netcat
sudo apt-get install rlwrap
```
### Instalar NETCAT (Windows)
- [nc32.exe](https://github.com/int0x33/nc.exe/blob/master/nc.exe)
- [nc64.exe](https://github.com/int0x33/nc.exe/blob/master/nc64.exe)

# Archivos ReverseShell
- [BASH](https://github.com/DumuziT/ReveseShell#bash)
- [PYTHON](https://github.com/DumuziT/ReveseShell#python3)
- [PERL](https://github.com/DumuziT/ReveseShell#perl)
- [PHP](https://github.com/DumuziT/ReveseShell#php)
- [POWERSHELL](https://github.com/DumuziT/ReveseShell#powershell)

## [BASH](https://github.com/DumuziT/ReveseShell#bash)
#### VÍCTIMA:
##### ReverseShell.sh
La victima debe ejecutar este script con su shell GNU/LINUX `$SHELL ReverseShell.sh`.

#### ATACANTE:
##### Atacante
(GNU/LINUX) Debe ejecutar en la terminal `rlwrap netcat -nlvp {PORT}` para estar a la escucha del ReverseShell.

(Windows) Debe ir al directorio que se encuentra "nc.exe" y ejecutar en la cmd `nc.exe -nlvp {PORT}` para estar a la escucha del ReverseShell.

## Python3
#### VÍCTIMA:
##### ReverseShell.py
La victima debe ejecutar este script con el "lenguaje de programacion python3" `python3 ReverseShell.py`.

#### ATACANTE:
##### Atacante
(GNU/LINUX) Debe ejecutar en la terminal `rlwrap netcat -nlvp {PORT}` para estar a la escucha del ReverseShell.

(Windows) Debe ir al directorio que se encuentra "nc.exe" y ejecutar en la cmd `nc.exe -nlvp {PORT}` para estar a la escucha del ReverseShell.

## PERL
#### VÍCTIMA:
##### ReverseShell.pl
La victima debe ejecutar este script con el "lenguaje de programacion perl" `perl ReverseShell.pl`.

#### ATACANTE:
##### Atacante
(GNU/LINUX) Debe ejecutar en la terminal `rlwrap netcat -nlvp {PORT}` para estar a la escucha del ReverseShell.

(Windows) Debe ir al directorio que se encuentra "nc.exe" y ejecutar en la cmd `nc.exe -nlvp {PORT}` para estar a la escucha del ReverseShell.

## PHP
#### VÍCTIMA:
##### ReverseShell.php
La victima debe ejecutar este script con el "lenguaje de programacion php" `php ReverseShell.php`.

#### ATACANTE:
##### Atacante
(GNU/LINUX) Debe ejecutar en la terminal `rlwrap netcat -nlvp {PORT}` para estar a la escucha del ReverseShell.

(Windows) Debe ir al directorio que se encuentra "nc.exe" y ejecutar en la cmd `nc.exe -nlvp {PORT}` para estar a la escucha del ReverseShell.

## POWERSHELL
En PowerShell hay dos maneras de hacer un Reverse Shell Connection.
1. [PowerShell-1](https://github.com/DumuziT/ReveseShell#powershell-1)
2. [PowerShell-2](https://github.com/DumuziT/ReveseShell#powershell-2)

## PowerShell-1
#### VÍCTIMA:
##### ReverseShell.ps1
La victima debe ejecutar este script con el "lenguaje de scripting PowerShell" `pwsh ReverseShell.ps1`.

#### ATACANTE:
##### Atacante
(GNU/LINUX) Debe ejecutar en la terminal `rlwrap netcat -nlvp {PORT}` para estar a la escucha del ReverseShell.

(Windows) Debe ir al directorio que se encuentra "nc.exe" y ejecutar en la cmd `nc.exe -nlvp {PORT}` para estar a la escucha del ReverseShell.

## PowerShell-2
#### VÍCTIMA:
##### ReverseShell.ps1
La victima debe ejecutar este script con el "lenguaje de scripting PowerShell" `pwsh ReverseShell.ps1`, llevara a la victima al servidor web que nosotros montaremos para que pueda leer y ejecutar "PowerShellTcp.ps1" y asi iniciar la ReverseShell.

#### ATACANTE:
**El atacante debe ejecutar dos scripts, uno "Shell" y el otro "Python3" o "Python2"**
##### Atacante
1. - (GNU/LINUX) Debe ejecutar en la terminal `rlwrap netcat -nlvp {PORT}` para estar a la escucha del ReverseShell.
   - (Windows) Debe ir al directorio que se encuentra "nc.exe" y ejecutar en la cmd `nc.exe -nlvp {PORT}` para estar a la escucha del ReverseShell.

2. Ejecutar en la terminal `python3 -m http.server 8080` o `python2 -m SimpleHTTPServer 8080` para crear un servidor web en el directorio que se encuentra el archivo "PowerShellTcp.ps1" y asi cuando la victima ejecute su ReverseShell nosotros poder conectarnos.
