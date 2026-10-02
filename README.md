# TP 02 - Programmation Web 2

Nom : El Barnoussi<br>
Prénom : Meryem<br>
Groupe : Gr_02<br>

## Pour lancer le projet
php -S localhost:8000<br>
puis aller sur http://localhost:8000/index.php

## Exercices
- ex01.php<br>
- ex02.php<br>
- ex03.php<br>
- ex04.php<br>
- ex05.php<br>
- ex06.php<br>
- ex07.php<br>
- ex08.php<br>
- ex09.php<br>
- ex10_get.html / ex10_get.php<br>
- ex10_post.html / ex10_post.php<br>

## Réponses

**Exercice 2**<br>
$note et $Note sont différentes car PHP fait la différence entre majuscules et minuscules.<br>
Noms valides : $a, $_a, $a_a, $AAA, $a1. Invalides : $a! (caractère interdit) et $1a (commence par un chiffre).

**Exercice 4**<br>
echo false n'affiche rien, alors que var_dump(false) affiche bool(false).

**Exercice 5**<br>
-1 -> Note invalide<br>
9 -> Non validé<br>
10 -> Passable<br>
12 -> Assez bien<br>
14 -> Bien<br>
16 -> Très bien<br>
21 -> Note invalide

**Exercice 10**<br>
En GET les valeurs sont visibles dans l'URL (ex10_get.php?nom=...&prenom=...&groupe=...).<br>
En POST elles ne sont pas visibles, l'URL reste juste ex10_post.php.
