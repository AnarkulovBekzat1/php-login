<?php 
require 'libs/rb.php';
R::setup( 'mysql:host=127.0.0.1;dbname=buysellkg_it','buysellkg_it', '25643719Baku' ); 

if ( !R::testconnection() )
{
		exit ('Нет соединения с базой данных');
}

session_start();