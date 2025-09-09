const mongoose = require('mongoose');

const userSchema = new mongoose.Schema({
  email: {
    type: String,
    required: true,
    unique: true,
    lowercase: true,
    trim: true,
  },
  password: {
    type: String,
    required: true,
  },
  role: { // Para diferenciar entre profesores y estudiantes
    type: String,
    enum: ['Estudiante', 'Profesor'],
    default: 'Estudiante',
  },
  // Puedes añadir más campos según tu diagrama ER si es necesario,
  // como "nombre", "apellido", etc.
});

module.exports = mongoose.model('User', userSchema);