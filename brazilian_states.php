<style>
    p {
        text-align: justify;
        font-size: 30px;
    }
    table, th, td{
    border: 1px solid black;
    width:40px;
    height:40px;
    font-size: 20px;
}
th{
    background-color: blue;
}
table{
    table-layout:auto ;
    width: 100%;
    
}
img{
    margin-bottom: 80px;
}
</style>
<?php include('include/header.php'); ?>

<p>&nbsp &nbsp As we alraedy know Brazil is a continental country and it is divided
    in 26 states.
    Each state has its own cuture and its own tipical food. The diversity
    of culture there is amazing and i strongly recommend to everyone
    to go and visit the place.
    For you to know a bit about the country i will be presenting each state
    and its most important city.
</p>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img src="img/brazilian_states.jpg" alt="Brazil" width=500 height=500>
            <img src="img/redimer_crist.jpg" alt="redimer Crist" width=500 height=500>
        </div>
        <div class="col-sm-6">
            <table>
                <tr>
                    <th>States</th>
                    <th>Important Cities</th>
                </tr>

                <?php
                $states = array(
                    "Acre" => "Rio Branco", "Alagoas" => "Maceio", "Amapa" => "Macapa",
                    "Amazonas" => "Manaus", "Bahia" => "Salvador", "Ceara" => "Fortaleza", "Espirito Santo" => "Vitoria",
                    "Goias" => "Goiania", "Maranhao" => "Sao Luiz", "Mato Grosso" => "Cuiaba", "Mato Grosso do Sul" => "Campo Grande",
                    "Minas Gerais" => "Belo Horizonte", "Para" => "Belem", "Paraiba" => "Joao Pessoa",
                    "Parana" => "Curitiba", "Pernambuco" => "Recife", "piaui" => "Teresina",
                    "Rio de Janeiro" => "Rio de janeiro", "Rio Grande do Norte" => "Natal",
                    "Rio Grande do Sul" => "Porto Alegre", "Rondonia" => " Porto Velho", "Roraima" => "Boa Vista",
                    "Santa Catarina" => "Florianopolis", "Sao Paulo" => "Sao Paulo", "Sergipe" => "Aracaju",
                    "Tocantins" => "Palmas"
                );




                foreach ($states as $x => $x_value) {
                    echo "<tr><td>$x</td><td>$x_value</td></tr> ";
                }

                ?>
            </table>
        </div>

    </div>

</div>

<?php include('include/footer.php'); ?>

</body>

</html>