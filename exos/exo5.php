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
    private $mushroom;
    private $big = false;
    private $star = false;

    public function __construct($name, $color) {
        // var_dump($this, $first, $last);
        $this->setName($name);
        $this->setColor($color);
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
    public function getColor() {
        return $this->color;
    }
    public function getLives() {
        return $this->lives;
    }
    public function takeHit() {
        if ($this->hasStar() === false) {
            if ($this->isBig()) {
                # code...
                $this->big = false;
            } else {
                $this->lives--;
            }
        }
        return $this->getLives();
    }
    public function up() {
        $this->lives++;
    }
    public function eatMushroom() {
        $this->big = true;
    }
    public function isBig() {
        return $this->big;
    }
    public function receiveStar() {
        $this->star = true;
    }
    public function hasStar() {
        return $this->star;
    }
    public function vanishStar() {
        $this->star = false;
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
