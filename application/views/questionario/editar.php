<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="row">
	<div class="col-12">
		<div class="card m-b-30">
			<div class="card-body">

				<nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">

                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Adicionar pergunta
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#abertaModal">Aberta</a>
                                    
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#numericoModal">Númerica</a>
                                    
                                    <a class="dropdown-item" href="#escolhaUnicaModal" data-toggle="modal" data-target="#">Escolha única</a>
                                    
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#">Topicos</a>
                                    
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#">Citou e não citou</a>
                                    
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#">Instrução</a>
                                </div>
                            </li>
                            
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Salvar</a>
                            </li>
                            
                        </ul>
                    </div>
                </nav>	

			</div> <!-- end card-body -->
		</div> <!-- end card -->
	</div> <!-- end col -->
</div> <!-- end row -->

<!-- Perguntas -->
<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                
                <div class="row">
                    <div class="col-3">
                        <div class="nav flex-column nav-pills" id="lista-perguntas" role="tablist" aria-orientation="vertical">
                            <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                        </div>
                    </div>


                    <div class="col-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">1</div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">2</div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">3</div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">4</div>
                        </div>
                    </div>
                </div>


            </div> <!-- end card-body -->
		</div> <!-- end card -->
	</div> <!-- end col -->
</div> <!-- end row -->


