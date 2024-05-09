<?php
 
class DB {
    private static ?DB $instance = null;
    private PDO $conn;
    private string $table;
    private string $columns = "*";
    private array $where = [];
 
    private function __construct() {
        $this->connect();
    }
 
    private function connect() {
        $dsn = 'mysql:host=localhost;dbname=adventureworkshop;charset=utf8mb4';
        $username = 'root';
        $password = '';
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
 
        try{
            $this->conn = new PDO($dsn, $username, $password, $options);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
 
    private function reset(): void {
        $this->columns = "*";
        $this->where = [];
    }
 
    public static function getInstance(): DB {
        if (self::$instance === null) {
            self::$instance = new DB();
        }
        return self::$instance;
    }
 
    public function getConnection(): PDO {
        return $this->conn;
    }
 
    public function table(string $table): DB {
        $this->table = $table;
        return $this;
    }
 
    public function select(string|array $columns): DB {
        $this->columns = is_array($columns) ? implode(", ", $columns) : $columns;
        return $this;
    }
 
    public function where($column, $operator, $value = null): DB {
        if (func_num_args() === 2) {
            $value = $operator;
            $operator = "=";
        }
        $this->where[] = [$column, $operator, $value];
        return $this;
    }
 
    public function get() {
        $sql = "SELECT $this->columns FROM $this->table";
 
        if (!empty($this->where)) {
            $whereParts = [];
            foreach ($this->where as $condition) {
                $whereParts[] = $condition[0] . " " . $condition[1] . " ?";
            }
 
            $sql .= " WHERE " . implode(" AND ", $whereParts);
        }
 
        $stmt = $this->conn->prepare($sql);
 
        $params = array_map(function($condition){
            return $condition[2];
        }, $this->where);
 
        $stmt->execute($params);
 
        $this->reset();
 
        return $stmt->fetchAll();
    }

    public function find($id) {
        $colums = "ID" . ucfirst($this->table);
        return $this->where($colums, $id)->get()[0] ?? null;
    }
}
 
print_r("<pre>");
// Mini ORM
$db = DB::getInstance();
$proizvodi = $db->table("proizvod")
            ->select(["IDProizvod", "Naziv"])
            ->where("IDProizvod", 1)
            ->where("Naziv", "like", "%Race%")
            ->get();
print_r($proizvodi);

// $conn = $db->getConnection();
// $stmt = $conn->prepare("SELECT IDProizvod, Naziv FROM proizvod where IDProizvod = ? and Naziv like ?");
// $stmt->execute([1, "%Race%"]);
// $proizvod = $stmt->fetchAll();
// print_r($proizvod);
 
$proizvodi1 = $db->table("kupac")->find(332);
print_r($proizvodi1);
 
//Manual sql query
// $db = DB::getInstance();
// $stmt = $conn->query("SELECT * FROM proizvod");
// $proizvodi = $stmt->fetchAll();
// print_r("<pre>");
// print_r($proizvodi);