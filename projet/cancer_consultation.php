<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Consultation Gratuite - Cancer du Sein</title>
    <style>
        body {
            background-color: #ffebf0;
            text-align: center;
            font-family: Arial, sans-serif;
        }
        .logo {
            width: 200px;
            margin-top: 20px;
        }
        .ribbon {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 80px;
        }
        .quote {
            font-size: 20px;
            font-weight: bold;
            color: #d63384;
            margin: 15px 0;
        }
        fieldset {
            border: 3px solid #D81B60;
            border-radius: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
            display: inline-block;
            width: 40%;
            text-align: left;
        }

        legend {
            font-size: 22px;
            font-weight: bold;
            color: #D81B60;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        input, select {
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 7px;
            margin-top: 5px;
        }

        button {
            background-color: #D81B60;
            color: white;
            padding: 10px;
            margin-top: 15px;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
            font-size: 16px;
            border: none;
        }
        button:hover {
            background-color: #b52b6b;
        }
    </style>
</head>
<body>
    <img src="img/ruban_rose.png" alt="Ruban Rose" class="ribbon">
    <img src="img/logo1.png" alt="Logo Cabinet Médical" class="logo">
    
    <div class="quote" id="quote"></div>
    
    <fieldset>
        <legend>Consultation Gratuite - Cancer du Sein</legend>
        <form onsubmit="return showAlert()">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" required><br><br>
            
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" required><br><br>
            
            <label for="tel">Téléphone :</label>
            <input type="tel" name="tel" id="tel" required><br><br>
            
            <button type="submit">Prendre Rendez-vous</button>
        </form>
    </fieldset>

    <audio autoplay loop>
        <source src="audio/motivation.mp3" type="audio/mp3">
    </audio>

    <script>
        const quotes = [
            "الكشف بكري بالذهب مشري",
            "حياتك تستحق الاهتمام، افحصي مبكرًا",
            "الوقاية خير من العلاج، لا تترددي في الكشف"
        ];
        document.getElementById("quote").innerText = quotes[Math.floor(Math.random() * quotes.length)];

        function showAlert() {
            let nom = document.getElementById("nom").value;
            let prenom = document.getElementById("prenom").value;
            let tel = document.getElementById("tel").value;

            if (nom && prenom && tel) {
                alert("Merci " + prenom + " " + nom + "! Votre rendez-vous a été pris avec succès.");
                return false;
            }
        }
    </script>
</body>
</html>
