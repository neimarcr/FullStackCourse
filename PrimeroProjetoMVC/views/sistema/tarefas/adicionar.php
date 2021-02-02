<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <h1 class="h2">Adicionar Tarefa</h1>
</div>

<form id="form-tarefa">
  <div class="form-group row">
    <label for="nome" class="col-sm-2 col-form-label">Nome</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nome" placeholder="Nome da Tarefa" name="nome">
    </div>
  </div>
  <div class="form-group row">
    <label for="descricao" class="col-sm-2 col-form-label">Descrição</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="descricao" rows="3" name="descricao"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10 offset-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="status" checked>
        <label class="form-check-label" for="gridCheck1">
          Status
        </label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-12 text-right">
      <button type="button" class="btn btn-primary btn-add-tarefa">Salvar</button>
    </div>
  </div>
</form>