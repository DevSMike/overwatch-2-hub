let table = document.querySelector("#graph-table"),
    labels = [],
    values = [];

table.querySelectorAll("tbody td:first-child").forEach(country => {
   labels.push(country.innerHTML); 
});

table.querySelectorAll("tbody td:nth-child(2)").forEach(value => {
    values.push(value.innerHTML);
});

let data = {
    labels: labels,
    datasets: [{
        label: 'Рейтинг стран, где Overwath пользуется популярностью',
        backgroundColor: 'rgb(220, 53, 69)',
        borderColor: 'rgb(220, 53, 69)',
        data: values,
    }]
};

const config = {
    type: 'line',
    data: data,
    options: {}
};

const RED = "rgb(220, 53, 69)";
const GREEN = "rgb(25, 135, 84)";
const BLUE = "rgb(13, 110, 253)";

var myChart = new Chart(
    document.getElementById('myChart'),
    config
);

let changeColor = () => {
    console.log("клац")
}

document.querySelector("#graph-color-btn").onclick = () => {
    switch (document.querySelector("#graph-color").value) {
        case "red":
            var color = RED;
            break;
        case "green":
            var color = GREEN;
            break;
        case "blue":
            var color = BLUE;
            break;
    }

    data.datasets[0].backgroundColor = color;
    data.datasets[0].borderColor = color;
    myChart.update();
}