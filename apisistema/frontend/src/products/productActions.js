import axios from 'axios'
import { toastr } from 'react-redux-toastr'
import { reset as resetForm, initialize } from 'redux-form'
import { showTabs, selectTab } from '../common/tab/tabActions'

const BASE_URL = 'http://127.0.0.1:8000/api'
const INITIAL_VALUES = {}

export function getList() {
    const request = axios.get(`${BASE_URL}/produtos`)
    return {
        type: 'PRODUCTS_FETCHED',
        payload: request
    }
}

export function create(values) {
   return submit(values, 'post')
}

export function update(values) {
    return submit(values, 'put')
}

function submit(values, method) {

    return dispatch => {
        const id = values.ID ? values.ID : ''
        axios[method](`${BASE_URL}/produtos/${id}`, values)
            .then(resp => {
                toastr.success('Sucesso', 'Operação Realizada com Sucesso!')
    
            dispatch (init())
        })
        .catch(e => {
            e.response.data.errors.forEach(error => toastr.error('Erro', error))
            //console.log(e.response.data)
        })
    }

}

export function showUpdate(product) {
    return [
        showTabs('tabUpdate'),
        selectTab('tabUpdate'),
        initialize('productForm', product)
    ]
}

export function init() {
    return [
        showTabs('tabList', 'tabCreate'),
        selectTab('tabList'),
        getList(),
        initialize('productForm', INITIAL_VALUES)
    ]
}
