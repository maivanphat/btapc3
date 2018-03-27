<form method="GET">
    Name    <input name="name" <input> <br>
    Email   <input name="email" <input> <br>
    Website <input name="web" <input> <br>
    Comment <textarea name="comment" cols="30" rows="5"></textarea> <br>
   
    Gender <input name="gender" type="radio" value="Female" <input> Female  
    <input name="gender" type="radio" value="Male" <input> Male <br><br>
     <button name="tim" type="submit">Submit</button>
</form>
<?php
   echo" Name:".$_GET["name"] ;echo "<br>";
    echo" Email:".$_GET["email"];echo "<br>";
     echo" Website:".$_GET["web"];echo "<br>";
     echo" Comment:".$_GET["comment"];echo "<br>";
      echo" gender:".$_GET["gender"];echo "<br>";  
    
   
?>
