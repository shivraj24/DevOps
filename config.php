<?php

/**
 * Configuration for database connection
 *
 */

$host       = "localhost";
$username   = "admin";
$password   = "Shivraj@24";
$dbname     = "test";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );