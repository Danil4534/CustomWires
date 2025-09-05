@php
$questions =[
['question'=>'Як оформити замовлення?', 'answer'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'],
['question'=>'Як довго чекати на замовлення?', 'answer'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'],
['question'=>'Я не інженер. Як обрати дріт?', 'answer'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'],
['question'=>'Я маю готове Тз. Скільки це коштуватиме?', 'answer'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.']
]
@endphp

<div class="questions_container_wrapper">
    <div class="questions_container">

        <h1>часті питання</h1>
        <div class="questions_content">
            @foreach ($questions as $question )
            <details>
                <summary>
                    <i class="icon ph ph-plus"></i>
                    <i class="icon ph ph-minus"></i>
                    {{ $question['question'] }}
                </summary>
                <div class="details-content">
                    <p>{{ $question['answer'] }}</p>
                </div>
            </details>
            @endforeach
        </div>
    </div>
</div>
<script>
    const navToggle = document.querySelector(
        '[aria-controls="primary-navigation"]'
    );

    navToggle.addEventListener("click", () => {
        const navOpened = navToggle.getAttribute("aria-expanded");

        if (navOpened === "false") {
            navToggle.setAttribute("aria-expanded", true);
        } else {
            navToggle.setAttribute("aria-expanded", false);
        }
    });
</script>