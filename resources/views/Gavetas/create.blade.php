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
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="local_gaveta">Localização da gaveta</label>
                                            <input type="text" class="form-control" id="local_gaveta" name="local_gaveta" placeholder="Localização da gaveta (ex.: sala de autópsia, área de armazenamento refrigerada)">
                                        </div>  
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="id_gaveta">Camera</label>
                                            <select class="custom-select rounded-0" id="id_gaveta">
                                                <option>Livre</option>
                                                <option>Ocupada</option>
                                            </select>
                                        </div>  
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="data_ultima_manutencao">Data de última manutenção</label>
                                            <input type="date" class="form-control" id="data_ultima_manutencao" placeholder="Data de última manutenção">
                                        </div>  
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="disponibilidade_gaveta">Disponibilidade da gaveta</label>
                                            <select class="custom-select rounded-0" id="disponibilidade_gaveta" name="disponibilidade_gaveta">
                                                <option>Livre</option>
                                                <option>Ocupada</option>
                                            </select>
                                        </div>  
                                    </div>                                    
                                </div>

                                <div class="form-group">
                                    <label for="info_adicional">Informações adicionais sobre a gaveta</label>
                                    <input type="text" class="form-control" id="info_adicional" name="info_adicional" placeholder="Informações adicionais sobre a gaveta (ex.: temperatura de armazenamento, estado de conservação)">
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