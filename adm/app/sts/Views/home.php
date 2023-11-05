<?php

    foreach ($this->Dados as $topr){
        $total_produtos =  $topr['qtd_produtos'] ;
    }
?>


<div class="title">
    
<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="icon" viewBox="0 0 16 16">
    <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"/> 
</svg>

<h1 class="home">Pagina Inicial</h1>


</div>

<div class="cardBox">
        <div class="card">
            <div>
                <div class="numbers"><?php echo $total_produtos?></div>
                <div class="cardName">Estoque Total</div>
            </div>

            <div class="iconBx">
                <ion-icon name="eye-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers"></div>
                <div class="cardName">Fornecedores</div>
            </div>

            <div class="iconBx">
                <ion-icon name="cart-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers"></div>
                <div class="cardName">Usuarios </div>
            </div>

            <div class="iconBx">
                <ion-icon name="chatbubbles-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers"></div>
                <div class="cardName">Valor Estoque</div>
            </div>

            <div class="iconBx">
                <ion-icon name="cash-outline"></ion-icon>
            </div>
        </div>
    </div>


<div class="pizza">
<div id="piechart" style="width: 550px; height: 500px; margin-top: 0px; padding-right:30px; border: none; position:absolute" ></div>
<div id="chart_div" style="width: 1000px; height: 350px;  padding-right:30px; border: none; position:absolute; margin-left:420px; margin-top:50px"></div>


</div>
</body>
<!-------------------------------------------------------Pizza----------------------------------------------------------------------------------------------->

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

var data = google.visualization.arrayToDataTable([
  <?php echo $dadospizza1;?>
]);

var options = {
  title: 'Estoque Usuarios'
};

var chart = new google.visualization.PieChart(document.getElementById('piechart'));

chart.draw(data, options);
}
</script>

<!---------------------------------------------------------Grafico Area------------------------------------------------------------------------------------------------------->



<!-----------------------------------------------------------Grafico de Combinacao-------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">




google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawVisualization);

function drawVisualization() {
// Some raw data (not necessarily accurate)
var data = google.visualization.arrayToDataTable([
    
    <?php echo $dadospizza1;?>
]);

var options = {
  title: 'Estoque Usuarios',
  vAxis: {title: 'Total Estoque'},
  hAxis: {title: 'Usuarios'},
  seriesType: 'bars',
  colors: ['dodgerblue'],
  series: {5: {type: 'line'}}

  
};

var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
chart.draw(data, options);
}
</script>



</html>