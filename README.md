# Super Mario PHP

Mario entre en scène, tout en POO PHP.  
A vous de lui donner vie !

![Super Mario PHP](https://media.giphy.com/media/l1IY5CmYbirEsXWPm/giphy.gif)


## Avant de commencer

Le challenge est organisé de la même façon que le Challenge Mamie PHP : la fonction `displayExo` génère du HTML avec des tests sur votre classe. Si vous souhaitez tester tranquillement votre classe avant, n'hésitez pas à utiliser `die` pour arrêter PHP :

```php
class Mario {
    // ...
}

// Je teste ma classe
$character = new Mario();
var_dump($character);

// J'arrête PHP, pour ne pas que ça m'affiche le HTML
die();


/*
 * Tests
 * Do not touch.
 */
$mario = new Mario();
displayExo(1, $mario->lives === 3);
```

---

Good Luck & Have Fun !
