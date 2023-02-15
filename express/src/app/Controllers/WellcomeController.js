const db= require ('../../config/db');
//c:/xampp/htdocs/sigano/express/src/config/db/index
class WellcomeController
{
    index(req,res)     
      {
        
         };
     
     show(req,res)
      {
         res.send('chi tiet về NodeJS');
      }
}
module.exports=new WellcomeController;
//const WellcomeController=require('./WellcomeController');