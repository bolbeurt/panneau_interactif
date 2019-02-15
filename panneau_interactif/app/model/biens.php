<?php

class biens extends Model {

    /**
     * @description Renvoi la liste des films
     * @return array $films
     */
    public static function getAllBiens(){
        $db = Database::getInstance();
        $sql = "SELECT * FROM biens";              

        $biens = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        return $biens;
    }
    
    public static function upload(){
        $db = Database::getInstance();

        if(isset($_POST['valider'])){
            $type = $_POST['type'];
            $nb_pieces = $_POST['nb_pieces'];
            $surface = $_POST['surface'];
            $prix = $_POST['prix'];         
            $ville = $_POST['ville']; 
            $description = $_POST['description'];
            $perf_nrj = $_POST['perf_nrj']; 
            $ges = $_POST['ges'];
            $flashcode = $_POST['flashcode'];
            $adresse = $_POST['adresse'];
            $prestation = $_POST['prestation'];

         
        
        $requete = $db->prepare("insert into biens(type, nb_pieces, surface, prix, ville, description, perf_nrj, ges, flashcode, adresse, prestation) values (:type, :nb_pieces, :surface, :prix, :ville, :description, :perf_nrj, :ges, :flashcode, :adresse, :prestation)");
        


        $requete->bindValue(":type",$type,PDO::PARAM_STR);
        $requete->bindValue(":nb_pieces",$nb_pieces,PDO::PARAM_STR);
        $requete->bindValue(":surface",$surface,PDO::PARAM_STR);  
        $requete->bindValue(":prix",$prix,PDO::PARAM_STR);  
        $requete->bindValue(":ville",$ville,PDO::PARAM_STR);
        $requete->bindValue(":description",$description,PDO::PARAM_STR);
        $requete->bindValue(":perf_nrj",$perf_nrj,PDO::PARAM_STR);
        $requete->bindValue(":ges",$ges,PDO::PARAM_STR);
        $requete->bindValue(":flashcode",$flashcode,PDO::PARAM_STR);
        $requete->bindValue(":adresse",$adresse,PDO::PARAM_STR);
        $requete->bindValue(":prestation",$prestation,PDO::PARAM_STR);        
        $requete->execute();

        return true;
    }
}

    public static function createImg(){

        $db = Database::getInstance();


        if(isset($_POST['valider'])){

        $flashcode = $_POST['flashcode'];
        $errorCorrectionLevel = 'L';
        $matrixPointSize = 10;


        $dir="Data/Qrcode/".$flashcode;
        if(!file_exists($dir)){
            mkdir($dir,0777,true);
        }
        $file_name = $dir.$flashcode.".png";
        Qrcode\QRcode::png($file_name, $errorCorrectionLevel, $matrixPointSize, 2);
        $logo = "logo.png";
        $QR = $file_name;
        if ($logo !== FALSE) {
            $QR = imagecreatefromstring(file_get_contents($QR));
            $logo = imagecreatefromstring(file_get_contents($logo));
            $QR_width = imagesx($QR);
            $QR_height = imagesy($QR);
            $logo_width = imagesx($logo);
            $logo_height = imagesy($logo);
            $logo_qr_width = $QR_width / 5;
            $scale = $logo_width/$logo_qr_width;
            $logo_qr_height = $logo_height/$scale;
            $from_width = ($QR_width - $logo_qr_width) / 2;


            imagecopyresampled($QR, $logo, $from_width, $from_width, 0, 0, $logo_qr_width,$logo_qr_height, $logo_width, $logo_height);
            }
        }
    }
}


    /* public static function getTypes(){
        $db = Database::getInstance();

        $sql = "select * from domaine";
        $domaines = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        return $domaines;
    } */

   /* public static function getFestInfos(){

        $db = Database::getInstance();

        $sql = "SELECT * FROM festival";
        $infosFests = $db->query($sql)->fetchAll(PDO::ASSOC);
        
        return $infosFests;
    }*/
