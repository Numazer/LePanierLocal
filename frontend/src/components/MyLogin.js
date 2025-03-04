import React, { useState } from 'react';
import MyForm from './MyForm';


const MyLogin = ({ onLogin }) => {
  const fields = [
    { name: 'email', label: 'Email : ', type: 'email', placeholder: 'Entrer votre email', required: false  },
    { name: 'password', label: 'Password : ', type: 'password', placeholder: 'Ecrire votre mot de passe', required: false  },
  ];
  
  const handleSubmit = (formData) => {
    console.log('Form Data:', formData); 
   }; 
  return (
    
      
      <MyForm fields={fields} onSubmit={handleSubmit} />
      
  );
};

export default MyLogin;