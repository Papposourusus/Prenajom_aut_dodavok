<div class="car-form-container">
  <h2>Pridaj nové auto</h2>
  <?php if (!empty($message)) echo "<p class='" . ($success ? "success-message" : "error-message") . "'>$message</p>"; ?>

  <form method="post" enctype="multipart/form-data">
    <label for="title">Názov auta:</label>
    <input type="text" name="title" required>

    <label for="price">Cena za deň (€):</label>
    <input type="number" name="price" step="0.01" required>

    <label for="owner">Majiteľ:</label>
    <input type="text" name="owner" required>

    <label for="year">Rok výroby:</label>
    <input type="number" name="year" required>

    <label for="image">Obrázok auta:</label>
    <input type="file" name="image" accept="image/*" required>

    <button type="submit">Pridať auto</button>
  </form>
</div>

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
