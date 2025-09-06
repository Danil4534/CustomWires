@php
$questions = [
[
'id' => 1,
'question' => 'Вкажіть довжину кабелю',
'unit' => 'см',
'answers' => [50, 100, 150, 200, 300]
],
[
'id' => 2,
'question' => 'Зачистити сторону А?',
'unit' => 'см',
'answers' => ['Ні', 'Так [value]', 'Так [value]','Так [value]','Так [value]']
],
[
'id' => 3,
'question' => 'Повне зняття ізоляції сторона А?',
'unit' => '',
'answers' => ['Ні', 'Так']
],
[
'id' => 4,
'question' => 'Скручувати жили сторона А?',
'unit' => '',
'answers' => ['Ні', 'Так']
],
[
'id' => 5,
'question' => 'Залуджена сторона А?',
'unit' => '',
'answers' => ['Ні', 'Так']
],
[
'id' => 6,
'question' => 'Накінечник сторона А?',
'unit' => '',
'answers' => ['Ні', 'Так']
],
];
@endphp

<div class="quiz__container">
    <div class="quiz__breadcrumbs">
        <p><a href="{{ route('page.Home') }}">Головна</a>/<a href="{{ route('page.Quiz') }}">Підібрати дріт</a></p>
    </div>

    <div class="quiz__content">
        <ul id="answersList" class="quiz__questions">
            @foreach($questions as $qIndex => $question)
            <li data-index="{{ $qIndex }}" class="question">
                <details>
                    <summary class="quiz__question">
                        <div class="question__content">
                            <h1>
                                <span>Запитання {{ $qIndex+1 }}:</span>
                                {{ $question['question'] }}<span class="selected-answer"></span>
                            </h1>
                            <x-ghost-btn ghostBtnIconLeftSide="ph-fill ph-pencil"></x-ghost-btn>
                        </div>
                    </summary>
                    <div class="question__answers">
                        <ul>
                            @foreach($question['answers'] as $aIndex => $answer)
                            <li>
                                <label for="answer_{{ $qIndex }}_{{ $aIndex }}">
                                    <p>{{ $answer }}</p>
                                    @if($question['unit'] && mb_strtolower($answer) !== 'ні')
                                    <span>{{ $question['unit'] }}</span>
                                    @endif
                                </label>
                                <input type="radio"
                                    id="answer_{{ $qIndex }}_{{ $aIndex }}"
                                    name="question_{{ $qIndex }}"
                                    value="{{ $answer }}">
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="quiz__controls">
                        <x-secondary-button secondaryBtnText="пропустити" secondaryClass="skipBtn" data-q="{{ $qIndex }}" />
                        <div class="quiz__nav">
                            <x-secondary-button secondaryBtnText="назад" secondaryBtnIconLeftSide="ph ph-caret-left" secondaryClass="backBtn" data-q="{{ $qIndex }}" />
                            <x-primary-button primaryBtnText="{{ $qIndex === 5 ? 'Фініш' : 'Далі' }}" primaryBtnIconRightSide="ph ph-caret-right" primaryClass="nextBtn" data-q="{{ $qIndex }}" />
                        </div>
                    </div>
                </details>
            </li>
            @endforeach
        </ul>
    </div>
</div>