//window.onload = iniciarDivs;
var datosGraficos = [];
$.ajax({
    // la URL para la petición
    url: window.location + '/statistics',

    // la información a enviar
    // (también es posible utilizar una cadena de datos)
    data: {
        id: 123
    },

    // especifica si será una petición POST o GET
    type: 'GET',

    // el tipo de información que se espera de respuesta
    dataType: 'json',

    // código a ejecutar si la petición es satisfactoria;
    // la respuesta es pasada como argumento a la función
    success: function (json) {
        let namesAndTopics = json[0];
        let topicsAndValues = json[1];
        let namesAndValues = null;
        for (let i = 0; i < namesAndTopics.length; i++) { //Recorre la cantidad de sensores que tiene nuestra planta

            var arrayGrafico = [];
            for (let i2 = 0; i2 < topicsAndValues.length; i2++) { //Recorre los registros de cada sensor de nuestra planta


                if (namesAndTopics[i].topic == topicsAndValues[i2].topic) {
                    let value = topicsAndValues[i2].message;
                    let time = formatDate(topicsAndValues[i2].created_at);

                    let arr = [];
                    arr.push(time);
                    arr.push(value);
                    arrayGrafico.push(arr);
                }

            }
            var sensor = new Object(); //creamos un objeto en el que guardamos un array de valores por cada sensor
            sensor.name = json[0][i].name;
            sensor.data = arrayGrafico;
            datosGraficos.push(sensor);
        }
        iniciarDivs();
    },

    // código a ejecutar si la petición falla;
    // son pasados como argumentos a la función
    // el objeto de la petición en crudo y código de estatus de la petición
    error: function (xhr, status) {
        alert('Disculpe, existió un problema al cargar los sensores');
    },

    // código a ejecutar sin importar si la petición falló o no
    complete: function (xhr, status) {


    }

});

function drawGraphic(sensorIndex) {
    google.charts.load('current', {
        'packages': ['line']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('date', 'Date');
        data.addColumn('number', 'value');

        var arrayGrafico = datosGraficos[sensorIndex].data;
        data.addRows(arrayGrafico);

        var options = {
            chart: {
                title: datosGraficos[sensorIndex].name,
                subtitle: ''
            },
            width: 900,
            height: 500
        };

        var chart = new google.charts.Line(document.getElementById("chart" + sensorIndex));

        chart.draw(data, google.charts.Line.convertOptions(options));
    }
}

function iniciarDivs() {
    var chartsdiv = document.getElementById("charts");

    for (var i = 0; i < datosGraficos.length; i++) {

        var newDiv = document.createElement("div");
        newDiv.setAttribute("id", "chart" + i);
        chartsdiv.appendChild(newDiv);
        drawGraphic(i);
    }

}




function formatDate(datetime) {
    let year = null;
    let month = null;
    let day = null;
    let hour = null;
    let minute = null;
    let second = null;

    var str = datetime;
    year = str.substring(0, 4);
    month = str.substring(5, 7);
    day = str.substring(8, 10);
    hour = str.substring(11, 13);
    minute = str.substring(14, 16);
    second = str.substring(17, 19);


    var date = new Date(year, month, day, hour, minute, second, 0);

    return date;
}
