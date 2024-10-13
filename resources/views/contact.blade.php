<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Narahubung Penulis</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <div>
    <nav>
        <ul>
            <a href="/"> Home </a>
            <a href="/myblog"> My Blog </a>
            <a href="/contact"> Contact us </a>
            <a href="/about"> About </a>
        </ul>
    </nav>
    <article>
        <h2> Narahubung Penulis :</h2>
                <table>
                    <tr>
                        <th> Penulis : </th>
                        <td> {{ $nama }}</td>
                    </tr>
                    <tr>
                        <th> Prodi :</th>
                        <td> {{ $prod }}</th>
                    </tr>
                    <tr>
                        <th> Instagram :</th>
                        <td> <a href="#">{{ $ig }}</a></td>
                    </tr>
                    <tr>
                        <th> WhatsApp :</th>
                        <td> <a href="#">{{ $noWa }}</a></td>
                    </tr>
                    <tr>
                        <th> Email :</th>
                        <td> {{ $mail }}</td>
                    </tr>
                </table>
    </article>
   </div>
</body>
</html>