<form name=”form1″ method=”post” action=”<?php echo htmlspecialchars($_SERVER[‘PHP_SELF’]); ?>” >
x1: 
            <input type="number" name="num1"> 
            <br> 
x2: 
            <input type="number" name="num2"> 
            <br> 
y1: 
            <input type="number" name="num3"> 
            <br> 
y2: 
            <input type="number" name="num4"> 
            <br>                                    
<input type="submit" name="submit"
                   value="Submit"> 
        </form> 
<?php 
   function dist($x1,$x2,$y1,$y2){
           
           return sqrt(pow(($x1-$x2),2)+pow(($y1-$y2),2));
           }        
   
   $x1 =$_POST["num1"];   $x2 =$_POST["num2"];
   $y1 =$_POST["num3"];   $y2 =$_POST["num4"];   
   $flag = dist($x1,$x2,$y1,$y2);

    ?>        
