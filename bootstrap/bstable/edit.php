<!DOCTYPE html>
<html>
<head>
    <title>Editable</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap-table/src/bootstrap-table.css">
    <link rel="stylesheet" href="//rawgit.com/vitalets/x-editable/master/dist/bootstrap3-editable/css/bootstrap-editable.css">
    <link rel="stylesheet" href="assets/examples.css">
    <script src="assets/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/bootstrap-table/src/bootstrap-table.js"></script>
    <script src="assets/bootstrap-table/src/extensions/editable/bootstrap-table-editable.js"></script>
    <script src="//rawgit.com/vitalets/x-editable/master/dist/bootstrap3-editable/js/bootstrap-editable.js"></script>
    <script src="ga.js"></script>
</head>
<body>
    <div class="container">
        <h1>Editable</h1>
        <table id="table"
               data-toggle="table"
               data-pagination="true"
               data-show-export="true"
               data-url="data1.json">
            <thead>
            <tr>
                <th data-field="id">ID</th>
                <th data-field="name" data-editable="true">Item Name</th>
                <th data-field="price" data-editable="true">Item Price</th>
            </tr>
            </thead>
        </table>
    </div>
</body>
</html>