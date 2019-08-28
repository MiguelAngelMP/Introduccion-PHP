<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Job</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"
    integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <span class="h1">Add Job</span>
    <form action="/jobs/add" class="for-control" method="post">
        
        <label for="">Title: </label>
        <input class="for-control" type="text" name="title" id="">
        <label for="">Description: </label>
        <input class="for-control" type="text" name="description" id="">
        
        <button type="submit" class="btn btn-outline-primary">Submit</button>
    </form>
    
</body>
</html>