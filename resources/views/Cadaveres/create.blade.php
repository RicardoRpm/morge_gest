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
                                <label for="name">Nome do falecido</label>
                                <input type="text" class="form-control" id="nome" placeholder="Digite o nome do falecido">
                            </div>  

                            <div class="row"> 
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="idade_falecido">Idade do falecido</label>
                                        <input type="number" class="form-control" id="idade_falecido">
                                    </div>  
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="idade_falecido">Gênero</label>
                                        <select class="custom-select rounded-0" id="exampleSelectRounded0">
                                            <option>Masculino</option>
                                            <option>Femenino</option>
                                          </select>
                                    </div>  
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="idade_falecido">Estado Civil</label>
                                        <select class="custom-select rounded-0" id="exampleSelectRounded0">
                                            <option>Casado</option>
                                            <option>Solteiro</option>
                                          </select>
                                    </div>  
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="data_obito">Data e hora do óbito</label>
                                        <input type="datetime-local" class="form-control" id="data_hora_obito">
                                    </div>  
                                </div>
                                
                            </div>

                            <div class="row">
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label for="name">Causa da morte</label>
                                        <input type="text" class="form-control" id="nome" placeholder="O que ocasionou a morte">
                                    </div>
                                </div>

                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label for="name">Data e hora de entrada na morgue</label>
                                        <input type="text" class="form-control" id="nome" placeholder="Data e hora de entrada na morgue">
                                    </div>
                                </div>

                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label for="name">Informações sobre o local do óbito</label>
                                        <input type="text" class="form-control" id="nome" placeholder="Informações sobre o local do óbito">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label for="name">Contacto de familiar 1</label>
                                        <input type="text" class="form-control" id="nome" placeholder="O que ocasionou a morte">
                                    </div>
                                </div>

                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label for="name">Contacto de familiar 2</label>
                                        <input type="text" class="form-control" id="nome" placeholder="Data e hora de entrada na morgue">
                                    </div>
                                </div>

                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label for="name">Contacto de familiar 3</label>
                                        <input type="text" class="form-control" id="nome" placeholder="Informações sobre o local do óbito">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <label for="name">Localização actual do cadaver</label>
                                        <select class="custom-select rounded-0" id="exampleSelectRounded0">
                                            <option>Gaveta 1</option>
                                            <option>Gaveta 2</option>
                                          </select>
                                    </div>
                                </div>

                                <div class="col-md-8"> 
                                    <div class="form-group">
                                        <label for="name">Informações médicas relevantes (ex.: alergias, doenças pré-existentes)</label>
                                        <input type="text" class="form-control" id="nome" placeholder="Informações médicas relevantes">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name">Detalhes do procedimento de autópsia (se aplicável)</label>
                                        <input type="text" class="form-control" id="nome" placeholder="Detalhes do procedimento de autópsia">
                                    </div>
                                </div>

                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label for="name">Nome do médico responsável pela autópsia (se aplicável)</label>
                                        <input type="text" class="form-control" id="nome" placeholder="Nome do médico responsável pela autópsia">
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