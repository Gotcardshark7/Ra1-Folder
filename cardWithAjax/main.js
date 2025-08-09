let response = [
    { name: 'carina', descriptionPeople: 'carina es una mujer de tonalidad de piel clara y ojos verdes', ci: 29191345 },
    { name: 'fernanda', descriptionPeople: 'fernanda es una mujer rubia de ojos azules con tonalidad de piel muy clara', ci: 25333212 },
    { name: 'sara', descriptionPeople: 'sara es una mujer con tonalidad de piel morena de ojos color cafe', ci: 30443152 }
];
let dataForCard = [
    { product: 'teipe', descriptionProduct: 'cinta aislante', serialProduct: 212433423 },
    { product: 'pasta termica', descriptionProduct: 'para dicipar calor de componentes electronicos', serialProduct: 2334423234 },
    { product: 'destornillador', descriptionProduct: 'destornillador de estrella de trabajo pesado', serialProduct: 23421233 }
];

let wrap = document.querySelector('.flex');

for (let i in response) {
    let processData = response[i];

    // Crear un contenedor para la tarjeta
    let container = document.createElement('div');
    container.classList.add('container');

    // Crear título
    let title = document.createElement('div');
    let h1 = document.createElement('h1');
    h1.innerHTML = processData.name;
    title.appendChild(h1);
    
    // Crear cuerpo de la tarjeta
    let cardBody = document.createElement('div');
    cardBody.innerHTML = processData.descriptionPeople;

    // Crear pie de tarjeta
    let footCard = document.createElement('div');
    footCard.innerHTML = processData.ci;


    let btn = document.createElement('button');
    btn.innerHTML = 'view';
    // Agregar elementos a la tarjeta
    container.appendChild(title);
    container.appendChild(cardBody);
    container.appendChild(footCard);
    container.appendChild(btn);
    
    // Agregar la tarjeta al contenedor principal
    wrap.appendChild(container);
    let closeBtn = document.createElement('btn');
    closeBtn.classList.add('close');
    closeBtn.innerHTML = 'close';
    let wrapBtnX = document.createElement('div');
    let modal = document.createElement('div');
    let wrapModal = document.createElement('div');
    wrapModal.appendChild(modal);
    modal.classList.add('modal');
    wrapBtnX.appendChild(closeBtn);
    modal.appendChild(wrapBtnX);
    wrapModal.classList.add('wrapModal');
    document.body.appendChild(wrapModal);
    btn.addEventListener('click', function () {
    	if (wrapModal.style.display = 'none') {
    		wrapModal.style.display = 'flex';
    	}
    });
    closeBtn.addEventListener('click', function () {
        if (wrapModal.style.display = 'flex') {
            wrapModal.style.display = 'none';
        }
    });

}







// let response = [{name:'carina', descriptionPeople:'carina es una mujer de tonalidad de piel clara y ojos verdes', ci:29191345}, 
// 				{name:'fernanda', descriptionPeople:'fernanda es una mujer rubia de ojos azules con tonalidad de piel muy clara', ci:25333212}, 
// 				{name:'sara', descriptionPeople: 'sara es una mujer con tonalidad de piel morena de ojos color cafe', ci:30443152}];

// let wrap = document.querySelector('.flex');
// let count = 0;

// for (let i in response) {
// 	let processDAta = response[i];
// 	for (let x in processDAta) {
// 		let container = document.createElement('div');
// 		let tittle = document.createElement('div');
// 		let h1 = document.createElement('h1');
// 		let cardBody = document.createElement('div');
// 		let footCard = document.createElement('div');
// 		container.classList.add('container');
// 		tittle.appendChild(h1)
// 		container.appendChild(tittle);
// 		container.appendChild(cardBody);
// 		container.appendChild(footCard);
// 		wrap.appendChild(container);

// 			if ( x == 'name') {
// 				console.log(processDAta[x]);
// 				h1.innerHTML = processDAta[x];
// 			}	
// 			else if ( x == 'descriptionPeople') {
// 				console.log(processDAta[x]);
// 				cardBody.innerHTML = processDAta[x];
// 			}
// 			else if ( x == 'ci') {
// 				console.log(processDAta[x]);
// 				footCard.innerHTML = processDAta[x];
// 			}
// 		count++;
// 		}
// }


