    <div class="container-fluid">
      <ol class="breadcrumb">
         <h1 class="breadcrumb-item active">Registrar Usuario</h1>
      </ol>
      <div class="row">
        <div class="col-8">
                <?= $this->Form->create($user, ['type' => 'file']) ?>
                    <div class="form-group">
                        <label>Nombre Completo</label>
                            <?= $this->Form->input('full_name', ['class' => 'form-control', 'placeholder' => 'Ingrese Nombre Completo', 'label' => false]);?>
                    </div>
                    <div class="form-group">
                        <label>Carnet/DNI</label>
                            <?= $this->Form->input('ci', ['class' => 'form-control', 'placeholder' => 'Ingrese Numero de Documento', 'label' => false]);?>
                    </div>
                    <div class="form-group">
                        <label>Correo Electrónico</label>
                            <?= $this->Form->input('email', ['class' => 'form-control', 'placeholder' => 'Ingrese Correo Electrónico', 'label' => false]);?>
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                            <?= $this->Form->input('password', ['class' => 'form-control', 'placeholder' => 'Ingrese su Contraseña', 'label' => false]);?>
                    </div>
                    <div class="form-group">
                        <label>Teléfono/Celular</label>
                            <?= $this->Form->input('phone', ['class' => 'form-control', 'placeholder' => 'Ingrese Teléfono', 'label' => false]);?>
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <?= $this->Form->input('photo', ['type' => 'file', 'class' => 'filestyle', 'data-btnClass' => 'btn-primary', 'data-Text' =>'<i class="fa fa-folder-open" aria-hidden="true"></i>
 Examinar','placeholder' => 'Foto', 'label' => false]);?>
                    </div>

                             <?= $this->Form->button('Registrar', ['class' => 'btn btn-info']) ?>



                <?= $this->Form->end() ?>
                          
        </div>
      </div>
    </div>
   