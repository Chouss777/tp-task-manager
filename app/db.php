  <?php
$host   = 'localhost';
$dbname = 'tasks';
$user   = 'root';
$pass   = '';

try {
    // Connexion PDO avec encodage UTF-8
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);

    // Mode d'erreur : exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
