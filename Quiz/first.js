var mysql = require('mysql');

var connection=mysql.createConnection({
	host:'localhost',
	user:'root',
	password:'',
	database:'python'
});

connection.connect();
var i=connection.query('create table noder( id int not null auto_increment primary key, name varchar(50));',function(err,res){
			if(err){
			connection.query('select * from noder',function(err,res){
				if(err){console.log(err);}else{
				console.log(res.length);}
			});
			}else{
			console.log(res);
			}
	});