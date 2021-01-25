const express = require('express');
const app = express();
const http_socket = require('http').Server(app);
app.set('view engine', 'ejs');
var bodyParser = require('body-parser');
app.use(bodyParser.urlencoded({ extended: true }));
// app.use(express.bodyParser());
var request = require('request');

var config = require('./config');
var fs = require('fs');

// /////////////////////////////////////////////////////////////////////////////
var startHour = 10;  //オークション開催時刻　時(13時)
var buffMinutues = 17;  //オークションの開催時刻　分（0）　デバック用
var auctionTime = 1; //オークションの開催時間 　分(10)


// デバッグ用

/**
 * DB 定数
 */
const mysql = require("mysql");
const { url } = require('inspector');
const connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: config.PASSWORD,
    database: 'car_team1'
})
/**
 * DB接続確認
 */
connection.connect((error) => {
    if (error) {
        console.log('error connecting:' + error.stack);
        return;
    }
    console.log('db_success');
});
/**
 * これを終了時に送る
 */
// request.post({
//     uri: 'http://localhost:8000/',
//     headers: { 'Content-Type': 'application/json' },
//     body: JSON.stringify({
//         "params1": "params1Value",
//         "params2": "params2Value"
//     })
// });


app.post('/enter', function (req, res) {
    var carno = req.body.carno;
    var user = req.body.user;
    var price = parseInt(req.body.price, 10);
    price += parseInt(req.body.now, 10);
    var sql = "UPDATE auction_logs SET price = " + price + "," + "user_id = " + user;
    sql += " WHERE CARNO = '" + carno + "'";
    // 入札者と金額出力
    var date = new Date();;
    var logprice = price * 1000;

    let text = date + "入札者ID:" + user + "入札金額:¥" + logprice.toLocaleString() + "\n";
    fs.appendFile("./logs/auctionprice.txt", text, (err) => {
        if (err) throw err;
        console.log('ファイルが正常に出力されました。');
    });
    connection.query(
        sql, (error, results) => {
            if (error) {
                console.log('error connectiong' + error.stack);
                return;
            }
        }
    );
});

app.post('/endauction', function (req, res) {
    var carno = req.body.carno;
    // carsテーブルのSTATS変更
    var sql = "UPDATE cars SET STATS = 2 WHERE CARNO = '" + carno + "'";
    console.log(sql);
    connection.query(
        sql, (error, results) => {
            if (error) {
                console.log('error connectiong' + error.stack);
                return;
            }
        }
    );
    // logsから最終入札価格とってくる
    sql = "SELECT price,user_id FROM auction_logs WHERE CARNO = '" + carno + "'";
    console.log(sql);
    connection.query(
        sql, (error, results) => {
            lastprice = results[0].price;
            lastuser_id = results[0].user_id;
            // transactionsテーブルに挿入
            var sql = "INSERT INTO transactions (CARNO, price, user_id, pay_date, name, created_at, updated_at) VALUES ('" + carno + "'," + lastprice + "," + lastuser_id + ",null,null,null,null)";
            console.log(sql);
            connection.query(
                sql, (error, results) => {

                    if (error) {
                        console.log('error connectiong' + error.stack);
                        return;
                    }
                }
            );
            if (error) {
                console.log('error connectiong' + error.stack);
                return;
            }
        }
    );

    // message = "Success!!";
    // res.json({ 'massage': message });
    // res.end();
})
http_socket.listen(9000);
