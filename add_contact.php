<?php

include 'core/init.php';

$db = new Database;

$db->query('INSERT INTO contacts(first_name, infix, last_name, email, phone, 
               address1, address2, city, province, zipcode, notes, contact_group)
               VALUES (:first_name, :infix, :last_name, :email, :phone, 
               :address_1, :address_2, :city, :province, :zipcode, :notes, :contact_group)');

// Bind values
$db->bind(':first_name', $_POST['first_name']);
$db->bind(':infix', $_POST['infix']);
$db->bind(':last_name', $_POST['last_name']);
$db->bind(':email', $_POST['email']);
$db->bind(':phone', $_POST['phone']);
$db->bind(':address_1', $_POST['address_1']);
$db->bind(':address_2', $_POST['address_2']);
$db->bind(':city', $_POST['city']);
$db->bind(':province', $_POST['province']);
$db->bind(':zipcode', $_POST['zipcode']);
$db->bind(':notes', $_POST['notes']);
$db->bind(':contact_group', $_POST['contact_group']);

// Execute query
if ($db->execute()){
    header('location: index.php');
    exit();
} 
