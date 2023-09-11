@extends('layouts.adminLayout.adminLayout')
@section('cssContent')

@endsection

@section('content')

<h4>Ranking</h4>
<hr>
<table>
    <thead>
        <tr>
            <th>Nama Lansia</th>
            <th>Hasil Akhir</th>
            <th>Ranking</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ranking->sortBy('ranking') as $ranking)
            @if ($ranking->hasil_akhir == 1)
                <tr>
                    <td>{{ $ranking->Alternatif->nama_alternatif }}</td>
                    <td>{{ $ranking->hasil_akhir }}</td>
                    <td>{{ $ranking->ranking }}</td>
                </tr>
            @endif
        @endforeach
    </tbody>
</table>

@endsection

@section('jsContent')

@endsection