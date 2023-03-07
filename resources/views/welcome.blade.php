<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App</title>
    @vite('resources/js/app.js')
</head>

<body>

    <form id="message-form">
        <input type="text" name="messages" id="messages" placeholder="Enter your message" />
        <input type="submit" name="submit" id="submit" value="Send" />
    </form>
    <p>
        <span id="status"></span>
        <span id="message"></span>
    </p>
</body>

</html>