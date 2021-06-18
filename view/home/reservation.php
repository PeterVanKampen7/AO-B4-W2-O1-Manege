<div class="container">
    <h1 class="display-3">Reserveer hier een Paard of Pony</h1>
    <form name="create" method="post" action="storeReservation">
        <div class="form-group col-sm-8">
            <label for="user">Ruiter:</label>
            <select class="form-control" name="user">                              
                <?php
                    foreach ($data["userData"] as $line) {
                        echo '<option value="'.$line["id"].'"> '.$line["name"]." </option>";
                    }
                ?>
            </select>
        </div>
        <div class="form-group col-sm-8">
            <label for="horse">Paard of Pony:</label>
            <select class="form-control" name="horse">                              
                <?php
                    foreach ($data["horseData"] as $line) {
                        echo '<option value="'.$line["id"].'"> '.$line["name"]." </option>";
                    }
                ?>
            </select>
        </div>
        <div class="form-group col-sm-8">
            <label for="date">Datum:</label>
            <input class="form-control" type="date" name="date">
        </div>
        <div class="form-group col-sm-8">
            <label for="start_time">Starttijd:</label>
            <input class="form-control" type="time" name="start_time">
        </div>
        <div class="form-group col-sm-8">
            <label for="duration">Hoeveel uur:</label>
            <select class="form-control" name="duration" onchange="changeFunction()" id="timeInput">                              
                <?php
                    for ($i=1; $i <= 10; $i++) { 
                        echo '<option> '.$i." </option>";
                    }
                ?>
            </select>
        </div>
        <div class="form-group col-sm-8">
            <label for="cost">Totale Prijs:</label>
            <input type="text" readonly class="form-control" value="55 euro" id="costField">
        </div>
        <br>
        <button class="btn btn-dark ml-3" type="submit">Reservering Plaatsen</button>
    </form>
    <script>
        function changeFunction(){
            var time = document.getElementById("timeInput");
            var cost = document.getElementById("costField");
            var output = time.value * 55;
            cost.value = output + " euro";
        }
    </script>
</div>