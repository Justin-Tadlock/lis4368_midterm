<!DOCTYPE html>
<html>
    <head>
        <title>My Site</title>
    </head>
    <body>
        <style>
            * {
                font-size: 100%;
                line-height: 1.3;
            }
            body {
                background-color: grey;
            }
            h4, p {
                padding:0;
                margin:0;
            }
            .content {
                display:block;
                width: 45em;
                margin: 0 auto 2em;
                padding: 2em 1em;
                
                background-color: white;
            }
        </style>
        <?php

            /*
             * FSULIS4368 - Spring, 2015
             *
             * Exercise One - Let's get through the basics as quickly as possible, shall we?
             * -----------------------------------------------------------------------------
             * @author Justin Tadlock, jt13g 
            */
             header("Content-type: text/plain");
        ?>
        <div class="content">
        <h4>Demonstrating how to generate output with echo:</h4>
        <hr />
        <?php
             echo 'Hello World', "<br /><br />";       

            // ---------------------------------------------------
            // Explain in a brief sentence what the assignment operator is, looks like
            // and what it does.  Also, demonstrate the assignment operator in action.
            //
             /*
              * The assignment operator is used to assign a value to a variable. 
             */
             $assignmentOperator = 'Example';

            // ---------------------------------------------------
            // Create variables with all of the available built-in data-types in PHP
            // except for `resource`
            //
             $myFirstName = "Justin"; //String

             $myAge = 24; //Integer
             $myHeight = 5.7; //Float

             $isStudent = true; //Boolean   

             $myObject = new stdclass; //Object

             $null = null; //Null

             $peopleArray = array(); //Array

            // ---------------------------------------------------
            // Demonstrate use of the following arithmatic operators:
            // +, -, *, /, %, ++, --
            //
            // For the last three operaters (%, ++, --), write a comment
            // explaining what each does in plain english
        ?>
        </div>
        
        <div class="content">
        <h4>Demonstrate the different Arithmetic Operators using variables a and b:</h4>
        <hr />
        <p>a = 5 and b = 3</p>
        <ul>
        <?php
            $a = 5;
            $b = 3;

            echo "<li>a + b = " . ($a + $b) . "</li>";
            echo "<li>a - b = " . ($a - $b) . "</li>";
            echo "<li>a * b = " . ($a * $b) . "</li>";
            echo "<li>a / b = " . ($a / $b) . "</li>";

            echo "<li>" . "<b>Demonstrating the Modulus, Increment, and Decrement operators.</b>" . "</li>";
            //The Modulus (%) Operator is used to return the remainder of a division operation.
            echo "<ul>\n";
            echo "<li>a % b = " . ($a % $b) . "</li>";
            
            //The Increment (++) Operator is a shorthand method to add 1 to the variable it is used with.
            $a++;
            echo "<li>a++ = " . $a . "</li>";

            //The Decrement (--) Operator is a shorthand method to remove 1 from the variable it is used with.
            $b--;
            echo "<li>b-- = " . $b . "</li>";
            echo "</ul>\n";
            // ---------------------------------------------------
            // Explain what `type-casting` is in a brief sentence
            //
        ?>
        </ul>
        </div>
        
        <div class="content">
        <h4>Define the term, 'type-casting'</h4>
        <hr />
        <?php
             echo "Type-casting is the conversion between data types.";

            // ---------------------------------------------------
            // Perform the following type-casts and output the results
            // Note what happens
            //
        ?>
        <h4>Performing type-casting in PHP</h4>
        <hr />
        <ul>
        <?php
             $intVar = 15;
             $floatVar = 17.05;
             $string = "string";
             $bool = true;

            // - Integer ==> float
             echo "<li>" . $intVar . " type casted to float is: " . (float)$intVar . "</li>";
                //The value can now store decimal values that it wasn't able to while being
                //an int data type.

            // - Float (with decimal values) ==> integer
             echo "<li>" . $floatVar . " type casted to int is: " . (int)$floatVar . "</li>";
                //The values after the decimal are truncated to be a whole number. 

            // - Integer ==> string
             echo "<li>" . $intVar . " type casted to string is: " . (string)$intVar . "</li>";
                //Converts the numeric value to a string value by encapsulating it in quotations.


            // - String ==> integer
             echo "<li>" . $string . " type casted to integer is: " . (int)$string . "</li>";
                //Since the string was not empty, it converts it to a zero which indicates 
                //that the conversion was unsuccessful. 

            // - String with number at beginning it ==> integer
             $string = "1string";
             echo "<li>" . $string . " type casted to integer is: " . (int)$string . "</li>";
                //It appears that if a number is present at the start of a string,
                //PHP will convert that numeric value to an int and then truncate 
                //the remaining letters in the string.

            // - String with number at end (after some text) ==> integer
             $string = "string1";
             echo "<li>" . $string . " type casted to integer is: " . (int)$string . "</li>";
                //It appears that since there were no numeric values at the beginning,
                //PHP treats that as a zero and truncates the remaining letters in the 
                //string.

            // - String with text in it to boolean
             $string = "text";
             echo "<li>" . $string . " type casted to boolean is: " . (bool)$string . "</li>";
                //Since booleans are either set bits, or unset bits, a string containing
                //characters is registering as "set bits" therefore the boolean
                //value is true.

            // - Empty string to boolean
             $string = "";
             echo "<li>" . $string . " (empty string) type casted to boolean is: " . (bool)$string . "</li>";
                //An empty string is registering as "unset bits" and therefore
                //the boolean value is false.

            // - String with only spaces in it to boolean
             $string = "    ";
             echo "<li>" . $string . " (string with spaces) type casted to boolean is: " . (bool)$string . "</li>";
                //A string with spaces registers as "set bits" therefore the boolean
                //value is true.

            // - Float value (0.00) to boolean
             $floatVar = 0.00;
             echo "<li>" . $floatVar . " type casted to boolean is: " . (bool)$floatVar . "</li>";
                //In other languages, 0 is used for the false value of a boolean. 
                //So when 0 is type casted to a boolean (to represent false), the value 
                //is an empty string to evaluate to "unset bits".
        ?>
        </ul>
        </div>
        
        <div class="content">
        <h4>The reference URL for type-casting in PHP is:</h4>
        <hr />
        <?php
             echo 'http://php.net/manual/en/language.types.type-juggling.php';
        ?>
        </div>
        
        <div class="content">
        <h4>Demonstrating if structure without else statements.</h4>
        <hr />
        <ul>
            <?php
                 $var1 = 5;

                 if($var1 == 5) {
                     echo "<li>\$var1 is equal to 5.</li>";
                 }

                 echo "<li><b>Demonstrating if structure with an else statement.</b>\n";
                 echo "<ul>\n";
                 if($var1 > 7) {
                     echo "<li>\$var1 is greater than 7.</li>";
                 }
                 else {
                     echo "<li>\$var1 is not greater than 7.</li>";
                 }
                 echo "</ul>\n";
                 echo '</li>';

                 echo "<li><b>Demonstrating an elseif structure.</b>\n";
                 echo "<ul>\n";
                 if($var1 < 0) {
                     echo "<li>\$var1 is less than zero.</li>";
                 }
                 elseif($var1 > 7) {
                     echo "<li>\$var1 is greater than 7.</li>";
                 }
                 else {
                     echo "<li>\$var1 is somewhere between zero and 7.</li>";
                 }
                 echo "</ul>\n";
                 echo '</li>';
            ?>
        </ul>
        </div>
        
        <div class="content">
        <h4>List the comparison operators in PHP:</h4>
        <hr />
        <ul>
        <?php
             echo "<li>==  : Equal Operator</li>";
             echo "<li>=== : Equal to and Identical operator.</li>";
             echo "<li>!=  : Not equal to operator.</li>";
             echo "<li><>  : Other Not equal to operator.</li>";
             echo "<li>!== : Not equal to, or of the same data type.</li>";
             echo "<li><   : Less than operator.</li>";
             echo "<li>>   : Greater than operator.</li>";
             echo "<li><=  : Less than or Equal to operator.</li>";
             echo "<li>>=  : Greater than or Equal to operator.</li>";
        ?>
        </ul>
        </div>
        
        <div class="content">
        <h4>Printing Data using two different loop structures</h4>
        <hr />
        <?php
            $counter = 0;
            echo "<b>Printing \$counter using a while-loop</b> <br />";
            while ($counter < 5) {
                echo "\$counter is currently " . $counter . "<br />";
                $counter += 1;
            }

            echo "<br />";

            echo "<b>Printing \$i using a for-loop</b> <br />";
            for($i = 0; $i < 5; $i++) {
                echo "\$i is currently " . $i . "<br />";
            }
        ?>
        </div>
        
        <div class="content">
        <h4>Demonstrating an infinite loop:</h4>
        <hr />
        <?php
             $counter = 0;
             while ($counter < 10) {
                 echo "I dont't wanna stop! 'Cause I can't get enough! I won't stop 'til I get enough!" . "<br />";
                 $counter++; //Without this, it will be an infinite loop.
             }
             echo 'Without the increment counter, this would never appear..';
        ?>
        </div>
        
        <div class="content">
        <h4>Demonstrating Logical Operators.</h4>
        <hr />
        <br />
        <?php
             $something = 4;
             $somethingElse = 10;

             echo "<b>AND Operator:</b><br />";
             if ($something > 0 && $something < 5) {
                 echo "something is within the range of 0 and 5. <br /><br />";
             }

             echo "<b>OR Operator:</b><br />";
             if ($something == 3 || $somethingElse > 9) {
                 echo "OR has been triggered.<br /><br />";
             }

             echo "<b>NOT Operator:</b><br />";
             if($something != 3) {
                 echo "something does not equal 3.<br /><br />";
             }

             echo "<b>Another NOT Example:</b><br />";
             $aBool = true;
             if (!$aBool == "") {
                 echo "false<br /><br />";
             }
        ?>
        </div>
        
        <div class="content">
        <h4>Demonstrating the difference between '==' and '==='</h4>
        <p>
            <hr />
            a = 5 <br />
            b = "5"<br />
        </p>
        <?php
            $a = 5;
            $b = "5";

            echo "Using ==:<br />";
            if($a == $b) {
                echo "Yes they are. But not necessarily the same data types initially.<br /><br />";
            }
            else {
                echo "Nope, they aren't the same.<br /><br />";
            }

            echo "Using ===:<br />";
            if($a === $b) {
                echo "Yes they are. Even their data types!<br /><br />";
            }
            else {
                echo "They could be the same, but they certainly aren't of the same data type.<br /><br />";
            }
        ?>
        </div>
        
        <div class="content">
        <h4>Demonstrate the negation operator:</h4>
        <p>
            
            <hr />
            aBool = true <br />
            anotherBool = false 
        </p>
        
        <?php
             $aBool = true;
             $anotherBool = false;

             echo "<b>Using if(!\$anotherBool && \$aBool)</b><br />";
             if(!$anotherBool && $aBool) {
                 echo "\$anotherBool and \$aBool are both showing true.<br />";
             }
             else {
                 echo "Both \$anotherBool and \$aBool are not showing true.<br />";
             }

             echo "<br /><br />";

            // ----------------------------------------------------
            // Demonstrate creation of an empty array into a new variable
             $emptyArray = array();

            // ----------------------------------------------------
            // Create an incremntal array with values
             $myArray = array('Justin', 'Bradley', 'Blaze');

            // ----------------------------------------------------
            // Add some more values to it
             $myArray[] = 'Nichole';
             $myArray[] = 'Jennifer';

             //Scalar (primitive data types) variables only contain one value.
        ?>
        </div>
        
        <div class="content">
        <h4>Output the number of items in $myArray </h4>
        <hr />
        <?php
             echo count($myArray);
             echo "<br /><br />";

            // ----------------------------------------------------
            // Output two of the items in the array using their keys
        ?>
        </div>
        
        <div class="content">
        <h4>Output the contents of two elements within \$myArray</h4>
        <hr />
        <?php
             echo $myArray[2] . "<br />";
             echo $myArray[4];

             echo "<br /><br />";
        ?>
        </div>
        
        <div class="content">
        <h4>Iterating through the array using a while-loop structure.</h4>
        <hr />
        <?php
             $counter = 0;

             while($counter < count($myArray)) {
                 echo $myArray[$counter] . "<br />";
                 $counter += 1;
             }

             echo "<br />";
        ?>
        </div>
        
        <div class="content">
        <h4>Iterating through the array using a for-loop structure.</h4>
        <hr />
        <?php
             for($i = 0; $i < count($myArray); $i++) {
                 echo $myArray[$i] . "<br />";
             }

             echo "<br />";

            // ----------------------------------------------------
            // Create an associative array with key/value pairs
             $assoc_array = array('key1' => 'dog', 'key2' => 'meow', 'bliz' => 'RAWR');

            // ----------------------------------------------------
            // Add some values to the associative array"
             $newKey = 'newKey';
             if(key_exists($newKey, $assoc_array)) {
                 echo $newKey . " already exists!";
             }
             else {
                 $assoc_array[$newKey] = 'blitz!';
             }
        ?>
        </div>
        
        <div class="content">
        <h4>Iterating through the associative array using a 'foreach' loop.</h4>
        <hr />
        <?php
             foreach( $assoc_array as $element) {
                 echo $element . "<br />";
             }

             echo "<br />";
        ?>
        </div>
        
        <div class="content">
        <h4>Accessing values directly from the associative array.</h4>
        <hr />
        <?php
             echo $assoc_array['key1'] . "<br />";
             echo $assoc_array['bliz'] . "<br />";
             echo "<br /><br />";
        ?>
        </div>
        
        <div class="content">
        <h4>Dump the contents of associative array using 'var_dump'</h4>
        <hr />
        <?php
             var_dump($assoc_array);
         ?>
        </div>
    </body>
</html>