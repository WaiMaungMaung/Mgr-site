@extends('layouts.app')
<div id="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <p>
                            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                Link with href
                            </a>
                            <button class="btn btn-primary" type="button" data-toggle="collapse"
                                data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                Button with data-target
                            </button>
                        </p>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                sapiente ea proident.
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </nav>


</div>
