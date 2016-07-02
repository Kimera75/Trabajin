$(function() {
    $('#side-menu').metisMenu();
    $('.datepick').datepicker({
        autoclose:true,
        format: "dd/mm/yyyy",
        todayHighlight: true,
        todayBtn: "linked"
    });

    $('.makeLoan').on('click',function(){
         $('#prestados-inte').val('');
         $('#cati-select').val('0');
         $('#arti-select').val('0');
         $('#prestados-exte').val('');
         $('#cati-select-exte').val('0');
         $('#arti-select-exte').val('0');
         $('.datepick').val('');
    });
    $('#btn-prestar').on('click',function(){
        if( $('#prestados-inte').val().length < 1){
            $('#prestados-inte').val($('#prestados-inte').val()+$('#arti-select option:selected').text());
        }else{
              $('#prestados-inte').val($('#prestados-inte').val()+' , '+$('#arti-select option:selected').text());
        }      
    });
    $('#btn-prestar-exte').on('click',function(){
        if( $('#prestados-exte').val().length < 1){
            $('#prestados-exte').val($('#prestados-exte').val()+$('#arti-select-exte option:selected').text());
        }else{
              $('#prestados-exte').val($('#prestados-exte').val()+' , '+$('#arti-select-exte option:selected').text());
        }      
    });

    $('#dt_cat').bootstrapTable({
        pagination: true,
        pageSize: 5,
        search: true,
        showRefresh: true,
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
        showRefresh: true,
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
            field: 'Carrer',
            title: 'Carrera',
            class: 'title-table'
        },{
            field: 'Role',
            title: 'Rol',
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
