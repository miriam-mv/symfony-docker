

function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
}
function generateSimulation(index) {

  let direcciones = ["Norte", "Sur", "Este","Oeste" ];

  let sim = '{"nombre_simulador":"nuptic-43",'+
  'num": '+ index+', '+
  'direccion": "'+ direcciones[getRandomInt(0,3)]+'" , '+
  'recorrido": '+ getRandomInt(10,20)+', '

  return JsonEncoder(sim);   // The function returns the product of p1 and p2

}
