
// <!-------------------------------------------------------------------------->
// <!--**************INGRESO TICKET--------------------------------------------->

$(document).ready(function(){
    $('#add_button').click(function(){
        $('#user_form')[0].reset();
        $('.modal-title').text("AGREGAR LECCION");
        $('#action').val("AGREGAR");
        $('#operation').val("Add");
        $('#user_uploaded_image').html('');


    });

    var dataTable = $('#user_data').DataTable({


        scrollY:        "500px",
        scrollX:        true,
        scrollCollapse: true,
        "processing":true,
        "serverSide":true,
        "order":[],
        "ajax":{
            url:"vistas/modulos/fetch.php",
            type:"POST"
        },
        "columnDefs":[
            {
                "targets":[0, 3, 4],
                "orderable":false,
            },
        ],

    });

/* ******************************************************************************************************
********************************************************************************************************
****************************************************************************************************** */

    $(document).on('submit', '#user_form', function(event){
        event.preventDefault();
        var firstName = $('#first_name').val();
        var lastName = $('#last_name').val();
        var trabajo = $('#tipo_trabajo').val();
        var tipo_falla = $('#tipo_falla').val();
        var observacion = $('#observacion').val(); // INGRESO DE TK OBSERVACION
        var responsable = $('#responsable').val();
        var gestiones = $('#gestiones').val();
        var as = "LEC" ;


        var extension = $('#user_image').val().split('.').pop().toLowerCase();


        if(extension != '')
        {
            if(jQuery.inArray(extension, ['pdf','mp3','png','msg','jpg','jpeg','docx','zip','noexiste']) == -1)
            {
                alert("FORMATO DEL ARCHIVO INVALIDO PONERSE EN CONTACTO CON EL ADMINISTRADOR");
                $('#user_image').val('');
                return false;
            }
        }
        if(firstName != '' && lastName != '' && responsable != '' && trabajo != '' )
        {
            $.ajax({
                url:"vistas/modulos/insert.php",
                method:'POST',
                data:new FormData(this),
                contentType:false,
                processData:false,
                success:function(data)
                {
                    alert(data);
                    $('#user_form')[0].reset();
                    $('#userModal').modal('hide');
                    dataTable.ajax.reload();
                    //location.reload(true);
                    CKEDITOR.instances.observacion.setData('');

                }
            });
        }
        else
        {
            alert("Both Fields are Required");
        }
    });

//***************************************************************************
    $(document).on('submit', '#user_form2', function(event) {
        event.preventDefault();


        var firstName = $('#first_name2').val();
        var lastName = $('#last_name2').val();
        var trabajo = $('#trabajo2').val();
        var responsable = $('#responsable2').val();
        var gestiones = $('#gestiones2').val();
        var id = $('#id').val();
        var fecha_fin = $('#fecha_fin2').val();


        var extension = $('#user_image2').val().split('.').pop().toLowerCase();
        if (extension != '') {
            if (jQuery.inArray(extension, ['pdf', 'msg','png','mp3', 'jpg', 'jpeg', 'docx', 'zip','noexiste']) == -1) {
                alert("FORMATO DEL ARCHIVO INVALIDO PONERSE EN CONTACTO CON EL ADMINISTRADOR");
                $('#user_image2').val('');
                return false;
            }
        }
        // if(firstName != '' && lastName != '' && fecha_fin === "0000-00-00 00:00:00")
        //{

        if (confirm("ESTA SEGURO DE ACTUALIZAR ESTA LECCION APRENDIDA?"))
        {
            $.ajax({
                url: "vistas/modulos/insert.php",
                method: 'POST',
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function (data) {
                    //aviso de actualizacion de datos
                    alert(data);
                    $('#user_form2')[0].reset();
                    $('#userModal2').modal('hide');
                    dataTable.ajax.reload();
                    //location.reload(true);
                    CKEDITOR.instances.observacion2.destroy(false);
                }
            });
        }


        else
        {
            return false;
        }

        //}
       // else
       //  {
       //      alert("TK YA CERRADO NO SE PUEDE ACTUALIZAR");
       //  }
    });

//***************************************************************************


    $(document).on('click', '.update', function(){
        var user_id = $(this).attr("id");

        document.getElementById("demo").innerHTML = user_id;

        $.ajax({
            url:"vistas/modulos/fetch_single.php",
            method:"POST",
            data:{user_id:user_id},
            dataType:"json",
            success:function(data)
            {
                $('#userModal2').modal('show');
                $('#first_name2').val(data.first_name);
                $('#last_name2').val(data.last_name);
                $('#trabajo2').val(data.trabajo);
                $('#responsable2').val(data.responsable);
                $('#uno').val(data.first_name);
                $('#dos').val(data.last_name);
                $('#tres').val(data.responsable);
                $('#cuatro').val(data.trabajo);
                $('#gestiones2').val(data.gestiones);
                $('#observacion2').val(data.observacion);
                //console.log(data.observacion);
                $('#id').val(data.id);
                $('#fecha_fin2').val(data.fecha_fin);
                $('.modal-title2').text("LECCION APRENDIDA");
                $('#user_id2').val(user_id);
                $('#user_uploaded_image2').html(data.user_image);
                $('#action2').val("ACTUALIZAR");
                $('#operation2').val("Edit");
                CKEDITOR.replace('observacion2');

              //  CKEDITOR.instances.observacion2.setData('');

                // document.getElementById("first").value = "EL ORO";

            }
        });
    });

    $(document).on('click', '.delete', function(){
        var user_id = $(this).attr("id");
        if(confirm("ESTA SEGURO DE BORRAR ESTA LECCION APRENDIDA?"))
        {
            $.ajax({
                url:"vistas/modulos/delete.php",
                method:"POST",
                data:{user_id:user_id},
                success:function(data)
                {
                    alert(data);
                    dataTable.ajax.reload();
                }
            });
        }
        else
        {
            return false;
        }
    });

});


//AGREGAR TRABAJOS SCRIPT ************************



$(document).ready(function(){
    $('#add_buttontr').click(function(){
        $('#user_form3')[0].reset();
        $('.modal-titletr').text("AGREGAR NUEVO TRABAJO ");
        $('#actiontr').val("AGREGAR TRABAJO");
        $('#operationtr').val("AGREGAR TRABAJO");

    });

    $(document).on('submit', '#user_form3', function(event){
        event.preventDefault();
        var firstName = $('#first_nametr').val();
        var lastName = $('#last_nametr').val();


        if(firstName != '' && lastName != '' )
        {
            $.ajax({
                url:"vistas/modulos/inserttr.php",
                method:'POST',
                data:new FormData(this),
                contentType:false,
                processData:false,
                success:function(data)
                {
                    alert(data);
                    $('#user_form3')[0].reset();
                    $('#userModal3').modal('hide');
                    dataTable.ajax.reload();

                }
            });
        }
        else
        {
            alert("FALTAN CAMPOS POR LLENAR");
        }
    });

});


//***** EVENTO BOTON  cancelar recargar pagina

$(document).on('click', '#btnCancelar', function(){

     //console.log('si vale el boton cancelar ');
    //location.reload(true);
    //CKEDITOR.instances.observacion2.setData('');
    CKEDITOR.instances.observacion2.destroy(false);


});



