
<!DOCTYPE html>

<html>

    <head>

        <title>Laravel WebSocket Example</title>

    </head>

    <body>

        <div id="div-data"></div>

        <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>
        <script src='../js/app.js'></script>

        <script>
            window.Echo.channel('saucy-gift-149')
            .listen('GetRequestEvent', (e) => {
                console.log(e)
                document.querySelector('#div-data').innerHTML = e.message
            })
        </script>

    </body>


</html>