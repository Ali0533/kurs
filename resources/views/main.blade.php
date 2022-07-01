@extends('welcome')

@section('content')
    <div class="offer">
        <div class="container">
            <div class="offer-inner">
                <div class="offerInner-price">
                    <h1>ЩЕБЕНЬ ОТ <span>550</span> РУБ/Т</h1>
                    <h1>ПЕСОК ОТ <span>290</span> РУБ/Т</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="cards wow fadeInUp">
            @forelse($products as $product)
                <div class="card">
                    <img src="/public/storage/{{$product->photo}}" alt="{{$product->name}}">
                    <card class="text">
                        <h3 class="card-head">{{$product->name}}</h3>
                        <p class="card-price">От {{$product->price}} руб</p>
                        <p class="forOrder">Для заказа звоните:</p>
                        <a href="tel:89209098997" class="card-contact">+7 (920) 909 89 97</a>
                    </card>
                </div>
            @empty
                <p class="empty">Товаров нет</p>
            @endforelse
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="footer-inner">
                <h3>Доставка щебня и песка</h3>
                <a href="tel:89209098997">+7 (920) 909 89 97</a>
                <p>ali.adilov.2016@mail.ru</p>
            </div>
        </div>
    </div>
@endsection
