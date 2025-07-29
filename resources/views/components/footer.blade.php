@php
$socialLinks =[
['icon'=>'ph ph-instagram-logo', 'anchor'=>''],
['icon'=>'ph ph-facebook-logo', 'anchor'=>''],
['icon'=>'ph ph-telegram-logo', 'anchor'=>''],
['icon'=>'ph ph-youtube-logo', 'anchor'=>'']
]
@endphp

<footer>
    <x-picture-tag src="{{ asset('assets/footerLogo.svg') }}" />
    <p>Розвивайте технології разом із нами — обирайте якісні рішення, підтримуйте виробництво та рухайте індустрію вперед! </p>
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
</footer>