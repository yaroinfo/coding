const fs = require('fs');
const path = require('path');

const file = path.resolve(__dirname, 'standings.json');
let data = JSON.parse(fs.readFileSync(file));

let string = [];
data.forEach((item) => {
	string.push(`${item.team} (${item.group}) - ${item.points}`);
});

process.stdout.write(string.join("\n") + "\n");
