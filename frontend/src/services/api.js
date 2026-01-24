import axios from 'axios';

// Create axios instance with default config
const api = axios.create({
    baseURL: 'http://localhost:8000/api', // Default Laravel port
    headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json',
    },
});

// Add a response interceptor to handle common errors if needed
api.interceptors.response.use(
    (response) => response,
    (error) => {
        // You can handle 401/403 errors here globally
        console.error('API Error:', error.response || error.message);
        return Promise.reject(error);
    }
);

export const loginUser = async (email, password) => {
    try {
        const response = await api.post('/login', { email, password });
        return response.data;
    } catch (error) {
        throw error.response?.data?.message || 'Login failed';
    }
};

export default api;
