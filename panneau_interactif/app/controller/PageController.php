<?php

class PageController extends Controller {

    public function index(){
        $infosFormSearch = biens::getAllbiens(false);
        $type = array('Maison', 'Appartement', 'Terrain');

        

        $biens = biens::upload($type, $nb_pieces, $surface, $prix, $ville, $description, $perf_nrj, $ges, $adresse, $prestation);

        $template = $this->twig->loadTemplate('/Page/index.html.twig');
        echo $template->render(array(
            'infosFormSearch'   => $infosFormSearch,
            'type'              => $type,         

        ));
    }


    public function help(){
        $template = $this->twig->loadTemplate('/Page/help.html.twig');
        echo $template->render(array());
    }

}


