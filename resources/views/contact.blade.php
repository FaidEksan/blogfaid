<x-layout>
    <x-slot:tittle>{{ $tittle }}</x-slot:tittle>
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
</x-layout>