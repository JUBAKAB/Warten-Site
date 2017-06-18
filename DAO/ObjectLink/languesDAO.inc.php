<?php 

 class languesDAO extends DAO {
    private $_id = "id as _id";
    private $_libellé = "libellé as _libellé";
    private $_libcourt = "libcourt as _libcourt";
//Recuperer l'objet
     public function get_langues(){ 
         $req = $this-> prepare("SELECT $this->_id, $this->_libellé, $this->_libcourt FROM langues " ); 
         $req->execute(); 
         return $this->cursorToObjectArray($req);
    }
//Récuperer une primary key (clé etrangère ou clé primaire) d'un élément via un ID
     public function get_langues_By_PK($id){ 
         $req = $this-> prepare("SELECT   $this->_id ,  $this->_libellé ,  $this->_libcourt  FROM langues  WHERE  id = :X_id");
        $req->BindParam(":X_id",$id);
        $req->execute(); 
         return $this->cursorToObject($req);
    }
//Suprimmé via un ID
     public function delete_langues($id){ 
        $req = $this-> prepare("DELETE  FROM langues  WHERE  id = :X_id");
        $req->BindParam(":X_id",$id);
        $resultat = $req->execute(); 
        return $resultat;
    }
//Mettre à jour via l'objet entier
     public function update_langues($The_langues){ 
        $req = $this-> prepare("UPDATE  langues  SET id = :X_id , libellé = :X_libellé , libcourt = :X_libcourt  WHERE  id = :X_id");
        $req->bindValue(':X_id', $The_langues->get_id());
        $req->bindValue(':X_libellé', $The_langues->get_libellé());
        $req->bindValue(':X_libcourt', $The_langues->get_libcourt());
        $resultat = $req->execute(); 
        return $resultat ;
    }
//Insérer via l'objet entier
     public function insert_langues($The_langues){ 
        $req = $this-> prepare("INSERT INTO  langues (id, libellé, libcourt) VALUES (:X_id, :X_libellé, :X_libcourt) ");
        $req->bindValue(":X_id", $The_langues->get_id());
        $req->bindValue(":X_libellé", $The_langues->get_libellé());
        $req->bindValue(":X_libcourt", $The_langues->get_libcourt());
        $resultat = $req->execute(); 
        return $resultat ;
    }

 }