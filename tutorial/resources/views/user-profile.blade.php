<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .user1 {
      text-align: center;
      color: red;
    }
  </style>
</head>
<body>
  <p class="user1">{{ $title }}</p>
  <table>
    <thead>
      <tr>Name</tr>
      <tr>Age</tr>
      <tr>Address</tr>
    </thead>
    <tbody>
      <td>{{$info["name"]}}</td>
      <td>{{$info["age"]}}</td>
      <td>{{$info["address"]}}</td>
    </tbody>
  </table>
</body>
</html>