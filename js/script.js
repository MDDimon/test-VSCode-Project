
function nextSize(i, way, length) {
	if (way == 1)
		return 30 * Math.abs(Math.sin(i / (length / Math.PI)));
	else
		if (way == 2)
			return 100 * Math.abs(Math.cos(i / (length / Math.PI)));
}
function sizeCycle(text, way, d) {
	out = "";
	for (i = 0; i < text.length;) {
		size = parseInt(nextSize(i + d, way, text.length));
		out += "<span style='font-size: " + size + "pt'>" + text.substring(i, i + 1) + "</span>";
	}
	document.getElementById("wave").innerHTML = out;
}
function doWave(text, n) {
	sizeCycle(text, 1, n);
	if (n > text.length) n = 0;
	setTimeout("doWave(\"" + text + "\", " + (n + 1) + ")", 50);
}
