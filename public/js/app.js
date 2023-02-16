$('.eliminar').on('click',function (e){
    if(!confirm('Deseas eliminar el registro')){
        return false;
    }
})