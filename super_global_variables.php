<!DOCTYPE html>
<html>
<body>

    <?php  
        $x = 75;
        
        function myfunction() {

            echo $x; // Warning: Undefined variable $x 
            echo "<br>";

            echo $GLOBALS['x']; // 75
            echo "<br>";

            global $x ;  
            echo $x; // 75
            echo "<br>";

        }

        myfunction()
    ?>  

    <?php
        echo $_SERVER['PHP_SELF'];       // Returns the filename of the currently executing script
        echo $_SERVER['SERVER_NAME'];    // Returns the name of the host server
        echo $_SERVER['HTTP_HOST'];      // Returns the Host header from the current request
        echo $_SERVER['HTTP_USER_AGENT'];
        echo $_SERVER['SCRIPT_NAME'];     //Returns the path of the current script
        echo $_SERVER['HTTP_ACCEPT']	 // Returns the Accept header from the current request
    ?>


</body>
</html>
