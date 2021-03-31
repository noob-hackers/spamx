#bin/bash
#SOME DICK HEADS TRY TO ABUSE OUR SCRIPT AND WE DONT GIVE FUCK TO THIER OPINIONS, USE IT ON YOUR OWN RISK WE DONT COLLECT ANY KIND OF YOUR PRIVATE DATA
#BUT SOME ELSE CAN MODIFY OUR SCRIPT AND THEY MAY DISTRACT YOU. JUST IGNORE THAT DICK HEADS .....
#FOR OUR SAFETY WE IMPLIMENTED SOME TECHNIQUES, CAUSE WE DONT LIKE TO GET IN TROUBLE SO. DONT EVEN TRY TO BOMB ON US..........
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
pkg install wget -y >/dev/null 2>&1
pip install lolcat >/dev/null 2>&1
pkg install vim -y >/dev/null 2>&1
pkg install curl -y >/dev/null 2>&1
pkg install pv -y >/dev/null 2>&1
pkg install jq -y >/dev/null 2>&1
echo -e "\e[34mALL THINGS ARE COMPLETED....[\e[92m✓\e[34m]\e[93m"
center "NOTE"
echo -e "\e[91mNOTE:\e[36m THIS TOOL USES 3rd PARTY API SO WE DONT GURANTEE YOUR PRIVACY AND WE ARE NOT RESPONSIBLE FOR THAT. WE CAN TAKE DOWN THIS TOOL ANY TIME. SO USE IT ON YOUR OWN RESPONSIBILITY\e[93m"
echo -e "\e[91mNOTE:\e[36m                  DONT TRY TO DO BOMBING ON MY NUMBER IF YOU TRY THEN YOUR DEVICE MAY GET FORK BOMBED AND MAY ACT UNSTABLE SO.... BE CAREFUL\e[93m"
sleep 20.0
center "STARTING SPAMX"
am start -a android.intent.action.VIEW -d https://bitly.com/nhytchannel
rm setup.sh
cd $HOME/spamx
bash spamx.sh
