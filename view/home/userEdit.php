<div class="container">
    <h1 class="display-3">Bewerk een Gebruiker</h1>
    <form name="update" method="post" action="<?=URL?>home/userEdit">
        <input type="hidden" name="id" value="<?=$id ?>"/>
        <div class="form-group col-sm-8">
            <label for="name">Naam:</label>
            <input type="text" class="form-control" name="name" value="<?=$name ?>">
        </div>
        <div class="form-group col-sm-8">
            <label for="adress">Adres:</label>
            <input type="text" class="form-control" name="adress" value="<?=$adress ?>">
        </div>
        <div class="form-group col-sm-8">
            <label for="phone">Telefoonnummer:</label>
            <input type="text" class="form-control" name="phone" value="<?=$phone ?>">
        </div>
        <br>
        <button class="btn btn-dark ml-3" type="submit">Gebruiker Bewerken</button>
    </form>
</div>