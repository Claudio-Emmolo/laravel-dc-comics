const editForm = document.getElementById('edit-form')
const showBtn = document.querySelector('button.edit-btn')

showBtn.classList.add("d-none")

editForm.addEventListener('change', (event) => {
    showBtn.classList.remove("d-none")
});