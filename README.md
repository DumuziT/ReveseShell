# ReveseShell VICTIM LINUX

1. [Español](#Español)
2. [English](#English)

## Español

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
- [BASH](#bash)
- [PYTHON](#python3)
- [PERL](#perl)
- [PHP](#php)
- [POWERSHELL](#powershell)

## [BASH](#bash)
#### VÍCTIMA:
##### ReverseShell.sh
La victima debe ejecutar este script con su shell GNU/LINUX `$SHELL ReverseShell.sh`.

#### ATACANTE:
##### Atacante
(GNU/LINUX) Debe ejecutar en la terminal `rlwrap netcat -nlvp {PORT}` para estar a la escucha del ReverseShell.

(Windows) Debe ir al directorio que se encuentra "nc.exe" y ejecutar en la cmd `nc.exe -nlvp {PORT}` para estar a la escucha del ReverseShell.

## [Python3](#python3)
#### VÍCTIMA:
##### ReverseShell.py
La victima debe ejecutar este script con el "lenguaje de programacion python3" `python3 ReverseShell.py`.

#### ATACANTE:
##### Atacante
(GNU/LINUX) Debe ejecutar en la terminal `rlwrap netcat -nlvp {PORT}` para estar a la escucha del ReverseShell.

(Windows) Debe ir al directorio que se encuentra "nc.exe" y ejecutar en la cmd `nc.exe -nlvp {PORT}` para estar a la escucha del ReverseShell.

## [PERL](#perl)
#### VÍCTIMA:
##### ReverseShell.pl
La victima debe ejecutar este script con el "lenguaje de programacion perl" `perl ReverseShell.pl`.

#### ATACANTE:
##### Atacante
(GNU/LINUX) Debe ejecutar en la terminal `rlwrap netcat -nlvp {PORT}` para estar a la escucha del ReverseShell.

(Windows) Debe ir al directorio que se encuentra "nc.exe" y ejecutar en la cmd `nc.exe -nlvp {PORT}` para estar a la escucha del ReverseShell.

## [PHP](#php)
#### VÍCTIMA:
##### ReverseShell.php
La victima debe ejecutar este script con el "lenguaje de programacion php" `php ReverseShell.php`.

#### ATACANTE:
##### Atacante
(GNU/LINUX) Debe ejecutar en la terminal `rlwrap netcat -nlvp {PORT}` para estar a la escucha del ReverseShell.

(Windows) Debe ir al directorio que se encuentra "nc.exe" y ejecutar en la cmd `nc.exe -nlvp {PORT}` para estar a la escucha del ReverseShell.

## [POWERSHELL](#powershell)
En PowerShell hay dos maneras de hacer un Reverse Shell Connection.
1. [PowerShell-1](#powershell-1)
2. [PowerShell-2](#powershell-2)

## [PowerShell-1](#powershell-1)
#### VÍCTIMA:
##### ReverseShell1.ps1
La victima debe ejecutar este script con el "lenguaje de scripting PowerShell" `pwsh ReverseShell.ps1`.

#### ATACANTE:
##### Atacante
(GNU/LINUX) Debe ejecutar en la terminal `rlwrap netcat -nlvp {PORT}` para estar a la escucha del ReverseShell.

(Windows) Debe ir al directorio que se encuentra "nc.exe" y ejecutar en la cmd `nc.exe -nlvp {PORT}` para estar a la escucha del ReverseShell.

## [PowerShell-2](#powershell-2)
#### VÍCTIMA:
##### ReverseShell2.ps1
La victima debe ejecutar este script con el "lenguaje de scripting PowerShell" `pwsh ReverseShell.ps1`, llevara a la victima al servidor web que nosotros montaremos para que pueda leer y ejecutar "PowerShellTcp.ps1" y asi iniciar la ReverseShell.

#### ATACANTE:
**El atacante debe ejecutar dos scripts, uno "Shell" y el otro "Python3" o "Python2"**
##### Atacante
1. - (GNU/LINUX) Debe ejecutar en la terminal `rlwrap netcat -nlvp {PORT}` para estar a la escucha del ReverseShell.
   - (Windows) Debe ir al directorio que se encuentra "nc.exe" y ejecutar en la cmd `nc.exe -nlvp {PORT}` para estar a la escucha del ReverseShell.

2. Ejecutar en la terminal `python3 -m http.server 8080` o `python2 -m SimpleHTTPServer 8080` para crear un servidor web en el directorio que se encuentra el archivo "PowerShellTcp.ps1" y asi cuando la victima ejecute su ReverseShell nosotros poder conectarnos.


## English

***As an attacker, if your operating system is "GNU/LINUX", it is important to know what type of shell your machine has, to show the shell run `echo $SHELL` in the TERMINAL, the response to this command is the type shell you have, in my case I get "/bin/bash", so I would have to run `bash ReverseShell`. If your operating system is "Windows", we know that we have the "cmd.exe" but it is important to have space on your hard drive to be able to download [nc.exe](https://github.com/int0x33/nc.exe/ )***

### **For ReverseShells to work properly in the attacker position, you will need to have two tools installed:**

1. ***NETCAT(Linux/Windows), to have your machine listen before the victim runs ReverseShell.***

2. ***RLWRAP(Linux), is a utility that improves mobility in shells, it allows us to use keyboard shortcuts like `Ctrl+L`, or recover previously used commands with the `up arrow` key (if we do `Ctrl +C ` we will lose the shell) whenever we are listening to a shell, it is recommended to use `rlwrap`.***

### Install NETCAT and RLWRAP (GNU/LINUX)
```
sudo apt-get update
sudo apt-get install netcat
sudo apt-get install rlwrap
```
### Install NETCAT (Windows)
- [nc32.exe](https://github.com/int0x33/nc.exe/blob/master/nc.exe)
- [nc64.exe](https://github.com/int0x33/nc.exe/blob/master/nc64.exe)

# ReverseShell files
- [BASH](#bash-1)
- [PYTHON](#python3-1)
- [PERL](#perl-1)
- [PHP](#php-1)
- [POWERSHELL](#powershell-3)

## [BASH](#bash-1)
#### VICTIM:
##### ReverseShell.sh
The victim must run this script with their GNU/LINUX shell `$SHELL ReverseShell.sh`.

#### ATTACKER:
##### Attacker
(GNU/LINUX) You must run `rlwrap netcat -nlvp {PORT}` in the terminal to listen for ReverseShell.

(Windows) You must go to the directory where "nc.exe" is located and run cmd `nc.exe -nlvp {PORT}` to listen for ReverseShell.

## [Python3](#python3-1)
#### VICTIM:
##### ReverseShell.py
The victim must run this script with the "python3 programming language" `python3 ReverseShell.py`.

#### ATTACKER:
##### Attacker
(GNU/LINUX) You must run `rlwrap netcat -nlvp {PORT}` in the terminal to listen for ReverseShell.

(Windows) You must go to the directory where "nc.exe" is located and run cmd `nc.exe -nlvp {PORT}` to listen for ReverseShell.

## [PERL](#perl-1)
#### VICTIM:
##### ReverseShell.pl
The victim must run this script with the "perl programming language" `perl ReverseShell.pl`.

#### ATTACKER:
##### Attacker
(GNU/LINUX) You must run `rlwrap netcat -nlvp {PORT}` in the terminal to listen for ReverseShell.

(Windows) You must go to the directory where "nc.exe" is located and run cmd `nc.exe -nlvp {PORT}` to listen for ReverseShell.

## [PHP](#php-1)
#### VICTIM:
##### ReverseShell.php
The victim must execute this script with the "php programming language" `php ReverseShell.php`.

#### ATTACKER:
##### Attacker
(GNU/LINUX) You must run `rlwrap netcat -nlvp {PORT}` in the terminal to listen for ReverseShell.

(Windows) You must go to the directory where "nc.exe" is located and run cmd `nc.exe -nlvp {PORT}` to listen for ReverseShell.

## [POWERSHELL](#powershell-3)
In PowerShell there are two ways to do a Reverse Shell Connection.
1. [PowerShell-1](#powershell-1-1)
2. [PowerShell-2](#powershell-2-1)

## [PowerShell-1](#powershell-1-1)
#### VICTIM:
##### ReverseShell1.ps1
The victim must execute this script with the "PowerShell scripting language" `pwsh ReverseShell.ps1`.

#### ATTACKER:
##### Attacker
(GNU/LINUX) You must run `rlwrap netcat -nlvp {PORT}` in the terminal to listen for ReverseShell.

(Windows) You must go to the directory where "nc.exe" is located and run cmd `nc.exe -nlvp {PORT}` to listen for ReverseShell.

## [PowerShell-2](#powershell-2-1)
#### VICTIM:
##### ReverseShell2.ps1
The victim should run this script with the "PowerShell scripting language" `pwsh ReverseShell.ps1`, it will take the victim to the web server that we will set up so that she can read and execute "PowerShellTcp.ps1" and start the ReverseShell.

#### ATTACKER:
**The attacker must execute two scripts, one "Shell" and the other "Python3" or "Python2"**
##### Attacker
1. - (GNU/LINUX) You must run `rlwrap netcat -nlvp {PORT}` in the terminal to listen for ReverseShell.
   - (Windows) You must go to the directory where "nc.exe" is located and run in cmd `nc.exe -nlvp {PORT}` to listen for ReverseShell.

2. Run in terminal `python3 -m http.server 8080` or `python2 -m SimpleHTTPServer 8080` to create a web server in the directory where the "PowerShellTcp.ps1" file is located so that when the victim executes his ReverseShell we can connect.
