<?php
  include_once 'header.php';
 ?>


<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
<img src="bilder-till-karate-hemsidan/Karatestartsida.jpg"/>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Bollebygds kyokushin kai</h1>
            <p>Logga in för att anmäla dig eller ditt barn till vår klubb.</p>
            <p><a class="btn btn-lg btn-primary" href="signup.php">Skapa konto</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="bilder-till-karate-hemsidan/träning.jpg"/>

        <div class="container">
          <div class="carousel-caption">
            <h1>Kom och prova på hoss oss! </h1>
            <p>Pröva på både sparring och kata med oss! </p>
            <p><a class="btn btn-lg btn-primary" href="omoss.php">Om Oss</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="bilder-till-karate-hemsidan/karate-KO.jpg"/>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Lär dig mer om karate</h1>
            <p>Lär dig mer om vår Kyokushin</p>
            <p><a class="btn btn-lg btn-primary" href="kyokushin.php">Vad är kyokushin</a></p>
          </div>
        </div>
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
    <div class="row">
      <div class="col-lg-4">

        <h2>Träning</h2>
        <p>Vi kommer starta terminen för KYU grader (15 år och äldre) söndagen den 17:e januari enligt det schema som kommer publiceras i veckan. Tiderna är i stort oförändrade från förra terminen.
Vi kommer inleda terminen med träning i mindre grupper om 10st. Därför är det viktigt att du kontrollerar vilka tider som gäller för just din KYU grad.</p>

      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">

        <h2>Tävlingar</h2>
        <p>Syftet är att stimulera till tävling för både topp och bredd. Alla tävlande inom SKK behöver ett sk tävlingskort. Detta kort ansöker du till genom vår epost adress.</p>

      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">

        <h2>Gradering</h2>
        <p>Vid bedömningen granskas hur väl grundtekniker, kata och kumite, för aktuell grad, genomförs. Delar som ingår i denna bedömning är även fokus, förståelse, intensitet, kraft, kroppskontroll och sist men inte minst attityd/uppförande.</p>

      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Grader på bälten <span class="text-muted">Du går upp en KYU fall du klarar graderingen</span></h2>
        <p class="lead">För varje gradering kräver det att du skall ha lärt dig ett flertal nya tekniker inför varje KYU</p>
      </div>
      <div class="col-md-5">
              <img src="bilder-till-karate-hemsidan/Gradering.png"/>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Även ungdomar kan va med och tävla. <span class="text-muted">Antal skydd beror på din viktklass</span></h2>
        <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="bilder-till-karate-hemsidan/tävling3.jpg"/>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Grundaren av vår karate. <span class="text-muted">Sosai Mas Oyama.</span></h2>
        <p class="lead">Han flätade samman de bästa och kraftfullaste teknikerna från de olika stilar han tidigare tränat och skapade Kyokushinkai. Kyokushin betyder ”den yttersta sanningen”, kai betyder ”förening eller grupp”.</p>
      </div>
      <div class="col-md-5">
        <img src="bilder-till-karate-hemsidan/Oyama.jpg"/>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
<?php
include_once 'footer.php';
 ?>
