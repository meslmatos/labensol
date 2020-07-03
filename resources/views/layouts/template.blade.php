@extends('layouts.app')

@section('content')
{{-- <!DOCTYPE HTML> --}}
<!--
	Epilogue by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
{{-- <html>
	<head>
		<title>Labensol</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="{{asset('css/app.css')}}" />
		<link href="{{asset('css/main.css')}}" rel="stylesheet">
	</head>
	<body> --}}

		<!-- Header -->
			<header id="header" class="alt">
				<div class="inner">
					<h1>Laboratório Instrumentação e Energia Solar</h1>
					{{-- <a href="#"><img src="css/imagens/foto1.jpg" alt="" width="60" height="40"></a> --}}
					
					
				</div>
			</header>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Banner -->
					<section id="intro" class="main">
						<span class="icon fa-diamond major"></span>
						<h2>Sobre o Laboratório</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae<br />
						malesuada turpis. Nam pellentesque in ac aliquam. Aliquam tempor<br />
						mi porta egestas maximus lorem ipsum dolor.</p>
						<ul class="actions">
						<li><a href="{{asset('sobre')}}" class="button big">Saber Mais</a></li>
						</ul>
					</section>

				<!-- Items -->
					<section class="main items">
						<article class="item">
							<header>
								<a href="{{asset('projetos')}}"><img src="css/imagens/foto1.jpg" alt="" width="100%" height="auto"/></a>
								<h3>Projetos de Pesquisa</h3>
							</header>
							<p>Fusce malesuada efficitur venenatis. Pellentesque tempor leo sed massa hendrerit hendrerit. In sed feugiat est, eu congue elit. Ut porta magna vel felis sodales vulputate. Donec faucibus dapibus lacus non ornare.</p>
							<ul class="actions">
							<li><a href="{{asset('projetos')}}" class="button">More</a></li>
							</ul>
						</article>
						<article class="item">
							<header>
								<a href="{{asset('extensao')}}"><img src="css/imagens/foto2.jpg" alt=""  width="100%" height="auto"/></a>
								<h3>Extensão</h3>
							</header>
							<p>Fusce malesuada efficitur venenatis. Pellentesque tempor leo sed massa hendrerit hendrerit. In sed feugiat est, eu congue elit. Ut porta magna vel felis sodales vulputate. Donec faucibus dapibus lacus non ornare.</p>
							<ul class="actions">
							<li><a href="{{asset('extensao')}}" class="button">More</a></li>
							</ul>
						</article>
						<article class="item">
							<header>
								<a href="#"><img src="css/imagens/foto3.jpg" alt="" width="100%" height="auto" /></a>
								<h3>Contatos</h3>
							</header>
							<p>Fusce malesuada efficitur venenatis. Pellentesque tempor leo sed massa hendrerit hendrerit. In sed feugiat est, eu congue elit. Ut porta magna vel felis sodales vulputate. Donec faucibus dapibus lacus non ornare.</p>
							<ul class="actions">
							<li><a href="{{asset('contatos')}}" class="button">More</a></li>
							</ul>
						</article>
						<article class="item">
							<header>
								<a href="#"><img src="css/imagens/foto4.jpg" alt="" width="100%" height="auto"/></a> 
								<h3>Galeria</h3>
							</header>
							<p>Fusce malesuada efficitur venenatis. Pellentesque tempor leo sed massa hendrerit hendrerit. In sed feugiat est, eu congue elit. Ut porta magna vel felis sodales vulputate. Donec faucibus dapibus lacus non ornare.</p>
							<ul class="actions">
								<li><a href="#" class="button">More</a></li>
							</ul>
						</article>
					</section>

				<!-- CTA -->
					<section id="cta" class="main special">
						<h2>Etiam veroeros lorem</h2>
						<p>Phasellus ac augue ac magna auctor tempus proin<br />
						accumsan lacus a nibh commodo in pellentesque dui<br />
						in hac habitasse platea dictumst.</p>
						<ul class="actions">
							<li><a href="#" class="button big">Get Started</a></li>
						</ul>
					</section>

				<!-- Main -->
				<!--
					<section id="main" class="main">
						<header>
							<h2>Lorem ipsum dolor</h2>
						</header>
						<p>Fusce malesuada efficitur venenatis. Pellentesque tempor leo sed massa hendrerit hendrerit. In sed feugiat est, eu congue elit. Ut porta magna vel felis sodales vulputate. Donec faucibus dapibus lacus non ornare. Etiam eget neque id metus gravida tristique ac quis erat. Aenean quis aliquet sem. Ut ut elementum sem. Suspendisse eleifend ut est non dapibus. Nulla porta, neque quis pretium sagittis, tortor lacus elementum metus, in imperdiet ante lorem vitae ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eget neque id metus gravida tristique ac quis erat. Aenean quis aliquet sem. Ut ut elementum sem. Suspendisse eleifend ut est non dapibus. Nulla porta, neque quis pretium sagittis, tortor lacus elementum metus, in imperdiet ante lorem vitae ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
					</section>
				-->

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
							<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<p class="copyright">&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.</p>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	{{-- </body>
</html> --}}
@endsection