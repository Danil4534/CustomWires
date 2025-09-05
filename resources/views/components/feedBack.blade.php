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
                <input type="text" placeholder="Введіть ваше ім'я" name="name">
                <i class="ph ph-x" id="clearIconField"></i>
            </div>
        </div>
        <div class="form__phoneNumber">
            <label for="phoneNumber">Номер телефону<span>*</span></label>
            <div class="input__wrapper">
                <input type="text" placeholder="+380 -- --- -- --" name="phoneNumber">
                <i class="ph ph-x" id="clearIconField"></i>
            </div>
        </div>
        <div class="form__comment">
            <label for="comment">Коментар<span>*</span></label>
            <textarea name="comment" id="usercomment" placeholder="Не обов’язково"></textarea>
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
        <x-primary-button primaryBtnText="Надіслати" type="submit" primaryClass="form__btn" disabled />
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


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const feedBackDropBox = document.querySelector('.feedback__drop');
        const dropInputHidden = document.querySelector('#inputFile');
        const dropBtn = document.querySelector('.chooseBtn');
        const chooseFileBox = document.querySelector('.feedback__drop__chooseFile');
        const fileNameText = document.querySelector('#chooseFile__fileName');
        const fileSizeText = document.querySelector('#chooseFile__fileSize');
        const trashIcon = chooseFileBox.querySelector('.ph-trash');

        feedBackDropBox.addEventListener('click', () => {
            dropInputHidden.click();
        });

        dropBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            dropInputHidden.click();
        });

        dropInputHidden.addEventListener('change', () => {
            chooseFileBox.classList.add('active');
            const file = dropInputHidden.files[0];
            if (file) {
                const fileName = file.name;
                const fileSizeMB = (file.size / (1024 * 1024)).toFixed(2);
                console.log(fileNameText)
                fileNameText.textContent = fileName;
                fileSizeText.textContent = `${fileSizeMB} MB`;

            }
        });
        trashIcon.addEventListener('click', () => {
            dropInputHidden.value = '';
            chooseFileBox.classList.remove('active');
            fileNameText.textContent = '';
            fileSizeText.textContent = '';
        });
        const clearIcons = document.querySelectorAll('#clearIconField')
        clearIcons.forEach(item => {
            item.addEventListener('click', (e) => {
                const wrapper = e.target.closest('.input__wrapper');
                const input = wrapper.querySelector('input')
                if (input) {
                    input.value = ''
                    input.focus()
                }
            })
        })


    });
</script>