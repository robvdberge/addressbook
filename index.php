<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Powered Addressbook</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <div class="row">
        <div class="large-6 columns">
            <h1>AJAX Addressbook</h1>
        </div>
        <div class="large-6 columns">
            <a href="#" data-open="contact-modal" class="add-btn button float-right small">Nieuw Contact</a>
        </div>
        <div class="clear-fix"></div>
        <div class="reveal" id="contact-modal" data-reveal>
            <h2>Voeg contact toe</h2>
            <form id="add-contact" action="add_contact.php" method="POST">
                <div class="row">
                    <div class="large-6 columns">
                        <label>Voornaam
                            <input type="text" name="first_name" placeholder="Voer uw voornaam in">
                        </label>
                    </div>
                    <div class="large-6 columns">
                        <label>Tussenvoegsels
                            <input type="text" name="infix" placeholder="Voer uw tussenvoegsels in">
                        </label>
                    </div>
                    <div class="large-6 columns">
                        <label>Achternaam
                            <input type="text" name="last_name" placeholder="Voer uw achternaam in">
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-4 columns">
                        <label>Email
                            <input type="email" name="email" placeholder="Voer uw emailadres in">
                        </label>
                    </div>
                    <div class="large-4 columns">
                        <label>Tel.
                            <input type="text" name="phone" placeholder="Voer uw Telefoonnummer in">
                        </label>
                    </div>
                    <div class="large-4 columns">
                        <label>Contact Groep
                            <select name="contact_group">
                                <option value="">Familie</option>
                                <option value="">Vrienden</option>
                                <option value="">Zakelijk</option>
                            </select>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-6 columns">
                        <label>Adres 1
                            <input type="text" name="address_1" placeholder="Voer uw eerste adres in">
                        </label>
                    </div>
                    <div class="large-6 columns">
                        <label>Adres 2
                            <input type="text" name="address_2" placeholder="Voer uw tweede adres in">
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-4 columns">
                        <label>Woonplaats
                            <input type="text" name="city" placeholder="Voer uw woonplaats in">
                        </label>
                    </div>
                    <div class="large-4 columns">
                        <label>Provincie
                            <select name="province">
                                <option value="BR">Brabant</option>
                                <option value="LI">Limburg</option>
                                <option value="ZE">Zeeland</option>
                                <option value="ZH">Zuid-Holland</option>
                            </select>
                        </label>
                    </div>
                    <div class="large-4 columns">
                        <label>Postcode
                            <input type="text" name="zipcode" placeholder="Voer uw postcode in">
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <label>Notities
                            <textarea name="notes" placeholder="Voer overige kenmerken in"></textarea>
                        </label>
                    </div>
                </div>
                <input type="submit" name="submit" value="Voeg toe" class="add-btn button float-right small">
            </form>
            <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <!-- loader image-->
    <img src="img/ajax-loader.gif" id="loader-image">

    <!-- Main Content -->
    <div id="page-content">

    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/script.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
