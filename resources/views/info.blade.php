@extends('layout')

@section('title')
Інформація
@endsection

@section('content')

<div class="info">
    <div class="container">
        <h2 class="info__name">Контакти</h2>
        <div class="info__map">
            <div class="info__text">
                <div class="info__title">Головний офіс торгової марки WD-40 в Україні знаходиться за адресою:</div>
                <div class="info__adress">м.Київ, вул. Пушкіна, буд. Колотушкіна 13.</div>
            </div>
            <iframe class="info__googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1508.4185246735956!2d30.58823625692752!3d50.5184049962965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4d10be7ee8873%3A0xf68cf2f3c5fcef2c!2z0YPQuy4g0J_Rg9GI0LrQuNC90LAsIDEzLCDQmtC40LXQsiwgMDIwMDA!5e0!3m2!1sru!2sua!4v1589570175308!5m2!1sru!2sua" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="info__phonesgroup">
            <div class="info__title info__title_width">Якщо Ви маєте питання, пропозицію або проблему щодо торгової марки WD-40 загалом або конкретного продукту телефонуйте на інформаційну лінію або надсилайте повідомлення на електронну пошту</div>
            <div class="info__phones">
                <div class="info__telephones">
                    <div class="info__subtitle">Телефони</div>
                    <div class="info__numbers">
                        <div class="info__operators">
                            <img src="{{ asset('img/kyivstar.png') }}" alt="" class="info__operator">
                            <img src="{{ asset('img/vodafone.png') }}" alt="" class="info__operator">
                        </div>
                        <div class="info__number">
                            096 096 09 60<br/>
                            066 066 06 60<br/>
                            066 066 06 06
                        </div>
                    </div>
                </div>
                <div class="info__shedule">
                    <div class="info__subtitle">Графік прийому дзвінків</div>
                    <div class="info__datetime">
                        <div class="info__day">
                            Пн. - Пт.&nbsp<br/>
                            Субота
                        </div>
                        <div class="info__time">
                            з 9:00 до 18:00<br/>
                            з 9:00 до 15:00
                        </div>
                    </div>
                </div>
                <div class="info__emails">
                    <div class="info__subtitle">Електронна пошта</div>
                    <div class="info__email">
                        wd40ukraine@corp.com<br/>
                        wd40ukraine@gmail.com
                    </div>
                </div>
            </div>
        </div>
        <div class="info__contact">
            <div class="info__title info__title_form">Також Ви можете зв’язатися з представником WD-40 онлайн. Для зв’язку заповніть наступну форму:</div>
            <div id="form_name_message" class="info__message message">Ім'я повинно бути довшим за три літери!</div>
            <div id="form_email_message" class="info__message message">Перевірте правильність введеної поштової адреси!</div>
            <div id="form_badmessage_message" class="info__message message">Повідомлення має бути більшим за 10 символів!</div>
            <form action="" class="form form_topmargin" id="form">
                <div class="form__name form__name_left">Контактна форма</div>
                <div class="form__content">
                    <div class="form__title">Ім’я</div>
                    <input type="text" name="name" class="form__input">
                    <div class="form__title">E-mail</div>
                    <input type="text" name="email" class="form__input">
                    <div class="form__title form__title_last">Повідомлення</div>
                    <textarea name="message" class="form__message form__message_width"></textarea>
                </div>
                <button class="form__button" id="form_btn">Надіслати</button>
            </form>
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
        var m2 = document.getElementById('form_name_message');
        var m3 = document.getElementById('form_email_message');
        var m4 = document.getElementById('form_badmessage_message');
        m2.style.display = 'none';
        m3.style.display = 'none';
        m4.style.display = 'none';
    }

    document.getElementById('form_btn').onclick = function(){
        var inputs = document.getElementById('form').elements;
        var name = inputs[0];
        var email = inputs[1];
        var message = inputs[2];
        var re = new RegExp(".@.");
        var m2 = document.getElementById('form_name_message');
        var m3 = document.getElementById('form_email_message');
        var m4 = document.getElementById('form_badmessage_message');
        m2.style.display = 'none';
        m3.style.display = 'none';
        m4.style.display = 'none';
        if(name.value.length <= 3){
            m2.style.display = 'block';
            return false;
        }
        if(!re.test(email.value)){
            m3.style.display = 'block';
            return false;
        }
        if(message.value.length < 10){
            m4.style.display = 'block';
            return false;
        }
        $.ajax({
            type: 'POST',
            url: '/send_message',
            data: {_token: "{{ csrf_token() }}", name:name.value, email:email.value, message:message.value},
            success:function(data){
                console.log(data.success)
            },
            error:function(data){
                console.log(data);
            }
        });
        alert('Очікуйте відповідь на вказаний е-мейл!');

        return false;
    }

    window.onload = init;
</script>

@endsection