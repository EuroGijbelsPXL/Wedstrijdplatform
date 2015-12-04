/**
 * Created by Jarno on 04/12/15.
 */
//Generates the codes
function btnClicked() {
    var codes = generateCode(getNumber(), 3, 5);
    //alert(getNumber());
    writeToCSV(codes);
}

function getNumber() {
    var num = document.getElementById("number").value;
    return num;
}

function generateCode(count, num_segments, segment_chars ) {
    var tokens = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    var code_string = '';
    var codeArray = [];

    for (var i = 0; i < count; i++) {
        code_string = '';
        for (var j = 0; j < num_segments; j++) {
            var segment = '';
            for (var k = 0; k < segment_chars; k++) {
                segment += tokens[Math.floor(Math.random() * 35)];
            }
            code_string += segment;

            if (j < (num_segments - 1)) {
                code_string += '-';
            }
        }
        if (checkDuplicate(codeArray, code_string)) {
            codeArray.push(code_string);
        }
    }

    return codeArray;
}

function checkDuplicate(codes, newCode) {
    var bool = true;
    for (var i = 0; i < codes.length; i++) {
        if (newCode === codes[i]) {
            //if duplicate exists return set bool false and break loop
            bool = false;
            break;
        }
    }
    return bool;
}

function writeToCSV(codes) {
// prepare CSV data
    var data = codes;
    var csvData = new Array();
    data.forEach(function (item, index, array) {
        csvData.push('"' + item + '"');
    });

// download stuff
    var fileName = "codes.csv";
    var buffer = csvData.join("\n");
    var blob = new Blob([buffer], {
        "type": "text/csv;charset=utf8;"
    });

    var link = document.createElement("a");

    if (link.download !== undefined) { // feature detection
        // Browsers that support HTML5 download attribute
        link.setAttribute("href", window.URL.createObjectURL(blob));
        link.setAttribute("download", fileName);
    }
    else {
        // it needs to implement server side export
        link.setAttribute("href", "http://www.example.com/export");
    }

    link.click();
}

//Shows codes in list on page
function showCodes(codes) {
    //var codes = generateCode(500, 5, 10);
    var text = "<ul>";

    for(var i = 0; i < codes.length; i++) {
        text += "<li>" + codes[i] + "</li>";
    }
    text += "</ul>";

    document.getElementById("codes").innerHTML = text;
}