<?php
require_once('vendor/autoload.php');
use App\Controller;
use App\Model\Model;
use App\Database\{
Database,
DatabaseConnectionCheck,
DatabaseConnection
};

new Controller();
new DatabaseConnection();
new Database();
new DatabaseConnectionCheck();
new Model();