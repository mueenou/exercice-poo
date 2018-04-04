<?php
require_once '../inc/functions.php';

/*
 * Exo 3 : Bowser Is Coming
 *
 * Bowser: Mouhahahahahahahahaaaaaaa! It's me, Bowser!
 * Don't be mad, the game would not be fun if there is no bad guy in it.
 *
 * So. I want a way to kill Mario's life when I throw a turtle shell on him :)
 * Can you create me a method `takeHit`, and decrement Mario's lives when it's being used?
 *
 * For example, we should be able to use the class this way:
 *      $mario = new Mario();
 *      echo $mario->getLives(); // Display: 3
 *      $mario->takeHit();
 *      echo $mario->getLives(); // Display: 2
 *
 * ---
 *
 * Mario: Heeeeey, what are you doing here?!?
 * …
 * Well…
 * …
 * OK, it's fair. A method to kill me. Nice.
 * But I want a method to gain 1up! I love these green mushrooms…
 *
 * For example, we should be able to use the class this way:
 *      $mario = new Mario();
 *      echo $mario->getLives(); // Display: 3
 *      $mario->takeHit();
 *      $mario->up();
 *      $mario->up();
 *      $mario->takeHit();
 *      $mario->up();
 *      echo $mario->getLives(); // Display: 4
 */

class Mario {
    private $lives = 3;
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
$mario = new Mario();
$test = (
    // Private?
    count(get_class_vars(get_class($mario))) === 0
    // Method?
    && method_exists($mario, 'getLives')
    // Method?
    && method_exists($mario, 'takeHit')
    // Method?
    && method_exists($mario, 'up')
    // Return 3?
    && $mario->getLives() === 3
);
if ($test) {
    $mario->takeHit();
    $mario->up();
    $mario->up();
    $mario->takeHit();
    $mario->up();
    $test = $mario->getLives() === 4;
}
displayExo(3, $test);
