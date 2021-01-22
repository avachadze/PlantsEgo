var arrayGrafico = [];
$.ajax({
    // la URL para la petición
    url : window.location+'/statistics',

    // la información a enviar
    // (también es posible utilizar una cadena de datos)
    data : { id : 123 },

    // especifica si será una petición POST o GET
    type : 'GET',

    // el tipo de información que se espera de respuesta
    dataType : 'json',

    // código a ejecutar si la petición es satisfactoria;
    // la respuesta es pasada como argumento a la función
    success : function(json) {
        let namesAndTopics = json[0];
        let topicsAndValues = json[1];
        let namesAndValues = null;
        for(let i =0; i<namesAndTopics.length; i++){
          console.log(namesAndTopics[i].topic);
          console.log("for1: "+i)
            for(let i2 =0; i2<topicsAndValues.length; i2++){
              console.log("for2: "+i2)
              console.log(topicsAndValues[i2].topic)
              if(namesAndTopics[i].topic == topicsAndValues[i2].topic){
                let value = topicsAndValues[i2].message;
                let time = topicsAndValues[i2].id;
                console.log(value);
                console.log(time);
                let arr = [];
                arr.push(time);
                arr.push(value);
               
                arrayGrafico.push(arr);
              }

            }
        }
    },

    // código a ejecutar si la petición falla;
    // son pasados como argumentos a la función
    // el objeto de la petición en crudo y código de estatus de la petición
    error : function(xhr, status) {
        alert('Disculpe, existió un problema');
    },

    // código a ejecutar sin importar si la petición falló o no
    complete : function(xhr, status) {
        alert('Petición realizada');
    }
    
});

google.charts.load('current', {'packages':['line']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

var data = new google.visualization.DataTable();
data.addColumn('number', 'Time');
data.addColumn('number', 'Value');


data.addRows(arrayGrafico);

var options = {
  chart: {
    title: '',
    subtitle: ''
  },
  width: 900,
  height: 500
};

var chart = new google.charts.Line(document.getElementById('linechart_material'));

chart.draw(data, google.charts.Line.convertOptions(options));
}
  