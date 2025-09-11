
        const feedBackDropBox = document.querySelector('.feedback__drop');
        const dropInputHidden = document.querySelector('#inputFile');
        const dropBtn = document.querySelector('.chooseBtn');
        const chooseFileBox = document.querySelector('.feedback__drop__chooseFile');
        const fileNameText = document.querySelector('#chooseFile__fileName');
        const fileSizeText = document.querySelector('#chooseFile__fileSize');
        const trashIcon = chooseFileBox?.querySelector('.ph-trash');
        const form = document.querySelector('.feedback__form');
        const formBtn = document.querySelector('.form__btn');
        const checkBox = form?.querySelector('input[type="checkbox"]');
        const clearIcons = document.querySelectorAll('#clearIconField');
        const phoneInput = form?.querySelector('input[name="phoneNumber"]');


        const dropBoxAnim = document.querySelector('.feedback__drop__chooseFile__anim')
        const dropBoxAnimNameFile= document.querySelector('#chooseFile__fileName__anim')
        const dropBoxAnimFileSize= document.querySelector('#chooseFile__fileSize__anim')


        phoneInput?.addEventListener("focus", () => {
            if (!phoneInput.value.startsWith("+380")) {
                phoneInput.value = "+380 ";
            }
        });

        phoneInput?.addEventListener("blur", () => {
            if (phoneInput.value.trim() === "+380") {
                phoneInput.value = "";
            }
        });

        phoneInput?.addEventListener("keydown", (e) => {
            const start = phoneInput.selectionStart;
            if (start <= 5 && (e.key === "Backspace" || e.key === "Delete")) {
                e.preventDefault();
            }
        });
        clearIcons.forEach(item => {
            item.addEventListener('click', (e) => {
                const wrapper = e.target.closest('.input__wrapper');
                const input = wrapper.querySelector('input');
                if (input.name === "phoneNumber") {
                    input.value = "+380 ";
                    input.focus();
                } else {
                    input.value = "";
                    input.focus();
                }
            });
        });

const checkForm = () => {
    const requiredFields = form?.querySelectorAll('input[required], textarea[required]');
    let allFilled = true;

    requiredFields?.forEach(field => {
        if (!field.value.trim()) {
            allFilled = false;
        }
    });

    if (!dropInputHidden?.files.length) {
        allFilled = false;
    }
    if (!checkBox?.checked) {
        allFilled = false;
    }

    if (formBtn) {
        formBtn.disabled = !allFilled;
    }
};
        checkForm();



        form?.addEventListener('input', checkForm);
        dropInputHidden?.addEventListener('change', checkForm);
        checkBox?.addEventListener('change', checkForm);
        feedBackDropBox?.addEventListener('click', () => {
            dropInputHidden.click();
        });
        dropBtn?.addEventListener('click', (e) => {
            e.stopPropagation();
            dropInputHidden.click();
        });
        
        feedBackDropBox?.addEventListener("drop", (e) => {
            e.preventDefault();
            feedBackDropBox.classList.remove("dragover");
            const files = e.dataTransfer.files;
            if (files.length > 0) {
                dropInputHidden.files = files;
                chooseFileBox.classList.add("active");

                const file = files[0];
                const fileName = file.name;
                const fileSizeMB = (file.size / (1024 * 1024)).toFixed(2);

                fileNameText.textContent = fileName;
                fileSizeText.textContent = `${fileSizeMB} MB`;

                checkForm();
            }
        });
      dropInputHidden?.addEventListener("change", () => {
    if (dropInputHidden.files.length > 0) {
        const file = dropInputHidden.files[0];
        const fileName = file.name;
        const fileSizeMB = (file.size / (1024 * 1024)).toFixed(2);
        dropBoxAnim.classList.add('active');
        dropBoxAnimFileSize.textContent = `${fileSizeMB} MB`;
        dropBoxAnimNameFile.textContent = fileName;
        setTimeout(() => {
            dropBoxAnim.classList.remove('active');
            chooseFileBox.classList.add("active");
            fileNameText.textContent = fileName;
            fileSizeText.textContent = `${fileSizeMB} MB`;
            checkForm();
        }, 2000);
    }
});
        trashIcon?.addEventListener('click', () => {
            dropInputHidden.value = '';
            chooseFileBox.classList.remove('active');
            fileNameText.textContent = '';
            fileSizeText.textContent = '';
            checkForm();
        });
