<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$data['title'];?></title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/datatables.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <?php include 'menu.php'; ?>
    <h1>Список задач</h1>
    <table id="datatable" class="display">

        <!--Table head-->
        <thead>
        <tr>
            <th>#</th>
            <th>Имя</th>
            <th>E-mail</th>
            <th>Статус</th>
            <th>Дата</th>
        </tr>
        </thead>
        <!--Table head-->

        <!--Table body-->
        <tbody>
        <?php foreach($data['BeeJeeTasks'] as $t) { ?>
            <tr ids="<?=$t['id'];?>">
                <td><?=$t['id'];?></td>
                <td><?=$t['name'];?></td>
                <td><?=$t['email'];?></td>
                <td><?=$t['status'];?></td>
                <td><?=$t['created'];?></td>
            </tr>
        <?php } ?>

        </tbody>
        <!--Table body-->

    </table>
    <!--Table-->
</div>


</body>
<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/datatables.js"></script>
<script type="text/javascript">
    $(document).ready(function()
    {
        $('#datatable').DataTable();
        $('#datatable tbody').on( 'click', 'tr', function ()
        {
            var task_id = $(this).attr('ids');
            $.ajax(
                {
                url: '/site/get_task',
                type: 'post',
                dataType: 'json',
                data: 'id='+task_id,
                success: function(msg)
                {
                    if(msg != '')
                    {

                        $('#nameContainer').html(msg.name);
                        $('#emailContainer').html(msg.email);
                        $('#textContainer').html(msg.text);
                        $('.modal').modal('show');

                    }
                    console.log(msg['name']);
                }
            });
        } );
    });
</script>
</html>