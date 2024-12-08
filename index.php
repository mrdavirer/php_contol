<?php

function getRandomYear() {
    return rand(1930, 1950);
}

function startConversation() {
    $countGoodbye = 0;
    
    echo "ЧЕГО СКАЗАТЬ-ТО ХОТЕЛ, МИЛОК?!\n";

    while (true) {

        $input = trim(fgets(STDIN)); 

        if (strtoupper($input) === "ПОКА!") {
            $countGoodbye++;

            if ($countGoodbye == 3) {
                echo "ДО СВИДАНИЯ, МИЛЫЙ!\n";
                break;
            }

            echo "НЕТ, НИ РАЗУ С " . getRandomYear() . " ГОДА!\n";
        } else {

            if (substr($input, -1) === "!") {
                echo "НЕТ, НИ РАЗУ С " . getRandomYear() . " ГОДА!\n";
                $countGoodbye = 0;  
            } else {
                echo "АСЬ?! ГОВОРИ ГРОМЧЕ, ВНУЧЕК!\n";
                $countGoodbye = 0; 
            }
        }
    }
}

startConversation();

?>

