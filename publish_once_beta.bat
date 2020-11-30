:: Auto Updater on github
echo %date% %time%
git add .
git commit -m "I did it %date% %time%"
git branch beta
git push -u beta
pause
