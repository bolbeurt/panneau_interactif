<?php

class PageController extends Controller {

    public function index(){
        $infosFormSearch = biens::getAllbiens(false);
        $type = array('Maison', 'Appartement', 'Terrain');
        $flashcode = time();
        

        $biens = biens::upload($type, $nb_pieces, $surface, $prix, $ville, $description, $perf_nrj, $ges, $adresse, $flashcode, $prestation);
        $image = biens::createImg($QR);



        $template = $this->twig->loadTemplate('/Page/index.html.twig');
        echo $template->render(array(
            'infosFormSearch'   => $infosFormSearch,
            'type'              => $type,
            'flashcodename'     => $flashcode,
            'Qrcode'            => $image,     

        ));
    }


    public function help(){
        $template = $this->twig->loadTemplate('/Page/help.html.twig');
        echo $template->render(array());
    }

}


