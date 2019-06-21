
function validation(value){
    if (value == '' || value == 0 ||  typeof value != Number) {
        return false;
    }
    return true;
}

$('.entrada').on('focusout', (event) => {
   // console.log(event);
});

let delta = 0;
let xrst = 0;
$('#delta').html(0);
$('#xrst1').html(0);
$('#xrst2').html(0);

$('#calcular').click(function (e) { 

  let a = parseInt( $('#entradaA').val() );
  let b = parseInt( $('#entradaB').val() );
  let c = parseInt( $('#entradaC').val() );

  delta = Math.pow(b, 2) - 4*a*c;

  $('#delta').html(delta);

if (delta === 0) {
    
    xrst1 = (-(b) + 0) / (2 * a);
    xrst2 =  xrst1; 
}else if(delta < 0){
    
    xrst1 = xrst2 = 0;

}else{

    xrst1 = (-(b) + Math.sqrt(delta)) / (2 * a);
    xrst2 =  (-(b) - Math.sqrt(delta)) / (2 * a);

}

$('#xrst1').html(xrst1);
$('#xrst2').html(xrst2);
    



});