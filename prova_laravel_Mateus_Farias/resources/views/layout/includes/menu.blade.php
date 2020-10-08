<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Admin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.tabeliaos') }}">Tabeliães</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.certidaos') }}">Certidões</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.contratos') }}">Contratos</a>
            </li>
        </ul>
    </div>
</nav>