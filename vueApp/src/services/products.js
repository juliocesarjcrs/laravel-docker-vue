import axios from '../plugins/axiosConfig'
export const listProducts = () => axios.get('products')
export const PostProducts = (payload) => axios.post('products', payload)
