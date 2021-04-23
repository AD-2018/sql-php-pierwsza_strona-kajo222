<!DOCTYPE html>
<html>
  <head>
      <link rel="stylesheet" href="../style.css">
      <title>Kacper Korczak 3Ti</title>
  </head>
  <body>
    <?php include ("../menu.php"); ?>
    <div class="zawartosc">
    <?php

    require_once("../connect.php");
    echo ('<h2>Lista<h2>');
      $sql ="select * from pracownicy";
    $result = mysqli_query($conn, $sql);
    echo('<select name="pracownik">');
      while($row = mysqli_fetch_assoc($result)) {
                echo '<option value="'.$row['id_pracownicy'].'">';
          echo($row['imie'].', '.$row['zarobki'].', '.$row['data_urodzenia'].', '.$row['dzial']);
          echo "</option>";
      };
    echo('</select>');
    echo ('<br>');
    echo("<h2>Pracownicy i Organizacja</h2>");
        $sql ="select * from pracownicy,organizacja where id_org=dzial group by imie"; 
    echo("<h3>Zadanie 1</h3>"); 
    $result = mysqli_query($conn, $sql);
    echo('<table border="1" class="tabela"'); 
    echo ("<tr><th>Imie</th><th>Nazwa Dzialu</th></tr>"); 
    while($row=mysqli_fetch_assoc($result)){ 
      echo("<tr>");         
      echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td>");     
      echo("</tr>"); } 
    echo('</table>'); 
      
        $sql ="select * from pracownicy,organizacja where id_org=dzial group by imie having dzial=1 or dzial=4"; 
    echo("<h3>Zadanie 2</h3>"); 
    $result = mysqli_query($conn, $sql);
    echo('<table border="1" class="tabela"'); 
    echo ("<tr><th>Imie</th><th>Nazwa Dzialu</th></tr>"); 
    while($row=mysqli_fetch_assoc($result)){ 
      echo("<tr>");         
      echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td>");     
      echo("</tr>"); } 
    echo('</table>'); 
          
        $sql ="select * from pracownicy,organizacja where id_org=dzial and imie like '%a' group by imie"; 
    echo("<h3>Zadanie 3</h3>"); 
    $result = mysqli_query($conn, $sql);
    echo('<table border="1" class="tabela"'); 
    echo ("<tr><th>Imie</th><th>Nazwa Dzialu</th></tr>"); 
    while($row=mysqli_fetch_assoc($result)){ 
      echo("<tr>");         
      echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td>");     
      echo("</tr>"); } 
    echo('</table>'); 
              
        $sql ="select * from pracownicy,organizacja where id_org=dzial and imie not like '%a' group by imie"; 
    echo("<h3>Zadanie 4</h3>"); 
    $result = mysqli_query($conn, $sql);
    echo('<table border="1" class="tabela"'); 
    echo ("<tr><th>Imie</th><th>Nazwa Dzialu</th></tr>"); 
    while($row=mysqli_fetch_assoc($result)){ 
      echo("<tr>");         
      echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td>");     
      echo("</tr>"); } 
    echo('</table>'); 
        
    echo("<h2>Sortowanie</h2>");  
        $sql ="select * from pracownicy,organizacja where id_org=dzial order by imie desc"; 
    echo("<h3>Zadanie 1</h3>"); 
    $result = mysqli_query($conn, $sql);
    echo('<table border="1" class="tabela"'); 
    echo ("<tr><th>Imie</th><th>Nazwa Dzialu</th></tr>"); 
    while($row=mysqli_fetch_assoc($result)){ 
      echo("<tr>");         
      echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td>");     
      echo("</tr>"); } 
    echo('</table>'); 
                  
        $sql ="select * from pracownicy,organizacja where id_org=dzial and dzial=3 order by imie asc"; 
    echo("<h3>Zadanie 2</h3>"); 
    $result = mysqli_query($conn, $sql);
    echo('<table border="1" class="tabela"'); 
    echo ("<tr><th>Imie</th><th>Nazwa Dzialu</th></tr>"); 
    while($row=mysqli_fetch_assoc($result)){ 
      echo("<tr>");         
      echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td>");     
      echo("</tr>"); } 
    echo('</table>'); 
                  
        $sql ="select * from pracownicy,organizacja where id_org=dzial and imie like '%a' order by imie asc"; 
    echo("<h3>Zadanie 3</h3>"); 
    $result = mysqli_query($conn, $sql);
    echo('<table border="1" class="tabela"'); 
    echo ("<tr><th>Imie</th><th>Nazwa Dzialu</th></tr>"); 
    while($row=mysqli_fetch_assoc($result)){ 
      echo("<tr>");         
      echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td>");     
      echo("</tr>"); } 
    echo('</table>'); 
                  
        $sql ="select * from pracownicy,organizacja where id_org=dzial and imie like '%a' having (dzial=1 or dzial=3) order by imie asc"; 
    echo("<h3>Zadanie 4</h3>"); 
    $result = mysqli_query($conn, $sql);
    echo('<table border="1" class="tabela"'); 
    echo ("<tr><th>Imie</th><th>Nazwa Dzialu</th><th>Zarobki</th></tr>"); 
    while($row=mysqli_fetch_assoc($result)){ 
      echo("<tr>");         
      echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['zarobki']."</td>");     
      echo("</tr>"); } 
    echo('</table>'); 
                      
        $sql ="select * from pracownicy,organizacja where id_org=dzial and imie not like '%a' order by dzial asc, zarobki asc"; 
    echo("<h3>Zadanie 5</h3>"); 
    $result = mysqli_query($conn, $sql);
    echo('<table border="1" class="tabela"'); 
    echo ("<tr><th>Imie</th><th>Nazwa Dzialu</th><th>Zarobki</th></tr>"); 
    while($row=mysqli_fetch_assoc($result)){ 
      echo("<tr>");         
      echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['zarobki']."</td>");       
      echo("</tr>"); } 
    echo('</table>'); 
                
    echo("<h2>LIMIT</h2>");  
        $sql ="select * from pracownicy,organizacja where id_org=dzial and dzial=4 order by zarobki desc limit 0, 2"; 
    echo("<h3>Zadanie 1</h3>"); 
    $result = mysqli_query($conn, $sql);
    echo('<table border="1" class="tabela"'); 
    echo ("<tr><th>Imie</th><th>Nazwa Dzialu</th><th>Zarobki</th></tr>"); 
    while($row=mysqli_fetch_assoc($result)){ 
      echo("<tr>");         
      echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['zarobki']."</td>");     
      echo("</tr>"); } 
    echo('</table>'); 
      
        $sql ="select * from pracownicy,organizacja where id_org=dzial and imie like'%a' and (dzial=4 or dzial=3) order by zarobki desc limit 0, 3"; 
    echo("<h3>Zadanie 2</h3>"); 
    $result = mysqli_query($conn, $sql);
    echo('<table border="1" class="tabela"'); 
    echo ("<tr><th>Imie</th><th>Nazwa Dzialu</th><th>Zarobki</th></tr>"); 
    while($row=mysqli_fetch_assoc($result)){ 
      echo("<tr>");         
      echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['zarobki']."</td>");     
      echo("</tr>"); } 
    echo('</table>'); 
      
        $sql ="select * from pracownicy,organizacja where id_org=dzial order by data_urodzenia asc limit 0, 1"; 
    echo("<h3>Zadanie 3</h3>"); 
    $result = mysqli_query($conn, $sql);
    echo('<table border="1" class="tabela"'); 
    echo ("<tr><th>Imie</th><th>Nazwa Dzialu</th><th>Data Urodzenia</th></tr>"); 
    while($row=mysqli_fetch_assoc($result)){ 
      echo("<tr>");         
      echo("<td>".$row['imie']."</td><td>".$row['nazwa_dzial']."</td><td>".$row['data_urodzenia']."</td>");     
      echo("</tr>"); } 
    echo('</table>'); 
      
    ?>
    </div>
  </body>
</html>
