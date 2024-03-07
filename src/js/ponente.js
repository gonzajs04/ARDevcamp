(()=>{
    const ponentesInput = document.querySelector('#ponentes');

    if(ponentesInput){
        const listadoPonentes = document.querySelector('#listado-ponentes');

        const ponenteHidden = document.querySelector('[name="ponente_id"]');
        let ponentes = [];
        let ponentesFiltrados = [];


        obtenerPonentes();
        
        ponentesInput.addEventListener('input',buscarPonentes);

        async function obtenerPonentes(){
            const url = `/api/ponentes`;
            const respuesta = await fetch(url);
            const resultado = await respuesta.json();
            formatearPonentes(resultado)
        }

        function formatearPonentes(arrayPonentes = []){
            ponentes = arrayPonentes.map(ponente=>{
                return{
                    nombre: `${ponente.nombre} ${ponente.apellido}`.trim(),
                    id:ponente.id
                }
            });


        }

        function buscarPonentes(e){
            const busqueda = e.target.value;
            if(busqueda.length>2){
                const expresion = new RegExp(busqueda,"i");
                ponentesFiltrados = ponentes.filter(ponente=>{
                    if(ponente.nombre.toLowerCase().search(expresion) != -1){
                        return ponente;
                    }   
                });

            }else{
                ponenteHidden.value = '';
                ponentesFiltrados = [];
            }
            
            mostrarPonentes()

        }

        function mostrarPonentes(){
            
            while(listadoPonentes.firstChild){
                listadoPonentes.removeChild(listadoPonentes.firstChild);
            }


            if(ponentesFiltrados.length>0){
                ponentesFiltrados.forEach(ponente=>{
                    const ponenteHTML = document.createElement('LI');
                    ponenteHTML.classList.add('listado-ponentes__ponente');
                    ponenteHTML.textContent = ponente.nombre;
                    ponenteHTML.dataset.ponenteId = ponente.id;
                    ponenteHTML.onclick = seleccionarPonente;
    
                    //Añadir al DOM
                    listadoPonentes.appendChild(ponenteHTML);
    
                })
            }else{
                const noResultados = document.createElement('P');
                noResultados.classList.add('listado-ponentes__no--resultado');
                noResultados.textContent = "No hay resultados para tu busqueda";
                listadoPonentes.appendChild(noResultados);

            }

           
        }

        function seleccionarPonente(e){
            const ponente = e.target;
            // Remover las clase previa
            const ponentePrevio = document.querySelector('.listado-ponentes__ponente--seleccionado');
            if(ponentePrevio){
                ponentePrevio.classList.remove('listado-ponentes__ponente--seleccionado');
            }
            
            ponente.classList.toggle('listado-ponentes__ponente--seleccionado');
            ponenteHidden.value = ponente.dataset.ponenteId;
        }
    }
})();