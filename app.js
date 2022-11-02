
const express = require('express');
const app = express();
const port = 8080 ;


//servir archivos estaticos

app.use(express.static('public'));




app.get('/', (req, res) => {
    res.send('Hello World!');
} );


app.get('*', (req, res) => {
    res.sendFile(__dirname + '/public/index.html');
} );




app.listen(port, () => {
    console.log(`Example app listening at http://localhost:${port}`);
} );





