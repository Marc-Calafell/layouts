<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>

<style>

	.wrapper {
		display: flex;
		flex-flow: row wrap; /* o -> flex-wrap: wrap; flex-direction: row */
	}

	header,nav,section,aside,footer {
		border: 1px black solid;
	}

	header,footer {
		background: lightcoral;
		flex: 1 100%;

	}

	.content {
		background: lightblue;
		flex: 1 70%;
	}

	nav,aside {
		background: lightgreen;
		flex: 1 auto;
	}

	@media all and (min-width: 600px) {

		header {
			order: 1;
		}

		nav {
			order: 2;
		}

		.content {
			order: 3;
			flex: 2;
		}

		aside {
			order: 4;
		}

		footer {
			order: 5;
		}
	}

</style>

<body>

<div class="wrapper">
	<header>HEADER HERE</header>
	<nav>
		<ul>
			<li>Lorem.</li>
			<li>Repellendus.</li>
			<li>Dolorum.</li>
			<li>Itaque.</li>
			<li>Debitis.</li>
		</ul>
	</nav>
	<section class="content">
		TODO

	</section>
	<aside>
		Barra lateral
	</aside>
	<footer> Copyright blablabla</footer>
</div>

</body>
</html>