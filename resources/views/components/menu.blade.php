<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .svg{
            width: 50px;
            height: 50px;
        }
        .container{
            display: flex;
            width: 100%;
            height: 10vh;
            justify-content: space-between;
            background-color: #EEE;
        }
        .container > div{
            width: calc(100%/2);
        }
        .nav{
            width: 50%;
        }
        .nav > ul{
            display: flex;
            align-items: center;
            justify-content: space-between;
            list-style: none;
        }
        a{
            text-decoration: none;
            color: black;
        }
        .left{
            display: flex;
            justify-content: flex-start;
            align-items: center;
            width: 100%;
        }
        .right{
            display: flex;
            justify-content: flex-end;
            align-items: center;
            width: 100%;
            height: 100%;
        }
        .button{
            width: 30%;
            height: 30%;
            margin: 0 5px;
        }
        input{
            height: 30%;
        }
    </style>
    <div class="container">
        <div class="left">
            <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M575.8 255.5c0 18-15 32.1-32 32.1l-32 0 .7 160.2c0 2.7-.2 5.4-.5 8.1l0 16.2c0 22.1-17.9 40-40 40l-16 0c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1L416 512l-24 0c-22.1 0-40-17.9-40-40l0-24 0-64c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32 14.3-32 32l0 64 0 24c0 22.1-17.9 40-40 40l-24 0-31.9 0c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2l-16 0c-22.1 0-40-17.9-40-40l0-112c0-.9 0-1.9 .1-2.8l0-69.7-32 0c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
            <div class="nav">
                <ul>
                    <li><a href="/Accueil">Accueil</a></li>
                    <li><a href="">Presentation</a></li>
                    <li><a href="">Resultat</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
        
        </div>
        <div class="right">
            <input type="text" name="search">
            <button class="button">Rechercher</button>
        </div>
    </div>
</body>
</html>