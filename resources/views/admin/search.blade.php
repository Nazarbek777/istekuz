@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <div class="row">
        <table class="table">
            <tbody>
                @if($news->isNotEmpty())
                @foreach($news as $new)
                <tr>
                    <th>{{ $new->id }}</th>
                    <th>{{ $new->name_uz}}</th>
                    <th>{{ $new->description_uz }}</th>
                    <th><img style="height: 70px; width: 100px;" src="{{ asset('storage/' . $new->image2) }}" alt=""></th>
                    <th>
                        <div class="d-flex">
                            <a class="mt-2 mx-3" href="{{ route('news.show', ['news' => $new->id]) }}"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('news.edit', ['news' => $new->id]) }}" class="mt-2 mx-1"><i class="fa fa-edit"></i></a>
                            <a href="">
                                @auth
                                <form action="{{ route('news.destroy', ['news'=> $new->id]) }}" method="post" onsubmit="return confirm('ochirishga ruxsat berasizmi')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn text-danger"><i class="fa fa-trash-can"></i></button>
                                </form>
                                @endauth
                            </a>
                        </div>
                    </th>
                </tr>
                @endforeach
                @elseif($products->isNotEmpty())
                @foreach($products as $product)
                <tr>
                    <th>{{ $product->id }}</th>
                    <th>{{ $product->category->name_uz}}</th>
                    <th>{{ $product->name_uz }}</th>
                    <th><img style="height: 70px; width: 100px;" src="{{ asset('storage/' . $product->image) }}" alt=""></th>
                    <th>
                        <div class="d-flex">
                            <a class="mt-2 mx-3" href="{{ route('product.show', ['product' => $product->id]) }}"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('product.edit', ['product' => $product->id]) }}" class="mt-2 mx-1"><i class="fa fa-edit"></i></a>
                            <a href="">
                                @auth
                                <form action="{{ route('product.destroy', ['product'=> $product->id]) }}" method="post" onsubmit="return confirm('ochirishga ruxsat berasizmi')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn text-danger"><i class="fa fa-trash-can"></i></button>
                                </form>
                                @endauth
                            </a>
                        </div>
                    </th>
                </tr>
                @endforeach
                @else
                <div>
                    <h2>bunaqa so'z topilmadi</h2>
                </div>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection