$(function() {
    view = new View;
    view.listItem();
    $('form').submit(view.submitSearch);
});

View = (function() {
    function View() {
        this.target = $('#info');
    }

    View.prototype.submitSearch = function(e) {
        var text = $('#search-field').val();
        if (text == "") {
            e.preventDefault();
            View.showMassage("噗。。请输入有效字符串");
        }
    }

    View.prototype.listItem = function() {
        if (config.status == 0)
            View.showMassage("没有找到相关结果，请谨慎交易！");
        else {
            View.showMassage("此人可能是骗子。请勿与他交易！。请将相关信息反馈给吧务！");
            for (var i = 0; i < config.result.length; i++) {
                var item = new Item(config.result[i]);
                this.target.append(item.item);
            }
        }
    }

    View.showMassage = function(t) {
        var box = $('#massage-bar');
        box.text(t);
        box.fadeIn(200, function() {
            setTimeout(function() {
                box.fadeOut(400);
            }, 1000);
        });
    }

    return View;
})();

Item = (function() {
    function Item(data) {
        this.item = $('<li/>');
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