const { default: Swal } = require("sweetalert2");

document.addEventListener("DOMContentLoaded", (event) => {

    //Defino la tabla y botones
    const table = document.querySelector('#table');
    const tbody = table.querySelector('tbody');
    const addRowBtn = document.querySelector('#addRowBtn');
    const componentsTableInput = document.querySelector('#componentsTableInput');

    const componentName = document.querySelector('#componentName');
    const componentPercentage = document.querySelector('#componentPercentage');
    const componentCAS = document.querySelector('#componentCAS');

    addRowBtn.addEventListener('click', (event)=>{
        registerComponent();
    });

    function registerComponent() {
        //Primero evaluo si estan bien llenados los campos de cpmponentes
        if ((typeof(componentName.value) !== 'string')) {
            Swal.fire('Error')
        }

    }
});

