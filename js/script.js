$(document).ready(function(){
    // Show loader image
    $('#loader-image').show();

    // Show contacts.php
    showContacts();

    // Add contact
    $(document).on('submit', '#add-contact', function(){
        // Show loaded image
        $('#loader-image').show();

        // Post data from form
        $.post("add_contact.php", $(this).serialize())
          .done(function(data){
              console.log(data);
              $('#contact-modal').foundation('close');
              showContacts();
          })
          return false;
    });
});

function showContacts(){
    setTimeout("$('#page-content').load('contacts.php', function(){$('#loader-image').hide();})", 1000);
}