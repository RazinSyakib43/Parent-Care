var i = 0;
var countDepresi = 0;
var countCemas = 0;
var countStress = 0;


generate(0);

function generate(index) {
    document.getElementById("test").innerHTML = jsonData[index].q;
    document.getElementById("skorr0").innerHTML = jsonData[index].skor0;
    document.getElementById("skorr1").innerHTML = jsonData[index].skor1;
    document.getElementById("skorr2").innerHTML = jsonData[index].skor2;
    document.getElementById("skorr3").innerHTML = jsonData[index].skor3;
}

function countAnswer() {
    if (document.getElementById("skor1").checked && jsonData[i].skor1 && jsonData[i].category=="Depresi") {
        countDepresi+=2;
    }
    if (document.getElementById("skor2").checked && jsonData[i].skor2 && jsonData[i].category=="Depresi") {
        countDepresi+=4;
    }
    if (document.getElementById("skor3").checked && jsonData[i].skor3 && jsonData[i].category=="Depresi") {
        countDepresi+=6;
    }
    if (document.getElementById("skor1").checked && jsonData[i].skor1 && jsonData[i].category=="Cemas") {
        countCemas+=2;
    }
    if (document.getElementById("skor2").checked && jsonData[i].skor2 && jsonData[i].category=="Cemas") {
        countCemas+=4;
    }
    if (document.getElementById("skor3").checked && jsonData[i].skor3 && jsonData[i].category=="Cemas") {
        countCemas+=6;
    }
    if (document.getElementById("skor1").checked && jsonData[i].skor1 && jsonData[i].category=="Stress") {
        countStress+=2;
    }
    if (document.getElementById("skor2").checked && jsonData[i].skor2 && jsonData[i].category=="Stress") {
        countStress+=4;
    }
    if (document.getElementById("skor3").checked && jsonData[i].skor3 && jsonData[i].category=="Stress") {
        countStress+=6;
    }
    i++;
    if(jsonData.length-1 < i){
        document.getElementById("score-depresi").innerHTML = countDepresi;
        document.getElementById("score-cemas").innerHTML = countCemas;
        document.getElementById("score-stress").innerHTML = countStress;
    }
    generate(i);
}