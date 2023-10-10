<?php
    class Movie{
        private $name;
        private $isan;
        private $year;
        private $punctuation;
        
        public function __construct($name,$isan,$year,$punctuation){
            // echo "public function __construct(name,isan,year,punctuation){";
            $this->name=$name;
            $this->isan=$isan;
            $this->year=$year;
            $this->punctuation=$punctuation;
        }

        public function getName(){
            // echo "public function getName(){";
            return $this->name;
        }
        public function getIsan(){
            // echo "public function getIsan(){";
            return $this->isan;
        }
        public function getYear(){
            // echo "public function getYear(){";
            return $this->year;
        }
        public function getPunctuation(){
            // echo "public function getPunctuation(){";
            return $this->punctuation;
        }
        public function __toString(){
            // echo "public function __toString(){";
            return "<td> ".($this->name)."</td> <td> ".($this->isan)."</td><td> ".($this->year)."</td><td> ".($this->punctuation)."</td>";
        }
    
    }
    class TopMovies{
        private $films=[];
        public function __construct($films=""){
            if($films != ""){
                $this->films = unserialize($films);
            }
            print_r($films);
        }
        ////////////////////////////////////////////////////////////////

        public function manager($film) {
            // echo "public function manager(film) {";
            $isan = $film->getIsan();
            if (strlen($isan) == 8) {
                // echo $isan;
                if (!array_key_exists($isan, $this->films)) {
                    $this->addFilm($film, $isan);
                } else {
                    $this->updateOrDeleteFilm($film, $isan);
                }
            } else {
                throw new Exception("The ISAN must have 8 digits.");
            }
            
        }
        ////////////////////////////////////////////////////////////////
        public function addFilm($film){
            $ISAN=$film->getIsan();
            // echo "public function addFilm(film,ISAN){";
            if($film->getName()!="" || $film->getYear()!="" || $film->getPunctuation()!=""){
                $this->films[$ISAN][]=$film;
                // echo "this->films[ISAN][]=film;";
            }else{
                throw new Exception ("Fill out all the fields");
            }
        }
        public function updateOrDeleteFilm($film){
            $ISAN=$film->getIsan();
            if($film->getName()!="" || $film->getYear()!="" || $film->getPunctuation()!=""){
                $this->films[$ISAN][]=$film;
            }else{
                unset($this->films[$ISAN]);
            }
        }
        public function printFilms($name){
            foreach ($films as $film ) {
                if (strcasecmp($name, $film->getName()) === 0) {
                    echo $film->__toString();
                } else {
                    echo "La palabra '$palabraBuscada' no está en el string.";
                }
            }
        }

        public function getFilms(){
            $MoviesInfo="";
            foreach ($this->films as $film) {
                $MoviesInfo=$MoviesInfo+'\"$film\"->\"$film
            }
            return $MoviesInfo;
        }
}