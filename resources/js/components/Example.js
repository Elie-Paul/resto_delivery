import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import LinksHome from "./admin/LinksHome";

export default class Example extends Component {
    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-12 mt-2">
                        <div className="card">
                            <LinksHome />
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
