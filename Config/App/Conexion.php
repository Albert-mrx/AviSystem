<?php
class Conexion{
    private $conect;
    private $host = "localhost";
    private $db = "db_avic";
    private $user = "root";
    private $pass = "";
    private $charset = "utf8mb4";

    public function __construct()
    {
        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $this->conect = new PDO($dsn, $this->user, $this->pass);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->conect->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (PDOException $e) {
            error_log("Error en la conexión: " . $e->getMessage());
            throw new Exception("Error al conectar con la base de datos");
        }
    }

    public function conect()
    {
        return $this->conect;
    }
}

?>