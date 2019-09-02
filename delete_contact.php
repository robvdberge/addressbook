<?php

include 'core/init.php';

$db = new Database;

$db->query('DELETE FROM contacts WHERE id = :id');

// Bind values
$db->bind(':id', $_POST['id']);


// Execute query
if ($db->execute()){
    header('location: index.php');
    exit();
} 
