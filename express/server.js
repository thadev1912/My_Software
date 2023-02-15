const express = require('express');
const app = express();
const port = 3000;
const route=require('./src/routes/index');
const handlebars = require('express-handlebars');
const path=require('path');
const db=require('./src/config/db');
route(app);


app.listen(port, () => {
  console.log(`Example app listening at http://localhost:${port}`)
})

//Templete Engine
 app.engine('hbs', handlebars.engine({
  extname:'.hbs'
 }));
 app.set('view engine', 'hbs');
 app.set('views',path.join(__dirname,'src/resources/views'));

