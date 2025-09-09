const express = require('express');
const router = express.Router();
const authController = require('../controllers/authController');

// @route   POST /api/auth/register
// @desc    Ruta para registrar un nuevo usuario
// @access  Public
router.post('/register', authController.registerUser);

// @route   POST /api/auth/login
// @desc    Ruta para iniciar sesión de un usuario
// @access  Public
router.post('/login', authController.loginUser);

module.exports = router;