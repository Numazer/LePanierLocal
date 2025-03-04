import React, { useState } from 'react';
import axios from 'axios';

import MyAppNav from './Nav';
import NavForm from './NavForm';

const Login = () => {
    const [email, setEmail] = useState('');
    const [password, setPassword] = useState('');
    const [errorMessage, setErrorMessage] = useState('');
    const [successMessage, setSuccessMessage] = useState('');

    const handleSubmit = async (e) => {
        e.preventDefault();
        try {
            const response = await axios.post(
                'http://localhost:8000/login',
                {
                    email: email,
                    password: password,
                },
                {
                    headers: {
                        "Content-Type": 'application/ld+json',
                    },
                }
            );

            const token = response.data.token;
            const user_id = response.data.user_id;
            const type = response.data.type; // 'user' ou 'trader'

            if (token) {
                // Si c'est un trader
                if (type === 'trader') {
                    localStorage.setItem('trader_id', user_id); // Stocker l'ID du trader
                    localStorage.setItem('user_id', null); // Mettre user_id à null
                } 
                // Si c'est un utilisateur classique
                else if (type === 'user') {
                    localStorage.setItem('user_id', user_id); // Stocker l'ID du user
                    localStorage.setItem('trader_id', null); // Mettre trader_id à null
                }

                localStorage.setItem('token', token); // Stocker le token
                setSuccessMessage("Login successful!");
            } else {
                setErrorMessage("Token not received.");
            }

            setEmail('');
            setPassword('');
        } catch (error) {
            if (error.response && error.response.data.error) {
                setErrorMessage('Probleme de connexion');
            } else {
                setErrorMessage('An error occurred during login.');
            }
        }
    };

    return (
        <div className="login-page">
            <NavForm />
            <div className="login-container">
                <h2 className="text-center mb-4">Login</h2>
                <form onSubmit={handleSubmit} className="login-form">
                    <div className="mb-3">
                        <label htmlFor="email" className="form-label">Email:</label>
                        <input
                            type="email"
                            id="email"
                            className="form-control"
                            value={email}
                            onChange={(e) => setEmail(e.target.value)}
                            required
                        />
                    </div>

                    <div className="mb-3">
                        <label htmlFor="password" className="form-label">Password:</label>
                        <input
                            type="password"
                            id="password"
                            className="form-control"
                            value={password}
                            onChange={(e) => setPassword(e.target.value)}
                            required
                        />
                    </div>

                    {errorMessage && <p className="text-danger">{errorMessage}</p>}
                    {successMessage && <p className="text-success">{successMessage}</p>}

                    <button type="submit" className="btn btn-primary w-100">Login</button>
                </form>
            </div>
        </div>
    );
};

export default Login;
