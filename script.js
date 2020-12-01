"use strict";

function gameLoader() {
    $("main").innerHTML += `<object width="${innerWidth}" height="${innerHeight *=  0.80}">
        <param name="movie" value="file.swf">
        <embed src="./getSwfFile.php?swfURL=${$("#swfUrl").value}" width="${innerWidth}" height="${innerHeight *=  0.80}">
        </embed>
    </object>`;
}