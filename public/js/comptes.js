const WEBURL = "http://localhost:7000"
const inputTel = document.querySelector('#inputTel')
const numCB = document.querySelector('#numCB')
const tBody = document.querySelector('#tBody')
const selectType = document.querySelector('#selectType')

let comptes = []

//  Appels de fonctions
document.addEventListener('DOMContentLoaded', async (event) => {
    let data = await findAllComptes()
    comptes = [...data]

    numCB.addEventListener('input', function () {
        const numcpt = findCompteByNum(numCB.value);
        tBody.innerHTML=generateTbody(numcpt) 
    })
    
    inputTel.addEventListener('input', function () {
        const telcpt = findCompteByTel(inputTel.value);
        tBody.innerHTML=generateTbody(telcpt) 
    })

    selectType.addEventListener('input', function () {
        const filter = filterByType(selectType.value)
        tBody.innerHTML = generateTbody(filter)
    })
})



//  Fonctions
async function findAllComptes() {
    let response = await fetch(`${WEBURL}/?ressource=api&controller=compte`)
    data = await response.json()
    return data
}

function findCompteByTel(saisi) {
    if (saisi != "") {
        return comptes.filter(function (u) {
            return u.telephone.startsWith(saisi) == true
        })
    }
    return []
}

function findCompteByNum(saisi) {
    if (saisi != "") {
        return comptes.filter(function (u) {
            return u.numero.toUpperCase().startsWith(saisi.toUpperCase()) == true
        })
    }
    return []
}

function generateTbody(cpts) {
    // alert('ok')
    let html = ""
    for (const cpt of cpts) {
        html += generateCompte(cpt)
    }
    return html
}

function generateCompte(compte) {
    return ` 
    <tr>
        <td class="text-center"> ${compte.numero} </td>
        <td class="text-center"> ${compte.solde} </td>
        <td class="text-center"> ${compte.libtc} </td>
        <td class="text-center"> ${compte.telephone} </td>
        <td class="text-center"> ${compte.email} </td>
        <td class="text-center">
            <img src="<?=WEBROOT?>/assets/images/img1.jpg" alt="img" style="width:35px; height:35px;"  class="rounded-circle hover"/>
        </td>
    </tr> `
}

function filterByType() {
    let selectedtype = selectType.value
    let filteredComptes = comptes.filter(function (u) {
        return u.typecpt == selectedtype
    })
    return filteredComptes
}

