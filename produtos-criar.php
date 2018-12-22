<?php require_once 'global.php' ?>
<?php 
try {
    $listaCategoria = Categoria::listar();
} catch (Exception $e) {
    Erro::trataErro($e);
}
 ?>
<?php require_once 'cabecalho.php' ?>
<div class="row">
    <div class="col-md-12">
        <h2>Criar Novo Produto</h2>
    </div>
</div>
<?php if(count($listaCategoria) > 0): ?>
<form action="produtos-criar-post.php" method="POST">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="nome">Nome do Produto</label>
                <input name="nome" type="text" class="form-control" placeholder="Nome do Produto" required>
            </div>
            <div class="form-group">
                <label for="preco">Preço da Produto</label>
                <input name="preco" type="number" step="0.01" min="0" class="form-control" placeholder="Preço do Produto" required>
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade do Produto</label>
                <input name="quantidade" type="number"  min="0" class="form-control" placeholder="Quantidade do Produto" required>
            </div>
            <div class="form-group">
                <label for="nome">Categoria do Produto</label>
                <select class="form-control" name="categoria_id">
                    <?php foreach($listaCategoria as $linha): ?>
                    <option value="<?php echo $linha['id'] ?>"><?php echo $linha['nome'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>
<?php else: ?>
    <h2>Nenhuma categoria cadastrada no sistema.</h2>
    <br/>
    <h3>Por favor crie uma categoria antes de cadastrar um produto.</h3>
<?php endif ?>
<?php require_once 'rodape.php' ?>
