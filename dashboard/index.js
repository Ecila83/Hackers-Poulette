document.addEventListener('DOMContentLoaded', async () => {
    try {
        await main();
    } catch (error) {
        console.error(error);
    }
});

async function fetchAllData() {
    const allData = await fetch('./data.php').then((res) => res.json());
    return allData;
}

async function main() {
    const data = await fetchAllData();
    const tableElm = document.createElement('table');
    tableElm.setAttribute('border', '1');

    data.forEach(row => {
        const trElm = document.createElement('tr');

        trElm.append(tdText(row.id));
  
        const tdNom = document.createElement('td');
        tdNom.style.border = '1px solid black';
        tdNom.innerText = row.nom;
        trElm.append(tdNom);
    
        trElm.append(tdText(row.prenom));
        trElm.append(tdText(row.mail));
        trElm.append(tdText(row.description));
 

        const tdImage = document.createElement('td');
        const tdImageImg = document.createElement('img');
        tdImageImg.src = row.photo;
        tdImage.append(tdImageImg);
        trElm.append(tdImage);

        const tdStatus = document.createElement('td');
        tdStatus.append(createStatusDropdown(row.statut, row.id));
        tdStatus.dataset.contactId = row.id;
        const deleteButon = document.createElement('button');
        deleteButon.innerText='suprimer';
        deleteButon.addEventListener('click',()=>{
            trElm.remove();
            updateDeleted(row.id);
        })
        tdStatus.append(deleteButon);
        trElm.append(tdStatus);

        tableElm.append(trElm);
    });

    document.body.replaceChildren(tableElm);
}

const createStatusDropdown = (currentState, contactId) => {
    const dropdown = document.createElement('select');
    ['Non traité', 'Traité'].forEach((statut) => {
        const option = document.createElement('option');
        option.value = statut;
        option.textContent = statut;
        if (statut === currentState) {
            option.selected = true;
        }
        dropdown.appendChild(option);
    });

    dropdown.addEventListener('change', (event) => {
        switch (event.target.value) {
            case 'Non traité':
                updateStatus(contactId, 'Non traité');
                break;
            case 'Traité':
                updateStatus(contactId, 'Traité');
                break;
            default:
                console.error('Invalid status value');
        }
    });
    return dropdown;
};

async function updateStatus(contactId, newStatus) {
    try {
        let formData = new FormData();
        formData.append('id', contactId);
        formData.append('statut', newStatus);

        const response = await fetch('./data.php', {
            method: 'POST',
            body: formData
        });

        if (!response.ok) {
            throw new Error('Failed to update status');
        }

        console.log('Status updated successfully');
    } catch (error) {
        console.error('Error updating status:', error);
    }
}

async function updateDeleted(contactId) {
    try {
        let formData = new FormData();
        formData.append('id', contactId);
        formData.append('deleted', 1);

        const response = await fetch('./data.php', {
            method: 'POST',
            body: formData
        });

        if (!response.ok) {
            throw new Error('Failed to update deleted');
        }

        console.log('deleted updated successfully');
    } catch (error) {
        console.error('Error updating deleted:', error);
    }
}

const tdText = (text) => {
    const td = document.createElement('td');
    td.innerText = text;
    return td;
};




