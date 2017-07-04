<?php
require_once '../inc/functions.php';

/*
 * Exo 2 : Please Respect My Privacy
 *
 * Aaaaah, I'm aliiiiive !
 *
 * Well... Now that I'm a human being, I have rights, OK? #MarioLivesMatter
 * As every other humain being, I have the right to privacy.
 * I'm not fond of my lives being public like that.
 *
 * Can you create me a `getLives()` method, that return the amount of lives that I have?
 * And of course, the property needs to be private now.
 *
 * For example, we should be able to use the class this way:
 *      $mario = new Mario();
 *      echo $mario->getLives(); // Display: 3
 *      echo $mario->lives; // Fatal Error
 */









/*
 * Tests
 * Do not touch.
 */
$mario = new Mario();
displayExo(2, (
    // Private?
    count(get_class_vars(get_class($mario))) === 0
    // Method?
    && method_exists($mario, 'getLives')
    // Return 3?
    && $mario->getLives() === 3
));
