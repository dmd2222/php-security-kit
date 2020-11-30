:: Auto Updater on github
echo %date% %time%
git add .
git commit -m "I did it %date% %time%"
git branch develop
git push -u origin develop
pause
