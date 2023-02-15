const db=require('../../config/db');
class SinhvienController
{
  sinhvien(req,res){
 
      var sql=`SELECT * from demo`;
      db.query(sql, (err,rows) => {
       
       if(!err)
       {   
        //res.send({rows});// cách gọi ra json
          res.render('sinhvien/sinhvien',{rows});      
       }
       else
       {
         console.log(err);
       }
      });
    }     
     them_sinhvien(req,res)
      {
         res.render('sinhvien/themsinhvien');
      }
      luu_sinhvien(req,res)
      {
      return req.txt_hoten;
      // console.log(data);
      }
}
module.exports=new SinhvienController;