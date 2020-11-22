<?php

session_start();

    if (isset($_POST['user1'])) {
        $user1 = $_POST['user1'];
        $user2 = $_POST['user2'];
        $_SESSION['user1'] = $user1;
        $_SESSION['user2'] = $user2;
    }


    if (isset($_POST['finalizar'])) {
        $turno++;
    }

?>


    <form action="parchis.php" method="post">
    <input type="submit" name="dado" value="dado">
    </form>

<?php


    if ($_SESSION['user1'] !=null && $_SESSION['user2'] !=null) {
        echo "Benvinguts, ". $_SESSION['user1'] . ", " . $_SESSION['user2'];
        echo "<br>";
        echo "<br>";
        $turno = 1;
        if (isset($_POST['dado'])) {
            $dado =rand(1,6);
        }

        if ($turno==1) {
            echo "turno del jugador blau, " . $_SESSION['user1'];
            echo "<br>"; 
            echo "tirada de dado: " . $dado;
            ?>
                <form action="parchis.php" method="post">
                <input type="submit" name="finalizar" value="finalizar turno">
                </form>
            <?php
            $turno ++;

        } else {
            echo "turno del jugador vermell, " . $_SESSION['user2'];
            echo "tirada de dado: " . $dado;
            ?>
                <form action="parchis.php" method="post">
                <input type="submit" name="finalizar" value="finalizar turno">
                </form>
            <?php
            $turno --;
        }







    } else {
        echo "usuaris incorrectament introduits, siusplau, retorni a la página anterior i introdueixi els usuaris.";
    }
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<h1></h1>
<p></p>

</body>

<!-- source: https://codepen.io/Bunno/pen/EOqjpV -->

  <h1></h1>

  <table border="1px">
    <!-- 1 -->
    <tr>
      <td class="amarillo" colspan="7" rowspan="7"></td>
      <td colspan="2">1</td>
      <td colspan="2">68</td>
      <td colspan="2">67</td>
      <td class="verde" colspan="7" rowspan="7"></td>
    </tr>
    <!-- 2 -->
    <tr>
      <td colspan="2">2</td>
      <td class="amarillo" colspan="2">-</td>
      <td colspan="2">66</td>
    </tr>
    <!-- 3 -->
    <tr>
      <td colspan="2">3</td>
      <td class="amarillo" colspan="2">-</td>
      <td colspan="2">65</td>
    </tr>
    <!-- 4 -->
    <tr>
      <td colspan="2">4</td>
      <td class="amarillo" colspan="2">-</td>
      <td colspan="2">64</td>
    </tr>
    <!-- 5 -->
    <tr>
      <td class="amarillo" colspan="2">5</td>
      <td class="amarillo" colspan="2">-</td>
      <td colspan="2">63</td>
    </tr>
    <!-- 6 -->
    <tr>
      <td colspan="2">6</td>
      <td class="amarillo" colspan="2">-</td>
      <td colspan="2">62</td>
    </tr>
    <!-- 7 -->
    <tr>
      <td colspan="2">7</td>
      <td class="amarillo" colspan="2">-</td>
      <td colspan="2">61</td>
    </tr>
    <!-- 8 -->
    <!-- Primera línea justo debajo de los grandes -->
    <tr>
      <td rowspan="2">16</td>
      <td rowspan="2">15</td>
      <td rowspan="2">14</td>
      <td rowspan="2">13</td>
      <td rowspan="2">12</td>
      <td rowspan="2">11</td>
      <td rowspan="2">10</td>
      <td id="vacio"></td>
      <td>8</td>
      <td>-</td>
      <td>-</td>
      <td>60</td>
      <td id="vacio"></td>
      <td rowspan="2">58</td>
      <td rowspan="2">57</td>
      <td class="verde" rowspan="2">56</td>
      <td rowspan="2">55</td>
      <td rowspan="2">54</td>
      <td rowspan="2">53</td>
      <td rowspan="2">52</td>
    </tr>
    <!-- 9 -->
    <tr>
      <td>9</td>
      <td colspan="4" rowspan="4"><img src="http://ilusionesopticas.org.es/wp-content/uploads/2015/10/movimiento-de-centro-hacia-afuera-400x400.jpg" /></td>
      <td>59</td>
    </tr>
    <!-- 10 -->
    <tr>
      <td rowspan="2">17</td>
      <td class="azul" rowspan="2">|</td>
      <td class="azul" rowspan="2">|</td>
      <td class="azul" rowspan="2">|</td>
      <td class="azul" rowspan="2">|</td>
      <td class="azul" rowspan="2">|</td>
      <td class="azul" rowspan="2">|</td>
      <td>|</td>
      <td>|</td>
      <td class="verde" rowspan="2">|</td>
      <td class="verde" rowspan="2">|</td>
      <td class="verde" rowspan="2">|</td>
      <td class="verde" rowspan="2">|</td>
      <td class="verde" rowspan="2">|</td>
      <td class="verde" rowspan="2">|</td>
      <td rowspan="2">51</td>
    </tr>
    <!-- 11 -->
    <tr>
      <td>|</td>
      <td>|</td>
    </tr>
    <!-- 12 -->
    <tr>
      <td rowspan="2">18</td>
      <td rowspan="2">19</td>
      <td rowspan="2">20</td>
      <td rowspan="2">21</td>
      <td class="azul" rowspan="2">22</td>
      <td rowspan="2">23</td>
      <td rowspan="2">24</td>
      <td>25</td>
      <td>43</td>
      <td rowspan="2">44</td>
      <td rowspan="2">45</td>
      <td rowspan="2">46</td>
      <td rowspan="2">47</td>
      <td rowspan="2">48</td>
      <td rowspan="2">49</td>
      <td rowspan="2">50</td>
    </tr>
    <!-- 13 -->
    <tr>
      <td id="vacio"></td>
      <td>26</td>
      <td>-</td>
      <td>-</td>
      <td>42</td>
      <td id="vacio"></td>
    </tr>
    <!-- 14 -->
    <tr>
      <td class="azul" colspan="7" rowspan="7"><img class="fichasazules" id="azul1" src="ficha_azul.png"><img class="fichasazules" id="azul2" src="ficha_azul.png"><img class="fichasazules" id="azul3" src="ficha_azul.png"><img class="fichasazules" id="azul4" src="ficha_azul.png"></td>
      <td colspan="2">27</td>
      <td class="rojo" colspan="2">-</td>
      <td colspan="2">41</td>
      <td class="rojo" colspan="7" rowspan="7"><img class="fichasrojas" id="roja1" src="ficha_roja.png"><img class="fichasrojas" id="roja2" src="ficha_roja.png"><img class="fichasrojas" id="roja3" src="ficha_roja.png"><img class="fichasrojas" id="roja4" src="ficha_roja.png"></td>
    </tr>
    <!-- 15 -->
    <tr>
      <td colspan="2">28</td>
      <td class="rojo" colspan="2">-</td>
      <td colspan="2">40</td>
    </tr>
    <!-- 16 -->
    <tr>
      <td colspan="2">29</td>
      <td class="rojo" colspan="2">-</td>
      <td class="rojo" colspan="2">39</td>
    </tr>
    <!-- 17 -->
    <tr>
      <td colspan="2">30</td>
      <td class="rojo" colspan="2">-</td>
      <td colspan="2">38</td>
    </tr>
    <!-- 18 -->
    <tr>
      <td colspan="2">31</td>
      <td class="rojo" colspan="2">-</td>
      <td colspan="2">37</td>
    </tr>
    <!-- 19 -->
    <tr>
      <td colspan="2">32</td>
      <td class="rojo" colspan="2">-</td>
      <td colspan="2">36</td>
    </tr>
    <!-- 20 -->
    <tr>
      <td colspan="2">33</td>
      <td colspan="2">34</td>
      <td colspan="2">35</td>
    </tr>

  </table>



</body>
</html>