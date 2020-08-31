@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <header>
                    <h1>BIENVENUE DANS LA BANQUE DU PEUPLE</h1>
                </header>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="alert alert-success font-weight-bold shadow text-center">
                        VEILLEZ CHOISIR LE TYPE DE CLIENT A ENREGISTRER
                    </div>

                </div>
                <div class="row justify-content-center ">
                    <div id="app" class="col-3">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Client Non Salarié <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('addclientnonsalarie') }}">Ajout</a>
                                    <a class="dropdown-item" href="{{ route('getallclientnonsalarie') }}">Liste</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="app" class="col-3">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Client Salarié <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#<!--{ { route('addclientnonsalarie') }}-->">Ajout</a>
                                    <a class="dropdown-item" href="#<!--{ { route('getallclientnonsalarie') }}-->">Liste</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="app" class="col-3">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Client Moral <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#<!--{ { route('addclientnonsalarie') }}-->">Ajout</a>
                                    <a class="dropdown-item" href="#<!--{ { route('getallclientnonsalarie') }}-->">Liste</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
