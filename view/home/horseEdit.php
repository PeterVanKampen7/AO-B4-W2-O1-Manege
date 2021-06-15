<div class="container">
    <h1 class="display-3">Bewerk een Paard of Pony</h1>
    <form name="update" method="post" action="<?=URL?>home/horseEdit">
        <input type="hidden" name="id" value="<?=$id ?>"/>
        <div class="form-group col-sm-8">
            <label for="name">Naam:</label>
            <input type="text" class="form-control" name="name" value="<?=$name ?>">
        </div>
        <div class="form-group col-sm-8">
            <label for="breed">Ras:</label>
            <input type="text" class="form-control" name="breed" value="<?=$breed ?>">
        </div>
        <div class="form-group col-sm-8">
            <label for="age">Leeftijd:</label>
            <input type="text" class="form-control" name="age" value="<?=$age ?>">
        </div>
        <div class="form-group col-sm-8">
            <label for="jump">Springsport:</label>
            <select class="form-control" name="jump" <?php if($type == "Pony"){echo "disabled";} ?>>     
            <?php
                if($jump == "1"){
                    echo "<option selected> Ja </option>";                                    
                    echo "<option> Nee </option>"; 
                } else {
                    echo "<option> Ja </option>";                                    
                    echo "<option selected> Nee </option>"; 
                }
            ?>                                                     
            </select>
        </div>
        <div class="form-group col-sm-8">
            <label for="height">Schofthoogte(cm):</label>
            <input type="text" class="form-control" name="height" value="<?=$wither_height ?>" <?php if($type == "Paard"){echo "disabled";} ?>>
        </div>
        <br>
        <button class="btn btn-dark ml-3" type="submit">Gebruiker Bewerken</button>
    </form>
</div>