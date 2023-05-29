@extends('layout.main')

@section('title', 'MorgeGest | Cadastrar Cameras')

@section('content')


<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Usuário</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Usuário</li>
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
                            <h3 class="card-title">Cadastrar Usuário</h3>
                        </div>

                        <form action="{{ route('usuario.gravar') }}" method="post">
                            @csrf
                            <div class="card-body">

                            <div class="form-group">
                                <label for="nome">Nome </label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo">
                            </div> 

                            <div class="row"> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nome">Email </label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email do usuário">
                                    </div>  
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="senha">Senha</label>
                                        <input type="text" class="form-control" id="senha" name="senha" placeholder="Descrição da área que a câmera cobre">
                                    </div>  
                                </div>
                                
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Cadastrar Usuário</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div> 
        </div>
    </section>
</div>
@endsection@extends('layout.main')

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

                        <form action="{{ route('cameras.gravar') }}" method="post">
                            @csrf
                            <div class="card-body">

                            <div class="row"> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="localizacao_camera">Localização da câmera </label>
                                        <input type="text" class="form-control" id="localizacao_camera" name="localizacao_camera" placeholder="Localização da câmera (ex.: sala de autópsia, corredor da morgue)">
                                    </div>  
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="desc_area_camera">Descrição da área que a câmera cobre</label>
                                        <input type="text" class="form-control" id="descricao_area_camera" name="descricao_area_camera" placeholder="Descrição da área que a câmera cobre">
                                    </div>  
                                </div>
                                
                            </div>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="data_instalacao">Data de instalação da câmera</label>
                                        <input type="date" class="form-control" id="data_instalacao" name="data_instalacao" placeholder="Data de instalação da câmera">
                                    </div>  
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="data_ultima_manutencao">Data de última manutenção</label>
                                        <input type="date" class="form-control" id="data_ultima_manutencao" name="data_ultima_manutencao" placeholder="Data de última manutenção">
                                    </div>  
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="estado_camera">Estado atual da câmera</label>
                                        <select class="custom-select rounded-0" id="estado_camera" name="estado_camera">
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