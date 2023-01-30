<?php

/*
----------------------
    DATABASE
----------------------
*/
const DB_HOST = "localhost";
const DB_USER = "roots";
const DB_PASS = "roots";
const DB_NAME = "project_resep-masakan";

/*
----------------------
    BASE URL
----------------------
BASE_URL isikan dengan url nama folder anda
Note : Jangan gunakan tanda slash(/) pada akhir
*/
const BASE_URL = "http://localhost/resep-masakan";

/*
----------------------
    FLASH TYPE
----------------------
Note : Gunakan value 1 atau 2 
*/
const FLASH_TYPE = 2;

/*
----------------------
    DEVELOPER MODE
----------------------
Note : Set true jika ingin menampilkan pesan errornya dan set false untuk menyembunyikan pesan errornya
*/
const DEVELOPER_MODE = true;

/*
----------------------
    KONFIGURASI LAINNYA
----------------------
*/
session_start();
date_default_timezone_set("Asia/Jakarta");
