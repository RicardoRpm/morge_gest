@extends('layout.main')

@section('title', 'MorgeGest | Cadastrar Cameras')

@section('content')


<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Cameras</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Cameras</li>
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
                            <h3 class="card-title">Cadastrar Cameras</h3>
                        </div>

                        <form>
                            <div class="card-body">

                            <div class="row"> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="idade_falecido">Localização da câmera </label>
                                        <input type="text" class="form-control" id="idade_falecido" placeholder="Localização da câmera (ex.: sala de autópsia, corredor da morgue)">
                                    </div>  
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="idade_falecido">Descrição da área que a câmera cobre</label>
                                        <input type="text" class="form-control" id="idade_falecido" placeholder="Descrição da área que a câmera cobre">
                                    </div>  
                                </div>
                                
                            </div>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="data_obito">Data de instalação da câmera</label>
                                        <input type="date" class="form-control" id="data_hora_obito" placeholder="Data de instalação da câmera">
                                    </div>  
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="data_obito">Data de última manutenção</label>
                                        <input type="date" class="form-control" id="data_hora_obito" placeholder="Data de última manutenção">
                                    </div>  
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="idade_falecido">Estado atual da câmera</label>
                                        <select class="custom-select rounded-0" id="exampleSelectRounded0">
                                            <option>Funcionando </option>
                                            <option>Fora de serviço</option>
                                          </select>
                                    </div>  
                                </div>

                                
                            </div>
                            

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Cadastrar Camera</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div> 
        </div>
    </section>
</div>
@endsection