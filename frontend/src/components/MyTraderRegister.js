import React from 'react';
import MyForm from './MyForm';

const MyTraderRegister = () => {
  const fields = [
    { name: 'market_name', label: 'Nom de la Boutique :  ', type: 'text', placeholder: 'Entrer le nom de votre boutique', required: false  },
    { name: 'address', label: 'Addresse Postale : ', type: 'text', placeholder: 'Entrer votre addresse postale', required: false  },
    { name: 'city', label: 'Ville : ', type: 'text', placeholder: 'Entrer votre ville', required: false  },
    { name: 'phone', label: 'Téléphone : ', type: 'phone', placeholder: 'Entrer votre N° tel', required: false  },
    { name: 'email', label: 'Email : ', type: 'email', placeholder: 'Entrer votre email', required: false  },
    { name: 'siret', label: 'SIRET : ', type: 'text', placeholder: 'Entrer votre n° de SIRET', required: false  },
    { name: 'category', label: 'Catégorie : ', type: 'select', apiEndpoint: '/api/categories', required: false },
    { name: 'sub_category', label: 'Sous Catégorie : ', type: 'select', apiEndpoint: '/api/subcategories', required: false },
    { name: 'password', label: 'Password', type: 'password', placeholder: 'Ecrire votre mot de passe', required: false  },
    { name: 'confirm-password', label: 'Confirm Password', type: 'password', placeholder: 'Retapez votre mot de passe', required: false  },
    { name: 'image', label: 'Photo de Profile : ', type: 'file', required: false  },
  ];

  const handleSubmit = (formData) => {
    console.log('Form Data:', formData); 
  }; 

  return (
    <MyForm fields={fields} onSubmit={handleSubmit} />
  );
};

export default MyTraderRegister;