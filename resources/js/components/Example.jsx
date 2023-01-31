import React, {useState, useEffect} from 'react';
import ReactDOM from 'react-dom/client';
// import axios from 'axios';

function Example() {

    const [topics, setTopics] = useState(null);

    // const getData = async () => {
    //     const res = await axios.get("https://jsonplaceholder.typicode.com/users")
    //     .then((res) => setTopics(res?.data))
    // }

    useEffect(() => {
        // getData();
    },[])

    return (
        <div className="row g-5 g-xl-10 mb-5">
            <div className="col-md-12 col-lg-12 col-xl-12 col-xxl-12 mb-md-5">
                <div className="card card-flush h-xl-100">
                    <div className="card-body pt-6 text-center">
                        <div className="mb-0">
                            <div className="fs-5 fw-bold text-gray-800 text-center mb-0">
                                <span className="me-2">{JSON.stringify(topics)} --- 777</span>      
                            </div>                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Example;

if (document.getElementById('example')) {
    const Index = ReactDOM.createRoot(document.getElementById("example"));

    Index.render(
        <React.StrictMode>
            <Example/>
        </React.StrictMode>
    )
}
