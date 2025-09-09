const express = require('express');
const mongoose = require('mongoose');
const app = express();

// Conectar a la base de datos
mongoose.connect('mongodb://localhost:27017/aula-inteligente', {
  useNewUrlParser: true,
  useUnifiedTopology: true,
})
.then(() => console.log('MongoDB Conectado'))
.catch(err => console.error(err));

// Middleware
app.use(express.json());

// Definir Rutas
app.use('/api/auth', require('./routes/auth'));

// Iniciar el servidor
const PORT = process.env.PORT || 5000;
app.listen(PORT, () => console.log(`Servidor corriendo en el puerto ${PORT}`));