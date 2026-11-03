<?php
class Database {
    private static $host = "localhost";
    private static $user = "root";
    private static $pass = "";
    private static $dbname = "crudapi";
    public static $conn;

    public static function getConnection() {
        self::$conn = null;
        try {
            self::$conn = new PDO(
                "mysql:host=" . self::$host . ";dbname=" . self::$dbname . ";charset=utf8mb4",
                self::$user,
                self::$pass
            );
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die("Erro conexão: " . $e->getMessage());
        }
        return self::$conn;
    }
}
?>