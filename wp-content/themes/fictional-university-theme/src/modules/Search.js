import $ from 'jquery';

class Search {
    //area 1: describe and create/initiate our object
    constructor() {
        this.addSearchHTML();
        this.resultsDiv = $("#search-overlay__results");
        this.openButton = $(".js-search-trigger");
        this.closeButton = $(".search-overlay__close");
        this.searchOverlay = $(".search-overlay");
        this.searchField = $("#search-term");
        this.events();
        this.isOverlayOpen = false;
        this.isSpinnerVisible = false;
        this.typingTimer;
        this.previousValue;
    }
    //area 2: Events
    events(){
        this.openButton.on("click", this.openOverlay.bind(this));
        this.closeButton.on("click", this.closeOverlay.bind(this));
        $(document).on("keydown", this.keyPressDispatcher.bind(this));
        this.searchField.on("keyup", this.typingLogic.bind(this));
    }
    //area 3: methods (function, action..)
    typingLogic(){
        if(this.searchField.val() != this.previousValue){

            clearTimeout(this.typingTimer);
            if(this.searchField.val()){
                if (!this.isSpinnerVisible){
                    this.resultsDiv.html('<div class="spinner-loader"></div>');
                    this.isSpinnerVisible = true;
                }
                this.typingTimer = setTimeout( this.getResults.bind(this), 750);
            }else{
                this.resultsDiv.html('');
                this.isSpinnerVisible = false;

            }

        }
        this.previousValue = this.searchField.val();
    }

    getResults(){
        $.getJSON(universityData.root_url + '/wp-json/university/v1/search?term=' + this.searchField.val(), (results) =>{
            this.resultsDiv.html(`
            <div class="row">
                <div class="one-third">
                    <h2 class="search-overlay__section-title">General Information</h2>
                    ${results.generalInfo.length ? '<ul class="link-list min-list">' : '<p>No general information matches that search</p>'}
                    ${results.generalInfo.map(item => ` <li><a href="${item.link}">${item.title.rendered}</a> ${item.type == 'post' ? `by ${item.authorName}` : ''} </li>`).join('')}
                    ${results.generalInfo.length ? '</>' : ' '}
                </div>
                <div class="one-third">
                    <h2 class="search-overlay__section-title">Programs</h2>

                    <h2 class="search-overlay__section-title">Professors</h2>
                </div>
                <div class="one-third">
                    <h2 class="search-overlay__section-title">Campuses</h2>

                    <h2 class="search-overlay__section-title">Events</h2>
                </div>
            </div>
            `);
        });
    }
    openOverlay(){
        this.searchOverlay.addClass("search-overlay--active");
        $("body").addClass("body-no-scroll");
        this.searchField.val('');
        setTimeout(() => this.searchField.trigger('focus'), 301);
        this.isOverlayOpen = true;
    }
    closeOverlay(){
        this.searchOverlay.removeClass("search-overlay--active");        
        $("body").removeClass("body-no-scroll");
        this.isOverlayOpen=false;
    }
    keyPressDispatcher(e){
        if(e.keyCode == 83 && !this.isOverlayOpen && !$("input, textarea").is(':focus')){
            this.openOverlay();
        }
        if(e.keyCode == 46 && this.isOverlayOpen){
            this.closeOverlay();
        }
        
    }

    addSearchHTML(){
        $("body").append(`
              <div class="search-overlay">
              <div class="search-overlay__top">
                <div class="container">
                  <i class="fa fa-search search-overlay__icon" aria-hidden="true"></i>
                  <input type="text" class="search-term" placeholder="What are you looking for?" id="search-term">
                  <i class="fa fa-window-close search-overlay__close" aria-hidden="true"></i>
                </div>
              </div>  
              <div class="container">
                <div id="search-overlay__results">

                </div>
              </div>
            </div>
        `);
    }

    
}

export default Search