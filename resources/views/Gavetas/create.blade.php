@extends('layout.main')

@section('title', 'MorgeGest | Cadastrar Gavetas')

@section('content')


<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Gavetas</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Gavetas</li>
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
                            <h3 class="card-title">Cadastrar Gavetas</h3>
                        </div>

                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="idade_falecido">Localização da gaveta</label>
                                    <input type="text" class="form-control" id="idade_falecido" placeholder="Localização da gaveta (ex.: sala de autópsia, área de armazenamento refrigerada)">
                                </div>  

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="data_obito">Data de última manutenção</label>
                                            <input type="date" class="form-control" id="data_hora_obito" placeholder="Data de última manutenção">
                                        </div>  
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="idade_falecido">Disponibilidade da gaveta</label>
                                            <select class="custom-select rounded-0" id="exampleSelectRounded0">
                                                <option>Livre</option>
                                                <option>Ocupada</option>
                                            </select>
                                        </div>  
                                    </div>                                    
                                </div>

                                <div class="form-group">
                                    <label for="idade_falecido">Informações adicionais sobre a gaveta</label>
                                    <input type="text" class="form-control" id="idade_falecido" placeholder="Informações adicionais sobre a gaveta (ex.: temperatura de armazenamento, estado de conservação)">
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