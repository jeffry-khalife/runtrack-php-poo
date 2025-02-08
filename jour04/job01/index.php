<?php
session_start();
$case = "X";
if (isset($_POST['button1'])) {
    $_SESSION["case"] = $_POST['button1'];
}
else {
    
}

        echo "<form method='POST'><table border='5'>";
        for ($i = 0; $i < 3; $i++) {  
            echo "<tr>";
            for ($j = 0; $j < 3; $j++) {  
                $index = $i * 3 + $j;  
                if (isset($index)) {
                    echo "<td><button type='submit' name='case' value='$index'>_</button></td>";
                } else {
                    echo "<td><button disabled>" . cases[$index] . "</button></td>";
                }
            }
            echo "</tr>";
        }
        echo "</table></form>";
    

?>