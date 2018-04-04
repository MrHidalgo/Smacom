pageHistory = {
	items:[],
	currentPage: null,
	push: function (item) {
		this.currentPage = item;
		this.items.push(this.currentPage);
	},
	
	replace: function (item) {
		this.currentPage = item;
		this.items[this.items.length-1] = this.currentPage;
	},

	clearLast: function(){
		this.items.pop();
	},
	
	clear: function () {
		this.currentPage = null;
		this.items = [];
	},

	back: function(home) {
        if(this.items.length == 1 || this.items.length == 0  || home == 'home') {
			renderInnerPage(0,'home', 0, 1);
			this.clear();
		} else {
			renderInnerPage(0,this.items[this.items.length-2].template, this.items[this.items.length-2].id, 1);
			this.clearLast();
		}
	}
}