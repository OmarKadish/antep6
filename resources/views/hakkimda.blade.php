<html>
<head>

</head>
<body>
<h2>Kullancilar</h2>

<table>
    <tr>
        <th>Adı</th>
        <th>Email</th>
        <th>Şifre</th>
    </tr>

    @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
        </tr>
    @endforeach
</table>

</body>
</html>
