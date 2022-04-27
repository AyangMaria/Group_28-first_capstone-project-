<html>
<table width="400px">


    <?php 
    for($row=0; $row<= 8; $row++ ) {
        
        echo '<tr>';
        for($column=1; $column <= 8; $column++) {
            $total = $row +$column;

            if($total%2===0) {
                echo "<td height=35px width=30px bgcolor=#ffffff></td>";
            }
            else
            {
                echo "<td height=35px width=30px bgcolor=#000000></td>";
            }
    }
}
    echo "</tr>";
    ?>    
}
?>




</table>
</html>

