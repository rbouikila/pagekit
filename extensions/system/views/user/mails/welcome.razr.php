<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <p>@trans('Hello %name%', ['%name%' => name]),</p>

        <p>@trans('Thank you for registering!')</p>

        <p><a target="_blank" href="@app.url.root(true)">@app.url.root(true)</a></p>

        <p>@trans('Login with the username:') @username</p>
    </body>
</html>