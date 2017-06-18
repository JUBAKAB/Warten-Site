<?php 

 class sponsorDAO extends DAO {
    private $_id = "id as _id";
    private $_nom = "nom as _nom";
    private $_url = "url as _url";
    private $_image = "image as _image";
    private $_texte_fr = "texte_fr as _texte_fr";
    private $_texte_en = "texte_en as _texte_en";
//Recuperer l'objet
    public function get_sponsor(){ 
         $req = $this-> prepare("SELECT $this->_id, $this->_nom, $this->_url, $this->_image, $this->_texte_fr, $this->_texte_en FROM sponsor " ); 
         $req->execute(); 
         return $this->cursorToObjectArray($req);
    }
//Récuperer une primary key (clé etrangère ou clé primaire) d'un élément via un ID
     public function get_sponsor_By_PK($id){ 
        $req = $this-> prepare("SELECT   $this->_id ,  $this->_nom ,  $this->_url ,  $this->_image ,  $this->_texte_fr ,  $this->_texte_en  FROM sponsor  WHERE  id = :X_id");
        $req->BindParam(":X_id",$id);
        $req->execute(); 
        return $this->cursorToObject($req);
    }
//Suprimmé via un ID
    public function delete_sponsor($id){ 
        $req = $this-> prepare("DELETE  FROM sponsor  WHERE  id = :X_id");
        $req->BindParam(":X_id",$id);
        $resultat = $req->execute(); 
        return $resultat;
    }
//Mettre à jour via l'objet entier
     public function update_sponsor($The_sponsor){ 
        $req = $this-> prepare("UPDATE  sponsor  SET id = :X_id , nom = :X_nom , url = :X_url , image = :X_image , texte_fr = :X_texte_fr , texte_en = :X_texte_en  WHERE  id = :X_id");
        $req->bindValue(':X_id', $The_sponsor->get_id());
        $req->bindValue(':X_nom', $The_sponsor->get_nom());
        $req->bindValue(':X_url', $The_sponsor->get_url());
        $req->bindValue(':X_image', $The_sponsor->get_image());
        $req->bindValue(':X_texte_fr', $The_sponsor->get_texte_fr());
        $req->bindValue(':X_texte_en', $The_sponsor->get_texte_en());
        $resultat = $req->execute(); 
        return $resultat ;
    }
//Insérer via l'objet entier
    public function insert_sponsor($The_sponsor){ 
        $req = $this-> prepare("INSERT INTO  sponsor (id, nom, url, image, texte_fr, texte_en) VALUES (:X_id, :X_nom, :X_url, :X_image, :X_texte_fr, :X_texte_en) ");
        $req->bindValue(":X_id", $The_sponsor->get_id());
        $req->bindValue(":X_nom", $The_sponsor->get_nom());
        $req->bindValue(":X_url", $The_sponsor->get_url());
        $req->bindValue(":X_image", $The_sponsor->get_image());
        $req->bindValue(":X_texte_fr", $The_sponsor->get_texte_fr());
        $req->bindValue(":X_texte_en", $The_sponsor->get_texte_en());
        $resultat = $req->execute(); 
        return $resultat ;
    }

 }