
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white" id="title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
        <a class="btn btn-success dataComfirmOK">Sim</a>

      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="<?php echo 'modal'.$id_vistoria;  ?>" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title text-white" id="title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-body">
        <p><strong>Nome: </strong><?php echo $nome_usuario; ?></p> 
        <p><strong>Login: </strong><?php echo $login; ?></p>
        <p><strong>CPF: </strong><?php echo $cpf_usuario; ?></p>


        <p><strong>Telefone: </strong><?php echo $tel_usuario; ?></p>
        <p><strong>E-mail: </strong><?php echo $email_usuario; ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>


      </div>
    </div>
  </div>
</div>


