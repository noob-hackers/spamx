#bin/bash
clear
center() {
  termwidth=$(stty size | cut -d" " -f2)
  padding="$(printf '%0.1s' ={1..500})"
  printf '%*.*s %s %*.*s\n' 0 "$(((termwidth-2-${#1})/2))" "$padding" "$1" 0 "$(((termwidth-1-${#1})/2))" "$padding"
}
echo -e "\e[92m              
	___  ____   __    __  __  _  _ 
       / __)(  _ \ /__\  (  \/  )( \/ )
       \__ \ )___//(__)\  )    (  )  ( 
       (___/(__) (__)(__)(_/\/\_)(_/\_)
                                         SETUP
"
echo -e "\e[93m"
center "INSTALLATION PROCESS"
echo -e "\e[34mINSTALLING PACKAGES.....WAIT\e[0m"
cd $HOME
pkg install python -y >/dev/null 2>&1
pkg install python2 -y >/dev/null 2>&1
pkg install php -y >/dev/null 2>&1
pkg install git -y >/dev/null 2>&1
pkg install pv -y >/dev/null 2>&1
pkg install wget -y >/dev/null 2>&1
pip install lolcat >/dev/null 2>&1
echo -e "\e[34mALL THINGS ARE COMPLETED....[\e[92m✓\e[34m]\e[93m"
center "STARTING SPAMX"
am start -a android.intent.action.VIEW -d https://bitly.com/nhytchannel
cd $HOME/spamx
rm setup.sh
bash spamx.sh
