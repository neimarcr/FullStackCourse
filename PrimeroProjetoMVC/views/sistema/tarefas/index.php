<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom header">
  <h1 class="h2">Tarefas</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group mr-2">
      <a class="btn btn-sm btn-outline-secondary" href="<?php echo $url?>/tarefas/adicionar">Adicionar Tarefa</a>
    </div>
  </div>
</div>


<?php if(count($tarefas) > 0){ ?>
	
	<table class="table table-hover">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Título</th>
	      <th scope="col">Descrição</th>
	      <th scope="col">Registro</th>
	      <th scope="col">Status</th>
	      <th scope="col"></th>
	    </tr>
	  </thead>
	  <tbody>

	 	<?php 

	 		foreach ($tarefas as $tarefa) { ?>
	 			
	 		<tr>
	 			<td><?php echo $tarefa['id'] ?></td>
	 			<td><?php echo $tarefa['nome'] ?></td>
	 			<td><?php echo $tarefa['descricao'] ?></td>
	 			<td><?php echo $this->helpers['DateConverter']->DateTimeToUser($tarefa['date']) ?></td>
	 			<td><?php echo $tarefa['status'] == 1 ? '<span class="badge badge-success">Ativado</span>' : '<span class="badge badge-secondary">Desativado</span>'; ?></td>
	 			<td>
	 				<a class="btn btn-sm btn-primary" href="<?php echo $url ?>/tarefas/editar/<?php echo $tarefa['id'] ?>"><i class="fa fa-edit"></i></a>
	 				<a class="btn btn-sm btn-danger btn-delete-tarefa" data-id="<?php echo $tarefa['id']; ?>"><i class="fa fa-trash"></i></a>
	 			</td>
	 		</tr>

	 	<?php } ?> 

	  </tbody>
	</table>
<?php }else{ ?>
	<div class="alert alert-secondary" role="alert">
	  Nenhuma tarefa cadastrada.
	</div>
<?php } ?>