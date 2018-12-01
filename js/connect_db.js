var mysql = require('mysql');

var connection = mysql.createConnection({
  host     : 'localhost',
  port: '3306', 
  user     : 'root',
  password : 'Lzj956970',
  database : 'moncto_test'
});
 
connection.connect();

var sql = 'SELECT * FROM event';
connection.query(sql,function (err, result) {
        if(err){
          console.log('[SELECT ERROR] - ',err.message);
          return;
        }

        //document.writeln(result);

       	console.log('--------------------------SELECT----------------------------');
       	console.log(result);
       	console.log('------------------------------------------------------------\n\n');  
});


 
connection.end();