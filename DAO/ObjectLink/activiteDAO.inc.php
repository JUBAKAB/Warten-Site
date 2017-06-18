<?php 

 class activiteDAO extends DAO {
    private $_id = "id as _id";
    private $_reseaux = "reseaux as _reseaux";
    private $_APIurl = "APIurl as _APIurl";
//Recuperer l'objet
     public function get_activite(){ 
     $req = $this-> prepare("SELECT $this->_id, $this->_reseaux, $this->_APIurl FROM activite " ); 
     $req->execute(); 
     return $this->cursorToObjectArray($req);
}
//Récuperer une primary key (clé etrangère ou clé primaire) d'un élément via un ID
    public function get_activite_By_PK($id){ 
    $req = $this-> prepare("SELECT   $this->_id ,  $this->_reseaux ,  $this->_APIurl  FROM activite  WHERE  id = :X_id");
    $req->BindParam(":X_id",$id);
    $req->execute(); 
    return $this->cursorToObject($req);
}
//Suprimmé via un ID
     public function delete_activite($id){ 
        $req = $this-> prepare("DELETE  FROM activite  WHERE  id = :X_id");
        $req->BindParam(":X_id",$id);
        $resultat = $req->execute(); 
        return $resultat;
    }
//Mettre à jour via l'objet entier
     public function update_activite($The_activite){ 
        $req = $this-> prepare("UPDATE  activite  SET id = :X_id , reseaux = :X_reseaux , APIurl = :X_APIurl  WHERE  id = :X_id");
        $req->bindValue(':X_id', $The_activite->get_id());
        $req->bindValue(':X_reseaux', $The_activite->get_reseaux());
        $req->bindValue(':X_APIurl', $The_activite->get_APIurl());
        $resultat = $req->execute(); 
        return $resultat ;
    }
//Insérer via l'objet entier
    public function insert_activite($The_activite){ 
            $req = $this-> prepare("INSERT INTO  activite (id, reseaux, APIurl) VALUES (:X_id, :X_reseaux, :X_APIurl) ");
            $req->bindValue(":X_id", $The_activite->get_id());
            $req->bindValue(":X_reseaux", $The_activite->get_reseaux());
            $req->bindValue(":X_APIurl", $The_activite->get_APIurl());
            $resultat = $req->execute(); 
            return $resultat ;
    }

 }
