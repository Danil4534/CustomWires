@php
$socialLinks = [
['icon' => 'ph ph-instagram-logo', 'anchor' => ''],
['icon' => 'ph ph-facebook-logo', 'anchor' => ''],
['icon' => 'ph ph-telegram-logo', 'anchor' => ''],
['icon' => 'ph ph-youtube-logo', 'anchor' => '']
];
@endphp

<div class="feedback__container">
    <form action="" class="feedback__form">
        <h1 class="feedback__title">Зворотній зв'язок</h1>
        <div class="form__name">
            <label for="name">Ім'я <span>*</span></label>
            <div class="input__wrapper">
                <input type="text" placeholder="Введіть ваше ім'я" name="name" required>
                <i class="ph ph-x" id="clearIconField"></i>
            </div>
        </div>
        <div class="form__phoneNumber">
            <label for="phoneNumber">Номер телефону<span>*</span></label>
            <div class="input__wrapper">
                <input type="text" placeholder="+380 -- --- -- --" name="phoneNumber" required>
                <i class="ph ph-x" id="clearIconField"></i>
            </div>
        </div>
        <div class="form__comment">
            <label for="comment">Коментар</label>
            <textarea name="comment" id="usercomment" placeholder="Не обов’язково" required></textarea>
        </div>
        <div class="feedback__drop">
            <i class="ph-fill ph-upload"></i>
            <div class="drop__text">
                <h2>Оберіть файл або перетягніть його сюди</h2>
                <p>JPG, PNG або PDF, розмір файлу не більше 10 МБ</p>
            </div>
            <x-secondary-button secondaryBtnText="Обрати" secondaryClass="chooseBtn" type="button" />
            <input type="file" hidden id="inputFile">
        </div>
        <div class="feedback__drop__chooseFile__anim">
            <i class="ph ph-file"></i>
            <div class="drop__chooseFile__anim__wrapper">
                <div class="drop__chooseFile__info">
                    <h1 id="chooseFile__fileName__anim"></h1>
                    <p id="chooseFile__fileSize__anim"></p>
                </div>
                <div class="loader"></div>
            </div>
        </div>
        <div class="feedback__drop__error">
            <i class="ph-fill ph-warning-circle"></i>
            <span>
                Розмір не більше 10 МБ
            </span>
        </div>
        <div class="feedback__drop__chooseFile">
            <i class="ph ph-file"></i>
            <div class="drop__chooseFile__info">
                <h1 id="chooseFile__fileName"></h1>
                <p id="chooseFile__fileSize"></p>
            </div>
            <i class="ph ph-trash"></i>
        </div>

        <div class="form__check">
            <label>
                <input type="checkbox" name="check">
                <span><i class="ph ph-check"></i></span>
                Я ознайомився та погоджуюсь з політикою конфіденційності
            </label>
        </div>
        <x-primary-button primaryBtnText="Надіслати" type="submit" primaryClass="form__btn" disabled="disabled" />
    </form>
    <div class="feedback__details">

        <p class="feedback__subtitle">
            Ми завжди раді спілкуванню! Якщо у вас виникли додаткові запитання, потрібна детальніша консультація або ви шукаєте надійного партнера для співпраці — не вагайтесь звертатися.
            <br>Наша команда із задоволенням допоможе розібратись у деталях, надасть відповіді на всі ваші запити, а також розгляне пропозиції щодо спільних проєктів.
            <br>Заповніть форму нижче або напишіть нам напряму — ми обов’язково відповімо якнайшвидше. Спілкування з вами для нас — не просто формальність, а перший крок до ефективної взаємодії.
        </p>

        <div class="feedback__contactInfo">
            <hr>
            <h3>Номер телефону</h3>
            <h2>+38 097 777 77 77</h2>
            <hr>
            <h3>Пошта</h3>
            <h2>example@gmail.com</h2>
            <hr>
        </div>

        <div class="feedback__socialLinks">
            @foreach ($socialLinks as $link)
            <a href="{{ $link['anchor'] }}"><i class="{{ $link['icon'] }}"></i></a>
            @endforeach
        </div>
    </div>
</div>