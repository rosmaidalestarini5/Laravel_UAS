@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Pizza<h1>
        <a class="btn btn-primary" href="{{ url('konsumen/pizza/pesan') }}">Pesan</a>
        <table class="table">
            <thead><tr><th></th><th>Pizza</th><th>Harga</th></thead>
            <tbody>
                @foreach ($pizzas as $cur)
                <tr>
                    <td>
                        <a class="btn btn-primary" herf="{{ url('konsumen/pizza/edit').'/'.$cur->id }}">Edit</a>
                        <form method="post" action="{{ url('konsumen/pizza/cancel').'/'.$cur->id }}" style="display:inline">
                        @csrf
                            <button class="btn btn-danger" style="submit" onclick="return confirm('Hapus data?')">
                        hapus
                        </button>
                </form>
            </td>
        <td>{!! $cur->nama_pizza !!}</td>
        <td>{!! $cur->harga_satuan !!}</td>
        </tr>
        @endforeach
            </tbody>
            </table>
            {{ $pizzas->links() }}
            </div>
            @endsection