<div class="form-group row">
    <label class="subtituloConfiguraTextos">Home</label>
    <div class="col-md-12 mt-2">
        <form method="POST" action="<?= URL ?>/Admin/atualizaTexto/home">
            <textarea class="form-control" id="texto" rows="5" required name="texto"><?= $dados["textoHome"][0]->texto ?></textarea>
            <div class="col-md-2 mt-4">
                <select class="form-control" required name="status">
                    <?php
                        $selectedAtivado = $dados["textoHome"][0]->status == 'a' ? 'selected' : '';
                        $selectedDesativado = $dados["textoHome"][0]->status == 'd' ? 'selected' : '';
                    ?>
                    <option value="a" <?= $selectedAtivado ?>>Ativado</option>
                    <option value="d" <?= $selectedDesativado ?>>Desativado</option>
                </select>
            </div>
            <div class="col-md-12 mt-4">
                <input type="submit" class="btn btn-primary" style="width:100%;" value="Atualizar" name="atualizar">
            </div>
        </form>
    </div>
</div>