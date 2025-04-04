
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Demander une carte de fidélisation</title>
    <style>
        body {
            background-color: #b4e4b0; /* Couleur vert clair */
            padding: 0;
            text-align: center;
            font-family: Arial, sans-serif;
        }

        

        .logo {
            width: 400px;
            height: auto;
        }

        .rdv-box {
            background-color: #fff;
            padding: 25px;
            border-radius: 20px;
            display: inline-block;
            text-align: center;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
            width: 50%;
            margin-top: 20px;
        }

        h2 {
            color: #004792;
        }

        .form-group {
            margin-top: 15px;
            text-align: left;
        }

        label {
            font-weight: bold;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .submit-btn {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            margin-top: 15px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #218838;
        }

        .hidden {
            display: none;
        }
    </style>
</head>
<body>

    <div class="header">
        <img src="img/logo1.png" alt="Logo Cabinet Médical" class="logo">
    </div>

    <div class="rdv-box">
        <h2>Demandez votre carte de fidélisation</h2>
        <p>Après avoir terminé vos 4 consultations, vous recevrez une consultation totalement gratuite !</p>
        <img src="img/carte_fidelisation.jpg" alt="Carte de Fidélisation" width="300px" height="auto">

        <form action="confirmation_fidelisation.php" method="POST">
            <div class="form-group">
                <label>Nom :</label>
                <input type="text" name="nom" placeholder="Votre Nom" required>
            </div>

            <div class="form-group">
                <label>Prénom :</label>
                <input type="text" name="prenom" placeholder="Votre Prénom" required>
            </div>

            <div class="form-group">
                <label>Téléphone :</label>
                <input type="text" name="telephone" placeholder="Votre Numéro de Téléphone" required>
            </div>

            <div class="form-group">
                <label>Email :</label>
                <input type="email" name="email" placeholder="Votre Email" required>
            </div>

            <h2>💳 Paiement de 30 DH</h2>

            <div class="form-group">
                <label>Mode de paiement :</label>
                <select name="mode_paiement" id="mode_paiement" required onchange="togglePaymentFields()">
                    <option value="carte">Carte Bancaire</option>
                    <option value="paypal">PayPal</option>
                </select>
            </div>

            <div id="carte_paiement" class="form-group">
                <label>Numéro de Carte :</label>
                <input type="text" name="carte_numero" placeholder="**** **** **** ****" required>

                <label>Date d'expiration :</label>
                <input type="month" name="carte_expiration" required>

                <label>Code CVV :</label>
                <input type="text" name="carte_cvv" placeholder="123" required>
            </div>

            <div id="paypal_paiement" class="form-group hidden">
                <label>Email PayPal :</label>
                <input type="email" name="paypal_email" placeholder="exemple@paypal.com" required>
            </div>

            <button type="submit" class="submit-btn">✅ Confirmer et Payer</button>
        </form>
    </div>

    <script>
        function togglePaymentFields() {
            let mode = document.getElementById("mode_paiement").value;
            document.getElementById("carte_paiement").classList.toggle("hidden", mode !== "carte");
            document.getElementById("paypal_paiement").classList.toggle("hidden", mode !== "paypal");
        }
    </script>
</body>
</html>
