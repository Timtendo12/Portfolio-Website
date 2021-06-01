<!DOCTYPE html>
<html lang="nl">
<head>
    <link rel="stylesheet" href="/css/morsecode.css">
    <script src="https://kit.fontawesome.com/35b0225905.js" crossorigin="anonymous"></script>
    <title>Tim's Morse De/Encoder</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!-- Hier kan je je tekst invoeren dat moet worden vertaald. -->
<form action="/morse" method="post">
    @csrf
    <input type="text" name="normaal" value="">
    <input type="submit">
</form>
<!--Deze button zorgt ervoor dat de vertaling omgezet word naar geluid.-->
<form action="/morse" method="post">
    <input type="button" id="geluid" value="geluid">
    <!--Java script. Leest de vertaling en zet het om in geluid dat hij afspeelt van de 2 mp3 bestanden.-->
    <script type="text/javascript">
        /*Haalt de mp3 bestanden van de "sound" folder.*/
        let d = "sound/";
        let sounds = [
            @foreach($geluiden as $geluid)
                /*Als er "." is dan speelt hij "short.mp3" af.*/
            @if ($geluid === ".")
            new Audio(d + "short.mp3"),
            @endif
                /*Als er "-"is dan speelt hij "long.mp3" af.*/
            @if($geluid === "-")
            new Audio(d + "long.mp3"),
            @endif
            @endforeach
        ];
        let i = -1;
        function playSnd() {
            i++;
            if (i >= sounds.length) {
                i = -1;
                return;
            }
            sounds[i].addEventListener('ended', playSnd);
            sounds[i].play();
        }
        document.getElementById('geluid').addEventListener('click', playSnd);
    </script>

</form>
{{$normaal}}
<button type="button" class="block">Code</button>
</body>
</html>
