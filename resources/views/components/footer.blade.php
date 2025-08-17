@php
$socialLinks =[
['icon'=>'ph ph-instagram-logo', 'anchor'=>''],
['icon'=>'ph ph-facebook-logo', 'anchor'=>''],
['icon'=>'ph ph-telegram-logo', 'anchor'=>''],
['icon'=>'ph ph-youtube-logo', 'anchor'=>'']
]
@endphp

<footer>
    <div class="footer_container_wrapper">
        <div class="footer_container">
            <div class="footer_slogan">
                <x-picture-tag src="{{ asset('assets/footerLogo.svg') }}" />
                <p>Розвивайте технології разом із нами — обирайте якісні рішення, підтримуйте виробництво та рухайте індустрію вперед! </p>
                <div class="footer_methods_payment">
                    <ul>
                        <li><x-picture-tag src="{{ asset('assets/Visa.svg') }}" /></li>
                        <li><x-picture-tag src="{{ asset('assets/Mastercard.svg') }}" /></li>
                        <li><x-picture-tag src="{{ asset('assets/ApplePay.svg') }}" /></li>
                        <li><x-picture-tag src="{{ asset('assets/GooglePay.svg') }}" /></li>
                        <li><x-picture-tag src="{{ asset('assets/Liqpay.svg') }}" /></li>
                    </ul>
                </div>
            </div>
            <div class="footer_contactInfo">
                <div class="contactInfo_socialLinks">
                    <div class="socialLinks">
                        @foreach ($socialLinks as $link )
                        <a href="{{ $link['anchor'] }}"><i class="{{ $link['icon'] }}"></i></a>
                        @endforeach
                    </div>
                    <div class="contactInfo_email contactInfoBox">
                        <p>example@mail.com</p>
                        <i class="ph ph-envelope"></i>
                    </div>
                    <div class="contactInfo_number contactInfoBox">
                        <p>+38 097 777 77 77</p>
                        <i class="ph ph-phone-outgoing"></i>
                    </div>
                </div>
            </div>
            <div class="footer_navLinks">
                <div class="navLinks_Box">
                    <h3>Магазин</h3>
                    <ul>
                        <li><a href="">Головна</a></li>
                        <li><a href="">Підібрати кабель</a></li>
                        <li><a href="">FAQ</a></li>
                        <li><a href="">Калькулятор</a></li>

                    </ul>
                </div>
                <div class="navLinks_Box">
                    <h3>Покупцям</h3>
                    <ul>
                        <li><a href="">Каталог</a></li>
                        <li><a href="">Умови доставки</a></li>
                        <li><a href="">Оплата</a></li>
                        <li><a href="">Обмін і повернення товару</a></li>
                        <li><a href="">Правила користування сайтом</a></li>
                        <li><a href="">Політика конфіденційності</a></li>
                        <li><a href="">Умови користування</a></li>
                    </ul>
                </div>
            </div>
            @include("components.methods_of_payment")
            <div class="footer_contactInfo1024">
                <div class="contactInfo_socialLinks">
                    <div class="socialLinks">
                        @foreach ($socialLinks as $link )
                        <a href="{{ $link['anchor'] }}"><i class="{{ $link['icon'] }}"></i></a>
                        @endforeach
                    </div>
                    <div class="contactInfo_email contactInfoBox">
                        <p>example@mail.com</p>
                        <i class="ph ph-envelope"></i>
                    </div>
                    <div class="contactInfo_number contactInfoBox">
                        <p>+38 097 777 77 77</p>
                        <i class="ph ph-phone-outgoing"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <hr>
            <div class="footer_bottom_content">
                <div>
                    <p>Політика кофіденційності</p>
                    <p>Умови користування</p>
                </div>
                <p>© 2025 СustomWires. Усі права захищені.</p>
            </div>
        </div>
    </div>
</footer>