@echo off
for %%i in (*.html) do ren "%%i" "%%~ni.php"
echo Renaming complete.
pause