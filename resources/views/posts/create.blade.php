<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="store">
    @csrf
        <label>
    Title:
    <input name="title"></input>
        </label>

        <label>
    Category_id:
    <input name="category_id"></input>
        </label>

    <button>create</button>
    </from>
</body>
</html>