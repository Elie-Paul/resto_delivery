import React, { Component } from 'react';

//import Breadcrumb from 'react-bootstrap-breadcrumbs/lib/Breadcrumbs';

export default class LinksHome extends Component{
    render(){
        return(
            <div className="breadcrumbs">
                <div className="breadcrumbs-inner">
                    <div className="row m-0">
                        <div className="col-sm-4">
                            <div className="page-header float-left">
                                <div className="page-title">
                                    <h1>Tableau de bord</h1>
                                </div>
                            </div>
                        </div>
                        <div className="col-sm-8">
                            <div className="page-header float-right">
                                <div className="page-title">
                                    <ol className="breadcrumb text-right">
                                        <li><a href="{{Route('admin')}}">Tableau de bord</a></li>
                                        <li className="active">Name restaurant</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}
