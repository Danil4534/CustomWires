document.addEventListener('DOMContentLoaded', () => {
        const courierRadio = document.querySelector('#courier');
        const departmentRadio = document.querySelector('#department');
        const courierContent = document.querySelector('.form__delivery__courier');
        const anotherCustomer = document.querySelector('#checkAnotherCustomer');
        const anotherCustomerInfo = document.querySelector('.form__delivery__checkAnotherCustomer__hidden');
        const commentCheck = document.querySelector('#checkAddComment');
        const commentField = document.querySelector('.form__delivery__comment');
        const departmentInput = document.querySelector('input[name="post__department"]');
        const departmentLabel = document.querySelector(`label[for="post__department"]`);

        function setupPhoneInput(input) {
            if (!input) return;

            input.addEventListener("focus", () => {
                if (!input.value.startsWith("+380")) {
                    input.value = "+380 ";
                }
            });

            input.addEventListener("blur", () => {
                if (input.value.trim() === "+380") {
                    input.value = "";
                }
            });

            input.addEventListener("keydown", (e) => {
                const start = input.selectionStart;

                if (start < 5) {
                    if (!["ArrowRight", "ArrowLeft", "Tab"].includes(e.key)) {
                        e.preventDefault();
                    }
                }
                if (!/[0-9]/.test(e.key) && !["Backspace", "Delete", "ArrowLeft", "ArrowRight", "Tab"].includes(e.key)) {
                    e.preventDefault();
                }
            });

            input.addEventListener("input", () => {
                if (!input.value.startsWith("+380")) {
                    input.value = "+380 ";
                }
                input.value = "+380 " + input.value.slice(5).replace(/\D/g, "");
            });
        }


        setupPhoneInput(document.querySelector('input[name="phoneNumber"]'));
        setupPhoneInput(document.querySelector('input[name="anotherCustomer__phoneNumber"]'));
        courierRadio?.addEventListener('change', () => {
            courierContent.classList.toggle('hidden', !courierRadio.checked);
            if (courierRadio.checked) {
                if (departmentLabel) departmentLabel.textContent = "Вулиця";
                departmentInput.setAttribute("placeholder", "Вкажіть вулицю доставки");
            }
        });

        departmentRadio?.addEventListener('change', () => {
            courierContent.classList.toggle('hidden', departmentRadio.checked);
            if (departmentRadio.checked) {
                if (departmentLabel) departmentLabel.textContent = "Відділення";
                departmentInput.setAttribute("placeholder", "Вкажіть відділення НП");
            }
        });

        commentCheck?.addEventListener('change', () => {
            commentField.classList.toggle('hidden', !commentCheck.checked);
        });

        anotherCustomer?.addEventListener('change', () => {
            anotherCustomerInfo.classList.toggle('hidden', !anotherCustomer.checked);
        });
    });