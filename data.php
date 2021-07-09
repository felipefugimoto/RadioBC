<form action="data.php" method="post">

<input type="date" name="data" id="data">
<button type="submit">verificar</button>

</form>

<?php

    if (isset($_POST['data'])){
        $data_atual=$_POST['data'];
        echo $data_atual;
    }
?>
