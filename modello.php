<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="../vehicle.css"/>
    <title>Dettaglio Modello</title>
</head>
<body class="vehicle-page">

<nav>
    <div class="logo">
        <a href="../index.php"><img src="../immagini/porsche-crest.8a292fb@2x.png" alt="Logo"></a>
    </div>
    <div class="nav-left">
        <a href="../index.php">Home</a>
    </div>
</nav>


<?php
// Connessione al database
$mysqli = new mysqli("localhost", "root", "", "porsche_store");
if ($mysqli->connect_error) {
    die("Connessione fallita: " . $mysqli->connect_error);
}

$modelloSelezionato = $_GET['modello'] ?? null;

if ($modelloSelezionato) {
    $stmt = $mysqli->prepare("SELECT name, descrizione, power, autonomy, acceleration, traction, immagine1, immagine2, immagine3, immagine4 FROM vehicle WHERE name = ?");
    $stmt->bind_param("s", $modelloSelezionato);
    $stmt->execute();
    $stmt->bind_result($name, $descrizione, $power, $autonomy, $acceleration, $traction, $immagine1, $immagine2, $immagine3, $immagine4);

    if ($stmt->fetch()) {
        $modello = [
            'nome' => $name,
            'descrizione' => $descrizione,
            'potenza' => $power,
            'autonomia' => $autonomy,
            'accelerazione' => $acceleration,
            'trazione' => $traction,
            'immagine' => $immagine1,
            'immagini' => array_filter([$immagine2, $immagine3, $immagine4])
        ];
    } else {
        $modello = null;
    }
    $stmt->close();
} else {
    $modello = null;
}

$mysqli->close();
?>

<?php if ($modello): ?>

    <section class="hero">
        <img src="<?= htmlspecialchars($modello['immagine']) ?>" alt="<?= htmlspecialchars($modello['nome']) ?>">
        <div class="hero-text">
            <h1><?= htmlspecialchars($modello['nome']) ?></h1>
            <p><?= htmlspecialchars($modello['descrizione']) ?></p>
        </div>
    </section>

    <section class="vehicle-info">
        <h2>Caratteristiche Tecniche</h2>
        <div>
            <p><?= htmlspecialchars($modello['potenza'] ?? '') ?></p>
            <p><?= htmlspecialchars($modello['autonomia'] ?? '') ?></p>
            <p><?= htmlspecialchars($modello['accelerazione'] ?? '') ?></p>
            <p><?= htmlspecialchars($modello['trazione'] ?? '') ?></p>
        </div>
    </section>

    <section class="gallery">
        <h2>Gallery</h2>
        <div class="gallery-images">
            <?php foreach ($modello['immagini'] as $img): ?>
                <img src="<?= htmlspecialchars($img) ?>" alt="<?= htmlspecialchars($modello['nome']) ?>">
            <?php endforeach; ?>
        </div>
    </section>

<?php else: ?>
    <p style="padding: 20px;">Modello non trovato.</p>
<?php endif; ?>

<footer>
    <p>© 2025 Porsche Italia</p>
</footer>

</body>
</html>