<?php

    //Created by Mike Brouwer
    //19-02-16

    //CONNECT TO A SQL DATABASE USING MySQLi

    //Database information
    $SQLi_host      =   'localhost';
    $SQLi_username  =   'username';
    $SQLi_password  =   'password';
    $SQLi_database  =   'database';
    
    //Connecting to the database
    $SQLi_con       =   mysqli_connect($SQLi_host, $SQLi_username, $SQLi_password, $SQLi_database);

    //Check connection
    if ( mysqli_connect_errno() ) {
        echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
    }

    //Selection setting
    $SQLi           =   'SELECT * FROM `table1` WHERE 1';
    
    //Run selection command
    if ( $SQLi_result = mysqli_query($SQLi_con, $SQLi) ) {
        // Fetch one and one row
        while ( $SQLi_row = mysqli_fetch_row($SQLi_result) ) {
            
            //INSERT HERE YOUR CODE THAT WANTS TO USE DATA OUT OF THE DATABASE
            
            //Example Code
            print $SQLi_row[0].'<br>';
            //End Example Code
        }
        // Free result set
        mysqli_free_result($SQLi_result);
    }
    
    //Close the connection
    mysqli_close($SQLi_con);
?>
