<div class="container">
    <h1 class="display-3">Voeg een Paard of Pony toe</h1>
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed text-dark" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Meld een Paard aan!
                </button>
            </h5>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <form name="create" method="post" action="storeHorse">
                        <div class="form-group col-sm-8">
                            <label for="name">Naam:</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group col-sm-8">
                            <label for="breed">Ras:</label>
                            <input type="text" class="form-control" name="breed">
                        </div>
                        <div class="form-group col-sm-8">
                            <label for="age">Leeftijd:</label>
                            <input type="text" class="form-control" name="age">
                        </div>
                        <div class="form-group col-sm-8">
                            <label for="jump">Springsport:</label>
                            <select class="form-control" name="jump">                              
                                <option> Ja </option>;                                    
                                <option> Nee </option>;                                
                            </select>
                        </div>
                        <br>
                        <button class="btn btn-dark ml-3" type="submit">Paard Toevoegen</button>
                    </form>      
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed text-dark" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Meld een Pony aan!
                </button>
            </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    <form name="create" method="post" action="storePony">
                        <div class="form-group col-sm-8">
                            <label for="name">Naam:</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group col-sm-8">
                            <label for="breed">Ras:</label>
                            <input type="text" class="form-control" name="breed">
                        </div>
                        <div class="form-group col-sm-8">
                            <label for="age">Leeftijd:</label>
                            <input type="text" class="form-control" name="age">
                        </div>
                        <div class="form-group col-sm-8">
                            <label for="height">Schofthoogte(cm):</label>
                            <input type="text" class="form-control" name="height">
                        </div>
                        <br>
                        <button class="btn btn-dark ml-3" type="submit">Pony Toevoegen</button>
                    </form>                             
                </div>
            </div>
        </div>
    </div>
</div>