<?php 

 class rel_planning_joursemaineDAO extends DAO {
    private $_id = "id as _id";
    private $_jour = "jour as _jour";
    private $_live = "live as _live";
    private $_datedebut = "datedebut as _datedebut";
    private $_datefin = "datefin as _datefin";
    private $_libelle_fr = "libelle_fr as _libelle_fr";
    private $_libelle_en = "libelle_en as _libelle_en";
//Recuperer l'objet
    public function get_rel_planning_joursemaine(){ 
         $req = $this-> prepare("SELECT $this->_id, $this->_jour, $this->_live, $this->_datedebut, $this->_datefin, $this->_libelle_fr, $this->_libelle_en FROM rel_planning_joursemaine " ); 
         $req->execute(); 
         return $this->cursorToObjectArray($req);
    }
//Récuperer une primary key (clé etrangère ou clé primaire) d'un élément via un ID, jour et live
    public function get_rel_planning_joursemaine_By_PK($id ,$jour ,$live){ 
        $req = $this-> prepare("SELECT   $this->_id ,  $this->_jour ,  $this->_live ,  $this->_datedebut ,  $this->_datefin , $this->_libelle_fr ,  $this->_libelle_en  FROM rel_planning_joursemaine  WHERE  id = :X_id AND jour= :X_jour AND live= :X_live");
        $req->BindParam(":X_id",$id);
        $req->BindParam(":X_jour",$jour);
        $req->BindParam(":X_live",$live);
        $req->execute(); 
         return $this->cursorToObject($req);
    }
//Suprimmé via un ID, jour et live
    public function delete_rel_planning_joursemaine($id ,$jour ,$live){ 
        $req = $this-> prepare("DELETE  FROM rel_planning_joursemaine  WHERE  id = :X_id AND jour= :X_jour AND live= :X_live");
        $req->BindParam(":X_id",$id);
        $req->BindParam(":X_jour",$jour);
        $req->BindParam(":X_live",$live);
        $resultat = $req->execute(); 
        return $resultat;
    }
//Mettre à jour via l'objet entier
    public function update_rel_planning_joursemaine($The_rel_planning_joursemaine){ 
        $req = $this-> prepare("UPDATE  rel_planning_joursemaine  SET id = :X_id , jour = :X_jour , live = :X_live , datedebut = :X_datedebut , datefin = :X_datefin , libelle_fr = :X_libelle_fr , libelle_en = :X_libelle_en  WHERE  id = :X_id AND jour= :X_jour AND live= :X_live");
        $req->bindValue(':X_id', $The_rel_planning_joursemaine->get_id());
        $req->bindValue(':X_jour', $The_rel_planning_joursemaine->get_jour());
        $req->bindValue(':X_live', $The_rel_planning_joursemaine->get_live());
        $req->bindValue(':X_datedebut', $The_rel_planning_joursemaine->get_datedebut());
        $req->bindValue(':X_datefin', $The_rel_planning_joursemaine->get_datefin());
        $req->bindValue(':X_libelle_fr', $The_rel_planning_joursemaine->get_libelle_fr());
        $req->bindValue(':X_libelle_en', $The_rel_planning_joursemaine->get_libelle_en());
        $resultat = $req->execute(); 
        return $resultat ;
    }
//Insérer via l'objet entier
    public function insert_rel_planning_joursemaine($The_rel_planning_joursemaine){ 
        $req = $this-> prepare("INSERT INTO  rel_planning_joursemaine (id, jour, live, datedebut, datefin, libelle_fr, libelle_en) VALUES (:X_id, :X_jour, :X_live, :X_datedebut, :X_datefin, :X_libelle_fr, :X_libelle_en) ");
        $req->bindValue(":X_id", $The_rel_planning_joursemaine->get_id());
        $req->bindValue(":X_jour", $The_rel_planning_joursemaine->get_jour());
        $req->bindValue(":X_live", $The_rel_planning_joursemaine->get_live());
        $req->bindValue(":X_datedebut", $The_rel_planning_joursemaine->get_datedebut());
        $req->bindValue(":X_datefin", $The_rel_planning_joursemaine->get_datefin());
        $req->bindValue(":X_libelle_fr", $The_rel_planning_joursemaine->get_libelle_fr());
        $req->bindValue(":X_libelle_en", $The_rel_planning_joursemaine->get_libelle_en());
        $resultat = $req->execute(); 
        return $resultat ;
    }

 }