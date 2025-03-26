@extends('_partials/main')

@section('conteudo')
  <body class="bg-custom-secondary">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-custom-primary">
      <div class="container-fluid">
        <a class="navbar-brand text-custom-primary" href="#">Adote um Amigo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Voltar para o Início</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Login Form -->
    <div class="login-container">
      <h2 class="text-center mb-4">Login</h2>
      <form>
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" class="form-control" id="password" placeholder="Digite sua senha" required>
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-custom-primary">Entrar</button>
        </div>
        <div class="text-center mt-3">
          <a href="#" class="text-custom-primary">Esqueceu a senha?</a>
        </div>
        <div class="text-center mt-3">
          <p>Não tem uma conta? <a href="#" class="text-custom-primary">Cadastre-se</a></p>
        </div>
      </form>
    </div>

    @endsection