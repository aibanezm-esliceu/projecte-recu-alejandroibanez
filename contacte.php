<?php
$pageTitle = "Contacto - Examen PHP";require __DIR__ . "/includes/header.php";
?>
<h1>Formulario de Contacto</h1>
<form action="processa.php" method="POST" style="display: flex; flex-direction: column;
gap: 10px; max-width: 400px;">
<label>Nom:</label>
<input type="text" name="nom" required>
<label>Email:</label>
<input type="email" name="email" required>
<label>Missatge:</label>
<textarea name="missatge" rows="3" required></textarea>
<button type="submit">Enviar Missatge</button>
</form>
<?php require __DIR__ . "/includes/footer.php"; ?>