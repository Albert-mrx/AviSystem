window.addEventListener('load', () => {
    const available = document.querySelector('#select-stock')
    console.log('available', available)
    const { dataTable } = new HSDataTable('#datatable-filter')

    dataTable.search.fixed('stock', (searchStr, data, index) => {
      const isAvaiable = available.value === 'all' ? '' : available.value
      const parser = new DOMParser()
      const name = parser.parseFromString(data[3], 'text/html').body.textContent.trim()

      return isAvaiable === name || isAvaiable === ''
    })
    available.addEventListener('change', () => dataTable.draw())
})


