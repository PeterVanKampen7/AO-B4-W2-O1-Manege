<div class="container">
    <h1 class="display-3">Paarden en Ponies</h1>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Naam</th>
            <th scope="col">Type</th>   
            <th scope="col">Ras</th>
            <th scope="col">Leeftijd</th>
            <th scope="col">Springsport</th>
            <th scope="col">Schofthoogte(cm)</th>
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
                <td><?php echo $line["type"] ?></td>
                <td><?php echo $line["breed"] ?></td>
                <td><?php echo $line["age"] ?></td>
                <td><?php echo $line["jump"] ?></td>
                <td><?php echo $line["wither_height"] ?></td>


                <td><a href="<?=URL?>home/editHorse/<?php echo $line['id'];?>" type="button" class="btn btn-primary"><i class="fas fa-edit text-light"></i></a></td>
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
                            Weet u zeker dat u dit paard wilt verwijderen?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Nee</button>
                            <a href="<?=URL?>home/deleteHorse/<?php echo $line['id'];?>" type="button" class="btn btn-danger">Ja</a>
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
