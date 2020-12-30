import axios from 'axios'
// const URL_BASE = process.env.VUE_APP_URL_API || 'http://laravel-services/api'
const URL_BASE = 'http://laravel-services/api'
const axiosInstance = axios.create({
  // baseURL: 'http://127.0.0.1:8000/api'
  baseURL: URL_BASE
})
export default axiosInstance
