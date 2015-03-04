<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>LIS 4368: Midterm</title>
        
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link type="text/css" rel="stylesheet" href="css/styles.css" />
    </head>
    <body>
        
        <div class="container-fluid" id="wrapper">
            <div>
                <h1>1. Name some common HTTP client software packages</h1>
                <hr />
                <p>
                    Mozilla Firefox, Google Chrome, Internet Explorer, Ice Weasel,
                    Chromium, Opera.
                </p>
            </div>
            
            <div>
                <h1>
                    2. List four common HTTP response status codes and their 
                    definitions
                </h1>
                <hr />
                <p>
                    200: Successful code. <br />
                    300: Redirect code. <br />
                    400: client-side error code (file not found). <br />
                    500: Internal server error code (php caused an error). <br />
                </p>
            </div>
            
            <div>
                <h1>
                    3. Write a function that accepts an array of values, and 
                    returns a random item from the array (use built-in PHP 
                    functions). Include PHPDoc
                </h1>
                <hr />
                <p>
                    <?php
                        /**
                         * Function that takes in an array of elements and randomly selects and returns an element of that array.
                         * 
                         * @param array $arrayParam
                         * @return element
                         */
                        function randomElement($arrayParam) {
                            $ranElement = array_rand($arrayParam, 1);
                            
                            return $arrayParam[$ranElement];
                        }
                        echo randomElement(array("Justin", "Danielle", "Rachel", "Will", "Joey", "JP", "Jason", "Aubrey", "Alex"));
                    ?>
                </p>
            </div>
            
            <div>
                <h1>
                    4. Write a function that accepts a string, and checks to 
                    see if it is a palindrome or not (A palindrome is word, 
                    phrase, or sequence that reads the same backward as forward, 
                    e.g., madam or nurses run.). Include PHPDoc.
                </h1>
                <hr />
                <p>
                    <?php 
                        /** 
                         * Function that takes in a string, reverses it, and checks if the string is a palindrome.
                         * 
                         * @param string $string
                         * @return string
                         */
                        function checkPalindrome($string) {
                            $lowerStr  = strtolower($string);
                            $revString = strrev($lowerStr);
                            
                            if($revString === $lowerStr) {
                                return "\"$string\" is a Palindrome.";
                            }
                            else {
                                return "\"$string\" is not a Palindrome.";
                            }
                        }
                        
                        echo checkPalindrome("racecar");
                        echo "<br />";
                        echo checkPalindrome("racecarrrrr");
                    ?>
                </p>
            </div>
            
            <div>
                <h1>
                    5. Write some simple code that demonstrates the difference 
                    between the == and === comparison operators
                </h1>
                <hr />
                <p>
                    <?php 
                        $a = 4;
                        $b = "4";
                        
                        if( $a == $b ) {
                            echo "\$a is equal to \$b, but not necessarily the same data type.<br />";
                        }
                        else {
                            echo "\$a not equal to \$b, and they might not be the same data type.<br />";
                        }
                        
                        if( $a === $b ) {
                            echo "\$a is equal to \$b in both value, and data type.<br />";
                        }
                        else {
                            echo "\$a may be equal to \$b, but not in both value and data type.<br />";
                        }
                    ?>
                </p>
            </div>
            
            <div>
                <h1>6. Provide some examples of logical operators in PHP</h1>
                <hr />
                <p>
                    $a = "Biscuits" <br />
                    $b = "Butter" <br />
                    $c = "Candy" <br />
                    <br />
                    
                    <?php
                        $a = "Biscuits";
                        $b = "Butter";
                        $c = "Candy";
                        $br = "<br /><br />";

                        if($a == "Biscuits" && $b == "Butter") {
                            echo "Butter and Biscuits makes a delicious snack!" . $br;
                        }
                        
                        if ($a == "Brownies" || $c == "Candy") {
                            echo "You may want to try a healthier snack such as Fruits or Veggies!" . $br;
                        }
                        
                        if ($a != "Fruits") {
                            echo "You should try fruits. They are both delicious and healthy!" . $br;
                        }
                    ?>
                </p>
            </div>
            
            <div>
                <h1>
                    7. Create a class that represents a vehicle. It should have 
                    the protected properites: make (string), model (string), 
                    year (string), price (float). The make, model, and year 
                    should be required for instantiation. Include get() methods, 
                    and use PHPDoc for all methods. Show an example of creating 
                    an object from the class and printing the make, model, year, 
                    and price (if price exists).
                </h1>
                <hr />
                <p>
                    <?php
                        class Vehicle {
                            protected $make, 
                                      $model, 
                                      $year, 
                                      $price;
                            
                            function __construct($make, $model, $year, $price) {
                                $this->setMake($make);
                                $this->setModel($model);
                                $this->setYear($year);
                                $this->setPrice($price);
                            }
                            
                            /** 
                             * Function that returns a string describing the 
                             * Make, Model, Year, and Price of the vehicle.
                             * 
                             * @return string
                             */
                            public function printString() {
                                $str = "Make : "  . $this->getMake()   . "<br />" .
                                       "Model: "  . $this->getModel()  . "<br />" . 
                                       "Year : "  . $this->getYear()   . "<br />" . 
                                       "Price: $" . $this->getPrice()  . "<br />";
                                
                                return $str;
                            }
                            
                            /**
                             * Function that returns the Make of the vehicle.
                             * 
                             * @return string
                             */
                            public function getMake() {
                                return $this->make;
                            }

                            /**
                             * Function that returns the Model of the vehicle.
                             * 
                             * @return string
                             */
                            public function getModel() {
                                return $this->model;
                            }

                            /**
                             * Function that returns the Year of the vehicle.
                             * 
                             * @return string
                             */
                            public function getYear() {
                                return $this->year;
                            }

                            /**
                             * Function that returns the Price of the vehicle.
                             * 
                             * @return float
                             */
                            public function getPrice() {
                                return $this->price;
                            }

                            
                            //Setters
                            /**
                             * Function that sets the Make of the Vehicle.
                             * 
                             * @param string $make
                             */
                            protected function setMake($make) {
                                $this->make = (string)$make;
                            }

                            /**
                             * Function that sets the Model of the Vehicle.
                             * 
                             * @param string $model
                             */
                            protected function setModel($model) {
                                $this->model = (string)$model;
                            }

                            /**
                             * Function that sets the Year of the Vehicle.
                             * 
                             * @param string $year
                             */
                            protected function setYear($year) {
                                $this->year = (string)$year;
                            }

                            /**
                             * Function that sets the Price of the Vehicle which 
                             * must be a float value.
                             * 
                             * @param float $price
                             */
                            protected function setPrice($price) {
                                try {
                                    $this->price = (float)$price;
                                } catch (Exception $ex) {
                                    throw new Exception("Price must be a numeric value!");
                                }
                            }
                        }
                        
                        try {
                            $car = new Vehicle("Chevy", "Colorado",  "2015", 20120);
                            $car2 = new Vehicle("Chevy", "Silverado", "2015", "4900o"); //has an OH instead of zero
                            
                            echo $car.printString() . "<br />";
                            echo $car2.toString() . "<br />";
                        } catch (Exception $ex) {
                            echo "Error, " . $ex . "<br />";
                        }
                        
                        
                    ?>
                </p>
            </div>
            
            <div>
                <h1>
                    8. Consider the following array:
                </h1>
                <code style="text-overflow: wrap;">
                    array('Harrys' => ['rating' => '***', 'location' => 
                    'Downtown'], 'McDonalds' <br /> 
                    => ['rating' => '**', 'location' => 'Everywhere'], 
                    'Super Perros' => ['rating' <br />
                    => '****', 'location' => 'W Tennessee'])
                </code>. <br />
                <h1>
                    Write some PHP code (using loops) to print an HTML table 
                    from this data.
                </h1>
                <hr />
                <p></p>
            </div>
        </div>
        
        <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
