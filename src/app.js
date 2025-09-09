import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import Register from './pages/Auth/Register';
import Login from './pages/Auth/Login';
import React from 'react';

// Si ya tienes un componente Home, asegúrate de importarlo
// import Home from './pages/Home';

const App = () => {
  return (
    <Router>
      <div className="App">
        <Routes>
          {/* Añade estas dos nuevas rutas */}
          <Route path="/register" element={<Register />} />
          <Route path="/login" element={<Login />} />
          {/* Puedes tener otras rutas aquí */}
        </Routes>
      </div>
    </Router>
  );
};

export default App;