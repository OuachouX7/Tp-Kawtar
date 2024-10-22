<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        form{
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        form > input, form > textarea{
            width: 50%;
        }
        form > textarea{
            height: 10vh;
        }
    </style>
    <div class="container-all-all">
        <x-menu />
        <br>
        <x-photo />
        <div class="form">
            <form action="">
                <div for="email">email</div>
                <input type="email" name="" id="">
                <div>msg</div>
                <textarea name="" id="">write your message</textarea>
            </form>
        </div>
        <br>
        <x-footer />
    </div>
</body>
</html>