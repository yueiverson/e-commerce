<!DOCTYPYE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>我的 PHP 程式</title>
    <style>
    .border {
        border: 1px solid;
    }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php require_once('./templates/title.php'); ?>
<hr />
<form name="myForm" id="myForm" method="POST" action="./insert.php" enctype="multipart/form-data">
<table class="border">
    <thead>
        <tr>
            <th class="border">商品名稱</th>
            <th class="border">商品價格</th>
            <th class="border">商品照片</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="border">
                <input type="text" name="itemName" id="itemName" value="" maxlength="10" />
            </td>
            <td class="border">
                <input type="text" name="itemprice" id="itemprice" value="" maxlength="10" />
            </td>
            <td class="border">
                <input type="file" name="itemImg" id="itemImg" value="" maxlength="10" />
            </td>
            <td class="border">
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td class="border" colspan="7"><input type="submit" name="smb" id="smb" value="新增"></td>
        </tr>
    </tfoot>
</table>
</form>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="./js/custom.js"></script>

</body>
</html>