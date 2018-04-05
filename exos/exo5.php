<?php
require_once '../inc/functions.php';

/*
 * Exo 5 : Full Mario!
 *
 * Add these to the Hero class:
 *  - A favorite color.
 *  - To be able to grow when eat a mushroom. Shrink instead of die when taking a hit.
 *  - To be able to be invicible when eat a star.
 *
 * See tests for more info :)
 */

class Hero {
    private $name;
    private $color;
    private $lives = 3;

    public function __construct($name, $color) {
        // var_dump($this, $first, $last);
        $this->setName($name);
        echo "instanciation !";
    }
    public function hello() {
        return "It's me, ".$this->name."!";
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function setColor($color) {
        $this->color = $color;
    }
    public function getLives() {
        return $this->lives;
    }
    public function takeHit() {
        $this->lives--;
    }
    public function up() {
        $this->lives++;
    }

}








/*
 * Tests
 * Pas touche !
 */
$mario = new Hero('Mario', 'red');
$test = (
    $mario->getColor() === 'red'
    && $mario->isBig() === false
    && $mario->hasStar() === false
    && $mario->getLives() === 3
);
if ($test) {
    $mario->eatMushroom();
    $test = $mario->isBig() === true;
    if ($test) {
        $mario->takeHit();
        $test = (
            $mario->isBig() === false
            && $mario->getLives() === 3
        );
        if ($test) {
            $mario->receiveStar();
            $test = $mario->hasStar() === true;
            if ($test) {
                $mario->takeHit();
                $mario->takeHit();
                $mario->up();
                $mario->vanishStar();
                $test = (
                    $mario->getLives() === 4
                    && $mario->hasStar() === false
                );
            }
        }
    }
}
displayExo(5, $test);
