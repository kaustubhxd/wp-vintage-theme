
const searchBox = document.querySelector('.search-box-container')

const onLoad = () => {
    searchBox.style.right = `-${searchBox.offsetWidth + 50}px`
    setTimeout(() => {
        searchBox.style.transition = '0.5s right ease-in-out'
    }, 500)
}

document.querySelector('.search-field').addEventListener('blur', (e) => {
    console.log(e)
    searchBox.style.right = `-${searchBox.offsetWidth + 50}px`
})

document.querySelector('.search-box').addEventListener('click', () => {
    console.log('search-box')
    searchBox.style.opacity = 1
    searchBox.style.right = '0%'

    setTimeout(() => {
        document.querySelector('.search-field').focus()
    }, 500)
})

onLoad()