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
                const cb = [...allFiltersInputCatalog].find(c => c.value === name);
                const cl =  [...allFilterInputFromModal].find(c => c.value === name);
                if(cl) cl.checked= false
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

        removeAllFiltersBtn?.addEventListener('click', () => {
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
    if (li) {
        li.remove();
        const index = checkedFilters.indexOf(name);
        if (index > -1) checkedFilters.splice(index, 1);
    }
    toggleRemoveAllVisibility();
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