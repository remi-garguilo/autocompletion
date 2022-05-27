<?php

class Computer{

    public $pdo;

    public function __construct(){
    $pdo = new PDO('mysql:host=localhost;dbname=autocompletion;charset=utf8', 'root', 'root', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    $this->pdo = $pdo;

    }
    public function searchstart($computer){

        $tab = array(
            'start' => [],
            'contain'=>[]
        );
            $query = $this->pdo->prepare("SELECT * FROM `computer` WHERE nom LIKE CONCAT ('$computer','%')");
            $query->setFetchMode(\PDO::FETCH_ASSOC);
            $query->execute();
            $computerstart=$query->fetchall();
            if(!empty($computerstart)){
                $tab = array(
                    'start' => $computerstart,
                    'contain'=> []
                );
            }

            $query = $this->pdo->prepare("SELECT * FROM `computer` WHERE nom LIKE CONCAT ('%','$computer','%')");
            $query->setFetchMode(\PDO::FETCH_ASSOC);
            $query->execute();
            $contain=$query->fetchall();

            if(!empty($contain)){
                $tab = array(
                    'start' => $computerstart,
                    'contain'=> $contain
                );
            }
            for($i = 0; $i < $tab['contain'][$i];$i++){
                foreach($tab['start'] as $element){
                    if($element['nom'] == $tab['contain'][$i]['nom']){
                        array_splice($tab['contain'],$i,1);
                    }
                }
            }
        return $tab;
    }

    public function resultelement($id){
        $query = $this->pdo->prepare("SELECT * FROM `computer` WHERE id = '$id'");
        $query->setFetchMode(\PDO::FETCH_ASSOC);
        $query->execute();
        $content = $query->fetchAll();
        return $content;
    }

}