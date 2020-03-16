import React, { Component } from 'react'
import { bindActionCreators } from 'redux'
import { connect } from 'react-redux'

import { getList, showUpdate } from './productActions'

class ProductList extends Component {

    componentWillMount() {
        this.props.getList()
        
    }

    renderRows() {
        const list = this.props.list || []
        return list.map(p => (
            <tr key={p.ID}>
                <td>{ p.NOME }</td>
                <td>{ p.GRUPOID }</td>
                <td>{ p.QTDE_CXA }</td>
                <td>{ p.PRECO }</td>
                <td>
                    <button className="btn btn-warning" onClick={() => this.props.showUpdate(p)}>
                        <i className="fa fa-pencil"></i>
                    </button>
                </td>
            </tr>
        ))
    }

    render() {
        return (
            <div>
                <table className="table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Grupo</th>
                            <th>Quantidade</th>
                            <th>Preço</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        { this.renderRows() }
                    </tbody>
                </table>
            </div>
        )
    }
}

const mapStateToProps = state => ({list: state.product.list})
const mapDispatchToProps = dispatch => bindActionCreators({getList, showUpdate}, dispatch)
export default connect(mapStateToProps, mapDispatchToProps)(ProductList)