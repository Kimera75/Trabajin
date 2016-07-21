<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title></title>
	<link rel="stylesheet" href="css/reports.css">
</head>
<body>	
	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Categoria</th>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Cantidad</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($articles as $article)
				<tr>
					<td>{{$article->id}}</td>
					<td>{{$article->category->name}}</td>
					<td>{{$article->name}}</td>
					<td>{{$article->description}}</td>
					<td>{{$article->quantity}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>
