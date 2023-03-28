<?php
require $_SERVER['DOCUMENT_ROOT'] . '/includes/inc-top.php';
?>

<div>
    <div class="filter">
        <button>
            stagiaires
        </button>
        <button>
            candidats
        </button>
    </div>
    <div>
        <div class="search-container">
            <input type="text" placeholder="Rechercher un stagiaire ou un candidat...">
            <button type="submit">GO</button>
            <button type="submit" style="width:100px" class="button_add_new">AJOUTER</button>
        </div>
    </div>
    <div>
        <table class="tableListeAdmin">
            <tr>
                <th>role</th>
                <th>nom prenom</th>
                <th>classe</th>
                <th>téléphone</th>
                <th>adresse mail</th>
                <th>...</th>
            </tr>
            <tr>
                <td>stagiaire</td>
                <td>Ashton Durham</td>
                <td>devweb1</td>
                <td>06 44 25 45 76</td>
                <td>vulputate.lacus@icloud.org</td>
                <td><button>...</button></td>
            </tr>
            <tr>
                <td>stagiaire</td>
                <td>Jordan Webb</td>
                <td>cda</td>
                <td>06 78 18 22 03</td>
                <td>quis.turpis@protonmail.org</td>
                <td><button>...</button></td>
            </tr>
            <tr>
                <td>candidat</td>
                <td>Gray Holder</td>
                <td>devweb1</td>
                <td>06 12 25 21 06</td>
                <td>nonummy.ultricies@icloud.com</td>
                <td><button>...</button></td>
            </tr>
            <tr>
                <td>stagiaire</td>
                <td>Derek Burks</td>
                <td>devweb2</td>
                <td>06 94 68 67 48</td>
                <td>etiam@google.net</td>
                <td><button>...</button></td>
            </tr>
            <tr>
                <td>stagiaire</td>
                <td>Amber Faulkner</td>
                <td>devweb2</td>
                <td>06 82 20 58 13</td>
                <td>facilisis@hotmail.ca</td>
                <td><button>...</button></td>
            </tr>
            <tr>
                <td>stagiaire</td>
                <td>Melvin Burris</td>
                <td>devweb1</td>
                <td>07 21 13 42 37</td>
                <td>sem.consequat@yahoo.com</td>
                <td><button>...</button></td>
            </tr>
            <tr>
                <td>candidat</td>
                <td>Kelsey Mooney</td>
                <td>devweb1</td>
                <td>06 58 61 07 66</td>
                <td>quisque@icloud.net</td>
                <td><button>...</button></td>
            </tr>
            <tr>
                <td>stagiaire</td>
                <td>Marah Marsh</td>
                <td>devweb1</td>
                <td>07 64 08 97 35</td>
                <td>id@outlook.com</td>
                <td><button>...</button></td>
            </tr>
            <tr>
                <td>candidat</td>
                <td>Wyoming Mills</td>
                <td>cda</td>
                <td>06 36 42 90 04</td>
                <td>sed.pharetra.felis@yahoo.net</td>
                <td><button>...</button></td>
            </tr>
            <tr>
                <td>stagiaire</td>
                <td>Rhea Massey</td>
                <td>devweb2</td>
                <td>06 35 84 92 18</td>
                <td>mus@icloud.net</td>
                <td><button>...</button></td>
            </tr>
        </table>
    </div>
</div>









<?php
require $_SERVER['DOCUMENT_ROOT'] . '../includes/inc-bottom.php'
?>