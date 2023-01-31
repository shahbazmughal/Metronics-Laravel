import React, {useState} from 'react';
import ReactDOM from 'react-dom/client';
import axios from 'axios';

function Login() {

    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");
    const [emailValid, setEmailValid] = useState("");
    const [passwordValid, setPasswordValid] = useState("");
    const [error, setError] = useState(false);
    const [success, setSuccess] = useState(false);

    function isValidEmail(email) {
        return /\S+@\S+\.\S+/.test(email);
    }

    const handleLogin = async () => {
        setEmailValid("is-invalid");
        setPasswordValid("");
        
        if(email === "") {
            setEmailValid("is-invalid");
            setPasswordValid("");
        } else if(!isValidEmail(email)) {
            setEmailValid("is-invalid");
            setPasswordValid("");
        } else if(password === "") {
            setEmailValid("");
            setPasswordValid("is-invalid");
        } else {
            setEmailValid("");
            setPasswordValid("");
            console.log(email, password)

            const values = {email:email, password:password}

            try {
                const res = await axios.post('http://mumara9.live/api/v1/login', values);
                if(res.data.status) {
                    console.log(res.data)
                    localStorage.setItem('user', JSON.stringify(res.data));
                    localStorage.setItem('token', res.data.api_token);
                    setSuccess(true);
                } else {
                    setError(true);
                    localStorage.removeItem('user');
                    localStorage.removeItem('token');
                }
            } catch (error) {
                console.log(error)
            }
        }
    }

    return (
        <>
            <div className="text-center mb-11">
                <a href="/">
                    <img src="/assets/media/logos/logo.png" className="h-50px mb-5" />
                </a>
                <h1 className="text-dark fw-bolder mb-3">
                    Mumara Email Login
                </h1>

                <div className="text-gray-500 fw-semibold fs-6">
                    Provide your login details to proceed.
                </div>
            </div>

            {
                error &&
                <div class="alert bg-danger text-light mb-8" role="alert">
                    Email or password is invalid
                </div>
            }

            {
                success &&
                <div class="alert bg-success text-light mb-8" role="alert">
                    You are login successfully!
                </div>
            }
                

            <div className="fv-row mb-8">
                <input 
                    type="text" 
                    placeholder="Email" 
                    name="email" 
                    autoComplete="off" 
                    className={`form-control bg-transparent ${emailValid}`}
                    id="email"
                    value={email}
                    onChange={(e) => setEmail(e.target.value)}
                />
                <div className="fv-plugins-message-container invalid-feedback">Valid Email address required</div>
            </div>
            <div className="fv-row mb-3">
                <input 
                    type="password" 
                    placeholder="Password" 
                    name="password" 
                    autoComplete="off" 
                    className={`form-control bg-transparent ${passwordValid}`}
                    id="password"
                    value={password}
                    onChange={(e) => setPassword(e.target.value)}
                />
                <div className="fv-plugins-message-container invalid-feedback">Password is required</div>
            </div>
            <div className="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                <div></div>
                <a href="/forgot-password" className="link-success">
                    Forgot Password ?
                </a>
            </div>
            <div className="d-grid mb-10">
                <button 
                    type="submit" 
                    id="kt_sign_in_submit" 
                    className="btn btn-success"
                    onClick={handleLogin}
                >
                    Login
                </button>
            </div>
        </>
    );
}

export default Login;

if (document.getElementById('login')) {
    const Index = ReactDOM.createRoot(document.getElementById("login"));

    Index.render(
        <React.StrictMode>
            <Login/>
        </React.StrictMode>
    )
}
