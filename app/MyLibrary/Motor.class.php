<?php
namespace Fakultet\MyLibrary;

/**
 * prije pokretanja testova u composer.json treba dodati "app/myLibrary"
 * to je direktorij gdje imamo vlastite klase:
 "autoload": {
        "classmap": [
            "database",
            "app/myLibrary"
        ],
        "psr-4": {
            "Fakultet\\": "app/"
        }
    }
 *
 * @author pmrvic
 */
class Motor {
    //put your code here    
    public $status="\n\t\t------    Auto 1 alive!   -------\n\n";
    public $zvuk="brmmmmmm";
    public function __construct($s){
        // Cilj je testirati namjerno ubacivanjem krivog tipa varijable
        // kako bi provocirali hvatanje greške u 
        // /tests/Osnove/motorClassTest@testPokusajDaKreiramoMotorSaKrivimArgumentima()
        if (!is_numeric($s)){ 
            // mora se postaviti \ znak jer je to root klasa a ne custom \InvalidArgumentException
            throw new \InvalidArgumentException("Moraš ubaciti broj!");        
        }
        else{
        echo "\n".get_class($this).": Motor je kreiran sa ispravno unešenim argumentom\n";
        $this->zvuk=$s;
        }
    }

}

