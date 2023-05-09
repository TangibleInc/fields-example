/**
 * Settings page: Change context on select change
 */
window.addEventListener('load', () => {
            
  const select = document.getElementById('tf-context-select')
  
  select.addEventListener('change', () => {

    const url = new URL(location.href);
    const params = new URLSearchParams(url.search)
    
    params.set('context', select.value)

    location.replace(location.protocol + '//' + location.host + location.pathname + '?' + params.toString())
  })
})
