$(function() {
    // Selects dependientes para prestamo interno
    $('#cat-selec').change(function(event){
        $.get("select/" + event.target.value + "", function(response, state){
            if (response.length > 0){
                $('#arti-selec').empty();
                $('#arti-selec').append("<option value=''>Escoge el articulo</option");
                for (var i = 0; i < response.length; i++) {
                    $('#arti-selec').append("<option value='"+ response[i].id + "'>" + response[i].name + "</option");
                };
            }else {
                $('#arti-selec').empty();
                $('#arti-selec').append("<option value=''>Escoge el articulo</option");
            }                        
        });
    });

    // Selects dependientes para prestamo externo
    $('#cat-selec_exte').change(function(event){
        $.get("select/" + event.target.value + "", function(response, state){
            if (response.length > 0){
                $('#arti-selec-exte').empty();
                $('#arti-selec-exte').append("<option value=''>Escoge el articulo</option");
                for (var i = 0; i < response.length; i++) {
                    $('#arti-selec-exte').append("<option value='"+ response[i].id + "'>" + response[i].name + "</option");
                };
            }else {
                $('#arti-selec-exte').empty();
                $('#arti-selec-exte').append("<option value=''>Escoge el articulo</option");
            }                        
        });
    });
    
    $('#side-menu').metisMenu();
    $('.search-sel').selectpicker();
    $('.datepick').datepicker({
        autoclose:true,
        format: "dd/mm/yyyy",
        todayHighlight: true,
        todayBtn: "linked"
    });

    $('.makeLoan').on('click',function(){        
        //interno
        $('#prestados-inte').val('');         
        $('#id_user').val('');
        $('#cat-selec').val('');
        $('#arti-selec').empty();
        $('#loan-arti').empty();        
        $('#arti-selec').append("<option value=''>Escoge el articulo</option");
         //externo
         $('#id_user_exte').val('');
         $('#cat-selec_exte').val('');
         $('#loan-arti-exte').empty();
         $('#arti-selec-exte').empty();
         $('.datepick').val('');
         $('#arti-selec-exte').append("<option value=''>Escoge el articulo</option");
    });
    $('#btn-prestar').on('click',function(){
        var content = $('#arti-selec option:selected').text();
        $('#loan-arti').append('<div class="input-group mg-top col-xs-12 col-sm-12 col-md-8 rmdiv"><span class="input-group-btn"><button type="button" class="btn btn-danger del-loan">x</button></span><input class="form-control" value="'+ content +'" disabled></div>'); 
        $(document).on('click', '.del-loan', function(e){
            $(this).parents('.rmdiv').remove();
        });
    });


    $('#btn-prestar-exte').on('click',function(){
        var content = $('#arti-select-exte option:selected').text();
        $('#loan-arti-exte').append('<div class="input-group mg-top col-xs-12 col-sm-12 col-md-8 rmdiv"><span class="input-group-btn"><button type="button" class="btn btn-danger del-loan">x</button></span><input class="form-control" value="'+ content +'" disabled></div>')
        $(document).on('click', '.del-loan', function(e){
            $(this).parents('.rmdiv').remove();
        });   
    });

    $('#dt-tableLoan').bootstrapTable({
        pagination: true,
        pageSize: 5,
        search: true,
        showToggle: true,
        showColumns: true,   
        columns: [{
            field: 'arti',
            title: 'Articulo',
            class: 'title-table'
        },{
            field: 'quantity',
            title: 'Cantidad',
            class: 'title-table'
        },{
            field: 'state',
            title: 'Status del préstamo',
            class: 'title-table'
        }] 
    });

    $('#dt_article').bootstrapTable({ 
        pagination: true,
        pageSize: 5,
        search: true,
        showToggle: true,
        showColumns: true,         
        columns: [{
            field: 'id',
            title: '#',
            class: 'title-table'
        },{
            field: 'category',
            title: 'Categoria',
            class: 'title-table'
        },{
            field: 'name',
            title: 'Nombre',
            class: 'title-table'
        },{
            field: 'desc',
            title: 'Descripcion',
            class: 'title-table'
        },{
            field: 'cant',
            title: 'Cantidad',
            class: 'title-table'
        },{
            field: 'Actions',
            title: 'Acciones',
            class: 'title-table'
        }] 
    });

    $('#dt_cat').bootstrapTable({
        pagination: true,
        pageSize: 5,
        search: true,
        showToggle: true,
        showColumns: true,      
        columns: [{
            field: 'id',
            title: '#',
            class: 'title-table'
        },{
            field: 'Nombre',
            title: 'Nombre de la categoria',
            class: 'title-table'
        },{
            field: 'Actions',
            title: 'Acciones',
            class: 'title-table'
        }] 
    });        
    $('#dt-tableUsers').bootstrapTable({
        pagination: true,
        pageSize: 5,
        search: true,
        showToggle: true,
        showColumns: true,      
        columns: [{
            field: 'id',
            title: '#',
            class: 'title-table'
        },{
            field: 'Nombre',
            title: 'Nombre',
            class: 'title-table'
        },{
            field: 'email',
            title: 'Correo Electronico',
            class: 'title-table'
        },{
            field: 'Role',
            title: 'Rol',
            class: 'title-table'
        },{
            field: 'Career',
            title: 'Carrera',
            class: 'title-table'
        },{
            field: 'Actions',
            title: 'Acciones',
            class: 'title-table'
        }]  
    });
});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
    $(window).bind("load resize", function() {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    var url = window.location;
    var element = $('ul.nav a').filter(function() {
        return this.href == url || url.href.indexOf(this.href) == 0;
    }).addClass('active').parent().parent().addClass('in').parent();
    if (element.is('li')) {
        element.addClass('active');
    }
});
