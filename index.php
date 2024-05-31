<?php
/*

Pattern 1:

*****
*****
*****
*****
*****

*/

echo "<h1>Pattern 1</h1>";
function pattern1($rows) {
    for($i=1; $i<=$rows; $i++) {
        for($j=1; $j<= $rows; $j++) {
            echo "*";
        }
        echo "</br>";
    }
}
pattern1(5);


/*

Pattern 2:

*****
****
***
**
*

*/

echo "<h1>Pattern 2</h1>";
function pattern2($rows) {
    for($i=1;$i<=$rows;$i++) {
        for($j=$rows;$j>=$i;$j--) {
            echo "*";
        }
        echo "</br>";
    }
}
pattern2(5);


/*

Pattern 3:

*
**
***
****
*****

*/
echo "<h1>Pattern 3</h1>";
function pattern3($rows) {
    for($i=1; $i<=$rows; $i++) {
        for($j=1; $j<=$i; $j++) {
            echo "*";
        }
        echo "</br>";
    }
}
pattern3(5);


/*

Pattern 4:

1
12
123
1234
12345

*/

echo "<h1>Pattern 4</h1>";
function pattern4($rows) {
    for($i=1; $i<=$rows; $i++) {
        for($j=1; $j<=$i; $j++) {
            echo $j;
        }
        echo "</br>";
    }
}
pattern4(5);


/*

Pattern 5:

*
**
***
****
*****
*****
****
***
**
*


*/

echo "<h1>Pattern 5</h1>";
function pattern5($rows) {
    for($i=1; $i<=$rows; $i++) {
        for($j=1; $j<=$i; $j++) {
            echo "*";
        }
        echo "</br>";
    }

    for($k=1; $k<=$rows; $k++) {
        for($l=$rows; $l>=$k; $l--) {
            echo "*";
        }
        echo "</br>";
    }
}
pattern5(5);

/*

Pattern 6:

    *
   **
  ***
 ****
*****                

*/

echo "<h1>Pattern 6</h1>";
function pattern6($rows) {
    for($i = 1; $i <= $rows; $i++) {
        for($j = $rows; $j > $i; $j--) {
            echo "&nbsp;&nbsp;";
        }
        
        for($k = 1; $k <= $i; $k++) {
            echo "*";
        }
        echo "</br>";
    }
}
pattern6(5);


/*

Pattern 7:

*****
 ****
  ***
   **
    *                

*/

echo "<h1>Pattern 7</h1>";
function pattern7($rows) {
    for($i = $rows; $i >= 1; $i--) {
        for($j = $rows; $j > $i; $j--) {
            echo "&nbsp;&nbsp;";
        }

        for ($k = 1; $k <= $i; $k++) {
            echo "*";
        }
        
         echo "</br>";
    }
}
pattern7(5);


/*

Pattern 8:

1 
2 2 
3 3 3 
4 4 4 4 
5 5 5 5 5           

*/

echo "<h1>Pattern 8</h1>";
function pattern8($rows) {
    for($i = 1; $i <= $rows; $i++) {
        for($j = 1; $j <= $i; $j++) {
            echo $i;
        }
         echo "</br>";
    }
}
pattern8(5);


/*

Pattern 9:

1 
2 3 
4 5 6 
7 8 9 10 
11 12 13 14 15         

*/


echo "<h1>Pattern 9</h1>";
function pattern9($rows, $increment) {
    for($i = 1; $i <= $rows; $i++) {
        for($j = 1; $j <= $i; $j++) {
            echo $increment. " ";
            $increment ++;
        }
         echo "</br>";
    }
}
pattern9(5,1);


/*

Pattern 10:

A 
B B 
C C C 
D D D D 
E E E E E        

*/

echo "<h1>Pattern 10</h1>";
function pattern10($rows, $character) {
    for($i = 1; $i <= $rows; $i++) {
        for($j = 1; $j <= $i; $j++) {
            echo $character. " ";
        }
        $character ++;
         echo "</br>";
    }
}
pattern10(5,"A");

?>