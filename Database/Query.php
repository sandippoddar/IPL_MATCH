<?php
require_once __DIR__ . '/../Database/Connection.php';

/**
 * This Class Implements Queries need in this Project.
 */
class Query extends Connection {

  /**
   * This Constructor uses here to invoke Constructor of Class Connection in
   * Query class whenever instance of Query class is created. 
   */
  public function __construct() {
    Connection::__construct();
  }

  /**
   * Function to insert records when new User registered.
   * 
   * @param string $userName
   *  Stores Username of new User.
   * @param string $email
   *  Stores Email Id of new User.
   * @param string $password
   *  Stores Password in hash format.
   * 
   * @return void
   */
  public function insert(string $name, int $run, int $ball) {
    $strikeRate = ($run/$ball)*100;
    $sql = $this->conn->prepare("INSERT INTO player (Name, Runs, Balls, Strike_Rate) VALUES(:userName, :run, :ball, :strike)");
    $sql->execute([':userName' => $name, ':run' => $run, ':ball' => $ball, ':strike' => $strikeRate]);
  }

  public function fetchPlayer() {
    $sql = $this->conn->prepare("SELECT * FROM player");
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public function maxStrikeRate() {
    $sql = $this->conn->prepare("SELECT Name FROM player WHERE Strike_Rate = (SELECT MAX(Strike_Rate) FROM player)");
    $sql->execute();
    $result = $sql->fetch(PDO::FETCH_ASSOC);
    return $result;
  }

  public function deletePlayer(int $playerId) {
    $sql = $this->conn->prepare("DELETE FROM player WHERE ID = :playerId");
    $sql->execute([':playerId' => $playerId]);
  }

  public function editPlayer (int $playerId, string $name, int $run, int $ball) {
    $sql = $this->conn->prepare("UPDATE player SET Name = :name, Runs = :run, Balls = :ball WHERE ID = :id");
    $sql->execute([':name' => $name, ':run' => $run, ':ball' => $ball, ':id' => $playerId]);
  }
}
