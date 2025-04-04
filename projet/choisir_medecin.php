<?php

$specialite = $_POST['specialite'];

$medecins = [
    "Cardiologie" => [
        ["nom" => "Dr. Bazid", "image" => "img/medecin1.jpg"],
        ["nom" => "Dr. Melhaoui", "image" => "img/medecin2.jpg"],
        ["nom" => "Dr. Alaoui", "image" => "img/medecin3.jpg"]
    ],
    "Pédiatrie" => [
        ["nom" => "Dr. Zaazaa", "image" => "img/medecin4.jpg"],
        ["nom" => "Dr. Derkaoui", "image" => "img/medecin5.jpg"],
        ["nom" => "Dr. Guemmi", "image" => "img/medecin6.jpg"]
    ],
    "Orthopédie" => [
        ["nom" => "Dr. Hajji", "image" => "img/medecin7.jpg"],
        ["nom" => "Dr. Nassiri", "image" => "img/medecin8.jpg"],
        ["nom" => "Dr. El kebir", "image" => "img/medecin9.jpg"]
    ],
    "Dermatologie" => [
        ["nom" => "Dr. Chourak", "image" => "img/medecin10.jpg"],
        ["nom" => "Dr. Haddam", "image" => "img/medecin11.jpg"],
        ["nom" => "Dr. Belkadi", "image" => "img/medecin12.jpg"]
    ],
    "Neurologie" => [
        ["nom" => "Dr. Azzouzi", "image" => "img/medecin13.jpg"],
        ["nom" => "Dr. Zekhnini", "image" => "img/medecin14.jpg"],
        ["nom" => "Dr. Karouach", "image" => "img/medecin15.jpg"]
    ],
    "Chirurgie" => [
        ["nom" => "Dr. Ouadfel", "image" => "img/medecin16.jpg"],
        ["nom" => "Dr. Hajji", "image" => "img/medecin17.jpg"],
        ["nom" => "Dr. Mehdaoui", "image" => "img/medecin18.jpg"]
    ],
    "Ophtalmologie" => [
        ["nom" => "Dr. Benkiran", "image" => "img/medecin19.jpg"],
        ["nom" => "Dr. Chafik", "image" => "img/medecin20.jpg"],
        ["nom" => "Dr. Elgharbi", "image" => "img/medecin21.jpg"]
    ],
    "Psychiatrie" => [
        ["nom" => "Dr. Zougagh", "image" => "img/medecin22.jpg"],
        ["nom" => "Dr. Nouri", "image" => "img/medecin23.jpg"],
        ["nom" => "Dr. Bouayyad", "image" => "img/medecin24.jpg"]
    ],
    "Dentaire" => [
        ["nom" => "Dr. Khalfatni", "image" => "img/medecin25.jpg"],
        ["nom" => "Dr. Touzani", "image" => "img/medecin26.jpg"],
        ["nom" => "Dr. Khalloufi", "image" => "img/medecin27.jpg"]
    ]
];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Choisir un médecin</title>
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

        .medecin-table {
            width: 100%;
            margin-top: 20px;
            text-align: center;
        }

        .medecin-table img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
        }

        .medecin-table td {
            padding: 20px;
        }

        button {
            background-color: #007BFF;
            color: white;
            padding: 10px;
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

   
    <h2>Vous avez choisi la spécialité : <?php echo $specialite; ?></h2>
    <h3>Veuillez choisir un médecin :</h3>

    <fieldset>
        <legend>Médecins disponibles</legend>
        <form action="confirmation_rdv.php" method="POST">
           
            <input type="hidden" name="specialite" value="<?php echo $specialite; ?>">

            <table class="medecin-table">
                <tr>
                    <?php
                   
                        foreach ($medecins[$specialite] as $medecin) {
                            echo '<td>';
                            echo '<input type="radio" name="medecin" value="' . $medecin["nom"] . '" required>';
                            echo '<br><img src="' . $medecin["image"] . '" alt="' . $medecin["nom"] . '">';
                            echo '<br><strong>' . $medecin["nom"] . '</strong>';
                            echo '</td>';
                        }
                   
                    ?>
                </tr>
            </table>

            <br>
            <button type="submit">Confirmer le choix du médecin</button>
        </form>
    </fieldset>
</body>
</html>
