const inputs = Array.from(document.querySelectorAll('input'))
const loginBtn = document.querySelector('#loginBtn')

let disabledBtn = true

        // LES APPELS DE FONCTIONS
// init()

for (const input of inputs) {  
    input.addEventListener('input', function () {
        // alert('Lepp Nice 😜')
        if (fieldRequired(input)) {
            success(input)
        }
    let validInputs = Array.from(document.querySelectorAll('is-valid'))
    disabledBtn = (validInputs.length != inputs.length)
    // activeButton(loginBtn)
    })
}


        // LES FONCTIONS

function fieldRequired(field) {
    if (field.value.trim() === '') {
        error(field)
        return false
    }
    return true
}

function error(field, sms = "Champ obligatoire") {
    field.classList.remove("is-valid")
    field.classList.add("is-invalid")
    field.nextElementSibling.innerHTML = sms
}

function success(field) {
    field.classList.remove("is-invalid")
    field.classList.add("is-valid")
}

function activeButton(btn) {
    if (disabledBtn) {
        btn.setAttribute("disabled", true)
    } else {
        btn.removeAttribute("disabled")
    }
}

