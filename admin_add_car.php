<?php
session_start();

// Kontrola, či je admin
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    die("Nemáš oprávnenie pristupovať sem.");
}

// Pripojenie k databáze
$conn = new mysqli("localhost", "root", "", "auta");
if ($conn->connect_error) die("Chyba DB: " . $conn->connect_error);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST['title'];
    $price = $_POST['price'];
    $owner = $_POST['owner'];
    $year = $_POST['year'];

    // Spracovanie obrázku
    $image_name = basename($_FILES['image']['name']);
    $image_tmp = $_FILES['image']['tmp_name'];
    $upload_path = "assets/images/" . $image_name;

    if (move_uploaded_file($image_tmp, $upload_path)) {
        $image = $image_name;

        // Vloženie do DB
        $stmt = $conn->prepare("INSERT INTO auta (title, image, price_per_day, owner, year) VALUES (?, ?, ?, ?, ?)");
        if ($stmt) {
            $stmt->bind_param("ssdsi", $title, $image, $price, $owner, $year);
            if ($stmt->execute()) {
                echo "Auto bolo úspešne pridané.";
            } else {
                echo "Chyba pri vykonávaní dotazu: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Chyba pri príprave dotazu: " . $conn->error;
        }
    } else {
        echo "Chyba pri nahrávaní obrázku.";
    }
}
?>


<form method="post" enctype="multipart/form-data">
    <label>Názov auta:</label><br>
    <input type="text" name="title" required><br><br>

    <label>Cena na deň (€):</label><br>
    <input type="number" name="price" step="0.01" required><br><br>

    <label>Majiteľ:</label><br>
    <input type="text" name="owner" required><br><br>

    <label>Rok výroby:</label><br>
    <input type="number" name="year" min="1900" max="2099" required><br><br>

    <label>Obrázok (jpg/png):</label><br>
    <input type="file" name="image" accept="image/*" required><br><br>

    <button type="submit">Pridať vozidlo</button>
</form>




<style>
  .car-form-container {
    max-width: 600px;
    margin: 40px auto;
    padding: 30px;
    background: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
  }

  .car-form-container h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
  }

  .car-form-container label {
    display: block;
    margin-top: 15px;
    font-weight: bold;
    color: #444;
  }

  .car-form-container input[type="text"],
  .car-form-container input[type="number"],
  .car-form-container input[type="file"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }

  .car-form-container button {
    margin-top: 20px;
    width: 100%;
    padding: 12px;
    background-color: #007bff;
    border: none;
    color: white;
    font-weight: bold;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .car-form-container button:hover {
    background-color: #0056b3;
  }

  .success-message {
    text-align: center;
    color: green;
    font-weight: bold;
    margin-top: 10px;
  }

  .error-message {
    text-align: center;
    color: red;
    font-weight: bold;
    margin-top: 10px;
  }
</style>
