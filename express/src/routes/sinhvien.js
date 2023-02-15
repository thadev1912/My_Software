var express = require('express');
var router = express.Router();
const sinhvien_controller = require('../app/Controllers/SinhvienController');

/* GET users listing. */
router.get('/themsinhvien', sinhvien_controller.them_sinhvien);
router.post('/luusinhvien', sinhvien_controller.luu_sinhvien);
router.get('/', sinhvien_controller.sinhvien);


module.exports = router;
