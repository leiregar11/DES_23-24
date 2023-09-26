<?php

include 'Runner.php';
include 'Competition.php';
class Competition{
    private $runners;

    public function __construct() {
        $this->runners = [];
    }

    public function addRunner($runner) {
        $code = $runner->getCode();
        $this->runners[$code] = $runner;
    }

    public function addRaceToRunner($code,$time){
        if(array_key_exists($code,$this->runners)){
            $runner=$this->runners[$code];
            $runner->addRace($time);
        }

    }

    public function getAvrFirstRace(){
        $sumRaces=0;
        $contRaces=0;
        foreach ($this->runners as $runner) {
            $runnerRaces=$runner->getRaces();
            if($runnerRaces>=1){
                $sumRaces=$runnerRaces[0];
                $contRaces++;
            }
            
        }
        
        return "Average time of the 1st race: ".($sumRaces/$contRaces)." seconds\n";
    }

    function getQuickestRace(){
    
        $quickestRace=10000;
        $faster="";
        foreach ($this->runners as $runner) {
            $runnerRaces=$runner->getRaces();
            if($runnerRaces>=1){
                foreach ($runnerRaces as $race) {
                    if($race<$quickestRace){
                        $quickestRace=$race;
                        $faster=$runner->getName();
                    }
                }
            }
            
        }
        return "Quickest runner: $faster\n" ;
    
    }

    public function getSlowRunners(){
        $runnersMore15s = [];

        foreach ($this->runners as $runner) {
            $slowRaces = array_filter($runner->getRaces(), function ($time) {
                return $time > 15;
            });

            if (count($slowRaces) > 2) {
                $runnersMore15s[] = $runner->getName();
            }
        }

        return "Runners with more than 2 races > 15 seconds: " . implode(', ', $runnersMore15s) . "\n";
    }

    

    public function getRunnersWithNameEndingE() {
        $runnersWithE = [];

        foreach ($this->runners as $runner) {
            $name = $runner->getName();
            if ($string[$name - 1] === 'e') {
                $runnersWithE[] = $name;
            }
        }

        return "Runners with names ending in 'e': " . implode(', ', $runnersWithE) . "\n";
    }

    
}
?>