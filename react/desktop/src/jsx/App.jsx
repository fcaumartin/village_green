import '../css/index.css';
import { useState } from 'react';
import { Dropdown } from 'react-bootstrap';

const App = (props) => {

    const [data, setData] = useState([]);

    const handleClick = (event) => {
        // console.log(event)
    }

    return (
        <h1 className='text-center'>
            VillageGreen app
        </h1>
    );
}

export { App };