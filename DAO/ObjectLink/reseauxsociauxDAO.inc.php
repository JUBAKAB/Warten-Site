<?php 

 class reseauxsociauxDAO extends DAO {
    private $_id = "id as _id";
    private $_nom = "nom as _nom";
    private $_url = "url as _url";
    private $_API = "API as _API";
//Recuperer l'objet
    public function get_reseauxsociaux(){ 
         $req = $this-> prepare("SELECT $this->_id, $this->_nom, $this->_url, $this->_API FROM reseauxsociaux " ); 
         $req->execute(); 
         return $this->cursorToObjectArray($req);
    }
//Récuperer une primary key (clé etrangère ou clé primaire) d'un élément via un ID
    public function get_reseauxsociaux_By_PK($id){ 
        $req = $this-> prepare("SELECT   $this->_id ,  $this->_nom ,  $this->_url ,  $this->_API  FROM reseauxsociaux  WHERE  id = :X_id");
        $req->BindParam(":X_id",$id);
        $req->execute(); 
        return $this->cursorToObject($req);
    }
//Suprimmé via un ID
    public function delete_reseauxsociaux($id){ 
        $req = $this-> prepare("DELETE  FROM reseauxsociaux  WHERE  id = :X_id");
        $req->BindParam(":X_id",$id);
        $resultat = $req->execute(); 
        return $resultat;
    }
//Mettre à jour via l'objet entier
    public function update_reseauxsociaux($The_reseauxsociaux){ 
        $req = $this-> prepare("UPDATE  reseauxsociaux  SET id = :X_id , nom = :X_nom , url = :X_url , API = :X_API  WHERE  id = :X_id");
        $req->bindValue(':X_id', $The_reseauxsociaux->get_id());
        $req->bindValue(':X_nom', $The_reseauxsociaux->get_nom());
        $req->bindValue(':X_url', $The_reseauxsociaux->get_url());
        $req->bindValue(':X_API', $The_reseauxsociaux->get_API());
        $resultat = $req->execute(); 
        return $resultat ;
    }
//Insérer via l'objet entier
    public function insert_reseauxsociaux($The_reseauxsociaux){ 
        $req = $this-> prepare("INSERT INTO  reseauxsociaux (id, nom, url, API) VALUES (:X_id, :X_nom, :X_url, :X_API) ");
        $req->bindValue(":X_id", $The_reseauxsociaux->get_id());
        $req->bindValue(":X_nom", $The_reseauxsociaux->get_nom());
        $req->bindValue(":X_url", $The_reseauxsociaux->get_url());
        $req->bindValue(":X_API", $The_reseauxsociaux->get_API());
        $resultat = $req->execute(); 
        return $resultat ;
    }

 }