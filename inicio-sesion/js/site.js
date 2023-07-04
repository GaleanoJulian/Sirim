const serverUrl = "http://localhost/Sirim";



async function getUserList(){
   console.log(await readData("getUserList"));
}

async function readData(functionName){
    var response = $.ajax({ type: "GET",   
        url: `${serverUrl}/api/read.php?functionName=${functionName}`,   
        async: false
        }).responseText;
    return JSON.parse(response);
}

async function updateData(functionName, inputData){
    var response = $.ajax({ type: "PUT",   
        url: `${serverUrl}/api/update.php?functionName=${functionName}`,   
        async: false,
        data: JSON.stringify(inputData)
        }).responseText;
    return JSON.parse(response);
}

async function deleteData(functionName, inputData){
    var response = $.ajax({ type: "DELETE",   
        url: `${serverUrl}/api/delete.php?functionName=${functionName}`,   
        async: false,
        data: JSON.stringify(inputData)
        }).responseText;
    return JSON.parse(response);
}

//Inicio Gestion usuarios

    async function fillRoleSelect(){
        var newOptions = (await readData("getUserRoles")).data;

        var $el = $(".rolUsuario_");
        $el.empty(); // remove old options
        newOptions.forEach(x => {
            $el.append($("<option></option>")
            .attr("value", x.id).text(x.rol));
        });
    }

    function loadTableDataGestion(items, tableId) {
        const table = document.getElementById(tableId);
        var tbodyRef = document.getElementById(tableId).getElementsByTagName('tbody')[0];

        var index = 1;
        items.forEach( item => {
        let row = tbodyRef.insertRow();
        let nombres = row.insertCell(0);
        nombres.innerHTML = item.nombres;
        let apellidos = row.insertCell(1);
        apellidos.innerHTML = item.apellidos;
        let tipoDocumento = row.insertCell(2);
        tipoDocumento.innerHTML = item.tipo_doc_id;
        let documento = row.insertCell(3);
        documento.innerHTML = item.doc_identidad;
        let rol = row.insertCell(4);
        rol.innerHTML = `<select style="background-color: white;" name="rolUsuario" class="rolUsuario_" id="rolSelect_${item.idUser}" data-selectedvalue=${item.rolId}></select>`;
        let estado = row.insertCell(5);
        estado.innerHTML = `
        <select style="background-color: white;" name="estadoUsuario" class="estadoUsuario_" id="statusSelect_${item.idUser}" data-selectedvalue=${item.estado}>
            <option value="activo">activo</option>
            <option value="inactivo">inactivo</option>
            </select>`;
        let eliminar = row.insertCell(6);
        eliminar.innerHTML = 
            `<button type="submit" name="borrarUsuario" class="borrarUsuario_" id="deleteUsuario_${item.idUser}" style=" padding: 0.3rem 1rem; background: #3FABDD; color:white; 
            cursor: pointer; border-radius: 1rem; border-top: none; 
            border-left: none;">
            Eliminar
            </button>`;
            index++;
        });
    }

    function setUserRole(){
        $('.rolUsuario_').each(function( index ) {
            $(this).val($(this).attr('data-selectedvalue'));
        });
    }

    function setUserStatus(){
        $('.estadoUsuario_').each(function( index ) {
            $(this).val($(this).attr('data-selectedvalue'));
        });
    }

    function addChangeEvents(){
        $('.rolUsuario_').on('change', async function(e){
            var usuarioId = $(this).attr('id').split("_")[1];
            var value = $(this).val();
            var inputData = {userId: usuarioId, newRoleId: value};
            var result = await updateData("updateUserRole", inputData);
            alert('Rol de usuario cambiado con éxito');
        });
    }

    function addChangeStatus(){
        $('.estadoUsuario_').on('change', async function(e){
            var usuarioId = $(this).attr('id').split("_")[1];
            var value = $(this).val();
            var inputData = {
                userId: usuarioId, 
                newUserStatus: value,
            };
            var result = await updateData("updateUserStatus", inputData);
            alert('Estado de usuario cambiado con éxito');
        });
    }

    function addDeleteUserEvent(){
        $('.borrarUsuario_').on('click', async function(e){
            var usuarioId = $(this).attr('id').split("_")[1];
            var inputData = {userId: usuarioId};
            var result = await deleteData("deleteUser", inputData);
            alert('Usuario eliminado con éxito');
            $(this).closest('tr').remove();
        });
    }

    



//Fin gestion usuarios