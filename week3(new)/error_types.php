<?php
/*
    error types in php :
    1)warning error: it does not stop code/script execution
    
    when to happen:
    
    - include missing file
    Example:
    include("welcome.php"); //warning
    - using undefined variable
    echo $x; //warning

    - function say($x, $y){
        echo "hello";
      }
      say($z, $w); //warning

    2)fatal error: stops execution of script but executes the code before the fatal error normally.

    when to happen:
    -when calling a function without definition
    Example :
    echo test(); //fatal error

    - when passing parameters less than the required ones to a function

    example:
    function say($x, $y){
        echo "hello";
    }
    say(10); //fatal error

    3)parse(syntax) error: stops the execution of te whole script/code (before and after the error)

    when to happen:
    -when forgetting to use ; or bracket() or ..............

    example :
    $x = 10;
    echo $x //parse error(;)

*/
