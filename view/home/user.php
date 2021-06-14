<div class="container">
    <h1 class="display-3">Voeg een Gebruiker toe</h1>
    <form name="create" method="post" action="storeUser">
        <div class="form-group col-sm-8">
            <label for="name">Naam:</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group col-sm-8">
            <label for="adress">Adres:</label>
            <input type="text" class="form-control" name="adress">
        </div>
        <div class="form-group col-sm-8">
            <label for="phone">Telefoonnummer:</label>
            <input type="text" class="form-control" name="phone">
        </div>
        <br>
        <button class="btn btn-dark ml-3" type="submit">Gebruiker Toevoegen</button>
    </form>
</div>