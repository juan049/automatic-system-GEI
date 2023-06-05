document.addEventListener("DOMContentLoaded", (event) => {
    //Defino la tabla y botones
    const table = document.querySelector('#table');
    const tbody = table.querySelector('tbody');
    const addRowBtn = document.querySelector('#addRowBtn');
    let rowCounter = 1;

    addRowBtn.addEventListener('click', (event)=>{
        addRow();
    });

    const deleteBtn1 = document.querySelector('#deleteBtn1');
    deleteBtn1.addEventListener('click', (e)=>{
        deleteRow(deleteBtn1.parentElement);
    });

    //Función para agregar una nueva fila
    function addRow() {
        //Creo un contador
        rowCounter++;

        //Creo el row
        const tr = document.createElement('TR');

        //Creo el header
        const th = document.createElement('TH');
        th.innerText = rowCounter;
        tr.appendChild(th);

        //TODO Cambiar innerHTML Por
        //Creo el input del nombre
        const tdName = document.createElement('TD');
        let nameInput = document.createElement('INPUT');
        nameInput.setAttribute('type', 'text');
        nameInput.setAttribute('id', `component-name-${rowCounter}`);
        nameInput.setAttribute('name', `component-name-${rowCounter}`);
        tdName.appendChild(nameInput);
        tr.appendChild(tdName);

        //Creo el input del porcentage
        const tdPercentage = document.createElement('TD');
        let percentageInput = document.createElement('INPUT');
        percentageInput.setAttribute('type', 'number');
        percentageInput.setAttribute('id', `component-percentage-${rowCounter}`);
        percentageInput.setAttribute('name', `component-percentage-${rowCounter}`);
        percentageInput.setAttribute('min', 0);
        percentageInput.setAttribute('max', 100)
        tdPercentage.appendChild(percentageInput);
        tr.appendChild(tdPercentage);

        //Creo el input del Numero CAS
        const tdCASNumber = document.createElement('TD');
        let casNumberInput = document.createElement('INPUT');
        casNumberInput.setAttribute('type', 'text');
        casNumberInput.setAttribute('id', `component-cas_number-${rowCounter}`);
        casNumberInput.setAttribute('name', `component-cas_number-${rowCounter}`);
        tdCASNumber.appendChild(casNumberInput);
        tr.appendChild(tdCASNumber);

        //Creo el input del boton de borrar
        const tdDeleteRowBtn = document.createElement('TD');
        const tdClasses = ['text-center', 'text-danger', 'cursor-pointer', 'deleteRowBtn'];

        tdClasses.forEach(className => {
            tdDeleteRowBtn.classList.add(className);
        });
        tdDeleteRowBtn.classList.add(['text-center', 'text-danger', 'cursor-pointer', 'deleteRowBtn']);
        tdDeleteRowBtn.innerHTML = `<i class="bi bi-trash"></i>`;

        //Agrego el event listener para borrar
        tdDeleteRowBtn.addEventListener('click', (e)=>{
            deleteRow(tr);
        });


        tr.appendChild(tdDeleteRowBtn);
        
        //Agrego el row dentro del body
        tbody.appendChild(tr);
    }

    function deleteRow(tr) {
        tr.remove();
    }


    
});

