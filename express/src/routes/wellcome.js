var express = require('express');
var router = express.Router();
const wellcomeController = require('../app/Controllers/WellcomeController');
/* GET users listing. */
router.use('/', wellcomeController.index);
router.use('/show', wellcomeController.show);

module.exports = router;
