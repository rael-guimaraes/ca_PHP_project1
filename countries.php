<?php include('include/header.php'); ?>

<style>
    p{
        font-size: 30px;
        text-align: center;
    }
    form{
        margin-top: 250px;
        font-size: 23px;
        text-align: center;
    }
    img{
        margin-top: 100px;
    }
</style>



<p>
    &nbsp &nbsp Since i moved to Ireland 3 years ago i had the opportunity of travelling arround
    Europe. It is amazing. There are so many incredibles and historical places. i
    strongly recomend it. I love travelling and i think that everyone should do an Eurotrip 
    any time in their life. If you are planning to travel around Europe and you do not know much about 
    the places, you can check wich is de capital by typing the name of the country you wanna go.
</p>


<div class="container">
    <div class="row">
        <div class="col-sm-4">

        <img src="https://images.pexels.com/photos/3879071/pexels-photo-3879071.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="some text" width=350 height=600>



        </div>
        <div class="col-sm-4">

        <form action="" method="post">
                <label>Enter the country you would like to visit</label>
                <input type="text" name="notes"><br>
                <input type="submit" value="submit">
            </form>
            <?php

$coutries = array(
    "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels",
    "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm",
    "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague",
    "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna",
    "Poland" => "Warsaw"
);

if (isset($_POST['notes'])) {
    $query = $_POST['notes'];

    $match = false;
    foreach ($coutries as $key => $state) {
        if ($query == $key) {
            $match = true;
            break;
        }
    }

    if ($match) {
        echo "The capital of " . $key . " is <br> " . $state; // foreach index variables still exist here..
    } else {
        echo "country is not listed";
    }
}
?>


        



        </div>
        <div class="col-sm-4">



        <img src="https://images.pexels.com/photos/1837591/pexels-photo-1837591.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="some text" width=350 height=600>

        </div>


    </div>
</div>




<?php include('include/footer.php'); ?>


</body>

</html>