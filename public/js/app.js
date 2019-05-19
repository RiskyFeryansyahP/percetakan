document.querySelectorAll('.modal-button').forEach((element) => {
    element.addEventListener('click', () => {
        const target = document.querySelector(element.getAttribute('data-target'))
        target.classList.add('is-active')

        target.querySelector('.modal-close').addEventListener('click', () => {
            target.classList.remove('is-active')
        })

        target.querySelector('.button-cancel').addEventListener('click', () => {
            target.classList.remove('is-active')
        })
    })
})