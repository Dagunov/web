@extends('layout')

@section('title')
Каталог
@endsection

@section('content')

<div class="catalog">
    <div class="container">
        <div class="catalog__content">
            <div class="catalog__header">
                <h2 class="catalog__title">Каталог</h2>
                <form action="/search" class="catalog__searchform" id="search_form" method="post">
                    @csrf
                    <input type="text" name="search" class="catalog__search" placeholder="Введіть назву"><button class="catalog__submit" id="search_btn"></button>
                </form>
            </div>
            @if(!$obj)
            <div>
                Lol!
            </div>
            @endif
            @foreach($obj as $item)
            <div class="product">
                <div class="product__round"></div>
                <div class="product__content">
                    <div class="product__hidetext" id=<?php echo "hidetext_".$item->ID; ?>>
                        <div class="product__about">
                            <div class="product__image product__image_desktop">
                                <img src="{{ asset($item->img_src) }}" alt="">
                            </div>
                            <div class="product__description">
                                <div class="product__title">
                                    <div class="product__name">{{$item->name}}</div>
                                    <div class="product__model">модель {{$item->model}}</div>
                                </div>
                                <div class="product__image product__image_mobile">
                                    <img src="{{ asset($item->img_src) }}" alt="">
                                </div>
                                <div class="product__text">
                                    <div class="product__toptext">
                                        {{$item->about1}}
                                    </div>
                                    <div class="product__bottomtext">
                                        @foreach(explode('<br/>', $item->about2) as $row)
                                        {{$row}}<br/>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__details">
                            <div class="product__parameters product-table">
                                <div class="product-table__title">Параметри</div>
                                <div class="product-table__text">
                                    Масса нетто - {{$item->netto}}г<br/>
                                    Масса брутто - {{$item->brutto}}г<br/>
                                    Об’єм - {{$item->volume}}мл <br/>
                                    Розмір банки - {{$item->bottle_size}}<br/>
                                    В коробці - {{$item->box}} шт.<br/>
                                    Вага коробки - {{$item->box_weight}} кг<br/>
                                    Розмір коробки - {{$item->box_size}}мм<br/>
                                    Об’єм коробки - {{$item->box_volume}} м.куб
                                </div>
                            </div>
                            <div class="product__functions product-table">
                                <div class="product-table__title product-table__title_indent">Функції</div>
                                <div class="product-table__text product-table__text_indent">
                                    @foreach(explode('<br/>', $item->functions) as $row)
                                    {{$row}}<br/>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="more" id=<?php echo "show_btn_".$item->ID; ?> onClick=<?php echo "showMore(".$item->ID.")"; ?>></div>
                    <div class="product__price">
                        <div class="product__pricetitle">Ціна</div>
                        <div class="product__cost"><span class="product__digits">{{$item->price}}</span> грн за коробку {{$item->name}}</div>
                        <form action="/order#purchase-form" class="product__order" id="purchase_form" method="post">
                            @csrf
                            <button class="purchase-btn" id="purchase_btn" name="id" value=<?php echo $item->ID; ?>>Замовити</button>
                        </form>
                    </div>
                </div>
                <div class="product__round product__round_bottom"></div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<script type="text/javascript">
    function showMore(id){
        document.getElementById('hidetext_' + id).style.height = '100%';
        document.getElementById('show_btn_' + id).style.display = 'none';

        return false;
    }
</script>

@endsection