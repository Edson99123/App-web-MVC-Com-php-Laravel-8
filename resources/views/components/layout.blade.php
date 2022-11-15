<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>{{$title}} - Controle de Séries</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
	<body>
		
		<div class="container">	
			<div class="container mb-3">
				<nav class="navbar navbar-expand-lg bg-light">
				  <div class="container-fluid">
					<a class="navbar-brand" href="#"> <h1>{{$title}}</h1>	</a>
				  </div>
				</nav>
			</div>
	
			{{$slot}}
		</div>

	</body>
</html>


