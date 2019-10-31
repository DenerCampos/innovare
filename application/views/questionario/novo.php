<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="row">
	<div class="col-12">
		<div class="card m-b-30">
			<div class="card-body">

                <form class="" action="<?php echo "#" ?>" novalidate="">
                    <div class="form-group">
                        <label>Nome do questionário</label>
                        <input type="text" class="form-control" required="" placeholder="Nome do questionário">
                    </div>

                    <div class="form-group">
                        <label>Descrição</label>
                        <div>
                            <textarea class="form-control" rows="5" placeholder="Informçaões sobre o projeto"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                Criar
                            </button>
                        </div>
                    </div>
                </form>

			</div> <!-- end card-body -->
		</div> <!-- end card -->
	</div> <!-- end col -->
</div> <!-- end row -->
