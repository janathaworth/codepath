<html>
    <center> 
        <h1 style="margin-top:10%;">Tip Calculator</h1>
        <form action="" method="POST">
             Bill subtotal:<br>
            <input type="text" name="bill" value="<?php echo isset($_POST['bill']) ? $_POST['bill'] : '' ?>"><br>
            <p style = "margin-bottom=1%;">Tip Percentage: </p>
            <?php
                $tip = 10;
                while($tip<25) {
                    echo '<input type=radio name=radio value='.$tip.'>';
                    echo $tip . "% ";
                    $tip += 5;
                }    
            ?>
            <br>
            <input style = "margin-top:2%;" type="submit" name = "submit" value="Submit"/>
        </form>
    </center>
    
    <?php
        if (isset($_POST['submit'])) {
            if(isset($_POST['radio'])) {
                $tip_entered = $_POST['radio'];
                $bill_entered = $_POST["bill"];
                if ($tip_entered > 0 && $bill_entered > 0 && $bill_entered != "") {
                    $tip_total = number_format((float)($tip_entered / 100) * $bill_entered, 2, '.', '');
                    $bill_total = number_format((float)$bill_entered + $tip_total, 2, '.', '');
                    echo "<center> Tip : $$tip_total </center>"; 
                    echo "<center> Total : $$bill_total</center>";
                }
                
                
            }
            else {
                echo "<center>Invalid Input</center>";
            }
        }
    ?>
</html>

