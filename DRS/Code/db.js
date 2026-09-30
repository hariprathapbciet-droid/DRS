const mysql = require("mysql2");

const db = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "YOUR_PASSWORD",
    database: "drs_database"
});

db.connect((err) => {
    if (err) {
        console.log("Database connection failed:");
        console.log(err.message);
        return;
    }

    console.log("MariaDB connected successfully");
});

module.exports = db;