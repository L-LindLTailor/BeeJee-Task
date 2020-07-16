<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$data['title'];?></title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <?php include 'menu.php'; ?>
    <h1>Создание задачи</h1>
    <form action="/site/add" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputEmail1">Имя пользователя</label>
            <input type="text" name="name" class="form-control" id="InputName" aria-describedby="nameHelp" placeholder="test" required />
            <small id="nameHelp" class="form-text text-muted">Указывайте что-то типа test</small>
        </div>
        <div class="form-group">
            <label for="InputEmail1">E-mail</label>
            <input type="email" name="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="test@test.com" required />
            <small id="emailHelp" class="form-text text-muted">Указывайте что-то типа test@test.com</small>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Текст задачи</label>
            <textarea class="form-control" id="text" name="text" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
</div>
</body>
<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
</html>