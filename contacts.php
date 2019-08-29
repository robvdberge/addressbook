<?php 
include 'core/init.php';
$db = new Database;

$db->query("SELECT * FROM contacts");
$contacts = $db->resultset();

?>
<div class="row">
    <div class="large-12 columns">
        <table>
            <thead>
                <tr>    
                    <th width="200">Naam</th>
                    <th width="130">Tel.</th>
                    <th width="200">Email</th>
                    <th width="200">Adres</th>
                    <th width="100">Groep</th>
                    <th width="150">Actie</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ( $contacts as $contact ): ?>
                <tr>
                    <td><a href="contacts.php?id=">
                        <?php echo $contact->first_name . ' ' . $contact->infix . ' ' . $contact->last_name;?></a> </td>
                    <td><?php echo $contact->phone;?></td>
                    <td><?php echo $contact->email;?></td>
                    <td>
                        <ul>
                            <li><?php echo $contact->address1;?></li>
                            <li><?php if ( $contact->address2){echo $contact->address2;}?></li>
                            <li><?php echo $contact->city . ', ' . $contact->province . ' ' . $contact->zipcode;?></li>
                        </ul>
                    </td>
                    <td><?php echo $contact->contact_group;?></td>
                    <td>
                    <div class="button-group">
                            <a href="#" class="button tiny" data-open="add-contact">Aanpassen</a>
                            <a href="#" class="alert button tiny">Verwijder</a>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>