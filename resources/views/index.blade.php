@extends('layout')

@section('title')
    Home
@endsection

@section('content')

    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide nav-bar-fix" data-ride="carousel" style="padding-top: 50px">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="http://coldkees.github.io" target="_blank"><img class="d-block w-100" src="/../images/pictures/coldkees.png" alt="First slide"></a>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/../images/pictures/voetbal.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/../images/pictures/vriendin.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"
           script="event.preventDefault()">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"
           script="event.preventDefault()">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <br>

    <!-- Text -->
    <div class="container">
        <h1>Hoofdpagina</h1>
        <h2>Waarom past het HBO-niveau zo goed bij mij?</h2>
        <p>Ik vind dat ik een goede werkhouding heb. Ook heb ik geleerd zelfstandig te zijn. Ik heb een
            onderzoekende geïntresseerde houding. Dit zijn eigenschappen waarvan ik vind dat deze noodzakelijk zijn
            op het HBO.</p>
        <h2>Waarom past de opleiding HBO-ICT zo goed bij mij?</h2>
        <p>ICT past bij mij omdat ik het leuk vind om oplossend te denken. Het proces waar je door heen gaat in een
            ICT opdracht lijkt mij zeer interessant, en iets waarmee ik mezelf zeer kan vermaken.</p>
        <h2>Mijn voorlopige stappen</h2>
        <p>Voorlopig lijkt het mij het beste om gewoon door te gaan zoals nu en me volledig in te zetten. </p>
        <h2>Over deze site</h2>
        <p>Deze site is oorspronkelijk gemaakt als portfoliosite. In blok 3 is deze site geüpdate. Nu wordt er gebruik
            gemaakt van Bootstrap, Fontawesome, en Laravel. Ook wordt er nu gebruik gemaakt van PHP en Javascript.
        </p>
    </div>
@endsection
