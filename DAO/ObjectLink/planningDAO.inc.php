<?php 

 class planningDAO extends DAO {
    private $_id = "id as _id";
    private $_datedebutplanning = "datedebutplanning as _datedebutplanning";
    private $_datefinplanning = "datefinplanning as _datefinplanning";
//Recuperer l'objet
    public function get_planning(){ 
         $req = $this-> prepare("SELECT $this->_id, $this->_datedebutplanning, $this->_datefinplanning FROM planning " ); 
         $req->execute(); 
         return $this->cursorToObjectArray($req);
    }
//Récuperer une primary key (clé etrangère ou clé primaire) d'un élément via un ID
    public function get_planning_By_PK($id){ 
        $req = $this-> prepare("SELECT   $this->_id ,  $this->_datedebutplanning ,  $this->_datefinplanning  FROM planning  WHERE  id = :X_id");
        $req->BindParam(":X_id",$id);
        $req->execute(); 
        return $this->cursorToObject($req);
    }
//Suprimmé via un ID
    public function delete_planning($id){ 
        $req = $this-> prepare("DELETE  FROM planning  WHERE  id = :X_id");
        $req->BindParam(":X_id",$id);
        $resultat = $req->execute(); 
        return $resultat;
    }
//Mettre à jour via l'objet entier
    public function update_planning($The_planning){ 
        $req = $this-> prepare("UPDATE  planning  SET id = :X_id , datedebutplanning = :X_datedebutplanning , datefinplanning = :X_datefinplanning  WHERE  id = :X_id");
        $req->bindValue(':X_id', $The_planning->get_id());
        $req->bindValue(':X_datedebutplanning', $The_planning->get_datedebutplanning());
        $req->bindValue(':X_datefinplanning', $The_planning->get_datefinplanning());
        $resultat = $req->execute(); 
        return $resultat ;
    }
//Insérer via l'objet entier
    public function insert_planning($The_planning){ 
        $req = $this-> prepare("INSERT INTO  planning (id, datedebutplanning, datefinplanning) VALUES (:X_id, :X_datedebutplanning, :X_datefinplanning) ");
        $req->bindValue(":X_id", $The_planning->get_id());
        $req->bindValue(":X_datedebutplanning", $The_planning->get_datedebutplanning());
        $req->bindValue(":X_datefinplanning", $The_planning->get_datefinplanning());
        $resultat = $req->execute(); 
        return $resultat ;
    }

 }