<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php print($title) ?></title>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="stylesheet" type="text/css"
            href="https://www.google.com/fonts#UsePlace:use/Collection:Roboto:400,100">
        <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/cosmo/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-OiWEn8WwtH+084y4yW2YhhH6z/qTSecHZuk/eiWtnvLtU+Z8lpDsmhOKkex6YARr"
            crossorigin="anonymous">
    
    </head>
    <body>

        <div id="app" class="container">
            <h1><?php print($greeting) ?></h1>
            <p>
                <img src='img/docker-logo.png' />
                <img src='img/ecs-logo.png' />
            </p>
        </div>

        <script type="text/javascript" src="app.js"></script>
    </body>
</html>
