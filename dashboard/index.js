
document.addEventListener('DOMContentLoaded', () => {
    main().catch((err) => {console.error(err)})
})

async function fetchAllData() {
    const allData = await fetch('./data.php').then((res) => res.json())
    return allData
}

async function main() {
    const tdText = (text) => {
        const td = document.createElement('td')
        td.innerText = text
        return td
    }

    const data = await fetchAllData()
    
    const tableElm = document.createElement('table')

    data.forEach(row => {
        const trElm = document.createElement('tr')

        // ----- Cree 1 td "a la main"
        const tdNom = document.createElement('td')
        tdNom.innerText = row.nom
        trElm.append(tdNom)
        // -----

        // ----- Cree 3 td via une fonction
        trElm.append(tdText(row.prenom))
        trElm.append(tdText(row.mail))
        trElm.append(tdText(row.description))
        // -----

        const tdImage = document.createElement('td')
        const tdImageImg = document.createElement('img')
        tdImageImg.src = row.photo
        tdImage.append(tdImageImg)
        trElm.append(tdImage)

        tableElm.append(trElm)
    });

    document.body.replaceChildren(tableElm)
}
