Nova.booting((Vue, router, store) => {
    Vue.component('index-nova-id-link', require('./components/IndexField'))
    Vue.component('detail-nova-id-link', require('./components/DetailField'))
})
