<?php 

 class gradeDAO extends DAO {
private $_id = "id as _id";
private $_libelle = "libelle as _libelle";

 public function get_grade(){ 
 $req = $this-> prepare("SELECT $this->_id, $this->_libelle FROM grade " ); 
 $req->execute(); 
 return $this->cursorToObjectArray($req);
}

 public function get_grade_By_PK($id){ 
 $req = $this-> prepare("SELECT   $this->_id ,  $this->_libelle  FROM grade  WHERE  id = :X_id");
$req->BindParam(":X_id",$id);
$req->execute(); 
 return $this->cursorToObject($req);
}

 public function delete_grade($id){ 
 $req = $this-> prepare("DELETE  FROM grade  WHERE  id = :X_id");
$req->BindParam(":X_id",$id);
$resultat = $req->execute(); 
 return $resultat;
}

 public function update_grade($The_grade){ 
 $req = $this-> prepare("UPDATE  grade  SET id = :X_id , libelle = :X_libelle  WHERE  id = :X_id");
$req->bindValue(':X_id', $The_grade->get_id());
$req->bindValue(':X_libelle', $The_grade->get_libelle());
 $resultat = $req->execute(); 
 return $resultat ;
}

 public function insert_grade($The_grade){ 
 $req = $this-> prepare("INSERT INTO  grade (id, libelle) VALUES (:X_id, :X_libelle) ");
$req->bindValue(":X_id", $The_grade->get_id());
$req->bindValue(":X_libelle", $The_grade->get_libelle());
 $resultat = $req->execute(); 
 return $resultat ;
}

 }