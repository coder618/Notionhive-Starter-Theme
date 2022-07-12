// This file is the main entry point and it will concat JS files

const fs = require("fs");

var nodemon_config = require("./package.json");
var js_file_list = nodemon_config.js_file_list;
var js_output_file_location = nodemon_config.js_output_file_location;
var css_output_file_location = nodemon_config.css_output_file_location;

var js_content = "";

for (let i = 0; i < js_file_list.length; i++) {
    let file_location = js_file_list[i];

    try {
        const data = fs.readFileSync(file_location, "utf8");

        js_content += "// File location > " + file_location + "\n";
        js_content += data + "\n";
    } catch (err) {
        console.error(err);
    }
}

fs.mkdirSync(js_output_file_location, { recursive: true });
fs.mkdirSync(css_output_file_location, { recursive: true });

fs.writeFileSync(js_output_file_location + "/theme.js", js_content);
