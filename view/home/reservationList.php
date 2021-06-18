<div class="container">
    <h1 class="display-3">Reservaties</h1>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Naam</th>
            <th scope="col">Datum</th>   
            <th scope="col">Starttijd</th>
            <th scope="col">Tijdsduur</th>
            <th scope="col">Kost</th>
            <th scope="col">Rijdier Type</th>
            <th scope="col">Rijdier Naam</th>
            <th scope="col">Rijdier Ras</th>
            <th scope="col">Bewerken</th>
            <th scope="col">Verwijderen</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($data as $line) {
                ?>
                <tr>
                <td><?php echo $line["name"] ?></td>
                <td><?php echo $line["date"] ?></td>
                <td><?php echo $line["start_time"] ?></td>
                <td><?php echo $line["duration"] . " uur" ?></td>
                <td><?php echo "€".$line["cost"] ?></td>
                <td><?php echo $line["type"] ?></td>
                <td><?php echo $line["horse_name"] ?></td>
                <td><?php echo $line["breed"] ?></td>


                <td><a href="<?=URL?>home/editReservation/<?php echo $line['id'];?>" type="button" class="btn btn-primary"><i class="fas fa-edit text-light"></i></a></td>
                <td>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete<?php echo $line["id"]; ?>">
                        <i class="fas fa-trash text-light"></i>
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="confirmDelete<?php echo $line["id"]; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Bevestigen</h5>
                        </div>
                        <div class="modal-body">
                            Weet u zeker dat u deze reservatie wilt verwijderen?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Nee</button>
                            <a href="<?=URL?>home/deleteReservation/<?php echo $line['id'];?>" type="button" class="btn btn-danger">Ja</a>
                        </div>
                        </div>
                    </div>
                    </div>
                </td>
                </tr>
                <?php
            }
            
        ?>
        </tbody>
    </table>
    </ul>
    
</div>
