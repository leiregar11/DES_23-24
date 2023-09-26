<?php

include 'Runner.php';
include 'Competition.php';

$competition = new Competition();

$runner1 = new Runner('Alice', 'A123');
$runner2 = new Runner('Bob', 'B456');

$competition->addRunner($runner1);
$competition->addRunner($runner2);

try {
    $runner1->addRace(10);
    $runner1->addRace(20);
    $runner1->addRace(30);
    $runner1->addRace(5);
    $runner1->addRace(25);
    // $runner1->addRace(3); // This would throw an exception (less than 5 seconds).
    // $runner1->addRace(40); // This would throw an exception (already has 5 races).

    $runner2->addRace(15);
    $runner2->addRace(18);
    $runner2->addRace(22);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

$competition->addRaceToRunner('A123', 12);
$competition->addRaceToRunner('B456', 19);

$averageTime = $competition->getAvrFirstRace();
echo $averageTime;

$quickestRunner = $competition->getQuickestRace();
echo $quickestRunner;

$slowRunners = $competition->getSlowRunners();
echo $slowRunners;

$runnersWithE = $competition->getRunnersWithNameEndingE();
echo $runnersWithE;
?>