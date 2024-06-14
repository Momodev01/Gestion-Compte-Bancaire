const eltsPerPage = 2

function getDataPaginate(demandes, start, eltsPerPage) {
    let fisrtPosition = (start - 1) * eltsPerPage
    return {
        data: demandes.slice(fisrtPosition, eltsPerPage),
        pages: Math.ceil(demandes.length / eltsPerPage)
    }
}

function generatePagination(dataPaginate, page) {
    const {data, pages} = dataPaginate
    let paginate = ""
    for (let i = 1; i <= pages; i++) {
        paginate += `<li class="${i === page ? 'active' : ''}">
                        <a href="#" data-page="${i}">${i}</a>
                    </li>`
    }
}