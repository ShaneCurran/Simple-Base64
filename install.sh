#!/bin/bash
# B64 console toolkit
# Allows Base64 encoding and decoding from one command, b64
# Usage: b64 SXQgd29ya3Mh
#               -> It works!
#         b64 "It works!"
#               -> SXQgd29ya3Mh
#
# @author Shane Curran

echo "*** Installing Simple-Base64 ***"

if which php >/dev/null; then
	mkdir ~/.b64
	wget https://raw.github.com/ShaneCurran/Simple-Base64/master/b64.php -O ~/.b64/b64.php
	echo "b64 () {
        	  php ~/.b64/b64.php \"\$1\"
	}" >> ~/.bashrc
	PS1="$ "
	. ~/.bashrc
	source ~/.bashrc
	echo "*** Install Complete ***"
else
	echo "Depends on php5-cli which is not installed. Please install it"
fi
