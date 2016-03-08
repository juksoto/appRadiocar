$( "#send-form" ).click(function() {
   $('#form-country').validate({
   	rules:
   	{
   		 country : { required: true },
       iso : { required: true },
   	},
   	messages:
   	{
   		 country: { required: 'El nombre del país es obligatorio' },
       iso: { required: 'El ISO del país es obligatorio' },
       new_password : { required: 'Ingrese su nueva con nacimiento'}
   	},
   	highlight: function(element) {
        var id_attr = "#" + $( element ).attr("id") + "1";
         $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
         $(id_attr).removeClass('glyphicon-ok').addClass('glyphicon-remove');   
     },
     unhighlight: function(element) {
     	   var id_attr = "#" + $( element ).attr("id") + "1";
        $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
        $(id_attr).removeClass('glyphicon-remove').addClass('glyphicon-ok');     
        
     },
     errorElement: 'span',
     errorClass: 'help-block',
     errorPlacement: function(error, element) {
         if(element.parent('.input-group').length) {
             error.insertAfter(element.parent());
         } else {
             error.insertAfter(element);
         }
     }
   });
 });