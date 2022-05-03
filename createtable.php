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

   CREATE TABLE IF NOT EXISTS public."HAVERSTING"
(
    id integer NOT NULL,
    geom geometry(MultiPolygon,4326),
    name character varying(254) COLLATE pg_catalog."default",
    iso_a2 character varying(254) COLLATE pg_catalog."default",
    week01 numeric(50,0),
    week02 numeric(50,0),
    week03 numeric(50,0),
    week04 numeric(50,0),
    average numeric(50,0),
    reference_yield numeric(50,0),
    perfomance numeric(50,0),
    CONSTRAINT kizimbaaa_pkey PRIMARY KEY (id)
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public."HAVERSTING"
    OWNER to postgres;
?>