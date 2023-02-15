const newRouter=require('./wellcome');
const sinhvien=require('./sinhvien');
const db=require('../config/db');
function route(app)
{
app.use('/wellcome',newRouter);
app.use('/sinhvien',sinhvien);
  app.get('/trangchu',(req,res)=>
  {
      res.render('home');
  });
  
  
 
}

module.exports = route;
