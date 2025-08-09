let container = document.querySelector('#dataContainer');
let table = document.querySelector('.table');
fetch('dataBase.php')
    .then(response => {
        if(!response.ok) {
            throw new Error('network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        for (let i = 0; i < data.length; i++) {     
            console.log(data[i].nombre)
        }
        for (let i = 0; i < table.rows.length; i++) {
           let row = table.rows[i];
           row.innerHTML = data[i].nombre;
            console.log(row);
        }
    })
    .catch(error => {
        console.log('There has been a problem with your fetch operation', error);
    });