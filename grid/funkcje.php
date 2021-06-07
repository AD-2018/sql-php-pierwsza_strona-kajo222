<?php
function tab_del_male($tab_name, $tab_opcja, $tab_kolumna1, $tab_kolumna2){
    require("../connect.php");
    $sql = "Select ".$tab_kolumna1.", ".$tab_kolumna2." from " .$tab_name;
    $result = mysqli_query($conn, $sql);
    echo("<table border=1>");
    echo("<th>".$tab_kolumna1."</th><th>".$tab_kolumna2."</th><th>Usuń</th>");
    while($row = mysqli_fetch_assoc($result)  ){
        echo("<tr>");
        echo("<td>".$row[$tab_kolumna1]."</td><td>".$row[$tab_kolumna2]."</td>");
        echo('<td>');
        echo('<form action="delete.php" method="POST">');
        echo('<input name="id" value="'.$row[$tab_kolumna1].'" hidden>');
        echo('<input name="tabela" value="'.$tab_name.'" hidden>');
        echo('<input name="opcja" value="'.$tab_opcja.'" hidden>');
        echo('<input type="submit" class="button_x" value="X">');
        echo('</form>');
        echo('</td>');
        echo("</tr>");
    };
    echo("</table>");
    echo ("<br>");
};

function niefajne($name1, $name2, $name3, $kolumna1, $kolumna2, $kolumna3, $kolumna4, $kolumna5){
    require("../connect.php");
    $sql = "Select ".$name1.".".$kolumna1.", ".$kolumna4.", ".$kolumna5." from `kako2307_1`.".$name1.", `kako2307_1`.".$name2.", `kako2307_1`.".$name3." where ".$name2.".".$kolumna1."=".$kolumna2." and ".$name3.".".$kolumna1."=".$kolumna3." order by id asc";
    $result = mysqli_query($conn, $sql);
    echo("<h1>Wiele do Wielu</h1>");
    echo("<table border=1>");
    echo("<th>".$kolumna1."</th><th>".$kolumna4."</th><th>".$kolumna5."</th><th>Usuń</th>");
    while($row = mysqli_fetch_assoc($result)  ){
        echo("<tr>");
        echo("<td>".$row[$kolumna1]."</td><td>".$row[$kolumna4]."</td><td>".$row[$kolumna5]."</td>");
        echo('<td>');
        echo('<form action="delete.php" method="POST">');
        echo('<input name="id" value="'.$row[$kolumna1].'" hidden>');
        echo('<input name="tabela" value="'.$name1.'" hidden>');
        echo('<input type="submit" class="button_x" value="X">');
        echo('</form>');
        echo('</td>');
        echo("</tr>");
    };
    echo("</table>");
    echo ("<br>");
};

function id_del_male($tabela, $opcja){
    echo('<h3>Usuwanie po ID</h3>');
    echo('<form action="delete.php" method="POST">');
    echo('<input type="number" name="id">');
    echo('<input name="tabela" value="'.$tabela.'" hidden>');
    echo('<input name="opcja" value="'.$opcja.'" hidden>');
    echo('<input type="submit" class="button_x" value="USUŃ">');
    echo('</form>');
};

function id_del_duze($tabela){
    echo('<h3>Usuwanie po ID</h3>');
    echo('<form action="delete.php" method="POST">');
    echo('<input type="number" name="id">');
    echo('<input name="tabela" value="'.$tabela.'" hidden>');
    echo('<input type="submit" class="button_x" value="USUŃ">');
    echo('</form>');
};
?>
