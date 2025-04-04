<?php
$nom = $_POST['nom'];
$cin = $_POST['cin'];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Choisir une spécialité</title>
    <style>
         body {
            background-color: #017b9c;
            padding: 40px;
            text-align: center;
        }

        .logo {
            width: 350px;
            height: auto;
            margin-bottom: 20px;
        }
        .contact-info {
            position: absolute;
            top: 20px;
            right: 40px;
            background-color: white;
            padding: 15px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: bold;
            color: #030e3f;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
            text-align: left;
            line-height: 1.5;
        }

        fieldset {
            border: 3px solid #004792;
            border-radius: 30px;
            padding: 20px;
            background-color: #f4feff;
            margin-top: 20px;
        }

        legend {
            font-weight: bold;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: x-large;
            color: #030e3f;
        }

        label {
            font-weight: bold;
        }

        .specialite-table {
            width: 100%;
            margin-top: 20px;
            text-align: center;
        }

        .specialite-table img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }

        .specialite-table td {
            padding: 20px;
        }

        button {
            background-color: #007BFF;
            color: white;
            padding: 10px ;
            margin-top: 15px;
            border-radius: 5px;
            width: 100%;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <img src="img/logo.png" alt="Logo Cabinet Médical" class="logo">
    <div class="contact-info">
        📍 <strong>Adresse :</strong> 29 Rue lwilaya, Oujda, Maroc <br>
        📞 <strong>Téléphone :</strong> +212 512 547 896
    </div>

    <div>
        <h1>Bonjour, Mr/M.  <?php echo $nom; ?></h1>
        <h1>Vous êtes titulaire du CIN : <?php echo $cin; ?></h1>
        <h3>Veuillez choisir une spécialité :</h3>

        <fieldset>
            <legend>Spécialités</legend>
            <form action="choisir_medecin.php" method="POST">
                <table class="specialite-table">
                    <tr>
                        <td>
                            <input type="radio" id="cardiologie" name="specialite" value="Cardiologie" required>
                            <label for="cardiologie">
                                <img src="img/specialite1.jpg" alt="Cardiologie">
                                <br>Cardiologie
                            </label>
                        </td>
                        <td>
                            <input type="radio" id="pediatrie" name="specialite" value="Pédiatrie" required>
                            <label for="pediatrie">
                                <img src="img/specialite2.jpg" alt="Pédiatrie">
                                <br>Pédiatrie
                            </label>
                        </td>
                        <td>
                            <input type="radio" id="orthopedie" name="specialite" value="Orthopédie" required>
                            <label for="orthopedie">
                                <img src="img/specialite3.jpg" alt="Orthopédie">
                                <br>Orthopédie
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" id="dermatologie" name="specialite" value="Dermatologie" required>
                            <label for="dermatologie">
                                <img src="img/specialite4.jpg" alt="Dermatologie">
                                <br>Dermatologie
                            </label>
                        </td>
                        <td>
                            <input type="radio" id="neurologie" name="specialite" value="Neurologie" required>
                            <label for="neurologie">
                                <img src="img/specialite5.jpg" alt="Neurologie">
                                <br>Neurologie
                            </label>
                        </td>
                        <td>
                            <input type="radio" id="chirurgie" name="specialite" value="Chirurgie" required>
                            <label for="chirurgie">
                                <img src="img/specialite6.jpg" alt="Chirurgie">
                                <br>Chirurgie
                            </label>
                        </td>

                        <tr>
                        <td>
                            <input type="radio" id="ophtalmlogie" name="specialite" value="Ophtalmologie" required>
                            <label for="Ophtalmologie">
                                <img src="img/specialite7.jpg" alt="Ophtalmologie">
                                <br>Ophtalmologie
                            </label>
                        </td>
                        <td>
                            <input type="radio" id="psychiatrie" name="specialite" value="Psychiatrie" required>
                            <label for="Psychiatrie">
                                <img src="img/specialite8.jpg" alt="Psychiatrie">
                                <br>Psychiatrie
                            </label>
                        </td>
                        <td>
                            <input type="radio" id="Dentaire" name="specialite" value="Dentaire" required>
                            <label for="Dentaire">
                                <img src="img/specialite9.jpg" alt="Dentaire">
                                <br>Dentaire
                            </label>
                        </td>

                    </tr>
                </table>
                <br>
                <button type="submit">Confirmer le choix</button>
            </form>
        </fieldset>
    </div>
</body>
</html>
