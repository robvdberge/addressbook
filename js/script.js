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
              $('#addContact').foundation('close');
              showContacts();
          })
          return false;
    });

    
    // Edit buttons clickevent
    $('body').on('click', '.edit-button', function(e){
        let id = $(this).data('ci');
        $.ajax('contacts.php')
        .done(function(data){
            
            // select data from sent data
            let load = $(data).find('#editContact'+ id).html(); 
            load = load.replace('</form>','');
            load = load + '</form>';

            // load selected data into div 
            $('#editContact').html(load).foundation('open');
            
        });
        
    })
    
    // Edit buttons save-event
    $(document).on('submit', '#edit-contact', function(){
        
        // Show loaded image
        $('#loader-image').show();

        // Post data from form
        $.post("edit_contact.php", $(this).serialize())
          .done(function(data){
              //console.log(data);
              $('#editContact').foundation('close');
              showContacts();
          })
          return false;
    });

    // Delete buttons
    $(document).on('submit', '#deleteForm', function(){
        
        // Show loaded image
        $('#loader-image').show();

        // Post data from form
        $.post("delete_contact.php", $(this).serialize())
          .done(function(data){
              //console.log(data);
              showContacts();
          })
          return false;
    });
});

function showContacts(){
    setTimeout("$('#page-content').load('contacts.php', function(){$('#loader-image').hide();})", 500);
}
