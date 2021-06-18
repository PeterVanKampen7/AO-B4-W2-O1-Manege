<div class="container">
    <h1 class="display-3">Bewerk hier een reservatie</h1>
    <form name="create" method="post" action="<?=URL?>home/reservationEdit">
        <input type="hidden" name="id" value="<?=$data["reservationData"]["id"] ?>"/>
        <div class="form-group col-sm-8">
            <label for="user">Ruiter:</label>
            <select class="form-control" name="user">                              
                <?php
                    foreach ($data["userData"] as $line) {
                        if($line["id"] == $data["reservationData"]["user_id"]){
                            echo '<option selected value="'.$line["id"].'"> '.$line["name"]." </option>";
                        } else {
                            echo '<option value="'.$line["id"].'"> '.$line["name"]." </option>";
                        }
                        
                    }
                ?>
            </select>
        </div>
        <div class="form-group col-sm-8">
            <label for="horse">Paard of Pony:</label>
            <select class="form-control" name="horse">                              
                <?php
                    foreach ($data["horseData"] as $line) {
                        if($line["id"] == $data["reservationData"]["horse_id"]){
                            echo '<option selected value="'.$line["id"].'"> '.$line["name"]." </option>";
                        } else {
                            echo '<option value="'.$line["id"].'"> '.$line["name"]." </option>";
                        }
                    }
                ?>
            </select>
        </div>
        <div class="form-group col-sm-8">
            <label for="date">Datum:</label>
            <input class="form-control" type="date" name="date" value="<?php echo $data["reservationData"]["date"]; ?>">
        </div>
        <div class="form-group col-sm-8">
            <label for="start_time">Starttijd:</label>
            <input class="form-control" type="time" name="start_time" value="<?php echo $data["reservationData"]["start_time"]; ?>">
        </div>
        <div class="form-group col-sm-8">
            <label for="duration">Hoeveel uur:</label>
            <select class="form-control" name="duration" onchange="changeFunction()" id="timeInput">                              
                <?php
                    for ($i=1; $i <= 10; $i++) { 
                        if($data["reservationData"]["duration"] == $i){
                            echo '<option selected> '.$i." </option>";
                        } else {
                            echo '<option> '.$i." </option>";
                        }           
                    }
                ?>
            </select>
        </div>
        <div class="form-group col-sm-8">
            <label for="cost">Totale Prijs:</label>
            <input type="text" readonly class="form-control" id="costField" value="<?php echo 55*$data["reservationData"]["duration"]?> euro">
        </div>
        <br>
        <button class="btn btn-dark ml-3" type="submit">Reservering Bewerken</button>
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