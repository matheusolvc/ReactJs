import { combineReducers } from 'redux'
import { reducer as formReducer } from 'redux-form'
import { reducer as toastrReducer } from 'react-redux-toastr'

import TabReducer from '../common/tab/tabReducer'
import ProductReducer from '../products/productReducer'

const rootReducer = combineReducers({
    tab: TabReducer,
    product: ProductReducer,
    form: formReducer,
    toastr: toastrReducer
})

export default rootReducer