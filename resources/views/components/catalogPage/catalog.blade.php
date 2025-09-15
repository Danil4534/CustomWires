@php
$count=1
@endphp

<div class="catalog__container">
    <div class="catalog__breadcrumbs">
        <p><a href="{{ route('page.Home') }}">Головна</a>/<a href="{{ route('page.catalog') }}">Каталог</a></p>
    </div>
    <div class="catalog__actions">
        <button class="catalog__FilterBtn"><i class="ph ph-funnel"></i> Фільтр</button>
        <button class="catalog__PopularBtn">Популярні <i class="ph-fill ph-caret-down"></i></button>
    </div>
    <div class="catalog__wrapper">
        <div class="catalog__filter">
            <div class="catalog__filter-content">
                @include('components.filter.filterContent' ,['products'=>$products])
            </div>
            <x-primary-button primaryBtnText="Показати ({{ $count }})" primaryClass="showProducts" />
        </div>
        <div class="catalog__list__wrapper">

            <div class="catalog__list__header__wrapper">

                <div class="catalog__list__header">
                    <h1 class="catalog__CountOfProducts"> Товарів знайдено: <span>{{ count($products) }}</span> </h1>
                    <h1 class="catalog__sort">Сортувати:
                        <select>
                            <option value="" default>За популярністю</option>
                            <option value="" default>Від дешевих до дорогих</option>
                            <option value="" default>Від дорогих до дешевих</option>
                        </select>
                        <i class="ph-fill ph-caret-down"></i>
                    </h1>
                </div>
                <div class="catalog__list__filters">
                    <p>Обрані фільтри:</p>
                    <div class="list__filters__wrapper">
                        <ul>
                            <x-secondary-button secondaryBtnText="Видалити все" secondaryClass="removeAllFiltersBtn" />
                        </ul>

                    </div>

                </div>
            </div>
            <div class="catalog__listOfProducts__wrapper" id="catalog__list">
                @foreach ($products as $product )
                <x-product-card :product="$product" />
                @endforeach
            </div>
            <div class="catalog__getMore">
                <x-primary-button primaryBtnText="Показати більше" primaryBtnIconLeftSide="ph ph-arrows-clockwise" id="getMore"></x-primary-button>
            </div>
            <div class="catalog__pagination" id="catalog__pagination"></div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const allFiltersInputCatalog = document.querySelectorAll(".catalog__filter-content input[type='checkbox']");
        const allFilterInputFromModal = document.querySelectorAll(".filterModal__body input[type='checkbox']")
        const filterListParent = document.querySelector('.catalog__list__filters')
        const filterList = document.querySelector(".catalog__list__filters ul");
        const checkedFilters = [];
        const removeAllFiltersBtn = document.querySelector('.removeAllFiltersBtn')
        const titleCheckedFilters = document.querySelector('.catalog__list__filters p')

        function addFilter(name) {
            if (filterList.querySelector(`li[data-filter="${name}"]`)) return;
            if (window.innerWidth >= 1440) {
                titleCheckedFilters.style.display = 'flex'
                filterListParent.style.display = 'flex'
            }
            const li = document.createElement("li");
            li.dataset.filter = name;
            li.innerHTML = `<span>${name}</span> <i class="ph ph-x"></i>`;
            li.querySelector("i").addEventListener("click", () => {
                li.remove();
                const cb = [...allFiltersInputCatalog, ...allFilterInputFromModal].find(c => c.value === name);
                if (cb) cb.checked = false;
                const index = checkedFilters.indexOf(name);
                if (index > -1) checkedFilters.splice(index, 1);
                updateCount();
                toggleRemoveAllVisibility();
            });


            filterList.insertBefore(li, removeAllFiltersBtn);
            toggleRemoveAllVisibility();
        }

        function toggleRemoveAllVisibility() {
            if (filterList.querySelectorAll('li[data-filter]').length === 0) {
                removeAllFiltersBtn.style.display = 'none';
                titleCheckedFilters.style.display = 'none'
                filterListParent.style.display = 'none'
            } else {
                removeAllFiltersBtn.style.display = 'inline-flex';
            }
        }

        removeAllFiltersBtn.addEventListener('click', () => {
            const allFilterItems = filterList.querySelectorAll('li');
            allFilterItems.forEach(item => item.remove());
            [...allFiltersInputCatalog, ...allFilterInputFromModal].forEach(cb => cb.checked = false);
            checkedFilters.length = 0;
            updateCount();
            removeAllFiltersBtn.style.display = 'none';
            titleCheckedFilters.style.display = 'none'
            filterListParent.style.display = 'none'
        })


        function removeFilter(name) {
            const li = filterList.querySelector(`li[data-filter="${name}"]`);
            if (!li) {
                removeAllFiltersBtn.style.display = 'none';
            }
            if (li) li.remove();
        }

        function updateCount() {
            const countSpan = document.querySelector(".filterCount");
            if (countSpan) {
                countSpan.textContent = `(${checkedFilters.length})`;
            }
        }


        allFilterInputFromModal?.forEach(input => {
            input.addEventListener('change', () => {
                const name = input.getAttribute('value');
                if (input.checked) {
                    checkedFilters.push(name);
                    addFilter(name);
                } else {
                    const index = checkedFilters.indexOf(name);
                    if (index > -1) checkedFilters.splice(index, 1);
                    removeFilter(name);
                }
                updateCount();
            });
        });

        allFiltersInputCatalog.forEach(input => {
            input.addEventListener('change', () => {
                const name = input.getAttribute('value');
                if (input.checked) {
                    checkedFilters.push(name);
                    addFilter(name);
                } else {
                    const index = checkedFilters.indexOf(name);
                    if (index > -1) checkedFilters.splice(index, 1);
                    removeFilter(name);
                }
                updateCount();
            });
        });
    });
</script>