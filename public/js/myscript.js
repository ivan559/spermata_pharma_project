function DeleteRegister(){


$(function(){
	$('#formButton').click(function(){
		Swal.fire({
  title: 'Esta Seguro?',
  text: "NO,podra recuperar ese registro",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, Eliminar!'
}).then((result) => {
  if (result.value) {
    Swal.fire(
      'Eliminado!',
      'El Registro ha sido Eliminado',
      'success'
    )
  }
})
	})
})

}
DeleteRegister()

$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

});






 // Write on keyup event of keyword input element

 $(document).ready(function(){

 $("#search").keyup(function(){

  _this = this;

 // Show only matching TR, hide rest of them

 $.each($("#Supertable #tbody #tr"), function() {

 if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)

  $(this).hide();

 else

  $(this).show();

 });

 });

});

