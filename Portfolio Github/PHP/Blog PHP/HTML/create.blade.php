<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Blog van Tim Slager</title>
    <meta name="Beschrijving" content="The HTML5 Herald">
    <meta name="Tim Slager" content="SitePoint">

    <link rel="stylesheet" href="/blogcss/pizza.css">

</head>

<body>
<div>
    <form action="/blog" method="post">
        @csrf
        <input id="title" type="text" name="title" placeholder="titel">

        <textarea id="post" type="text" name="post" placeholder="content"></textarea>
        <input id="verzenden" type="submit">

    </form>
</div>
</body>
</html>
