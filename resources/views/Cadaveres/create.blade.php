@extends('layout.main')

@section('title', 'MorgeGest | Cadastrar Cadaveres')

@section('content')


<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Cadaveres</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Cadaveres</li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Cadastrar Cadaveres</h3>
                        </div>

                        <form>
                            <div class="card-body">
                            <div class="form-group">
                                <label for="nome">Nome do falecido</label>
                                <input type="text" class="form-control" id="nome" placeholder="Digite o nome do falecido">
                            </div>  

                            <div class="row"> 
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="idade">Idade do falecido</label>
                                        <input type="number" class="form-control" id="idade">
                                    </div>  
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="genero">Gênero</label>
                                        <select class="custom-select rounded-0" id="genero" name="genero">
                                            <option>Masculino</option>
                                            <option>Femenino</option>
                                          </select>
                                    </div>  
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="estado_civil">Estado Civil</label>
                                        <select class="custom-select rounded-0" id="estado_civil" name="estado_civil">
                                            <option>Casado</option>
                                            <option>Solteiro</option>
                                          </select>
                                    </div>  
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="data_hora_obito">Data e hora do óbito</label>
                                        <input type="datetime-local" class="form-control" id="data_hora_obito" name="data_hora_obito">
                                    </div>  
                                </div>
                                
                            </div>

                            <div class="row">
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label for="causa_morte">Causa da morte</label>
                                        <input type="text" class="form-control" id="causa_morte" name="causa_morte" placeholder="O que ocasionou a morte">
                                    </div>
                                </div>

                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label for="data_hora_entrada_morgue">Data e hora de entrada na morgue</label>
                                        <input type="text" class="form-control" id="data_hora_entrada_morgue" name="data_hora_entrada_morgue" placeholder="Data e hora de entrada na morgue">
                                    </div>
                                </div>

                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label for="local_obito">Informações sobre o local do óbito</label>
                                        <input type="text" class="form-control" id="local_obito" name="local_obito" placeholder="Informações sobre o local do óbito">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label for="contacto_familiar_1">Contacto de familiar 1</label>
                                        <input type="text" class="form-control" id="contacto_familiar_1" name="contacto_familiar_1" placeholder="O que ocasionou a morte">
                                    </div>
                                </div>

                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label for="contacto_familiar_2">Contacto de familiar 2</label>
                                        <input type="text" class="form-control" id="contacto_familiar_2" name="contacto_familiar_2" placeholder="Data e hora de entrada na morgue">
                                    </div>
                                </div>

                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label for="contacto_familiar_3">Contacto de familiar 3</label>
                                        <input type="text" class="form-control" id="contacto_familiar_3" name="contacto_familiar_3" placeholder="Informações sobre o local do óbito">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label for="id_gaveta">Localização actual do cadaver</label>
                                        <select class="custom-select rounded-0" id="id_gaveta" name="id_gaveta">
                                            <option>Gaveta 1</option>
                                            <option>Gaveta 2</option>
                                          </select>
                                    </div>
                                </div>

                                <div class="col-md-8"> 
                                    <div class="form-group">
                                        <label for="info_medicas_relevantes">Informações médicas relevantes (ex.: alergias, doenças pré-existentes)</label>
                                        <input type="text" class="form-control" id="info_medicas_relevantes" name="info_medicas_relevantes" placeholder="Informações médicas relevantes">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="detalhes_procedimento">Detalhes do procedimento de autópsia (se aplicável)</label>
                                        <input type="text" class="form-control" id="detalhes_procedimento" name="detalhes_procedimento" placeholder="Detalhes do procedimento de autópsia">
                                    </div>
                                </div>

                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="medico_autopsia">Nome do médico responsável pela autópsia (se aplicável)</label>
                                        <input type="text" class="form-control" id="medico_autopsia" name="medico_autopsia" placeholder="Nome do médico responsável pela autópsia">
                                    </div>
                                </div>
                            </div>


                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Cadastrar Cadaver</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div> 
        </div>
    </section>
</div>
@endsection