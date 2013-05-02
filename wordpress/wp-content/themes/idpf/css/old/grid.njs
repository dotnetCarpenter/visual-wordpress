require.extensions['.njs'] = require.extensions['.js'];
var utils = require("util");
var columns = num = 40,	// number of columns in the grid
	width = 98,
	css = "",
	cssAll = [""/*placeholder for class names*/, "{ float:left; }"],
	html = "",
	styles = ["position:absolute;background-color:rgba(0,0,0,0.2)", "position:absolute;"],
	style;
while (num > 0) {
	style = style[num % 2];
	html += utils.format('<div class="c%d" style="%s;">%d</div>\n', num, style, num);
	css += utils.format(".c%d {\nmargin-left: %d%;\n}\n", num, (width/columns)*num);
	num === 1 ? (cssAll[0] += utils.format(".c%d", num)): cssAll[0] += utils.format(".c%d,", num);
	num--;
}
// out comment as needed
console.log(html);
console.log(css);
console.log(cssAll.join(""));
