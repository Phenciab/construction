<?php


		 $dbHost = "localhost";
		 $dbName = "constbd";
		 $dbUsername = "root";
		 $dbUserpassword = "";
    


            try
            {
              $connect = new PDO("mysql:host=" .$dbHost . ";dbname=" .$dbName ,$dbUsername,$dbUserpassword);
              return $connect;
            }
            catch(PDOException $e)
            {
                die($e->getMessage());
            }




?>


