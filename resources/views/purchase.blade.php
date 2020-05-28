@extends('layout')

@section('title')
Замовлення
@endsection

@section('content')

<div class="purchase">
    <div class="container">
        <div class="purchase__title">Купівля товару</div>
        <form action="" id="purchase-form" class="purchase-form">
            <div class="purchase-form__name">Форма замовлення</div>
            <div class="purchase-form__info">
                <div class="purchase-form__image">
                    <img src="{{ asset($obj->img_src) }}" alt="">
                </div>
                <div class="purchase-form__text">
                    <div class="purchase-form__titles">
                        <div class="purchase-form__title">{{$obj->name}}</div>
                        <div class="purchase-form__subtitle" id="model">модель {{$obj->model}}</div>
                    </div>
                    <div class="purchase-form__image purchase-form__image_mobile">
                        <img src="{{ asset($obj->img_src) }}" alt="">
                    </div>
                    <div class="form-text">
                        <div class="form-text__title">Короткий опис продукту</div>
                        <div class="form-text__text">{{$obj->about1}}</div>
                    </div>
                    <div class="form-text">
                        <div class="form-text__title">Параметри продукту</div>
                        <div class="form-text__text">
                            Масса нетто - {{$obj->netto}}г<br/>
                            Масса брутто - {{$obj->brutto}}г<br/>
                            Об’єм - {{$obj->volume}}мл <br/>
                            Розмір банки - {{$obj->bottle_size}}<br/>
                            В коробці - {{$obj->box}} шт.<br/>
                            Вага коробки - {{$obj->box_weight}} кг<br/>
                            Розмір коробки - {{$obj->box_size}}мм<br/>
                            Об’єм коробки - {{$obj->box_volume}} м.куб
                        </div>
                    </div>
                </div>
            </div>
            <div class="purchase-form__data">
                <div class="form_half form">
                    <div class="form__name form__name_left">Персональні дані</div>
                    <div class="form__content form__content_alt">
                        <div class="form__title form__title_alt">ПІБ</div>
                        <input type="text" name="name" class="form__input form__input_alt">
                        <div class="form__title form__title_alt">Телефон</div>
                        <input type="text" name="phone" class="form__input form__input_alt" placeholder="+380123456789">
                        <div class="form__title form__title_alt">Адреса</div>
                        <input type="text" name="adress" class="form__input form__input_alt">
                    </div>
                    <div id="form_name_message" class="purchase__message message">Ім'я повинно бути довшим за три літери!</div>
                    <div id="form_number_message" class="purchase__message message">Перевірте правильність введеного номеру мобільного телефону!</div>
                    <div id="form_badmessage_message" class="purchase__message message">Адреса має бути більшою за 10 символів!</div>
                </div>
                <div class="purchase-form__value">
                    <div class="purchase-form__sum">Сума замовлення</div>
                    <div class="purchase-form__amount">
                        <div class="purchase-form__price"><span class="purchase-form__digits" id="total">{{$obj->price}}</span> грн за</div>
                        <div class="input">
                            <div class="input__arrows">
                                <button class="input__up" id="up_btn"></button>
                                <button class="input__down" id="down_btn"></button>
                            </div>
                            <input type="number" name="amount" value="1" class="input__amount" min="1" id="num" placeholder="1">
                        </div>
                        <div class="purchase-form__num">коробок</div>
                    </div>
                    <div class="purchase-form__product">{{$obj->name}}</div>
                    <button class="purchase-btn" id="btn">Замовити</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_csrfToken"]').attr('content')
        }
    });
</script>
<script type="text/javascript">
    function init(){
        var m2 = document.getElementById('form_name_message');
        var m3 = document.getElementById('form_number_message');
        var m4 = document.getElementById('form_badmessage_message');
        m2.style.display = 'none';
        m3.style.display = 'none';
        m4.style.display = 'none';
        window.price = parseFloat(document.getElementById('total').innerHTML);
        window.price = parseFloat(window.price.toFixed(2));
    }

    document.getElementById('up_btn').onclick = function(){
        var amount = parseInt(document.getElementById('purchase-form').elements['amount'].value);
        amount += 1;
        document.getElementById('purchase-form').elements['amount'].value = amount;
        change();
        return false;
    }

    document.getElementById('down_btn').onclick = function(){
        var amount = parseInt(document.getElementById('purchase-form').elements['amount'].value);
        if(amount <= 1)
            return false;
        amount -= 1;
        document.getElementById('purchase-form').elements['amount'].value = amount;
        change();
        return false;
    }

    document.getElementById('btn').onclick = function(){
        var inputs = document.getElementById('purchase-form').elements;
        var name = inputs['name'];
        var number = inputs['phone'];
        var message = inputs['adress'];

        
        var re = /\+[0-9]{12}/;
        var m2 = document.getElementById('form_name_message');
        var m3 = document.getElementById('form_number_message');
        var m4 = document.getElementById('form_badmessage_message');
        m2.style.display = 'none';
        m3.style.display = 'none';
        m4.style.display = 'none';
        if(name.value.length <= 3){
            m2.style.display = 'block';
            return false;
        }
        if(!re.test(number.value)){
            m3.style.display = 'block';
            return false;
        }
        if(message.value.length < 10){
            m4.style.display = 'block';
            return false;
        }

        var this_model = document.getElementById('model').innerHTML;
        this_model = this_model.split(' ')[1];

        var my_amount = inputs['amount'].value;
        var total = document.getElementById('total').innerHTML;

        $.ajax({
            type: 'POST',
            url: '/purchase',
            data: {_token: "{{ csrf_token() }}",
                   name:name.value,
                   phone:number.value,
                   home_adress:message.value,
                   model:this_model,
                   amount:my_amount,
                   price:total},
            success:function(data){
                console.log(data.success);
            },
            error:function(data){
                console.log(data);
            }
        });
        alert('Очікуйте на дзвінок!');

        return false;
    }

    num.addEventListener('input', change)

    function change(e){
        var amount = document.getElementById('purchase-form').elements['amount'].value;
        var res = window.price * parseInt(amount);
        if(isNaN(res) || res <= 0)
            return;
        document.getElementById('total').innerHTML = res.toFixed(2);
    }

    window.onload = init;
</script>

@endsection