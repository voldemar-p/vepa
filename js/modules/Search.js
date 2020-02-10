
class Search {
    constructor() {
        this.searchOpen = document.querySelector('#search-trigger--js');
        this.searchClose = document.querySelector('.search-close--js');
        this.isSearchOpen = document.querySelector('.search-container');
        this.events();
    }

    events() {
        this.searchOpen.addEventListener('click', this.openSearch.bind(this));
        this.searchClose.addEventListener('click', this.closeSearch.bind(this));
    }

    openSearch() {
        this.isSearchOpen.style.display = 'flex';
    }

    closeSearch() {
        this.isSearchOpen.style.display = 'none';
    }
}

export default Search;
