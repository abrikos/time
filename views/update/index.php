<?php
/* @var $this yii\web\View */
?>
<h1>Процедура обновления</h1>

<h3>ТОЛЬКО в ПЕРВЫЙ РАЗ!!!:</h3>
<pre>
    <a href="/soft/Git-2.10.1-64-bit.exe">Download 64bit  GIT to htdocs</a>
    OR
    <a href="/soft/Git-2.10.1-32-bit.exe">Download 32bit  GIT to htdocs</a>


    GET SOURCE
    cd C:\xampp\htdocs\
    rename time to time.original
    git clone https://github.com/abrikos/time
    REM time_bonus
    REM git reset  --hard origin/master
    REM git pull
    copy time.original\db\database.db time\db\

    MIGRATE DB
    <a href="/soft/sqlite-tools-win32-x86-3150100.zip">Download 32bit  sqlite3 ZIP archive</a>
    Extract sqlite3.exe to time\web\sqlite3.exe
    <a href="http://localhost/update/migrate" class="btn btn-primary" target="_blank">Alter LOCAL database</a>
    OR
    #sqlite3 -init add-bonus.sql ..\db\database.db

    <h2 class="text-danger">RESTART WINDOWS</h2> FOR git enable for apache
</pre>



