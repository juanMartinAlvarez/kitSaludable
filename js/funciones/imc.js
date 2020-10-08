function calcularIMC() {
  //declaracion de variables
  var peso, altura, imc, info, resultadoFinal;
  //llama a los datos introduccidos
  peso= document.getElementById("peso").value;
  altura= document.getElementById("altura").value;
  if(altura > 3.0){
    altura = altura/100;
  }
  //calculo del IMC
  imc= peso/(altura*altura);
  resultadoFinal = (altura*altura*20.5-peso);
  if(resultadoFinal < 0){
    resultadoFinal = (Math.abs(resultadoFinal)/2);}
    resultadoFinal = resultadoFinal.toFixed(2);
  
  // muestra resultado con 2 decimales
  document.getElementById("imc").value = imc.toFixed(2);
  //formatea info
  if(imc<=20.5){
      info="Estas " + resultadoFinal +" kilos debajo de tu peso";
  }else if(imc>=25.5){
      info="Tienes sobrepeso, debes bajar "+ resultadoFinal +" Kilos";
    }else{
        info="Felicitaciones!!! Tienes un 'Peso saludable'";
    }
  //resultado al box
  document.getElementById("info").value=info;
}