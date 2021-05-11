<?php

require_once('class.Abonnement.php');
/*
require_once('class.Discipline.php');
require_once('class.Spot.php');
require_once('class.Partenaire.php');
require_once('class.ListeRecompense.php');

*/
    class Utilisateur /*  implements JsonSerializable  */ {

        private $id = 0;
        private $nom = null;
        private $prenom = null;
        private $sexe = null;
        private $identifiant = null;
        private $password = null;
        private $email = null;
        private $ville = null;
        private $photo = null;

        private $partenaireRecompense = null;
        private $spotPartages = null;
        private $abonnement = null;
        private $lesDons = array();
        private $disciplineExercees = array();

        public function __construct($id = 0, $nom = null, $prenom = null, $sexe = null, $identifiant = null, $password = null,
            $email = null, $ville = null, $photo = null)
        {
            $this->id = $id;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->sexe = $sexe;
            $this->identifiant = $identifiant;
            $this->password = $password;
            $this->email = $email;
            $this->ville = $ville;
            $this->photo = $photo;
        }

        public function getId(): int{return $this->id;}
        public function getNom(){return $this->nom;}
        public function getPrenom(){return $this->prenom;}
        public function getIdentifiant(){return $this->identifiant;}
        public function getPassword(){return $this->password;}
        public function getEmail(){return $this->email;}
        public function getVille(){return $this->ville;}
        public function getPhoto(){return $this->photo;}

        public function getPartenaireRecompense(){return $this->partenaireRecompense;}
        public function getSpotPartages(){return $this->spotPartages;}
        public function getAbonnement(){return $this->abonnement;}
        public function getLesDons(): array{return $this->lesDons;}
        public function getDisciplineExercees(): array{return $this->disciplineExercees;}


        public function setId(int $id): void{$this->id = $id;}
        public function setNom($nom): void{$this->nom = $nom;}
        public function setPrenom($prenom): void{$this->prenom = $prenom;}
        public function setSexe($sexe): void{$this->sexe = $sexe;}
        public function setIdentifiant($identifiant): void{$this->identifiant = $identifiant;}
        public function setPassword($password): void{$this->password = $password;}
        public function setEmail($email): void{$this->email = $email;}
        public function setVille($ville): void{$this->ville = $ville;}
        public function setPhoto($photo): void{$this->photo = $photo;}


        public function setPartenaireRecompense($partenaireRecompense): void{$this->partenaireRecompense = $partenaireRecompense;}
        public function setSpotPartages($spotPartages): void{$this->spotPartages = $spotPartages;}
        public function setAbonnement($abonnement): void{$this->abonnement = $abonnement;}
        public function setLesDons(array $lesDons): void{$this->lesDons = $lesDons;}
        public function setDisciplineExercees(array $disciplineExercees): void{$this->disciplineExercees = $disciplineExercees;}


    /*    public function jsonSerialize(){
            return get_object_vars($this);
        }
*/
    }




