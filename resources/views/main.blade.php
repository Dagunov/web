@extends('layout')

@section('title')
Головна
@endsection

@section('content')

<div class="main">
    <div class="main__vector1"></div>
    <div class="main__vector2"></div>
    <div class="main__vector3"></div>
    <div class="advantages">
        <div class="main__title">
            <div class="container">
                <h2>Ваше задоволення -<br/>наша ціль.</h2>
             </div>
        </div>
        <div class="advantages__content">
            <div class="container">
                <div class="advantages__flex">
                    <div class="advantage">
                        <img class="advantage__image" src="{{ asset('img/formula.svg') }}" alt="">
                        <div class="advantage__title">Неповторна формула</div>
                        <div class="advantage__text advantage__text_normal">Завдяки унікальній формулі, WD-40 забезпечує бездоганний результат</div>
                        <div class="advantage__background"></div>
                    </div>
                    <div class="advantage">
                        <img class="advantage__image" src="{{ asset('img/hourglass.svg') }}" alt="">
                        <div class="advantage__title">Довготривалість</div>
                        <div class="advantage__text advantage__text_normal">Мінеральні оливи, що входять до складу WD-40 забезпечують довготривалий захист</div>
                        <div class="advantage__background"></div>
                    </div>
                    <div class="advantage">
                        <img class="advantage__image" src="{{ asset('img/viral.svg') }}" alt="">
                        <div class="advantage__title">Універсальність</div>
                        <div class="advantage__text advantage__text_last">Окрім водовідштовхувальної функції, препарат WD-40 має безліч застосувань в побуті</div>
                        <div class="advantage__background"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="facts">
        <div class="container">
            <h2 class="facts__title">А ви знали, що WD-40...</h2>
            <div class="facts__content">
                <div class="fact">
                    <img class="fact__image" src="{{ asset('img/mop.svg') }}" alt="">
                    <div class="fact__text">видаляє царапини та потертості з підлоги</div>
                </div>
                <div class="fact">
                    <img class="fact__image" src="{{ asset('img/window.svg') }}" alt="">
                    <div class="fact__text">запобігає замерзанню вікон</div>
                </div>
                <div class="fact">
                    <img class="fact__image" src="{{ asset('img/glue.svg') }}" alt="">
                    <div class="fact__text">видаляє залишки клею</div>
                </div>
                <div class="fact">
                    <img class="fact__image" src="{{ asset('img/tea.svg') }}" alt="">
                    <div class="fact__text">виводить плями чаю</div>
                </div>
            </div>
        </div>
    </div>
    <div class="reviews">
        <div class="container">
            <h2 class="reviews__title">Відгуки про WD-40</h2>
            <div class="reviews__content">
                <div class="review">
                    <img class="review__image" src="{{ asset('img/happy.svg') }}" width="128" height="128" alt="">
                    <div class="review__text">“Дуже задоволений ефективністю препарату. Раджу всім, хто хоче швидкого та чудового результату” - Григорій Сковорода.</div>
                </div>
                <div class="review">
                    <img class="review__image" src="{{ asset('img/sad.svg') }}" width="128" height="128" alt="">
                    <div class="review__text">“Незадоволений продукцією, розраховував на гірший результат, а все вийшло дуже чудово” - Іван Франко.</div>
                </div>
                <div class="review">
                    <img class="review__image" src="{{ asset('img/happy.svg') }}" width="128" height="128" alt="">
                    <div class="review__text">“WD-40 - це mush-have для кожного! Чесно кажучи, не можу згадати кращих аналогів” - Василь Симоненко.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="addinfo">
        <div class="container">
            <div class="addinfo__content">
                <div class="addinfo__catalog">
                    <h3 class="addinfo-title">Дізнайся більше про товари WD-40</h3>
                    <a class="addinfo__link" href="/catalog">Каталог товарів</a>
                </div>
                <div class="addinfo__social social">
                    <div class="addinfo__icons">
                        <div class="addinfo__icon">
                            <a href="">
                                <img class="addinfo__image" src="{{ asset('img/facebook.svg') }}" alt="">
                            </a>
                        </div>
                        <div class="addinfo__icon addinfo__icon_last">
                            <a href="">
                                <img class="addinfo__image" src="{{ asset('img/telegram.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <h3 class="addinfo-title addinfo-title_mobile">Приєднуйся до нас у соціальних<br/>мережах</h3>
                </div>
                <div class="addinfo__problems">
                    <div class="addinfo__text">
                        <h3 class="addinfo-title">Виникли проблеми чи є запитання?</h3>
                        <div class="addinfo__subtitle">Заповніть форму та з’єднайтесь з представником WD-40 онлайн.</div>
                        <h2 id="form_name_message" class="addinfo__message message">Ім'я повинно бути довшим за три літери!</h2>
                        <h2 id="form_email_message" class="addinfo__message message">Перевірте правильність введеної поштової адреси!</h2>
                        <h2 id="form_badmessage_message" class="addinfo__message message">Повідомлення має бути більшим за 10 символів!</h2>
                    </div>
                    <form action="" class="form form_width" id="form">
                        <div class="form__name">Контактна форма</div>
                        <div class="form__content">
                            <div class="form__title">Ім’я</div>
                            <input type="text" name="name" class="form__input">
                            <div class="form__title">E-mail</div>
                            <input type="text" name="email" class="form__input">
                            <div class="form__title form__title_last">Повідомлення</div>
                            <textarea name="message" class="form__message"></textarea>
                        </div>
                        <button class="form__button" id="form_btn">Надіслати</button>
                    </form>
                </div>
            </div>
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