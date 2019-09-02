# Addressbook

A completely custom addressbook application written in PHP along with jQuery and Ajax.

## Description

A fully-functional addressbook in PHP.
Users are able to create, read, update and delete contacts.

### Uses

* PDO for Database communication
* AJAX for live server data requests
* JQuery for JavaScript scripts
* Foundation CSS Framework

## What I learned in this project

* Using AJAX to live-update database data without refreshing
* Using Foundation to create a HTML/CSS page design

### Programmed using

* WAMP 3.1.7 64bit
* MS Visual Studio Code
* PHPMyAdmin

### Addendum

Spend much time to find out that when using AJAX, some HTML tags are not parsed in the right order.
So i had to manipulate the AJAX responsetext to make it fit.
(/form> was parsed right behind the opening tag in stead of on the end of the form).
