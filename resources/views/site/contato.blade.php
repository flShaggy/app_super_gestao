<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Contato - Companies Solutions</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">
    <link rel="stylesheet" type="text/css" href="{{ asset('CSS_Bootstrap/nav.css') }}">


    

    <!-- Bootstrap core CSS -->
  <link href="{{ asset('CSS_Bootstrap/bootstrap.min.css') }} " rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .container { 
    width: 700px; 
    margin-left: auto;
    margin-right: 500px; 
    } 
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">

    <header>
      <div>
        <nav class="navbar   fixed-top " >
            <h2 class="logo">Companies <span> Solutions</span></h2>
            <ul>
              <li><a href="{{ route('site.inicio') }}">Home</a></li>
              <li><a href="./Vendas.html">Planos</a></li>
                
            </ul>
            <button style="border-radius: 30px;">Contato</button>
        </nav>
    </div>
    </div>
    </header>
   
<div class="container" >
  <main>

    <div class="py-5 text-center">
      
      <br>
      <br>
      <br>
      <br>
      
    </div>
    
    
    
      <div class="col-md-7 col-lg-8" style="align-items: center ;" >
        <h4 class="mb-3"><strong> Deseja fazer um contato para mais informações?</strong></h4>
          <div class="row g-3">
             <div class="col-12">
              <form action = {{ route('site.contato') }} method="post" class="needs-validation" >
                @csrf
                 @if ($errors->has('nome'))
                    {{ $errors->first('nome') }}
                @endif
                <input name="nome" value="{{ old('nome')}}" type="text" class="form-control"  placeholder="Nome">
                <br>
                {{$errors->has('telefone') ? $errors->first('telefone') : ""}}
                <input name="telefone" value="{{ old('telefone')}}"  type="text" class="form-control"  placeholder="Telefone">
                <br>
                 {{$errors->has('email') ? $errors->first('email') : ""}}
                <input name="email" value="{{ old('email')}}"  type="text" class="form-control" id="email" placeholder="E-mail">
                <br>
                {{$errors->has('mensagem') ? $errors->first('mensagem') : ""}}
                <input name="mensagem" value="{{ old('mensagem')}}"  type="text" class="form-control"  placeholder="Mensagem"> <!-- {{(old('mensagem') != '') ? old('mensagem') : 'Por favor, preencha a mensagem desejada'}} -->
              </div>
                <button class="w-100 btn btn-primary btn-lg" type="submit"   style="color: white; background-color:#ea1538; border: none ; border-radius: 30px;">Realizar contato</button>
         </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1" style="margin-right: 220px;">&copy; 2022 Companies Solutions</p>
    
  </footer>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="../js/form-validation.js"></script>
  </body>
</html>
