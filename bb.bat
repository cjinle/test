@echo off 
set "n=100" 
:loop 
start "" echo "sdfsdf"
set /a "n+=1" 
pause
if not "%n%"=="102" goto loop 
pause