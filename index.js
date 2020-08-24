const mysql      = require('mysql');
var arr = [];
const connection = mysql.createConnection({
  host     : 'db-4ndkp.pub-cdb.ntruss.com',
  user     : 'bumi',
  password : 'qjagml1994!',
  database : 'test'
});

connection.connect();

connection.query('SELECT * from entries', (error, rows) => {
  if (error) throw error;
  // console.log('User info is: ', rows);
  arr=rows.slice();
  console.log(arr)
});


connection.end();