<form name=”form1″ method=”post” action=”<?php echo htmlspecialchars($_SERVER[‘PHP_SELF’]); ?>” >
Num: 
            <input type="number" name="num"> 
            <br> 
<input type="submit" name="submit"
                   value="Submit"> 
        </form> 
        
<?php 
   function primecheck($number){
           if($number == 1)
             retun 0;
           for($i=2;$i<-$number/2;$i++){
             if($number%$i==0)
                return o;
           }
           return 1;
           }        
   $number ="";
   $number =$_POST["num"];
   $flag = primecheck($number);
   if ($flag==1)
       echo "prime";
   else
       echo "not prime";
    ?>
