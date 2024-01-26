<?php
class ReserverClass{
    private $mail;
    private $mdp;
    private $film;
    public function set(){
        $this->mail=$_POST['mail'];
        $this->mdp=$_POST['mdp'];
    }
    public function setFilm($film){
        $this->film=$film;
    }
    public function getMail(){
        return $this->mail;
    }
    public function getMdp(){
        return $this->mdp;
    }
    public function getfilm(){
        return $this->film;
    }
}