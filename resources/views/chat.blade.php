<html>
    <head>
        <meta charset="utf-8">
        <title>Charroom</title>
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <div id="app">
            <h1>Chatroom</h1>
            {{--Chat Messages list  --}}
            <chat-log :messages="messages"></chat-log>
            {{--Input where we generate the content--}}
            <chat-composer v-on:messagesent="addMessage"></chat-composer>
        </div>

        <script src="js/app.js" charset="utf-8"></script>
    </body>

</html>