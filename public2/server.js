require('dotenv').config();
const express = require('express');
const mysql = require('mysql2/promise');
const cors = require('cors');
const { body, validationResult } = require('express-validator');

const app = express();

// Пул соединений MySQL
const pool = mysql.createPool({
  host: process.env.DB_HOST || 'localhost',
  user: process.env.DB_USER || 'root',
  password: process.env.DB_PASSWORD || '',
  database: process.env.DB_NAME || 'compassist_db',
  waitForConnections: true,
  connectionLimit: 10,
  queueLimit: 0
});

// Middleware
app.use(cors({
  origin: process.env.CLIENT_URL || 'http://localhost:3000'
}));
app.use(express.json());

// Валидация заказа
const orderValidation = [
  body('fullName').trim().isLength({ min: 3 }).escape(),
  body('phone').isMobilePhone('any'),
  body('email').isEmail().normalizeEmail(),
  body('address').trim().isLength({ min: 5 }).escape(),
  body('configuration').trim().notEmpty()
];

// Роуты
app.post('/api/orders', orderValidation, async (req, res) => {
  const errors = validationResult(req);
  if (!errors.isEmpty()) return res.status(400).json({ errors: errors.array() });

  try {
    const [result] = await pool.query(
      `INSERT INTO orders 
      (full_name, phone, email, address, configuration)
      VALUES (?, ?, ?, ?, ?)`,
      [req.body.fullName, req.body.phone, req.body.email, req.body.address, req.body.configuration]
    );
    
    res.json({
      success: true,
      orderId: result.insertId
    });
  } catch (error) {
    console.error('Database error:', error);
    res.status(500).json({ error: 'Database operation failed' });
  }
});

app.get('/api/configs', async (req, res) => {
  try {
    const [rows] = await pool.query('SELECT * FROM pc_configs');
    res.json(rows);
  } catch (error) {
    res.status(500).json({ error: 'Failed to fetch configurations' });
  }
});

const PORT = process.env.PORT || 3001;
app.listen(PORT, () => console.log(`Server running on port ${PORT}`));