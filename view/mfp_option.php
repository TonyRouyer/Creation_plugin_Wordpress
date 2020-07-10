<?php
    $regexId = '/^UA-[0-9]{8,9}-[0-9]{1}$/' ;
    if (!empty($_POST['id'])) {
        if (preg_match($regexId, $_POST['id'])) {
            update_option('id', $_POST['id']);
        }
    }

    if (isset($_POST['lang'])) {
        update_option('lang', $_POST['lang']);
    }
// UA-00000000-0 
// UA-171799874-1

?>

<div class="wrap theme-option-page">
    <h1>LAMANU-cookie-law paramètre</h1>
    <form action="" method="POST">
        <div class="theme-options-group">
            <table cellspacing="0" class="form-table ">
                <thead>
                    <tr>
                        <th>Selection ID google analytics</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <label for="id">ID de suivi :  </label>
                            <input type="text" name="id" id="id">
                            <input type="submit" value="Confirm">
                        </td>
                    </tr>
                    <tr>
                        <td><p class="description">Format : UA-XXXXXXXX-X</p></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form> 

    <form action="" method="POST">
        <div class="theme-options-group">
            <table cellspacing="0" class="form-table ">
                <thead>
                    <tr>
                        <th>Selection de la langue</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <label for="langue">Changer de langue : 
                            <select name="lang" id="lang">
                                <option value="" selected disable>Selectionner une valeur</option>
                                <option value="bg">Bulgare</option>
                                <option value="cn">chinois</option>
                                <option value="cs">Tchèque</option>
                                <option value="da">Danois</option>
                                <option value="fr">Français</option>
                                <option value="de">Allemand</option>
                                <option value="el">Grec</option>
                                <option value="en">Anglais</option>
                                <option value="es">espagniol</option>
                                <option value="fi">Finnois</option>
                                <option value="fr">Français</option>
                                <option value="hu">Hongrois</option>
                                <option value="it">italien</option>
                                <option value="ja">Japonais</option>
                                <option value="nl">Néerlandais</option>
                                <option value="pl">Polonais</option>
                                <option value="pt">Portugais</option>
                                <option value="ro">Roumain</option>
                                <option value="ru">Russe</option>
                                <option value="sk">Slovaque</option>
                                <option value="tr">turc</option>
                            </select>
                        </label>
                        <input type="submit" value="Confirm">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form> 
</div>
