<?php 
include 'core/init.php';
$db = new Database;

$db->query("SELECT * FROM contacts ORDER BY last_name ASC");
$contacts = $db->resultset();

?>
<div class="row">
    <div class="large-12 columns">
        <table id="main-table">
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
                            <a href="#" data-open="editContact<?php echo $contact->id;?>" class="edit-button button tiny" data-ci="<?php echo $contact->id; ?>">Aanpassen</a>
                            <form id="deleteForm" action="delete_contact.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $contact->id;?>">
                                <input type="submit" name="delete" class="alert button tiny" value="Verwijder">
                            </form>
                        </div>
                    </td>   
                </tr>
            
                <div class="reveal editModal" id="editContact<?php echo $contact->id;?>" data-reveal>
                    <h2>Pas Contact Aan</h2>
                    <form id="edit-contact" action="add_contact.php" method="POST">
                        <div class="row">
                            <div class="large-6 columns">
                                <label>Voornaam
                                    <input type="text" name="first_name" value="<?php echo $contact->first_name;?>">
                                </label>
                            </div>
                            <div class="large-6 columns">
                                <label>Tussenvoegsels
                                    <input type="text" name="infix" value="<?php echo $contact->infix;?>">
                                </label>
                            </div>
                            <div class="large-6 columns">
                                <label>Achternaam
                                    <input type="text" name="last_name" value="<?php echo $contact->last_name;?>">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-4 columns">
                                <label>Email
                                    <input type="email" name="email" value="<?php echo $contact->email;?>">
                                </label>
                            </div>
                            <div class="large-4 columns">
                                <label>Tel.
                                    <input type="text" name="phone" value="<?php echo $contact->phone;?>">
                                </label>
                            </div>
                            <div class="large-4 columns">
                                <label>Contact Groep
                                    <select name="contact_group">
                                        <option value="Familie" <?php if ($contact->contact_group == 'Familie'){echo 'Selected';}?>>Familie</option>
                                        <option value="Vrienden" <?php if ($contact->contact_group == 'Vrienden'){echo 'Selected';}?>>Vrienden</option>
                                        <option value="Zakelijk" <?php if ($contact->contact_group == 'Zakelijk'){echo 'Selected';}?>>Zakelijk</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-6 columns">
                                <label>Adres 1
                                    <input type="text" name="address_1" value="<?php echo $contact->address1;?>">
                                </label>
                            </div>
                            <div class="large-6 columns">
                                <label>Adres 2
                                    <input type="text" name="address_2" value="<?php echo $contact->address2;?>">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-4 columns">
                                <label>Woonplaats
                                    <input type="text" name="city" value="<?php echo $contact->city;?>">
                                </label>
                            </div>
                            <div class="large-4 columns">
                                <label>Provincie
                                    <select name="province">
                                        <option value="Brabant" <?php if ($contact->province == 'Brabant'){echo 'Selected';}?>>Brabant</option>
                                        <option value="Limburg" <?php if ($contact->province == 'Limburg'){echo 'Selected';}?>>Limburg</option>
                                        <option value="Zeeland" <?php if ($contact->province == 'Zeeland'){echo 'Selected';}?>>Zeeland</option>
                                        <option value="Zuid-Holland" <?php if ($contact->province == 'Zuid-Holland'){echo 'Selected';}?>>Zuid-Holland</option>
                                    </select>
                                </label>
                            </div>
                            <div class="large-4 columns">
                                <label>Postcode
                                    <input type="text" name="zipcode" value="<?php echo $contact->zipcode;?>">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-12 columns">
                                <label>Notities
                                    <textarea name="notes"><?php echo $contact->notes;?></textarea>
                                </label>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $contact->id;?>">
                        <input id="testBtn" type="submit" name="submit" value="Opslaan" class="button float-right small"></input>
                    </form>
                    <button class="close-button" data-close aria-label="Close modal" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--  -->
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>