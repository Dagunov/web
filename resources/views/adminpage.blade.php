@extends('layout')

@section('title')
Адмін
@endsection

@section('content')

<div class="admin">
    <div class="container">
        <div>
            <button class="chmod-button" id="mode_change_btn">Перейти до списку товарів</button>
        </div>
        <div class="flexbox" id="orders_list">
            <div class="orders">Замовлення</div>
            <table class="table">
                <tr>
                    <th class="table__cell">Видалити</th>
                    <th class="table__cell">Замовник</th>
                    <th class="table__cell">Телефон</th>
                    <th class="table__cell">Адреса</th>
                    <th class="table__cell">Кількість, ціна</th>
                    <th class="table__cell">Товар</th>
                </tr>
                @foreach($orders as $order)
                <tr id=<?php echo 'orders_row_'.$order->ID; ?>>
                    <td class="table__cell">
                        <button class="table__button" onClick="deleter(this.id)" id=<?php echo 'orders_del_'.$order->ID; ?>>X</button>
                    </td>
                    <td class="table__cell">{{$order->name}}</td>
                    <td class="table__cell">{{$order->phone}}</td>
                    <td class="table__cell">{{$order->adress}}</td>
                    <td class="table__cell">{{$order->amount}}, {{$order->total}}</td>
                    <td class="item_name">{{$order->item_id}}</td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="flexbox" id="messages_list">
            <div class="messages">Повідомлення</div>
            <table class="table">
                <tr>
                    <th class="table__cell">Видалити</th>
                    <th class="table__cell">Відправник</th>
                    <th class="table__cell">Email</th>
                    <th class="table__cell">Повідомлення</th>
                </tr>
                @foreach($messages as $msg)
                <tr id=<?php echo 'messages_row_'.$msg->ID; ?>>
                    <td class="table__cell">
                        <button class="table__button" onClick="deleter(this.id)" id=<?php echo 'messages_del_'.$msg->ID; ?>>X</button>
                    </td>
                    <td class="table__cell">{{$msg->name}}</td>
                    <td class="table__cell">{{$msg->email}}</td>
                    <td class="table__cell">{{$msg->message}}</td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="flexbox" id="items_list">
            <div class="table__header">Список товарів</div>
            <table class="table">
                <tr>
                    <th class="table__cell">Редагувати/видалити</th>
                    <th class="table__cell">Назва</th>
                    <th class="table__cell">Модель</th>
                    <th class="table__cell">Ціна</th>
                </tr>
                @foreach($items as $item)
                <tr>
                    <td class="table__cell">
                        <button class="table__button" onClick="changer(this.id)" id=<?php echo $item->ID; ?>>O</button>
                    </td>
                    <td class="table__cell">{{$item->name}}</td>
                    <td class="table__cell">{{$item->model}}</td>
                    <td class="table__cell">{{$item->price}}</td>
                </tr>
                @endforeach
                <tr>
                    <td class="table__cell" colspan="4"><button class="table__button" onClick="creator()" id="create_btn">Додати новий товар</button></td>
                </tr>
            </table>
        </div>
        <div class="flexbox" id="full_view_table">
            <div class="table__header">Інформація про товар</div>
            <table class="table">
                <tr>
                    <th class="table__cell">Параметр</th>
                    <th class="table__cell">Значення</th>
                </tr>
                <tr>
                    <td class="table__cell">ID</td>
                    <td class="table__cell"><span id="fvt_id">Someval</span></td>
                </tr>
                <tr>
                    <td class="table__cell">Назва</td>
                    <td class="table__cell"><input class="table__input" id="fvt_name" value="name"></td>
                </tr>
                <tr>
                    <td class="table__cell">Модель</td>
                    <td class="table__cell"><input class="table__input" id="fvt_model" value="model"></td>
                </tr>
                <tr>
                    <td class="table__cell">Опис</td>
                    <td class="table__cell"><input class="table__input" id="fvt_about1" value="about1"></td>
                </tr>
                <tr>
                    <td class="table__cell">Додатково</td>
                    <td class="table__cell"><input class="table__input" id="fvt_about2" value="about2"></td>
                </tr>
                <tr>
                    <td class="table__cell">Шлях до зображення</td>
                    <td class="table__cell"><input class="table__input" id="fvt_img_src" value="img"></td>
                </tr>
                <tr>
                    <td class="table__cell">Ціна</td>
                    <td class="table__cell"><input class="table__input" id="fvt_price" value="price"></td>
                </tr>
                <tr>
                    <td class="table__cell">Функції</td>
                    <td class="table__cell"><input class="table__input" id="fvt_functions" value="functions"></td>
                </tr>
                <tr>
                    <td class="table__cell">Маса нетто</td>
                    <td class="table__cell"><input class="table__input" id="fvt_netto" value="netto"></td>
                </tr>
                <tr>
                    <td class="table__cell">Маса брутто</td>
                    <td class="table__cell"><input class="table__input" id="fvt_brutto" value="brutto"></td>
                </tr>
                <tr>
                    <td class="table__cell">Об'єм</td>
                    <td class="table__cell"><input class="table__input" id="fvt_volume" value="volume"></td>
                </tr>
                <tr>
                    <td class="table__cell">Розмір пляшки</td>
                    <td class="table__cell"><input class="table__input" id="fvt_bottle_size" value="bottle_size"></td>
                </tr>
                <tr>
                    <td class="table__cell">Пляшок у коробці</td>
                    <td class="table__cell"><input class="table__input" id="fvt_box" value="box"></td>
                </tr>
                <tr>
                    <td class="table__cell">Розмір коробки</td>
                    <td class="table__cell"><input class="table__input" id="fvt_box_size" value="box_size"></td>
                </tr>
                <tr>
                    <td class="table__cell">Об'єм коробки</td>
                    <td class="table__cell"><input class="table__input" id="fvt_box_volume" value="box_volume"></td>
                </tr>
                <tr>
                    <td class="table__cell">Маса коробки</td>
                    <td class="table__cell"><input class="table__input" id="fvt_box_weight" value="box_weight"></td>
                </tr>
            </table>
            <button class="control-button" onClick="save(false, 'fvt_')">Зберегти</button>
            <button class="control-button" onClick="back('full_view_table')">Назад (без збереження)</button>
            <button class="control-button" onClick="deleter_confirm()">Видалити</button>
            <div id="confirm_form">
                <span>Ви впевнені?</span>
                <button id="confirm_btn">Так</button>
                <button onClick="deleter_no()">Ні</button>
            </div>
        </div>
        <div class="flexbox" id="create_item_table">
            <div class="table__header">Додавання нового товару</div>
            <div class="table__subtitle">Для переходу на нову строку в додатковому описі та функціях використовувати &lt;br/&gt;.</div> 
            <table class="table">
                <tr>
                    <th class="table__cell">Параметр</th>
                    <th class="table__cell">Значення</th>
                </tr>
                <tr>
                    <td class="table__cell">Назва</td>
                    <td class="table__cell"><input class="table__input" id="cit_name" value="Назва товару"></td>
                </tr>
                <tr>
                    <td class="table__cell">Модель</td>
                    <td class="table__cell"><input class="table__input" id="cit_model" value="Модель"></td>
                </tr>
                <tr>
                    <td class="table__cell">Опис</td>
                    <td class="table__cell"><input class="table__input" id="cit_about1" value="Опис"></td>
                </tr>
                <tr>
                    <td class="table__cell">Додатково</td>
                    <td class="table__cell"><input class="table__input" id="cit_about2" value="Додаткова інформація"></td>
                </tr>
                <tr>
                    <td class="table__cell">Шлях до зображення</td>
                    <td class="table__cell"><input class="table__input" id="cit_img_src" value="img/[шлях до зображення]"></td>
                </tr>
                <tr>
                    <td class="table__cell">Ціна</td>
                    <td class="table__cell"><input class="table__input" id="cit_price" value="Гривні.копійки"></td>
                </tr>
                <tr>
                    <td class="table__cell">Функції</td>
                    <td class="table__cell"><input class="table__input" id="cit_functions" value="Список функцій"></td>
                </tr>
                <tr>
                    <td class="table__cell">Маса нетто</td>
                    <td class="table__cell"><input class="table__input" id="cit_netto" value="Маса нетто"></td>
                </tr>
                <tr>
                    <td class="table__cell">Маса брутто</td>
                    <td class="table__cell"><input class="table__input" id="cit_brutto" value="Маса брутто"></td>
                </tr>
                <tr>
                    <td class="table__cell">Об'єм</td>
                    <td class="table__cell"><input class="table__input" id="cit_volume" value="Об'єм пляшки"></td>
                </tr>
                <tr>
                    <td class="table__cell">Розмір пляшки</td>
                    <td class="table__cell"><input class="table__input" id="cit_bottle_size" value="ХХХмм * Ø ХХмм"></td>
                </tr>
                <tr>
                    <td class="table__cell">Пляшок у коробці</td>
                    <td class="table__cell"><input class="table__input" id="cit_box" value="Кількість"></td>
                </tr>
                <tr>
                    <td class="table__cell">Розмір коробки</td>
                    <td class="table__cell"><input class="table__input" id="cit_box_size" value="XXXхYYYхZZZ"></td>
                </tr>
                <tr>
                    <td class="table__cell">Об'єм коробки</td>
                    <td class="table__cell"><input class="table__input" id="cit_box_volume" value="Об'єм коробки"></td>
                </tr>
                <tr>
                    <td class="table__cell">Маса коробки</td>
                    <td class="table__cell"><input class="table__input" id="cit_box_weight" value="Вага коробки"></td>
                </tr>
            </table>
            <button class="control-button" onClick="save(true, 'cit_')">Зберегти</button>
            <button class="control-button" onClick="back('create_item_table')">Назад (без збереження)</button>
        </div>
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
        var names = document.getElementsByClassName('item_name');
        for (var i = names.length - 1; i >= 0; i--) {
            setname(names[i], names[i].innerHTML);
        }
        document.getElementById('items_list').style.display = 'none';
        document.getElementById('full_view_table').style.display = 'none';
        document.getElementById('confirm_form').style.display = 'none';
        document.getElementById('create_item_table').style.display = 'none';
        window.startingstate = true;
    }

    function deleter_confirm(){
        document.getElementById('confirm_form').style.display = 'block';
        var btn = document.getElementById('confirm_btn');
        var id = parseInt(document.getElementById('fvt_id').innerHTML);
        btn.onclick = function(){
            $.ajax({
                type: 'POST',
                url: '/adminpagedeleteitem',
                data: {_token: "{{ csrf_token() }}", id:id },
                success:function(data){
                    console.log(data.success);
                    alert('Товар було видалено.');
                },
                error:function(data){
                    console.log(data);
                }
            });

            deleter_no();
            back('full_view_table');

            return false;
        };
        

        return false;
    }

    function deleter_no(){
        document.getElementById('confirm_form').style.display = 'none';
        return false;
    }

    function setname(object, id){
        $.ajax({
            type: 'POST',
            url: '/adminpagegetname',
            data: {_token: "{{ csrf_token() }}", id:id },
            success:function(data){
                console.log(data.success);
                object.innerHTML = data.name;
            },
            error:function(data){
                console.log(data);
            }
        });
    }

    function creator(){
        document.getElementById('items_list').style.display = 'none';
        document.getElementById('create_item_table').style.display = 'flex';
        document.getElementById('mode_change_btn').style.display = 'none';


        return false;
    }

    function check(prefix){
        var reg = /^[0-9]+\.[0-9]{2}$/;
        if(!reg.test(document.getElementById(prefix+'price').value)){
            alert('Ціна повинна мати вигляд XXXX.YY!');
            return false;
        }
        reg = new RegExp('^img/[a-zA-Z0-9]+');
        if(!reg.test(document.getElementById(prefix+'img_src').value)){
            alert('Посилання на зображення має бути формату img/[посилання]!');
            return false;
        }
        return true;
    }

    function save(is_new_item, prefix){
        var i = -1;
        if(!is_new_item){
            i = document.getElementById('fvt_id').innerHTML;
        }
        if(!check(prefix))
            return false;
        $.ajax({
            type: 'POST',
            url: '/adminpageupdate',
            data: {_token: "{{ csrf_token() }}",
                    id:i,
                    name: document.getElementById(prefix+'name').value,
                    netto: document.getElementById(prefix+'netto').value,
                    brutto: document.getElementById(prefix+'brutto').value,
                    about1: document.getElementById(prefix+'about1').value,
                    about2: document.getElementById(prefix+'about2').value,
                    functions: document.getElementById(prefix+'functions').value,
                    model: document.getElementById(prefix+'model').value,
                    box: document.getElementById(prefix+'box').value,
                    box_weight: document.getElementById(prefix+'box_weight').value,
                    price: document.getElementById(prefix+'price').value,
                    box_size: document.getElementById(prefix+'box_size').value,
                    box_volume: document.getElementById(prefix+'box_volume').value,
                    bottle_size: document.getElementById(prefix+'bottle_size').value,
                    img_src: document.getElementById(prefix+'img_src').value,
                    volume: document.getElementById(prefix+'volume').value
        },
            success:function(data){
                console.log(data.success);
                alert('Збережено! Для того, щоб побачити зміни, оновіть сторінку.');
            },
            error:function(data){
                console.log(data);
            }
        });
        if(is_new_item)
            back('create_item_table');
        else
            back('full_view_table');
        return true;
    }

    function back(from){
        document.getElementById(from).style.display = 'none';
        document.getElementById('items_list').style.display = 'flex';
        document.getElementById('mode_change_btn').style.display = 'block';

        return false;
    }

    function changer(id){
        document.getElementById('items_list').style.display = 'none';
        document.getElementById('full_view_table').style.display = 'flex';
        document.getElementById('mode_change_btn').style.display = 'none';

        $.ajax({
            type: 'POST',
            url: '/adminpageget',
            data: {_token: "{{ csrf_token() }}", id:id},
            success:function(data){
                console.log(data.success);
                document.getElementById('fvt_id').innerHTML = data.q[0].ID;
                document.getElementById('fvt_name').value = data.q[0].name;
                document.getElementById('fvt_netto').value = data.q[0].netto;
                document.getElementById('fvt_brutto').value = data.q[0].brutto;
                document.getElementById('fvt_price').value = data.q[0].price;
                document.getElementById('fvt_about1').value = data.q[0].about1;
                document.getElementById('fvt_about2').value = data.q[0].about2;
                document.getElementById('fvt_functions').value = data.q[0].functions;
                document.getElementById('fvt_model').value = data.q[0].model;
                document.getElementById('fvt_box').value = data.q[0].box;
                document.getElementById('fvt_box_weight').value = data.q[0].box_weight;
                document.getElementById('fvt_box_size').value = data.q[0].box_size;
                document.getElementById('fvt_box_volume').value = data.q[0].box_volume;
                document.getElementById('fvt_bottle_size').value = data.q[0].bottle_size;
                document.getElementById('fvt_img_src').value = data.q[0].img_src;
                document.getElementById('fvt_volume').value = data.q[0].volume;
            },
            error:function(data){
                console.log(data);
            }
        });

        return false;
    }

    document.getElementById('mode_change_btn').onclick = function(){
        if(window.startingstate){
            document.getElementById('mode_change_btn').innerHTML = 'Перейти до замовлень та повідомлень';
            document.getElementById('items_list').style.display = 'flex';
            document.getElementById('messages_list').style.display = 'none';
            document.getElementById('orders_list').style.display = 'none';
        }else{
            document.getElementById('mode_change_btn').innerHTML = 'Перейти до списку товарів';
            document.getElementById('items_list').style.display = 'none';
            document.getElementById('messages_list').style.display = 'flex';
            document.getElementById('orders_list').style.display = 'flex';
        }
        window.startingstate = !window.startingstate;
    }

    function deleter(id){
        var arr = id.split('_');
        var t = arr[0];
        var i = arr[2];
        $.ajax({
            type: 'POST',
            url: '/adminpagedel',
            data: {_token: "{{ csrf_token() }}", table:t, id:i},
            success:function(data){
                console.log(data.success);
                alert(data.msg);
            },
            error:function(data){
                console.log(data);
            }
        });

        document.getElementById(t+'_row_'+i).style.display = 'none';

        return false;
    }

    window.onload = init;
</script>

@endsection