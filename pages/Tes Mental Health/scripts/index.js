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

        // Jika hasil "Normal"
        if(countDepresi >=2 && countDepresi <= 14 ){
            document.getElementById("score-stress").innerHTML = countDepresi + "Normal (Tetap jaga kesehatan mental anda)";
        }
        if(countCemas >=2 && countCemas <= 14 ){
            document.getElementById("score-cemas").innerHTML = countCemas + "Normal (Tetap jaga kesehatan mental anda)";
        }
        if(countStress >=2 && countStress <= 14 ){
            document.getElementById("score-depresi").innerHTML = countStress + "Normal (Tetap jaga kesehatan mental anda)";
        }

        // Jika hasil "Ringan"
        if(countDepresi >=16 && countDepresi <= 18 ){
            document.getElementById("score-stress").innerHTML = countDepresi + "Ringan (Tetap jaga kesehatan mental anda)";
        }
        if(countCemas >=16 && countCemas <= 18 ){
            document.getElementById("score-cemas").innerHTML = countCemas + "Ringan (Tetap jaga kesehatan mental anda)";
        }
        if(countStress >=16 && countStress <= 18 ){
            document.getElementById("score-depresi").innerHTML = countStress + "Ringan (Tetap jaga kesehatan mental anda)";
        }
    }
    generate(i);
}