<?php
   $host        = "host =bdboxcbme8fseccynjxl-postgresql.services.clever-cloud.com";
   $port        = "port = 5432";
   $dbname      = "dbname = bdboxcbme8fseccynjxl";
   $credentials = "user = uhlq69g0yrqnnx8zbgdq password=EDDZnhBIn6yJEOSAr58Q";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
   $sql =<<<EOF
   INSERT INTO KIZIMBA (ID,NAME,WEEK01,WEEK02,WEEK03)
      VALUES (6, 'Paul', 32, '200', 20000.00 );
EOF;

$ret = pg_query($db, $sql);
if(!$ret) {
   echo pg_last_error($db);
} else {
   echo "Table created successfully\n";
}
pg_close($db);
?>