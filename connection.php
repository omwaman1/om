$link = mysqli_connect("sql113.epizy.com","epiz_25733268","Som1973","epiz_25733268_colleges");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}