import React, { Component } from 'react'
import { reduxForm, Field } from 'redux-form'
import { bindActionCreators } from 'redux'
import { connect } from 'react-redux'

import { init } from './productActions'
import labelAndInput from '../common/form/labelAndInput'

class ProductForm extends Component {
    render() {
        const { handleSubmit } = this.props
        return (
            <form role='form' onSubmit={handleSubmit}>
                <div className='box-body'>
                    <Field name='NOME' 
                        component={labelAndInput} 
                        label='Nome'
                        cols='12 6'
                        placeholder='Nome'/>
                    {/* <Field name='GTIN' component='input' />
                    <Field name='REFERENCIA' component='input' />
                    <Field name='GRUPOID' component='input' />
                    <Field name='UNIDADE' component='input' />
                    <Field name='FLG_ATIVO' component='input' />
                    <Field name='FLG_EXCLUIDO' component='input' />
                    <Field name='FLG_FRACIONA' component='input' />
                    <Field name='FLG_BALANCA' component='input' />
                    <Field name='NCM' component='input' />
                    <Field name='CEST' component='input' />
                    <Field name='CST_ORIGEM' component='input' />
                    <Field name='SUBSTITUICAO_TRIB' component='input' />
                    <Field name='QTDE_CXA' component='input' />
                    <Field name='VALIDADE' component='input' />
                    <Field name='PRCUSTO' component='input' />
                    <Field name='PRECO' component='input' /> */}
                </div>
                <div className='box-footer'>
                    <button type='submit' className='btn btn-primary'>Submit</button>
                    <button type='button' className='btn btn-default' onClick={this.props.init}>Cancelar</button>
                </div>
            </form>
        )
    }
}

ProductForm = reduxForm({form: 'productForm', destroyOnUnmount: false})(ProductForm)
const mapDispatchToProps = dispatch => bindActionCreators({init}, dispatch)
export default connect(null, mapDispatchToProps)(ProductForm)