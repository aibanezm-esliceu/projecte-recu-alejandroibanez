<?php
// 1. Comprobar que el método sea POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
echo "No s'han rebut dades del formulari.";
exit;
}
// 2. Recollir els valors
$nom = $_POST["nom"] ?? "";
$email = $_POST["email"] ?? "";
$missatge = $_POST["missatge"] ?? "";
// 3. Requerir la connexió a la base de dades
require __DIR__ . "/db.php";
// 4. Fer l'INSERT amb prepared statements (para evitar hackeos de Inyección SQL)
try {
$sql = "INSERT INTO contactes (nom, email, missatge) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($sql);
$result = $stmt->execute([$nom,$email, $missatge]);
// 5. Mostrar missatge d'èxit
if ($result) {$pageTitle = "Éxit!";
require __DIR__ . "/includes/header.php";
echo "<h1>¡Missatge enviat amb exit!</h1>";
echo "<p>Gracies!, $nom. Hem guardad el teu missatge a la base de dades.</p>";
echo "<a href='contacte.php'>Tornar al formlari</a>";
require __DIR__ . "/includes/footer.php";
}
} catch (PDOException $e) {
echo "Error al guardar el missatge: " . $e->getMessage();
}
?>