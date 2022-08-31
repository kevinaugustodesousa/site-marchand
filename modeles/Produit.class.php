<?php
class Produit{
    private $id;
    private $nom;
    private $prix;
    private $photo;



    function getId() {
        return $this->id;
    }
    function getNom(){
        return $this->nom;
    }
    function getPrix() {
        return $this->prix;
    }
    function getPhoto(){
        return $this->photo;
    }
    function setId($id){
        $this->id = $id; 
    }
    function setNom($nom){
        $this->nom = $nom;
    }
    function setPrix($prix){
        $this->prix =$prix;
    }  
    function setPhoto($photo){
        $this->photo = $photo;
    }
    public static function afficherTous(){
        $req=MonPdo::getInstance()->prepare("select*from produit");
        $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'produit');
        $req->execute();
        $lesResultats=$req->fetchAll();
        return $lesResultats;
    }
    public static function afficherRecherche(){
        $recherche=$_POST["recherche"] ;
	    $recherche=strtolower($recherche) ;
        $req=MonPdo::getInstance()->prepare("select*from produit where lower(nom) like'%$recherche%'");
        $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'produit');
        $req->execute();
        $lesResultats=$req->fetchAll();
        return $lesResultats;
        }
    public static function ajouter(Produit $produit){
        $req=MonPdo::getInstance()->prepare("insert into produit(nom, prix, photo) values(:nom, :prix, :photo)");
        $nom=$produit->getNom();
        $req->bindParam('nom',$nom);
        $prix=$produit->getPrix();
        $req->bindParam('prix',$prix);
        $photo=$produit->getPhoto();
        $req->bindParam('photo',$photo);
        $nb=$req->execute();
        
    }
    public static function trouverUnBonbon($id){
        $req=MonPdo::getInstance()->prepare("select * from produit where id=:id");
        $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'produit');
        $req->bindParam('id',$id);
        $req->execute();
        $leResultat=$req->fetch();
        return $leResultat;
    }
    public static function modifier(Produit $produit){
        $req=MonPdo::getInstance()->prepare("update produit set nom=:nom, prix=:prix, photo=:photo where id=:id ");
        $id=$produit->getId();
        $req->bindParam('id',$id);
        $nom=$produit->getNom();
        $req->bindParam('nom',$nom);
        $prix=$produit->getPrix();
        $req->bindParam('prix',$prix);
        $photo=$produit->getPhoto();
        $req->bindParam('photo',$photo);
        $nb=$req->execute();
        
    }
    public static function supprimer(Produit $produit){
        $req=MonPdo::getInstance()->prepare("delete from produit where id=:id ");
        $id=$produit->getId();
        $req->bindParam('id',$id);
        $nb=$req->execute();
        
    }
    public static function ajoutPanier(Produit $produit){
        $id=$produit->getId();
        if(isset($id)){
            if(!isset($_SESSION['panier'])){
                $_SESSION['panier'] =array(); // création de la variable de session
            }
            if(isset($_SESSION['panier'][$id])){
                $_SESSION['panier'][$id]++ ;
            }
            else{
                $_SESSION['panier'][$id]=1 ;
             }
            
        }
    }
    public static function voirPanier(){
        $string_id="";
        foreach($_SESSION['panier'] as $id => $q){
            $string_id=$string_id.$id;
            $string_id=$string_id.",";
        }
        $string_id= substr($string_id, 0, -1); 
        $string_req="select * from produit where id in (".$string_id.")";  
        $req=MonPdo::getInstance()->prepare($string_req);
        $req->bindParam('string',$string_id);
        $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,'produit');
        $req->execute();
        $lesResultats=$req->fetchAll();
        return $lesResultats;
    }
    public static function rajoutPanier($id){
        $_SESSION['panier'][$id]++ ;
    }
    public static function retraitPanier($id){
        $nb=$_SESSION['panier'][$id] ;
        if($nb==1){
            unset($_SESSION['panier'][$id]) ;
        }
        else{
            $_SESSION['panier'][$id]-=1 ;
        }
    }
    public static function viderPanier(){
        unset($_SESSION['panier']) ;
    }



}


?>
