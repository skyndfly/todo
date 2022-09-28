<?php
class QueryBuilder{
   protected $pdo;
   public function __construct($pdo)
   {
       $this->pdo = $pdo;
   }
   public function getAll($table){
       $sql = "SELECT * FROM {$table}";
       $statement = $this->pdo->prepare($sql);
       $statement->execute();

       return $statement->fetchAll(PDO::FETCH_ASSOC);
   }
   public function search($table, $text){
        $sql = "SELECT * FROM {$table} WHERE title LIKE '%". htmlspecialchars($text)."%'";
        $statement = $this->pdo->prepare($sql);

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
   public function create($table, $data){
       $keys = implode(',', array_keys($data));
       $tags = ":" . implode(', :', array_keys($data));
       $sql = "INSERT INTO {$table} ({$keys}) VALUES ({$tags})";

       $statement = $this->pdo->prepare($sql);
       $statement->execute($data);
   }
   public function getOneById($table, $id){
       $sql = "SELECT * FROM {$table} WHERE id=:id";
       $statement = $this->pdo->prepare($sql);
       $statement->bindValue(':id', $id);
       $statement->execute();
       return $statement->fetch(PDO::FETCH_ASSOC);
   }
   public function update($table, $data, $id){
        $keys = array_keys($data);
        $string = '';
        foreach ($keys as $key){
            $string .= $key . '=:' . $key . ',';
        }
        $data['id'] = $id;
        $keys = rtrim($string, ',');
        $sql = "UPDATE {$table} SET {$keys} WHERE id=:id";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(':id', $id);

        $statement->execute($data);

   }
   public function delete($table, $id){
        $sql = "DELETE FROM {$table} WHERE id=:id";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(':id', $id);
        $statement->execute();
    }
}
