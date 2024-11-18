<?php 

$dbHost = getenv('POSTGRES_HOST') ?: 'postgres';
$dbPort = getenv('POSTGRES_PORT') ?: '5432';
$dbName = getenv('POSTGRES_DB') ?: 'mydatabase';
$dbUser = getenv('POSTGRES_USER') ?: 'myuser';
$dbPassword = getenv('POSTGRES_PASSWORD') ?: 'mypassword';

$dsn = "pgsql:host=$dbHost;port=$dbPort;dbname=$dbName";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPassword, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);

    echo "Connexion réussie à la base de données PostgreSQL.\n";
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage() . "\n";
    exit;
}
?>
