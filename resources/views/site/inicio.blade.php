<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">

    <title>Companies Solutions</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
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
    
  </head>
  <body>
    
<header>
  <div>
    <nav class="navbar   fixed-top " >
        <h2 class="logo">Companies <span> Solutions</span></h2>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#sobre">Sobre</a></li>
            <li><a href="#garantia">Garantia</a></li>
            <li><a href="#compra">Planos</a></li>           
        </ul>
        <form action="./contato">
          <button style="border-radius: 30px;" >Contato</button>
        </form>
    </nav>
</div>
</div>
</header>

<main id="home">

  
 

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" >
    <div class="carousel-indicators" >
      <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"><>
      
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="ap-img" width="1920px" height="550px" src="../img/COMPANIES.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>

        <div class="container">
          <!---<div class="carousel-caption text-start">
            <h1 style="color: black;"><strong> Companies Solutions.</strong></h1>
            <p style="color: black;"><strong> Invista-se em sí mesmo fazendo suas ideias transformarem seu négoio. </strong></p>
            
          </div> ---->
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="1920px" height="550px" src="../img/Carousel 2.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>

        
      </div>
      
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div>
      <br>
      <br>
    </div>
    <div class="row">

      <div class="col-lg-4">
        <img  width="140" height="140" src="../img/foguete-inclinado.png" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
        <h2><strong> Progresso </strong></h2>
        <p>Garantimos a progressão do seu négocio.</p> 
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
        <img  width="140" height="140" src="../img/aprendizado.png" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
        <h2><strong> Aprendizado </strong></h2>
        <p>Aprenda a investir no seu próprio négocio.</p>      
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4" id="sobre">
        <img  width="140" height="140" src="../img/inovacao1.png" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>     
        <h2><strong> Inovação </strong></h2>
        <p > Garantimos a inovação de seu négocio.</p>     
      </div><!-- /.col-lg-4 -->
      
    </div><!-- /.row -->
  
    <!-- START THE FEATURETTES -->
    
    
    <hr class="featurette-divider" >

    
    <section>
      <div class="row featurette" >
        <div class="col-md-7" style="text-align: justify;" >
          <br>
          <br>
          <h2 class="featurette-heading" ><span class="text-muted"><strong> Sobre nós.</strong></span></h2>
          <p class="lead">Somos especializados em gestão empresarial, buscando sempre a inovação e a progressão dos nossos clientes.
          <p class="lead">Levamos aos nossos clientes, mais eficiêcia para os processos produtivos, mantendo sempre seus négocios preparados para atingir metas máximas de produtividade hoje e no futuro .</p>
          <p class="lead" id="garantia">A partir das experiências da Companies Solutions, levamos nossas estratégias para todos aqueles que querem ter um avanço em seus négocios eliminando desperdicios de capitais desnecessários .</p>
        </div>
        <div class="col-md-5" >    
          <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="../img/logo.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
        
        </div >
      </div >
  </section>
  
    
    
    <hr class="featurette-divider" >
    <section >
      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <br>
          <br>
          <h2 class="featurette-heading"><span class="text-muted"><strong>Garantimos.</strong></span></h2>
          <p class="lead">Nos temos a solução perfeita para todos aqueles que desejam:</p>

          <ul >
            <li >
              <a >Inovar</a>
            </li>
            <li >
              <a >Progredir</a>
            </li>
            <li >
              <a >Aprender</a>
            </li>
            <li >
              <a >Alcançar metas</a>
            </li>
          </ul>

        </div>
        <div class="col-md-5 order-md-1">
          <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="../img/Garantimos.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>

        </div>
      </div>
  </section>

    <hr class="featurette-divider" id="compra">

  <section >
    <div class="row featurette" >
      <div class="col-md-7" style="text-align: justify;" >
        <br>
        <br>
        <h2 class="featurette-heading"><span class="text-muted"><strong> Deseja obter nossa ajuda?</strong></span></h2>
        <p class="lead">Você ficou interessado pelo nosso trabalho?</p>
        <p class="lead">Contrate um de nossos serviços que temos disponíveis.</p>
        <p class="lead">Disponibilizamos alguns pacotes para vendas para nossos clientes.</p>
        <p class="lead">Você pode comprar o pacote que desejar.</p>

        <br>
       

        <div  >
          <form action="{{ route('site.compra') }}">
          <button style="border-radius: 30px;" type="submit" href="{{ route('site.compra') }}">Ver os planos</button>
        </form>
        </div>


      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="../img/compra.png" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title></title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>

      </div>
    </div>
  </section>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
  
    <p>&copy; 2022 Companies Solutions.  </p>
  </footer>
</main>


<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript" src="../js/app.js"></script>
<script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>



      
  </body>
</html>
