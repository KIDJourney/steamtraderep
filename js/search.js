$(function() {

});

View = (function() {
    function View() {
        this.target = $('info');
    }

    View.prototype.listItem = function() {
        if (config.status == 0)
            this.showMassage("没有找到相关结果=w=（但不代表此人不是骗子）");
        else {
            for (var i = 0; i < config.result.length; i++) {
                var item = new Item(config.result[i]);
                this.target.append(item.item);
            }
        }
    }

    return View;
})();

Item = (function() {
    function Item(data) {
        this.item = $('<div/>');
        this.data = data;
        this.render();
    }

    Item.prototype.render = function() {
        this.item.addClass('search-item').append(
            $('<span/>').addClass('tiebaid').text(this.data.tiebaid),
            $('<span/>').addClass('steamid').text(this.data.steamid),
            $('<span/>').addClass('idwei64').text(this.data.idwei64),
            $('<span/>').addClass('taobaoid').text(this.data.taobaoid),
            $('<span/>').addClass('zhifubaomail').text(this.data.zhifubaomail),
            $('<span/>').addClass('zhifubaoid').text(this.data.zhifubaoid),
            $('<span/>').addClass('reason').text(this.data.reason)
        );
    }

    return Item;
})();