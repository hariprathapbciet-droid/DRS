const express = require("express");
const cors = require("cors");
const db = require("./db");

const app = express();

app.use(cors());
app.use(express.json());

app.get("/", (req, res) => {
    res.send("DRS Backend is running");
});

app.get("/test-db", (req, res) => {
    db.query("SELECT 1 AS test", (err, result) => {
        if (err) {
            return res.status(500).json({
                success: false,
                message: err.message
            });
        }

        res.json({
            success: true,
            message: "MariaDB connected successfully",
            result: result
        });
    });
});

app.listen(3000, () => {
    console.log("DRS Backend running at http://localhost:3000");
});