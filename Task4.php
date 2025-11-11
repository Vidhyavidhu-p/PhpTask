<!DOCTYPE html>
<head><title>String</title>
<style>
body {
    background-color: #ffd6e8; /* soft pink shade */
    text-align: center;
    font-family: 'Poppins', Arial, sans-serif;
    margin: 0;
    padding: 20px;
}

p {
    color: #222;
    border: 3px solid #ff4da6;
    background-color: #fff;
    display: inline-block;
    padding: 15px 25px;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    font-size: 17px;
    line-height: 1.6;
}
</style>
</head>
<body>
    <div>
        <p> String Function
            <?php 
        
         ?>
             </p>

            <p>
                <?php
                $y="Hello guys welcome your Learning Session";
                $x="laravel is php framework";
                $Z="THE STRING IS CHANGE LOWERCASE";
               echo "The String Length is: " . strlen( $y) . "<br>";
                echo "Welcome letter Length is:" .strlen(string: "welcome") ."<br>";
                echo  "Welcome to php Learning part. word count is:";
                echo str_word_count(string:$y) ."<br>";
              echo str_word_count(string: "hello");
            echo "strops: search for a specific text:";
            echo strpos(haystack: "hello world", needle: "world") . "<br>";
            echo strpos(haystack: $y, needle:"session") . "<br>";
            echo "converting the string to uppercase:";
            echo strtoupper(string: $y) . "<br>";
            echo "converting the string to lowercase:";
            echo strtolower(string: $Z) . "<br>";
            echo strtolower(string: "CHANGE THE TEXT LOWERCASE") . "<br>";
            echo str_replace(search:"Hello", replace:"Haii", subject:$y)."<br>";
            echo "reverse a string:" . "<br>";
            echo strrev(string: "This is Vidhya") . "<br>";
            echo "to Trim white spaces:" . "<br>";
            echo trim(string: $y);
            echo "explode: to Convert string into array:" . "<br>";
            $z=explode(separator: " ", string: $y);
            print_r($z);    
            echo "string concatenation" . "<br>";
            echo $y . " " . $x;
            ?>

           
        </p>
    </div>
</body>
</html>