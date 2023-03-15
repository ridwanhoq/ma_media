<!DOCTYPE html>

<head>
    <title>Pusher Test</title>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
        // Initialize a new Pusher instance
        var pusher = new Pusher('04f878756a5450639f88', {
            cluster: 'ap2'
        });

        // Subscribe to the channel where the event will be triggered
        var channel = pusher.subscribe('saucy-gift-149');
        channel.bind('my-event', function(data) {
            alert(JSON.stringify(data));
        });



        // Bind to the event you want to listen to
        channel.bind('EVENT_NAME', function(data) {
            // This function will be called whenever the event is triggered
            console.log(data);
            // Do something with the data that was received
        });
    </script>
</head>

<body>
    <h1>Pusher Test</h1>
    <p>
        Try publishing an event to channel <code>my-channel</code>
        with event name <code>my-event</code>.
    </p>
</body>
