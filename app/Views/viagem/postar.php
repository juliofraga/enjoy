<main class="bg-white">
    <div id="form1">
        <h4>Conte-nos, para onde foi a sua viagem?</h4>
        <span>
            <input type="text" size="50px" class="form form-control">
        </span>
        <h4>Quando você viajou?</h4>
        <span>
            <input type="date" size="50px" class="form form-control">
        </span>
        <br>
        <button class="btn btn-dark" style="width:30%;" onClick="alteraCampos(1);">Next</button>
    </div>
    <div id="form2">
        <h4>Do que você mais gostou?</h4>
        <span>
            <textarea class="form form-control" rows="3" cols="80"></textarea>
        </span>
        <h4>E o que você acha que deixou a desejar?</h4>
        <span>
            <textarea class="form form-control" rows="3" cols="80"></textarea>
        </span>
        <br>
        <button  class="btn btn-dark" style="width:30%;" onClick="alteraCampos(2);">Next</button>
    </div>
    <div id="form3">
        <h4>Nos conte mais sobre a sua viagem, dicas, observações, fique a vontade :)</h4>
        <span>
            <textarea class="form form-control" rows="10" cols="100"></textarea>
        </span>
        <br>
        <button  class="btn btn-dark" style="width:30%;" onClick="alteraCampos(3);">Next</button>
    </div>
    <div id="form4">
        <h4>Qual o seu Instagram?</h4>
        <span>
            <input type="text" size="50px" class="form form-control">
        </span>
        <br>
        <h4>Você nos autoriza a compartilhamos a sua postagem nas nossas redes sociais?</h4>
        <span>
            <select class="form form-control">
                <option>Sim</option>
                <option>Não</option>
            </select>
        </span>
        <br>
        <button  class="btn btn-dark" style="width:30%;" onClick="alteraCampos(4);">Finalizar</button>
    </div>
    <div id="form5">
        <h4>Muito obrigado pelo seu depoimento!</h4>
    </div>
</main>