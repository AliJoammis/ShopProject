<html>
    <head>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <img height="60" width="80"  src="photos/music.webp" alt="">
            <audio controls autoplay>
            <source src="music/Indecision - Dyalla.mp3" style= margin-left:30px; type="audio/ogg">
            </audio>
    <script src="script.js"></script>
    <center><img src="photos/shake.jpeg" width="1000" height=300  alt=""></center>
        
        <body>
        <ul>
         <li> 
            <a href="HomePage.php"> </i> Home</a> </li>
               </ul>
        </body>
    </head>

<center>
    <br>
    <div class="container">
        <img src="photos/ourProtein.webp" width="590" height = "200" alt="">
        <div class="centered">our proteins</div>
    </div>

    <br><h4 style="color:867070;">Scroll down for minimize options! </h4>
<?php
   $arr = Array (
       0 => Array (
           'Serual-number' => '11',
           'Product-name' => 'iso-plex32',
           'Price in Sterling' => '99.90',
           'Colour' => 'white',
           'weight' => '2.27',
       ),
       1 => Array (
           'Serual-number' => '22',
           'Product-name' => 'iso-plex41',
           'Price in Sterling' => '119.90',
           'Colour' => 'chocolate',
           'weight' => '5.7',
       ),
       2 => Array (
           'Serual-number' => '33',
           'Product-name' => 'iso-plex22',
           'Price in Sterling' => '84.90',
           'Colour' => 'chocolate chip cookies',
           'weight' => '2.27',
       ),
       3 => Array (
           'Serual-number' => '44',
           'Product-name' => 'iso-plex100',
           'Price in Sterling' => '89.90',
           'Colour' => 'vanilla',
           'weight' => '5.7',
       ),
       4 => Array (
           'Serual-number' => '55',
           'Product-name' => 'iso100',
           'Price in Sterling' => '89.90',
           'Colour' => 'vanilla chocolate',
           'weight' => '5.7',
       ),
        5 => Array (
            'Serual-number' => '11',
            'Product-name' => 'whey 100',
            'Price in Sterling' => '139.90',
            'Colour' => 'white',
            'weight' => '2.27',
        ),
        6 => Array (
            'Serual-number' => '22',
            'Product-name' => 'whey',
            'Price in Sterling' => '69.90',
            'Colour' => 'chocolate',
            'weight' => '5.7',
        ),
        7 => Array (
            'Serual-number' => '33',
            'Product-name' => 'whey200',
            'Price in Sterling' => '109.90',
            'Colour' => 'chocolate chip cookies',
            'weight' => '2.27',
        ),
        8 => Array (
            'Serual-number' => '44',
            'Product-name' => 'super whey',
            'Price in Sterling' => '72.90',
            'Colour' => 'vanilla',
            'weight' => '5.7',
        ),
        9 => Array (
            'Serual-number' => '55',
            'Product-name' => 'protien100',
            'Price in Sterling' => '79.90',
            'Colour' => 'vanilla chocolate',
            'weight' => '5.7',
        ),
       
   );
  
   function intcmp($a,$b) {
    if((int)$a['Price in Sterling'] == (int)$b['Price in Sterling'])return 0;
    if((int)$a['Price in Sterling']  < (int)$b['Price in Sterling'])return 1;
    if((int)$a['Price in Sterling']  > (int)$b['Price in Sterling'])return -1;
}
   
   usort($arr, 'intcmp');
?>

<center><br>
 <table class="demotbl" >
        <tr>
            <th>Product</th>
            <th>Product Id</th>
            <th>Ammount</th>
            <th>Price in Sterling</th>
            <th>Colour</th>
            <th>wheight</th>
        </tr>

        <?php
        $i=0;
        foreach ($arr as $Array)
        {
            ?>
            <tr>
                <td><?php echo '<img src="photos/whey'.json_encode($i).'.webp" width="100">'  ?></td>
                <td><?php echo $Array['Serual-number']; ?></td>
                <td><?php echo $Array['Product-name']; ?></td>
                <td><?php echo $Array['Price in Sterling']; ?></td>
                <td><?php echo $Array['Colour']; ?></td>
                <td><?php echo $Array['weight']; ?></td>
            </tr>
            
            <?php
            $i++;
        }
        ?>
    </table>
    <h3 style="color:4F4557;">-Click the down button for view special prices- <br> high / low price:</h3><br>
    <table>
    <tr>
        <th>
           <button onclick="highPrice()">high price</button>
        </th><br>
        <th>
            <button onclick="lowPrice()">low price</button>
        </th>
    </tr>
</table>

<table class="demotbl">
    <tr>
        <th>
        <p id="demo1">special prices!</p>
        </th>
    </tr>
</table>

<script>
    
    function highPrice(){
        var my_var = <?php 
         $highPrice = $arr[0]['Price in Sterling'];
         echo json_encode($highPrice); ?>+", product name :"+<?php echo json_encode($arr[0]['Product-name']) ;?>+
         ", colour :"+<?php echo json_encode($arr[0]['Colour']) ;?> +
         ", weight : "+<?php echo json_encode($arr[0]['weight']) ;?>;
         document.getElementById("demo1").innerHTML="high price is "+my_var;
    }
    function lowPrice(){
        var my_var = <?php 
         $lowPrice = $arr[count($arr)-1]['Price in Sterling'];
         echo json_encode($lowPrice); ?>+", product name :"+<?php echo json_encode($arr[count($arr)-1]['Product-name']) ;?>+
         ", colour :"+<?php echo json_encode($arr[count($arr)-1]['Colour']) ;?>+
         ", weight : "+<?php echo json_encode($arr[count($arr)-1]['weight']) ;?>;
         document.getElementById("demo1").innerHTML="low price is "+my_var;
    }

</script>

    </center>
      <br>
    
 <br><br><hr> <br>
 <p style="color:867070;">Copyright © 2022 Ali Reem.</p><br><br>
 </html>