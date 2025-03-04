import React, { useState } from 'react';
import MyForm from './MyForm';

const MyUserRegister = () => {
    const fields = [
      { name: 'username', label: 'Nom D\'Utilisateur :  ', type: 'text', placeholder: 'Entrer votre nom d\'utilisateur', required: false  },
      { name: 'lastname', label: 'Nom : ', type: 'text', placeholder: 'Entrer votre nom', required: false  },
      { name: 'firstname', label: 'Prénom : ', type: 'text', placeholder: 'Entrer votre prénom', required: false  },
      { name: 'email', label: 'Email : ', type: 'email', placeholder: 'Entrer votre email', required: false  },
      { name: 'address', label: 'Addresse Postale : ', type: 'text', placeholder: 'Entrer votre addresse postale', required: false  },
      { name: 'city', label: 'Ville : ', type: 'text', placeholder: 'Entrer votre ville', required: false  },
      { name: 'phone', label: 'Téléphone : ', type: 'phone', placeholder: 'Entrer votre N° tel', required: false  },
      { name: 'password', label: 'Password', type: 'password', placeholder: 'Ecrire votre mot de passe', required: false  },
      { name: 'confirm-password', label: 'Confirm Password', type: 'password', placeholder: 'Retapez votre mot de passe', required: false },
      { name: 'image', label: 'Photo de Profile : ', type: 'file', required: false  },
    ];

    const handleSubmit = (formData) => {
        console.log('Form Data:', formData); 
       }; 

       return (
          <MyForm fields={fields} onSubmit={handleSubmit} />
      );
    };
    
    export default MyUserRegister;
    