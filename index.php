<?php 
    include_once("templates/header.php");
    include_once("process/pizzas.php");
?>
<div id="main-banner">
    <h1>Faça Seu Pedido</h1>
</div>

<div id="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Monte sua Pizza como desejar:</h2>
                <form action="process/pizza.php" method="POST" id="pizza-form">
                    <div class="form-group mb-4">
                        <label for="borda" class="mb-2">Borda:</label>
                        <select name="borda" id="borda" class="form-control">
                            <option value="">Selecione uma borda</option>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <label for="massa" class="mb-2">Massa:</label>
                        <select name="massa" id="massa" class="form-control">
                            <option value="">Selecione uma massa</option>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <label for="sabores" class="mb-2">Sabores: (Máximo 3)</label>
                        <select multiple name="sabores[]" id="sabores" class="form-control">
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Enviar Pedido">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include_once("templates/footer.php"); ?>