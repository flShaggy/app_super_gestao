<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Planos - Companies Solutions</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/pricing/">
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
    </style>

    
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
    
<svg xmlns="{{asset('http://www.w3.org/2000/svg')}}"   style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
</svg>

<div class="container py-3">
  <header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        
      </a>

      < <nav class="navbar   fixed-top " >
        <h2 class="logo">Companies <span> Solutions</span></h2>
        <ul>

            <li><a href="{{ route('site.inicio') }}">Home</a></li>
            <li><a href="#comparar">Comparar</a></li>
            <li><a href="#precos" >Preços</a></li>
            
        </ul>
        <form action="{{ route('site.contato') }}">
          <button style="border-radius: 30px;" >Contato</button>
        </form>
    </nav>
    </div>
    
    <div  id="precos" ><br></div>
    <div><br></div>

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">Preços</h1>
      <p class="fs-5 text-muted">Escolha um de nossos planos conforme o seu interesse.</p>
    </div>
  </header>

 <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Básico</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">R$50,00<small class="text-muted fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">

              <li>Como abrir CNPJ</li>
              <li>Como tirar certificado digital</li>
              <li>Dicas de como investir</li>
              <BR>
              
            </ul>
            <form action="{{asset('https://pag.ae/7YNDEJXTN')}}" >
            <button type="submit" href="{{asset('https://pag.ae/7YNDEJXTN')}}" style="color: white; background-color:#ea1538; border: none ; border-radius: 30px;">Comprar</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Micro-empreendedor</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">R$150,00<small class="text-muted fw-light">/mensais</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>+ pacote básico</li>
              <li>1 usuário</li>
              <li>Gestão no seu négocio</li>
              <BR>
              
              
            </ul>
            <form action="{{asset('https://pag.ae/7YNDDNFjs')}}">
            <button type="submit" href="{{asset('https://pag.ae/7YNDDNFjs')}}"  style="color: white; background-color:#ea1538; border: none ; border-radius: 30px;" >Comprar</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white  border-primary" style="color: white; background-color:#ea1538; border: none ; ">
            <h4 class="my-0 fw-normal">Empreededor</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">R$300,00<small class="text-muted fw-light">/mensais</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>+ pacote básico</li>
              <li>+ pacote micro-empreendedor</li>
              <li>Sistema de fluxo de caixa</li>
              <li>Importação de produtos</li>
            
            </ul>
            <form action="{{ asset('https://pag.ae/7YNDE2vpp')}}">
              <button type="submit" href="{{ asset ('https://pag.ae/7YNDE2vpp')}}" style="color: white; background-color:#ea1538; border: none ; border-radius: 30px; " >Comprar</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <h2 class="display-6 text-center mb-4 " id="comparar">Compare os planos</h2>

    <div class="table-responsive">
      <table class="table text-center">
        <thead>
          <tr>
            <th style="width: 34%;"></th>
            <th style="width: 22%;">Básico</th>
            <th style="width: 22%;">Micro-empreendedor</th>
            <th style="width: 22%;">Empreededor</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-start">Como abrir CNPJ</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Como tirar certificado</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            
          </tr>
        </tbody>

        <tbody>
          <tr>
            <th scope="row" class="text-start">Dicas</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Gestão</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Sistema de fluxo de caixa</th>
            <td></td>
            <td></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Importação de produtos</th>
            <td></td>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        
        <small class="d-block mb-3 text-muted">&copy; 2022</small>
      </div>
     
    </div>
  </footer>
</div>

<script type="text/javascript" src="../js/app.js"></script>
    
  </body>
</html>