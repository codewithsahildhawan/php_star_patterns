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

?>