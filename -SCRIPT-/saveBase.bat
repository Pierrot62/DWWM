 

SetLocal EnableDelayedExpansion
cd C:\wamp64\bin\mysql\mysql5.7.31\data
for /d %%i in (*) do (
if /I %%i NEQ performance_schema if /I %%i NEQ mysql if /I %%i NEQ sys if /I %%i NEQ information_schema C:\wamp64\bin\mysql\mysql5.7.31\bin\mysqldump --user=root --databases %%i > U:\59011-95-03\BackupBdd\backup_%%i_%DATE:~6,4%%DATE:~3,2%%DATE:~0,2%.sql  
)
EndLocal