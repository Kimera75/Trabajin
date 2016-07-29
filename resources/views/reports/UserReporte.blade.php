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
				<th>Codigo</th>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Carrera</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($users as $user)
				<tr>
					<td>{{$user->id}}</td>
					<td>{{$user->name}}</td>
					<td>{{$user->e_mail}}</td>
					<td>{{$user->career->name}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>


