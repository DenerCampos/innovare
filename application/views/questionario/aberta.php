<!-- Modal -->
<div class="modal fade" id="abertaModal" tabindex="-1" role="dialog" aria-labelledby="abertaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="abertaModalLabel">Pergunta aberta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form class="" action="<?php echo "#" ?>" novalidate="" id="formAberta">

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="questao-tab" data-toggle="tab" href="#questao" role="tab" aria-controls="questao" aria-selected="true">Questão</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="opcao-tab" data-toggle="tab" href="#opcao" role="tab" aria-controls="opcao" aria-selected="false">Opções</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="questao" role="tabpanel" aria-labelledby="questao-tab">
                            <div></div>

                            <div class="form-group">
                                <label>Número da questão:</label>
                                <input type="text" class="form-control" required="" name="numeroAberta">
                            </div>

                            <div class="form-group">
                                <label>Pergunta:</label>
                                <div>
                                    <textarea class="form-control" rows="5" placeholder="Enunciado da questão" name="perguntaAberta"></textarea>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="opcao" role="tabpanel" aria-labelledby="opcao-tab">Opções</div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary" id="btnAddAberta">Salvar</button>
            </div>
        </div>
    </div>
</div>