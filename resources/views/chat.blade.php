<html>
    <head>
        <meta charset="utf-8">
        <title>Charroom</title>
        <link rel="stylesheet" href="css/app.css">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <div id="app">
            <h1>Chatroom</h1>
            <span class="badge pull-right">
                @{{usersInRoom.length}}
            </span>
            {{--Chat Messages list  --}}
            <chat-log :messages="messages"></chat-log>
            {{--Input where we generate the content--}}
            <chat-composer v-on:messagesent="addMessage"></chat-composer>
        </div>

        <script src="js/app.js" charset="utf-8"></script>
    </body>

</html>