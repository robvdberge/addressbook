<?php

include 'core/init.php';

$db = new Database;

$db->query('UPDATE contacts SET
            first_name  = :first_name, 
            infix       = :infix, 
            last_name   = :last_name, 
            email       = :email, 
            phone       = :phone, 
            address1    = :address_1, 
            address2    = :address_2, 
            city        = :city, 
            province    = :province, 
            zipcode     = :zipcode, 
            notes       = :notes, 
            contact_group = :contact_group
            WHERE id = :id');

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
$db->bind(':id', $_POST['id']);

// Execute query
if ($db->execute()){
    header('location: index.php');
    exit();
}