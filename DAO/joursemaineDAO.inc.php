<?php include_once '../DAO.inc.php'; 

 class joursemaineDAO extends DAO {
private $_id = "id as _id";
private $_jour = "jour as _jour";

 public function get_joursemaine(){ 
 $req = $this-> prepare("SELECT $this->_id, $this->_jour FROM joursemaine " ); 
 $req->execute(); 
 return $this->cursorToObjectArray($req);
}

 public function get_joursemaine_By_PK($id){ 
 $req = $this-> prepare("SELECT   $this->_id ,  $this->_jour  FROM joursemaine  WHERE  id = :X_id");
$req->BindParam(":X_id",$id);
$req->execute(); 
 return $this->cursorToObject($req);
}

 public function delete_joursemaine($id){ 
 $req = $this-> prepare("DELETE  FROM joursemaine  WHERE  id = :X_id");
$req->BindParam(":X_id",$id);
$resultat = $req->execute(); 
 return $resultat;
}

 public function update_joursemaine($The_joursemaine){ 
 $req = $this-> prepare("UPDATE  joursemaine  SET id = :X_id , jour = :X_jour  WHERE  id = :X_id");
$req->bindValue(':X_id', $The_joursemaine->get_id());
$req->bindValue(':X_jour', $The_joursemaine->get_jour());
 $resultat = $req->execute(); 
 return $resultat ;
}

 public function insert_joursemaine($The_joursemaine){ 
 $req = $this-> prepare("INSERT INTO  joursemaine (id, jour) VALUES (:X_id, :X_jour) ");
$req->bindValue(":X_id", $The_joursemaine->get_id());
$req->bindValue(":X_jour", $The_joursemaine->get_jour());
 $resultat = $req->execute(); 
 return $resultat ;
}

 }