@extends('welcome')

@section('content')
    <div class="container">
        <div class="container-inner">
            <div class="productHead">
                <h3>Все товары</h3>
                <a href="create" class="createBtnLink">Добавить товар</a>
            </div>
            <table>
                <tr>
                    <th>id</th>
                    <th>Наименование</th>
                    <th>Стоимость/шт</th>
                    <th>Фото</th>
                    <th>Действия</th>
                </tr>
                @forelse($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }} руб</td>
                        <td><img src="/public/storage/{{$product->photo}}" alt="{{ $product->name }}"></td>
                        <td>
                            <form action="{{ route('product.destroy', ['product' => $product->id]) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="tableDestroy">
                                    <img src="../resources/media/img/delete.png" alt="" class="tableIcon">
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <p class="empty">Товаров нет!</p>
                @endforelse
            </table>
        </div>
    </div>

@endsection
