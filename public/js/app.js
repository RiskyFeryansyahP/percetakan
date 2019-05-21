document.querySelectorAll('.modal-button').forEach((element) => {
    element.addEventListener('click', () => {
        const target = document.querySelector(element.getAttribute('data-target'))
        const id = element.getAttribute('data-modal') // mengambil value dari data-modal(seperti data-target) di modal-button
        if(id != null)
        {
            const data = id.split("-") // pisah tiap (-) kedalam array
            console.log(data)
            console.log(id)

            // document.getElementById("kode_barang").value = data[0]
            // document.getElementById("nama_barang").value = data[1]
            // document.getElementById("stock").value = data[2]

            input = document.querySelectorAll("#input")
            for (let i = 0; i < input.length; i++) {
                input[i].value = data[i]
            }
        }

        target.classList.add('is-active')

        target.querySelector('.modal-close').addEventListener('click', () => {
            target.classList.remove('is-active')
        })

        target.querySelector('.button-cancel').addEventListener('click', () => {
            target.classList.remove('is-active')
        })
    })
})