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
        <a href="/"> Home </a>
        <a href="/myblog"> My Blog </a>
        <a href="/contact"> Contact us </a>
        <a href="/about"> About </a>
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
                                <th> WhatsApp :</th>
                                <td> <a href="#">{{ $wa }}</a></td>
                            </tr>
                            <tr>
                                <th> GitHub :</th>
                                <td> <a href="https://github.com/FaidEksan" target="blank">{{ $gitHub }}</a></td>
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