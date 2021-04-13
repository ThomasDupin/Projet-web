<?php
class panier{
    private $DB;
    public function __construct($DB){
        if(!isset($_SESSION)){
            session_start();
        }
        if(!isset($_SESSION['panier'])){
            $_SESSION['panier']=array();
            }
        /* Si dessus on s'occupe de creer une session qui contient les element du panier */
            $this->DB = $DB;
            if(isset($_POST['panier']['quantity'])){
                $this->recalc();
            }
        }
    /* Ensuite on a une premiere fonction qui consiste a recalculer le prix total car on peut changer la quantité comme on veut */
        public function recalc(){
            foreach($_SESSION['panier'] as $produit_id => $quantity ){
                if(isset($_POST['panier']['quantity'][$produit_id])){
                    $_SESSION['panier'][$produit_id]=$_POST['panier']['quantity'][$produit_id];
                }
                
            }
            $_SESSION['panier']=$_POST['panier']['quantity'];
        }
/* Ici on compte le nombre d'articles dans notre panier */
        public function count(){
            return array_sum($_SESSION['panier']);
        }
        public function total(){
/* Ici la fonction pour calculer le prix total de notre panier */
            $total=0;
            $ids = array_keys($_SESSION['panier']);
        
            if(empty($ids)){
                $produits = array();
            }else {
                $produits = $this->DB->query('SELECT id_Produits, Prix FROM produits WHERE id_Produits IN ('.implode(',',$ids).')');
            }
            foreach( $produits as $produit){
                $total += $produit->Prix * $_SESSION['panier'][$produit->id_Produits] ;

            }
            return $total;

        }
   /* Ici on ajoute les elements au panier */
            public function add($produit_id){
                if(isset($_SESSION['panier'][$produit_id])){
                    $_SESSION['panier'][$produit_id]++;
            
                }else{
                    $_SESSION['panier'][$produit_id] = 1; 
                }
                
            }
    /* Et pour finir on supprime les elements du panier */
    public function del($produit_id)    {
        unset($_SESSION['panier'][$produit_id]);
    }  
}

      

    
   

