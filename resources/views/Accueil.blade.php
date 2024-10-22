<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .articles{
            display: flex;
            width: 100%;
            justify-content: space-around;
        }
    </style>
    <div class="container-all">
        <x-menu />
        <br>
        <x-photo />
        <h2>Presentation de l'ecole</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, ullam vel blanditiis quaerat cupiditate nisi culpa inventore impedit debitis repellat tempora laboriosam eos earum! Officia eaque optio id necessitatibus in.

        </p>
        <div class="articles">
            <x-article />
            <x-article />
            <x-article />
        </div>
        <br>
        <x-footer />

    </div>
</body>
</html>