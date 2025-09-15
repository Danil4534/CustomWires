document.addEventListener("DOMContentLoaded", function () {
    const products = Array.from(document.querySelectorAll("#catalog__list > *"));
    const getMore = document.querySelector('#getMore')

    let pageSize;
    let currentPage = 1;

    function updatePageSize() {
        if (window.innerWidth <= 375) {
            pageSize = 12;
        } else if (window.innerWidth <= 768) {
            pageSize = 12;
        } else if (window.innerWidth <= 1024) {
            pageSize = 25;
        } else if (window.innerWidth <= 1440) {
            pageSize = 24;
        } else {
            pageSize = 25;
        }
    }
    updatePageSize();
    let visibleCount = pageSize;
    getMore?.addEventListener('click', () => {
        pageSize += 20;
        showPage(currentPage);
    });

    function showPage(page) {
        currentPage = page;
        const start = (page - 1) * pageSize;
        const end = start + pageSize;

        products.forEach((el, i) => {
            el.style.display = (i >= start && i < end) ? "block" : "none";
        });

        if (getMore) {
            if (visibleCount >= products.length) {
                getMore.style.display = "none";
            }
        }
        renderPagination();
    }

    function renderPagination() {
        const totalPages = Math.ceil(products.length / pageSize);
        const pagination = document.getElementById("catalog__pagination");
        if (pagination) {
            pagination.innerHTML = "";
        }

        if (currentPage > 1) {
            const prev = document.createElement("button");
            prev.innerHTML = "<i class='ph-fill ph-caret-left'></i>";
            prev.addEventListener("click", () => {
                window.scrollTo(0, 0);
                showPage(currentPage - 1);
            });
            pagination.appendChild(prev);
        }

        let pages = [];
        if (totalPages <= 4) {
            pages = Array.from({ length: totalPages }, (_, i) => i + 1);
        } else {
            if (currentPage <= 3) {
                pages = [1, 2, 3, 4, "...", totalPages];
            } else if (currentPage >= totalPages - 2) {
                pages = [1, "...", totalPages - 3, totalPages - 2, totalPages - 1, totalPages];
            } else {
                pages = [1, "...", currentPage - 1, currentPage, currentPage + 1, totalPages];
            }
        }

        pages.forEach(p => {
            if (p === "...") {
                const dots = document.createElement("span");
                dots.textContent = "...";
                pagination.appendChild(dots);
            } else {
                const btn = document.createElement("button");
                btn.textContent = p;
                if (p === currentPage) btn.classList.add("active");
                btn.addEventListener("click", () => {
                    showPage(p);
                    window.scrollTo(0, 0);
                });
                pagination.appendChild(btn);
            }
        });

        if (currentPage < totalPages) {
            const next = document.createElement("button");
            next.innerHTML = "<i class='ph-fill ph-caret-right'></i>";
            next.addEventListener("click", () => {
                showPage(currentPage + 1);
                window.scrollTo(0, 0);
            });
            pagination.appendChild(next);
        }
    }


    window.addEventListener("resize", () => {
        updatePageSize();
        showPage(1); 
    });

    showPage(currentPage);
});