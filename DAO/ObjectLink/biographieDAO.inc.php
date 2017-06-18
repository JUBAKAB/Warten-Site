<?php 

 class biographieDAO extends DAO {
    private $_id = "id as _id";
    private $_titre = "titre as _titre";
    private $_texte_fr = "texte_fr as _texte_fr";
    private $_texte_en = "texte_en as _texte_en";
//Recuperer l'objet
     public function get_biographie(){ 
         $req = $this-> prepare("SELECT $this->_id, $this->_titre, $this->_texte_fr, $this->_texte_en FROM biographie " ); 
         $req->execute(); 
         return $this->cursorToObjectArray($req);
    }
//Récuperer une primary key (clé etrangère ou clé primaire) d'un élément via un ID
     public function get_biographie_By_PK(){ 
         $req = $this-> prepare("SELECT   $this->_id ,  $this->_titre ,  $this->_texte_fr ,  $this->_texte_en  FROM biographie  WHERE ");
         $req->execute(); 
         return $this->cursorToObject($req);
    }
//Suprimmé via un ID
     public function delete_biographie(){ 
         $req = $this-> prepare("DELETE  FROM biographie  WHERE ");
         $resultat = $req->execute(); 
         return $resultat;
    }
//Mettre à jour via l'objet entier
     public function update_biographie($The_biographie){ 
        $req = $this-> prepare("UPDATE  biographie  SET id = :X_id , titre = :X_titre , texte_fr = :X_texte_fr , texte_en = :X_texte_en  WHERE ");
        $req->bindValue(':X_id', $The_biographie->get_id());
        $req->bindValue(':X_titre', $The_biographie->get_titre());
        $req->bindValue(':X_texte_fr', $The_biographie->get_texte_fr());
        $req->bindValue(':X_texte_en', $The_biographie->get_texte_en());
        $resultat = $req->execute(); 
        return $resultat ;
    }
//Insérer via l'objet entier
     public function insert_biographie($The_biographie){ 
        $req = $this-> prepare("INSERT INTO  biographie (id, titre, texte_fr, texte_en) VALUES (:X_id, :X_titre, :X_texte_fr, :X_texte_en) ");
        $req->bindValue(":X_id", $The_biographie->get_id());
        $req->bindValue(":X_titre", $The_biographie->get_titre());
        $req->bindValue(":X_texte_fr", $The_biographie->get_texte_fr());
        $req->bindValue(":X_texte_en", $The_biographie->get_texte_en());
        $resultat = $req->execute(); 
        return $resultat ;
    }

 }